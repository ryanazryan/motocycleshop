function check(){
    const pass = document.getElementById("pass");
    if(pass.getAttribute('type') === "password"){
        pass.setAttribute('type','text');
    } else {
        pass.setAttribute('type','password');
    }
}