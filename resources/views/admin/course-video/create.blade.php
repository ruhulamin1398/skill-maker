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
                        <form action="{{ route('coursevideos.update', $course->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label">Course Name<sup class="text-danger">*</sup></label>
                                <input type="text" disabled  class="form-control" value="{{ $course->course_title }}" >
                            </div>
                            <div class="form-group">
                                <label class="form-label">Video Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="video_title" class="form-control" placeholder="Enter Video Title" value="{{ old('video_title') }}">
                                @if($errors->has('video_title'))
                                    <span class="text-danger ">{{ $errors->first('video_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Video<sup class="text-danger">*</sup></label>
                                <input type="file" name="video_link" class="form-control" placeholder="Enter Video Title">
                                @if($errors->has('video_link'))
                                    <span class="text-danger ">{{ $errors->first('video_link') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Chapter<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="chapter_id"  value="{{$course->chapters->first()->id }}">
                                @foreach ($course->chapters as $chapter)
                                <option value="{{ $chapter->id }}">{{ $chapter->title }}</option>
                                @endforeach
                          </select>
                                @if($errors->has('chapter'))
                                    <span class="text-danger ">{{ $errors->first('chapter') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Position<sup class="text-danger">*</sup></label>
                                <input type="text" name="position" class="form-control" placeholder="Enter Position Number" value="{{ old('position') }}">
                                @if($errors->has('position'))
                                    <span class="text-danger ">{{ $errors->first('position') }}</span>
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
