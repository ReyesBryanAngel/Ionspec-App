//products
window.addEventListener = () =>{filterProduct('All');
}
let border_default = document.querySelector(".border_default");
function filterNavbar(focus){
    let navbars = document.querySelectorAll(".navbar_focus");
    navbars.forEach((navbar) =>{
        if(focus.toUpperCase() == navbar.innerText.toUpperCase()){
            navbar.classList.add("navbar_border");
            border_default.classList.remove("border_default");
        }
        else{
            navbar.classList.remove("navbar_border");
           
        }
    })
}
function filterProduct(value){
    let buttons = document.querySelectorAll(".button_value");
    buttons.forEach((button) =>{
        if(value.toUpperCase() == button.innerText.toUpperCase()){
            button.classList.add("button_active");
        }
        else{
            button.classList.remove("button_active");
        }
    });
    //select all cards
    let elements = document.querySelectorAll(".products_container");
    elements.forEach((element) => {
        if(value == 'All'){
            element.classList.remove("hidden");
        } else {
            if(element.classList.contains(value)){
                element.classList.remove("hidden");
            } else {
                element.classList.add("hidden");
            }
        }
    });
    //search function
    document.getElementById("search").addEventListener("click", () =>{
        let searchinput = document.getElementById("search_input").value;
        let elements = document.querySelectorAll(".product_name");
        let products_container = document.querySelectorAll(".products_container");
       


        elements.forEach((element,index) =>{
            if(element.value.includes(searchinput.toUpperCase())){
                products_container[index].classList.remove("hidden");                         
            }
           else{
                products_container[index].classList.add("hidden");     
            }
        })
    });
}
 //variables and selectors for total price function 
 document.querySelector(".decrement-btn").setAttribute("disabled", "disabled");
    //ID of total prices of each product
    let totalPrice = document.querySelector(".totalPrice");
    let threeN = document.createElement("input");
    threeN.value = "3900";
    threeN.value.innerText="P";
    threeN.type = "number";
    threeN.name = "price";
    let sevenE = document.createElement("input");
    sevenE.value = "7800";
    sevenE.type = "number";
    sevenE.name = "price";
    let fourE = document.createElement("input");
    fourE.value = "4875";
    fourE.type = "number";
    fourE.name = "price";
    let oneN = document.createElement("input");
    oneN.value = "1950";
    oneN.type = "number";
    oneN.name = "price";
    let orderQuantity_mobile;

        //Increment Button
        document.querySelector(".increment-btn").addEventListener('click', function() {
            orderQuantity_mobile = document.getElementById("orderQuantity_mobile").value
            orderQuantity_mobile++;
            document.getElementById("orderQuantity_mobile").value = orderQuantity_mobile;
            threeN.value = parseInt(threeN.value) + 3900;
            sevenE.value = parseInt(sevenE.value) + 7800;
            fourE.value = parseInt(fourE.value) + 4875;
            oneN.value = parseInt(oneN.value) + 1950;
           
            if (orderQuantity_mobile > 1) {
                document.querySelector(".decrement-btn").removeAttribute("disabled");
                document.querySelector(".decrement-btn").classList.removeAttribute("disabled");
            }
        });
        //Decrement Button
        document.querySelector(".decrement-btn").addEventListener('click', function() {
            orderQuantity_mobile = document.getElementById("orderQuantity_mobile").value
            orderQuantity_mobile--;
            document.getElementById("orderQuantity_mobile").value = orderQuantity_mobile;
            threeN.value = parseInt(threeN.value) - 3900;
            sevenE.value = parseInt(sevenE.value) - 7800;
            fourE.value = parseInt(fourE.value) - 4875;
            oneN.value = parseInt(oneN.value) - 1950;
           
            if (orderQuantity_mobile == 1) {
                document.querySelector(".decrement-btn").setAttribute("disabled", "disabled");
            }
        });
 document.addEventListener("DOMContentLoaded", () => {
     //classes for opening the product details
     let modal = document.querySelector(".abclass");
     let overlay = document.querySelector(".overlay");
     let orderQuantity_mobile = document.getElementById("orderQuantity_mobile");
     let decrement_btn = document.querySelector(".decrement-btn");
     let windows = document.querySelectorAll(".open_abclass");
     
     windows.forEach((window) =>{
        window.addEventListener("click", () =>{
            modal.classList.toggle('active');
            overlay.classList.toggle('active');
            decrement_btn.setAttribute("disabled", "disabled");
        })     
     })
     document.querySelector(".close_abclass").addEventListener("click", () => {
         modal.classList.remove('active');
         overlay.classList.remove('active');
         orderQuantity_mobile.value = 1;
         threeN.value = 3900;
         sevenE.value = 7800;
         fourE.value = 4875;
         oneN.value = 1950;
     });
     overlay.addEventListener("click", () => {
         modal.classList.remove('active');
         overlay.classList.remove('active');
         orderQuantity_mobile.value = 1;
         threeN.value = 3900;
         sevenE.value = 7800;
         fourE.value = 4875;
         oneN.value = 1950;
     });
 });

 //fetch image inside the transaction box
 function showImage_1() {
    document.getElementById("products_img").src = "./cropped/Apic1_cropped.jpg";
 }

 function showImage_2() {
     document.getElementById("products_img").src = "./cropped/Apic2_cropped.jpg";
 }

 function showImage_3() {
     document.getElementById("products_img").src = "./cropped/Apic3_cropped.jpg";
 }

 function showImage_4() {
     document.getElementById("products_img").src = "./cropped/Apic4_cropped.jpg";
 }

 function showImage_5() {
     document.getElementById("products_img").src = "./cropped/Apic5_cropped.jpg";
 }

 function showImage_6() {
     document.getElementById("products_img").src = "./cropped/Apic6_cropped.jpg";
 }

 function showImage_7() {
     document.getElementById("products_img").src = "./cropped/Apic7_cropped.jpg";
 }

 function showImage_8() {
     document.getElementById("products_img").src = "./cropped/Apic8_cropped.jpg";
 }
 
 function showImage_9() {
    document.getElementById("products_img").src = "./other products/Aprod1.jpg";
}

