@extends('layouts.app')

@section('content')
    <div class="flex">
        @include('layouts.asidenav')
        <section class="bg-white dark:bg-gray-900">
            <script type="application/javascript" src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
            <div class="m-8 border-2 rounded-2xl border-cool-gray-300 dark:border-cool-gray-500 p-7">

                @if (session()->has('message'))
                    <div id="toast-success"
                        class="flex items-center max-w-xs p-4 mb-1 text-gray-500 bg-white rounded-lg shadow top-5 dark:text-gray-400 dark:bg-gray-800"
                        role="alert">
                        <div
                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3 text-sm font-normal">
                            {{ session()->get('message') }}
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                            data-collapse-toggle="toast-success" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                    </div>
                @endif
                <div class="m-8 p-7" id="appprofile">
                    <header
                        class="px-6 py-5 font-semibold text-center text-gray-700 bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md dark:bg-gray-800 dark:text-gray-200">
                        {{ __('My Profile') }}
                    </header>
                    <div class="sticky items-center justify-center align-middle my-7 removeThis">
                        @if (Auth::User()->avatar)
                            <img id="output"
                                class="justify-center w-48 mx-auto border-2 border-yellow-200 rounded-full dark:border-gray-400"
                                src="{{ asset('images/User/' . Auth::User()->avatar) }}" alt="User photo">
                        @else
                            <img id="output"
                                class="justify-center w-48 mx-auto border-2 border-yellow-200 rounded-full dark:border-gray-400"
                                src="{{ asset('images/User.png') }}" alt="User photo">
                        @endif
                    </div>


                    @if ($errors->any())
                        <div class="w-4/5 m-auto ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li id="errorAlert"
                                        class="flex p-4 mb-4 bg-red-100 border-t-4 border-red-500 dark:bg-red-200"
                                        role="alert">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="ml-3 text-sm font-medium text-red-700">
                                            {{ $error }}
                                        </div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 dark:bg-red-200 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 dark:hover:bg-red-300 inline-flex h-8 w-8"
                                            data-dismiss-target="#errorAlert" aria-label="Close">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/profile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="relative z-0 w-full mb-6 group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="User_avatar">Upload
                                file</label>

                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="User_avatar_help" id="image" type="file" accept="image/*"
                                onchange="loadFile(event)" name="image">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="User_avatar_help">A profile
                                picture
                                is
                                useful
                                to confirm your are logged into your account
                            </div>
                        </div>

                        <div class="grid-cols-2 gap-10 mx-auto sm:grid ">
                            <div class="relative z-0 w-full mb-6 sm:mb-0 group">
                                <input type="email" name="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " autocomplete="off" value="{{ Auth::User()->email }}">
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                    address</label>
                            </div>

                            <div class="relative z-0 w-full mb-6 sm:mb-0 group">
                                <input type="text" name="fulname" id="floating_first_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " value="{{ Auth::User()->name }}">
                                <label for="floating_first_name"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Your Name
                                </label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <?php
                                    $original_date = Auth::User()->dob;
                                    // Creating timestamp from given date
                                    $timestamp = strtotime($original_date);
                                    // Creating new date format from that timestamp
                                    $new_date = date('d-m-Y', $timestamp);
                                    ?>
                                    <input datepicker datepicker-buttons name="dob" type="text"
                                        class=" block w-full pl-10 p-2.5  dark:text-white  focus:ring-0 dark:focus:border-blue-500 peer appearance-none focus:outline-none border-gray-300 border-b-2 border-0 bg-transparent text-gray-900 py-2.5 px-0  text-sm dark:border-gray-600 focus:border-blue-600"
                                        placeholder="01/30/2000" value="<?php echo $new_date; ?>">
                                </div>
                                {{-- {{ Auth::User()->dob }} --}}
                                <label for="dob"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Date Of Birth
                                </label>
                            </div>






                            <div class="flex flex-col">
                                <div class="relative z-0 w-full mb-6 group">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                                </path>
                                            </svg>
                                        </div>
                                        <input name="username" id="username" type="text"
                                            class=" block w-full pl-10 p-2.5  dark:text-white  focus:ring-0 dark:focus:border-blue-500 peer appearance-none focus:outline-none border-gray-300 border-b-2 border-0 bg-transparent text-gray-900 py-2.5 px-0  text-sm dark:border-gray-600 focus:border-blue-600"
                                            placeholder="Username" value="{{ Auth::User()->username }}">
                                        <input type="hidden" id="origname" name="origname"
                                            value="{{ Auth::User()->username }}">
                                        <div class="absolute inset-y-0 right-0 flex items-center pl-3 pointer-events-none">
                                            <svg id="check2" class="hidden w-5 h-5 text-red-500 dark:text-red-500"
                                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg id="check1" class="w-5 h-5 text-green-500 dark:text-green-500"
                                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <label for="Username"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">My
                                        Username</label>
                                </div>
                                <div id="error_username"
                                    class="flex hidden p-2 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div>
                                        <span class="font-medium">Username Taken!</span>
                                    </div>
                                </div>
                                {{-- <div id="error_username">
                                    Check
                                </div> --}}
                            </div>
                            <div class="relative z-0 w-full mb-6 sm:mb-0 group">
                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select
                                    your
                                    country</label>
                                <select id="countries" name="country"
                                    class="bg-gray-50 border-0 border-b-gray-300 border-b-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-900 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @if (Auth::User()->country)
                                        <option selected value="{{ Auth::User()->country }}">
                                            {{ Auth::User()->country }}
                                        </option>
                                    @endif

                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
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
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="India">India</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <label for="gender"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Gender</label>
                                <select id="gender" name="gender"
                                    class="bg-gray-50 border-0 border-b-gray-300 border-b-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-900 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @if (Auth::User()->gender)
                                        <option selected value="{{ Auth::User()->gender }}">{{ Auth::User()->gender }}
                                        </option>
                                        <option>Choose Not To Say</option>
                                    @else
                                        <option selected>Choose Not To Say</option>
                                    @endif
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-6 ">
                            <div
                                class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                    <label for="bio" class="sr-only">Your Bio</label>
                                    <div class="relative">
                                        <textarea id="bio" rows="4" name="bio"
                                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                            placeholder="Write yor bio...">{{ Auth::User()->bio }}</textarea>
                                        <div class="absolute inset-y-0 right-0 flex items-center pl-3 pointer-events-none">
                                            <svg id="checkbio2" class="hidden w-5 h-5 text-red-500 dark:text-red-500"
                                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg id="checkbio1" class="w-5 h-5 text-green-500 dark:text-green-500"
                                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="ml-auto text-xs text-gray-500 dark:text-gray-400">Remember, your bio should follow our
                                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
                                    Community Guidelines
                                </a>.
                            </p>
                        </div>
                        <div class="content-center my-3 mb-6 text-center">

                            <label for="checked-toggle" class="relative inline-flex items-center cursor-pointer">
                                <input name="stay" type="checkbox" id="checked-toggle" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Stay On This Page After Update
                                </span>
                            </label>

                        </div>
                        <div class="flex content-center mx-auto">
                            <span class="mx-auto ">
                                <button id="submitbtn" type="submit"
                                    class=" flex text-white bg-blue-700 hover:bg-green-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto">
                                    <svg class="w-6 h-6 mx-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Update Profile
                                </button>
                            </span>
                            <div id="error_usernamealert"
                                class="flex hidden p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium">Warning!</span>
                                    Username Invalid
                                </div>
                            </div>
                            <div id="error_userbioalert"
                                class="flex hidden p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium">Warning!</span>
                                    Too Long Bio
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <script type="application/javascript">
                    var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                        output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                        }
                        // output.classList.add("mx-auto w-2xl h-36 border");
                    };
                    $("#output").change(function() {
                        imagePreview(this);
                        $(".imagechange").remove();
                    });
                </script>

                <script type="application/javascript">
                    $(document).ready(function() {

                        $("#username").change(function() {

                            var usrN = $("#username").val();
                            var _token = $('input[name="_token"]').val();

                            if (usrN.length >= 4) {
                                $.ajax({
                                    url: "/profile/check",
                                    method: "POST",
                                    data: {
                                        name: usrN,
                                        _token: _token
                                    },
                                    success: function(result) {
                                        if (result == 'unique') {
                                            $('#error_username').addClass('hidden');
                                            $('#error_usernamealert').addClass('hidden');
                                            $('#check2').addClass('hidden');
                                            $('#check1').removeClass('hidden');
                                            $('#submitbtn').attr('disabled', false);
                                        } else {
                                            if ($("#origname").val() == $('#username').val()) {
                                                $('#error_username').addClass('hidden');
                                                $('#error_usernamealert').addClass('hidden');
                                                $('#submitbtn').attr('disabled', false);
                                                $('#check2').addClass('hidden');
                                                $('#check1').removeClass('hidden');
                                            } else {
                                                $('#error_username').removeClass('hidden');
                                                $('#error_usernamealert').removeClass('hidden');
                                                $('#check1').addClass('hidden');
                                                $('#check2').removeClass('hidden');
                                                $('#submitbtn').attr('disabled', 'disabled');
                                            }


                                        }
                                        console.log(result)
                                    }
                                })
                            } else {
                                $('#error_usernamealert').removeClass('hidden');
                                $('#error_username').removeClass('hidden');
                                $('#submitbtn').attr('disabled', 'disabled');
                                $('#check1').addClass('hidden');
                                $('#check2').removeClass('hidden');
                            }

                        });


                        $("#bio").change(function() {

                            var usrB = $("#bio").val();

                            if (usrB.length >= 300) {
                                $('#error_userbioalert').removeClass('hidden');
                                $('#checkbio1').addClass('hidden');
                                $('#checkbio2').removeClass('hidden');
                                $('#submitbtn').attr('disabled', 'disabled');

                            } else {
                                $('#error_userbioalert').addClass('hidden');
                                $('#checkbio2').addClass('hidden');
                                $('#checkbio1').removeClass('hidden');
                                $('#submitbtn').attr('disabled', false);
                            }

                        });

                    });
                </SCRIPT>
            </div>
        </section>
    </div>
@endsection
