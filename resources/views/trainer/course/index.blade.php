@extends('trainer.includes.app')
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
                    <table class="datatable-init table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Batch</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trainer->batches as $i=>$batch)
                            @if( $batch->batch->course->type == $type )
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$batch->batch->course->course_title}} </td>
                                <td>{{$batch->batch->batch_name}} </td>
                                <td>test Title</td>
                                <td>Paid</td>
                                <td>
                                    <a href="{{ route('trainer.seminar.index') }}" class="btn btn-info">Students</a>
                                    <a href="" class="btn btn-success">Chat</a>
                                </td>
                                @endif
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection