Ext.define('Melisa.driver.view.phone.passenger.dashboard.WrapperController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.driverpassengerdashboard',
    
    requires: [
        'Melisa.ux.Loader',
        'Melisa.view.phone.menu.Modal',
        'Melisa.driver.view.universal.TrackingLocation'
    ],
    
    config: {
        trackingLocation: null
    },
    
    onRender: function() {
        
        var me = this,
            config = Ext.manifest.melisa,
            vm = me.getViewModel(),
            trackinglocation = Ext.create('widget.trackinglocation', {
                listeners: {
                    successgetlocation: me.onSuccessGetLocation,
                    errorgetlocation: me.onErrorGetLocation,
                    scope: me
                }
            });
        
        vm.setData(config);
        me.setTrackingLocation(trackinglocation);
    
        trackinglocation.init();
        
    },
    
    onErrorGetLocation: function() {
        
        console.log('error', arguments);
        
    },
    
    onSuccessGetLocation: function(t, location) {
        
        var me = this,
            vm = me.getViewModel(),
            map = me.lookup('map'),
            gmap = map.getMap(),
            markerUser = vm.get('markerUser');
    
        me.log('on success get location', location);
        
        if( !markerUser) {
            
            markerUser = new google.maps.Marker({
                map: gmap,
                position: {
                    lat: location.latitude,
                    lng: location.longitude
                },
                icon: '/driver/icons/marker-user.png'
            });
            
            vm.set('markerUser', markerUser);
            
        }
        
    },
    
    onTapBtnVexmi: function() {
        
        var me = this,
            trackingLocation = me.getTrackingLocation();
    
        trackingLocation.getLocation();
        
    },
    
    onTapBtnDriver: function() {
        
        var me = this,
            menu = me.getMenu();
        
        menu.show();
        
    },
    
    onMapCenterChange: function() {
        
        console.log('onMapCenterChange', arguments);
        
    },
    
    onMapRender: function() {
        
        console.log('onMapRender', arguments);
        
    },
    
    getMenu: function() {
        
        var me = this;
        
        if( !me.menu) {
            
            me.menu = Ext.create('widget.apppanelmenumodal', {
                viewModel: me.getViewModel()
            });            
            Ext.Viewport.add(me.menu);
            
        }
        
        return me.menu;
        
    }
    
});
