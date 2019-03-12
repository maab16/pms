@include('admin.layouts.header')
<main>
        
        @include('admin.layouts.left-sidebar')
        <!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
		    <!-- ============================================================== -->
		    <!-- Bread crumb and right sidebar toggle -->
		    <!-- ============================================================== -->
		    <div class="page-breadcrumb border-bottom">
		        <div class="row">
		            <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
		                <h5 class="font-medium text-uppercase mb-0">Profile</h5>
		            </div>
		            <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
		                <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
		                    {{ breadcrumbs() }}
		                </nav>
		                
		            </div>
		        </div>
		    </div>
		    <!-- ============================================================== -->
		    <!-- End Bread crumb and right sidebar toggle -->
		    <!-- ============================================================== -->
        
        	@yield('content')
    	</div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        
</main>

@include('admin.layouts.footer')