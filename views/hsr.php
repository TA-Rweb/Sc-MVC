<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .diamond-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .diamond-card {
            width: 200px;
            height: 90px;
            border: 2px solid #ccc;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-weight: bold;
        }
        .selected {
            background-color: blueviolet;
            color: #fff;
        }

        .buy-button {
            display: inline-block;
            background-color: #FF9800;
            color: white;
            padding: 10px 50px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            border: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .buy-button:hover {
            background-color: #FFB74D;
        }

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TopUp | Honkai: StarRail</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="<?php echo base_url('/assets/gaming/') ?>assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/gaming/') ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/gaming/') ?>assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/gaming/') ?>assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/gaming/') ?>assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/gaming/') ?>assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/gaming/') ?>assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/gaming/') ?>assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/gaming/') ?>assets/css/goodgames.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/gaming/') ?>assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    
        



<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">

    
    
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <ul class="nk-social-links">
                <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                <!-- Additional Social Buttons
                    <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                    <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                    <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                    <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                    <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                    <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                    <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                    <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                    <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                    <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                    <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                    <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                    <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                    <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                    <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                    <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                -->
            </ul>
        </div>
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>
                
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        <span class="fa fa-user"></span>
                    </a>
                </li>
                
                
                <li>
                    <span class="nk-cart-toggle">
                        <span class="fa fa-shopping-cart"></span>
                        <span class="nk-badge">27</span>
                    </span>
                    <div class="nk-cart-dropdown">
                        
                        <div class="nk-widget-post">
                            <a href="<?php echo base_url('/assets/gaming/') ?>store-product.html" class="nk-post-image">
                                <img src="<?php echo base_url('/assets/gaming/') ?>assets/images/product-5-xs.jpg" alt="In all revolutions of">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="<?php echo base_url('/assets/gaming/') ?>store-product.html">In all revolutions of</a>
                            </h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 23.00</div>
                        </div>
                        
                        <div class="nk-widget-post">
                            <a href="<?php echo base_url('/assets/gaming/') ?>store-product.html" class="nk-post-image">
                                <img src="<?php echo base_url('/assets/gaming/') ?>assets/images/product-7-xs.jpg" alt="With what mingled joy">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="<?php echo base_url('/assets/gaming/') ?>store-product.html">With what mingled joy</a>
                            </h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 14.00</div>
                        </div>
                        
                        <div class="nk-gap-2"></div>
                        <div class="text-center">
                            <a href="<?php echo base_url('/assets/gaming/') ?>store-checkout.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed to Checkout</a>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- END: Top Contacts -->

    

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="<?php echo base_url('index.php/topup_controller/home') ?>" class="nk-nav-logo">
                    <img src="<?php echo base_url('/assets/gaming/') ?>assets/images/paws.png" alt="GoodGames" width="120">
                </a>
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    
        <li>
            <a href="<?php echo base_url('index.php/dashboard/dash') ?>">
                Beranda
                
            </a>
        <li class=" nk-drop-item">
            <a href="#">
                TopUp
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="<?php echo base_url('index.php/topup_controller/ml/') ?>">
                Mobile Legend
                
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/topup_controller/gi/') ?>">
                Genshin Impact
                
            </a>
        
        
        </li>
        <li>
            <a href="<?php echo base_url('index.php/topup_controller/hsr/') ?>">
                Honkai Starrail
                
            </a>
        </li>
        
                    </ul>
        </li>
        <li>
            <a href="<?php echo base_url('/assets/gaming/') ?>gallery.html">
                Game
                
            </a>
        </li>
                    </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>

    
    
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="<?php echo base_url('/assets/gaming/') ?>index.html" class="nk-nav-logo">
                <img src="<?php echo base_url('/assets/gaming/') ?>assets/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="<?php echo base_url('index.php/topup_controller/home') ?>">Home</a></li>
        
        <li><span>TOPUP</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">

    <div class="nk-store nk-store-checkout">
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Honkai:</span> Starrail</span></h3>

        <!-- START: Billing Details -->
        <div class="nk-gap"></div>
        <form action="#" class="nk-form">
            <div class="row vertical-gap">
                <div class="col-lg-6">
                    <div class="row vertical-gap">
                        <div class="col-sm-6">
                            <label for="fname">UID <span class="text-main-1">*</span> :</label>
                            <input type="number" class="form-control required" name="fname" id="fname">
                        </div>
                        <div class="col-sm-6">
                            <label for="lname">Server <span class="text-main-1">*</span> :</label>
                            <select name="server" class="form-control required" id="lname">
                            <option value="">Pilih Server...</option>
                            <option>America</option>
                            <option>Europe</option>
                            <option>Asia</option>
                            <option>TW, HK, MO</option>
                            </select>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <label for="company">Pilih Nominal <span class="text-main-1">*</span> :</label>
                    <form action="topup_process.php" method="post">
                        <div class="diamond-container">
                        <div class="diamond-card" onclick="selectDiamond(10)">
                            <h4>10 Stellar <br>Jade</h4>
                        </div>
                        <div class="diamond-card" onclick="selectDiamond(20)">
                            <h4>20 Stellar <br>Jade</h4>
                        </div>
                        <div class="diamond-card" onclick="selectDiamond(50)">
                            <h4>50 Stellar <br>Jade</h4>
                        </div>
                        <div class="diamond-card" onclick="selectDiamond(100)">
                            <h4>100 Stellar <br>Jade</h4>
                        </div>
                    </div>

                    <script>
                        let selectedDiamond = null;

                        function selectDiamond(diamond) {
                            if (selectedDiamond === diamond) {
                                selectedDiamond = null;
                            } else {
                                selectedDiamond = diamond;
                            }

                            const diamondCards = document.querySelectorAll('.diamond-card');
                            diamondCards.forEach(card => {
                                card.classList.remove('selected');
                            });

                            if (selectedDiamond !== null) {
                                const selectedCard = document.querySelector(`[onclick="selectDiamond(${selectedDiamond})"]`);
                                selectedCard.classList.add('selected');
                            }
                        }
                    </script>
                    <div class="nk-gap-2"></div>
                    <label for="country-sel">Metode Pembelian <span class="text-main-1">*</span>:</label>
                    <select name="country" class="form-control required" id="country-sel">
                        <option value="">Pilih Metode...</option>
                        <option value="">Gopay</option>
                        <option value="">Dana</option>
                        <option value="">OVO</option>
                    </select>
                </div>

                <div class="col-lg-5">
                <div class="nk-feature-10">
                    <div class="nk-feature-icon">
                    <a class="nk-nav-logo">
                        <img src="<?php echo base_url('/assets/gaming/') ?>assets/images/hsrhsr.jpg" alt="" width="300">
                    </a>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <label for="address">Alamat Email <span class="text-main-1">*</span>:</label>
                    <input type="email" class="form-control required" name="address" id="address">

                </div>
            </div>
        </form>
        <!-- END: Billing Details -->

        <div class="nk-gap-2"></div>
        <br>
        <button class="buy-button" ><a href="">BELI !</a></button>

        <!-- START: Order Products -->
        <div class="nk-gap-3"></div>
        <h3 class="nk-decorated-h-2"><span>Pesanan</span></h3>
        <div class="nk-gap"></div>
        <div class="table-responsive">
            <table class="nk-table nk-table-sm">
                <thead class="thead-default">
                    <tr>
                        <th class="nk-product-cart-title">Produk</th>
                        <th class="nk-product-cart-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td class="nk-product-cart-title">
                                50 Stellar Jade &times; 1
                            </td>
                            <td class="nk-product-cart-total">
                                Rp 25.000
                            </td>
                        </tr>
                    
                    
                    <tr class="nk-store-cart-totals-subtotal">
                        <td>
                            Subtotal
                        </td>
                        <td>
                            Rp 25.000
                        </td>
                    </tr>

                    <tr class="nk-store-cart-totals-subtotal">
                        <td>
                            Metode Pembayaran
                        </td>
                        <td>
                            Dana
                        </td>
                    </tr>
                    <tr class="nk-store-cart-totals-shipping">
                        <td>
                            Ongkir
                        </td>
                        <td>
                            Gratis
                        </td>
                    </tr>
                    <tr class="nk-store-cart-totals-total">
                        <td>
                            Total
                        </td>
                        <td>
                            Rp 25.000
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END: Order Products -->

        <div class="nk-gap-2"></div>
        <a class="nk-btn nk-btn-rounded nk-btn-color-main-1" href="#">Order Sekarang</a>
    </div>
</div>
<div class="nk-gap-2"></div>


        
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                    <div class="nk-widget-content">
                        <form action="php/ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Kirim</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
                    <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                    <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                    <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                    <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                    <!-- Additional Social Buttons
                        <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                        <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                        <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                        <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                        <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                        <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                        <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                        <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                        <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                        <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                        <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                        <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                        <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                        <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                        <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                        <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                        <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                    -->
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="<?php echo base_url('/assets/gaming/') ?>assets/images/bg-top-4.png" alt="">
    <img class="nk-page-background-bottom" src="<?php echo base_url('/assets/gaming/') ?>assets/images/bg-bottom.png" alt="">

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="<?php echo base_url('/assets/gaming/') ?>assets/js/goodgames.min.js"></script>
<script src="<?php echo base_url('/assets/gaming/') ?>assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->


    
</body>
</html>
