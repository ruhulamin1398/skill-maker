@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('service.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Service</span></a></h5>
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
                        <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Service Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" placeholder="Enter Service Title"  class="form-control" value="{{ old('title') }}">
                                @if($errors->has('title'))
                                    <span class="text-danger ">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Sub Title </label>
                                <input type="text" name="sub_title" placeholder="Enter Sub Title"  class="form-control" value="{{ old('sub_title') }}">
                                @if($errors->has('sub_title'))
                                    <span class="text-danger ">{{ $errors->first('sub_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Price </label>
                                <input type="text" name="price" placeholder="0.00"  class="form-control" value="{{ old('price') }}">
                                @if($errors->has('price'))
                                    <span class="text-danger ">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image<sup class="text-danger">*</sup></label>
                                <input type="file" name="service_image"  class="form-control">
                                @if($errors->has('service_image'))
                                    <span class="text-danger ">{{ $errors->first('service_image') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Description<sup class="text-danger">*</sup></label>
                                <textarea name="description" class="summernote-basic"></textarea>
                                @if($errors->has('description'))
                                    <span class="text-danger ">{{ $errors->first('description') }}</span>
                                @endif
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
