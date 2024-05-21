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
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">Categorys</h1>
                                        <ol class="list-reset flex text-sm">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a>
                                            </li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                                Categorys</li>
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
            <div class="flex flex-wrap gap-4 mb-3">
                <div class="ms-auto">
                    <form>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
                            </div>
                            <input type="search" id="productSearch"
                                class="form-input w-52 rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 pl-10 p-2.5"
                                placeholder="search">
                        </div>
                    </form>
                </div>
                <div>
                    <a href="{{ route('category.create') }}">
                        <button
                            class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                            Add Category
                        </button>
                    </a>
                </div>
            </div>

            <div id="myTabContent">
                <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-900" id="all" role="tabpanel"
                    aria-labelledby="all-tab">
                    <div class="grid grid-cols-1 p-0 md:p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <table class="w-full">
                                    <thead class="bg-gray-50 dark:bg-slate-700/20">
                                        <tr>
                                            <th scope="col" class="p-3">
                                                <label class="custom-label">
                                                    <div
                                                        class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
                                                        <input type="checkbox" class="hidden">
                                                        <i
                                                            class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                    </div>
                                                </label>
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                code
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Categories
                                            </th>
                                            <th scope="col"
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr
                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">

                                                <td class="w-4 p-4">
                                                    <label class="custom-label">
                                                        <div
                                                            class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
                                                            <input type="checkbox" class="hidden">
                                                            <i
                                                                class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                        </div>
                                                    </label>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $category->code }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $category->title }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <a href="{{ url('category/' . $category->categories_id . '/edit') }}"><i
                                                            class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                    {{-- <a href="#"><i
                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a> --}}
                                                    <form action="{{ url('category/' . $category->categories_id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--end div-->
                        </div><!--end div-->
                    </div><!--end grid-->
                </div>
            </div>
        </div><!--end card-body-->
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
                Robotech
                <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted
                    with <i class="ti ti-heart text-red-500"></i> by
                    Mannatthemes</span>
            </footer>
            <!-- end Footer -->
        </div>
    </div>
@endsection
