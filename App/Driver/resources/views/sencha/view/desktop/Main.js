/*
 * 
 */
Ext.define('Melisa.driver.view.desktop.Main', {
    extend: 'Ext.container.Viewport',
    
    requires: [
        'Melisa.driver.view.desktop.identitys.Tracking',
        'Melisa.driver.view.desktop.MainController'
    ],
    
    controller: 'appdrivermain',
    border: false,
    layout: 'border',
    cls: 'app',
    items: [
        {
            region: 'west',
            width: 350,
            cls: 'west',
            minWidth: 350
        },
        {
            region: 'center',
            cls: 'center',
            layout: 'fit',
            items: [
                {
                    xtype: 'appdriverdesktopidentitystracking'
                }
            ]
        },
        {
            region: 'north',
            cls: 'top',
            height: 80,
            layout: 'border',
            items: [
                {
                    xtype: 'toolbar',
                    region: 'west',
                    cls: 'top-west',
                    width: 350,
                    items: [
                        {
                            xtype: 'button',
                            iconCls: 'fa fa-bars',
                            scale: 'large',
                            width: '100%',
                            cls: 'btnMain',
                            text: 'DRIVER'
                        }
                    ]
                },
                {
                    xtype: 'toolbar',
                    region: 'center',
                    items: [
                        {
                            text: 'Status'
                        },
                        '->',
                        {
                            text: 'Luis Heredia'
                        }
                    ]
                }
            ]
        }
    ]
    
});
