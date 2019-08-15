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


$('.changeNumberProduct').on('blur', function(){
    var qty = $(this).val();
    var id = $(this).attr('data-id');
    $.ajax({
        url: '/cart',
        method: 'get',
        data: {
            id: id,
            quantity: qty
        },
        success: function(){
            location.reload();
        }
    });
});

function updateOrder() {
    var id = $('#getIdOrder').attr('data-id');
    $.ajax({
        url: 'admin/order/danhsach',
        method: 'post',
        data: {
            id: id
        }
    });

