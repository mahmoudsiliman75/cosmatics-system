<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form id="add-patient">
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pl-5 pr-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Clinic Name</label>
        <select data-search="true" class="tail-select w-full" disabled>
          <option value="">Select Clinic</option>
          <option value="1">Clinic 1</option>
          <option value="2">Clinic 2</option>
          <option value="3">Clinic 3</option>
        </select> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 pb-3 text-lg">Reservation Date</label>
        <input type="date" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Reservation Date" name="reservation-date" disabled>
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:col-span-4 lg:flex-row pr-3 pl-3 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Reservation Time</label>
        <input type="time" class="input w-full border mt-2" disabled> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pl-5 pr-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient Name</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient Name" name="patient-name" disabled> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pl-5 pr-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient Age</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient age" name="patient-age" disabled> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-5 pl-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient Address</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient Address" name="patient-address" disabled> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-6 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Marital Status</label>
        <select id="marital-status" data-search="true" class="tail-select w-full" disabled>
          <option value="">Marital Status</option>
          <option value="0">Married</option>
          <option value="1">Not Married</option>
        </select> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Patient's Husbend Name</label>
        <input type="text" class="input w-full border mt-2" placeholder="Patient's Husbend" name="patient-husbend" disabled> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Phone Number</label>
        <input type="text" class="input w-full border mt-2" placeholder="Phone Number" name="patient-phone" disabled> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Another Phone Number</label>
        <input type="text" class="input w-full border mt-2" placeholder="Another Phone Number" name="patient-Another-phone" disabled> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Pregnancy Status</label>
        <select id="pregnancy-status" data-search="true" class="tail-select w-full">
          <option value="">Pregnancy</option>
          <option value="0">There Was A Pregnancy Before</option>
          <option value="1">There Wasn't A Pregnancy Before</option>
        </select> 
      </div>

      <div id="gravida-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Gravida</label>
        <input type="number" class="input w-full border mt-2" placeholder="Gravida" name="gravida"> 
      </div>

      <div id="para-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Para</label>
        <input type="number" class="input w-full border mt-2" placeholder="Para" name="para"> 
      </div>

      <div id="abortion-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Abortion</label>
        <input type="number" class="input w-full border mt-2" placeholder="Abortion" name="abortion"> 
      </div>

      <div id="vaginal-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Vaginal</label>
        <input type="number" class="input w-full border mt-2" placeholder="Vaginal" name="vaginal"> 
      </div>

      <div id="cs-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">C.S</label>
        <input type="number" class="input w-full border mt-2" placeholder="C.S" name="CS"> 
      </div>

      <div id="last-birth-date-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-6 -mx-5">
        <label class="text-gray-600 mb-3 pb-3 text-lg">Last Birth Date</label>
        <input type="date" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Reservation Date" name="reservation-date">
      </div>

      <div id="male-children-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Male Children</label>
        <input type="number" class="input w-full border mt-2" placeholder="Male Children" name="male-children"> 
      </div>

      <div id="female-children-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Female Children</label>
        <input type="number" class="input w-full border mt-2" placeholder="Female Children" name="female-children"> 
      </div>

      <div id="last-birth-details-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">Last Birth Details</label>
        <input type="text" class="input w-full border mt-2" placeholder="Details" name="last-birth-details"> 
      </div>

      <div class="flex flex-col col-span-12">
        <div class="grid grid-cols-12 gap-6">

          <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 mt-2 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Previous Surgeries</label>
            <select id="Surgery-status" data-search="true" class="tail-select w-full">
              <option value="">Previous Surgery</option>
              <option value="0">No</option>
              <option value="1">Yes</option>
            </select> 
          </div>

          <div id="surgery-details-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Surgery Details</label>
            <input type="text" class="input w-full border mt-2" placeholder="Details" name="surgery-details"> 
          </div>

          <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 mt-2 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Medicins</label>
            <select id="medicins-status" data-search="true" class="tail-select w-full">
              <option value="">Medicins</option>
              <option value="0">No</option>
              <option value="1">Yes</option>
            </select> 
          </div>

          <div id="medicins-details-container" class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Medicins Details</label>
            <input type="text" class="input w-full border mt-2" placeholder="Details" name="medicins-details"> 
          </div>

          <div class="col-span-12 lg:flex-row pl-5 pr-5 mt-2 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Add Services</label>
            <select data-placeholder="Select your favorite actors" data-search="true" class="tail-select w-full" multiple>
              <option value="1" selected> Service 1 </option>
              <option value="2">Service 2</option>
              <option value="3" selected>Service 3</option>
              <option value="4">Service 4</option>
              <option value="5">Service 5</option>
              <option value="6">Service 6</option>
              <option value="7" selected>Service 7</option>
            </select>
          </div>

        </div>

      </div>


      <div class="col-span-12 sm:col-span-12 lg:col-span-12 lg:flex-row p-5 -mx-5">
        <label class="text-gray-600 mb-3 text-lg">More Details</label>
        <textarea class="editor w-full" name="editor"> 
        </textarea> 
      </div>

    <div>
    <button type="submit" class="button translate-y-3 mt-2 mr-2 flex items-center justify-center bg-theme-1 text-white col-span-4"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
    </button>
  </form>
</div>

<?php include("layouts/footer.php") ?>