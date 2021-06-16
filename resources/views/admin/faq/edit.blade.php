@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('faq.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Faqs</span></a></h5>
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
                        <form action="{{ route('faq.update', $faq->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label">Question<sup class="text-danger">*</sup></label>
                                <input type="text" name="question" placeholder="Enter question"  class="form-control" value="{{ $faq->question }}">
                                @if($errors->has('question'))
                                    <span class="text-danger ">{{ $errors->first('question') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Answere<sup class="text-danger">*</sup></label>
                                <input type="text" name="answere" placeholder="Enter Address"  class="form-control" value="{{ $faq->answere }}">
                                @if($errors->has('answere'))
                                    <span class="text-danger ">{{ $errors->first('answere') }}</span>
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
