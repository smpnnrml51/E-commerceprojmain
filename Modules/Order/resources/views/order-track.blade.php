@extends('layouts.customer')
@section('content')
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative  duration-300 pt-0 w-full">
        <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0"> 
            <div class="container my-4">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6">
                        <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">  
                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-4 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Track your order</h4>
                                <p class="text-sm text-slate-400">Last track order <span class="focus:outline-none text-[11px] bg-brand-500/10 text-brand-500 dark:text-brand-300 rounded font-medium py-[2px] px-2">02 Dec 2023</span></p>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div class="mb-4">
                                    <label for="Tracking_Number" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your Tracking Number</label>
                                    <input type="text" id="Tracking_Number" placeholder="Tracking number" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" required="">
                                </div>  
                                <div class="flex p-3 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                                    <i class="fas fa-triangle-exclamation flex-shrink-0 text-green-700 self-center"></i>
                                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                      A simple info alert with an <a href="#" class="font-semibold underline hover:text-green-800 dark:hover:text-green-900">example link</a>. Give it a click if you like.
                                    </div>
                                    <button type="button" class="justify-center items-center ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300 alert-hidden">
                                        <i class="icofont-close-line"></i>
                                    </button>
                                </div>                                  
                            </div><!--end card-body--> 
                        </div><!--end card-->                                  
                    </div><!--end col-->  
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6">
                        <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">  
                            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="md:col-span-10">
                                        <p class="text-sm text-slate-400">Tracking Number</p>
                                        <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">GP23651456RR</h4>
                                    </div> 
                                    <div class="md:col-span-2 self-center text-end">
                                        <span class="focus:outline-none text-[12px] bg-yellow-600/10 text-yellow-700 dark:text-yellow-600 rounded font-medium py-1 px-2">Panding</span>                                      
                                    </div>                                        
                                </div>                                    
                            </div>
                            <div class="flex-auto p-4">
                                <div class="items-center flex border-b border-dashed border-slate-200 p-4 pt-0 dark:border-slate-700">                                        
                                    <div class="flex items-center">
                                        <div class="w-9 h-9  relative">
                                            <img class="w-full h-full overflow-hidden object-cover rounded-full object-center bg-slate-200" src="assets/images/users/avatar-6.png" alt="logo">
                                        </div>
                                        <div class="ms-2">
                                            <div class="cursor-pointer hover:text-gray-900 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none">
                                                <h5 class=" font-semibold text-sm text-slate-800">Victor Harrison</h5>
                                            </div>   
                                            <p class="text-gray-500 dark:text-gray-400 text-xs  w-40">Deliveryman</p>                                                 
                                        </div>
                                    </div>        
                                    <div class="ml-auto self-center text-center">
                                        <div>
                                            <a href="#" class="inline-flex  justify-center items-center h-10 w-10 rounded-full bg-blue-500/10 ">
                                                <i class="icofont-phone text-blue-500 text-2xl"></i>
                                            </a>
                                            <a href="#" class="inline-flex  justify-center items-center h-10 w-10 rounded-full bg-blue-500/10 ">
                                                <i class="icofont-chat text-blue-500 text-2xl"></i>
                                            </a>
                                        </div>
                                    </div>   
                                </div>  
                                <div class=""> 
                                    <h6 class="font-medium text-sm text-slate-600 dark:text-slate-400 my-2">Order Time</h6>                                        
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="lg:col-span-5 text-start self-center">
                                            <p class="block"><span>02 Dec 2023</span> <span class="ms-1">07:30pm</span></p>
                                        </div> 
                                        <div class="lg:col-span-2 self-center text-center">
                                            <p class="text-primary-500"><i class="icofont-map-pins text-3xl text-primary-500"></i></p>
                                        </div>
                                        <div class="lg:col-span-5 self-center text-end">
                                            <p class="block"><span>02 Dec 2023</span> <span class="ms-1">08:30pm</span></p>
                                        </div>                                        
                                    </div>    
                                </div>                               
                            </div><!--end card-body-->  
                        </div><!--end card-->                                  
                    </div><!--end col-->                      
                </div> <!--end grid-->
                
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 my-8">                            
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                        <div class=" w-full relative">
                            <div class="flex-auto "> 
                                <ol class="items-center sm:flex">
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-brand-100 rounded-full ring-0 ring-white dark:bg-brand-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="package-open" class="w-6 h-6 stroke-brand-500"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Order is processing</h3>
                                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">26 January, 2023 <span>03:10 PM</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Your package is ready for the seller to prepare.</p>
                                        </div>
                                    </li>
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-brand-100 rounded-full ring-0 ring-white dark:bg-brand-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="package-2" class="w-6 h-6 stroke-brand-500"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Picked Up</h3>
                                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">27 January, 2023 <span>09:00 AM</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Your package has been picked up from the seller.</p>
                                        </div>
                                    </li>
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div class="z-10 flex animate-bounce items-center justify-center w-6 h-6 bg-brand-500 rounded-full ring-0 ring-brand-500 dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="truck" class="w-6 h-6 stroke-white"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ready to Ship</h3>
                                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">28 January, 2023 <span>01:10 PM</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Your package is now ready to be shipped.</p>
                                        </div>
                                    </li>
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-primary-100 rounded-full ring-0 ring-white dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="clock-10" class="w-6 h-6 stroke-slate-500"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Shipped</h3>
                                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">29 January, 2023 <span>Estimated time</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pending</p>
                                        </div>
                                    </li>
                                    <li class="relative mb-6 sm:mb-0">
                                        <div class="flex items-center">
                                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-primary-100 rounded-full ring-0 ring-white dark:bg-primary-900 sm:ring-8 dark:ring-slate-800 shrink-0">
                                                <i data-lucide="target" class="w-6 h-6 stroke-slate-500"></i>
                                            </div>
                                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                        </div>
                                        <div class="mt-3 sm:pr-8">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Delivered</h3>
                                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">30 January, 2023 <span>Estimated time</span></time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pending</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div> <!--end card-->
                    </div><!--end col--> 
                                                                                   
                </div><!--end inner-grid-->
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="w-full relative mb-4">  
                            <div class="flex-auto">
                                   <div id="V_Simple" class="h-96 z-[5]"></div> 
                            </div><!--end card-body--> 
                        </div><!--end card-->                                  
                    </div><!--end col-->                        
                </div> <!--end grid-->
            </div><!--end container--> 
            <!-- footer -->
            <div class="relative bottom-0 -left-0 -right-0 block print:hidden border-t p-4 bg-black dark:border-slate-700/40">
                <div class="container">
                  <!-- Footer Start -->
                  <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 pt-10">
                    <div class="w-full relative mb-4">                                
                        <div class="flex-auto p-4">
                            <div class="mb-5">
                              <a href='/robotech/default/customers-home'>
                                <img src="assets/images/logo-sm.png" alt="" class="h-8 inline-block me-3">
                                <img src="assets/images/logo.png" alt="" class="h-8 inline-block">
                              </a>
                            </div>
                            <p class="text-slate-500 text-lg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                    <div class="w-full relative mb-4">                                
                      <div class="flex-auto p-4">
                        <h5 class="text-xl font-semibold text-slate-300 mb-6">Customers</h5>
                        <ul class="list-none footer-links">
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Home</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Product details</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Cart</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Checkout</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Wishlist</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Invoice</a>
                          </li>
                        </ul>
                      </div><!--end card-body-->
                  </div> <!--end card-->
                  <div class="w-full relative mb-4">                                
                      <div class="flex-auto p-4">
                        <h5 class="text-xl font-semibold text-slate-300 mb-6">Admin</h5>
                        <ul class="list-none footer-links">
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Dashboard</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Add product</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Orders</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Customers</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Order details</a>
                          </li>
                          <li class="mb-2">
                            <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Refund</a>
                          </li>
                        </ul>
                      </div><!--end card-body-->
                  </div> <!--end card-->
                  <div class="w-full relative mb-4">                                
                    <div class="flex-auto p-4">
                      <h5 class="text-xl font-semibold text-slate-300 mb-6 sm:text-center xl:text-left">Contact Us</h5>
                      <div class="mb-5">
                        <p class="text-slate-400 font-semibold">1884 George Avenue<br>
                          Mobile, AL 36603
                        </p>
                      </div>
                      <div class="flex sm:justify-center xl:justify-start">
                        <a href="" class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                          <i class="icofont-facebook"></i>
                        </a>
                        <a href="" class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                          <i class="icofont-twitter"></i>
                        </a>
                        <a href="" class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-red-600 hover:border-red-600">
                          <i class="icofont-google-plus"></i>
                        </a>
                      </div>
                    </div><!--end card-body-->
                </div> <!--end card-->
                </div>
                  <footer
                    class="footer bg-transparent  text-center  font-medium text-slate-400 dark:text-slate-400 md:text-left "
                  >
                    &copy;
                    <script>
                      var year = new Date();document.write(year.getFullYear());
                    </script>
                    Robotech
                    <span class="float-right hidden text-slate-400 dark:text-slate-400 md:inline-block"
                      >Crafted with <i class="ti ti-heart text-red-500"></i> by
                      Mannatthemes</span
                    >
                  </footer>
                  <!-- end Footer -->
                </div>
              </div>


        </div><!--end main-->
    </div><!--end page-wrapper-->
</div><!--end div-->
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
