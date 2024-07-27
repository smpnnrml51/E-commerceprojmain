@extends('layouts.admin')
@section('styles')
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('libs/filepond/filepond.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/vanillajs-datepicker/css/datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/mobius1-selectr/selectr.min.css') }}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('libs/icofont/icofont.min.css') }}" />
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}" />
@section('content')
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
                                            Create category
                                        </h1>
                                        <ol class="list-reset flex text-sm">
                                            <li>
                                                <a href="#" class="text-gray-500 dark:text-slate-400">Vyomite</a>
                                            </li>
                                            <li>
                                                <span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
                                            </li>
                                            <li class="text-gray-500 dark:text-slate-400">
                                                Admin
                                            </li>
                                            <li>
                                                <span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
                                            </li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                                Create category
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
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div
                        class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">
                        <!--end col-->
                        <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                            <div class="w-full relative mb-4">
                                <div class="flex-auto p-0 md:p-4">
                                    <div class="mb-2">
                                        <label for="Category_title"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Category
                                            title</label>
                                        <input type="Category_title" id="Category_title"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                                            placeholder="Enter category name" required name="title" />
                                    </div>
                                    <div class="mb-2">
                                        <label for="Category_Number"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Category
                                            Number</label>
                                        <input type="Category_Number" id="Category_Number"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                                            placeholder="Category Number" required 
                                            name="code"/>
                                    </div>


                                    <div class="">
                                        <button
                                            class="px-2 py-2 lg:px-4 bg-brand text-white text-sm rounded hover:bg-brand-600 border border-brand-500">
                                            Create Category
                                        </button>
                                        {{-- <button
                                            class="px-2 py-2 lg:px-4 bg-transparent text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">
                                            Save Product
                                        </button>
                                    </div> --}}
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <!--end col-->
                    </div>
                </form>
            </div>
            <!--end page-wrapper-->
        </div>
        <!--end /div-->

        <!-- JAVASCRIPTS -->
        <!-- <div class="menu-overlay"></div> -->
        <script src="{{ asset('libs/lucide/umd/lucide.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('libs/@frostui/tailwindcss/frostui.js') }}"></script>
        <script src="{{ asset('libs/filepond/filepond.min.js') }}"></script>
        <script src="{{ asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
        <script src="{{ asset('libs/vanillajs-datepicker/js/datepicker-full.min.js') }}"></script>
        <script src="{{ asset('libs/mobius1-selectr/selectr.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
        <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            // Get a reference to the file input element
            const inputElement =
                document.querySelectorAll('input[type="file"]');

            // Create a FilePond instance
            inputElement.forEach((element) => {
                const pond = FilePond.create(element);
            });

            var elem = document.querySelector('input[name="foo"]');
            new Datepicker(elem, {
                // ...options
            });
            new Selectr("#sizing", {
                taggable: true,
                tagSeperators: [",", "|"],
            });
        </script>
        </body>

        </html>
    @endsection
