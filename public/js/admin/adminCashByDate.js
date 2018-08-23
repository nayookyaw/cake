
$(window).on('load', function() {
 calculateSummaryTotal();
 searchByDate();
 setPaging();
});

function searchByDate() {
	$(".search_date").click(function (){
		$from = $(".from").val();
		$to = $(".to").val();
		if (!$from || !$to) { swal({ text: "Select date limit" }); return }
		if ($from > $to) { swal({ text: "Start date should be earlier End date" }); return }

		$.ajax({
			url : '/admin/cash/date/all',
			method : 'get',
			data : {
				'from' : $from,
				'to' : $to,
				'_token' : $('meta[name="_token"]').attr('content')
			},
			success : function (result) {
				$("tbody").empty().append(result);
				calculateSummaryTotal();
			},
			error : function (error){
				$error = error.responseJSON.error;
				swal({ text: $error });
			}
		});

	});
}

function setPaging() {
	$("#cash_bydate_table").pagination();
}

function calculateSummaryTotal() {
	$current_total_arr = [];
	$total_tmp = 0;
	$('#cash_bydate_table tr').each(function() {
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
