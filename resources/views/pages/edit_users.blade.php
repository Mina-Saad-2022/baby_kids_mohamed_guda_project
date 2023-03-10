@extends('layouts.default')

@section('title', 'Managed Tables')

@push('css')
    <link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin register -->
    <div class="register register-with-news-feed create_new_user">
        <!-- begin register -->
        <div class="register register-with-news-feed  ">

          <!-- begin right-content -->
        <div class="right-content parent">
            <!-- begin register-content -->
            <div class="register-content">
                <form action="{{route('done_edit')}}" method="post" class="margin-bottom-0" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{$users->id}}">
                    <div class="d-flex col-12 inputs">
                        <div class="col-6">
                            <label class="control-label label_create_user">Name <span class="text-danger">:</span></label>
                            <div class="row row-space-10">
                                <div class="col-md-12">
                                    <input type="text" name="name" value="{{$users->name}}"  class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"  />
                                    {{--the validation error--}}
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                             <h4 class="message_wrong">{{ $message }}</h4>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="control-label label_create_user">Email <span class="text-danger">:</span></label>
                            <div class="row row-space-10">
                                <div class="col-md-12">
                                    <input type="text" name="email" value="{{$users->email}}" class="form-control " placeholder="Your Email"  />
                                    {{--the validation error--}}

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                             <h4 class="message_wrong">{{ $message }}</h4>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col-12 inputs">
                    <div class="col-6">
                        <label class="control-label label_create_user">Password <span class="text-danger">:</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-12">
                                <input type="text" value="{{$users->password}}" name="password" class="form-control " placeholder="Your Password"  />
                            </div>

                        </div>
                    </div>



                    <div class="col-6">
                        <label class="control-label label_create_user">Repeat Password <span class="text-danger">:</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-12">
                                <input type="text" value="{{$users->password_confirmation}}" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Repeat Your Password" required />
                                {{--the validation error--}}
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                     <h4 class="message_wrong">{{ $message }}</h4>
                                                 </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex col-12 inputs">
                        <div class="col-6">
                            <label class="control-label label_create_user">Phone <span class="text-danger">:</span></label>
                            <div class="row row-space-10">
                                <div class="col-md-12">
                                    <input type="text" name="phone"  value="{{$users->phone}}" class="form-control @error('phone') is-invalid @enderror" placeholder="Your Number Phone"  />
                                    {{--the validation error--}}
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                             <h4 class="message_wrong">{{ $message }}</h4>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="control-label label_create_user">Gender <span class="text-danger">:</span></label>
                            <div class="row row-space-10">
                                <div class="col-md-12">
                                    <select class="form-control" name="gender">
                                        <option >male</option>
                                        <option >Female</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="col-6">
                        <div class="row row-space-10">
                            <div class="col-md-12">
                                <input type="file" name="photo"  id="photo" aria-placeholder="photo"  class="form-control " placeholder="Your Number Phone"  />

                            </div>
                        </div>
                    </div>


                    <div class="register-buttons p-5">
                        <button type="submit" class="btn btn-primary btn-block btn-lg btn_create_user">Edit Done</button>
                    </div>


                </form>






























            </div>
            <!-- end register-content -->
        </div>
        <!-- end right-content -->
    </div>
    <!-- end register -->
@endsection
