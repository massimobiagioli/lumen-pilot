if(!xtag.tags['my-dummy']) {
    xtag.register('my-dummy', {
        mixins: ['dummymx'],
        lifecycle: {
            created: function() {
                let x = $('<div id="mydiv">Componente di esempio con gestione eventi</div>');
                this.xtag.container = x.appendTo(this);
                $('#mydiv').on('click', () => this.myalert());
            }
        }
    });
}
