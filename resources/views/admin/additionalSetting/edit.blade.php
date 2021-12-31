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
                    <form action="{{ route('additional-settings.update', $additionalSetting->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label">Page<sup class="text-danger">*</sup></label>
                            <input type="text" name="page"  class="form-control" value="{{ $additionalSetting->page }}">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Key<sup class="text-danger">*</sup></label>
                            <input type="text" name="key"  class="form-control" value="{{ $additionalSetting->key }}">
                        </div>


                        <div class="form-group   ">
                                <label class="form-label">Value<sup class="text-danger">*</sup></label>
                                <textarea name="value" class="summernote-basic">{{ $additionalSetting->value }}</textarea>
                                @if($errors->has('value'))
                                    <span class="text-danger ">{{ $errors->first('value') }}</span>
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