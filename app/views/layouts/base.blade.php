<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- This statement is for EI8 -->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript">
            window.location = "https://qifinance.com/old-browser";
        </script>
	<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32932767-1', 'qifinance.com');
  ga('send', 'pageview');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments) id="[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    (window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-32932767-1', 'qifinance.com');
      ga('send', 'pageview');

			</script>

        <title>Welcome to Qi Finance</title>
        @section('head')
        	<link rel="icon" href="{{ asset('/images/skin/favicon.ico') }}" type="image/x-icon">
            <link rel="stylesheet" href="{{ url('css/app.css') }}" />
            <link rel="stylesheet" href="{{ url('css/animations.css') }}" />
            <link rel="stylesheet" href="{{ url('css/jquery-ui-1.10.4.custom.min.css') }}" />
            <script src="{{ url('bower_components/modernizr/modernizr.js') }}"></script>
	    <script src="{{ url('bower_components/jquery/jquery.js') }}"></script>
	    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	    <script src="{{ url('js/jquery.ui.touch-punch.min.js') }}"></script>
	    <script src="{{ url('js/form.js') }}"></script>
		<script src="{{ url('js/jquery.steps.min.js') }}"></script>
		<link rel="stylesheet" href="{{ url('css/jquery.steps.css') }}">
        @show
    </head>
    <body>
    	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		@include('layouts.menu')
		<div id="mainContent">
        	@yield('body')
        	@include('layouts.rewards-footer')
        	@include('layouts.pre-footer')
		</div>
        @include('layouts.footer')
        <script src="{{ url('bower_components/foundation/js/foundation.min.js') }}"></script>
        <script src="{{ url('bower_components/foundation/js/foundation/foundation.placeholder.js') }}"></script>
        <script src="{{ url('js/app.js') }}"></script>

        <!-- This JS link is for EI8 -->
        <script src="https://github.com/chuckcarpenter/REM-unit-polyfill"></script>
    </body>
</html>
