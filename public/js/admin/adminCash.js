
getAllOrderHistories();

function getAllOrderHistories() {
	$.ajax({
		url : '/admin/orders/history/all',
		method : 'get',
		data : {
			'_token' : $('meta[name="_token"]').attr('content')
		},
		success : function (result) {
			$("tbody").empty().append(result);
			getAllOrderByName();
		},
		error : function (error){
			$error = error.responseJSON.error;
			swal({ text: $error });
		}
	});
}

function getAllOrderByName() {
	$(".btn_search").click(function (){
		var value = $("#search_name").val();

    $("table tr").each(function(index) {
        if (index != 0) {

            $row = $(this);

            var id = $row.find("td:first").text();

            if (id.indexOf(value) != 0) {
                $(this).hide();
            }
            else {
                $(this).show();
            }
        }
    });

	});
}

