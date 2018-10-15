// var myDiv = docuement.querySelector(".clickMe");
// myDiv.addEventListener('click', function(){
//   console.log("test");
// });
// function clic(){
//   console.log("Clic !");
// }
// var boutonElt = document.getElementByID("bouton");
// boutonElt.addEventListener("click", clic);
// console.log("Clic !");
var threshold = 400;
var header = document.querySelector("header");
window.addEventListener("scroll", function(event){
  if (window.scrollY > threshold){
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
})
// var threshold = 400;
// window.addEventListener("scroll", function(event){
//   console.log(event);
// });
//
// class list add
// class list remove
