
Ext.define('Melisa.driver.view.phone.Main', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.phone.MainController',
        'Melisa.driver.view.phone.Markers',
        'Melisa.driver.view.phone.Map',
        'Melisa.driver.model.Markers'
    ],
    
    controller: 'appdrivermaincontroller',
    layout: 'card',
    cls: 'app-driver-main',
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
                    url: '{urlDriversFree}',
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
        /* top titlebar */
        {
            xtype: 'titlebar',
            docked: 'top',
            items: [
                {
                    xtype: 'button',
                    iconCls: 'fa fa-bars',
                    reference: 'btnTitle',
                    text: 'Driver',
                    listeners: {
                        tap: 'onTapBtnTitle'
                    }
                },
                {
                    xtype: 'button',
                    reference: 'btnMore',
                    iconCls: 'fa fa-car',
                    align: 'right',
                    listeners: {
                        tap: 'onTabBtnList'
                    },
                    bind: {
                        hidden: '{map.hidden}'
                    }
                },
                {
                    xtype: 'button',
                    reference: 'btnMap',
                    iconCls: 'fa fa-map',
                    align: 'right',
                    hidden: true,
                    listeners: {
                        tap: 'onTabBtnMap'
                    },
                    bind: {
                        hidden: '{conMarkers.hidden}'
                    }
                }
            ]
        },
        /* bottom actions */
        {
            xtype: 'toolbar',
            cls: 'main-actions',
            docked: 'bottom',
            reference: 'tbMainActions',
            bind: {
                hidden: '{!gpsActive}'
            },
            items: [
                {
                    xtype: 'button',
                    reference: 'btnVen',
                    bind: {
                        disabled: '{!serviceAvailable}'
                    },
                    flex: 1,
                    text: 'VEN POR MI'
                }
            ]
        },
        {
            xtype: 'appdrivermap',
            reference: 'map'
        },
        {
            xtype: 'appdrivermarkers',
            reference: 'conMarkers'            
        }
    ]

});
