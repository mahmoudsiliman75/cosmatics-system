<?php include("layouts/header.php") ?>

<!-- START ROLES SECTION -->
<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">
  <h2 class="font-xl text-xl text-base text-gray-600 w-full"> Roles </h2>

  <form class="pb-5">
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg"> Role Name </label>
        <input type="text" class="input w-full border mt-2" placeholder="Role Name" name="role-name"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-4 -mx-5">
        <label class="text-gray-600 mt-3 text-lg">Permissions</label>
        <select data-placeholder="Select Role Type" data-search="true" class="tail-select w-full" multiple>
          <option value="1" selected>Permission 1</option>
          <option value="2"> Permission 2 </option>
          <option value="3" selected> Permission 3 </option>
          <option value="4"> Permission 4 </option>
          <option value="5" selected> Permission 4 </option>
        </select> 
      </div>

    </div>
    <button type="submit" class="button w-40 flex items-center justify-center bg-theme-1 text-white"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i>
      <a href="#">
        <span> Save <span> 
      </a>
    </button>
  </form>

  <div class="intro-y box pb-3" style="z-index:1">
    <div class="sm:flex-row items-center px-5">
    
      <form class="flex mr-auto grid grid-cols-12 gap-6" id="tabulator-html-filter-form">

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
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Role Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Permissions Name</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 

            <td class="border-b dark:border-dark-5"> Role </td> 

            <td class="border-b dark:border-dark-5"> Data </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit">
                <a href="javascript:;" data-toggle="modal" data-target="#roles-modal" class="w-5 h-5 flex items-center justify-center">
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

            <td class="border-b dark:border-dark-5"> Role </td> 
            
            <td class="border-b dark:border-dark-5"> Data </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit">
                <a href="javascript:;" data-toggle="modal" data-target="#roles-modal" class="w-5 h-5 flex items-center justify-center">
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

      <!--  START ROLES EDIT MODAL  -->
      <div class="modal" id="roles-modal">
        <div class="modal__content p-10 text-center w-2/4"> 
          <form class="pb-5">
            <div class="grid grid-cols-12 gap-6">

              <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:flex-row p-5 mt-2 -mx-5">
                <label class="text-gray-600 mb-3 text-lg"> Role Name </label>
                <input type="text" class="input w-full border mt-2" placeholder="Role Name" name="role-name"> 
              </div>

              <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:flex-row p-5 mt-4 -mx-5">
                <label class="text-gray-600 mt-3 text-lg">Permissions</label>
                <select data-placeholder="Select Role Type" data-search="true" class="tail-select w-full" multiple>
                  <option value="1" selected>Permission 1</option>
                  <option value="2"> Permission 2 </option>
                  <option value="3" selected> Permission 3 </option>
                  <option value="4"> Permission 4 </option>
                  <option value="5" selected> Permission 4 </option>
                </select> 
              </div>

            </div>
            <button type="submit" class="button w-40 flex items-center justify-center bg-theme-1 text-white"> 
              <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i>
              <a href="#">
                <span> Save <span> 
              </a>
            </button>
          </form>
        </div>
      </div>
      <!--  START ROLES EDIT MODAL  -->

    </div> 

  </div>

</div>
<!-- END ROLES SECTION -->

<!-- START PERMISSONS SECTION -->
<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">
  <h2 class="font-xl text-xl text-base text-gray-600 w-full"> Permissions </h2>

  <form class="pb-5">
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg"> Name </label>
        <input type="text" class="input w-full border mt-2" placeholder="Name" name=""> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg"> Display Name </label>
        <input type="text" class="input w-full border mt-2" placeholder="Display Name" name=""> 
      </div>

    </div>

    <button type="submit" class="button w-40 flex items-center justify-center bg-theme-1 text-white"> 
      <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i>
      <a href="#">
        <span> Save <span> 
      </a>
    </button>

  </form>

  <div class="intro-y box pb-3" style="z-index:1">
    <div class="sm:flex-row items-center px-5">
    
      <form class="flex mr-auto grid grid-cols-12 gap-6" id="tabulator-html-filter-form">

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
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap"> Name</th> 
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Display Name</th>
            <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Actions</th> 
          </tr> 
        </thead> 

        <tbody> 
          <tr> 
            <td class="border-b dark:border-dark-5">1</td> 

            <td class="border-b dark:border-dark-5"> Data </td> 

            <td class="border-b dark:border-dark-5"> Data </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit">
                <a href="javascript:;" data-toggle="modal" data-target="#permissions-modal" class="w-5 h-5 flex items-center justify-center">
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

            <td class="border-b dark:border-dark-5"> Data </td> 
            
            <td class="border-b dark:border-dark-5"> Data </td> 

            <td class="border-b dark:border-dark-5 whitespace-no-wrap">

              <button class="button px-2 mr-1 mb-2 bg-theme-9 text-white tooltip" title="Edit">
                <a href="javascript:;" data-toggle="modal" data-target="#permissions-modal" class="w-5 h-5 flex items-center justify-center">
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

      <!--  START PERMISSONS EDIT MODAL  -->
      <div class="modal" id="permissions-modal">
        <div class="modal__content p-10 text-center w-2/4"> 
          <form class="pb-5">
            <div class="grid grid-cols-12 gap-6">

              <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
                <label class="text-gray-600 mb-3 text-lg"> Name </label>
                <input type="text" class="input w-full border mt-2" placeholder="Name" name=""> 
              </div>

              <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
                <label class="text-gray-600 mb-3 text-lg"> Display Name </label>
                <input type="text" class="input w-full border mt-2" placeholder="Display Name" name=""> 
              </div>

            </div>

            <button type="submit" class="button w-40 flex items-center justify-center bg-theme-1 text-white"> 
              <i data-feather="save" class="w-4 h-4 mr-2  ml-2"></i>
              <a href="#">
                <span> Save <span> 
              </a>
            </button>

          </form>
        </div>
      </div>
      <!--  START PERMISSONS EDIT MODAL  -->

    </div> 

  </div>
</div>
<!-- END PERMISSONS SECTION -->

<?php include("layouts/footer.php") ?>