@extends('Layout.Front')
@section('Title',$title)


@section('content')


@include('Includes.Front.DesktopSlider')
@include('Includes.Front.MobileSlider')

@include('Includes.Front.TopSlider')
@if (isset($updated_series) && count($updated_series))
<section class="movie-sections">
    <h3>
    {{$title}} های به روز شده
    <a href="{{route('S.ShowMore')}}?c=updated&type=serie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
       
            @foreach ($updated_series as $serie)
            <div class="mx-2 mw-180">
            @component('components.article',['model'=>$serie , 'ajax'=>1,'updated'=>1])
            @endcomponent
            </div>
            @endforeach

       
    </div>

</section>
@endif



@if (count($newseries))
<section class="movie-sections">
    <h3>
        تازه ترین ها
        <a href="{{route('S.ShowMore')}}?c=new&type=serie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
   <div class="row flex-nowrap">

            @foreach ($newseries as $post)
            <div class="mx-2 mw-180">
                @component('components.article',['model'=>$post, 'ajax'=>1])
                @endcomponent
            </div>
            @endforeach
      
    </div>
    @component('components.showDetail',['model'=>$post])
    @endcomponent
</section>
@endif



@endsection