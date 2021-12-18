@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('success_story.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Success Story</span></a></h5>
            </div>
            <div class="card-body">
                <div class="col-md-4 col-sm-12 float-left">
                    <img src="{{ asset('success_story/images/'.$successStory->image) }}" style="height: 250px; width:100%">
                </div>
                <div class="col-md-8 col-sm-12 float-left">
                    <h2 style="color: #F15C2F">{{ $successStory->name }}</h2>
                    <h5 class="font-weight-bold">{{ $successStory->location }}</h5>
                    <p class="text-justify"><?php echo $successStory->short_desctiption?></p>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12 col-sm-12">
                    <p class="text-justify"><?php echo $successStory->long_description?></p>
                </div>
            </div>
        </div>
    </div>
@endsection
