



<?php  include("../server/connection.php") ?>
<!DOCTYPE html>
<html class="fa-events-icons-ready gecko win js" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <title>MetaTrader 4 | Cityindex-live</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<!-- Latest compiled and minified CSS -->
<link href="../static/globalcityindex-live/files/bootstrap.min.css" rel="stylesheet">
<link href="../static/globalcityindex-live/files/all.min.css" rel="stylesheet">
<link href="../static/globalcityindex-live/files/owl.carousel.min.css" rel="stylesheet">
<link href="../static/globalcityindex-live/files/simplyScroll.css" rel="stylesheet">
<link href="../static/globalcityindex-live/files/style_002.css" rel="stylesheet">
<link href="../static/globalcityindex-live/files/style_v3_002.css" rel="stylesheet">
<link href="../static/globalcityindex-live/files/responsive.css" rel="stylesheet">
<link href="../static/globalcityindex-live/files/new.css" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" type="image/png" href="./static/globalcityindex-live/wp-content/themes/vt/favicon-new.png" sizes="16x16">
<script src="../static/globalcityindex-live/files/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!-- Marketing tag 13-Feb -->
<script type="text/javascript" src="../static/globalcityindex-live/files/evergage.min.js"></script>

<script>
        // Define dataLayer and the gtag function.
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        // Set default consent to 'denied' as a placeholder
        // Determine actual values based on your own requirements
        gtag('consent', 'default', {
          'ad_storage': 'granted',
          'ad_user_data': 'granted',
          'ad_personalization': 'granted',
          'analytics_storage': 'granted'
        });
        console.log('Default gtag');
      </script><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TJQ6RQ');
</script>
<!-- End Google Tag Manager -->

<body>

    <style>
    @media  only screen and (max-width: 768px) {
        .mob-app-container {
            top: 0px; 
            background: white;
            height: auto;
            z-index: 99999;
            width: 100%;
        }
    }
</style>
<!-- start: HEADER -->




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.1/css/all.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="offcanvas-area bg__brand__blue offcanvas-area-main">
    <div class="off-menu-close">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    <div class="offcanvas-menu">
        <div class="main-menu">
            <ul class="d-block">
                <li><a data-bs-toggle="collapse" href="index.php#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="tradingCollapse" class="collapsed menu-category bd-top-white">QUICK START <i class="text-white-cus fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class="collapse multi-collapse m-0 p-0 list-unstyled" id="multiCollapseExample1">
                        <div class="row">
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Introduction</span>
                                    <span class="off_menu__item__link">
                                        <a href="Why_FP_Markets.php"> Why cityindex-live? </a>
                                    </span>
                                   
                                    <span class="off_menu__item__link">
                                        <a href="Forex_Trading.php"> What is Forex Trading? </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="index.php"> What is CFD Trading? </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="ECN_Pricing.php"> ECN Pricing </a>
                                    </span>
                                    <!--<span class="off_menu__item__link">
                                        <a href="what-is-dma-pricing"> DMA Pricing </a>
                                    </span>-->

                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Your Account</span>
                                    <span class="off_menu__item__link">
                                        <a href="<?php echo $domain ?>auth/register.php"> Try A Demo </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Funding.php"> Deposit Funds </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="<?php echo  $domain  ?>pages/Withdraw_Funds.php"> Withdraw Funds </a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Trading Platforms</span>
                                    <span class="off_menu__item__link">
                                        <a href="index.php"> Metatrader 4 (MT4) </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="MetaTrader_5.php"> Metatrader 5 (MT5) </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a class="new-item" href="TradingView.php"> TradingView </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="ctrader.php"> cTrader </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="WebTrader.php"> WebTrader </a>
                                    </span>
                                     
                                    <span class="off_menu__item__link">
                                        <a href="Social_Trading.php"> Social Trading </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a data-bs-toggle="collapse" href="index.php#tradingCollapse" role="button" aria-expanded="false" aria-controls="tradingCollapse" class="collapsed menu-category">Trading <i class="text-white-cus fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class=" collapse multi-collapse m-0 p-0 list-unstyled" id="tradingCollapse">
                        <div class="row">
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Trading Accounts</span>
                                    <span class="off_menu__item__link">
                                        <a href="Forex_Account_Types.php"> Forex Account Types </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Islamic_Trading_Accounts.php"> Islamic Trading Accounts </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Funding.php"> Account Funding </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="<?php echo  $domain  ?>pages/Withdraw_Funds.php"> Funds Withdrawal </a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Markets</span>
                                    <span class="off_menu__item__link">
                                        <a href="Forex.php"> Forex </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Share_CFDs.php"> Shares </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Metals.php"> Metals </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="commodities.php"> Commodities </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Indices.php"> Indices </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="cryptocurrency.php"> Digital Currencies </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="bonds.php"> Bonds </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="ETF_Trading.php"> ETFs </a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Pricing</span>
                                    <span class="off_menu__item__link">
                                        <a href="Forex_Spreads.php"> Spreads </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Swap_Rates.php"> Swap Rates </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Trading_Hours.php"> Trading Hours </a>
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a data-bs-toggle="collapse" href="index.php#platformsCollapse" role="button" aria-expanded="false" aria-controls="platformsCollapse" class="collapsed menu-category">Platforms <i class="text-white-cus fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class="collapse multi-collapse m-0 p-0 list-unstyled" id="platformsCollapse">
                        <div class="row">
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Platforms</span>
                                    <span class="off_menu__item__link">
                                        <a href="index.php"> Metatrader 4 (MT4) </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="MetaTrader_5.php"> Metatrader 5 (MT5) </a>
                                    </span>  
                                    <span class="off_menu__item__link">
                                        <a class="new-item" href="TradingView.php"> TradingView </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="ctrader.php"> <span>cTrader</span></a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="WebTrader.php"> WebTrader </a>
                                    </span>
                                    
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Fees &amp; Charges</span>
                                    <span class="off_menu__item__link">
                                        <a href="ctrader_fees.php"> cTrader Fees &amp; Charges </a>
                                    </span>
                                     
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Trading Tools</span>
                                     
                                    <span class="off_menu__item__link">
                                        <a href="MAM_PAMM.php"> MAM/PAMM </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Virtual_Private_Server.php"> VPS </a>
                                    </span>
                                     
                                     
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Copy Trading</span>
                                    <span class="off_menu__item__link">
                                        <a href="Social_Trading.php"> Social Trading </a>
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>

                <li><a class="menu-category" href="FP_Markets_Partners.php">PARTNERS </a></li>
                <li><a data-bs-toggle="collapse" href="index.php#resourcesCollapse" role="button" aria-expanded="false" aria-controls="resourcesCollapse" class="collapsed menu-category">Resources <i class="text-white-cus fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class="collapse multi-collapse m-0 p-0 list-unstyled" id="resourcesCollapse">
                        <div class="row">
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Company</span>
                                    <span class="off_menu__item__link">
                                        <a href="about.php"> About cityindex-live </a>
                                    </span>
                                    <span class="off_menu__item__link">
                                        <a href="Regulation.php"> Regulation </a>
                                    </span>
                                    
                                  
                                </div>
                            </div>
                           
                             
                            <div class="col-md-12 col-xl-3 off_menu__bg">
                                <div class="off__menu__item">
                                    <span class="off__menu__category">Help</span>
                                    <span class="off_menu__item__link">
                                        <a href=""> FAQ </a>
                                    </span>
                                     
                                    
                                    <span class="off_menu__item__link">
                                        <a href="contact.php"> Contact Us </a>
                                     
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>

            </ul>
            <div class="foot">
                <div class="offcanvas-btn text-center">
                    <a href="<?php echo $domain ?>auth/register.php" class="offcanvas-btn-white">Open Live </a> <br><br>
                    <a href="../auth/login.php" class="offcanvas-btn-white"> Client Portal </a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<!--------- Offcanvas area end --------->



<!--------- Page Header area start --------->
<section class="page__header">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="page__header__menu">
            <ul class="m-0 p-0 list-unstyled d-flex align-items-center">
                <li><a href="contact.php">Contact </a></li>
                <li><a href="index.php">Webtrader </a></li>
                <li><a href="Funding.php">Funding </a></li>
                <li><a href="FP_Markets_Group.php">Group </a></li>
            </ul>
        </div>
        <div class="page__header__right">

            <div class="page__header__right__link">

               
                <a href="../auth/login.php"><b>Client Portal</b></a>
            </div>
        </div>
    </div>
</section>
<!--------- Page Header area end --------->

<!--------- Header area start --------->
<?php   include("../includes/nav.php")  ?>
<!--------- Header area end --------->
    <!--------- Main area start --------->
    <main class="main">
        <!--------- Hero area start --------->
        <section class="hero__area hero-2 lazy" loading="lazy" style="background-image: url(../static/globalcityindex-live/files/hero-bg-2.webp)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="common__content text-center">
                            <h1>
                                <span class="text-white basic__section__xl fw__boldest">
                                    MetaTrader 4
                                </span>
                            </h1>
                            
                            <div class="hidden-xs universal__header__description">
                                MetaTrader 4 is the world’s most popular
 trading platform used for analysing the financial markets. MT4 is 
loaded with features and
provides the added benefit of a customisable interface. <br>
Download MT4 for PC, Mac, iPhone, IOS and Android.
                            </div>
                            
                                                            <div class="common__content__btn pt-4">
                                    <div class="common-btn active ms-3 fw__boldest text__white">
                                        <a class="text__white" id="13" href="<?php echo $domain ?>auth/register.php">Start Trading</a>
                                    </div>
                                </div>

                                                        

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------- Hero area end --------->

        
                  <section class="device__area">
    <div class="container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                    <a href="index.php">

                        <span><img src="../static/globalcityindex-live/files/icon.png" alt=""></span>
                        <p>MetaTrader 4 (MT4) </p>
                        <h5>for Windows</h5>
                    </a>
                </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <a href="MetaTrader_5.php">

                        <span><img src="../static/globalcityindex-live/files/icon2-1.png" alt=""></span>
                        <p>MetaTrader MT4/MT5 </p>
                        <h5> for WebTrader</h5>
                    </a>
                </button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                    <a href="index.php">
                        <span><img src="../static/globalcityindex-live/files/icon3-1.png" alt=""></span>
                        <p>MetaTrader 4 (MT4) </p>
                        <h5>for Mac</h5>
                    </a>
                </button>
                <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">
                    <a href="index.php">
                        <span><img src="../static/globalcityindex-live/files/icon4-1.png" alt=""></span>
                        <p>MetaTrader 4 (MT4) </p>
                        <h5>for iOS</h5>
                    </a>
                </button>
                <button class="nav-link" id="nav-contact-tab3" data-bs-toggle="tab" data-bs-target="#nav-contact3" type="button" role="tab" aria-controls="nav-contact3" aria-selected="false">
                    <a href="index.php">
                        <span><img src="../static/globalcityindex-live/files/icon5-1.png" alt=""></span>
                        <p>MetaTrader 4 (MT4) </p>
                        <h5>for Android</h5>
                    </a>
                </button>
            </div>
        </nav>
    </div>
</section>

<div class="padding-10"></div>

<div class="container"><div class="row"><div class="page-navi"><div class="container" id="breadcrumb"><li><a href="index.php">Home</a></li><li><a href="Platforms.php">Platforms</a></li><li><a href="index.php">Mt4</a></li></div></div></div></div>


