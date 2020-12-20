<?php include("layouts/header.php") ?>

<form>
  <div id="reservation" class="intro-y box px-5 pt-5 pb-5 mt-5">
    <div class="grid grid-cols-12 gap-6">

    <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
      <select data-search="true" class="tail-select w-full">
        <option value="1">Select Reservation Type</option>
        <option value="2">A New Medical</option>
        <option value="3">Re-revaled</option>
      </select> 
    </div>

    <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
      <input type="text" class="input w-full border mt-2" placeholder="Revealed Cost"> 
    </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Pre-Paied"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="The Remaining Cost"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Patient Name"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <input type="date" class=" input pl-12 border w-full" data-single-mode="true" placeholder="Reservation Date">
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="time" class="input w-full border mt-2"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Patient Age"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Phone Number"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Another Phone Number"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Address"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <select id="marital-status" data-search="true" class="tail-select w-full">
          <option value="">Marital Status</option>
          <option value="0">Married</option>
          <option value="1">Not Married</option>
        </select> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <input id="reservation-husbend-name" type="text" class="input w-full border mt-2" placeholder="Patient Husband"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-12 lg:flex-row p-5 -mx-5">
        <textarea class="editor w-full" name="editor"> 
        </textarea> 
      </div>

    </div>

    <button type="submit" class="button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
    </button>

  </div>
</form>

<?php include("layouts/footer.php") ?>