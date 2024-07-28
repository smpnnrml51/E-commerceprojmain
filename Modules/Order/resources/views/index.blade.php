@extends('layouts.admin')
@section('content')
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">Orders</h1>
                                        <ol class="list-reset flex text-sm">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Vyomite</a>
                                            </li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Orders
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <input type="text"
                                                class="dash_date border-0 focus:border-0 focus:outline-none" readonly
                                                required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="w-full relative mb-4">
                            <div class="flex-auto p-0 md:p-4">
                                {{-- <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                        <li class="me-2" role="presentation">
                                            <button class="inline-block p-4 rounded-t-lg border-b-2 active " id="all-tab"
                                                data-fc-target="#all" type="button" role="tab" aria-controls="all"
                                                aria-selected="false">All <span class="text-slate-400">(451)</span></button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button
                                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                id="panding-tab" data-fc-target="#panding" type="button" role="tab"
                                                aria-controls="panding" aria-selected="false">Pending <span
                                                    class="text-slate-400">(35)</span></button>
                                        </li>
                                        <li class="" role="presentation">
                                            <button
                                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                id="returns-tab" data-fc-target="#returns" type="button" role="tab"
                                                aria-controls="returns" aria-selected="false">Returns <span
                                                    class="text-slate-400">(25)</span></button>
                                        </li>
                                    </ul>
                                </div> --}}
                                {{-- <div class="flex flex-wrap gap-4 mb-3">
                                    <div class="mb-2 w-44">
                                        <select id="Category"
                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option class="dark:text-slate-700">All Category</option>
                                            <option class="dark:text-slate-700">Electronics</option>
                                            <option class="dark:text-slate-700">Furniture</option>
                                            <option class="dark:text-slate-700">Footwear</option>
                                            <option class="dark:text-slate-700">Clothes</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 w-36">
                                        <select id="Payment"
                                            class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option class="dark:text-slate-700">Payment</option>
                                            <option class="dark:text-slate-700">Online</option>
                                            <option class="dark:text-slate-700">Check</option>
                                            <option class="dark:text-slate-700">Cash</option>
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
                                                    class="form-input w-52 rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 pl-10 p-2.5"
                                                    placeholder="search">
                                            </div>
                                        </form>
                                    </div>
                                    <div>
                                        <button
                                            class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                            Add product
                                        </button>
                                    </div>
                                </div> --}}

                                <div id="myTabContent">
                                    <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-700/20" id="all"
                                        role="tabpanel" aria-labelledby="all-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                            <tr>
                                                                <th scope="col" class="p-3">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </th>

                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Order ID
                                                                </th>

                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Customer
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Total
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Date
                                                                </th>
                                                                {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                Type
                                                            </th> --}}
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Status
                                                                </th>
                                                                {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                Action
                                                            </th> --}}
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- 1 -->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a class='text-brand-500 underline'
                                                                        href='{{url('orderDetails')}}'>#523666</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-2.png"
                                                                            alt="" class="me-2 h-8 inline-block">
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Merri Diamond</h5>
                                                                            <span
                                                                                class="block  font-medium text-slate-500">New
                                                                                york, USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    $540.00
                                                                </td>
                                                                <td clas
                                                                    s="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    20 Jun 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    {{-- <span class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Success</span> --}}
                                                                    <select
                                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">
                                                                        <option value="success" class="text-green-600">
                                                                            Success</option>
                                                                        <option value="pending" class="text-yellow-600">
                                                                            Pending</option>
                                                                        <option value="cancel" class="text-red-600">Cancel
                                                                        </option>
                                                                    </select>
                                                                </td>
                                                                {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td> --}}
                                                            </tr>
                                                            <!-- 2 -->
                                                            {{-- <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td class="w-4 p-4">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                    <input type="checkbox" class="hidden" >
                                                                    <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                    </div>
                                                                </label>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a class='text-brand-500 underline' href='/robotech/default/admin-order-details'>#658475</a>
                                                            </td>
                                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                <div class="flex items-center">
                                                                    <img src="assets/images/users/avatar-2.png" alt="" class="me-2 h-8 inline-block">
                                                                    <div class="self-center">                                                                        
                                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Glenn Rogers</h5>
                                                                        <span class="block  font-medium text-slate-500">New york, USA</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $550.00
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                10 jul 2023
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                online
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="bg-yellow-600/5 text-yellow-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Pending</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- 3 -->
                                                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td class="w-4 p-4">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                    <input type="checkbox" class="hidden" >
                                                                    <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                    </div>
                                                                </label>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a class='text-brand-500 underline' href='/robotech/default/admin-order-details'>#523666</a>
                                                            </td>
                                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                <div class="flex items-center">
                                                                    <img src="assets/images/users/avatar-7.png" alt="" class="me-2 h-8 inline-block">
                                                                    <div class="self-center">                                                                        
                                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Merri Diamond</h5>
                                                                        <span class="block  font-medium text-slate-500">New york, USA</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $880.00
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                22 Oct 2023
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                Cash
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Cancel</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- 4 -->
                                                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td class="w-4 p-4">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                    <input type="checkbox" class="hidden" >
                                                                    <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                    </div>
                                                                </label>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a class='text-brand-500 underline' href='/robotech/default/admin-order-details'>#652525</a>
                                                            </td>
                                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                <div class="flex items-center">
                                                                    <img src="assets/images/users/avatar-6.png" alt="" class="me-2 h-8 inline-block">
                                                                    <div class="self-center">                                                                        
                                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Jesus Oates</h5>
                                                                        <span class="block  font-medium text-slate-500">New york, USA</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $999.00
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                18 Jan 2023
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                Cash
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Success</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!--5-->
                                                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td class="w-4 p-4">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                    <input type="checkbox" class="hidden" >
                                                                    <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                    </div>
                                                                </label>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a class='text-brand-500 underline' href='/robotech/default/admin-order-details'>#142536</a>
                                                            </td>
                                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                <div class="flex items-center">
                                                                    <img src="assets/images/users/avatar-2.png" alt="" class="me-2 h-8 inline-block">
                                                                    <div class="self-center">                                                                        
                                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Alejandro Ruiz</h5>
                                                                        <span class="block  font-medium text-slate-500">New york, USA</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $699.00
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                14 Mar 2023
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                Cash
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Success</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!--6-->
                                                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td class="w-4 p-4">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                    <input type="checkbox" class="hidden" >
                                                                    <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                    </div>
                                                                </label>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a class='text-brand-500 underline' href='/robotech/default/admin-order-details'>#159753</a>
                                                            </td>
                                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                <div class="flex items-center">
                                                                    <img src="assets/images/users/avatar-3.png" alt="" class="me-2 h-8 inline-block">
                                                                    <div class="self-center">                                                                        
                                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Luna Winston</h5>
                                                                        <span class="block  font-medium text-slate-500">New york, USA</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $660.00
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                09 Dec 2023
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                Check
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="bg-yellow-600/5 text-yellow-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Panding</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!--7-->
                                                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td class="w-4 p-4">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                    <input type="checkbox" class="hidden" >
                                                                    <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                    </div>
                                                                </label>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a class='text-brand-500 underline' href='/robotech/default/admin-order-details'>#625514</a>
                                                            </td>
                                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                <div class="flex items-center">
                                                                    <img src="assets/images/users/avatar-1.png" alt="" class="me-2 h-8 inline-block">
                                                                    <div class="self-center">                                                                        
                                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Nicolas Wright</h5>
                                                                        <span class="block  font-medium text-slate-500">New york, USA</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $230.00
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                12 Nov 2023
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                Online
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Success</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td>
                                                        </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div><!--end div-->
                                            </div><!--end div-->
                                        </div><!--end grid-->
                                        <div class="flex justify-between mt-4">
                                            <div class="self-center">
                                                <p class="dark:text-slate-400">Showing 1 - 20 of 1,524</p>
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
                                    </div>
                                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="panding"
                                        role="tabpanel" aria-labelledby="panding-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                            <tr>
                                                                <th scope="col" class="p-3">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Order ID
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Customer
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Total
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Date
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Type
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Status
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
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a class='text-brand-500 underline'
                                                                        href='/robotech/default/admin-order-details'>#523666</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-2.png"
                                                                            alt="" class="me-2 h-8 inline-block">
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Merri Diamond</h5>
                                                                            <span
                                                                                class="block  font-medium text-slate-500">New
                                                                                york, USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    $540.00
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    20 Jun 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    Cash
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-yellow-600/5 text-yellow-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Panding</span>
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
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a class='text-brand-500 underline'
                                                                        href='/robotech/default/admin-order-details'>#369258</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-2.png"
                                                                            alt="" class="me-2 h-8 inline-block">
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Glenn Rogers</h5>
                                                                            <span
                                                                                class="block  font-medium text-slate-500">New
                                                                                york, USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    $550.00
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    10 jul 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    online
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-yellow-600/5 text-yellow-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Pending</span>
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
                                                </div><!--end div-->
                                            </div><!--end div-->
                                        </div><!--end grid-->
                                        <div class="flex justify-between mt-4">
                                            <div class="self-center">
                                                <p class="dark:text-slate-400">Showing 1 - 20 of 1,524</p>
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
                                    </div>
                                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="returns"
                                        role="tabpanel" aria-labelledby="returns-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                            <tr>
                                                                <th scope="col" class="p-3">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Order ID
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Customer
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Total
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Date
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Type
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Status
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
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a class='text-brand-500 underline'
                                                                        href='/robotech/default/admin-order-details'>#998587</a>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/users/avatar-2.png"
                                                                            alt="" class="me-2 h-8 inline-block">
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Glenn Rogers</h5>
                                                                            <span
                                                                                class="block  font-medium text-slate-500">New
                                                                                york, USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    $550.00
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    10 jul 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    online
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <span
                                                                        class="bg-red-600/5 text-red-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">Cancel</span>
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
                                                </div><!--end div-->
                                            </div><!--end div-->
                                        </div><!--end grid-->
                                    </div>
                                    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="discount"
                                        role="tabpanel" aria-labelledby="discount-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                            <tr>
                                                                <th scope="col" class="p-3">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </th>
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
                                                                    Date
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!--1-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/products/pro-5.png"
                                                                            alt="" class="me-2 h-8 inline-block">
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Mannat Watch 3 Active </h5>
                                                                            <span
                                                                                class="block  font-medium text-slate-500">Latest
                                                                                Model 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"
                                                                        class="text-brand-500 underline">Fashion</a>,
                                                                    <a href="#"
                                                                        class="text-brand-500 underline">Lifestayle</a>
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
                                                                            <i
                                                                                class="icofont-brand-mts text-orange-500"></i>
                                                                            <i
                                                                                class="icofont-brand-mts text-purple-500"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div>Size :
                                                                        <span class="ms-2">S</span>
                                                                        <span class="mx-1">M</span>
                                                                        <span class="mx-1">L</span>
                                                                        <span class="mx-1">XL</span>
                                                                        <span class="mx-1">XXL</span>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $219 <del class="text-slate-500 font-normal">$299</del>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    25 Nov 2023
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"><i
                                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!--2-->
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="w-4 p-4">
                                                                    <label class="custom-label">
                                                                        <div
                                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                                                            <input type="checkbox" class="hidden">
                                                                            <i
                                                                                class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                                                        </div>
                                                                    </label>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        <img src="assets/images/products/pro-6.png"
                                                                            alt="" class="me-2 h-8 inline-block">
                                                                        <div class="self-center">
                                                                            <h5
                                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                Mannat Watch 3 Active </h5>
                                                                            <span
                                                                                class="block  font-medium text-slate-500">Latest
                                                                                Model 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    <a href="#"
                                                                        class="text-brand-500 underline">Fashion</a>,
                                                                    <a href="#"
                                                                        class="text-brand-500 underline">Lifestayle</a>
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
                                                                            <i
                                                                                class="icofont-brand-mts text-orange-500"></i>
                                                                            <i
                                                                                class="icofont-brand-mts text-purple-500"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div>Size :
                                                                        <span class="ms-2">S</span>
                                                                        <span class="mx-1">M</span>
                                                                        <span class="mx-1">L</span>
                                                                        <span class="mx-1">XL</span>
                                                                        <span class="mx-1">XXL</span>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                    $219 <del class="text-slate-500 font-normal">$299</del>
                                                                </td>
                                                                <td
                                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                    25 Nov 2023
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
                                                </div><!--end div-->
                                            </div><!--end div-->
                                        </div><!--end grid-->
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div> <!--end grid-->
                <!-- footer -->
                <div
                    class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                    <div class="container">
                        <!-- Footer Start -->
                        <footer
                            class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left ">
                            &copy;
                            <script>
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script>
                            {{-- Robotech
                    <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
                      >Crafted with <i class="ti ti-heart text-red-500"></i> by
                      Mannatthemes</span
                    > --}}
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>


            </div><!--end container-->
        </div><!--end page-wrapper-->
    </div><!--end /div-->
@endsection
