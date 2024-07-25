@extends('layouts.customer')
@section('styles')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('libs/nice-select2/css/nice-select2.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper-bundle.min.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">
@endsection
@section('content')
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
                <div class="container my-4">
                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
                            <div
                                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                <div
                                    class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                    <div class="flex-none md:flex">
                                        <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Order Summary</h4>
                                    </div>
                                </div><!--end header-title-->
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full">
                                                    <thead class="bg-slate-100 dark:bg-slate-700/20">
                                                        <tr>
                                                            <th scope="col"
                                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                Products
                                                            </th>
                                                            <th scope="col"
                                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                Quantity
                                                            </th>
                                                            <th scope="col"
                                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                Total
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Product 1 -->
                                                        <tr
                                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td
                                                                class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                                <img src="assets/images/products/01.png" alt=""
                                                                    class="mr-2 h-8 inline-block">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block">
                                                                    White Table Camera</h5>
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                1
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $99
                                                            </td>
                                                        </tr>
                                                        <!-- Product 2 -->
                                                        <tr
                                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td
                                                                class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                                <img src="assets/images/products/02.png" alt=""
                                                                    class="mr-2 h-8 inline-block">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block">
                                                                    New Colorfull Shoes</h5>
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                1
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $59
                                                            </td>
                                                        </tr>
                                                        <!-- Product 3 -->
                                                        <tr
                                                            class="bg-white border-b-2 border-solid dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td
                                                                class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                                <img src="assets/images/products/03.png" alt=""
                                                                    class="mr-2 h-8 inline-block">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block">
                                                                    Imported VR Box</h5>
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                1
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $49
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-white dark:bg-gray-900">
                                                            <td
                                                                class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                                Total
                                                            </td>
                                                            <td
                                                                class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                                3
                                                            </td>
                                                            <td
                                                                class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                                $207
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-->
                            <div class="bg-black dark:bg-slate-800/30 shadow  rounded-md relative w-full mt-4">
                                <div class="flex-auto p-4">
                                    <div class="grid grid-cols-1  rounded-md">
                                        <div class="sm:-mx-6 lg:-mx-8">
                                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                <table class="min-w-full">
                                                    <tbody>
                                                        <!-- 1 -->
                                                        <tr
                                                            class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                            <td
                                                                class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                                Subtotal
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                                $207.00
                                                            </td>
                                                        </tr>
                                                        <!-- 2 -->
                                                        <tr
                                                            class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                            <td
                                                                class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                                Shipping Charge
                                                            </td>
                                                            <td
                                                                class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                                $5.00
                                                            </td>
                                                        </tr>
                                                        <!-- 3 -->

                                                        <!-- 4 -->
                                                        <tr
                                                            class="border-t-2 border-solid border-slate-500/60 dark:border-slate-700/40">
                                                            <td
                                                                class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                                Total
                                                            </td>
                                                            <td
                                                                class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                                $202.00
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 mb-4">
                                            <button
                                                class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Continue
                                                shopping</button>
                                            <button
                                                class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block">Back
                                                to cart</button>
                                        </div>
                                        <p class="text-[11px] text-slate-400"> <span class="text-slate-200">Note :</span> It
                                            is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout.</p>
                                    </div>
                                </div><!--end card-body-->
                            </div>
                        </div><!--end col-->
                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                            <div
                                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
                                <div
                                    class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                    <h4 class="font-medium">Delivery Address</h4>
                                </div><!--end header-title-->
                                <div class="flex-auto p-4">
                                    <form action="{{ route('product.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid grid-cols-4 gap-4">
                                            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                                <div class="mb-2">
                                                    <label for="First_Name"
                                                        class="font-medium text-sm text-slate-600 dark:text-slate-400">First
                                                        Name<small class="text-red-600 text-sm">*</small></label>
                                                    <input
                                                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                        placeholder="First name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                                <div class="mb-2">
                                                    <label for="Last_name"
                                                        class="font-medium text-sm text-slate-600 dark:text-slate-400">Last
                                                        Name<small class="text-red-600 text-sm">*</small></label>
                                                    <input
                                                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                        placeholder="Last name" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                                <div class="mb-2">
                                                    <label for="Delivery_Address"
                                                        class="font-medium text-sm text-slate-600 dark:text-slate-400">Delivery
                                                        Address<small class="text-red-600 text-sm">*</small></label>
                                                    <input
                                                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                        placeholder="Address" type="text">
                                                </div>
                                            </div>
                                            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                                <div class="mb-2">
                                                    <label for="Address"
                                                        class="font-medium text-sm text-slate-600 dark:text-slate-400">Address</label>
                                                    <input
                                                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                        placeholder="Address" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">

                                            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                                <div class="mb-2">
                                                    <label for="Email_Address"
                                                        class="font-medium text-sm text-slate-600 dark:text-slate-400">Email
                                                        Address</label>
                                                    <input
                                                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                        placeholder="Enter Email" type="text">
                                                </div>
                                            </div>
                                            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                                <div class="mb-2">
                                                    <label for="Mobile_No"
                                                        class="font-medium text-sm text-slate-600 dark:text-slate-400">Mobile
                                                        No<small class="text-red-600 text-sm">*</small></label>
                                                    <input
                                                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                        placeholder="Mobile no" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ route('order.show', 5) }}">
                                                <button
                                                    class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Proceed
                                                    to payment</button>
                                            </a>
                                            <button
                                                class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                        </div>
                                    </form>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            {{-- <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto p-4">
                                            <div class="flex items-center mb-4">
                                                <img src="assets/images/logos/card-2.png" alt=""
                                                    class="mr-2 h-8 inline-block">
                                                <div class="self-center">
                                                    <span class="block  font-medium text-slate-700">Master Card</span>
                                                    <h5 class="text-xs font-medium text-slate-500 dark:text-gray-400">Last
                                                        time used: 21 march 2023</h5>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
                                                    <div class="mb-2">
                                                        <label for="Card_name"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Name
                                                            of card :</label>
                                                        <input
                                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                            placeholder="Nmae" type="text">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="Zip_code"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Card
                                                            No :</label>
                                                        <input
                                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                            placeholder="---- ---- ----" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Month"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Expiry
                                                            Month</label>
                                                        <select id="Expiry_Month"
                                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">01</option>
                                                            <option class="dark:text-slate-700">02</option>
                                                            <option class="dark:text-slate-700">03</option>
                                                            <option class="dark:text-slate-700">04</option>
                                                            <option class="dark:text-slate-700">05</option>
                                                            <option class="dark:text-slate-700">06</option>
                                                            <option class="dark:text-slate-700">07</option>
                                                            <option class="dark:text-slate-700">08</option>
                                                            <option class="dark:text-slate-700">09</option>
                                                            <option class="dark:text-slate-700">10</option>
                                                            <option class="dark:text-slate-700">11</option>
                                                            <option class="dark:text-slate-700">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Year"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Expiry
                                                            Year</label>
                                                        <select id="Expiry_Year"
                                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">2024</option>
                                                            <option class="dark:text-slate-700">2025</option>
                                                            <option class="dark:text-slate-700">2026</option>
                                                            <option class="dark:text-slate-700">2027</option>
                                                            <option class="dark:text-slate-700">2028</option>
                                                            <option class="dark:text-slate-700">2029</option>
                                                            <option class="dark:text-slate-700">2030</option>
                                                            <option class="dark:text-slate-700">2031</option>
                                                            <option class="dark:text-slate-700">2032</option>
                                                            <option class="dark:text-slate-700">2033</option>
                                                            <option class="dark:text-slate-700">2034</option>
                                                            <option class="dark:text-slate-700">2035</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="CVV"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">CVV</label>
                                                        <input
                                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                            placeholder="cvv" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <button
                                                class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500 w-full">Confirm
                                                payment $202.00</button>
                                        </div><!--end card-body-->
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto p-4">
                                            <div class="flex items-center mb-4">
                                                <img src="assets/images/logos/card-1.png" alt=""
                                                    class="mr-2 h-8 inline-block">
                                                <div class="self-center">
                                                    <span class="block  font-medium text-slate-700">Visa Card</span>
                                                    <h5 class="text-xs font-medium text-slate-500 dark:text-gray-400">Last
                                                        time used: 21 march 2023</h5>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
                                                    <div class="mb-2">
                                                        <label for="Card_name"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Name
                                                            of card :</label>
                                                        <input
                                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                            placeholder="Nmae" type="text">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="Zip_code"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Card
                                                            No :</label>
                                                        <input
                                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                            placeholder="---- ---- ----" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-4">
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Month"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Expiry
                                                            Month</label>
                                                        <select id="Expiry_Month"
                                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">01</option>
                                                            <option class="dark:text-slate-700">02</option>
                                                            <option class="dark:text-slate-700">03</option>
                                                            <option class="dark:text-slate-700">04</option>
                                                            <option class="dark:text-slate-700">05</option>
                                                            <option class="dark:text-slate-700">06</option>
                                                            <option class="dark:text-slate-700">07</option>
                                                            <option class="dark:text-slate-700">08</option>
                                                            <option class="dark:text-slate-700">09</option>
                                                            <option class="dark:text-slate-700">10</option>
                                                            <option class="dark:text-slate-700">11</option>
                                                            <option class="dark:text-slate-700">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="Expiry_Year"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Expiry
                                                            Year</label>
                                                        <select id="Expiry_Year"
                                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                            <option class="dark:text-slate-700">-- select --</option>
                                                            <option class="dark:text-slate-700">2024</option>
                                                            <option class="dark:text-slate-700">2025</option>
                                                            <option class="dark:text-slate-700">2026</option>
                                                            <option class="dark:text-slate-700">2027</option>
                                                            <option class="dark:text-slate-700">2028</option>
                                                            <option class="dark:text-slate-700">2029</option>
                                                            <option class="dark:text-slate-700">2030</option>
                                                            <option class="dark:text-slate-700">2031</option>
                                                            <option class="dark:text-slate-700">2032</option>
                                                            <option class="dark:text-slate-700">2033</option>
                                                            <option class="dark:text-slate-700">2034</option>
                                                            <option class="dark:text-slate-700">2035</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                                    <div class="mb-2">
                                                        <label for="CVV"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">CVV</label>
                                                        <input
                                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                            placeholder="cvv" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <button
                                                class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500 w-full">Confirm
                                                payment $202.00</button>
                                        </div><!--end card-body-->
                                    </div> <!--end card-->
                                </div><!--end col-->
                            </div><!--end inner-grid--> --}}
                        </div><!--end col-->
                    </div><!--end inner-grid-->
                </div><!--end container-->


            </div><!--end main-->
        </div><!--end page-wrapper-->
    </div><!--end div-->
@endsection
@section('scripts')
    <script src="{{ asset('libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('libs/@frostui/tailwindcss/frostui.js') }}"></script>

    <script src="{{ asset('libs/nice-select2/js/nice-select2.js') }}"></script>
    <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
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
@endsection
