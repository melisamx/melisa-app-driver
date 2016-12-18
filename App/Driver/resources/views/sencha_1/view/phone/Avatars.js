
Ext.define('Melisa.driver.view.phone.Avatars', {
    extend: 'Ext.Container',
    
    requires: [
        'Melisa.driver.view.phone.Avatar'
    ],
    
    alias: 'widget.appdriveravatars',
    cls: 'n-core-avatars',    
    items: [
        {
            xtype: 'toolbar',
            height: '75%',
            items: [
                {
                    xtype: 'appdriveravatar',
                    data: {
                        url: 'https://lh3.googleusercontent.com/-4uAmRVCLC2g/AAAAAAAAAAI/AAAAAAAAAAA/APaXHhSr2LNrIBo1bvX_ogDi_HVpLFeQ7Q/mo/photo.jpg?sz=86'
                    }
                },
                '->'
            ]
        },
        {
            xtype: 'button',
            height: '25%',
            scale: 'large',
            text: 'Luis Josafat Heredia Contreras <br><small>luisyosafat@gmail.com</small>',
            iconAlign: 'right',
            iconCls: 'fa fa-caret-down',
            textAlign: 'left',
            cls: 'avatar-selected'
        }
    ]
    
});
