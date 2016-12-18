/* 
 * 
 */
Ext.define('Melisa.driver.view.desktop.identitys.Tracking', {
    extend: 'Ext.tab.Panel',
    
    requires: [
        'Melisa.driver.view.desktop.identitys.TrackingController',
        'Melisa.driver.model.Markers',
        'Ext.ux.GMapPanel'
    ],
    
    controller: 'appdrivertracking',
    xtype: 'appdriverdesktopidentitystracking',
    viewModel: {
        data: {
            gpsActive: false,
            serviceAvailable: false
        },
        stores: {
            markers: {
                id: 'markers',
                model: 'Melisa.driver.model.Markers',
                sorters: {
                    property: 'duration',
                    direction: 'ASC'
                },
                proxy: {
                    type: 'ajax',
                    url: '{urlIdentitysCoordinates}',
                    reader: {
                        rootProperty: 'f',
                        totalProperty: 'ta'
                    }
                },
                listeners: {
                    load: 'onStoreLoadMarkers'
                }
            }
        }
    },
    items: [
        {
            title: 'Mapa',
            layout: 'fit',
            items: [
                {
                    xtype: 'gmappanel',
                    gmapType: 'map',
                    reference: 'gmappanel',
                    center: {
                        geoCodeAddr: "Manzanillo, Colima"
                    },
                    mapOptions: {
                        mapTypeControl: false,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.RIGHT_CENTER
                        },
                        streetViewControlOptions: {
                            position: google.maps.ControlPosition.RIGHT_CENTER
                        }
                    },
                    listeners: {
                        mapready: 'onMapReady'
                    }
                }
            ]
        },
        {
            title: 'Lista'
        }
    ]
});
