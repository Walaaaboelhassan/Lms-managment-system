@extends('admin.master')

@section('css_content')
    <style>
        .editimage{
            width: 50px;
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
                        <h1>{{ __('Course') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('Course Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Course Edit') }}</li>
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
                                    <h3 class="card-title">{{ __('Course Edit') }}</h3>
                                </div>
                                <div class="col-2 pull-right ">
                                    <a  href="{{ route('admin.course') }}" class="btn btn-sm btn-secondary float-sm-right "  ><span class="fas fa-arrow-left"></span>
                                        {{ __('back') }}
                                    </a>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <!-- form start -->
                                <form method="POST" action="{{ route('admin.course.update',$course->id) }}" onsubmit="onSubmitUpdate()" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Category') }}</label>
                                                <select class="form-control" name="category_id" id="category_id">

                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"@if ($category->id == $course->id) selected  @endif>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ $course->title }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">{{ __('Designation') }}</label>
                                                <textarea class="form-control" name="description" id="description"  required>{{ $course->description }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Duration') }}</label>
                                                <input type="text" class="form-control" name="duration" id="duration" placeholder="Enter duration" value="{{ $course->duration }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Price') }}</label>
                                                <input type="text" class="form-control" name="price" id="price" placeholder="Enter duration" value="{{ $course->price }}" >
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Image') }}</label>
                                                @if ( $course->image)
                                                    <img src="{{ asset($course->image) }}" class="editimage">
                                                @else
                                                    <p>{{ __('No image found') }}</p>
                                                @endif
                                                <input type="file" class="form-control" name="image" id="image" value="{{ $course->image }}">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close') }}</button>
                                        <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
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
