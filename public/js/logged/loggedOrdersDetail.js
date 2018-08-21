
getOrders();

function getOrders() {
	$.ajax({
		url : '/logged/orders/all',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			$("tbody").empty().append(result);
			calculateSummaryTotal();
			exportOrderList();
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}

function exportOrderList() {
	$(".btn_export_order").click(function (e){
		e.preventDefault();

		if ($('.summary').text() == 0 ) {
			swal({ text: "Empty Order Lists" });
			return
		}

		$total = $(".summary").text();
		$(this).parent().attr('href', '/logged/orders/export/'+ $total);
		window.location = $(this).parent().attr('href');
	});

}
function calculateSummaryTotal() {
	$current_total_arr = [];
	$total_tmp = 0;
	$('#order_table tr').each(function() {
		$current_total = $(this).find(".total").text();
		$current_total_arr.push($current_total);
	});
	if ($current_total_arr) {
		$current_total_arr = jQuery.grep($current_total_arr, function(n){ return (n); });
		$current_total_summary = sum($current_total_arr);
		$(".summary").text($current_total_summary);
	}
}

function sum(input){

 if (toString.call(input) !== "[object Array]")
    return false;

    var total =  0;
    for(var i=0;i<input.length;i++)
      {
        if(isNaN(input[i])){
        continue;
         }
          total += Number(input[i]);
       }
     return total;
}
