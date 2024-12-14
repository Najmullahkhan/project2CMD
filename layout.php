<?php session_start();

if (empty($_SESSION["emaill"])){
header("location:login.php");
    }else{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SR-Baloch-shop</title>
    <link rel="stylesheet" href="pages/css/style.css">
    <link rel="stylesheet" href="pages/css/responce.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="https://icons.veryicon.com/png/o/miscellaneous/color-work-icon/mobile-commerce.png" alt="">
            <h3>Najmullah</h3>

        </div>
        <div class="pages">
            <a href="">Home</a>
            <a href="pages\shop.html">Shop</a>
            <a href="">Blogs</a>
            <input type="text">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="search  product">
            <div class="iconbox"><i class="fa-solid fa-magnifying-glass"></i></div>
        </div>
        <div class="account-cart">
            <div class="iconbox"><i class="fa-solid fa-user"></i></div>
            <a href="">Account</a>
            <div class="iconbox"><i class="fa-solid fa-cart-shopping"></i></div>
            <a href="">Cart</a>
        </div>



    </div>

    <div class="baner">
        <div class="baner-text">
            <h1>Grab Upto 50% off On selected headphone</h1>
            <button>Buy Now</button>
        </div>
        <div class="baner-img">
            <img src="https://img.pikbest.com/png-images/20240516/music-or-podcasts-ads-girl-with-headphone_10567438.png!sw800"
                alt="">
        </div>
    </div>
    <div class="headphone">
        <h1 style="width: 80%; margin: 5%;">Headphones For you!</h1>
        <div class="headphones-cards">
            <div class="card">
                <div class="card-img">
                    <img src="https://static.vecteezy.com/system/resources/previews/024/822/743/non_2x/the-headphones-ai-generated-transparent-png.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>VIVEFOX </h5>
                        <h5><sup>$</sup>39 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>Beats On-the-Go: Stylish Headphones for Every Vibe!</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>

                    </div>
                </div>

            </div>

            <!-- card-2 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://static.vecteezy.com/system/resources/previews/017/054/098/non_2x/headphones-design-3d-rendering-for-product-mockup-png.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>NotYoBeatss</h5>
                        <h5><sup>$</sup>32 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>Crystal Clear Sound: Premium Headphones for Every Listener</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-3 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://www.pngarts.com/files/9/Wireless-Headphones-PNG-Free-Download.png" alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>My senEARS</h5>
                        <h5><sup>$</sup>43 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>Immerse Yourself: Top-Rated Headphones for Ultimate Audio Experience</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-4 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://purepng.com/public/uploads/large/purepng.com-headphoneelectronics-headset-headphone-941524670117zoozj.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>Hearing aids</h5>
                        <h5><sup>$</sup>78 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>Unleash Your Sound: Stylish & Comfortable Headphones</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-5 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://static.vecteezy.com/system/resources/previews/021/950/157/original/pink-headphones-isolated-on-a-transparent-background-png.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>ear pies</h5>
                        <h5><sup>$</sup>62 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>Sound That Moves You: Explore Our Latest Headphone Collection</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-6 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/012/414/782/small_2x/wireless-headphones-front-view-gray-icon-on-a-transparent-background-3d-rendering-png.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>Peace viber</h5>
                        <h5><sup>$</sup>24 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>Elevate Your Listening: Trendy Headphones for Every Lifestyle</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>    
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-7 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://www.pngarts.com/files/8/White-Beats-Headphone-PNG-Image.png" alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>Ear candy</h5>
                        <h5><sup>$</sup>49 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>Find Your Perfect Beat: Headphones for Every Music Lover</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>

                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!--small item-->
    <div class="headphone">
        <h1 style="width: 80%; margin: 5%;">similar items you might like</h1>
        <div class="headphones-cards">
            <div class="card">
                <div class="card-img">
                    <img src="https://www.pngall.com/wp-content/uploads/9/Mobile-Cover-PNG-Images.png" alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>CoverCo</h5>
                        <h5><sup>$</sup>4 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>
                            CoverCraze: Protect in Style</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button type="button" class="btn btn-info">Buy Now</button>

                    </div>
                </div>

            </div>

            <!-- card-2 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://www.pngall.com/wp-content/uploads/9/Mobile-Cover-PNG-Background.png" alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>CaseHub</h5>
                        <h5><sup>$</sup>8 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>ChicShield: Your Phone's Best Friend</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-3 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYuuxcdTBjDH3PwZP5uY7IfaSQEuX4_8hOTw&s"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>StyleShells</h5>
                        <h5><sup>$</sup>2 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>CaseCanvas: Art Meets Protection</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-4 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStPFiGXiZbK0QywLhghrkq0S8bSL11H-Jk7A&s"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>GadgetGuard</h5>
                        <h5><sup>$</sup>7 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>GuardNGlow: Sleek & Strong Covers</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-5 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://png.pngtree.com/png-vector/20240129/ourlarge/pngtree-a-vibrant-and-stylish-phone-case-offering-both-protection-aesthetics-against-png-image_11596957.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>CaseCraft</h5>
                        <h5><sup>$</sup>6 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>FlexiFit: Custom Covers for Every Style</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-6 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzWOKEa40eNb-ZsTAB4QKv2SlXh9-8oxw4dA&s"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>CoverNest</h5>
                        <h5><sup>$</sup>2 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>ArmorAvenue: Stylish Defense for Your Device</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!-- card-7 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://www.pngitem.com/pimgs/m/279-2798702_mobile-cover-png-transparent-mobile-phone-case-png.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>SnapCovers</h5>
                        <h5><sup>$</sup>2 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>TrendyShells: Where Fashion Meets Function</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>

                        <button>Buy Now</button>
                    </div>
                </div>

            </div>
            <!--card 8-->
            <div class="card">
                <div class="card-img">
                    <img src="https://www.pngall.com/wp-content/uploads/9/Mobile-Cover-PNG-HD-Quality.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>ShellFolio</h5>
                        <h5><sup>$</sup>7 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>SnapStyle: Covers That Turn Heads</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>

                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <!--CARD 9-->
            <div class="card">
                <div class="card-img">
                    <img src="https://freepngimg.com/thumb/categories/1822.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>WrapWonders</h5>
                        <h5><sup>$</sup>4 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>ProtectivePalette: Colorful Cases for Every Mood</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>

                        <button>Buy Now</button>
                    </div>
                </div>

            </div>
            <!--CARD 10-->
            <div class="card">
                <div class="card-img">
                    <img src="https://www.pngall.com/wp-content/uploads/9/Mobile-Cover-No-Background.png"
                        alt="">
                </div>
                <div class="card-details">
                    <div class="card-pricing">
                        <h5>PhoneFolio</h5>
                        <h5><sup>$</sup>9 <sup>00</sup></h5>
                    </div>
                    <div class="card-title">
                        <p>VogueVault: Fashion-Forward Mobile Covers</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>(121)</p>
                        </div>

                        <button>Buy Now</button>
                    </div>
                </div>

            </div>
 
        </div>

    </div>


















</body>

</html>
<?php  } ?>