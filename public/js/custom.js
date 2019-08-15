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

function changeQuantityCart()
{
    var quantity = $('.changeNumberProduct').val();
    var id = $('.id_pro').val();
    $.ajax({
        url: 'cart',
        method: 'get',
        data: {
            id: id,
            qty: quantity
        },
        success: function(){
            alert(quantity);
        }
    });
}

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
