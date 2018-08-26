@extends('en.app')

@section('content')

<!-- Slidehow Section !-->
@include('en.slider')

<div class="clearfix"></div>
<!-- About Section !-->
@include('en.about')

<div class="clearfix"></div>
<!-- CMC Project Section !-->
@include('en.history')

<div class="clearfix"></div>
<!-- Services Section !--> 
<!-- News Section !-->
@include('en.news')

<div class="clearfix"></div>
<!-- Careers Section !-->

@include('en.careers')
<div class="clearfix"></div>

<!-- Contact Section !-->
@include('en.contacts')


@endsection
