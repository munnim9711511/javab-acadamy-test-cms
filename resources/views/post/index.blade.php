@extends('layout.main')
@section('title')
    post
@endsection
@section('body')
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col">
                <a class="waves-effect waves-light btn modal-trigger #ff1744 red accent-3" href="#modal1">Add New</a>
            </div>
        </div>
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

                                        <span style="float: right">
                                            <a href="/post/delete/{{$post->id}}">
                                                <i class="material-icons">delete</i>

                                            </a>
                                            <a href="/post/edit/{{$post->id}}">
                                                <i class="material-icons">edit</i>

                                            </a>

                                        </span>
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
        {{$posts ->links()}}

    </div>
    </div>


    <!-- Modal Structure -->
    <div id="modal1" class="modal" style="padding-right: 30px;padding-left  : 30px">
        <form action="/post" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <h4>New Post</h4>
                <div class="row">
                    <div class="col s3">
                        <h5
                            style="
                         vertical-align: bottom;
                        margin-top: 23px;
                        float: right;">
                            Title
                        </h5>

                    </div>
                    <div class="col s9">

                        <input name="title" required type="text">


                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <h5
                            style="
                         vertical-align: bottom;
                        margin-top: 23px;
                        float: right;">
                            Slug
                        </h5>

                    </div>
                    <div class="col s9">

                        <input name="slug" required type="text">


                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <h5
                            style="
                         vertical-align: bottom;
                        margin-top: 23px;
                        float: right;">
                            Content
                        </h5>

                    </div>
                    <div class="col s9">
                        <h6>
                            <textarea name="content" required id="textarea1" class="materialize-textarea"></textarea>
                        </h6>

                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <h5
                            style="
                         vertical-align: bottom;
                        margin-top: 23px;
                        float: right;">
                            Excerpt
                        </h5>

                    </div>
                    <div class="col s9">
                        <h6>
                            <textarea name="excerpt" required id="textarea1" class="materialize-textarea"></textarea>
                        </h6>

                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <h5
                            style="
                         vertical-align: bottom;
                        margin-top: 23px;
                        float: right;">
                            Featured Image
                        </h5>

                    </div>
                    <div class="col s9">

                        <div class="file-field input-field">
                            <div class="btn #ff1744 red accent-3">
                                <span>Select an Image <i style="vertical-align: bottom"
                                        class="material-icons">cloud_upload</i></span>
                                <input name="fimage" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input required class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <h5
                            style="
                         vertical-align: bottom;
                        margin-top: 23px;
                        float: right;">
                            Image Collection
                        </h5>

                    </div>
                    <div class="col s9">

                        <div class="file-field input-field">
                            <div class="btn #ff1744 red accent-3">
                                <span>Select Images <i style="vertical-align: bottom"
                                        class="material-icons">cloud_upload</i></span>
                                <input name="images[]" type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <h5
                            style="
                         vertical-align: bottom;
                        margin-top: 23px;
                        float: right;">
                            Published Date
                        </h5>

                    </div>
                    <div class="col s9">

                        <div class="file-field input-field">
                            <input name="date" required type="date">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3">


                    </div>
                    <div class="col s9">

                        <button type="submit" class="btn #ff1744 red accent-3">Save</button>
                        <button class="btn">Cancel</button>
                    </div>
                </div>

        </form>

    </div>
@endsection
