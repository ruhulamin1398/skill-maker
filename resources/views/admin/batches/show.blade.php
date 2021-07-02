@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }} <a class="float-right btn btn-info" href="{{ route('courses.index') }}">Back</a></h5>
            </div>
            <div class="card-body">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="col-md-12 col-sm-12">
                    <table class="table table-bordered" style="border: 1px solid silver">
                        <tr>
                            <td>Batch Name</td>
                            <td>{{ $batch->batch_name }}</td>
                        </tr>
                        <tr>
                            <td>Batch Price</td>
                            <td>{{ number_format($batch->price, '2') }}</td>
                        </tr>
                        <tr>
                            <td>Total Trainers</td>
                            <td>{{ $batch->trainers->count() }}</td>
                        </tr>
                        <tr>
                            <td>Total Students</td>
                            <td>{{ $batch->batch_name }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <p class="text-justify"><?php echo $batch->description ?></p>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6 col-sm-12 float-left" style="border-right: 1px solid blue; border-top: 1px solid blue">
                    <h6 class="p-1">Assigned Student List <a class="btn btn-info float-right" href="">Add New</a></h6>

                </div>
                <div class="col-md-6 col-sm-12 float-left" style="border-top: 1px solid blue">
                    <h6 class="p-1"> Assigned Trainer List   <a class="btn btn-info float-right" href="{{ route('batch-trainers.edit', $batch->id) }}">Add New</a></h6>
                   <hr/>
                    <table class="datatable-init table mt-2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignedTrainers as $i=>$trainers)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="text-capitalize">{{ $trainers->trainer->name }}</td>
                                    <td>{{ $trainers->trainer->phone }}</td>
                                    <td>{{ $trainers->trainer->email }}</td>
                                    <td>
                                        <form action="{{ route('batch-trainers.destroy', $trainers->id) }}" method="post">
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
            </div>
        </div>
    </div>
@endsection
