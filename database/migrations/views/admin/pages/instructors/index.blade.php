@extends('admin.master')

@section('css_content')
    <style>
        .maanaction{
            width: 10%;
        }
        .maantable img{
            width: 100px;
        }
    </style>
@endsection

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
                        <h1>{{ __('Instructor') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('Instructor Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Instructor List') }}</li>
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
                                    <h3 class="card-title">{{ __('Instructor List') }}</h3>
                                </div>
                                <div class="col-2 pull-right ">
                                    @if(Auth::user()->permissions->contains('slug','create'))
                                    <button type="button" class="btn btn-sm btn-success float-sm-right " data-toggle="modal" data-target="#modal-default"><span class="fas fa-plus"></span>
                                        {{ __('Add Instructor') }}
                                    </button>
                                    @endif
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table class="table table-bordered maantable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Designation') }}</th>
                                        <th>{{ __('Description') }}</th>
                                        <th>{{ __('Image') }}</th>
                                        <th class="maanaction">{{ __('Action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                @foreach($instructors as $instructor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $instructor->name }}</td>
                                        <td>{{ $instructor->designation }}</td>
                                        <td>{{ $instructor->description }}</td>
                                        <td><img src="{{ asset($instructor->image) }}" ></td>
                                        <td>
                                          <div class="row">
                                              {{--edit opiton--}}
                                              @if(Auth::user()->permissions->contains('slug','edit'))
                                                  <a href="{{ route('admin.instructor.edit',$instructor->id) }}"  class="edit-item"  >
                                                      <i class="fa fa-edit text-info"></i>
                                                  </a>|
                                              @endif
                                              {{-- delete option--}}
                                              @if(Auth::user()->permissions->contains('slug','delete'))

                                                  <form class="archiveItem" action="{{ route('admin.instructor.destroy',$instructor->id) }}" method="post" >
                                                      @csrf
                                                      @method('delete')
                                                      <a onclick="onSubmitDelete(this)"
                                                         id="{{$instructor->id}}"
                                                         class=" btn-sm"><i class="fa fa-trash text-danger"></i>
                                                      </a>

                                                  </form>
                                              @endif

                                          </div>
                                        </td>
                                    </tr>
                                @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $instructors->links() }}
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
                    <h4 class="modal-title">{{ __('New Instructor') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- form start -->
                <form method="POST" action="{{ route('admin.instructor') }}" onsubmit="onSubmitInsert()" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('Name') }}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter title" value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{ __(' Designation') }}</label>
                                <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation...." value="{{old('designation')}}" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{ __(' Description') }}</label>
                                <textarea class="form-control" name="description" id="description" placeholder="Enter description...." value="{{old('description')}}" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('Image') }}</label>
                                <input type="file" class="form-control" name="image" id="image"  value="{{old('image')}}" required>
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
