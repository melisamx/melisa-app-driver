Ext.define('Melisa.driver.view.phone.passenger.dashboard.Wrapper', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.phone.passenger.dashboard.WrapperController',
        'Melisa.driver.view.phone.passenger.dashboard.Header'
    ],
    
    controller: 'driverpassengerdashboard',
    layout: 'card',
    viewModel: {},
    items: [
        {
            xtype: 'driverpassengerdashboardheader'
        }
    ]
});