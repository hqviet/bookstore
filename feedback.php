<?php 
include 'header.php';
?>
<div class="container mt-5 mb-3">

	<div class="form-group">
		<label for="feedback_name">Your name </label><input class="form-control" type="text" name="feedback_name" id="feedback_name" required placeholder="Enter your name">
	</div>
	<div class="form-group">
		<label for="feedback_email">Your email </label> <input class="form-control" type="email" name="feedbak_email" id="feedbak_email" required placeholder="name@example.com">
	</div>
	<div class="form-group">
		<label for="feedback_comment">Your comment</label>
		<textarea class="form-control" name="feedback_comment" id="feedback_comment" required rows="6" placeholder="Leave a message for us"></textarea>
	</div>
	<div class="form-group">
		<input class="btn btn-outline-primary" type="button" name="submitCommend" value="Submit">
	</div>

	<script type="text/javascript">
		$('input[name=submitCommend]').click(function() {
			$.ajax({
				url: 'controllers/submitFeedback.php',
				type: 'GET',
				data: {
					feedback_name: $('#feedback_name').val(),
					feedbak_email: $('#feedbak_email').val(),
					feedback_comment: $('#feedback_comment').val()
				},
				success: function(data){
					alert(data);
					location.reload();
				}, 
				error: function() {
					alert('Somethign wrong happened! Please try again!');
				}
 			});
			
		});
	</script>
</div>