@extends('layout.main')
@section('title')
    home
@endsection
@section('body')


            <x-latest-post />

<div class="row">
    <div class="col">
        <div class="row" style="margin-top: 20px">
            @if ($posts !== null)
                @foreach ($posts as $post)
                    <div class="col s12 m12">
                        <div class="card horizontal" style="padding-left: 20px;padding-top: 20px;padding-right: 20px">

                            <div class="row">
                                <div class="col s12 m4">
                                    <img class="responsive-img" src="{{ asset('/coverImage/' . $post->featured_img) }}"
                                        alt="" srcset="">
                                </div>
                                <div class="col s12 m7">
                                    <h5 style="font-weight: bold;color: gray">{{ $post->title }}

                                    </h5>

                                    <h6 style="color: gray">
                                        {{ $post->content }}
                                    </h6>
                                <a href="/get/{{$post->id}}" class="btn #ff1744 red accent-3">Read More  <i style="vertical-align: bottom" class=" material-icons">arrow_forward</i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</div>
@endsection
