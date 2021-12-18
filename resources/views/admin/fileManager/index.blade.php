@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('file-manager.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New File</span></a></h5>
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
                                <th >Link</th> 
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                            @foreach($files as  $file)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $file->title }}</td> 
                                    <td>
                                         <input type="text"  value="{{ asset( 'files/'.$file->link) }}" >  </td>

                                  
                                    
                                     
                                    <td>
                                             <a href="{{ route('file-manager.edit', $file->id) }}" class="btn btn-primary">Edit</a>  
                                             
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
