/*  ---------------------------------------------------
    Template Name: codelean
    Description: codelean eCommerce HTML Template
    Author: CodeLean
    Author URI: https://CodeLean.vn/
    Version: 1.0
    Created: CodeLean
---------------------------------------------------------  */

'use strict';
(function ($) {
    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);

        const rowId = $button.parent().find('input').data('rowid');
        updateCart(rowId,newVal);
	});

    function updateCart(rowId,qty){
        $.ajax({
            type : "GET",
            url : "cart/update",
            data : {rowId: rowId, qty : qty},
            success: function(respone){
                // alert('Cập nhật giỏ hàng thành công!');
                // console.log(respone);
                location.reload();
            },
            error: function(error){
                alert('Cập nhật giỏ hàng thất bại!');
                console.log(error);
            }
        })
    }
})(jQuery);