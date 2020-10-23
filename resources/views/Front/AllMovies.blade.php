@extends('Layout.Front')
@section('Title',$title)


@section('content')


@include('Includes.Front.DesktopSlider')
@include('Includes.Front.MobileSlider')



@if (count($newmovies))
<section class="movie-sections">
    <h3>
        تازه ترین فیلم ها
        <a href="{{route('S.ShowMore')}}?c=new&type=movie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
   
        <div class="row flex-nowrap">
            @foreach ($newmovies as $movie)
            <div class="mx-2 mw-180">
                @component('components.article',['model'=>$movie,'ajax'=>1])
                @endcomponent
            </div>
            @endforeach

        </div>
       
    @component('components.showDetail')
    @endcomponent
</section>
@endif

@if (count($latestdoble))
<section class="movie-sections">
    <h3>
        دوبله فارسی بدون سانسور
        <a href="{{route('S.ShowMore')}}?c=doble&type=movie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
   
      <div class="row flex-nowrap">
            @foreach ($latestdoble as $post)
            <div class="mx-2 mw-180">
                @component('components.article',['model'=>$post , 'ajax'=>1])
                @endcomponent
            </div>
            @endforeach

        </div>
        
    @component('components.showDetail')
    @endcomponent
</section>
@endif



@if (count($newyear))
<section class="movie-sections">
    <h3>
        {{$year}}
        <a href="{{route('S.ShowMore')}}?c={{$year}}&type=movie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
   <div class="row flex-nowrap">
      
            @foreach ($newyear as $post)
            <div class="mx-2 mw-180">
                @component('components.article',['model'=>$post , 'ajax'=>1])
                @endcomponent
            </div>
            @endforeach

    
    </div>
    @component('components.showDetail')
    @endcomponent
</section>
@endif



@if (isset($cat) && count($cat))
@foreach ($cat as $key=>$category)
@if (count($category))
<section class="movie-sections">
    <h3>
        {{\App\Category::whereLatin($key)->first()->name}}
        <a href="{{route('S.ShowMore')}}?c=animation&type=movie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
   <div class="row flex-nowrap">
       
            @foreach ($category as $animation)
            <div class="mx-2 mw-180">
                @component('components.article',['model'=>$animation , 'ajax'=>1])
                @endcomponent
            </div>
            @endforeach

       
    </div>
    @component('components.showDetail')
    @endcomponent
</section>
@endif
@endforeach
@endif






@if (isset($top250) && count($top250))
<section class="movie-sections">
    <h3>
        برترین فیلم های Imdb
        <a href="{{route('S.ShowMore')}}?c=top250&type=movie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
   <div class="row flex-nowrap">
       
            @foreach ($top250 as $post)
            <div class="mx-2 mw-180">
                @component('components.article',['model'=>$post , 'ajax'=>1])
                @endcomponent
            </div>
            @endforeach

       
    </div>
    @component('components.showDetail')
    @endcomponent
</section>
@endif


@endsection