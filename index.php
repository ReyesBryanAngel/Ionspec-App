<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e82b4ef8da.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!---Navbar toggling--->
    <script>
        jQuery(function($) {
            var $navbar = $('.navbarContainer');
            $(window).scroll(function(event) {
                var $current = $(this).scrollTop();
                if ($current > 0) {
                    $navbar.addClass('navbar_color');
                } else {
                    $navbar.removeClass('navbar_color');
                }
            });
        });
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        <?php include "./css/style.css" ?>
    </style>
    <title>IONSPEC</title>
</head>

<body>
    <!---Navbar--->
    <div class="navbarContainer">
        <div class="navbar-head">
            <h1>IONSPEC</h1>
        </div>
        <a href="#" data-toggle="collapse" data-target="#collapsible">
            <nav class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </nav>
        </a>
        <div class="navbarDesktop">
            <a href="#one">Home</a>
            <a href="#two"> Health Benefits</a>
            <a href="#four">Testimonies</a>
            <a href="#five">Contacts</a>
        </div>

        <!--------------------------------Mobile Navbar---------------------------------->
        <nav class="collapse-parent">
            <div class="collapse" id="collapsible">
                <div class="collapse-me">
                    <a href="#one">
                        <div data-toggle="collapse" data-target="#collapsible">Home</div>
                    </a>
                    <a href="#two">
                        <div data-toggle="collapse" data-target="#collapsible"> Health Benefits</div>
                    </a>
                    <a href="#four">
                        <div data-toggle="collapse" data-target="#collapsible">Testimonies</div>
                    </a>
                    <a href="#five">
                        <div data-toggle="collapse" data-target="#collapsible">Contacts</div>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!--Overlay of the Page-->
    <div class="overlay_video hidden"></div>
    <div class="overlay"></div>
    <!--Home Page-->
    <div class="homepage_background">
        <div class="homepage_parent" id="one">
            <div class="homepage">
                <h1>The Eye Glass That</h1>
                <h2>Makes You Feel Awesome</h2>
                <a href="#three"><button>View Products</button></a>
            </div>
        </div>
    </div>

    <!--About Us Page-->
    <div class="about_page">
        <h1 id="two"> HEALTH BENEFITS</h1>
        <img src="./pictures/male.jpg" alt="aboutus_photo">
        <div class="about_page_content">
            <span>This sections provides some important details about nano technology that helps us overcome common illnesses.</span><br>
            <button class="open_readmore">Read More</button>
        </div>
    </div>

    <!--Mode of Payments Page-->
    <div class="items_wrapper">
        <div class="items_container">
            <img style="width:60px;" src="./pictures/truck.png" alt="truck">
            <p>Free Shipping Nationwide.<br>
            </p>
        </div>
        <div class="items_container">
            <img src="./pictures/lbc.png" alt="">
            <p>COD/COP via LBC.</p>
        </div>
        <div class="items_container">
            <img style="width:60px;" src="./pictures/jnt.png" alt="">
            <p>J&T courier for payment first transaction.</p>
        </div>
        <div class="items_container">
            <img style="width:90px;" src="./pictures/gcash.png" alt="">
            <p>Payment first via Gcash.</p>
        </div>
    </div>

    <div class="search-wrapper">
        <div class="search_container">
            <input type="search" id="search_input" placeholder="Please search an Item...">
            <button id="search">Search</button>
        </div>
        <span id="invalid_search" class="hidden" style="color:red;">No item found</span>
    </div>
    <div class="buttons">
        <button onclick="filterProduct('All')" class="button_value">All</button>
        <button onclick="filterProduct('EyeGlasses')" class="button_value">EyeGlasses</button>
        <button onclick="filterProduct('OtherProducts')" class="button_value"> OtherProducts</button>
    </div>
    <!--Products Page-->
    <h1 class="products_head" id="three">MGI PRODUCTS</h1>
    <div class="products_wrapper">
        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic1.jpg" alt=""><br>
            <img style="height:30vh;" class="hover-img" src="./cropped/Apic1_cropped.jpg">
            <input readonly type="text" class="product_name" value="M52 BLACK" name="#" id="M52 BLACK">
            <div class="price">
                <span>P3,900</span>
                <i id="get_product_name1" onclick="showImage_1()" class="fa-solid fa-cart-shopping open_abclass1"></i>
            </div>
        </div>

        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic2.jpg" alt=""><br>
            <img style="height:30vh;" class="hover-img" src="./cropped/Apic2_cropped.jpg">
            <input readonly type="text" class="product_name" value="HOSPITAL SERIES M56" name="#" id="M9002 BLACK/BLUE">
            <div class="price">
                <span>P7,800</span>
                <i id="get_product_name2" onclick="showImage_2()" class="fa-solid fa-cart-shopping open_abclass2"></i>
            </div>
        </div>

        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic3.jpg" alt=""><br>
            <img style="height:27vh;" class="hover-img" src="./cropped/Apic3_cropped.jpg">
            <input readonly type="text" class="product_name" value="M100 BLACK/WHITE" name="#" id="M37 YELLOW/BLACK">
            <div class="price">
                <span>P7,800</span>
                <i id="get_product_name3" onclick="showImage_3()" class="fa-solid fa-cart-shopping open_abclass3"></i>
            </div>
        </div>

        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic4.jpg" alt=""><br>
            <img style="height:26vh;" class="hover-img" src="./cropped/Apic4_cropped.jpg">
            <input readonly type="text" class="product_name" value="M37B BLACK/PURPLE" name="#" id="M37B/C BLACK/PURPLE">
            <div class="price">
                <span>P3,900</span>
                <i id="get_product_name4" onclick="showImage_4()" class="fa-solid fa-cart-shopping open_abclass4"></i>
            </div>
        </div>

        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic5.jpg" alt=""><br>
            <img style="height:26vh;" class="hover-img" src="./cropped/Apic5_cropped.jpg">
            <input readonly type="text" class="product_name" value="M38B BLACK/RED" name="#" id="M38B/C BLACK/RED">
            <div class="price">
                <span>P3,900</span>
                <i id="get_product_name5" onclick="showImage_5()" class="fa-solid fa-cart-shopping open_abclass5"></i>
            </div>
        </div>

        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic6.jpg" alt=""><br>
            <img style="height:27vh;" class="hover-img" src="./cropped/Apic6_cropped.jpg">
            <input readonly type="text" class="product_name" value="M38B BLACK/PURPLE" name="#" id="M38B/C BLACK/PURPLE">
            <div class="price">
                <span>P3,900</span>
                <i id="get_product_name6" onclick="showImage_6()" class="fa-solid fa-cart-shopping open_abclass6"></i>
            </div>
        </div>

        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic7.jpg" alt=""><br>
            <img class="hover-img" src="./cropped/Apic7_cropped.jpg">
            <input readonly type="text" class="product_name" value="M37B BLACK/RED" name="#" id="M37B/C BLACK/RED">
            <div class="price">
                <span>P3,900</span>
                <i id="get_product_name7" onclick="showImage_7()" class="fa-solid fa-cart-shopping open_abclass7"></i>
            </div>
        </div>
        <div class="products_container EyeGlasses hidden">
            <img src="./model_images/Apic9.jpg" alt=""><br>
            <img class="hover-img" src="./cropped/Apic8_cropped.jpg">
            <input readonly type="text" class="product_name" value="HOSPITAL SERIES M58" name="#" id="HOSPITALSERIES_M58">
            <div class="price">
                <span>P7,800</span>
                <i id="get_product_name8" onclick="showImage_8()" class="fa-solid fa-cart-shopping open_abclass8"></i>
            </div>
        </div>

        <div class="products_container OtherProducts hidden">
            <img src="./other products/Aprod1.jpg" alt=""><br>
            <img style="height:38vh;" class="hover-img" src="./cropped/Apic9_cropped.jpg">
            <input readonly type="text" class="product_name" value="MGI NANO STIRRER" name="#" id="stirrer">
            <div class="price">
                <span>P4,875</span>
                <i onclick="showImage_9()" class="fa-solid fa-cart-shopping open_abclass9" id="get_product_name9"></i>
            </div>
        </div>

        <div class="products_container OtherProducts hidden">
            <img src="./other products/Aprod2.jpg" alt=""><br>
            <img style="height:38vh;" class="hover-img" src="./cropped/Apic10_cropped.jpg">
            <input readonly type="text" class="product_name" value="NANO HEALTH SOCKS" name="#" id="socks">
            <div class="price">
                <span>P1,950</span>
                <i onclick="showImage_10()" class="fa-solid fa-cart-shopping open_abclass10" id="get_product_name10"></i>
            </div>
        </div>

        <div class="products_container OtherProducts hidden">
            <img src="./other products/Aprod3.jpg" alt=""><br>
            <img style="height:38vh;" class="hover-img" src="./cropped/Bpic1_cropped.jpg">
            <input readonly type="text" class="product_name" value="MGI NANO BELT" name="#" id="belt">
            <div class="price">
                <span>P7,800</span>
                <i onclick="showImage_B1()" class="fa-solid fa-cart-shopping Bopen_abclass1" id="get_product_nameB1"></i>
            </div>
        </div>

        <div class="products_container OtherProducts hidden">
            <img src="./other products/Aprod4.jpg" alt=""><br>
            <img style="height:38vh;" class="hover-img" src="./cropped/Bpic2_cropped.jpg">
            <input readonly type="text" class="product_name" value="MGI NANO TOPI" name="#" id="topi">
            <div class="price">
                <span>P1,950</span>
                <i onclick="showImage_B2()" class="fa-solid fa-cart-shopping Bopen_abclass2" id="get_product_nameB2"></i>
            </div>
        </div>
    </div>
    <!------Customer's Infomation PC------>
    <div class="abclass hidden">
        <button class="close_abclass">&times;</button>
        <form action="./php/order_db.php" method="post" class="form">
            <div class="products_details">
                <img id="products_img" style="width:350px;">

                <input readonly type="text" id="receive_product_name_pc1">
                <p id="M52_text" class="hidden">M52 Ionspec Nanospec MGI medical glasses from MGI are equipped with a Germanium Stone attribute, Far Infrared (FIR), Nano Silver, tourmaline stone, and also Negative Ion embedded in its temples and frames through nanotechnology from Germany making it the only glasses with medical functions in the world. It is made of an elastic and light material with fascinating shapes and colors making these medical glasses FAVORITE for many people since they are suitable for various ages, facial shapes, genders, and other aspects.</p>

                <p id="M56_text" class="hidden">M56 Ionspec Nanospec MGI Hospital Grade medical glasses from MGI are equipped with a Germanium Stone attribute, Far Infrared (FIR), Nano Silver, tourmaline stone, and also Negative Ion embedded in its temples and frames through nanotechnology from Germany making it the only glasses with medical functions in the world. IonSpec M57 medical glasses are designed for PROFESSIONALS.</p>

                <p id="M100_text" class="hidden">M100 White Black Hospital Grade Ionspec Nanospec MGI medical glasses from MGI are glasses that have been through various experiments, certifications, and clinical tests to samples in a hospital with 300 patients in which every year, it is found that 90% patients as samples experience improvements up to 60% for all types of visual disorders such as myopia, hypermetropia, cataract, and glaucoma.</p>

                <p id="M37B1_text" class="hidden">M37 B/C Violet Black Ionspec Nanospec MGI medical glasses from MGI are equipped with a Germanium Stone attribute, Far Infrared (FIR), Nano Silver, tourmaline stone, and also Negative Ion embedded in its temples and frames through nanotechnology from Germany making it the only glasses with medical functions in the world. It is made of an elastic and light material with fascinating shapes and colors making these medical glasses FAVORITE for many people since they are suitable for various ages, facial shapes, genders, and other aspects.</p>

                <p id="M38B1_text" class="hidden">M38 B/C Red Black Ionspec Nanospec MGI medical glasses from MGI are equipped with a Germanium Stone attribute, Far Infrared (FIR), Nano Silver, tourmaline stone, and also Negative Ion embedded in its temples and frames through nanotechnology from Germany making it the only glasses with medical functions in the world. It is made of an elastic and light material with fascinating shapes and colors making these medical glasses FAVORITE for many people since they are suitable for various ages, facial shapes, genders, and other aspects.</p>

                <p id="M38B2_text" class="hidden">M38 B/C Purple Black Ionspec Nanospec MGI medical glasses from MGI are equipped with a Germanium Stone attribute, Far Infrared (FIR), Nano Silver, tourmaline stone, and also Negative Ion embedded in its temples and frames through nanotechnology from Germany making it the only glasses with medical functions in the world. It is made of an elastic and light material with fascinating shapes and colors making these medical glasses FAVORITE for many people since they are suitable for various ages, facial shapes, genders, and other aspects.</p>

                <p id="M37B2_text" class="hidden">NanoSpec M37B/C glasses from MGI are equipped with a Germanium Stone attribute, Far Infrared (FIR), Nano Silver, tourmaline stone, and also Negative Ion embedded in its temples and frames through nanotechnology from Germany. It is made of an elastic and light material with fascinating shapes and colors making these medical glasses FAVORITE for many people since they are suitable for various ages, facial shapes, genders, and other aspects.</p>

                <p id="M58_text" class="hidden">M58 Ionspec Nanospec MGI Hospital Grade medical glasses from MGI are equipped with a Germanium Stone attribute, Far Infrared (FIR), Nano Silver, tourmaline stone, and also Negative Ion embedded in its temples and frames through nanotechnology from Germany making it the only glasses with medical functions in the world. IonSpec M58 medical glasses are designed for PROFESSIONALS.</p>

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
                        <input id="totalPrice_M52" class="hidden" type="number" name="price" style="width:90px" value="3900" readonly>
                        <input id="totalPrice_M56" class="hidden" type="number" name="price" style="width:90px" value="7800" readonly>
                        <input id="totalPrice_stirrer" class="hidden" type="number" name="price" style="width:90px" value="4875" readonly>
                        <input id="totalPrice_socks" class="hidden" type="number" name="price" style="width:90px" value="1950" readonly>
                    </div>
                    <div class="quantity_increment">
                        <div class="col-md-4">
                            <div class="input-group mb-1" style="width:130px">
                                <button id='minus' class="input-group-text decrement-btn disabled" type="button">-</button>
                                <input readonly id="orderQuantity_mobile" type="number" name="order_quantity" class="form-control text-center input-qty bg-white" value='1'>
                                <button id='add' class="input-group-text increment-btn disabled" type="button">+</button>
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
    <!---Delivery Option input requirement--->
    <script>
        function submit_alert() {
            var confirm_select = document.getElementById("confirm_select");
            if (confirm_select && confirm_select.value) {
                alert("Thank you for ordering! Please check your email to track your order and receive an update regarding your payment.");
            } else {
                alert("Please select one from delivery options");
            }
        }
    </script>
    <script src="./js/main.js"></script>
    <!---------------------Videos Page------------------------->
    <h1 class="videos_head">TESTIMONIES</h1>
    <div class="videos_wrapper" id="four">
        <div class="main_video">
            <div class="main_img">
                <img src="./pictures/main_thumbnail.PNG" alt="">
            </div>
            <div class="main_playButton">
                <i class="fa-solid fa-play fa-2x mobile" onclick="playVideo_mobile('testimonies/video.mp4')"></i>
            </div>
            <!---------VideoPlayer-------->
            <div class="videoPlayer">
                <div class="video_grid">
                    <button id="close_id" class="close_video" onclick="stopVideo()">&times;</button>
                    <video controls autoplay id="myVideo"></video>
                </div>
            </div>
        </div>
        <!----Small Videos---->
        <div class="small_videos" id="scroll">
            <div class="small_videos_grid">
                <div class="small_img">
                    <img src="./pictures/argela.PNG" alt="">
                </div>
                <div class="small_playButton">
                    <i class="fa-solid fa-play fa-2x mobile" onclick="playVideo_mobile('testimonies/testimony_2.mp4')"></i>
                </div>
                <h3>Argela B. Eguia</h3>
            </div>

            <div class="small_videos_grid">
                <div class="small_img">
                    <img src="./pictures/loleng.PNG" alt="">
                </div>
                <div class="small_playButton">
                    <i class="fa-solid fa-play fa-2x mobile" onclick="playVideo_mobile('testimonies/testimony_3.mp4')"></i>
                </div>
                <h3>Tita Loleng</h3>
            </div>

            <div class="small_videos_grid">
                <div class="small_img">
                    <img src="./pictures/liza.PNG" alt="">
                </div>
                <div class="small_playButton">
                    <i class="fa-solid fa-play fa-2x mobile" onclick="playVideo_mobile('testimonies/testimony_5.mp4')"></i>
                </div>
                <h3>Liza Hernandez</h3>
            </div>

            <div class="small_videos_grid">
                <div class="small_img">
                    <img src="./pictures/janet.PNG" alt="">
                </div>
                <div class="small_playButton">
                    <i class="fa-solid fa-play fa-2x mobile" onclick="playVideo_mobile('testimonies/testimony_7.mp4')"></i>
                </div>
                <h3>Jannette Casanova</h3>
            </div>

            <div class="small_videos_grid">
                <div class="small_img">
                    <img src="./pictures/cataract_patient.PNG" alt="">
                </div>
                <div class="small_playButton">
                    <i class="fa-solid fa-play fa-2x mobile" onclick="playVideo_mobile('testimonies/testimony2.mp4')"></i>
                </div>
                <h3>Cataract Patient</h3>
            </div>
        </div>
    </div>
    <!---Script for the appearance of videos--->
    <script>
        var myVideo = document.getElementById("myVideo");
        var overlay_video = document.querySelector(".overlay_video");

        function playVideo_mobile(file) {
            myVideo.src = file;
            myVideo.style.display = "block";
            close_id.style.display = "block";
            overlay_video.classList.remove("hidden");
        }

        function stopVideo(file) {
            myVideo.src = file;
            myVideo.style.display = "none";
            close_id.style.display = "none";
            overlay_video.classList.add("hidden");
        }
    </script>
    <!----------------------------------Footer--------------------------------->
    <footer>
        <div class="parent" id="five">
            <div class="parent-col">
                <div class="col1">
                    <h1>About Us</h1>
                    <p>Nature Tech Online Store is owned by May Reyes who is distributor of MGI products. The products that are available in this store are natural, non-toxic and organic.</p>
                    <div class="lock">
                        <p>Online Payment Is Secured</p>
                    </div>
                    <div class="col1-cards">
                        <img style="width:50px;" src="./pictures/lbc.png" alt="lbc">
                        <img style="width:60px;" src="./pictures/truck.png" alt="truck">
                        <img style="width:60px;" src="./pictures/jnt.png" alt="">
                    </div>
                </div>
            </div>
            <div class="parent-col3">
                <div class="col3">
                    <h1>Reach Us</h1>
                    <div class="col3-info">
                        <div class="loc">
                            <div class="contact_text">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>C. Alvarez St. Barangay 4 Nasugbu, Batangas</p>
                            </div>
                        </div>
                        <div class="phone">
                            <div class="contact_text">
                                <i class="fa-solid fa-square-phone"></i>
                                <p class="phone-address">09472774555</p>
                            </div>
                        </div>
                        <div class="email">
                            <div class="contact_text">
                                <i class="fa-solid fa-envelope"></i>
                                <p>mayoreyes39@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="social">
                        <div class="fb">
                            <a href="https://www.facebook.com/mlabraguereyes"><i class="fa-brands fa-facebook-f fa-2x"></i></a>
                        </div>
                        <div class="ig">
                            <a href="https://www.instagram.com/may.reyes.wawanasugbu.lbmr/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="developer_pc">
            <p>Copyright &copy;2022 IonSpec. Designed By Angel Bryan Reyes</p>
        </div>
    </footer>

    <div class="readmore_article" id="scroll_readmore">
        <div class="readmore_scroll">
            <div class="readmore_content">
                <img src="./other products/benefits1.jpg" alt="">
            </div>

            <div class="readmore_content">
                <img src="./other products/benefits2.jpg" alt="">
            </div>

            <div class="readmore_content">
                <img src="./other products/benefits4.jpg" alt="">
            </div>
            <div class="readmore_content">
                <img src="./other products/benefits5.jpg" alt="">
            </div>
            <div class="readmore_content">
                <img src="./other products/benefits6.jpg" alt="">
            </div>
            <button class="close_readmore">Read Less</button>
        </div>
    </div>
    <script>
        const readmore_article = document.querySelector(".readmore_article");
        const overlay = document.querySelector(".overlay");
        const open_readmore = document.querySelector(".open_readmore");
        const close_readmore = document.querySelector(".close_readmore");

        open_readmore.addEventListener("click", () => {
            overlay.classList.toggle('active');
            readmore_article.classList.toggle('active');
        });
        close_readmore.addEventListener("click", () => {
            overlay.classList.remove('active');
            readmore_article.classList.remove('active');
        });
        overlay.addEventListener("click", () => {
            overlay.classList.remove('active');
            readmore_article.classList.remove('active');
        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</body>

</html>