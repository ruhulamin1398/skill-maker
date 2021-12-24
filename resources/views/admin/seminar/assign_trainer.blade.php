@extends('admin.includes.app')
@section('content')
<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>{{ $page_name }} : <span class="font-italic"> {{$seminar->title}}</span></h5>
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
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <form action="{{ route('seminar-trainers.update', $seminar->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label class="form-label">Assign New Trainer<sup class="text-danger">*</sup></label>
                                    @foreach ($trainers as $trainer)

                                    @if( is_null( App\Models\SeminarTrainer::where('seminer_id', $seminar->id)->where('trainer_id',$trainer->id )->first() ))
                                    <li style="list-style: none">
                                        <input type="checkbox" name="trainer_id[]" value="{{ $trainer->id }}"> {{ $trainer->name }}
                                    </li>
                                    @endif
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="btn" class="btn btn-primary col-6 btn-block" value="Submit">
                                </div>
                            </form>

                        </div>
                        <div class="col-12 col-md-6">


                            <div class="font-weight-bold text-center"> Assingned Trainers</div>


                           
                                <ul class="list-group">
                                    @foreach ($seminar->trainers as $trainer)
                                    <li > <a href="{{route('trainers.show',$trainer->trainer->id)}}"> {{$trainer->trainer->name}}</a>   <a href="{{ route('seminar-trainers.destroy', $trainer->id) }}"  class="close btn btn-sm  pl-3 pr-3 " >x</a>  </li>
                                    
                                    @endforeach
                                </ul>

                  




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection