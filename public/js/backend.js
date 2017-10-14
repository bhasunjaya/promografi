$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	console.log('alive')
	$('.mall-select').select2();


	$('table[data-form="deleteForm"]').on('click', '.delete', function(e) {
		e.preventDefault();
		var url = $(this).attr('href');

		$('#confirm').modal({ backdrop: 'static', keyboard: false }).on('click', '#delete-btn', function() {
			console.log(url)
			$.ajax({
				url: url,
				type: 'DELETE',
				success: function(msg) {
					$('#confirm').modal('hide')
				},
				error: function(data) {
					if (data.status === 422) {
					}
				}
			});
		});
	});
})