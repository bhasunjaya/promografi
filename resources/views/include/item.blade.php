<div class="item">
	<div class="wrapper">
		<div class="image">
			<h3>
				<a href="{{route('category',$post->category->slug)}}" class="tag category">{{$post->category->title}}</a>
				<a href="{{route('promo',$post->slug)}}" class="title">{{$post->title}}</a>
				<span class="tag">{{showTimeLeft($post)}} hari lagi</span>
			</h3>
			<a href="single-listing-1.html" class="image-wrapper background-image">
				<img src="{{asset('images/dummy.jpg')}}" alt="">
			</a>
		</div>
		<!--end image-->
		<h4 class="location">{!! showCity($post)!!}</h4>
		<div class="price">{!! showPrice($post) !!}</div>
		<div class="description">
			<p>{{$post->excerpt}}</p>
		</div>
		<!--end description-->
		<a href="{{route('promo',$post->slug)}}" class="detail text-caps underline">Lihat Promo</a>
	</div>
</div>
