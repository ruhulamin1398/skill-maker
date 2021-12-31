@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }}   </h5>
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
                                <th >page</th> 
                                <th >Dimension</th>  
                                <th >Image</th>  
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                            @foreach($files as  $file)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $file->title }}</td> 
                                    <td>{{ $file->Page }}</td> 
                                    <td>{{ $file->dimention }}</td>  
                                    <td>
                                        
                                    <img src="{{ asset($file->link) }}" class="img-thumbnail" style="height: 70px;width: 70px">
                                  </td>

                                  
                                    
                                     
                                    <td>
                                             <a href="{{ route('additional-images.edit', $file->id) }}" class="btn btn-primary">Edit</a>  
                                             
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
