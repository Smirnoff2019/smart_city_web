@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Просмотр данных точки </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route( 'admin.points.index' ) }}"> Back </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Image:</strong></h4>
                <p>{{ $point->image }}</p>
                <img value="{{ $point->image }}" src="{{ $point->image }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Latitude:</strong></h4>
                <p>{{ $point->latitude }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Longitude:</strong></h4>
                <p>{{ $point->longitude }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Comment:</strong></h4>
                <p>{{ $point->comment }}</p>                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4><strong>Type:</strong></h4>
                <p>{{ $point->type }}</p>                
            </div>
        </div>       
    </div>
@endsection