<div class="container-fluid end-divider c1">
    <div id="section1" class="container default-wd mobile-padding-top1">
        <div class="title">
            <h2>
                </h2><h2 class="h2-cent-font-sec hidden-xs cs219armt4head" style="padding-bottom:0px;">Why trade on
                    MetaTrader 4 with cityindex-live?</h2>
                <p class="visible-xs" style="font-size: 38px!important;line-height: 38px !important;padding-bottom: 0px!important;margin-bottom: -10px;font-family: 'Helvetica Neue';">
                    MT4 Forex<br> <span class="helvetica-th-font" style="font-weight:100;"> Trading Platform</span></p>
            
        </div>
        <div>
            <p class="mt4-sub-heading hidden-xs cs219frpltfrm cs219armt4head cs-219-de-world-br-al">The World's Most
                Popular Platform</p>
            <p class="mt4-sub-heading visible-xs" style="margin-bottom: 10px;line-height: 40px!important;font-family: 'Helvetica Neue';">The
                World's Most Popular Platform</p>
        </div>
        <div class="row fb-cus-row padding-50">
            <div class="col-sm-6 text-content-1 padding-right-for-first-30 p__fixer">
                <div class="text-block1">
                    <p class="visible-xs" style="margin-bottom: 20px;">The world’s most popular trading platform with
                        flexible trading conditions, tight raw spreads and fast execution.</p>
                    <p style="font-family: 'Helvetica Neue';">Discover the benefits of trading with cityindex-live on
                        one of the most powerful trading platforms. As part of our commitment to seamless trading
                        experiences, we offer advanced charting tools, numerous technical indicators, real-time price
                        charts, market news and insights, and a suite of automated trading options.</p>
                </div>
                <div class="text-block2 padding-30">
                    <p style="font-family: 'Helvetica Neue';">Traders using Expert Advisors (EAs) can take
                        advantage of FP Market’s fast execution speed. We have partnered with the top forex liquidity
                        providers for deep liquidity, along with real-time price quotes for a wide range of tradable
                        instruments. <a class="custom-link" href="../auth/login.php">Download the
                            MetaTrader 4 (MT4)</a> software for Windows for free and experience trading with tight
                        spreads and transparent commissions.</p>
                </div>
            </div>
            <div class="col-sm-6 text_content-1 padding-left-for-first-30">
                <div class="text-block1 wid-for-last-section">
                    <p class="para-cent hidden-xs" style="font-size:23px!important;margin-bottom:10px;font-family: 'Helvetica Neue';">
                        MetaTrader 4 (MT4) Platform features:</p>
                    <p class="para-cent visible-xs" style="font-size:23px!important;margin-bottom:5px;font-family: 'Helvetica Neue';">
                        MetaTrader 4 (MT4) <br>Platform features:</p>
                    <div class="inner_text padding-default">
                        <ul style="padding-left: 0px;margin-left:0px!important;">
                            <p></p>
                            <li class="list-item-default list-item-default88">
                                <p>Customisable interface, including colours of technical indicators</p>
                            </li>
                            <li class="list-item-default list-item-default88">
                                <p>One-click trading</p>
                            </li>
                            <li class="list-item-default list-item-default88">
                                <p>MarketWatch</p>
                            </li>
                            <li class="list-item-default list-item-default88">
                                <p>Live price streaming on live accounts and demo accounts 128-bits encryption for
                                    secure trading</p>
                            </li>
                            <li class="list-item-default list-item-default88">
                                <p>Expert Advisors (EAs)</p>
                            </li>
                            <li class="list-item-default list-item-default88">
                                <p>Customisable alerts</p>
                            </li>
                            <li class="list-item-default list-item-default88">
                                <p>Access to MetaTrader market and MQL4 community</p>
                            </li>
                            <li class="list-item-default list-item-default88">
                                <p>Compatible with iOS, Android and Mac devices</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid end-divider pad-for-system-section languagesEn">
        <div class="title">
            <h2>
                <p class="hidden-xs" style="padding-bottom:0px;">How do I open an MT4 account with cityindex-live?</p>
                <p class="visible-xs" style="font-size: 38px!important;line-height: 38px !important;padding-bottom: 5px!important;">How Do
                    I Open an account on the <br><span class="helvetica-th-font" style="font-weight:100;">MT4 with FP
                        Markets?</span></p>
            </h2>
        </div>
        <div class="row fb-cus-row padding-50">
            <div class="col-sm-6 text-content-1 padding-right-for-first-30 padding-righttoleft-40">
                <div class="text-block1 wid-for-last-section">
                    <p class="para-cent hidden-xs" style="font-size:23px!important;margin-bottom:10px; font-weight:900;">I don't have MT4
                    </p>
                    <p class="para-cent visible-xs" style="font-size:23px!important;margin-bottom:0px; font-weight:900;">I don't have MT4
                    </p>
                    <div class="inner_text padding-default">
                        <ul style="padding-left: 0px;margin-left:0px!important;" id="padding-right-0">
                            <p></p>
                            <li class="list-item-default">
                                <p>You can download and install Metatrader 4 in a few<br>simple steps.</p>
                            </li>
                            <li class="list-item-default">
                                <p>Register and open a Live Trading Account or Demo Account</p>
                            </li>
                            <li class="list-item-default">
                                <p>Log in to Client Portal using credentials provided in the email</p>
                            </li>
                            <li class="list-item-default">
                                <p>Download the appropriate version for your operating system</p>
                            </li>
                            <li class="list-item-default">
                                <p>Install, login and start trading</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text_content-1 padding-left-for-first-30 padding-lefttoright-40">
                <div class="text-block1 wid-for-last-section">
                    <p class="para-cent hidden-xs" style="font-size:23px!important;margin-bottom:10px; font-weight:900;">I already have MT4

                    </p>
                    <p class="para-cent visible-xs" style="font-size:23px!important;margin-bottom:0px; font-weight:900;">I already have MT4

                    </p>
                    <div class="inner_text padding-default">
                        <p>If you have already installed the MT4 and would like to start trading with cityindex-live, open a
                            Live Account and log in with your cityindex-live MT4 Live Account Credentials.
                        </p>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="text_block text-left">
                            <p class="para-cent" style="text-align: center; ">
                                <a class="blue-button" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff'" href="<?php echo $domain ?>auth/register.php" target="_blank" rel="noopener noreferrer" style="color: rgb(255, 255, 255);width: 100%!important;font-size: 16px;margin-top: 30px;">OPEN
                                    AN ACCOUNT </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 margin-top-for-mobile">
                        <div class="text_block">
                            <p class="para-cent">
                                <a class="black-button cs223vireqdem cs223frreqdem" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff'" href="<?php echo $domain ?>auth/register.php" target="_blank" rel="noopener noreferrer" style="width: 100%!important;font-size: 16px;margin-top: 30px;">REQUEST A DEMO </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row system-section-pad-mobi p__fixer">
            <div class="col-sm-12 padding-30 system-section-pad-mobi">
                <p class="hidden-xs" style="text-align: center;font-family: 'Helvetica Neue';"><span style="font-weight: bold;color: #0b121c;">System Requirements: </span> MT4 is available on
                    Windows 7 or higher. It is also supported on Mac OSX.</p>
                <p class="visible-xs" style="text-align: center;font-family: 'Helvetica Neue';"><span style="font-weight: bold;color: #0b121c;margin-bottom:15px;">System Requirements: </span><br>
                    MT4 is available on Windows 7 or higher. It is also supported on Mac OSX.</p>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid light-blue-bg">
    <div id="section2" class="container default-wd">
        <div class="title mobile-title-1">
            <h2>
                <p class="hidden-xs" style="padding-bottom: 2px;color:#ffffff!important;font-size:32px!important;font-family: 'Helvetica Neue';">
                    <span class="helvetica-th-font" style="font-weight:100;">What Can You</span> Trade on MT4?
                </p>
                <p class="visible-xs" style="padding-bottom: 2px;color:#ffffff!important;font-size:32px!important;font-family: 'Helvetica Neue';">
                    <span class="helvetica-th-font" style="font-weight:100;">What Can You</span><br> Trade on MT4?
                </p>
            </h2>
        </div>

        <div class="col-sm-12 padding-40 hidden-xs">
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section margin-right-for-mob" style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <img src="../static/globalcityindex-live/files/Group&#32;397-min.png" alt="" title="">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Forex</span></p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">70+ currency
                                    <br>pairs <br><span><a href="Forex.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section" style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <img src="../static/globalcityindex-live/files/Group&#32;397&#32;copy&#32;5.png" alt="" title="">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">
                                    Share CFDs</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">
                                    63 stocks on<br>global exchanges <br>
                                    <span><a href="Share_CFDs.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section" style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <img src="../static/globalcityindex-live/files/Group&#32;397&#32;copy&#32;2-min.png" alt="" title="" style="margin-top:10px;">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Commodities</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">Gold, oil,
                                    <br>silver &amp; more <br><span><a href="commodities.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-6 dis-flex padding-formobile">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <img src="./static/globalcityindex-live/files/Group_397_copy_4-min.png" alt="" title="" style="margin-top:10px;">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Indices</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">14 to trade
                                    on<br> global exchanges <br><span><a href="Indices.php" style=" font-weight: bold;color: #00bdff!important;"><b>View
                                                full list</b></a></span></p>
                            </div>
                        </div>
                        <div class="col-sm-6 dis-flex">
                            <div class="image-section margin-right-for-mob" style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <img style="margin-top: 5px;" src="../static/globalcityindex-live/files/0012_Group-398.png" alt="" title="">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Cryptocurrencies</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">Bitcoin,
                                    Ethereum,<br> Ripple, Bitcoin Cash,<br> Litecoin &amp; more<br><span>
                                        <a href="cryptocurrency.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 visible-xs" style="margin-top: 0px;">
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section margin-right-for-mob" style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <img src="../static/globalcityindex-live/files/Group&#32;397-min.png" alt="" title="">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Forex</span></p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">70+ currency
                                    pairs <br><span><a href="Forex.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section" style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <img src="../static/globalcityindex-live/files/Group&#32;397&#32;copy&#32;5.png" alt="" title="" style="margin-top: 10px;">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">
                                    Share CFDs</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">
                                    63 stocks on<br>global exchanges <br><span>
                                        <a href="Share_CFDs.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section" style="padding-bottom: 10px;text-align:center;margin-right: 5px;">
                                <span class="section_image_wrap">
                                    <img src="../static/globalcityindex-live/files/Group&#32;397&#32;copy&#32;2-min.png" alt="" title="" style="margin-top: 10px;max-width: 100%!important;margin-left: -10px;">
                                </span>
                            </div>
                            <div class="text_block2" style="margin-top: 5px;">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Commodities</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">Gold, oil,
                                    silver &amp; more <br><span><a href="commodities.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-6 dis-flex padding-formobile">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center;margin-right: 23px;">
                                <span class="section_image_wrap">
                                    <img src="../static/globalcityindex-live/files/Group&#32;397&#32;copy&#32;4-min.png" alt="" title="" style="margin-top:10px;">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Indices</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">14 to trade
                                    on<br> global exchanges <br><span><a href="Indices.php" style=" font-weight: bold;color: #00bdff!important;"><b>View
                                                full list</b></a></span></p>
                            </div>
                        </div>
                        <div class="col-sm-6 dis-flex">
                            <div class="image-section margin-right-for-mob" style="padding-bottom: 10px;text-align:center;margin-right: 27px!important;">
                                <span class="section_image_wrap">
                                    <img style="margin-top: 5px;" src="../static/globalcityindex-live/files/0012_Group-398.png" alt="" title="">
                                </span>
                            </div>
                            <div class="text_block2">
                                <p class="light-blue-bg-font"><span style=" font-weight: 600;font-family: 'Helvetica Neue';">Cryptocurrencies</span>
                                </p>
                                <p class="light-blue-bg-font" style="font-family: 'Helvetica Neue';">Bitcoin,
                                    Ethereum, Ripple,<br>Bitcoin Cash, Litecoin &amp; more <br><span><a href="cryptocurrency.php" style=" font-weight: bold;color: #00bdff!important;"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid end-divider">
    <div id="section10" class="container default-wd">
        <div class="title mobile-title-1">
            <h2>
                </h2><h2 class="h2-cent-font-sec hidden-xs" style="padding-bottom: 2px;font-family: 'Helvetica Neue';"><span class="helvetica-th-font" style="font-weight:100;">What Makes</span> cityindex-live MT4 Superior?</h2>
                <p class="visible-xs" style="padding-bottom: 2px;padding-left: 0px;padding-right: 0px;font-family: 'Helvetica Neue';">
                    <span class="helvetica-th-font" style="font-weight:100;">What Makes</span><br> cityindex-live MT4 Superior?
                    
                </p>
            
        </div>
        <div class="row padding-40 padding-top-10-imp-for-mob cs-219-pl-fle-al">
            <div class="col-sm-3 margin-left-for-color-font-align cs219frmt4tblw cs219arcolml cs-de-29-tig-marg-left">
                <div class="text_block rightborder cs219vi0ml cs219vi1horz cs219ar1horz rightborder-disable rightborder-disable" style="background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) 100% 55% no-repeat;">
                    <p class="color-font cs219viclrfnt">0.0</p>
                    <p class="color-para-head">Tighter spreads <br>from 0.0 pips</p>
                    <p class="color-para hidden-xs cs219armt4sup">cityindex-live consistently<br> offer some of the
                        tightest<br> spreads in the industry.<br> Trade from 0.0 pips on the<br> major currency pairs.
                    </p>
                    <p class="color-para visible-xs">cityindex-live consistently offer some of the tightest spreads in the
                        industry. Trade from 0.0 pips on the major currency pairs. </p>
                </div>
            </div>
            <div class="col-sm-3 cs219frmt4tblw">
                <div class="text_block rightborder cs219viraw cs219ar2horz right-broder97" style="background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) 100% 65% no-repeat;">
                    <p class="color-font cs219viclrfnt">Raw</p>
                    <p class="color-para-head">Pricing</p>
                    <p class="color-para hidden-xs cs219armt4sup" style="margin-top:35px;">Access
                        institutional-grade<br> liquidity with no price<br> manipulation.</p>
                    <p class="color-para visible-xs">Access institutional-grade liquidity with no price manipulation.</p>
                </div>
            </div>
            <div class="col-sm-3 cs219frmt4tblw id-equinix">
                <div class="text_block short-rigtborder cs219vifast cs219vi3horz cs219frfast cs219ar3horz">
                    <p class="color-font cs219viclrfnt cs219arhead">Fast</p>
                    <p class="color-para-head">Execution</p>
                    <p class="color-para hidden-xs  cs219ar3sub" style="margin-top:35px;">Award-winning low <br>latency
                        trade execution <br>under 40* milliseconds. <br>Delivered from our Equinix<br> NY4 facility
                        server cluster.</p>
                    <p class="color-para visible-xs">Award-winning low latency trade execution under 40* milliseconds.
                        Delivered from our Equinix NY4 facility server cluster.</p>
                </div>
            </div>
            <div class="col-sm-3 margin-for-left-75 rightborder-able cs219frmt4tblw cs219ar4horz cs-de-29-res-marg-lef rightborder-able">
                <div class="text_block cs219vizero">
                    <p class="color-font cs219vizeropb cs219viclrfnt cs219arhead">Zero</p>
                    <p class="color-para-head">Restrictions</p>
                    <p class="color-para visible-xs">cityindex-live provide conditions for scalping and EAs with no minimal
                        distance between the spread.</p>
                    <p class="color-para hidden-xs cs219vizeropara cs219ar4col" style="margin-top:35px;">cityindex-live
                        provide <br> conditions for scalping and <br>EAs with no minimal distance between the spread.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid c4">
    <div id="section-iress-tools" class="container default-wd">
        <div class="visible-xs">
            <span>
                <img src="../static/globalcityindex-live/files/one-click-1.png" alt="" title="" style="max-width: 100%!important;margin-top: -65px;margin-bottom: 15px;">
            </span>
        </div>
        <div class="padding-50"></div>
        <div class="row">
            <div class="col-sm-6">
                <span class="mobile_image_wrap" style="top:0;">
                    <img src="../static/globalcityindex-live/files/ipad.png" alt="" title="" style="margin-top: -56px;margin-left: -30px;max-width: 103%;transform: scale(1.3);z-index: -9;position: relative;">
                </span>
            </div>
            <div class="col-sm-6 pad-for-desktop real-time-section-margin" style="padding-left:80px;">
                <div class="title mobile-title-3">
                    <h2>
                        </h2><h3 class="hidden-xs" style="text-align:left;padding-bottom: 10px;font-size:32px!important;" id="headdig-textalign-right"><span class="helvetica-th-font" style="font-weight:100;"> One Click</span> Trading</h3>
                        <p class="visible-xs" style="text-align:left;font-size:32px!important;line-height:30px!important;" id="headdig-textalign-right"><span class="helvetica-th-font" style="font-weight:100;">One Click</span> Trading
                        </p>
                    
                </div>
                <div class="inner_text wid-align-for-pro-chart power-full-section-mobile p__fixer">
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img style="max-width:none;padding-top: 3px;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Trade directly off charts
                            with one click trading</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img style="max-width:none;padding-top: 3px;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Place trading orders, limit
                            and stop orders</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img style="max-width:none;padding-top: 3px;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Set and modify take profit
                            and stop loss</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img style="max-width:none;padding-top: 3px;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Set multiple trading alerts
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid cs2">
    <div id="fully-customizable-charts-section" class="container default-wd">
        <div class="visible-xs">
            <span>
                <img src="../static/globalcityindex-live/files/ipad-horizontal-1.png" alt="" title="" style="max-width: none!important;margin-left: -165px;margin-bottom: -50px;">
            </span>
        </div>
        <div class="row padding-50">
            <div class="col-sm-6 pad-lef-15-form-mob" id="headdig-textalign-right" style="padding-left: 70px;">
                <div class="title mobile-title-3">
                    <h2>
                        </h2><h2 class="hidden-xs" style="text-align:left;padding-bottom: 10px;font-size:32px!important;" id="headdig-textalign-right">Fully Customisable <span class="helvetica-th-font" style="font-weight:100;">Charts</span> </h2>
                        <p class="visible-xs" style="text-align:left;font-size:32px!important;line-height:30px!important;" id="headdig-textalign-right"> Fully Customisable<br> <span class="helvetica-th-font" style="font-weight:100;">Charts</span> </p>
                    
                </div>
                <div class="inner_text pad-mob-center-align power-full-section-mobile p__fixer">
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">3 chart types, 9 timeframes
                            &amp; 24 analytical objects</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Modify, add &amp; customise
                            chart layouts and indicators</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Manage trading signals to
                            suit your trading system</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Add personalised charting
                            indicators on cityindex-live MT4 platform</p>
                    </span>
                </div>
            </div>
            <div class="col-sm-6">
                <span class="mobile_image_wrap" style="top:0;">
                    <img src="../static/globalcityindex-live/files/ipad-horizontal-1.png" alt="" title="" style="margin-top: -30px;max-width: 100%;transform: scale(1.2);">
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid cs3">
    <div id="profiles-chart-templates-section" class="container default-wd">
        <div class="visible-xs">
            <span>
                <img src="../static/globalcityindex-live/files/customisable-charts-582x480.png" alt="" title="" style="max-width: 100%!important;margin-bottom: 120px;margin-top: -60px;">
            </span>
        </div>
        <div class="padding-50"></div>
        <div class="row">
            <div class="col-sm-6">
                <span class="mobile_image_wrap" style="top:0;">
                    <img src="../static/globalcityindex-live/files/customisable-charts-582x480.png" alt="" title="" style="margin-top: -140px;max-width: 96%;">
                </span>
            </div>
            <div class="col-sm-6 pad-for-desktop real-time-section-margin" style="padding-left:80px;">
                <div class="title mobile-title-3">
                    <h2>
                        <p class="hidden-xs" style="text-align:left;font-size:32px!important;padding-bottom: 10px;">
                        <span class="helvetica-th-font" style="font-weight:100;">Profiles and</span> Chart templates
                        </p>
                        <p class="visible-xs" style="text-align:left;font-size:32px!important;line-height:30px!important;"><span class="helvetica-th-font" style="font-weight:100;">Profiles and</span> Chart<br> templates</p>
                    </h2>
                </div>
                <div class="inner_text wid-align-for-pro-chart power-full-section-mobile p__fixer">
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Save parametres for your
                            charts and indicator settings</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Start trading immediately,
                            as the market moves</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Switch between separate
                            profiles</p>
                    </span><br>
                    <span style="display: inline-flex;padding-bottom: 10px;">
                        <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                        <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Trade different financial
                            markets and strategies</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid c5">
    <div id="section-draw-tools" class="container default-wd ">
        <div class="row">
            <div class="col-sm-6 margin-for-mobile-alignment-robosection ar-content-hide">
                <div class="ar-content-lt">
                    <div class="title mobile-title-3">
                        <h2>
                            <p class="hidden-xs" style="text-align:left; color:#ffffff!important;font-size: 32px!important;line-height: 1!important;">
                                60+ Pre-installed <span class="helvetica-th-font" style="font-weight:100;">Indicators</span></p>
                            <p class="visible-xs" style="text-align:left; color:#ffffff !important;font-size: 32px!important;line-height: 1!important;">
                                60+ Pre-installed<br> <span class="helvetica-th-font" style="font-weight:100;">Indicators</span></p>
                        </h2>
                    </div>
                    <div class="inner_text wid-align-for-mob-poit-inst p__fixer">
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="dark__txt__mob" style="padding-left: 10px;font-family: 'Helvetica Neue';">
                                Pre-installed with 60+ indicators from MetaTrader 4 chart providers</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="dark__txt__mob" style="padding-left: 10px; font-family: 'Helvetica Neue';">
                                Free access to Metaquotes MQL5 community</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="dark__txt__mob" style="padding-left: 10px;font-family: 'Helvetica Neue';">
                                Access thousands of custom indicators from downloads folder</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="dark__txt__mob" style="padding-left: 10px; font-family: 'Helvetica Neue';">
                                Advanced analysis and data</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ar-content-show" style="display:none;">
                    <div class="title mobile-title-3">
                        <h2>
                            <p class="hidden-xs" id="headdig-textalign-right" style="text-align:left; color:#ffffff!important;font-size: 32px!important;line-height: 1!important;">
                                60+ Pre-installed <span class="helvetica-th-font" style="font-weight:100;">Indicators</span></p>
                            <p class="visible-xs" id="headdig-textalign-right" style="text-align:left; color:#000 !important;font-size: 32px!important;line-height: 1!important;">
                                60+ Pre-installed<br> <span class="helvetica-th-font" style="font-weight:100;">Indicators</span></p>
                        </h2>
                    </div>
                    <div class="inner_text wid-align-for-mob-poit-inst" id="headdig-textalign-right p__fixer">
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="hidden-xs" style="padding-left: 10px; color:#ffffff;font-family: 'Helvetica Neue';">
                                Pre-installed with 60+ indicators from MetaTrader 4 chart providers</p>
                            <p class="visible-xs" style="padding-left: 10px; color:#000 !important;font-family: 'Helvetica Neue';">
                                Pre-installed with 60+ indicators from MetaTrader 4 chart providers</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="hidden-xs" style="padding-left: 10px; color:#ffffff;font-family: 'Helvetica Neue';">
                                Free access to Metaquotes MQL5 community</p>
                            <p class="visible-xs" style="padding-left: 10px; color:#000 !important;font-family: 'Helvetica Neue';">
                                Free access to Metaquotes MQL5 community</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="hidden-xs" style="padding-left: 10px; color:#ffffff;font-family: 'Helvetica Neue';">
                                Access thousands of custom indicators from downloads folder</p>
                            <p class="visible-xs" style="padding-left: 10px; color:#000 !important;font-family: 'Helvetica Neue';">
                                Access thousands of custom indicators from downloads folder</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="padding-top: 3px;max-width:none;" class="ar-check-box-new-small" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p class="hidden-xs" style="padding-left: 10px; color:#ffffff;font-family: 'Helvetica Neue';">
                                Advanced analysis and data</p>
                            <p class="visible-xs" style="padding-left: 10px; color:#000 !important;font-family: 'Helvetica Neue';">
                                Advanced analysis and data</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid cs4">
    <div id="profiles-chart-templates-section" class="container default-wd">
        <div class="padding-50"></div>
        <div class="visible-xs">
            <span>
                <img src="../static/globalcityindex-live/files/Ea-mobile-mt.png" alt="" title="" style="max-width: 100%!important;margin-bottom: 120px;">
            </span>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="ar-content-show" style="display:none;">
                    <div class="title mobile-title-3">
                        <h2>
                            </h2><h3 class="hidden-xs" style="text-align:left;font-size:32px!important;padding-bottom: 10px;" id="headdig-textalign-right"><span class="helvetica-th-font" style="font-weight:100;">Expert</span> Advisors (EAs)</h3>
                            <p class="visible-xs" style="text-align:left;font-size:32px!important;line-height:30px!important;" id="headdig-textalign-right"><span class="helvetica-th-font" style="font-weight:100;">Expert</span> Advisors (EAs)</p>
                        
                    </div>
                    <div class="inner_text wid-align-for-mob-poit power-full-section-mobile p__fixer" id="headdig-textalign-right">
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Access tight raw spreads
                                for automated forex trading</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Create and edit Expert
                                Advisors with MQL4 programming</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Back test EAs with an
                                inbuilt strategy tester on your MT4 terminal</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="ar-check-box-new-small" style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Access thousands of EAs
                                through MQL5 community downloads</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 pad-for-desktop real-time-section-margin ar-content-hide" style="padding-left:80px;">
                <div class="ar-content-lt">
                    <div class="title mobile-title-3">
                        <h2>
                            <p class="hidden-xs" style="text-align:left;font-size:32px!important;padding-bottom: 10px;">
                                <span class="helvetica-th-font" style="font-weight:100;">Expert</span> Advisors (EAs)
                            </p>
                            <p class="visible-xs" style="text-align:left;font-size:32px!important;line-height:30px!important;"><span class="helvetica-th-font" style="font-weight:100;">Expert</span> Advisors (EAs)</p>
                        </h2>
                    </div>
                    <div class="inner_text wid-align-for-mob-poit power-full-section-mobile p__fixer">
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Access tight raw spreads
                                for automated forex trading</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Create and edit Expert
                                Advisors with MQL4 programming</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Back test EAs with an
                                inbuilt strategy tester on your MT4 terminal</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img style="max-width:none;padding-top: 3px;" src="../static/globalcityindex-live/files/check-box-new-small.png"> </p>
                            <p style="padding-left: 10px;font-family: 'Helvetica Neue';">Access thousands of EAs
                                through MQL5 community downloads</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid cmt1">
    <div id="mt4-platform-for-forex-section" class="container">
        <div>
            <h2 class="h2-cent-font-sec hidden-xs">What is MetaTrader 4 (MT4)?</h2>
            <p class="h2-cent-font-sec visible-xs" style="margin-bottom:25px;">MetaTrader 4 Platform<br> <span class="helvetica-th-font" style="font-weight:100;">for Forex Trading and</span><br> Technical
                Analysis</p>
        </div>
        <div class="row padding-50">
            <div class="col-sm-6 pad-right-40">
                <div>
                    <p class="normal-para-font">MetaTrader 4 is a revolutionary Forex trading platform. It is loaded
                        with features and provides the added benefit of a customisable interface. A range of advanced
                        analytical technologies provide traders with the opportunity to conduct market analysis from
                        within the platform interface. This is particularly the case with technical analysis which
                        involves the using patterns in market data to identify trends.</p>
                    <p class="normal-para-font padding-30">The functionality of the MT4 platform is what sets it apart.
                        There are several key aspects to trading including market analysis, trade execution and risk
                        management. An extensive amount of features provide traders with all the tools required to
                        effectively implement their trading plan.</p>
                    <p class="normal-para-font padding-30">Not only does it have the necessary tools required to analyse
                        market data and identify patterns, the platform also provides the necessary technological
                        features needed to capitalise on trading opportunities. Some of the key features of MetaTrader 4
                        are:</p>
                    <p class="normal-para-font padding-30"><span style="font-weight:600;">Pre-installed
                            Indicators:</span> The MT4 platform has bridged the gap between experienced traders and
                        retail investors by providing access to 60+ technical indicators relating to trends, oscillators
                        and trade volume. Using MT4, traders can identify trends such as Bollinger Bands and moving
                        averages in a timely manner.</p>
                </div>
            </div>
            <div class="col-sm-6 pad-left-40">
                <div class="pad-top-20-for-mob">
                    <p class="normal-para-font"><span style="font-weight:600;">Fully Customisable Charts:</span> Trading
                        strategies and risk appetite vary from trader to trader. The ability to customise charts to
                        complement trading strategies or market volatility make the MetaTrader 4 platform unique. You
                        can customise the layout to suit your trading set up and manage trading signals to be notified
                        of particular market situations.</p>
                    <p class="normal-para-font padding-30"><span style="font-weight:600;">Profiles and Chart
                            Templates:</span> MetaTrader 4 recognises that traders may have alternate trading strategies
                        for different financial markets. To account for such, it allows traders to create separate
                        profiles that they can easily switch between. This is particularly useful for those who trade a
                        variety of asset classes or employ multiple trading strategies.</p>
                    <p class="normal-para-font padding-30"><span style="font-weight:600;">One Click Trading:</span> This
                        feature allows traders to effectively capitalise on trading opportunities. Time is a critical
                        factor in financial markets and the ability to trade directly off charts with a single click is
                        valuable. Placing orders, taking profit and setting stop-losses can be achieved without any
                        compromise.</p>
                    <p class="normal-para-font padding-30"><span style="font-weight:600;">Automated Trading:</span>
                        Algorithmic trading (automated trading) is one of the major features of the MetaTrader 4
                        platform. It allows you to develop, test and apply Expert Advisors (EAs) and a substantial
                        amount of technical indicators. cityindex-live tight raw spreads and zero trade restrictions help
                        provide the ideal environment for automated trading. Our clients can also access <a class="custom-link-for-a" href="index.php" target="_blank"><b>AutoTrade</b></a>,
                        a state of the art copy trading system. Learn <a class="custom-link-for-a" href="index.php" target="_blank"><b>How To Set-up AutoTrade</b></a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid cmt2">
    <div id="advantages-mt4-using-trading-section" class="container">
        <div>
            <h2 class="h2-cent-font-sec hidden-xs" style="color:#fff;"><span class="helvetica-th-font" style="font-weight:100;">Advantages of Using</span> MT4 Platform <br>for Trading Forex</h2>
            <p class="h2-cent-font-sec visible-xs" style="color:#fff;margin-bottom:30px;"><span class="helvetica-th-font" style="font-weight:100;">Advantages of Using</span><br> MT4 Platform
                for<br> Trading Forex</p>
        </div>
        <div class="row padding-50">
            <div class="col-sm-6 pad-right-40">
                <div>
                    <p class="normal-white-para-font hidden-xs"><span style="font-weight:600;">ECN Pricing:</span> A key
                        strength of the MT4 platform is that it allows cityindex-live to offer <a class="custom-link-for-a" href="ECN_Pricing.php" target="_blank"><b>ECN Pricing</b></a>. This means that we are able to
                        stream price feeds directly from our liquidity providers. As a result, Forex traders have
                        real-time access to market prices and high levels of liquidity from top-tier financial
                        institutions. This is one of the reasons why cityindex-live are able to consistently offer extremely
                        competitive spreads and excellent trade execution speed. Our spreads start from as low as 0.0
                        pips on major currency pairs.</p>
                    <p class="normal-white-para-font visible-xs" style="text-align:left!important;"><span style="font-weight:600;">ECN Pricing:</span> A key strength of the MT4 platform is that it
                        allows cityindex-live to offer <a class="custom-link-for-a" href="ECN_Pricing.php" target="_blank"><b>ECN Pricing</b></a>. This means that we are able to stream price feeds
                        directly from our liquidity providers. As a result, Forex traders have real-time access to
                        market prices and high levels of liquidity from top-tier financial institutions. This is one of
                        the reasons why cityindex-live are able to consistently offer extremely competitive spreads and
                        excellent trade execution speed. Our spreads start from as low as 0.0 pips on major currency
                        pairs.</p>
                    <p class="normal-white-para-font padding-30 hidden-xs"><span style="font-weight:600;">Popularity:</span> MetaTrader 4 is the world’s most popular trading
                        platform. This is a significant advantage for Forex traders around the world. There are 10+
                        language options with a market leading amount of tools and indicators available. The widespread
                        use among expert traders is extremely beneficial to Forex traders looking to utilise automated
                        trading strategies. The platform is specifically designed to cater for algorithmic trading.</p>
                    <p class="normal-white-para-font padding-30 visible-xs" style="text-align:left!important;"><span style="font-weight:600;">Popularity:</span> MetaTrader 4 is the world’s most popular trading
                        platform. This is a significant advantage for Forex traders around the world. There are 10+
                        language options with a market leading amount of tools and indicators available. The widespread
                        use among expert traders is extremely beneficial to Forex traders looking to utilise automated
                        trading strategies. The platform is specifically designed to cater for algorithmic trading.</p>
                </div>
            </div>
            <div class="col-sm-6 pad-left-40">
                <div>
                    <p class="normal-white-para-font hidden-xs"><span style="font-weight:600;">Robust Security:</span>
                        In terms of turnover, Forex trading is the largest financial market in the world. This makes
                        security a priority and the MT4 platform does not take a backward step in this department. Its
                        128-bit encryption provides secure trading with those in Australia trading with cityindex-live
                        having the added security of segregated client funds. Traders can easily deposit and withdraw
                        funds via the Client Portal , as well as change leverage levels.</p>
                    <p class="normal-white-para-font visible-xs" style="text-align:left!important;margin-top:20px;">
                        <span style="font-weight:600;">Robust Security:</span> In terms of turnover, Forex trading is
                        the largest financial market in the world. This makes security a priority and the MT4 platform
                        does not take a backward step in this department. Its 128-bit encryption provides secure trading
                        with those in Australia trading with cityindex-live having the added security of segregated client
                        funds. Traders can easily deposit and withdraw funds via the Client Portal , as well as change
                        leverage levels.
                    </p>
                    <p class="normal-white-para-font padding-30 hidden-xs"><span style="font-weight:600;">Traders
                            Toolbox:</span> Those with a love trading account can benefit from using the MT4 <a class="custom-link-for-a" href="index.php" target="_blank"><b>Traders
                                Toolbox</b></a>. It provides over 10 sophisticated trade execution management, decision
                        assistance, precise alarms, real-time news and market data apps all accessible via your MT4
                        terminal. These advanced trade assistance apps help provide Forex traders with an enhanced
                        trading experience. </p>
                    <p class="normal-white-para-font padding-30 visible-xs" style="text-align:left!important;"><span style="font-weight:600;">Traders Toolbox:</span> Those with a love trading account can
                        benefit from using the MT4 <a class="custom-link-for-a" href="index.php" target="_blank"><b>Traders Toolbox</b></a>. It provides over 10 sophisticated trade
                        execution management, decision assistance, precise alarms, real-time news and market data apps
                        all accessible via your MT4 terminal. These advanced trade assistance apps help provide Forex
                        traders with an enhanced trading experience. </p>
                    <p class="normal-white-para-font padding-30 hidden-xs"><span style="font-weight:600;">Compatibility:</span> Aside from being smooth and user-friendly,
                        Forex traders using MT4 can also benefit from its availability across a number of platforms. FP
                        Markets offers MetaTrader 4 on Windows, <a class="custom-link-for-a" href="index.php" target="_blank"><b>Mac OS</b></a> and <a class="custom-link-for-a" href="index.php" target="_blank"><b>WebTrader</b></a> along with mobile versions designed for <a class="custom-link-for-a" href="index.php" target="_blank"><b>iOS</b></a> and
                        <a class="custom-link-for-a" href="index.php" target="_blank"><b>Android</b></a> devices.
                    </p>
                    <p class="normal-white-para-font padding-30 visible-xs" style="text-align:left!important;"><span style="font-weight:600;">Compatibility:</span> Aside from being smooth and user-friendly,
                        Forex traders using MT4 can also benefit from its availability across a number of platforms. FP
                        Markets offers MetaTrader 4 on Windows, <a class="custom-link-for-a" href="index.php" target="_blank"><b>Mac OS</b></a> and <a class="custom-link-for-a" href="index.php" target="_blank"><b>WebTrader</b></a> along with mobile versions designed for <a class="custom-link-for-a" href="index.php" target="_blank"><b>iOS</b></a> and
                        <a class="custom-link-for-a" href="index.php" target="_blank"><b>Android</b></a> devices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid cmt3">
    <div id="mt4-faq-acc-section" class="container">
        <div>
            <p class="h2-cent-font-sect">MetaTrader 4 - <span class="helvetica-th-font" style="font-weight:100;">FAQs</span></p>
        </div>

        <div class="wid-for-faq-section padding-30">
            <div class="panel-group" id="accordion">
                <div id="cardonnee" class="panel panel-default card-custom" style="border-radius: 0px 20px 20px 20px;background: linear-gradient( white, white), linear-gradient(to bottom right,#fff 14%,rgba(0,189,255,.48),#26CC68);background-clip: padding-box, border-box;background-origin: padding-box, border-box;border-left: 1px solid transparent;border-right: 1px solid transparent;border-bottom: 1px solid transparent;border-top: 1px solid transparent;">
                    <div id="cone" class="panel-heading padding-for-card-head-align padding-20">
                        <h4 class="panel-title hidden-xs">
                            <a class="card-head" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse1" onmouseover="this.style.color='#3e495c'" onmouseout="this.style.color='#3e495c'" onclick="cardOne()" aria-expanded="true" style="color: rgb(62, 73, 92);">How To Download
                                Metatrader 4? </a>
                        </h4>
                        <h4 class="panel-title visible-xs">
                            <a class="card-head" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse1" onmouseover="this.style.color='#3e495c'" onmouseout="this.style.color='#3e495c'" onclick="cardOne()" aria-expanded="true">How To Download<br> MetaTrader 4? </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body padding-for-card-align">
                            <div>
                                <p class="normal-para-font">You can download and install MetaTrader 4 in a few simple
                                    steps. </p>
                                <ul style="padding-left: 0;">
                                    <li class="list-item-default list-item-default89">
                                        <p class="normal-para-font">Register and open a <a class="custom-link-for-a" href="<?php echo $domain ?>auth/register.php" target="_blank"><b>Live
                                                    Trading Account</b></a> or <a class="custom-link-for-a" href="<?php echo $domain ?>auth/register.php" target="_blank"><b>Demo
                                                    Account</b></a></p>
                                    </li>
                                    <li class="list-item-default list-item-default89">
                                        <p class="normal-para-font">Log in to <a class="custom-link-for-a" href="../auth/login.php" target="_blank"><b>Client
                                                    Portal</b></a> using credentials provided in email</p>
                                    </li>
                                    <li class="list-item-default list-item-default89">
                                        <p class="normal-para-font">Download the appropriate version for your operating
                                            system</p>
                                    </li>
                                    <li class="list-item-default list-item-default89">
                                        <p class="normal-para-font">Install, log in, and start trading</p>
                                    </li>
                                </ul>
                                <p class="normal-para-font">Watch the video below for a step-by-step guide.</p>
                                <div class="text-center padding-30">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cardsec" class="panel panel-default card-custom">
                    <div id="csec" class="panel-heading padding-for-card-head-align">
                        <h4 class="panel-title">
                            <a class="card-head collapsed" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse2" onmouseover="this.style.color='#3e495c'" onmouseout="this.style.color='#3e495c'" onclick="cardSec()" aria-expanded="false">Why is
                                MT4 so popular?</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body padding-for-card-align">
                            <div>
                                <p class="normal-para-font">Released in 2005 by Metaquotes Software Corp, it didn't take
                                    long for MetaTrader 4 to become the trading platform of choice for trading Forex.
                                    The features and functionality of the software are among the key reasons for its
                                    success. It is compatible with a variety of operating systems, provides almost
                                    instant execution and caters for automated trading strategies including Expert
                                    Advisors (EAs) and trading robots. Read our complete guide on <a class="custom-link-for-a" href="index.php" target="_blank"><b>Why is MT4 so popular?</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cardthird" class="panel panel-default card-custom">
                    <div id="cthir" class="panel-heading padding-for-card-head-align">
                        <h4 class="panel-title hidden-xs">
                            <a class="card-head collapsed" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse3" onmouseover="this.style.color='#3e495c'" onmouseout="this.style.color='#3e495c'" onclick="cardThir(); cardThirdr();" aria-expanded="false">What is the difference between MetaTrader 4 and<br> Metatrader 5?
                            </a>
                        </h4>
                        <h4 class="panel-title visible-xs">
                            <a class="card-head collapsed" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse3" onmouseover="this.style.color='#3e495c'" onmouseout="this.style.color='#3e495c'" onclick="cardThir(); cardThirdr();" aria-expanded="false">What is the difference <br>between MetaTrader 4 <br>and Metatrader
                                5?</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body padding-for-card-align">
                            <div>
                                <p class="normal-para-font">MetaTrader 4 and MetaTrader 5 are two of the industry's
                                    leading trading platforms. Both offer an array of features including charting tools,
                                    multiple pending orders and customisable alerts. The key difference is that
                                    MetaTrader 4 was specifically designed for trading forex while MetaTrader 5 is a
                                    multi-asset platform that caters for trading CFDs in shares and other instruments.
                                    The preferred choice varies among traders depending on trading strategies and
                                    preferred instruments. For a detailed comparison, <a class="custom-link-for-a" href="index.php" target="_blank"><b>Click Here</b></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="cardthird" class="panel panel-default card-custom languagesEn">
                    <div id="cthir" class="panel-heading padding-for-card-head-align">
                        <h4 class="panel-title hidden-xs">
                            <a class="card-head collapsed" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse4" onmouseover="this.style.color='#0b121c'" onmouseout="this.style.color='#0b121c'" onclick="cardThir(); cardThirdr();" aria-expanded="false">What is MT4?</a>
                        </h4>
                        <h4 class="panel-title visible-xs">
                            <a class="card-head collapsed" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse4" onmouseover="this.style.color='#0b121c'" onmouseout="this.style.color='#0b121c'" onclick="cardThir(); cardThirdr();" aria-expanded="false">What is MT4?</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body padding-for-card-align">
                            <div>
                                <p class="normal-para-font">MetaTrader 4, most commonly known as MT4, is a revolutionary
                                    online trading
                                    platform that has been launched in July 2005 by MetaQuotes Software Corp to
                                    facilitate CFDs trading
                                    in forex, shares, commodities, indices and digital currencies. Metaquotes
                                    progressive web trader can
                                    be accessed through an internet browser and can be also downloaded for desktops and
                                    mobile devices.
                                    <br><br>
                                    MT4 became one of the most popular trading platforms due to its ease of use,
                                    advanced functionality,
                                    customisable interface, valuable trading tools, testing facilities, and optimisation
                                    of trading
                                    robots, including Expert Advisors (EAs) and algorithmic trading.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cardthird" class="panel panel-default card-custom languagesEn">
                    <div id="cthir" class="panel-heading padding-for-card-head-align">
                        <h4 class="panel-title hidden-xs">
                            <a class="card-head collapsed" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse5" onmouseover="this.style.color='#0b121c'" onmouseout="this.style.color='#0b121c'" onclick="cardThir(); cardThirdr();" aria-expanded="false">Can I use the MT4 platform on my smartphone?
                            </a>
                        </h4>
                        <h4 class="panel-title visible-xs">
                            <a class="card-head collapsed" data-toggle="collapse" data-parent="#accordion" href="index.php#collapse5" onmouseover="this.style.color='#0b121c'" onmouseout="this.style.color='#0b121c'" onclick="cardThir(); cardThirdr();" aria-expanded="false">Can I use the MT4 platform on my smartphone?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body padding-for-card-align">
                            <div>
                                <p class="normal-para-font">The MetaTrader 4 Mobile Smartphone Edition, commonly known
                                    as the MT4 trading platform is available for all mobile devices, including Android
                                    OS, iOS. MS Windows Mobile and HarmonyOS. The MT4 mobile application can be
                                    installed from Google Play, App Store and AppGallery.
                                    <br><br>
                                    The MT4 for smartphones allows traders to access the markets on the go through their
                                    trading accounts and use the platform’s features, including trade tracking, placing,
                                    editing or closing of trades. However, some of the MT4 mobile application’s features
                                    are slightly limited or not available on the mobile version.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



