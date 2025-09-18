<?php  include("../server/connection.php");  ?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<meta name="mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, user-scalable=no">

<meta property="og:description"
    content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
<meta property="”og:image”" content="../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png”">
<meta property="”og:title”" content="cityindex-live">

<link rel="manifest" href="../static/globalcityindex-live/assets/images/pwa/manifest.json">
<link rel="shortcut icon" href="./static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- System properties -->

    <meta name="page-name" content="login">
    <meta name="user-id" content="">
    <meta http-equiv="refresh" content="7200">
    <title>Register | Cityindex-live</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="login.php">
    <link rel="alternate" hreflang="en" href="login.php">

    <meta name="description"
        content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
    <meta property="og:title" content="Log In | cityindex-live">
    <meta property="og:url" content="/login">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="cityindex-live">

    <meta property="og:description"
        content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@cityindex-live">
    <meta name="twitter:title" content="Log In | cityindex-live">

    <meta name="twitter:description"
        content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
    <!-- State -->
    <script type="text/javascript">


    </script>


    <link rel="icon" type="image/png" sizes="16x16"
        href="./static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">
    <link rel="manifest" href="./static/globalcityindex-live/Content/ico/manifest.json">
    <meta name="facebook-domain-verification" content="yr09tc1ug4r9h5lcpyh59lg5kawf4k" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="./static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <link rel="stylesheet" href="../static/globalcityindex-live/assets/assets/css/app2d1f.css">
    <link rel="stylesheet" href="../static/globalcityindex-live/assets/assets/sass/app2a6f.css">
</head>

