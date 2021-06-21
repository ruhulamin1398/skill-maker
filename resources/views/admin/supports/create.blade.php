@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('supports.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Support</span></a></h5>
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
                        <form action="{{ route('supports.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"> Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" placeholder="Enter Service Title"  class="form-control" value="{{ old('title') }}">
                                @if($errors->has('title'))
                                    <span class="text-danger ">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email<sup class="text-danger">*</sup></label>
                                <input type="email" name="email" placeholder="Enter Email"  class="form-control" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <span class="text-danger ">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number<sup class="text-danger">*</sup></label>
                                <input type="text" name="phone" placeholder="Enter Email"  class="form-control" value="{{ old('phone') }}">
                                @if($errors->has('phone'))
                                    <span class="text-danger ">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Facebook Address<sup class="text-danger">*</sup></label>
                                <input type="text" name="facebook" placeholder="Enter Facebook Address"  class="form-control" value="{{ old('facebook') }}">
                                @if($errors->has('facebook'))
                                    <span class="text-danger ">{{ $errors->first('facebook') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Description<sup class="text-danger">*</sup></label>
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
