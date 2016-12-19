Ext.define('Melisa.driver.view.phone.passenger.dashboard.Wrapper', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.phone.passenger.dashboard.WrapperController',
        'Melisa.driver.view.phone.passenger.dashboard.Header',
        'Melisa.driver.view.phone.passenger.dashboard.Map'
    ],
    
    controller: 'driverpassengerdashboard',
    layout: 'card',
    viewModel: {
        data: {
            markerUser: null
        }
    },
    items: [
        {
            xtype: 'driverpassengerdashboardheader'
        },
        {
            xtype: 'driverpassengermap'
        },
        {
            xtype: 'button',
            reference: 'btnVexmi',
            text: 'Ven por mi',
            cls: 'button-vexmi',
            docked: 'bottom',
            listeners: {
                tap: 'onTapBtnVexmi'
            }
        }
    ]
});
