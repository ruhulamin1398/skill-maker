@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('seminar.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Seminar</span></a></h5>
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
                                <th>Location</th>
                                <th>Venue</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Trainer</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seminar as $i=>$seminars)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $seminars->location }}</td>
                                    <td>{{ $seminars->venue }}</td>
                                    <td>{{ date('d-M-Y', strtotime($seminars->date)) }}</td>
                                    <td>{{ number_format($seminars->price, '2') }}</td>
                                    <td>
                                        @if ($seminars->status == '0')
                                           <label class="text-success">Published</label>
                                            @else
                                            <label class="text-danger">Un-Published</label>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('seminar.destroy', $seminars->id) }}" method="post">
                                            <a href="{{ route('seminar.edit', $seminars->id) }}" class="btn btn-primary">Edit</a> |
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete !!');" value="Delete">
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.seminar-trainers.seminar', $seminars->id) }}" class="btn btn-success">Add </a> |
                                        <a href="" class="btn btn-info">View </a>
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
