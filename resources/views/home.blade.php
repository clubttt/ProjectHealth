@extends('app')

@section('content')
		<div class="panel panel-default">
			<div class="panel-heading">หน้าหลัก</div>

			<div class="panel-body">
					 {{Auth::user()->name}}!

					@if(Auth::user()->isAdmin(Auth::user()->name))
						<br />admin
					@endif
			</div>
		</div>
@endsection
