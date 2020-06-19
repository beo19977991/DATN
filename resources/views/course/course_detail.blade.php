@extends('layouts.app', ['title' => 'Course'])
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fullcalendar/main.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fullcalendar-daygrid/main.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fullcalendar-timegrid/main.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fullcalendar-bootstrap/main.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('content')
<!-- Start Inner Banner area -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="innter-title">
                    <h2>Single Class</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="">Home</a></li>
                        <li><a href="{{ route('course') }}">Classes</a></li>
                        <li class="active">Class Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- End Inner Banner area -->
<!-- modal -->
<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span>Are you sure you join this class?</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
            <!-- Start details classes area -->
            <div class="classes-detail-area padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-class-detail">
                                <div class="class-content">
                                    <div class="detail-img">
                                        <img src="upload/course/photo/{{$course->photo}}" alt="detail-img">
                                    </div>
                                    <div class="class-heading">
                                        <h3>Body Building</h3>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>Start Time : {{\Carbon\Carbon::parse($course->start_time)->format('d/m/Y')}}</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>End Time : {{\Carbon\Carbon::parse($course->end_time)->format('d/m/Y')}}</li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Trainer : <a href="#">{{$course->trainer->username}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <p>{{$course->body}}</p>
                                    </div>
                                    <div class="choose-body">
                                        <h3>Price</h3>
                                        <ul class="choose-list">
                                        <li>{{$course->price}}</li>
                                        </ul>
                                    </div>
                                    <div class="choose-body">
                                        <h3>Discount</h3>
                                        <ul class="choose-list">
                                        <li>{{$course->discount*100 . "%"}}</li>
                                        </ul>
                                    </div>
                                    <div class="choose-body">
                                        <h3>Member of Classes</h3>
                                        <ul class="choose-list">
                                        @foreach($members as $member)
                                        <li><a href="page/profile/{{$member->id}}">{{$member->username}}</a></li>
                                        @endforeach
                                        </ul>
                                        <a href="page/join_class/{{$course->id}}" id="join-class" class="custom-button" data-title="Join Class">Join Class</a>   
                                    </div>
 <!-- calendar -->
    <!-- Main content -->
    <div class="single-page-area padding-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                      <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                        <!-- Main content -->
                        <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-3">
                                <div class="sticky-top mb-3">
                                <div class="card">
                                    <div class="card-body">
                                    <!-- the events -->
                                    <div id="external-events" style="display:none">
                                        @foreach($type_exercises as $index=>$type_exercise)
                                            @foreach($bg as $i=>$item)
                                                @if($index=== $i)
                                                <div class="external-event {{$item}}">{{$type_exercise->typeExerciseName}}</div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <div class="checkbox" style="display:none">
                                        <label for="drop-remove" >
                                            <input type="checkbox" id="drop-remove" >
                                            remove after drop
                                        </label>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <div class="card">
                                    <div class="card-body">
                                    <!-- /btn-group -->
                                    <div class="input-group">
                                        <div class="input-group-append">
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                    <!-- /input-group -->
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                                <div class="card card-primary">
                                <div class="card-body p-0">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div>
                                <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                    </div>
                    <!-- /.content-wrapper -->
                </div>
            </div>
        </div>
    </div>
  <!-- /.content-wrapper -->                                  
<!-- end calendar -->
                                </div>
                            </div>
                            <!-- Start Related classes -->
                            <div class="related-classes-area nav-on-hover padding-space">
                                <div class="section-title">
                                    <h2>Related Classes</h2>
                                </div>
                                <div class="gym-carousel nav-control-top zoom-gallery"
                                    data-loop="true"
                                    data-items="3"
                                    data-margin="15"
                                    data-autoplay="false"
                                    data-autoplay-timeout="10000"
                                    data-smart-speed="2000"
                                    data-dots="false"
                                    data-nav="true"
                                    data-nav-speed="false"
                                    data-r-x-small="1"
                                    data-r-x-small-nav="true"
                                    data-r-x-small-dots="false"
                                    data-r-x-medium="1"
                                    data-r-x-medium-nav="true"
                                    data-r-x-medium-dots="false"
                                    data-r-small="2"
                                    data-r-small-nav="true"
                                    data-r-small-dots="false"
                                    data-r-medium="3"
                                    data-r-medium-nav="true"
                                    data-r-medium-dots="false"
                                    data-r-large="3"
                                    data-r-large-nav="true"
                                    data-r-large-dots="false">
                                    @foreach($related_classes as $rel_classes)
                                    <div class="single-related-classes">
                                        <div class="classes-img">
                                            <a href="#">
                                                <img src="img/classes/yoga.jpg" alt="">
                                            </a>
                                            <div class="classes-overlay">
                                                <a class="elv-zoom" href="img/classes/yoga.jpg" title="Classic Yoga"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="classes-title">
                                            <h3><a href="#">{{$rel_classes->course_name}}</a></h3>
                                            <p class="date"><span>Start: </span>{{ \Carbon\Carbon::parse($rel_classes->start_time)->format('d/m/Y')}}</p>
                                            <p class ="date"><span>End: </span>{{ \Carbon\Carbon::parse($rel_classes->end_time)->format('d/m/Y')}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Related classes -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End details classes area -->
@endsection
@section('scripts')
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/fullcalendar/main.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/fullcalendar-daygrid/main.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/fullcalendar-timegrid/main.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/fullcalendar-interaction/main.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/fullcalendar-bootstrap/main.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        console.log(eventEl);
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      'themeSystem': 'bootstrap',
      //Random default events
      events    : [
          @foreach ($events as $event)
        {
          title          : '{{$event->title}}',
          start          : new Date('{{$event->start}}'),
          end            : new Date('{{$event->end}}'),
          backgroundColor: '#f56954', //red
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : false
        },
        @endforeach
      ],
      editable  : false,
      droppable : false, // this allows things to be dropped onto the calendar !!!
      eventReceive: function(info) {
        $(".title").text(info.event.title);
        let date = info.event.start
      },
    });
    calendar.render();
});
</script>
@endsection