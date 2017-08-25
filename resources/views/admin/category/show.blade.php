@extends('layouts.main')

@section('content')
    <h1>Create Category</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="cool-form">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Category Name</label>
                        <div class="col-md-8">
                            <input type="text" value="{{ $category->name }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-md-2 control-label">Content</label>
                        <div class="col-md-8">
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control" readonly>{{ $category->content }}</textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-success btn-lg">Edit</a>
                 <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn red white-text btn-lg">Delete</a>
            </div>
        </div>
        
    </div>
@endsection