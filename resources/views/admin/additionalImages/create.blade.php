@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('service.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2"> File Manager</span></a></h5>
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
                        <form action="{{ route('file-manager.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">File Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" placeholder="Enter File Title"  class="form-control" value="{{ old('title') }}">
                                @if($errors->has('title'))
                                    <span class="text-danger ">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">File<sup class="text-danger">*</sup></label>
                                <input type="file" name="file"  class="form-control">
                                @if($errors->has('file'))
                                    <span class="text-danger ">{{ $errors->first('file') }}</span>
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
