@extends('layout.main')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <h4 style="font-weight: bolder;color: gray">
                    {{ $post->title }}
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">

                <h6 style="color: gray;font-weight: bolder">
                    <i class="material-icons" style="color: gray;vertical-align: bottom">date_range</i>
                    {{ Carbon\Carbon::parse($post->published_date)->format('d-m-Y') }}

                </h6>
            </div>
        </div>
        <div class="row">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="{{ asset('./coverImage/' . $post->featured_img) }}" alt="">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col s12 m12">
                <div class="section white">
                    <div class="container">
                        <h6 style="color: gray">{{ $post->excerpt }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">
                <div class="carousel">
                    @if ($post->photos !== null)
                   @foreach ($post->photos as $pic)
                   <a class="carousel-item" href="{{ asset('./postRelPic/'.$pic->pic_img) }}"><img src="{{ asset('./postRelPic/'.$pic->pic_img) }}"></a>
                   @endforeach

                    @endif

                  </div>
            </div>
        </div>

    </div>
@endsection
