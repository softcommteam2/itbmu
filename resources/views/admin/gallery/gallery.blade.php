@extends('front.layout.base')
@section('content')
<div class="wrapper row3">

  <main class="container hoc clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
<style>
  div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
  }
  
  div.gallery:hover {
    border: 1px solid #777;
  }
  
  div.gallery img {
    width: 100%;
    height: auto;
  }
  
  div.desc {
    padding: 15px;
    text-align: center;
  }
  </style>

<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="{{asset('images/itbmu.jpg')}}"  alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="{{asset('images/itbmu.jpg')}}"  alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="{{asset('images/itbmu.jpg')}}"  alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="{{asset('images/The announcement.jpg')}}"  alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="{{asset('images/The announcement.jpg')}}"  alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="{{asset('images/The announcement.jpg')}}"  alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="{{asset('images/The announcement.jpg')}}"  alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="{{asset('images/The announcement.jpg')}}"  alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="{{asset('images/The announcement.jpg')}}"  alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
    </div>
  </main>
</div>
@endsection