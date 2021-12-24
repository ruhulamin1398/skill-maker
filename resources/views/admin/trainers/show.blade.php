@extends('admin.includes.app')
@section('content')
<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>{{ $page_name }} <a href="{{ route('trainers.index') }}" class="float-right btn btn-primary text-white"> <i class="fas fa-edit"></i> <span class="ml-2">Manage Trainer</span></a></h5>
        </div>
        <div class="card-body">
            <div class="col-md-3 col-sm-12 float-left">
                <img src="{{ asset('trainer/images/'.$trainer->image) }}" class="img-fluid" style="height: 200px; width: 200px"><br /><br />
            </div>
            <div class="col-md-9 col-sm-12 float-left">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th> Name </th>
                            <td class="font-weight-bold"> {{ $trainer->name }}</td>
                        </tr>
                        <tr>
                            <th> Email </th>
                            <td class="font-weight-bold"> {{ $trainer->email }}</td>
                        </tr>
                        <tr>
                            <th> Phone </th>
                            <td class="font-weight-bold"> {{ $trainer->phone }}</td>
                        </tr>
                        <tr>
                            <th> Last Education </th>
                            <td class="font-weight-bold"> {{ $trainer->last_education }}</td>
                        </tr>
                        <tr>
                            <th> Current Work </th>
                            <td class="font-weight-bold"> {{ $trainer->current_work }}</td>
                        </tr>
                        <tr>
                            <th> Address </th>
                            <td class="font-weight-bold"> {{ $trainer->address }}</td>
                        </tr>
                        <tr>
                            <th class="bg-dark text-light"> Assign Course List </th>
                            <th class="bg-dark text-light"> Batch</th>
                        </tr>
                        @foreach ($trainer->batches as $batch)
                        <tr>
                            <td> <a href="{{route('courses.show',App\Models\batch::find($batch->batch_id)->course->id)}}"> {{ App\Models\batch::find($batch->batch_id)->course->course_title}} </a></td>
                            <td> <a href="{{route('batches.show',$batch->batch_id)}}"> {{ App\Models\batch::find($batch->batch_id)->batch_name}} </a></td>
                        </tr>
                        @endforeach



                        <tr>
                            <th class="bg-dark text-light  "  > Assign Seminar List </th>
                            <th class="bg-dark text-light   " > Date </th>

                      
                      
                        </tr>

                        @if($trainer->seminars->count() >0)
                        @foreach ($trainer->seminars as $seminar)
                        <tr>
                            <td>
                                <a href="{{route('seminar.edit',$seminar->seminar->id)}}"> {{ $seminar->seminar->title }}</a>
                            </td>
                            <td>
                                <a href="{{route('seminar.edit',$seminar->seminar->id)}}"> {{ $seminar->seminar->date }}</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection