<?php include("layouts/header.php") ?>

	<!-- BEGIN: Profile Info -->

	<form id="profile" class="grid grid-cols-12 gap-6 mt-5">

      <div class="intro-y box px-5 pt-5 mt-5 col-span-12">

        <div class="px-5 pt-5 mt-5 col-span-12">
          <div class="flex flex-col lg:flex-row pb-5 -mx-5">

            <div class="flex flex-1 flex-wrap justify-center px-5 items-center justify-center">

              <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="User Img" class="rounded-full image-preview" src="dist/images/profile-7.jpg">
              </div>

              <div class="w-full ml-5">
                <div class="w-full flex justify-center truncate sm:whitespace-normal font-medium text-lg mt-3">System Logo</div>
              </div>

              <input class="mt-8 mr-3 ml-3 image" type="file" > 
            </div>

          </div>
        </div>

        <div class="col-12 grid grid-cols-12 gap-6">

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Where Did You Hear About Us</label>
            <input type="text" class="input w-full border mt-2" placeholder="Where Did You Hear About Us"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Sergury Types</label>
            <input type="text" class="input w-full border mt-2" placeholder="Sergury Types"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Chronic Disease</label>
            <input type="text" class="input w-full border mt-2" placeholder="Chronic Disease"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Patient Complaints</label>
            <input type="text" class="input w-full border mt-2" placeholder="Patient Complaints"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Examinations</label>
            <input type="text" class="input w-full border mt-2" placeholder="Examinations"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Diagnosis</label>
            <input type="text" class="input w-full border mt-2" placeholder="Diagnosis"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Plan Items</label>
            <input type="text" class="input w-full border mt-2" placeholder="Plan Items"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Requests</label>
            <input type="text" class="input w-full border mt-2" placeholder="Requests"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Requests</label>
            <input type="text" class="input w-full border mt-2" placeholder="Requests"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Procedures</label>
            <input type="text" class="input w-full border mt-2" placeholder="Procedures"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Assistants</label>
            <input type="text" class="input w-full border mt-2" placeholder="Assistants"> 
          </div>

          <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:flex-row p-5 -mx-5">
            <label class="text-gray-600 mb-3 text-lg">Types Of Anesthesia</label>
            <input type="text" class="input w-full border mt-2" placeholder="Types Of Anesthesia"> 
          </div>

        </div>

      </div>

      <button type="submit" class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> 
        <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
      </button>

	</form>

<?php include("layouts/footer.php") ?>