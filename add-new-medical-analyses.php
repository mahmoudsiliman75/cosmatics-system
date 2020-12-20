<?php include('layouts/header.php') ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

  <h2 class="text-gray-600 mb-3 pb-3 text-xl"> Patient Name </h2>

    <form id="new-analyses">
      <div class="grid grid-cols-12 gap-6">

        <div class="col-span-12 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">Analyse Date</label>
          <input type="date" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Reservation Date" name="Analyse-date">
        </div>

        <div class="col-span-12 lg:col-span-4 lg:flex-row pr-5 pl-5 -mx-5">
          <label class="text-gray-600 mb-3 text-lg">Analyse Name</label>
          <input type="text" class="input w-full border mt-2" placeholder="The Cause Of Visite" name="analyse-name"> 
        </div>

        <div class="col-span-12 lg:col-span-4 lg:flex-row pr-5 pl-5 -mx-5">
          <label class="text-gray-600 mb-3 text-lg">Analyse Result</label>
          <input type="text" class="input w-full border mt-2" placeholder="The Cause Of Visite" name="analyse-result"> 
        </div>

        <div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-12 lg:flex-row p-5 -mx-5">
					<textarea class="editor w-full" name="editor"> 
					</textarea> 
        </div>
        
        <button type="submit" class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> 
					<i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i> Save 
				</button>

      </div>
    </form>

</div>


<?php include('layouts/footer.php') ?>
