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
                                <th> Date</th>
                                <th>Location</th>
                                <th>Venue</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>11 Jun</td>
                                    <td>Dhaka</td>
                                    <td>Dhaka</td>
                                    <td>
                                        <a href="" class="btn btn-info">View</a> |
                                        <a href="" class="btn btn-success">Chat Now</a>
                                     </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12 May</td>
                                    <td>Dhaka</td>
                                    <td>Dhaka</td>
                                    <td>
                                        <a href="" class="btn btn-info">View</a> |
                                        <a href="" class="btn btn-success">Chat Now</a>
                                     </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>1 July</td>
                                    <td>Dhaka</td>
                                    <td>Dhaka</td>
                                    <td>
                                        <a href="" class="btn btn-info">View</a> |
                                        <a href="" class="btn btn-success">Chat Now</a>
                                     </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12 Sept</td>
                                    <td>Dhaka</td>
                                    <td>Dhaka</td>
                                    <td>
                                        <a href="" class="btn btn-info">View</a> |
                                        <a href="" class="btn btn-success">Chat Now</a>
                                     </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>4 Nov</td>
                                    <td>Dhaka</td>
                                    <td>Dhaka</td>
                                    <td>
                                        <a href="" class="btn btn-info">View</a> |
                                        <a href="" class="btn btn-success">Chat Now</a>
                                     </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
