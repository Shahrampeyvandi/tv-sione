@extends('Layout.Front')
@section('Title',$title)


@section('content')


@include('Includes.Front.DesktopSlider')
@include('Includes.Front.MobileSlider')

{{-- @include('Includes.Front.TopSlider') --}}

@if (isset($newsione) && count($newsione))
<section class="movie-sections">
    <h3>
        تازه های سیوان
        <a href="{{route('S.ShowMore')}}?c=newsione&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($newsione as $new)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$new , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

    @component('components.showDetail')
    @endcomponent
</section>
@endif
@if (isset($updated_series) && count($updated_series))
<section class="movie-sections">
    <h3>
        سریال ها و مستندهای به روز شده
        <a href="{{route('S.ShowMore')}}?c=updated&type=serie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($updated_series as $serie)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$serie , 'ajax'=>1,'updated'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif

@if (isset($latestdoble) && count($latestdoble))
<section class="movie-sections">
    <h3>
        فیلم های دوبله بدون سانسور
        <a href="{{route('S.ShowMore')}}?c=doble&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($latestdoble as $post)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$post , 'ajax'=>1,'doble'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif


@if (isset($newyear) && count($newyear))
<section class="movie-sections">
    <h3>
        {{$year}}
        <a href="{{route('S.ShowMore')}}?c={{$year}}&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($newyear as $post)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$post , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif


@if (isset($newseries) && count($newseries))
<section class="movie-sections">
    <h3>
        سریال
        <a href="{{route('S.ShowMore')}}?c=new&type=serie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($newseries as $serie)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$serie , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif


@if (isset($animations) && count($animations))
<section class="movie-sections">
    <h3>
        انیمیشن
        <a href="{{route('S.ShowMore')}}?c=animation&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($animations as $animation)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$animation , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif



@if (isset($scifis) && count($scifis))
<section class="movie-sections">
    <h3>
        ابر قهرمانی
        <a href="{{route('S.ShowMore')}}?c=sci-fi&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($scifis as $scifi)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$scifi , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif


@if (isset($documentaries) && count($documentaries))
<section class="movie-sections">
    <h3>
        مستند
        <a href="{{route('S.ShowMore')}}?c=new&type=documentary">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($documentaries as $documentary)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$documentary , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif

@if (isset($collections) && count($collections))
<section class="movie-sections">
    <h3>
        مجموعه فیلم ها
        <a href="{{route('S.ShowMore')}}?c=collections&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>

    <div class="row flex-nowrap">
        @foreach ($collections as $collection)
        <div class=" mx-2 ">
            @component('components.collection',['collection'=>$collection , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif


@if (isset($actions) && count($actions))
<section class="movie-sections">
    <h3>
        اکشن
        <a href="{{route('S.ShowMore')}}?c=action&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($actions as $action)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$action , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif

@if (isset($horrors) && count($horrors))
<section class="movie-sections">
    <h3>
        ترسناک
        <a href="{{route('S.ShowMore')}}?c=horror&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($horrors as $horror)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$horror , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif

@if (isset($comedies) && count($comedies))
<section class="movie-sections">
    <h3>
        کمدی
        <a href="{{route('S.ShowMore')}}?c=comedy&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($comedies as $comedy)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$comedy , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>

</section>
@endif


@if (isset($top250) && count($top250))
<section class="movie-sections">
    <h3>
        برترین فیلم های Imdb
        <a href="{{route('S.ShowMore')}}?c=top250&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        @foreach ($top250 as $post)
        <div class=" mx-2 mw-180">
            @component('components.article',['model'=>$post , 'ajax'=>1])
            @endcomponent
        </div>
        @endforeach

    </div>


</section>
@endif








@endsection