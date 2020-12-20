<?php include("layouts/header.php") ?>


<div class="mt-5">
  <!-- BEGIN: Table Data -->
  <div class="intro-y box pb-3" style="z-index:1">
    <div class="sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
    
      <form class="flex mr-auto grid grid-cols-12 gap-6" id="tabulator-html-filter-form">

        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pl-5 pr-5 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 text-lg">Clinic Name</label>
          <select data-search="true" class="tail-select w-full">
            <option value="">Select Clinic</option>
            <option value="1">All Clinics</option>
            <option value="2">Clinic 1</option>
            <option value="3">Clinic 2</option>
          </select> 
        </div>

        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pl-5 pr-5 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 text-lg">Medical Condition</label>
          <select data-search="true" class="tail-select w-full">
            <option value="">Select Condition</option>
            <option value="1">All Conditions</option>
            <option value="2"> Revealed </option>
            <option value="3"> Follow-Up Of Ovulation </option>
            <option value="4"> Follow-Up Of Pregnancy </option>
          </select> 
        </div>

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
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Patient Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Phone Number</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">History</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 

            <td class="border-b dark:border-dark-5">Angelina</td> 

            <td class="border-b dark:border-dark-5"> 
              <p> 01000000000 </p>
              <p> 01000000001 </p>
            </td> 

            <td class="border-b dark:border-dark-5"> 
              <p> <span> First Visit History:</span>&nbsp; 11-10-2020 </p>
              <p> <span> Last Visit History:</span>&nbsp; 3-11-2020 </p>
            </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white tooltip" title="Patient History" > 
                <a href="patient-history.php" class="w-5 h-5 flex items-center justify-center"> 
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

          <tr> 
            <td class="border-b dark:border-dark-5">2</td> 

            <td class="border-b dark:border-dark-5">Brad</td> 
            
            <td class="border-b dark:border-dark-5">
              <p> 01000000008 </p>
              <p> 01000000003 </p>
            </td> 

            <td class="border-b dark:border-dark-5">
              <p> <span> First Visit History:</span>&nbsp; 08-3-2019 </p>
              <p> <span> Last Visit History:</span>&nbsp; 01-11-2020 </p>
            </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-12 text-white tooltip" title="Patient History"> 
                <a href="patient-history.php" class="w-5 h-5 flex items-center justify-center"> 
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
      <a href="add-new-patient.php">
        <span> Add New Patient <span> 
      </a>
    </button>

  </div>
  <!-- END: Table Data -->
</div>


<?php include("layouts/footer.php") ?>