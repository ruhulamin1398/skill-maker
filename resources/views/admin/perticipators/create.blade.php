@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('perticipators.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Perticiper</span></a></h5>
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
                        <form action="{{ route('perticipators.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="name" placeholder="Enter Name"  class="form-control" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <span class="text-danger ">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label">Father Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="father_name" placeholder="Enter Father Name"  class="form-control" value="{{ old('father_name') }}">
                                @if($errors->has('father_name'))
                                    <span class="text-danger ">{{ $errors->first('father_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Phoner Number<sup class="text-danger">*</sup></label>
                                <input type="text" name="number" placeholder="Enter Phone Number"  class="form-control" value="{{ old('number') }}">
                                @if($errors->has('number'))
                                    <span class="text-danger ">{{ $errors->first('number') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Email<sup class="text-danger">*</sup></label>
                                <input type="email" name="email" placeholder="Enter Email"  class="form-control" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <span class="text-danger ">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Passport Number<sup class="text-danger">*</sup></label>
                                <input type="text" name="pasport" placeholder="Enter Passport Number"  class="form-control" value="{{ old('pasport') }}">
                                @if($errors->has('pasport'))
                                    <span class="text-danger ">{{ $errors->first('pasport') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> City<sup class="text-danger">*</sup></label>
                                <input type="text" name="city" placeholder="Enter City Name"  class="form-control" value="{{ old('city') }}">
                                @if($errors->has('city'))
                                    <span class="text-danger ">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Country<sup class="text-danger">*</sup></label>
                                <input type="text" name="country" placeholder="Enter Country Name"  class="form-control" value="{{ old('country') }}">
                                @if($errors->has('country'))
                                    <span class="text-danger ">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Occupation<sup class="text-danger">*</sup></label>
                                <input type="text" name="occopation" placeholder="Enter Occupation"  class="form-control" value="{{ old('occopation') }}">
                                @if($errors->has('occopation'))
                                    <span class="text-danger ">{{ $errors->first('occopation') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Training<sup class="text-danger">*</sup></label>
                                <input type="text" name="training" placeholder="Enter Training"  class="form-control" value="{{ old('training') }}">
                                @if($errors->has('training'))
                                    <span class="text-danger ">{{ $errors->first('training') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Where from you heard about Skillmaker ?<sup class="text-danger">*</sup></label>
                               <select class="form-control" name="enablers">
                                   <option>----------Select One-------</option>
                                   <option value="Social Media">Social Media</option>
                                   <option value="Printing Media">Printing Media</option>
                                   <option value="Electronic Media">Electronic Media</option>
                                   <option value="Friends/Family">Friends/Family</option>
                               </select>
                                @if($errors->has('enablers'))
                                    <span class="text-danger ">{{ $errors->first('enablers') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 float-left">
                                <label class="form-label"> Occupation<sup class="text-danger">*</sup></label>
                                <select name="payment_type" class="form-control">
                                    <option>--------Select One---------</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Online Payment Getway">Online Payment Getway</option>
                                </select>
                            
                            </div>
                            
                            <div class="form-group col-md-6 float-left">
                                <label class="p-3"></label>
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
