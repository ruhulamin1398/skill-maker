@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('courses.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Courses</span></a></h5>
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
                        <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Course Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="course_title" placeholder="Enter Course Title"  class="form-control" value="{{ old('course_title') }}">
                                @if($errors->has('course_title'))
                                    <span class="text-danger ">{{ $errors->first('course_title') }}</span>
                                @endif
                            </div>
                        
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Course Price<sup class="text-danger">*</sup></label>
                                <input type="number" min="1" name="price" placeholder="Enter Course Price"  class="form-control" value="{{ old('price') }}">
                                @if($errors->has('price'))
                                    <span class="text-danger ">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Course Image<sup class="text-danger">*</sup></label>
                                <input type="file"  name="image" class="form-control">
                                @if($errors->has('image'))
                                    <span class="text-danger ">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Introduction Video<sup class="text-danger">*</sup></label>
                                <input type="file"  name="introduction_video" accept="mp4,3gp,mkv" class="form-control">
                                @if($errors->has('introduction_video'))
                                    <span class="text-danger ">{{ $errors->first('introduction_video') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12 float-left">
                                <label class="form-label">Description<sup class="text-danger">*</sup></label>
                                <textarea name="description" class="summernote-basic"></textarea>
                                @if($errors->has('description'))
                                    <span class="text-danger ">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
