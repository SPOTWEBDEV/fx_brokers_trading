<?php
include('../../server/connection.php');
include('../../server/auth/client.php');
include('../../server/api/users/order.php');


$total_balance = $trading_balance + $bitcoin_balance + $ethereum_balance + $dogecoin_balance + $binance_coin_balance + $cosmos_atom_balance + $stablecoin_balance + $usdt_balance + $solana_balance + $cardano_ada_balance;



?>

<html>

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title static-title="cityindex-live">Cityindex-live</title>
    <meta name="description"
        content="cityindex-live offers low trading fees. You can be up and running quickly as both account opening and deposits are super easy and fast">

    <link rel="apple-touch-icon" sizes="180x180"
        href="../../static/account/new/assets/img/icons/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="../../static/account/new/assets/img/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="/static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">
    <link rel="manifest"
        href="{% static 'account/new/assets/img/icons/favicon/site.webmanifest">
    <link rel="shortcut icon" href="/static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{% static 'account/new/assets/img/icons/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="../../static/account/new/assets/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="../../static/account/new/assets/bower/chosen/chosen.min.css">

    <link rel="stylesheet" href="../../static/account/new/assets/bower/dropzone/dist/min/dropzone.min.css">

    <link rel="stylesheet" href="../../static/account/new/assets/bower/jquery-palette-color-picker/src/palette-color-picker.css">

    <link href="../../static/account/new/assets/bower/air-datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../static/account/new/assets/css/style.css">
    <link rel="stylesheet" href="../../static/account/new/assets/css/dashboard.css">

    <link rel="stylesheet" href="../../static/account/new/assets/css/checkboxes.min.css">

    <link rel="stylesheet" href="../../static/account/new/app/modules/kr-admin/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-blockfolio/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-calculator/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-chat/statics/css/emoji-sprite.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-chat/statics/css/fileicon.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-chat/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-coin/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-dashboard/statics/css/graph.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-dashboard/statics/css/leftinfos.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-dashboard/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-dashboard/statics/css/tradingview.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-identity/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-manager/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-marketanalysis/statics/css/ert">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-marketanalysis/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-news/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-notifications/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-payment/statics/css/banktransfert.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-payment/statics/css/proofsending.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-search/statics/css/search.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-trade/statics/css/setup.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-trade/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-user/statics/css/charges.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-user/statics/css/style.css">

<link rel="stylesheet" href="../../static/account/new/app/modules/kr-watchinglist/statics/css/style.css">


    <link rel="stylesheet" href="../../static/account/new/assets/css/responsive-global.css">
    <link rel="stylesheet" href="../../static/account/new/assets/css/responsive-tablet.css">
    <link rel="stylesheet" href="../../static/account/new/assets/css/responsive-mobile.css">

    <link rel="stylesheet" href="../../static/account/new/assets/css/themes/light.css">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

<script type="text/javascript" charset="utf-8" async="" src="https://www.smartsuppchat.com/loader.js?"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
</head>



<body style="overflow-x:scroll;" kr-hm="0" logopath-black="../../static/account/new/public/logo/65763f8f5e0d1-2396-logo89d9.png" logopath="/static/globalcityindex-live/files/logo-main.4b9c545ea9347660b73dd3b00a629d43.png" hrefapp="" kr-timestamp="1724089351" mbill="false" sintro="1" kr-numformat=".:," class=" " activeabo="1" cz-shortcut-listen="true">
 




  
<script>
    window.onresize = function (event) {
        applyOrientation();
      }
      
      function applyOrientation() {
        if (window.innerHeight > window.innerWidth) {
         alert("You are now in portrait");
        } else {
          alert("You are now in landscape");
        }
      }
