@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }}</h5>
            </div>
            <div class="card-body">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card card-preview">
                    <div class="card-inner">
                        <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label">Service Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" placeholder="Enter Service Title"  class="form-control" value="{{ $service->title }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Sub Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="sub_title" placeholder="Enter Sub Title"  class="form-control" value="{{ $service->sub_title }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image<sup class="text-danger">*</sup></label><br/>
                                <img src="{{ asset('service/images/'.$service->service_image) }}" style="height: 120px; width: 120px"><br/>
                                <div class="mt-1">
                                    <input type="file" name="service_image" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Description<sup class="text-danger">*</sup></label>
                                <textarea name="description" class="summernote-basic">{{ $service->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
