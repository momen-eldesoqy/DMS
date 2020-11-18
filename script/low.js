var pass = document.getElementById("password");
var check = document.getElementById("check");


check.onclick=function(){
    
    if(pass.type === 'password')
        {
            pass.type = 'text';
            
        }else{
            
        pass.type = 'password';
    }
}
