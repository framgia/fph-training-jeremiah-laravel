@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="signin-form">
                <div>
                    {{ Form::open(['route' => 'register', 'class' => 'form-horizontal']) }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::text('name', old('name'), ['class' => 'form-control input-form', 'required' => true]) }}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{ Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), ['class' => 'form-control input-form', 'required' => true]) }}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{ Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => 'form-control input-form']) }}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['class' => 'form-control input-form', 'required' => true]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Register', ['class' => 'btn', 'id' => 'button-signin']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
