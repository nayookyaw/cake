
$('[data-toggle="tooltip"]').tooltip();

$("tr").click(function (){
	$.sweetModal({
		title: $(this).find('.ad').text(),
		content: '<b style="background-color:green; padding:10px 70px;">Name   : '+
		$(this).find('.name').text()+'</b><br>' +
		'<br><br>Phone No  :'+ $(this).find('.phone').text()+ '<br>' + 'User-ID  :'+
		$(this).find('.id').text()+ '<br>Address   :' + $(this).attr('data-value'),
		theme: $.sweetModal.THEME_DARK
	});
});

