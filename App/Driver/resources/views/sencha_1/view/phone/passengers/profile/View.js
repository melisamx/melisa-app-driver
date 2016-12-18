Ext.define('Melisa.driver.view.phone.passengers.profile.View', {
    extend: 'Ext.form.Panel',
    
    alias: 'widget.driverpassengersprofileview',
    
    defaultType: 'textfield',
    bodyPadding: 15,
    defaults: {
        anchor: '100%'
    },
    items: [
        {
            bind: {
                label: '{i18n.txtName}'
            }
        }
    ]
});
