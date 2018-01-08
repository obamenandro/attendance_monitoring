<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->
<div class="flash-message">
	<i class="fa fa-check flash-message__icon" aria-hidden="true"></i>
	<div class="flash-message__text-wrapper">
		<p class="flash-message__text-status">SUCCESS!</p>
		<p class="flash-message__text"><?= $message ?></p>
	</div>
	<div class="flash-message__close">
		<a class="flash-message__close-msg">x</a>
	</div>
</div>

<script type="text/javascript">
	$('.flash-message__close-msg').on('click', function() {
		$(this).parent().parent().hide();
	});
</script>