(function() {
    console.log("junge");

    tinymce.PluginManager.add( 'cards', function( editor, url ) {
        console.log("echt");
        // Add Button to Visual Editor Toolbar
        editor.addButton('cards', {
            title: 'Buntamor Bubblecards',
            cmd: 'cards',
            image: url + '/icon.png'
        });

        // Add Command when Button Clicked
        editor.addCommand('cards', function() {
            alert('Button clicked!');
        });
    });
})();