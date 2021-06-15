@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('office.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage offices</span></a></h5>
            </div>
            <div class="card-body">
            
                <div class="card card-preview">
                    <div class="card-inner">
                        <form action="{{ route('office.update', $office->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label">Country Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="country" placeholder="Enter Country Name"  class="form-control" value="{{ $office->country }}">
                                @if($errors->has('country'))
                                    <span class="text-danger ">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address<sup class="text-danger">*</sup></label>
                                <input type="text" name="location" placeholder="Enter Address"  class="form-control" value="{{ $office->location }}">
                                @if($errors->has('location'))
                                    <span class="text-danger ">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Map Link<sup class="text-danger">*</sup></label>
                                <input type="text" name="map_link" placeholder="Enter Map Link"  class="form-control" value="{{ $office->map_link }}">
                                @if($errors->has('map_link'))
                                    <span class="text-danger ">{{ $errors->first('map_link') }}</span>
                                @endif
                            </div>
                        
                            <div class="form-group">
                                <label class="form-label">Description<sup class="text-danger">*</sup></label>
                                <textarea name="description" class="summernote-basic">{{ $office->description }}</textarea>
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
