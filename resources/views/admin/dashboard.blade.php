@extends('admin.layout')
@section('title')
Dashboard
@endsection
@section('content')

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
			
		<!-- //market-->
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3>Welcome {{ Session::get('adminname')}}  !!!</h3>
									
								</header>
								
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		
@endsection