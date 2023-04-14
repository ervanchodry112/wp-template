<?php /* Template Name: quiz  */ ?>
<?php get_header(); ?>
<html lang="en">

<head>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/quiz/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/quiz/menu.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/quiz/vendors.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/quiz/icon_fonts/css/all_icons.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/quiz/skins/square/grey.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/quiz/custom.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/modernizr.js"></script>
</head>

<body>
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload -->
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div>
	<!-- /loader_form -->
	<main>
		<div class="container">
			<div id="wizard_container">
				<form name="example-1" id="wrapped" method="POST">
					<input id="website" name="website" type="text" value="">
					<!-- Leave input above for security protection, read docs for details -->
					<div id="top-wizard" style="text-align: Center; padding-top: 30px;">
						<strong>
							<div class="progress-label"> Progress </div>
						</strong>
						<div id="progressbar"></div>
					</div>
					<div id="middle-wizard">
						<div class="step">
							<div class="question_title">
								<h1>Selamat Datang!</h1>
								<p>Tools ini akan membantu anda untuk mencari solusi yang Terbaik untuk anda!</p>
							</div>
							<div class="row">
								<div class="w-100 p-3">
									<div class="item">
										<input id="Start1" type="radio" name="start1" value="Start1" class="">
										<label for="start1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><strong>Sudah Siap?</strong>Ayo Kita Mulai! Klik tombol forward untuk menuju ke pertanyaan!</label>
									</div>
								</div>
							</div>
						</div>
						<div class="step" id="Data Diri">
							<div class="question_title">
								<h3>Pertama kita mari kita kenal anda lebih jauh!</h3>
								<p>Isilah data-data dibawah ini</p>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-5">
									<div class="box_general">
										<div class="form-group">
											<input type="text" name="Nama" class="required form-control" placeholder="Nama">
										</div>
										<div class="form-group">
											<input type="text" name="NM_Perguruan_Tinggi" class="required form-control" placeholder="Nama Perguruan Tinggi">
										</div>
										<div class="form-group">
											<input type="text" name="Telephone" class="required form-control" placeholder="Telephone">
										</div>
										<div class="form-group">
											<input type="text" name="Kota" class="form-control" placeholder="Kota">
										</div>
										<div class="form-group">
											<input type="email" name="Email" class="required form-control" placeholder="Email">
										</div>
										<div class="checkbox_questions">
											<input name="terms" type="checkbox" class="required" value="yes">
											<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a>.</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="step" id="Jumlah murid">
							<div class="question_title">
								<h3>Jumlah Murid</h3>
								<p>Berapakah Jumlah Murid yang berada di Perguruan Tinggi anda?</p>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="item">
										<input id="B1" name="jumlah_murid" type="radio" value="<100" class="required">
										<label for="B1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><strong>
												<100< /strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="B2" name="jumlah_murid" type="radio" value="100-500" class="required">
										<label for="B2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><strong>100-500</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="B3" name="jumlah_murid" type="radio" value="500-1000" class="required">
										<label for="B3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>500-1000</strong></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="item">
										<input id="B4" name="jumlah_murid" type="radio" value="1000-3000" class="required">
										<label for="B4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>1000-3000</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="B5" name="jumlah_murid" type="radio" value="3000-10000" class="required">
										<label for="B5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>3000-10000</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="B6" name="jumlah_murid" type="radio" value=">10000" class="required">
										<label for="B6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>>10000</strong></label>
									</div>
								</div>
							</div>
						</div>
						<div class="step" id="Perguruan_Tinggi">
							<div class="question_title">
								<h3>Jenis Perguruan Tinggi</h3>
								<p>Pilih Jenis Perguruan Tinggi Anda</p>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="item">
										<input id="C1" name="Perguruan_Tinggi" type="radio" value="Kedinasan" class="required">
										<label for="C1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><strong>Kedinasan</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="C2" name="Perguruan_Tinggi" type="radio" value="Agama" class="required">
										<label for="C2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><strong>Agama</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="C3" name="Perguruan_Tinggi" type="radio" value="Kesehatan" class="required">
										<label for="C3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>Kesehatan</strong></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="item">
										<input id="C4" name="Perguruan_Tinggi" type="radio" value="Perguruan Tinggi Swasta" class="required">
										<label for="C4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>Perguruan Tinggi Swasta</strong></label>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="item">
										<input id="C5" name="Perguruan_Tinggi" type="radio" value="Perguruan Tinggi Negeri" class="required">
										<label for="C5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>Perguruan Tinggi Negeri</strong></label>
									</div>
								</div>
							</div>
						</div>
						<div class="step" data-state="branchtype">
							<div class="question_title">
								<h3>Jabatan</h3>
								<p>Apa Posisi anda di perguruan tinggi anda?</p>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="item">
										<input id="A_1" name="Jabatan" type="radio" value="A1" class="required">
										<label for="A_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><strong>Operator PDDIKTI</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="A_2" name="Jabatan" type="radio" value="A2" class="required">
										<label for="A_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><strong>Team IT</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="A_3" name="Jabatan" type="radio" value="A3" class="required">
										<label for="A_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>Bagian Akademik / Keuangan</strong></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="item">
										<input id="A_4" name="Jabatan" type="radio" value="A4" class="required">
										<label for="A_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>Dosen</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="A_5" name="Jabatan" type="radio" value="A5" class="required">
										<label for="A_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>Bagian Penjaminan Mutu</strong></label>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<input id="A_6" name="Jabatan" type="radio" value="A6" class="required">
										<label for="A_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><strong>Pimpinan</strong></label>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1">
							<div class="step" data-state="A1-F">
								<div class="question_title">
									<h3>Problem PDDIKTI</h3>
									<p>Dalam proses pelaporan PDDIKTI, saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="D_1" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D1" class="required">
											<label for="D_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Data yang dibutuhkan untuk pelaporan tidak tersedia di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="D_2" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D2" class="required">
											<label for="D_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Waktu terbatas untuk entry data</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="D_3" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D3" class="required">
											<label for="D_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya memiliki sistem tapi belum terintegrasi dengan PDDIKTI Neo Feeder, sehingga saya masih perlu melakukan 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="D_4" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D4" class="required">
											<label for="D_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya operator baru yang kelimpahan tugas untuk mengurus data PDDIKTI yang kacau sebelumnya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="D_5" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D5" class="required">
											<label for="D_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak data yang salah yang memerlukan persetujuan perubahan data dari pusat dan prosesnya lama</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="D_6" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D6" class="required">
											<label for="D_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya sedang alih bentuk/merger dengan kampus lain, sehingga proses pelaporannya terhambat menunggu proses administrasi & migrasi data dari pusat</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="D_7" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D7" class="required">
											<label for="D_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan terlalu banyak</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="D_8" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D8" class="required">
											<label for="D_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak tahu apa itu PDDIKTI</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="D_9" name="PROBLEM_PDDIKTI[]" type="radio" value="D9" class="required">
											<label for="D_9"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-F">
							<div class="step" data-state="A1-I">
								<div class="question_title">
									<h3>Problem SDM</h3>
									<p>Di kampus saya SDM masih sangat kurang, seperti?</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="F_1" name="SDM[]" type="checkbox" value="F1" class="required">
											<label for="F_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Tidak Punya Team IT, sehingga kami kesulitan untuk bisa menerapkan / mengembangkan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="F_2" name="SDM[]" type="checkbox" value="F2" class="required">
											<label for="F_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan banyak yang tidak termasuk dalam jobdesc IT</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="F_3" name="SDM[]" type="checkbox" value="F3" class="required">
											<label for="F_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kapasitas & kualitas dosen kurang, sehingga kami mencari tenaga pengajar dari kalangan guru atau praktisi yang belum bisa memenuhi syarat untuk mendapatkan NIDN</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="F_4" name="SDM[]" type="checkbox" value="F4" class="required">
											<label for="F_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Operator sering lembur tanpa tunjangan yang pantas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="F_5" name="SDM[]" type="checkbox" value="F5" class="required">
											<label for="F_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Personil yang bisa melatih masih sangat terbatas</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="F_6" name="SDM[]" type="checkbox" value="F6" class="required">
											<label for="F_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Butuh E-Learning agar dosen bisa mendapatkan kemudahan dan fleksibilitas waktu mengajar</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="F_7" name="SDM[]" type="radio" value="F7" class="required">
											<label for="F_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM dikampus saya sudah sangat mumpuni dan saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-I">
							<div class="step" data-state="branchtype">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Kondisi sistem di Perguruan Tinggi saya...</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="I_1" name="Sistem" type="radio" value="A1-I1" class="required">
											<label for="I_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Belum memiliki sistem sama sekali</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2" name="Sistem" type="radio" value="A1-I2" class="required">
											<label for="I_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sudah memiliki sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-I1">
							<div class="step" data-state="A1-K">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Belum memiliki sistem sama sekali, jadi...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="I_1_1" name="Sistem_Branch_1[]" type="checkbox" value="I1-1" class="required">
											<label for="I_1_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Semua operasional masih manual</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="I_1_2" name="Sistem_Branch_1[]" type="checkbox" value="I1-2" class="required">
											<label for="I_1_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Layanan kepada mahasiswa dan dosen lamban</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="I_1_3" name="Sistem_Branch_1[]" type="checkbox" value="I1-3" class="required">
											<label for="I_1_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Beban kerja personil tinggi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="I_1_4" name="Sistem_Branch_1[]" type="checkbox" value="I1-4" class="required">
											<label for="I_1_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sering terjadi inefisiensi</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-I2">
							<div class="step" data-state="A1-K">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Sudah memiliki sistem, Tetapi</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_1" name="Sistem_Branch_2[]" type="checkbox" value="I1-1" class="required">
											<label for="I_2_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Ditinggal lari vendor, sehingga sistem tidak ter-update dengan kebutuhan saat ini</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_2" name="Sistem_Branch_2[]" type="checkbox" value="I1-2" class="required">
											<label for="I_2_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem tidak jalan lancar</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_3" name="Sistem_Branch_2[]" type="checkbox" value="I1-3" class="required">
											<label for="I_2_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Overload, Sering mendapat komplain oleh Mahasiswa terutama ketika KRS</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_4" name="Sistem_Branch_2[]" type="checkbox" value="I1-4" class="required">
											<label for="I_2_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak sesuai Proses Bisnis di Kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_5" name="Sistem_Branch_2[]" type="checkbox" value="I1-5" class="required">
											<label for="I_2_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem vulnerable (pernah diakses oleh orang tidak berkepentingan)</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_6" name="Sistem_Branch_2[]" type="checkbox" value="I1-6" class="required">
											<label for="I_2_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Belum terintegrasi dengan Neo Feeder & Sister, sehingga perlu 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_7" name="Sistem_Branch_2[]" type="checkbox" value="I1-7" class="required">
											<label for="I_2_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Antar sistem belum terintegrasi, sehingga masih perlu input 2 kali untuk hal tertentu.</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="I_2_8" name="Sistem_Branch_2[]" type="radio" value="I1-8" class="required">
											<label for="I_2_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem berjalan dengan baik dan tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-K">
							<div class="step" data-state="A1-M">
								<div class="question_title">
									<h3>Kontrol Aturan Akademik</h3>
									<p>Kami kesulitan karena Kontrol Aturan Akademik sering kelolosan, seperti...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="K_1" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K1" class="required">
											<label for="K_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Banyak celah yang dimanfaatin oknum mahasiswa</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="K_2" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K2" class="required">
											<label for="K_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mahasiswa bisa lulus meskipun belum melunasi tagihan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="K_3" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K3" class="required">
											<label for="K_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Mengalami banyak kerugian akibat kontrol yang kurang ketat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="K_4" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K4" class="required">
											<label for="K_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem yang ada belum sesuai dengan aturan yang kami terapkan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="K_5" name="Kontrol_Aturan_Akademik[]" type="radio" value="K5" class="required">
											<label for="K_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-M">
							<div class="step" data-state="A1-H">
								<div class="question_title">
									<h3>General Problem</h3>
									<p>Untuk menghadapi kampus merdeka dan kemajuan teknologi saat ini, saya masih kesulitan...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="M_1" name="General_Problem[]" type="checkbox" value="M1" class="required">
											<label for="M_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Menerapkan tracert study yang cocok dan strategi bagaimana membuat alumni mau mengupdate datanya</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="M_2" name="General_Problem[]" type="checkbox" value="M2" class="required">
											<label for="M_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mempertahannya jumlah peminat dan alumni agar tidak menurun secara signifikan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="M_3" name="General_Problem[]" type="checkbox" value="M3" class="required">
											<label for="M_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak dosen sudah tua sehingga susah untuk menerapkan e-learning</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="M_4" name="General_Problem[]" type="checkbox" value="M4" class="required">
											<label for="M_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya menggunakan Moodle sebagai fasilitas e-learning dan tidak terintegrasi dengan siakad, sehingga dosen masih perlu entry 2 kali</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="M_5" name="General_Problem[]" type="radio" value="M5" class="required">
											<label for="M_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-H">
							<div class="step" data-state="A1-G">
								<div class="question_title">
									<h3>Infrastruktur[]</h3>
									<p>Kondisi Infrastrukur di Perguruan Tinggi saya...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="H_1" name="Infrastruktur[]" type="checkbox" value="H1" class="required">
											<label for="H_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Listrik sering padam sehingga menggangu layanan</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="H_2" name="Infrastruktur[]" type="checkbox" value="H2" class="required">
											<label for="H_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengadaan server hanya berupa rencana</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="H_3" name="Infrastruktur[]" type="checkbox" value="H3" class="required">
											<label for="H_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pimpinan/yayasan kurang mendukung dan belum terbuka dengan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="H_4" name="Infrastruktur[]" type="checkbox" value="H4" class="required">
											<label for="H_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Server overcapacity / overload</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="H_5" name="Infrastruktur[]" type="checkbox" value="H5" class="required">
											<label for="H_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Jangkauan internet susah & lambat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="H_6" name="Infrastruktur[]" type="checkbox" value="H6" class="required">
											<label for="H_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada internet di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="H_7" name="Infrastruktur[]" type="radio" value="H7" class="required">
											<label for="H_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-G">
							<div class="step" data-state="A1-E">
								<div class="question_title">
									<h3>Yayasan</h3>
									<p>Yayasan kampus kami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="G_1" name="yayasan[]" type="checkbox" value="G1" class="required">
											<label for="G_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Yayasan masih kolot dan belum ter-update dalam teknologi terkini</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="G_2" name="yayasan[]" type="checkbox" value="G2" class="required">
											<label for="G_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengelola Kampus masih menggangap sistem adalah biaya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="G_3" name="yayasan[]" type="checkbox" value="G3" class="required">
											<label for="G_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem dikerjakan oleh teman, keluarga dari pengelola kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="G_4" name="yayasan[]" type="checkbox" value="G4" class="required">
											<label for="G_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Trauma akibat kegagalan pengembangan terdahulu</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="G_5" name="yayasan[]" type="checkbox" value="G5" class="required">
											<label for="G_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada dana / anggaran pengembangan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="G_6" name="yayasan[]" type="checkbox" value="G6" class="required">
											<label for="G_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sangat mendukung adanya sistem dalam pengembangan dan penerapannya, serta bersedia mengeluarkan angggaran untuk sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-E">
							<div class="step" data-state="A1-J">
								<div class="question_title">
									<h3>Finansial</h3>
									<p>Terkait permasalahan keuangan, kampus saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="E_1" name="Finansial[]" type="checkbox" value="E1" class="required">
											<label for="E_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Mahasiswa sering telat / tidak membayar SPP tepat waktu</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="E_2" name="Finansial[]" type="checkbox" value="E2" class="required">
											<label for="E_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Jumlah mahasiswa sedikit sehingga penerimaan dana minimum</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="E_3" name="Finansial[]" type="checkbox" value="E3" class="required">
											<label for="E_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Kontrol keuangan masih lemah, banyak inefisiensi terjadi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="E_4" name="Finansial[]" type="checkbox" value="E4" class="required">
											<label for="E_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus kami takut mahasiswa lari bila di beri aturan ketat tentang pembayaran maka Sistem pembayaran / cicilan dibuat terlalu bebas atau fleksibel</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="E_5" name="Finansial[]" type="checkbox" value="E5" class="required">
											<label for="E_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Yayasan seringkali kurang percaya dengan pengelolaan dana di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="E_6" name="Finansial[]" type="checkbox" value="E6" class="required">
											<label for="E_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Peminat mahasiswa berkurang secara signifikan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="E_7" name="Finansial[]" type="radio" value="E7" class="required">
											<label for="E_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-J">
							<div class="step" data-state="A1-L">
								<div class="question_title">
									<h3>Akreditasi</h3>
									<p>Kampus kami saat ini mau menghadapi Akreditasi dalam waktu dekat, dan kami saat ini...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="J_1" name="Akreditasi[]" type="checkbox" value="J1" class="required">
											<label for="J_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Sulit menyiapkan persyaratan Akreditasi karena dokumen dan data pendukung berceceran</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="J_2" name="Akreditasi[]" type="checkbox" value="J2" class="required">
											<label for="J_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Masih kesulitan menelusuri sumber data dan informasi terkait</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="J_3" name="Akreditasi[]" type="checkbox" value="J3" class="required">
											<label for="J_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Dalam proses berusaha memenuhi kriteria Akreditasi dengan tepat</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="J_4" name="Akreditasi[]" type="checkbox" value="J4" class="required">
											<label for="J_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM yang paham dan bisa menyiapkan terbatas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="J_5" name="Akreditasi[]" type="checkbox" value="J5" class="required">
											<label for="J_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Perlu menyiapkan Poin+ agar bisa naik Akreditasi dengan cepat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="J_6" name="Akreditasi[]" type="checkbox" value="J6" class="required">
											<label for="J_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Menerapkan SPMI sehingga perlu ada sistem yang membantu menerapkan PDCA & PPEPP (penetapan, pelaksanaan, evaluasi , pengendalian & peningkatan)</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="J_7" name="Akreditasi[]" type="radio" value="J7" class="required">
											<label for="J_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A1-L">
							<div class="step" data-state="end">
								<div class="question_title">
									<h3>Kapasitas Perguruan Tinggi</h3>
									<p>Kapasitas Perguruan Tinggi kami saat ini..</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="L_1" name="Kapasitas" type="radio" value="L1" class="required">
											<label for="L_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Memiliki keterbatasan tempat kuliah</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="L_2" name="Kapasitas" type="radio" value="L2" class="required">
											<label for="L_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Saya tidak mengalami kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--A1 ============================== -->
						<div class="branch" id="A2">
							<div class="step" data-state="branchtype">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Kondisi sistem di Perguruan Tinggi saya...</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_1" name="Sistem" type="radio" value="A2-I1" class="required">
											<label for="A2_I_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Belum memiliki sistem sama sekali</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2" name="Sistem" type="radio" value="A2-I2" class="required">
											<label for="A2_I_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sudah memiliki sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-I1">
							<div class="step" data-state="A2-D">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Belum memiliki sistem sama sekali, jadi...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_1_1" name="Sistem_Branch_1[]" type="checkbox" value="I1-1" class="required">
											<label for="A2_I_1_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Semua operasional masih manual</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_1_2" name="Sistem_Branch_1[]" type="checkbox" value="I1-2" class="required">
											<label for="A2_I_1_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Layanan kepada mahasiswa dan dosen lamban</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_1_3" name="Sistem_Branch_1[]" type="checkbox" value="I1-3" class="required">
											<label for="A2_I_1_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Beban kerja personil tinggi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_1_4" name="Sistem_Branch_1[]" type="checkbox" value="I1-4" class="required">
											<label for="A2_I_1_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sering terjadi inefisiensi</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-I2">
							<div class="step" data-state="A2-D">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Sudah memiliki sistem, Tetapi</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_1" name="Sistem_Branch_2[]" type="checkbox" value="I2-1" class="required">
											<label for="A2_I_2_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Ditinggal lari vendor, sehingga sistem tidak ter-update dengan kebutuhan saat ini</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_2" name="Sistem_Branch_2[]" type="checkbox" value="I2-2" class="required">
											<label for="A2_I_2_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem tidak jalan lancar</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_3" name="Sistem_Branch_2[]" type="checkbox" value="I2-3" class="required">
											<label for="A2_I_2_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Overload, Sering mendapat komplain oleh Mahasiswa terutama ketika KRS</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_4" name="Sistem_Branch_2[]" type="checkbox" value="I2-4" class="required">
											<label for="A2_I_2_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak sesuai Proses Bisnis di Kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_5" name="Sistem_Branch_2[]" type="checkbox" value="I2-5" class="required">
											<label for="A2_I_2_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem vulnerable (pernah diakses oleh orang tidak berkepentingan)</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_6" name="Sistem_Branch_2[]" type="checkbox" value="I2-6" class="required">
											<label for="A2_I_2_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Belum terintegrasi dengan Neo Feeder & Sister, sehingga perlu 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_7" name="Sistem_Branch_2[]" type="checkbox" value="I2-7" class="required">
											<label for="A2_I_2_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Antar sistem belum terintegrasi, sehingga masih perlu input 2 kali untuk hal tertentu.</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_I_2_8" name="Sistem_Branch_2[]" type="radio" value="I2-8" class="required">
											<label for="A2_I_2_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem berjalan dengan baik dan tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-D">
							<div class="step" data-state="A2-K">
								<div class="question_title">
									<h3>Problem PDDIKTI</h3>
									<p>Dalam proses pelaporan PDDIKTI, saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_1" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D1" class="required">
											<label for="A2_D_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Data yang dibutuhkan untuk pelaporan tidak tersedia di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_2" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D2" class="required">
											<label for="A2_D_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Waktu terbatas untuk entry data</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_3" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D3" class="required">
											<label for="A2_D_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya memiliki sistem tapi belum terintegrasi dengan PDDIKTI Neo Feeder, sehingga saya masih perlu melakukan 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_4" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D4" class="required">
											<label for="A2_D_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya operator baru yang kelimpahan tugas untuk mengurus data PDDIKTI yang kacau sebelumnya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_5" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D5" class="required">
											<label for="A2_D_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak data yang salah yang memerlukan persetujuan perubahan data dari pusat dan prosesnya lama</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_6" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D6" class="required">
											<label for="A2_D_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya sedang alih bentuk/merger dengan kampus lain, sehingga proses pelaporannya terhambat menunggu proses administrasi & migrasi data dari pusat</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_7" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D7" class="required">
											<label for="A2_D_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan terlalu banyak</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_8" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D8" class="required">
											<label for="A2_D_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak tahu apa itu PDDIKTI</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_D_9" name="PROBLEM_PDDIKTI[]" type="radio" value="D9" class="required">
											<label for="A2_D_9"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-K">
							<div class="step" data-state="A2-F">
								<div class="question_title">
									<h3>Kontrol Aturan Akademik</h3>
									<p>Kami kesulitan karena Kontrol Aturan Akademik sering kelolosan, seperti...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_K_1" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K1" class="required">
											<label for="A2_K_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Banyak celah yang dimanfaatin oknum mahasiswa</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_K_2" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K2" class="required">
											<label for="A2_K_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mahasiswa bisa lulus meskipun belum melunasi tagihan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_K_3" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K3" class="required">
											<label for="A2_K_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Mengalami banyak kerugian akibat kontrol yang kurang ketat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_K_4" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K4" class="required">
											<label for="A2_K_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem yang ada belum sesuai dengan aturan yang kami terapkan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_K_5" name="Kontrol_Aturan_Akademik[]" type="radio" value="K5" class="required">
											<label for="A2_K_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-F">
							<div class="step" data-state="A2-M">
								<div class="question_title">
									<h3>Problem SDM</h3>
									<p>Di kampus saya SDM masih sangat kurang, seperti?</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_F_1" name="SDM[]" type="checkbox" value="F1" class="required">
											<label for="A2_F_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Tidak Punya Team IT, sehingga kami kesulitan untuk bisa menerapkan / mengembangkan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_F_2" name="SDM[]" type="checkbox" value="F2" class="required">
											<label for="A2_F_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan banyak yang tidak termasuk dalam jobdesc IT</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_F_3" name="SDM[]" type="checkbox" value="F3" class="required">
											<label for="A2_F_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kapasitas & kualitas dosen kurang, sehingga kami mencari tenaga pengajar dari kalangan guru atau praktisi yang belum bisa memenuhi syarat untuk mendapatkan NIDN</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_F_4" name="SDM[]" type="checkbox" value="F4" class="required">
											<label for="A2_F_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Operator sering lembur tanpa tunjangan yang pantas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_F_5" name="SDM[]" type="checkbox" value="F5" class="required">
											<label for="A2_F_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Personil yang bisa melatih masih sangat terbatas</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_F_6" name="SDM[]" type="checkbox" value="F6" class="required">
											<label for="A2_F_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Butuh E-Learning agar dosen bisa mendapatkan kemudahan dan fleksibilitas waktu mengajar</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_F_7" name="SDM[]" type="radio" value="F6" class="required">
											<label for="A2_F_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM dikampus saya sudah sangat mumpuni dan saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-M">
							<div class="step" data-state="A2-H">
								<div class="question_title">
									<h3>General Problem</h3>
									<p>Untuk menghadapi kampus merdeka dan kemajuan teknologi saat ini, saya masih kesulitan...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_M_1" name="General_Problem[]" type="checkbox" value="M1" class="required">
											<label for="A2_M_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Menerapkan tracert study yang cocok dan strategi bagaimana membuat alumni mau mengupdate datanya</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_M_2" name="General_Problem[]" type="checkbox" value="M2" class="required">
											<label for="A2_M_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mempertahannya jumlah peminat dan alumni agar tidak menurun secara signifikan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_M_3" name="General_Problem[]" type="checkbox" value="M3" class="required">
											<label for="A2_M_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak dosen sudah tua sehingga susah untuk menerapkan e-learning</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_M_4" name="General_Problem[]" type="checkbox" value="M4" class="required">
											<label for="A2_M_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya menggunakan Moodle sebagai fasilitas e-learning dan tidak terintegrasi dengan siakad, sehingga dosen masih perlu entry 2 kali</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_M_5" name="General_Problem[]" type="radio" value="M5" class="required">
											<label for="A2_M_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-H">
							<div class="step" data-state="A2-G">
								<div class="question_title">
									<h3>Infrastruktur</h3>
									<p>Kondisi Infrastrukur di Perguruan Tinggi saya...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_H_1" name="Infrastruktur[]" type="checkbox" value="H1" class="required">
											<label for="A2_H_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Listrik sering padam sehingga menggangu layanan</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_H_2" name="Infrastruktur[]" type="checkbox" value="H2" class="required">
											<label for="A2_H_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengadaan server hanya berupa rencana</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_H_3" name="Infrastruktur[]" type="checkbox" value="H3" class="required">
											<label for="A2_H_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pimpinan/yayasan kurang mendukung dan belum terbuka dengan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_H_4" name="Infrastruktur[]" type="checkbox" value="H4" class="required">
											<label for="A2_H_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Server overcapacity / overload</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_H_5" name="Infrastruktur[]" type="checkbox" value="H5" class="required">
											<label for="A2_H_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Jangkauan internet susah & lambat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_H_6" name="Infrastruktur[]" type="checkbox" value="H6" class="required">
											<label for="A2_H_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada internet di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_H_7" name="Infrastruktur[]" type="radio" value="H7" class="required">
											<label for="A2_H_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-G">
							<div class="step" data-state="A2-E">
								<div class="question_title">
									<h3>Yayasan</h3>
									<p>Yayasan kampus kami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_G_1" name="yayasan[]" type="checkbox" value="G1" class="required">
											<label for="A2_G_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Yayasan masih kolot dan belum ter-update dalam teknologi terkini</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_G_2" name="yayasan[]" type="checkbox" value="G2" class="required">
											<label for="A2_G_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengelola Kampus masih menggangap sistem adalah biaya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_G_3" name="yayasan[]" type="checkbox" value="G3" class="required">
											<label for="A2_G_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem dikerjakan oleh teman, keluarga dari pengelola kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_G_4" name="yayasan[]" type="checkbox" value="G4" class="required">
											<label for="A2_G_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Trauma akibat kegagalan pengembangan terdahulu</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_G_5" name="yayasan[]" type="checkbox" value="G5" class="required">
											<label for="A2_G_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada dana / anggaran pengembangan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_G_6" name="yayasan[]" type="checkbox" value="G6" class="required">
											<label for="A2_G_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sangat mendukung adanya sistem dalam pengembangan dan penerapannya, serta bersedia mengeluarkan angggaran untuk sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-E">
							<div class="step" data-state="A2-J">
								<div class="question_title">
									<h3>Finansial</h3>
									<p>Terkait permasalahan keuangan, kampus saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_E_1" name="Finansial[]" type="checkbox" value="E1" class="required">
											<label for="A2_E_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Mahasiswa sering telat / tidak membayar SPP tepat waktu</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_E_2" name="Finansial[]" type="checkbox" value="E2" class="required">
											<label for="A2_E_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Jumlah mahasiswa sedikit sehingga penerimaan dana minimum</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_E_3" name="Finansial[]" type="checkbox" value="E3" class="required">
											<label for="A2_E_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Kontrol keuangan masih lemah, banyak inefisiensi terjadi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_E_4" name="Finansial[]" type="checkbox" value="E4" class="required">
											<label for="A2_E_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus kami takut mahasiswa lari bila di beri aturan ketat tentang pembayaran maka Sistem pembayaran / cicilan dibuat terlalu bebas atau fleksibel</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_E_5" name="Finansial[]" type="checkbox" value="E5" class="required">
											<label for="A2_E_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Yayasan seringkali kurang percaya dengan pengelolaan dana di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_E_6" name="Finansial[]" type="checkbox" value="E6" class="required">
											<label for="A2_E_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Peminat mahasiswa berkurang secara signifikan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_E_7" name="Finansial[]" type="radio" value="E7" class="required">
											<label for="A2_E_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-J">
							<div class="step" data-state="A2-L">
								<div class="question_title">
									<h3>Akreditasi</h3>
									<p>Kampus kami saat ini mau menghadapi Akreditasi dalam waktu dekat, dan kami saat ini...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_J_1" name="Akreditasi[]" type="checkbox" value="J1" class="required">
											<label for="A2_J_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Sulit menyiapkan persyaratan Akreditasi karena dokumen dan data pendukung berceceran</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_J_2" name="Akreditasi[]" type="checkbox" value="J2" class="required">
											<label for="A2_J_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Masih kesulitan menelusuri sumber data dan informasi terkait</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_J_3" name="Akreditasi[]" type="checkbox" value="J3" class="required">
											<label for="A2_J_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Dalam proses berusaha memenuhi kriteria Akreditasi dengan tepat</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_J_4" name="Akreditasi[]" type="checkbox" value="J4" class="required">
											<label for="A2_J_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM yang paham dan bisa menyiapkan terbatas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_J_5" name="Akreditasi[]" type="checkbox" value="J5" class="required">
											<label for="A2_J_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Perlu menyiapkan Poin+ agar bisa naik Akreditasi dengan cepat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_J_6" name="Akreditasi[]" type="checkbox" value="J6" class="required">
											<label for="A2_J_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Menerapkan SPMI sehingga perlu ada sistem yang membantu menerapkan PDCA & PPEPP (penetapan, pelaksanaan, evaluasi , pengendalian & peningkatan)</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A2_J_7" name="Akreditasi[]" type="radio" value="J7" class="required">
											<label for="A2_J_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A2-L">
							<div class="step" data-state="end">
								<div class="question_title">
									<h3>Kapasitas Perguruan Tinggi</h3>
									<p>Kapasitas Perguruan Tinggi kami saat ini..</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_L_1" name="Kapasitas" type="radio" value="L1" class="required">
											<label for="A2_L_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Memiliki keterbatasan tempat kuliah</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A2_L_2" name="Kapasitas" type="radio" value="L2" class="required">
											<label for="A2_L_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Saya tidak mengalami kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- A2 ============================== -->
						<div class="branch" id="A3">
							<div class="step" data-state="A3-I">
								<div class="question_title">
									<h3>Kontrol Aturan Akademik</h3>
									<p>Kami kesulitan karena Kontrol Aturan Akademik sering kelolosan, seperti...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_K_1" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K1" class="required">
											<label for="A3_K_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Banyak celah yang dimanfaatin oknum mahasiswa</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_K_2" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K2" class="required">
											<label for="A3_K_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mahasiswa bisa lulus meskipun belum melunasi tagihan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_K_3" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K3" class="required">
											<label for="A3_K_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Mengalami banyak kerugian akibat kontrol yang kurang ketat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_K_4" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K4" class="required">
											<label for="A3_K_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem yang ada belum sesuai dengan aturan yang kami terapkan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_K_5" name="Kontrol_Aturan_Akademik[]" type="radio" value="K5" class="required">
											<label for="A3_K_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-I">
							<div class="step" data-state="branchtype">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Kondisi sistem di Perguruan Tinggi saya...</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_1" name="Sistem" type="radio" value="A3-I1" class="required">
											<label for="A3_I_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Belum memiliki sistem sama sekali</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2" name="Sistem" type="radio" value="A3-I2" class="required">
											<label for="A3_I_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sudah memiliki sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-I1">
							<div class="step" data-state="A3-D">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Belum memiliki sistem sama sekali, jadi...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_1_1" name="Sistem_Branch_1[]" type="checkbox" value="I1-1" class="required">
											<label for="A3_I_1_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Semua operasional masih manual</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_1_2" name="Sistem_Branch_1[]" type="checkbox" value="I1-2" class="required">
											<label for="A3_I_1_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Layanan kepada mahasiswa dan dosen lamban</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_1_3" name="Sistem_Branch_1[]" type="checkbox" value="I1-3" class="required">
											<label for="A3_I_1_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Beban kerja personil tinggi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_1_4" name="Sistem_Branch_1[]" type="checkbox" value="I1-4" class="required">
											<label for="A3_I_1_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sering terjadi inefisiensi</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-I2">
							<div class="step" data-state="A3-D">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Sudah memiliki sistem, Tetapi</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_1" name="Sistem_Branch_2[]" type="checkbox" value="I2-1" class="required">
											<label for="A3_I_2_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Ditinggal lari vendor, sehingga sistem tidak ter-update dengan kebutuhan saat ini</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_2" name="Sistem_Branch_2[]" type="checkbox" value="I2-2" class="required">
											<label for="A3_I_2_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem tidak jalan lancar</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_3" name="Sistem_Branch_2[]" type="checkbox" value="I2-3" class="required">
											<label for="A3_I_2_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Overload, Sering mendapat komplain oleh Mahasiswa terutama ketika KRS</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_4" name="Sistem_Branch_2[]" type="checkbox" value="I2-4" class="required">
											<label for="A3_I_2_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak sesuai Proses Bisnis di Kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_5" name="Sistem_Branch_2[]" type="checkbox" value="I2-5" class="required">
											<label for="A3_I_2_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem vulnerable (pernah diakses oleh orang tidak berkepentingan)</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_6" name="Sistem_Branch_2[]" type="checkbox" value="I2-6" class="required">
											<label for="A3_I_2_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Belum terintegrasi dengan Neo Feeder & Sister, sehingga perlu 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_7" name="Sistem_Branch_2[]" type="checkbox" value="I2-7" class="required">
											<label for="A3_I_2_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Antar sistem belum terintegrasi, sehingga masih perlu input 2 kali untuk hal tertentu.</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_I_2_8" name="Sistem_Branch_2[]" type="radio" value="I2-8" class="required">
											<label for="A3_I_2_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem berjalan dengan baik dan tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-D">
							<div class="step" data-state="A3-F">
								<div class="question_title">
									<h3>Problem PDDIKTI</h3>
									<p>Dalam proses pelaporan PDDIKTI, saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_1" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D1" class="required">
											<label for="A3_D_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Data yang dibutuhkan untuk pelaporan tidak tersedia di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_2" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D2" class="required">
											<label for="A3_D_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Waktu terbatas untuk entry data</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_3" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D3" class="required">
											<label for="A3_D_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya memiliki sistem tapi belum terintegrasi dengan PDDIKTI Neo Feeder, sehingga saya masih perlu melakukan 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_4" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D4" class="required">
											<label for="A3_D_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya operator baru yang kelimpahan tugas untuk mengurus data PDDIKTI yang kacau sebelumnya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_5" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D5" class="required">
											<label for="A3_D_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak data yang salah yang memerlukan persetujuan perubahan data dari pusat dan prosesnya lama</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_6" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D6" class="required">
											<label for="A3_D_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya sedang alih bentuk/merger dengan kampus lain, sehingga proses pelaporannya terhambat menunggu proses administrasi & migrasi data dari pusat</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_7" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D7" class="required">
											<label for="A3_D_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan terlalu banyak</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_8" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D8" class="required">
											<label for="A3_D_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak tahu apa itu PDDIKTI</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_D_9" name="PROBLEM_PDDIKTI[]" type="radio" value="D9" class="required">
											<label for="A3_D_9"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-F">
							<div class="step" data-state="A3-M">
								<div class="question_title">
									<h3>Problem SDM</h3>
									<p>Di kampus saya SDM masih sangat kurang, seperti?</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_F_1" name="SDM[]" type="checkbox" value="F1" class="required">
											<label for="A3_F_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Tidak Punya Team IT, sehingga kami kesulitan untuk bisa menerapkan / mengembangkan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_F_2" name="SDM[]" type="checkbox" value="F2" class="required">
											<label for="A3_F_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan banyak yang tidak termasuk dalam jobdesc IT</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_F_3" name="SDM[]" type="checkbox" value="F3" class="required">
											<label for="A3_F_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kapasitas & kualitas dosen kurang, sehingga kami mencari tenaga pengajar dari kalangan guru atau praktisi yang belum bisa memenuhi syarat untuk mendapatkan NIDN</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_F_4" name="SDM[]" type="checkbox" value="F4" class="required">
											<label for="A3_F_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Operator sering lembur tanpa tunjangan yang pantas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_F_5" name="SDM[]" type="checkbox" value="F5" class="required">
											<label for="A3_F_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Personil yang bisa melatih masih sangat terbatas</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_F_6" name="SDM[]" type="checkbox" value="F6" class="required">
											<label for="A3_F_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Butuh E-Learning agar dosen bisa mendapatkan kemudahan dan fleksibilitas waktu mengajar</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_F_7" name="SDM[]" type="radio" value="F6" class="required">
											<label for="A3_F_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM dikampus saya sudah sangat mumpuni dan saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-M">
							<div class="step" data-state="A3-H">
								<div class="question_title">
									<h3>General Problem</h3>
									<p>Untuk menghadapi kampus merdeka dan kemajuan teknologi saat ini, saya masih kesulitan...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_M_1" name="General_Problem[]" type="checkbox" value="M1" class="required">
											<label for="A3_M_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Menerapkan tracert study yang cocok dan strategi bagaimana membuat alumni mau mengupdate datanya</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_M_2" name="General_Problem[]" type="checkbox" value="M2" class="required">
											<label for="A3_M_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mempertahannya jumlah peminat dan alumni agar tidak menurun secara signifikan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_M_3" name="General_Problem[]" type="checkbox" value="M3" class="required">
											<label for="A3_M_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak dosen sudah tua sehingga susah untuk menerapkan e-learning</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_M_4" name="General_Problem[]" type="checkbox" value="M4" class="required">
											<label for="A3_M_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya menggunakan Moodle sebagai fasilitas e-learning dan tidak terintegrasi dengan siakad, sehingga dosen masih perlu entry 2 kali</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_M_5" name="General_Problem[]" type="radio" value="M5" class="required">
											<label for="A3_M_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-H">
							<div class="step" data-state="A3-G">
								<div class="question_title">
									<h3>Infrastruktur</h3>
									<p>Kondisi Infrastrukur di Perguruan Tinggi saya...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_H_1" name="Infrastruktur[]" type="checkbox" value="H1" class="required">
											<label for="A3_H_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Listrik sering padam sehingga menggangu layanan</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_H_2" name="Infrastruktur[]" type="checkbox" value="H2" class="required">
											<label for="A3_H_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengadaan server hanya berupa rencana</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_H_3" name="Infrastruktur[]" type="checkbox" value="H3" class="required">
											<label for="A3_H_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pimpinan/yayasan kurang mendukung dan belum terbuka dengan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_H_4" name="Infrastruktur[]" type="checkbox" value="H4" class="required">
											<label for="A3_H_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Server overcapacity / overload</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_H_5" name="Infrastruktur[]" type="checkbox" value="H5" class="required">
											<label for="A3_H_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Jangkauan internet susah & lambat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_H_6" name="Infrastruktur[]" type="checkbox" value="H6" class="required">
											<label for="A3_H_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada internet di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_H_7" name="Infrastruktur[]" type="radio" value="H7" class="required">
											<label for="A3_H_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-G">
							<div class="step" data-state="A3-E">
								<div class="question_title">
									<h3>Yayasan</h3>
									<p>Yayasan kampus kami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_G_1" name="yayasan[]" type="checkbox" value="G1" class="required">
											<label for="A3_G_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Yayasan masih kolot dan belum ter-update dalam teknologi terkini</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_G_2" name="yayasan[]" type="checkbox" value="G2" class="required">
											<label for="A3_G_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengelola Kampus masih menggangap sistem adalah biaya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_G_3" name="yayasan[]" type="checkbox" value="G3" class="required">
											<label for="A3_G_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem dikerjakan oleh teman, keluarga dari pengelola kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_G_4" name="yayasan[]" type="checkbox" value="G4" class="required">
											<label for="A3_G_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Trauma akibat kegagalan pengembangan terdahulu</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_G_5" name="yayasan[]" type="checkbox" value="G5" class="required">
											<label for="A3_G_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada dana / anggaran pengembangan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_G_6" name="yayasan[]" type="checkbox" value="G6" class="required">
											<label for="A3_G_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sangat mendukung adanya sistem dalam pengembangan dan penerapannya, serta bersedia mengeluarkan angggaran untuk sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-E">
							<div class="step" data-state="A3-J">
								<div class="question_title">
									<h3>Finansial</h3>
									<p>Terkait permasalahan keuangan, kampus saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_E_1" name="Finansial[]" type="checkbox" value="E1" class="required">
											<label for="A3_E_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Mahasiswa sering telat / tidak membayar SPP tepat waktu</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_E_2" name="Finansial[]" type="checkbox" value="E2" class="required">
											<label for="A3_E_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Jumlah mahasiswa sedikit sehingga penerimaan dana minimum</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_E_3" name="Finansial[]" type="checkbox" value="E3" class="required">
											<label for="A3_E_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Kontrol keuangan masih lemah, banyak inefisiensi terjadi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_E_4" name="Finansial[]" type="checkbox" value="E4" class="required">
											<label for="A3_E_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus kami takut mahasiswa lari bila di beri aturan ketat tentang pembayaran maka Sistem pembayaran / cicilan dibuat terlalu bebas atau fleksibel</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_E_5" name="Finansial[]" type="checkbox" value="E5" class="required">
											<label for="A3_E_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Yayasan seringkali kurang percaya dengan pengelolaan dana di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_E_6" name="Finansial[]" type="checkbox" value="E6" class="required">
											<label for="A3_E_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Peminat mahasiswa berkurang secara signifikan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_E_7" name="Finansial[]" type="radio" value="E7" class="required">
											<label for="A3_E_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-J">
							<div class="step" data-state="A3-L">
								<div class="question_title">
									<h3>Akreditasi</h3>
									<p>Kampus kami saat ini mau menghadapi Akreditasi dalam waktu dekat, dan kami saat ini...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_J_1" name="Akreditasi[]" type="checkbox" value="J1" class="required">
											<label for="A3_J_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Sulit menyiapkan persyaratan Akreditasi karena dokumen dan data pendukung berceceran</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_J_2" name="Akreditasi[]" type="checkbox" value="J2" class="required">
											<label for="A3_J_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Masih kesulitan menelusuri sumber data dan informasi terkait</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_J_3" name="Akreditasi[]" type="checkbox" value="J3" class="required">
											<label for="A3_J_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Dalam proses berusaha memenuhi kriteria Akreditasi dengan tepat</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_J_4" name="Akreditasi[]" type="checkbox" value="J4" class="required">
											<label for="A3_J_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM yang paham dan bisa menyiapkan terbatas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_J_5" name="Akreditasi[]" type="checkbox" value="J5" class="required">
											<label for="A3_J_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Perlu menyiapkan Poin+ agar bisa naik Akreditasi dengan cepat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_J_6" name="Akreditasi[]" type="checkbox" value="J6" class="required">
											<label for="A3_J_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Menerapkan SPMI sehingga perlu ada sistem yang membantu menerapkan PDCA & PPEPP (penetapan, pelaksanaan, evaluasi , pengendalian & peningkatan)</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A3_J_7" name="Akreditasi[]" type="radio" value="J7" class="required">
											<label for="A3_J_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A3-L">
							<div class="step" data-state="end">
								<div class="question_title">
									<h3>Kapasitas Perguruan Tinggi</h3>
									<p>Kapasitas Perguruan Tinggi kami saat ini..</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_L_1" name="Kapasitas" type="radio" value="L1" class="required">
											<label for="A3_L_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Memiliki keterbatasan tempat kuliah</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A3_L_2" name="Kapasitas" type="radio" value="L2" class="required">
											<label for="A3_L_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Saya tidak mengalami kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- A3 ============================== -->
						<div class="branch" id="A4">
							<div class="step" data-state="A4-L">
								<div class="question_title">
									<h3>General Problem</h3>
									<p>Untuk menghadapi kampus merdeka dan kemajuan teknologi saat ini, saya masih kesulitan...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_M_1" name="General_Problem[]" type="checkbox" value="M1" class="required">
											<label for="A4_M_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Menerapkan tracert study yang cocok dan strategi bagaimana membuat alumni mau mengupdate datanya</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_M_2" name="General_Problem[]" type="checkbox" value="M2" class="required">
											<label for="A4_M_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mempertahannya jumlah peminat dan alumni agar tidak menurun secara signifikan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_M_3" name="General_Problem[]" type="checkbox" value="M3" class="required">
											<label for="A4_M_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak dosen sudah tua sehingga susah untuk menerapkan e-learning</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_M_4" name="General_Problem[]" type="checkbox" value="M4" class="required">
											<label for="A4_M_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya menggunakan Moodle sebagai fasilitas e-learning dan tidak terintegrasi dengan siakad, sehingga dosen masih perlu entry 2 kali</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_M_5" name="General_Problem[]" type="radio" value="M5" class="required">
											<label for="A4_M_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-L">
							<div class="step" data-state="A4-I">
								<div class="question_title">
									<h3>Kapasitas Perguruan Tinggi</h3>
									<p>Kapasitas Perguruan Tinggi kami saat ini..</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_L_1" name="Kapasitas" type="radio" value="L1" class="required">
											<label for="A4_L_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Memiliki keterbatasan tempat kuliah</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_L_2" name="Kapasitas" type="radio" value="L2" class="required">
											<label for="A4_L_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Saya tidak mengalami kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-I">
							<div class="step" data-state="branchtype">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Kondisi sistem di Perguruan Tinggi saya...</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_1" name="Sistem" type="radio" value="A4-I1" class="required">
											<label for="A4_I_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Belum memiliki sistem sama sekali</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2" name="Sistem" type="radio" value="A4-I2" class="required">
											<label for="A4_I_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sudah memiliki sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-I1">
							<div class="step" data-state="A4-K">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Belum memiliki sistem sama sekali, jadi...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_1_1" name="Sistem_Branch_1[]" type="checkbox" value="I1-1" class="required">
											<label for="A4_I_1_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Semua operasional masih manual</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_1_2" name="Sistem_Branch_1[]" type="checkbox" value="I1-2" class="required">
											<label for="A4_I_1_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Layanan kepada mahasiswa dan dosen lamban</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_1_3" name="Sistem_Branch_1[]" type="checkbox" value="I1-3" class="required">
											<label for="A4_I_1_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Beban kerja personil tinggi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_1_4" name="Sistem_Branch_1[]" type="checkbox" value="I1-4" class="required">
											<label for="A4_I_1_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sering terjadi inefisiensi</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-I2">
							<div class="step" data-state="A4-K">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Sudah memiliki sistem, Tetapi</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_1" name="Sistem_Branch_2[]" type="checkbox" value="I2-1" class="required">
											<label for="A4_I_2_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Ditinggal lari vendor, sehingga sistem tidak ter-update dengan kebutuhan saat ini</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_2" name="Sistem_Branch_2[]" type="checkbox" value="I2-2" class="required">
											<label for="A4_I_2_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem tidak jalan lancar</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_3" name="Sistem_Branch_2[]" type="checkbox" value="I2-3" class="required">
											<label for="A4_I_2_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Overload, Sering mendapat komplain oleh Mahasiswa terutama ketika KRS</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_4" name="Sistem_Branch_2[]" type="checkbox" value="I2-4" class="required">
											<label for="A4_I_2_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak sesuai Proses Bisnis di Kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_5" name="Sistem_Branch_2[]" type="checkbox" value="I2-5" class="required">
											<label for="A4_I_2_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem vulnerable (pernah diakses oleh orang tidak berkepentingan)</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_6" name="Sistem_Branch_2[]" type="checkbox" value="I2-6" class="required">
											<label for="A4_I_2_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Belum terintegrasi dengan Neo Feeder & Sister, sehingga perlu 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_7" name="Sistem_Branch_2[]" type="checkbox" value="I2-7" class="required">
											<label for="A4_I_2_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Antar sistem belum terintegrasi, sehingga masih perlu input 2 kali untuk hal tertentu.</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_I_2_8" name="Sistem_Branch_2[]" type="radio" value="I2-8" class="required">
											<label for="A4_I_2_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem berjalan dengan baik dan tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-K">
							<div class="step" data-state="A4-D">
								<div class="question_title">
									<h3>Kontrol Aturan Akademik</h3>
									<p>Kami kesulitan karena Kontrol Aturan Akademik sering kelolosan, seperti...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_K_1" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K1" class="required">
											<label for="A4_K_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Banyak celah yang dimanfaatin oknum mahasiswa</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_K_2" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K2" class="required">
											<label for="A4_K_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mahasiswa bisa lulus meskipun belum melunasi tagihan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_K_3" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K3" class="required">
											<label for="A4_K_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Mengalami banyak kerugian akibat kontrol yang kurang ketat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_K_4" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K4" class="required">
											<label for="A4_K_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem yang ada belum sesuai dengan aturan yang kami terapkan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_K_5" name="Kontrol_Aturan_Akademik[]" type="radio" value="K5" class="required">
											<label for="A4_K_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-D">
							<div class="step" data-state="A4-F">
								<div class="question_title">
									<h3>Problem PDDIKTI</h3>
									<p>Dalam proses pelaporan PDDIKTI, saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_1" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D1" class="required">
											<label for="A4_D_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Data yang dibutuhkan untuk pelaporan tidak tersedia di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_2" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D2" class="required">
											<label for="A4_D_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Waktu terbatas untuk entry data</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_3" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D3" class="required">
											<label for="A4_D_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya memiliki sistem tapi belum terintegrasi dengan PDDIKTI Neo Feeder, sehingga saya masih perlu melakukan 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_4" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D4" class="required">
											<label for="A4_D_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya operator baru yang kelimpahan tugas untuk mengurus data PDDIKTI yang kacau sebelumnya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_5" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D5" class="required">
											<label for="A4_D_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak data yang salah yang memerlukan persetujuan perubahan data dari pusat dan prosesnya lama</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_6" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D6" class="required">
											<label for="A4_D_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya sedang alih bentuk/merger dengan kampus lain, sehingga proses pelaporannya terhambat menunggu proses administrasi & migrasi data dari pusat</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_7" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D7" class="required">
											<label for="A4_D_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan terlalu banyak</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_8" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D8" class="required">
											<label for="A4_D_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak tahu apa itu PDDIKTI</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_D_9" name="PROBLEM_PDDIKTI[]" type="radio" value="D9" class="required">
											<label for="A4_D_9"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-F">
							<div class="step" data-state="A4-H">
								<div class="question_title">
									<h3>Problem SDM</h3>
									<p>Di kampus saya SDM masih sangat kurang, seperti?</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_F_1" name="SDM[]" type="checkbox" value="F1" class="required">
											<label for="A4_F_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Tidak Punya Team IT, sehingga kami kesulitan untuk bisa menerapkan / mengembangkan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_F_2" name="SDM[]" type="checkbox" value="F2" class="required">
											<label for="A4_F_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan banyak yang tidak termasuk dalam jobdesc IT</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_F_3" name="SDM[]" type="checkbox" value="F3" class="required">
											<label for="A4_F_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kapasitas & kualitas dosen kurang, sehingga kami mencari tenaga pengajar dari kalangan guru atau praktisi yang belum bisa memenuhi syarat untuk mendapatkan NIDN</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_F_4" name="SDM[]" type="checkbox" value="F4" class="required">
											<label for="A4_F_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Operator sering lembur tanpa tunjangan yang pantas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_F_5" name="SDM[]" type="checkbox" value="F5" class="required">
											<label for="A4_F_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Personil yang bisa melatih masih sangat terbatas</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_F_6" name="SDM[]" type="checkbox" value="F6" class="required">
											<label for="A4_F_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Butuh E-Learning agar dosen bisa mendapatkan kemudahan dan fleksibilitas waktu mengajar</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_F_7" name="SDM[]" type="radio" value="F6" class="required">
											<label for="A4_F_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM dikampus saya sudah sangat mumpuni dan saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-H">
							<div class="step" data-state="A4-G">
								<div class="question_title">
									<h3>Infrastruktur</h3>
									<p>Kondisi Infrastrukur di Perguruan Tinggi saya...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_H_1" name="Infrastruktur[]" type="checkbox" value="H1" class="required">
											<label for="A4_H_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Listrik sering padam sehingga menggangu layanan</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_H_2" name="Infrastruktur[]" type="checkbox" value="H2" class="required">
											<label for="A4_H_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengadaan server hanya berupa rencana</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_H_3" name="Infrastruktur[]" type="checkbox" value="H3" class="required">
											<label for="A4_H_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pimpinan/yayasan kurang mendukung dan belum terbuka dengan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_H_4" name="Infrastruktur[]" type="checkbox" value="H4" class="required">
											<label for="A4_H_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Server overcapacity / overload</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_H_5" name="Infrastruktur[]" type="checkbox" value="H5" class="required">
											<label for="A4_H_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Jangkauan internet susah & lambat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_H_6" name="Infrastruktur[]" type="checkbox" value="H6" class="required">
											<label for="A4_H_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada internet di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_H_7" name="Infrastruktur[]" type="radio" value="H7" class="required">
											<label for="A4_H_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-G">
							<div class="step" data-state="A4-E">
								<div class="question_title">
									<h3>Yayasan</h3>
									<p>Yayasan kampus kami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_G_1" name="yayasan[]" type="checkbox" value="G1" class="required">
											<label for="A4_G_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Yayasan masih kolot dan belum ter-update dalam teknologi terkini</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_G_2" name="yayasan[]" type="checkbox" value="G2" class="required">
											<label for="A4_G_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengelola Kampus masih menggangap sistem adalah biaya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_G_3" name="yayasan[]" type="checkbox" value="G3" class="required">
											<label for="A4_G_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem dikerjakan oleh teman, keluarga dari pengelola kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_G_4" name="yayasan[]" type="checkbox" value="G4" class="required">
											<label for="A4_G_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Trauma akibat kegagalan pengembangan terdahulu</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_G_5" name="yayasan[]" type="checkbox" value="G5" class="required">
											<label for="A4_G_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada dana / anggaran pengembangan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_G_6" name="yayasan[]" type="checkbox" value="G6" class="required">
											<label for="A4_G_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sangat mendukung adanya sistem dalam pengembangan dan penerapannya, serta bersedia mengeluarkan angggaran untuk sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-E">
							<div class="step" data-state="A4-J">
								<div class="question_title">
									<h3>Finansial</h3>
									<p>Terkait permasalahan keuangan, kampus saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_E_1" name="Finansial[]" type="checkbox" value="E1" class="required">
											<label for="A4_E_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Mahasiswa sering telat / tidak membayar SPP tepat waktu</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_E_2" name="Finansial[]" type="checkbox" value="E2" class="required">
											<label for="A4_E_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Jumlah mahasiswa sedikit sehingga penerimaan dana minimum</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_E_3" name="Finansial[]" type="checkbox" value="E3" class="required">
											<label for="A4_E_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Kontrol keuangan masih lemah, banyak inefisiensi terjadi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_E_4" name="Finansial[]" type="checkbox" value="E4" class="required">
											<label for="A4_E_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus kami takut mahasiswa lari bila di beri aturan ketat tentang pembayaran maka Sistem pembayaran / cicilan dibuat terlalu bebas atau fleksibel</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_E_5" name="Finansial[]" type="checkbox" value="E5" class="required">
											<label for="A4_E_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Yayasan seringkali kurang percaya dengan pengelolaan dana di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_E_6" name="Finansial[]" type="checkbox" value="E6" class="required">
											<label for="A4_E_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Peminat mahasiswa berkurang secara signifikan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_E_7" name="Finansial[]" type="radio" value="E7" class="required">
											<label for="A4_E_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A4-J">
							<div class="step" data-state="end">
								<div class="question_title">
									<h3>Akreditasi</h3>
									<p>Kampus kami saat ini mau menghadapi Akreditasi dalam waktu dekat, dan kami saat ini...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_J_1" name="Akreditasi[]" type="checkbox" value="J1" class="required">
											<label for="A4_J_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Sulit menyiapkan persyaratan Akreditasi karena dokumen dan data pendukung berceceran</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_J_2" name="Akreditasi[]" type="checkbox" value="J2" class="required">
											<label for="A4_J_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Masih kesulitan menelusuri sumber data dan informasi terkait</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_J_3" name="Akreditasi[]" type="checkbox" value="J3" class="required">
											<label for="A4_J_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Dalam proses berusaha memenuhi kriteria Akreditasi dengan tepat</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A4_J_4" name="Akreditasi[]" type="checkbox" value="J4" class="required">
											<label for="A4_J_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM yang paham dan bisa menyiapkan terbatas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_J_5" name="Akreditasi[]" type="checkbox" value="J5" class="required">
											<label for="A4_J_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Perlu menyiapkan Poin+ agar bisa naik Akreditasi dengan cepat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_J_6" name="Akreditasi[]" type="checkbox" value="J6" class="required">
											<label for="A4_J_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Menerapkan SPMI sehingga perlu ada sistem yang membantu menerapkan PDCA & PPEPP (penetapan, pelaksanaan, evaluasi , pengendalian & peningkatan)</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A4_J_7" name="Akreditasi[]" type="radio" value="J7" class="required">
											<label for="A4_J_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- A4 ============================== -->
						<div class="branch" id="A5">
							<div class="step" data-state="A5-M">
								<div class="question_title">
									<h3>Akreditasi</h3>
									<p>Kampus kami saat ini mau menghadapi Akreditasi dalam waktu dekat, dan kami saat ini...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_J_1" name="Akreditasi[]" type="checkbox" value="J1" class="required">
											<label for="A5_J_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Sulit menyiapkan persyaratan Akreditasi karena dokumen dan data pendukung berceceran</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_J_2" name="Akreditasi[]" type="checkbox" value="J2" class="required">
											<label for="A5_J_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Masih kesulitan menelusuri sumber data dan informasi terkait</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_J_3" name="Akreditasi[]" type="checkbox" value="J3" class="required">
											<label for="A5_J_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Dalam proses berusaha memenuhi kriteria Akreditasi dengan tepat</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_J_4" name="Akreditasi[]" type="checkbox" value="J4" class="required">
											<label for="A5_J_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM yang paham dan bisa menyiapkan terbatas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_J_5" name="Akreditasi[]" type="checkbox" value="J5" class="required">
											<label for="A5_J_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Perlu menyiapkan Poin+ agar bisa naik Akreditasi dengan cepat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_J_6" name="Akreditasi[]" type="checkbox" value="J6" class="required">
											<label for="A5_J_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Menerapkan SPMI sehingga perlu ada sistem yang membantu menerapkan PDCA & PPEPP (penetapan, pelaksanaan, evaluasi , pengendalian & peningkatan)</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_J_7" name="Akreditasi[]" type="radio" value="J7" class="required">
											<label for="A5_J_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-M">
							<div class="step" data-state="A5-K">
								<div class="question_title">
									<h3>General Problem</h3>
									<p>Untuk menghadapi kampus merdeka dan kemajuan teknologi saat ini, saya masih kesulitan...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_M_1" name="General_Problem[]" type="checkbox" value="M1" class="required">
											<label for="A5_M_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Menerapkan tracert study yang cocok dan strategi bagaimana membuat alumni mau mengupdate datanya</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_M_2" name="General_Problem[]" type="checkbox" value="M2" class="required">
											<label for="A5_M_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mempertahannya jumlah peminat dan alumni agar tidak menurun secara signifikan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_M_3" name="General_Problem[]" type="checkbox" value="M3" class="required">
											<label for="A5_M_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak dosen sudah tua sehingga susah untuk menerapkan e-learning</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_M_4" name="General_Problem[]" type="checkbox" value="M4" class="required">
											<label for="A5_M_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya menggunakan Moodle sebagai fasilitas e-learning dan tidak terintegrasi dengan siakad, sehingga dosen masih perlu entry 2 kali</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_M_5" name="General_Problem[]" type="radio" value="M5" class="required">
											<label for="A5_M_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-K">
							<div class="step" data-state="A5-D">
								<div class="question_title">
									<h3>Kontrol Aturan Akademik</h3>
									<p>Kami kesulitan karena Kontrol Aturan Akademik sering kelolosan, seperti...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_K_1" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K1" class="required">
											<label for="A5_K_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Banyak celah yang dimanfaatin oknum mahasiswa</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_K_2" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K2" class="required">
											<label for="A5_K_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mahasiswa bisa lulus meskipun belum melunasi tagihan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_K_3" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K3" class="required">
											<label for="A5_K_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Mengalami banyak kerugian akibat kontrol yang kurang ketat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_K_4" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K4" class="required">
											<label for="A5_K_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem yang ada belum sesuai dengan aturan yang kami terapkan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_K_5" name="Kontrol_Aturan_Akademik[]" type="radio" value="K5" class="required">
											<label for="A5_K_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-D">
							<div class="step" data-state="A5-I">
								<div class="question_title">
									<h3>Problem PDDIKTI</h3>
									<p>Dalam proses pelaporan PDDIKTI, saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_1" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D1" class="required">
											<label for="A5_D_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Data yang dibutuhkan untuk pelaporan tidak tersedia di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_2" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D2" class="required">
											<label for="A5_D_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Waktu terbatas untuk entry data</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_3" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D3" class="required">
											<label for="A5_D_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya memiliki sistem tapi belum terintegrasi dengan PDDIKTI Neo Feeder, sehingga saya masih perlu melakukan 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_4" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D4" class="required">
											<label for="A5_D_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya operator baru yang kelimpahan tugas untuk mengurus data PDDIKTI yang kacau sebelumnya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_5" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D5" class="required">
											<label for="A5_D_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak data yang salah yang memerlukan persetujuan perubahan data dari pusat dan prosesnya lama</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_6" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D6" class="required">
											<label for="A5_D_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya sedang alih bentuk/merger dengan kampus lain, sehingga proses pelaporannya terhambat menunggu proses administrasi & migrasi data dari pusat</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_7" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D7" class="required">
											<label for="A5_D_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan terlalu banyak</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_8" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D8" class="required">
											<label for="A5_D_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak tahu apa itu PDDIKTI</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_D_9" name="PROBLEM_PDDIKTI[]" type="radio" value="D9" class="required">
											<label for="A5_D_9"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-I">
							<div class="step" data-state="branchtype">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Kondisi sistem di Perguruan Tinggi saya...</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_1" name="Sistem" type="radio" value="A5-I1" class="required">
											<label for="A5_I_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Belum memiliki sistem sama sekali</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2" name="Sistem" type="radio" value="A5-I2" class="required">
											<label for="A5_I_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sudah memiliki sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-I1">
							<div class="step" data-state="A5-F">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Belum memiliki sistem sama sekali, jadi...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_1_1" name="Sistem_Branch_1[]" type="checkbox" value="I1-1" class="required">
											<label for="A5_I_1_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Semua operasional masih manual</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_1_2" name="Sistem_Branch_1[]" type="checkbox" value="I1-2" class="required">
											<label for="A5_I_1_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Layanan kepada mahasiswa dan dosen lamban</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_1_3" name="Sistem_Branch_1[]" type="checkbox" value="I1-3" class="required">
											<label for="A5_I_1_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Beban kerja personil tinggi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_1_4" name="Sistem_Branch_1[]" type="checkbox" value="I1-4" class="required">
											<label for="A5_I_1_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sering terjadi inefisiensi</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-I2">
							<div class="step" data-state="A5-F">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Sudah memiliki sistem, Tetapi</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_1" name="Sistem_Branch_2[]" type="checkbox" value="I2-1" class="required">
											<label for="A5_I_2_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Ditinggal lari vendor, sehingga sistem tidak ter-update dengan kebutuhan saat ini</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_2" name="Sistem_Branch_2[]" type="checkbox" value="I2-2" class="required">
											<label for="A5_I_2_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem tidak jalan lancar</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_3" name="Sistem_Branch_2[]" type="checkbox" value="I2-3" class="required">
											<label for="A5_I_2_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Overload, Sering mendapat komplain oleh Mahasiswa terutama ketika KRS</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_4" name="Sistem_Branch_2[]" type="checkbox" value="I2-4" class="required">
											<label for="A5_I_2_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak sesuai Proses Bisnis di Kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_5" name="Sistem_Branch_2[]" type="checkbox" value="I2-5" class="required">
											<label for="A5_I_2_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem vulnerable (pernah diakses oleh orang tidak berkepentingan)</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_6" name="Sistem_Branch_2[]" type="checkbox" value="I2-6" class="required">
											<label for="A5_I_2_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Belum terintegrasi dengan Neo Feeder & Sister, sehingga perlu 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_7" name="Sistem_Branch_2[]" type="checkbox" value="I2-7" class="required">
											<label for="A5_I_2_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Antar sistem belum terintegrasi, sehingga masih perlu input 2 kali untuk hal tertentu.</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_I_2_8" name="Sistem_Branch_2[]" type="radio" value="I2-8" class="required">
											<label for="A5_I_2_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem berjalan dengan baik dan tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-F">
							<div class="step" data-state="A5-H">
								<div class="question_title">
									<h3>Problem SDM</h3>
									<p>Di kampus saya SDM masih sangat kurang, seperti?</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_F_1" name="SDM[]" type="checkbox" value="F1" class="required">
											<label for="A5_F_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Tidak Punya Team IT, sehingga kami kesulitan untuk bisa menerapkan / mengembangkan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_F_2" name="SDM[]" type="checkbox" value="F2" class="required">
											<label for="A5_F_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan banyak yang tidak termasuk dalam jobdesc IT</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_F_3" name="SDM[]" type="checkbox" value="F3" class="required">
											<label for="A5_F_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kapasitas & kualitas dosen kurang, sehingga kami mencari tenaga pengajar dari kalangan guru atau praktisi yang belum bisa memenuhi syarat untuk mendapatkan NIDN</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_F_4" name="SDM[]" type="checkbox" value="F4" class="required">
											<label for="A5_F_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Operator sering lembur tanpa tunjangan yang pantas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_F_5" name="SDM[]" type="checkbox" value="F5" class="required">
											<label for="A5_F_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Personil yang bisa melatih masih sangat terbatas</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_F_6" name="SDM[]" type="checkbox" value="F6" class="required">
											<label for="A5_F_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Butuh E-Learning agar dosen bisa mendapatkan kemudahan dan fleksibilitas waktu mengajar</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_F_7" name="SDM[]" type="radio" value="F6" class="required">
											<label for="A5_F_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM dikampus saya sudah sangat mumpuni dan saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-H">
							<div class="step" data-state="A5-G">
								<div class="question_title">
									<h3>Infrastruktur</h3>
									<p>Kondisi Infrastrukur di Perguruan Tinggi saya...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_H_1" name="Infrastruktur[]" type="checkbox" value="H1" class="required">
											<label for="A5_H_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Listrik sering padam sehingga menggangu layanan</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_H_2" name="Infrastruktur[]" type="checkbox" value="H2" class="required">
											<label for="A5_H_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengadaan server hanya berupa rencana</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_H_3" name="Infrastruktur[]" type="checkbox" value="H3" class="required">
											<label for="A5_H_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pimpinan/yayasan kurang mendukung dan belum terbuka dengan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_H_4" name="Infrastruktur[]" type="checkbox" value="H4" class="required">
											<label for="A5_H_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Server overcapacity / overload</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_H_5" name="Infrastruktur[]" type="checkbox" value="H5" class="required">
											<label for="A5_H_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Jangkauan internet susah & lambat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_H_6" name="Infrastruktur[]" type="checkbox" value="H6" class="required">
											<label for="A5_H_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada internet di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_H_7" name="Infrastruktur[]" type="radio" value="H7" class="required">
											<label for="A5_H_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-G">
							<div class="step" data-state="A5-E">
								<div class="question_title">
									<h3>Yayasan</h3>
									<p>Yayasan kampus kami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_G_1" name="yayasan[]" type="checkbox" value="G1" class="required">
											<label for="A5_G_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Yayasan masih kolot dan belum ter-update dalam teknologi terkini</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_G_2" name="yayasan[]" type="checkbox" value="G2" class="required">
											<label for="A5_G_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengelola Kampus masih menggangap sistem adalah biaya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_G_3" name="yayasan[]" type="checkbox" value="G3" class="required">
											<label for="A5_G_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem dikerjakan oleh teman, keluarga dari pengelola kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_G_4" name="yayasan[]" type="checkbox" value="G4" class="required">
											<label for="A5_G_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Trauma akibat kegagalan pengembangan terdahulu</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_G_5" name="yayasan[]" type="checkbox" value="G5" class="required">
											<label for="A5_G_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada dana / anggaran pengembangan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_G_6" name="yayasan[]" type="checkbox" value="G6" class="required">
											<label for="A5_G_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sangat mendukung adanya sistem dalam pengembangan dan penerapannya, serta bersedia mengeluarkan angggaran untuk sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-E">
							<div class="step" data-state="A5-L">
								<div class="question_title">
									<h3>Finansial</h3>
									<p>Terkait permasalahan keuangan, kampus saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_E_1" name="Finansial[]" type="checkbox" value="E1" class="required">
											<label for="A5_E_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Mahasiswa sering telat / tidak membayar SPP tepat waktu</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_E_2" name="Finansial[]" type="checkbox" value="E2" class="required">
											<label for="A5_E_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Jumlah mahasiswa sedikit sehingga penerimaan dana minimum</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_E_3" name="Finansial[]" type="checkbox" value="E3" class="required">
											<label for="A5_E_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Kontrol keuangan masih lemah, banyak inefisiensi terjadi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_E_4" name="Finansial[]" type="checkbox" value="E4" class="required">
											<label for="A5_E_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus kami takut mahasiswa lari bila di beri aturan ketat tentang pembayaran maka Sistem pembayaran / cicilan dibuat terlalu bebas atau fleksibel</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_E_5" name="Finansial[]" type="checkbox" value="E5" class="required">
											<label for="A5_E_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Yayasan seringkali kurang percaya dengan pengelolaan dana di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_E_6" name="Finansial[]" type="checkbox" value="E6" class="required">
											<label for="A5_E_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Peminat mahasiswa berkurang secara signifikan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A5_E_7" name="Finansial[]" type="radio" value="E7" class="required">
											<label for="A5_E_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A5-L">
							<div class="step" data-state="end">
								<div class="question_title">
									<h3>Kapasitas Perguruan Tinggi</h3>
									<p>Kapasitas Perguruan Tinggi kami saat ini..</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_L_1" name="Kapasitas" type="radio" value="L1" class="required">
											<label for="A5_L_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Memiliki keterbatasan tempat kuliah</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A5_L_2" name="Kapasitas" type="radio" value="L2" class="required">
											<label for="A5_L_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Saya tidak mengalami kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- A5 ============================== -->
						<div class="branch" id="A6">
							<div class="step" data-state="A6-E">
								<div class="question_title">
									<h3>General Problem</h3>
									<p>Untuk menghadapi kampus merdeka dan kemajuan teknologi saat ini, saya masih kesulitan...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_M_1" name="General_Problem[]" type="checkbox" value="M1" class="required">
											<label for="A6_M_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Menerapkan tracert study yang cocok dan strategi bagaimana membuat alumni mau mengupdate datanya</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_M_2" name="General_Problem[]" type="checkbox" value="M2" class="required">
											<label for="A6_M_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mempertahannya jumlah peminat dan alumni agar tidak menurun secara signifikan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_M_3" name="General_Problem[]" type="checkbox" value="M3" class="required">
											<label for="A6_M_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak dosen sudah tua sehingga susah untuk menerapkan e-learning</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_M_4" name="General_Problem[]" type="checkbox" value="M4" class="required">
											<label for="A6_M_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya menggunakan Moodle sebagai fasilitas e-learning dan tidak terintegrasi dengan siakad, sehingga dosen masih perlu entry 2 kali</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_M_5" name="General_Problem[]" type="radio" value="M5" class="required">
											<label for="A6_M_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-E">
							<div class="step" data-state="A6-K">
								<div class="question_title">
									<h3>Finansial</h3>
									<p>Terkait permasalahan keuangan, kampus saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_E_1" name="Finansial[]" type="checkbox" value="E1" class="required">
											<label for="A6_E_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Mahasiswa sering telat / tidak membayar SPP tepat waktu</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_E_2" name="Finansial[]" type="checkbox" value="E2" class="required">
											<label for="A6_E_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Jumlah mahasiswa sedikit sehingga penerimaan dana minimum</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_E_3" name="Finansial[]" type="checkbox" value="E3" class="required">
											<label for="A6_E_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Kontrol keuangan masih lemah, banyak inefisiensi terjadi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_E_4" name="Finansial[]" type="checkbox" value="E4" class="required">
											<label for="A6_E_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus kami takut mahasiswa lari bila di beri aturan ketat tentang pembayaran maka Sistem pembayaran / cicilan dibuat terlalu bebas atau fleksibel</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_E_5" name="Finansial[]" type="checkbox" value="E5" class="required">
											<label for="A6_E_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Yayasan seringkali kurang percaya dengan pengelolaan dana di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_E_6" name="Finansial[]" type="checkbox" value="E6" class="required">
											<label for="A6_E_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Peminat mahasiswa berkurang secara signifikan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_E_7" name="Finansial[]" type="radio" value="E7" class="required">
											<label for="A6_E_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-K">
							<div class="step" data-state="A6-J">
								<div class="question_title">
									<h3>Kontrol Aturan Akademik</h3>
									<p>Kami kesulitan karena Kontrol Aturan Akademik sering kelolosan, seperti...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_K_1" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K1" class="required">
											<label for="A6_K_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Banyak celah yang dimanfaatin oknum mahasiswa</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_K_2" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K2" class="required">
											<label for="A6_K_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Mahasiswa bisa lulus meskipun belum melunasi tagihan</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_K_3" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K3" class="required">
											<label for="A6_K_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Mengalami banyak kerugian akibat kontrol yang kurang ketat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_K_4" name="Kontrol_Aturan_Akademik[]" type="checkbox" value="K4" class="required">
											<label for="A6_K_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem yang ada belum sesuai dengan aturan yang kami terapkan</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_K_5" name="Kontrol_Aturan_Akademik[]" type="radio" value="K5" class="required">
											<label for="A6_K_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-J">
							<div class="step" data-state="A6-F">
								<div class="question_title">
									<h3>Akreditasi</h3>
									<p>Kampus kami saat ini mau menghadapi Akreditasi dalam waktu dekat, dan kami saat ini...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_J_1" name="Akreditasi[]" type="checkbox" value="J1" class="required">
											<label for="A6_J_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Sulit menyiapkan persyaratan Akreditasi karena dokumen dan data pendukung berceceran</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_J_2" name="Akreditasi[]" type="checkbox" value="J2" class="required">
											<label for="A6_J_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Masih kesulitan menelusuri sumber data dan informasi terkait</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_J_3" name="Akreditasi[]" type="checkbox" value="J3" class="required">
											<label for="A6_J_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Dalam proses berusaha memenuhi kriteria Akreditasi dengan tepat</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_J_4" name="Akreditasi[]" type="checkbox" value="J4" class="required">
											<label for="A6_J_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM yang paham dan bisa menyiapkan terbatas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_J_5" name="Akreditasi[]" type="checkbox" value="J5" class="required">
											<label for="A6_J_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Perlu menyiapkan Poin+ agar bisa naik Akreditasi dengan cepat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_J_6" name="Akreditasi[]" type="checkbox" value="J6" class="required">
											<label for="A6_J_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Menerapkan SPMI sehingga perlu ada sistem yang membantu menerapkan PDCA & PPEPP (penetapan, pelaksanaan, evaluasi , pengendalian & peningkatan)</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_J_7" name="Akreditasi[]" type="radio" value="J7" class="required">
											<label for="A6_J_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-F">
							<div class="step" data-state="A6-D">
								<div class="question_title">
									<h3>Problem SDM</h3>
									<p>Di kampus saya SDM masih sangat kurang, seperti?</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_F_1" name="SDM[]" type="checkbox" value="F1" class="required">
											<label for="A6_F_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Tidak Punya Team IT, sehingga kami kesulitan untuk bisa menerapkan / mengembangkan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_F_2" name="SDM[]" type="checkbox" value="F2" class="required">
											<label for="A6_F_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan banyak yang tidak termasuk dalam jobdesc IT</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_F_3" name="SDM[]" type="checkbox" value="F3" class="required">
											<label for="A6_F_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kapasitas & kualitas dosen kurang, sehingga kami mencari tenaga pengajar dari kalangan guru atau praktisi yang belum bisa memenuhi syarat untuk mendapatkan NIDN</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_F_4" name="SDM[]" type="checkbox" value="F4" class="required">
											<label for="A6_F_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Operator sering lembur tanpa tunjangan yang pantas</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_F_5" name="SDM[]" type="checkbox" value="F5" class="required">
											<label for="A6_F_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Personil yang bisa melatih masih sangat terbatas</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_F_6" name="SDM[]" type="checkbox" value="F6" class="required">
											<label for="A6_F_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Butuh E-Learning agar dosen bisa mendapatkan kemudahan dan fleksibilitas waktu mengajar</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_F_7" name="SDM[]" type="radio" value="F6" class="required">
											<label for="A6_F_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM dikampus saya sudah sangat mumpuni dan saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-D">
							<div class="step" data-state="A6-I">
								<div class="question_title">
									<h3>Problem PDDIKTI</h3>
									<p>Dalam proses pelaporan PDDIKTI, saya mengalami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_1" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D1" class="required">
											<label for="A6_D_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Data yang dibutuhkan untuk pelaporan tidak tersedia di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_2" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D2" class="required">
											<label for="A6_D_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Waktu terbatas untuk entry data</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_3" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D3" class="required">
											<label for="A6_D_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya memiliki sistem tapi belum terintegrasi dengan PDDIKTI Neo Feeder, sehingga saya masih perlu melakukan 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_4" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D4" class="required">
											<label for="A6_D_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya operator baru yang kelimpahan tugas untuk mengurus data PDDIKTI yang kacau sebelumnya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_5" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D5" class="required">
											<label for="A6_D_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Banyak data yang salah yang memerlukan persetujuan perubahan data dari pusat dan prosesnya lama</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_6" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D6" class="required">
											<label for="A6_D_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Kampus saya sedang alih bentuk/merger dengan kampus lain, sehingga proses pelaporannya terhambat menunggu proses administrasi & migrasi data dari pusat</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_7" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D7" class="required">
											<label for="A6_D_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>SDM IT kurang dan perkerjaan terlalu banyak</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_8" name="PROBLEM_PDDIKTI[]" type="checkbox" value="D8" class="required">
											<label for="A6_D_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak tahu apa itu PDDIKTI</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_D_9" name="PROBLEM_PDDIKTI[]" type="radio" value="D9" class="required">
											<label for="A6_D_9"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-I">
							<div class="step" data-state="branchtype">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Kondisi sistem di Perguruan Tinggi saya...</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_1" name="Sistem" type="radio" value="A6-I1" class="required">
											<label for="A6_I_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Belum memiliki sistem sama sekali</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2" name="Sistem" type="radio" value="A6-I2" class="required">
											<label for="A6_I_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sudah memiliki sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-I1">
							<div class="step" data-state="A6-H">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Belum memiliki sistem sama sekali, jadi...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_1_1" name="Sistem_Branch_1[]" type="checkbox" value="I1-1" class="required">
											<label for="A6_I_1_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Semua operasional masih manual</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_1_2" name="Sistem_Branch_1[]" type="checkbox" value="I1-2" class="required">
											<label for="A6_I_1_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Layanan kepada mahasiswa dan dosen lamban</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_1_3" name="Sistem_Branch_1[]" type="checkbox" value="I1-3" class="required">
											<label for="A6_I_1_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Beban kerja personil tinggi</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_1_4" name="Sistem_Branch_1[]" type="checkbox" value="I1-4" class="required">
											<label for="A6_I_1_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sering terjadi inefisiensi</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-I2">
							<div class="step" data-state="A6-H">
								<div class="question_title">
									<h3>Sistem</h3>
									<p>Sudah memiliki sistem, Tetapi</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_1" name="Sistem_Branch_2[]" type="checkbox" value="I2-1" class="required">
											<label for="A6_I_2_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Ditinggal lari vendor, sehingga sistem tidak ter-update dengan kebutuhan saat ini</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_2" name="Sistem_Branch_2[]" type="checkbox" value="I2-2" class="required">
											<label for="A6_I_2_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem tidak jalan lancar</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_3" name="Sistem_Branch_2[]" type="checkbox" value="I2-3" class="required">
											<label for="A6_I_2_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Overload, Sering mendapat komplain oleh Mahasiswa terutama ketika KRS</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_4" name="Sistem_Branch_2[]" type="checkbox" value="I2-4" class="required">
											<label for="A6_I_2_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak sesuai Proses Bisnis di Kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_5" name="Sistem_Branch_2[]" type="checkbox" value="I2-5" class="required">
											<label for="A6_I_2_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem vulnerable (pernah diakses oleh orang tidak berkepentingan)</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_6" name="Sistem_Branch_2[]" type="checkbox" value="I2-6" class="required">
											<label for="A6_I_2_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Belum terintegrasi dengan Neo Feeder & Sister, sehingga perlu 2 kali entry data</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_7" name="Sistem_Branch_2[]" type="checkbox" value="I2-7" class="required">
											<label for="A6_I_2_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Antar sistem belum terintegrasi, sehingga masih perlu input 2 kali untuk hal tertentu.</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_I_2_8" name="Sistem_Branch_2[]" type="radio" value="I2-8" class="required">
											<label for="A6_I_2_8"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sistem berjalan dengan baik dan tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-H">
							<div class="step" data-state="A6-G">
								<div class="question_title">
									<h3>Infrastruktur</h3>
									<p>Kondisi Infrastrukur di Perguruan Tinggi saya...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_H_1" name="Infrastruktur[]" type="checkbox" value="H1" class="required">
											<label for="A6_H_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Listrik sering padam sehingga menggangu layanan</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_H_2" name="Infrastruktur[]" type="checkbox" value="H2" class="required">
											<label for="A6_H_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengadaan server hanya berupa rencana</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_H_3" name="Infrastruktur[]" type="checkbox" value="H3" class="required">
											<label for="A6_H_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pimpinan/yayasan kurang mendukung dan belum terbuka dengan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_H_4" name="Infrastruktur[]" type="checkbox" value="H4" class="required">
											<label for="A6_H_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Server overcapacity / overload</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_H_5" name="Infrastruktur[]" type="checkbox" value="H5" class="required">
											<label for="A6_H_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Jangkauan internet susah & lambat</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_H_6" name="Infrastruktur[]" type="checkbox" value="H6" class="required">
											<label for="A6_H_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada internet di kampus</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_H_7" name="Infrastruktur[]" type="radio" value="H7" class="required">
											<label for="A6_H_7"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Saya tidak mengalami kendala-kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-G">
							<div class="step" data-state="A6-L">
								<div class="question_title">
									<h3>Yayasan</h3>
									<p>Yayasan kampus kami...</p>
									<p style="color: red; font-size: 12px;">(Anda dapat memilih lebih dari 1)</p>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_G_1" name="yayasan[]" type="checkbox" value="G1" class="required">
											<label for="A6_G_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Yayasan masih kolot dan belum ter-update dalam teknologi terkini</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_G_2" name="yayasan[]" type="checkbox" value="G2" class="required">
											<label for="A6_G_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Pengelola Kampus masih menggangap sistem adalah biaya</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_G_3" name="yayasan[]" type="checkbox" value="G3" class="required">
											<label for="A6_G_3"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Sistem dikerjakan oleh teman, keluarga dari pengelola kampus</b></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_G_4" name="yayasan[]" type="checkbox" value="G4" class="required">
											<label for="A6_G_4"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Trauma akibat kegagalan pengembangan terdahulu</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_G_5" name="yayasan[]" type="checkbox" value="G5" class="required">
											<label for="A6_G_5"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Tidak ada dana / anggaran pengembangan sistem</b></label>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="item">
											<input id="A6_G_6" name="yayasan[]" type="checkbox" value="G6" class="required">
											<label for="A6_G_6"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/design_icon_1.svg" alt=""><b>Sangat mendukung adanya sistem dalam pengembangan dan penerapannya, serta bersedia mengeluarkan angggaran untuk sistem</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="branch" id="A6-L">
							<div class="step" data-state="end">
								<div class="question_title">
									<h3>Kapasitas Perguruan Tinggi</h3>
									<p>Kapasitas Perguruan Tinggi kami saat ini..</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_L_1" name="Kapasitas" type="radio" value="L1" class="required">
											<label for="A6_L_1"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/seo_icon_1.svg" alt=""><b>Memiliki keterbatasan tempat kuliah</b></label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="item">
											<input id="A6_L_2" name="Kapasitas" type="radio" value="L2" class="required">
											<label for="A6_L_2"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz/web_development_icon_1.svg" alt=""><b>Saya tidak mengalami kendala tersebut</b></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- A6 ============================== -->
						<div class="submit step" id="end">
							<div class="question_title">
								<h3>Pertanyaan Terakhir</h3>
								<p>Berapakah Budget yang anda bisa keluarkan tiap bulan?</p>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-5">
									<div class="box_general">
										<div class="rounded_slider">
											<div id="budget_slider" style="margin: 0 auto 20px;"></div>
											<p>Pastikan jumlah sesuai dengan yang anda inginkan</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="bottom-wizard">
						<button type="button" name="backward" class="backward">Backward </button>
						<button type="button" name="forward" class="forward">Forward</button>
						<button type="submit" name="process" class="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</main>
	<!-- /main -->
	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->
	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->
	<!-- COMMON SCRIPTS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/new.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/jquery-2.2.4.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/jquery-ui-1.8.22.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/common_scripts.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/menu.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/main.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/quiz/wizard_func_multiple_branch.js"></script>
	<script>
		$("#progressbar").progressbar();

		var progressLabel = $(".progress-label");
		$("#wizard_container").wizard({
			afterSelect: function(event, state) {
				$("#progressbar").progressbar("value", (state.stepsComplete / 16) * 100);
				progressLabel.text("Progress(" + state.stepsComplete + "/16)");
			}
		});
	</script>
