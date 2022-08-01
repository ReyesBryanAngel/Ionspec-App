<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e82b4ef8da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        <?php include "../css/products.css" ?>
    </style>
    <title>IONIZE EYEWARE</title>
</head>

<body>
    <div class="navbarContainer">
        <div class="navbar-head">
            <a href="../index.php">
                <h1>IONSPEC</h1>
            </a>
        </div>
        <div class="box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" size="13" placeholder="Search Products">
        </div>
    </div>

    <!--Overlay of the Page-->
    <div class="overlay"></div>

    <!--Products Page-->
    <h1 class="products_head">MGI PRODUCTS</h1>
    <div class="products_wrapper">

        <div class="products_container">
            <img src="../other products/Aprod1.jpg" alt=""><br>
            <input readonly type="text" value="MGI NANO STIRRER" name="#" id="stirrer">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_1()" class="fa-solid fa-cart-shopping open_abclass1" id="get_product_name1" onclick="getText()"></i>
            </div>
        </div>

        <div class="products_container">
            <img src="../other products/Aprod2.jpg" alt=""><br>
            <input readonly type="text" value="NANO HEALTH SOCKS" name="#" id="socks">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_2(event)" class="fa-solid fa-cart-shopping open_abclass2" id="get_product_name2" onclick="getText()"></i>
            </div>
        </div>

        <div class="products_container">
            <img src="../other products/Aprod3.jpg" alt=""><br>
            <input readonly type="text" value="MGI NANO BELT" name="#" id="belt">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_3(event)" class="fa-solid fa-cart-shopping open_abclass3" id="get_product_name3" onclick="getText()"></i>
            </div>
        </div>

        <div class="products_container">
            <img src="../other products/Aprod4.jpg" alt=""><br>
            <input readonly type="text" value="MGI NANO TOPI" name="#" id="topi">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_4()" class="fa-solid fa-cart-shopping open_abclass4" id="get_product_name4" onclick="getText()"></i>
            </div>
        </div>

        <div class="products_container">
            <img src="../other products/Aprod5.jpeg" alt=""><br>
            <input readonly type="text" value="M38B PURPLE" name="#" id="product_name_M38BPURPLE">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_5()" class="fa-solid fa-cart-shopping open_abclass5" id="get_product_name5" onclick="getText()"></i>
            </div>
        </div>

        <div class="products_container">
            <img id="M100BLACK_img" src="" alt=""><br>
            <input readonly type="text" value="M100 BLACK" name="#" id="product_name_M100BlACK">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_6()" class="fa-solid fa-cart-shopping open_abclass6" id="get_product_name6"></i>
            </div>
        </div>

        <div class="products_container">
            <img id="M60_img" src="" alt=""><br>
            <input readonly type="text" value="M38B BLUE" name="#" id="product_name_SERIESM60">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_7()" class="fa-solid fa-cart-shopping open_abclass7" id="get_product_name7"></i>
            </div>
        </div>
    </div>
    <!------Customer's Infomation PC------>
    <div class="abclass">
        <button class="close_abclass">&times;</button>
        <form action="./php/order_db.php" method="post" class="form">
            <div class="products_details">
                <img id="products_img">
                <input readonly type="text" id="receive_product_name_pc1">
                <p id="stirrer_text" class="hidden">MGI Nano Stirrer will assist to break Water and Oxygen molecular clusters to be SMALLER and SOLID, so they are EASIER to be absorbed by body and its far infrared content generates vibration with water molecules to ionize and ACTIVATE water molecules, making WATER IONIZED and ENERGIZED.</p>

                <p id="socks_text" class="hidden">MGI Nano Health Socks is equipped with the attributes of Far Infrared (F.I.R), Nano Silver, Organic Germanium and also with negative ions by implanting them at acupuncture points on the entire sole of the foot. Enjoy reflexology massage anytime and anywhere using socks with 5 ingredients, first and only in the world. Made with high quality cotton fiber material that is smooth, soft, strong and absorbs sweat.</p>

                <p id="belt_text" class="hidden">MGI - Nano Health & Slimming Belt is equipped with Far Infrared (FIR) attribute, Nano Silver, Organic Germanium, and also negative ion. It has numerous stone grains which contain high far infrared that can provide relaxation effect. Contains natural tourmaline mineral which can release Far Infrared (FIR) and negative ion. The far infrared wave it releases is 7-14nm, a very suitable dose to be accepted by human body.</p>

                <p id="topi_text" class="hidden">MGI Nano Topi is equipped with a Far Infrared (FIR) attribute, Nano Silver, Organic Germanium, and negative ion embedded in its fabric fiber. Its smooth and cool fabric fiber provides relaxation and comfort to your head, making your life fresher, healthier, and more vibrant all day.</p>
            </div>
            <!------Customer's Infomation MOBILE------>
            <div class="abclass_content">
                <div class="entry">
                    <input id="form_input" type="text" name="fname" placeholder="First Name" required><br>
                    <input id="form_input" type="text" name="lname" placeholder="Last Name" required><br>
                    <input id="form_input" type="number" name="cell_number" placeholder="Contact Number" required><br>
                    <input id="form_input" type="text" name="address" placeholder="Complete Address" required><br>
                    <input id="receive_product_name_pc2" name="productname" readonly>
                </div>
                <div class="price_fixed">
                    <div class="totalPrice">
                        <span>₱</span>
                        <input type="number" id="totalPricejs" name="price" style="width:90px" value="7800" readonly>
                    </div>
                    <div class="quantity_increment">
                        <div class="col-md-4">
                            <div class="input-group mb-1" style="width:130px">
                                <button id='minus' class="input-group-text minus-btn disabled" type="button">-</button>
                                <input readonly id="orderQuantity" type="number" name="order_quantity" class="form-control text-center input-qty bg-white" value="1">
                                <button id='add' class="input-group-text plus-btn disabled" type="button">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Mode of Payment Selector-->
                <select name="modeofpayment" id="confirm_select" required>
                    <option value="">Delivery Options</option>
                    <option value="Cash On Delivery via LBC">Cash On Delivery via LBC</option>
                    <option value="Cash On Pickup via LBC">Cash On Pickup via LBC</option>
                    <option value="Gcash via J&T">Gcash via J&T</option>
                </select>
                <div id="submit">
                    <button type="submit" onclick="submit_alert()" id="submit">Place an Order</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function submit_alert() {
            var confirm_select = document.getElementById("confirm_select");
            if (confirm_select && confirm_select.value) {
                alert("Thank you for ordering! Please check your email to track your order and receive an update regarding your payment.");
            } else {
                alert("Please select one from delivery options");
            }
        }
        //ID of input products
        const stirrer = document.getElementById("stirrer");
        const socks = document.getElementById("socks");
        const belt = document.getElementById("belt");
        const topi = document.getElementById("topi");

        //ID of hidden products' description
        const stirrer_text = document.querySelector("#stirrer_text");
        const socks_text = document.querySelector("#socks_text");
        const belt_text = document.querySelector("#belt_text");
        const topi_text = document.querySelector("#topi_text");


        //button for getting products
        const get_product_name1 = document.getElementById("get_product_name1");
        const get_product_name2 = document.getElementById("get_product_name2");
        const get_product_name3 = document.getElementById("get_product_name3");
        const get_product_name4 = document.getElementById("get_product_name4");


        //inputs where the products will get transferred
        const receive_product_name_pc1 = document.getElementById("receive_product_name_pc1");
        const receive_product_name_pc2 = document.getElementById("receive_product_name_pc2");

        get_product_name1.addEventListener("click", () => {
            receive_product_name_pc1.value = stirrer.value;
            receive_product_name_pc2.value = stirrer.value;
            stirrer_text.classList.remove("hidden");
            socks_text.classList.add("hidden");
            belt_text.classList.add("hidden");
            topi_text.classList.add("hidden");
        });
        get_product_name2.addEventListener("click", () => {
            receive_product_name_pc1.value = socks.value;
            receive_product_name_pc2.value = socks.value;
            stirrer_text.classList.add("hidden");
            socks_text.classList.remove("hidden");
            belt_text.classList.add("hidden");
            topi_text.classList.add("hidden");
        });
        get_product_name3.addEventListener("click", () => {
            receive_product_name_pc1.value = belt.value;
            receive_product_name_pc2.value = belt.value;
            stirrer_text.classList.add("hidden");
            belt_text.classList.remove("hidden");
            socks_text.classList.add("hidden");
            topi_text.classList.add("hidden");
        });
        get_product_name4.addEventListener("click", () => {
            receive_product_name_pc1.value = topi.value;
            receive_product_name_pc2.value = topi.value;
            stirrer_text.classList.add("hidden");
            topi_text.classList.remove("hidden");
            socks_text.classList.add("hidden");
            belt_text.classList.add("hidden");
        });
    </script>
    <script>
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        var total_mobile = document.getElementById('totalPricejs');
        var orderQuantity_mobile;

        //Total price operation for mobile
        document.querySelector(".plus-btn").addEventListener('click', function() {
            orderQuantity_mobile = document.getElementById("orderQuantity").value
            orderQuantity_mobile++;
            document.getElementById("orderQuantity").value = orderQuantity_mobile;
            total_mobile.value = parseInt(total_mobile.value) + 7800;

            if (orderQuantity_mobile > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.removeAttribute("disabled");
            }
        });
        document.querySelector(".minus-btn").addEventListener('click', function() {
            orderQuantity_mobile = document.getElementById("orderQuantity").value
            orderQuantity_mobile--;
            document.getElementById("orderQuantity").value = orderQuantity_mobile;
            total_mobile.value = parseInt(total_mobile.value) - 7800;
            if (orderQuantity_mobile == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            }
        });

        document.querySelector(".close_abclass").addEventListener("click", () => {
            total_mobile.value = 7800;
            document.getElementById("orderQuantity").value = 1;
        })

        document.addEventListener("DOMContentLoaded", () => {
            let open_abclass1 = document.querySelector(".open_abclass1");
            let open_abclass2 = document.querySelector(".open_abclass2");
            let open_abclass3 = document.querySelector(".open_abclass3");
            let open_abclass4 = document.querySelector(".open_abclass4");
            let open_abclass5 = document.querySelector(".open_abclass5");
            let open_abclass6 = document.querySelector(".open_abclass6");
            let open_abclass7 = document.querySelector(".open_abclass7");
            let open_abclass8 = document.querySelector(".open_abclass8");

            open_abclass1.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
            open_abclass2.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
            open_abclass3.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
            open_abclass4.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
            open_abclass5.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
            open_abclass6.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
            open_abclass7.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
            open_abclass8.addEventListener("click", () => {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
            });
        });
    </script>
    <script src="../js/products.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</body>