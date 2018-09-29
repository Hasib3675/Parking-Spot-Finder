
$('#save-val').on('click', function(e){
	e.preventDefault();
	var user_name = $('input[name=user_name]').text();
    var user_email = $('input[name=user_email]').text(); 
    var user_mb_num = $('input[name=user_mb_num]').val();  
    var user_pass = $('input[name=user_pass]').text(); 
    var radio_btn = $("input[name='radio_btn']:checked").val();

    if (user_name = '' && user_email = '' && user_mb_num = '' && user_pass = '' && radio_btn = '') {
    	var varName = "";
        	if(user_name == ""){ varName += "user_name\n" }
        	if(user_email == ""){ varName += "user_email\n" }
        	if(user_mb_num == ""){ varName += "user_mb_num\n" }
       	 	if(user_pass == ""){ varName += "user_pass\n" }
       	 	if(radio_btn == ""){ varName += "radio_btn\n" }
        	alert(varName+ " \nFill these box.");
    }
});