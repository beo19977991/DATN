<div>
@foreach($posts as $post)
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="single-news-page">
                <div class="single-news">
                    <img style="width:236.25px;height:142.2px" src="upload/post/photo/{{$post->photo}}">
                    <div class="date">{{$post->created_at->format('d')}}<br>{{$post->created_at->format('M')}}<br>{{$post->created_at->format('Y')}}</div>
                </div>
                <div class="news-content">
                    <h3><a href="/news-detail/{{$post->id}}">{{$post->title}}</a></h3>
                    <p>{{$post->preview}}</p>
                    <a class="read-more" href="/news-detail/{{$post->id}}">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
        <div class="pagination-area product-pagination">
            <ul class="pagination">
                {!! $posts->links() !!}
            </ul>
        </div>
</div>