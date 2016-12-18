Ext.define('Melisa.driver.view.phone.driver.dashboard.Header', {
    extend: 'Ext.TitleBar',
    alias: 'widget.driverdriverdashboardheader',
    
    docked: 'top',
    items: [
        {
            xtype: 'button',
            iconCls: 'x-fa fa fa-bars',
            reference: 'btnTitle',
            text: 'Driver',
            listeners: {
                tap: 'onTapBtnDriver'
            }
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
    
});