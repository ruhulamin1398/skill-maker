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
                                <th>Student Name</th>
                                <th>Join Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- @foreach($course as $i=>$courses) --}}
                                <tr>
                                    <td>1</td>
                                    <td>Test Student </td>
                                    <td>11 Jun 2021</td>
                                    <td>
                                        <a href="" class="btn btn-success">Chat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Test Student </td>
                                    <td>11 Jun 2021</td>
                                    <td>
                                        <a href="" class="btn btn-success">Chat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Test Student </td>
                                    <td>11 Jun 2021</td>
                                    <td>
                                        <a href="" class="btn btn-success">Chat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Test Student </td>
                                    <td>11 Jun 2021</td>
                                    <td>
                                        <a href="" class="btn btn-success">Chat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Test Student </td>
                                    <td>11 Jun 2021</td>
                                    <td>
                                        <a href="" class="btn btn-success">Chat</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Test Student </td>
                                    <td>11 Jun 2021</td>
                                    <td>
                                        <a href="" class="btn btn-success">Chat</a>
                                    </td>
                                </tr>

    
                            {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
