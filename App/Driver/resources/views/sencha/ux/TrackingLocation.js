/* 
 * Tracking location
 */
Ext.define('Melisa.driver.ux.TrackingLocation', {
    
    mixins: [
        'Ext.mixin.Observable'
    ],
    
    config: {
        url: null,
        store: null,
        localLocation: null,
        retryTime: 5000
    },
    
    constructor: function(config) {
        
        this.mixins.observable.constructor.call(this, config);
        
    },
    
    getCurrentLocation: function() {
        
        var me = this,
            localLocation = me.getLocalLocation();
    
        return Ext.decode(localLocation.getItem('current'));
        
    },
    
    onAddLocation: function(store, records, index) {
        
        var me = this,
            last = store.last(),
            record = records[0];
        
        if(last.data.id === record.data.id) {
            
            console.log('es el unico');
            me.notify(record);
            
        } else {
            
            console.log('notify el ultimo');
            me.notify(last);
            
        }
        
    },
    
    notify: function(record) {
        
        var me = this,
            url = me.url;
            
        if( !record) {
            
            console.log('record invalid, ignore notify');            
            return;
            
        }
        
        if(record.data.notice) {

            console.log('notice true');
            return;

        }
        
        record.set('notice', true);
        
        Ext.Ajax.request({
            url: me.getUrl(),
            scope: me,
            params: {
                latitude: Ext.util.Format.round(record.get('latitude'), 6),
                longitude: Ext.util.Format.round(record.get('longitude'), 6)
            },
            success: me.onSuccessNotifyLocation,
            successConfig: record,
            failure: me.onErrorFailureNotifyLocation
        });
        
    },
    
    onErrorFailureNotifyLocation: function(request, ajax) {
        
        var me = this,
            store = me.getStore(),
            record = ajax.successConfig;
        
        console.log('onErrorFailureNotifyLocation');
        record.set('notice', false);
        store.sync();
        me.fireEvent('errornotifylocation', store, record);
        
        setTimeout(function() {
            
            me.notify(store.last());
            
        }, me.getRetryTime());
        
    },
    
    onSuccessNotifyLocation: function(request, ajax) {
        
        var me = this,
            store = me.getStore(),
            response = Ext.decode(request.responseText, true);
        
        if( !response || !response.success) {
            
            me.onErrorFailureNotifyLocation.call(me, request, ajax);
            return;
            
        }
        
        store.remove(ajax.successConfig);
        store.sync();
        console.log('success notify location');
        
        setTimeout(function() {
            
            me.notify(store.last());
            
        }, me.getRetryTime());
        
    },
    
    init: function() {
        
        var me = this,
            store = Ext.create('Ext.data.Store', {
                fields: ['id', 'latitude', 'longitude', 'dateCreation', 'notified', 'notice', 'speed'],
                extend: 'Ext.data.Model',
                sorters: {
                    property: 'dateCreation',
                    direction: 'DESC'
                },
                id: 'trackingLocation',
                proxy: {
                    type: 'localstorage',
                    id  : 'tracking-locations'
                },
                listeners: {
                    add: me.onAddLocation,
                    load: me.onLoadStore,
                    remove: me.onRemoveLocation,
                    scope: me
                }
            }),
            geo = Ext.create('Ext.util.GeoLocation', {
                autoUpdate: true,
                frequency: 5000,
                allowHighAccuracy: true,
                listeners: {
                    locationerror: me.onErrorInitGetLocation,
                    scope: me
                }
            }),
            localLocation = Ext.create('Ext.util.LocalStorage', {
                id: 'tracking-current'
            });
        
        me.setStore(store);
        me.setLocalLocation(localLocation);
        store.load();
        geo.updateLocation(me.onSuccessInitGetLocation, me);
        
    },
    
    onRemoveLocation: function(store) {
        
        if( store.getCount() !== 0) {
            
            return;
            
        }
        
        this.fireEvent('allsuccessnotifylocation');
        
    },
    
    onLoadStore: function() {
        
        var me = this,
            store = me.getStore();
        
        if( !store.getCount()) {
            
            console.log('no items in load store');
            return;
            
        }
        
        console.log('store items not notice');
        me.notify(store.last());
        
    },
    
    onSuccessInitGetLocation: function(geo) {
        
        var me = this,
            localLocation = me.getLocalLocation(),
            currentLocation = localLocation.getItem('current'),
            location = {
                latitude: geo.getLatitude(),
                longitude: geo.getLongitude(),
                dateCreation: geo.getTimestamp()
            };
    
        if( !currentLocation) {
            
            localLocation.setItem('current', Ext.encode(location));
            
        }
        
        geo.un('locationerror', me.onErrorInitGetLocation);
        
        geo.on({
            locationerror: me.onUpdateLocationError,
            locationupdate: me.onUpdateLocation,
            scope: me
        });
        
        me.fireEvent('successgetinitlocation', geo, location);
        
    },
    
    onUpdateLocation: function(geo) {
        
        var me = this,
            store = me.getStore(),
            localLocation = me.getLocalLocation(),
            currentLocation = Ext.decode(localLocation.getItem('current'), true),
            location = {
                latitude: geo.getLatitude(),
                longitude: geo.getLongitude(),
                speed: geo.getSpeed(),
                dateCreation: geo.getTimestamp()
            };
        
        if( currentLocation) {
            
            if( location.latitude === currentLocation.latitude || 
                location.longitude === currentLocation.longitude) {

                console.log('location no change', location);
                return;

            }
            
        }
        
        console.log('location change', location);
        localLocation.setItem('current', Ext.encode(location));
        store.add(location);
        store.sync();
        
        me.fireEvent('updatelocation', location);
        
    },
    
    onUpdateLocationError: function() {
        
        console.log('onUpdateLocationError');
        
    },
    
    onErrorInitGetLocation: function() {
        console.log('onErrorInitGetLocation');
    }
    
});