<body>

    <div id="app" data-page-name="login" v-bind:class="{ 'overflow-hidden h-screen': ! $store.state.scroll }">
        <div class="layout-minimal">
            <a href="index.php">

            </a>

            <div class="layout-minimal-inner">
                <div class="title-wrapper">
                    <h2>
                        Register Account
                    </h2>
                </div>
                <form method="POST" id="form" class="login-form">

                    <input type="hidden" name="url" id="url">
                    <div class="form-group">
                        <v-label label-for="email">First Name</v-label>

                        <input type="text" name="first_name" maxlength="50" required
                            placeholder="Please enter your first name" value="" name="first_name" class="custom-input"
                            id="first_name">
                        <span style="color: red; list-style:none;  "></span>
                    </div>

                    <div class="form-group">
                        <v-label label-for="email">Last Name</v-label>

                        <input type="text" name="last_name" maxlength="50" required
                            placeholder="Please enter your last name" value="" name="last_name" class="custom-input"
                            id="last_name">
                        <span style="color: red; list-style:none;  "></span>
                    </div>

                    <div class="form-group">
                        <v-label label-for="email">Email</v-label>

                        <input type="email" name="email" maxlength="60" autofocus required
                            placeholder="Please enter your email address" value="" name="email" class="custom-input"
                            id="email">
                        <span style="color: red; list-style:none;  "></span>
                    </div>


                    <div class="form-group">
                        <v-label label-for="email">Phone</v-label>

                        <input type="text" name="phone" maxlength="30" required="required"
                            placeholder="Please enter your phone number" value="" name="phone" class="custom-input"
                            id="email">
                        <span style="color: red; list-style:none;  "></span>
                    </div>



                    <div class="form-group">
                        <v-label label-for="email">Gender</v-label>

                        <select name="gender" required="required" placeholder="Please enter your gender" value=""
                            name="gender" class="custom-input" id="email">
                            <option value="-Select Gender-">-Select Gender-</option>

                            <option value="Male">Male</option>

                            <option value="Female">Female</option>

                        </select>
                        <span style="color: red; list-style:none;  "></span>
                    </div>


                    <div class="form-group">
                        <v-label label-for="email">Country</v-label>

                        <select name="country" required="required" placeholder="Please enter your country" value=""
                            name="country" class="custom-input" id="email">
                            <option value="" selected>---------</option>

                            <option value="AF">Afghanistan</option>

                            <option value="AX">Åland Islands</option>

                            <option value="AL">Albania</option>

                            <option value="DZ">Algeria</option>

                            <option value="AS">American Samoa</option>

                            <option value="AD">Andorra</option>

                            <option value="AO">Angola</option>

                            <option value="AI">Anguilla</option>

                            <option value="AQ">Antarctica</option>

                            <option value="AG">Antigua and Barbuda</option>

                            <option value="AR">Argentina</option>

                            <option value="AM">Armenia</option>

                            <option value="AW">Aruba</option>

                            <option value="AU">Australia</option>

                            <option value="AT">Austria</option>

                            <option value="AZ">Azerbaijan</option>

                            <option value="BS">Bahamas</option>

                            <option value="BH">Bahrain</option>

                            <option value="BD">Bangladesh</option>

                            <option value="BB">Barbados</option>

                            <option value="BY">Belarus</option>

                            <option value="BE">Belgium</option>

                            <option value="BZ">Belize</option>

                            <option value="BJ">Benin</option>

                            <option value="BM">Bermuda</option>

                            <option value="BT">Bhutan</option>

                            <option value="BO">Bolivia</option>

                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>

                            <option value="BA">Bosnia and Herzegovina</option>

                            <option value="BW">Botswana</option>

                            <option value="BV">Bouvet Island</option>

                            <option value="BR">Brazil</option>

                            <option value="IO">British Indian Ocean Territory</option>

                            <option value="BN">Brunei</option>

                            <option value="BG">Bulgaria</option>

                            <option value="BF">Burkina Faso</option>

                            <option value="BI">Burundi</option>

                            <option value="CV">Cabo Verde</option>

                            <option value="KH">Cambodia</option>

                            <option value="CM">Cameroon</option>

                            <option value="CA">Canada</option>

                            <option value="KY">Cayman Islands</option>

                            <option value="CF">Central African Republic</option>

                            <option value="TD">Chad</option>

                            <option value="CL">Chile</option>

                            <option value="CN">China</option>

                            <option value="CX">Christmas Island</option>

                            <option value="CC">Cocos (Keeling) Islands</option>

                            <option value="CO">Colombia</option>

                            <option value="KM">Comoros</option>

                            <option value="CG">Congo</option>

                            <option value="CD">Congo (the Democratic Republic of the)</option>

                            <option value="CK">Cook Islands</option>

                            <option value="CR">Costa Rica</option>

                            <option value="CI">Côte d&#x27;Ivoire</option>

                            <option value="HR">Croatia</option>

                            <option value="CU">Cuba</option>

                            <option value="CW">Curaçao</option>

                            <option value="CY">Cyprus</option>

                            <option value="CZ">Czechia</option>

                            <option value="DK">Denmark</option>

                            <option value="DJ">Djibouti</option>

                            <option value="DM">Dominica</option>

                            <option value="DO">Dominican Republic</option>

                            <option value="EC">Ecuador</option>

                            <option value="EG">Egypt</option>

                            <option value="SV">El Salvador</option>

                            <option value="GQ">Equatorial Guinea</option>

                            <option value="ER">Eritrea</option>

                            <option value="EE">Estonia</option>

                            <option value="SZ">Eswatini</option>

                            <option value="ET">Ethiopia</option>

                            <option value="FK">Falkland Islands (Malvinas)</option>

                            <option value="FO">Faroe Islands</option>

                            <option value="FJ">Fiji</option>

                            <option value="FI">Finland</option>

                            <option value="FR">France</option>

                            <option value="GF">French Guiana</option>

                            <option value="PF">French Polynesia</option>

                            <option value="TF">French Southern Territories</option>

                            <option value="GA">Gabon</option>

                            <option value="GM">Gambia</option>

                            <option value="GE">Georgia</option>

                            <option value="DE">Germany</option>

                            <option value="GH">Ghana</option>

                            <option value="GI">Gibraltar</option>

                            <option value="GR">Greece</option>

                            <option value="GL">Greenland</option>

                            <option value="GD">Grenada</option>

                            <option value="GP">Guadeloupe</option>

                            <option value="GU">Guam</option>

                            <option value="GT">Guatemala</option>

                            <option value="GG">Guernsey</option>

                            <option value="GN">Guinea</option>

                            <option value="GW">Guinea-Bissau</option>

                            <option value="GY">Guyana</option>

                            <option value="HT">Haiti</option>

                            <option value="HM">Heard Island and McDonald Islands</option>

                            <option value="VA">Holy See</option>

                            <option value="HN">Honduras</option>

                            <option value="HK">Hong Kong</option>

                            <option value="HU">Hungary</option>

                            <option value="IS">Iceland</option>

                            <option value="IN">India</option>

                            <option value="ID">Indonesia</option>

                            <option value="IR">Iran</option>

                            <option value="IQ">Iraq</option>

                            <option value="IE">Ireland</option>

                            <option value="IM">Isle of Man</option>

                            <option value="IL">Israel</option>

                            <option value="IT">Italy</option>

                            <option value="JM">Jamaica</option>

                            <option value="JP">Japan</option>

                            <option value="JE">Jersey</option>

                            <option value="JO">Jordan</option>

                            <option value="KZ">Kazakhstan</option>

                            <option value="KE">Kenya</option>

                            <option value="KI">Kiribati</option>

                            <option value="KW">Kuwait</option>

                            <option value="KG">Kyrgyzstan</option>

                            <option value="LA">Laos</option>

                            <option value="LV">Latvia</option>

                            <option value="LB">Lebanon</option>

                            <option value="LS">Lesotho</option>

                            <option value="LR">Liberia</option>

                            <option value="LY">Libya</option>

                            <option value="LI">Liechtenstein</option>

                            <option value="LT">Lithuania</option>

                            <option value="LU">Luxembourg</option>

                            <option value="MO">Macao</option>

                            <option value="MG">Madagascar</option>

                            <option value="MW">Malawi</option>

                            <option value="MY">Malaysia</option>

                            <option value="MV">Maldives</option>

                            <option value="ML">Mali</option>

                            <option value="MT">Malta</option>

                            <option value="MH">Marshall Islands</option>

                            <option value="MQ">Martinique</option>

                            <option value="MR">Mauritania</option>

                            <option value="MU">Mauritius</option>

                            <option value="YT">Mayotte</option>

                            <option value="MX">Mexico</option>

                            <option value="FM">Micronesia (Federated States of)</option>

                            <option value="MD">Moldova</option>

                            <option value="MC">Monaco</option>

                            <option value="MN">Mongolia</option>

                            <option value="ME">Montenegro</option>

                            <option value="MS">Montserrat</option>

                            <option value="MA">Morocco</option>

                            <option value="MZ">Mozambique</option>

                            <option value="MM">Myanmar</option>

                            <option value="NA">Namibia</option>

                            <option value="NR">Nauru</option>

                            <option value="NP">Nepal</option>

                            <option value="NL">Netherlands</option>

                            <option value="NC">New Caledonia</option>

                            <option value="NZ">New Zealand</option>

                            <option value="NI">Nicaragua</option>

                            <option value="NE">Niger</option>

                            <option value="NG">Nigeria</option>

                            <option value="NU">Niue</option>

                            <option value="NF">Norfolk Island</option>

                            <option value="KP">North Korea</option>

                            <option value="MK">North Macedonia</option>

                            <option value="MP">Northern Mariana Islands</option>

                            <option value="NO">Norway</option>

                            <option value="OM">Oman</option>

                            <option value="PK">Pakistan</option>

                            <option value="PW">Palau</option>

                            <option value="PS">Palestine, State of</option>

                            <option value="PA">Panama</option>

                            <option value="PG">Papua New Guinea</option>

                            <option value="PY">Paraguay</option>

                            <option value="PE">Peru</option>

                            <option value="PH">Philippines</option>

                            <option value="PN">Pitcairn</option>

                            <option value="PL">Poland</option>

                            <option value="PT">Portugal</option>

                            <option value="PR">Puerto Rico</option>

                            <option value="QA">Qatar</option>

                            <option value="RE">Réunion</option>

                            <option value="RO">Romania</option>

                            <option value="RU">Russia</option>

                            <option value="RW">Rwanda</option>

                            <option value="BL">Saint Barthélemy</option>

                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>

                            <option value="KN">Saint Kitts and Nevis</option>

                            <option value="LC">Saint Lucia</option>

                            <option value="MF">Saint Martin (French part)</option>

                            <option value="PM">Saint Pierre and Miquelon</option>

                            <option value="VC">Saint Vincent and the Grenadines</option>

                            <option value="WS">Samoa</option>

                            <option value="SM">San Marino</option>

                            <option value="ST">Sao Tome and Principe</option>

                            <option value="SA">Saudi Arabia</option>

                            <option value="SN">Senegal</option>

                            <option value="RS">Serbia</option>

                            <option value="SC">Seychelles</option>

                            <option value="SL">Sierra Leone</option>

                            <option value="SG">Singapore</option>

                            <option value="SX">Sint Maarten (Dutch part)</option>

                            <option value="SK">Slovakia</option>

                            <option value="SI">Slovenia</option>

                            <option value="SB">Solomon Islands</option>

                            <option value="SO">Somalia</option>

                            <option value="ZA">South Africa</option>

                            <option value="GS">South Georgia and the South Sandwich Islands</option>

                            <option value="KR">South Korea</option>

                            <option value="SS">South Sudan</option>

                            <option value="ES">Spain</option>

                            <option value="LK">Sri Lanka</option>

                            <option value="SD">Sudan</option>

                            <option value="SR">Suriname</option>

                            <option value="SJ">Svalbard and Jan Mayen</option>

                            <option value="SE">Sweden</option>

                            <option value="CH">Switzerland</option>

                            <option value="SY">Syria</option>

                            <option value="TW">Taiwan</option>

                            <option value="TJ">Tajikistan</option>

                            <option value="TZ">Tanzania</option>

                            <option value="TH">Thailand</option>

                            <option value="TL">Timor-Leste</option>

                            <option value="TG">Togo</option>

                            <option value="TK">Tokelau</option>

                            <option value="TO">Tonga</option>

                            <option value="TT">Trinidad and Tobago</option>

                            <option value="TN">Tunisia</option>

                            <option value="TR">Turkey</option>

                            <option value="TM">Turkmenistan</option>

                            <option value="TC">Turks and Caicos Islands</option>

                            <option value="TV">Tuvalu</option>

                            <option value="UG">Uganda</option>

                            <option value="UA">Ukraine</option>

                            <option value="AE">United Arab Emirates</option>

                            <option value="GB">United Kingdom</option>

                            <option value="UM">United States Minor Outlying Islands</option>

                            <option value="US">United States of America</option>

                            <option value="UY">Uruguay</option>

                            <option value="UZ">Uzbekistan</option>

                            <option value="VU">Vanuatu</option>

                            <option value="VE">Venezuela</option>

                            <option value="VN">Vietnam</option>

                            <option value="VG">Virgin Islands (British)</option>

                            <option value="VI">Virgin Islands (U.S.)</option>

                            <option value="WF">Wallis and Futuna</option>

                            <option value="EH">Western Sahara</option>

                            <option value="YE">Yemen</option>

                            <option value="ZM">Zambia</option>

                            <option value="ZW">Zimbabwe</option>

                        </select>
                        <span style="color: red; list-style:none;  "></span>
                    </div>






                    <div class="form-group">
                        <v-label label-for="password">Password</v-label>
                        <input type="password" name="password1" autocomplete="new-password" required
                            placeholder="Please enter your password" value="" name="password1" class="custom-input"
                            id="password">
                        <span style="color: red; list-style:none;  "></span>
                    </div>


                    <div class="form-group">
                        <v-label label-for="password">Confirm Password</v-label>
                        <input type="password" name="password2" autocomplete="new-password" required
                            placeholder="Please confirm your password" value="" name="password2" class="custom-input"
                            id="password">
                        <span style="color: red; list-style:none;  "></span>
                    </div>

                    <div class="form-group">
                        <v-label label-for="email">Security Question</v-label>

                        <select name="security_question" required="required" placeholder="" value=""
                            name="security_question" class="custom-input" id="email">
                            <option value="What is your pet name?">What is your pet name?</option>

                            <option value="What is your hobby?">What is your hobby?</option>

                            <option value="What is the name of your last child?">What is the name of your last child?
                            </option>

                        </select>
                        <span style="color: red; list-style:none;  "></span>
                    </div>


                    <div class="form-group">
                        <v-label label-for="email">Security Answer</v-label>

                        <input type="text" name="security_answer" maxlength="50" required="required"
                            placeholder="Please enter security answer" value="" name="security_answer"
                            class="custom-input" id="email">
                        <span style="color: red; list-style:none;  "></span>
                    </div>

                    <input type="hidden" name="account_id" maxlength="50" readonly="readonly" value="W315335421"
                        class="form-control" name="account_id" id="id_account_id">







                    <div class="submit-btn-wrapper">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>


                <script>
                    let form = document.getElementById('form');
                    document.getElementById('url').value = window.location.href;
                    form.addEventListener('submit', (event) => {
                        event.preventDefault();
                        let formData = new FormData(form);

                        fetch('<?php echo $domain; ?>server/api/users/register.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok: ' + response.statusText);
                                }
                                return response.json(); // Or .json() if your API sends JSON
                            })
                            .then(data => {

                                console.log(data);
                                if (data.status == 'success') {

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Register Successful',
                                        text: 'Welcome back!',
                                        width: '300px',
                                        height: '300px'
                                    });

                                    setTimeout(() => {

                                        location.href = '<?php echo $domain; ?>auth/login.php';
                                    }, 3000);

                                }

                                if (data.status == 'error') {

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Login Failed',
                                        text: data.message,
                                        width: '300px',
                                        height: '300px'

                                    });


                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Login Failed',
                                    text: "An error occurred while processing your request.",
                                    width: '300px',
                                    height: '300px'
                                });
                            });
                    });
                </script>









                <div class="register-btn-wrapper">
                    <p>
                        Have account?
                    </p>
                    <a href="login.php">
                        Login
                    </a>
                </div>
            </div>
        </div>




    </div>

    <!-- Scripts -->
    <div id="scripts">
        <script src="./static/globalcityindex-live/assets/assets/js/manifestf3c5.js" defer></script>
        <script src="./static/globalcityindex-live/assets/assets/js/vendor313f.js" defer></script>
        <script src="./static/globalcityindex-live/assets/assets/js/appc73e.js" defer></script>
    </div>



</body>

</html>