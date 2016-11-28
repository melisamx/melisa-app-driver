Ext.define('Melisa.driver.view.phone.passengers.profile.ViewWrapper', {
    extend: 'Melisa.panel.ux.Wrapper',
    
    requires: [
        'Melisa.driver.view.phone.passengers.profile.View',
        'Melisa.driver.view.desktop.passengers.profile.ViewController',
        'Melisa.core.Module'
    ],
    
    mixins: [
        'Melisa.core.Module'
    ],
    
    controller: 'driverpassengersprofileview',
    viewModel: {},    
    items: [
        {
            xtype: 'driverpassengersprofileview'
        }
    ]
    
});
