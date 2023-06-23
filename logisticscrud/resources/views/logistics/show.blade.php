@extends('logistics.layout')

@section('content')
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
	<!--begin::Header-->
	<div id="kt_header" class="header">
		<!--begin::Container-->
		<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
				<!--begin::Heading-->
				<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Logistics</h1>
				<!--end::Heading-->
			</div>
			<!--end::Page title=-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Header-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            Shipping Details
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Shipping ID : {{ $shipping->shp_id }}</h5>
                        <p class="card-text">Order ID : {{ $shipping->shp_oid }}</p>
                        <p class="card-text">Shipping Date : {{ $shipping->shp_date }}</p>
                        <p class="card-text">Shipping Courier : {{ $shipping->shp_courier }}</p>
                        <p class="card-text">Shipping Status : @if($shipping->shp_status == 1)
                            <span class="badge badge-warning">Pending</span>
                        @elseif($shp->shp_status == 2)
                            <span class="badge badge-secondary">Packed</span>
                        @elseif($shp->shp_status == 3)
                            <span class="badge badge-info">Shipping</span>
                        @else
                            <span class="badge badge-success">Delivered</span>
                        @endif</p>
                        <p class="card-text">Comment : {{ $shipping->shp_comment }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection