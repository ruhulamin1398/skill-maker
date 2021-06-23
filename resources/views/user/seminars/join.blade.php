@extends('user.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                {{ $page_name }}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderd">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Venue</th>
                                <th>Registraion Now</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course as $i=>$courses)
                            <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{ date('d-M', strtotime($courses->date)) }}</td>
                               <td>{{ $courses->location }}</td>
                               <td>{{ $courses->venue }}</td>
                               <td>
                                     <a href="" class="btn btn-success" >Join Now</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
