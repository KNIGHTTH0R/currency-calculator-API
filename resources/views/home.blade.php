@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Currency Calculator - Input Screen</div>
                <div class="panel-body col-md-12">
                    <form method="post" action="/calculate" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('base_currency') ? ' has-error' : '' }}">
                            <label for="base_currency" class="col-md-4 control-label">Base Currency:</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="base_currency" name="base_currency" type="text" placeholder="Base Currency" class="form-control input-md" value="{{ old('base_currency') }}">
                                </div>
                                @if ($errors->has('base_currency'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('base_currency') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('base_amount') ? ' has-error' : '' }}">
                            <label for="base_amount" class="col-md-4 control-label">Base Amount</label>

                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="base_amount" name="base_amount" type="text" placeholder="Base Amount" class="form-control input-md" value="{{ old('base_amount') }}">
                                </div>
                                @if ($errors->has('base_amount'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('base_amount') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('target_currency') ? ' has-error' : '' }}">
                            <label for="target_currency" class="col-md-4 control-label">Target Currency</label>

                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="target_currency" name="target_currency" type="text" placeholder="Target Currency" class="form-control input-md" value="{{ old('target_currency') }}">
                                </div>
                                @if ($errors->has('target_currency'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('target_currency') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-8 control-label"></label>
                            <div class="col-md-4 pull-right">
                                <button class="btn btn-success" value="submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
