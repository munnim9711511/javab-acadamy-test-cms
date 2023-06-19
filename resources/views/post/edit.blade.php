@extends('layout.main')
@section('title')
    edit
@endsection
@section('body')
    <div class="container">
        <form action="/post/update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h5>Edit Post</h5>
                <input type="number" value="{{ $post->id }}" name="id" class="hide">
                <div class="col m8">
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

                            <input name="title" value="{{ $post->title }}" required type="text">


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

                            <input name="slug" value="{{ $post->slug }}" required type="text">


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
                                <textarea name="content" required id="textarea1" class="materialize-textarea">
                                    {{ $post->content }}
                                </textarea>
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
                                <textarea name="excerpt" required id="textarea1" class="materialize-textarea">
                                    {{ $post->excerpt }}
                                </textarea>
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
                                <input name="date"
                                    value="{{ Carbon\Carbon::parse($post->published_date)->format('Y-m-d') }}" required
                                    type="date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s3">


                        </div>
                        <div class="col s9">

                            <button type="submit" class="btn #ff1744 red accent-3">Update</button>

                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
@endsection
