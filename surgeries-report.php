<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Surgeries Report</h2>
</div>

<div class="mt-5">
  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">
    <div class="sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
    
      <form class="flex mr-auto grid grid-cols-12 gap-6" id="tabulator-html-filter-form">

        <div class="sm:flex-row items-center col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 mt-2">
          <label class="text-gray-600 mb-3 text-lg">Sarch For</label>
          <input type="text" class="input w-full border" placeholder="Search">
        </div>

        <div class="sm:flex-row items-center col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-2 mt-1">
          <button type="button" class="button text-center w-11 h-11 bg-theme-1 text-white mx-2 mt-8" id="">
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
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Surgery Type</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Number</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Patients</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Number Of Males</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Number Of Females</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Type 1</td> 
            <td class="border-b dark:border-dark-5"> 30 </td> 
            <td class="border-b dark:border-dark-5"> 30 </td> 
            <td class="border-b dark:border-dark-5"> 5 </td>
            <td class="border-b dark:border-dark-5"> 25 </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="edit" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="trash" class="w-4 h-4"></i> 
                </a> 
              </button>

            </td> 

          </tr>

          <tr> 
            <td class="border-b dark:border-dark-5">2</td> 
            <td class="border-b dark:border-dark-5">Type 2</td> 
            <td class="border-b dark:border-dark-5"> 60 </td> 
            <td class="border-b dark:border-dark-5"> 60 </td> 
            <td class="border-b dark:border-dark-5"> 50 </td>
            <td class="border-b dark:border-dark-5"> 10 </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="edit" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white tooltip" title="Delete"> 
                <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="trash" class="w-4 h-4"></i> 
                </a> 
              </button>

            </td> 

          </tr>
        </tbody> 
      </table> 
    </div> 

  </div>
  <!-- END: Table Data -->
</div>


<?php include("layouts/footer.php") ?>