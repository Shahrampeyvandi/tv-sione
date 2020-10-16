<a href="{{$model->path()}}"  >
    <div class="movie-sections-box">
        <div class="img-box-movies">
            <img src="{{asset(unserialize($model->poster)['resize'])}}" alt="{{$model->name}}">
            <div class="cover-img-movies-details">
                <span>
                    {{$model->name}} -
                    @if ($model->type == 'series' || $model->type == 'documentary')
                    {{\Carbon\Carbon::parse($model->first_publish_date)->format('Y')}}
                    @else
                    {{\Carbon\Carbon::parse($model->released)->format('Y')}}
                    @endif
                </span>
                <span>
                    <i class="fa fa-heart"></i>
                    89%
                </span>
                @if ($model->imdbRating)
                <span dir="ltr">
                    {{$model->imdbRating}} IMDB
                </span>
                @endif
            </div>
        </div>
        <h5>
            {{$model->title}}

        </h5>
        @isset($updated)
        <h6 class="show-updated">
            {{$model->last_updated()}}
        </h6>
        @endisset
        @isset($doble)
        <h6 class="show-updated">
            <i class="fa fa-microphone"></i>
            دوبله سیوان
        </h6>
        @endisset
    </div>
</a>