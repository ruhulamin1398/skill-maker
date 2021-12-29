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
                                <th>Course Name</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- @foreach($course as $i=>$courses) --}}
                                <tr>
                                    <td>1</td>
                                    <td>test course </td>
                                    <td>test Title</td>
                                    <td>Paid</td>
                                    <td>
                                        <a href="{{ route('trainer.seminar.index') }}" class="btn btn-info">Students</a>
                                        <a href="" class="btn btn-success">Chat</a>
                                    </td>
                               
                            {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
