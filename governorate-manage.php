<?php include("layouts/header.php") ?>

<form>
  <div class="grid grid-cols-12 gap-6">

    <div class="col-span-5 intro-y box px-5 pt-5 pb-5 mt-5">
      <h3 class="text-md font-medium truncate text-gray-600"> Add New Governorate </h3>
      <div class="grid grid-cols-12 gap-6">

        <div class="flex flex-col col-span-8 sm:col-span-12 lg:col-span-8 lg:flex-row pr-3 pl-3 -mx-5">
          <input type="text" class="input w-full border mt-2" placeholder="Governorate Name"> 
        </div>

        <button type="submit" class="button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
          <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
        </button>

      </div>
    </div>

    <div class="col-span-7 sm:col-span-7 intro-y box px-5 pt-5 pb-5 mt-5">
      <h3 class="text-md font-medium truncate text-gray-600"> Add New City </h3>
      <div class="grid grid-cols-12 gap-6">

        <div class="flex flex-col col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <select data-search="true" class="tail-select w-full">
            <option value="1">Select Governorate</option>
            <option value="2">Clinic 1</option>
            <option value="3">Clinic 2</option>
            <option value="4">Clinic 3</option>
          </select> 
        </div>

        <div class="flex flex-col col-span-5 lg:flex-row pr-3 pl-3 -mx-5">
          <input type="text" class="input w-full border mt-2" placeholder="Name"> 
        </div>

        <button type="submit" class="button translate-y-3 mt-2 flex items-center justify-center bg-theme-1 text-white col-span-3"> 
          <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
        </button>

      </div>
    </div>


  </div>

  <div class="mt-5">

    <!-- BEGIN: Table Data -->
    <div class="intro-y box" style="z-index:1">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
        <h2 class="font-medium text-base">
          Governorates
        </h2>
        <form class="flex mr-auto" id="tabulator-html-filter-form">

          <div class="flex flex-col sm:flex-row items-center mr-4">
            <input type="text" class="input w-full border" id="tabulator-html-filter-value" placeholder="Search">
          </div>
          <div class="">
            <button type="button" class="button text-center w-11 bg-theme-1 text-white mr-2 ml-2" id="tabulator-html-filter-go">
              <i data-feather="search" class="w-5 h-5 text-center"></i> 
            </button>
          </div>

        </form>
      </div>

      <div class="overflow-x-auto p-5"> 
        <table class="table"> 
          <thead> 
            <tr class="bg-gray-200 dark:bg-dark-1"> 
              <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
              <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Governorate</th> 
              <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Doctors</th>
              <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Cities</th> 
              <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
            </tr> 
          </thead> 

          <tbody> 
            <tr> 
              <td class="border-b dark:border-dark-5">1</td> 
              <td class="border-b dark:border-dark-5">Angelina</td> 
              <td class="border-b dark:border-dark-5"> Jolie </td> 
              <td class="border-b dark:border-dark-5">@angelinajolie</td> 
              <th class="border-b dark:border-dark-5 whitespace-no-wrap">
                <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white"> 
                  <a href="#" class="w-5 h-5 flex items-center justify-center tooltip" title="Edit"> 
                    <i data-feather="edit" class="w-4 h-4"></i> 
                  </a> 
                </button>

                <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> 
                  <a href="#" class="w-5 h-5 flex items-center justify-center tooltip" title="Delete"> 
                    <i data-feather="trash" class="w-4 h-4"></i> 
                  </a> 
                </button>
              </th> 
            </tr>

            <tr> 
              <td class="border-b dark:border-dark-5">2</td> 
              <td class="border-b dark:border-dark-5">Brad</td> 
              <td class="border-b dark:border-dark-5">Pitt</td> 
              <td class="border-b dark:border-dark-5">@bradpitt</td> 
              <th class="border-b dark:border-dark-5 whitespace-no-wrap">
              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white"> 
                  <a href="#" class="w-5 h-5 flex items-center justify-center tooltip" title="Delete"> 
                    <i data-feather="edit" class="w-4 h-4"></i> 
                  </a> 
                </button>

                <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> 
                  <a href="#" class="w-5 h-5 flex items-center justify-center tooltip" title="Delete"> 
                    <i data-feather="trash" class="w-4 h-4"></i> 
                  </a> 
                </button>
              </th> 
            </tr> 

            <tr> 
              <td class="border-b dark:border-dark-5">3</td> 
              <td class="border-b dark:border-dark-5">Charlie</td> 
              <td class="border-b dark:border-dark-5">Hunnam</td> 
              <td class="border-b dark:border-dark-5">@charliehunnam</td> 
              <th class="border-b dark:border-dark-5 whitespace-no-wrap">
              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white"> 
                  <a href="#" class="w-5 h-5 flex items-center justify-center tooltip" title="Edit"> 
                    <i data-feather="edit" class="w-4 h-4"></i> 
                  </a> 
                </button>

                <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> 
                  <a href="#" class="w-5 h-5 flex items-center justify-center tooltip" title="Delete"> 
                    <i data-feather="trash" class="w-4 h-4"></i> 
                  </a> 
                </button>
              </th> 
            </tr> 

            
          </tbody> 
        </table> 
      </div> 

    </div>
    <!-- END: Table Data -->
  </div>


</form>

<?php include("layouts/footer.php") ?>