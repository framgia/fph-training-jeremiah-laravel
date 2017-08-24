@extends('layouts.main')

@section('content')
    <h1>Edit Role</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="cool-form">
                {{ Form::open(['route' => ['role.update', $role->id], 'method' => 'put', 'class' => 'form-horizontal']) }}
                    <div class="form-group">
                        {{ Form::label('rolename', 'Role Name', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text('rolename', $role->role_name, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rolecontent', 'Content', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text('rolecontent', $role->role_description, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    {{ Form::submit('Submit', ['class' => 'col-md-offset-2 btn btn-lg btn-success']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection