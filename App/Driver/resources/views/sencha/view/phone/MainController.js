
Ext.define('Melisa.driver.view.phone.MainController', {
    extend: 'Melisa.core.ViewController',
    
    requires: [
        'Melisa.driver.view.phone.MenuModal',
        'Melisa.driver.ux.TrackingLocation',
        'Melisa.driver.ux.Socket',
        'Melisa.driver.ux.MarkerLabel',
        'Melisa.driver.ux.Loader',
        'Melisa.driver.ux.Status'
    ],
    
    alias: 'controller.appdrivermaincontroller',
    
    routes: {
        menu: 'onRouteShowMenu',
        home: 'onRouteShowHome',
        list: 'onRouteShowList'
    },
    
    config: {
        markerUser: null,
        markerService: null,
        generateUuid: null,
        mode: null,
        firstLocation: true,
        socket: null,
        trackingLocation: null
    },
    
    onTabBtnMap: function() {
        
        this.redirectTo('home');
        
    },
    
    onTabBtnList: function() {
        
        this.redirectTo('list');
        
    },
    
    onMapCenterChange: function(map, gmap, center) {
        
        var me = this;
        
        me.getMarkerService().get('gmarker').setPosition(center);
        
    },
    
    onRouteShowHome: function() {
        
        var me = this,
            menu = me.getMenu();
    
        menu.hide();
        Ext.Viewport.setActiveItem(me.getView());
        me.navigateCard('map');
        
    },
    
    onRouteShowList: function() {
        
        this.navigateCard('conMarkers');
        
    },
    
    navigateCard: function(component) {
        
        var me = this,
            view = me.getView(),
            cmp = me.lookupReference(component);
        
        view.setActiveItem(cmp);
        return cmp;
        
    },
    
    onRouteShowMenu: function() {
        
        var me = this,
            menu = me.getMenu();
        
        menu.show();
        
    },
    
    onRender: function() {
        
        var me = this,
            config = Ext.manifest.melisa,
            vm = me.getViewModel(),
            trackingLocation = Ext.create('Melisa.driver.ux.TrackingLocation', {
                url: config.urls.tracking,
                listeners: {
                    updatelocation: me.onUpdateLocation,
                    successgetinitlocation: me.onSuccessGetInitLocation,
                    scope: me
                }
            });
        
        me.setMode(Melisa.driver.ux.Status.passengers.ONLINE);
        me.setTrackingLocation(trackingLocation);
        
        vm.set('urlDriversFree', config.urls.driversFree);
        
        Ext.History.on('change', me.onChangeHistory, me);
        
        /* 
         * fix bug marker 
         * necesario ya que sino se regresa el marker a la ubicación inicial 
         * cuando se abra el menu list
         */
        me.redirectTo('list');
        
        setTimeout(function() {
            
            me.redirectTo('home');
            Ext.create('Melisa.driver.ux.Loader').destroy();
            
        }, 1000);
        
        trackingLocation.init();
        
    },
    
    onUpdateDriverStatus: function(driver) {
        
        var me = this,
            stoMarkers = me.getViewModel().getStore('markers'),
            recordMarker = stoMarkers.findRecord('id', driver.id),
            gMarker;
    
        console.log('onUpdateDriverStatus', driver);
        
        if(driver.idDriverStatus === Melisa.driver.ux.Status.driver.ONLINE) {
            
            me.onAddDriver(driver);
            return;
            
        }
    
        if( !recordMarker) {
            
            console.log('no existe el marker se omite quitarlo');
            return;
            
        }
        
        gMarker = recordMarker.get('gmarker');
        gMarker.setMap(null);
        gMarker.unbindAll();
        gMarker = null;
        stoMarkers.remove(recordMarker);
        
    },
    
    onUpdateDriverLocation: function(driver) {
        
        var me = this,
            stoMarkers = me.getViewModel().getStore('markers'),
            recordMarker = stoMarkers.findRecord('id', driver.id);
        
        if( !recordMarker) {
            
            console.log('no existe el marker se ignora');
            return;
            
        }
        
        if(recordMarker.data.latitude === driver.latitude || 
            recordMarker.data.longitude === driver.longitude) {
        
            console.log('no cambio ubicación... mentira');
            return;
            
        }
        console.log('change location driver');
        recordMarker.set({
            latitude: driver.latitude,
            longitude: driver.longitude,
            oldLocation: recordMarker.data.latitude + ', ' +
                recordMarker.data.longitude
        });
        
    },
    
    onAddDriver: function(driver) {
        
        var me = this,
            stoMarkers = me.getViewModel().getStore('markers'),
            markerExist = stoMarkers.find('id', driver.id);
        
        if( markerExist !== -1) {
            
            console.log('ya existe el marker');
            return;
            
        }
        
        stoMarkers.add({
            id: driver.id,
            idDriver: driver.idDriver,
            latitude: driver.latitude,
            longitude: driver.longitude,
            display: driver.display,
            gmarker: new google.maps.Marker({
                map: me.lookupReference('map').getMap(),
                position: {
                    lat: driver.latitude,
                    lng: driver.longitude
                },
                icon: '/driver/img/marker-driver-28.png'
            })
        });
        
    },
    
    onMapRender: function() {
        
        var me = this,
            stoMarkers = me.getViewModel().getStore('markers'),
            socket = Ext.create('Melisa.driver.ux.Socket');
        
        me.setSocket(socket);
        
        if( !socket.init()) {
            
            Ext.Msg.alert(
                'Conexión invalida', 
                'Imposible conectar con el servidor, verifique su conexión a internet', 
                function() {
                    window.location.reload();
                }
            );
            
            return;
            
        }
        
        socket.on('driver update location', function() {
            
            me.onUpdateDriverLocation.apply(me, arguments);
            
        });
        socket.on('driver update status', function() {
            
            me.onUpdateDriverStatus.apply(me, arguments);
            
        });
        
        stoMarkers.on({
            update: me.onStoreUpdate,
            add: me.onStoreAdd,
            remove: me.onStoreRemove,
            scope: me
        });
        stoMarkers.load();
        
    },
    
    onStoreRemove: function() {
            
        this.calculateDistance.call(this);
        
    },
    
    onStoreAdd: function() {
            
        this.calculateDistance.call(this);
        
    },
    
    onStoreUpdate: function(store, record, operation, modifiedFieldNames) {
        
        var me = this,
            marker = record.get('gmarker');
        
        if(Ext.Array.indexOf(modifiedFieldNames, 'gmarker') !== -1) {
            
            console.log('modifico marker');
            return;
            
        }
        
        if( record.data.id === 'service') {
            
            console.log('modifico marker service se ignora');
            return;
            
        }
        
        if( record.data.id === 'calculatingDistance') {
            
            console.log('calculando distancia');
            return;
            
        }
        
        if( !marker) {
            
            console.log('sin marker');
            return;
            
        }
        
        if(Ext.Array.indexOf(modifiedFieldNames, 'latitude') !== -1) {
            
            marker.setPosition({
                lat: record.get('latitude'), 
                lng: record.get('longitude')
            });
            
            me.calculateDistance();
            
        }
        
    },
    
    onStoreLoadMarkers: function(store, records) {
        
        var me = this,
            gmap = me.lookupReference('map').getMap();
        
        store.each(function(record) {
            
            if( record.get('marker')) {
                
                return;
                
            }
            
            var marker = new google.maps.Marker({
                map: gmap,
                position: {
                    lat: record.get('latitude'),
                    lng: record.get('longitude')
                },
                icon: '/driver/img/marker-driver-28.png'
            });
            
            record.set('gmarker', marker);
            
        });
        
    },
    
    onErrorInitGetLocation: function() {
        
        var me = this;
        
        Ext.Msg.alert(
            'Atención', 
            'No fue posible obtener su ubicación geografica, ¿Desea reintentar?', 
            function(buttonId) {

                if(buttonId === 'ok') {

                    setTimeout(function() {
                        
                      me.initGeoLocation();  
                        
                    }, 5000);
                    return;

                }

            });
        
    },
    
    onSuccessGetInitLocation: function(geo, location) {
        
        var me = this,
            map = me.lookupReference('map'),
            gmap = map.getMap(),
            stoMarkers = me.getViewModel().getStore('markers'),
            markerService = me.getMarkerService(),
            markerUser = me.getMarkerUser(),
            task = new Ext.util.DelayedTask(me.onPositionChangeMarkerService, me);
        
        if( !geo) {
            
            console.log('no geo');
            return;
            
        }
        
        if( !markerService) {
            
            markerService = new google.maps.Marker({
                map: gmap,
                position: {
                    lat: location.latitude,
                    lng: location.longitude
                },
                icon: '/driver/icons/marker-service.png',
                label: '?',
                draggable: true
            });

            markerService.addListener('position_changed', function() {
                
                task.delay(2000);

            });
            
            me.setMarkerService(stoMarkers.add({
                id: 'service',
                latitude: location.latitude,
                longitude: location.longitude,
                gmarker: markerService
            })[0]);
            
        }
        
        if( !markerUser) {
            
            markerUser = new google.maps.Marker({
                map: gmap,
                position: {
                    lat: location.latitude,
                    lng: location.longitude
                },
                icon: '/driver/icons/marker-user.png'
            });
            
            me.setMarkerUser(stoMarkers.add({
                id: 'user',
                latitude: location.latitude,
                longitude: location.longitude,
                gmarker: markerUser
            })[0]);
            
        }
        
        map.setMapCenter({
            latitude: location.latitude,
            longitude: location.longitude
        });
        
        me.getViewModel().set('gpsActive', true);
        
    },
    
    onPositionChangeMarkerService: function() {
        
        var me = this,
            markerService = me.getMarkerService(),
            newPosition;
    
        console.log('onPositionChangeMarkerService');
        
        if( !markerService) {
            
            console.log('sin marker service');
            return;
            
        }
        
        newPosition = markerService.get('gmarker').getPosition();
        
        markerService.set({
            latitude: newPosition.lat(),
            longitude: newPosition.lng()
        });
        
        me.calculateDistance.call(me, true);
        
    },
    
    calculateDistance: function(forceCalculate) {
        
        var me = this,
            service = new google.maps.DistanceMatrixService(),
            markerService = me.getMarkerService(),
            destinations = me.getDestinations(forceCalculate);
        
        console.log('calculate distance', forceCalculate);
        
        if( Ext.isEmpty(destinations.records)) {
            
            console.log('no hay destinos por calcular');
            me.updateMarkerDuration();
            return;
            
        }
        
        me.getViewModel().set('serviceAvailable', false);
        
        service.getDistanceMatrix({
            origins: [
                {
                    lat: markerService.data.latitude,
                    lng: markerService.data.longitude
                }
            ],
            destinations: destinations.gDestinations,
            travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
            
            me.onResponseDistanceMatrix.call(me, response, status, destinations.records);
            
        });
        
    },
    
    getDestinations: function(forceCalculate) {
        
        var me = this,
            stoMarkers = me.getViewModel().getStore('markers'),
            gDestinations = [],
            records = [];
        
        stoMarkers.each(function(record) {
            
            if(record.data.id === 'user' || record.data.id === 'service') {
                
                return;
                
            }
            
            if( forceCalculate) {
                
                record.set('calculingDistance', true);
            
                gDestinations.push({
                    lat: record.data.latitude,
                    lng: record.data.longitude
                });

                records.push(record);
                return;
                
            }
            
            if( record.data.calculingDistance) {
                
                console.log('ya se esta calculando distancia');
                return;
                
            }
            
            if( record.data.location === record.data.oldLocation) {
                
                console.log('no ha cambiado la distancia se ignora calcular distancia');
                return;
                
            }
            
            record.set('calculingDistance', true);
            
            gDestinations.push({
                lat: record.data.latitude,
                lng: record.data.longitude
            });
            
            records.push(record);
            
        });
        
        return {
            gDestinations: gDestinations,
            records: records
        };
        
    },
    
    onResponseDistanceMatrix: function(response, status, records) {
        
        var me = this,
            record;
        
        if(status !== 'OK') {
            
            console.log('error calcular distancia');
            return;
            
        }
        
        Ext.each(response.rows[0].elements, function(location, index) {
            
            record = records[index];
            
            if( !record) {
                
                return;
                
            }
            
            record.set({
                calculingDistance: false,
                duration: location.duration.value,
                durationText: location.duration.text,
                distance: location.distance.value,
                distanceText: location.distance.text,
                oldLocation: record.data.latitude + ', ' + record.data.longitude
            });
            
        });
        
        me.updateMarkerDuration();
        
    },
    
    updateMarkerDuration: function() {
        
        var me = this,
            markerService = me.getMarkerService(),
            vm = me.getViewModel(),
            stoMarkers = vm.getStore('markers'),
            marker = markerService.get('gmarker'),
            minDuration,
            record;
        
        minDuration = stoMarkers.min('duration');
        record = stoMarkers.findRecord('duration', minDuration);
        
        if( !record) {
            
            console.log('no se encontro record con duration minima');
            marker.setLabel('NC');
            return;
            
        }
        
        if( record.get('duration') / 60 >= 31) {
            
            vm.set('serviceAvailable', false);
            marker.setLabel('NA');
            Ext.toast({
                message: 'Demasiado retirado, cambie la ubicación', 
                timeout: 5000
            });
            return;
            
        }
        
        vm.set('serviceAvailable', true);
        marker.setLabel(record.get('durationText').replace(/([a-z]|\s)/g, ''));
        
    },
    
    onDragMap: function() {
        
        var me = this,
            map = me.lookupReference('map'),
            gmap = map.getMap();
    
        me.getMarkerService().setPosition(gmap.getCenter());
        
    },
    
    onUpdateLocationError: function() {
        
        var me = this;
        
        me.getViewModel().set('gpsActive', false);
        
        console.log('location error', arguments);
        
    },
    
    onUpdateLocation: function(location) {
        
        var me = this,
            vm = me.getViewModel(),
            markerUser = me.getMarkerUser(),
            firstLocation = me.getFirstLocation(),
            socket = me.getSocket();
            
        if(firstLocation) {
            
            me.setFirstLocation(false);
            
        }
    
        if(markerUser && (markerUser.data.latitude === location.latitude || 
            markerUser.data.longitude === location.longitude)) {
            
            console.log('misma ubicacion', location);
            return;
            
        }
        
        markerUser.set({
            latitude: location.latitude,
            longitude: location.longitude,
            speed: location.speed
        });
        vm.set('gpsActive', true);
        markerUser.get('gmarker').setPosition({
            lat: location.latitude,
            lng: location.longitude
        });
        socket.emit('passenger update location', {
            id: markerUser.get('id'),
            latitude: location.latitude,
            longitude: location.longitude
        });
        
    },
    
    onChangeHistory: function(route) {
        
        var me = this;
        
        if( route) {
            
            return;
            
        }
        
        /* con esto evitamos botón retroceso de android */
        me.redirectTo('home');
        
    },
    
    onTapBtnTitle: function() {
        
        this.redirectTo('menu');
        
    },
    
    getMenu: function() {
        
        var me = this;
        
        if( !me.menu) {
            
            me.menu = Ext.create('widget.appdrivermenumodal', {
                listeners: {
                    hide: me.onHideMenu,
                    scope: me
                }
            });
            
            Ext.Viewport.add(me.menu);
            
        }
        
        return me.menu;
        
    },
    
    getMore: function() {
        
        var me = this;
        
        if( !me.more) {
            
            me.more = Ext.create('widget.appdrivermore', {
                items: [
                    {
                        xtype: 'list',
                        store: me.getViewModel().getStore('markers'),
                        itemTpl: [
                            '{display} {duration} <br>{location}'
                        ]
                    }
                ],
                listeners: {
                    hide: me.onHideMenu,
                    scope: me
                }
            });
            
            Ext.Viewport.add(me.more);
            
        }
        
        return me.more;
        
    },
    
    onHideMenu: function() {
        
        this.redirectTo('home');
        
    }

});
