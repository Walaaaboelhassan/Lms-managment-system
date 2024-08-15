@extends('maanuser.master')

@section('css_content')
    <style>

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
                        <h1>{{ __('Course') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('Course Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __(' Course') }}</li>
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
                                    <h3 class="card-title">{{ __('Course List') }}</h3>
                                </div>
                                <div class="col-2 ">

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table class="table table-bordered maantable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Description') }}</th>
                                        <th>{{ __('Duration') }}</th>
                                        <th>{{ __('Price') }}</th>
                                        <th>{{ __('Image') }}</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($courses as $key=>$course)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $course->title }}</td>
                                            <td>{{ $course->description }}</td>
                                            <td>{{ $course->duration }}</td>
                                            <td>{{ $course->price }}</td>
                                            <td><img src="{{ asset($course->image)  }}"></td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $courses->links() }}
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

@endsection
