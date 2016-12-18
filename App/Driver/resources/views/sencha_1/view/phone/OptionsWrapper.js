
Ext.define('Melisa.driver.view.phone.OptionsWrapper', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.TreeOptions'
    ],
    
    alias: 'widget.appdriveroptionswrapper',
    layout: 'fit',
    scrollable: true,    
    items: [
        {
            xtype: 'appdrivertreeoptions',
            userCls: 'core-menu',
            height: '100%'
        }
    ]
    
});
