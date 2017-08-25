@extends('layouts.main')

@section('content')
    <h1>Word List</h1>

    <div class="panel card blue"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>Word</td>
                                <td>Category</td>
                                <td>Answer</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($words as $word)
    	                       <tr>
                                   <td>{{ $word->id }}</td>
                                   <td>{{ $word->content }}</td>
                                   <td>{{ $word->category->name }}</td>
                                   <td>{{ $word->answers->word }}</td>
                                   <td>
                                       <a href="{{ route('word.edit', ['id' => $word->id]) }}" class="btn btn-link"><i class="glyphicon glyphicon-pencil"></i></a>
                                        {{-- form --}}
                                        {{ Form::open(array('route' => ['word.destroy', $word->id])) }}
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
            <a href="{{ route('word.create') }}" class="btn btn-lg btn-success pull-right">Add Word</a>
        </div>
    </div>
@endsection
