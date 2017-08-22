@extends('layouts.main')

@section('content')
    <h1>Roles</h1>

    <div class="panel card blue"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>Role Name</td>
                                <td>Role Description</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->role_name }}</td>
                                <td>{{ $role->role_description }}</td>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".myModal{{ $role->id }}">Assign</button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade myModal{{ $role->id }}" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Users List</h4>
                                                </div>
                                                <div class="modal-body">
                                                    {{ Form::open(['route' => 'assign.role']) }}
                                                        <input type="text" name="role_id" value="{{ $role->id }}">
                                                        <div>
                                                            <select name="users" class="form-control">
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                                @endforeach           
                                                            </select>
                                                        </div>
                                                        <div class="col-md-offset-10">
                                                            {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-success']) }}
                                                        </div>
                                                    {{ Form::close() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('roles.add') }}" class="btn btn-lg btn-success pull-right">Add Role</a>
        </div>
    </div>
@endsection
