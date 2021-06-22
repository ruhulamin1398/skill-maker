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
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- @foreach($course as $i=>$courses) --}}
                                <tr>
                                    <td>1</td>
                                    <td>test course </td>
                                    <td>1,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>test course2 </td>
                                    <td>1,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>test course3</td>
                                    <td>11,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>test course4 </td>
                                    <td>5,000.00</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>test course5 </td>
                                    <td>1,000.00</td>
                                    <td>Paid</td>
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