</body>
<section id="sevima-footer">
	<div class="container">
		<div class="row">
			<div class="col-6 col-md footer-item">
				<p class="menu-title">Solusi</p>
				<ul class="footer-menu">
					<li><a href="https://siakadcloud.com/"> <img src="<?php echo get_template_directory_uri(); ?>/img/favicon/siakad.png" alt=""> siAkadCloud</a></li>
					<li><a href="https://gofeedercloud.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/favicon/gofeeder.png" alt="">GoFeederCloud</a>
					</li>
					<!-- <li><a href="https://financecloud.id/"><img
                src="<?php echo get_template_directory_uri(); ?>/img/favicon/finance.png" alt="">Finance Cloud</a>
          </li> -->
					<li><a href="http://Akreditasicloud.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/favicon/Akreditasi.png" alt="">Akreditasi
							Cloud</a></li>
					<li><a href="http://profeeder.sevima.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/favicon/profeeder.png" alt="">ProFeeder</a></li>
					<li><a href="https://sevimapay.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/favicon/sevimapay.png" alt="">SevimaPay</a></li>
					<li><a href="https://edlink.id/"><img src="<?php echo get_template_directory_uri(); ?>/img/favicon/edlink.png" alt="">EdLink</a></li>
					<li><a href="https://maukuliah.id/"><img src="<?php echo get_template_directory_uri(); ?>/img/favicon/maukuliah.png" alt="">MauKuliah</a></li>
				</ul>
			</div>
			<div class="col-6 col-md footer-item">
				<p class="menu-title">Tentang SEVIMA</p>
				<ul class="footer-menu">
					<li><a href="https://sevima.com/tentang-sevima/">Tentang Kami</a></li>
					<li><a href="https://sevima.com/karir/">Job Vacancy</a></li>
					<li><a href="https://sevima.com/portofolio/">Portofolio</a></li>
					<li><a href="https://sevima.com/berita/">Berita</a></li>
				</ul>
			</div>
			<div class="col-6 col-md footer-item">
				<p class="menu-title">Komunitas</p>
				<ul class="footer-menu">
					<li><a href="https://sevima.com/internship/">Internship</a></li>
					<li><a href="https://sevima.com/sales-partner/">Sales Partner</a></li>
					<li><a href="https://sevima.com/portofolio/">Mitra SEVIMA</a></li>
				</ul>

				<p class="menu-title mt-5">Karir & Rekrutmen</p>
				<table>
					<tr>
						<td><i class='uil uil-phone'></i></td>
						<td class="konten">+62 31 8722719</td>
					</tr>
					<tr>
						<td><i class='uil uil-envelope'></i></td>
						<td class="konten">careers@sevima.co.id</td>
					</tr>
				</table>
			</div>

			<div class="col-6 col-md footer-item">
				<p class="menu-title">Kontak</p>
				<table>
					<tr>
						<td><i class='uil uil-location-point'></i></td>
						<td class="konten">Jl. Medokan Asri Tengah MA 2 Q-16, Surabaya
							<br>Indonesia
						</td>
					</tr>
					<tr>
						<td><i class='uil uil-phone'></i></td>
						<td class="konten">+62 31 8722719</td>
					</tr>
					<tr>
						<td><i class='uil uil-whatsapp'></i></td>
						<td class="konten">+62 822-6161-0404</td>
					</tr>
					<tr>
						<td><i class='uil uil-envelope'></i></td>
						<td class="konten email">support@sevima.com</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>
<section id="bottom-footer" style="background: #D9DEED">
	<div class="container">
		<div class="row media-sosial p-3">
			<div class="kanan">
				© 2018 SEVIMA. All Right Reserved
			</div>
			<div class="kiri">
				<div class="list-media-sosial">
					<a href="https://www.youtube.com/channel/UCDcvqZbhsdaDCnmUURz54uw">
						<img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="">
					</a>
					<a href="https://www.instagram.com/sevima_official/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="">
					</a>
					<a href="https://www.facebook.com/SentraVidyaUtama">
						<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="">
					</a>
					<a href="https://twitter.com/sevima_official/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="">
					</a>
					<a href="https://www.linkedin.com/company/sevima">
						<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

</html>