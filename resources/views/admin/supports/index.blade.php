@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('supports.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Support Data</span></a></h5>
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
                                <th>Title</th>
                                <tH>Email</tH>
                                <th>Phone</th>
                                <th>Facebook Link</th>
                                <th style="width: 20%">Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($support as $i=>$supports)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $supports->title }}</td>
                                    <td>{{ $supports->email }}</td>
                                    <td>{{ $supports->phone }}</td>
                                    <td>{{ $supports->facebook }}</td>
                                    <td><?php echo $supports->description ?></td>
                                    <td>
                                        <form action="{{ route('supports.destroy', $supports->id) }}" method="post">
                                            <a href="{{ route('supports.edit', $supports->id) }}" class="btn btn-primary">Edit</a> |
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
