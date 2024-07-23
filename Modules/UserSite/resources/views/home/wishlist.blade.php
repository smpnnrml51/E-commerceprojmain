@extends('layouts.customer')
@section('styles')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('libs/nice-select2/css/nice-select2.css') }}">
    <link href="{{ asset('libs/starability/starability-css/starability-all.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('libs/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{asset('libs/swiper/swiper-bundle.min.css')}}">

    <link href="{{ asset('libs/flatpickr/flatpickr.min.css" type="text/css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">
@endsection
@section('content')
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-56px)] relative pb-0">
                <div class="container my-4">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                            <div class="grid grid-cols-1">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                        <table class="w-full">
                                            <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                        Product & Title
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                        Categories
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                        Stock status
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                        Attributes
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                        Price
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- 1 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">

                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <div class="flex items-center">
                                                            <img src="assets/images/products/02.png" alt=""
                                                                class="me-2 h-8 inline-block">
                                                            <div class="self-center">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                    New Colorfull Shoes </h5>
                                                                <span class="block  font-medium text-slate-500">Size-04-15
                                                                    (Model 2023)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#" class="text-brand-500 underline">Footwear</a>,
                                                        <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">In
                                                            stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <div>color :
                                                            <span class="ms-2">
                                                                <i class="icofont-brand-mts text-pink-500"></i>
                                                            </span>
                                                        </div>
                                                        <div>Size :
                                                            <span class="mx-1">L</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                        $99 <del class="text-slate-500 font-normal">$130</del>
                                                    </td>

                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="icofont-shopping-cart text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- 2 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">

                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <div class="flex items-center">
                                                            <img src="assets/images/products/03.png" alt=""
                                                                class="me-2 h-8 inline-block">
                                                            <div class="self-center">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                    Imported VR Box </h5>
                                                                <span class="block  font-medium text-slate-500">35px 5D
                                                                    (Model 2023)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"
                                                            class="text-brand-500 underline">Entertainment</a>,
                                                        <a href="#" class="text-brand-500 underline">Electronics</a>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">In
                                                            stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <div>color :
                                                            <span class="ms-2">
                                                                <i class="icofont-brand-mts text-black"></i>
                                                            </span>
                                                        </div>
                                                        <div>Size :
                                                            <span class="mx-1">M</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                        $129 <del class="text-slate-500 font-normal">$200</del>
                                                    </td>

                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="icofont-shopping-cart text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- 3 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">

                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <div class="flex items-center">
                                                            <img src="assets/images/products/pro-3.png" alt=""
                                                                class="me-2 h-8 inline-block">
                                                            <div class="self-center">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                    Mannat HD, Smart LED Fire TV </h5>
                                                                <span class="block  font-medium text-slate-500">32 inc
                                                                    (Model 2023)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"
                                                            class="text-brand-500 underline">Electronics</a>,
                                                        <a href="#"
                                                            class="text-brand-500 underline">Entertainment</a>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Soldout</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <div>color :
                                                            <span class="ms-2">
                                                                <i class="icofont-brand-mts text-black"></i>
                                                            </span>
                                                        </div>
                                                        <div>Size :
                                                            <span class="mx-1">51 inc</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                        $399 <del class="text-slate-500 font-normal">$499</del>
                                                    </td>

                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="icofont-shopping-cart text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- 4 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">

                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <div class="flex items-center">
                                                            <img src="assets/images/products/pro-4.png" alt=""
                                                                class="me-2 h-8 inline-block">
                                                            <div class="self-center">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                    Mannat 530 Bluetooth Wireless </h5>
                                                                <span class="block  font-medium text-slate-500">Size-M
                                                                    (Model 2023)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#" class="text-brand-500 underline">Footwear</a>,
                                                        <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">In
                                                            stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <div>color :
                                                            <span class="ms-2">
                                                                <i class="icofont-brand-mts text-red-500"></i>
                                                            </span>
                                                        </div>
                                                        <div>Size :
                                                            <span class="mx-1">L</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                        $79 <del class="text-slate-500 font-normal">$99</del>
                                                    </td>

                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="icofont-shopping-cart text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!--5-->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">

                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <div class="flex items-center">
                                                            <img src="assets/images/products/pro-5.png" alt=""
                                                                class="me-2 h-8 inline-block">
                                                            <div class="self-center">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                    Mannat Watch 3 Active </h5>
                                                                <span class="block  font-medium text-slate-500">Latest
                                                                    Model 2023</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#" class="text-brand-500 underline">Fashion</a>,
                                                        <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">In
                                                            stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <div>color :
                                                            <span class="ms-2">
                                                                <i class="icofont-brand-mts text-orange-500"></i>
                                                            </span>
                                                        </div>
                                                        <div>Size :
                                                            <span class="mx-1">XL</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                        $219 <del class="text-slate-500 font-normal">$299</del>
                                                    </td>

                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="icofont-shopping-cart text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!--6-->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">

                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <div class="flex items-center">
                                                            <img src="assets/images/products/pro-6.png" alt=""
                                                                class="me-2 h-8 inline-block">
                                                            <div class="self-center">
                                                                <h5
                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                    Mannat Watch 3 Active </h5>
                                                                <span class="block  font-medium text-slate-500">Latest
                                                                    Model 2023</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#" class="text-brand-500 underline">Fashion</a>,
                                                        <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">In
                                                            stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <div>color :
                                                            <span class="ms-2">
                                                                <i class="icofont-brand-mts text-purple-500"></i>
                                                            </span>
                                                        </div>
                                                        <div>Size :
                                                            <span class="mx-1">XXL</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                        $219 <del class="text-slate-500 font-normal">$299</del>
                                                    </td>

                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="icofont-shopping-cart text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--end div-->
                                </div><!--end div-->
                            </div><!--end grid-->
                            <div class="flex justify-between mt-4">
                                <div class="self-center">
                                    <p class="dark:text-slate-400">Showing 1 - 20 of 30</p>
                                </div>
                                <div class="self-center">
                                    <ul class="inline-flex items-center -space-x-px">
                                        <li>
                                            <a href="#"
                                                class=" py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <i class="icofont-simple-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page"
                                                class="z-10 py-2 px-3 leading-tight text-brand-600 bg-brand-50 border border-brand-300 hover:bg-brand-100 hover:text-brand-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class=" py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <i class="icofont-simple-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div> <!--end grid-->
                </div><!--end container-->
                <!-- footer -->
                <div
                    class="relative bottom-0 -left-0 -right-0 block print:hidden border-t p-4 bg-black dark:border-slate-700/40">
                    <div class="container">
                        <!-- Footer Start -->
                        <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 pt-10">
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="mb-5">
                                        <a href='/robotech/default/customers-home'>
                                            <img src="assets/images/logo-sm.png" alt=""
                                                class="h-8 inline-block me-3">
                                            <img src="assets/images/logo.png" alt="" class="h-8 inline-block">
                                        </a>
                                    </div>
                                    <p class="text-slate-500 text-lg">It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking at its layout. </p>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <h5 class="text-xl font-semibold text-slate-300 mb-6">Customers</h5>
                                    <ul class="list-none footer-links">
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Home</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Product
                                                details</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Cart</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Checkout</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Wishlist</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Invoice</a>
                                        </li>
                                    </ul>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <h5 class="text-xl font-semibold text-slate-300 mb-6">Admin</h5>
                                    <ul class="list-none footer-links">
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Dashboard</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Add
                                                product</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Orders</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Customers</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Order
                                                details</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Refund</a>
                                        </li>
                                    </ul>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <h5 class="text-xl font-semibold text-slate-300 mb-6 sm:text-center xl:text-left">
                                        Contact Us</h5>
                                    <div class="mb-5">
                                        <p class="text-slate-400 font-semibold">1884 George Avenue<br>
                                            Mobile, AL 36603
                                        </p>
                                    </div>
                                    <div class="flex sm:justify-center xl:justify-start">
                                        <a href=""
                                            class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                        <a href=""
                                            class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                        <a href=""
                                            class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-red-600 hover:border-red-600">
                                            <i class="icofont-google-plus"></i>
                                        </a>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div>
                        <footer
                            class="footer bg-transparent  text-center  font-medium text-slate-400 dark:text-slate-400 md:text-left ">
                            &copy;
                            <script>
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="float-right hidden text-slate-400 dark:text-slate-400 md:inline-block">Crafted
                                with <i class="ti ti-heart text-red-500"></i> by
                                Mannatthemes</span>
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>


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
    <script src="{{ asset('libs/js-image-zoom/js-image-zoom.js') }}"></script>
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
