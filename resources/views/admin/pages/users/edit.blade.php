@extends('admin.master')

@section('main_content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('admin.partials._message')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- Content Header  Title -->
                        <h1>{{ __('user') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('user Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('user edit') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header col-12 row ">

                                <div class="col-10">
                                    <h3 class="card-title">{{ __('user Edit') }}</h3>
                                </div>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <!-- form start -->
                                <form method="POST" action="{{ route('admin.user.update',$user->id) }}" onsubmit="onSubmitUpdate()" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">{{ __('First Name') }}</label>
                                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name" value="{{ $user->first_name }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">{{ __('Last Name') }}</label>
                                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name" value="{{ $user->last_name }}" required>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">{{ __('User Name') }}</label>
                                                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter user name" value="{{ $user->user_name }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">{{ __('User Type') }}</label>
                                                        <select  class="form-control" name="user_type" id="user_type"  required>
                                                            <option value="">{{ __('select type') }}</option>
                                                            <option value="{{ __('2') }}"@if($user->user_type==2) selected @endif>{{ __('Super Admin') }}</option>
                                                            <option value="{{ __('1') }}"@if($user->user_type==1) selected @endif>{{ __('Admin') }}</option>
                                                            <option value="{{ __('0') }}" @if($user->user_type==0) selected @endif>{{ __('Instructor') }}</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail">{{ __('Email') }}</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ $user->email }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="******" >
                                            </div>
                                            <div class="form-group">
                                                <label for="confirmPassword">{{ __('Confirm Password') }}</label>
                                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="******" >
                                            </div>
                                            <div class="form-group">
                                                <label for="role">{{ __('Role') }}</label>
                                                <select  class="form-control" name="role" id="roleedit" required>
                                                    <option value="">select type</option>
                                                    @foreach($roles as $role)
                                                        <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}"{{ $user->roles->isEmpty() || $role->name !=$userRole->name ? "" : "selected" }}>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group" id="permissions_box">
                                                <label for="permission">{{ __('Select Permissions') }}</label>
                                                <div id="permissions_checkbox_list">

                                                </div>
                                            </div>
                                            @if($user->permissions->isNotEmpty())
                                                @if($rolePermissions !=null)
                                                    <div class="form-group" id="user_permissions_box">
                                                        <label for="permission">{{ __('User Permissions' )}}</label>
                                                        <div id="user_permissions_checkbox_list">
                                                            @foreach($rolePermissions as $permission)
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input" type="checkbox" name="permissions[]" id="{{$permission->slug}}" value="{{$permission->id}}" {{ in_array($permission->id,$userPermissions->pluck('id')->toArray()) ? 'checked="checked"' : '' }}>
                                                                    <label class="custom-control-label" for="{{$permission->slug}}">{{ $permission->name }}</label>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                @endif
                                            @endif

                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <a  href="{{ route('admin.user') }}" class="btn btn-sm btn-secondary float-sm-right "  ><span class="fas fa-arrow-left"></span>
                                            {{ __('back') }}
                                        </a>
                                        <button type="submit" class="btn btn-primary btn-sm">{{ __('update' )}}</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- modal -->

@endsection
@section('js_content')
    <script src="{{ asset('public/backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/custom-ajax.js') }}" type="text/javascript"></script>
    <script>
        "use strict";
        // global app configuration object
        var config = {
            routes: {
                userrole: "{{ URL::to('admin/users/ajax') }}"
            }
        };
    </script>

@endsection
