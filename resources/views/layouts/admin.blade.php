<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Computer Parts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logos/new.png') }}" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">
    @yield('styles')
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->


    <div
        class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#6f3dc3] from-10% via-[#603dc3] via-40% to-[#5c3dc3] to-100% dark:bg-[#603dc3] main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3]">
        <div
            class=" text-center border-b bg-[#603dc3] border-r h-[64px] flex justify-center items-center brand-logo dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3] group-data-[sidebar=brand]:border-slate-700/40">
            <a class='logo' href='{{url('admin')}}'>
                <span>
                    <img src="{{ asset('images/logos/new.png') }}" alt="logo-small"
                        class="logo-sm h-8 align-middle inline-block">
                </span>
                <span>
                    {{-- <img src="{{ asset('images/logos/new.png') }}" alt="logo-large"
                        class="logo-lg h-[28px] logo-light hidden dark:inline-block ms-1 group-data-[sidebar=dark]:inline-block group-data-[sidebar=brand]:inline-block"> --}}
                    <img src="{{ asset('images/logos/new.png') }}" alt="logo-large"
                        class="logo-lg h-[28px] logo-dark inline-block dark:hidden ms-1 group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden">
                </span>
                <span>VYOMITE</span>
            </a>
        </div>
        <div class="border-r pb-14 h-[100vh] dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40"
            data-simplebar>
            <div class="p-4 block">
                <ul class="navbar-nav">
                    <li
                        class="uppercase text-[11px]  text-primary-500 dark:text-primary-400 mt-0 leading-4 mb-2 group-data-[sidebar=dark]:text-primary-400 group-data-[sidebar=brand]:text-primary-300">
                        <span
                            class="text-[9px] text-slate-600 dark:text-slate-500 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">DashboardS
                            & Apps</span>
                    </li>
                    <li>
                        <div id="parent-accordion" data-fc-type="accordion">
                            <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="home"
                                    class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Admin</span>
                                <i
                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>

                            <div id="Admin-flush" class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href="{{ route('admin.dashboard') }}">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href="{{url('category')}}">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Category
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href="{{url('product')}}">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Products
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='{{url('product/create')}}'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Add New Product
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href={{url('customer')}}>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Customers
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/admin-customers-details'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Customers Details
                                        </a>
                                    </li> --}}
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='{{url('orders')}}'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Orders
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='{{url('orderDetails')}}'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Order Details
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/admin-refund'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Refund
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                            {{-- <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="home"
                                    class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Customer</span>
                                <i
                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>
                            <div id="Customer-flush" class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-home'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-pro-details'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Product details
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-products'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Product filter
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-cart'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Cart
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-checkout'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Checkout
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-profile'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-stores'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Favourite store
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-wishlist'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Wishlist
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-order-track'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Order track
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200'
                                            href='/robotech/default/customers-invoice'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Invoice
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <a href="#"
                                    class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
                                    <span data-lucide="grid"
                                        class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                    <span>Apps</span>
                                    <i
                                        class="icofont-thin-down fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                                </a>
                            </div>
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2" id="apps-accordion"
                                    data-fc-type="accordion">
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200  flex items-center decoration-0 px-3 py-3'
                                            href='/robotech/default/apps-chat'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Chat
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                            href='/robotech/default/apps-contact-list'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Contact List
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                            href='/robotech/default/apps-calendar'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                            href='/robotech/default/apps-files'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            File Mamager
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                            href='/robotech/default/apps-invoice'>
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <div id="Email" data-fc-type="collapse" data-fc-parent="apps-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                                aria-expanded="false" aria-controls="Email-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Email</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400  fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Email-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Email">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/apps-email-inbox'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Inbox
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/apps-email-read'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Read Email
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>


                            <div
                                class="border-b border-dashed dark:border-slate-700/40 my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40">
                            </div>
                            <div
                                class="text-[9px] text-slate-600 dark:text-slate-500 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">
                                C<span>omponents & Extra</span>
                            </div>
                            <div data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <a href="#"
                                    class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
                                    <span data-lucide="box"
                                        class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                    <span>UI Kit</span>
                                    <i
                                        class="icofont-thin-down fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                                </a>
                            </div>
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2" id="UI_Kit-accordion"
                                    data-fc-type="accordion">
                                    <li>
                                        <div id="UI_Elements" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="UI_Elements-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>UI Elements</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="UI_Elements-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="UI_Elements">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-alerts'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Alerts
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-avatars'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Avatars
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-buttons'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Buttons
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-badges'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Budges
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-cards'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Cards
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-carousels'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Carousels
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-dropdowns'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Dropdowns
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-grids'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Grids
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-images'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Images
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-lists'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Lists
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-modals'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Modals
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-navs'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Navs
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-navbars'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Navbars
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-paginations'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Paginations
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-popover-tooltips'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Popover & Tooltips
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-progress'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Progress
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-spinners'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Spinners
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-tabs-accordions'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Tabs & Accordions
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-typography'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Typography
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/ui-videos'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Videos
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <div id="Advanced_UI" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                                aria-expanded="false" aria-controls="Advanced_UI-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Advanced UI</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400  fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Advanced_UI-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Advanced_UI">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-animation'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Animation
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-clipboard'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Clipboard
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-dragula'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Dragula
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-highlight'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Highlight
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-rangeslider'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Range Slider
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-ratings'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Ratings
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-ribbons'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Ribbons
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/advanced-sweetalerts'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Sweet Alert
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <div id="Forms" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Forms-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Forms</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Forms-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Forms">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/forms-elements'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Basic Elements
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/forms-advance'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Advanced Elements
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/forms-validation'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Validation
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/forms-wizard'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Wizard
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/forms-editors'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Editors
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/forms-uploads'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Uploads
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/forms-img-crop'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Image Crop
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
{{-- 
                                    <li>
                                        <div id="Charts" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Charts-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Charts</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Charts-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Charts">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/charts-apex'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Apex
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/charts-echarts'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Echarts
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/charts-justgage'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        JustGage
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/charts-chartjs'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Chartjs
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/charts-toast-ui'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        ToastUI
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    {{-- <li>
                                        <div id="Tables" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Tables-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Tables</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Tables-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Tables">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/tables-basic'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Basic
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/tables-datatable'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Datatable
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    {{-- <li>
                                        <div id="Icons" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Icons-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Icons</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Icons-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Icons">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/icons-lucide'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Lucide
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/icons-fontawesome'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Fontawesome
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/icons-icofont'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Icofont
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    {{-- <li>
                                        <div id="Maps" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Maps-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Maps</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Maps-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Maps">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/maps-google'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Google Maps
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/maps-leaflet'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Leaflet Maps
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/maps-vector'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Vector Maps
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    {{-- <li>
                                        <div id="Email-Temp" data-fc-type="collapse"
                                            data-fc-parent="UI_Kit-accordion">
                                            <a href="#"
                                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                                aria-expanded="false" aria-controls="Email-Temp-flush">
                                                <i
                                                    class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                <span>Email Templates</span>
                                                <i
                                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180"></i>
                                            </a>
                                        </div>
                                        <div id="Email-Temp-flush" class=" hidden  overflow-hidden "
                                            aria-labelledby="Email-Temp">
                                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/email-templates-alert'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Alert Email
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/email-templates-basic'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Basic Email
                                                    </a>
                                                </li>
                                                <li class="nav-item relative block">
                                                    <a class='nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3'
                                                        href='/robotech/default/email-templates-billing'>
                                                        <i
                                                            class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                        Billing Email
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav id="topbar"
        class="topbar border-b  dark:border-slate-700/40  fixed inset-x-0  duration-300
             block print:hidden z-50">
        <div
            class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
            <div class="ltr:mx-2  rtl:mx-2">
                <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
                    <!-- <i class="ti ti-chevrons-left text-3xl  top-icon"></i> -->
                    <i data-lucide="menu" class="top-icon w-5 h-5"></i>
                </button>
            </div>
            <div class="flex items-center md:w-[40%] lg:w-[30%] xl:w-[20%]">
                <div class="relative ltr:mx-2 rtl:mx-2 self-center">
                    <button
                        class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white"><i
                            class="ti ti-plus me-1"></i> New Task</button>
                </div>
            </div>

            <div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" aria-expanded="false"
                        data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="search" class="top-icon w-5 h-5"></span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden min-w-[300px]
                    list-none divide-y  divide-gray-100 rounded-md border-slate-700
                    md:border-white text-base shadow dark:divide-gray-600 bg-white
                    dark:bg-slate-800"
                        onclick="event.stopPropagation()">
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center
                        pl-3">
                                <i class="ti ti-search text-gray-400 z-10"></i>
                            </div>
                            <input type="text" id="email-adress-icon"
                                class="block w-full rounded-lg border border-slate-200 dark:border-slate-700/60 bg-slate-200/10 p-1.5
                        pl-10 text-slate-600 dark:text-slate-400 outline-none focus:border-slate-300
                        focus:ring-slate-300 dark:bg-slate-800/20 sm:text-sm"
                                placeholder="Search..." />
                        </div>
                    </div>
                </div>
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">

                    <button id="toggle-theme" class="flex rounded-full md:me-0 relative">
                        <span data-lucide="moon" class="top-icon w-5 h-5 light "></span>
                        <span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
                    </button>
                </div>
                <div class="ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" id="Notifications"
                        aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="bell" class="top-icon w-5 h-5"></span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden w-64
                    list-none divide-y h-52 divide-gray-100 rounded border border-slate-700/10
                   text-base shadow dark:divide-gray-600 bg-white
                    dark:bg-slate-800"
                        id="navNotifications" data-simplebar>
                        <ul class="py-1" aria-labelledby="navNotifications">
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                            <span data-lucide="shopping-cart"
                                                class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
                                        </div>
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium text-gray-900 truncate
                                dark:text-gray-300">
                                                Karen Robinson</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                Hey ! i'm available here
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                            src="assets/images/users/avatar-3.png" alt="logo" />
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium text-gray-900 truncate
                                dark:text-gray-300">
                                                Your order is placed</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                Dummy text of the printing and industry.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                            <span data-lucide="user"
                                                class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
                                        </div>
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium text-gray-900 truncate
                                dark:text-gray-300">
                                                Robert McCray</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                Good Morning!
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                            src="assets/images/users/avatar-9.png" alt="logo" />
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium  text-gray-900 truncate
                                dark:text-gray-300">
                                                Meeting with designers</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                It is a long established fact that a reader.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="me-2  dropdown relative">
                    <button type="button"
                        class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0"
                        id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <img class="h-8 w-8 rounded-full" src="{{asset('/images/users/avatar-1.png')}}" alt="user photo" />
                        <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                            <span class="block font-medium text-slate-600 dark:text-gray-300">Maria Gibson</span>
                            <span class="-mt-0.5 block text-xs text-slate-500 dark:text-gray-400">Admin</span>
                        </span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border border-slate-700/10
                    text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-40"
                        id="navUserdata">

                        <ul class="py-1" aria-labelledby="navUserdata">
                            {{-- <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="user"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="settings"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="dollar-sign"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Earnings</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('admin.logout') }}"
                                    class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600
                          dark:text-red-500 dark:hover:bg-gray-900/20
                          dark:hover:text-red-500">
                                    <span data-lucide="power"
                                        class="w-4 h-4 inline-block text-red-500 dark:text-red-500 me-2"></span>
                                    Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    {{-- <div class="ltr:flex flex-1 rtl:flex-row-reverse">
            <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
                <div class="xl:w-full">
                    <div class="flex flex-wrap">
                        <div class="flex items-center py-4 w-full">
                            <div class="w-full">
                                <div class="">
                                    <div class="flex flex-wrap justify-between">
                                        <div class="items-center ">
                                            <h1 class="font-medium text-3xl block dark:text-slate-100">Ecommerce</h1>
                                            <ol class="list-reset flex text-sm">
                                                <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-gray-500 dark:text-slate-400">Dashboard</li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Ecommerce</li>
                                            </ol>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly  required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end container--> --}}


    {{--
                <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center">
                                            <p class="text-gray-800 font-semibold dark:text-slate-400 text-lg uppercase">Total orders</p>
                                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">14253</h3>
                                        </div>
                                        <div class="self-center">
                                            <i data-lucide="shopping-cart" class=" h-16 w-16 stroke-primary-500/30"></i>
                                        </div>
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                </div><!--end card-body-->
                                <div class="flex-auto p-0 overflow-hidden">
                                    <div class="flex mb-0 h-full">
                                        <div class="w-full">
                                            <div class="apexchart-wrapper">
                                                <div id="apex_column1" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end inner-grid-->
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center">
                                            <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">New customers</p>
                                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">532</h3>
                                        </div>
                                        <div class="self-center">
                                            <i data-lucide="users" class=" h-16 w-16 stroke-green/30"></i>
                                        </div>
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-red-500"><i class="mdi mdi-trending-down"></i>0.6%</span> Bounce Rate Weekly</p>
                                </div><!--end card-body-->
                                <div class="flex-auto p-0 overflow-hidden">
                                    <div class="flex mb-0 h-full">
                                        <div class="w-full">
                                            <div class="apexchart-wrapper">
                                                <div id="dash_spark_1" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end inner-grid-->
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center">
                                            <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">Top coupons</p>
                                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">78%</h3>
                                        </div>
                                        <div class="self-center">
                                            <i data-lucide="gem" class=" h-16 w-16 stroke-yellow-500/30"></i>
                                        </div>
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                                </div><!--end card-body-->
                                <div class="flex-auto p-0 overflow-hidden">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-6">
                                            <div id="ana_device" class="apex-charts"></div>
                                        </div><!--end col-->
                                        <div class="col-span-6">
                                            <ol class="list-none list-inside">
                                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-primary-500 text-lg"></i> Sent</li>
                                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-green-500 text-lg"></i> Opened</li>
                                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-red-500 text-lg"></i> Not Opened</li>
                                            </ol>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div><!--end card-body-->
                            </div> <!--end inner-grid-->
                        </div>
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-[#1b1b22] shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center">
                                            <p class="text-gray-300 font-semibold dark:text-slate-400 uppercase">Total Revenue</p>
                                            <h3 class="my-4 font-semibold text-[30px] text-slate-200">$85000</h3>
                                        </div>
                                        <div class="self-center">
                                            <i data-lucide="dollar-sign" class=" h-16 w-16 stroke-[#2ecee1]/30"></i>
                                        </div>
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                                </div><!--end card-body-->
                                <div class="flex-auto p-4 pt-0 -mt-1">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">

                                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-3">
                                            <img src="assets/images/widgets/wallet.png" alt="" class="w-full h-auto">
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-8 text-end self-center">
                                            <button class="px-4 py-1 font-medium text-white transition duration-200 ease-in-out delay-200 skew-y-6 bg-brand-600 border-b-4 border-brand-700 rounded shadow-lg shadow-brand-600/50 hover:skew-y-0 hover:border-brand-700">Withdrawal</button>
                                            <!-- <button class="px-2 py-1 bg-brand-500 border border-transparent collapse:bg-green-100 text-white text-sm rounded hover:bg-brand-600 hover:text-white">Withdrawal</button> -->
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end inner-grid-->
                        </div><!--end col-->
                    </div> <!--end grid-->

                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4">
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-4">
                                            <img src="assets/images/widgets/user.png" alt="" class="h-auto w-full">
                                        </div><!--end col-->
                                        <div class="col-span-12 sm:col-span-8 self-center">
                                            <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 dark:text-slate-400 text-xl">A Guide to Analyze and Optimize Your Online Business</h4>
                                        </div><!--end col-->
                                    </div><!--end grid-->

                                    <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                                    <div class="grid grid-cols-12 gap-4 mb-8">
                                        <div class="col-span-12 sm:col-span-6">
                                            <div id="email_report" class="apex-charts -mb-4"></div>
                                        </div><!--end col-->
                                        <div class="col-span-12 sm:col-span-6 self-center">
                                            <ol class="list-none list-inside mb-3">
                                                <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-ui-play me-2 text-brand-500"></i> Tablet</li>
                                                <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-ui-play me-2 text-yellow-400"></i> Desktop</li>
                                                <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-ui-play me-2 text-[#13939c]"></i> Moble</li>
                                            </ol>
                                            <button type="button" class="inline-block shadow-sm dark:shadow-slate-700/10 focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white bg-transparent border border-slate-300 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                    <h6 class="bg-brand-400/5 shadow-sm dark:shadow-slate-700/10 border border-dashed dark:text-brand-300 border-brand dark:bg-slate-700/40 py-3 px-2 rounded-md  text-center text-brand-500 font-medium mt-3">
                                        <i class="ti ti-calendar self-center text-lg mr-1"></i>
                                        01 January 2023 to 31 December 2024
                                    </h6>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8">
                            <div class="w-full relative mb-4">
                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                    <div class="flex-none md:flex">
                                        <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Sales Report</h4>
                                        <div class="dropdown inline-block">
                                            <button data-fc-autoclose="both" data-fc-type="dropdown" class="dropdown-toggle px-3 py-1 text-xs font-medium text-gray-500 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-50 hover:text-slate-800 focus:z-10 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                                This Month
                                                <i class="fas fa-chevron-down text-xs ml-2"></i>
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div class="right-auto md:right-0 hidden z-10 w-28 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last Week</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last Month</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">This Year</a>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-auto p-4">
                                    <div id="crm-dash" class="apex-charts mt-5"></div>
                                </div><!--end card-body-->
                            </div> <!--end inner-grid-->
                        </div><!--end col-->


                    </div> <!--end grid-->
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900   rounded-md w-full relative">
                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-4 px-4 dark:text-slate-300/70">
                                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Earnings Reports</h4>
                                    <p class="text-sm text-slate-400">Earnings Reports Last Week <span class="focus:outline-none text-[11px] bg-brand-500/10 text-brand-500 dark:text-brand-300 rounded font-medium py-[2px] px-2">$18532</span></p>
                                </div><!--end header-title-->
                                <div class="grid grid-cols-1 p-4">
                                    <div class="sm:-mx-6 lg:-mx-8">
                                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                            <table class="w-full">
                                                <thead class="bg-brand-400/10 dark:bg-slate-700/20">
                                                    <tr>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Date
                                                        </th>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Item Count
                                                        </th>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Tex
                                                        </th>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Earnings
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- 1 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                            01 January
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            50
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                           <span class="text-red-500">$70</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                            <span class="font-semibold">$15,000</span>
                                                        </td>
                                                    </tr>
                                                    <!-- 2 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                            02 January
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            25
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                           <span class="text-slate-100">-</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                            <span class="font-semibold">$15,000</span>
                                                        </td>
                                                    </tr>
                                                    <!-- 3 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                            03 January
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            65
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                           <span class="text-red-500">$115</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                            <span class="font-semibold">$35,000</span>
                                                        </td>
                                                    </tr>
                                                    <!-- 4 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                            04 January
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            20
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                           <span class="text-slate-500">-</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                            <span class="font-semibold">$8,500</span>
                                                        </td>
                                                    </tr>
                                                    <!-- 5 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                            05 January
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            20
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                           <span class="text-slate-500">-</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                            <span class="font-semibold">$8,500</span>
                                                        </td>
                                                    </tr>
                                                    <!-- 6 -->
                                                    <tr class="bg-white  dark:bg-gray-900">
                                                        <td class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                            06 January
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            40
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                           <span class="text-red-500">$60</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                            <span class="font-semibold">$12,000</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900   rounded-md w-full relative">
                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-4 px-4 dark:text-slate-300/70">
                                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Most Populer Products</h4>
                                    <p class="text-sm text-slate-400">New Products Last Week <span class="focus:outline-none text-[11px] bg-brand-500/10 text-brand-500 dark:text-brand-300 rounded font-medium py-[2px] px-2">5</span></p>
                                </div><!--end header-title-->
                                <div class="grid grid-cols-1 p-4">
                                    <div class="sm:-mx-6 lg:-mx-8">
                                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                            <table class="w-full">
                                                <thead class="bg-brand-400/10 dark:bg-slate-700/20">
                                                    <tr>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Product
                                                        </th>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Price
                                                        </th>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Sell
                                                        </th>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Status
                                                        </th>
                                                        <th scope="col" class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- 1 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                            <img src="assets/images/products/01.png" alt="" class="me-2 h-10 inline-block">Robotech Camera EDM 5D(White)
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            $50 <del class="text-gray-400">$90</del>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            450<small class="text-gray-400">(500)</small>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <span class="focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                            <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!-- 2 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                            <img src="assets/images/products/03.png" alt="" class="me-2 h-10 inline-block">Robotech VR 5D (Black)
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            $39 <del class="text-gray-400">$99</del>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            700<small class="text-gray-400">(700)</small>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <span class="focus:outline-none text-[12px] bg-red-500/10 text-red-700 dark:text-red-400 rounded font-medium py-1 px-2">Sold</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                            <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!-- 3 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                            <img src="assets/images/products/02.png" alt="" class="me-2 h-10 inline-block">Robotech Shoes Max-Zon
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            $49 <del class="text-gray-400">$88</del>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            850<small class="text-gray-400">(900)</small>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <span class="focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                            <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!-- 4 -->
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                            <img src="assets/images/products/04.png" alt="" class="me-2 h-10 inline-block">Robotech Mask N99 [ISI]
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            $5 <del class="text-gray-400">$9</del>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            1850<small class="text-gray-400">(2000)</small>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <span class="focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                            <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                        </td>
                                                    </tr>
                                                    <!-- 5 -->
                                                    <tr class="bg-white  dark:bg-gray-900">
                                                        <td class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                            <img src="assets/images/products/01.png" alt="" class="me-2 h-10 inline-block">Robotech Camera EDM 5D(White)
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            $50 <del class="text-gray-400">$90</del>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            450<small class="text-gray-400">(500)</small>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <span class="focus:outline-none text-[12px] bg-red-500/10 text-red-700 dark:text-red-400 rounded font-medium py-1 px-2">Sold</span>
                                                        </td>
                                                        <td class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                            <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div><!--end col-->
                    </div><!--end inner-grid--> --}}
    {{-- <!-- footer -->
                    <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                        <div class="container">
                          <!-- Footer Start -->
                          <footer
                            class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left "
                          >
                            &copy;
                            <script>
                              var year = new Date();document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
                              >Crafted with <i class="ti ti-heart text-red-500"></i> by
                              Mannatthemes</span
                            >
                          </footer>
                          <!-- end Footer -->
                        </div>
                    </div> --}}


    {{-- </div><!--end container-->
            </div>
        </div> --}}

    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="{{ asset('libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('libs/@frostui/tailwindcss/frostui.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/pages/analytics-index.init.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
    @yield('scripts')
</body>

</html>
