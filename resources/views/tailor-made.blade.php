@extends('layouts.tailor-layout', ['currentView' => 'index-page'])
@section('content') 
    <div id="scene" style="position: relative;">
        <div class="cover-text">
            <h1 class="cover-text-header">
                TAIMEN<br />ADVENTURE
            </h1>
        </div>
        <div data-depth="1.00" class="row cover-image" style="background-image:url('/images/cover.jpg')">
        </div>
        <div class="container" style="padding-bottom: 80px;">
    		<form action="tailor-made" method="POST">
          {{ csrf_field() }}
    			</br>
    			<h1 class="white">Tailormade Trip</h1>
				</br>
    			<h4 class="white" style="line-height: 1.5em;">
    				Our bespoke itinerary design service provides unique tailormade Mongolia tours to suit your own particular requirements.
We love coming up with new ideas or twists on old favourites to ensure that your Mongolia experience is truly personalised and unique. Whether you have a blank canvas or ideas set in stone about what you would like to do, our team of Mongolia travel experts can make it happen. We have extensive experience in providing bespoke Mongolia tours for a range of traveller categories – here are a few who often benefit from tailor-made Mongolia travel solutions, and a few ideas of how we might tailor a trip to suit specific needs.
    			</h4>
	    		</br>
	    		<h1 class="white">
	    			 Personal information
	    		</h1>
	    		</br>
	    		<div class="col-sm-12 padding-less">
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">First name</label>
					    <input type="text" name="first_name" class="form-control" id="exampleInputPassword1" placeholder="First name" required>
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Last name</label>
					    <input type="Text" name="last_name" class="form-control" id="exampleInputPassword1" placeholder="Last name" required>
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputEmail1" class="white">Email address</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
					  </div>
					  <div class="form-group col-md-6">
					  	<label for="exampleInputPassword1" class="white">Gender</label></br>
					  	<select name="gender" class="btn-group form-control" role="group" aria-label="Basic example" required>
                <option value="" selected="selected">Select Gender</option> 
                <option>Male</option>
                <option>Female</option>
              </select>
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Country</label>
                        <select name="country" class="form-control" required> 
                          <option value="" selected="selected">Select Country</option> 
                          <option value="United States">United States</option> 
                          <option value="United Kingdom">United Kingdom</option> 
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
                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
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
                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                          <option value="Cook Islands">Cook Islands</option> 
                          <option value="Costa Rica">Costa Rica</option> 
                          <option value="Cote D'ivoire">Cote D'ivoire</option> 
                          <option value="Croatia">Croatia</option> 
                          <option value="Cuba">Cuba</option> 
                          <option value="Cyprus">Cyprus</option> 
                          <option value="Czech Republic">Czech Republic</option> 
                          <option value="Denmark">Denmark</option> 
                          <option value="Djibouti">Djibouti</option> 
                          <option value="Dominica">Dominica</option> 
                          <option value="Dominican Republic">Dominican Republic</option> 
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
                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                          <option value="Honduras">Honduras</option> 
                          <option value="Hong Kong">Hong Kong</option> 
                          <option value="Hungary">Hungary</option> 
                          <option value="Iceland">Iceland</option> 
                          <option value="India">India</option> 
                          <option value="Indonesia">Indonesia</option> 
                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
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
                          <option value="Liberia">Liberia</option> 
                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                          <option value="Liechtenstein">Liechtenstein</option> 
                          <option value="Lithuania">Lithuania</option> 
                          <option value="Luxembourg">Luxembourg</option> 
                          <option value="Macao">Macao</option> 
                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
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
                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                          <option value="Moldova, Republic of">Moldova, Republic of</option> 
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
                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
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
                          <option value="Saint Helena">Saint Helena</option> 
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                          <option value="Saint Lucia">Saint Lucia</option> 
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                          <option value="Samoa">Samoa</option> 
                          <option value="San Marino">San Marino</option> 
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                          <option value="Saudi Arabia">Saudi Arabia</option> 
                          <option value="Senegal">Senegal</option> 
                          <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                          <option value="Seychelles">Seychelles</option> 
                          <option value="Sierra Leone">Sierra Leone</option> 
                          <option value="Singapore">Singapore</option> 
                          <option value="Slovakia">Slovakia</option> 
                          <option value="Slovenia">Slovenia</option> 
                          <option value="Solomon Islands">Solomon Islands</option> 
                          <option value="Somalia">Somalia</option> 
                          <option value="South Africa">South Africa</option> 
                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                          <option value="Spain">Spain</option> 
                          <option value="Sri Lanka">Sri Lanka</option> 
                          <option value="Sudan">Sudan</option> 
                          <option value="Suriname">Suriname</option> 
                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                          <option value="Swaziland">Swaziland</option> 
                          <option value="Sweden">Sweden</option> 
                          <option value="Switzerland">Switzerland</option> 
                          <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                          <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                          <option value="Tajikistan">Tajikistan</option> 
                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                          <option value="Thailand">Thailand</option> 
                          <option value="Timor-leste">Timor-leste</option> 
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
                          <option value="Venezuela">Venezuela</option> 
                          <option value="Viet Nam">Viet Nam</option> 
                          <option value="Virgin Islands, British">Virgin Islands, British</option> 
                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                          <option value="Wallis and Futuna">Wallis and Futuna</option> 
                          <option value="Western Sahara">Western Sahara</option> 
                          <option value="Yemen">Yemen</option> 
                          <option value="Zambia">Zambia</option> 
                          <option value="Zimbabwe">Zimbabwe</option>
                      </select>
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">City</label>
					    <input type="Text" name="city" class="form-control" id="exampleInputPassword1" placeholder="Last name" required>
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Address</label>
					    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="address" required>
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Phone</label>
					    <input type="Text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone" required>
					  </div>

					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Any Alergy</label>
					    <input type="text" name="alergy" class="form-control" id="exampleInputPassword1" placeholder="Alergy" required>
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputPassword1" class="white">Alergy description</label>
					    <textarea type="Text" name="alergy_description" class="form-control" id="exampleInputPassword1" placeholder="Alergy description" required>
					    </textarea>
					  </div>

					  <div class="form-group col-md-12">
					    <h1 class="white">Tailor made trip</h1>
					  </div>

					  <div class="form-group col-md-4">
					  	<label for="exampleInputPassword1" class="white">Which places would you like to visit?</label></br>
					  	<select name="trip" class="btn-group form-control" role="group" aria-label="Basic example">
	  						<option>Tengis & shishged river, Khuvsgul province</option>
	  						<option>Orkhon, Uvurkhangai province</option>
	  						<option>Khalkh gol, Dornod province</option>
					  	</select>
					  </div>
					  <div class="form-group col-md-4">
					    <label for="exampleInputEmail1" class="white">How many of you are Travelling</label>
					    <input name="traveller_count" type="Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number" required>
					  </div>

					  <div class="form-group col-md-4">
					    <label for="exampleInputEmail1" class="white">Traveler's age level</label>
					    <select name="age_group" class="btn-group form-control" role="group" aria-label="Basic example">
	  						<option>18-30</option>
	  						<option>50-42</option>
	  						<option>42-54</option>
	  						<option>above 54</option>
					  	</select>
					  </div>
					  

					  <div class="form-group col-md-6">
					  	<label for="exampleInputPassword1" class="white">Start date of your adventure</label></br>
					  	<div class='input-group date' id='start_date'>
		                    <input type='text' name="start_date" class="form-control" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputEmail1" class="white">End date of your adventure</label>
					    <div class='input-group date' id='end_date'>
		                    <input type='text' name="end_date" class="form-control" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
					  </div>

					  <div class="form-group col-md-6">
					  	<label for="exampleInputPassword1" class="white">Hotel in Ulaanbaatar</label></br>
					  	<select name="hotel" class="btn-group form-control" role="group" aria-label="Basic example">
	  						<option>Corporate hotel</option>
	  						<option>Khempinski hotel</option>
	  						<option>Ramada hotel</option>
	  						<option>Shangri La hotel</option>
					  	</select>
					  </div>
					  <div class="form-group col-md-6">
					    <label for="exampleInputEmail1" class="white">What kind of ride will you want to travel?</label>
					    <select name="ride" class="btn-group form-control" role="group" aria-label="Basic example">
	  						<option>SUV 4x4 vehicles</option>
	  						<option>Helicopter</option>
	  						<option>Local flights and SUV 4x4 vehicles</option>
					  	</select>
					  </div>


					  <div class="form-group col-md-12">
					  	<button type="submit" class="btn btn-primary" style="width: 120px; margin-top: 10px;">Send Request</button>
					  </div>
				</div>
			</form>
    	</div>

    	
    </div>
@stop