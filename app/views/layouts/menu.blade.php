<!-- START NAV -->
<nav class="top-bar" data-topbar>
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="{{ url('/') }}"><img src="{{ asset('/images/skin/quidsin-finance-logo.jpg') }}"></a></h1>
	    </li>
	    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	    <ul class="right">
	      <li class="divider"></li>
	      <li><a href="{{ url('/personal-loans') }}">Personal</a></li>
	      <li><a href="{{ url('/mortgages') }}">Mortgage</a></li>
	      <li><a href="{{ url('/business-loans') }}">Business</a></li>
	      <li><a href="{{ url('/spread-the-cost') }}">Spread the Cost</a></li>
		  <!--<li><a href="{{ url('/november-competition') }}">Competitions</a></li>-->
	      <li class="hide"><a href="{{ url('/faqs') }}">FAQs</a></li>
	      <li><a href="{{ url('/contact') }}">Contact</a></li>
	      <li><a href="{{ url('#homeIntro') }}"><span style="color:#d93f51;">Rewards</span></a></li>
	    </ul>
	  </section>
</nav>
<!-- END NAV -->
