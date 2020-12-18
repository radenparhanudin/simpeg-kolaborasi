<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel py-5">
		<div class="pull-left image">
			<img src="{{ asset('public/layouts/') }}/dist/img/user-icon.png" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p>{{ Auth::user()->getRoleDescription()[0] }}</p>
			<p><small><i class="fa fa-circle text-success"></i> Online</small></p>
		</div>
	</div>
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MAIN NAVIGATION</li>
		{{-- <li class="active treeview menu-open">
			<a href="{{ asset('public/layouts/') }}/#">
				<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ asset('public/layouts/') }}/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
				<li class="active"><a href="{{ asset('public/layouts/') }}/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
			</ul>
		</li> --}}
	</ul>
</section>
<!-- /.sidebar -->