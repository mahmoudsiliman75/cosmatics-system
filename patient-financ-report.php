<?php include("layouts/header.php") ?>

<div class="intro-y flex items-center pt-5 h-10 mb-5">
  <h2 class="text-lg font-medium text-gray-600 truncate mr-5">
    <span class="text-purple-700 font-black">(Angelina)</span> Financial Report
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mb-5">

  <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
    <div class="report-box zoom-in">
      <div class="box p-5">
        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor report-box__icon text-theme-12">
            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
            <line x1="8" y1="21" x2="16" y2="21"></line>
            <line x1="12" y1="17" x2="12" y2="21"></line>
          </svg> 
        </div>
        <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
        <div class="text-base text-gray-600 mt-1">Total Products</div>
      </div>
    </div>
  </div>

</div>

<div class="mt-5">

  <div class="intro-y box pb-3" style="z-index:1">

    <div class="overflow-x-auto p-5"> 
      <table class="table"> 
        <thead> 
          <tr class="bg-gray-200 dark:bg-dark-1"> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Patient Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 

            <td class="border-b dark:border-dark-5">Angelina</td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Financial Report"> 
                <a href="patient-financ-report.php" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="dollar-sign" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white tooltip" title="Patient History Without Visits" > 
                <a href="patient-history-without-visits.php" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="hard-drive" class="w-4 h-4"></i> 
                </a> 
              </button>

              <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white tooltip" title="Patient History With Visits" > 
                <a href="patient-history-with-visites.php" class="w-5 h-5 flex items-center justify-center"> 
                  <i data-feather="hard-drive" class="w-4 h-4"></i> 
                </a> 
              </button>

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

    <button type="submit" class="button w-40 mr-5 ml-5 flex items-center justify-center bg-theme-1 text-white"> 
      <i data-feather="plus-square" class="w-4 h-4 mr-2  ml-2"></i>
      <span> Add New Patient <span> 
    </button>

  </div>
  <!-- END: Table Data -->
</div>


<?php include("layouts/footer.php") ?>