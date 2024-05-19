@extends('layouts.admin')
@section('content')
@section('style')
    <!-- Css -->
    <link rel="stylesheet" href="assets/libs/filepond/filepond.min.css" />
    <link
      rel="stylesheet"
      href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/libs/vanillajs-datepicker/css/datepicker.min.css"
    />
    <link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css" />
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/libs/icofont/icofont.min.css" />
    <link
      href="assets/libs/flatpickr/flatpickr.min.css"
      type="text/css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/tailwind.min.css" />

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
      <div
        class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300"
      >
        <div class="xl:w-full">
          <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
              <div class="w-full">
                <div class="">
                  <div class="flex flex-wrap justify-between">
                    <div class="items-center">
                      <h1
                        class="font-medium text-3xl block dark:text-slate-100"
                      >
                        Add Product
                      </h1>
                      <ol class="list-reset flex text-sm">
                        <li>
                          <a href="#" class="text-gray-500 dark:text-slate-400"
                            >Robotech</a
                          >
                        </li>
                        <li>
                          <span class="text-gray-500 dark:text-slate-400 mx-2"
                            >/</span
                          >
                        </li>
                        <li class="text-gray-500 dark:text-slate-400">Admin</li>
                        <li>
                          <span class="text-gray-500 dark:text-slate-400 mx-2"
                            >/</span
                          >
                        </li>
                        <li
                          class="text-primary-500 hover:text-primary-600 dark:text-primary-400"
                        >
                          Add Product
                        </li>
                      </ol>
                    </div>
                    <div class="flex items-center">
                      <div
                        class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700"
                      >
                        <input
                          type="text"
                          class="dash_date border-0 focus:border-0 focus:outline-none"
                          readonly
                          required=""
                        />
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
          <div
            class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between"
          >
            <div
              class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3"
            >
              <div class="w-full relative p-4">
                <label
                  for=""
                  class="font-medium text-sm text-slate-600 dark:text-slate-400"
                  >Upload Image</label
                >
                <div class="w-full h-56 mx-auto mb-4">
                  <input
                    type="file"
                    class="filepond h-56"
                    name="filepond"
                    accept="image/png, image/jpeg, image/gif"
                  />
                </div>
                <div class="grid grid-cols-2 gap-2">
                  <div class="col-span-1">
                    <input type="file" class="filepond" />
                  </div>
                  <div class="col-span-1">
                    <input type="file" class="filepond" />
                  </div>
                </div>
              </div>
              <!--end card-->
            </div>
            <!--end col-->
            <div
              class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6"
            >
              <div class="w-full relative mb-4">
                <div class="flex-auto p-0 md:p-4">
                  <div class="mb-2">
                    <label
                      for="title"
                      class="font-medium text-sm text-slate-600 dark:text-slate-400"
                      >Title</label
                    >
                    <input
                      type="title"
                      id="title"
                      class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                      placeholder="Title"
                      required
                    />
                  </div>
                  <div class="mb-2">
                    <label
                      for="category"
                      class="font-medium text-sm text-slate-600 dark:text-slate-400"
                      >Category</label
                    >
                    <select
                      id="category"
                      class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700"
                    >
                      <option class="dark:text-slate-700">All Category</option>
                      <option class="dark:text-slate-700">Electronics</option>
                      <option class="dark:text-slate-700">Furniture</option>
                      <option class="dark:text-slate-700">Footwear</option>
                      <option class="dark:text-slate-700">Clothes</option>
                    </select>
                  </div>
                  <div class="mb-2">
                    <label
                      for="description"
                      class="font-medium text-sm text-slate-600 dark:text-slate-400"
                      >Description</label
                    >
                    <textarea
                      id="description"
                      rows="3"
                      class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700"
                      placeholder="Description ..."
                    ></textarea>
                  </div>
                  <div class="mb-2">
                    <div class="grid grid-cols-2 gap-3">
                      <div class="col-span-1">
                        <label
                          for="Product-date"
                          class="font-medium text-sm text-slate-600 dark:text-slate-400"
                          >Product Date</label
                        >
                        <input
                          type="text"
                          id="Product-date"
                          class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700"
                          name="foo"
                        />
                      </div>
                      <div class="col-span-1">
                        <label
                          for="price"
                          class="font-medium text-sm text-slate-600 dark:text-slate-400"
                          >Price</label
                        >
                        <input
                          type="title"
                          id="price"
                          class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                          placeholder="Price"
                          required
                        />
                      </div>
                    </div>
                  </div>
                  <div class="mb-2">
                    <label
                      for="gender"
                      class="font-medium text-sm text-slate-600 dark:text-slate-400"
                      >For this product</label
                    >
                    <select
                      id="gender"
                      class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                    >
                      <option class="dark:text-slate-700">-- Gender --</option>
                      <option class="dark:text-slate-700">Male</option>
                      <option class="dark:text-slate-700">Female</option>
                      <option class="dark:text-slate-700">Children</option>
                      <option class="dark:text-slate-700">Other</option>
                    </select>
                  </div>
                  <div class="mb-2">
                    <label
                      for="sizing"
                      class="font-medium text-sm text-slate-600 dark:text-slate-400"
                      >Size</label
                    >
                    <select
                      id="sizing"
                      class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                    >
                      <option>Size</option>
                      <option>SM</option>
                      <option>MD</option>
                      <option>LG</option>
                      <option>XL</option>
                      <option>XXL</option>
                    </select>
                  </div>

                  <div class="">
                    <button
                      class="px-2 py-2 lg:px-4 bg-brand text-white text-sm rounded hover:bg-brand-600 border border-brand-500"
                    >
                      Add Product
                    </button>
                    <button
                      class="px-2 py-2 lg:px-4 bg-transparent text-brand text-sm rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium"
                    >
                      Save Product
                    </button>
                  </div>
                </div>
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
            <!--end col-->
            <div
              class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3"
            >
              <div class="w-full relative mb-4">
                <div class="flex-auto p-0 md:p-4">
                  <div>
                    <p class="text-slate-700 text-base dark:text-slate-400">
                      Product Image
                    </p>
                    <img
                      src="assets/images/products/pro-3.png"
                      alt=""
                      class="w-full h-auto"
                    />
                  </div>
                  <div class="mb-5">
                    <p class="text-slate-700 text-base dark:text-slate-400">
                      Product Title
                    </p>
                    <h4
                      class="text-xl font-semibold text-slate-700 dark:text-slate-300"
                    >
                      Mannat HD, Smart LED Fire TV
                    </h4>
                  </div>
                  <div class="mb-5">
                    <p class="text-slate-600 text-base dark:text-slate-400">
                      Description
                    </p>
                    <h4
                      class="text-base font-medium text-slate-900 dark:text-slate-300"
                    >
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking
                      at its layout.
                    </h4>
                  </div>
                  <div class="mb-5">
                    <p class="text-slate-600 text-base dark:text-slate-400">
                      Pro. Date
                    </p>
                    <h4
                      class="text-base font-semibold text-slate-900 dark:text-slate-300"
                    >
                      02/05/2023
                    </h4>
                  </div>
                  <div class="mb-5">
                    <p class="text-slate-600 text-base dark:text-slate-400">
                      For this product
                    </p>
                    <h4
                      class="text-base font-semibold text-slate-900 dark:text-slate-300"
                    >
                      Other
                    </h4>
                  </div>
                  <div class="mb-5">
                    <p class="text-slate-600 text-base dark:text-slate-400">
                      Size
                    </p>
                    <h4
                      class="text-base font-semibold text-slate-900 dark:text-slate-300"
                    >
                      SM, MD, LG, XL
                    </h4>
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
            class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40"
          >
            <div class="container">
              <!-- Footer Start -->
              <footer
                class="footer bg-transparent text-center font-medium text-slate-600 dark:text-slate-400 md:text-left"
              >
                &copy;
                <script>
                  var year = new Date();
                  document.write(year.getFullYear());
                </script>
                Robotech
                <span
                  class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
                  >Crafted with <i class="ti ti-heart text-red-500"></i> by
                  Mannatthemes</span
                >
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

    <script src="assets/libs/filepond/filepond.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
    <script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
    <script>
      FilePond.registerPlugin(FilePondPluginImagePreview);
      // Get a reference to the file input element
      const inputElement = document.querySelectorAll('input[type="file"]');

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
