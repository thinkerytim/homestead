jQuery(document).ready(function($) {
	var delete_id = false;
    // delete item from list
    $(".list-delete").on('click', function(){  	
var url = $(this).data('action')+'/'+this.id;
delete_id = this.id;
$.ajax({
	type: "post",
    data: { 
    	_method:"DELETE"
    },
    url: url    
}).done(function(msg) {
	$("#row"+delete_id).addClass('danger').fadeOut('slow', function() {
		$("#flash_content").html("Deleted #"+delete_id);
		$("#flash").fadeIn("fast").delay(2000).fadeOut("slow");
		$("#row"+tdelete_id).remove();
    });
});
    });


});