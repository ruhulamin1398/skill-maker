@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('freelancers.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Frrelancer</span></a></h5>
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
                                <th>Address</th>
                                <th>language</th>
                                <th>skills</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($freelancers as $i=>$freelancer)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $freelancer->name }}</td>
                                    <td>{{ $freelancer->location }}</td>
                                    <td>{{ $freelancer->language }}</td>
                                    <td>{{ $freelancer->skills }}</td>
                                    <td>
                                        <img src="{{ asset('freelancer/images/'.$freelancer->image) }}" class="img-thumbnail" style="height: 70px;width: 70px">
                                    </td>
                                   
                                    <td>
                                        <form action="{{ route('freelancers.destroy', $freelancer->id) }}" method="post">
                                            <a class="btn btn-success" href="{{ route('freelancers.show', $freelancer->id) }}"><i class="fas fa-eye"></i></a> |
                                            <a href="{{ route('freelancers.edit', $freelancer->id) }}" class="btn btn-info"><i class="fas fa-edit fa-1x"></i></a> |
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" onclick="return confirm('Are you sure to delete !!');" class="btn btn-danger" value="Delete"> 
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
