<?php include("layouts/header.php") ?>

  <div class="intro-y flex items-center pt-5 h-10">
    <h2 class="text-lg font-medium text-gray-600 truncate mr-5">Doctor Info</h2>
  </div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form id="add-patient">
    <div class="grid grid-cols-12 gap-6">

      <div class="grid grid-cols-12 gap-6 col-span-12 lg:flex-row pl-5 pr-5 mt-2 -mx-5">

        <div class="col-span-10">
          <label class="text-gray-600 mb-3 text-lg">Patient Complaints</label>
          <select data-placeholder="Select Patient Complaint" data-search="true" class="tail-select w-full" multiple>
            <option value="0"> Patient Complaints 1 </option>
            <option value="1">Patient Complaints 2</option>
            <option value="2">Patient Complaints 3</option>
            <option value="3">Patient Complaints 4</option>
            <option value="4">Patient Complaints 5</option>
            <option value="5">Patient Complaints 6</option>
            <option value="6">Patient Complaints 7</option>
          </select>
        </div>

        <div class="col-span-2">
          <button class="add-complaints-sec w-full button translate-y-3 mr-2 flex items-center justify-center bg-theme-1 text-white" style="margin-top: 25px"> Add </button>
        </div>

      </div> 

      <div class="complaints-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div> 

      <div class="grid grid-cols-12 gap-6 col-span-12 lg:flex-row pl-5 pr-5 mt-2 -mx-5">

        <div class="col-span-12 md:col-span-8">
          <label class="text-gray-600 mb-3 text-lg">Examination</label>
          <select data-placeholder="Select Examination" data-search="true" class="tail-select w-full" multiple>
            <option value="0">Examination 1 </option>
            <option value="1">Examination 2</option>
            <option value="2">Examination 3</option>
            <option value="3">Examination 4</option>
            <option value="4">Examination 5</option>
            <option value="5">Examination 6</option>
            <option value="6">Examination 7</option>
          </select>
        </div>

        <div class="col-span-8 md:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
          <label class="text-gray-600 text-lg">Examination Photos</label>
          <input name="file" type="file" class="input w-full border" style="padding: 4px;" multiple /> 
        </div>

        <div class="col-span-4 md:col-span-1">
          <button class="add-examination-sec w-full button translate-y-3 mr-2 flex items-center justify-center bg-theme-1 text-white" style="margin-top: 25px"> Add </button>
        </div>

      </div> 

      <div class="examination-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div>

      <div class="col-span-12 md:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient Weight (Kg)</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient Weight (Kg)"> 
      </div>

      <div class="col-span-12 md:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient Height (Cm)</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient Height (Cm)"> 
      </div>

      <div class="col-span-12 md:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient BMI</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient BMI"> 
      </div>

      <div class="grid grid-cols-12 gap-6 col-span-12 lg:flex-row pl-5 pr-5 mt-2 -mx-5">

        <div class="col-span-10">
          <label class="text-gray-600 mb-3 text-lg">Diagnosis</label>
          <select data-placeholder="Select the Diagnosis" data-search="true" class="tail-select w-full" multiple>
            <option value="0">Diagnosis 1 </option>
            <option value="1">Diagnosis 2</option>
            <option value="2">Diagnosis 3</option>
            <option value="3">Diagnosis 4</option>
            <option value="4">Diagnosis 5</option>
            <option value="5">Diagnosis 6</option>
            <option value="6">Diagnosis 7</option>
          </select>
        </div>

        <div class="col-span-2">
          <button class="add-diagnosis-sec w-full button translate-y-3 mr-2 flex items-center justify-center bg-theme-1 text-white" style="margin-top: 25px"> Add </button>
        </div>

      </div> 

      <div class="diagnosis-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div> 

      <div class="grid grid-cols-12 gap-6 col-span-12 lg:flex-row pl-5 pr-5 mt-2 -mx-5">

        <div class="col-span-10">
          <label class="text-gray-600 mb-3 text-lg">Plan</label>
          <select data-placeholder="Select Plan" data-search="true" class="tail-select w-full" multiple>
            <option value="0">Plan 1 </option>
            <option value="1">Plan 2</option>
            <option value="2">Plan 3</option>
            <option value="3">Plan 4</option>
            <option value="4">Plan 5</option>
            <option value="5">Plan 6</option>
            <option value="6">Plan 7</option>
          </select>
        </div>

        <div class="col-span-2">
          <button class="add-plan-sec w-full button translate-y-3 mr-2 flex items-center justify-center bg-theme-1 text-white" style="margin-top: 25px"> Add </button>
        </div>

      </div> 

      <div class="plan-comments-container col-span-12 lg:flex-row px-5 -mx-5 ">
      </div> 

    </div>

    <button type="submit" class="button translate-y-3 mt-5 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
    </button>
  </form>



</div>

<?php include("layouts/footer.php") ?>