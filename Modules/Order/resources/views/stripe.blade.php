{{-- @extends('layouts.customer')
@section('styles') --}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('libs/nice-select2/css/nice-select2.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper-bundle.min.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    {{-- <style type="text/css">
        #card-element {
            height: 50px;
            padding-top: 16px;
        }
    </style> --}}
{{-- @endsection
@section('content') --}}
{{-- @dd($order) --}}
    <div class="row">
			<div class="col-md-5">
                <div class="card mt-3">
				<div class="bg-black dark:bg-slate-800/30 shadow  rounded-md relative w-full mt-4">
                    <div class="flex-auto p-4">
                        <div class="grid grid-cols-1  rounded-md">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <table class="min-w-full">
                                        @php $totalAmount = 0; $totalQuantity = 0; @endphp
                                        <tbody>
											<th class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">Product</th>
											<th class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">Quantity</th>
											<th class="p-3 text-base font-medium text-gray-100 whitespace-nowrap ">Total</th>
											@foreach(session('cart') as $item)
                                            @php
                                                $totalAmount += $item['price'] * $item['quantity'];
                                                $totalQuantity += $item['quantity'];
                                            @endphp
											<tr
                                                class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    {{ $item['name'] }}
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    {{ $item['quantity'] }} 
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    ${{ number_format($item['price'] * $item['quantity'], 2) }}
                                                </td>
                                            </tr>
											@endforeach
                                            <tr
                                                class="border-t-2 border-solid border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Subtotal
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    {{ $totalQuantity }} 
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    ${{ number_format($totalAmount, 2) }} 
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr
                                                class="border-t-2 border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Shipping Charge
                                                </td>
                                                <td> </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    $10.00
                                                </td>
                                            </tr>
                                            <!-- 3 -->

                                            <!-- 4 -->
                                            <tr
                                                class="border-t-2 border-solid border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                    Total
                                                </td>
                                                <td> </td>
                                                <td class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                    ${{ number_format($totalAmount + 10, 2) }} 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form action="{{ route('order.destroy', $order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                    <div class="flex gap-4 mb-4">
                                        <button
                                            class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Continue
                                            shopping</button>
                                        {{-- <button
                                            class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Back
                                            to cart</button> --}}
                                    </div>
                                </form>
                        </div>
                    </div><!--end card-body-->
                </div>
				</div>
            </div>
            <div class="col-md-6">
                <div class="card mt-5">
                    <h3 class="card-header p-3">Stripe Payment </h3>
                    <div class="card-body">
                        @session('success')
                            <div class="alert alert-success" role="alert">
                                {{ $value }}
                            </div>
                        @endsession
                        <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">
                            @csrf
                            <strong>Name:</strong>
                            <input type="input" class="form-control" name="name" placeholder="Enter Name">
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>
                            <input type='hidden' name='priceToPay' id='priceToPay' value='{{ $totalAmount + 10 }} '>

                            <br>
                            <div id="card-element" class="form-control"></div>
                            <button id='pay-btn' class="btn btn-primary mt-3" type="button"
                                style="margin-top: 20px; width: 100%;padding: 7px;" onclick="createToken()">PAY
                                ${{ number_format($totalAmount + 10, 2) }} 
                            </button>
                            <form>
                    </div>
                </div>
            </div>
        </div>
{{-- @endsection
@section('scripts') --}}
    <script src="{{ asset('libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('libs/@frostui/tailwindcss/frostui.js') }}"></script>

    <script src="{{ asset('libs/nice-select2/js/nice-select2.js') }}"></script>
    <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        NiceSelect.bind(document.querySelector(".nice-select"));
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        var stripe = Stripe('{{ env('STRIPE_KEY') }}')
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        function createToken() {
            document.getElementById("pay-btn").disabled = true;
            stripe.createToken(cardElement).then(function(result) {

                if (typeof result.error != 'undefined') {
                    document.getElementById("pay-btn").disabled = false;
                    alert(result.error.message);
                }

                /* creating token success */
                if (typeof result.token != 'undefined') {
                    document.getElementById("stripe-token-id").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>

    </html>
