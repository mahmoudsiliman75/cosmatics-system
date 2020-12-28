<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Hospitals Financial Report</h2>
</div>

<div class="mt-5">
  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">
    <div class="flex sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
    
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

      <button class="button p-0 mt-5 mr-5 ml-5 flex items-center justify-center bg-theme-1 text-white"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square w-4 h-4 mr-2 ml-2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
        <a href="javascript:;" data-toggle="modal" data-target="#add-new-hospital" class="button inline-block bg-theme-1 text-white">
          Add New Hospital
        </a> 
      </button>
    </div>

    <div class="overflow-x-auto p-5"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Hospital Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Details</th>
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 
            <td class="border-b dark:border-dark-5">Hospital 1</td> 
            <td class="border-b dark:border-dark-5"> 
              <a href="javascript:;" data-toggle="modal" data-target="#hospital-1-details" class="button mr-1 mb-2 inline-block bg-theme-1 text-white">Show Hospital 1 Details</a> 
            </td> 
          </tr>
        </tbody> 
      </table> 

      <!-- START:: PAGINATION -->
      <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
        <ul class="pagination">
          <li>
            <a class="pagination__link" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg> </a>
          </li>

          <li> <a class="pagination__link" href="">1</a> </li>
          <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
          <li> <a class="pagination__link" href="">3</a> </li>

          <li>
            <a class="pagination__link" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
          </li>
        </ul>
      </div>
      <!-- START:: PAGINATION -->

      <div class="modal" id="add-new-hospital">
        <div class="modal__content p-10 text-center" style="width: 50%">
          

          <div class="intro-y flex items-center pt-5 h-10">
            <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Add New Hospital</h2>
          </div>

            <form class="grid grid-cols-12 gap-6 mt-5 intro-y box px-5 pt-5 pb-5 mt-5">
              <div class="col-span-12 lg:flex-row pr-3 pl-3 -mx-5">
                <label class="text-gray-600 mb-3 text-lg">Hospital Name</label>
                <input type="text" class="input w-full border mt-2" placeholder="Revealed Cost"> 
              </div>

              <button type="submit" class="button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
                <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
              </button>

            </form>

        </div>
      </div>

      <div class="modal" id="hospital-1-details">
        <div class="modal__content p-10 text-center" style="width: 95%">
          

          <div class="intro-y flex items-center pt-5 h-10">
            <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Hospital 1 Report</h2>
          </div>

          <div class="mt-5">
            <!-- BEGIN: Table Data -->
            <div class="intro-y box pb-3" style="z-index:1">
              <div class="flex sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
              
                <form class="print flex mr-auto grid grid-cols-12 gap-6" id="tabulator-html-filter-form">

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

                <button type="submit" class="print print-tables button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
                  <i data-feather="printer" class="w-4 h-4 mr-2  ml-2"></i> Print 
                </button>

              </div>

              <div class="overflow-x-auto p-5"> 
                <table class="table"> 
                  <thead> 
                    <tr class="bg-gray-200 dark:bg-dark-1"> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Surgery Type</th> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Number</th>
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Patient Fees</th> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Hospital Fees</th> 
                      <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Total Doctor Profits</th> 
                      <th class="print border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
                    </tr> 
                  </thead> 

                  <tbody> 
                    <tr> 
                      <td class="border-b dark:border-dark-5">1</td> 
                      <td class="border-b dark:border-dark-5">Type 1</td> 
                      <td class="border-b dark:border-dark-5"> 30 </td> 
                      <td class="border-b dark:border-dark-5"> 50000 </td>
                      <td class="border-b dark:border-dark-5"> 20000 </td>
                      <td class="border-b dark:border-dark-5"> 30000 </td> 

                      <td class="print border-b dark:border-dark-5 whitespace-no-wrap">

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
                      <td class="border-b dark:border-dark-5"> 30 </td> 
                      <td class="border-b dark:border-dark-5"> 50000 </td>
                      <td class="border-b dark:border-dark-5"> 20000 </td>
                      <td class="border-b dark:border-dark-5"> 30000 </td> 

                      <td class="print border-b dark:border-dark-5 whitespace-no-wrap">

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

                <!-- START:: PAGINATION -->
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                  <ul class="pagination">
                    <li>
                      <a class="pagination__link" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg> </a>
                    </li>

                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>

                    <li>
                      <a class="pagination__link" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                    </li>
                  </ul>
                </div>
                <!-- START:: PAGINATION -->

              </div> 

            </div>
            <!-- END: Table Data -->
          </div>

        </div>
      </div>
    </div> 

  </div>
  <!-- END: Table Data -->
</div>


<?php include("layouts/footer.php") ?>