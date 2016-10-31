(function($){
	jQuery(document).ready(function(){
		jQuery('#reg').click(function(){
			$.ajax({
				'url'	: 'registration.php',
				'type'	: 'post',
				'success'	: function(output)
				{
					jQuery('.output').html(output);
				}
			});
			return false;
		});

		// View Login Form
		jQuery('#log').click(function(){
			$.ajax({
				'url'	: 'login.php',
				'type'	: 'post',
				'success'	: function(output)
				{
					jQuery('.output').html(output);
				}
			});
			return false;
		});

		// Insert User Data by Ajax
		jQuery('#submitReg').click(function(){
			return false;
		});

	});
}(jQuery));