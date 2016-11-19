/* 
 */
Ext.define('Melisa.driver.view.desktop.MainController', {
    extend: 'Melisa.core.ViewController',
    
    alias: 'controller.appdrivermain',
    
    requires: [
        'Melisa.driver.ux.Loader'
    ],
    
    onRender: function() {
        
        Ext.create('Melisa.driver.ux.Loader').destroy();
        
    }
});

