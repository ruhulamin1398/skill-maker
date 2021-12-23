@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a href="{{ route('trainers.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Trainer</span></a></h5>
            </div>
            <div class="card-body">
                <div class="col-md-3 col-sm-12 float-left">
                    <img src="{{ asset('trainer/images/'.$trainer->image) }}" class="img-fluid" style="height: 200px; width: 200px"><br/><br/>
                </div>
                <div class="col-md-9 col-sm-12 float-left">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th> Name  </th>
                                <td class="font-weight-bold"> {{ $trainer->name }}</td>
                            </tr>
                            <tr>
                                <th> Email  </th>
                                <td class="font-weight-bold"> {{ $trainer->email }}</td>
                            </tr>
                            <tr>
                                <th> Phone  </th>
                                <td class="font-weight-bold"> {{ $trainer->phone }}</td>
                            </tr>
                            <tr>
                                <th> Last Education  </th>
                                <td class="font-weight-bold"> {{ $trainer->last_education }}</td>
                            </tr>
                            <tr>
                                <th> Current Work  </th>
                                <td class="font-weight-bold"> {{ $trainer->current_work }}</td>
                            </tr>
                            <tr>
                                <th> Address  </th>
                                <td class="font-weight-bold"> {{ $trainer->address }}</td>
                            </tr>
                            <tr>
                                <th> Assign Course List  </th>
                                <td class="font-weight-bold">
                                    @foreach ($trainer->batches as $batch)
                                        <li> <a href="{{route('courses.show',$batch->course->id)}}"> {{ $batch->course->course_title }}</a></li>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th> Assign Seminar List  </th>
                                <td class="font-weight-bold">
                                    @foreach ($trainer->seminars as $seminar)
                                        <li><a href="{{route('seminar.show',$seminar->id)}}"> {{ $seminar->title }}</a></li>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