</script>
<style>
    @media screen and (orientation: landscape) {
        #rotate-device-warning {
          display: none;
        }
        #bo , #so{
          width:50%;
          margin-top:300px;
          margin-bottom: 20px;
        }
    }
    
    @media screen and (orientation: portrait) {
      #rotate-device-warning {
        display: block;
        width: 100%;
        
        background-color: lightyellow;
        padding: 10px;

        border:2px solid #f8f8f8;
      }
      #hide1 {
        display:none;
      }
    }


    .b{
        background: gray;
        height: 1000px;
        width: 100%;
      }
      
      .bb {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      
      .phone {
        margin-top: 250px;
        
        height: 50px;
        width: 100px;
        border: 5px solid gray;
        border-radius: 10px;
        animation: rotate 1.5s ease-in-out infinite alternate;
        /* display: none; */
      }
      
      .message {

        margin-bottom: 300px;
        color: gray;
        font-size: 1em;
        margin-top: 40px;
        /* display: none; */
      }
      
      @keyframes rotate {
        0% {
              transform: rotate(0deg)
          }
          50% {
              transform: rotate(-90deg)
          }
          100% {
              transform: rotate(-90deg)
          }
      }
      
      @media only screen and (max-device-width: 812px) and (orientation: landscape) {
        .phone, .message {
          display: block;
        }
      }
</style>


<div class="b" id="rotate-device-warning" style="z-index: 999999999999999999999999999999; background:#f8f8f8; ">
    <div class="bb" style="z-index: 999999999999999999999999999999;">
  
  <div class="phone" style="z-index: 999999999999999999999999999999;">
  </div>
  <div class="message" style="z-index: 999999999999999999999999999999;">
    Please rotate your device!
  </div>
    </div>
  </div>

  

  


  <section class="identity_wizard kr-ov-nblr" style="display:none;">
    <section>
      <header>
        <span>IDENTITY VERIFICATION</span>
        <div onclick="_closeIdentityWizard();">
          <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
        </div>
      </header>
      <section class="identity_wizard_content identity_wizard_content-step0">
  
        <h2>Identity verfication required!</h2>
  
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve"> <g> <path d="M55.783,8H4.217C1.892,8,0,9.892,0,12.217v35.566C0,50.108,1.892,52,4.217,52h51.566C58.108,52,60,50.108,60,47.783V12.217 C60,9.892,58.108,8,55.783,8z M58,47.783C58,49.006,57.006,50,55.783,50H4.217C2.994,50,2,49.006,2,47.783V12.217 C2,10.994,2.994,10,4.217,10h51.566C57.006,10,58,10.994,58,12.217V47.783z"></path> <path d="M22.638,36.246L19,34.388v-0.387c1.628-0.889,2.773-2.353,3.412-4.364C23.381,29.123,24,28.122,24,27v-1 c0-0.926-0.431-1.785-1.151-2.349c-0.624-3.78-3.262-5.696-7.849-5.696c-0.217,0-0.429,0.008-0.636,0.024 c-0.864,0.071-2.129-0.004-3.224-0.74c-0.409-0.276-0.718-0.544-0.915-0.793c-0.336-0.429-0.901-0.579-1.402-0.373 c-0.502,0.206-0.797,0.708-0.734,1.247c0.042,0.374,0.105,0.809,0.2,1.286c0.193,0.975,0.193,0.975-0.078,1.558 c-0.102,0.221-0.228,0.49-0.376,0.853c-0.331,0.811-0.566,1.699-0.701,2.647C6.424,24.229,6,25.083,6,26v1 c0,1.122,0.619,2.123,1.588,2.637c0.639,2.012,1.784,3.476,3.412,4.364v0.376l-3.769,1.858C5.855,36.985,5,38.425,5,39.993v1.325 C5,42.121,5,44,15,44s10-1.879,10-2.682v-1.245C25,38.442,24.095,36.977,22.638,36.246z M23,41.092C22.376,41.472,19.838,42,15,42 s-7.376-0.528-8-0.908v-1.099c0-0.835,0.455-1.603,1.152-1.982l3.857-1.901c0.602-0.294,0.99-0.917,0.99-1.588v-1.803l-0.604-0.26 c-1.517-0.654-2.503-1.901-3.015-3.814l-0.143-0.533l-0.526-0.164C8.293,27.817,8,27.428,8,27v-1c0-0.362,0.207-0.698,0.541-0.876 l0.469-0.25l0.055-0.529c0.099-0.938,0.308-1.803,0.622-2.57c0.133-0.325,0.246-0.568,0.338-0.767 c0.339-0.728,0.462-1.104,0.377-1.875c1.176,0.672,2.589,0.958,4.122,0.841c0.155-0.013,0.314-0.019,0.477-0.019 c3.744,0,5.572,1.356,5.929,4.398l0.062,0.522l0.465,0.246C21.791,25.299,22,25.636,22,26v1c0,0.428-0.293,0.817-0.712,0.947 l-0.526,0.164l-0.143,0.533c-0.512,1.913-1.498,3.16-3.015,3.814L17,32.719v1.811c0,0.669,0.37,1.272,0.964,1.575l3.775,1.929 C22.517,38.422,23,39.204,23,40.073V41.092z"></path> <path d="M30,23h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H30c-0.553,0-1,0.447-1,1S29.447,23,30,23z"></path> <path d="M44,23h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S43.447,23,44,23z"></path> <path d="M31,38h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S31.553,38,31,38z"></path> <path d="M37,38h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S37.553,38,37,38z"></path> <path d="M42,38h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S42.553,38,42,38z"></path> <path d="M48,38h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S48.553,38,48,38z"></path> <path d="M51.29,38.29C51.109,38.479,51,38.74,51,39s0.109,0.52,0.29,0.71C51.479,39.89,51.74,40,52,40s0.52-0.11,0.71-0.29 C52.89,39.52,53,39.26,53,39s-0.11-0.521-0.29-0.71C52.33,37.92,51.66,37.92,51.29,38.29z"></path> <path d="M52,27H30c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S52.553,27,52,27z"></path> <path d="M52,33H30c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S52.553,33,52,33z"></path> </g> </svg>
  
        <input type="button" onclick="_changeIdentityStep(1);" class="btn btn-autowidth btn-big btn-green" name="" value="Start your verification process now!">
  
        <p>All information will be stored safely and not redistributed. Due to the GPRD, all information can be deleted on your needs.</p>
  
      </section>
    </section>
  </section>



  
    


<style>
    section.kr-user {
        z-index            : 9999999999999;
        display            : flex;
        position           : absolute;
        top                : 0px;
        right              : 0;
        bottom             : 0;
        width              : 780px;
        height             : 100%;
        padding            : 0;
        overflow-x         : hidden;
        overflow-y         : auto;
        background         : #fafafa;
        box-shadow         : -5px 0px 20px #000000bd;
        align-items        : stretch;
        flex-direction     : column;
        animation-duration : 0.3s;
        max-width: 90%;
      }
      
      /* Loading */
      
      div.kr-user-global-loading {
        display         : flex;
        position        : absolute;
        top             : 0;
        right           : 0;
        bottom          : 0;
        left            : 0;
        align-items     : center;
        justify-content : center;
      }
      
      /* Content */
      
      section.kr-user > header {
        display     : flex;
        position    : relative;
        height      : 150px;
        min-height  : 150px;
        overflow    : hidden;
        background  : #252525;
        align-items : center;
      }
      
      section.kr-user > header > section {
        position            : absolute;
        top                 : -10px;
        right               : -10px;
        bottom              : -10px;
        left                : -10px;
        opacity             : 0.7;
        background-position : center center;
        background-size     : cover;
        filter              : blur(5px);
      }
      
      section.kr-user > header > div.kr-user-md {
        z-index     : 1;
        display     : flex;
        position    : relative;
        margin-left : 25px;
        align-items : center;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-pic {
        display             : flex;
        position            : relative;
        width               : 100px;
        min-width           : 100px;
        height              : 100px;
        min-height          : 100px;
        overflow            : hidden;
        border-radius       : 100px;
        background          : #fe8114;
        background-position : center center;
        background-size     : cover;
        box-shadow          : 0px 2px 2px 0px #0000007a;
        align-items         : center;
        justify-content     : center;
        cursor              : pointer;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-pic > * {
        user-select: none;
        pointer-events: none;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-pic > div.kr-user-pic-loading {
        position   : absolute;
        left       : 0;
        width      : 0%;
        height     : 100px;
        background : #fff;
        transition : width 0.15s linear;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-pic.kr-user-pic-exist > svg {
        display        : none;
        pointer-events : none;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-pic.kr-user-pic-exist:hover > svg {
        display : block;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-pic > svg {
        width  : 30px;
        height : 30px;
        fill   : #fff;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-infos {
        display         : flex;
        margin-left     : 25px;
        color           : #fff;
        text-shadow     : 1px 1px 2px #0000007a;
        flex-direction  : column;
        justify-content : flex-start;
      }
      
      section.kr-user > header > div.kr-user-md > div.kr-user-infos > h3 {
        margin    : 0;
        padding   : 0;
        font-size : 25px;
      }
      
      /* User navigation */
      
      section.kr-user > ul.kr-user-nav {
        display     : flex;
        min-height  : 39px;
        background  : #fff;
        box-shadow  : 0px 2px 2px 0px #00000024;
        align-items : stretch;
      }
      
      section.kr-user > ul.kr-user-nav > li {
        padding        : 10px 18px 8px 18px;
        color          : #3f4858;
        border-bottom  : 2px solid #fff;
        text-transform : uppercase;
        font-size      : 15px;
        font-weight    : bold;
        cursor         : pointer;
        display: flex;
        justify-content: center; align-items: center;
      }
      
      section.kr-user > ul.kr-user-nav > li:hover {
        border-bottom-color : #f4f4f4;
        background          : #f4f4f4;
      }
      
      section.kr-user > ul.kr-user-nav > li.kr-user-nav-selected {
        color               : #181f2c;
        border-bottom-color : #ff7700;
      }
      
      section.kr-user > ul.kr-user-nav > li[kr-user-v="logout"] {
        color               : #ad0d14;
        border-bottom-color : #f4f4f4;
        background          : #f4f4f4;
      }
      
      /* User content */
      
      section.kr-user > section.kr-user-content {
        padding : 25px;
        flex    : 1;
      }
      
      section.kr-user > section.kr-user-content div.kr-user-f-l {
        display       : flex;
        margin-bottom : 15px;
        align-items   : center;
      }
      
      section.kr-user > section.kr-user-content div.kr-user-f-l > div {
        display        : flex;
        margin-right   : 12px;
        margin-left    : 12px;
        flex           : 1;
        flex-direction : column;
      }
      
      section.kr-user > section.kr-user-content div.kr-user-f-l > div:first-child {
        margin-left : 0px;
      }
      
      section.kr-user > section.kr-user-content div.kr-user-f-l > div:last-child {
        margin-right : 0px;
      }
      
      section.kr-user > section.kr-user-content div.kr-user-f-l > div > label {
        margin-bottom  : 8px;
        text-transform : uppercase;
        font-weight    : 500;
      }
      
      /* Notification */
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup {
        display       : flex;
        min-height    : 318px;
        margin-bottom : 30px;
        align-items   : stretch;
      }
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup > div {
        display         : flex;
        flex            : 1;
        flex-direction  : column;
        justify-content : center;
      }
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-instruction > h2,
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup > div > h2 {
        margin         : 0;
        padding        : 0;
        padding-bottom : 5px;
        color          : #ff7700;
        border-bottom  : 1px solid #eee;
        font-size      : 18px;
      }
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-instruction > ul,
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup > div > ul {
        padding : 20px;
      }
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-instruction > ul > li,
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup > div > ul > li {
        margin-bottom : 14px;
        font-size     : 16px;
        font-weight   : bold;
        list-style    : square;
      }
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup > div > form {
        display        : flex;
        align-items    : flex-end;
        flex-direction : column;
      }
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup > div > form > input[type="text"] {
        box-sizing    : border-box;
        width         : 100%;
        margin-bottom : 10px;
      }
      
      section.kr-user > section.kr-user-content > div.kr-user-notif-setup > div.kr-user-notif-setuppicture {
        background-repeat   : no-repeat;
        background-position : center center;
        background-size     : auto 100%;
      }
      
      /* Input */
      
      section.kr-user input[type="datetime-local"],
      section.kr-user input[type="password"],
      section.kr-user input[type="text"] {
        -moz-appearance    : none;
        -o-appearance      : none;
        -webkit-appearance : none;
        padding            : 10px 12px;
        border             : 1px solid #e1e3e6;
        border-radius      : 2px;
        font-family        : 'Roboto',
                             sans-serif;
        font-size          : 15px;
      }
      
      /* Footer */
      
      section.kr-user > section.kr-user-content footer {
        display         : flex;
        padding-top     : 15px;
        border-top      : 1px solid #ebebeb;
        justify-content : space-between;
      }
      
      section.kr-user > section.kr-user-content footer > a {
        display         : flex;
        color           : #7a7d84;
        text-decoration : none;
        align-items     : center;
        cursor          : pointer;
      }
      
      section.kr-user > section.kr-user-content footer > a > svg {
        width        : 15px;
        height       : 15px;
        margin-right : 8px;
        fill         : #7a7d84;
      }
      
      section.kr-user > section.kr-user-content footer > a:hover {
        color : #686c74;
      }
      
      section.kr-user > section.kr-user-content footer > a:hover > svg {
        fill : #686c74;
      }
      
      /* Subscription */
      
      section.kr-user > section.kr-user-content > div.kr-subs-user > div {
        display     : flex;
        align-items : flex-end;
      }
      
      section.kr-user > section.kr-user-content > div.kr-subs-user > div > ul {
        display        : flex;
        flex           : 1;
        flex-direction : column;
      }
      
      section.kr-user > section.kr-user-content > div.kr-subs-user > div > ul > li {
        display       : flex;
        margin-bottom : 13px;
        align-items   : flex-start;
      }
      
      section.kr-user > section.kr-user-content > div.kr-subs-user > div > ul > li > svg {
        width        : 16px;
        min-width    : 16px;
        height       : 16px;
        min-height   : 16px;
        margin-right : 8px;
        fill         : #ef6c00;
      }
      
      section.kr-user > section.kr-user-content > div.kr-subs-user > div > ul > li > span > b {
        color       : #ef6c00;
        font-weight : normal;
      }
      
      section.kr-user > section.kr-user-content > section.kr-premium-details {
        display     : flex;
        padding     : 6px 11px;
        border      : 1px solid #dedede;
        background  : #f0f0f0;
        align-items : center;
      }
      
      section.kr-user > section.kr-user-content > section.kr-premium-details > div.kr-premium-details-icn {
        display         : flex;
        width           : 30px;
        height          : 30px;
        margin-right    : 8px;
        align-items     : center;
        justify-content : center;
      }
      
      section.kr-user > section.kr-user-content > section.kr-premium-details > div.kr-premium-details-icn > svg {
        width  : 30px;
        height : 30px;
      }
      
      section.kr-user > section.kr-user-content > section.kr-premium-details > div.kr-premium-details-dl {
        display        : flex;
        flex-direction : column;
      }
      
      section.kr-user > section.kr-user-content > section.kr-premium-details > div.kr-premium-details-dl > h5 {
        margin         : 0;
        padding        : 0;
        color          : #ef6c00;
        text-transform : uppercase;
        font-size      : 15px;
        font-weight    : 700;
      }
      
      section.kr-user > section.kr-user-content > section.kr-premium-details > div.kr-premium-details-dl > span {
        text-transform : uppercase;
        font-size      : 14px;
      }
      
      section.kr-user > section.kr-user-content > h3 {
        margin        : 17px 0px;
        padding       : 0px 0px 5px 0px;
        border-bottom : 1px solid #e0e0e0;
        font-weight   : 500;
      }
      
      /* Welcome overlay */
      div.kr-wlcm-overlay {
        position: absolute;
        left:0; top:0; right:0;
        bottom: 0;
        display: flex; justify-content: center; align-items: center;
        z-index         : 999999999999;
      }
      
      div.kr-wlcm-overlay > section {
        background: #f5f7f9;
        width: 350px;
        height: 500px;
        border-radius: 2px;
        box-sizing: border-box;
        display: flex; align-items: center;
        overflow: hidden;
        transition: all 0.15s ease-out;
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv2 {
        width: 700px;
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv2 > section {
        transform: translateX(-100%);
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv3 {
        width: 700px;
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv3 > section {
        transform: translateX(-200%);
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv4 {
        width: 350px;
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv4 > section {
        transform: translateX(-300%);
        display: flex; flex-direction: column;
        justify-content: center;align-items: center;
      }
      
      
      
      div.kr-wlcm-overlay > section > section {
        min-width: 100%;
        height: 500px;
        transition: transform 0.20s ease-in-out;
        padding: 20px;
        box-sizing: border-box;
        color:#181f2c;
      }
      
      div.kr-wlcm-overlay > section > section.kr-wlcm-overlay-fv {
        display: flex; justify-content: center; align-items: center;
        flex-direction: column;
      }
      
      div.kr-wlcm-overlay > section > section h2 {
        text-align: center;
        font-size: 23px;
        font-weight: 500;
      }
      
      div.kr-wlcm-overlay > section > section.kr-wlcm-overlay-fv > p {
        animation-delay: 2s;
        text-align: center;
        font-weight: 100;
      }
      
      div.kr-wlcm-overlay > section > section > header {
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        height: 150px;
        max-height: 150px;
        padding: 15px 0px;
        margin-bottom: 15px;
        box-sizing: border-box;
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv7 > section > header {
        height: 100%;
        max-height: initial;
      }
      
      div.kr-wlcm-overlay > section > section > header > h2 {
        margin: 15px 0px 0px 0px;
      }
      
      div.kr-wlcm-overlay > section > section > header > span {
        margin-top: 10px;
      
      }
      
      div.kr-wlcm-overlay > section > section > header > span > i {
        color:#fe4f00;
        font-weight: bold;
        font-style: normal;
      }
      
      div.kr-wlcm-overlay > section > section > header > img {
        width: 90px; opacity: 0.4;
        height: 90px;
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv3 > section > header > img,
      div.kr-wlcm-overlay > section.kr-wlcm-nv4 > section > header > img {
        width: 75px;
        height: 75px;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
        max-height: 264px;
        overflow-y: auto;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es::-webkit-scrollbar-track {
        border        : 0px none #f5f7f9;
        border-radius : 50px;
        background    : #f5f7f9;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li {
        width: 33%;
        margin-bottom: 20px;
        box-sizing: border-box;
        display: flex;
        padding: 10px;
        padding-bottom: 0px;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div {
        display: flex; align-items: center;
        flex:1;
        padding: 10px;
        cursor: pointer;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div:hover {
        background: #e8e8e8;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div.kr-wlcm-selecteditem {
        background: #fe4f00;
        color:#fff;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div.kr-wlcm-selecteditem > img {
        filter: brightness(0) invert(1);
      }
      
      div.kr-wlcm-overlay > section.kr-wlcm-nv4 > section > ul.kr-wlcm-overlay-es > li > div > img {
        width: 33px;
        height: 33px;
        margin-right: 15px;
        opacity: 0.7;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > img {
        width: 30px;
        height: 30px;
        margin-right: 15px;
      
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > div {
        width: 32px;
        min-width: 32px; min-height: 32px;
        margin-right: 10px;
        height: 32px;
        display: flex; justify-content: center; align-items: center;
        background: #ccc;
        border-radius: 30px;
        font-size: 15px;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > span {
        font-size: 18px;
      }
      
      div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > span > i {
        font-size: 12px; color:#555;
        font-style: normal;
      }
      
      div.kr-wlcm-overlay > section > section > section.kr-welcome-choi {
        padding: 15px 0px;
        display: flex;
        flex-wrap: wrap;
        max-height: 264px;
        justify-content: center;
      }
      
      div.kr-wlcm-overlay > section > section > section.kr-welcome-choi > input[type="submit"] {
        margin-left: 10px; margin-right: 10px;
      }
      
      div.kr-wlcm-overlay > section > section > form {
        display: flex; flex-direction: column;
      }
      
      div.kr-wlcm-overlay > section > section > form > section {
        display: flex; align-items: flex-start;
      }
      
      div.kr-wlcm-overlay > section > section > form > section > div {
        flex-direction: column;
        padding: 15px;
        flex:1;
      }
      
      div.kr-wlcm-overlay > section > section > form > section > div > label {
        font-weight: 700;
        font-size: 17px;
        text-transform: uppercase;
      }
      
      div.kr-wlcm-overlay > section > section > form > section > div > input[type="text"] {
        box-sizing         : border-box;
        -moz-appearance    : none;
        -o-appearance      : none;
        -webkit-appearance : none;
        width              : 100%;
        padding: 11px;
        border-radius: 2px;
        background: #ffffff;
        outline            : none;
        font-size          : 15px;
        border: 1px solid #dedcdc;
        font-size: 15px;
        margin-top: 8px;
      }
      
      div.kr-wlcm-overlay > section > section > form > section > div > select {
        width              : 100%;
        padding: 11px;
        border-radius: 2px;
        background: #ffffff;
        outline            : none;
        font-size          : 15px;
        border: 1px solid #dedcdc;
        font-size: 15px;
        box-sizing         : border-box;
        margin-top: 8px;
      }
      
      div.kr-wlcm-overlay > section > section > form > div {
        display: flex; justify-content: space-between;
        align-items: center;
        padding: 4px 15px 0px 15px;
      }
      
      /* Security */
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup {
        display: flex;
        align-items: flex-start;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > section {
        flex:1;
        display: flex; flex-direction: column;
        align-items: stretch;
        margin-right: 25px;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > section > h3 {
        margin: 0; padding: 0;
        font-size: 20px;
        color:#555;
        text-align: center;
        margin-bottom: 20px;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > section > h3 > i {
        font-size: 22px;
        color:#222;
        font-style: normal;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > section > h4 {
        color:#555;
        margin: 0;
        padding: 0;
        text-align: center;
        padding-top: 17px;
        margin-top: 20px;
        border-top: 2px solid #dadada;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > section > ul {
        display: flex; justify-content: center;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > section > ul > li {
        display: flex; align-items: center; justify-content: center;
        margin-right: 5px;
        margin-left: 5px;
      }
      
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > section > ul > li > a {
        text-decoration: none;
        text-align: center;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > div {
        display: flex; flex-direction: column;
        background: #fff;
        align-items: center;padding: 16px;
        border-radius: 2px;
        box-shadow: 0px 2px 5px #00000030;
        width: 200px;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > div > img {
        width: 180px;
        max-width: 90%;
        margin-bottom: 15px;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > div > form {
        display: flex; flex-direction: column;
        max-width: 100%;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > div > form > input[type="submit"] {
        margin-top: 15px;
        margin-top: 15px;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > div > form > input[type="text"] {
        letter-spacing : 15px;
        text-align: center;
      }
      
      section.kr-user > section.kr-user-content >  section.kr-user-security-setup > div > form > span {
        text-align: center;
        margin:13px 0px 0px 0px;
        color:red;
        display: none;
      }
      
      section.kr-user > section.kr-user-content > form.kr-gogletfs-remove {
        display: flex; justify-content:flex-end;
      }
      
      /* Gdax */
      section.kr-user-content > form.kr-user-gdax {
        display: flex; flex-direction: column;
      
      }
      
      section.kr-user-content > form.kr-user-gdax > section:last-child {
        display: flex; justify-content: space-between;
        align-items: center;
      }
      
      section.kr-user-content > form.kr-user-gdax > section:first-child {
        display: flex; flex-direction: column;
        background: #fff;
        box-shadow: 0px 2px 5px #00000024;
        border-radius: 2px;
        padding: 0px 15px;
        margin-bottom: 15px;
      }
      
      section.kr-user-content > form.kr-user-gdax > section:first-child > div {
        display: flex; flex-direction: column;
        border-bottom: 1px solid #e9e9e9;
        padding: 15px 0px;
      
      }
      
      section.kr-user-content > form.kr-user-gdax > section:first-child > div:last-child {
        border-bottom: none;
      }
      
      section.kr-user-content > form.kr-user-gdax > section:first-child > div > span {
        font-weight: bold;
        text-transform: uppercase;
      }
      
      section.kr-user-content > form.kr-user-gdax > section:first-child > div > input[type="text"] {
        margin-top: 5px;
      }
      
      /* Login history table */
      table.kr-login-user-history-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0px 10px;
        margin-top: -10px;
      }
      
      table.kr-login-user-history-table tr {
        background: #fff;
        box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.15);
        margin-bottom: 10px;
        color:#323641;
      }
      
      table.kr-login-user-history-table tr > td {
        padding: 9px;
        font-size: 14px;
      }
      
      table.kr-login-user-history-table tr > td:nth-child(2){
        text-align: center;
      }
      
      table.kr-login-user-history-table tr > td:last-child {
        text-align: right;
      }
      
      table.kr-login-user-history-table tr > td > img {
        width: 15px;
        margin-right: 5px;
      }
      
      /* Exchange setup */
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange {
        display: grid;
        grid-column-gap: 18px;
        grid-template-columns: auto auto auto;
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div {
        background: #fff;
        box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.17);
        height: 100px;
        margin-bottom: 18px;
        display: flex; justify-content: center; align-items: center;
        padding: 20px;
        box-sizing: border-box;
        transition: all 0.15s linear;
        cursor: pointer;
        position: relative;
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div > div {
        display: none;
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div.kr-account-config-exchange-enable > div {
        position: absolute;
        width: 17px; height: 17px;
        display: flex; justify-content: center; align-items: center;
        right:5px ;
        top:5px;
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div > div > svg {
        fill:#23c53c;
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div.kr-account-config-exchange-enable {
        box-shadow: 0px 2px 6px 0px rgba(34, 150, 52, 0.4);
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div:hover {
        box-shadow: 0px 3px 4px 0px rgba(0, 0, 0, 0.25);
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div.kr-account-config-exchange-enable:hover {
        box-shadow: 0px 2px 6px 0px rgba(34, 150, 52, 0.5);
      }
      
      section.kr-user > section.kr-user-content > section.kr-account-config-exchange > div > img {
        max-width: 85%;
      }
      
      /* Widthdraw method */
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup {
        display: flex; flex-direction: column;
      }
      
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup > header {
        display: flex; justify-content: flex-end;
      }
      
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup > ul {
        display: flex; align-items: stretch;
        margin-top: 15px;
      }
      
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup > ul > li {
        flex:1;
        background: #fff;
        height: 110px;
        margin: 0px 8px;
        box-shadow: 0px 2px 5px 0px #0000003d;
        display: flex; justify-content: center; align-items: center;
        cursor: pointer;
      }
      
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup > ul > li:hover {
        box-shadow: 0px 2px 6px 0px #0000005d;
      }
      
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup > ul > li > img {
        width: 80%;
        max-height: 70%;
      }
      
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup > ul > li:first-child { margin-left: 0px; }
      section.kr-user > section.kr-user-content > section.user-widthdraw-setup > ul > li:last-child { margin-right: 0px; }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        margin-top: 15px;
        border-top: 1px solid rgba(0,0,0,0.15);
        padding-top: 15px;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li {
        display: flex; flex-direction: column;
        background: #fff;
        margin-bottom: 15px;
        box-shadow: 0px 2px 5px 0px #0000003d;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section {
        display: flex; flex-direction: column;
        padding: 10px;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section > div {
        margin-bottom: 10px;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section > div > span {
        font-size: 15px;
        text-transform: uppercase;
        font-weight: bold;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section > ul {
        display: flex; align-items: stretch;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section > ul > li {
        display: flex; flex-direction: column;
        align-items: flex-start;
        flex:1;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section > ul > li:first-child {
        flex:1.5;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section > ul > li > label {
        text-transform: uppercase;
        margin-bottom: 5px;
        font-size: 12px;
        font-weight: bold;
        opacity: 0.7;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > section > ul > li:last-child {
        flex:0;
        justify-content: flex-end;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > div {
        background: #fff;
        border-top: 1px solid rgba(0,0,0,0.15);
        padding: 15px;
        display: none;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > div > ul {
        display: flex; flex-direction: column;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > div > ul > li {
        display: flex; align-content: center; justify-content: space-between;
        margin-bottom: 10px; font-size: 16px;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > div > ul > li > label {
        text-transform: uppercase;
        font-weight: bold;
      }
      
      section.kr-user > section.kr-user-content > ul.user-widthdraw-list > li > div > footer {
        justify-content: flex-end;
      }
      
</style>


<style>
    
section.kr-user1 {
    z-index            : 9999999999999;
    display            : flex;
    position           : absolute;
    top                : 0px;
    right              : 0;
    bottom             : 0;
    width              : 780px;
    height             : 100%;
    padding            : 0;
    overflow-x         : hidden;
    overflow-y         : auto;
    background         : #fafafa;
    box-shadow         : -5px 0px 20px #000000bd;
    align-items        : stretch;
    flex-direction     : column;
    animation-duration : 0.3s;
    max-width: 90%;
  }
  
  /* Loading */
  
  div.kr-user1-global-loading {
    display         : flex;
    position        : absolute;
    top             : 0;
    right           : 0;
    bottom          : 0;
    left            : 0;
    align-items     : center;
    justify-content : center;
  }
  
  /* Content */
  
  section.kr-user1 > header {
    display     : flex;
    position    : relative;
    height      : 150px;
    min-height  : 150px;
    overflow    : hidden;
    background  : #252525;
    align-items : center;
  }
  
  section.kr-user1 > header > section {
    position            : absolute;
    top                 : -10px;
    right               : -10px;
    bottom              : -10px;
    left                : -10px;
    opacity             : 0.7;
    background-position : center center;
    background-size     : cover;
    filter              : blur(5px);
  }
  
  section.kr-user1 > header > div.kr-user1-md {
    z-index     : 1;
    display     : flex;
    position    : relative;
    margin-left : 25px;
    align-items : center;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-pic {
    display             : flex;
    position            : relative;
    width               : 100px;
    min-width           : 100px;
    height              : 100px;
    min-height          : 100px;
    overflow            : hidden;
    border-radius       : 100px;
    background          : #fe8114;
    background-position : center center;
    background-size     : cover;
    box-shadow          : 0px 2px 2px 0px #0000007a;
    align-items         : center;
    justify-content     : center;
    cursor              : pointer;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-pic > * {
    user-select: none;
    pointer-events: none;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-pic > div.kr-user1-pic-loading {
    position   : absolute;
    left       : 0;
    width      : 0%;
    height     : 100px;
    background : #fff;
    transition : width 0.15s linear;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-pic.kr-user1-pic-exist > svg {
    display        : none;
    pointer-events : none;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-pic.kr-user1-pic-exist:hover > svg {
    display : block;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-pic > svg {
    width  : 30px;
    height : 30px;
    fill   : #fff;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-infos {
    display         : flex;
    margin-left     : 25px;
    color           : #fff;
    text-shadow     : 1px 1px 2px #0000007a;
    flex-direction  : column;
    justify-content : flex-start;
  }
  
  section.kr-user1 > header > div.kr-user1-md > div.kr-user1-infos > h3 {
    margin    : 0;
    padding   : 0;
    font-size : 25px;
  }
  
  /* User navigation */
  
  section.kr-user1 > ul.kr-user1-nav {
    display     : flex;
    min-height  : 39px;
    background  : #fff;
    box-shadow  : 0px 2px 2px 0px #00000024;
    align-items : stretch;
  }
  
  section.kr-user1 > ul.kr-user1-nav > li {
    padding        : 10px 18px 8px 18px;
    color          : #3f4858;
    border-bottom  : 2px solid #fff;
    text-transform : uppercase;
    font-size      : 15px;
    font-weight    : bold;
    cursor         : pointer;
    display: flex;
    justify-content: center; align-items: center;
  }
  
  section.kr-user1 > ul.kr-user1-nav > li:hover {
    border-bottom-color : #f4f4f4;
    background          : #f4f4f4;
  }
  
  section.kr-user1 > ul.kr-user1-nav > li.kr-user1-nav-selected {
    color               : #181f2c;
    border-bottom-color : #ff7700;
  }
  
  section.kr-user1 > ul.kr-user1-nav > li[kr-user1-v="logout"] {
    color               : #ad0d14;
    border-bottom-color : #f4f4f4;
    background          : #f4f4f4;
  }
  
  /* User content */
  
  section.kr-user1 > section.kr-user1-content {
    padding : 25px;
    flex    : 1;
  }
  
  section.kr-user1 > section.kr-user1-content div.kr-user1-f-l {
    display       : flex;
    margin-bottom : 15px;
    align-items   : center;
  }
  
  section.kr-user1 > section.kr-user1-content div.kr-user1-f-l > div {
    display        : flex;
    margin-right   : 12px;
    margin-left    : 12px;
    flex           : 1;
    flex-direction : column;
  }
  
  section.kr-user1 > section.kr-user1-content div.kr-user1-f-l > div:first-child {
    margin-left : 0px;
  }
  
  section.kr-user1 > section.kr-user1-content div.kr-user1-f-l > div:last-child {
    margin-right : 0px;
  }
  
  section.kr-user1 > section.kr-user1-content div.kr-user1-f-l > div > label {
    margin-bottom  : 8px;
    text-transform : uppercase;
    font-weight    : 500;
  }
  
  /* Notification */
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup {
    display       : flex;
    min-height    : 318px;
    margin-bottom : 30px;
    align-items   : stretch;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup > div {
    display         : flex;
    flex            : 1;
    flex-direction  : column;
    justify-content : center;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-instruction > h2,
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup > div > h2 {
    margin         : 0;
    padding        : 0;
    padding-bottom : 5px;
    color          : #ff7700;
    border-bottom  : 1px solid #eee;
    font-size      : 18px;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-instruction > ul,
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup > div > ul {
    padding : 20px;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-instruction > ul > li,
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup > div > ul > li {
    margin-bottom : 14px;
    font-size     : 16px;
    font-weight   : bold;
    list-style    : square;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup > div > form {
    display        : flex;
    align-items    : flex-end;
    flex-direction : column;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup > div > form > input[type="text"] {
    box-sizing    : border-box;
    width         : 100%;
    margin-bottom : 10px;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-user1-notif-setup > div.kr-user1-notif-setuppicture {
    background-repeat   : no-repeat;
    background-position : center center;
    background-size     : auto 100%;
  }
  
  /* Input */
  
  section.kr-user1 input[type="datetime-local"],
  section.kr-user1 input[type="password"],
  section.kr-user1 input[type="text"] {
    -moz-appearance    : none;
    -o-appearance      : none;
    -webkit-appearance : none;
    padding            : 10px 12px;
    border             : 1px solid #e1e3e6;
    border-radius      : 2px;
    font-family        : 'Roboto',
                         sans-serif;
    font-size          : 15px;
  }
  
  /* Footer */
  
  section.kr-user1 > section.kr-user1-content footer {
    display         : flex;
    padding-top     : 15px;
    border-top      : 1px solid #ebebeb;
    justify-content : space-between;
  }
  
  section.kr-user1 > section.kr-user1-content footer > a {
    display         : flex;
    color           : #7a7d84;
    text-decoration : none;
    align-items     : center;
    cursor          : pointer;
  }
  
  section.kr-user1 > section.kr-user1-content footer > a > svg {
    width        : 15px;
    height       : 15px;
    margin-right : 8px;
    fill         : #7a7d84;
  }
  
  section.kr-user1 > section.kr-user1-content footer > a:hover {
    color : #686c74;
  }
  
  section.kr-user1 > section.kr-user1-content footer > a:hover > svg {
    fill : #686c74;
  }
  
  /* Subscription */
  
  section.kr-user1 > section.kr-user1-content > div.kr-subs-user > div {
    display     : flex;
    align-items : flex-end;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-subs-user > div > ul {
    display        : flex;
    flex           : 1;
    flex-direction : column;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-subs-user > div > ul > li {
    display       : flex;
    margin-bottom : 13px;
    align-items   : flex-start;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-subs-user > div > ul > li > svg {
    width        : 16px;
    min-width    : 16px;
    height       : 16px;
    min-height   : 16px;
    margin-right : 8px;
    fill         : #ef6c00;
  }
  
  section.kr-user1 > section.kr-user1-content > div.kr-subs-user > div > ul > li > span > b {
    color       : #ef6c00;
    font-weight : normal;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-premium-details {
    display     : flex;
    padding     : 6px 11px;
    border      : 1px solid #dedede;
    background  : #f0f0f0;
    align-items : center;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-premium-details > div.kr-premium-details-icn {
    display         : flex;
    width           : 30px;
    height          : 30px;
    margin-right    : 8px;
    align-items     : center;
    justify-content : center;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-premium-details > div.kr-premium-details-icn > svg {
    width  : 30px;
    height : 30px;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-premium-details > div.kr-premium-details-dl {
    display        : flex;
    flex-direction : column;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-premium-details > div.kr-premium-details-dl > h5 {
    margin         : 0;
    padding        : 0;
    color          : #ef6c00;
    text-transform : uppercase;
    font-size      : 15px;
    font-weight    : 700;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-premium-details > div.kr-premium-details-dl > span {
    text-transform : uppercase;
    font-size      : 14px;
  }
  
  section.kr-user1 > section.kr-user1-content > h3 {
    margin        : 17px 0px;
    padding       : 0px 0px 5px 0px;
    border-bottom : 1px solid #e0e0e0;
    font-weight   : 500;
  }
  
  /* Welcome overlay */
  div.kr-wlcm-overlay {
    position: absolute;
    left:0; top:0; right:0;
    bottom: 0;
    display: flex; justify-content: center; align-items: center;
    z-index         : 999999999999;
  }
  
  div.kr-wlcm-overlay > section {
    background: #f5f7f9;
    width: 350px;
    height: 500px;
    border-radius: 2px;
    box-sizing: border-box;
    display: flex; align-items: center;
    overflow: hidden;
    transition: all 0.15s ease-out;
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv2 {
    width: 700px;
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv2 > section {
    transform: translateX(-100%);
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv3 {
    width: 700px;
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv3 > section {
    transform: translateX(-200%);
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv4 {
    width: 350px;
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv4 > section {
    transform: translateX(-300%);
    display: flex; flex-direction: column;
    justify-content: center;align-items: center;
  }
  
  
  
  div.kr-wlcm-overlay > section > section {
    min-width: 100%;
    height: 500px;
    transition: transform 0.20s ease-in-out;
    padding: 20px;
    box-sizing: border-box;
    color:#181f2c;
  }
  
  div.kr-wlcm-overlay > section > section.kr-wlcm-overlay-fv {
    display: flex; justify-content: center; align-items: center;
    flex-direction: column;
  }
  
  div.kr-wlcm-overlay > section > section h2 {
    text-align: center;
    font-size: 23px;
    font-weight: 500;
  }
  
  div.kr-wlcm-overlay > section > section.kr-wlcm-overlay-fv > p {
    animation-delay: 2s;
    text-align: center;
    font-weight: 100;
  }
  
  div.kr-wlcm-overlay > section > section > header {
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    height: 150px;
    max-height: 150px;
    padding: 15px 0px;
    margin-bottom: 15px;
    box-sizing: border-box;
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv7 > section > header {
    height: 100%;
    max-height: initial;
  }
  
  div.kr-wlcm-overlay > section > section > header > h2 {
    margin: 15px 0px 0px 0px;
  }
  
  div.kr-wlcm-overlay > section > section > header > span {
    margin-top: 10px;
  
  }
  
  div.kr-wlcm-overlay > section > section > header > span > i {
    color:#fe4f00;
    font-weight: bold;
    font-style: normal;
  }
  
  div.kr-wlcm-overlay > section > section > header > img {
    width: 90px; opacity: 0.4;
    height: 90px;
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv3 > section > header > img,
  div.kr-wlcm-overlay > section.kr-wlcm-nv4 > section > header > img {
    width: 75px;
    height: 75px;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
    max-height: 264px;
    overflow-y: auto;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es::-webkit-scrollbar-track {
    border        : 0px none #f5f7f9;
    border-radius : 50px;
    background    : #f5f7f9;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li {
    width: 33%;
    margin-bottom: 20px;
    box-sizing: border-box;
    display: flex;
    padding: 10px;
    padding-bottom: 0px;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div {
    display: flex; align-items: center;
    flex:1;
    padding: 10px;
    cursor: pointer;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div:hover {
    background: #e8e8e8;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div.kr-wlcm-selecteditem {
    background: #fe4f00;
    color:#fff;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div.kr-wlcm-selecteditem > img {
    filter: brightness(0) invert(1);
  }
  
  div.kr-wlcm-overlay > section.kr-wlcm-nv4 > section > ul.kr-wlcm-overlay-es > li > div > img {
    width: 33px;
    height: 33px;
    margin-right: 15px;
    opacity: 0.7;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > img {
    width: 30px;
    height: 30px;
    margin-right: 15px;
  
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > div {
    width: 32px;
    min-width: 32px; min-height: 32px;
    margin-right: 10px;
    height: 32px;
    display: flex; justify-content: center; align-items: center;
    background: #ccc;
    border-radius: 30px;
    font-size: 15px;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > span {
    font-size: 18px;
  }
  
  div.kr-wlcm-overlay > section > section > ul.kr-wlcm-overlay-es > li > div > span > i {
    font-size: 12px; color:#555;
    font-style: normal;
  }
  
  div.kr-wlcm-overlay > section > section > section.kr-welcome-choi {
    padding: 15px 0px;
    display: flex;
    flex-wrap: wrap;
    max-height: 264px;
    justify-content: center;
  }
  
  div.kr-wlcm-overlay > section > section > section.kr-welcome-choi > input[type="submit"] {
    margin-left: 10px; margin-right: 10px;
  }
  
  div.kr-wlcm-overlay > section > section > form {
    display: flex; flex-direction: column;
  }
  
  div.kr-wlcm-overlay > section > section > form > section {
    display: flex; align-items: flex-start;
  }
  
  div.kr-wlcm-overlay > section > section > form > section > div {
    flex-direction: column;
    padding: 15px;
    flex:1;
  }
  
  div.kr-wlcm-overlay > section > section > form > section > div > label {
    font-weight: 700;
    font-size: 17px;
    text-transform: uppercase;
  }
  
  div.kr-wlcm-overlay > section > section > form > section > div > input[type="text"] {
    box-sizing         : border-box;
    -moz-appearance    : none;
    -o-appearance      : none;
    -webkit-appearance : none;
    width              : 100%;
    padding: 11px;
    border-radius: 2px;
    background: #ffffff;
    outline            : none;
    font-size          : 15px;
    border: 1px solid #dedcdc;
    font-size: 15px;
    margin-top: 8px;
  }
  
  div.kr-wlcm-overlay > section > section > form > section > div > select {
    width              : 100%;
    padding: 11px;
    border-radius: 2px;
    background: #ffffff;
    outline            : none;
    font-size          : 15px;
    border: 1px solid #dedcdc;
    font-size: 15px;
    box-sizing         : border-box;
    margin-top: 8px;
  }
  
  div.kr-wlcm-overlay > section > section > form > div {
    display: flex; justify-content: space-between;
    align-items: center;
    padding: 4px 15px 0px 15px;
  }
  
  /* Security */
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup {
    display: flex;
    align-items: flex-start;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > section {
    flex:1;
    display: flex; flex-direction: column;
    align-items: stretch;
    margin-right: 25px;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > section > h3 {
    margin: 0; padding: 0;
    font-size: 20px;
    color:#555;
    text-align: center;
    margin-bottom: 20px;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > section > h3 > i {
    font-size: 22px;
    color:#222;
    font-style: normal;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > section > h4 {
    color:#555;
    margin: 0;
    padding: 0;
    text-align: center;
    padding-top: 17px;
    margin-top: 20px;
    border-top: 2px solid #dadada;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > section > ul {
    display: flex; justify-content: center;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > section > ul > li {
    display: flex; align-items: center; justify-content: center;
    margin-right: 5px;
    margin-left: 5px;
  }
  
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > section > ul > li > a {
    text-decoration: none;
    text-align: center;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > div {
    display: flex; flex-direction: column;
    background: #fff;
    align-items: center;padding: 16px;
    border-radius: 2px;
    box-shadow: 0px 2px 5px #00000030;
    width: 200px;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > div > img {
    width: 180px;
    max-width: 90%;
    margin-bottom: 15px;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > div > form {
    display: flex; flex-direction: column;
    max-width: 100%;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > div > form > input[type="submit"] {
    margin-top: 15px;
    margin-top: 15px;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > div > form > input[type="text"] {
    letter-spacing : 15px;
    text-align: center;
  }
  
  section.kr-user1 > section.kr-user1-content >  section.kr-user1-security-setup > div > form > span {
    text-align: center;
    margin:13px 0px 0px 0px;
    color:red;
    display: none;
  }
  
  section.kr-user1 > section.kr-user1-content > form.kr-gogletfs-remove {
    display: flex; justify-content:flex-end;
  }
  
  /* Gdax */
  section.kr-user1-content > form.kr-user1-gdax {
    display: flex; flex-direction: column;
  
  }
  
  section.kr-user1-content > form.kr-user1-gdax > section:last-child {
    display: flex; justify-content: space-between;
    align-items: center;
  }
  
  section.kr-user1-content > form.kr-user1-gdax > section:first-child {
    display: flex; flex-direction: column;
    background: #fff;
    box-shadow: 0px 2px 5px #00000024;
    border-radius: 2px;
    padding: 0px 15px;
    margin-bottom: 15px;
  }
  
  section.kr-user1-content > form.kr-user1-gdax > section:first-child > div {
    display: flex; flex-direction: column;
    border-bottom: 1px solid #e9e9e9;
    padding: 15px 0px;
  
  }
  
  section.kr-user1-content > form.kr-user1-gdax > section:first-child > div:last-child {
    border-bottom: none;
  }
  
  section.kr-user1-content > form.kr-user1-gdax > section:first-child > div > span {
    font-weight: bold;
    text-transform: uppercase;
  }
  
  section.kr-user1-content > form.kr-user1-gdax > section:first-child > div > input[type="text"] {
    margin-top: 5px;
  }
  
  /* Login history table */
  table.kr-login-user-history-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0px 10px;
    margin-top: -10px;
  }
  
  table.kr-login-user-history-table tr {
    background: #fff;
    box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.15);
    margin-bottom: 10px;
    color:#323641;
  }
  
  table.kr-login-user-history-table tr > td {
    padding: 9px;
    font-size: 14px;
  }
  
  table.kr-login-user-history-table tr > td:nth-child(2){
    text-align: center;
  }
  
  table.kr-login-user-history-table tr > td:last-child {
    text-align: right;
  }
  
  table.kr-login-user-history-table tr > td > img {
    width: 15px;
    margin-right: 5px;
  }
  
  /* Exchange setup */
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange {
    display: grid;
    grid-column-gap: 18px;
    grid-template-columns: auto auto auto;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div {
    background: #fff;
    box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.17);
    height: 100px;
    margin-bottom: 18px;
    display: flex; justify-content: center; align-items: center;
    padding: 20px;
    box-sizing: border-box;
    transition: all 0.15s linear;
    cursor: pointer;
    position: relative;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div > div {
    display: none;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div.kr-account-config-exchange-enable > div {
    position: absolute;
    width: 17px; height: 17px;
    display: flex; justify-content: center; align-items: center;
    right:5px ;
    top:5px;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div > div > svg {
    fill:#23c53c;
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div.kr-account-config-exchange-enable {
    box-shadow: 0px 2px 6px 0px rgba(34, 150, 52, 0.4);
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div:hover {
    box-shadow: 0px 3px 4px 0px rgba(0, 0, 0, 0.25);
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div.kr-account-config-exchange-enable:hover {
    box-shadow: 0px 2px 6px 0px rgba(34, 150, 52, 0.5);
  }
  
  section.kr-user1 > section.kr-user1-content > section.kr-account-config-exchange > div > img {
    max-width: 85%;
  }
  
  /* Widthdraw method */
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup {
    display: flex; flex-direction: column;
  }
  
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup > header {
    display: flex; justify-content: flex-end;
  }
  
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup > ul {
    display: flex; align-items: stretch;
    margin-top: 15px;
  }
  
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup > ul > li {
    flex:1;
    background: #fff;
    height: 110px;
    margin: 0px 8px;
    box-shadow: 0px 2px 5px 0px #0000003d;
    display: flex; justify-content: center; align-items: center;
    cursor: pointer;
  }
  
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup > ul > li:hover {
    box-shadow: 0px 2px 6px 0px #0000005d;
  }
  
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup > ul > li > img {
    width: 80%;
    max-height: 70%;
  }
  
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup > ul > li:first-child { margin-left: 0px; }
  section.kr-user1 > section.kr-user1-content > section.user-widthdraw-setup > ul > li:last-child { margin-right: 0px; }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    margin-top: 15px;
    border-top: 1px solid rgba(0,0,0,0.15);
    padding-top: 15px;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li {
    display: flex; flex-direction: column;
    background: #fff;
    margin-bottom: 15px;
    box-shadow: 0px 2px 5px 0px #0000003d;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section {
    display: flex; flex-direction: column;
    padding: 10px;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section > div {
    margin-bottom: 10px;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section > div > span {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bold;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section > ul {
    display: flex; align-items: stretch;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section > ul > li {
    display: flex; flex-direction: column;
    align-items: flex-start;
    flex:1;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section > ul > li:first-child {
    flex:1.5;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section > ul > li > label {
    text-transform: uppercase;
    margin-bottom: 5px;
    font-size: 12px;
    font-weight: bold;
    opacity: 0.7;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > section > ul > li:last-child {
    flex:0;
    justify-content: flex-end;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > div {
    background: #fff;
    border-top: 1px solid rgba(0,0,0,0.15);
    padding: 15px;
    display: none;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > div > ul {
    display: flex; flex-direction: column;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > div > ul > li {
    display: flex; align-content: center; justify-content: space-between;
    margin-bottom: 10px; font-size: 16px;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > div > ul > li > label {
    text-transform: uppercase;
    font-weight: bold;
  }
  
  section.kr-user1 > section.kr-user1-content > ul.user-widthdraw-list > li > div > footer {
    justify-content: flex-end;
  }
  

</style>
  

  <section id="ggg" class="kr-user1 animated slideInRight" style="display:none;"><header>
    <div class="kr-user1-md">
      <div class="kr-user1-pic kr-user1-pic-s kr-user1-pic-s-u dz-clickable" href="" style="background-image:url('')">
        <svg class="lnr lnr-camera">
          <use xlink:href="#lnr-camera"></use>
        </svg>
        <div class="kr-user1-pic-loading">
  
        </div>
      </div>
      <div class="kr-user1-infos">
        <h3><?php echo $firstname  . ' ' . $lastname ?></h3>
        <span><?php echo $email  ?></span>
      </div>
    </div>
    <section class="kr-user1-pic-s kr-user1-pic-s-u" style="background-image:url('')">
  
    </section>
  </header>

  <style>
    .lin{
      padding: 10px 18px 8px 18px;
color: #3f4858;
border-bottom: 2px solid #fff;
text-transform: uppercase;
font-size: 15px;
font-weight: bold;
cursor: pointer;
display: flex;
justify-content: center;
align-items: center; text-decoration:none; list-style-type:none;
    }
  </style>
  <ul class="kr-user1-nav" style="overflow-x: auto;
	-webkit-overflow-scrolling: touch;">
    <a href="<?php echo $domain ?>app/update" class="lin"><li class="kr-user1-nav-selected" kr-user1-v="profile">Update Profile</li></a>
    <a href="<?php echo $domain ?>app/deposit/" class="lin"><li kr-user1-v="notifications">Deposit</li></a>
    <a href="<?php echo $domain ?>app/withdrawal/" class="lin"><li kr-user1-v="security">Withdraw</li></a>
    <a href="<?php echo $domain ?>app/deposit_history/" class="lin"> <li kr-user1-v="widthdraw">Deposit History</li></a>
    <a href="<?php echo $domain ?>app/withdraw_history/" class="lin"><li kr-user1-v="widthdraw">Withdraw History</li></a>
    <a href="<?php echo $domain ?>app/logout" class="lin"><li kr-user1-v="logout">Logout</li></a>
    </ul>
  <section class="kr-user1-content" style="overflow-x: auto; overflow-y: auto;
	-webkit-overflow-scrolling: touch;"><form class="kr-user1-update" action="{% static 'account/new/app/modules/kr-user/src/actions/updateUserprofile.php" method="post">
  
    
    <div class="kr-user1-f-l">
      <div>
        <label>Your name</label>
        <input type="text" name="kr-user1-name" placeholder="Your name" value="<?php echo $firstname . ' ' . $lastname ?>" readonly="">
      </div>
      <div>
        <label>Your e-mail address</label>
        <input type="text" placeholder="Your e-mail address" name="kr-user1-email" value="<?php echo $email ?>" readonly="">
      </div>
    </div>
    <div class="kr-user1-f-l">
      <div>
        <label>Language</label>
        <select class="" name="kr-user1-language" style="display: none;">
          <option value="ar">Arabic</option><option value="bn">Bengali</option><option value="cn">Chinese</option><option value="cs">Czech</option><option value="de">German</option><option value="en" selected="selected">English</option><option value="es">Spanish</option><option value="et">Estonian</option><option value="fr">French</option><option value="hi">Hindi</option><option value="hr">Croatian</option><option value="hy">Armenian</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="lt">Lithuanian</option><option value="lv">Latvian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="rom">Romani</option><option value="ru">Russian</option><option value="tr">Turkish</option><option value="vi">Vietnamese</option><option value="zh-CN">Chinese Simplified</option>      </select><div class="chosen-container chosen-container-single" title="" style="width: 345px;"><a class="chosen-single">
    <input class="chosen-search-input" type="text" autocomplete="off">
    <span>English</span>
    <div><b></b></div>
  </a>
  <div class="chosen-drop">
    <div class="chosen-search">
    </div>
    <ul class="chosen-results"></ul>
  </div></div>
      </div>
      <div>
        <label>Currency</label>
        <select class="" name="kr-user1-currency" style="display: none;">
                    <option selected="" value="USD">US Dollars (USD)</option>
                      <option value="EUR">Euro (EUR)</option>
                      <option value="GBP">Pounds Sterling (GBP)</option>
                      <option value="AUD">Australian Dollars (AUD)</option>
                      <option value="EGP">Egyptian Pounds (EGP)</option>
                      <option value="AFN">Afghanis (AFN)</option>
                      <option value="ARS">Argentine Pesos (ARS)</option>
                      <option value="BSD">Bahamian Dollars (BSD)</option>
                      <option value="THB">Baht (THB)</option>
                      <option value="PAB">Balboa (PAB)</option>
                      <option value="BBD">Barbados Dollars (BBD)</option>
                      <option value="BYR">Belarussian Rubles (BYR)</option>
                      <option value="VEF">Bolivares Fuertes (VEF)</option>
                      <option value="BOB">Bolivianos (BOB)</option>
                      <option value="BND">Brunei Dollars (BND)</option>
                      <option value="CAD">Canadian Dollars (CAD)</option>
                      <option value="GHC">Cedis (GHC)</option>
                      <option value="CLP">Chilean Pesos (CLP)</option>
                      <option value="COP">Colombian Pesos (COP)</option>
                      <option value="CRC">Colón (CRC)</option>
                      <option value="SVC">Colones (SVC)</option>
                      <option value="BAM">Convertible Marka (BAM)</option>
                      <option value="NIO">Cordobas (NIO)</option>
                      <option value="RSD">Dinars (RSD)</option>
                      <option value="DOP">Dominican Pesos (DOP)</option>
                      <option value="VND">Dong (VND)</option>
                      <option value="HUF">Forint (HUF)</option>
                      <option value="GIP">Gibraltar Pounds (GIP)</option>
                      <option value="PYG">Guarani (PYG)</option>
                      <option value="GGP">Guernsey Pounds (GGP)</option>
                      <option value="HKD">Hong Kong Dollars (HKD)</option>
                      <option value="UAH">Hryvnia (UAH)</option>
                      <option value="INR">Indian Rupees (INR)</option>
                      <option value="IRR">Iranian Rials (IRR)</option>
                      <option value="JMD">Jamaican Dollars (JMD)</option>
                      <option value="CZK">Koruny (CZK)</option>
                      <option value="NOK">Krone (NOK)</option>
                      <option value="DKK">Kroner (DKK)</option>
                      <option value="SEK">Kronor (SEK)</option>
                      <option value="ISK">Kronur (ISK)</option>
                      <option value="HRK">Kuna (HRK)</option>
                      <option value="LBP">Lebanese Pounds (LBP)</option>
                      <option value="ALL">Leke (ALL)</option>
                      <option value="HNL">Lempiras (HNL)</option>
                      <option value="BGN">Leva (BGN)</option>
                      <option value="TRY">Lira (TRY)</option>
                      <option value="TRL">Liras (TRL)</option>
                      <option value="MUR">Mauritius Rupees (MUR)</option>
                      <option value="MZN">Meticais (MZN)</option>
                      <option value="MXN">Mexican Pesos (MXN)</option>
                      <option value="NGN">Nairas (NGN)</option>
                      <option value="NAD">Namibia Dollars (NAD)</option>
                      <option value="NPR">Nepalese Rupees (NPR)</option>
                      <option value="TWD">New Dollars (TWD)</option>
                      <option value="RON">New Lei (RON)</option>
                      <option value="AZN">New Manats (AZN)</option>
                      <option value="ILS">New Shekels (ILS)</option>
                      <option value="NZD">New Zealand Dollars (NZD)</option>
                      <option value="PEN">Nuevos Soles (PEN)</option>
                      <option value="PKR">Pakistan Rupees (PKR)</option>
                      <option value="UYU">Pesos Uruguayo (UYU)</option>
                      <option value="PHP">Philippine Pesos (PHP)</option>
                      <option value="BWP">Pula (BWP)</option>
                      <option value="QAR">Qatari Rials (QAR)</option>
                      <option value="GTQ">Quetzales (GTQ)</option>
                      <option value="ZAR">Rand (ZAR)</option>
                      <option value="BRL">Reais (BRL)</option>
                      <option value="OMR">Rials Omani (OMR)</option>
                      <option value="KHR">Riels (KHR)</option>
                      <option value="MYR">Ringgits (MYR)</option>
                      <option value="SAR">Riyals (SAR)</option>
                      <option value="IDR">Rupiahs (IDR)</option>
                      <option value="RUB">Russian Rubles (RUB)</option>
                      <option value="SGD">Singapore Dollars (SGD)</option>
                      <option value="SBD">Solomon Islands Dollars (SBD)</option>
                      <option value="KGS">Soms (KGS)</option>
                      <option value="LKR">Sri Lanka Rupees (LKR)</option>
                      <option value="UZS">Sums (UZS)</option>
                      <option value="CHF">Switzerland Francs (CHF)</option>
                      <option value="KZT">Tenge (KZT)</option>
                      <option value="TTD">Trinidad and Tobago Dollars (TTD)</option>
                      <option value="KRW">Won (KRW)</option>
                      <option value="JPY">Yen (JPY)</option>
                      <option value="CNY">Yuan Renminbi (CNY)</option>
                      <option value="PLN">Zlotych (PLN)</option>
                  </select><div class="chosen-container chosen-container-single" title="" style="width: 344px;"><a class="chosen-single">
    <input class="chosen-search-input" type="text" autocomplete="off">
    <span>US Dollars (USD)</span>
    <div><b></b></div>
  </a>
  <div class="chosen-drop">
    <div class="chosen-search">
    </div>
    <ul class="chosen-results"></ul>
  </div></div>
      </div>
    </div>
        <div class="kr-user1-f-l">
        <div>
          <label>Type chart</label>
          <select class="" name="kr-user1-typechart" style="display: none;">
            <option value="default">Default</option>
            <option value="tradingview">Tradingview</option>
          </select><div class="chosen-container chosen-container-single" title="" style="width: 345px;"><a class="chosen-single">
    <input class="chosen-search-input" type="text" autocomplete="off">
    <span>Default</span>
    <div><b></b></div>
  </a>
  <div class="chosen-drop">
    <div class="chosen-search">
    </div>
    <ul class="chosen-results"></ul>
  </div></div>
        </div>
        <div>
  
        </div>
      </div>
    
       
    
    
    <footer>
      <a class="kr-user1-back" onclick="toggle_div_fun('ggg');"><svg class="lnr lnr-chevron-left"><use xlink:href="#lnr-chevron-left"></use></svg> Back</a>
     
      <a href="../password_change/" style="color:white; font-style:bold;" class="btn-shadow btn-orange" name="">Update Password</a>
    </footer>
  </form>
  </section>
  </section>
  

    
    <section id="overlaySearch" class="kr-searchpop kr-ov-nblr">
      <div class="kr-search-field-content kr-search-field-content-inited" kr-search-hide-empty="false" kr-search-callback="" id="">
        <div class="kr-search-field-content-bicon">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"> <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z"></path> <g> </g></svg>
          <input type="text" class="kr-search-field" id="search" onkeyup="changeInput(this.value)" placeholder="BTCETH ..." name="search" value="">
          <div onclick="closeBigSearch();">
            <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
          </div>
          
        </div>
        <div id="result" class="list-group ml-3" style="margin-left:70px;">

      
    </div>
    </div></section>

    
    
    
    <header>
      <div>
        <div>
          <div class="kr-logo">
                          <img src="/static/globalcityindex-live/files/logo-main.4b9c545ea9347660b73dd3b00a629d43.png" alt="">
                      </div>
          <div class="kr-change-dashboard">
            <img src="../../static/account/new/assets/img/icons/dashboard/4_grid.svg" alt="">
            <div class="kr-change-dashboard-selector" style="display: none;">
                              <div>
                  <div>
                    <span>1 charts</span>
                  </div>
                  <ul>
                                          <li kr-dashboard-cfg="1_single"><img src="../../static/account/new/assets/img/icons/dashboard/1_single.svg"></li>
                                        </ul>
                </div>
                                <div>
                  <div>
                    <span>2 charts</span>
                  </div>
                  <ul>
                                          <li kr-dashboard-cfg="2_h"><img src="../../static/account/new/assets/img/icons/dashboard/2_h.svg"></li>
                                            <li kr-dashboard-cfg="2_v"><img src="../../static/account/new/assets/img/icons/dashboard/2_v.svg"></li>
                                        </ul>
                </div>
                                <div>
                  <div>
                    <span>3 charts</span>
                  </div>
                  <ul>
                                          <li kr-dashboard-cfg="3_tm_ll"><img src="../../static/account/new/assets/img/icons/dashboard/3_tm_ll.svg"></li>
                                            <li kr-dashboard-cfg="3_tl_lm"><img src="../../static/account/new/assets/img/icons/dashboard/3_tl_lm.svg"></li>
                                        </ul>
                </div>
                                <div>
                  <div>
                    <span>4 charts</span>
                  </div>
                  <ul>
                                          <li kr-dashboard-cfg="4_grid"><img src="../../static/account/new/assets/img/icons/dashboard/4_grid.svg"></li>
                                            <li kr-dashboard-cfg="4_tl_lm"><img src="../../static/account/new/assets/img/icons/dashboard/4_tl_lm.svg"></li>
                                            <li kr-dashboard-cfg="4_tm_ll"><img src="../../static/account/new/assets/img/icons/dashboard/4_tm_ll.svg"></li>
                                        </ul>
                </div>
                                <div>
                  <div>
                    <span>6 charts or more</span>
                  </div>
                  <ul>
                                          <li kr-dashboard-cfg="6_grid"><img src="../../static/account/new/assets/img/icons/dashboard/6_grid.svg"></li>
                                        </ul>
                </div>
                
            </div>
          </div>

          
          <!--<ul class="kr-top-graphlist">
                            <li class="kr-mono kr-top-graphlist-item kr-top-graphlist-item-view kr-top-graphlist-item-selected" topitem="12695" container="66c37660018b1" symbol="ETH" coinname="Ethereum" market="BINANCE" currency="BTC" pasth="" kr-val-graph="0.0441987486169113">
                  <div class="kr-top-graphlist-closeb">
                    <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
                  </div>
                  <div class="kr-top-graphlist-inf">
                    <label>BINANCE:ETH/BTC</label>
                    <span kr-data="CHANGE24HOURPCT" class="kr-top-graphlist-item-evl-down">-0.77%</span>
                  </div>
                </li>
                        </ul>-->


          <div class="kr-addgraph-dashboard" onclick="showBigSearch('addTopListDashboardSearchPop');">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.444 31.444" style="enable-background:new 0 0 31.444 31.444;" xml:space="preserve">
            <path d="M1.119,16.841c-0.619,0-1.111-0.508-1.111-1.127c0-0.619,0.492-1.111,1.111-1.111h13.475V1.127
            	C14.595,0.508,15.103,0,15.722,0c0.619,0,1.111,0.508,1.111,1.127v13.476h13.475c0.619,0,1.127,0.492,1.127,1.111
            	c0,0.619-0.508,1.127-1.127,1.127H16.833v13.476c0,0.619-0.492,1.127-1.111,1.127c-0.619,0-1.127-0.508-1.127-1.127V16.841H1.119z"></path>
            </svg>
          </div>
        
          <ul class="kr-top-graphlist">
           
              
            

            
                   
    <!--include footer script-->
    

<script>



   
   svalue=""
   
   /*An array containing all the country names in the world:*/
   var people = ['SOLUSD','BTCUSD','BTCETH','ETHUSD','ADAUSD','LTCUSD','APEUSD','XRPUSD','BCHUSD','MATICUSD','BNBUSD','ATOMUSD','MKRUSD','ZECUSD','AXSUSD','RUNEUSD','KSMUSD','FTMUSD','CAKEUSD','UNIUSD','ICPUSD','NEARUSD','DOTUSD','MANAUSD','XLMUSD','GRTUSD','NEOUSD','LINKUSD','TRXUSD','EGLDUSD','EOSUSD','HBARUSD','DASHUSD','ALGOUSD','XTZUSD','FILUSD','BSVUSD','XMRUSD','COMPUSD','WBTCUSD','AAVEUSD','FTTUSD','KLAYUSD','THETAUSD'];
   
   
      
      function matchPeople(input) {
        var reg = new RegExp(input.split("").join("\\w*").replace(/\W/, ""), "i");
        var res = [];
        if (input.trim().length === 0) {
          return res;
        }
        for (var i = 0, len = people.length; i < len; i++) {
          if (people[i].match(reg)) {
            res.push(people[i]);
            
          }
        }
        return res;
        
        
      }
      
      function changeInput(val) {
        var autoCompleteResult = matchPeople(val);
        document.getElementById("result").innerHTML = "";
        for (var i = 0, limit = 10, len = autoCompleteResult.length; i < len  && i < limit; i++) {
          document.getElementById("result").innerHTML += "<a style='text-decoration: none; color:white;' class=''  onclick='setSearch(\"" + autoCompleteResult[i] + "\")'>" + autoCompleteResult[i] + "</a>" + "<br ><br />";
        
          
          
        
         }
      }
      
      

      
      
      
   
      
      
      
</script>

   


<script>
    // Map your choices to your option value
  var lookup = {
     'Crypto': ['','SOLUSD','BTCUSD','ETHUSD','ADAUSD','LTCUSD','APEUSD','XRPUSD','BCHUSD','MATICUSD','BNBUSD','ATOMUSD','MKRUSD','ZECUSD','AXSUSD','RUNEUSD','KSMUSD','FTMUSD','CAKEUSD','UNIUSD','ICPUSD','NEARUSD','DOTUSD','MANAUSD','XLMUSD','GRTUSD','NEOUSD','LINKUSD','TRXUSD','EGLDUSD','EOSUSD','HBARUSD','DASHUSD','ALGOUSD','XTZUSD','FILUSD','BSVUSD','XMRUSD','COMPUSD','WBTCUSD','AAVEUSD','FTTUSD','KLAYUSD','THETAUSD'],
     'Currencies': ['','AUDCAD','AUDCHF','AUDJPY','AUDNZD','AUDUSD','CADCHF','CADJPY','EURAUD','EURCAD','EURCHF','EURGBP','EURJPY','EURNZD','EURUSD','GBPAUD','GBPCAD','GBPCHF','GBPJPY','GBPNZD','GBPUSD','NZDCAD','NZDCHF','NZDJPY','NZDUSD','USDCAD','USDCHF','USDJPY','USDMXN','USDSGD','USDTRY','USDTHB','USDZAR'],
     'Stocks': ['','APPLE','ABT','ADBE','ADI','AEMD','AIG','AMC','AMD','AMT','AMAZON','APT','ALBM','INTEL','COCA34','MICROSOFT','MSI','NETFLIX','NVIDIA','PYPL','RKLB','SSR','SQUARE','SQSP','TM','1TMUS','TRIP','TESLA','TSMC','TWTR','NQGB20','VISA','VZ','WFC','WALMARTCL','XOM'],
     'Indices': ['','US500','US30USD','DE30EUR','NAS100USD','UK100GBP','AUS200'],
  };
  
  // When an option is changed, search the above for matching choices
  $('#options').on('click', function() {
     // Set selected option as variable
     var selectValue = $(this).val();
  
     // Empty the target field
     $('#choices').empty();
     
     // For each chocie in the selected option
     for (i = 0; i < lookup[selectValue].length; i++) {
        // Output choice in the target field
        $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
     }
  });


  

  </script>
                                          
  
  
          
                        </ul>
          
        </div>

        

        <div>

          


          
          <style>
           
    
            .btn-open-popup {
                padding: 12px 24px;
                font-size: 18px;
                background-color: green;
                color: #fff;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
    
            .btn-open-popup:hover {
                background-color: #4caf50;
            }
    
            .overlay-container {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
                justify-content: center;
                align-items: center;
                opacity: 0;
                transition: opacity 0.3s ease;
            }
    
            .popup-box {
                background: #fff;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
                width:30%;
                text-align: center;
                opacity: 0;
                transform: scale(0.8);
                animation: fadeInUp 0.5s ease-out forwards;
            }
            
            

            @media screen and (max-width: 600px) {
              .popup-box {
                  width: 80%;
                  
              }
          }
          
          
            .form-container {
                display: flex;
                flex-direction: column;
            }
    
            .form-label {
                margin-bottom: 5px;
                font-size: 16px;
                color: #444;
                text-align: left;
            }
    
            .form-input {
                padding: 5px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 8px;
                font-size: 16px;
                width: 90%;
                box-sizing: border-box;
            }
    
            .btn-submit,
            .btn-close-popup {
                padding: 12px 24px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s ease, color 0.3s ease;
            }
    
            .btn-submit {
                background-color: green;
                color: #fff;
            }
    
            .btn-close-popup {
                margin-top: 12px;
                background-color: #e74c3c;
                color: #fff;
            }
    
            .btn-submit:hover,
            .btn-close-popup:hover {
                background-color: #4caf50;
            }
    
            /* Keyframes for fadeInUp animation */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
    
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            /* Animation for popup */
            .overlay-container.show {
                display: flex;
                opacity: 1;
            }

            /* Default Settings */
.row,
.column {
  box-sizing: border-box;
}
.row:before,
.row:after {
  content: '';
  display: table;
}
.row:after {
  clear: both;
}*/
.column {
  position: relative;
  display: block;
}

/* Mobile Devices Styling */
.column-1,
.column-2,
.column-3,
.column-4,
.column-5,
.column-6,
.column-7,
.column-8,
.column-9,
.column-10,
.column-11,
.column-12 {
  width: auto;
  float: none;
}
.column + .column {
  margin-left: 0;
}


.row {
  margin-bottom: 0;
}
.column {
  color: #fff;
  padding: 20px;
  min-height: 30px;
  margin-bottom: 10px;
}
.row:last-child .column:last-child {
  margin-bottom: 0;
}

/* Larger Screens Styling */
@media only screen and (min-width: 768px) {
  .column {
    position: relative;
    float: left;
    margin-bottom: 0;
  }
  .column + .column {
    margin-left: 1.6%;
  }
  .row {
    margin-bottom: 10px;  
  }
  .row .row:last-child {
    margin-bottom: 0;
  }
  .column-1 {
    width: 6.86666666667%;
  }
  .column-2 {
    width: 15.3333333333%;
  }
  .column-3 {
    width: 23.8%;
  }
  .column-4 {
    width: 32.2666666667%;
  }
  .column-5 {
    width: 40.7333333333%;
  }
  .column-6 {
    width: 49.2%;
  }
  .column-7 {
    width: 57.6666666667%;
  }
  .column-8 {
    width: 66.1333333333%;
  }
  .column-9 {
    width: 74.6%;
  }
  .column-10 {
    width: 83.0666666667%;
  }
  .column-11 {
    width: 91.5333333333%;
  }
  .column-12 {
    width: 100%;
  }
}

        </style>
   

        
        <style>
          .alert {
              padding: 15px;
              margin-bottom: 20px;
              margin-top: 40px;
              border-radius: 4px;
              font-size: 16px;
              font-weight: bold;
              width:100%;
          }
      
          .success {
              color: #155724;
              background-color: #d4edda;
              border: 1px solid #c3e6cb;
          }
      
          .warning {
              color: #856404;
              background-color: #fff3cd;
              border: 1px solid #ffeeba;
          }
      
          .error {
              color: #721c24;
              background-color: #f8d7da;
              border: 1px solid #f5c6cb;
          }
      
          .info {
              color: #0c5460;
              background-color: #d1ecf1;
              border: 1px solid #bee5eb;
          }
      
          .primary {
              color: #004085;
              background-color: #cce5ff;
              border: 1px solid #b8daff;
          }
      
          .secondary {
              color: #383d41;
              background-color: #e2e3e5;
              border: 1px solid #d6d8db;
          }
      
          .dark {
              color: #fff;
              background-color: #343a40;
              border: 1px solid #6c757d;
          }

          
      </style>
      
      <style>
        
#alertDiv {
  transition: opacity 1s;
}
      </style>
        
      
      
  
<script>
const target = document.getElementById("alertDiv");
window.onload = setInterval(() => target.style.opacity = '0', 4000)

</script>
      
    


<div id="orderOverlay" class="overlay-container" style="overflow-y:scroll; z-index:999999999; width:100%">
  <div class="popup-box" id="orderBox">
    <h2 class="modal-title">Order</h2>

    <form class="form-container" method="POST" >
      
      <!-- Hidden input to detect Buy/Sell -->
      <input type="hidden" name="order_type" id="order_type" value="">

      <label class="form-label">Volume:</label>
      <input type="number" name="volume" required step="any" placeholder="Amount to trade" class="form-input">

      <input type="hidden" name="email" value="spotwebdev.com@gmail.com">
      <input type="hidden" name="order_no" value="#310288">

      <label class="form-label">Type:</label>
      <select name="type" id="orderType" class="form-input" required>
        <option value="">---------</option>
        <option value="Market Execution">Market Execution</option>
        <option value="Pending Order">Pending Order</option>
      </select>

      <!-- Entry price only for pending orders -->
      <div id="entryPriceWrapper" style="display:none;">
        <label class="form-label">Entry Price:</label>
        <input type="number" name="entry_price" step="any" class="form-input" placeholder="Set entry price">
      </div>

        <label class="form-label">Symbol:</label>
        <select name="symbol" class="form-input">
          <!-- 🔷 Crypto -->
          <option value="BTCUSD">BTCUSD, Bitcoin vs US Dollar</option>
          <option value="ETHUSD">ETHUSD, Ethereum vs US Dollar</option>
          <option value="LTCUSD">LTCUSD, Litecoin vs US Dollar</option>
          <option value="XRPUSD">XRPUSD, Ripple vs US Dollar</option>
          <option value="USDTUSD">USDTUSD, Tether vs US Dollar</option>
          <option value="BNBUSD">BNBUSD, Binance Coin vs US Dollar</option>
          <option value="DOGEUSD">DOGEUSD, Dogecoin vs US Dollar</option>

          <!-- 💱 Major Forex Pairs -->
          <option value="EURUSD">EURUSD, Euro vs US Dollar</option>
          <option value="GBPUSD">GBPUSD, British Pound vs US Dollar</option>
          <option value="USDJPY">USDJPY, US Dollar vs Japanese Yen</option>
          <option value="USDCHF">USDCHF, US Dollar vs Swiss Franc</option>
          <option value="AUDUSD">AUDUSD, Australian Dollar vs US Dollar</option>
          <option value="USDCAD">USDCAD, US Dollar vs Canadian Dollar</option>
          <option value="NZDUSD">NZDUSD, New Zealand Dollar vs US Dollar</option>
          <option value="EURGBP">EURGBP, Euro vs British Pound</option>

          <!-- 🥇 Commodities -->
          <option value="XAUUSD">XAUUSD, Gold vs US Dollar</option>
          <option value="XAGUSD">XAGUSD, Silver vs US Dollar</option>
          <option value="WTIUSD">WTIUSD, Crude Oil WTI vs US Dollar</option>
          <option value="BRENTUSD">BRENTUSD, Brent Oil vs US Dollar</option>
          <option value="NGUSD">NGUSD, Natural Gas vs US Dollar</option>

          <!-- 📈 Indices -->
          <option value="US30">US30, Dow Jones Industrial Average</option>
          <option value="NAS100">NAS100, Nasdaq 100</option>
          <option value="SPX500">SPX500, S&P 500</option>
          <option value="GER40">GER40, DAX Germany 40</option>
          <option value="UK100">UK100, FTSE 100</option>
          <option value="JPN225">JPN225, Nikkei 225</option>
        </select>


      <label class="form-label">Stop Loss:</label>
      <input type="number" name="stop_loss" value="0.0000" step="any" class="form-input">

      <label class="form-label">Take Profit:</label>
      <input type="number" name="take_profit" value="0.0000" step="any" class="form-input">

      <label class="form-label">Leverage:</label>
      <select class="form-input" name="leverage">
        <option value="1:1">1:1</option>
        <option value="1:2">1:2</option>
        <option value="1:5">1:5</option>
        <option value="1:10">1:10</option>
        <option value="1:20">1:20</option>
        <option value="1:50">1:50</option>
      </select>

      <label class="form-label">Comment:</label>
      <input type="text" class="form-input" name="comment">

      <!-- Submit button will change text -->
      <input type="submit" id="submitBtn" class="btn btn-block btn-success btn-lg" value="">
    </form>

    <button class="btn-close-popup" onclick="toggleOrderPopup()">Close</button>
  </div>
</div>

    
            

             

            <script>
  // Open modal for Buy or Sell
  function openOrderModal(type) {
    const overlay = document.getElementById('orderOverlay');
    const orderTypeInput = document.getElementById('order_type');
    const submitBtn = document.getElementById('submitBtn');

    orderTypeInput.value = type; // set "buy" or "sell"

    // Change button text
    if (type === 'buy') {
      submitBtn.value = "Buy by Market";
    } else {
      submitBtn.value = "Sell by Market";
    }

    overlay.classList.add('show');
  }

  // Close modal
  function toggleOrderPopup() {
    const overlay = document.getElementById('orderOverlay');
    overlay.classList.remove('show');
  }

  // Show Entry Price only if Pending Order
  document.getElementById("orderType").addEventListener("change", function() {
    const entryWrapper = document.getElementById("entryPriceWrapper");
    if (this.value === "Pending Order") {
      entryWrapper.style.display = "block";
    } else {
      entryWrapper.style.display = "none";
    }
  });
</script>








          
                      <div class="kr-heeader-btn kr-heeader-btn-identity" style="">                         
                        <a style="text-decoration: none;" href="<?php echo $domain ?>app/id_verification/">
                          <input type="button"  class="btn btn-big btn-orange btn-autowidth" name="" value="<?php echo ($verification == 0) ?  'Verify your identiy' : 'Verified' ?>"></a>

                       </div>
                      <div class="kr-wallet-top">
                          <div class="kr-wallet-top-real">
                            <div>
                              <span>real account</span>
                              <span kr-balance-id="M1RsQUxpb2pmd095TnkwRXR6TUNWQT09" class="kr-wallet-top-ammount"><i>$<?php echo number_format($total_balance, 2) ?></i> </span>
                              <label>Estimate balance</label>
                            </div>
                            <svg class="lnr lnr-chevron-down"><use xlink:href="#lnr-chevron-down"></use></svg>
                          </div>
                          <section style="display: none;">
                            <div class="kr-wallet-top-resum">
                              <h3>real account</h3>
                              <ul>
                                <li kr-wallet-symbol="TRADING">
                                  <span>Trading Balance</span><div></div>
                                  <span><i>$<?php echo number_format($trading_balance, 2); ?></i> </span>
                                </li>

                                <li kr-wallet-symbol="BTC">
                                    <span>Bitcoin Balance</span><div></div>
                                    <span><i>$<?php echo number_format($bitcoin_balance, 2); ?></i> </span>
                                  </li>
                                  <li kr-wallet-symbol="ETH">
                                    <span>Ethereum Balance</span><div></div>
                                    <span><i>$<?php echo number_format($ethereum_balance, 2); ?></i> </span>
                                  </li>

                                  

                                  <li kr-wallet-symbol="DOGE">
                                    <span>Dogecoin Balance</span><div></div>
                                    <span><i>$<?php echo number_format($dogecoin_balance, 2); ?></i> </span>
                                  </li>

                                  <li kr-wallet-symbol="BINANCE COIN">
                                    <span>Binance Coin Balance</span><div></div>
                                    <span><i>$<?php echo number_format($binance_coin_balance, 2); ?></i> </span>
                                  </li>

                                  <li kr-wallet-symbol="ATOM">
                                    <span>Cosmos (ATOM) Balance</span><div></div>
                                    <span><i>$<?php echo number_format($cosmos_atom_balance, 2); ?></i> </span>
                                  </li>

                                  <li kr-wallet-symbol="STABLE COIN">
                                    <span>Stablecoin Balance</span><div></div>
                                    <span><i>$<?php echo number_format($stablecoin_balance, 2); ?></i> </span>
                                  </li>

                                  <li kr-wallet-symbol="USDT">
                                    <span>USDT Balance</span><div></div>
                                    <span><i>$<?php echo number_format($usdt_balance, 2); ?></i> </span>
                                  </li>

                                  <li kr-wallet-symbol="SOL">
                                    <span>Solana Balance</span><div></div>
                                    <span><i>$<?php echo number_format($solana_balance, 2); ?></i> </span>
                                  </li>

                                  <li kr-wallet-symbol="ADA">
                                    <span>Cardano (ADA) Balance</span><div></div>
                                    <span><i>$<?php echo number_format($cardano_ada_balance, 2); ?></i> </span>
                                  </li>

                              </ul>
                              
                            </div>
                            <div class="kr-wallet-top-change">
                              <h3>
                                <span>List accounts</span>
                                <a href="<?php echo $domain ?>app/deposit_history/" kr-balance-transaction-history="trshp" class="btn btn-autowidth btn-small btn-grey">Deposit History</a>
                              </h3>
                              <ul>
                                                  <li kr-wallet-change="M1RsQUxpb2pmd095TnkwRXR6TUNWQT09" class="kr-wallet-top-change-real">
                                  <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm7.189-17.98c.314-2.096-1.283-3.223-3.465-3.975l.708-2.84-1.728-.43-.69 2.765c-.454-.114-.92-.22-1.385-.326l.695-2.783L15.596 6l-.708 2.839c-.376-.086-.746-.17-1.104-.26l.002-.009-2.384-.595-.46 1.846s1.283.294 1.256.312c.7.175.826.638.805 1.006l-.806 3.235c.048.012.11.03.18.057l-.183-.045-1.13 4.532c-.086.212-.303.531-.793.41.018.025-1.256-.313-1.256-.313l-.858 1.978 2.25.561c.418.105.828.215 1.231.318l-.715 2.872 1.727.43.708-2.84c.472.127.93.245 1.378.357l-.706 2.828 1.728.43.715-2.866c2.948.558 5.164.333 6.097-2.333.752-2.146-.037-3.385-1.588-4.192 1.13-.26 1.98-1.003 2.207-2.538zm-3.95 5.538c-.533 2.147-4.148.986-5.32.695l.95-3.805c1.172.293 4.929.872 4.37 3.11zm.535-5.569c-.487 1.953-3.495.96-4.47.717l.86-3.45c.975.243 4.118.696 3.61 2.733z"></path></svg>                      <div>
                                      <span>real account</span>
                                                                <label kr-balance-id="M1RsQUxpb2pmd095TnkwRXR6TUNWQT09"><i>$<?php echo number_format($total_balance, 2) ?></i> </label>
                                                                                      <label class="kr-wallet-change-estimated">Estimate balance</label>
                                                            </div>
                                  </div>
                                  <section>
                                                                                                                                                <a href="<?php echo $domain ?>app/withdrawal/" class="btn btn-grey btn-autowidth btn-small">Withdraw</a>
                                                                                                                                        <a href="<?php echo $domain ?>app/deposit/" class="btn btn-green btn-autowidth btn-small">Credit</a>
                                  </section>
                                </li>
                                                </ul>
                            </div>
                          </section>
                      </div>
                             


          <div class="" style="display: flex;
height: 100%;
padding: 0px 15px;
align-items: center;
cursor: pointer;">
            <div onclick="toggle_div_fun('ggg');" class="" style="display: flex;
width: 35px;
min-width: 35px;
height: 35px;
min-height: 35px;
margin-right: 35px;
color: #fff;
border-radius: 100%;
background: #ef6c00;
  background-position-x: 0%;
  background-position-y: 0%;
  background-image: none;
  background-size: auto;
background-position: center center;
background-size: cover;
box-shadow: 0px 1px 2px 0px #000;
text-transform: uppercase;
align-items: center;
font-size: 17px;
font-weight: 100;
justify-content: center;">
              G                              <div>
                      </div>
                          </div>

                          
          </div>



          
          
        </div>
      </div>
    </header>


    <section class="kr-page-content" id="hide1">
      <nav class="kr-leftnav">
        <ul>
          <li type="module" kr-module="dashboard" kr-view="dashboard" class="kr-leftnav-select">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
              <path fill="#FFFFFF" d="M17.5 20h-16c-0.827 0-1.5-0.673-1.5-1.5v-16c0-0.827 0.673-1.5 1.5-1.5h16c0.827 0 1.5 0.673 1.5 1.5v16c0 0.827-0.673 1.5-1.5 1.5zM1.5 2c-0.276 0-0.5 0.224-0.5 0.5v16c0 0.276 0.224 0.5 0.5 0.5h16c0.276 0 0.5-0.224 0.5-0.5v-16c0-0.276-0.224-0.5-0.5-0.5h-16z"></path>
              <path fill="#FFFFFF" d="M6.5 17h-2c-0.276 0-0.5-0.224-0.5-0.5v-9c0-0.276 0.224-0.5 0.5-0.5h2c0.276 0 0.5 0.224 0.5 0.5v9c0 0.276-0.224 0.5-0.5 0.5zM5 16h1v-8h-1v8z"></path>
              <path fill="#FFFFFF" d="M10.5 17h-2c-0.276 0-0.5-0.224-0.5-0.5v-12c0-0.276 0.224-0.5 0.5-0.5h2c0.276 0 0.5 0.224 0.5 0.5v12c0 0.276-0.224 0.5-0.5 0.5zM9 16h1v-11h-1v11z"></path>
              <path fill="#FFFFFF" d="M14.5 17h-2c-0.276 0-0.5-0.224-0.5-0.5v-5c0-0.276 0.224-0.5 0.5-0.5h2c0.276 0 0.5 0.224 0.5 0.5v5c0 0.276-0.224 0.5-0.5 0.5zM13 16h1v-4h-1v4z"></path>
              </svg>
              
            <span>Board</span>
          </li>
                      <li type="side" kr-side="kr-orderbook" kr-side-part="kr-orderbook" onclick="toggle_div_fun('orderBook');">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512"> <g> <g> <path d="m307.7,212.5c-10.2,12.7-6.6,28.7 2.2,37.5l13.6,12.6c15.3,15.4 34.4,5.3 39.6,0l59.4-58.9c7-7.1 13.8-26 0-40l-13.6-12.6c-10-10.1-27.5-10.5-38.2-1.3l-80.9-80.1c6.4-8.1 11.2-25.3-1.6-38.2l-13.6-12.6c-10.4-10.5-29.2-10.5-39.6,0l-59.4,58.9c-12.9,13-9.4,30.5 0,40l13.6,12.6c13.3,13.5 29.6,7.4 37,2.2l14.9,14.6-230.1,228.5 50,50.5 230.9-229.2 15.8,15.5zm76.2-47.7c2.9-3 7.5-3 11.5,1.1l13.6,12.6c2.4,2.5 2.5,6.9 0,9.5l-59.4,58.9c-3.1,3.2-8.3,3.2-11.5,0l-13.6-12.6c-2-2-4-6.5 0-10.5l59.4-59zm-27.2-1.1l-35.2,35-80-79.7 35.4-35.8 79.8,80.5zm-141.4-49c-3.1,3.2-8.3,3.2-11.5,0l-13.6-12.6c-2-2-4-6.5 0-10.5l59.4-58.9c2.9-3 7.5-3 11.5,1.1l13.6,12.6c2.4,2.5 2.5,6.9 0,9.5l-59.4,58.8zm-153.2,282.1l-21.9-21.1 215.4-214.3 21.7,21.3-215.2,214.1z"></path> <path d="m457.2,424.2v-55.8h-188.7v55.8h-43.8v76.8h276.3v-76.8h-43.8zm-167.8-35.8h148v35.8h-148v-35.8zm191.8,91.5h-235.6v-34.7h235.6v34.7z"></path> </g> </g> </svg>
              <span>Order book</span>
            </li>
               
                              <li type="module" kr-modules-hleft="true" kr-module="blockfolio" kr-view="blockfolio" onclick="gimmeCats()">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                  <path fill="#FFFFFF" d="M10 12c-0.066 0-0.132-0.013-0.194-0.039l-9.5-4c-0.185-0.078-0.306-0.26-0.306-0.461s0.121-0.383 0.306-0.461l9.5-4c0.124-0.052 0.264-0.052 0.388 0l9.5 4c0.185 0.078 0.306 0.26 0.306 0.461s-0.121 0.383-0.306 0.461l-9.5 4c-0.062 0.026-0.128 0.039-0.194 0.039zM1.788 7.5l8.212 3.457 8.212-3.457-8.212-3.457-8.212 3.457z"></path>
                                  <path fill="#FFFFFF" d="M10 15c-0.066 0-0.132-0.013-0.194-0.039l-9.5-4c-0.254-0.107-0.374-0.4-0.267-0.655s0.4-0.374 0.655-0.267l9.306 3.918 9.306-3.918c0.254-0.107 0.548 0.012 0.655 0.267s-0.012 0.548-0.267 0.655l-9.5 4c-0.062 0.026-0.128 0.039-0.194 0.039z"></path>
                                  <path fill="#FFFFFF" d="M10 18c-0.066 0-0.132-0.013-0.194-0.039l-9.5-4c-0.254-0.107-0.374-0.4-0.267-0.655s0.4-0.374 0.655-0.267l9.306 3.918 9.306-3.918c0.254-0.107 0.548 0.012 0.655 0.267s-0.012 0.548-0.267 0.655l-9.5 4c-0.062 0.026-0.128 0.039-0.194 0.039z"></path>
                                  </svg>
            <span>Stocks</span>
          </li>

          <script>
            var gimmeCats = () => {
              window.location.href = "../stocks/";
            }
          </script>
                              <li type="side" kr-side="kr-calculator" kr-side-part="kr-calculator">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512"> <g> <path d="m480.1,11v79.5h-144.8c-4.9-28.3-28.6-49-56.4-49-28.6,0-51.5,21.4-56.4,49h-43.5c-4.7-28.3-27.7-49-56.4-49-28.6,0-51.5,21.4-56.4,49h-34.3v-79.5h-20.9v490h20.9v-79.5h34.3c4.9,28.3 28.6,49 56.4,49 28.6,0 51.5-21.4 56.4-49h28c4.9,28.3 28.6,49 56.4,49 27.7,0 50.5-21.4 56.1-49h160.8v79.5h20.7v-490h-20.9zm-201.2,53.4c20.9,0 36.5,16.3 36.5,38.1 0,20.7-16.7,38.1-36.5,38.1s-36.5-17.4-36.5-38.1 16.7-38.1 36.5-38.1zm-156.3,0c20.9,0 36.5,16.3 36.5,38.1 0,20.7-16.7,38.1-36.5,38.1-19.8,0-36.5-17.4-36.5-38.1s16.6-38.1 36.5-38.1zm-56.4,47.9c4.9,28.3 28.6,49 56.4,49 28.7,0 51.7-20.7 56.4-49h43.6c4.9,28.3 28.6,49 56.4,49 28.7,0 51.7-20.7 56.4-49h144.8v132.8h-28.1c-4.9-28.3-28.6-49-56.4-49-28.7,0-51.7,20.7-56.4,49h-66.5c-4.7-28.3-27.7-49-56.4-49s-51.7,20.7-56.4,49h-128.1v-132.8h34.3zm366,143.7c0,20.7-16.7,38.1-36.5,38.1s-36.5-17.4-36.5-38.1 16.7-38.1 36.5-38.1c20.9,0 36.5,17.4 36.5,38.1zm-179.3,0c0,20.7-16.7,38.1-36.5,38.1s-36.5-17.4-36.5-38.1 16.7-38.1 36.5-38.1 36.5,17.4 36.5,38.1zm-130.3,192.7c-19.8,0-36.5-17.4-36.5-38.1 0-20.7 16.7-38.1 36.5-38.1 20.9,0 36.5,17.4 36.5,38.1-0.1,20.7-16.7,38.1-36.5,38.1zm140.7,0c-19.8,0-36.5-17.4-36.5-38.1 0-20.7 16.7-38.1 36.5-38.1s36.5,17.4 36.5,38.1c0,20.7-16.7,38.1-36.5,38.1zm56.4-49c-4.7-28.3-27.7-49-56.4-49-28.6,0-51.5,21.4-56.4,49h-27.9c-4.7-28.3-27.7-49-56.4-49-28.6,0-51.5,21.4-56.4,49h-34.3v-132.8h128.1c4.9,28.3 28.6,49 56.4,49s51.5-20.7 56.4-49h66.5c4.9,28.3 28.6,49 56.4,49s51.5-20.7 56.4-49h28.1v132.8h-160.5z"></path> </g> </svg>
            <span>Calc.</span>
          </li>
          <li class="kr-watching-wdsf">
            <svg class="lnr lnr-eye"><use xlink:href="#lnr-eye"></use></svg>
            <span>Watching</span>
          </li>
                      <li type="side" kr-side="kr-infosside" kr-side-part="kr-newsside">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                          <path fill="#FFFFFF" d="M17.071 2.929c-1.889-1.889-4.4-2.929-7.071-2.929s-5.182 1.040-7.071 2.929c-1.889 1.889-2.929 4.4-2.929 7.071s1.040 5.182 2.929 7.071c1.889 1.889 4.4 2.929 7.071 2.929s5.182-1.040 7.071-2.929c1.889-1.889 2.929-4.4 2.929-7.071s-1.040-5.182-2.929-7.071zM18.397 6.761c-0.195-0.351-0.685-0.518-1.325-0.736-0.687-0.234-0.93-0.94-1.211-1.758-0.244-0.71-0.496-1.443-1.095-1.899 1.639 1.027 2.924 2.567 3.631 4.393zM15.591 10.191c0.076 0.677 0.154 1.378-0.687 2.322-0.227 0.255-0.36 0.61-0.501 0.986-0.326 0.871-0.634 1.694-1.946 1.706-0.037-0.044-0.141-0.21-0.234-0.733-0.085-0.482-0.134-1.106-0.187-1.765-0.080-1.012-0.171-2.16-0.421-3.112-0.32-1.217-0.857-1.936-1.641-2.198-0.342-0.114-0.692-0.17-1.068-0.17-0.278 0-0.53 0.030-0.752 0.056-0.173 0.020-0.337 0.040-0.475 0.040 0 0-0 0-0 0-0.234 0-0.499 0-0.826-0.748-0.469-1.075-0.123-2.798 1.254-3.707 0.755-0.498 1.276-0.711 1.742-0.711 0.372 0 0.773 0.129 1.342 0.433 0.672 0.358 1.199 0.404 1.583 0.404 0.152 0 0.29-0.008 0.423-0.016 0.112-0.007 0.217-0.013 0.315-0.013 0.22 0 0.398 0.029 0.607 0.171 0.385 0.263 0.585 0.844 0.796 1.458 0.32 0.932 0.683 1.988 1.835 2.38 0.155 0.053 0.421 0.143 0.61 0.222-0.163 0.168-0.435 0.411-0.702 0.649-0.172 0.154-0.367 0.328-0.583 0.525-0.624 0.569-0.55 1.235-0.484 1.822zM1.001 9.923c0.108 0.019 0.224 0.042 0.344 0.067 0.562 0.12 0.825 0.228 0.94 0.289-0.053 0.103-0.16 0.255-0.231 0.355-0.247 0.351-0.555 0.788-0.438 1.269 0.079 0.325 0.012 0.723-0.103 1.091-0.332-0.938-0.513-1.946-0.513-2.996 0-0.026 0.001-0.051 0.001-0.077zM10 19c-3.425 0-6.41-1.924-7.93-4.747 0.262-0.499 0.748-1.603 0.521-2.569 0.016-0.097 0.181-0.331 0.28-0.472 0.271-0.385 0.608-0.863 0.358-1.37-0.175-0.356-0.644-0.596-1.566-0.804-0.214-0.048-0.422-0.087-0.599-0.118 0.536-4.455 4.338-7.919 8.935-7.919 1.578 0 3.062 0.409 4.352 1.125-0.319-0.139-0.608-0.161-0.84-0.161-0.127 0-0.253 0.007-0.375 0.015-0.119 0.007-0.242 0.014-0.364 0.014-0.284 0-0.638-0.034-1.112-0.287-0.724-0.385-1.266-0.55-1.812-0.55-0.676 0-1.362 0.262-2.293 0.876-0.805 0.531-1.411 1.343-1.707 2.288-0.289 0.921-0.258 1.864 0.087 2.654 0.407 0.932 0.944 1.348 1.742 1.348 0 0 0 0 0 0 0.197 0 0.389-0.023 0.592-0.047 0.205-0.024 0.416-0.049 0.635-0.049 0.271 0 0.51 0.038 0.751 0.118 0.439 0.147 0.763 0.639 0.991 1.504s0.314 1.966 0.391 2.936c0.064 0.81 0.124 1.574 0.257 2.151 0.081 0.35 0.185 0.616 0.32 0.813 0.201 0.294 0.489 0.456 0.811 0.456 0.884 0 1.59-0.285 2.099-0.847 0.423-0.467 0.639-1.044 0.813-1.508 0.102-0.273 0.208-0.556 0.311-0.672 1.137-1.277 1.020-2.329 0.934-3.098-0.063-0.564-0.064-0.764 0.164-0.972 0.212-0.193 0.405-0.366 0.575-0.518 0.363-0.324 0.625-0.558 0.809-0.758 0.126-0.138 0.422-0.461 0.34-0.865-0.001-0.004-0.002-0.007-0.002-0.011 0.343 0.951 0.53 1.976 0.53 3.044 0 4.963-4.037 9-9 9z"></path>
                          </svg>
              <span>News</span>
            </li>
                                                </ul>
      </nav>

      <section class="kr-rankingside">
        <header>
          <div>
            <span>Leader board</span>
            <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
          </div>
        </header>
        <div class="spinner"></div>
      </section>

      <section id="orderBook" class="kr-orderbookside kr-orderbookside-show" style="display:none;">
        <header>
          <div>
            <span>Order book</span>
            <svg onclick="toggle_div_fun('orderBook');" class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
          </div>
        </header>
        




<ul class="kr-bookorder-native">
    
    
    
   
  </ul>
</section>
      <section class="kr-orderinfoside">
        <div class="spinner"></div>
      </section>

      <section class="kr-calculatorside">
        <header>
          <span class="kr-mono">Converter</span>
          <div onclick="toggleCalculator();">
            <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
          </div>
        </header>
        <section class="kr-calculatorside-lc ui-sortable">
                      <section class="kr-calculatorside-lcsc ui-sortable-handle" symbol="BTC">
              <div>
                                  <img src="../../static/account/new/assets/img/icons/crypto/BTC.svg" alt="">
                                <label>Bitcoin</label>
              </div>
              <div>
                <input type="text" name="" value="1">
                <span>BTC</span>
              </div>
            </section>
                      <section class="ui-sortable-handle" symbol="ETH">
              <div>
                                  <img src="../../static/account/new/assets/img/icons/crypto/ETH.svg" alt="">
                                <label>Etherum</label>
              </div>
              <div>
                <input type="text" name="" value="0">
                <span>ETH</span>
              </div>
            </section>
                      <section class="ui-sortable-handle" symbol="EUR">
              <div>
                                  <img src="../../static/account/new/assets/img/icons/crypto/EUR.svg" alt="">
                                <label>Euro</label>
              </div>
              <div>
                <input type="text" name="" value="0">
                <span>EUR</span>
              </div>
            </section>
                      <section class="ui-sortable-handle" symbol="USD">
              <div>
                                  <img src="../../static/account/new/assets/img/icons/crypto/USD.svg" alt="">
                                <label>Dollar US</label>
              </div>
              <div>
                <input type="text" name="" value="0">
                <span>USD</span>
              </div>
            </section>
                      <section class="ui-sortable-handle" symbol="LTC">
              <div>
                                  <img src="../../static/account/new/assets/img/icons/crypto/LTC.svg" alt="">
                                <label>Litecoin</label>
              </div>
              <div>
                <input type="text" name="" value="0">
                <span>LTC</span>
              </div>
            </section>
                  </section>
        <div>
          <div class="add-new-calculator"><span>+</span>
            <div class="kr-dash-pan-cry-select kr-dash-add-calculator" graph="new-graph" style="display: none;">
              <header>
                <input type="text" name="" graph="new-graph" placeholder="Search by name or symbol" value="">
              </header>
              <ul class="kr-dash-pan-cry-select-lst">
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="kr-newsside">
        <header>
          <div>
            <span>News</span>
            <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
          </div>
          <ul>
            <li kr-news-tab="News" kr-news-tab-n="News"><svg class="lnr lnr-earth"><use xlink:href="#lnr-earth"></use></svg></li>
            <li kr-news-tab="Social" kr-news-tab-n="Social">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
              <g id="XMLID_826_">
              	<path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
              		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
              		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
              		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
              		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
              		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
              		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
              		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
              		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
              		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
              		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
              		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
              </g>
              </svg>
            </li>
                      </ul>
        </header>
        <section class="kr-newsinfos-content">
          <div class="spinner"></div>
        </section>
      </section>
      <section class="kr-calendareventitem">
        <div class="spinner"></div>
      </section>

      
      <section class="kr-dashboard"><div class="kr-dashboard-loading" style="display: none;"><div><div class="sk-folding-cube sk-folding-cube-orange"> <div class="sk-cube1 sk-cube"></div> <div class="sk-cube2 sk-cube"></div> <div class="sk-cube4 sk-cube"></div> <div class="sk-cube3 sk-cube"></div> </div></div></div><div class="kr-dash-pannel kr-dash-chart-n" nchart="1_single">
      <div class="kr-dash-pan-cry kr-dash-pan-cry-vsbl kr-dash-pan-cry-selected" id="66c37660018b1" graph-id="WFBMdDlsQkg0VWY0R05UMmhIVE9jUT09" type-graph="candlestick" container="66c37660018b1" market="BINANCE" currency="BTC" symbol="ETH"><div class="kr-dash-pan-action kr-dash-pan-action-limit" thirdparty="binance" container="66c37660018b1" currency="BTC" symbol="ETH">
    
    
        <!--<div class="kr-dash-pan-action-amount">
    <div class="kr-dash-pan-action-amount-s">
      <span>Amount</span>
      <div>
        <span>ETH</span>
        <input type="number" min="0" step="0" placeholder="0" name="" value="0.">
      </div>
    </div>
    <ul>
      <li trade-act="minus">-</li>
      <li trade-act="plus">+</li>
    </ul>
    <div class="kr-dash-pan-action-amount-esyslc">
      <ul>
                  <li kr-premade-v="0.000">
            <span>0.000 ETH</span>
          </li>
                    <li kr-premade-v="0.000">
            <span>0.000 ETH</span>
          </li>
                    <li kr-premade-v="0.000">
            <span>0.000 ETH</span>
          </li>
                    <li kr-premade-v="0.000">
            <span>0.000 ETH</span>
          </li>
                    <li kr-premade-v="0.000">
            <span>0.000 ETH</span>
          </li>
                </ul>
    </div>
  </div>
  <div class="kr-dash-pan-action-qtd" kr-market-multticker="0.04412">
    <label>BTC quantity</label>
    <span>0.000000</span>
  </div>-->
  
  
  




<script>
    function toggle_div_fun(id) {
        var divelement = document.getElementById(id);
        if(divelement.style.display == 'none')
          divelement.style.display = 'block';
        else
          divelement.style.display = 'none';
      }
</script>



  <div class="kr-dash-pan-action-btn kr-dash-pan-action-btn-buy" onclick="openOrderModal('buy')">
    <img class="kr-dash-pan-action-btn-img-b" kr-cipc="66c37660018b1" src="../../static/account/new/app/modules/kr-dashboard/statics/img/icons/buy_market.svg" alt="">
    <span>Buy</span>


  


    <div id="sectiontohidebuy" class="kr-dash-pan-action-confirm" style="background: #1c2030; width: 261px;
  position: absolute;
  right:115px;
  bottom: 0;
  cursor: default;
  box-shadow: 0px 0px 12px 0px #0000004f;
  padding: 12px;
  display: none;
  z-index: 999;

">

    <header>
      <span>Confirmation</span>
      <div>
        <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
      </div>
    </header>
    <ul>
      <li kr-order-lmi-h="true">
        <span>Unit price</span>
        <span kr-confirm-v="unit_price" kr-confirm-v-up="0.04325"><i>0.043250</i> BTC</span>
      </li>
      <li kr-order-lmi-s="true" style="display:none;">
        <span>Purchase price</span>
        <span kr-confirm-v="purchase_price"><i>0.043250</i> BTC</span>
      </li>
      <li>
        <span>Investment</span>
        <span kr-confirm-v="amount"><i>0.000000</i> BTC</span>
      </li>
      <li kr-confirm-qntd="spvmx">
        <span>ETH Quantity</span>
        <span kr-confirm-v="investment"><i>0.000000</i></span>
      </li>
                <li>
          <span>Commission</span>
          <span kr-confirm-v="fees" kr-confirm-v-up="0.3"><i class="kr-confirm-sminfc">0.30% =</i> <i>0.000000</i> BTC</span>
        </li>
            </ul>
    <div>
      <span>Total</span>

                <span kr-confirm-v="total"><i>0.000000</i> BTC</span>
            </div>
    <a class="btn btn-green btn-kr-action-placetrade">Confirm buying</a>
  </div>




  </div>
  

  <div class="kr-dash-pan-action-btn kr-dash-pan-action-btn-sell" onclick="openOrderModal('sell')">
    <img class="kr-dash-pan-action-btn-img-s" kr-cipc="66c37660018b1" src="../../static/account/new/app/modules/kr-dashboard/statics/img/icons/sell_market.svg" alt="">
    <span>Sell</span>

    <div id="sectiontohidesell" class="kr-dash-pan-action-confirm" style="background: #1c2030; width: 261px;
  position: absolute;
  right:115px;
  bottom: 0;
  cursor: default;
  box-shadow: 0px 0px 12px 0px #0000004f;
  padding: 12px;
  display: none;
  z-index: 999;">
  
    <header>
      <span>Confirmation</span>
      <div>
        <svg class="lnr lnr-cross"><use xlink:href="#lnr-cross"></use></svg>
      </div>
    </header>
    <ul>
      <li kr-order-lmi-h="true">
        <span>Unit price</span>
        <span kr-confirm-v="unit_price" kr-confirm-v-up="0.04325"><i>0.043250</i> BTC</span>
      </li>
      <li kr-order-lmi-s="true" style="display:none;">
        <span>Purchase price</span>
        <span kr-confirm-v="purchase_price"><i>0.043250</i> BTC</span>
      </li>
      <li>
        <span>Investment</span>
        <span kr-confirm-v="amount"><i>0.000000</i> BTC</span>
      </li>
      <li kr-confirm-qntd="spvmx" style="display: none;">
        <span>ETH Quantity</span>
        <span kr-confirm-v="investment"><i>0.000000</i></span>
      </li>
                <li>
          <span>Commission</span>
          <span kr-confirm-v="fees" kr-confirm-v-up="0.3"><i class="kr-confirm-sminfc">0.30% =</i> <i>0.000000</i> BTC</span>
        </li>
            </ul>
    <div>
      <span>Total</span>

                <span kr-confirm-v="total"><i>0.000000</i> BTC</span>
            </div>
    <a class="btn btn-kr-action-placetrade btn-lightred">Confirm selling</a>
  </div>







     </div>
  
  
  <!--<div class="kr-dash-pan-action-limitprice kr-dash-pan-action-limitprice-selected">
    <div class="kr-dash-pan-action-limitprice-form" style="display:none;">
      <header>
        <span>Purchase at ...</span>
      </header>
      <div class="kr-dash-pan-action-limitprice-select">
        <div class="kr-dash-pan-action-limitprice-inpt" kr-lm-container="66c37660018b1">
          <span>Asset price</span>
          <input type="number" class="kr-limitprice-buy" placeholder="Market price" kr-limitprice-buy-ac="false" cc-price="0.04412" name="" value="">
        </div>
        <div class="kr-dash-pan-action-limitprice-pm" kr-lm-container="66c37660018b1" kr-lm-min="0" kr-lm-step="0">
          <div kr-lm="plus">+</div>
          <div kr-lm="minus">-</div>
        </div>
      </div>
      <div class="kr-dash-pan-action-limitprice-rst" onclick="_setOrderByMarket('66c37660018b1')">
        <span>Revert to Market Price</span>
      </div>
    </div>


    <div class="kr-dash-pan-action-limitprice-btn" onclick="_showLimitOrder('66c37660018b1')">
      <span>Purchase at ...</span>
    </div>
    <div class="kr-dash-pan-action-limitprice-infos" onclick="_showLimitOrder('66c37660018b1')" style="display:none;">
      <span>-</span>
      <div>
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="348.333px" height="348.334px" viewBox="0 0 348.333 348.334" style="enable-background:new 0 0 348.333 348.334;" xml:space="preserve"> <g> <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85 c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563 c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85 l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554 L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"></path> </g> </svg>
      </div>
    </div>
  </div>-->


</div>



<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="height:100%;width:60%">
  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:50%"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/?exchange=NASDAQ" rel="noopener nofollow" target="_blank"><span class="blue-text">AAPL chart by TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
  {
  "allow_symbol_change": true,
  "calendar": false,
  "details": false,
  "hide_side_toolbar": false,
  "hide_top_toolbar": false,
  "hide_legend": false,
  "hide_volume": false,
  "hotlist": true,
  "interval": "D",
  "locale": "en",
  "save_image": true,
  "style": "1",
  "symbol": "NASDAQ:AAPL",
  "theme": "dark",
  "timezone": "America/New_York",
  "backgroundColor": "#0F0F0F",
  "gridColor": "rgba(242, 242, 242, 0.06)",
  "watchlist": [
    "COINBASE:BTCUSD",
    "FX:USDJPY",
    "FX:EURUSD"
  ],
  "withdateranges": true,
  "compareSymbols": [],
  "studies": [],
  "autosize": true
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
    

</div>




<section class="kr-dash-orderlistpassed kr-dash-orderlistpassed-hide">
                <script type="text/javascript">
                                                    </script>

  <header>
    <div>
      <span>Order book<i class="kr-dash-orderlistpassed-pairname"></i></span>
    </div>
    <ul>
      
      <li class="kr-dash-orderlistpassed-opthide" onclick="_toggleOrderGraphList();"><svg class="lnr lnr-chevron-down"><use xlink:href="#lnr-chevron-down"></use></svg></li>
      <li class="kr-dash-orderlistpassed-optshow" onclick="_toggleOrderGraphList();"><svg class="lnr lnr-chevron-up"><use xlink:href="#lnr-chevron-up"></use></svg></li>
    </ul>
  </header>
   <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse:collapse;">
  <thead>
    <tr>
      <th>Order No</th>
      <th>Time</th>
      <th>Type</th>
      <th>Order Type</th>
      <th>Symbol</th>
      <th>Volume</th>
      <th>Stop Loss</th>
      <th>Take Profit</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody style="color:white !important">
    <?php


    $query = "SELECT id, user_id, order_no, order_type, type, symbol, volume, stop_loss, take_profit, leverage, comment, entry_price, status, created_at, updated_at 
                  FROM trading 
                  WHERE user_id = ? 
                  ORDER BY created_at DESC";

    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['order_no']) . "</td>";
        echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
        echo "<td>" . htmlspecialchars($row['type']) . "</td>";
        $orderType = htmlspecialchars($row['order_type']);

        if (strtolower($orderType) === "sell") {
          echo "<td style='color:red; '>$orderType</td>";
        } elseif (strtolower($orderType) === "buy") {
          echo "<td style='color:green;'>$orderType</td>";
        } else {
          echo "<td>$orderType</td>";
        }

        echo "<td>" . htmlspecialchars($row['symbol']) . "</td>";
        echo "<td>" . htmlspecialchars($row['volume']) . "</td>";
        echo "<td>" . htmlspecialchars($row['stop_loss']) . "</td>";
        echo "<td>" . htmlspecialchars($row['take_profit']) . "</td>";
        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='8'>No orders found.</td></tr>";
    }

    $stmt->close();



    ?>
  </tbody>
</table>


</section>
<style media="screen">
  section.kr-dashboard {
    padding-bottom: 30px;
  }
</style>
</section>

          </section><style>.tradingview-widget-copyright {font-size: 13px !important; line-height: 32px !important; text-align: center !important; vertical-align: middle !important; font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important; color: #B2B5BE !important;} .tradingview-widget-copyright .blue-text {color: #2962FF !important;} .tradingview-widget-copyright a {text-decoration: none !important; color: #B2B5BE !important;} .tradingview-widget-copyright a:visited {color: #B2B5BE !important;} .tradingview-widget-copyright a:hover .blue-text {color: #1E53E5 !important;} .tradingview-widget-copyright a:active .blue-text {color: #1848CC !important;} .tradingview-widget-copyright a:visited .blue-text {color: #2962FF !important;}</style>
    <footer>
      <div>
        
              </div>
      <div class="kr-footer-right-side">
        
      </div>
    </footer>

  
  
  
  

  <script data-pace-options="{ &quot;ajax&quot;: false }" src="{% static 'account/new/assets/bower/PACE/pace.js"></script> --&gt;


  <!-- Modules -->

      <script type="text/javascript">
      $(document).ready(function(){
        setTimeout(function(){
          $('.kr-top-graphlist-item').trigger('click');
        }, 3000);



        // Initial hide div.
        $('#sell2').hide();
        
        $('#sell').click(function() {
          // Then show div on click.
          $('#sell2').show();
        });
      });


    </script>

    
    
  
  <!-- Google Analytics -->
  
  
<iframe name="stripeXDM_default123721_provider" id="stripeXDM_default123721_provider" aria-hidden="true" src="" frameborder="0" style="position: absolute; top: -2000px; left: 0px;"></iframe><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><iframe src="url=&amp;muid=bbf6c1f7-5c5e-4ef4-87c8-b53a751442827f6f86&amp;sid=13d93aef-8cf3-46cb-a238-b2bd2a6cbf46dc0e58&amp;version=6&amp;preview=false&amp;" frameborder="0" allowtransparency="true" scrolling="no" tabindex="-1" aria-hidden="true" style="width: 1px !important; height: 1px !important; position: fixed !important; visibility: hidden !important; pointer-events: none !important;"></iframe><style>.tradingview-widget-copyright {font-size: 13px !important; line-height: 32px !important; text-align: center !important; vertical-align: middle !important; font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important; color: #B2B5BE !important;} .tradingview-widget-copyright .blue-text {color: #2962FF !important;} .tradingview-widget-copyright a {text-decoration: none !important; color: #B2B5BE !important;} .tradingview-widget-copyright a:visited {color: #B2B5BE !important;} .tradingview-widget-copyright a:hover .blue-text {color: #1E53E5 !important;} .tradingview-widget-copyright a:active .blue-text {color: #1848CC !important;} .tradingview-widget-copyright a:visited .blue-text {color: #2962FF !important;}</style>





<script src="../../static/account/new/assets/bower/jquery/dist/jquery.min.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/bower/jquery-ui/jquery-ui.min.js" charset="utf-8"></script>

<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>

<!-- Chart.JS -->
<script src="../../static/account/new/assets/bower/chart.js/dist/Chart.min.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/bower/jquery.number.js/jquery.number.min.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/bower/jquery.animateNumber.js/jquery.animateNumber.min.js" charset="utf-8"></script>



<!-- Technical indicators library -->
<script src="../../static/account/new/assets/node_modules/babel-polyfill/browser.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/bower/technicalindicators/dist/browser.js" charset="utf-8"></script>

<script src="../../static/account/new/assets/bower/sly/sly.min.js" charset="utf-8"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js" charset="utf-8"></script>

<!-- Intro -->
<link rel="stylesheet" href="../../static/account/new/assets/bower/tether-shepherd/dist/css/shepherd-theme-arrows.css">
<script src="../../static/account/new/assets/bower/tether-shepherd/dist/js/tether.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/bower/tether-shepherd/dist/js/shepherd.min.js" charset="utf-8"></script>

<!-- Stripe js -->


<script src="../../static/account/new/assets/bower/air-datepicker/dist/js/datepicker.min.js"></script>
<script src="../../static/account/new/assets/bower/air-datepicker/dist/js/i18n/datepicker.en.js"></script>

<!-- ionRangeSlider -->
<link rel="stylesheet" href="../../static/account/new/assets/bower/ion.rangeSlider/css/ion.rangeSlider.css">
<link rel="stylesheet" href="../../static/account/new/assets/bower/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css">
<script src="../../static/account/new/assets/bower/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

<script src="../../static/account/new/assets/bower/jquery-palette-color-picker/src/palette-color-picker.min.js"></script>

<!-- highlight -->
<script src="../../static/account/new/assets/bower/jsdiff/diff.min.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/bower/mark.js/dist/jquery.mark.min.js" charset="utf-8"></script>

<!-- Lightbox -->
<script src="../../static/account/new/assets/bower/lightbox2/dist/js/lightbox.min.js" charset="utf-8"></script>
<link rel="stylesheet" href="../../static/account/new/assets/bower/lightbox2/dist/css/lightbox.min.css">



<!-- PACE -->
<!-- <script data-pace-options='{ "ajax": false }' src="{% static 'account/new/assets/bower/PACE/pace.js"></script> -->


<!-- Modules -->

<script src="../../static/account/new/app/modules/kr-admin/statics/js/admin.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-blockfolio/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-calculator/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-chat/statics/js/bar.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-chat/statics/js/chat.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-chat/statics/js/popup.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-coin/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/chartTrade.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/echarts.min.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/export.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/indicator.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/leftinfos.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/manage.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/notification.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/order.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/range.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/toolbox.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-dashboard/statics/js/z_graph.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-identity/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-manager/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-marketanalysis/statics/js/heatmap.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-marketanalysis/statics/js/market.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-marketanalysis/statics/js/marketlist.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-marketanalysis/statics/js/topmovers.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-news/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-notifications/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-payment/statics/js/proofsending.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-search/statics/js/search.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-socket/statics/js/hitbtc.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-socket/statics/js/streamer-utilities.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-socket/statics/js/streamer.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-trade/statics/js/balance.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-trade/statics/js/blockonomics.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-trade/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-user/statics/js/charges.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-user/statics/js/creditcard.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-user/statics/js/script.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-user/statics/js/welcome.js" charset="utf-8"></script>

<script src="../../static/account/new/app/modules/kr-watchinglist/statics/js/script.js" charset="utf-8"></script>



<script src="../../static/account/new/assets/js/notifications.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/js/intro.js" charset="utf-8"></script>
<script src="../../static/account/new/assets/js/highlight.js" charset="utf-8"></script>



    
    
    


<div state="voice" class="placeholder-icon" id="tts-placeholder-icon" title="Click to show TTS button" style="background-image: url(&quot;chrome-extension://cpnomhnclohkhnikegipapofcjihldck/data/content_script/icons/voice.png&quot;);"><canvas width="36" height="36" class="loading-circle" id="text-to-speech-loader" style="display: none;"></canvas></div><iframe id="chat-application-iframe" title="Smartsupp" aria-hidden="true" style="display: block; position: fixed; top: 0px; left: 0px; width: 1px; height: 1px; opacity: 0; border: none; z-index: -1; pointer-events: none;"></iframe><div id="smartsupp-widget-container"><!----><!----><!----> <!----><!----> <!----><div data-testid="widgetButtonFrame" style="border-radius: 9999px; box-shadow: rgba(0, 0, 0, 0.06) 0px 1px 6px, rgba(0, 0, 0, 0.12) 0px 2px 32px; color-scheme: normal; height: 56px; position: fixed; bottom: 24px; left: initial; right: 12px; z-index: 10000000; width: 56px;"><iframe allowfullscreen="" scrolling="no" id="widgetButtonFrame" title="Smartsupp widget button" style="position: absolute; width: 100%; height: 100%; border: none; display: block; text-align: left; margin: 0px; padding: 0px; top: 0px; left: 0px; opacity: 1;"></iframe><!----></div><!----> <!----><!----> <!----><!----><!----></div></body></html>