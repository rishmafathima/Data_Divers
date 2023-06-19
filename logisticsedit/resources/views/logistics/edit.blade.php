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
                            Update Shipment
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('logistics/' .$shipping->shp_id)}}">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <div class="form-group">
                                <label for="soid" class="form-label mt-4">Order ID</label>
                                <input type="text" class="form-control" id="readOnlyInput" placeholder="Shipping Date" name="shp_date" value="{{$shipping->shp_oid}}"/>
                            </div>
                            <div class="form-group">
                                <label for="sdate" class="form-label mt-4">Shipping Date</label>
                                <input type="date" class="form-control" placeholder="Shipping Date" name="shp_date" value="{{$shipping->shp_date}}"/>
                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label mt-4">Status</label>
                                <select class="form-select" name="shp_status" id="exampleSelect1">
                                    <option value="1" {{ $shipping->shp_status == 1 ? 'selected' : '' }}>Pending</option>
                                    <option value="2" {{ $shipping->shp_status == 2 ? 'selected' : '' }}>Packed</option>
                                    <option value="3" {{ $shipping->shp_status == 3 ? 'selected' : '' }}>Shipped</option>
                                    <option value="4" {{ $shipping->shp_status == 4 ? 'selected' : '' }}>Delivered</option>
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop