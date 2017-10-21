$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.mall-select').select2();


	$('table[data-form="deleteForm"]').on('click', '.delete', function(e) {
		e.preventDefault();
		var url = $(this).attr('href');

		$('#confirm').modal({ backdrop: 'static', keyboard: false }).on('click', '#delete-btn', function() {
			$.ajax({
				url: url,
				type: 'DELETE',
				success: function(r) {
					$('#confirm').modal('hide')
					$("#row-"+r.id).fadeOut('slow')
				},
				error: function(data) {
					if (data.status === 422) {
					}
				}
			});
		});
	});
})