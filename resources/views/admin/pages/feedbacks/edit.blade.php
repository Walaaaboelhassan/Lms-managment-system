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
                        <h1>{{ __('Feedback') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('Feedback Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Feedback Edit') }}</li>
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
                                    <h3 class="card-title">{{ __('Feedback Edit') }}</h3>
                                </div>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <!-- form start -->
                                <form method="POST" action="{{ route('admin.feedback.update',$feedback->id) }}" onsubmit="onSubmitUpdate()" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Name') }}</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter title" value="{{ $feedback->name }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">{{ __(' Institute') }}</label>
                                                <input type="text" class="form-control" name="institute" id="institute"  value="{{ $feedback->institute }}" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">{{ __(' Comment') }}</label>
                                                <textarea class="form-control" name="comment" id="comment"  required>{{ $feedback->comment }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Image') }}</label>
                                                @if ( $feedback->image)
                                                    <img src="{{ asset($feedback->image) }}" class="editimage">
                                                @else
                                                    <p>{{ __('No image found') }}</p>
                                                @endif
                                                <input type="file" class="form-control" name="image" id="image" value="{{ $feedback->image }}">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <a  href="{{ route('admin.feedback') }}" class="btn btn-sm btn-secondary float-sm-right "  ><span class="fas fa-arrow-left"></span>
                                            {{ __('back') }}
                                        </a>
                                        <button type="submit" class="btn btn-primary btn-sm">{{ __('update') }}</button>
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