function showImage_10() {
    document.getElementById("products_img").src = "./other products/Aprod2.jpg";
}

function showImage_B1() {
    document.getElementById("products_img").src = "./other products/Aprod3.jpg";
}

function showImage_B2() {
    document.getElementById("products_img").src = "./other products/Aprod4.jpg";
}


 //ID of products' images

            //ID of input products
            const M52_BLACK = document.getElementById("M52 BLACK");
            const M9002_BLACK_BLUE = document.getElementById("M9002 BLACK/BLUE");
            const M100_BLACK_WHITE = document.getElementById("M100 BLACK/WHITE");
            const M37B_BLACK_PURPLE = document.getElementById("M37B/C BLACK/PURPLE");
            const M38B_BLACK_RED = document.getElementById("M38B/C BLACK/RED");
            const M38B_BLACK_PURPLE = document.getElementById("M38B/C BLACK/PURPLE");
            const M37B_BLACK_RED = document.getElementById("M37B/C BLACK/RED");
            const HOSPITALSERIES_M58 = document.getElementById("HOSPITALSERIES_M58");
            const stirrer = document.getElementById("stirrer");
            const socks = document.getElementById("socks");
            const belt = document.getElementById("belt");
            const topi = document.getElementById("topi");

            //ID of hidden products' description
            const M52_text = document.querySelector("#M52_text");
            const M56_text = document.querySelector("#M56_text");
            const M100_text = document.querySelector("#M100_text");
            const M37B1_text = document.querySelector("#M37B1_text");
            const M38B1_text = document.querySelector("#M38B1_text");
            const M38B2_text = document.querySelector("#M38B2_text");
            const M37B2_text = document.querySelector("#M37B2_text");
            const M58_text = document.querySelector("#M58_text");
            const stirrer_text = document.querySelector("#stirrer_text");
            const socks_text = document.querySelector("#socks_text");
            const belt_text = document.querySelector("#belt_text");
            const topi_text = document.querySelector("#topi_text");
                
            //button for getting products
            const get_product_name = document.getElementById("get_product_name1");
            const get_product_name2 = document.getElementById("get_product_name2");
            const get_product_name3 = document.getElementById("get_product_name3");
            const get_product_name4 = document.getElementById("get_product_name4");
            const get_product_name5 = document.getElementById("get_product_name5");
            const get_product_name6 = document.getElementById("get_product_name6");
            const get_product_name7 = document.getElementById("get_product_name7");
            const get_product_name8 = document.getElementById("get_product_name8");
            const get_product_name9 = document.getElementById("get_product_name9");
            const get_product_name10 = document.getElementById("get_product_name10");
            const get_product_nameB1 = document.getElementById("get_product_nameB1");
            const get_product_nameB2 = document.getElementById("get_product_nameB2");

            //inputs where the name of each products will get transferred
            const receive_product_name_pc1 = document.getElementById("receive_product_name_pc1");
            
            
            get_product_name.addEventListener("click", () => {
                //Product name
                receive_product_name_pc1.value = M52_BLACK.value;
                //Product Description
                M52_text.classList.remove("hidden");
                M56_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M38B1_text.classList.add("hidden"); 
                M38B2_text.classList.add("hidden");
                M37B2_text.classList.add("hidden");
                M58_text.classList.add("hidden");    
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden"); 
                totalPrice.append(threeN);
                sevenE.remove();
                oneN.remove();
                fourE.remove();
            });
            get_product_name2.addEventListener("click", () => {
                //Product name
                receive_product_name_pc1.value = M9002_BLACK_BLUE.value;
                //Product Description
                M56_text.classList.remove("hidden");
                M52_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M37B1_text.classList.add("hidden"); 
                M38B1_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M37B2_text.classList.add("hidden");
                M58_text.classList.add("hidden");   
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden");   
                totalPrice.append(sevenE);
                threeN.remove();
                oneN.remove();
                fourE.remove();               
            });
            get_product_name3.addEventListener("click", () => {
                //Product name
                receive_product_name_pc1.value = M100_BLACK_WHITE.value;
                //Product Description
                M100_text.classList.remove("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                M37B1_text.classList.add("hidden"); 
                M38B1_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M37B2_text.classList.add("hidden");
                M58_text.classList.add("hidden");   
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden");
                totalPrice.append(sevenE);
                threeN.remove();
                oneN.remove();
                fourE.remove();
            });
            get_product_name4.addEventListener("click", () => {
                receive_product_name_pc1.value = M37B_BLACK_PURPLE.value;
                M37B1_text.classList.remove("hidden");
                M52_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M38B1_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M37B2_text.classList.add("hidden");
                M58_text.classList.add("hidden");  
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden");
                totalPrice.append(threeN);
                sevenE.remove();
                oneN.remove();
                fourE.remove();
            });
            get_product_name5.addEventListener("click", () => {
                receive_product_name_pc1.value = M38B_BLACK_RED.value;
                M38B1_text.classList.remove("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M37B2_text.classList.add("hidden");
                M58_text.classList.add("hidden"); 
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden");   
                totalPrice.append(threeN);
                sevenE.remove();
                oneN.remove();
                fourE.remove();
            });
            get_product_name6.addEventListener("click", () => {
                receive_product_name_pc1.value = M38B_BLACK_PURPLE.value;
                M38B2_text.classList.remove("hidden");
                M38B1_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                M37B2_text.classList.add("hidden");
                M58_text.classList.add("hidden");     
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden");  
                totalPrice.append(threeN);
                sevenE.remove();
                oneN.remove();
                fourE.remove();
            });
            get_product_name7.addEventListener("click", () => {
                receive_product_name_pc1.value = M37B_BLACK_RED.value;
                M37B2_text.classList.remove("hidden");
                M38B2_text.classList.add("hidden");
                M38B1_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                M58_text.classList.add("hidden");    
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden");  
                totalPrice.append(threeN);
                sevenE.remove();        
                oneN.remove();
                fourE.remove();       
            });
            get_product_name8.addEventListener("click", () => {
                receive_product_name_pc1.value = HOSPITALSERIES_M58.value;
                M58_text.classList.remove("hidden");      
                M37B2_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M38B1_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                stirrer_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                socks_text.classList.add("hidden");
                totalPrice.append(sevenE);
                threeN.remove();
                oneN.remove();
                fourE.remove();
            });
            get_product_name9.addEventListener("click", () => {
                receive_product_name_pc1.value = stirrer.value;
                stirrer_text.classList.remove("hidden");
                socks_text.classList.add("hidden");
                belt_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                M58_text.classList.add("hidden");      
                M37B2_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M38B1_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                totalPrice.append(fourE);
                threeN.remove();
                sevenE.remove();
                oneN.remove();
            });
            get_product_name10.addEventListener("click", () => {
                receive_product_name_pc1.value = socks.value;
                socks_text.classList.remove("hidden");
                stirrer_text.classList.add("hidden"); 
                belt_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                M58_text.classList.add("hidden");      
                M37B2_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M38B1_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                totalPrice.append(oneN);
                fourE.remove();
                threeN.remove();
                sevenE.remove();
            });
            get_product_nameB1.addEventListener("click", () => {
                receive_product_name_pc1.value = belt.value; 
                belt_text.classList.remove("hidden");
                stirrer_text.classList.add("hidden"); 
                socks_text.classList.add("hidden");
                topi_text.classList.add("hidden");
                M58_text.classList.add("hidden");      
                M37B2_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M38B1_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");  
                totalPrice.append(sevenE);
                oneN.remove();
                fourE.remove();
                threeN.remove();
                 
            });
            get_product_nameB2.addEventListener("click", () => {
                receive_product_name_pc1.value = topi.value;
                topi_text.classList.remove("hidden");
                belt_text.classList.add("hidden");
                stirrer_text.classList.add("hidden"); 
                socks_text.classList.add("hidden");
                M58_text.classList.add("hidden");      
                M37B2_text.classList.add("hidden");
                M38B2_text.classList.add("hidden");
                M38B1_text.classList.add("hidden");
                M37B1_text.classList.add("hidden");
                M100_text.classList.add("hidden");
                M56_text.classList.add("hidden");
                M52_text.classList.add("hidden");
                totalPrice.append(oneN);
                fourE.remove();
                threeN.remove();
                sevenE.remove();
            });           