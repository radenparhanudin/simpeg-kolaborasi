<a href="{{ url('/') }}" class="logo">
	<span class="logo-mini"><b>SI</b>P</span>
	<span class="logo-lg"><b>SIMP</b>eg</span>
</a>
<nav class="navbar navbar-static-top">
	<a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropdown-toggle user" data-toggle="dropdown">
					<i class="fa fa-user-secret mr-2"></i>Super Administrator
					<span class="caret"></span>
				</a>
			    <ul class="dropdown-menu">
			      <li><a href="#"><i class="fa fa-user"></i>Profiles</a></li>
			      <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
			      <li>
			      	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
			      </li>

			    </ul>
			</li>
		</ul>
	</div>
</nav>