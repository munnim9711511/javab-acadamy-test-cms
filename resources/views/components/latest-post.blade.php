<div class="slider">
    <ul class="slides">
        <li>

            <img src="{{ asset('./coverImage/'.$last->featured_img) }}" class="responsive-img" style="opacity: 0.6;"> <!-- random image -->
            <div class="caption center-align" style="background-color: #f5f5f569;padding: 20px">
                <h3 style="color: maroon;font-weight: bolder;">{{$last->title}}</h3>
                <h5 style="color: maroon;font-weight: bolder">{{$last->content}}</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="/get/{{$last->id}}" class="btn #ff1744 red accent-3">Read More  <i style="vertical-align: bottom" class=" material-icons">arrow_forward</i></a>

                            </div>
                        </div>
                    </div>
            </div>
        </li>
    </ul>


</div>
