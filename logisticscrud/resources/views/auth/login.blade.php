@extends('layout')

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
				<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Login</h1>
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
                <h4>Login</h4>
                <hr>
                <form method="POST" action="{{route('auth.check')}}">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="email" class="form-label mt-4">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="u_email" value=""/>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label mt-4">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="u_pwd" value=""/>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                    <br>
                    <a href="{{route('auth.registration')}}">New User? Register Here.</a>
                </form>
            </div>
        </div>
    </div>
@endsection