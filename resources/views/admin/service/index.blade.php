@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('service.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Service</span></a></h5>
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
                                <th style="width: 15%">Sub Title</th>
                                <th style="width: 20%">Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($service as $i=>$services)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $services->title }}</td>
                                    <td>{{ $services->sub_title }}</td>
                                    <td>
                                        <p style="font-size: 10px">
                                            <?php
                                                $desc = $services->description;
                                                $strcut = substr($desc,0,100);
                                                $desc = substr($strcut, 0, strrpos($strcut, ' ')).'....'.'<a href="" class="text-decoration-none">Read More</a>';
                                                echo $desc;
                                                ?>
                                        </p>
                                       
                                    </td>
                                    <td>
                                        <img src="{{ asset('service/images/'.$services->service_image) }}" class="img-thumbnail" style="height: 70px;width: 70px">
                                    </td>
                                    <td>
                                        <form action="{{ route('service.destroy', $services->id) }}" method="post">
                                            <a href="{{ route('service.edit', $services->id) }}" class="btn btn-primary">Edit</a> |
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
