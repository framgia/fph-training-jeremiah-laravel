@extends('layouts.main')

@section('content')
    <h1>Dashboard</h1>
    
    <div class="jumbotron">
    <h1>Hello, User!</h1>
    <p>
        Welcome to E-Learning please click <strong>"Words"</strong> to check the words you have learned and if you 
      want to take a lesson please click <strong>"Lesson"</strong>
    </p>

    <p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Words</a>
        <a class="btn btn-success btn-lg" href="#" role="button">Lesson</a>
    </p>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="panel card red white-text">
            <p class="card-header">
                Words Learned
            </p>
            <span class="card-result">1000</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel card blue white-text">
            <p class="card-header">
                Number of Users
            </p>
            <span class="card-result">259</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel card green white-text">
            <p class="card-header">
                Number of Categories
            </p>
            <span class="card-result">35</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                Your Followers
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>
                                <img src="/images/prof.png" width="50" height="50" class="img-circle"> Jeremiah Caballero
                            </td>

                            <td>
                                {{ link_to('#', 'Visit', ['class' => 'btn btn-default', 'role' => 'button']) }}
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                Activities
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td>You have Learned 100 words in Lesson "Basic 500"</td>
                            <td>2013/11/06  </td>
                        </tr>
                    @endfor
                    @for ($i = 0; $i < 3; $i++)
                        <tr>
                            <td>Inah San Juan have Learned 100 words in Lesson "Basic 500"</td>
                            <td>2013/11/06  </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
