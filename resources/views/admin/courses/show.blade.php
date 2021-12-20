@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>"<span class="text-info">{{ $course->course_title }}</span>" {{ $page_name }} <a href="{{ route('courses.create') }}" class="float-right btn btn-primary text-white"><i class="fas fa-plus"></i> <span class="ml-2">Add New Course</span></a></h5>
            </div>
            <div class="card-body">
                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
                <div class="col-md-6 float-left">
                      <img src="{{ asset('course/images/'.$course->image) }}" style="height: 300px; width: 100%">
                </div>
                <div class="col-md-6 float-left">
                    <label>Course Name : <span class="font-weight-bold ml-2">{{ $course->course_title }}</span></label><br/>
                    <label>Course Price : <span class="font-weight-bold ml-2">{{ number_format($course->price, '2') }}</span></label><br/>
                    <label>Introduction Video: <span class="tex-justify"><a target="_blank" href="{{ asset('course/video/'.$course->introduction_video) }}">{{ $course->introduction_video }}</a></span></label><br/>
                    <label>Total Trainers: <span class="font-weight-bold ml-2"> {{ $course->trainers->count()}}</span></label><br/>
                    <label>Total Videos: <span class="font-weight-bold ml-2">{{ $course->courseVideo->count()}} </span></label><br/>
                    <p class="text-justify"> Description: <?php echo $course->description ?></p>
                
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6 col-sm-12 float-left" style="border-right: 1px solid blue; border-top: 1px solid blue">
                    <h3 class="text-center p-2">Course Trainers</h3>
                    <table class="table table-borderd table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trainer as $i=>$trainers)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $trainers->trainer->id }}</td>
                                    <td class="tex-capitalize">{{ $trainers->trainer->name }}</td>
                                    <td>{{ $trainers->trainer->phone }}</td>
                                    <td>{{ $trainers->trainer->email }}</td>
                                    <td>
                                       {{--<form action="{{ route('coursetrainers.destroy', $trainers->id) }}" method="post">--}}
                                        <form action=" " method="post">
                                           @csrf
                                           @method('DELETE')
                                           <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to Remove !!');" value="X">
                                       </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 col-sm-12 float-left" style="border-top: 1px solid blue">
                    <h3 class="text-center p-2">Course Video</h3>

                    @foreach ($videos as $video)
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $video->id }}" aria-expanded="true" aria-controls="collapseOne">
                                        Chapter {{ $video->chapter }}
                                    </button>
                                    </h5>
                                </div>
                            
                                <div id="collapse{{ $video->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <a href="{{ asset('course/video/'.$video->video_link) }}">{{ $video->video_link }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection