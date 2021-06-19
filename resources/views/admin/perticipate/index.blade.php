@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('perticipate.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Perticipaer</span></a></h5>
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
                                <th>Father Name</th>
                                <th>More</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($perticipate as $i=>$perticipaters)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $perticipaters->name }}</td>
                                    <td>{{ $perticipaters->email }}</td>
                                    <td>{{ $perticipaters->number }}</td>
                                    <td>{{ $perticipaters->father_name }}</td>
                                    <td>
                                        <a href="{{ route('perticipate.show', $perticipaters->id) }}" class="btn btn-success">View</a> 
                                    </td>
                                    <td>
                                        <form action="{{ route('perticipate.destroy', $perticipaters->id) }}" method="post">
                                            <a href="{{ route('perticipate.edit', $perticipaters->id) }}" class="btn btn-primary">Edit</a> |
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