<div class="container-fluid mta">
    <div id="fp-markets-app-align-section" class="container">
        <div class="row">
            <div class="col-sm-6 pad-right-40">
                <div>
                    <p class="h4-left-font cs219arcont" id="heading-text-align">Introducing the All-New <br>cityindex-live
                        Trading App</p>
                    <p class="semi-head-font" id="heading-text-align">Low-Cost Trading on the Go!</p>
                    <div class="visible-xs">
                        <div class="row" style="display: inline-flex;margin: 0 auto;margin-top: 50px;">
                            <div class="col-sm-6" style="padding-left: 0px;">
                                <div>
                                    <span>
                                        <img src="../static/globalcityindex-live/files/iphone.png" style="max-width:100%;">
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="padding-left: 0px;">
                                <div>
                                    <span>
                                        <img src="../static/globalcityindex-live/files/android.png" style="max-width:100%;margin-top: -12px;">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="normal-white-para-font padding-top-25">Trade global markets from the palm of your hand.
                        Access all your favourite products from one convenient app through one account.</p>
                    <p class="normal-white-para-font padding-top-25" style="font-size: 23px!important;font-weight: 600!important;line-height: 30px!important;">Forex
                        / Share CFDs / Indices / <br>Commodities / Cryptocurrencies </p>
                </div>
                <div class="row padding-top-35 dis-fle-for-mob-align">
                    <div class="col-sm-6">
                        <div>
                            <span>
                                <a href="index.php#" target="_blank">
                                    <img src="../static/globalcityindex-live/files/apple-store.png" style="max-width:100%;">
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 margin-left-90-align">
                        <div>
                            <span>
                                <a href="index.php#" target="_blank">
                                    <img src="../static/globalcityindex-live/files/google-store.png" style="max-width:100%;">
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 pad-left-40 hidden-xs">
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span>
                                <img src="../static/globalcityindex-live/files/iphone.png" style="max-width:100%;transform: scale(1.1);margin-top: 15px;">
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <span>
                                <img src="../static/globalcityindex-live/files/android.png" style="max-width:100%;margin-left: -35px;margin-top: -30px;">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="container-fluid c7 end-divider">
    <div id="multiple-time-section" class="container default-wd">
        <div class="sub-title mobile-subtitle-1">
            <p class="trade-forex-indices-sec hidden-xs">Trade Forex, Share CFDs, Indices, Commodities &amp;
                Cryptocurrencies on the</p>
            <p class="trade-forex-indices-sec visible-xs" style="margin-bottom: 10px;">Trade Forex, Share CFDs,<br>
                Indices, Commodities <br>&amp; Cryptocurrencies on the</p>
        </div>
        <div class="title mobile-title-1">
            <h2>
                <p class="hidden-xs" style="padding-bottom: 2px;font-size:44px!important;margin-top:10px;font-family: 'Helvetica Neue';">
                    <span class="helvetica-th-font" style="font-weight:100;">cityindex-live </span> MT4 platform</p>
                <p class="visible-xs" style="padding-bottom: 2px;font-size: 39px!important;line-height: 1!important;font-family: 'Helvetica Neue';">
                    <span class="helvetica-th-font" style="font-weight:100;">cityindex-live</span> MT4<br>platform</p>
            </h2>
        </div>
        <div class="row padding-50">
            <div class="col-sm-3 margin-left-for-color-ft-align padding-top-30-for-mobile cs219esmt4m">
                <div class="text_block right-border cs219esmt4s1 cs219ar0pnt0 rightborder-disable">
                    <p class="color-font">0.0</p>
                    <p class="color-para-head cs219arcont">Tight raw Spreads <br>from 0.0 Pips</p>
                </div>
            </div>
            <div class="col-sm-3" id="tradig">
                <div class="text_block right-border cs219esmt4s2 cs219vi67plus cs219ar67plus cs219ar609090plus ">
                    <p class="color-font">67+</p>
                    <p class="color-para-head">67+ Trading<br>Instruments</p>
                </div>
            </div>
            <div class="col-sm-3" id="deposit">
                <div class="text_block short-rigt-border cs219esmt4s3 cs219vi100dol cs219ar100 cs219ar609091plus">
                    <p class="color-font">$100</p>
                    <p class="color-para-head">Only $100 <br>Initial Deposit</p>
                </div>
            </div>
            <div class="col-sm-3 margin-for-left-115 rightborder-able1">
                <div class="text_block cs219esmt4s4 cs219vi500ml">
                    <p class="color-font">500:1</p>
                    <p class="color-para-head">Leverage<br>up to 500:1</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid c11">
    <div id="section-blue-last" class="container default-wd">
        <div class="white-title mobile-title-1">
            <h2>
                <p class="hidden-xs cs219esspeth cs219visttr cs219arcont cs-219-de-std-al-br" style="padding-bottom: 2px;font-family: 'Helvetica Neue';">Start Trading on cityindex-live’ MT4
                    Today</p>
                <p class="visible-xs" style="padding-bottom: 2px;font-family: 'Helvetica Neue';">Start Trading
                    on<br> cityindex-live’ <br>MT4 Today</p>
            </h2>
        </div>
        <div class="white-sub-title">
            <p class="hidden-xs cs219esspeth cs219visttr cs219arcont cs-219-de-fol-sim-std-al-br" style="line-height: 25px!important;">Following 4 <span class="helvetica-th-font" style="font-weight:100;">Simple Steps</span></p>
            <p class="visible-xs">Following 4 <br> <span class="helvetica-th-font" style="font-weight:100;">Simple
                Steps</span></p>
        </div>
        <div class="padding-default"></div>
        <div class="row padding-last-blue-section">
            <div class="col-sm-3 dis-flex">
                <span>
                    <img class="image-center" src="../static/globalcityindex-live/files/1.png" alt="" title="">
                    <img class="arrow-imag-align arrow-imag-align-change hidden-xs" src="../static/globalcityindex-live/files/arrow-copy.png" alt="" title="">
                    <img class="arrow-imag-align arrow-imag-align-change visible-xs" src="../static/globalcityindex-live/files/arrow-copy-4.png" alt="" title="">
                </span>
                <div class="inner_text margin-last-blue-section">
                    <span class="mobile-desktop-font-aligns">
                        <p class="white-titlefont-blue-section">Download</p>
                    </span>
                    <span class="mobile-desktop-font-aligns">
                        <p style="color:#ffffff!important;font-family: 'Helvetica Neue';">the MT4 terminal</p>
                    </span><br>
                </div>
            </div>
            <div class="col-sm-3 dis-flex">
                <span>
                    <img class="image-center" src="index.php" alt="" title="">
                    <img class="arrow-imag-align arrow-imag-align-change hidden-xs" src="../static/globalcityindex-live/files/arrow-copy.png" alt="" title="">
                    <img class="arrow-imag-align arrow-imag-align-change visible-xs" src="../static/globalcityindex-live/files/arrow-copy-4.png" alt="" title=""></span>
                <div class="inner_text margin-last-blue-section">
                    <span class="mobile-desktop-font-aligns">
                        <p class="white-titlefont-blue-section">Open </p>
                    </span>
                    <span class="mobile-desktop-font-aligns">
                        <p class="hidden-xs" style="color:#ffffff!important;font-family: 'Helvetica Neue';">the
                            file it has<br> downloaded</p>
                        <p class="visible-xs" style="color:#ffffff!important">the file it has downloaded</p>
                    </span><br>
                </div>
            </div>
            <div class="col-sm-3 dis-flex">
                <span>
                    <img class="image-center" src="../static/globalcityindex-live/files/3.png" alt="" title="">
                    <img class="arrow-imag-align arrow-imag-align-change hidden-xs" src="../static/globalcityindex-live/files/arrow-copy.png" alt="" title="">
                    <img class="arrow-imag-align arrow-imag-align-change visible-xs" src="../static/globalcityindex-live/files/arrow-copy-4.png" alt="" title=""></span>
                <div class="inner_text margin-last-blue-section">
                    <span class="mobile-desktop-font-aligns">
                        <p class="white-titlefont-blue-section">Install</p>
                    </span>
                    <span class="mobile-desktop-font-aligns">
                        <p style="color:#ffffff!important;font-family: 'Helvetica Neue';">MT4 following the
                            <br>onscreen instructions
                        </p>
                    </span><br>
                </div>
            </div>
            <div class="col-sm-3 dis-flex">
                <span>
                    <img class="image-center margin-for-mobile" src="../static/globalcityindex-live/files/4.png" alt="" title="">
                </span><br>
                <div class="inner_text margin-last-blue-section">
                    <span class="mobile-desktop-font-aligns">
                        <p class="white-titlefont-blue-section">Login</p>
                    </span>
                    <span class="mobile-desktop-font-aligns">
                        <p style="color:#ffffff!important;font-family: 'Helvetica Neue';">using your demo <br>or
                            real account</p>
                    </span><br>
                </div>
            </div>
        </div>
        <div>
            <p style="text-align: center;">
                <a class="blue-button-last-section" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#ffffff'" href="<?php echo $domain ?>auth/register.php">Register to
                    Download MT4</a>
            </p>
        </div>
    </div>
</div>


<style>
    body {
        font-size: 18px;
    }
    .custom-link-for-a {
        color: #00bdff !important;
        cursor: pointer;
        text-decoration: underline !important;
        font-weight: 700;
    }

    .cmt3 {
        background-color: #eeeeee;
    }

    #advantages-mt4-using-trading-section {
        padding-top: 90px;
        padding-bottom: 95px;
    }

    .panel-group .panel+.panel {
        margin-top: 3px;
    }

    .panel-group .panel {
        border-radius: 20px 20px 20px 20px;
    }

    .card-custom {
        background-color: #fff !important;
        width: auto;
        padding-top: 10px;
        padding-bottom: 10px;
        background: linear-gradient(white, white), linear-gradient(to right, #fff 25%, rgba(0, 189, 255, 0.48), #26CC68);
        background-clip: padding-box, border-box;
        background-origin: padding-box, border-box;
        border-left: 1px solid transparent;
        border-right: 1px solid transparent;
        border-bottom: 1px solid transparent;
        border-top: 1px solid transparent;
    }

    .panel-heading {
        background-color: transparent !important;
        color: #3e495c !important;
    }

    .panel-heading {
        padding: 10px 15px 10px 25px;
    }

    .panel-default>.panel-heading {
        color: #333;
        background-color: transparent;
        border-color: transparent;
    }

    .card-head {
        font-family: 'Helvetica Neue';
        font-size: 23px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.22;
        letter-spacing: normal;
        text-align: left;
        color: #0b121c !important;
    }

    /*.panel-heading .card-head.collapsed:after {
        height: 0px;
        content: " ";
    }

    .panel .card-head:after {
        font-family: 'FontAwesome';
        content: " ";
        float: right;
        height: 11px;
        color: #00bdff;
        font-size: 20px;
    }*/

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: transparent;
    }

    .padding-for-card-align {
        padding-left: 25px;
        padding-right: 25px;
        padding-bottom: 30px;
        padding-top: 5px;
    }

    .h2-cent-font-sect {
        font-family: 'Helvetica Neue';
        font-size: 32px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1;
        letter-spacing: normal;
        text-align: center;
        color: #0b121c;
    }

    #mt4-faq-acc-section {
        padding-top: 90px;
        padding-bottom: 75px;
    }

    .wid-for-faq-section {
        width: 650px;
        margin: 0 auto;
    }

    .cmt2 {
        background: url(../static/globalcityindex-live/files/Rectangle-18-desktop.png);
        background-size: cover;
        background-repeat: no-repeat;
    }

    #mt4-platform-for-forex-section {
        padding-top: 90px;
        padding-bottom: 95px;
    }

    .normal-para-font {
        font-family: 'Helvetica Neue' !important;
        font-size: 18.5px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.51;
        letter-spacing: normal;
        text-align: left;
        color: #0b121c;
    }

    .h2-cent-font-sec {
        font-family: 'Helvetica Neue';
        font-size: 32px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.08;
        letter-spacing: normal;
        text-align: center;
        color: #0b121c;
    }

    .cs4 {
        position: relative;
        z-index: 9;
        background: url(../static/globalcityindex-live/files/bg2-1.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 35%;
    }

    #profiles-chart-templates-section {
        padding-top: 35px;
        padding-bottom: 75px;
    }

    .cs2 {
        background-color: #e8eaea;
    }

    .mt4-sub-heading {
        font-family: 'Helvetica Neue' !important;
        font-size: 23px !important;
        font-weight: 300;
        line-height: 17px !important;
        color: #0b121c !important;
        font-stretch: normal;
        font-style: normal;
        letter-spacing: normal;
        text-align: center;
    }

    .padding-40 {
        padding-top: 40px;
    }

    .padding-50 {
        padding-top: 50px;
    }

    .navi-align {
        background-color: #ffffff;
        z-index: 9;
        position: relative;
        margin-top: -32px;
        padding-top: 40px;
        margin-bottom: -3px;
    }

    .c1 {
        background-color: #ffffff;
        z-index: 9;
        position: relative;
        margin-top: 10px;
    }

    .btn.btn-transparent-red {
        border: none;
        border-radius: 0 10px 10px 10px !important;
        font-size: 24px !important;
        font-weight: bold !important;
        font-stretch: normal !important;
        font-style: normal !important;
        letter-spacing: 0.98px !important;
        text-align: center !important;
        color: #ffffff !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        text-transform: none !important;
        letter-spacing: normal !important;
    }

    .right-line-border-for-menu {
        background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) 100% 60% no-repeat;
    }

    html {
        margin-top: 0px !important;
    }

    .second-section-three-align {
        margin-left: -45px
    }

    .second-section-first-align {
        margin-left: 45px
    }

    .custom-link {
        color: #00bdff !important;
        cursor: pointer;
        text-decoration: underline !important;
        font-weight: 700;
    }

    .trade-forex-indices-sec {
        font-size: 23px !important;
        font-weight: 200;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.22 !important;
        letter-spacing: normal;
        text-align: center;
        color: #0b121c !important;
        font-family: 'Helvetica Neue';
    }

    .margin-for-left-115 {
        margin-left: -90px;
    }

    .short-rigt-border {
        position: absolute;
        background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) 100% 40% no-repeat;
        padding-right: 55px;
        margin-left: -70px;
    }

    .wid-for-last-section {
        width: 590px;
    }

    .before-button-font {
        font-size: 18px !important;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.39;
        letter-spacing: normal;
        text-align: center;
        color: #2e3642 !important;

    }

    .c5 {
        position: relative;
        z-index: 9;
        background: url(../static/globalcityindex-live/files/indicators-1-1.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 35%;
    }

    .margin-left-for-color-font-align {
        margin-left: 40px;
    }

    .margin-left-for-color-ft-align {
        margin-left: 70px;
    }

    .padding-20 {
        padding-top: 20px;
    }

    .pad-for-system-section {
        padding-bottom: 75px;
    }

    .padding-right-for-first-30 {
        padding-right: 40px;
    }

    .padding-left-for-first-30 {
        padding-left: 40px;
    }

    .margin-for-left-75 {
        margin-left: -45px;
    }

    ul {
        list-style: none !important;
    }

    .mt4windows {

        width: 200px;
        height: 210px;

    }

    .fp-tab-head-item {
        display: inline-block !important;
        margin: 0 0px !important;
        padding: 10px 0 !important;
    }


    .active-tab {

        background: url(./static/globalcityindex-live/files/tab-act.png);
        background-position: center center !important;
        background-size: 100% 100% !important;
    }

    .fp-tab-head-item span {
        padding: 0 !important;
    }

    .fp-tab-head-item span {
        border: 2px solid transparent !important;
        text-transform: initial !important;
    }

    .fp-tab-head-item span {
        transition: all .2s ease-in-out !important;
        min-width: 150px;
        text-align: center !important;
        color: #0b121c !important;
        cursor: pointer !important;

        position: relative !important;
        font-family: 'Helvetica Neue' !important;
    }

    .windowsmt5-title2.cus-title {
        margin-bottom: 0px;
        font-family: 'Helvetica Neue' !important;
        color: #0b121c !important;
        font-weight: 300 !important;
        font-size: 17px !important;
        margin-top: 5px;
    }

    .colms-title1mt4 {
        font-family: 'Helvetica Neue' !important;
        font-size: 20px !important;
        font-weight: 700 !important;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.17 !important;
        margin-top: -8px;
    }

    .active-tab a:before,
    .active-tab a:after {
        position: absolute;
        content: "";
        background-repeat: no-repeat;
        z-index: 1;

    }

    .active-tab a:before {
        background-image: url(/wp-content/themes/fptheme/image-2020/bg-active-left.png' %});
        width: 43px;
        bottom: -9px;
        left: 444px;
        height: 10px;
    }

    .active-tab a:after {
        background-image: url(/wp-content/themes/fptheme/image-2020/bg-active-right.png' %});
        right: 445px;
        width: 40px;
        bottom: -9px;
        height: 10px;
    }

    .short-rigtborder {
        position: absolute;
        background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) 100% 55% no-repeat;
        padding-right: 40px;
    }

    .layer {
        background-color: rgba(0, 0, 0, 0) !Important;
    }

    .btn.btn-transparent-red {
        border-radius: 0 10px 10px 10px !important;
    }

    .mob-hei {
        line-height: 25px !important;
    }

    .rightborder {
        position: absolute;
        padding-right: 40px;
        background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) 100% 60% no-repeat;
    }

    .right-border {
        position: absolute;
        padding-right: 50px;
        background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) center right no-repeat;
    }

    .pad-desk-mob {
        padding-left: 40px;
    }

    .para-iress {
        padding-left: 10px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.51 !important;
        letter-spacing: normal;
        text-align: left;
    }

    #section-iress-tools {
        padding-top: 35px;
        padding-bottom: 75px;
    }

    #fully-customizable-charts-section {
        padding-top: 35px;
        padding-bottom: 75px;
    }

    .tech-indicat-first {
        float: right;
        padding-left: 50px;

    }

    .tech-indicat-sec {
        float: right;
        padding-left: 14px;

    }

    #section-draw-tools {
        padding-top: 90px;
        padding-bottom: 80px;
    }

    #multiple-time-section {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .pad-for-desktop {
        padding-left: 90px;
    }

    #section-last-before {
        padding-top: 80px;
        padding-bottom: 70px;

    }

    .margin-last-blue-section {
        margin-top: -20px;
    }

    .blue-button-last-section {
        padding: 16px 28px !important;
        border-radius: 0px 10px 10px 10px;
        font-family: 'Helvetica Neue';
        /*padding: 21px 28px 16px 28px !important;*/
        color: #fff;
        font-size: 26px;
        line-height: 25px;
        width: 250px !important;
        font-weight: 700;
        text-transform: uppercase;
        background-color: #00beff !important;
    }

    .image-center {
        display: block;
        margin: 0 auto;
    }

    #section-blue-last {
        padding-top: 100px;
        padding-bottom: 120px;
    }

    .padding-last-blue-section {
        padding-top: 60px;
        padding-bottom: 70px;
    }

    .arrow-imag-align {
        margin-left: 185px;
        margin-top: -100px;
        min-width: 70%;
    }

    .white-titlefont-blue-section {
        font-size: 23px !important;
        font-family: 'Helvetica Neue' !important;
        font-weight: bold !important;
        color: #ffffff !important;
        line-height: 1.51 !important;
    }

    p {
        color: #0b121c;
    }

    .c8 {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50%;
        background-image: url(/wp-content/themes/fptheme/image-2020/mt5-mac/fpm-bg.png' %});
    }

    .c10 {
        background-color: #eeeeee;
        position: relative;
        z-index: 9;
    }

    .white-sub-title p {
        font-family: 'Helvetica Neue' !important;
        line-height: 1.1 !important;
        font-size: 44px !important;
        font-weight: bold !important;
        font-stretch: normal;
        font-style: normal;
        letter-spacing: normal;
        text-align: center !important;
        color: #ffffff !important;

    }

    .white-title p {
        font-size: 32px !important;
        font-weight: 200;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.25;
        letter-spacing: normal;
        text-align: center !important;
        color: #ffffff !important;
    }

    .c11 {
        background-image: url(../static/globalcityindex-live/files/0006_steps-1.png) !important;
        position: relative;
        z-index: 9;
        background-size: cover;
        background-position: 50%;
    }

    .mobile-desktop-font-aligns {
        text-align: center;
    }

    .color-para {
        margin-top: 5px;
        font-size: 18px !important;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.56 !important;
        letter-spacing: normal;
        text-align: center;
        color: #0b121c !important;
        font-family: 'Helvetica Neue' !important;
    }

    .color-para-head {
        margin-top: 5px;
        font-size: 23.5px !important;
        font-family: 'Helvetica Neue' !important;
        font-weight: 300 !important;
        color: #0b121c !important;
        font-stretch: normal;
        font-style: normal;
        letter-spacing: normal;
        text-align: center;
    }

    .color-font {
        background-image: linear-gradient(to bottom right, #00bdff 35%, #26CC02) !important;
        font-family: 'Helvetica Neue' !important;
        font-size: 90.5px !important;
        font-weight: bold !important;
        font-stretch: normal !important;
        font-style: normal !important;
        line-height: 1 !important;
        letter-spacing: -2.26px !important;
        text-align: center !important;
        color: #0b121c !important;
        -webkit-background-clip: text !important;
        background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
    }

    .mobile-container {
        display: none;
    }

    .nav-bar-section {
        padding-bottom: 20px;
    }

    #section2 {
        padding-top: 90px;
        padding-bottom: 95px;
    }

    .end-divider {
        background-size: auto;
        background-position: bottom center !important;
        background-image: url(../static/globalcityindex-live/files/dotted-lines-icon-.png) !important;
        background-repeat: no-repeat !important;
    }

    .cus-nav-bar ul,
    ol {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: auto;

    }

    .c7 {
        background-color: #ffffff;
    }

    .cus-nav-bar li {
        float: left;
        text-align: centre;
    }

    .cus-nav-bar li a {
        display: block;
        color: #3e495c;
        text-align: center;
        padding: 1px 16px;
        text-decoration: none;
    }

    .c6 {
        background-color: #ffffff;
        position: relative;
    }

    .fp-tab-head-item span:after {
        border-right: none !important;
        border-bottom: none !important;
    }

    .row>.col-md-12>nav {
        display: block !important;
    }

    .padding-15 {
        padding-top: 15px;
    }

    .light-blue-bg {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50%;
        background-image: url(../static/globalcityindex-live/files/0017_Group-399.png);
    }

    .light-blue-bg-font {
        font-size: 18.5px;
        font-weight: 200;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.51;
        letter-spacing: normal;
        text-align: center;
        color: #ffffff !important;
    }

    .nav-list-for-mobile-desktop {
        display: table;
        margin: 0 auto !Important;
    }

    .menu-bot-bg {
        background-size: auto;
        background-image: url(../static/globalcityindex-live/files/dotted-lines-icon-.png);
        background-position: 50%;
        background-repeat: no-repeat;
    }

    .cus-nav-inner {
        text-transform: uppercase;
        font-size: 17px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 3.12;
        letter-spacing: normal;
        text-align: center;
    }

    li.list-item-menu {
        width: 16%;
    }

    .container-fluid.page-navi li {
        float: left;
        text-align: centre;
    }

    .fp-color-white {
        color: white !important;
    }

    p.mobile-subtitle-1 {
        font-size: 22px;
    }

    .inner_text.padding-default p {
        font-size: 17px;
    }

    .inner-section-content.mobile-title-3 h3 {
        color: white;
        font-size: 30px;
    }

    p.padding-10.mobile-title-3 {
        color: white !important;
        font-size: 17px !important;
    }

    .c2 {
        background-image: url(./static/globalcityindex-live/files/bg2.png) !important;
        background-repeat: no-repeat;
        background-size: cover;
        height: 550px;
    }

    .c6 {
        background-color: #152a4a !important;
        color: white;
        height: 400px;
    }

    span.mobile_image_wrap {
        position: absolute;
        top: -76px;
    }

    body {
        text-align: left;
        color: #2e3642 !important;
    }

    p {
        margin-bottom: 0px;
        font-weight: 350;
    }

    .row.fb-cus-row {

        max-width: 1080px;
        margin: auto;
        position: relative;
        top: 10px;
    }

    .sub-title.mobile-subtitle-1 p {
        font-size: 17px;
    }

    .title p {
        font-family: 'Helvetica Neue' !important;
        font-size: 40px !important;
        line-height: 40px !important;
        color: #0b121c !important;
        text-align: center;
        padding-bottom: 24px;
        font-weight: 800;
    }

    .text-block1 p {
        font-size: 17.5px;
    }

    div#section1 {
        padding-top: 32px;
        padding-bottom: 70px;
    }

    div#section4 {
        padding-top: 32px;
        padding-bottom: 100px;
    }

    #section10 {
        padding-bottom: 120px;
        padding-top: 100px;
    }

    .section7_text_box p {
        padding-right: 16px;
        padding-left: 24px;
    }

    .black-button {
        font-family: 'Helvetica Neue';
        padding: 20px 30px !important;
        border-radius: 0px 10px 10px 10px;
        color: #fff;
        font-size: 22px;
        line-height: 25px;
        width: 320px !important;
        font-weight: 700;
        background-color: #2E3642 !important;
        float: left;
        text-align: center;
    }

    .blue-button {
        font-family: 'Helvetica Neue';
        float: right;
        padding: 20px 30px !important;
        border-radius: 0px 10px 10px 10px;
        color: #fff;
        font-size: 22px;
        line-height: 25px;
        width: 320px !important;
        font-weight: 700;
        background-color: #00beff !important;
        text-align: center;
    }

    .system-section-pad-mobi {
        padding-top: 30px;

    }

    .padding-default {
        padding-top: 20px;
    }

    .list-item-default {
        font-family: 'Helvetica Neue' !important;
        list-style: none !important;
        padding-left: 24px !important;
        background-image: url(./static/globalcityindex-live/files/bullet.png) !important;
        background-repeat: no-repeat !important;
        background-size: 5px !important;
        background-position: 0 12px !important;
    }

    .container-fluid.nav-bar-section.nav-desktop {
        display: block;
    }

    .padding-10 {
        padding-top: 10px;
    }

    .padding-30 {
        padding-top: 30px;
    }

    .padding-50 {
        padding-top: 50px;
    }

    .padding-70 {
        padding-top: 70px;
    }

    .left-padding-1 {
        padding-left: 90px;
    }

    .left-padding-2 {
        padding-left: 50px;
    }

    .sub-title p {
        text-align: center;
    }

    .list-item-greentick {
        list-style: none !important;
        padding-left: 24px !important;
        background-image: url(./static/globalcityindex-live/files/bullet.png) !important;
        background-repeat: no-repeat !important;
        background-size: 5px !important;
        background-position: 0 12px !important;
    }

    .au-mt4 {
        font-size: 18.5px;
        line-height: 28px;
        text-align: left;
        color: #2e3642 !important;
    }

    .right-divider-1 {
        position: absolute;
        padding-right: 20px !important;
        padding-bottom: 90px;
        margin-left: 1px;
        background-size: contain !important;
        background-position: center right !important;
        background-image: url(./static/globalcityindex-live/files/vertical-image-1.png);
        background-repeat: no-repeat;
    }

    .right-divider-2 {
        position: absolute;
        padding-right: 20px !important;
        padding-bottom: 18px;
        margin-left: 1px;
        background-size: contain !important;
        background-position: center right !important;
        background-image: url(./static/globalcityindex-live/files/vertical-image-1.png);
        background-repeat: no-repeat;
    }

    .image-effect-top {
        position: absolute;
        left: 483px;
        top: -196px;
        width: 100%;
    }

    .image-effect-bottom {
        position: absolute;
        left: 485px;
        top: 337px;
        width: 100%;
    }

    p.text-7 {
        font-weight: bold;
        font-size: 26px !important;
        line-height: 36px !important;
        color: #3e495c !important;
        text-align: center;
    }

    .section7_text_box {
        text-align: center;
        font-size: 17px;
    }

    .full-width-divider {
        width: 100%;
        height: 1px;
        border-top: 1px solid rgba(0, 0, 0, .1);
        position: absolute;
        left: 0;
        top: 0;
        z-index: 10;
        border-top-color: #c4c4c4;
    }

    .inner-section-6 {
        top: 20px;
        left: 60px;
    }

    .image-for-autochartist-mobile {
        display: none;
    }

    .container.default-wd.mobile-padding-top1 {
        padding-top: 60px !important;
    }

    .mobile-divider {
        display: none;
    }

    .col-sm-6.image-for-section6-mobile {
        display: none;
    }

    .mobile-full-width-divider {
        display: none !important;
    }

    .mobile-full-width-divider {
        width: 100%;
        height: 1px;
        border-top: 1px solid rgba(0, 0, 0, .1);
        position: absolute;
        left: 0;
        top: 0;
        z-index: 10;
        border-top-color: #c4c4c4;
    }


    .mobile-container {
        max-width: 480px;
        margin: auto;
        color: white;
        border-radius: 10px;
    }

    .topnav {

        overflow: hidden;
        background-color: white;
        position: relative;
    }

    .topnav #myLinks {
        display: none;
    }

    .topnav a {
        color: black;
        ;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 28px;
        font-weight: 800;
        display: block;
    }

    .topnav a.icon {
        font-size: 44px;
        display: block;
        position: absolute;
        right: 0;
        top: -13px;
    }

    .topnav a:hover {
        color: Blue;
    }

    .mobile-link-active {
        height: 54px;
        margin-right: 0.5px;
        background-image: url(../static/globalcityindex-live/files/dotted-lines-icon-.png);
        background-position: 50%;
        text-transform: uppercase;
    }

    .fa-gradient {
        background: linear-gradient(to right, rgb(88, 137, 139), rgb(70, 211, 155));
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .menu-divider {
        background-size: 1px 35px;
        background-position: center right !important;
        background-image: url(./static/globalcityindex-live/files/vertical-image-1.png);
        background-repeat: no-repeat;

    }

    .dark__txt__mob {
        color: #ffffff;
    }


    @media only screen and (max-width: 600px) {
        .dark__txt__mob {
            color: #fff !important;
        }

        .pad-top-20-for-mob {
            padding-top: 20px;
        }

        .cmt2 {
            background: url(../static/globalcityindex-live/files/Rectangle-18-mobile.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .dis-flex {
            display: flex;
            padding-left: 20px;
        }

        #fully-customizable-charts-section {
            padding-top: 20px;
            padding-bottom: 50px;
        }

        .pad-lef-15-form-mob {
            padding-left: 15px !important;
        }

        .wid-align-for-pro-chart {
            width: 330px;
            margin: 0 auto;
        }

        .wid-align-for-mob-poit-inst {
            width: 265px;
            margin: 0 auto;
        }

        .cs4 {
            position: relative;
            z-index: 9;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 35%;
            background: none;
            background-color: #eeeeee;
        }

        .wid-align-for-mob-poit {
            width: 355px;
            margin: 0 auto;
        }

        .section.headerbg {
            background-image: url(/wp-content/themes/fptheme/image-2020/mt4-platform-pages-new/mt4-top-level-hero-mobile.png' %}) !important;
        }

        .padding-top-30-for-mobile {
            padding-top: 20px;
        }

        .cus-nav-bar ul,
        ol {

            overflow: hidden !important;

        }

        .mobile-wid-for-menu {
            width: 115px;
        }

        .right-line-border-for-menu {
            background: none !important;
        }

        .color-para {
            padding-left: 10px;
            padding-right: 10px;
        }

        .c5 {
            background-image: url(../static/globalcityindex-live/files/img-2-1.png) !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: transparent !important;

        }

        .margin-for-mobile-alignment-robosection {
            margin-top: 375px;
        }

        .padding-for-realtime-mobile {
            padding-left: 40px;
            padding-right: 20px;
        }

        .padding-bottom-100-for-mobile {
            padding-bottom: 100px !important;

        }

        .margin-for-left-115 {
            margin-left: 0px !important;
        }

        .right-border {
            position: relative !important;
            padding-right: 0px !important;
            background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) center bottom no-repeat !important;
            margin-bottom: 25px;
            padding-bottom: 30px;
            height: auto !important;
        }

        .short-rigt-border {
            position: relative !important;
            padding-right: 0px !important;
            background: url(../static/globalcityindex-live/files/icon-horizontal-seperator.png) center bottom no-repeat !important;
            margin-bottom: 25px;
            padding-bottom: 35px;
            margin-left: 0px !important;

        }

        .padding-left-right-for-mobile-section {
            padding-left: 15px;
            padding-right: 15px;
        }

        #section-last-before {
            padding-top: 80px;
            padding-bottom: 50px !important;
        }

        .wid-for-last-section {
            width: auto !important;
        }

        .margin-left-for-color-font-align {
            margin-left: 0px !important;
        }

        .margin-left-for-color-ft-align {
            margin-left: 0px !important;
        }

        .padding-right-for-first-30 {
            padding-right: 15px !important;
        }

        .padding-left-for-first-30 {
            padding-left: 15px !important;
        }

        .margin-for-left-75 {
            margin-left: 0px !important;
        }

        .btn.btn-transparent-red {

            display: none !important;
        }

        .headerbg {
            background-position: center !important;
            background-size: cover !important;
        }

        div#section1 {
            padding-top: 35px !important;
        }

        .img-align-nav {
            height: 36px !important;
        }

        .rightbr {
            line-height: 1px !important;
        }

        .fp-tab-head-item span {

            min-width: 10px !important;

        }

        .active-tab a:after {
            background-image: url(/wp-content/themes/fptheme/image-2020/bg-active-right.png' %});
            right: 128px;
            width: 40px;
            bottom: -9px;
            height: 10px;
        }

        .active-tab a:before {
            background-image: url(/wp-content/themes/fptheme/image-2020/bg-active-left.png' %});
            width: 43px;
            bottom: -9px;
            left: 127px;
            height: 10px;
        }

        .active-tab {
            background: url(/wp-content/themes/fptheme/image-2020/bg-mobile-active.png' %}) !important;
            background-position: center center !important;
            background-size: 100% 100% !important;
        }

        .nav-list-for-mobile-desktop {
            display: flex;
            height: 86px !important;
        }

        .mt4windows {
            width: 100px;
            height: 170px !important;

        }

        .cus-nav-bar li a {
            padding: 0px !important;
        }

        .windowsmt5-title2 {

            display: none !important;
        }

        .colms-title1mt4 {
            font-size: 15px !important;
            font-weight: 300 !important;
            margin-top: 10px;
        }

        div#section1 {
            padding-top: 32px;
            padding-bottom: 70px !important;
        }

        .system-section-pad-mobi {
            padding-top: 70px !important;
            margin-bottom: -10px;
        }

        .margin-top-for-mobile {
            margin-top: 60px;
        }

        .blue-button {
            float: none !important;
            padding: 16px 16px !important;
        }

        .black-button {
            float: none !important;
            padding: 16px 28px !important;

        }

        .para-cent {
            text-align: center !important;
        }

        #section2 {
            padding-top: 65px;
            padding-bottom: 70px;
        }

        .padding-30 {
            padding-top: 20px !important;
        }

        .padding-formobile {
            padding-top: 30px;
            padding-bottom: 30px;

        }

        .margin-right-for-mob {
            margin-right: 15px !important;
        }

        .image-section {
            margin-right: 10px;

        }

        .light-blue-bg-font {
            text-align: left !important
        }

        .padding-50 {
            padding-top: 0px !important;
        }

        .rightborder {
            padding-left: 0px !important;
            padding-right: 0px;
            background: url(/wp-content/themes/fptheme/image-2020/iress-toplevel/icon-ver-seperator.png' %}) center bottom no-repeat !important;
            padding-bottom: 35px;
            margin-top: 5px;
            position: relative !important;
            margin-bottom: 25px;
        }

        .short-rigtborder {
            padding-left: 0px !important;
            padding-right: 0px;
            background: url(/wp-content/themes/fptheme/image-2020/iress-toplevel/icon-ver-seperator.png' %}) center bottom no-repeat !important;
            padding-bottom: 35px;
            margin-bottom: 25px;
            margin-top: 5px;
            position: relative !important;
        }

        #section-iress-tools {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }

        .power-full-section-mobile {
            padding-left: 30px !important;
            margin-top: -10px !important;
        }

        #section10 {
            padding-bottom: 55px !important;
            padding-top: 60px !important;
            margin-bottom: 0px !important;
        }

        .end-divider {
            background-size: auto;
            background-position: bottom center !important;
            background-image: url(../static/globalcityindex-live/files/dotted-lines-icon-.png) !important;
            background-repeat: no-repeat !important;
        }

        .iress-first-para {
            padding-left: 30px !important;
            padding-right: 30px !important;
        }

        .iress-second-para {
            padding-left: 25px;
            padding-right: 25px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .pad-desk-mob {
            padding-left: 0px !important;
        }

        #section-draw-tools {
            padding-top: 55px;
            padding-bottom: 55px;
        }

        .real-time-section-margin {
            margin-top: -100px;
        }

        #multiple-time-section {
            padding-top: 60px;
            padding-bottom: 65px;
        }

        .c7 {
            background-color: #ffffff;
        }

        .compare-section-image-align {
            width: 110% !important;
            margin-left: -15px;
            margin-top: -80px;
        }

        .custom-temp-image-align {
            width: 150% !important;
            margin-left: -95px;
            margin-top: -60px;
        }

        .margin-for-align-mob {
            margin-top: -100px;
        }

        .image-align-for-mobile {
            width: 95% !important;
            margin-left: 15px;
            margin-top: -105px;
            margin-bottom: 5px;
        }

        body,
        html {
            overflow-x: hidden !important;
        }

        .margin-for-mobile {
            margin-right: 50px !important;
        }

        .white-sub-title p {
            font-size: 35px !important;
        }

        .white-title p {
            font-family: 'Helvetica Neue';
            font-size: 34px !important;
            line-height: 1.25 !important;

        }

        #section-blue-last {
            padding-top: 65px;
            padding-bottom: 90px;
        }

        .padding-last-blue-section {
            padding-top: 20px;
            padding-bottom: 30px;
        }

        .mobile-desktop-font-aligns {
            text-align: left !important;
        }

        .margin-last-blue-section {
            margin-top: 0px !important;
        }

        .blue-button-last-section {
            font-size: 21px !important;
            padding: 16px 16px!important;
        }

        .second-section-first-align {
            margin-left: 0px !important;
        }

        .second-section-three-align {
            margin-left: 0px !important;
        }

        .arrow-imag-align {
            margin-left: 55px;
            min-width: 15% !important;
            width: 10%;
            margin-top: 5px !important;
            margin-bottom: 5px !important;
        }

        .image-center {
            display: block;
            margin: 0 30px !important;
        }

        .row>.col-md-12>nav {
            display: block !important;
            padding-left: 10px;
            padding-right: 10px;

        }

        .row>div.visible-xs.fp-font.no-uppercase.color-white {
            padding-top: 70px !important;
        }



        .title p {
            font-size: 52px !important;
            line-height: 50px !important;
        }

        .container-fluid.page-navi {
            display: none;
        }

        .col-sm-6.image-box {
            display: none;
        }

        h3 {
            font-size: 40px;
        }

        .padding-default.mobile-padding-none {
            padding-top: 0px;
        }


        .margin-tech-indicat-mob {
            margin-top: -140px;
        }

        .tech-indicat-sec {
            float: none;
            padding-left: 0px;

        }

        .tech-indicat-first {
            float: none;
            padding-left: 0px;
        }

        .col-sm-4.mobile-sm4-1 {
            padding-top: 0px !important;
        }

        .inner_text.padding-30.mobile-text-4 {
            padding-left: 54px !important;
            padding-right: 30px !important;
        }



        .title.mobile-title-3 p {
            font-size: 35px !important;
            text-align: center !important;
            line-height: 1.13 !important;
        }

        .pad-mob-center-align {
            padding-left: 20px;
            padding-right: 20px;
            margin-top: 10px;
        }

        .pad-for-desktop {
            padding-left: 0px !important;
        }

        .padding-70.mobile-padding-section-5 {
            display: none;
        }

        .left-padding-1 {
            padding-left: 25px !important;
        }

        .left-padding-2 {
            padding-left: 25px !important;
        }

        .col-sm-4 {
            padding-top: 30px;
        }

        .section-mobile {
            padding-top: 355px !important;
        }

        .padding-70.mobile-padding-none {
            padding-top: 0px;
        }

        .padding-50.mobile-padding-none {
            padding-top: 0px;
        }



        .section7_text_box p {
            padding-right: 8px;
            padding-left: 12px;
        }

        .container-fluid {
            margin-left: 0px !important;
            margin-right: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .image-for-autochartist-mobile {
            display: block !important;
            padding-bottom: 30px;
        }

        .mobile-full-width-divider {
            display: block !important;
        }

        .mobile-divider {
            display: block !important;
        }

        .mobile-container {
            display: block !important;
        }

        .container-fluid.c2 {
            height: 950px !important;
        }

        .col-sm-6.text-content-1 {
            padding-left: 15px;
            padding-bottom: 30px;
        }

        .col-sm-4 p {
            padding-left: 12px !important;
        }

        .title.mobile-title-1 p {
            padding-bottom: 2px;
            padding-left: 38px;
            padding-right: 34px;
            font-size: 32px !important;
            line-height: 36px !important;
        }

        .col-sm-6.image-for-section6-mobile {
            display: block !important;
        }

        .mobile-subtitle-1 p {
            font-size: 25px !important;
        }

        .inner_text.padding-50 {
            padding-left: 25px !important;
        }

        .mobile-inner-image-section6 {
            padding-top: 20px;
            padding-bottom: 0px;
            margin-top: -32px !important;
            margin-right: -28px !important;
            margin-left: -35px !important;
        }

        .mobile-apps-link.padding-50 {
            padding-top: 8px !important;
        }

        .col-sm-6.mobile-title-2 h3 {
            font-size: 30px !important;
            font-weight: 700 !important;
            padding-left: 19px !important;
            padding-right: 16px !important;
            text-align: center !important;
        }

        .col-sm-6.mobile-title-2 p {
            text-align: center !important;
            font-size: 24px !important;
            padding-left: 52px !important;
            padding-right: 48px !important;
        }

        .mobile-title-3 h3 {
            font-weight: 700 !important;
            padding-left: 8px;
            font-size: 28px;
        }

        p.padding-10.mobile-title-3 {
            font-size: 20px !important;
            text-align: center;
        }

        .right-divider-1 {
            position: unset;
            background: none
        }

        .right-divider-2 {
            position: unset;
            background: none
        }

        .full-width-divider {
            display: none;
        }

        .mobile_image_wrap {
            display: none;
        }

        .image-effect-top {
            display: none;
        }

        .image-effect-bottom {
            display: none;
        }

        .inner-section-6 {
            left: 0px;
        }

        .desktop-app-icon img {
            width: 142px;
        }


        .final-content {
            padding-left: 11px !important;
            padding-right: 16px !important;
        }

        .final-content p {
            font-size: 14px !important;
        }

        .padding-15 {
            padding-top: 0px;
        }

        .light-blue-bg {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50%;
            background-image: url(../static/globalcityindex-live/files/_0014_Group-400-mobile.png) !important;
        }

    }

    @media (min-width: 768px) {
        .col-sm-6 {
            width: 48% !important;
        }
    }

    @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
        .active-tab a:after {
            background-image: url(/wp-content/themes/fptheme/image-2020/bg-active-right.png' %});
            right: 104px;
            width: 40px;
            bottom: -9px;
            height: 10px;
        }
    }

    @media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {
        .active-tab a:after {
            background-image: url(/wp-content/themes/fptheme/image-2020/bg-active-right.png' %});
            right: 94px;
            width: 40px;
            bottom: -9px;
            height: 10px;
        }
    }
</style>



<link rel="stylesheet" href="../static/globalcityindex-live/files/extrastyles.css" type="text/css">
<style>
    @media only screen and (max-width: 600px) {
        #profiles-chart-templates-section {
            padding-top: 15px;
            padding-bottom: 50px;
        }

        .menu-bot-bg {
            padding-bottom: 0px !important;
        }

        .padding-top-10-imp-for-mob {
            padding-top: 10px !important;
        }

        .colms-containermt4 img {
            height: 30px !important;
        }

        span.colms-title1mt4 {
            font-size: 12px !important;
        }

        span.colms-containermt4.mob-right-divider {
            height: 90px !important;
        }

        .et_pb_row.et_pb_row_1.mob-mar.mobile-nav {
            display: block !important;
        }

        span.colms-containermt4:hover {
            background: none !important;
        }

        span.colms-containermt4.active-tab {
            background-repeat: no-repeat;
            height: 86px !important;
            background-size: 100% 100% !important;
            background-position: center center !important;
            padding-left: 0px !important;
            background-image: url(./static/globalcityindex-live/files/tab-act.png) !important;
        }

        .only-on-desktop {
            display: none !important;
        }

        a.btn.btn-lg.btn-transblue-top {
            font-size: 20px !important;

        }

        .active-tab {
            background-repeat: no-repeat;
            height: 86px !important;
            background-size: 100% 100% !important;
            background-position: center center !important;
            padding-left: 0px !important;
            background-image: url(./static/globalcityindex-live/files/tab-act.png) !important;
        }

        .active-tab a:before,
        .active-tab a:after {
            background: none !important;
            ;
        }

        .mob-right-divider {
            background-size: 1px 35px !important;
            background-position: center right !important;
            background-image: url(./static/globalcityindex-live/files/vertical-image-1.png) !important;
            background-repeat: no-repeat !important;
        }

        .mt4windows {

            width: 200px !important;
            height: 90px !important;
        }
    }


    @media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {
        a.navbar-brand img {
            width: 204px !important;
        }
    }


    @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-device-pixel-ratio: 2) and (device-aspect-ratio: 40/71) {
        a.navbar-brand img {
            width: 168px !important;
        }

        .colms-containermt4 img {
            height: 26px !important;
        }

        span.colms-title1mt4 {
            font-size: 10px !important;
        }

        a.btn.btn-lg.btn-transblue-top {
            font-size: 17px !important;
            width: 280px !important;
        }

        .img-align-nav {
            height: 32px !important;
        }

    }

    @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (orientation : portrait) {
        a.navbar-brand img {
            width: 214px !important;
        }
    }
</style>

<style>
    li.fp-tab-head-item.mt4windows:hover {
        position: relative;
        height: 226px !important;
        background: url(./static/globalcityindex-live/files/tab-act.png) !important;
        background-position: center center !important;
        background-size: 100% 100% !important;
        box-shadow: 27px 223.1px rgba(0, 189, 255, .48), -26px 223.1px rgba(0, 189, 255, .48) !important;
    }

    li.fp-tab-head-item.mt4windows.active-tb {

        height: 226px !important;
        background: url(./static/globalcityindex-live/files/tab-act.png) !important;
        background-position: center center !important;
        background-size: 100% 100% !important;
        box-shadow: 27px 223.1px rgba(0, 189, 255, .48), -26px 223.1px rgba(0, 189, 255, .48) !important;
    }

    .headerbg {
        background-size: 100%;
        background-position: 55% 95%;
    }

    a:hover {
        color: #00aeef;
    }

    @media only screen and (max-width: 600px) {
        li.fp-tab-head-item.mt4windows.active-tb {
            height: auto !important;

        }

        .c11 {
            background-image: url(../static/globalcityindex-live/files/bg3-section-mobile.png) !important;
        }
    }
</style>

<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: 0;
        text-transform: unset;
    }

    @media only screen and (max-width: 600px) {
        .container-fluid.c1.end-divider {
            background: none !important;
        }

        a.btn-account {
            margin-left: 50px !important;
            ;
            margin-right: 50px !important;
            ;
        }

        .mobile-container {
            display: block !important;
        }

        .navbar-header {
            padding-right: 12px !important;
        }

        div#register-now {
            padding-left: 12px;
            padding-right: 12px;
        }

        .section.nomarginmobile.footer-links div {
            text-align: center !important;
        }

        .col-md-6.col-xs-6.dropdown {
            padding-left: 20px !important;
        }

        .col-md-6.col-xs-6.pxmobilef.font12.text-right {
            padding-right: 22px !important;
        }

        .margin60.col-md-12.text-left.footer-intro.font12 {
            padding-left: 25px !important;
            padding-right: 25px !important;
        }

        .registration p {
            color: white !important;
        }

        .nav-icon {
            margin: 1em;
            width: 40px;
            margin-top: -9px;
            margin-right: 1px;

        }

        .nav-icon:after,
        .nav-icon:before,
        .nav-icon div {
            background: linear-gradient(to right, rgb(-140, 134, 171) 55%, #26cc68);
            border-radius: 3px;
            content: '';
            display: block;
            height: 2px;
            margin: 11px 0px;
            transition: all .2s ease-in-out;
        }

        div#el-11d961c2 {
            margin-bottom: 68px !important;
        }

        #el-4923d651[data-vce-do-apply*=all][data-vce-do-apply*=el-4923d651] {
            padding-bottom: 104px !important;
        }

        .only-on-mobile {
            display: block !important;
        }

        #el-4ae40169>.vce-col-inner>.vce-col-content {
            padding-right: 18px !important;
        }

        .vce-single-image-inner.vce-single-image--absolute {
            padding-right: 20px !important;
        }

        #el-0d5c28f5[data-vce-do-apply*=all][data-vce-do-apply*=el-0d5c28f5] {
            margin-left: -20px !important;
        }

        p.third-head-sec {
            margin-left: 32px !important;
        }

        div#el-4c4559f7 {
            margin-left: -18px !important;
        }

        div#el-82367445 {
            margin-top: -97px !important;
        }

        div#el-c633099b {
            margin-top: -60px !important;
        }

        #el-e9436ba9[data-vce-do-apply*=all][data-vce-do-apply*=el-e9436ba9] {
            padding-top: 0px !important;
        }

        div#el-7790f85e {
            margin-top: -19px !important;
        }

        #el-832c5bbf {
            margin-top: 24px !important;
        }

        a.navbar-brand {
            padding-left: 18px !important;
        }

        .whitedown {
            margin-left: 178px !important;
        }
    }


    @media screen and (device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) {
        a.navbar-brand img {
            width: 206px !important;
        }

        .img-align-nav {
            height: 40px !important;
        }

        #el-a4b6ced5 {
            padding-right: 55px !important;
            padding-left: 0px !important;
        }

        #el-0a7659c4>figure>.vce-single-image-inner.vce-single-image--absolute>.vce-single-image {
            min-width: 130% !important;
        }

        #el-0e8a640e,
        #el-a4b6ced5 {
            padding-right: 50px !important;
        }

        p.third-head-sec {
            margin-left: 5px !important;
            margin-right: 44px !important;
        }

        p.third-sec-text {
            margin-right: 14px !important;
        }

    }


    @media only screen and (min-device-width: 320px) and (max-device-width: 568px) and (-webkit-device-pixel-ratio: 2) and (device-aspect-ratio: 40/71) {
        a.navbar-brand img {
            width: 164px !important;
        }

        .img-align-nav {
            height: 35px !important;
        }

        .title.mobile-title-3 p {
            font-size: 30px !important;
        }

        .colms-title1mt4 {
            font-size: 15px !important;
        }

        .blue-button-last-section {
            font-size: 17px !important;
        }
    }

    @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (orientation : portrait) {
        a.navbar-brand img {
            width: 214px !important;
        }

    }
