Ext.define('Melisa.driver.view.universal.TrackingLocation', {
    alias: 'widget.trackinglocation',
    
    mixins: [
        'Ext.mixin.Observable'
    ],
    
    config: {
        url: null,
        store: null,
        localLocation: null,
        retryTime: 5000,
        lastLocation: null,
        geo: null
    },
    
    constructor: function(config) {
        
        this.mixins.observable.constructor.call(this, config);
        
        var me = this,
            geo = Ext.create('Ext.util.GeoLocation', {
                autoUpdate: false,
                allowHighAccuracy: true,
                listeners: {
                    locationerror: me.onLocationError,
                    locationupdate: me.onLocationUpdate,
                    scope: me
                }
            });
            
        me.setGeo(geo);
        
    },
    
    init: function() {
        
        this.getGeo().updateLocation();
        
    },
    
    getLocation: function() {
        
        var me = this;
        
        me.getGeo().updateLocation(me.onSuccessInitGetLocation, me);
        
    },
    
    onLocationUpdate: function(geo) {
        
        var me = this,
            location = {
                latitude: geo.getLatitude(),
                longitude: geo.getLongitude()
            };
        
        me.setLastLocation(location);
        
        this.fireEvent('successgetlocation', this, location);
        
    },
    
    onLocationError: function(geo, timeout, permissionDenied , locationUnavailable , message) {
        
        this.fireEvent('errorgetlocation', geo, this.getLastLocation(), timeout, permissionDenied , locationUnavailable , message);
        
    }
    
});
