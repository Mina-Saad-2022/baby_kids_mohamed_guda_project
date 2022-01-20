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
        <div class="right-content m-auto">
            <!-- begin register-content -->
            <div class="register-content">
                <form action="{{route('add_user')}}" method="post" class="margin-bottom-0">
                    @csrf
                    <label class="control-label label_create_user">Name <span class="text-danger">:</span></label>
                    <div class="row row-space-10">
                        <div class="col-md-12 m-b-15">
                            <input type="text" name="name" class="form-control" placeholder="First name" required />
                        </div>

                    </div>
                    <label class="control-label label_create_user">Email <span class="text-danger">:</span></label>
                    <div class="row m-b-15">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="Email address" required />
                        </div>
                    </div>

                    <label class="control-label label_create_user">Password <span class="text-danger">:</span></label>
                    <div class="row m-b-15">
                        <div class="col-md-12">
                            <input type="password"  name="password" class="form-control" placeholder="Password" required />
                        </div>
                    </div>
{{--                    <label class="control-label label_create_user">Pitcher User <span class="text-danger">:</span></label>--}}
{{--                    <div class="row m-b-15">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <input type="file" class="form-control"  required />--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="register-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg btn_create_user">Create User</button>
                    </div>


                </form>
            </div>
            <!-- end register-content -->
        </div>
        <!-- end right-content -->
    </div>
    <!-- end register -->
@endsection
