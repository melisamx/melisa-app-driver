/**
 * Create application driver
 */
Ext.application({
    name: 'Melisa.driver',
    
    requires: [
        'Melisa.core.Application'
    ],
    
    defaultToken : 'home',
    
    profiles: [
        'DesktopDriver',
        'PhoneDriver',
        'TabletDriver'
    ]
});
