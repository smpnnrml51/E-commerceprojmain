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
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Order : {{ $order->title }}</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="#" class="text-gray-500 dark:text-slate-400">Vyomite</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Details</li>
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
        </div><!--end container-->
    <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-9 mb-4">
                <div class="w-full relative mb-4">
                    <div class="flex-auto p-0 md:p-4">
                        <div class="flex items-center">
                            <img src="assets/images/users/avatar-2.png" alt=""
                                class="me-2 h-24 rounded-full inline-block">
                            <div class="self-center">
                                <h5 class="text-2xl font-semibold text-slate-700 dark:text-gray-400">{{ $order->customer->name }}</h5>
                                {{-- <p class="block  font-medium text-slate-500">Customer ID : <span
                                        class="text-primary-500">5698475</span></p> --}}
                            </div>
                        </div>
                        <div class="my-10">
                            <div class="after:mt-4 after:block after:h-1 after:w-full after:rounded-lg after:bg-gray-500/10">
                                <ol class="grid grid-cols-3 text-sm font-medium text-gray-500">
                                    <!-- Pending Step -->
                                    <li class="relative flex justify-start {{ $order->status === 'pending' || $order->status === 'on_delivery' || $order->status === 'delivered' ? 'text-brand-600' : 'text-gray-500' }}">
                                        <span class="absolute -bottom-[1.75rem] start-0 rounded-full {{ $order->status === 'pending' || $order->status === 'on_delivery' || $order->status === 'delivered' ? 'bg-brand-600' : 'bg-gray-600' }} text-white">
                                            <i class="icofont-check w-5 h-5 leading-5 block text-center"></i>
                                        </span>
                                        <span class="hidden sm:block">Pending</span>
                                        <i data-lucide="gift" class="sm:hidden"></i>
                                    </li>
                        
                                    <!-- Delivery Step -->
                                    <li class="relative flex justify-center {{ $order->status === 'on_delivery' || $order->status === 'delivered' ? 'text-brand-600' : 'text-gray-500' }}">
                                        <span class="absolute -bottom-[1.75rem] left-1/2 -translate-x-1/2 rounded-full {{ $order->status === 'on_delivery' || $order->status === 'delivered' ? 'bg-brand-600' : 'bg-gray-600' }} text-white">
                                            <i class="icofont-check w-5 h-5 leading-5 block text-center"></i>
                                        </span>
                                        <span class="hidden sm:block">On Delivery</span>
                                        <i data-lucide="truck" class="sm:hidden"></i>
                                    </li>
                        
                                    <!-- Delivered Step -->
                                    <li class="relative flex justify-end {{ $order->status === 'delivered' ? 'text-brand-600' : 'text-gray-500' }}">
                                        <span class="absolute -bottom-[1.75rem] end-0 rounded-full {{ $order->status === 'delivered' ? 'bg-brand-600' : 'bg-gray-600' }} text-white">
                                            <i class="icofont-check w-5 h-5 leading-5 block text-center"></i>
                                        </span>
                                        <span class="hidden sm:block">Delivered</span>
                                        <i data-lucide="map-pin" class="sm:hidden"></i>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 ">
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="dark:text-slate-400">
                                    <address class="text-sm">
                                        <strong>Billed To :</strong><br>
                                        {{ $order->fname." ".$order->lname }}<br>
                                        {{ $order->address }}<br>
                                        {{ $order->email }}<br>
                                        <abbr title="Phone">Phone:</abbr> {{ $order->phone }}
                                    </address>
                                </div>
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6 md:col-span-4 text-center">
                                {{-- <div class="dark:text-slate-400">
                                    <strong>Order Details:</strong><br>
                                    <ul class="justify-center">
                                        <li class="text-slate-500">Product :<span
                                                class="text-slate-700 dark:text-slate-500 font-semibold"> Winter
                                                jacket</span></li>
                                        <li class="text-slate-500">Quantity :<span
                                                class="text-slate-700 dark:text-slate-500 font-semibold"> 2</span></li>
                                        <li class="text-slate-500">Weight :<span
                                                class="text-slate-700 dark:text-slate-500 font-semibold"> 5kg</span></li>
                                    </ul>
                                </div> --}}
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6 md:col-span-4 text-end">
                                <div class="dark:text-slate-400">
                                    <address class="text-sm">
                                        <strong>Shipped To:</strong><br>
                                        {{ $order->fname." ".$order->lname }}<br>
                                        {{ $order->delivery_address }}<br>
                                    </address>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="bg-gray-50 dark:bg-gray-700/20">
                    <div class="grid grid-cols-1 mt-10 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <table class="w-full">
                                    <thead class="bg-gray-50 dark:bg-gray-600/20">
                                        <tr>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Product
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Category
                                            </th>
                                            {{-- <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Date
                                            </th> --}}
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Rate
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase text-right">
                                                Quantity
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase text-right">
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    @php
                                        $totalAmount = 0;
                                        $netTotal = 0;
                                    @endphp
                                    <tbody>
                                        @foreach(json_decode($order->products, true) as $product)
                                        {{-- @dd($product) --}}
                                        <!-- 1 -->
                                        <tr
                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <div class="flex items-center">
                                                    <img src="{{ asset('storage/' . explode('|', $product['image'])[0]) }}" alt=""
                                                        class="me-2 h-8 inline-block">
                                                    <div class="self-center">
                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                            {{ $product['name'] }}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="#" class="text-brand-500 underline">Footwear</a>,
                                                <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                            </td> --}}
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $product['category'] }}
                                            </td>
                                            {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                12 Jan 2023
                                            </td> --}}
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $product['price'] }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
                                                {{ $product['quantity'] }}
                                            </td>
                                            <td
                                                class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400 text-right">
                                                ${{ $product['price'] * $product['quantity'] }}
                                            </td>
                                        </tr>
                                        @php
                                            $totalAmount += $product['price'] * $product['quantity'] 
                                        @endphp
                                        @endforeach
                                        <!--2-->
                                        {{-- <tr
                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <div class="flex items-center">
                                                    <img src="assets/images/products/pro-5.png" alt=""
                                                        class="me-2 h-8 inline-block">
                                                    <div class="self-center">
                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                            Mannat Watch 3 Active </h5>
                                                        <span class="block  font-medium text-slate-500">Latest Model
                                                            2023</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="#" class="text-brand-500 underline">Fashion</a>,
                                                <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                25 Nov 2023
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <div>color :
                                                    <span class="ms-2">
                                                        <i class="icofont-brand-mts text-orange-500"></i>
                                                        <i class="icofont-brand-mts text-purple-500"></i>
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


                                        </tr> --}}
                                        <!--3-->
                                        {{-- <tr
                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <div class="flex items-center">
                                                    <img src="assets/images/products/pro-6.png" alt=""
                                                        class="me-2 h-8 inline-block">
                                                    <div class="self-center">
                                                        <h5
                                                            class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                            Mannat Watch 3 Active </h5>
                                                        <span class="block  font-medium text-slate-500">Latest Model
                                                            2023</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="#" class="text-brand-500 underline">Fashion</a>,
                                                <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                25 Nov 2023
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <div>color :
                                                    <span class="ms-2">
                                                        <i class="icofont-brand-mts text-orange-500"></i>
                                                        <i class="icofont-brand-mts text-purple-500"></i>
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


                                        </tr> --}}
                                        <!--4-->
                                        {{-- <tr
                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <div class="flex items-center">
                                                    <img src="assets/images/products/01.png" alt=""
                                                        class="me-2 h-8 inline-block">
                                                    <div class="self-center">
                                                        <h5
                                                            class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                            White Table Camera</h5>
                                                        <span class="block  font-medium text-slate-500">256px, 301px (Model
                                                            2023)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="#" class="text-brand-500 underline">Electronics</a>,
                                                <a href="#" class="text-brand-500 underline">Security</a>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                20 Jul 2023
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <div>color :
                                                    <span class="ms-2">
                                                        <i class="icofont-brand-mts text-gray-100"></i>
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
                                                $99 <del class="text-slate-500 font-normal">$150</del>
                                            </td>
                                        </tr> --}}
                                        <!--Total-->
                                        {{-- <tr class="bg-white dark:bg-gray-900 ">

                                            <td class="p-3 pb-0 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <span class="text-lg font-semibold">Total</span>
                                            </td>
                                            <td
                                                class="p-3 pb-0 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">

                                            </td>
                                            <td
                                                class="p-3 pb-0 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">

                                            </td>
                                            <td
                                                class="p-3 pb-0 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">

                                            </td>
                                            <td
                                                class="p-3 pb-0 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                <span class="text-2xl font-semibold">$616</span>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div><!--end div-->
                        </div><!--end div-->
                    </div><!--end grid-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-3">
                <div class="bg-black dark:bg-slate-700/20 shadow dark:shadow-none rounded-md relative w-full mt-4">
                    <div class="flex-auto p-4">
                        <div class="grid grid-cols-1  rounded-md">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <table class="min-w-full">
                                        <tbody>
                                            <!-- 1 -->
                                            @php
                                                $netTotal = $totalAmount + 10;
                                            @endphp
                                            <tr
                                                class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Subtotal
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    ${{ $totalAmount }}
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr
                                                class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Shipping Charge
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    $10.00
                                                </td>
                                            </tr>
                                            {{-- <!-- 3 -->
                                            <tr class="">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Promo Code
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    -$10.00
                                                </td>
                                            </tr> --}}
                                            <!-- 4 -->
                                            <tr
                                                class="border-t-2 border-solid border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                    Total
                                                </td>
                                                <td class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                    ${{ $netTotal }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <p class="text-[11px] text-slate-400"> <span class="text-slate-200">Note :</span> It is a long
                                established fact that a reader will be distracted by the readable content of a page when
                                looking at its layout.</p> --}}
                        </div>
                    </div>
                </div><!--end card-->
            </div><!--end col-->
        </div> <!--end grid-->
        <!-- footer -->
        <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
            <div class="container">
                <!-- Footer Start -->
                <footer
                    class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left ">
                    &copy;
                    <script>
                        var year = new Date();
                        document.write(year.getFullYear());
                    </script>
                    Vyomite
                    <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted with <i
                            class="ti ti-heart text-red-500"></i> by
                        Mannatthemes</span>
                </footer>
                <!-- end Footer -->
            </div>
        </div>
    </div><!--end container-->
@endsection
