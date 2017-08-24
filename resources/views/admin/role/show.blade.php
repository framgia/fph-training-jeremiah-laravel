@extends('layouts.main')

@section('content')
    <h1>Role</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="cool-form">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Role Name</label>
                        <div class="col-md-8">
                            <input type="text" value="{{ $role->role_name }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-md-2 control-label">Role Description</label>
                        <div class="col-md-8">
                            <input type="text" value="{{ $role->role_description }}" class="form-control" readonly>
                        </div>
                    </div>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{ route('role.edit', ['id' => $role->id]) }}" class="btn btn-success btn-lg">Edit</a>
                {{ Form::open(array('route' => ['role.destroy', $role->id])) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::button('Delete', array('type' => 'submit', 'class' => 'btn red white-text btn-lg')) }}
                {{ Form::close() }}
            </div>
        </div>
        
    </div>
@endsection