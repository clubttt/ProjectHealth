@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-12 col-sm-1">
					<div class="panel panel-default">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#status" data-toggle="tab">Status</a>
								</li>
								<li class=""><a href="#sug" data-toggle="tab">Suggesion</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in " id="status">
									<div class="center-block" style="border-radius: 250px; -moz-border-radius: 250px;
                                     -webkit-border-radius: 250px; width: 500px; height:
                                      500px; background: green; border: solid black 1px;">&nbsp;
									</div>
									<center>
										<br><br><h3>Status :</h3>
									</center>
								</div>
								<div class="tab-pane fade" id="sug">
									<h2>test suggesion</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
