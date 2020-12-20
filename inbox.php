<?php include("layouts/header.php") ?>

	<div class="grid grid-cols-12 gap-6 mt-8">
		<div class="col-span-12 lg:col-span-12 xxl:col-span-12">
			<h2 class="intro-y text-lg font-medium mr-auto mt-2">
				Inbox
			</h2>

		</div>

		<div class="col-span-12 lg:col-span-12 xxl:col-span-12">

			<!-- BEGIN: Inbox Content -->
			<div class="intro-y inbox box mt-5">
				<div class="p-5 flex flex-col-reverse sm:flex-row text-gray-600 border-b border-gray-200 dark:border-dark-1">
					<div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-gray-200 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
						<input class="input border border-gray-500 ml-2" type="checkbox"> Mark All As Readed
					</div>

				</div>

				<div class="overflow-x-auto sm:overflow-x-visible">

					<div class="intro-y">
						<div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 dark:text-gray-500 bg-gray-100 dark:bg-dark-1 border-b border-gray-200 dark:border-dark-1">
							<div class="flex px-5 py-3">
								<div class="w-56 flex-none flex items-center mr-10">
									<input class="input flex-none border border-gray-500" type="checkbox" >
									<div class="w-6 h-6 flex-none image-fit relative ml-5"> 
									</div>
									<div class="inbox__item--sender truncate ml-3">John Travolta</div>
								</div>
								<div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Lorem Ipsum is simply dummy te</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500 </div>
								<div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">06:05 AM</div>
								<button class="button px-2 mr-2 bg-red-600 text-white"> 
									<span class="w-3 h-3 flex items-center justify-center"> <i class="w-6 h-6" data-feather="trash"></i> </span> 
								</button>
							</div>
						</div>
					</div>

					<div class="intro-y">
						<div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 dark:text-gray-500 bg-gray-100 dark:bg-dark-1 border-b border-gray-200 dark:border-dark-1">
							<div class="flex px-5 py-3">
								<div class="w-56 flex-none flex items-center mr-10">
									<input class="input flex-none border border-gray-500 ml-12" type="checkbox" >
									<div class="inbox__item--sender truncate ml-3">Johnny Depp</div>
								</div>
								<div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
								<div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
								<button class="button px-2 mr-2 bg-red-600 text-white"> 
									<span class="w-3 h-3 flex items-center justify-center"> <i class="w-6 h-6" data-feather="trash"></i> </span> 
								</button>
							</div>
						</div>
					</div>

					<div class="intro-y">
						<div class="inbox__item inline-block sm:block text-gray-700 dark:text-gray-500 bg-gray-100 dark:bg-dark-1 border-b border-gray-200 dark:border-dark-1">
							<div class="flex px-5 py-3">
								<div class="w-56 flex-none flex items-center mr-10">
									<input class="input flex-none border border-gray-500 ml-10" type="checkbox" checked>
									<div class="inbox__item--sender truncate ml-3">Russell Crowe</div>
								</div>
								<div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">It is a long established fact </span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
								<div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
								<button class="button px-2 mr-2 bg-red-600 text-white"> 
									<span class="w-3 h-3 flex items-center justify-center"> <i class="w-6 h-6" data-feather="trash"></i> </span> 
								</button>
							</div>
						</div>
					</div>

					<div class="intro-y">
						<div class="inbox__item inline-block sm:block text-gray-700 dark:text-gray-500 bg-gray-100 dark:bg-dark-1 border-b border-gray-200 dark:border-dark-1">
							<div class="flex px-5 py-3">
								<div class="w-56 flex-none flex items-center mr-10">
									<input class="input flex-none border border-gray-500 ml-10" type="checkbox" checked>
									<div class="inbox__item--sender truncate ml-3">Keanu Reeves</div>
								</div>
								<div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">Contrary to popular belief, Lo</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20 </div>
								<div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
								<button class="button px-2 mr-2 bg-red-600 text-white"> 
									<span class="w-3 h-3 flex items-center justify-center"> <i class="w-6 h-6" data-feather="trash"></i> </span> 
								</button>
							</div>
						</div>
					</div>

					<div class="intro-y">
						<div class="inbox__item inline-block sm:block text-gray-700 dark:text-gray-500 bg-gray-100 dark:bg-dark-1 border-b border-gray-200 dark:border-dark-1">
							<div class="flex px-5 py-3">
								<div class="w-56 flex-none flex items-center mr-10">
									<input class="input flex-none border border-gray-500 ml-10" type="checkbox" checked>
									<div class="inbox__item--sender truncate ml-3">Brad Pitt</div>
								</div>
								<div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
								<div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">03:20 PM</div>
								<button class="button px-2 mr-2 bg-red-600 text-white"> 
									<span class="w-3 h-3 flex items-center justify-center"> <i class="w-6 h-6" data-feather="trash"></i> </span> 
								</button>
							</div>
						</div>
					</div>

					<div class="intro-y">
						<div class="inbox__item inline-block sm:block text-gray-700 dark:text-gray-500 bg-gray-100 dark:bg-dark-1 border-b border-gray-200 dark:border-dark-1">
							<div class="flex px-5 py-3">
								<div class="w-56 flex-none flex items-center mr-10">
									<input class="input flex-none border border-gray-500 ml-10" type="checkbox" checked>
									<div class="inbox__item--sender truncate ml-3">Robert De Niro</div>
								</div>
								<div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
								<div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">03:20 PM</div>
								<button class="button px-2 mr-2 bg-red-600 text-white"> 
									<span class="w-3 h-3 flex items-center justify-center"> <i class="w-6 h-6" data-feather="trash"></i> </span> 
								</button>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- END: Inbox Content -->

		</div>
	</div>

<?php include("layouts/footer.php") ?>