@extends('user.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('seminars.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Join New Seminar</span></a></h5>
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
                                <th>Date</th>
                                <th> Title</th>
                                <th>Location</th>
                                <th>Venue</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($seminars as $i=>$seminar)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ date('M-d Y', strtotime($seminar->seminar->date)) }}</td>
                                    <td>{{ $seminar->seminar->title }}</td>
                                    <td>{{ $seminar->seminar->location }}</td>
                                    <td>{{ $seminar->seminar->venue }}</td>
                                    <td>
                                        <a href="{{ route('singleSeminar',$seminar->seminar->id) }}" class="btn btn-info">View</a> |
                                      <a href="" class="btn btn-success">Chat Now</a>
                                   
                                     {{--- <a href="{{ route('chats.show',$seminar->chat()->id) }}" class="btn btn-success">Chat Now</a>
                                     ---}}
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
