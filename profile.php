<?php include("layouts/header.php") ?>

  <!-- BEGIN: Profile Info -->
  <div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">

      <div class="flex flex-1 px-5 items-center justify-center">
        <div class="flex flex-col lg:flex-row pb-5 -mx-5">

          <div class="flex flex-1 flex-wrap justify-center px-5 items-center">

            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
              <img alt="User Img" class="rounded-full image-preview" src="dist/images/profile-7.jpg">
            </div>

            <div class="w-full ml-5">
              <div class="w-full flex justify-center truncate sm:whitespace-normal font-medium text-lg mt-3">Doctor 1</div>
              <div class="text-gray-600 flex justify-center">Head Doctor</div>
            </div>

          </div>

        </div>
      </div>

      <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="truncate sm:whitespace-normal flex items-center"> 
          <i data-feather="phone" class="w-4 h-4 mr-2 ml-2"></i> +2 010336644582 
        </div>

        <div class="truncate sm:whitespace-normal flex items-center mt-3"> 
          <i data-feather="mail" class="w-4 h-4 mr-2 ml-2"></i> Doctor1@example.com
        </div>

        <div class="truncate sm:whitespace-normal flex items-center mt-3"> 
          <i data-feather="map-pin" class="w-4 h-4 mr-2 ml-2"></i> Clinic 1 
        </div>

      </div>

    </div>
  </div>
  <!-- END: Profile Info -->

  <div class="intro-y tab-content mt-5">
    <div class="tab-content__pane active" id="dashboard">
      <div class="grid grid-cols-12 gap-6">

        <!-- BEGIN: Today's Patients Status Box -->
        <div class="intro-y box col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6">

          <div class="section-headding flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
              Today's Patients Status
            </h2>
          </div>

          <div class="p-5">
            <div class="relative flex items-center mb-6">
              <div class="box-line ml-4 mr-auto flex">
                <div>
                  <a href="" class="font-medium">Patient 1</a> 
                  <div class="text-gray-600 mr-5 sm:mr-5">Some Information About Patient 1 Status.</div>
                </div>
              </div>
            </div>

            <div class="relative flex items-center mb-6">
              <div class="box-line ml-4 mr-auto flex">
                <div>
                  <a href="" class="font-medium">Patient 2</a> 
                  <div class="text-gray-600 mr-5 sm:mr-5">Some Information About Patient 2 Status.</div>
                </div>
              </div>
            </div>

            <div class="relative flex items-center mb-6">
              <div class="box-line ml-4 mr-auto flex">
                <div>
                  <a href="" class="font-medium">Patient 3</a> 
                  <div class="text-gray-600 mr-5 sm:mr-5">Some Information About Patient 3 Status.</div>
                </div>
              </div>
            </div>

            <div class="relative flex items-center mb-6">
              <div class="box-line ml-4 mr-auto flex">
                <div>
                  <a href="" class="font-medium">Patient 4</a> 
                  <div class="text-gray-600 mr-5 sm:mr-5">Some Information About Patient 4 Status.</div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- END: Today's Patients Status Box -->

        <!-- BEGIN: Today's Patients Status Box -->
        <div class="intro-y box col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6">

        <div class="overflow-x-auto"> 
          <table class="table"> 

            <thead>
              <tr> 
                <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
                <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Patient Name</th> 
                <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Revealed Type</th> 
              </tr> 
            </thead>

              <tbody> 
                <tr class="bg-gray-200 dark:bg-dark-1"> 
                  <td class="border-b dark:border-dark-5">1</td> 
                  <td class="border-b dark:border-dark-5">Angelina</td> 
                  <td class="border-b dark:border-dark-5">Jolie</td> 
                </tr> 

                <tr> 
                  <td class="border-b dark:border-dark-5">2</td> 
                  <td class="border-b dark:border-dark-5">Brad</td> 
                  <td class="border-b dark:border-dark-5">Pitt</td> 
                </tr> 

                <tr class="bg-gray-200 dark:bg-dark-1">
                  <td class="border-b dark:border-dark-5">3</td> 
                  <td class="border-b dark:border-dark-5">Charlie</td> 
                  <td class="border-b dark:border-dark-5">Hunnam</td> 
                </tr> 
              </tbody> 

            </table> 
          </div> 

        </div>
        <!-- END: Today's Patients Status Box -->

      </div>
    </div>
  </div>

<?php include("layouts/footer.php") ?>