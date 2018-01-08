<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->
<div class="flash-message">
	<p class="flash-message__text"><?= $message ?></p>
	<div class="flash-message__close">
		<a class="flash-message__close-msg">x</a>
	</div>
</div>

<script type="text/javascript">
	$('.flash-message__close-msg').on('click', function() {
		$(this).parent().parent().hide();
	});
</script>