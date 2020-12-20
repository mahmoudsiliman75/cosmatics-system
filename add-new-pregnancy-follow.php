<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">

  <a href="add-new-medical-analyses.php" class="dropdown-toggle button inline-block bg-theme-1 text-white float-left">Add Madical Analyses</a>
  <h2 class="text-gray-600 mb-3 pb-3 text-xl"> Patient Name </h2>

  <div class="clearFix"></div>

    <form id="new-pregnancy-follow">
      <div class="grid grid-cols-12 gap-6">

        <div class="col-span-12 lg:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">Revealed Date</label>
          <input type="date" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Reservation Date" name="revealed-date">
        </div>

        <div class="col-span-12 lg:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">Revealed Type</label>
          <select id="pregnancy-follow-data" data-search="true" class="tail-select w-full">
            <option value="">Select Pregnancy Data</option>
            <option value="0">New pregnancy</option>
            <option value="1">Follow-Up Pregnancy</option>
          </select> 
        </div>

        <div id="lmp-date-container" class="col-span-12 lg:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">L.MP</label>
          <input type="date" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="L.MP" name="l.mp-date">
        </div>

        <div id="edd-date-container" class="col-span-12 lg:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">EDD</label>
          <input type="date" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="EDD" name="edd-date">
        </div>

        <div class="col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">G.A</label>
          <select data-search="true" class="tail-select w-full">
            <option value="1">w 1</option>
            <option value="2">w 2</option>
            <option value="3">w 3</option>
            <option value="4">w 4</option>
            <option value="5">w 5</option>
            <option value="6">w 6</option>
            <option value="7">w 7</option>
            <option value="8">w 8</option>
            <option value="9">w 9</option>
            <option value="10">w 10</option>
            <option value="11">w 11</option>
            <option value="12">w 12</option>
            <option value="13">w 13</option>
            <option value="14">w 14</option>
            <option value="15">w 15</option>
            <option value="16">w 16</option>
            <option value="17">w 17</option>
            <option value="18">W 18</option>
            <option value="19">W 19</option>
            <option value="20">W 20</option>
            <option value="21">W 21</option>
            <option value="22">W 22</option>
            <option value="23">W 23</option>
            <option value="24">W 24</option>
            <option value="25">W 25</option>
            <option value="26">W 26</option>
            <option value="27">W 27</option>
            <option value="28">W 28</option>
            <option value="29">W 29</option>
            <option value="30">W 30</option>
            <option value="31">W 31</option>
            <option value="32">W 32</option>
            <option value="33">W 33</option>
            <option value="34">W 34</option>
            <option value="35">W 35</option>
            <option value="36">W 36</option>
            <option value="37">W 37</option>
            <option value="38">W 38</option>
            <option value="39">W 39</option>
            <option value="40">W 40</option>
          </select> 
        </div>

        <div class="col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 mt-8 -mx-5">
          <select data-search="true" class="tail-select w-full">
            <option value="1">d 1</option>
            <option value="2">d 2</option>
            <option value="3">d 3</option>
            <option value="4">d 4</option>
            <option value="5">d 5</option>
            <option value="6">d 6</option>
          </select> 
        </div>

        <div class="col-span-12 lg:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">Details</label>
          <input type="text" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Details" name="ga-details">
        </div>

        <div class="col-span-12 lg:col-span-2 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">B.P</label>
          <input type="text" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="B.P" name="bp">
        </div>

        <div class="col-span-12 lg:col-span-2 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">.WT</label>
          <input type="text" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder=".WT" name="wt">
        </div>

        <div class="col-span-12 md:col-span-2 lg:col-span-2 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">EDEMA</label>
          <select id="edema-status" data-search="true" class="tail-select w-full">
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select> 
        </div>

        <div id="edema-details-container" class="col-span-12 lg:col-span-6 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
          <label class="text-gray-600 mb-3 pb-3 text-lg">Details</label>
          <input type="text" class="input pl-12 border w-full pt-2" data-single-mode="true" placeholder="Details" name="edema-details">
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

<?php include("layouts/footer.php") ?>