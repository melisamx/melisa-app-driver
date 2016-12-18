Ext.define('Melisa.driver.view.phone.driver.MainController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.appdriverdrivermaincontroller',
    
    requires: [
        'Melisa.driver.ux.Loader',
        'Melisa.driver.ux.TrackingLocation',
        'Melisa.driver.ux.Socket',
        'Melisa.driver.ux.Status'
    ],
    
    config: {
        trackingLocation: null,
        mask: null,
        status: 'offline',
        socket: null
    },
    
    onChangeTogOnLine: function(toggle, newValue) {
        
        var me = this,
            mask = me.createMask();
        
        toggle.disable();
        
        mask.down('loadmask').setMessage(newValue ? 'En linea' : 'Fuera de linea');
        mask.show();
        me.changeStatus(newValue ? 'online': 'offline');
        
    },
    
    changeStatus: function(status) {
        
        var me = this,
            config = Ext.manifest.melisa,
            urls = config.urls,
            currenLocation = me.getTrackingLocation().getCurrentLocation();
        
        me.setStatus(status);
        
        Ext.Ajax.request({
            url: urls[status],
            scope: me,
            params: {
                latitude: Ext.util.Format.round(currenLocation.latitude, 6),
                longitude: Ext.util.Format.round(currenLocation.longitude, 6)
            },
            successConfig: status,
            success: me.onSuccessChangeStatus,
            failure: me.onErrorChangeStatus
        });
        
    },
    
    onSuccessChangeStatus: function(request, ajax) {
        
        var me = this,
            response = Ext.decode(request.responseText, true),
            mask = me.createMask();
        
        if( !response || !response.success) {

            me.onErrorChangeStatus.call(me, request, ajax);
            return;
            
        }
        
        console.log('onSuccessChangeStatus');
        me.lookupReference('togOnLine').enable();
        mask.hide();
        me.getSocket().emit('driver update status', {
            id: response.id.idDriver,
            idDriverStatus: response.id.idDriverStatus,
            latitude: response.id.latitude,
            longitude: response.id.longitude
        });
        
    },
    
    onErrorChangeStatus: function(request, ajax) {
        
        var me = this,
            response = Ext.decode(request.responseText, true),
            togOnLine = me.lookupReference('togOnLine'),
            mask = me.createMask();
        
        togOnLine.suspendEvent('change');
        togOnLine.setValue(ajax.successConfig === 'online' ? 0 : 1);
        togOnLine.enable();
        togOnLine.resumeEvent('change');
        mask.hide();
        
    },
    
    createMask: function(text) {
        
        var me = this,
            mask = me.getMask();
    
        if(mask) {
            
            return mask;
            
        }
        
        me.setMask(Ext.Viewport.add({
            masked: {
               xtype: 'loadmask',
               message: text
            }
        }));
        
        return me.getMask();
        
    },
    
    onRender: function() {
        
        var me = this,
            config = Ext.manifest.melisa,
            driver = config.driver,
            togOnLine = me.lookupReference('togOnLine'),
            trackingLocation = Ext.create('Melisa.driver.ux.TrackingLocation', {
                url: config.urls.tracking,
                listeners: {
                    updatelocation: me.onUpdateLocation,
                    errornotifylocation: me.onErrorNotifyLocation,
                    allsuccessnotifylocation: me.onAllSuccessNotifyLocation,
                    successgetinitlocation: me.onSuccessGetInitLocation,
                    scope: me
                }
            }),
            socket = Ext.create('Melisa.driver.ux.Socket');
        
        Ext.create('Melisa.driver.ux.Loader').destroy();
        
        if(driver.idDriverStatus === Melisa.driver.ux.Status.driver.OFFLINE) {
            
            togOnLine.setValue(0);
            
        } else {
            
            togOnLine.setValue(1);
            
        }
        
        togOnLine.on('change', me.onChangeTogOnLine, me);
        me.setTrackingLocation(trackingLocation);
        me.setSocket(socket);
        
        if( !socket.init()) {
            
            Ext.Msg.alert(
                'Conexión invalida', 
                'Imposible conectar con el servidor, verifique su conexión a internet', 
                function() {
                    window.location.reload();
                }
            );
            
            return;
            
        }
        
        trackingLocation.init();
        
    },
    
    onConnectSocket: function() {
        
        var me = this;
        console.log('onConnectSocket');
        me.getTrackingLocation().init();
        
    },
    
    onSuccessGetInitLocation: function(geo, location) {
        
        var me = this,
            vm = me.getViewModel(),
            config = Ext.manifest.melisa,
            driver = config.driver,
            sokect = me.getSocket();
        
        vm.set('tracking', true);
        sokect.emit('identitys connect', {
            id: driver.id,
            latitude: location.latitude,
            longitude: location.longitude
        });
        
    },
    
    onAllSuccessNotifyLocation: function() {
        
        console.log('onAllSuccessNotifyLocation');
        
    },
    
    onErrorNotifyLocation: function() {
        
        console.log('onErrorNotifyLocation');
        
    },
    
    onUpdateLocation: function(location) {
        
        var me = this,
            driver = Ext.manifest.melisa.driver;
        
        console.log('onUpdateLocation', arguments);
        
        me.getSocket().emit('driver update location', {
            id: driver.id,
            latitude: location.latitude,
            longitude: location.longitude
        });
        
    }
    
});
