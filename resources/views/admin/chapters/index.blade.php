@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5> Chapters  |  {{$course->course_title}}<a href="{{ route('courses.show',$course->id) }}" class="float-right btn btn-primary text-white"><i class="fas fa-arrow-left"></i> <span class="ml-2">Course </span></a></h5>
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
                        <form action="{{ route('chapters.store') }}" method="post" >
                            @csrf

                            <input type="text" name="course_id" value="{{$course->id}}" hidden>
                            <div class="form-group col-md-10 float-left">
                                <label class="form-label"> Title<sup class="text-danger">*</sup></label>
                                <input type="text" name="title" placeholder="Enter Chapter Title"  class="form-control" value="{{ old('title') }}" required>
                                @if($errors->has('title'))
                                    <span class="text-danger ">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        


                            <div class="form-group col-md-2 float-left">
                                <label class="form-label"> Serial<sup class="text-danger">*</sup></label>
                                <input type="number" name="serial"  class="form-control" value="999" required>
                                @if($errors->has('serial'))
                                    <span class="text-danger ">{{ $errors->first('serial') }}</span>
                                @endif
                            </div>

                            
                           
                            <div class="form-group col-md-6 float-left">
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>




                <div class="card card-preview">
                    <div class="card-inner">
                        <table class="datatable-init table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>serial</th>
                               
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chapters as $i=>$chapter)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $chapter->title }}</td> 
                                    <td>{{ $chapter->serial }}</td> 
                                    <td>
                                        
                                
                                        <form action="{{ route('chapters.destroy', $chapter->id) }}" method="post">
                                        <div class="btn btn-primary" data-id="{{ $chapter->id }}" data-course_id="{{ $course->id }}" data-serial="{{ $chapter->serial }}" data-title="{{ $chapter->title }}" id="editBtn">Edit</div> |
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










    <div class="modal fade" tabindex="-1" id="editEventPopup">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Chapter</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" id="editTitleForm" class="form-validate is-alter">
                    @csrf
                    @method('PUT')
                        <input type="text" name="course_id" id="edit-chapter-course_id" hidden>
                        <div class="row gx-4 gy-3">
                        <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-event-title">Chaper Title</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="title" class="form-control" id="edit-chapter-title" required>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-event-title">Serial</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="serial" class="form-control" id="edit-chapter-serial" required>
                                    </div>
                                </div>
                            </div>
                      
                           
                            <div class="col-12">
                                <ul class="d-flex justify-content-between gx-4 mt-1">
                                    <li>
                                        <button id="updateEvent" type="submit" class="btn btn-primary">Update Chapter</button>
                                    </li>
                                     
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection

@section('js')
<script>

var title= "lorem ipsum 444";
$(document).on('click','#editBtn',function(){
    var action = "{{route('admin.index')}}/chapters/"+$(this).data('id');
 
    $('#edit-chapter-title').val($(this).data('title'));
    $('#edit-chapter-course_id').val($(this).data('course_id'));
    $('#edit-chapter-serial').val($(this).data('serial'));
    $('#editTitleForm').attr('action',action);
    
    
    $('#editEventPopup').modal();
});



</script>
@endsection