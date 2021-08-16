var loginbtn = document.getElementById("login-button");
var createbtn = document.getElementById("create-button");

var loginform = document.getElementById("login");
var createform = document.getElementById("create");


loginbtn.addEventListener("click", function login(){
    loginform.style.display="flex";
    createform.style.display="none";
});

createbtn.addEventListener("click", function create(){
    loginform.style.display="none";
    createform.style.display="flex";
});