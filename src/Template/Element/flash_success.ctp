<div class="flash-message">
	<p class="flash-message__text">Successfully registered</p>
	<div class="flash-message__close">
		<a class="flash-message__close-msg">x</a>
	</div>
</div>

<script type="text/javascript">
	$('.flash-message__close-msg').on('click', function() {
		$(this).parent().parent().hide();
	});
</script>