
Ext.define('Melisa.driver.view.phone.Markers', {
    extend: 'Ext.Container',
    
    alias: 'widget.appdrivermarkers',
    
    layout: 'fit',
    showAnimation: {
        type: 'slide',
        direction: 'left'
    },
    hideAnimation: 'fadeOut',
    publishes: [
        'hidden'
    ],
    items: [
        {
            xtype: 'list',
            bind: {
                store: '{markers}'
            },
            itemTpl: [
                '<i class="fa fa-clock-o" aria-hidden="true"></i> {display} <b>{durationText}</b> <br>',
                '<i class="fa fa-map-marker" aria-hidden="true"></i> {location} <b>{distanceText}</b>'
            ]
        }
    ]
    
});
