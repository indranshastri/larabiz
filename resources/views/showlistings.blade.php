@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$listing->name}} <a href="/listings" class="btn btn-default btn-xs pull-right">Back</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                   
                        <ul class="list-group">
                            <li class="list-group-item">Name : {{$listing->name}}</li>
                            <li class="list-group-item">Address : {{$listing->address}}</li>
                            <li class="list-group-item">Email : {{$listing->email}}</li>
                            <li class="list-group-item">Website : <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                            <li class="list-group-item">phoneno : {{$listing->phoneno}}</li>
                        </ul>
                       <hr>
                       <div class="well">
                           {{$listing->bio}}
                        </div> 
                   
                </div>
            </div>
        </div>
    </div>

@endsection
