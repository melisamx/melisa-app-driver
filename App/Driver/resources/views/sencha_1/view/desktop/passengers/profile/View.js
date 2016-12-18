Ext.define('Melisa.driver.view.desktop.passengers.profile.View', {
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
                fieldLabel: '{i18n.txtName}'
            }
        }
    ]
});
