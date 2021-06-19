@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('office.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage offices</span></a></h5>
            </div>
            <div class="card-body">
                <div class="col-md-7 col-sm-12 float-left">
                    <img src="{{ asset('office/images/'.$office->image) }}" style="height: 300px; width:100%">
                </div>
                <div class="col-md-5 col-sm-12 float-left">
                    <h2 style="color: #F15C2F">{{ $office->country }}</h2>
                    <h5 class="font-weight-bold">{{ $office->location }}</h5>
                    <p><?php echo $office->description?></p>
                    <a href="{{ $office->map_link }}" style="color: #F15C2F" target="_blank"> View On Map </a>
                </div>
            </div>
        </div>
    </div>
@endsection
