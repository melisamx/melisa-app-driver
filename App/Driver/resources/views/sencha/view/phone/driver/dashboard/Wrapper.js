Ext.define('Melisa.driver.view.phone.driver.dashboard.Wrapper', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.phone.driver.dashboard.WrapperController',
        'Melisa.driver.view.phone.driver.dashboard.Header'
    ],
    
    controller: 'driverdriverdashboard',
    layout: 'card',
    viewModel: {},
    items: [
        {
            xtype: 'driverdriverdashboardheader'
        }
    ]

});
