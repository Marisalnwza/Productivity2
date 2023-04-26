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
.dataTables_wrapper .dataTables_paginate .paginate_button {
	padding: 0;
    margin-left: 2px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
	background: transparent !important;
	border: 1px solid transparent !important;
}
#example thead{
	background-color: #045491 !important;
	color:#fff !important;
}
.div-add{
	text-align: right !important;
}
</style>
@endsection
@section('content')
<div class="card">
	<div class="card-body">
		<div class="card-title">
			<h3 class="mb-0"> <i class="bx bx-file"></i> Memory Record Sheet</h3>
		</div>
		<hr>
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
		<div class="row card-title ">
			<div class="col-md-6"><h3 class="mb-0"> <i class="bx bx-detail"></i> History</h3></div>
			<div class="col-md-6 div-add">
				<button type="button" class="btn btn-primary px-5 " data-bs-toggle="modal" data-bs-target="#exampleFullScreenModal"><i class="bx bx-book-add mr-1"></i>Add</button>
			</div>
		</div>
		<hr>
		<div class="row">
			<table id="example" class="display" width="100%"></table>
		</div>
		<!--end row-->
	</div>
</div>
<div class="modal fade" id="exampleFullScreenModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="bx bx-file"></i> ใบบันทึกกระบวนการทำงานสำหรับผลิตภัณฑ์ Memory (ATP LOT : F60577867.04)</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="card border-top border-0 border-4 border-primary">
					<div class="card-body p-3">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-info-circle me-1 font-22 text-primary"></i>
							</div>
							<h5 class="mb-0 text-primary">ATP LOT Info</h5>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-3">
								<label for="inputFirstName" class="form-label">Product rank</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Run sheet</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Monitor</label>
								</div>
								
							</div>
							<div class="col-md-3">
								<label for="inputLastName" class="form-label">Full Tray</label>
								<input type="text" class="form-control" id="inputLastName">
							</div>
							<div class="col-md-3">
								<label for="inputEmail" class="form-label">In Tray</label>
								<input type="text" class="form-control" id="inputEmail">
							</div>
							<div class="col-md-3">
								<label for="inputPassword" class="form-label">Fraction Tray</label>
								<input type="text" class="form-control" id="inputPassword">
							</div>
							
							<div class="col-md-3">
								<label for="inputFirstName" class="form-label">Pb Free</label>
								<div class="form-check">
									<input class="form-check-input" type="radio" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Yes</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">No</label>
								</div>
								
							</div>
							<div class="col-md-3">
								<label for="inputPassword" class="form-label">WIP</label>
								<input type="text" class="form-control" id="inputPassword">
							</div>
							<div class="col-md-3">
								<label for="inputPassword" class="form-label">Tray No.</label>
								<input type="text" class="form-control" id="inputPassword">
							</div>
							<div class="col-md-3">
								<label for="inputCity" class="form-label">Marking on device</label>
								<input type="text" class="form-control" id="inputCity">
							</div>
						</form>
					</div>
				</div>
				<div class="card border-top border-0 border-4 border-primary">
					<div class="card-body p-3">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-info-circle me-1 font-22 text-primary"></i>
							</div>
							<h5 class="mb-0 text-primary">Machine info</h5>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-2">
								<label for="inputPassword" class="form-label">Tester No.</label>
								<input type="text" class="form-control" id="inputPassword">
							</div>
							<div class="col-md-5">
								<label for="inputLastName" class="form-label">Meas. Temp. Station 1</label>
								<input type="text" class="form-control" id="inputLastName">
							</div>
							<div class="col-md-5">
								<label for="inputEmail" class="form-label">Meas. Temp. Station 2</label>
								<input type="text" class="form-control" id="inputEmail">
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">Handler</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Station 1</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Station 2</label>
								</div>
								
							</div>
						
							<div class="col-md-5">
								<label for="inputPassword" class="form-label">HIFIX Board No. Station 1</label>
								<input type="text" class="form-control" id="inputPassword" value="RCF6AF-TF-">
							</div>
							<div class="col-md-5">
								<label for="inputPassword" class="form-label">HIFIX Board No. Station 2</label>
								<input type="text" class="form-control" id="inputPassword" value="RCF6AF-TF-">
							</div>
						</form>
					</div>
				</div>
				<div class="card border-top border-0 border-4 border-primary">
					<div class="card-body p-3">
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 1</h5></div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" placeholder="Rank"></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td class="pd-5">
										<div class="row">
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="number" class="form-control" id="SNB1-HD1" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="number" class="form-control" id="SNB1-HD2" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="number" class="form-control" id="SNB1-AD" value="0" disabled>
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Test data(T1)</label>
												<input type="number" class="form-control" id="SNB1-TD">
											</div>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="number" class="form-control" id="SNA1-HD1" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="number" class="form-control" id="SNA1-HD2" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="number" class="form-control" id="SNA1-AD" value="0" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">Total Actual Sort</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-12">
												<label for="inputPassword" class="form-label">(Before + After)</label>
												<input type="number" class="form-control" id="SN1-TAS" value="0" disabled>
											</div>
										
										</div>
										</td>
									</tr>
								</tbody>
								</table>
							</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 2</h5></div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" placeholder="Rank"></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="number" class="form-control" id="SNB2-HD1" value="0">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="number" class="form-control" id="SNB2-HD2" value="0">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="number" class="form-control" id="SNB2-AD" value="0" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="number" class="form-control" id="SNA2-HD1" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="number" class="form-control" id="SNA2-HD2" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="number" class="form-control" id="SNA2-AD" value="0" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
								<div class="col-md-6">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th class="text-center bg-primary text-white">Total Actual Sort</th>
											</tr>
										</thead>
										<tbody>
										<tr>
											
											<td>
												<div class="row">
													<div class="col-md-12">
													<label for="inputPassword" class="form-label">(Before + After)</label>
													<input type="number" class="form-control" id="SN2-TAS" value="0" disabled>
												</div>
											
											</div>
											</td>
										</tr>
									</tbody>
									</table>
								</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 3</h5></div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" placeholder="Rank"></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="number" class="form-control" id="SNB3-HD1" value="0">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="number" class="form-control" id="SNB3-HD2" value="0">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="number" class="form-control" id="SNB3-AD" value="0" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="number" class="form-control" id="SNA3-HD1" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="number" class="form-control" id="SNA3-HD2" value="0">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="number" class="form-control" id="SNA3-AD" value="0" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
								<div class="col-md-6">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th class="text-center bg-primary text-white">Total Actual Sort</th>
											</tr>
										</thead>
										<tbody>
										<tr>
											
											<td>
												<div class="row">
													<div class="col-md-12">
													<label for="inputPassword" class="form-label">(Before + After)</label>
													<input type="number" class="form-control" id="SN3-TAS" value="0" disabled>
												</div>
											
											</div>
											</td>
										</tr>
									</tbody>
									</table>
								</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 4</h5></div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" placeholder="Rank"></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="text" class="form-control" id="inputPassword" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="text" class="form-control" id="inputPassword" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
								<div class="col-md-6">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th class="text-center bg-primary text-white">Total Actual Sort</th>
											</tr>
										</thead>
										<tbody>
										<tr>
											
											<td>
												<div class="row">
													<div class="col-md-12">
													<label for="inputPassword" class="form-label">(Before + After)</label>
													<input type="text" class="form-control" id="inputPassword" disabled>
												</div>
											
											</div>
											</td>
										</tr>
									</tbody>
									</table>
								</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 5</h5></div><div class="col-md-7"></div>
							<div class="col-md-2"><select class="form-select" aria-label="Default select example">
								<option selected="">Choose One</option>
								<option value="1">SPC</option>
								<option value="2">SELE</option>
							</select></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="text" class="form-control" id="inputPassword" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="text" class="form-control" id="inputPassword" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 6</h5> </div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" value="FC" disabled></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="text" class="form-control" id="inputPassword" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="text" class="form-control" id="inputPassword" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 7 </h5></div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" value="DC" disabled></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="text" class="form-control" id="inputPassword" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="text" class="form-control" id="inputPassword" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. 8</h5></div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" value="SPC" disabled></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="text" class="form-control" id="inputPassword" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="text" class="form-control" id="inputPassword" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
						</form>
						<hr>
						<div class="card-title d-flex align-items-center">
							<div class="col-md-3"><h5 class="mb-0 text-ingo">Sort No. R</h5></div><div class="col-md-7"></div><div class="col-md-2"><input type="text" class="form-control text-center" id="inputPassword" value="Retest" disabled></div>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-6">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center bg-primary text-white">Before retest confirm</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="row">
											<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST1)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Handler data(ST2)</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="col-md-4">
											<label for="inputPassword" class="form-label">Actual data</label>
											<input type="text" class="form-control" id="inputPassword" disabled>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center bg-primary text-white">After retest confirm</th>
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td>
											<div class="row">
												<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST1)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Handler data(ST2)</label>
												<input type="text" class="form-control" id="inputPassword">
											</div>
											<div class="col-md-4">
												<label for="inputPassword" class="form-label">Actual data</label>
												<input type="text" class="form-control" id="inputPassword" disabled>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								</table>
								</div>
						</form>
					</div>
				</div>
				<div class="card border-top border-0 border-4 border-primary">
					<div class="card-body p-3">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bx-info-circle me-1 font-22 text-primary"></i>
							</div>
							<h5 class="mb-0 text-primary">Machine Summary</h5>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-md-2">
								<label for="inputPassword" class="form-label">Tester No.</label>
								<input type="text" class="form-control" id="inputPassword">
							</div>
							<div class="col-md-5">
								<label for="inputLastName" class="form-label">Meas. Temp. Station 1</label>
								<input type="text" class="form-control" id="inputLastName">
							</div>
							<div class="col-md-5">
								<label for="inputEmail" class="form-label">Meas. Temp. Station 2</label>
								<input type="text" class="form-control" id="inputEmail">
							</div>
							<div class="col-md-2">
								<label for="inputFirstName" class="form-label">Handler</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Station 1</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Station 2</label>
								</div>
								
							</div>
						
							<div class="col-md-5">
								<label for="inputPassword" class="form-label">HIFIX Board No. Station 1</label>
								<input type="text" class="form-control" id="inputPassword" value="RCF6AF-TF-">
							</div>
							<div class="col-md-5">
								<label for="inputPassword" class="form-label">HIFIX Board No. Station 2</label>
								<input type="text" class="form-control" id="inputPassword" value="RCF6AF-TF-">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="module">
