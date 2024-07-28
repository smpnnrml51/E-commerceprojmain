@extends('layouts.admin')
@section('styles')
    <nav id="topbar" class="topbar border-b dark:border-slate-700/40 fixed inset-x-0 duration-300 block print:hidden z-50">
        <div
            class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
            <div class="ltr:mx-2 rtl:mx-2">
                <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
                    <!-- <i class="ti ti-chevrons-left text-3xl  top-icon"></i> -->
                    <i data-lucide="menu" class="top-icon w-5 h-5"></i>
                </button>
            </div>
            <div class="flex items-center md:w-[40%] lg:w-[30%] xl:w-[20%]">
                <div class="relative ltr:mx-2 rtl:mx-2 self-center">
                    <button
                        class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white">
                        <i class="ti ti-plus me-1"></i> New Task
                    </button>
                </div>
            </div>

            <div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" aria-expanded="false"
                        data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="search" class="top-icon w-5 h-5"></span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden min-w-[300px] list-none divide-y divide-gray-100 rounded-md border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
                        onclick="event.stopPropagation()">
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="ti ti-search text-gray-400 z-10"></i>
                            </div>
                            <input type="text" id="email-adress-icon"
                                class="block w-full rounded-lg border border-slate-200 dark:border-slate-700/60 bg-slate-200/10 p-1.5 pl-10 text-slate-600 dark:text-slate-400 outline-none focus:border-slate-300 focus:ring-slate-300 dark:bg-slate-800/20 sm:text-sm"
                                placeholder="Search..." />
                        </div>
                    </div>
                </div>
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">
                    <button id="toggle-theme" class="flex rounded-full md:me-0 relative">
                        <span data-lucide="moon" class="top-icon w-5 h-5 light"></span>
                        <span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
                    </button>
                </div>
                <div class="ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" id="Notifications"
                        aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="bell" class="top-icon w-5 h-5"></span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden w-64 list-none divide-y h-52 divide-gray-100 rounded border border-slate-700/10 text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
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
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                                Karen Robinson
                                            </p>
                                            <p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
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
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                                Your order is placed
                                            </p>
                                            <p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
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
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                                Robert McCray
                                            </p>
                                            <p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
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
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                                Meeting with designers
                                            </p>
                                            <p class="text-gray-500 mb-0 text-xs truncate dark:text-gray-400">
                                                It is a long established fact that a reader.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="me-2 dropdown relative">
                    <button type="button"
                        class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0"
                        id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <img class="h-8 w-8 rounded-full" src="assets/images/users/avatar-1.png" alt="user photo" />
                        <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                            <span class="block font-medium text-slate-600 dark:text-gray-300">Maria Gibson</span>
                            <span class="-mt-0.5 block text-xs text-slate-500 dark:text-gray-400">Admin</span>
                        </span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border border-slate-700/10 text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-40"
                        id="navUserdata">
                        <ul class="py-1" aria-labelledby="navUserdata">
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
                                    <span data-lucide="user"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
                                    <span data-lucide="settings"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">
                                    <span data-lucide="dollar-sign"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Earnings</a>
                            </li>
                            <li>
                                <a href="auth-lockscreen.html"
                                    class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600 dark:text-red-500 dark:hover:bg-gray-900/20 dark:hover:text-red-500">
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

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div
            class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center">
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">
                                            Customers
                                        </h1>
                                        <ol class="list-reset flex text-sm">
                                            <li>
                                                <a href="#" class="text-gray-500 dark:text-slate-400">Vyomite</a>
                                            </li>
                                            <li>
                                                <span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
                                            </li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li>
                                                <span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
                                            </li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                                Customers
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                            <input type="text"
                                                class="dash_date border-0 focus:border-0 focus:outline-none" readonly
                                                required="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->

            <div class="xl:w-full min-h-[calc(100vh-138px)] relative pb-14">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="w-full relative mb-4">
                            <div class="flex-auto p-0 md:p-4">
                                {{-- <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                        <li class="me-2" role="presentation">
                                            <button class="inline-block p-4 rounded-t-lg border-b-2 active" id="all-tab"
                                                data-fc-target="#all" type="button" role="tab" aria-controls="all"
                                                aria-selected="false">
                                                All <span class="text-slate-400">(4251)</span>
                                            </button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button
                                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                id="new-tab" data-fc-target="#new" type="button" role="tab"
                                                aria-controls="new" aria-selected="false">
                                                New <span class="text-slate-400">(3255)</span>
                                            </button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button
                                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                id="vip-tab" data-fc-target="#vip" type="button" role="tab"
                                                aria-controls="vip" aria-selected="false">
                                                VIP <span class="text-slate-400">(25)</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div> --}}
                                {{-- <div class="flex flex-wrap gap-4 mb-3">
                                    <div class="mb-2 w-44">
                                        <select id="Category"
                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                            <option class="dark:text-slate-700">
                                                All Category
                                            </option>
                                            <option class="dark:text-slate-700">Electronics</option>
                                            <option class="dark:text-slate-700">Furniture</option>
                                            <option class="dark:text-slate-700">Footwear</option>
                                            <option class="dark:text-slate-700">Clothes</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 w-36">
                                        <select id="Country"
                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                            <option class="dark:text-slate-700">All Country</option>
                                            <option class="dark:text-slate-700">USA</option>
                                            <option class="dark:text-slate-700">India</option>
                                            <option class="dark:text-slate-700">Russia</option>
                                        </select>
                                    </div>
                                    <div class="ms-auto">
                                        <form>
                                            <div class="relative">
                                                <div
                                                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                    <i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
                                                </div>
                                                <input type="search" id="productSearch"
                                                    class="form-input w-52 rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700 pl-10 p-2.5"
                                                    placeholder="search" />
                                            </div>
                                        </form>
                                    </div>
                                    <div>
                                        <button
                                            class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white text-md font-medium py-2 px-4 rounded">
                                            Add product
                                        </button>
                                    </div>
                                </div> --}}

                                <div id="myTabContent">
                                    <div class="active p-4 bg-gray-50 rounded-lg dark:bg-gray-800/40" id="all"
                                        role="tabpanel" aria-labelledby="all-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-gray-700/20">
                                                            <tr>
                                                                <th scope="col" class="p-3">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Customer
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Phone
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Email
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Stock
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Last Order
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Invoice
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
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-2.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Merri Diamond
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    14 Jan 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $1255
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- 2 -->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-1.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Nicolas Wright
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    20 Feb 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $785
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- 3 -->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-4.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Luna Winston
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    28 Feb 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $3330
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- 4 -->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-3.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Alejandro Ruiz
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Not
                                                                        active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    02 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $990
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--5-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-5.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Jesus Oates
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    18 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $1000
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--6-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-6.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Glenn Rogers
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    29 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $2250
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--7-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-7.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                April Boyce
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Not
                                                                        active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    11 Apr 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $2750
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--8-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-8.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Maria Johnson
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    15 Apr 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $440
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--9-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-9.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Anna Ruiz
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    24 Apr 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $660
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--10-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-10.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Lisa Henriquez
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    04 May 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $1580
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end div-->
                                            </div>
                                            <!--end div-->
                                        </div>
                                        <!--end grid-->
                                        <div class="flex justify-between mt-4">
                                            <div class="self-center">
                                                <p class="dark:text-slate-400">
                                                    Showing 1 - 20 of 1,524
                                                </p>
                                            </div>
                                            <div class="self-center">
                                                <ul class="inline-flex items-center -space-x-px">
                                                    <li>
                                                        <a href="#"
                                                            class="py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
                                                            class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                            <i class="icofont-simple-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="new"
                                        role="tabpanel" aria-labelledby="new-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                            <tr>
                                                                <th scope="col" class="p-3">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Customer
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Phone
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Email
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Stock
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Last Order
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Invoice
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
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-4.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Luna Winston
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    28 Feb 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $3330
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- 2 -->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-3.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Alejandro Ruiz
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Not
                                                                        active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    02 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $990
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--3-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-5.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Jesus Oates
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    18 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $1000
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--4-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-6.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Glenn Rogers
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    29 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $2250
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--5-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-7.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                April Boyce
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Not
                                                                        active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    11 Apr 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $2750
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end div-->
                                            </div>
                                            <!--end div-->
                                        </div>
                                        <!--end grid-->
                                        <div class="flex justify-between">
                                            <div class="self-center">
                                                <p class="dark:text-slate-400">
                                                    Showing 1 - 20 of 1,524
                                                </p>
                                            </div>
                                            <div class="self-center">
                                                <ul class="inline-flex items-center -space-x-px">
                                                    <li>
                                                        <a href="#"
                                                            class="py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
                                                            class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                            <i class="icofont-simple-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="vip"
                                        role="tabpanel" aria-labelledby="vip-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                            <tr>
                                                                <th scope="col" class="p-3">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Customer
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Phone
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Email
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Stock
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Last Order
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Invoice
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
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-1.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Nicolas Wright
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    20 Feb 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $785
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- 2 -->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-4.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Luna Winston
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    28 Feb 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $3330
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- 3 -->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-3.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Alejandro Ruiz
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Not
                                                                        active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    02 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $990
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--4-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5 inline-block text-center -mb-[5px]">
                                                                            <input type="checkbox" class="hidden" />
                                                                            <i
                                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-5.png"
                                                                            alt=""
                                                                            class="me-2 h-8 inline-block" />
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Jesus Oates
                                                                            </h5>
                                                                            <span
                                                                                class="block font-medium text-slate-500">New
                                                                                York USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    +1 123 456789
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#">exemple@gmail.com</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Active</span>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    18 Mar 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $1000
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end div-->
                                            </div>
                                            <!--end div-->
                                        </div>
                                        <!--end grid-->
                                        <div class="flex justify-between">
                                            <div class="self-center">
                                                <p class="dark:text-slate-400">
                                                    Showing 1 - 20 of 1,524
                                                </p>
                                            </div>
                                            <div class="self-center">
                                                <ul class="inline-flex items-center -space-x-px">
                                                    <li>
                                                        <a href="#"
                                                            class="py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
                                                            class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                            <i class="icofont-simple-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end grid-->
                <!-- footer -->
                <div
                    class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                    <div class="container">
                        <!-- Footer Start -->
                        <footer
                            class="footer bg-transparent text-center font-medium text-slate-600 dark:text-slate-400 md:text-left">
                            &copy;
                            <script>
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script>
                            Vyomite
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end page-wrapper-->
    </div>
    <!--end /div-->

    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
    </body>

    </html>
@endsection
