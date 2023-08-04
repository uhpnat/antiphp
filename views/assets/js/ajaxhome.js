
$(document).ready(function(){
	load_cart_data();
    load_cart_data2();
	function load_cart_data()
	{
		$.ajax({
			url:"views/include/fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)

			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}
    function load_cart_data2()
	{
		$.ajax({
			url:"views/include/fetch_cart_detailts.php",
			method:"POST",
			dataType:"json",
			success:function(data2)

			{
                // alert("thanh cong");
				$('#cart_details2').html(data2.cart_details2);
				$('.total_price').text(data2.total_price);
				$('.badge').text(data2.total_item);
			}
		});
	}

	$(document).on('click', '.add_to_cart', function(){
    load_cart_data();
	function load_cart_data()
	{
		$.ajax({
			url:"views/include/fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)

			{

				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

    var product_id = $(this).attr("id");
    var product_name = $('#name'+product_id+'').val();
    var product_price = $('#price'+product_id+'').val();
    var product_discount = $('#discount'+product_id+'').val();
    var product_quantity = $('#quantity'+product_id).val();
    var product_image = $('#image'+product_id).val();
    var action = "add";
    if(product_quantity > 0)
    {   

        $.ajax({
            url:"?page=action",
            method:"POST",
            data:{product_id:product_id, product_name:product_name, product_price:product_price,product_discount:product_discount, product_quantity:product_quantity,product_image:product_image, action:action},
            success:function(data)
            {   
				toastr.success("Sản phẩm đã được thêm vào giỏ hàng");
                load_cart_data(); 
            }
        });
    }
    else
    {
        alert("");
    }
});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(product_id)
		{
			$.ajax({
				url:"?page=action",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data2();
                    load_cart_data();
					toastr.success("Sản phẩm đã được xóa khỏi giỏ hàng");
				}
			})
		
        }else
		{
			return false;
		}
	});

    
	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
    $(document).on('click', '.minus-cart', function(){
		var product_id = $(this).attr("id");
		var action = 'minus-cart';
		$.ajax({
			url:"?page=action",
			method:"POST",
			data:{product_id:product_id,action:action},
			success:function()
			{
				load_cart_data();
				load_cart_data2();
				
			}
		});
	});
    $(document).on('click', '.plus-cart', function(){
		var product_id = $(this).attr("id");
		var action = 'plus-cart';
		$.ajax({
			url:"?page=action",
			method:"POST",
			data:{product_id:product_id,action:action},
			success:function()
			{
				load_cart_data();
				load_cart_data2();
				
			}
		});
	});
    
});

