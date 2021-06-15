@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('officer.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Officer</span></a></h5>
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
                                <th>Country</th>
                                <th>Address</th>
                                <th>Map</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($officer as $i=>$officers)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $officers->country }}</td>
                                    <td>{{ $officers->location }}</td>
                                    <td>{{ $officers->map_link }}</td>
                                    <td>
                                        <img src="{{ asset('officer/images/'.$officers->image) }}" class="img-thumbnail" style="height: 70px;width: 70px">
                                    </td>
                                    <td>
                                        <form action="{{ route('officer.destroy', $officers->id) }}" method="post">
                                             <a href="{{ route('officer.show', $officers->id) }}" class="btn btn-success">View</a> |
                                            <a href="{{ route('officer.edit', $officers->id) }}" class="btn btn-primary">Edit</a> |
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete !!');" value="Delete">
                                        </form>
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
