Ext.define('Melisa.driver.view.phone.passenger.dashboard.WrapperController', {
    extend: 'Melisa.core.ViewController',
    alias: 'controller.driverpassengerdashboard',
    
    requires: [
        'Melisa.ux.Loader',
        'Melisa.view.phone.menu.Modal'
    ],
    
    onTapBtnDriver: function() {
        
        var me = this,
            menu = me.getMenu();
        
        menu.show();
        
    },
    
    getMenu: function() {
        
        var me = this;
        
        if( !me.menu) {
            
            me.menu = Ext.create('widget.apppanelmenumodal', {
                viewModel: me.getViewModel()
            });            
            Ext.Viewport.add(me.menu);
            
        }
        
        return me.menu;
        
    }
    
});
