@extends('layouts.app', ['title' => 'BMR-Sheet'])
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>BMR Calculator</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">BMR Calculator</li>
                                @if($user_login->role == 2)
                                <li> <a href="page/create_exercise">BMR Calculator</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<div class="omni-calculator" data-calculator="health/bmr" data-width="auto" data-config='{}' data-currency="GBP" data-show-row-controls="false" data-version="3" data-t="1556639684322">
  <div class="omni-calculator-header"></div>
  <div class="omni-calculator-footer">
    <a href="https://www.omnicalculator.com/" target="_blank"><img alt="GymStreak" class="omni-calculator-logo" src="https://gymstreak.ghost.io/content/images/2019/04/Artboard-2.svg" /></a>
  </div>
</div>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script async src="https://cdn.omnicalculator.com/sdk.js"></script>
<script>
    $(document).ready(function(){

    });
</script>
@endsection