const pass = document.getElementById("password");
const num = document.getElementById("number");

function check() {
    alert("function");
    if (num.value == 1) {
        alert("Enter a valid phone number ");
        num.style.borderblockColor = "red";
        return false;
    }
    return true;
}

pass.addEventListener("focusin", () => {
    pass.type = "text";
})

pass.addEventListener("focusout", () => {
    pass.type = "password";
})
const echeck=()=>{
    var email=document.getElementById('email').value;
    let val=document.forms["login"]["email"].value;
    
}