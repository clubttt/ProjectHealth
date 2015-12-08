<?php
/**
 * Created by PhpStorm.
 * User: 56023_000
 * Date: 06-Dec-15
 * Time: 22:31
 */?>

@extends('app')
@section('content')
    <div class="col-md-12 col-sm-4">
        <div class="panel panel-default">

            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Edit</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($patients as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td> <a href="{{\URL::to('app/show/admin/'.$user->id)}}">Edit </a></td>
            </tr>


        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop

@section('javascript')
@stop
