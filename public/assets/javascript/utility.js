(function(){

    // add an ajax function to data-remote forms
    $('form[data-remote]').on('submit', function(e){
        var form    = $(this);
        var method  = form.find('input[name="_method"]').val() || 'POST';
        var url     = form.prop('action');
        var data    = form.serialize();

        $.ajax({
            type: method,
            url: url,
            data: form.serialize(),
            success: function(data){
                $('#flash').toggle();
            },
            error: function(data){
                $('#flash').toggle();
            }
        });

        e.preventDefault();
    })

    // add confirmable to buttons
    $('button[data-confirm]').on('click', function(e){
        var input   = $(this);

        if (!confirm(input.data('confirm'))) {
            e.preventDefault();
        }
    })

})();