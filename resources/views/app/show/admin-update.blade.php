<?php
/**
 * Created by PhpStorm.
 * User: 56023_000
 * Date: 07-Dec-15
 * Time: 01:53
 */?>
@extends('app')
@section('content')
    <div class="col-lg-12">
        <form action="{{$user->id}}/update" role="form" method="post">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="col-md-6 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label>Name : {{$user->name}}</label>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label for="fbs">FBS </label>
                            <input type="text" class="form-control" id="fbs" name="fbs"
                                   value=" {{$user->patient->fbs}}">
                        </div>

                        <div class="form-group">
                            <label for="bp">BP </label>
                            <input type="text" class="form-control" id="bp" name="bp" placeholder="Ex 120/100"
                                   value="{{$user->patient->bp}}">
                            <span style="color:red" class="small">Must enter two values. Ex 80/90</span>
                        </div>

                        <div class="form-group">


                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                    <label>Suggesion :</label>
                                    </div>
                                    <label name="suggestion">{{$user->patient->suggestion}}</label>
                                    <input type="hidden" name="syssuggestion" value="1">
                            </div>
                        </div>
                        <a href="{{\URL::to('app/show/admin')}}">
                            <button type="button" class="btn btn-danger">Cancle</button>
                        </a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-md-6 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    MemberStatus
                </div>
                <div class="panel-body">

                    <center> <?php echo $level;?></center>
                </div>
            </div>
        </div>
    </div>





@stop

@section('javascript')
@stop