</style>


<style>
    #fp-markets-app-align-section {
        padding-top: 80px !important;
        padding-bottom: 5px !important;
    }

    .mta {
        background: url(../static/globalcityindex-live/files/Rectangle-12-desktop.png);
        background-size: cover !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
    }

    .normal-white-para-font {
        font-size: 18px !important;
        font-weight: 300 !important;
        font-stretch: normal !important;
        font-style: normal !important;
        line-height: 1.56 !important;
        letter-spacing: normal !important;
        text-align: left !important;
        color: #ffffff !important;
    }

    .semi-head-font {
        font-size: 23px !important;
        font-weight: 300 !important;
        font-stretch: normal !important;
        font-style: normal !important;
        line-height: 1.22 !important;
        letter-spacing: normal !important;
        text-align: left !important;
        color: #ffffff !important;
    }

    .h4-left-font {
        font-size: 32px !important;
        font-weight: bold !important;
        font-stretch: normal !important;
        font-style: normal !important;
        line-height: 1.13 !important;
        letter-spacing: normal !important;
        text-align: left !important;
        color: #ffffff !important;
        margin-bottom: 5px !important;
    }

    .pad-right-40 {
        padding-right: 40px
    }

    .pad-left-40 {
        padding-left: 40px
    }

    .padding-top-10 {
        padding-top: 10px !important;
    }

    .padding-top-20 {
        padding-top: 20px !important;
    }

    .padding-top-25 {
        padding-top: 25px !important;
    }

    .padding-top-30 {
        padding-top: 30px !important;
    }

    .padding-top-40 {
        padding-top: 40px !important;
    }

    .padding-top-25 {
        padding-top: 25px !important;
    }

    .padding-top-35 {
        padding-top: 35px !important;
    }

    .margin-left-90-align {
        margin-left: -70px !important;
    }

    @media only screen and (max-width: 600px) {
        .padding-for-card-align {
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-top: 5px;
        }

        .panel-heading {
            padding: 10px 15px 10px 20px;
        }

        .ipad-vid-align {
            width: 100%;
        }

        #mt4-faq-acc-section {
            padding-top: 60px;
            padding-bottom: 35px;
        }

        .h2-cent-font-sec {
            font-size: 32px !important;
        }

        #advantages-mt4-using-trading-section {
            padding-top: 65px;
            padding-bottom: 65px;
        }

        #mt4-platform-for-forex-section {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .h2-cent-font-sect {
            font-size: 32px !important;
        }

        .wid-for-faq-section {
            width: auto !important;
            padding: 20px 15px 15px 15px !important;
            margin: 0 auto;
            padding-top: 15px !important;
        }

        .margin-left-90-align {
            margin-left: 0px !important;
        }

        .dis-fle-for-mob-align {
            display: inline-flex !important;
            margin: 0 auto !important;
        }

        .pad-right-40 {
            padding-right: 30px !important;
            padding-left: 30px !important;
        }

        .pad-left-40 {
            padding-left: 30px !important;
            padding-right: 30px !important;
        }

        .h4-left-font {
            text-align: center !important;
        }

        .semi-head-font {
            text-align: center !important;
        }

        .normal-white-para-font {
            text-align: center !important;
        }

        .mta {
            background: url(../static/globalcityindex-live/files/Rectangle-12-mobile11.png) !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
        }

        #fp-markets-app-align-section {
            padding-top: 70px !important;
            padding-bottom: 70px !important;
        }
    }

    h1.hidden-xs.fp-font.no-uppercase.color-white {
        padding-top: 30px !important;
    }
</style>
<style>
    .bord-lin {
        border-radius: 0px 20px 20px 20px !important;
        background: linear-gradient(white, white), linear-gradient(to bottom right, #fff 14%, rgba(0, 189, 255, .48), #26CC68) !important;
        background-clip: padding-box, border-box !important;
        background-origin: padding-box, border-box !important;
        border-left: 1px solid transparent !important;
        border-right: 1px solid transparent !important;
        border-bottom: 1px solid transparent !important;
        border-top: 1px solid transparent !important;
    }

    .bord-line-one {
        border-radius: 20px 20px 20px 20px !important;
    }

    .bg-bord-card-one {
        background: linear-gradient(white, white), linear-gradient(to right, #fff 25%, rgba(0, 189, 255, 0.48), #26CC68) !important;
        background-clip: padding-box, border-box !important;
        background-origin: padding-box, border-box !important;
        border-left: 1px solid transparent !important;
        border-right: 1px solid transparent !important;
        border-bottom: 1px solid transparent !important;
        border-top: 1px solid transparent !important;
    }
</style>
<style>
    .mktoButton {
        font-size: 16px;
        border-radius: 0px 10px 10px 10px;
        text-align: center;
        color: #ffffff;
        background-color: #00beff !important;
        border: none !important;
        font-weight: bold !important;
        padding: 13px 34px !important;
    }

    .mktoForm .mktoButtonWrap.mktoSimple .mktoButton {
        background-color: #00beff !important;
    }

    .mktoButtonWrap {
        margin-left: 0px !important;
    }

    .mktoButton {
        width: 100% !important;
        font-size: 20px !important;
    }

    .mktoForm input[type=text],
    .mktoForm input[type=url],
    .mktoForm input[type=email],
    .mktoForm input[type=tel],
    .mktoForm input[type=number],
    .mktoForm input[type=date],
    .mktoForm textarea.mktoField,
    .mktoForm select.mktoField {
        width: 250px !important;
        background: #ffffff;
        color: #7c989f;
    }

    .mktoForm {
        width: 100% !important;
    }

    .cf_widget {
        display: none !important;
    }

    .mktoFormRow {
        width: 25% !important;
        float: left;
    }

    .mktoButtonRow {
        width: 25% !important;
        float: left;
    }

    .mktoForm label {
        display: none !important;
    }

    .mktoForm .mktoFormRow {
        clear: inherit !important;
    }
</style>
<script>
    $(document).ready(function () {

        setTimeout(
            function () {
                document.getElementsByName('FirstName')[0].placeholder = 'First Name*';
                document.getElementsByName('LastName')[0].placeholder = 'Last Name';
                document.getElementsByName('Email')[0].placeholder = 'Enter Email*';
            }, 3000);


    });
    function cardOne() {
        document.getElementById("cone").classList.add("padding-20");
        document.getElementById("cthir").classList.remove("padding-20");
        document.getElementById("csec").classList.remove("padding-20");

        document.getElementById("cardonnee").classList.remove("bord-line-one");
        document.getElementById("cardsec").classList.remove("bord-lin");
        document.getElementById("cardthird").classList.remove("bord-lin");

        document.getElementById("cardonnee").classList.remove("bg-bord-card-one");
    }
    function cardSec() {
        document.getElementById("csec").classList.add("padding-20");
        document.getElementById("cthir").classList.remove("padding-20");
        document.getElementById("cone").classList.remove("padding-20");

        document.getElementById("cardsec").classList.add("bord-lin");
        document.getElementById("cardthird").classList.remove("bord-lin");
        document.getElementById("cardonnee").classList.add("bord-line-one");

        document.getElementById("cardonnee").classList.add("bg-bord-card-one");
    }
    function cardThir() {
        document.getElementById("cthir").classList.add("padding-20");
        document.getElementById("csec").classList.remove("padding-20");
        document.getElementById("cone").classList.remove("padding-20");

        document.getElementById("cardthird").classList.add("bord-lin");
        document.getElementById("cardsec").classList.remove("bord-lin");
        document.getElementById("cardonnee").classList.add("bord-line-one");

        document.getElementById("cardonnee").classList.add("bg-bord-card-one");
    }		
</script>
        
        



    </main>
    <!--------- Main area end --------->


    <div class="section trading-bg2" style="padding-bottom: 0px;background-image: url(../static/globalcityindex-live/files/bottom-bg-1.webp);" id="register-now">
    <div class="container">
        <div class="row">
            <div class="col-md-5 padding60 col-md-offset-1">
				<div class="trading_header_title_inner" style="padding-top:10px;">Start Trading <br>in Minutes</div>
				<br>
				<div class="trading_bullets_new">
					<img src="../static/globalcityindex-live/files/bullet-17.png" class="lazy" alt="bullet"> Access 10,000+ financial instruments<br>
					<img src="../static/globalcityindex-live/files/bullet-17.png" class="lazy" alt="bullet"> Auto open &amp; close positions<br>
					<img src="../static/globalcityindex-live/files/bullet-17.png" class="lazy" alt="bullet"> News &amp; economic calendar<br>
					<img src="../static/globalcityindex-live/files/bullet-17.png" class="lazy" alt="bullet"> Technical indicators &amp; charts<br>
					<img src="../static/globalcityindex-live/files/bullet-17.png" class="lazy" alt="bullet"> Many more tools included
				</div>						
            </div>
            
            <div class="clear"></div>
            <br>
			<div class="col-md-12">
			
				<hr style="border-color:#676869;">
				<div class="clearfix"></div>
				<br><br>
				
				</div>
			<div class="clearfix"></div>	
			<br><br>
        </div>
    </div>
</div>

    <!--------- Footer area start --------->
   <!-- start: Footer -->






<?php  include("../includes/footer.php") ?>
<style>
    .footerp p {
        margin-bottom: 15px;
        line-height: 1.8;
    }

    .menu li {
        list-style: none !important;
    }
</style>

<!--Mobile Footer Start-->
<footer class="mob-footer" style="padding-top: 35px;">
    <div class="container">
    <div class="row visible-xs">
        <p class="mob-para">
            <a data-toggle="collapse" data-parent="#accordion" class="a-mobmenu anymenu" href="index.php#collapseExample" aria-expanded="false"> Quick Start &amp; Resources</a>
        </p>
         <div class="footermenu collapse" id="collapseExample" aria-expanded="false">
            <div class="card card-body">
            <div class="menu-footer-0-container">
            <ul id="menu-footer-1" class="menu">
                <li><a href="<?php echo $domain ?>auth/register.php">Open An Account</a></li>
                <li><a href="<?php echo $domain ?>auth/register.php">Try a Demo</a></li>
            
            </ul>
            </div>  
            </div>
        </div>

        <p class="mob-para">
            <a data-toggle="collapse" data-parent="#accordion" class="a-mobmenu anymenu" href="index.php#collapseExample2" aria-expanded="false"> Markets</a>
        </p>
        <div class="footermenu collapse" id="collapseExample2" aria-expanded="false" style="height: 0px;">
            <div class="card card-body">
            <div class="menu-footer-1-container">
            <ul id="menu-footer-6" class="menu">
                <li><a href="Forex_Trading.php">What is Forex Trading?</a></li>
                <li><a href="index.php">What is CFD Trading?</a></li>
     
                <li><a href="Forex.php">Forex</a></li>
                <li><a href="Share_CFDs.php">Shares</a></li>
                <li><a href="Metals.php">Metals</a></li>
                <li><a href="commodities.php">Commodities</a></li>
                <li><a href="Indices.php">Indices</a></li>
                 
                <li><a href="index.php">Futures</a></li>
                <li><a href="cryptocurrency.php">Digital Currencies</a></li>
                <li><a href="bonds.php">Bonds</a></li>
                <li><a href="ETF_Trading.php">ETFs</a></li>
            </ul>
            </div>  
            </div>
        </div>

    <p class="mob-para">
        <a data-toggle="collapse" data-parent="#accordion" class="a-mobmenu anymenu" href="index.php#collapseExample3"> Tools &amp; Platforms</a>
    </p>
      <div class="collapse footermenu" id="collapseExample3">
            <div class="card card-body">
            <div class="menu-footer-2-container">
            <ul id="menu-footer-7" class="menu">
                <li><a href="index.php">MetaTrader 4 (MT4)</a></li>
                <li><a href="MetaTrader_5.php">MetaTrader 5 (MT5)</a></li>
                <li><a href="ctrader.php">cTrader</a> </li>
          
               
                <li><a href="Virtual_Private_Server.php">VPS</a></li>
                 
                <li><a href="MAM_PAMM.php">MAM/PAMM</a></li>
                 
                <li><a href="Social_Trading.php">Social Trading</a></li>
                 <li><a href="Trading_Central.php">
                    Trading Central 
                </a>
                </li> 

            </ul>
            </div> 
            </div>
        </div>

    <p class="mob-para">
        <a data-toggle="collapse" data-parent="#accordion" class="a-mobmenu anymenu" href="index.php#collapseExample4"> Trading Info</a>
    </p>
      <div class="collapse footermenu" id="collapseExample4">
            <div class="card card-body">
            <div class="menu-footer-3-container">
            <ul id="menu-footer-7" class="menu">
                <li><a href="Forex_Account_Types.php">MT4/5 Account Types</a></li>
                <li><a href="Funding.php">Deposit Funds</a></li>
                <li><a href="<?php echo  $domain  ?>pages/Withdraw_Funds.php">Withdraw Funds</a></li>
                 
                <li><a href="Forex_Spreads.php">Forex Spreads</a></li>
                <li><a href="Swap_Rates.php">Forex Swap Rates</a></li>
              
                <li><a href="ctrader_fees.php">cTrader Fees &amp; Charges</a></li>
                <li><a href="Trading_Hours.php">Trading Hours</a></li>
            </ul>
            </div> 
            </div>
        </div>

    <p class="mob-para">
        <a data-toggle="collapse" data-parent="#accordion" class="a-mobmenu anymenu" href="index.php#collapseExample5">
          About Us</a>
    </p>
      <div class="collapse footermenu" id="collapseExample5">
            <div class="card card-body">
            <div class="menu-footer-4-container">
            <ul id="menu-footer-8" class="menu">
                <li><a href="Why_FP_Markets.php">Why cityindex-live?</a></li>
                <li><a href="about.php">About cityindex-live</a></li>
                <li><a href="ECN_Pricing.php">ECN Pricing</a></li>
                <!--<li><a href="what-is-dma-pricing">DMA Pricing</a></li>-->
                <li><a href="FP_Markets_Partners.php">Partner with cityindex-live</a></li>
                <li><a href="">FAQ</a></li>
               
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            </div> 
            </div>
        </div>

    <p class="mob-para">
        <a data-toggle="collapse" data-parent="#accordion" class="a-mobmenu anymenu" href="index.php#collapseExample6">
          Regulation &amp; Licence </a>
    </p>
      <div class="collapse footermenu" id="collapseExample6">
            <div class="card card-body">
            <div class="menu-footer-5-container">
            <ul id="menu-footer-9" class="menu">
                
                <li><a href="Regulation.php">Regulation</a></li>
            </ul>
            </div> 
            </div>
        </div>

    <div class="visible-xs" style="margin-bottom: 30px;margin-top: 20px;">
        <img src="../static/globalcityindex-live/files/fmenu-seperator.webp" alt="menu-seperator">
    </div>

    <div class="col-md-12 text-center visible-xs mobile-socials">
        <div style="margin-bottom:20px;">
            <a href="index.php"><img class="lazy max__width__200" src="../static/globalcityindex-live/files/logo-main.4b9c545ea9347660b73dd3b00a629d43.png" alt=" footer logo"></a>
        </div>
         <!--<div class="mob-contact"> Call us: </div>
          <div><a class="mob-contact-info" href="tel:+44 20 3831 3622">+44 20 3831 3622</a></div>-->
          <br>
          
          <div class="mob-contact">Email:</div>
          <div><a class="mob-contact-info" href="mailto:support@cityindex-live.net"> support@cityindex-live.net</a></div>    
            
          <br><br>
            
    <div class="footer__bottom">
            <div class="footer__bottom__top">
                <div class="align-items-center">
                    <div class="col-md-6">
                        <!--<div class="footer__select">
                            <select name="" id="" class="form-select select-options">
                                <option value="" selected>ASIC</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                                <option value="">Option 4</option>
                                <option value="">Option 5</option>
                            </select>
                            <div class="input-icon">
                                <i class="far fa-chevron-down"></i>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                         
                    </div>
                    <div class="col-md-12 footer_certificate" style="display: flex;justify-content: center;">
                        <img class="certificate" src="../static/globalcityindex-live/files/FP_Markets_2023_Certification_Badge.png" alt="Certified" style="height: 140px; padding: 35px 37px 0px 37px;margin-bottom: -38px;">
                    </div>
                </div>
            
</div>

</footer>

<!-- Smartsupp Live Chat script -->

   
    



<!--Mobile Footer End-->    <!--------- Footer area end --------->
    
     <script src="../static/globalcityindex-live/files/owl.carousel.min.js"></script>
    <script src="../static/globalcityindex-live/files/simplyScroll.js"></script>
    <script src="../static/globalcityindex-live/files/main.js"></script>

    <link href="../static/globalcityindex-live/files/style.css" rel="stylesheet">
    <link href="../static/globalcityindex-live/files/style_v3.css" rel="stylesheet">
    <link href="../static/globalcityindex-live/files/responsive.css" rel="stylesheet">
   
    <!-- Footer Chunk Start -->

    <style>
      .new-object {
        background-color: #FF0000;
        color: #fff;
        border-radius: 10px;
        text-align: center;
        font-weight: 800;
        font-size: 10px;
        width: auto;
        display: inline-block;
        padding: 2px 6px 3px 6px;
    }
    .new-item{
      justify-content: normal !important;
    }
    @media  only screen and (max-width: 768px) {
      .new-item .new-object{
            margin: 0px 5px;
      }
    }
  </style>
<div class="container page__id">
    <div class="row">
        <p style="color:white;">Source - [^s^] | Page ID - 30 </p>
    </div>
</div>
<!-- nc schema-->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "[[!++site_url]][[$current_url]]"
  },
  "headline": "Forex Account Types",
  "image": "[[!++site_url]]/static/globalcityindex-live/files/logo-main.png",  
  "author": {
    "@type": "Organization",
    "name": "cityindex-live",
    "url": "[[!++site_url]]"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "cityindex-live",
    "logo": {
      "@type": "ImageObject",
      "url": "[[!++site_url]]/static/globalcityindex-live/files/logo-main.png"
    }
  },
  "datePublished": "[[*publishedon]]"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "[[*pagetitle]]",
    "description": "[[*description:default=`[[*introtext]]",
    "publisher": {
        "@type": "Organization",
        "name": "cityindex-live"
    },
    "license": "[[!++site_url]][[$current_url]]"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "[[!++site_url]]"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "[[*pagetitle]]",
    "item": "[[!++site_url]][[$current_url]]"  
  }]
}
</script>




