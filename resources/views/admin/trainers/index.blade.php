@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('trainers.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Trainer</span></a></h5>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trainer as $i=>$trainers)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $trainers->name }}</td>
                                    <td>{{ $trainers->email }}</td>
                                    <td>{{ $trainers->phone }}</td>
                                    <td>
                                        <img src="{{ asset('trainer/images/'.$trainers->image) }}" class="img-thumbnail" style="height: 70px;width: 70px">
                                    </td>
                                    <td>
                                        <form action="{{ route('trainers.destroy', $trainers->id) }}" method="post">
                                             <a href="{{ route('trainers.show', $trainers->id) }}" class="btn btn-success">View</a> |
                                            <a href="{{ route('trainers.edit', $trainers->id) }}" class="btn btn-primary">Edit</a> |
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
