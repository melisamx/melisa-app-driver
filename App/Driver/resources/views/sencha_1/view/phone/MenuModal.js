
Ext.define('Melisa.driver.view.phone.MenuModal', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.phone.Avatars',
        'Melisa.driver.view.phone.OptionsWrapper'
    ],
    
    alias: 'widget.appdrivermenumodal',
    top: 0,
    left: 0,
    bottom: 0,
    zIndex: 20,
    width: '80%',
    hideOnMaskTap: true,
    hideAnimation: 'slideOut',
    modal: false,
    cls: 'n-core-menu-modal',
    showAnimation: {
        type: 'slide',
        direction: 'right'
    },    
    items: [
        {
            xtype: 'appdriveravatars',
            height: '30%',
            minHeight: 220
        },
        {
            xtype: 'appdriveroptionswrapper',
            height: '70%'
        }
    ]
});
