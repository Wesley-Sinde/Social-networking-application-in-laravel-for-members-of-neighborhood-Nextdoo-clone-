<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interactive payment gateway | TailwindCSS x AlpineJS</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <style>
        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.5rem center;
            background-size: 1.5em 1.5em;
            -webkit-tap-highlight-color: transparent;
        }

        .submit-button:disabled {
            cursor: not-allowed;
            background-color: #D1D5DB;
            color: #111827;
        }

        .submit-button:disabled:hover {
            background-color: #9CA3AF;
        }

        .credit-card {
            max-width: 420px;
            margin-top: 3rem;
        }

        @media only screen and (max-width: 420px) {
            .credit-card .front {
                font-size: 100%;
                padding: 0 2rem;
                bottom: 2rem !important;
            }

            .credit-card .front .number {
                margin-bottom: 0.5rem !important;
            }
        }
    </style>
</head>

<body class="bg-blue-50">
    <div class="m-4">
        <div class="credit-card w-full sm:w-auto shadow-lg mx-auto rounded-xl bg-white" x-data="creditCard">
            <header class="flex flex-col justify-center items-center">
                <div class="relative" x-show="card === 'front'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <img class="w-full h-auto"
                        src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-front.png"
                        alt="front credit card">
                    <div class="front bg-transparent text-lg w-full text-white px-12 absolute left-0 bottom-12">
                        <p class="number mb-5 sm:text-xl"
                            x-text="cardNumber !== '' ? cardNumber : '0000 0000 0000 0000'"></p>
                        <div class="flex flex-row justify-between">
                            <p x-text="cardholder !== '' ? cardholder : 'Card holder'"></p>
                            <div class="">
                                <span x-text="expired.month"></span>
                                <span x-show="expired.month !== ''">/</span>
                                <span x-text="expired.year"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative" x-show="card === 'back'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <img class="w-full h-auto"
                        src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-back.png"
                        alt="">
                    <div
                        class="bg-transparent text-white text-xl w-full flex justify-end absolute bottom-20 px-8  sm:bottom-24 right-0 sm:px-12">
                        <div class="border border-white w-16 h-9 flex justify-center items-center">
                            <p x-text="securityCode !== '' ? securityCode : 'code'"></p>
                        </div>
                    </div>
                </div>
                <ul class="flex">
                    <li class="mx-2">
                        <img class="w-16"
                            src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/computop.png"
                            alt="" />
                    </li>
                    <li class="mx-2">
                        <img class="w-14"
                            src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/verified-by-visa.png"
                            alt="" />
                    </li>
                    <li class="ml-5">
                        <img class="w-7"
                            src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/mastercard-id-check.png"
                            alt="" />
                    </li>
                </ul>
            </header>
            <main class="mt-4 p-4">
                <h1 class="text-xl font-semibold text-gray-700 text-center">Card payment</h1>
                <div class="">
                    <div class="my-3">
                        <input type="text"
                            class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                            placeholder="Card holder" maxlength="22" x-model="cardholder" />
                    </div>
                    <div class="my-3">
                        <input type="text"
                            class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                            placeholder="Card number" x-model="cardNumber" x-on:keydown="format()"
                            x-on:keyup="isValid()" maxlength="19" />
                    </div>
                    <div class="my-3 flex flex-col">
                        <div class="mb-2">
                            <label for="" class="text-gray-700">Expired</label>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            <select name="" id=""
                                class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                x-model="expired.month">
                                <option value="" selected disabled>MM</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="" id=""
                                class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                x-model="expired.year">
                                <option value="" selected disabled>YY</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                            <input type="text"
                                class="block w-full col-span-2 px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                placeholder="Security code" maxlength="3" x-model="securityCode"
                                x-on:focus="card = 'back'" x-on:blur="card = 'front'" />
                        </div>
                    </div>
                </div>
            </main>
            <footer class="mt-6 p-4">
                <button
                    class="submit-button px-4 py-3 rounded-full bg-blue-300 text-blue-900 focus:ring focus:outline-none w-full text-xl font-semibold transition-colors"
                    x-bind:disabled="!isValid" x-on:click="onSubmit()">
                    Pay now
                </button>
            </footer>
        </div>
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("creditCard", () => ({
                init() {
                    console.log('Component mounted');
                },
                format() {
                    if (this.cardNumber.length > 18) {
                        return;
                    }
                    this.cardNumber = this.cardNumber.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
                },
                get isValid() {
                    if (this.cardholder.length < 5) {
                        return false;
                    }
                    if (this.cardNumber === '') {
                        return false;
                    }
                    if (this.expired.month === '' && this.expired.year === '') {
                        return false;
                    }
                    if (this.securityCode.length !== 3) {
                        return false;
                    }
                    return true;
                },
                onSubmit() {
                    alert(`You did it ${this.cardholder}.`);
                },
                cardholder: '',
                cardNumber: '',
                expired: {
                    month: '',
                    year: '',
                },
                securityCode: '',
                card: 'front',
            }));
        });
    </script>
</body>

</html>
