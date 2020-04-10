@extends('layouts.app')
@section('title')
<title>GymStar| News Detail</title>
@endsection
@section('content')
    <!-- End Header area -->
    <!-- Start Inner Banner area -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="innter-title">
                    <h2>News Details</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">News</a></li>
                        <li class="active">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            <!-- End Inner Banner area -->
            <!-- Start details classes area -->
            <div class="news-detail-area padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-news-detail">
                                <div class="class-content">
                                    <div class="detail-img">
                                        <img src="upload/post/photo/{{$post->photo}}">
                                    </div>
                                    <div class="class-heading">
                                        <h3>{{$post->title}}</h3>
                                        <ul>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$post->created_at->format('d M Y')}}</li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i>By : <a href="#">{{" ".$post->user->username}}</a></li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>Comments : <a href="#">{{count($comments)}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <p>{!!$post->body!!}</p>                                        
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-up"></i> <span>Like</span></button>
                                            </div>
                                            <div class="col-md-10" style="margin-left:-40px;">
                                                <button type="button" class="btn btn-primary btn-sm comment" value="{{ $post->id }}"><i class="fa fa-comments"></i> Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="commentField_{{$post->id}}">
                                    @foreach($comments as $comment)
                                        <div class="comment-section">
                                            <div class="pull-left comment-image" id="comment-image" photo="upload/user/photo/{{$user_login->photo}}">
                                                <img src="upload/user/photo/{{$comment->user->photo}}" alt="">
                                            </div>
                                            <div class="media-body comment-content">
                                                <h4 id="username" user_name="{{$user_login->username}}">{{$comment->user->username}}</h4>
                                                <div class="date-time">{{$comment->created_at->format('d M Y H:i')}}</div>
                                                <p>{{$comment->body}}</p>
                                                <div class="reply">
                                                    <i class="fa fa-mail-forward" aria-hidden="true"></i><a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @if(isset($user_login))
                                        <div class="leave-comment">
                                            <div id="comment_{{ $post->id }}">
                                            </div>
                                            <div class="comment-form" >
                                                <form  class="form-horizontal" id="commentForm_{{$post->id}}">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <fieldset>
                                                    <!-- Textarea -->
                                                    <div class="form-group">
                                                    <div class="col-md-12">
                                                        <textarea class="form-control commenttext" id="commenttext" name="commenttext" data-id="{{$post->id}}" iduser= "{{$user_login->id}}"></textarea>
                                                    </div>
                                                    </div>
                                                    <!-- Button -->
                                                    <div class="form-group">
                                                    <div class="col-md-12">
                                                        <button type="button" id="submitcomment" class="submitcomment btn btn-default" value="{{$post->id}}">Send Message</button>
                                                    </div>
                                                    </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- end new sigle detail -->
                        </div>
                        <!-- end col 9 -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="right-sidebar">
                                <div class="single-sidebar">
                                    <h3>Search</h3>
                                    <div class="sidebar-search">
                                        <input type="text" placeholder="Search here...">
                                        <span><button type="submit"><i class="fa fa-search"></i></button></span>
                                    </div>
                                </div>
                                <div class="single-sidebar">
                                    <h3>Categories</h3>
                                    <div class="categories">
                                        <ul>
                                            <li><a href="news.html">Fitness Classes</a></li>
                                            <li><a href="news.html">Body Building</a></li>
                                            <li><a href="news.html">Trainer</a></li>
                                            <li><a href="news.html">Running</a></li>
                                            <li><a href="news.html">Yoga</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar">
                                    <h3>Archives</h3>
                                    <div class="archives-list">
                                        <table style="width:100%; border:0;">
                                            <tbody>
                                                <tr>
                                                    <td>February</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>January</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>November</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>December</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- End details classes area -->
@endsection
@section('ajax')
<script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function()
     {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.comment', function(){
                var id = $(this).val();
                if($('#commentField_'+id).is(':visible')){
                    $('#commentField_'+id).slideUp();
                }
                else{
                    $('#commentField_'+id).slideDown();
                    // getComment(id);
                }
            });
            $('#submitcomment').on('click' , function(){
                const months = ["Jan", "Feb", "Mar","Apr", "May", "Jun", "Jul", "Aau", "Sep", "Oct", "Nov", "Dec"];
                var id = $(this).val();
                var commenttext= ($('#commenttext').val());
                var user_id =$('#commenttext').attr("iduser");
                var parent_id =1;
                var url_photo= $('#comment-image').attr("photo");
                var username = $('#username').attr("user_name");
                let current_datetime = new Date();
                let formatted_date = current_datetime.getDate() + "-" + months[current_datetime.getMonth()] + "-" + current_datetime.getFullYear();
                let formated_time = current_datetime.getHours() + ":"+ current_datetime.getMinutes() + ":" + current_datetime.getSeconds();

                if(commenttext==''){
                    alert('Please write a Comment First!');
                }
                else{
                    $(".comment-section").append('<div class="comment-section"><div class="pull-left comment-image"><img src="'+url_photo+'" alt=""></div><div class="media-body comment-content"><h4>'+username+'</h4> <div class="date-time">'+formatted_date+' '+formated_time+'</div> <p>'+commenttext+'</p><div class="reply"> <i class="fa fa-mail-forward" aria-hidden="true"></i><a href="#">Reply</a></div></div></div>');
                    
                    $.ajax({
                        type: 'POST',
                        url: 'postcomment',
                        data: {
                            idUser: user_id,
                            idPost: id,
                            body: commenttext,
                            idParent: parent_id,
                            _token: "{{csrf_token()}}"
                        },
                        success: function(result){

                        },
                    });
                }
 
            });
    });
</script>
@endsection
