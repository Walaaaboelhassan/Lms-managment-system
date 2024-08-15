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
                        <h1>{{ __('Feedback') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('Feedback Manage') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Feedback List') }}</li>
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
                                    <h3 class="card-title">{{ __('Feedback List') }}</h3>
                                </div>
                                <div class="col-2 pull-right ">
                                    @if(Auth::user()->permissions->contains('slug','create'))
                                    <button type="button" class="btn btn-sm btn-success float-sm-right " data-toggle="modal" data-target="#modal-default"><span class="fas fa-plus"></span>
                                        {{ __('Add Feedback') }}
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
                                        <th>{{ __('Institute') }}</th>
                                        <th>{{ __('Comment') }}</th>
                                        <th>{{ __('Image') }}</th>
                                        <th class="maanaction">{{ __('Action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                @foreach($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $feedback->name }}</td>
                                        <td>{{ $feedback->institute }}</td>
                                        <td>{{ $feedback->comment }}</td>
                                        <td><img src="{{ asset($feedback->image) }}" ></td>
                                        <td>
                                         <div class="row">
                                             {{--edit opiton--}}
                                             @if(Auth::user()->permissions->contains('slug','edit'))
                                                 <a href="{{ route('admin.feedback.edit',$feedback->id) }}"  class="edit-item"  >
                                                     <i class="fa fa-edit text-info"></i>
                                                 </a>|
                                             @endif
                                             {{-- delete option--}}
                                             @if(Auth::user()->permissions->contains('slug','delete'))

                                                 <form class="archiveItem" action="{{ route('admin.feedback.destroy',$feedback->id) }}" method="post" >
                                                     @csrf
                                                     @method('delete')
                                                     <a onclick="onSubmitDelete(this)"
                                                        id="{{$feedback->id}}"
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
                                {{ $feedbacks->links() }}
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
                    <h4 class="modal-title">{{ __('New Feedback') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- form start -->
                <form method="POST" action="{{ route('admin.feedback') }}" onsubmit="onSubmitInsert()" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('Name') }}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter title" value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{ __(' Institute') }}</label>
                                <input type="text" class="form-control" name="institute" id="institute" placeholder="Enter institute...." value="{{old('designation')}}" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{ __(' Comment') }}</label>
                                <textarea class="form-control" name="comment" id="comment" placeholder="Enter comment...." value="{{old('description')}}" required></textarea>
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
