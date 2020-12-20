<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form>
    <div class="grid grid-cols-12 gap-6">

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pl-5 pr-5 mt-2 -mx-5" style="margin-top: 1.7rem">
        <select data-search="true" class="tail-select w-full">
          <option value="">Select Clinic</option>
          <option value="1">Clinic 1</option>
          <option value="2">Clinic 2</option>
          <option value="3">Clinic 3</option>
        </select> 
      </div>


      <div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Service"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Service Cost"> 
      </div>

      <button type="submit" class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> 
        <i data-feather="plus" class="w-5 h-4 mr-2 ml-2"></i> Add 
      </button>

    </div>
  </form>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">

  <div class="overflow-x-auto p-5"> 
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Service</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Service Cost</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th>
        </tr> 
      </thead> 

      <tbody> 
        <tr> 
          <td class="border-b dark:border-dark-5">1</td> 
          <td class="border-b dark:border-dark-5">Angelina</td> 
          <td class="border-b dark:border-dark-5"> 100 $ </td> 
          <td class="border-b dark:border-dark-5 whitespace-no-wrap">
            <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white"> 
              <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                <i data-feather="edit" class="w-4 h-4"></i> 
              </a> 
            </button>

            <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> 
              <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                <i data-feather="trash" class="w-4 h-4"></i> 
              </a> 
            </button>
          </td> 
        </tr>

        <tr> 
          <td class="border-b dark:border-dark-5">2</td> 
          <td class="border-b dark:border-dark-5">Brad</td> 
          <td class="border-b dark:border-dark-5">50 $</td> 
          <td class="border-b dark:border-dark-5 whitespace-no-wrap">
            <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white"> 
              <a href="#" class="w-5 h-5 flex items-center justify-center"> 
                <i data-feather="edit" class="w-4 h-4"></i> 
              </a> 
            </button>

            <button class="button px-2 mr-1 mb-2 bg-theme-6 text-white"> 
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

<?php include("layouts/footer.php") ?>