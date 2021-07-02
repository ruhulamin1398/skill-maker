@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('batches.show', $course->id) }}" class="float-right btn btn-primary text-white"> <i class="fas fas-back"></i> <span class="ml-2">Back</span></a></h5>
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
                       <h6 class="text-center">Course Name: {{ $course->course_title }}</h6>
                       <hr/>
                        <div class="col-md-6 col-sm-12 float-left" style="border-right: 1px solid black">
                            <h6 class="text-center">Asssigne Trainer</h6>
                            <form action="{{ route('batch-trainers.update', $course->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label class="form-label">Select Trainer<sup class="text-danger">*</sup></label>

                                    @foreach ($trainers as $trainer)
                                    @if(!isset($assignedTrainerArray[$trainer->id]))
                                        <li style="list-style: none">
                                            <input type="checkbox" name="trainer_id[]" value="{{ $trainer->id }}"> {{ $trainer->name }}
                                        </li>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-12 float-left">
                            <h6 class="text-center">Asssigned List</h6>
                            @foreach ($assignedTrainers as $trainer)
                                <li class="ml-3" style="list-style: none">
                                    <input  checked type="checkbox"> <span class="ml-1" style="font-size: 15px">{{ $trainer->trainer->name }}</span>
                                </li>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
