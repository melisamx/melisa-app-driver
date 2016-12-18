
Ext.define('Melisa.driver.model.Markers', {
    extend: 'Ext.data.Model',
    
    fields: [
        {
            name: 'id'
        },
        {
            name: 'idTipoMarker'
        },
        {
            name: 'latitude'
        },
        {
            name: 'longitude'
        },
        {
            name: 'idEstatusMarkers'
        },
        {
            name: 'gmarker'
        },
        {
            name: 'distance'
        },
        {
            name: 'location',
            calculate: function(data) {
                return data.latitude + ', ' + data.longitude;
            }
        },
        {
            name: 'oldLocation'
        },
        {
            name: 'isNew',
            defaultValue: true
        },
        {
            name: 'duration',
            defaultValue: 99999999
        },
        {
            name: 'durationText'
        },
        {
            name: 'distanceText'
        },
        {
            name: 'distance',
            defaultValue: 99999999
        },
        {
            name: 'speed'
        },
        {
            name: 'display'
        },
        {
            name: 'geocoding'
        },
        {
            name: 'calculingDistance',
            defaultValue: false
        }
    ]
    
});
