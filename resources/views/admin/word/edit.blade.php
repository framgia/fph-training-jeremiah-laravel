@extends('layouts.main')

@section('content')
    <h1>Create Word</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="cool-form">
                {{ Form::open(['route' => ['word.update', $word->id], 'method' => 'put', 'class' => 'form-horizontal']) }}
                    <div class="form-group">
                        {{ Form::label('word', 'Word', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text('word', $word->content, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('answer', 'Answer', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::text('answer', $word->answers->word, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('category', 'Category', ['class' => 'col-md-2 control-label']) }}
                        <div class="col-md-8">
                            {{ Form::select('category', $categories, $word->category->id,['placeholder' => 'Select a Category...', 'class' => 'form-control']) }}
                        </div>
                    </div>
                    {{ Form::submit('Submit', ['class' => 'col-md-offset-2 btn btn-lg btn-success']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection