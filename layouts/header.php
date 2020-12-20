<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="dist/images/icon.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
		<title>UCare Admin DashBoard</title>
		<!-- BEGIN: Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap">
		<!-- BEGIN: Google Fonts -->
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css" />
    <link rel="stylesheet" href="dist/css/custom-style.css" />
    <link rel="stylesheet" href="dist/css/app-ar.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="app">

	<!-- BEGIN: Mobile Menu -->
	<div class="mobile-menu md:hidden">
		<div class="mobile-menu-bar flex justify-between">
			<a href="" class="flex">
				<img alt="Midone Tailwind HTML Admin Template" class="w-14" src="dist/images/icon.png">
			</a>
			<a href="javascript:;" id="mobile-menu-toggler"> 
				<i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> 
			</a>
		</div>

		<ul class="border-t border-theme-24 py-5 hidden">

			<li>
				<a href="index.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="home"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Home </span> </div>
				</a>
			</li>

			<li>
				<a href="inbox.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="inbox"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Inbox </span> </div>
				</a>
			</li>

			<li>
				<a href="profile.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="user"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Profile </span> </div>
				</a>
			</li>

			<li>
				<a href="edit-profile.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="settings"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Edit Profile </span> </div>
				</a>
			</li>

			<li>
				<a href="notifications.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="bell"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Notifications </span> </div>
				</a>
			</li>

			<li>
				<a href="javascript:;" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Employees </span> <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
				</a>
				<ul class="">

					<li>
						<a href="add-user.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="user-plus"></i> </div>
							<div class="menu__title"> Add Employee </div>
						</a>
					</li>

					<li>
						<a href="all-employees.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
							<div class="menu__title"> All Employees </div>
						</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="all-clinics.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="home"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Clinics </span> </div>
				</a>
			</li>

			<li>
				<a href="governorate-manage.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="map"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Governorates Management </span> </div>
				</a>
			</li>

			<li>
				<a href="reservation.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="plus-square"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Reservation </span> </div>
				</a>
			</li>

			<li>
				<a href="services.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="star"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Services </span> </div>
				</a>
			</li>

			<li>
				<a href="javascript:;" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Patients </span> <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
				</a>
				<ul class="">

					<li>
						<a href="add-new-patient.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="user-plus"></i> </div>
							<div class="menu__title"> Add New Patient </div>
						</a>
					</li>

					<li>
						<a href="all-patients.php" class="menu">
							<div class="menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
							<div class="menu__title"> All Patients </div>
						</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="schedules.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="file-text"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Schedules </span> </div>
				</a>
			</li>

			<li>
				<a href="financial.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="dollar-sign"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Financilas </span> </div>
				</a>
			</li>

			<div class="side-nav__devider my-6"></div>

			<li>
				<a href="policies-and-terms.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="shield"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Policies And Terms </span> </div>
				</a>
			</li>

			<li>
				<a href="roles.php" class="menu">
					<div class="menu__icon"> <i class="ml-3" data-feather="shield"></i> </div>
					<div class="menu__title"> <span class="xl:block text-white text-lg ml-3"> Roles </span> </div>
				</a>
			</li>

		</ul>
	</div>
	<!-- END: Mobile Menu -->

	<div class="flex">
	<!-- BEGIN: Side Menu -->
	<nav class="side-nav">
		<a href="index.php" class="intro-x flex items-center pl-5 pt-4">
			<img alt="Midone Tailwind HTML Admin Template" class="w-16" src="dist/images/icon.png">
			<span class="hidden xl:block text-white text-lg ml-3"> U<span class="font-medium">Care</span> </span>
		</a>

		<div class="side-nav__devider my-6"></div>

		<ul>
			<li>
				<a href="index.php" class="side-menu side-menu--active">
						<div class="side-menu__icon"> <i class="ml-3" data-feather="home"></i> </div>
						<div class="side-menu__title"> Home </div>
				</a>
			</li>

			<li>
				<a href="inbox.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="inbox"></i> </div>
					<div class="side-menu__title"> Inbox </div>
				</a>
			</li>

			<li>
				<a href="profile.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="user"></i> </div>
					<div class="side-menu__title"> Profile </div>
				</a>
			</li>

			<li>
				<a href="edit-profile.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="settings"></i> </div>
					<div class="side-menu__title"> Edit Profile </div>
				</a>
			</li>

			<li>
				<a href="notifications.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="bell"></i> </div>
					<div class="side-menu__title">  Notifications </div>
				</a>
			</li>

			<li>
				<a href="javascript:;" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
					<div class="side-menu__title"> Employees <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
				</a>
				<ul class="">

					<li>
						<a href="add-user.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="user-plus"></i> </div>
							<div class="side-menu__title"> Add Employee </div>
						</a>
					</li>

					<li>
						<a href="all-employees.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
							<div class="side-menu__title"> All Employees </div>
						</a>
					</li>

				</ul>
			</li>


			<li>
				<a href="all-clinics.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="home"></i> </div>
					<div class="side-menu__title"> Clinics </div>
				</a>
			</li>

			<li>
				<a href="governorate-manage.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="map"></i> </div>
					<div class="side-menu__title"> Governorates Management </div>
				</a>
			</li>

			<li>
				<a href="reservation.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="plus-square"></i> </div>
					<div class="side-menu__title"> Reservation </div>
				</a>
			</li>

			<li>
				<a href="services.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="star"></i> </div>
					<div class="side-menu__title"> Services </div>
				</a>
			</li>

			<li>
				<a href="javascript:;" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
					<div class="side-menu__title"> Patients <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
				</a>
				<ul class="">

					<li>
						<a href="add-new-patient.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="user-plus"></i> </div>
							<div class="side-menu__title"> Add New Patient </div>
						</a>
					</li>

					<li>
						<a href="all-patients.php" class="side-menu">
							<div class="side-menu__icon"> <i class="ml-3" data-feather="users"></i> </div>
							<div class="side-menu__title"> All Patients </div>
						</a>
					</li>

				</ul>
			</li>

			<li>
				<a href="schedules.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="file-text"></i> </div>
					<div class="side-menu__title"> Schedules </div>
				</a>
			</li>

			<li>
				<a href="financial.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="dollar-sign"></i> </div>
					<div class="side-menu__title"> Financilas </div>
				</a>
			</li>

			<div class="side-nav__devider my-6"></div>

			<li>
				<a href="policies-and-terms.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="shield"></i> </div>
					<div class="side-menu__title"> Policies And Terms </div>
				</a>
			</li>

			<li>
				<a href="roles.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="shield"></i> </div>
					<div class="side-menu__title"> Roles </div>
				</a>
			</li>

		</ul>
	</nav>
	<!-- END: Side Menu -->

	<!-- BEGIN: Content -->
	<div class="content">
	<!-- BEGIN: Top Bar -->
	<div class="top-bar">

		<!-- BEGIN: Breadcrumb -->
		<div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
		<!-- END: Breadcrumb -->

		<!-- BEGIN: Search -->
		<div class="intro-x relative mr-3 sm:mr-6">
			<div class="search sm:block">
				<input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
				<i data-feather="search" class="search__icon dark:text-gray-300"></i> 
			</div>
		</div>
		<!-- END: Search -->

		<!-- BEGIN: Notifications -->
		<div class="intro-x dropdown relative mr-auto  ml-2 sm:mr-6">
				<div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
				<div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
						<div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
								<div class="notification-content__title">Notifications</div>
								<div class="cursor-pointer relative flex items-center ">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
												</div>
												<div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
										</div>
								</div>
								<div class="cursor-pointer relative flex items-center mt-5">
										<div class="w-12 h-12 flex-none image-fit mr-1">
												<img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
												<div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
										</div>
										<div class="ml-2 overflow-hidden">
												<div class="flex items-center">
														<a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
														<div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
												</div>
												<div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- END: Notifications -->

		<!-- BEGIN: Account Menu -->
		<div class="intro-x dropdown w-8 h-8 relative">

			<div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
				<img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
			</div>

			<div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">

				<div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">

					<div class="p-4 border-b border-theme-40 dark:border-dark-3">
						<div class="font-medium">Angelina Jolie</div>
						<div class="text-xs text-theme-41 dark:text-gray-600">Software Engineer</div>
					</div>

					<div class="p-2">
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
							<i data-feather="user" class="w-4 h-4 mr-2 ml-2"></i> Profile 
						</a>

						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
							<i data-feather="lock" class="w-4 h-4 mr-2 ml-2"></i> Reset Password 
						</a>

						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
							<i data-feather="help-circle" class="w-4 h-4 mr-2 ml-2"></i> Help 
						</a>
					</div>

					<div class="p-2 border-t border-theme-40 dark:border-dark-3">
						<a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
							<i data-feather="power" class="w-4 h-4 mr-2 ml-2"></i> Logout 
						</a>
					</div>
				</div>

			</div>

		</div>
		
		</div>
		<!-- END: Top Bar -->