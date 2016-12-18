/**
 * View main app driver
 */
Ext.define('Melisa.driver.view.phone.driver.Main', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.phone.driver.MainController'
    ],
    
    controller: 'appdriverdrivermaincontroller',
    layout: 'card',
    viewModel: {
        data: {
            tracking: false
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
                    text: 'Driver'
                },
                {
                    xtype: 'togglefield',
                    align: 'right',
                    reference: 'togOnLine',
                    flex: 1,
                    bind: {
                        hidden: '{!tracking}'
                    }
                }
            ]
        }
    ]
    
});
