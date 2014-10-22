/*
jQuery( document ).ready( function( $ ) {
 
    $( '.delete-task' ).on( 'click', function() {
 
        //.....
        //show some spinner etc to indicate operation in progress
        //.....

        $.ajax({
          url: "closingtask",
          data: {
            "token": $('#values').find( 'input[name=_token]' ).val(),
            "task": $(this).find( 'id' ).val(), 
            "closing": $('#values').find( 'input[name=closing]').val()
          }
        }).done(function(msg) {
          console.dir( msg );
        });
 
        //.....
        //do anything else you might want to do
        //.....
 
        //prevent the form from actually submitting in browser
        return false;
    } );
 
} );
*/