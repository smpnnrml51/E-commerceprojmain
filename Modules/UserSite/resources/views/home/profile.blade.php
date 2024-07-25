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
                    <div
                        class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-9 ">
                            <div class="w-full relative">
                                <div class="flex-auto">
                                    <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                            <li class="me-2" role="presentation">
                                                <button class="inline-block p-4 rounded-t-lg border-b-2 active "
                                                    id="myOrders-tab" data-fc-target="#myOrders" type="button"
                                                    role="tab" aria-controls="myOrders" aria-selected="false">My
                                                    Orders</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="myTabContent">
                                        <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="myOrders"
                                            role="tabpanel" aria-labelledby="myOrders-tab">
                                            <div class="grid grid-cols-1">
                                                <div class="sm:-mx-6 lg:-mx-8">
                                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                        <table class="w-full">
                                                            <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                                <tr>
                                                                    <th scope="col"
                                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Order ID
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Product & Title
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Delivery Method
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Date
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Status
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                        Payment
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
                                                                    <td
                                                                        class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="#" class="text-brand-500">#556633</a>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        <div class="flex items-center">
                                                                            <img src="assets/images/products/02.png"
                                                                                alt=""
                                                                                class="me-2 h-8 inline-block">
                                                                            <div class="self-center">
                                                                                <h5
                                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                    New Colorfull Shoes </h5>
                                                                                <span
                                                                                    class="block  font-medium text-slate-500">Size-04-15
                                                                                    (Model 2023)</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        Cash on delivery
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        05 June 2023
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        <span
                                                                            class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Shipped</span>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                        $99
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
                                                                    <td
                                                                        class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="#" class="text-brand-500">#362514</a>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        <div class="flex items-center">
                                                                            <img src="assets/images/products/pro-7.png"
                                                                                alt=""
                                                                                class="me-2 h-8 inline-block">
                                                                            <div class="self-center">
                                                                                <h5
                                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                    Mannat Air 2023 Laptop</h5>
                                                                                <span
                                                                                    class="block  font-medium text-slate-500">Size-
                                                                                    13.3 Inch (Model 2023)</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        Cash on delivery
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        21 July 2023
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        <span
                                                                            class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Cancelled</span>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                        $120
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
                                                                <tr class="bg-white dark:bg-gray-900 ">
                                                                    <td
                                                                        class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                        <a href="#"
                                                                            class="text-brand-500">#965847</a>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        <div class="flex items-center">
                                                                            <img src="assets/images/products/pro-5.png"
                                                                                alt=""
                                                                                class="me-2 h-8 inline-block">
                                                                            <div class="self-center">
                                                                                <h5
                                                                                    class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                    Mannat Watch 3 Active</h5>
                                                                                <span
                                                                                    class="block  font-medium text-slate-500">Latest
                                                                                    Model 2023</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        Online
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        05 June 2023
                                                                    </td>
                                                                    <td
                                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                        <span
                                                                            class="bg-yellow-600/5 text-yellow-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Pending</span>
                                                                    </td>
                                                                    <td
                                                                        class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                        $320
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
                                        </div>
                                        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="reviews"
                                            role="tabpanel" aria-labelledby="reviews-tab">
                                            <p
                                                class="text-lg text-gray-300 dark:text-gray-400 font-semibold text-center p-10">
                                                Your review list is empty right now, thank you for providing us your
                                                opinions.
                                            </p>
                                            <!-- Your content start here -->
                                        </div>
                                        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="coupons"
                                            role="tabpanel" aria-labelledby="coupons-tab">
                                            <p
                                                class="text-lg text-gray-300 dark:text-gray-400 font-semibold text-center p-10">
                                                There's no coupons here.
                                            </p>
                                            <!-- Your content start here -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-->
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-3 ">
                            <div class="w-full relative py-5">
                                <div class="flex-auto  text-center">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full px-4 flex justify-center">
                                            <div class="relative">
                                                <img alt="..." src="assets/images/users/avatar-11.jpg"
                                                    class="rounded-full">

                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <h3 class="text-xl font-semibold">
                                                Jenna Stones
                                            </h3>
                                            <div class="text-sm mb-2  text-slate-400">
                                                <i class="icofont-google-map me-2 text-lg "></i>
                                                Los Angeles, California
                                            </div>
                                        </div>
                                        <div class="w-full px-4 text-center">
                                            <div class="flex justify-center">
                                                <div class=" p-3 text-center">
                                                    <span class="text-xl font-semibold block text-slate-800">
                                                        $782
                                                    </span>
                                                    <span class="text-sm ">Total Spent</span>
                                                </div>
                                                <div class="p-3 text-center">
                                                    <span class="text-xl font-semibold block text-slate-800">
                                                        57
                                                    </span>
                                                    <span class="text-sm ">Total Orders</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3">
                                    </div>
                                    <div class="text-center ">
                                        <div class="mb-2 text-slate-600">
                                            <i class="icofont-email me-2 text-lg text-primary-500"></i>
                                            example@example.com
                                        </div>
                                        <div class="mb-2 text-slate-600">
                                            <i class="icofont-phone me-2 text-lg text-primary-500"></i>
                                            +1 234-567-890
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-->
                        </div><!--end col-->
                    </div><!--end inner-grid-->
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
    <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        NiceSelect.bind(document.querySelector(".nice-select"));
    </script>
@endsection
