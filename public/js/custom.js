function optionBySelect() {
    var option = $('#sortByselect').val();
    $.ajax({
    	url: '',
    	method: 'get',
    	data: {
    		option_id: option,
    	},
    	success: function(result) {
    		$('#ajax-content').html(result);
    	}
    });
}
$(document).on('change', '#sortByselect', function(){
	optionBySelect();
});
