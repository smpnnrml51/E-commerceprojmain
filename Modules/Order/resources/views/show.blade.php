@extends('order::layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Robotech - Admin & Dashboard Template</title>
        <meta  name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta  content="Tailwind Multipurpose Admin & Dashboard Template"  name="description"/>
        <meta content="" name="Mannatthemes" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
        
        <!-- Css -->
        <link rel="stylesheet" href="{{ asset('libs/nice-select2/css/nice-select2.css') }}">
        <link rel="stylesheet" href="{{ asset('libs/swiper/swiper-bundle.min.css') }}">
        <!-- Main Css -->
        <link rel="stylesheet" href="{{ asset('libs/icofont/icofont.min.css') }}">
        <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">

    </head>
<div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
    @session('success')
							<div class="alert alert-success" role="alert"> 
								{{ $value }}
							</div>
							@endsession
    <div class="grid sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6 mx-auto ">
        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">                                        
            <div class="flex-auto p-4">
                <div class="flex items-center mb-4">
                    <img src="images/logos/card-2.png" alt="" class="mr-2 h-8 inline-block">
                    <div class="self-center">
                        <span class="block  font-medium text-slate-700">Stripe Payment</span>
                        <h5 class="text-xs font-medium text-slate-500 dark:text-gray-400">Last time used: 21 march 2023</h5>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">
                        @csrf
                    <div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
                        <div class="mb-2">
                            <label for="Card_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Name of card :</label>
                            <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" type="input" name="name" placeholder="Enter Name>
                        </div>
                        <div class="mb-2">
                            <label for="Zip_code" class="font-medium text-sm text-slate-600 dark:text-slate-400">Card No :</label>
                            <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="---- ---- ----" type="text">
                        </div>
                    </div>
                </div>
                <input type='hidden' name='stripeToken' id='stripe-token-id'>  
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                        <div class="mb-2">
                            <label for="Expiry_Month" class="font-medium text-sm text-slate-600 dark:text-slate-400">Expiry Month</label>
                            <select id="Expiry_Month" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                <option  class="dark:text-slate-700">-- select --</option>
                                <option  class="dark:text-slate-700">01</option>
                                <option  class="dark:text-slate-700">02</option>
                                <option  class="dark:text-slate-700">03</option>
                                <option  class="dark:text-slate-700">04</option>
                                <option  class="dark:text-slate-700">05</option>
                                <option  class="dark:text-slate-700">06</option>
                                <option  class="dark:text-slate-700">07</option>
                                <option  class="dark:text-slate-700">08</option>
                                <option  class="dark:text-slate-700">09</option>
                                <option  class="dark:text-slate-700">10</option>
                                <option  class="dark:text-slate-700">11</option>
                                <option  class="dark:text-slate-700">12</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                        <div class="mb-2">
                            <label for="Expiry_Year" class="font-medium text-sm text-slate-600 dark:text-slate-400">Expiry Year</label>
                            <select id="Expiry_Year" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                <option  class="dark:text-slate-700">-- select --</option>
                                <option  class="dark:text-slate-700">2024</option>
                                <option  class="dark:text-slate-700">2025</option>
                                <option  class="dark:text-slate-700">2026</option>
                                <option  class="dark:text-slate-700">2027</option>
                                <option  class="dark:text-slate-700">2028</option>
                                <option  class="dark:text-slate-700">2029</option>
                                <option  class="dark:text-slate-700">2030</option>
                                <option  class="dark:text-slate-700">2031</option>
                                <option  class="dark:text-slate-700">2032</option>
                                <option  class="dark:text-slate-700">2033</option>
                                <option  class="dark:text-slate-700">2034</option>
                                <option  class="dark:text-slate-700">2035</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                        <div class="mb-2">
                            <label for="CVV" class="font-medium text-sm text-slate-600 dark:text-slate-400">CVV</label>
                            <input class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="cvv" type="text">
                        </div>
                    </div>
                </div>
                <button id='pay-btn' type="button" onclick="createToken()" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500 w-full">Confirm payment {{ $product->price }}</button>
            </div><!--end card-body-->
        </div> <!--end card-->
    </div><!--end col-->      
</div><!--end inner-grid--> 
 <!-- JAVASCRIPTS -->
        <!-- <div class="menu-overlay"></div> -->
        <script src="libs/lucide/umd/lucide.min.js"></script>
        <script src="libs/simplebar/simplebar.min.js"></script>
        <script src="libs/flatpickr/flatpickr.min.js"></script>
        <script src="libs/@frostui/tailwindcss/frostui.js"></script>

        <script src="libs/nice-select2/js/nice-select2.js"></script>
        <script src="libs/swiper/swiper-bundle.min.js"></script>
        <script src="js/app.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
	<script type="text/javascript">
		var stripe = Stripe('{{ env('STRIPE_KEY') }}')
		var elements = stripe.elements();
		var cardElement = elements.create('card');
		cardElement.mount('#card-element');
		
		function createToken() {
		    document.getElementById("pay-btn").disabled = true;
		    stripe.createToken(cardElement).then(function(result) {
		
		        if(typeof result.error != 'undefined') {
		            document.getElementById("pay-btn").disabled = false;
		            alert(result.error.message);
		        }
		
		        /* creating token success */
		        if(typeof result.token != 'undefined') {
		            document.getElementById("stripe-token-id").value = result.token.id;
		            document.getElementById('checkout-form').submit();
		        }
		    });
		}
	</script>
        <script>
            NiceSelect.bind(document.querySelector(".nice-select"));
            var swiper = new Swiper(".defaultSwiper", {
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });    
        </script>
        <!-- JAVASCRIPTS -->
</html>
@endsection