$("input").on("click",function(){
	$(this).select();
});
 $("input").on("keyup change",function(){
	var key = $(this).attr("id").split("-")[0];
	if(key.includes("SNB")||key.includes("SNA")){
	var a = parseInt($("#"+key+"-HD1").val());
	var b = parseInt($("#"+key+"-HD2").val());
	var c = a+b;
	$("#"+key+"-AD").val(c);
	var number = parseInt(key.match(/[^A-Z,^-]/g));
	if(number<=4){
		a = parseInt($("#SNB"+number+"-AD").val());
		b = parseInt($("#SNA"+number+"-AD").val());
		c = a+b;
		$("#SN"+number+"-TAS").val(c);
	}
	}
}); 

  $(function () {
	new PerfectScrollbar('.header-message-list');
	new PerfectScrollbar('.header-notifications-list');
	var dataSet = [
{"ID":"2670","OPE_STATUS":"WAIT_HANDLE","NO_ATP_LOT":"Y60306379.01","MARKING_NO":"","Tag_No":"A816","PROD_NAME":"ZL22865-XXXMBZ0MX","PKG_NAME":"P-SSOP30-56-0.65-ZK6-MC","NO_ATP_WORK_ORDER":"1940FZ008E","NO_WP_WORK_ORDER":"SFWG0D-0403B","CD_MODEL_SOURCE":"ML22865-AX","NUM_OK":"0","LOCATION_WIP":"RS","FLOW":"AP","NO_RACK":"","TAT":"30499.18","WIP_PC":"2987","PROCESS_CD":"RS-DB","PROCESS_FLOW":"RS--X030","STOCK_NAME":"","INPUT_TIME_ATP":"2019-09-06 11:51:55","CD_EQP":"","CD_HOLD_REASON":"","NO_QA_ACIDNT":"","CMNT":"","DT_HOLD":null,"DT_INFO_CHANGE":"2019-10-01 17:49:23","updated_at":"2023-03-24 11:18:10"},
{"ID":"2671","OPE_STATUS":"WAIT_HANDLE","NO_ATP_LOT":"Y60306379.01","MARKING_NO":"","Tag_No":"A816","PROD_NAME":"ZL22865-XXXMBZ0MX","PKG_NAME":"P-SSOP30-56-0.65-ZK6-MC","NO_ATP_WORK_ORDER":"1940FZ008E","NO_WP_WORK_ORDER":"SFWG0D-0403B","CD_MODEL_SOURCE":"ML22865-AX","NUM_OK":"0","LOCATION_WIP":"RS","FLOW":"AP","NO_RACK":"","TAT":"30499.18","WIP_PC":"2987","PROCESS_CD":"RS-DB","PROCESS_FLOW":"RS--X030","STOCK_NAME":"","INPUT_TIME_ATP":"2019-09-06 11:51:55","CD_EQP":"","CD_HOLD_REASON":"","NO_QA_ACIDNT":"","CMNT":"","DT_HOLD":null,"DT_INFO_CHANGE":"2019-10-01 17:49:23","updated_at":"2023-03-24 11:18:10"},
{"ID":"2672","OPE_STATUS":"WAIT_HANDLE","NO_ATP_LOT":"Y60306379.01","MARKING_NO":"","Tag_No":"A816","PROD_NAME":"ZL22865-XXXMBZ0MX","PKG_NAME":"P-SSOP30-56-0.65-ZK6-MC","NO_ATP_WORK_ORDER":"1940FZ008E","NO_WP_WORK_ORDER":"SFWG0D-0403B","CD_MODEL_SOURCE":"ML22865-AX","NUM_OK":"0","LOCATION_WIP":"RS","FLOW":"AP","NO_RACK":"","TAT":"30499.18","WIP_PC":"2987","PROCESS_CD":"RS-DB","PROCESS_FLOW":"RS--X030","STOCK_NAME":"","INPUT_TIME_ATP":"2019-09-06 11:51:55","CD_EQP":"","CD_HOLD_REASON":"","NO_QA_ACIDNT":"","CMNT":"","DT_HOLD":null,"DT_INFO_CHANGE":"2019-10-01 17:49:23","updated_at":"2023-03-24 11:18:10"},
{"ID":"2673","OPE_STATUS":"WAIT_HANDLE","NO_ATP_LOT":"Y60306379.01","MARKING_NO":"","Tag_No":"A816","PROD_NAME":"ZL22865-XXXMBZ0MX","PKG_NAME":"P-SSOP30-56-0.65-ZK6-MC","NO_ATP_WORK_ORDER":"1940FZ008E","NO_WP_WORK_ORDER":"SFWG0D-0403B","CD_MODEL_SOURCE":"ML22865-AX","NUM_OK":"0","LOCATION_WIP":"RS","FLOW":"AP","NO_RACK":"","TAT":"30499.18","WIP_PC":"2987","PROCESS_CD":"RS-DB","PROCESS_FLOW":"RS--X030","STOCK_NAME":"","INPUT_TIME_ATP":"2019-09-06 11:51:55","CD_EQP":"","CD_HOLD_REASON":"","NO_QA_ACIDNT":"","CMNT":"","DT_HOLD":null,"DT_INFO_CHANGE":"2019-10-01 17:49:23","updated_at":"2023-03-24 11:18:10"},
{"ID":"2674","OPE_STATUS":"WAIT_HANDLE","NO_ATP_LOT":"Y60306379.01","MARKING_NO":"","Tag_No":"A816","PROD_NAME":"ZL22865-XXXMBZ0MX","PKG_NAME":"P-SSOP30-56-0.65-ZK6-MC","NO_ATP_WORK_ORDER":"1940FZ008E","NO_WP_WORK_ORDER":"SFWG0D-0403B","CD_MODEL_SOURCE":"ML22865-AX","NUM_OK":"0","LOCATION_WIP":"RS","FLOW":"AP","NO_RACK":"","TAT":"30499.18","WIP_PC":"2987","PROCESS_CD":"RS-DB","PROCESS_FLOW":"RS--X030","STOCK_NAME":"","INPUT_TIME_ATP":"2019-09-06 11:51:55","CD_EQP":"","CD_HOLD_REASON":"","NO_QA_ACIDNT":"","CMNT":"","DT_HOLD":null,"DT_INFO_CHANGE":"2019-10-01 17:49:23","updated_at":"2023-03-24 11:18:10"},
{"ID":"2675","OPE_STATUS":"WAIT_HANDLE","NO_ATP_LOT":"Y60306379.01","MARKING_NO":"","Tag_No":"A816","PROD_NAME":"ZL22865-XXXMBZ0MX","PKG_NAME":"P-SSOP30-56-0.65-ZK6-MC","NO_ATP_WORK_ORDER":"1940FZ008E","NO_WP_WORK_ORDER":"SFWG0D-0403B","CD_MODEL_SOURCE":"ML22865-AX","NUM_OK":"0","LOCATION_WIP":"RS","FLOW":"AP","NO_RACK":"","TAT":"30499.18","WIP_PC":"2987","PROCESS_CD":"RS-DB","PROCESS_FLOW":"RS--X030","STOCK_NAME":"","INPUT_TIME_ATP":"2019-09-06 11:51:55","CD_EQP":"","CD_HOLD_REASON":"","NO_QA_ACIDNT":"","CMNT":"","DT_HOLD":null,"DT_INFO_CHANGE":"2019-10-01 17:49:23","updated_at":"2023-03-24 11:18:10"},
];
 
$(document).ready(function () {
	var myModal = new bootstrap.Modal(document.getElementById("exampleFullScreenModal"), {});
	myModal.show();
    $('#example').DataTable({
        data: dataSet,
		bFilter: false,
		bLengthChange: false,
		pageLength: 5,
		columns: [
            { title: 'Doc V.', data: 'ID', width: "100",className: "text-center"},
            { title: 'ATP LOT', data: 'NO_ATP_LOT',className: "text-center"},
			{ title: 'ATP WORK ORDER', data: 'NO_ATP_WORK_ORDER',className: "text-center"},
            { title: 'Product Name', data: 'PROD_NAME',className: "text-center"},
			{ title: 'Package Name', data: 'PKG_NAME',className: "text-center"},
            { title: 'Tag No.', data: 'Tag_No',className: "text-center"},
			{ title: 'WIP', data: 'WIP_PC',className: "text-center"},
            { title: 'Action',
            	mData: null,
                bSortable: false,
               	mRender: function (o) { 
					return "<div class=\"dt-buttons btn-group\"><button class=\"btn btn-outline-secondary buttons-copy buttons-html5\" tabindex=\"0\" aria-controls=\"example2\" type=\"button\"><span>Edit</span></button><button class=\"btn btn-outline-secondary buttons-copy buttons-html5\" tabindex=\"0\" aria-controls=\"example2\" type=\"button\"><span>Del</span></button></div>";
					//return '<a href=#/' + o[0] + '>' + 'Edit' + '</a>'; 
				}
				,className: "text-center"
			},
        ],

        /*columns: [
            { title: 'Name' },
            { title: 'Position' },
            { title: 'Office' },
            { title: 'Extn.' },
            { title: 'Start date' },
            { title: 'Salary' },{
				title: 'Action',
                "mData": null,
                "bSortable": false,
               "mRender": function (o) { 
					return '<a href=#/' + o[0] + '>' + 'Edit' + '</a>'; 
				}
            }
        ],*/
    });
});
  });
</script>
@endsection