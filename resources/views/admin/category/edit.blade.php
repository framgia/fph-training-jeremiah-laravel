@extends('layouts.main')

@section('content')
    <h1>Edit Category</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="cool-form">
                {{ Form::open(['route' => ['category.update', $category->id], 'method' => 'put', 'class' => 'form-horizontal']) }}
                    <div class="form-group">
                        {{ Form::label('name', 'Category Name', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text('name', $category->name, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('content', 'Content', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::textarea('content', $category->content, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    {{ Form::submit('Submit', ['class' => 'col-md-offset-2 btn btn-lg btn-success']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection