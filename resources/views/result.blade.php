@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Currency Calculator - Result Screen</div>
                <div class="col-md-12 container">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-6">
                        <h1>{{$result}}</h1>
                    </div>
                    <div class="col-md-4 pull-right">
                        <h1><button class="btn btn-success" onclick="history.go(-1);">Back </button></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
