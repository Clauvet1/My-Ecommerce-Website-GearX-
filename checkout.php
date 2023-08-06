<?php include'includes/header.php';
if(!isset($_SESSION['userName'])){
  header("Location: signIn.php?You most logIn before accessing the site");
}else{ ?>

<body>
    <div class="main">
        <div class="shop_header">
            <div class="asside1">
                <div class="box_orange text-center "><p>Experience satisfaction</p></div>
                <div class="box_green text-center text-white"><p>Welcome to GearX</p></div>
              </div>

        <?php include'includes/navbar.php' ?>
        
          <div class="cc">
          <div class="row">
            <div class="col-lg-9">
            <h1 class="H">CHECKOUT</h1>
          <p class="text-white mx-5 " id="cc">HOME<img class="mx-3"  src="images/right-arrow.png" alt=""> <span class="text-danger mx-1">CHECKOUT</span></p>
         </div>
         <div class="col-lg-2 bg-white text-center rounded-5 pt-5">
          <?php 
          $count = 0;
          if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
          }
          ?>
          <a href="cart.php" class="btn btn-outline-success">My Cart <span class="text-info h5">(<?= $count?>)</span></a>
         </div>
            </div>
          </div>
            </div>
            <div class="box_shop text-center mt-5">
                <h1>CheckOut</h1>
                <p>Shopping cart Checkout Order complete</p>
                <img src="images/5093064.png" width="40px" alt="">
            </div>
            <div class="box_checkout mt-5">
                <form action="includes/address.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="italics">Billing Address <img width="22px" src="images/175-1758167_orange-down-arrow-png-transparent-png.png" alt=""> </h1>
                       <div>
                        <label for="Country">Country</label>
                        <select class="form-select" id="country" name="country">
                            <option>select country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Aland Islands</option>
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
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
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
                            <option value="CD">Congo, Democratic Republic of the Congo</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
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
                            <option value="HM">Heard Island and Mcdonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
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
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="XK">Kosovo</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
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
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
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
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
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
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthelemy</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="CS">Serbia and Montenegro</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
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
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.s.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                       </div>
                       <div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" id="first_name">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" id="last_name">
                            </div>
                        </div>
                       </div>
                       <div>
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" id="company_name">
                       </div>
                       <div>
                        <label for="">Address</label>
                        <input type="text" name="address" class="mb-2" placeholder="Street Address" id="address">
                        <input type="text" name="address" placeholder="..." id="address">
                       </div>
                       <div>
                        <label for="">Town/city</label>
                        <input type="text" name="town" id="town">
                       </div>
                       <div>
                        <label for="">Postcode/Zipcode</label>
                        <input type="text" name="post_code" id="post_code">
                       </div>
                       <div>
                        <label for="">Email Address</label>
                        <input type="text" name="email_address" id="email_address">
                       </div>
                       <div>
                        <label for="">Phone</label>
                        <input type="number" name="phone" id="phone">
                       </div>
                        
                    </div>
                    <div class="col-lg-6"> 
                        <h1 class="italics">Shipping Address<img width="22px" src="images/175-1758167_orange-down-arrow-png-transparent-png.png" alt=""> </h1>
                        <div>
                            <p class="text-secondary">Ship to a different address</p>
                        </div>
                        <div>
                            <label for="">Order Address</label>
                            <textarea class="p-2" name="order_address" id="order_address" cols="60" placeholder="Write a brief description of your order address" rows="5"></textarea>
                        </div>
                        <!-- <button class="mt-3 px-5 border-danger bg-white p-2" type="submit">SAVE ADDREESS</button> -->
                    </div>
                </div>
                <h4 class="my-5 italics">Your Orders<img width="22px" src="images/175-1758167_orange-down-arrow-png-transparent-png.png" alt=""> </h4>
                <div class="box_checkout2">
                  <div class="row">
                    <div class="col-lg-4 p-4 mx-3" id="f">
                      <div class="row">
                        <div class="col-lg-6">
                          <h3 class="italics mb-4 text-danger">Order</h3>
                          <h5>Products</h5>
                          <p id="display_item1"></p>
                          <p id="display_item2"></p>
                          <p id="display_item3"></p>
                          <p id="display_item4"></p>
                          <h5>Cart totals</h5>
                        </div>
                        <div class="col-lg-6">
                          <h4 class="mb-4">''</h4>
                          <h5>Total</h5>
                          <p id="display_item1_total"></p>
                          <p id="display_item2_total"></p>
                          <p id="display_item3_total"></p>
                          <p id="display_item4_total"></p>
                          <p id="cart_total"></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 p-4" id="f">
                      <h3 class="italics mb-4 text-danger">Shipping</h3>
                    </div>
                    <div class="col-lg-3" >
                      <h4 class="b">Change Payment <img class=" mx-3" src="images/right-arrow.png" alt=""></h4>
                      <h4 class="b">Paypal</h4>
                    </div>
                  </div>
                 <div class="row" id="place_order">
                  <div class="col-lg-9 mt-2" id="r">
                    <input type="checkbox" name="terms" id="terms">
                    <p>I have read and accepted the <span>Terms & Conditions</span></p>
                  </div>
                  <div class="col-lg-3">
                    <button class="p-2 px-5 rounded-1 bg-danger border-danger text-white" name="submit" type="submit">PLACE ORDER</button>
                  </div>
                 </div>
                </div>
              </form>
            </div>

            <?php include'includes/footer.php' ?>

    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } ?>