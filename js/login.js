$(document).ready(function(){
    $('#loginForm').submit(function(event){
        event.preventDefault();
        var username = $('#username').val();
		var email = $('#email').val();
        var password = $('#password').val();

        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: {username: username,email:email, password: password},
            success: function(response){
                $('#response').html(response);
            }
        });
    });
});
