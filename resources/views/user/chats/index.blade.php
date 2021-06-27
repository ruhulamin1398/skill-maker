{{-- @extends('user.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{$page_name}}</h3>
                </div>
                <div class="card-body"  style="margin: 5px; padding: 5px; height: 400px; overflow: auto;">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <img src="{{ asset('trainer/images/1624461502.png')}}" style="height: 50px; width: 50px; border-radius: 50%;">
                        </div>
                        <textarea class="font-weight-bold form-control"  disabled style="height: 56px; border-radius: 16px; margin-left: 8px; margin-top: 10px"> hi</textarea>
                    </div>
                    <p class="text-dark float-right" style="font-size: 9px">10:12 AM</p>

                    <div class="form-group input-group">
                        <textarea class="font-weight-bold form-control"  disabled style="height: 56px; border-radius: 16px; margin-left: 8px; margin-top: 10px"> hi</textarea>
                        <div class="input-group-prepend">
                            <img src="{{ asset('trainer/images/1624461502.png')}}" style="height: 50px; width: 50px; border-radius: 50%;">
                        </div>
                    </div>
                    <p class="text-dark float-left" style="font-size: 9px">10:12 AM</p>
                </div>
                <div class="card-footer">
                    <form action="{{ route('chats.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div  class="form-group input-group">
                            <input type="text" name="model_id" hidden value="1" class="form-control">
                            <input type="text" name="message" placeholder="Write Message...." class="form-control">
                            <div class="input-group-prepend">
                                <button type="submit" name="btn" class="btn btn-skype"><i class="fas fa-paper-plane fa-2x" style="color: #0a2d6c"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
