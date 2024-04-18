<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackPanther | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="images1/blogo.png" width="200px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.php">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="login.php">Account</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </nav>
                
                <a href="mycart.php"><img src="images1/kart.png" width="30px" height="30px"></a>
                <img src="images1/menu.jpg" class="menu-icon" onclick="menutoggle()"><br> 
                
            </div>
            <div class="row">
                <div class="col-2">
                   <p><h2 style="font-size:40px;font-family:noto sans">Welcome</h2><h3 style="font-size:30px;font-family:noto sans
"> <?php echo $_SESSION['username']; ?> !!</h3></p>
 
                    
                    <h1> Give your life <br> A New look!</h1>
                    
                    <p>
                        Great Stores, Great Choices, Love shopping?<br>
                        Must have it? We’ve got it!!<br>
                        #Findthenewyoutoday!!
                    </p>
                    <a href="" class="btn">Explore Now &#8594; </a>
                </div>
                <div class="col-2">
                    <img src="images1/mod.gif">
                </div>

            </div>
        </div>
    </div>

    <!---------- featured catogries --------------->

    <div class="catogries">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images1/img1.jpg">
                </div>
                <div class="col-3">
                    <img src="images1/img2.jpg">
                </div>
                <div class="col-3">
                    <img src="images1/img6.jpg">
                </div>
            </div>
        </div>
    </div>

    <!---------- featured products --------------->

    <div class="small-container">
        <h2 class="title"> Featured Products </h2>
        <div class="row">
            <div class="col-4">
                <a href="product details 1.html"> <img src="images/11.jpg">
                    <h4> Men Maroon Printed Round Neck T-shirt
                </a></h4>
                <div class="rating">
                    4
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>Rs 324.00</p>
            </div>
            <div class="col-4">
                <a href="product details 2.html"> <img src="images/21.jpg">
                    <h4> Men Grey Melange Self Design Round Neck T-shirt
                </a></h4>
                
                <div class=" rating">
                    3
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                    &#9734;
                </div>
                <p>Rs 699.00</p>
            </div>
            <div class="col-4">
                <a href="product details 3.html"> <img src="images/31.jpg">
                    <h4>  Men Blue Regular Fit Faded Casual Denim Shirt
                </a></h4>
                
                <div class="rating">
                    4
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>Rs 599.00</p>
            </div>
            <div class="col-4">
                <a href="product details 4.html"> <img src="images/41.jpg">
                    <h4>Men Blue Slim Fit Printed Casual Shirt
                </a></h4>

                <div class="rating">
                    5
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                </div>
                <p>Rs 399.00</p>
            </div>
        </div>

        <!---------------latest products--------------------->

        <h2 class="title"> Latest Products </h2>
        <div class="row">
            <div class="col-4">
                <a href="product details 5.html"> <img src="images/51.jpg">
                    <h4> Women Navy Blue & Off White Pure Cotton Checked Kurta
                </a></h4>

                <div class="rating">
                    5
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                </div>
                <p>Rs 2490.00</p>
            </div>
            <div class="col-4">
                <a href="product details 6.html"> <img src="images/61.jpg">
                    <h4> Floral Print Straight Cotton Kurta With Keyhole Neck
                </a></h4>

                <div class=" rating">
                    4
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>Rs 527.00</p>
            </div>
            <div class="col-4">
                <a href="product details 7.html"> <img src="images/71.jpg">
                    <h4>Black Dobby Sheer Boxy Shirt
                </a></h4>

                <div class="rating">
                    4
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>Rs 999.00</p>
            </div>
            <div class="col-4">
                <a href="product details 8.html"> <img src="images/81.jpg">
                    <h4> Women Black Classic Regular Fit Printed Casual Shirt
                </a></h4>

                <div class="rating">
                    4
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>Rs 649.00</p>
            </div>
            <div class="col-4">
                <a href="product details 9.html"> <img src="images/91.jpg">
                    <h4> Men Black Slim Tapered Fit Light Fade Stretchable Crop Jeans
                </a></h4>

                <div class=" rating">
                    4
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>Rs 944.00</p>
            </div>
            <div class="col-4">
                <a href="product details 10.html"> <img src="images/10 1.jpg">
                    <h4>Women Blue Regular Fit High-Rise Clean Look Paper Bag Waist Jeans
                </a></h4>

                <div class="rating">
                    5
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                </div>
                <p>Rs 699.00</p>
            </div>
            <div class="col-4">
                <a href="product details 11.html"> <img src="images/11 1.jpg">
                    <h4>Men Multicoloured Mesh Walking Shoes
                </a></h4>

                <div class="rating">
                    5
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                </div>
                <p>Rs 1824.00</p>
            </div>
            <div class="col-4">
                <a href="product details 12.html"> <img src="images/12 1.jpg">
                    <h4> Men Beige & Cream-Coloured Woven Design Metaflash Running Shoes
                </a></h4>

                <div class="rating">
                    4
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9733;
                    &#9734;
                </div>
                <p>Rs 499.00</p>
            </div>
        </div>
    </div>

    <!------------ offer --------------->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images1/band.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p><b> Exclusively Available on BlackPanther </b></p>
                    <h1>Mi Band 6</h1>
                    <small>
                        Smart Band 6 Full screen 1.56" AMOLED display, 20 Days Battery, 5ATM Water Resistant,
                        classic shape with an innovative large screen and rounded edges, Compatible with Android and
                        iOS,
                        Connectivity - Bluetooth 5.0
                    </small>
                    <a href="MI BAND.html" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!--------------- testimonial ------------->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">

                    <p>I’m so glad I decided to go with BlackPanther, and have a client waiting for me to get our own
                        site up
                        so I can put theirs up for them. The new templates will certainly give them some more options.
                        Good job, as usual. I just can’t say enough for your business.

                    </p>
                    <div class="rating">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </div>
                    <img src="images1/girl.jpg">
                    <h3> Mansi Rajput </h3>
                </div>
                <div class="col-3">

                    <p>Your products are affordable, and it works all the time. I've been a customer of yours
                        for years, so I've seen you grow and have witnessed the changes from minor
                        updates to major updates. Thanks for doing what you do and thanks for
                        the help you give.
                    </p>
                    <div class="rating">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </div>
                    <img src="images1/tavishi.jpg">
                    <h3> Tavishi </h3>
                </div>
                <div class="col-3">

                    <p>Thanks for the all the time and effort you guys put into your products.
                        I must also say that before I purchased your product I was never happy with support forums.
                        You guys though have set a standard by which I'll measure everyone else by.
                    </p>
                    <div class="rating">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </div>
                    <img src="images1/boi.jpg">
                    <h3> Chirag Yadav </h3>
                </div>
            </div>
        </div>
    </div>

    <!------------- brands --------------->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images1/google.png">
                </div>
                <div class="col-5">
                    <img src="images1/nike.png">
                </div>
                <div class="col-5">
                    <img src="images1/levis.png">
                </div>
                <div class="col-5">
                    <img src="images1/fast.png">
                </div>
                <div class="col-5">
                    <img src="images1/wood.png">
                </div>
            </div>
        </div>
    </div>

    <!------------ footer ------------>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3> Download our App</h3>
                    <p> Download App for Android / iOS Mobile Phone. </p>
                    <div class="add-logo">
                        <img src="images1/play.png">
                        <img src="images1/app.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images1/blogo1.png" width="200px">
                    <p> Our Purpose is to Sustaintiably make the Pleasure and Benefits of Fashion accessible to the
                        many.</p>
                </div>
                <div class="footer-col-3">
                    <h3> Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3> Follow Us </h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright"> Copyright 2021 </p>
        </div>
    </div>

    <!-------js for toggle menu -------->

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>
