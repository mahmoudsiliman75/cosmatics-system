<?php include("layouts/header.php") ?>

<div class="mt-5">

  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
      <h2 class="font-xl text-xl text-base text-gray-600"> All Employees </h2>
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
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Clinic Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Emolpyee Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Emolpyee Role</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Clinic 1</td> 
            <td class="border-b dark:border-dark-5"> Jolie </td>
            <td class="border-b dark:border-dark-5"> Doctor </td>
            <td class="border-b dark:border-dark-5 whitespace-no-wrap">
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
            </td> 
          </tr>

          <tr> 
            <td class="border-b dark:border-dark-5">2</td> 
            <td class="border-b dark:border-dark-5">Clinic 2</td> 
            <td class="border-b dark:border-dark-5">Pitt</td> 
            <td class="border-b dark:border-dark-5"> Receptionist </td>
            <td class="border-b dark:border-dark-5 whitespace-no-wrap">
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
            </td> 
          </tr> 

        </tbody> 
      </table> 
    </div> 

    <button type="submit" class="button w-56 mr-5 ml-5 flex items-center justify-center bg-theme-1 text-white"> 
      <i data-feather="plus-square" class="w-4 h-4 mr-2  ml-2"></i>
      <a href="add-user.php">
        <span> Add New Employee <span> 
      </a>
    </button>

  </div>
  <!-- END: Table Data -->

</div>

<?php include("layouts/footer.php") ?>