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
                            <form method="post" action="#">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">

                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Select User :<br></label>

                                                <div class="col-sm-8">
                                                    <select class="form-control">
                                                        <option value="1">test</option>
                                                    </select><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">FBS:<br></label>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="fbs"
                                                           placeholder="Input FBS"><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">BP:<br></label>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="bp"
                                                           placeholder="Input BP"><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Suggesion:</label>

                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="suggesion"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary"><span class="fa fa-check">Submit</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Member Status
                                    </div>
                                    <div class="panel-body">
                                        <div class="center-block" style="border-radius: 125px; -moz-border-radius: 125px;
                                     -webkit-border-radius: 125px; width: 250px; height:
                                      250px; background: green; border: solid black 1px;">&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
