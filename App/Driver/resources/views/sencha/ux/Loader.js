/* 
 * Loader indicator
 */
Ext.define('Melisa.driver.ux.Loader', {
    
    destroy: function() {
        
        var loader = Ext.get('loader');
        
        if( !loader) {
            
            return;
            
        }
        
        setTimeout(function() {
            
            loader.addCls('fadeOut');
        
            setTimeout(function() {
                loader.destroy();
            }, 1000);
            
        }, 1000);
        
    }
    
});
