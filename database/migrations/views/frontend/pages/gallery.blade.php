@extends('frontend.mastertow')

@section('homecontent')
<style>
    .single-gallery img{
        width: 100%;
        max-height: 200px;
    }
</style>

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center">
        <div class="container">
            <div class="breadcrumb-inner">
                <!-- Gallery -->
                <h2 class="page-title">{{ __('Gallery') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->
    <!-- gallery area start -->
    <div class="gallery-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
@foreach($galleries as $gallery)
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="{{ asset($gallery->image) }}" alt="img">
                    </div>

                </div>
                @endforeach
            {{ $galleries->links() }}
            </div>
        </div>
    </div>
    <!-- gallery area end-->

@endsection
