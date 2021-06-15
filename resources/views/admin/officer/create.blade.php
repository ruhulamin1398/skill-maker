@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('officer.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Officers</span></a></h5>
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
                        <form action="{{ route('officer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Country Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="country" placeholder="Enter Country Name"  class="form-control" value="{{ old('country') }}">
                                @if($errors->has('country'))
                                    <span class="text-danger ">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address<sup class="text-danger">*</sup></label>
                                <input type="text" name="location" placeholder="Enter Address"  class="form-control" value="{{ old('location') }}">
                                @if($errors->has('location'))
                                    <span class="text-danger ">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Map Link<sup class="text-danger">*</sup></label>
                                <input type="text" name="map_link" placeholder="Enter Map Link"  class="form-control" value="{{ old('map_link') }}">
                                @if($errors->has('map_link'))
                                    <span class="text-danger ">{{ $errors->first('map_link') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image<sup class="text-danger">*</sup></label>
                                <input type="file" name="image"  class="form-control">
                                @if($errors->has('image'))
                                    <span class="text-danger ">{{ $errors->first('image') }}</span>
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
