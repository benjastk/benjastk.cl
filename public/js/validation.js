 $(document).ready(function(){
        $('#send_message').click(function(e){
            
            //Stop form submission & check the validation
            e.preventDefault();
            
            // Variable declaration
            var error = false;
            var name = $('#nombre').val();
            var email = $('#email').val();
			var phone = $('#telefono').val();
            var message = $('#mensaje').val();
			
			$('#nombre,#email,#telefono,#mensaje').click(function(){
				$(this).removeClass("error_input");
			});
            
         	// Form field validation
            if(name.length == 0){
                var error = true;
                $('#nombre').addClass("error_input");
            }else{
                $('#nombre').removeClass("error_input");
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email').addClass("error_input");
            }else{
                $('#email').removeClass("error_input");
            }
			if(phone.length == 0){
                var error = true;
                $('#telefono').addClass("error_input");
            }else{
                $('#telefono').removeClass("error_input");
            }
            if(message.length == 0){
                var error = true;
                $('#mensaje').addClass("error_input");
            }else{
                $('#mensaje').removeClass("error_input");
            }
        });    
    });