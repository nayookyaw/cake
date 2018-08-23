
$(window).on('load', function() {
 calculateSummaryTotal();
});

function calculateSummaryTotal() {
	$current_total_arr = [];
	$total_tmp = 0;
	$('#cash_detail_table tr').each(function() {
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
