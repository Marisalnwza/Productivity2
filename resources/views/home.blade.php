@extends('master')
@section('style')
<style>
.form-control {
	font-size: 1.25rem !important;
}
#LotNO{
	font-size: 3rem !important;
}
.sw-theme-arrows>.nav .nav-link.active {
    color: #fff!important;
    border-color: yellow !important;
    background: yellow !important;
	color: black !important;
}
.sw-theme-arrows>.nav .nav-link.active:after{
	border-left-color: yellow !important;
}

.sw-theme-arrows>.nav .nav-link.pass {
    color: #fff!important;
    border-color: #17a00e!important;
    background: #17a00e!important;
}
.sw-theme-arrows>.nav .nav-link.pass:after{
	border-left-color: #17a00e!important;
}
.form-label {
    font-size: 0.8rem !important;
    font-weight: bold !important;
}
</style>
@endsection
@section('content')
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<input type="text" class="form-control" id="LotNO" placeholder="Enter ATP LOT">
			</div>
		</div>
		<hr class="mt-4">
		<div class="card-title">
			<h3 class="mb-0"> <i class="bx bx-info-circle"></i> ATP LOT Information</h3>
		</div>
		<hr>
		<div class="row mt-4">
			<div id="smartwizard" class="sw sw-justified sw-theme-arrows">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link inactive pass ">	<strong>Step 1</strong> 
							<br>Burn-in</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive pass">	<strong>Step 2</strong> 
							<br>Logic</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive active">	<strong>Step 3</strong> 
							<br>Memory</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive">	<strong>Step 4</strong> 
							<br>Combine</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive">	<strong>Step 5</strong> 
							<br>FT BE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive">	<strong>Step 6</strong> 
						<br>Visualize</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive">	<strong>Step 7</strong> 
							<br>Bake</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive">	<strong>Step 8</strong> 
							<br>Label</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive">	<strong>Step 9</strong> 
							<br>Packing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link inactive">	<strong>Step 10</strong> 
							<br>Shipping</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">ATP LOT NO.</label>
				<input type="text" class="form-control" id="validationDefault01" value="F60577867.04" disabled>
			</div>
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">WORK ORDER NO.</label>
				<input type="text" class="form-control" id="validationDefault01" value="2310F0471E" disabled>
			</div>
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">Marking No.</label>
				<input type="text" class="form-control" id="validationDefault01" value="309A716" disabled>
			</div>
			<div class="col-md-3">
				<label for="validationDefault01" class="form-label">Product Name</label>
				<input type="text" class="form-control" id="validationDefault01" value="ML86247TBZ0AX" disabled>
			</div>
			<div class="col-md-3">
				<label for="validationDefault01" class="form-label">WORK ORDER NO.</label>
				<input type="text" class="form-control" id="validationDefault01" value="P-TQFP128-1414-0.40-Z6K6-MC" disabled>
			</div>
		</div>
		<div class="row mt-4">
			
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">Tag No.</label>
				<input type="text" class="form-control" id="validationDefault01" value="A128" disabled>
			</div>
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">WIP Total</label>
				<input type="text" class="form-control" id="validationDefault01" value="1777" disabled>
			</div>			
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">Process</label>
				<input type="text" class="form-control" id="validationDefault01" value="RT-GM" disabled>
			</div>
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">TAT</label>
				<input type="text" class="form-control" id="validationDefault01" value="15.79" disabled>
			</div>

			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">Hold Reason</label>
				<input type="text" class="form-control" id="validationDefault01" value="RV06" disabled>
			</div>
			<div class="col-md-2">
				<label for="validationDefault01" class="form-label">QA ACIDNT</label>
				<input type="text" class="form-control" id="validationDefault01" value="23MT-501165" disabled>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<label for="validationDefault01" class="form-label">Description</label>
				<input type="text" class="form-control" id="validationDefault01" value="Request input TC" disabled>
			</div>
		</div>
		<hr class="mt-4">
		<div class="card-title">
			<h3 class="mb-0"> <i class="bx bx-file"></i> Choose your record sheets.</h3>
		</div>
		<hr>
		<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 mt-4">
			<div class="col">
				<a href="">
				<div class="card radius-10 bg-danger bg-gradient">
					<div class="card-body">
						<div class="text-center">
							<div class="text-white ms-auto font-35"><i class="bx bx-file"></i>
							</div>
							<h4 class="my-1 text-white">Burn-in Record</h4>
							<p class="mb-0 text-white">ใบบันทึกในกระบวนการเบิร์นอิน</p>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col">
				<a href="">
				<div class="card radius-10 bg-primary bg-gradient">
					<div class="card-body">
						<div class="text-center">
							<div class="text-white ms-auto font-35"><i class="bx bx-file"></i>
							</div>
							<h4 class="my-1 text-white">Logic Record</h4>
							<p class="mb-0 text-white">ใบบันทึกกระบวนการทำงานแผนก FT Logic</p>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col">
				<a href="{{ url('memory') }}">
				<div class="card radius-10 bg-success bg-gradient">
					<div class="card-body">
						<div class="text-center">
							<div class="text-white ms-auto font-35"><i class="bx bx-file"></i>
							</div>
							<h4 class="my-1 text-white">Memory Record</h4>
							<p class="mb-0 text-white">ใบบันทึกกระบวนการทำงานสำหรับผลิตภัณฑ์ Memory</p>
						</div>
					</div>
				</div>
			</a>
			</div>
		</div>
		<!--end row-->
	</div>
</div>

@endsection
@section('script')
<script type="module">
  $(function () {
	new PerfectScrollbar('.header-message-list');
	new PerfectScrollbar('.header-notifications-list');
  });
</script>
@endsection