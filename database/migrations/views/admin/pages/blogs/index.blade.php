@extends('admin.master')

@section('css_content')
    <style>
        .maanaction{
            width: 10%;
        }
        .maantable img{
            width: 100px;
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
                            <li class="breadcrumb-item active">{{ __('Add Blog') }}</li>
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
                            <div class="col-2 ">
                                @if(Auth::user()->permissions->contains('slug','create'))
                                <button type="button" class="btn btn-sm btn-success float-right mb-3" data-toggle="modal" data-target="#modal-default"><span class="fas fa-plus"></span>
                                    {{ __('Add Blog') }}
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
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Short Description') }}</th>
                                    <th>{{ __('Description') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th class="maanaction">{{ __('Actin') }}</th>
                                </tr>
                                </thead>
                                <tbody>

                        @foreach($blogs as $key=>$blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->short_description }}</td>
                                    <td>{{ $blog->description }}</td>
                                    <td><img src="{{ asset($blog->image)  }}"></td>
                                    <td>
                                       <div class="row">
                                           {{--edit opiton--}}
                                           @if(Auth::user()->permissions->contains('slug','edit'))
                                               <a href="{{ route('admin.blog.edit',$blog->id) }}"  class="edit-item"  >
                                                   <i class="fa fa-edit text-info"></i>
                                               </a>|
                                           @endif
                                           {{-- delete option--}}
                                           @if(Auth::user()->permissions->contains('slug','delete'))

                                               <form class="archiveItem" action="{{ route('admin.blog.destroy',$blog->id) }}" method="post" >
                                                   @csrf
                                                   @method('delete')
                                                   <a onclick="onSubmitDelete(this)"
                                                      id="{{$blog->id}}"
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
                            {{ $blogs->links() }}

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
                    <h4 class="modal-title">{{ __('New Blog') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- form start -->
                <form method="POST" action="{{route('admin.blog')}}" onsubmit="onSubmitInsert()"  enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('Title') }}</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{old('title')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="shortiDescription">{{ __('Short Description') }}</label>
                                <textarea class="form-control" name="short_description" id="short_description" placeholder="Enter description...." value="{{old('short_description')}}" required></textarea>
                                <div id="count">Characters: 255 </div>
                            </div>
                            <div class="form-group">
                                <label for="descriptin">{{ __('Description') }}</label>
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
                    <button type="submit" class="btn btn-primary" id="submint">{{ __('Save') }}</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


@endsection
@section('js_content')
    <script src="{{ asset('public/backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/custom-js.js') }}"></script>
@endsection