<!-- TrustBox script -->
<script type="text/javascript" src="../static/globalcityindex-live/files/tp.widget.bootstrap.min.js" async=""></script>
<!-- End TrustBox script -->

<!-- New Live Chat code -->

<!-- End of New Live Chat code -->

<!-- New Live Widget Start 30/01/25 -->



<!-- New Live Widget Start 30/01/25 -->


<!-- GLOBAL FORM SIGN UP -->
<!-- <script src="https://www.google.com/recaptcha/api.js' %}" async ></script> -->
<script src="../static/globalcityindex-live/files/js.cookie.js"></script>
<script src="../static/globalcityindex-live/files/i1502958122408_jquery.validate.js"></script>


<script>
    /* SIGN UP FORM VALIDATION */
    var signupFormGlobal = "#form_signup_global";
    var $ = jQuery.noConflict();
    $(signupFormGlobal).validate({
        ignore: [],
        rules: {
            first_name: {
                required: true,
                minlength: 3,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
            },
            country: {
                required: true,
            }
        },
        onfocusout: function (element) {
            $(element).valid();
        },
        errorClass: 'error',
        validClass: 'valid',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
        messages: {
            first_name: {
                required: "First name is required.",
            },
            last_name: {
                required: "Last name is required.",
            },
            email: {
                required: "Email is required.",
                email: "Please enter a valid email address",
            },
            phone: {
                required: "Phone is required."
            },
            country: {
                required: "Country is required."
            },
        },
        errorPlacement: function (error, element) {
            if ($(element).is("input")) {
                //error.insertAfter($(element));
            } else if ($(element).is("select")) {
                //error.insertAfter($(element).closest(".form-msg"));
            } else {
                //error.insertAfter(element)
            }
        },
        submitHandler: function (form) {

            var fpphone = $('#form_signup_global #phone').val();

            if (fpphone.match(/^[0-9]*$/)) {
                $('#form_signup_global #phone').removeClass('error').addClass('valid');
                $('.fp-demo-signup-global .form_signup_global_msg').php("");
            }
            else {
                $('#form_signup_global #phone').removeClass('valid').addClass('error');
                $('.fp-demo-signup-global .form_signup_global_msg').php("Please enter a valid phone number; only numeric value is expected.");
                return false;
            }

            $('.fp-demo-signup-global .form_signup_global_msg').php("");
            /* grecaptcha.execute();
            console.log("The captcha has been already solved"); */
            var honeypot = $('#form_signup_global #honeypot').val();
            if (honeypot != "") {
                alert('value is - >' + honeypot);
                return false;
            } else {
                function readCookie(name) {
                    var cookiename = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length, c.length);
                    }
                    return null;
                }
                var test_mydata = document.getElementById('_mkto_trk').value = readCookie('_mkto_trk');
                var chk_lang = GetURLParameter('language');


                var fpm_affiliate_pcode = "fpm-affiliate-pcode";
                var fpm_affiliate_utm_source = "fpm-affiliate-utm-source";
                var fpm_affiliate_utm_campaign = "fpm-affiliate-utm-campaign";
                var fpm_affiliate_utm_content = "fpm-affiliate-utm-content";
                var fpm_affiliate_agt = "fpm-affiliate-agt";
                var bta_chk = $("#form_signup_global #track7_2").val();
                var bta_fianl_val = "";
                if (bta_chk === "") {
                    bta_fianl_val = "0";
                } else {
                    bta_fianl_val = $("#form_signup_global #track7_2").val();
                }
                var lang_chk = $("#form_signup_global #track_lang").val();
                var lang_fianl_val = "";

                if (lang_chk === "") {



                    lang_fianl_val = "en";



                } else {

                    lang_fianl_val = $("#form_signup_global #track_lang").val();
                }

                var request = $.ajax({
                    url: "https://portal.firstprudentialmarkets.com/api/demoRegister",
                    type: "POST",
                    data: {
                        first_name: $("#form_signup_global #first_name").val().toString(),
                        last_name: $("#form_signup_global #last_name").val().toString(),
                        email: $("#form_signup_global #email").val().toString(),
                        phone: $("#form_signup_global #phone").val().toString(),
                        platform: $("#form_signup_global #platform").val().toString(),
                        country: $("#form_signup_global #country").val().toString(),
                        nationality: $("#form_signup_global #nationality").val().toString(),
                        demo_preferred_Language: $("#form_signup_global #demo_preferred_Language").val().toString(),
                        landing_page: $("#form_signup_global #landing_page").val().toString(),
                        currency: $("#form_signup_global #currency").val().toString(),
                        "fpm-affiliate-pcode": $("#form_signup_global #track1_1").val().toString(),
                        "fpm-affiliate-utm-source": $("#form_signup_global #track2_1").val().toString(),
                        "fpm-affiliate-utm-campaign": $("#form_signup_global #track3_1").val().toString(),
                        "fpm-affiliate-utm-content": $("#form_signup_global #track4_1").val().toString(),
                        "fpm-affiliate-agt": $("#form_signup_global #track5_1").val().toString(),
                        "_mkto_trk": $("#form_signup_global #_mkto_trk").val().toString(),
                        "cxd": $("#form_signup_global #track7_1").val().toString(),
                        "bta": bta_fianl_val.toString(),
                        "language": lang_fianl_val.toString(),
                    },
                    dataType: 'json',
                    beforeSend: function (xhr) {
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Processing..');
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').attr('disabled', 'disabled');
                    },
                    success: function (msg) {
                        $('.fp-demo-signup-global .form_signup_global_msg').php("");
                        console.log("Success");
                        if (msg.success == true) {
                            console.log("Success if");
                            var first_name = encodeURIComponent($("#first_name").val().toString()),
                                last_name = encodeURIComponent($("#last_name").val().toString()),
                                email = encodeURIComponent($("#email").val().toString()),
                                phone = encodeURIComponent($("#phone").val().toString()),
                                country = encodeURIComponent($("#country").val().toString());
                            var fpURLstructure = 'fname=' + first_name + '&lname=' + last_name + '&email=' + email + '&phone=' + phone + '&actype=1&countrycode=' + country;

                            //getting current URL segments
                            var pathName = window.location.pathname;
                            var url_segment2 = pathName.split('/');
                            // console.log('url-segment::'+segments2[1]);

                            var redirect_lang_short_code = "";
                            var lang_array = ['en', 'ar', 'br', 'ca', 'cz', 'cn', 'de', 'es', 'fr', 'gr', 'id', 'ie', 'it', 'ke', 'ko', 'ms', 'pt', 'pl', 'ru', 'th', 'uk', 'vi', 'za', 'zh', 'zh_tw'];

                            // Check if a value exists in the fruits array
                            if (lang_array.indexOf(url_segment2[1]) !== -1) {
                                redirect_lang_short_code = "" + url_segment2[1];
                            } else {
                                // console.log("Value does not exists!")
                                // console.log(url_segment2[1])
                            }

                            setTimeout(function () {
                                if (typeof (chk_lang) != "undefined" && chk_lang !== null) {

                                    if (chk_lang == "es") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "aus") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "en") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    }
                                } else {


                                    window.location = redirect_lang_short_code + "thank-you-application/?" + fpURLstructure;




                                }
                            })
                        } else {
                            console.log("Success else");
                            $('.fp-demo-signup-global .form_signup_global_msg').php("This email address is already registered. Please enter a new email address.");
                            $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                            $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                        }
                    },
                    error: function (msg, error) {
                        $('.fp-demo-signup-global .form_signup_global_msg').php("Please enter a valid phone number.");
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                    }
                }).done(function (data) {
                    /* $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                    $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled'); */
                });
                return false;
            }
        }
    });
    $(signupFormGlobal + " button[type='submit']").click(function () {
        setTimeout(function () {
            $("input.error").first().focus();
        }, 50)
    });
    /* EO SIGN UP FORM VALIDATION */

    /* SIGN UP FORM 2 VALIDATION - START TRADING IN MINUTES */
    var signupFormGlobal_ST = "#form_signup_global_ST";
    var $ = jQuery.noConflict();
    $(signupFormGlobal_ST).validate({
        ignore: [],
        rules: {
            first_name: {
                required: true,
                minlength: 3,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
            },
            country: {
                required: true,
            }
        },
        onfocusout: function (element) {
            $(element).valid();
        },
        errorClass: 'error',
        validClass: 'valid',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
        messages: {
            first_name: {
                required: "First name is required.",
            },
            last_name: {
                required: "Last name is required.",
            },
            email: {
                required: "Email is required.",
                email: "Please enter a valid email address",
            },
            phone: {
                required: "Phone is required."
            },
            country: {
                required: "Country is required."
            },
        },
        errorPlacement: function (error, element) {
            if ($(element).is("input")) {
                //error.insertAfter($(element));
            } else if ($(element).is("select")) {
                //error.insertAfter($(element).closest(".form-msg"));
            } else {
                //error.insertAfter(element)
            }
        },
        submitHandler: function (form) {
            var fpphone_ST = $('#form_signup_global_ST #phone_ST').val();
            console.log("test1Dec");
            /*if( fpphone_ST.match(/^[0-9]*$/) ){
                $('#form_signup_global_ST #phone_ST').removeClass('error').addClass('valid');
                $('.fp-demo-signup-global .form_signup_global_msg_ST').php("");
            }
            else{
                $('#form_signup_global_ST #phone_ST').removeClass('valid').addClass('error');
                $('.fp-demo-signup-global .form_signup_global_msg_ST').php("Please enter a valid phone number; only numeric value is expected.");
                return false;
            }*/

            $('.fp-demo-signup-global .form_signup_global_msg_ST').php("");
            /* grecaptcha.execute();
            console.log("The captcha has been already solved"); */
            var honeypot = $('#form_signup_global_ST #honeypot_ST').val();
            if (honeypot != "") {
                alert('value is - >' + honeypot);
                return false;
            } else {
                function readCookie(name) {
                    var cookiename = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length, c.length);
                    }
                    return null;
                }
                var test_mydata = document.getElementById('_mkto_trk_ST').value = readCookie('_mkto_trk');
                var chk_lang = GetURLParameter('language');


                var fpm_affiliate_pcode = "fpm-affiliate-pcode";
                var fpm_affiliate_utm_source = "fpm-affiliate-utm-source";
                var fpm_affiliate_utm_campaign = "fpm-affiliate-utm-campaign";
                var fpm_affiliate_utm_content = "fpm-affiliate-utm-content";
                var fpm_affiliate_utm_term = "fpm-affiliate-utm-term";
                var fpm_affiliate_agt = "fpm-affiliate-agt";
                var bta_chk = $("#form_signup_global_ST #track7_2_ST").val();
                var bta_fianl_val = "";
                if (bta_chk === "") {
                    bta_fianl_val = "0";
                } else {
                    bta_fianl_val = $("#form_signup_global_ST #track7_2_ST").val();
                }
                var lang_chk = $("#form_signup_global_ST #track_lang_ST").val();
                var lang_fianl_val = "";
                console.log(fpm_affiliate_utm_term);
                if (lang_chk === "") {

                    lang_fianl_val = "en";

                } else {

                    lang_fianl_val = $("#form_signup_global_ST #track_lang_ST").val();
                }

                var request = $.ajax({
                    url: "https://portal.firstprudentialmarkets.com/api/demoRegister",
                    type: "POST",
                    data: {
                        first_name: $("#form_signup_global_ST #first_name_ST").val().toString(),
                        last_name: $("#form_signup_global_ST #last_name_ST").val().toString(),
                        email: $("#form_signup_global_ST #email_ST").val().toString(),
                        phone: $("#form_signup_global_ST #phone_ST").val().toString(),
                        platform: $("#form_signup_global_ST #platform_ST").val().toString(),
                        country: $("#form_signup_global_ST #country_ST").val().toString(),
                        nationality: $("#form_signup_global_ST #nationality").val().toString(),
                        demo_preferred_Language: $("#form_signup_global_ST #demo_preferred_Language").val().toString(),
                        landing_page: $("#form_signup_global_ST #landing_page").val().toString(),
                        currency: $("#form_signup_global_ST #currency_ST").val().toString(),
                        "fpm-affiliate-pcode": $("#form_signup_global_ST #track1_1_ST").val().toString(),
                        "fpm-affiliate-utm-source": $("#form_signup_global_ST #track2_1_ST").val().toString(),
                        "fpm-affiliate-utm-campaign": $("#form_signup_global_ST #track3_1_ST").val().toString(),
                        "fpm-affiliate-utm-content": $("#form_signup_global_ST #track4_1_ST").val().toString(),
                        "fpm-affiliate-agt": $("#form_signup_global_ST #track5_1_ST").val().toString(),
                        "fpm-affiliate-utm-term": $("#form_signup_global_ST #track6_1_ST").val().toString(),
                        "_mkto_trk": $("#form_signup_global_ST #_mkto_trk_ST").val().toString(),
                        "cxd": $("#form_signup_global_ST #track7_1_ST").val().toString(),
                        "bta": bta_fianl_val.toString(),
                        "language": lang_fianl_val.toString(),
                    },
                    dataType: 'json',
                    beforeSend: function (xhr) {
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Processing..');
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').attr('disabled', 'disabled');
                    },
                    success: function (msg) {
                        $('.fp-demo-signup-global .form_signup_global_msg_ST').php("");

                        if (msg.success == true) {
                            var first_name = encodeURIComponent($("#first_name_ST").val().toString()),
                                last_name = encodeURIComponent($("#last_name_ST").val().toString()),
                                email = encodeURIComponent($("#email_ST").val().toString()),
                                phone = encodeURIComponent($("#phone_ST").val().toString()),
                                country = encodeURIComponent($("#country_ST").val().toString());
                            var fpURLstructure = 'fname=' + first_name + '&lname=' + last_name + '&email=' + email + '&phone=' + phone + '&actype=1&countrycode=' + country;

                            //getting current URL segments
                            var pathName = window.location.pathname;
                            var url_segment2 = pathName.split('/');
                            // console.log('url-segment::'+segments2[1]);

                            var redirect_lang_short_code = "";
                            var lang_array = ['en', 'ar', 'br', 'ca', 'cz', 'cn', 'de', 'es', 'fr', 'gr', 'id', 'ie', 'it', 'ke', 'ko', 'ms', 'pt', 'pl', 'ru', 'th', 'uk', 'vi', 'za', 'zh', 'zh_tw'];

                            // Check if a value exists in the fruits array
                            if (lang_array.indexOf(url_segment2[1]) !== -1) {
                                redirect_lang_short_code = "" + url_segment2[1];
                            } else {
                                // console.log("Value does not exists!")
                                // console.log(url_segment2[1])
                            }

                            setTimeout(function () {
                                if (typeof (chk_lang) != "undefined" && chk_lang !== null) {

                                    if (chk_lang == "es") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "aus") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "en") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    }
                                } else {






                                    window.location = redirect_lang_short_code + "thank-you-application/?" + fpURLstructure;
                                }
                            })
                        } else {
                            $('.fp-demo-signup-global .form_signup_global_msg_ST').php("This email address is already registered. Please enter a new email address.");
                            $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                            $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                        }
                    },
                    error: function (msg, error) {
                        $('.fp-demo-signup-global .form_signup_global_msg_ST').php("Please enter a valid phone number");
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                    }
                }).done(function (data) {
                    /* $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                    $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled'); */
                });
                return false;
            }
            console.log("finish");
        }
    });
    $(signupFormGlobal_ST + " button[type='submit']").click(function () {
        setTimeout(function () {
            $("input.error").first().focus();
        }, 50)
    });
    /* EO SIGN UP FORM 2 VALIDATION - START TRADING IN MINUTES  */

    function parseQueryString() {
        var parsedParameters = {},
            uriParameters = location.search.substr(1).split('&');
        for (var i = 0; i < uriParameters.length; i++) {
            var parameter = uriParameters[i].split('=');
            var value = typeof (parameter[1]) !== 'undefined' ? parameter[1] : '';
            parsedParameters[parameter[0]] = decodeURIComponent(value);
        }
        return parsedParameters;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function convertAffiliateQueryStringToCookies() {
        console.log("1");
        var params = parseQueryString();
        for (var i in params) {
            if (params.hasOwnProperty(i) && (i.match(/fpm-affiliate/) || i.match(/bta/) || i.match(/cxd/) || i.match(/affiliate-utm-content/) || i.match(/language/))) {
                if (i.match(/bta/) || i.match(/cxd/)) {
                    if (getCookie('fpm-affiliate-' + i) === "") {
                        document.cookie = 'fpm-affiliate-' + i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                        document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                    }
                } else
                    if (getCookie(i) === "") {
                        document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                    }
            }
        }
    }



    jQuery(document).ready(function () {
        convertAffiliateQueryStringToCookies();
        console.log("2");

        //var track1 = GetURLParameter('fpm-affiliate-pcode');
        var track1 = typeof (GetURLParameter('fpm-affiliate-pcode')) !== 'undefined' ? GetURLParameter('fpm-affiliate-pcode') : '';
        track1 = getCookie('fpm-affiliate-pcode') !== "" ? getCookie('fpm-affiliate-pcode') : track1;

        //var track2 = GetURLParameter('fpm-affiliate-utm-source');
        var track2 = typeof (GetURLParameter('fpm-affiliate-utm-source')) !== 'undefined' ? GetURLParameter('fpm-affiliate-utm-source') : 'Website';
        track2 = getCookie('fpm-affiliate-utm-source') !== "" ? getCookie('fpm-affiliate-utm-source') : track2;

        var track3 = GetURLParameter('fpm-affiliate-utm-campaign');
        track3 = getCookie('fpm-affiliate-utm-campaign') !== "" ? getCookie('fpm-affiliate-utm-campaign') : track3;

        var track4 = GetURLParameter('fpm-affiliate-utm-content');
        track4 = getCookie('fpm-affiliate-utm-content') !== "" ? getCookie('fpm-affiliate-utm-content') : track4;

        var track5 = GetURLParameter('fpm-affiliate-agt');
        track5 = getCookie('fpm-affiliate-agt') !== "" ? getCookie('fpm-affiliate-agt') : track5;

        var trackterm = GetURLParameter('fpm-affiliate-utm-term');
        trackterm = getCookie('fpm-affiliate-utm-term') !== "" ? getCookie('fpm-affiliate-utm-term') : trackterm;

        var track7_1 = GetURLParameter('cxd');
        track7_1 = getCookie('fpm-affiliate-cxd') !== "" ? getCookie('fpm-affiliate-cxd') : track7_1;

        var track7_2 = GetURLParameter('bta');
        track7_2 = getCookie('fpm-affiliate-bta') !== "" ? getCookie('fpm-affiliate-bta') : track7_2;

        var track8_1 = GetURLParameter('language');
        track8_1 = getCookie('language') !== "" ? getCookie('language') : track8_1;

        console.log(trackterm);

        $("#form_signup_global #track1_1").val(track1);
        $("#form_signup_global #track2_1").val(track2);
        $("#form_signup_global #track3_1").val(track3);
        $("#form_signup_global #track4_1").val(track4);
        $("#form_signup_global #track5_1").val(track5);
        $("#form_signup_global #track6_1").val(trackterm);
        $("#form_signup_global #track7_1").val(track7_1);
        $("#form_signup_global #track7_2").val(track7_2);
        $("#form_signup_global #track_lang").val(track8_1);

        $("#form_signup_global_ST #track1_1_ST").val(track1);
        $("#form_signup_global_ST #track2_1_ST").val(track2);
        $("#form_signup_global_ST #track3_1_ST").val(track3);
        $("#form_signup_global_ST #track4_1_ST").val(track4);
        $("#form_signup_global_ST #track5_1_ST").val(track5);
        $("#form_signup_global_ST #track6_1_ST").val(trackterm);
        $("#form_signup_global_ST #track7_1_ST").val(track7_1);
        $("#form_signup_global_ST #track7_2_ST").val(track7_2);
        //$("#form_signup_global_ST #track_lang_ST").val(track8_1);
    });
</script>


<script>
    jQuery(document).ready(function ($) {
        $("#form_signup_global #phone").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_ST #phone_ST").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP #phone_LP").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP2 #phone_LP2").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP #countrycode_LP").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP2 #countrycode_LP2").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global #phone").attr("maxlength", "21");
        $("#form_signup_global_ST #phone_ST").attr("maxlength", "21");
        $("#form_signup_global_LP #phone_LP").attr("maxlength", "15");
        $("#form_signup_global_LP2 #phone_LP2").attr("maxlength", "15");

        $("#form_signup_global_LP #countrycode_LP").attr("maxlength", "6");
        $("#form_signup_global_LP2 #countrycode_LP2").attr("maxlength", "6");

        $("#form_new #countrycode").attr("maxlength", "6");
        $("#form_new #phone").attr("maxlength", "15");
    });
</script>





<!--scripts starts here-->
<script type="text/javascript" src="../static/globalcityindex-live/files/browser_selector.js"></script>
<script type="text/javascript" src="../static/globalcityindex-live/files/scripts.js"></script>
<!--scripts ends here-->
<script>
    //Form Validator
    /*Validation For The Planner Step 1*/
    //you can create your own Regular expression like we have done for the mobile number and make it true its name.
    // allow user to enter number of Austrelia format [ if client have this requirement ]
    //******** Add your form id here********
    var formDefualt = "#form_new";
    $(formDefualt).validate({

        //Ignore Field is for the Ignoring display None inputs validation
        ignore: [],
        rules: {
            first_name: {
                //******this is for the required field
                required: true,
                //******This option is for the minimum number of character
                minlength: 3,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
                //******This option for the email address
                email: true
            },
            phone: {
                required: true,
                //******it will allow users to enter number only
                minlength: 3,
            },
            entityTypeId: {
                required: true,
            },
            country: {
                required: true,
            }
        },
        onfocusout: function (element) {
            $(element).valid();
        },
        errorClass: 'error',
        validClass: 'valid',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
        /*comment this code if you dont want messages*/
        messages: {
            first_name: { required: "This field is required.", },
            last_name: { required: "This field is required.", },
            email: {
                required: "This field is required.",
                email: "Please enter a valid email address",
            },
            phone: { required: "This field is required." },
            entityTypeId: { required: "This field is required." },
            country: { required: "This field is required." },
        },
        //***********comment this code if you dont want messages*/

        //Add your class instead of .form-msg (after that class error message will show)

        errorPlacement: function (error, element) {
            if ($(element).is("input")) {
                error.insertAfter($(element));
            }
            else if ($(element).is("select")) {
                error.insertAfter($(element).closest(".form-msg"));
            }
            else {
                error.insertAfter(element)
            }
        },
        //*******In windows.location you can put your link where you want to redirect your form.

        submitHandler: function (form) {

            //Empty out error messages.
            $('.email_msg').php("");


            //Basics.
            var honeypot = $('#honeypot').val();
            var errorMessageContainerHeight = '10px';
            var remoteErrorMessage = 'Unable to process request at the time. Please try again later.';
            var messagesSeparator = '<br>';

            if (honeypot != "") {
                alert('value is - >' + honeypot);
                return false;
            } else {
                /*cookie*/
                console.log("test");
                function readCookie(name) {
                    var cookiename = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length, c.length);
                    }
                    return null;
                }
                var test_mydata = document.getElementById('_mkto_trk').value = readCookie('_mkto_trk');
                /* cookie */

                // Get language.
                var chk_lang = GetURLParameter('language');

                // $('.loader').css('display','block');

                // Change submit button UI.
                $("#thebutton span").text("Please wait...");
                $("#thebutton span").addClass("loaderimg");
                $("#thebutton").prop('disabled', true).addClass('btn-disable');

                var fpm_affiliate_pcode = "fpm-affiliate-pcode";
                var fpm_affiliate_utm_source = "fpm-affiliate-utm-source";
                var fpm_affiliate_utm_campaign = "fpm-affiliate-utm-campaign";
                var fpm_affiliate_utm_content = "fpm-affiliate-utm-content";
                var fpm_affiliate_agt = "fpm-affiliate-agt";

                var bta_chk = $("#track7_2").val();
                var bta_fianl_val = "";
                if (bta_chk === "") {
                    bta_fianl_val = "0";
                } else {
                    bta_fianl_val = $("#track7_2").val();
                }

                var lang_chk = $("#track_lang").val();
                var lang_fianl_val = "";
                if (lang_chk === "") {
                    lang_fianl_val = "en";
                } else {
                    lang_fianl_val = $("#track_lang").val();
                }

                var request = $.ajax({
                    url: "[[!portalUrl]]api/register",
                    type: "POST",
                    data: {
                        first_name: $("#first_name").val().toString(),
                        last_name: $("#last_name").val().toString(),
                        email: $("#email").val().toString(),
                        phone: $("#phone").val().toString(),
                        platform: $("#platform").val().toString(),
                        country: $("#user_country").val().toString(),
                        entityTypeId: $("#entity_type_id").val().toString(),
                        currency: $("#currency").val().toString(),
                        "fpm-affiliate-pcode": $("#track1_1").val().toString(),
                        "fpm-affiliate-utm-source": $("#track2_1").val().toString(),
                        "fpm-affiliate-utm-campaign": $("#track3_1").val().toString(),
                        "fpm-affiliate-utm-content": $("#track4_1").val().toString(),
                        "fpm-affiliate-agt": $("#track5_1").val().toString(),
                        "_mkto_trk": $("#_mkto_trk").val().toString(),
                        "cxd": $("#track7_1").val().toString(),
                        "bta": bta_fianl_val.toString(),
                        "language": lang_fianl_val.toString(),
                    },
                    dataType: 'json',
                    success: function (response) {
                        $('.email_msg').php("");
                        $('.loader').css('display', 'none');

                        //Now let's check if it was success?
                        if (response.success == true) {

                            //If it's a page redirection?
                            if (response.redirectToUrl != '') {
                                window.location = response.redirectTo;

                            } else {
                                //Change form action url and submit it.
                                $(formDefualt).attr('action', response.redirectTo);
                                form.submit();
                            }

                        } else {
                            //Remove processing from submit button.
                            var btn_name_get = $('#btn_name_get').val();
                            $("#thebutton span").text(btn_name_get);
                            $("#thebutton span").removeClass("loaderimg");
                            $("#thebutton").prop('disabled', false).removeClass('btn-disable');

                            //If we have messages?
                            var messages = response.messages;
                            var messagesLength = messages.length;
                            if (messagesLength > 0) {

                                //Add margin bottom to email_msg div.
                                $(".email_msg").css('margin-bottom', errorMessageContainerHeight);

                                //Iteration.
                                for (var i = 0; i < messagesLength; i++) {
                                    $('.email_msg').append(messages[i] + messagesSeparator);
                                }
                            } else {
                                $('.email_msg').append(remoteErrorMessage + messagesSeparator);
                            }
                        }

                    },
                    error: function (response) {
                        $('.email_msg').php("");
                        $('.loader').css('display', 'none');

                        var btn_name_get = $('#btn_name_get').val();
                        $("#thebutton span").text(btn_name_get);
                        $("#thebutton span").removeClass("loaderimg");
                        $("#thebutton").prop('disabled', false).removeClass('btn-disable');

                        // Add margin bottom to email_msg div.
                        $(".email_msg").css('margin-bottom', errorMessageContainerHeight);

                        //Response.
                        var data = response.responseJSON;

                        // Check if we have an object here?
                        if (response.status == 422 && data !== null && typeof data === 'object') {

                            //Iterate all and append to html errors.
                            for (var key in data) {
                                if (data.hasOwnProperty(key)) {
                                    $('.email_msg').append(data[key][0] + messagesSeparator);
                                };
                            }
                        } else {
                            $('.email_msg').append(remoteErrorMessage + messagesSeparator);
                        }
                    }
                });

                return false;
            }
        }
    });

    //**********On Submit form will be submit 
    $(formDefualt + " button[type='submit']").click(function () {
        setTimeout(function () {
            $("input.error").first().focus();
        }, 50)
    });


    //**********GetURLParameter
    function GetURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }

    function parseQueryString() {
        var parsedParameters = {}, uriParameters = location.search.substr(1).split('&');
        for (var i = 0; i < uriParameters.length; i++) {
            var parameter = uriParameters[i].split('=');
            var value = typeof (parameter[1]) !== 'undefined' ? parameter[1] : '';
            parsedParameters[parameter[0]] = decodeURIComponent(value);
        }
        return parsedParameters;
    }/** Convert query params into cookie params */



    function convertAffiliateQueryStringToCookies() {
        console.log("3");

        var params = parseQueryString();

        for (var i in params) {
            if (params.hasOwnProperty(i) && (i.match(/fpm-affiliate/) || i.match(/bta/) || i.match(/cxd/) || i.match(/affiliate-utm-content/) || i.match(/language/))) {
                if (i.match(/bta/) || i.match(/cxd/)) {
                    if (getCookie('fpm-affiliate-' + i) === "") {
                        console.log("3a");
                        document.cookie = 'fpm-affiliate-' + i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                        document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                    }
                } else
                    console.log("3b");
                if (getCookie(i) === "") {
                    console.log("3c");
                    document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                }
            }
        }
    }



    $(document).ready(function () {
        console.log("4");
        convertAffiliateQueryStringToCookies();


        //set default country as AU 
        $("#user_country").val('AU');

        // Get country from IP.
        $.get("https://ipinfo.io?token=8113c8e7b3e768", function (response) {
            $("#user_country").val(response.country);
        }, "jsonp");

        //set default country as AU 
        $("#user_country2").val('AU');

        // Get country from IP.
        $.get("https://ipinfo.io?token=8113c8e7b3e768", function (response) {
            $("#user_country2").val(response.country);
        }, "jsonp");

        var track1 = GetURLParameter('fpm-affiliate-pcode');
        var track2 = GetURLParameter('fpm-affiliate-utm-source');
        var track3 = GetURLParameter('fpm-affiliate-utm-campaign');
        var track4 = GetURLParameter('fpm-affiliate-utm-content');
        var track5 = GetURLParameter('fpm-affiliate-agt');
        var trackterm = GetURLParameter('fpm-affiliate-utm-term');

        var track7_1 = GetURLParameter('cxd');
        var track7_2 = GetURLParameter('bta');
        var track8_1 = GetURLParameter('language');

        $("#track1_1").val(track1);
        $("#track2_1").val(track2);
        $("#track3_1").val(track3);
        $("#track4_1").val(track4);
        $("#track5_1").val(track5);
        $("#track6_1").val(trackterm);
        $("#track7_1").val(track7_1);
        $("#track7_2").val(track7_2);
        $("#track_lang").val(track8_1);
    });

    $(document).ready(function () {
        $(".anchor").click(function (e) {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1000);
        });
    });

