@extends('layouts.customer')
@section('styles')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('libs/nice-select2/css/nice-select2.css') }}">
    <link href="{{ asset('libs/starability/starability-css/starability-all.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css" type="text/css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">
@endsection
@section('content')
    <div class="container my-4">
        <div class="grid grid-cols-12 gap-4">
            <!-- Replicated for Second Card -->
            @foreach($products as $product)
                <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 xl:col-span-2">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative">
                        <div class="flex-auto text-center">
                            <div class="flex-auto text-center bg-gray-100">
                                <span
                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">New
                                    Arrival</span>
                                <a href='{{route('usersite.show',$product->products_id)}}'>
                                    <img src="{{ asset('storage/' . explode('|', $product->filepond)[0]) }}" alt=""
                                        class="h-44 inline-block my-4 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-500">
                                </a>
                            </div>
                        </div>
                        <div class="flex-auto  text-center p-4">
                            <span
                                class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">{{$product->Category->title}}</span>
                            <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                href='{{route('usersite.show',$product->products_id)}}'>{{$product->name}} </a>
                            {{-- <div class="mb-4">
                                <i class="icofont-star text-yellow-400 inline-block"></i>
                                <i class="icofont-star text-yellow-400 inline-block"></i>
                                <i class="icofont-star text-yellow-400 inline-block"></i>
                                <i class="icofont-star text-yellow-400 inline-block"></i>
                                <i class="icofont-star text-yellow-400 inline-block"></i>
                                <span class="text-slate-800 font-semibold">4.8</span>
                            </div> --}}
                            <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                    class="text-sm text-slate-500">$</sup>{{$product->price}} 
                            </h4>
                            <button type="button"
                                class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                onclick="location.href='{{route('usersite.show',$product->products_id)}}'">Buy Now</button> 
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 xl:col-span-2">
                <div
                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative">
                    <div class="flex-auto text-center">
                        <div class="flex-auto text-center bg-gray-100">
                            <span
                                class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">New
                                Arrival</span>
                            <a href='/robotech/default/customers-pro-details2'>
                                <img src="assets/images/products/02.png" alt=""
                                    class="h-44 inline-block my-4 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-500">
                            </a>
                        </div>
                    </div>
                    <div class="flex-auto  text-center p-4">
                        <span
                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                        <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                            href='/robotech/default/customers-pro-details'>White Table Camera </a>
                        <div class="mb-4">
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <span class="text-slate-800 font-semibold">4.8</span>
                        </div>
                        <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                class="text-sm text-slate-500">$</sup>49 <del class="text-base text-slate-400">$99</del>
                        </h4>
                        <button type="button"
                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                            onclick="location.href='customers-pro-details.html'">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 xl:col-span-2">
                <div
                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative">
                    <div class="flex-auto text-center">
                        <div class="flex-auto text-center bg-gray-100">
                            <span
                                class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">New
                                Arrival</span>
                            <a href='/robotech/default/customers-pro-details2'>
                                <img src="assets/images/products/02.png" alt=""
                                    class="h-44 inline-block my-4 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-500">
                            </a>
                        </div>
                    </div>
                    <div class="flex-auto  text-center p-4">
                        <span
                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                        <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                            href='/robotech/default/customers-pro-details'>White Table Camera </a>
                        <div class="mb-4">
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <span class="text-slate-800 font-semibold">4.8</span>
                        </div>
                        <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                class="text-sm text-slate-500">$</sup>49 <del class="text-base text-slate-400">$99</del>
                        </h4>
                        <button type="button"
                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                            onclick="location.href='customers-pro-details.html'">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 xl:col-span-2">
                <div
                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative">
                    <div class="flex-auto text-center">
                        <div class="flex-auto text-center bg-gray-100">
                            <span
                                class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">New
                                Arrival</span>
                            <a href='/robotech/default/customers-pro-details2'>
                                <img src="assets/images/products/02.png" alt=""
                                    class="h-44 inline-block my-4 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-500">
                            </a>
                        </div>
                    </div>
                    <div class="flex-auto  text-center p-4">
                        <span
                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                        <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                            href='/robotech/default/customers-pro-details'>White Table Camera </a>
                        <div class="mb-4">
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <span class="text-slate-800 font-semibold">4.8</span>
                        </div>
                        <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                class="text-sm text-slate-500">$</sup>49 <del class="text-base text-slate-400">$99</del>
                        </h4>
                        <button type="button"
                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                            onclick="location.href='customers-pro-details.html'">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 xl:col-span-2">
                <div
                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative">
                    <div class="flex-auto text-center">
                        <div class="flex-auto text-center bg-gray-100">
                            <span
                                class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">New
                                Arrival</span>
                            <a href='/robotech/default/customers-pro-details2'>
                                <img src="assets/images/products/02.png" alt=""
                                    class="h-44 inline-block my-4 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-500">
                            </a>
                        </div>
                    </div>
                    <div class="flex-auto  text-center p-4">
                        <span
                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                        <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                            href='/robotech/default/customers-pro-details'>White Table Camera </a>
                        <div class="mb-4">
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <span class="text-slate-800 font-semibold">4.8</span>
                        </div>
                        <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                class="text-sm text-slate-500">$</sup>49 <del class="text-base text-slate-400">$99</del>
                        </h4>
                        <button type="button"
                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                            onclick="location.href='customers-pro-details.html'">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2 xl:col-span-2">
                <div
                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative">
                    <div class="flex-auto text-center">
                        <div class="flex-auto text-center bg-gray-100">
                            <span
                                class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">New
                                Arrival</span>
                            <a href='/robotech/default/customers-pro-details2'>
                                <img src="assets/images/products/02.png" alt=""
                                    class="h-44 inline-block my-4 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-500">
                            </a>
                        </div>
                    </div>
                    <div class="flex-auto  text-center p-4">
                        <span
                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                        <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                            href='/robotech/default/customers-pro-details'>White Table Camera </a>
                        <div class="mb-4">
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <i class="icofont-star text-yellow-400 inline-block"></i>
                            <span class="text-slate-800 font-semibold">4.8</span>
                        </div>
                        <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                class="text-sm text-slate-500">$</sup>49 <del class="text-base text-slate-400">$99</del>
                        </h4>
                        <button type="button"
                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                            onclick="location.href='customers-pro-details.html'">Buy Now</button>
                    </div>
                </div>
            </div> --}}
            <!-- Repeat the above div block for each card, changing the href and img src as needed -->
            <!-- Add additional cards as needed by replicating the structure and updating the content accordingly -->
        </div>
    </div>
    {{-- <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
                <div class="container my-4">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">

                        <div class="col-span-12 sm:col-span-8 md:col-span-9 lg:col-span-9 xl:col-span-9">
                            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50%
                                                    off</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/01.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>White Table Camera </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>49 <del
                                                        class="text-base text-slate-400">$99</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-orange-500 text-white dark:text-orange-600 rounded font-medium py-0 px-2 mb-5 inline-block">Coming
                                                    soon</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/04.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Covid
                                                    Safety</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>N95 Covid Safety Mask
                                                </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>9 <del
                                                        class="text-base text-slate-400">$19</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/03.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Entertainment</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>Imported VR Box </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>29 <del
                                                        class="text-base text-slate-400">$39</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-red-600/10 text-red-500 dark:text-red-600 rounded font-medium py-0 px-2 mb-5 inline-block">Soldout</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/02.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Footwear</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>New Colorfull Shoes </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>99 <del
                                                        class="text-base text-slate-400">$199</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50%
                                                    off</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/pro-4.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Entertainment</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>Mannat 530 Bluetooth
                                                    Wireless </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>49 <del
                                                        class="text-base text-slate-400">$99</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-orange-500 text-white dark:text-orange-600 rounded font-medium py-0 px-2 mb-5 inline-block">Coming
                                                    soon</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/pro-1.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Footwear</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>New Colorfull Shoes </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>99 <del
                                                        class="text-base text-slate-400">$199</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/pro-2.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Clothes</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>Robo Men Oversized hoo -
                                                    Blue </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>29 <del
                                                        class="text-base text-slate-400">$39</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-red-600/10 text-red-500 dark:text-red-600 rounded font-medium py-0 px-2 mb-5 inline-block">Soldout</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/pro-3.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>Mannat HD, Smart LED
                                                    Fire TV </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>199 <del
                                                        class="text-base text-slate-400">$399</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50%
                                                    off</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/01.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>White Table Camera </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>49 <del
                                                        class="text-base text-slate-400">$99</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-orange-500 text-white dark:text-orange-600 rounded font-medium py-0 px-2 mb-5 inline-block">Coming
                                                    soon</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/04.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Covid
                                                    Safety</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>N95 Covid Safety Mask
                                                </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>9 <del
                                                        class="text-base text-slate-400">$19</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/03.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Entertainment</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>Imported VR Box </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>29 <del
                                                        class="text-base text-slate-400">$39</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-red-600/10 text-red-500 dark:text-red-600 rounded font-medium py-0 px-2 mb-5 inline-block">Soldout</span>
                                                <a href='/robotech/default/customers-pro-details'>
                                                    <img src="assets/images/products/02.png" alt=""
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Footwear</span>
                                                <a class='text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate'
                                                    href='/robotech/default/customers-pro-details'>New Colorfull Shoes </a>
                                                <div class="mb-4">
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                                    <span class="text-slate-800 font-semibold">4.8</span>
                                                </div>
                                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                        class="text-sm text-slate-500">$</sup>99 <del
                                                        class="text-base text-slate-400">$199</del></h4>
                                                <button type="button"
                                                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                    onclick="location.href='customers-pro-details.html'">Buy Now</button>
                                            </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                            </div><!--end inner-grid-->
                            <div class="flex justify-between mt-4">
                                <div class="self-center">
                                    <p class="dark:text-slate-400">Showing 1 - 20 of 124</p>
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
    </div><!--end div--> --}}
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
        const range = document.querySelectorAll(".range-slider span input");
        progress = document.querySelector(".range-slider .progress");
        let gap = 0.1;
        const inputValue = document.querySelectorAll(".numberVal input");

        range.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minRange = parseInt(range[0].value);
                let maxRange = parseInt(range[1].value);

                if (maxRange - minRange < gap) {
                    if (e.target.className === "range-min") {
                        range[0].value = maxRange - gap;
                    } else {
                        range[1].value = minRange + gap;
                    }
                } else {
                    progress.style.left = (minRange / range[0].max) * 100 + "%";
                    progress.style.right = 100 - (maxRange / range[1].max) * 100 + "%";
                    inputValue[0].value = minRange;
                    inputValue[1].value = maxRange;
                }
            });
        });
    </script>
@endsection
