<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/handout/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 09:40:07 GMT -->
<head>
        <!-- Required meta tags -->
        @include('front.layout.meta')
        @include('front.layout.styles')
        
		
		<title>{{ _settings('SITE_TITLE') }} - @yield('title')</title>
    </head>

    <body>

        <!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
        <!-- End Preloader Area --> 

        @include('front.layout.menu')

        @yield('content')

        @include('front.layout.footer')

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="bx bx-chevron-up"></i>
            <i class="bx bx-chevron-up"></i>
        </div>
        <!-- End Go Top Area -->
       @include('front.layout.scripts')
    </body>
</html>