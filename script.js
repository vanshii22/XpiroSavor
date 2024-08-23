window.onscroll = function() {makeSticky()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function makeSticky() {
  if (window.scrollY > sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
// Popup Form
document.querySelector("#show-login").addEventListener("click",function(){
document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click",function(){
  document.querySelector(".popup").classList.remove("active");
  });
document.querySelector("#signin").addEventListener("click",function(event){
  event.preventDefault();
  var email=document.querySelector("#email").value;
  var password=document.querySelector("#password").value;
  if(email && password){
    var message=document.querySelector("#message");
    message.style.display="block"; 
  }
});