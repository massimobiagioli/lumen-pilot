if(!xtag.tags['my-dummy']) {
    xtag.register('my-dummy', {
        lifecycle: {
            created: function() {
                let x = $('<div>Componente di esemmpio</div>');
                this.xtag.container = x.appendTo(this);
            }
        }
    });
}
