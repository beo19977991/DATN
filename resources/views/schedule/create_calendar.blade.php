@extends('layouts.app', ['title' => 'Class'])
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
                            <h2>Calendar</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li id="course_name" course_id="{{$course->id}}">{{$course->course_name}}</li>
                                <li class="active">Schedule</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<!-- modal -->
<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{$course->course_name .  "calendar"}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span>Title: </span><p class="title"></p>
        <span>Start day:</span><p class="start_time" ></p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="submitForm()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
<!-- modal -->
<div class="modal wanning" id="warning" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{$course->course_name . " calendar"}} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>The date you choose outside of the course</p>
      <p>The course start:{{$course->start_time}} and end: {{$course->end_time}}</p>
        <!-- <span>Start Time: </span> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
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
                                    <div class="card-header">
                                    <h4 class="card-title"><a href="">{{$course->course_name}}</a></h4>
                                    <span>Start: &nbsp; </span><h4 class="card-title" id="course-start">{{$course->start_time}}</h4>
                                    <span>End: &nbsp; </span><h4 class="card-title"id="course-end">{{$course->end_time}}</h4>
                                    </div>
                                    <div class="card-body">
                                    <!-- the events -->
                                    <div id="external-events">
                                        @foreach($type_exercises as $index=>$type_exercise)
                                            @foreach($bg as $i=>$item)
                                                @if($index=== $i)
                                                <div class="external-event {{$item}}">{{$type_exercise->typeExerciseName}}</div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <div class="checkbox" style="display:none">
                                        <label for="drop-remove">
                                            <input type="checkbox" id="drop-remove">
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
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      eventReceive: function(info) {
        $(".title").text(info.event.title);
        let date_event = info.event.start
        let day = date_event.getFullYear() + "-" + (date_event.getMonth() + 1) + "-" + date_event.getDate()
        let time = date_event.getHours() + ":" + date_event.getMinutes(); + ":" + date_event.getSeconds();
        $(".start_time").text(day + " " + time);
        let start_time = $('#course-start').html();
        let end_time = $('#course-end').html();
        let course_start = new Date(start_time);
        let course_end = new Date(end_time);
        if(date_event >= course_start && date_event <= course_end)
        {
          $("#modal").modal('show');
        }
        else
        {
          $("#warning").modal('show');
        }
      },
    });
    calendar.render();
});

function submitForm() {
  let title = $(".title").text();
  let start_time = $(".start_time").text();
  let course_id = $("#course_name").attr("course_id");
  console.log(course_id);
  $.ajax({
    url: "{{ route('createCalendar') }}",
    method: "POST",
    data: {
      title: title,
      start_time: start_time,
      course_id: course_id,
      _token: "{{ csrf_token() }}"
    },
    success: function(result) {
      // console.log(result);
      $(".modal").modal('hide');
    },
    error: function (err) {

    }
  })
}
</script>
@endsection
