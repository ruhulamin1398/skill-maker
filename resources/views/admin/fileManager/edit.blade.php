@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} |  <a href="{{ asset( 'files/'.$fileManager->link) }}" >{{$fileManager->link }}</a></h5>
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
                        <form action="{{ route('file-manager.update', $fileManager->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          <div class="form-group">
                                <label class="form-label">File Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" placeholder="Enter Service Title"  class="form-control" value="{{ $fileManager->title }}">
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label class="form-label">File<sup class="text-danger">*</sup></label>
                                <input type="file" name="file"  class="form-control">
                                @if($errors->has('file'))
                                    <span class="text-danger ">{{ $errors->first('file') }}</span>
                                @endif
                            </div>
                            
                            
                            
                          
                            <div class="form-group">
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
