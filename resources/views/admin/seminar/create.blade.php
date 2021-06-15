@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('seminar.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Seminar</span></a></h5>
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
                        <form action="{{ route('seminar.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" placeholder="Enter Title"  class="form-control" value="{{ old('title') }}">
                                @if($errors->has('title'))
                                    <span class="text-danger ">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Location<sup class="text-danger">*</sup></label>
                                <input type="text" name="location" placeholder="Enter Location"  class="form-control" value="{{ old('location') }}">
                                @if($errors->has('location'))
                                    <span class="text-danger ">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Venue Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="venue" placeholder="Enter Venue Name"  class="form-control" value="{{ old('venue') }}">
                                @if($errors->has('venue'))
                                    <span class="text-danger ">{{ $errors->first('venue') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Date<sup class="text-danger">*</sup></label>
                                <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                                @if($errors->has('date'))
                                    <span class="text-danger ">{{ $errors->first('date') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Price<sup class="text-danger">*</sup></label>
                                <input type="number" min="1" name="price" placeholder="Enter Price"  class="form-control" value="{{ old('price') }}">
                                @if($errors->has('price'))
                                    <span class="text-danger ">{{ $errors->first('price') }}</span>
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
