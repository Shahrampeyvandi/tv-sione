<a href="{{$blog->url()}}" class="blog-link">
<img src="{{asset(unserialize($blog->poster)['resize'])}}" alt="{{$blog->title}}">
<h2>{{$blog->title}}</h2>
</a>