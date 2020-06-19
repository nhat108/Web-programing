function checkSignupValidator(){
    var canSubmit=true;
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    var confirmPassword=document.getElementById("confirm_password").value;
    var genders=document.getElementsByName('gender');

    var reg_username = /^[A-z]\w{5,15}/g;
    var reg_password = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,15}$/g;
    
    if(reg_username.test(username)==false){
        document.getElementById('username_error').innerHTML='User name is invalid';
        canSubmit=false;
    }else{
        document.getElementById('username_error').innerHTML='';
    }
    if(reg_password.test(password)==false){
        document.getElementById('password_error').innerHTML='Password is invalid';
        canSubmit=false;
    }else{
        document.getElementById('password_error').innerHTML='';
    }
    if(confirmPassword!==password){
        document.getElementById('confirm_password_error').innerHTML='Confirm password does not match';
        canSubmit=false;
    }else{
        document.getElementById('confirm_password_error').innerHTML='';
    }
    return canSubmit;

}