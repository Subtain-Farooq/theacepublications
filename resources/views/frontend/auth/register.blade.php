@extends('frontend.layouts.app')

@section('content')
<div class="bg-white py-32">
    <div class="container mx-auto px-4">
        <div class="w-full max-w-3xl mx-auto">
            <div class="bg-white">
                <div class="bg-blue-800 mb-5">
                    <h1 class="text-3xl leading-none tracking-wider font-sans p-5 text-white">Create Account</h1>
                </div>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-1 xl:-mx-1">
                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <div class="relative">
                                <select  name="country" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('country') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            @error('country')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <div class="relative">
                                <select name="title" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('title') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                                    <option class="" value="">Title</option>
                                    <option value="dr.">Dr.</option>
                                    <option value="prof.">Prof.</option>
                                    <option value="mr.">Mr.</option>
                                    <option value="miss.">Miss.</option>
                                    <option value="ms.">Ms.</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            @error('title')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <input type="text" name="name" class="w-full px-3 py-2 border-2 outline-none @error('name') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('name') }}" autocomplete="name" placeholder="Full Name">
                            @error('name')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <input type="email" name="email" class="w-full px-3 py-2 border-2 outline-none @error('email') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('email') }}" autocomplete="email" placeholder="Email">
                            @error('email')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <input type="text" name="mobile_number" class="w-full px-3 py-2 border-2 outline-none @error('mobile_number') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('mobile_number') }}" autocomplete="mobile_number" placeholder="Mobile Number">
                            @error('mobile_number')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <input type="text" name="fax_number" class="w-full px-3 py-2 border-2 outline-none @error('fax_number') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('fax_number') }}" autocomplete="fax_number" placeholder="Fax Number">
                            @error('fax_number')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <input type="text" name="live_dna" class="w-full px-3 py-2 border-2 outline-none @error('live_dna') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('live_dna') }}" autocomplete="email" placeholder="LiveDna ID">
                            @error('live_dna')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            <input type="text" name="scopus" class="w-full px-3 py-2 border-2 outline-none @error('scopus') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('scopus') }}" autocomplete="email" placeholder="Scopus ID">
                            @error('scopus')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">

                            {{-- <label>Address</label>--}}
                            <input type="text" name="address" class="w-full px-3 py-2 border-2 outline-none @error('address') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" placeholder="Address">
                            @error('address')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2 my-1">
                            {{-- <label>Password</label>--}}
                            <input type="password" name="password" class="w-full px-3 py-2 border-2 outline-none @error('password') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" placeholder="Password">
                            @error('password')
                            <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="my-3 px-1">
                            <p class="text-sm tracking-wide">By registering you are agree with our <a href="#" class="text-blue-700 hover:underline">terms & conditions</a>  and have read and understood the  <a href="#" class="text-blue-700 hover:underline">privacy policy.</a></p>
                        </div>
                        <div class="mt-5 w-full px-1">
                            <button type="submit" class="text-blue-800 font-bold text-lg uppercase px-8 py-3 leading-none tracking-wider border-2 border-blue-800 hover:bg-blue-800 hover:text-white">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


{{--
        <div class="w-full max-w-lg mx-auto ">
           --}}{{-- <div class="bg-gray-900 px-8 py-6">
                <h1 class="text-5xl font-medium text-white ">Create Account</h1>
               --}}{{----}}{{--
                <p class="text-white tracking-wide">Already have account ? <a href="{{ route('login') }}" class="bg-teal-200 px-1 text-teal-800 font-medium hover:underline">Login</a></p>
            --}}{{----}}{{--
            </div>--}}{{--
            <div class="px-12 bg-white pb-16 pt-10">
                <h1 class="text-5xl tracking-wide main-font font-semibold pb-4 text-gray-700">Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="my-3">
                        --}}{{--<label>Title</label>--}}{{--
                        <div class="relative">

                            <select  name="country" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('title') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                                <option value="">Select Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
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
                                <option value="Guernsey">Guernsey</option>
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
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
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
                                <option value="Montenegro">Montenegro</option>
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
                                <option value="Serbia">Serbia</option>
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
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @error('title')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                        --}}{{--<label>Title</label>--}}{{--
                        <div class="relative">
                            <select name="title" class="w-full text-gray-500 appearance-none px-3 py-2 border-2 outline-none @error('title') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror">
                                <option class="" value="">Title</option>
                                <option>Dr.</option>
                                <option>Prof.</option>
                                <option>Mr.</option>
                                <option>Miss.</option>
                                <option>Ms.</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @error('title')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="my-3">
                      --}}{{--  <label>Full Name</label>--}}{{--
                        <input type="text" name="name" class="w-full px-3 py-2 border-2 outline-none @error('name') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('name') }}" autocomplete="name" placeholder="Full Name">
                        @error('name')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                     --}}{{--   <label>Email</label>--}}{{--
                        <input type="email" name="email" class="w-full px-3 py-2 border-2 outline-none @error('email') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('email') }}" autocomplete="email" placeholder="Email">
                        @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                       --}}{{-- <label>Mobile Number</label>--}}{{--
                        <input type="text" name="mobile_no" class="w-full px-3 py-2 border-2 outline-none @error('mobile_no') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('mobile_no') }}" autocomplete="mobile_no" placeholder="Mobile Number">
                        @error('mobile_no')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                        --}}{{-- <label>Mobile Number</label>--}}{{--
                        <input type="text" name="fax" class="w-full px-3 py-2 border-2 outline-none @error('fax') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('fax') }}" autocomplete="fax" placeholder="Fax Number">
                        @error('mobile_no')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                        --}}{{--   <label>Email</label>--}}{{--
                        <input type="text" name="live_dna" class="w-full px-3 py-2 border-2 outline-none @error('live_dna') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('live_dna') }}" autocomplete="email" placeholder="LiveDna ID">
                        @error('live_dna')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                        --}}{{--   <label>Email</label>--}}{{--
                        <input type="text" name="scopus" class="w-full px-3 py-2 border-2 outline-none @error('scopus') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" value="{{ old('scopus') }}" autocomplete="email" placeholder="Scopus ID">
                        @error('scopus')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                       --}}{{-- <label>Password</label>--}}{{--
                        <input type="password" name="password" class="w-full px-3 py-2 border-2 outline-none @error('password') border-red-500 focus:bg-red-100 @else focus:border-blue-700 @enderror" placeholder="Password">
                        @error('password')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-3">
                        <p class="text-sm tracking-wide">By registering you are agree with our <a href="#" class="text-blue-700 hover:underline">terms & conditions</a>  and have read and understood the  <a href="#" class="text-blue-700 hover:underline">privacy policy.</a></p>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="text-blue-800 font-bold text-lg uppercase px-8 py-2 tracking-wider border-2 border-blue-800 hover:bg-blue-800 hover:text-white">Register</button>
                    </div>
                </form>
            </div>
        </div>

    --}}

    </div>
</div>


@endsection

