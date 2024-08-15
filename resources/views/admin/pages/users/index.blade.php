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
                        <h1>{{ __('User') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('User Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('User') }}</li>
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
                                    <h3 class="card-title">{{ __('User List') }}</h3>
                                </div>
                                <div class="col-2 ">
                                    @if(Auth::user()->permissions->contains('slug','create'))
                                    <button type="button" class="btn btn-sm btn-success float-right mb-3" data-toggle="modal" data-target="#modal-default"><span class="fas fa-plus"></span>
                                        {{ __('Add User') }}
                                    </button>
                                    @endif
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered maantable">
                                        <thead>
                                        <tr>
                                            <th>{{ __('#') }}</th>
                                            <th>{{ __('Name') }} </th>
                                            <th>{{ __('User Name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Role') }}</th>
                                            <th>{{ __('Permission') }}</th>
                                            <th class="maanaction">{{ __('Action') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $key=>$user)
                                            @if(Auth::user()->user_type >= $user->user_type)
                                                @if(!\Auth::user()->hasRole('master-admin') && $user->hasRole('master-admin')) @continue; @endif
                                                <tr {{ Auth::user()->id ==$user->id ? 'bgcolor=#ddd' : '' }}>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                                    <td>{{ $user->user_name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @if($user->roles->isNotEmpty())
                                                            @foreach($user->roles as $role)
                                                                <span class="badge badge-secondary">
                                                            {{ $role->name }}
                                                        </span>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>@if($user->permissions->isNotEmpty())
                                                            @foreach($user->permissions as $permission)
                                                                <span class="badge badge-secondary">
                                                            {{ $permission->name }}
                                                        </span>
                                                            @endforeach
                                                        @endif
                                                    </td>

                                                    <td class="maanaction">
                                                        <div class="row" id="maanaction-in">
                                                            {{--edit opiton--}}
                                                            @if(Auth::user()->permissions->contains('slug','edit'))
                                                                @if($user->user_type==2 &&$user->id==1)

                                                                @else
                                                                    <a href="{{ route('admin.user.edit',$user->id) }}"  class="edit-item"  >
                                                                        <i class="fa fa-edit text-info"></i>
                                                                    </a>
                                                                    @endif
                                                            @endif
                                                            {{-- delete option--}}
                                                            @if(Auth::user()->permissions->contains('slug','delete'))
                                                                @if($user->user_type==2 &&$user->id==1)

                                                                @else

                                                                <form class="archiveItem" action="{{ route('admin.user.destroy',$user->id) }}" method="post" >
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a onclick="onSubmitDelete(this)"
                                                                       id="{{$user->id}}">
                                                                        <i class="fa fa-trash text-danger"></i>
                                                                    </a>

                                                                </form>
                                                                    @endif
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $users->links() }}

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
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('New User') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- form start -->
                <form method="POST" action="{{ route('admin.user') }}" onsubmit="onSubmitInsert()" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('First Name') }}</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name" value="{{old('first_name')}}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('Last Name') }}</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name" value="{{old('last_name')}}" required>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('User Name') }}</label>
                                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter user name" value="{{ old('user_name') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('User Type') }}</label>
                                        <select  class="form-control" name="user_type" id="user_type"  required>
                                            <option value="">{{ __('select type') }}</option>
                                            <option value="{{ __('2') }}">{{ __('Super Admin') }}</option>
                                            <option value="{{ __('1') }}">{{ __('Admin') }}</option>
                                            <option value="{{ __('0') }}">{{ __('Instructor') }}</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                             <div class="form-group">
                                <label for="exampleInputEmail">{{ __('Email') }}</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="******" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="******" required>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Role') }}</label>
                                <select  class="form-control" name="role" id="role" required>
                                    <option value="">{{ __('select type') }}</option>
                                   @foreach($roles as $role)
                                        <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="permissions_box">
                                <label for="name">{{ __('Permissions') }}</label>
                                <div id="permissions_checkbox_list">

                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



@endsection
@section('js_content')

    <script src="{{ asset('public/backend/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/backend/js/custom-ajax.js') }}" type="text/javascript"></script>

@endsection
