@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('courses.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Courses</span></a></h5>
            </div>
            <div class="card-body">
            
                <div class="card card-preview">
                    <div class="card-inner">
                        <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group col-md-12 float-left">
                                <label class="form-label">Course Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="course_title" placeholder="Enter Course Title"  class="form-control" value="{{ $course->course_title }}">
                                @if($errors->has('course_title'))
                                    <span class="text-danger ">{{ $errors->first('course_title') }}</span>
                                @endif
                            </div>
                        
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Course Price<sup class="text-danger">*</sup></label>
                                <input type="number" min="1" name="price" placeholder="Enter Course Price"  class="form-control" value="{{ $course->price }}">
                                @if($errors->has('price'))
                                    <span class="text-danger ">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Course Type<sup class="text-danger">*</sup></label>
                                <select class="form-select form-select-sm" value="{{$course->type}}" name="type" data-search="off" > 
                              
                                @if($course->type == 'service')
                                <option value="service" selected="selected">Service </option>
                                @else  
                                <option value="service">Service </option>
                                @endif
                                
                                
                                @if($course->type == 'training')
                                <option value="training" selected="selected">Training </option>
                                @else  
                                <option value="training">Training </option>
                                @endif
                                
                                
                                @if($course->type == 'seminar')
                                <option value="seminar" selected="selected">Seminar </option>
                                @else  
                                <option value="seminar">Seminar </option>
                                @endif 
                               </select>
                                
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Image<sup class="text-danger">*</sup></label><br/>
                                <img src="{{ asset('course/images/'.$course->image) }}" style="height: 120px; width: 120px"><br/>
                                <div class="mt-1">
                                    <input type="file" name="image" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Breadcrumb Image {{ asset('course/images/'.$course->breadcrumb_image) }}<sup class="text-danger">*</sup></label><br/>
                                <img src="{{ asset('course/images/'.$course->breadcrumb_image) }}" style="height: 120px; width: 120px"><br/>
                                <div class="mt-1">
                                    <input type="file" name="breadcrumb_image" class="form-control" >
                                </div>
                            </div>
                  
                            <div class="form-group col-md-12 float-left">
                                <label class="form-label">Description<sup class="text-danger">*</sup></label>
                                <textarea name="description" class="summernote-basic">{{ $course->description }}</textarea>
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
