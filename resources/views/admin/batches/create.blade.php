@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('courses.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-back"></i> <span class="ml-2">Back</span></a></h5>
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
                       <h6 class="text-center">Course Name: {{ $course->course_title }}</h6>
                       <hr/>
                        <div class="col-md-8 col-sm-12 float-left" style="border-right: 1px solid black">
                            <h6 class="text-center">Add New Batch</h6>
                            <hr/>
                            <form action="{{ route('batches.update', $course->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="form-label">Batch Name<sup class="text-danger">*</sup></label>
                                    <input type="text" name="batch_name" class="form-control" placeholder="Enter Batch Name" value="{{ old('batch_name') }}">
                                    @if($errors->has('batch_name'))
                                         <span class="text-danger ">{{ $errors->first('batch_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Price<sup class="text-danger">*</sup></label>
                                    <input type="number" min="1" name="price" class="form-control" placeholder="Enter Price" value="{{ old('prrice') }}">
                                    @if($errors->has('price'))
                                         <span class="text-danger ">{{ $errors->first('price') }}</span>
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

                        <div class="col-md-4 col-sm-12 float-left">
                            <h6 class="text-center"> Bacth List</h6>
                            <hr/>

                            @foreach ($batches as $i=>$batch)
                                <li style="list-style: none">
                                    {{ ++$i }}. <a href="{{ route('batches.show', $batch->id) }}">{{ $batch->batch_name }}</a>
                                </li>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
