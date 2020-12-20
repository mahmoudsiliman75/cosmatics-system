<?php include("layouts/header.php") ?>

	<!-- BEGIN: Profile Info -->

	<form id="profile" class="grid grid-cols-12 gap-6 mt-5">

		<div class="intro-y box px-5 pt-5 mt-5 col-span-12 sm:col-span-12 lg:col-span-4">
			<div class="flex flex-col lg:flex-row pb-5 -mx-5">

				<div class="flex flex-1 flex-wrap justify-center px-5 items-center justify-center">

					<div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
						<img alt="User Img" class="rounded-full image-preview" src="dist/images/profile-7.jpg">
					</div>

					<div class="w-full ml-5">
						<div class="w-full flex justify-center truncate sm:whitespace-normal font-medium text-lg mt-3">User 1</div>
						<div class="text-gray-600 flex justify-center">Head Doctor</div>
					</div>

					<input class="mt-8 mr-3 ml-3 image" type="file" > 
				</div>

			</div>
		</div>


		<div class="intro-y box px-5 pt-5 mt-5 col-span-12 sm:col-span-12 lg:col-span-8">


			<div class="grid grid-cols-12 gap-6">
				<div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-6 lg:flex-row p-5 -mx-5">
					<input type="text" class="input w-full border mt-2" placeholder="Name"> 
				</div>

				<div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-6 lg:flex-row p-5 -mx-5">
					<input type="text" class="input w-full border mt-2" placeholder="Phone Number"> 
				</div>

				<div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-6 lg:flex-row p-5 -mx-5">
					<input type="text" class="input w-full border mt-2" placeholder="Address"> 
				</div>

				<div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-6 lg:flex-row p-5 -mx-5">
					<input type="email" class="input w-full border mt-2" placeholder="Email"> 
				</div>

			</div>

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

<?php include("layouts/footer.php") ?>