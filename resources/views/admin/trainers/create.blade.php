@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('trainers.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Trainer</span></a></h5>
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
                        <form action="{{ route('trainers.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="name" placeholder="Enter Trainer Name"  class="form-control" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <span class="text-danger ">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Email<sup class="text-danger">*</sup></label>
                                <input type="email" name="email" placeholder="Enter Trainer Email"  class="form-control" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <span class="text-danger ">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Phone Number<sup class="text-danger">*</sup></label>
                                <input type="text" name="phone" placeholder="Enter Trainer Phone Number"  class="form-control" value="{{ old('phone') }}">
                                @if($errors->has('phone'))
                                    <span class="text-danger ">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Last Education<sup class="text-danger">*</sup></label>
                                <input type="text" name="last_education" placeholder="Enter Last Education Stage"  class="form-control" value="{{ old('last_education') }}">
                                @if($errors->has('last_education'))
                                    <span class="text-danger ">{{ $errors->first('last_education') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Current Working Place <sup class="text-danger">*</sup></label>
                                <input type="text" name="current_work" placeholder="Current Work"  class="form-control" value="{{ old('current_work') }}">
                                @if($errors->has('current_work'))
                                    <span class="text-danger ">{{ $errors->first('current_work') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Image <sup class="text-danger">*</sup></label>
                                <input type="file" name="image" class="form-control">
                                @if($errors->has('image'))
                                <span class="text-danger ">{{ $errors->first('image') }}</span>
                             @endif
                            </div>
                            <div class="form-group col-md-12 float-left">
                                <label class="form-label">Address <sup class="text-danger">*</sup></label>
                                <textarea name="address" placeholder="Enter Address" class="form-control"></textarea>
                                @if($errors->has('address'))
                                    <span class="text-danger ">{{ $errors->first('address') }}</span>
                                 @endif
                            </div>
                            
                            <div class="form-group col-md-12 float-left">
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
