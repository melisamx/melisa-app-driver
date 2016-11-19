Ext.application({
    name: 'Melisa.driver',
    
    requires: [
        'Melisa.core.Application'
    ],
    
    defaultToken : 'home',
    
    profiles: [
        'Desktop',
        'Phone',
        'Tablet'
    ]
});
