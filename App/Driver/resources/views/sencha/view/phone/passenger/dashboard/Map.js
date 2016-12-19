Ext.define('Melisa.driver.view.phone.passenger.dashboard.Map', {
    extend: 'Ext.ux.google.Map',    
    alias: 'widget.driverpassengermap',
    
    requires: [
        'Ext.ux.google.Map',
        'Melisa.ux.google.maps.MarkerLabel'
    ],
    
    reference: 'map',
    hideAnimation: 'slideOut',
    publishes: [
        'hidden'
    ],
    listeners: {
        centerchange: 'onMapCenterChange',
        maprender: 'onMapRender'
    },
    mapOptions: {
        zoom: 14,
        mapTypeControl: false,
        center: {
            latitude: 19.070118,
            longitude: -104.3035708
        },
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        streetViewControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        }
    },
    showAnimation: {
        type: 'slide',
        direction: 'right'
    }
    
});
