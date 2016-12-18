/* 
 * Status
 */
Ext.define('Melisa.driver.ux.Status', {
    singleton: true,
    
    driver: {
        OFFLINE: 1,
        ONLINE: 2,
        BLOCK: 3,
        IN_SERVICE: 4
    },
    
    passengers: {
        OFFLINE: 1,
        ONLINE: 2,
        BLOCK: 3,
        /* cliente espera de aceptación de servicio */
        WAITING_SERVICE: 4,
        /* chofer en camino a localización del cliente */
        DRIVER_ON_TRACK: 5,
        IN_TRAVEL: 6
    }
    
});
