@extends('layouts.main')

@section('content')
    <h1>Category list</h1>

    <div class="panel card blue"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>Category Name</td>
                                <td>Content</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td><a href="{{ route('category.show', ['id' => $category->id]) }}">{{ $category->name }}</a></td>
                                    <td>{{ $category->content }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-link"><i class="glyphicon glyphicon-pencil"></i></a>
                                        {{-- form --}}
                                        {{ Form::open(array('route' => ['category.destroy', $category->id])) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-link')) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('category.create') }}" class="btn btn-lg btn-success pull-right">Add Category</a>
        </div>
    </div>
@endsection
