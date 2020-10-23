
<style>
    .shadow-bottom-slider {
    background: linear-gradient(to top,rgba(15, 15, 15, 0.726), rgba(255, 255, 255, 0));
}
    .details{
            position: absolute;
                top: 120px;padding-right:20px;z-index:4
            
    }

    .title-detail{
            color: white;
                z-index: 22;
                text-align: right;
               
    }
    .bttn{
   
    background: white;
    border-radius: 4px;
    margin-top: 20px;
    
    padding: 11px;
    }
    .stars-wrapper{
          display: flex;
          margin-top: 25px;
           text-align: right;
    color: white;
    font-size: 12px;
   
    }
    .director-wrapper{
        display: flex;
    margin-top: 7px;
    color: white;
    font-size: 12px;
    }
    .links-wrapper{
        width: 50%;
            margin-top: 11px;
            color: white;
            text-align: right;
    }
  .fadeslick  button.slick-arrow {
          position: absolute;
    top: 70%;
    left: 54px;
    border: none;
    background: transparent;
    color: white;
    font-size: 50px;

}
.fadeslick button.custom-prev.slick-arrow {
    left: 119px;
}

button.owl-prev{
        color: white !important;
    font-size: 80px !important;
    position: absolute;
    left: 190px;
    top: 65%;
}

button.owl-next{
        color: white !important;
    font-size: 80px !important;
    position: absolute;
    left: 96px;
    top: 65%;
}
/* .slick-next {
    left: 64px !important;
    right: auto;
}
.slick-prev::before, .slick-next::before {
    font-size: 60px !important;
} */
</style>
<section class="container-fluid px-0 d-none d-md-block">

       

        <div class="">
            <img class="slider-back-img w-100" style="height: 100vh;object-fit: cover" src="{{asset($slider->image)}}" alt="{{$slider->post->title}}">
            <div class="shadow-bottom-slider"></div>
            <div class="details" >
               
                <h4 class="title-detail">
                    {{$slider->post->title}}
                </h4>
                <div class="links-wrapper">
                    {!! str_limit($slider->post->description,250) !!}
                </div>
               <div class="d-flex">
                    @if ($slider->post->type == 'movies')
                <a href="{{$slider->post->play()}}" class="bttn  ml-2">
                    <i class="fa fa-play"></i>
                    پخش فیلم
                </a>
                @endif
                <a href="{{$slider->post->path()}}" class="bttn ">
                    <i class="fa fa-exclamation"></i>
                    جزئیات بیشتر
                </a>
               </div>
               <div class="stars-wrapper">
                    @if (count($slider->post->actors))
                <h6>
                    ستارگان: </h6>
                @php
                $countactors = count($slider->post->actors);
                @endphp
                <h5>
                    @foreach ($slider->post->actors->take(10) as $key =>$item)
                    <span href="#">
                        {{$item->name }}
                        {{ $key == ($countactors -1)  ? ' ' : ' - '}}
                    </span>
                    @endforeach
                </h5>


                @endif
               </div>
                @if ($slider->post->directors)
                <div class="director-wrapper">
                    کارگران:
                    @php

                    $countdirectors = count($slider->post->directors);
                    @endphp
                    @foreach ($slider->post->directors as $key=> $item)
                    <a href="#" class="text-white">

                        {{$item->name }}
                        {{$countdirectors -1  == $key ? ' ' : ' - '}}
                    </a>
                    @endforeach
                </div>
                @endif
            </div>
        </div>

       

   

</section>
