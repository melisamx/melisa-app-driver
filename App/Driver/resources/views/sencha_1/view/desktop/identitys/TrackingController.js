/* 
 */
Ext.define('Melisa.driver.view.desktop.identitys.TrackingController', {
    extend: 'Melisa.core.ViewController',
    
    requires: [
        'Melisa.driver.ux.TrackingLocation',
        'Melisa.driver.ux.Socket',
        'Melisa.driver.ux.Status'
    ],
    
    alias: 'controller.appdrivertracking',
    
    config: {
        trackingLocation: null,
        socket: null
    },
    
    onRender: function() {
        
        var me = this,
            config = Ext.manifest.melisa,
            vm = me.getViewModel();
        
        vm.set('urlIdentitysCoordinates', config.urls.identitiesCoordinates);
    
    },
    
    onStoreLoadMarkers: function(store, records) {
        
        var me = this,
            gmap = me.lookupReference('gmappanel').gmap;
        
        store.each(function(record) {
            
            if( record.get('marker')) {
                
                return;
                
            }
            
            if( Ext.isEmpty(record.data.latitude)) {
                
                console.log('ignore record, no coordinate', record);
                return;
                
            }
            
            var marker = new google.maps.Marker({
                map: gmap,
                position: {
                    lat: record.get('latitude'),
                    lng: record.get('longitude')
                },
                icon: '/driver/img/marker-driver-28.png'
            });
            
            record.set('gmarker', marker);
            
        });
        
    },
    
    onMapReady: function() {
        
        var me = this,
            stoMarkers = me.getViewModel().getStore('markers'),
            socket = Ext.create('Melisa.driver.ux.Socket');
        
        if( !socket.init()) {
            
            Ext.Msg.alert(
                'Conexión invalida', 
                'Imposible conectar con el servidor, verifique su conexión a internet', 
                function() {
//                    window.location.reload();
                }
            );
            
            return;
            
        }
        
        socket.on('driver update location', function() {
            
            me.onUpdateDriverLocation.apply(me, arguments);
            
        });
        socket.on('driver update status', function() {
            
            me.onUpdateDriverStatus.apply(me, arguments);
            
        });
        
        stoMarkers.load();
    
    }
    
});
