Ext.define('Melisa.driver.view.phone.passenger.dashboard.Header', {
    extend: 'Ext.TitleBar',
    alias: 'widget.driverpassengerdashboardheader',
    
    docked: 'top',
    items: [
        {
            xtype: 'button',
            iconCls: 'x-fa fa fa-bars',
            reference: 'btnTitle',
            bind: {
                text: '{appName}'
            },
            listeners: {
                tap: 'onTapBtnDriver'
            }
        }
    ]
    
});