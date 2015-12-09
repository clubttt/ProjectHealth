
@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#status" data-toggle="tab">Status</a>
                        </li>
                        <li class=""><a href="#sug" data-toggle="tab">Suggesion</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="status">
                            <br>
                            <br>
                            <center><?php echo $level;?></center>
                        </div>
                        <div class="tab-pane fade" id="sug">
                            <h3>Suggesion</h3>
                            <p> {{ $user->patient->suggestion }} </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop

@section('javascript')
@stop
