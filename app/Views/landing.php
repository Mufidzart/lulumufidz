<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<title>Lulu &amp; Mufidz's Wedding</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/images/intial_logo.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Header Section-->
		<div class="mb-0" id="home">
			<!--begin::Wrapper-->
			<div class="bgi-no-repeat pb-2 h-800px h-lg-900px" style="background-color: #ffeded;">
				<!--begin::Landing hero-->
				<div class="d-flex flex-column flex-center min-vh-100 text-center py-20" style="padding-left: 20px;padding-right: 20px;">
					<!--begin::Title-->
					<h1 class="fw-bolder fs-4x fs-lg-3x" style="color: #80364a;">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ</h1>
					<span class="fs-1x fs-lg-4" style="color: #80364a;">Assalamu’alaikum Warahmatullahi Wabarakatuh</span><br>
					<span class="fs-1x fs-lg-4" style="color: #80364a;">Maha suci Allah yang telah menciptakan mahluk-Nya berpasang-pasangan.<br>
						Ya Allah, perkenankanlah kami menjalankan salah satu perintahmu untuk melangsungkan pernikahan kami:</span><br>
					<img src="assets/images/avatars-min.webp" class="mh-150px mh-lg-250px mb-9" alt="" />
					<h1 class="fw-bolder fs-5x fs-lg-6x my-5" style="color: #F56282;font-family: 'Great Vibes';">
						<span>Lulu & Mufidz</span><br>
					</h1>
					<img src="assets/images/heart-balloons.gif" class="mh-80px mh-lg-100px mb-9" alt="" />
					<?php
					if (isset($_GET['to'])) {
						$nama_undangan =  str_replace("+", " ", $_GET['to']);
					} else {
						$nama_undangan = "";
					}
					?>
					<?php if (isset($_GET['to'])) : ?>
						<div class="btn btn-flex btn-outline btn-outline-danger btn-outline-danger btn-active-danger px-6">
							<span class=""><i class="bi bi-file-earmark-richtext-fill text-danger fs-1"></i></span>
							<span class="d-flex flex-column align-items-start ms-2">
								<span class="fs-7">Undangan untuk: <span class="fs-3 fw-bolder"><?= $nama_undangan ?></span></span>
							</span>
						</div>
					<?php endif; ?>
				</div>
				<!--end::Landing hero-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Curve bottom-->
			<div class="landing-curve mb-10 mb-lg-20" style="color: #ffeded;">
				<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
				</svg>
			</div>
			<!--end::Curve bottom-->
		</div>
		<!--end::Header Section-->
		<!--begin::Isi Section-->
		<div class="mb-1 mb-lg-5 z-index-2">
			<!--begin::Mempelai-->
			<div class="container">
				<!--begin::Heading-->
				<div class="text-center mb-17">
					<!--begin::Title-->
					<h3 class=" fs-5x fs-lg-6x text-danger mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Mempelai</h3>
					<!--end::Title-->
				</div>
				<!--end::Heading-->
				<!--begin::Row-->
				<div class="row w-100 gy-10 mb-md-20">
					<!--begin::Col-->
					<div class="col-md-6 px-5">
						<!--begin::Story-->
						<div class="text-center mb-10 mb-md-0">
							<!--begin::Illustration-->
							<img src="assets/images/woman-avatar.png" class="mh-125px mb-9" alt="" />
							<!--end::Illustration-->
							<!--begin::Heading-->
							<div class="d-flex flex-center mb-5">
								<!--begin::Title-->
								<div class="fs-5x fs-lg-4x fw-bolder" style="font-family: 'Great Vibes'; color: #80364A;">Lulu Ma'rifah</div>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Description-->
							<div class="fw-bold fs-6 fs-lg-4" style="color:#BF7388">Desa Karangkemiri, Kecamatan Karanglewas
								<br />Putri Bapak Catur Priyatno dan Ibu Ely Triyati
							</div>
							<div class="row mt-5">
								<div class="col-md-12">
									<a href="https://www.instagram.com/mba.lulu/" target="_blank" class="symbol symbol-50px me-2">
										<span class="symbol-label">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-50 align-self-center" alt="">
										</span>
									</a>
									<a href="https://www.facebook.com/lulu.marifah.77" target="_blank" class="symbol symbol-50px me-2">
										<span class="symbol-label">
											<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-50 align-self-center" alt="">
										</span>
									</a>
								</div>
							</div>
							<!--end::Description-->
						</div>
						<!--end::Story-->
					</div>
					<div class="col-md-6 px-5">
						<!--begin::Story-->
						<div class="text-center mb-10 mb-md-0">
							<!--begin::Illustration-->
							<img src="assets/images/man-avatar.png" class="mh-125px mb-9" alt="" />
							<!--end::Illustration-->
							<!--begin::Heading-->
							<div class="d-flex flex-center mb-5">
								<!--begin::Title-->
								<div class="fs-5x fs-lg-4x fw-bolder" style="font-family: 'Great Vibes'; color: #80364A;">Muhamad Abdul Mufidz</div>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Description-->
							<div class="fw-bold fs-6 fs-lg-4" style=" color:#BF7388">Desa Kotayasa, Kecamatan Sumbang
								<br />Putri Bapak Nartono dan Ibu Narsitem
							</div>
							<div class="row mt-5">
								<div class="col-md-12">
									<a href="https://www.instagram.com/kakmufidz/" target="_blank" class="symbol symbol-50px me-2">
										<span class="symbol-label">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-50 align-self-center" alt="">
										</span>
									</a>
									<a href="https://www.facebook.com/kakmufidz/" target="_blank" class="symbol symbol-50px me-2">
										<span class="symbol-label">
											<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-50 align-self-center" alt="">
										</span>
									</a>
								</div>
							</div>
							<!--end::Description-->
						</div>
						<!--end::Story-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Mempelai-->
			<!--begin::Acara-->
			<div class="container">
				<!--begin::Row-->
				<div class="row w-100 gy-10 mb-md-20">
					<!--begin::Col-->
					<div class="rounded border p-10 pb-0 d-flex flex-column flex-center w-80">
						<div class="text-center mb-17">
							<!--begin::Title-->
							<h3 class=" fs-4x fs-lg-3x text-danger mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Lulu & Mufidz</h3>
							<!--end::Title-->
							<!--begin::Testimonial-->
							<div class="fw-bold fs-6 fs-lg-4 text-muted text-center mb-3 px-10 px-lg-20">
								"Dan di antara tanda-tanda kekuasaan-Nya diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu dapat ketenangan hati dan dijadikannya kasih sayang di antara kamu. Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berpikir"
							</div>
							<!--end::Testimonial-->
							<!--begin::Author-->
							<div class="fs-2 fw-bold text-muted text-center">
								<span class="fs-4 fw-bolder text-gray-600">~ QS. Ar-Rum Ayat 21 ~</span>
							</div>
							<!--end::Author-->
						</div>
						<div class="alert bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10 w-100">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
							<img src="assets/images/flower.png" class="mh-50px mh-lg-80px mb-9" alt="" />
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Content-->
							<div class="text-center w-100">
								<h1 class="fw-bolder mb-5" style="color: #80364a;">Selasa, 07 Februari 2023</h1>
								<div class="fw-bold fs-6 fs-lg-4 mb-5" style="color:#BF7388">Desa Karangkemiri RT01 RW01, Kec. Karanglewas
									<br />Kabupaten Banyumas - Jawa Tengah
								</div>
								<div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
								<div class="row">
									<div class="col-md-5">
										<h3 class=" fs-4x fs-lg-3x text-danger my-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Akad Nikah</h3>
										<div class="btn btn-flex btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger px-6">
											<span class="svg-icon svg-icon-2x">
												<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen013.svg-->
												<span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="black" />
														<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="black" />
													</svg></span>
												<!--end::Svg Icon-->
											</span>
											<span class="d-flex flex-column align-items-start ms-2">
												<span class="fs-3 fw-bolder">09:00 WIB</span>
											</span>
										</div>
									</div>
									<div class="col-md-2">
										<img src="assets/images/intial_logo.png" class="mh-50px mh-lg-80px mt-10" alt="Lulu & Mufidz" />
									</div>
									<div class="col-md-5">
										<h3 class=" fs-4x fs-lg-3x text-danger my-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Walimah</h3>
										<div class="btn btn-flex btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger px-6">
											<span class="svg-icon svg-icon-2x">
												<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen013.svg-->
												<span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="black" />
														<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="black" />
													</svg></span>
												<!--end::Svg Icon-->
											</span>
											<span class="d-flex flex-column align-items-start ms-2">
												<span class="fs-3 fw-bolder">10:00 WIB</span>
											</span>
										</div>
									</div>
								</div>
								<img src="assets/images/lokasi.png" class="mh-120px mh-lg-150px mt-10" alt="Lokasi" />

								<!--begin::Buttons-->
								<div class="d-flex flex-center flex-wrap">
									<a href="https://goo.gl/maps/Ah7wdFGG8NXQdAAr6" target="_blank" class="btn btn-outline btn-outline-danger btn-active-light-danger">
										<!--begin::Svg Icon | path: assets/media/icons/duotune/maps/map002.svg-->
										<span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M8.7 4.19995L4 6.30005V18.8999L8.7 16.8V19L3.1 21.5C2.6 21.7 2 21.4 2 20.8V6C2 5.4 2.3 4.89995 2.9 4.69995L8.7 2.09998V4.19995Z" fill="black" />
												<path d="M15.3 19.8L20 17.6999V5.09992L15.3 7.19989V4.99994L20.9 2.49994C21.4 2.29994 22 2.59989 22 3.19989V17.9999C22 18.5999 21.7 19.1 21.1 19.3L15.3 21.8998V19.8Z" fill="black" />
												<path opacity="0.3" d="M15.3 7.19995L20 5.09998V17.7L15.3 19.8V7.19995Z" fill="black" />
												<path opacity="0.3" d="M8.70001 4.19995V2L15.4 5V7.19995L8.70001 4.19995ZM8.70001 16.8V19L15.4 22V19.8L8.70001 16.8Z" fill="black" />
												<path opacity="0.3" d="M8.7 16.8L4 18.8999V6.30005L8.7 4.19995V16.8Z" fill="black" />
											</svg></span>
										<!--end::Svg Icon-->
										Buka Google Maps</a>
								</div>
								<!--end::Buttons-->
							</div>
							<!--end::Content-->
						</div>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Acara-->
			<!--begin::Konfirmasi Kehadiran-->
			<div class="container">
				<!--begin::Row-->
				<div class="row w-100 gy-10 mb-md-20">
					<!--begin::Col-->
					<div class="rounded border p-10 pb-0 d-flex flex-column flex-center w-80">
						<div class="alert bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10 w-100">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
							<img src="assets/images/flower.png" class="mh-50px mh-lg-80px mb-9" alt="" />
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Content-->
							<div class="w-100">
								<div class="text-center">
									<!--begin::Title-->
									<h3 class=" fs-4x fs-lg-3x text-danger" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Konfirmasi Kehadiran</h3>
									<!--end::Title-->
									<div class="fw-bold fs-6 fs-lg-4 mb-5" style="color:#BF7388">Kehadiran Anda adalah kehormatan dan kebahagiaan bagi Kami</div>
								</div>
								<div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
								<form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="form-konfirmasi-kehadiran">
									<!--begin::Input group-->
									<div class="fv-row mb-7 fv-plugins-icon-container">
										<!--begin::Label-->
										<label class="required fs-6 fw-bold mb-2">Nama</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="Nama anda..." name="nama">
										<!--end::Input-->
										<div id="pesan-nama"></div>
									</div>
									<div class="fv-row mb-7 fv-plugins-icon-container">
										<!--begin::Label-->
										<label class="fs-6 fw-bold mb-2">Pesan</label>
										<!--end::Label-->
										<!--begin::Input-->
										<textarea rows="3" class="form-control form-control-solid" placeholder="Pesan anda..." name="pesan"></textarea>
										<!--end::Input-->
										<div id="pesan-pesan"></div>
									</div>
									<div class="fv-row mb-7 fv-plugins-icon-container">
										<!--begin::Label-->
										<label class="required fs-6 fw-bold mb-2">Konfirmasi</label>
										<!--end::Label-->
										<!--begin::Input-->
										<div class="form-check form-check-custom form-check-solid p-2">
											<input class="form-check-input" type="radio" name="konfirmasi_kehadiran" id="konfirmasi_kehadiran" value="Akan Hadir">
											<label class="form-check-label text-dark opacity-100" for="konfirmasi_kehadiran">Akan Hadir</label>
										</div>
										<div class="form-check form-check-custom form-check-solid p-2">
											<input class="form-check-input" type="radio" name="konfirmasi_kehadiran" id="konfirmasi_kehadiran" value="Tidak Hadir">
											<label class="form-check-label text-dark opacity-100" for="konfirmasi_kehadiran">Tidak Hadir</label>
										</div>
										<div class="form-check form-check-custom form-check-solid p-2">
											<input class="form-check-input" type="radio" name="konfirmasi_kehadiran" id="konfirmasi_kehadiran" value="Masih Ragu">
											<label class="form-check-label text-dark opacity-100" for="konfirmasi_kehadiran">Masih Ragu</label>
										</div>
										<!--end::Input-->
										<div id="pesan-nama"></div>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-danger" id="btn-konfirmasi-kehadiran">
											<span class="indicator-label">Konfirmasi</span>
											<span class="indicator-progress">Mohon tunggu...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Input group-->
								</form>
							</div>
							<!--end::Content-->
						</div>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Konfirmasi Kehadiran-->
			<!--begin::Angpao-->
			<div class="container">
				<!--begin::Row-->
				<div class="row w-100 gy-10 mb-md-20">
					<!--begin::Col-->
					<div class="rounded border p-10 pb-0 d-flex flex-column flex-center w-80">
						<div class="alert bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10 w-100">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
							<img src="assets/images/flower.png" class="mh-50px mh-lg-80px mb-9" alt="" />
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Content-->
							<div class="w-100">
								<div class="text-center">
									<!--begin::Title-->
									<h3 class=" fs-4x fs-lg-3x text-danger" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Amplop Digital</h3>
									<!--end::Title-->
									<div class="fw-bold fs-6 fs-lg-4 mb-5" style="color:#BF7388">Doa restu dan bantuan anda merupakan kebahagiaan yang sangat berarti bagi kami.</div>
								</div>
								<div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
								<div class="row">
									<div class="col-xl-4 my-2">
										<!--begin::Card-->
										<div class="card card-dashed border-primary bg-light-primary h-xl-100 flex-row flex-stack flex-wrap p-6">
											<!--begin::Info-->
											<div class="d-flex flex-column py-2">
												<!--begin::Wrapper-->
												<div class="d-flex align-items-center">
													<!--begin::Icon-->
													<img src="assets/images/bank_muamalat.png" class="me-4 w-50px w-lg-100px">
													<!--end::Icon-->
													<!--begin::Details-->
													<div>
														<div class="fs-4 fw-bolder">5410082526</div>
														<div class="fs-6 fw-bold text-gray-400">a.n Muhamad Abdul Mufidz</div>
													</div>
													<!--end::Details-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Card-->
									</div>
									<div class="col-xl-4 my-2">
										<!--begin::Card-->
										<div class="card card-dashed border-primary bg-light-primary h-xl-100 flex-row flex-stack flex-wrap p-6">
											<!--begin::Info-->
											<div class="d-flex flex-column py-2">
												<!--begin::Wrapper-->
												<div class="d-flex align-items-center">
													<!--begin::Icon-->
													<img src="assets/images/bank_bsi.png" class="me-4 w-50px w-lg-100px">
													<!--end::Icon-->
													<!--begin::Details-->
													<div>
														<div class="fs-4 fw-bolder">7132031098</div>
														<div class="fs-6 fw-bold text-gray-400">a.n Muhamad Abdul Mufidz</div>
													</div>
													<!--end::Details-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Card-->
									</div>
									<div class="col-xl-4 my-2">
										<!--begin::Card-->
										<div class="card card-dashed border-primary bg-light-primary h-xl-100 flex-row flex-stack flex-wrap p-6">
											<!--begin::Info-->
											<div class="d-flex flex-column py-2">
												<!--begin::Wrapper-->
												<div class="d-flex align-items-center">
													<!--begin::Icon-->
													<div>
														<img src="assets/images/dana.png" class="me-4 w-50px w-lg-80px mb-1"><br>
														<img src="assets/images/gopay.png" class="me-4 w-50px w-lg-90px">
													</div>
													<!--end::Icon-->
													<!--begin::Details-->
													<div>
														<div class="fs-4 fw-bolder">085877493514</div>
														<div class="fs-6 fw-bold text-gray-400">a.n Muhamad Abdul Mufidz</div>
													</div>
													<!--end::Details-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Card-->
									</div>
								</div>
								<div class="text-center py-10 py-lg-10">
									<button type="submit" class="btn btn-danger mx-1 my-2" id="btn-konfirmasi-kehadiran">
										<span class="indicator-label">Konfirmasi ke Lulu</span>
										<span class="indicator-progress">Mohon tunggu...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="submit" class="btn btn-danger mx-1 my-2" id="btn-konfirmasi-kehadiran">
										<span class="indicator-label">Konfirmasi ke Mufidz</span>
										<span class="indicator-progress">Mohon tunggu...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
							</div>
							<!--end::Content-->
						</div>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Angpao-->
		</div>
		<!--end::Isi Section-->
		<!--begin::Statistics Section-->
		<div class="mt-20">
			<!--begin::Curve top-->
			<div class="landing-curve" style="color: #ffeded;">
				<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
				</svg>
			</div>
			<!--end::Curve top-->
			<!--begin::Wrapper-->
			<div style="background-color: #ffeded;">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Statistics-->

					<div class="d-flex flex-column flex-center min-vh-100 text-center" style="padding-left: 20px;padding-right: 20px;">
						<!--begin::Title-->
						<span class="fs-1x fs-lg-4 my-10 my-lg-20" style="color: #80364a;">Kehadiran serta doa restu Bapak/Ibu/Saudara/i <br>
							Merupakan suatu kehormatan dan kebahagiaan bagi Kami.<br>
							Wassalamu’alaikum Warahmatullahi Wabarakatuh</span>
						<img src="assets/images/avatars-min.webp" class="mh-80px mh-lg-150px mb-9" alt="" />
						<!--begin::Heading-->
						<div class="text-center" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
							<!--begin::Title-->
							<h3 class=" fs-4x fs-lg-3x text-danger mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Lulu & Mufidz</h3>
							<!--end::Title-->
						</div>
						<!--end::Heading-->
						<img src="assets/images/heart-balloons.gif" class="mh-80px mh-lg-100px mb-9" alt="" />
					</div>
					<!--end::Statistics-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Statistics Section-->
		<!--begin::Footer Section-->
		<div class="mb-0">
			<!--begin::Wrapper-->
			<div class="landing-dark-bg pt-10">
				<!--begin::Separator-->
				<div class="landing-dark-separator"></div>
				<!--end::Separator-->
				<!--begin::Container-->
				<div class="container">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
						<!--begin::Copyright-->
						<div class="d-flex align-items-center order-2 order-md-1">
							<!--begin::Logo image-->
							<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">© 2023 Lulu & Mufidz</span>
							<!--end::Logo image-->
						</div>
						<!--end::Copyright-->
						<!--begin::Menu-->
						<ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
							<li class="menu-item">
								<a href="https://mufidz.com/" target="_blank" class="menu-link px-2">About</a>
							</li>
						</ul>
						<!--end::Menu-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Footer Section-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
	</div>
	<!--end::Main-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
	<script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/js/custom/landing.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#form-konfirmasi-kehadiran').on('submit', function(event) {
				event.preventDefault();
				$('.indicator-label').css("display", "none");
				$('.indicator-progress').css("display", "block");
				var data = $(this).serialize();
				$.ajax({
					url: 'home/post_kehadiran',
					type: 'post',
					data: data,
					dataType: 'JSON',
					success: function(returndata) {
						setTimeout(function() {
							$('.indicator-progress').css("display", "none");
							$('.indicator-label').css("display", "block");
						}, 2000);
					}
				});
			});
		})
	</script>
</body>
<!--end::Body-->

</html>