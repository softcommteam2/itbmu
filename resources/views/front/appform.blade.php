@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="container hoc clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content">
            <!-- ################################################################################################ -->
            <h1 align="center">Application Form For Admission </h1>
            <p class="nospace">
                <form action="#" method="post" enctype="multipart/form-data">
                    <table>
                        <tr height="50" valign="middle">
                            <td width="300px"><label for="name">Name <span>*</span></label></td>
                            <td width="500px"><input type="text" name="name" id="name" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td width="300px"><label for="class">Class <span>*</span></label></td>
                            <td width="500px"><input type="text" name="class" id="class" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <!--<tr height="50" valign="middle">
                            <td><label for="name">Photo <span>*</span></label></td>
                            <td>
                            <div style="width:110px; height:130px;"><img id="blah" src="#" alt="your image" style="width:110px; height:130px;"/></div><br><input type="file" name="photo" id="photo"  size="30" required onchange="readURL(this);">
                            </td>
                        </tr>-->
                        <tr height="50" valign="middle">
                            <td><label for="gender">Gender <span>*</span></label></td>
                            <td><input type="radio" name="gender" id="gender" value="male">Male &nbsp; &nbsp; <input type="radio" name="gender" id="gender" value="femail">Female</td>
                        </tr>
                        <tr height="50">
                            <td><label for="nrc">National Registration or Passport No. <span>*</span></label></td>
                            <td><input type="text" name="nrc" id="nrc" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50">
                            <td><label for="dob">Date of birth/ (Visa for Monks) <span>*</span></label></td>
                            <td><input type="date" id="dob" name="dob" style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="pob">Place of birth  <span>*</span></label></td>
                            <td><input type="date" id="pob" name="pob" style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="fathername">Father???s name  <span>*</span></label></td>
                            <td><input type="text" name="fathername" id="fathername" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="country">Country <span>*</span></label></td>
                            <td>
                                <select name="country" id="country" style="width: 70%; padding: 8px;">
                                    <option value="0">Please Choose Your Country</option>
                                    <option value="Aaland Islands">Aaland Islands</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France, Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value=">Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senega">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="irgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                <!-- <input type="text" name="religion" id="religion"  size="30" required> -->
                            </td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="citizenship">Citizenship <span>*</span></label>
                            </td>
                            <td>
                                <!-- <input type="text" name="citizenship" id="citizenship"  size="30" required> -->
                                <select name="citizenship" id="citizenship" style="width: 70%; padding: 8px;">
                                    <option>-----Select-----</option>
                                    <option value="Burmese">Burmese</option>
                                    <option value="English">English</option>
                                </select>
                            </td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="maritalstatus">Marital Status <span>*</span></label>
                            </td>
                            <td>
                                <!-- <input type="text" name="maritalstatus" id="maritalstatus"  size="30" required> -->
                                <select name="maritalstatus" id="maritalstatus" style="width: 70%; padding: 8px;">
                                    <option>-----Select-----</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                            </td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="religion">Religion <span>*</span></label>
                            </td>
                            <td>
                                <select name="religion" id="religion" style="width: 70%; padding: 8px;">
                                    <option>-----Select-----</option>
                                    <option value="Theravada Buddhism">Theravada Buddhism</option>
                                    <option value="Mahayana Buddhism">Mahayana Buddhism</option>
                                    <option value="Hinayana Buddhism">Hinayana Buddhism</option>
                                </select>
                                <!-- <input type="text" name="religion" id="religion"  size="30" required> -->
                            </td>
                        </tr>

                        <tr height="50" valign="middle">
                            <td><label for="pha">Permanent Home Address <span>*</span></label></td>
                            <td>
                                <!-- <input type="text" name="pha" id="pha" size="30" required> -->
                                <textarea cols="40" rows="4" name="pha" id="pha" style="width: 70%; padding: 8px;"></textarea>
                            </td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="fax">Fax. E-mail, Tel. <span>*</span></label></td>
                            <td><input type="text" name="fax" id="fax" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="postaladdress">Postal Address <span>*</span></label></td>
                            <td><input type="text" name="postaladdress" id="postaladdress" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="aqy">Academic qualification & Year <span>*</span></label></td>
                            <td>
                                <select name="aqy" id="aqy" style="width: 70%; padding: 8px;">
                                    <option value=2016 >2016</option><option value=2017 >2017</option>
                                    <option value=2018 >2018</option><option value=2019 >2019</option>
                                    <option value=2020 >2020</option><option value=2021 selected>2021</option>
                                </select>

                            </td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="language">Language (Level & proficiency) <span>*</span></label></td>
                            <td><input type="text" name="language" id="language" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="presentemployment">Present employment <span>*</span></label></td>
                            <td><input type="text" name="presentemployment" id="presentemployment" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="diploma">Dip/B.A.(A)/B.A.(B) M.A/Ph.D & Academic year <span>*</span></label></td>
                            <td><input type="text" name="diploma" id="diploma" size="30" required style="width: 70%; padding: 8px;"></td>
                        </tr>
                        <tr height="50" valign="middle">
                            <td><label for="status">Status <span>*</span></label></td>
                            <td>
                                <select name="status" id="status" required style="width: 70%; padding: 8px;">
                                    <option>-----Select-----</option>
                                    <option value="Monk">Monk</option>
                                    <option value="Gent">Gent</option>
                                    <option value="Nun">Nun</option>
                                    <option value="Lady">Lady</option>
                                </select>
                            </td>
                        </tr>
                        <tr height="50">
                            <td>&nbsp;</td>
                            <td><input type="submit" name="save" value="Save" onclick="return checknull()"
                                style="display: inline-block;
                                width: auto;
                                min-width: 150px;
                                margin: 0;
                                padding: 8px 5px;
                                cursor: pointer;">
                            </td>
                        </tr>
                        <tr height="50">
                            <td>&nbsp;</td>
                            <td><input type="reset" name="cancel" value="Cancel"
                            style="display: inline-block;
                                width: auto;
                                min-width: 150px;
                                margin: 0;
                                padding: 8px 5px;
                                cursor: pointer;">
                            </td>
                        </tr>
                    </table>

                </form>
            </p>
            <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
@endsection
