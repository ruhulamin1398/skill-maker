@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('courses.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Course</span></a></h5>
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
                                <th>Course Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Video</th>
                                <th>Trainer</th>
                                <th>Action</th>
                                <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $i=>$course)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $course->course_title }}</td>
                                    <td>{{ $course->price }}</td>
                                    <td>
                                        <img src="{{ asset('course/images/'.$course->image) }}" class="img-thumbnail" style="height: 70px;width: 70px">
                                    </td>
                                    <td>
                                        <a href="{{ route('coursevideos.edit', $course->id) }}" class="btn btn-primary">
                                            {{ $course->courseVideo->count()}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('coursetrainers.edit', $course->id) }}" class="btn btn-primary">
                                            @if ($course->trainers->count() == '0')
                                                0
                                                @else
                                                {{ $course->trainers->count()}}
                                            @endif
                                         </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a> |
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete !!');" value="Delete">
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('courses.show', $course->id) }}">View</a>
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
