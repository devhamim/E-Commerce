<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobick.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Oct 2023 17:29:21 GMT -->
<head>

    <!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="" >
	<meta name="keywords" content="admin dashboard, admin template, analytics, bootstrap, bootstrap 5, bootstrap 5 admin template, job board admin, job portal admin, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend">
	<meta name="description" content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice.">
	<meta property="og:title" content="Jobick : Job Admin Dashboard Bootstrap 5 Template + FrontEnd">
	<meta property="og:description" content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice." >
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title -->
	<title>Jobick : Job Admin Dashboard Bootstrap 5 Template + FrontEnd</title>

	<!-- Favicon icon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('backend') }}/images/favicon.png">

	<!-- All StyleSheet -->
	<link href="{{ asset('backend') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{ asset('backend') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

	<!-- Globle CSS -->
    <link href="{{ asset('backend') }}/css/style.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('backend.layouts.header')
        <!--**********************************
            Nav header end
        ***********************************-->

		@yield('content')



        <!--**********************************
            Footer start
        ***********************************-->
        @include('backend.layouts.footer')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	 <!-- Modal -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Job Title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Company Name<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Position<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Category<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>QA Analyst</option>
										   <option>IT Manager</option>
										    <option>Systems Analyst</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Type<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Part-Time</option>
										   <option>Full-Time</option>
										    <option>Freelancer</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">No. of Vancancy<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Experience<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>1 yr</option>
										  <option>2 Yr</option>
										   <option>3 Yr</option>
										    <option>4 Yr</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Posted Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Last Date To Apply<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Close Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Gender:<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Male</option>
										   <option>Female</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary Form<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary To<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter City:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter State:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Counter:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Education Level:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Education Level" aria-label="name">
									</div>
									<div class="col-xl-12 mb-4">
										  <label  class="form-label font-w600">Description:<span class="text-danger scale5 ms-2">*</span></label>
										  <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
									</div>
								</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	 <!-- Modal -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Company Name<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Position<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Category<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>QA Analyst</option>
										   <option>IT Manager</option>
										    <option>Systems Analyst</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Type<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Part-Time</option>
										   <option>Full-Time</option>
										    <option>Freelancer</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">No. of Vancancy<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Experience<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>1 yr</option>
										  <option>2 Yr</option>
										   <option>3 Yr</option>
										    <option>4 Yr</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Posted Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input size="16" type="date" value="2012-06-15" readonly class="form-control form_datetime solid">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Last Date To Apply<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input size="16" type="date" value="2012-06-15" readonly class="form-control form_datetime solid">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Close Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input size="16" type="date" value="2012-06-15" readonly class="form-control form_datetime solid">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Gender:<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Male</option>
										   <option>Female</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary Form<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary To<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter City:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter State:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Counter:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Education Level:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Education Level" aria-label="name">
									</div>
									<div class="col-xl-12 mb-4">
										  <label  class="form-label font-w600">Description:<span class="text-danger scale5 ms-2">*</span></label>
										  <textarea class="form-control solid" aria-label="With textarea"></textarea>
									</div>
								</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('backend') }}/vendor/global/global.min.js"></script>
<script src="{{ asset('backend') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Apex Chart -->
<script src="{{ asset('backend') }}/vendor/apexchart/apexchart.js"></script>
<script src="{{ asset('backend') }}/vendor/chartjs/chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('backend') }}/vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('backend') }}/js/dashboard/dashboard-1.js"></script>

<script src="vendor/owl-carousel/owl.carousel.js"></script>

<script src="{{ asset('backend') }}/js/custom.min.js"></script>
<script src="{{ asset('backend') }}/js/dlabnav-init.js"></script>
<script src="{{ asset('backend') }}/js/demo.js"></script>
<script src="{{ asset('backend') }}/js/styleSwitcher.js"></script>
<script>
function JobickCarousel()
	{

		/*  testimonial one function by = owl.carousel.js */
		jQuery('.front-view-slider').owlCarousel({
			loop:false,
			margin:30,
			nav:true,
			autoplaySpeed: 3000,
			navSpeed: 3000,
			autoWidth:true,
			paginationSpeed: 3000,
			slideSpeed: 3000,
			smartSpeed: 3000,
			autoplay: false,
			animateOut: 'fadeOut',
			dots:true,
			navText: ['', ''],
			responsive:{
				0:{
					items:1,

					margin:10
				},

				480:{
					items:1
				},

				767:{
					items:3
				},
				1750:{
					items:3
				}
			}
		})
	}

	jQuery(window).on('load',function(){
		setTimeout(function(){
			JobickCarousel();
		}, 1000);
	});
</script>
</body>

<!-- Mirrored from jobick.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Oct 2023 17:29:21 GMT -->
</html>
