document.addEventListener("DOMContentLoaded", () => {
    //classes for opening the product details
    var modal = document.querySelector(".abclass");
    const overlay = document.querySelector(".overlay");
 
     //Open Item
     document.querySelector(".open_abclass1").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
         
     });
     document.querySelector(".open_abclass2").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
     });
     document.querySelector(".open_abclass3").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
     });
     document.querySelector(".open_abclass4").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
     });
     document.querySelector(".open_abclass5").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
     });
     document.querySelector(".open_abclass6").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
     });
     document.querySelector(".open_abclass7").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
     });
     document.querySelector(".open_abclass8").addEventListener("click", () => {
         modal.classList.toggle('active');
         overlay.classList.toggle('active');
     });

     document.querySelector(".close_abclass").addEventListener("click", () => {
         modal.classList.remove('active');
         overlay.classList.remove('active');
     });
     overlay.addEventListener("click", () => {
         modal.classList.remove('active');
         overlay.classList.remove('active');
     });
});
 //fetch image inside the transaction box
function showImage_1() {
    document.getElementById("products_img").src = "../other products/Aprod1.jpg";
}
function showImage_2() {
    document.getElementById("products_img").src = "../other products/Aprod2.jpg";
}
function showImage_3() {
    document.getElementById("products_img").src = "../other products/Aprod1.jpg";
}
function showImage_4() {
    document.getElementById("products_img").src = "../other products/Aprod1.jpg";
}
function showImage_5() {
    document.getElementById("products_img").src = "../other products/Aprod1.jpg";
}
function showImage_6() {
    document.getElementById("products_img").src = "../other products/Aprod1.jpg";
}
function showImage_7() {
    document.getElementById("products_img").src = "../other products/Aprod1.jpg";
}

