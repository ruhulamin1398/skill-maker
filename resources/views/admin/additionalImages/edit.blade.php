@extends('admin.includes.app')
@section('content')
<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>{{ $page_name }} </h5>
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
                    <form action="{{ route('additional-images.update', $additionalImage->id) }}" method="post" enctype="multipart/form-data"  >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label">File Title<sup class="text-danger">*</sup></label>
                            <input type="text" name="title" placeholder="Enter Service Title" class="form-control" value="{{ $additionalImage->title }}" required>
                        </div>


                        <div class="form-group">
                            <label class="form-label">Page<sup class="text-danger">*</sup></label>
                            <input type="text" name="page"  class="form-control" value="{{ $additionalImage->page }}" required>
                        </div>


                        <div class="form-group">
                            <label class="form-label">Dimension<sup class="text-danger">*</sup></label>
                            <input type="text" name="dimension"  class="form-control" value="{{ $additionalImage->dimension }}" required>
                        </div>



                        <div class="form-group">
                                <label class="form-label">Image<sup class="text-danger">*</sup></label>
                                <img src="{{ asset($additionalImage->link) }}" style="height: 120px; width: 120px"><br/>
                                <input type="file" name="link"  class="form-control" >
                                @if($errors->has('link'))
                                    <span class="text-danger ">{{ $errors->first('link') }}</span>
                                @endif
                            </div>



                        <div class="form-group">
                            <input type="submit" name="btn" class="btn btn-primary col-6 btn-block" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection