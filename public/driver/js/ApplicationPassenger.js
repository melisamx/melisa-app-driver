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
        'DesktopPassenger',
        'PhonePassenger',
        'TabletPassenger'
    ]
});
