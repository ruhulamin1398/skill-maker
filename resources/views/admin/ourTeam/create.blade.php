@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('our-teams.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Team</span></a></h5>
            </div>
            <div class="card-body">
            
                <div class="card card-preview">
                    <div class="card-inner">
                        <form action="{{ route('our-teams.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"> Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="name" placeholder="Enter Name"  class="form-control" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <span class="text-danger ">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address<sup class="text-danger">*</sup></label>
                                <input type="text" name="location" placeholder="Enter Address"  class="form-control" value="{{ old('location') }}">
                                @if($errors->has('location'))
                                    <span class="text-danger ">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Short Description<sup class="text-danger">*</sup></label>
                                <textarea name="short_desctiption" placeholder="Enter Short Description" class="form-control"></textarea>
                                @if($errors->has('short_desctiption'))
                                    <span class="text-danger ">{{ $errors->first('short_desctiption') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image<sup class="text-danger">*</sup></label>
                                <input type="file" name="image"  class="form-control">
                                @if($errors->has('image'))
                                    <span class="text-danger ">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Long Description<sup class="text-danger">*</sup></label>
                                <textarea name="long_description" class="summernote-basic"></textarea>
                                @if($errors->has('long_description'))
                                    <span class="text-danger ">{{ $errors->first('long_description') }}</span>
                                @endif
                            </div>

                            
                            <div class="form-group">
                                <label class="form-label"> Serial<sup class="text-danger">*</sup></label>
                                <input type="number" name="serial"  class="form-control" value="999">
                                @if($errors->has('name'))
                                    <span class="text-danger ">{{ $errors->first('serial') }}</span>
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
