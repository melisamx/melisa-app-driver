
Ext.define('Melisa.driver.view.phone.Menu', {
    extend: 'Ext.Menu',
    
    alias: 'widget.appdrivermenu',
    showAnimation: 'fadeIn',
    hideAnimation: 'fadeOut',
    width: '90%',
    
    items: [
        {
             text: 'Settings',
             iconCls: 'settings'
         },
         {
             text: 'New Item',
             iconCls: 'compose'
         },
         {
             text: 'Star',
             iconCls: 'star'
         }
    ]
});
