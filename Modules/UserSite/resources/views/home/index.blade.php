@extends('layouts.customer')
@section('content')
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
                <div class="bg-soft-gradient">
                    <div class="container">
                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                <div
                                    class="bg- shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative">
                                    <div class="flex-auto p-4 pb-0">
                                        <div
                                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 self-center">
                                                <div class="flex-auto p-4">
                                                    <div>
                                                        <span class="bg-yellow-500 text-gray-900 p-2 rounded">Free Shipping
                                                            - orders over $100</span>
                                                        <h1
                                                            class="text-[40px] md:text-[50px] lg:text-[70px] leading-[80px] mb-10 font-normal">
                                                            Limited Time Offer!<span
                                                                class=" weight-animation  text-transparent text-5xl md:text-5xl lg:text-8xl bg-clip-text bg-gradient-to-r from-purple-500 to-pink-600">
                                                                Up To 50% OFF</span></h1>
                                                        <p class="text-2xl text-slate-800 mb-10">Introduced a new model for
                                                            online grocery shopping
                                                            and convenient home delivery.</p>
                                                        <button type="button"
                                                            class="px-4 py-2 lg:px-6 bg-transparent  text-brand text-base  transition hover:bg-brand-500 hover:text-white  border-brand border-[2px] font-medium mb-2">Explore
                                                            Store</button>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                                <div class="flex-auto p-4 pb-0">
                                                    <div class="swiper defaultSwiper">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <a href="#" class="">
                                                                    <img src="assets/images/products/pro-3.png"
                                                                        alt="" class="w-full h-auto p-10">
                                                                </a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a href="#" class="">
                                                                    <img src="assets/images/products/pro-7.png"
                                                                        alt="" class="w-full h-auto p-10">
                                                                </a>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <a href="#" class="">
                                                                    <img src="assets/images/products/pro-4.png"
                                                                        alt="" class="w-full h-auto p-10">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                        </div> <!--end grid-->
                                    </div><!--end card-body-->
                                </div> <!--end inner-grid-->
                            </div><!--end col-->
                        </div> <!--end grid-->
                    </div><!--end container-->
                </div><!--end section-->
                <div class="py-5">
                    <div class="container">
                        <div
                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                                <div
                                    class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative overflow-hidden">
                                    <div class="absolute end-36 z-0 hidden md:block">
                                        <img src="assets/images/products/p-1.png" alt="">
                                    </div>
                                    <div class="flex-auto p-4">
                                        <div
                                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8 self-center">
                                                <div class="flex-auto p-4 pb-0">
                                                    <h4 class="text-4xl text-slate-800 font-semibold mb-0 font-spartan">
                                                        PC Build</h4>
                                                    <p class="text-slate-600 text-2xl mb-3 font-spartan">Launch Offer 15%
                                                        Off!</p>
                                                    <button type="button"
                                                        class="px-4 py-2 lg:px-4 bg-brand-500  text-white text-base  transition hover:bg-brand-500 hover:text-white border border-brand border-dashed font-medium mb-2">PC
                                                        Build</button>
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4 self-center">
                                                <div class="flex-auto p-4 ">
                                                    <img src="assets/images/products/pro-1.png" alt=""
                                                        class="w-full h-auto z-[1] relative">
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                        </div> <!--end grid-->
                                    </div><!--end card-body-->
                                </div> <!--end inner-grid-->
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                                <div
                                    class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative overflow-hidden">
                                    <div class="absolute end-0 bottom-0 z-0">
                                        <img src="assets/images/products/p-2.png" alt="">
                                    </div>
                                    <div class="flex-auto p-4">
                                        <div
                                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8 self-center">
                                                <div class="flex-auto p-4 pb-0">
                                                    <h4 class="text-4xl text-slate-800 font-semibold mb-0 font-spartan">
                                                        Accessories Collection!</h4>
                                                    <p class="text-slate-600 text-2xl mb-3 font-spartan">Launch Offer 30%
                                                        Off!</p>
                                                    <button type="button"
                                                        class="px-4 py-2 lg:px-4 bg-brand-500  text-white text-base  transition hover:bg-brand-500 hover:text-white border border-brand border-dashed font-medium mb-2">View
                                                        Collection</button>
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4 self-center">
                                                <div class="flex-auto p-4 ">
                                                    <img src="assets/images/products/pro-2.png" alt=""
                                                        class="w-full h-auto z-[1] relative">
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                        </div> <!--end grid-->
                                    </div><!--end card-body-->
                                </div> <!--end inner-grid-->
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                <div class="w-full relative">
                                    <div class="flex-auto p-4">
                                        <div
                                            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                                                <div class="flex-auto p-4">
                                                    <h4 class="text-2xl text-slate-700 font-semibold mb-0">Most Populer
                                                        Brands</h4>
                                                    <p class="text-slate-500 text-lg mb-3">All brand Offer start 25 Dec.</p>
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                            <div
                                                class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-8 self-center">
                                                <div class="flex-auto p-4 ">
                                                    <div
                                                        class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                                                        <div
                                                            class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2 self-center">
                                                            <div class="flex-auto p-4 ">
                                                                <a href="#">
                                                                    <img src="assets/images/products/bl-1.png"
                                                                        alt=""
                                                                        class="w-20 h-auto grayscale hover:grayscale-0 duration-500">
                                                                </a>
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                        <div
                                                            class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2 self-center">
                                                            <div class="flex-auto p-4 ">
                                                                <a href="#">
                                                                    <img src="assets/images/products/bl-2.png"
                                                                        alt=""
                                                                        class="w-20 h-auto grayscale hover:grayscale-0 duration-500">
                                                                </a>
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                        <div
                                                            class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2 self-center">
                                                            <div class="flex-auto p-4 ">
                                                                <a href="#">
                                                                    <img src="assets/images/products/bl-3.png"
                                                                        alt=""
                                                                        class="w-20 h-auto grayscale hover:grayscale-0 duration-500">
                                                                </a>
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                        <div
                                                            class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2 self-center">
                                                            <div class="flex-auto p-4 ">
                                                                <a href="#">
                                                                    <img src="assets/images/products/bl-1.png"
                                                                        alt=""
                                                                        class="w-20 h-auto grayscale hover:grayscale-0 duration-500">
                                                                </a>
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                        <div
                                                            class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2 self-center">
                                                            <div class="flex-auto p-4 ">
                                                                <a href="#">
                                                                    <img src="assets/images/products/bl-3.png"
                                                                        alt=""
                                                                        class="w-20 h-auto grayscale hover:grayscale-0 duration-500">
                                                                </a>
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                        <div
                                                            class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2 self-center">
                                                            <div class="flex-auto p-4 ">
                                                                <a href="#">
                                                                    <img src="assets/images/products/bl-4.png"
                                                                        alt=""
                                                                        class="w-20 h-auto grayscale hover:grayscale-0 duration-500">
                                                                </a>
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                    </div> <!--end grid-->
                                                </div><!--end card-body-->
                                            </div><!--end col-->
                                        </div> <!--end grid-->
                                    </div><!--end card-body-->
                                </div> <!--end inner-grid-->
                            </div><!--end col-->
                        </div> <!--end grid-->
                        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                            @foreach ($products as $product)
                                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                    <div
                                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                        <div class="flex-auto  text-center">
                                            <div class="flex-auto text-center bg-gray-100">
                                                {{-- <span
                                                    class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50%
                                                    off</span> --}}
                                                <a href="{{route('usersite.show',$product->products_id)}}">
                                                    <img src="{{ asset('storage/' . explode('|', $product->filepond)[0]) }}"
                                                        alt="Product Image"
                                                        class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                </a>
                                            </div>
                                            <div class="flex-auto  text-center p-4">
                                                <span
                                                    class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">{{ $product->Category->title }}</span>
                                                <a href="{{route('usersite.show',$product->products_id)}}"
                                                    class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">{{ $product->name }}
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
                                                        class="text-sm text-slate-500">$</sup>{{ $product->price }} 
                                                        {{-- <del  --}}
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->products_id }}">
                                                    <button type="submit"
                                                        class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Add to Cart</button>
                                                </form>
                                                </div>
                                        </div>
                                    </div> <!--end card-->
                                </div><!--end col-->
                            @endforeach
                            {{-- <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                <div
                                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                    <div class="flex-auto  text-center">
                                        <div class="flex-auto text-center bg-gray-100">
                                            <span
                                                class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50%
                                                off</span>
                                            <a href="#">
                                                <img src="assets/images/products/01.png" alt=""
                                                    class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                            </a>
                                        </div>
                                        <div class="flex-auto  text-center p-4">
                                            <span
                                                class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                                            <a href="ecommerce-product-detail.html"
                                                class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">White
                                                Table Camera </a>
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
                                                class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                                Now</button>
                                        </div>
                                    </div>
                                </div> <!--end card-->
                            </div><!--end col--> --}}
                            {{-- <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                <div
                                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                    <div class="flex-auto  text-center">
                                        <div class="flex-auto text-center bg-gray-100">
                                            <span
                                                class="absolute right-2 top-2 focus:outline-none text-[12px] bg-orange-500 text-white dark:text-orange-600 rounded font-medium py-0 px-2 mb-5 inline-block">Coming
                                                soon</span>
                                            <a href="#">
                                                <img src="assets/images/products/04.png" alt=""
                                                    class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                            </a>
                                        </div>
                                        <div class="flex-auto  text-center p-4">
                                            <span
                                                class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Covid
                                                Safety</span>
                                            <a href="ecommerce-product-detail.html"
                                                class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">N95
                                                Covid Safety Mask </a>
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
                                                class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                                Now</button>
                                        </div>
                                    </div>
                                </div> <!--end card-->
                            </div><!--end col-->
                            <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                <div
                                    class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                    <div class="flex-auto  text-center">
                                        <div class="flex-auto text-center bg-gray-100">
                                            <a href="#">
                                                <img src="assets/images/products/03.png" alt=""
                                                    class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                            </a>
                                        </div>
                                        <div class="flex-auto  text-center p-4">
                                            <span
                                                class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Entertainment</span>
                                            <a href="ecommerce-product-detail.html"
                                                class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">Imported
                                                VR Box </a>
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
                                                class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                                Now</button>
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
                                            <a href="#">
                                                <img src="assets/images/products/02.png" alt=""
                                                    class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                            </a>
                                        </div>
                                        <div class="flex-auto  text-center p-4">
                                            <span
                                                class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Footwear</span>
                                            <a href="ecommerce-product-detail.html"
                                                class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">New
                                                Colorfull Shoes </a>
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
                                                class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                                Now</button>
                                        </div>
                                    </div>
                                </div> <!--end card--> --}}
                        </div><!--end col-->
                        <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                            <div
                                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                <div class="flex-auto  text-center">
                                    <div class="flex-auto text-center bg-gray-100">
                                        <span
                                            class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50%
                                            off</span>
                                        <a href="#">
                                            <img src="assets/images/products/pro-4.png" alt=""
                                                class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                        </a>
                                    </div>
                                    <div class="flex-auto  text-center p-4">
                                        <span
                                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Entertainment</span>
                                        <a href="ecommerce-product-detail.html"
                                            class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">Mannat
                                            530 Bluetooth Wireless </a>
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
                                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                            Now</button>
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
                                        <a href="#">
                                            <img src="assets/images/products/pro-1.png" alt=""
                                                class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                        </a>
                                    </div>
                                    <div class="flex-auto  text-center p-4">
                                        <span
                                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Footwear</span>
                                        <a href="ecommerce-product-detail.html"
                                            class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">New
                                            Colorfull Shoes </a>
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
                                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                            Now</button>
                                    </div>
                                </div>
                            </div> <!--end card-->
                        </div><!--end col-->
                        <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                            <div
                                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                <div class="flex-auto  text-center">
                                    <div class="flex-auto text-center bg-gray-100">
                                        <a href="#">
                                            <img src="assets/images/products/pro-2.png" alt=""
                                                class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                        </a>
                                    </div>
                                    <div class="flex-auto  text-center p-4">
                                        <span
                                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Clothes</span>
                                        <a href="ecommerce-product-detail.html"
                                            class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">Robo
                                            Men Oversized hoo - Blue </a>
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
                                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                            Now</button>
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
                                        <a href="#">
                                            <img src="assets/images/products/pro-3.png" alt=""
                                                class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                        </a>
                                    </div>
                                    <div class="flex-auto  text-center p-4">
                                        <span
                                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                                        <a href="ecommerce-product-detail.html"
                                            class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2">Mannat
                                            HD, Smart LED Fire TV </a>
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
                                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                                            Now</button>
                                    </div>
                                </div>
                            </div> <!--end card-->
                        </div><!--end col-->
                    </div><!--end inner-grid-->
                </div><!--end container-->
            </div><!--end section-->

            <div class="pb-5 pt-0 md:py-5">
                <div class="container">
                    <div class=" md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 hidden md:grid">
                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                            <div
                                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                <div class="flex-auto">
                                    {{-- <div class="swiper defaultSwiper">
                                        <div class="swiper-wrapper ">
                                            <div class="swiper-slide overflow-hidden">
                                                <div
                                                    class="text-center h-[235px] flex justify-center bg-[url('../images/products/cos.png')] bg-cover py-10">
                                                    <div class="self-center">
                                                        <h4 class="font-spartan text-[42px] font-semibold mb-4">
                                                            Beautiful glamorous radiant</h4>
                                                        <p class="mb-4 text-xxl text-slate-500">It is a long
                                                            established fact that a reader will be distracted by the
                                                            <br> readable content of a page layout.
                                                        </p>
                                                        <button type="button"
                                                            class="px-4 py-2 lg:px-4 bg-brand-500  text-white text-base  transition hover:bg-brand-500 hover:text-white border border-brand border-dashed font-medium">View
                                                            Collection</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide overflow-hidden">
                                                <div
                                                    class="text-center h-[235px] flex justify-center bg-[url('../images/products/jew.png')] bg-cover py-10">
                                                    <div class="self-center">
                                                        <h4 class="font-spartan text-[42px] font-semibold mb-4">Just
                                                            Launched new product
                                                        </h4>
                                                        <p class="mb-4 text-xxl text-slate-500">It is a long
                                                            established fact that a reader will be distracted by the
                                                            <br> readable content of a page layout.
                                                        </p>
                                                        <button type="button"
                                                            class="px-4 py-2 lg:px-4 bg-brand-500  text-white text-base  transition hover:bg-brand-500 hover:text-white border border-brand border-dashed font-medium">View
                                                            Collection</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end inner-grid-->
                    <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 pt-0 md:pt-10">
                        <div
                            class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                            <div class="flex-auto p-4">
                                <i class="icofont-truck-alt text-green-500 text-[30px]"></i>
                                <h4 class="font-semibold text-lg dark:text-slate-200 my-1">Fast Delivery</h4>
                                <p class="text-slate-500 dark:text-gray-400 text-sm font-medium">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                        <div
                            class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative ">
                            <div class="flex-auto p-4">
                                <i class="icofont-refresh text-red-500 text-[30px]"></i>
                                <h4 class="font-semibold text-lg dark:text-slate-200 my-1">Returns In 30 Days</h4>
                                <p class="text-slate-500 dark:text-gray-400 text-sm font-medium">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                        <div
                            class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative ">
                            <div class="flex-auto p-4">
                                <i class="icofont-headphone-alt text-orange-400 text-[30px]"></i>
                                <h4 class="font-semibold text-lg dark:text-slate-200 my-1">Online Support 24/7</h4>
                                <p class="text-slate-500 dark:text-gray-400 text-sm font-medium">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                        <div
                            class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative ">
                            <div class="flex-auto p-4">
                                <i class="icofont-wallet text-purple-500 text-[30px]"></i>
                                <h4 class="font-semibold text-lg dark:text-slate-200 my-1">Secure Payment</h4>
                                <p class="text-slate-500 dark:text-gray-400 text-sm font-medium">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div><!--end section-->
        </div><!--end main-->
    </div><!--end wrapper-->
@endsection
