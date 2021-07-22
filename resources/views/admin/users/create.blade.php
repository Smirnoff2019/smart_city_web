@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
                <h2>Пнель создания пользователя</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route( 'admin.users.index' ) }}"> Back </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="col-lg-8 margin-tb">
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <h5><strong>Name:</strong></h5>                    
                    <input name="name" class="form-control" placeholder="Your Name">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <h5><strong>Email:</strong></h5>                    
                    <input name="email" class="form-control" placeholder="Your Email">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <h5><strong>Phone:</strong></h5>                    
                    <input name="phone" placeholder="Your Phone Number">
                </div>
            </div>
            
            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                <button type="submit" class="btn btn-primary">Add User</button>
            </div>
        </div>
    </form>
@endsection
