var email = document.getElementById("email");
var email = document.getElementById("");
email.addEventListener('focus',()=>{
    email.style.borderColor="A45F6A"
})

email.addEventListener('blur',()=>{
    email.style.borderColor="#ccc"
})

password.addEventListener('focus',()=>{
    password.style.borderColor="A45F6A"
})

password.addEventListener('blur',()=>{
    password.style.borderColor="#ccc"
})