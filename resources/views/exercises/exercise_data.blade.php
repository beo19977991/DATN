<div>
@foreach($exercise as $ex)
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="">
            <video class="img-responsive" controls>
                <source src="upload/exercise/video/{{$ex->video}}">
            </video>
            <div class="categories">
                <h3>Muscle:<a href="#">{{" ".$ex->typeExercise->typeExerciseName}}</a></h3>
                <h3>Trainer:<a href="">{{" ".$ex->user->username}}</a></h3>
                <h3><a href="video/{{$ex->id}}">{{$ex->title}}</a></h3>
            </div>
        </div>
    </div>
@endforeach
    <div class="pagination-area product-pagination">
        <ul class="pagination">
            {!! $exercise->links() !!}
        </ul>
    </div>
</div>