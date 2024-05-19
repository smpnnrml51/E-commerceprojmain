@extends('layouts.admin')
@section('content')
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
              <!--end card-->
            </div>
            <!--end col-->
            <form action="">
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
                      name="name"
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
                      name="desc"
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
                          name="price"
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
            </form>
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
@endsection
    <!--end /div-->
@section('script')
    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="{{asset('libs/lucide/umd/lucide.min.js')}}"></script>
    <script src="{{asset('libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('libs/@frostui/tailwindcss/frostui.js')}}"></script>
    <script src="{{asset('libs/filepond/filepond.min.js')}}"></script>
    <script src="{{asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
    <script src="{{asset('libs/vanillajs-datepicker/js/datepicker-full.min.js')}}"></script>
    <script src="{{asset('libs/mobius1-selectr/selectr.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
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

@endsection  
