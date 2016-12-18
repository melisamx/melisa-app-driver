
Ext.define('Melisa.driver.ux.Socket', {
    
    mixins: [
        'Ext.mixin.Observable'
    ],
    
    config: {
        socket : null,
        user: null
    },
    
    constructor: function(config) {
        
        this.mixins.observable.constructor.call(this, config);
        
    },
    
    init: function() {
        
        var me = this,
            /* no exist socket library */
            socket = typeof io !== 'undefined' ? 
                io(Ext.manifest.nerine.urls.realtime) : false,
            ge = Ext.GlobalEvents;
    
        if( !socket) {
            
            return false;
            
        }
        
        me.setSocket(socket);
        
        socket.on('connect', function() {
            
            console.log('conectado!!', socket);
            me.fireEvent('connect', socket);
            ge.fireEvent('socketconnect', socket, me);
            
        }).on('disconnect', function() {
            
            console.log('desconectado',arguments);
            ge.fireEvent('socketdisconnect', socket, me);
            
        }).on('reconnect', function() {
            
            console.log('reconnect', arguments);
            ge.fireEvent('socketreconnect', socket, me);
            
        }).on('user connected', function(user) {
            
            console.log('user connected', arguments);
            ge.fireEvent('userconnected', user);
            
        }).on('user disconnected', function(idUSer) {
            
            console.log('user disconnected');
            ge.fireEvent('userdisconnected', idUSer);
            
        }).on('user send message', function(messaje) {
            
            console.log('user send message', arguments);
//            ge.fireEvent('userdisconnected', idUSer);
            
        });
        
        ge.on({
            meconnected: me.onUserConect,
            listusers: me.onListUsers,
            usersendmessage: me.onUserSendMessage,
            socketsendevent: me.onSendEvent,
            scope: me
        });
        
        return me;
        
    },
    
    isConnected: function() {
        
        return this.getSocket() ? true : false;
        
    },
    
    emit: function(event, params) {
        
        var me = this,
            socket = me.getSocket();
    
        if( !socket) {
            
            console.log('socket disconnected');
            return false;
            
        }
    
        socket.emit(event, params);
        
    },
    
    onSendEvent: function(event, params) {
        
        var me = this,
            socket = me.getSocket();
    
        socket.emit(event, params);
        
    },
    
    onUserSendMessage: function(emisor, receptor, mensaje) {
        
        var me = this,
            socket = me.getSocket();
        
        socket.emit('user send message', {
            receptor: receptor.data,
            emisor: me.getUser(),
            mensaje: mensaje
        });
        
    },
    
    onListUsers: function(callback) {
        
        var me = this,
            socket = me.getSocket();
        
        socket.emit('list users', 'dummy', function (users) {
            
            console.log('list users', users);
            callback(users);
            
        });
        
    },
    
    onUserConect: function(user) {
        
        var me = this,
            socket = me.getSocket();
        
        me.setUser(user);
        
        socket.emit('meconnected', user);    
        
    }
    
});
