@extends('layouts.customer')
@section('content')
    <div class="flex flex-wrap justify-between">
        <div class="items-center ">
            <h1 class="font-medium text-3xl block dark:text-slate-100">Orders : #363625</h1>
        </div>
        <div class="flex items-center">
            <div
                class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly required="">
            </div>
        </div>
    </div>
    <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-9 mb-4">
                <div class="w-full relative mb-4">
                    <div class="flex-auto p-0 md:p-4">
                        <div class="flex items-center">
                            <img src="assets/images/users/avatar-2.png" alt=""
                                class="me-2 h-24 rounded-full inline-block">
                            <div class="self-center">
                                <h5 class="text-2xl font-semibold text-slate-700 dark:text-gray-400">Merri Diamond</h5>
                                <p class="block  font-medium text-slate-500">Customer ID : <span
                                        class="text-primary-500">5698475</span></p>
                            </div>
                        </div>
                        <div class="my-10">
                            <div class="flex-auto ">
                                <ol class="items-center sm:flex">
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div
                                                class="z-10 flex items-center justify-center w-6 h-6 bg-brand-100 rounded-full ring-0 ring-white dark:bg-brand-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="package-open" class="w-6 h-6 stroke-brand-500"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                            </div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Order is
                                                processing</h3>
                                            <time
                                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">26
                                                January, 2023 <span>03:10 PM</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Your
                                                package is ready for the seller to prepare.</p>
                                        </div>
                                    </li>
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div
                                                class="z-10 flex animate-bounce items-center justify-center w-6 h-6 bg-brand-500 rounded-full ring-0 ring-brand-500 dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="truck" class="w-6 h-6 stroke-white"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                            </div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ready to
                                                Ship</h3>
                                            <time
                                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">28
                                                January, 2023 <span>01:10 PM</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Your
                                                package is now ready to be shipped.</p>
                                        </div>
                                    </li>
                                    {{-- <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div
                                                class="z-10 flex items-center justify-center w-6 h-6 bg-primary-100 rounded-full ring-0 ring-white dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="clock-10" class="w-6 h-6 stroke-slate-500"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                            </div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Shipped
                                            </h3>
                                            <time
                                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">29
                                                January, 2023 <span>Estimated time</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pending
                                            </p>
                                        </div>
                                    </li> --}}
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div
                                                class="z-10 flex items-center justify-center w-6 h-6 bg-primary-100 rounded-full ring-0 ring-white dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="target" class="w-6 h-6 stroke-slate-500"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700">
                                            </div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Delivered
                                            </h3>
                                            <time
                                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">30
                                                January, 2023 <span>Estimated time</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pending
                                            </p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 ">
                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                <div class="dark:text-slate-400">
                                    <br>
                                    <address class="text-sm">
                                        <strong>Billed To :</strong><br>
                                        Joe Smith<br>
                                        795 Folsom Ave<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6 md:col-span-4 text-center">
                                <div class="dark:text-slate-400">
                                    {{-- <div class="flex items-center">
                                        <div
                                            class="z-10 flex animate-bounce items-center justify-center w-6 h-6 bg-brand-500 rounded-full ring-0 ring-brand-500 dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                            <i data-lucide="truck" class="w-6 h-6 stroke-white"></i>
                                        </div>
                                        <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                    </div>
                                    <div class="mt-3 sm:pr-8">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ready to Ship</h3>
                                        <time
                                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">28
                                            January, 2023 <span>01:10 PM</span></time>
                                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Your package is
                                            now
                                            ready to be shipped.</p>
                                    </div> --}}
                                    {{-- <div class="col-span-12 sm:col-span-6 md:col-span-4 text-center">
                                        <div class="dark:text-slate-400">
                                            <div class="flex items-center justify-center">
                                                <div
                                                    class="z-10 flex animate-bounce items-center justify-center w-6 h-6 bg-brand-500 rounded-full ring-0 ring-brand-500 dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                    <i data-lucide="truck" class="w-6 h-6 stroke-white"></i>
                                                </div>
                                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                            </div>
                                            <div class="mt-3 sm:pr-8 text-center">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ready to Ship</h3>
                                                <time
                                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">28
                                                    January, 2023 <span>01:10 PM</span></time>
                                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Your package is now
                                                    ready to be shipped.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <strong>Order Details:</strong><br>
                                <ul class="justify-center">
                                    <li class="text-slate-500">Product :<span
                                            class="text-slate-700 dark:text-slate-500 font-semibold"> Winter
                                            jacket</span></li>
                                    <li class="text-slate-500">Quantity :<span
                                            class="text-slate-700 dark:text-slate-500 font-semibold"> 2</span></li>
                                    <li class="text-slate-500">Weight :<span
                                            class="text-slate-700 dark:text-slate-500 font-semibold"> 5kg</span></li>
                                </ul> --}}
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
                                                Categories
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Date
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Rate
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Quntaity
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- 1 -->
                                        <tr
                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <div class="flex items-center">
                                                    <img src="assets/images/products/pro-4.png" alt=""
                                                        class="me-2 h-8 inline-block">
                                                    <div class="self-center">
                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                            Mannat 530 Bluetooth Wireless </h5>
                                                        <span class="block  font-medium text-slate-500">Size-M (Model
                                                            2023)</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="#" class="text-brand-500 underline">Footwear</a>,
                                                <a href="#" class="text-brand-500 underline">Lifestayle</a>
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                12 Jan 2023
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                12 Jan 2023
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                12 Jan 2023
                                            </td>
                                            <td
                                                class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                $79 <del class="text-slate-500 font-normal">$99</del>
                                            </td>
                                        </tr>
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
                                            <tr
                                                class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Subtotal
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    $616.00
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr
                                                class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Shipping Charge
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    $20.00
                                                </td>
                                            </tr>
                                            <!-- 3 -->
                                            <tr class="">
                                                <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                    Promo Code
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                    -$10.00
                                                </td>
                                            </tr>
                                            <!-- 4 -->
                                            <tr
                                                class="border-t-2 border-solid border-slate-500/60 dark:border-slate-700/40">
                                                <td class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                    Total
                                                </td>
                                                <td class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                    $626.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <p class="text-[11px] text-slate-400"> <span class="text-slate-200">Note :</span> It is a long
                                established fact that a reader will be distracted by the readable content of a page when
                                looking at its layout.</p>
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
                </footer>
                <!-- end Footer -->
            </div>
        </div>
    </div><!--end container-->
@endsection
@section('scripts')
    <script>
        NiceSelect.bind(document.querySelector(".nice-select"));

        var map = L.map('V_Simple');

        map.setView([51.505, -0.09], 17.5);
        var myIcon = L.icon({
            iconUrl: 'assets/images/products/truck.png',
            iconSize: [143, 60],
            iconAnchor: [60, 60],
            popupAnchor: [-3, -76],
            // shadowUrl: 'my-icon-shadow.png',
            // shadowSize: [68, 95],
            shadowAnchor: [60, 60]
        });

        var marker = L.marker([51.505, -0.09], {
                icon: myIcon
            })
            .bindPopup("<b>Hello world!</b><br />I am a popup.")
            .addTo(map);

        var circle = L.circle([51.504, -0.11], 30, {
                color: '#f03',
                opacity: 0.7
            })
            .bindPopup("I am a circle.")
            .addTo(map);



        var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, {
                maxZoom: 18,
                attribution: osmAttrib
            }).addTo(map);
    </script>
@endsection
