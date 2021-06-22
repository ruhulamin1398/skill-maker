@extends('user.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Join New Course</span></a></h5>
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
                                <th>Trainign Name</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>test training </td>
                                    <td>1,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>test training2 </td>
                                    <td>1,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>test training3</td>
                                    <td>11,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>test training4 </td>
                                    <td>5,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>test training5 </td>
                                    <td>1,000.00</td>
                                    <td>Paid</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
