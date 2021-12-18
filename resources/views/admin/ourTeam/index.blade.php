@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('our-teams.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Member</span></a></h5>
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
                                <tH>Location</tH>
                                <th>Short Description</th>
                                <th>Image</th>
                                <th>Serial</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($ourTeams as $i=>$ourTeam)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $ourTeam->name }}</td>
                                    <td>{{ $ourTeam->location }}</td>
                                    <td>{{ $ourTeam->short_desctiption }}</td>
                                    <td>
                                        <img src="{{ asset('ourTeam/images/'.$ourTeam->image) }}" class="img-thumbnail" style="height: 70px;width: 70px">
                                    </td>
                                    
                                    <td>{{ $ourTeam->serial }}</td>

                                    <td>
                                        <form action="{{ route('our-teams.destroy', $ourTeam->id) }}" method="post">
                                             <!-- <a href="{{ route('our-teams.show', $ourTeam->id) }}" class="btn btn-success">View</a> | -->
                                            <a href="{{ route('our-teams.edit', $ourTeam->id) }}" class="btn btn-primary">Edit</a> |
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
