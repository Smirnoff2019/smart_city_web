@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Просмотр данных пользователя </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route( 'admin.users.index' ) }}"> Back </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Name:</strong></h4>
                <p>{{ $user->name }}</p>                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Email:</strong></h4>
                <p>{{ $user->email }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Phone:</strong></h4>
                <p>{{ $user->phone }}</p>
            </div>
        </div>


        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name: </strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email: </strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone: </strong>
                {{ $user->phone }}
            </div>
        </div> --}}
    </div>
@endsection
