
Ext.define('Melisa.driver.view.phone.Map', {
    extend: 'Ext.Map',
    
    alias: 'widget.appdrivermap',
    
    hideAnimation: 'slideOut',
    publishes: [
        'hidden'
    ],
    listeners: {
        centerchange: 'onMapCenterChange',
        maprender: 'onMapRender'
    },
    center: {
        geoCodeAddr: "Manzanillo, Colima"
    },
    mapOptions: {
        zoom: 17,
        mapTypeControl: false,
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