</script>



<!-- TR  Survery get currency code -->
<script type="text/javascript">

    var curObj = [{ 'cur_id': 'AUD', 'cur_code': 36 }, { 'cur_id': 'CAD', 'cur_code': 124 }, { 'cur_id': 'EUR', 'cur_code': 978 }, { 'cur_id': 'GBP', 'cur_code': 826 }, { 'cur_id': 'HKD', 'cur_code': 344 }, { 'cur_id': 'JPY', 'cur_code': 392 }, { 'cur_id': 'NZD', 'cur_code': 554 }, { 'cur_id': 'SGD', 'cur_code': 702 }, { 'cur_id': 'USD', 'cur_code': 840 }, { 'cur_id': 'IDR', 'cur_code': 360 }, { 'cur_id': 'MYR', 'cur_code': 458 }, { 'cur_id': 'VND', 'cur_code': 704 }, { 'cur_id': 'THB', 'cur_code': 764 }];
    function getCurrency(curId) {
        return $.grep(curObj, function (obj) {
            return obj.cur_id === curId;
        });
    }

</script>




<style>
    .chat-with-telegram {
        display: inline-flex;
        padding-top: 10px;
        padding-left: 5px;
        position: fixed;
        left: 30px;
        bottom: 30px;
        z-index: 99;
        align-items: center;
        height: 46px;
        width: 46px;
        overflow: hidden;
        background-color: #00bdff;
        border-radius: 84px;
        color: white;
        text-decoration: none;
        box-shadow: rgba(0, 0, 0, 0.24) 0 0 18px;
        transition: all 0.1s ease;
    }

    .chat-with-telegram .label {
        padding-right: 20px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 13px;
        line-height: 14px;
        transition: all 0.1s ease;
        opacity: 0;
        visibility: hidden;
        float: left;
    }

    .chat-with-telegram .icon-wrap {
        float: left;
        position: absolute;
        top: 10px;
    }

    .chat-with-telegram .label span {
        font-size: 11px;
        text-transform: none;
        display: block;
    }

    .chat-with-telegram:hover .label {
        visibility: visible;
        opacity: 1;
        padding-left: 35px;
    }

    .chat-with-telegram:hover {
        width: 185px;
        padding-top: 6px;
        justify-content: space-between;
    }

    .containerrr iframe {
        height: 41px !important;
    }


    .fa-2x {
        font-size: 2em !important;
    }

    .containerrr {

        display: flex;
        display: -webkit-flex;
        -webkit-justify-content: center;
        justify-content: center;
        align-items: left;


    }

    .button {
        z-index: 99;
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 55px;
        height: 55px;
        background: #01bdff;
        border-radius: 50px;
        color: #fff;
        bottom: 25px;
        box-shadow: 0 0 30px rgb(116 116 116 / 33%);
    }

    .social {
        opacity: 0;
        position: fixed;
        margin: 8px;
        width: 140px;
        height: 40px;
        display: inline-block;
        color: #fff;
        font-size: 20px;
        text-align: center;
        border-radius: 20px;
        margin-bottom: 4px;

    }


    .social a {
        color: #fff;
    }

    .twitter {
        background: #00aced;
        bottom: 280px;
        border: 1px solid rgb(255 255 255 / 60%);
    }

    .instagram {
        background: #00aced;
        bottom: 235px;
    }

    .facebook {
        background: #3b5998;
        bottom: 190px;
    }

    .whatsapp {
        background: #dd4b39;
        bottom: 145px;
    }

    .clicked {
        opacity: 1;
        transition: 1.2s all ease;
        transform: translateY(56px);
    }

    #myAnim {
        animation: pulse-green 3s infinite;
    }

    @keyframes  pulse-green {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(0, 189, 255, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(51, 217, 178, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0);
        }
    }
</style>

<script>
    $(".button").click(function () {
        $(".social.instagram").toggleClass("clicked");
        $(".social.facebook").toggleClass("clicked");
        $(".social.whatsapp").toggleClass("clicked");
        $(".social.twitter").toggleClass("clicked");
    })
</script>

 
<script>
    /* modal script from EU */
    $(document).ready(function () {

        var entity = document.cookie.indexOf('fpm-entity-pass=');
        var country = "[[!userIP]]";
        if (["DE", "AT", "BE", "BG", "HR", "CZ", "DK", "EE", "FI", "FR", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE"].includes(country)) {
            if (entity < 0) {
                $('#scModal').modal("show");
            }
        }
        console.log("Footer content loading at - SC");

    });

    function cookieFunction() {
        var today = new Date();
        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date + ' ' + time;
        //alert(dateTime);

     
    }
</script>






<script type="text/javascript" id="hs-script-loader" async="" defer="defer" src="../static/globalcityindex-live/files/21424556_002.js"></script>             <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e979ae60811001d9db52c56022f45547442df5e8';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>











</body></html>