<script src="{{ asset('public/layouts/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('public/layouts/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/layouts/plugins/iCheck/icheck.min.js') }}"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});
</script>