@extends('admin.includes.app')
@section('content')
<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>{{ $page_name }} </h5>
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
                                <th>Page</th>
                                <th>Key</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=0)
                            @foreach($settings as $setting)
                            <tr title="{{ strip_tags($setting->value) }}">
                                <td>{{ ++$i }}</td>
                                <td>{{ $setting->page }}</td>
                                <td>{{ $setting->key }}</td>
                                

                                <td> <a href="{{ route('additional-settings.edit', $setting->id) }}" class="btn btn-primary">Edit</a>

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