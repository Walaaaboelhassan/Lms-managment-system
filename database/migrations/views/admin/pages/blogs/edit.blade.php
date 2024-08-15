@extends('admin.master')
@section('css_content')
    <style>
        .editimage{
            width: 50px;
        }
        #description{
            height: 150px;
        }
        #count{
            color:green;
            font-weight:bold;
            font-size:15px;
            font-family:arial;
            background-color:#D4FCF6;
            padding-left:5px;
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
                        <h1>{{ __('Blog') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('Blog Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Blog List') }}</li>
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
                                    <h3 class="card-title">{{ __('Blog List') }}</h3>
                                </div>
                                <div class="col-2 pull-right ">
                                    <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-secondary float-sm-right "  ><span class="fas fa-arrow-left"></span>
                                        {{ __('back') }}
                                    </a>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <!-- form start -->
                                <form method="POST" action="{{ route('admin.blog.update',$blog->id) }}" onsubmit="onSubmitUpdate()" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Title') }}</label>
                                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ $blog->title }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="shortDescription">{{ __('Short Designation') }}</label>
                                                <textarea class="form-control" name="short_description" id="short_description"  required>{{ $blog->short_description }}</textarea>
                                                <div id="count">Characters: 255 </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">{{ __('Designation') }}</label>
                                                <textarea class="form-control" name="description" id="description"  required>{{ $blog->description }}</textarea>
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Image') }}</label>
                                                @if ( $blog->image)
                                                    <img src="{{ asset($blog->image) }}" class="editimage">
                                                @else
                                                    <p>{{ __('No image found') }}</p>
                                                @endif
                                                <input type="file" class="form-control" name="image" id="image" value="{{ $blog->image }}">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close') }}</button>
                                        <button type="submit" class="btn btn-primary" id="submint">{{ __('update') }}</button>
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
    <script src="{{ asset('public/backend/js/custom-js.js') }}"></script>
@endsection
