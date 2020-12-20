<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">

  <h2 class="text-gray-600 mb-4 text-lg"> Add New Schedule </h2>

  <form class="grid grid-cols-12 gap-6">

    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-5 pl-5 mt-2 -mx-5">
      <label class="text-gray-600 mb-3 text-lg"> Doctor Name </label>
      <select id="pregnancy-status" data-search="true" class="tail-select w-full">
        <option value="">Select Doctor Name</option>
        <option value="0">Doctor 1</option>
        <option value="1">Doctor 2</option>
      </select> 
    </div>

    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <label class="text-gray-600 mb-3 pb-3 text-lg">Schedule Type</label>
      <input type="text" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Schedule Type" name="schedule-type">
    </div>

    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <label class="text-gray-600 mb-3 pb-3 text-lg">Schedule Date</label>
      <input type="date" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Reservation Date" name="reservation-date">
    </div>

    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
      <label class="text-gray-600 mb-3 text-lg">Schedule Time</label>
      <input type="time" class="input w-full border mt-2"> 
    </div>

    <button type="submit" class="button flex items-center justify-center bg-theme-1 text-white col-span-12 lg:col-span-2"> 
      <i data-feather="plus-square" class="w-4 h-4 mr-2  ml-2"></i>
      <a href="add-clinic.php">
        <span> Add <span> 
      </a>
    </button>

  </form>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">

  <h2 class="text-gray-600 mb-4 text-lg"> Schedules </h2>

  <div class="overflow-x-auto p-5"> 
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Schedule Type </th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Schedule Date</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Schedule Time</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
        </tr> 
      </thead> 

      <tbody> 
        <tr> 
          <td class="border-b dark:border-dark-5">1</td> 
          <td class="border-b dark:border-dark-5">Surgery</td> 
          <td class="border-b dark:border-dark-5"> 4-5-2020 </td>
          <td class="border-b dark:border-dark-5"> 09 : 00 AM </td> 
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
          <td class="border-b dark:border-dark-5">Revealed</td> 
          <td class="border-b dark:border-dark-5"> 3-10-2020 </td>
          <td class="border-b dark:border-dark-5"> 12 : 00 PM </td> 
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

</div>

<?php include("layouts/footer.php") ?>