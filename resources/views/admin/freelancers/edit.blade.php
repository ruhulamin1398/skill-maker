@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('freelancers.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Frrelancers</span></a></h5>
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
                        <form action="{{ route('freelancers.update', $freelancer->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label">Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="name" placeholder="Enter  Name"  class="form-control" value="{{ $freelancer->name }}">
                                @if($errors->has('name'))
                                    <span class="text-danger ">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Location<sup class="text-danger">*</sup></label>
                                <input type="text" name="location" placeholder="Enter Location"  class="form-control" value="{{ $freelancer->location }}">
                                @if($errors->has('location'))
                                    <span class="text-danger ">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Language<sup class="text-danger">*</sup></label>
                                <input type="text" name="language" placeholder="Enter Language"  class="form-control" value="{{ $freelancer->language }}">
                                @if($errors->has('language'))
                                    <span class="text-danger ">{{ $errors->first('language') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Skills<sup class="text-danger">*</sup></label>
                                <input type="text" name="skills" placeholder="Enter Skills"  class="form-control" value="{{ $freelancer->skills }}">
                                @if($errors->has('skills'))
                                    <span class="text-danger ">{{ $errors->first('skills') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image<sup class="text-danger">*</sup></label><br/>
                                <img src="{{ asset('freelancer/images/'.$freelancer->image) }}" style="height: 120px; width: 120px"><br/>
                                <div class="mt-1">
                                    <input type="file" name="image" class="form-control" >
                                </div>
                                @if($errors->has('image'))
                                <span class="text-danger ">{{ $errors->first('image') }}</span>
                            @endif
                            </div>
                    
                            <div class="form-group">
                                <label class="form-label">Description<sup class="text-danger">*</sup></label>
                                <textarea name="description" class="summernote-basic">{{ $freelancer->description }}</textarea>
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
