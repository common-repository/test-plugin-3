registerBlockType( 'my-plugin/book', {} );

registerBlockType( 'my-plugin/book-with-title', { title: "Title here" } );

registerBlockType( 'my-plugin/book-with-title-after-args', { something: "foo", title: "Title here" } );

registerBlockType( 'my-plugin/book-' + variable, { title: "Title with" + variable } );

registerBlockType( 'my-plugin/book-'+variable, { title: "Title with"+variable, foo: "bar" } );

