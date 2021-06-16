@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('faq.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Faq</span></a></h5>
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
                                <th>Question</th>
                                <th>Answere</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($faq as $i=>$faqs)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $faqs->question }}</td>
                                    <td>{{ $faqs->answere }}</td>
                                    <td>
                                        <form action="{{ route('faq.destroy', $faqs->id) }}" method="post">
                                            <a href="{{ route('faq.edit', $faqs->id) }}" class="btn btn-primary">Edit</a> |
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
