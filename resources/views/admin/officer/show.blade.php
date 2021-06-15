@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('officer.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Officers</span></a></h5>
            </div>
            <div class="card-body">
                <div class="col-md-7 col-sm-12 float-left">
                    <img src="{{ asset('officer/images/'.$officer->image) }}" style="height: 300px; width:100%">
                </div>
                <div class="col-md-5 col-sm-12 float-left">
                    <h2 style="color: #F15C2F">{{ $officer->country }}</h2>
                    <h5 class="font-weight-bold">{{ $officer->location }}</h5>
                    <p><?php echo $officer->description?></p>
                    <a href="{{ $officer->map_link }}" style="color: #F15C2F" target="_blank"> View On Map </a>
                </div>
            </div>
        </div>
    </div>
@endsection
