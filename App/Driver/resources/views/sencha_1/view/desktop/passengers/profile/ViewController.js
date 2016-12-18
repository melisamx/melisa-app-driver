Ext.define('Melisa.driver.view.desktop.passengers.profile.ViewController', {
    extend: 'Ext.app.ViewController',
    
    alias: 'controller.driverpassengersprofileview',
    
    requires: [
        'Melisa.core.module.Create'
    ],
    
    mixins: [
        'Melisa.core.module.Create'
    ],
    
    onClickBtnSave: function() {
        
        this.save();
        
    }
    
});