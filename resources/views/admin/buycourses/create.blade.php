@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('buycourses.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">My Course</span></a></h5>
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
                        <form action="{{ route('buycourses.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"> Price<sup class="text-danger">*</sup></label>
                                <input type="text" name="course_id" hidden  class="form-control" value="1">
                                <input type="text" name="assign_id"  hidden class="form-control" value="1">
                                <input type="text" name="price" placeholder="Enter Course Price"  class="form-control" value="{{ old('price') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Write Comment<sup class="text-danger">*</sup></label>
                                <textarea name="comment" class="form-control" placeholder="Write Comment"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class=""></label>
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
