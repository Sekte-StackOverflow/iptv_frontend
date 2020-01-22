@extends('master')

@section('heading')
<!--   <video id="example_video_1" class="video-js" controls preload="none" width="640" height="264" poster="http://vjs.zencdn.net/v/oceans.png" data-setup="{}">
    <source src="http://serverproyek.000webhostapp.com/cobap3/Yakusoku%20no%20Neverland%2001%20480p%20%5b931B8263%5d.mkv" type="video/mp4">
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video> -->

<div class="video-responsive">
<video id="videojs-hls-quality-selector-player" class="video-js vjs-default-skin" 
    style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit:fill;
    border:0" controls autoplay muted loop playsinline >

<source type="application/x-mpegURL" src="https://bitdash-a.akamaihd.net/content/MI201109210084_1/m3u8s/f08e80da-bf1d-4e3d-8899-f0f6155f6efa.m3u8">
</video>


<script type="text/javascript" src="{{URL::asset('videojs/vjs/node_modules/video.js/dist/video.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('videojs/vjs/node_modules/videojs-contrib-quality-levels/dist/videojs-contrib-quality-levels.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('videojs/vjs/dist/videojs-hls-quality-selector.js')}}"></script>
   <script>
    (function(window, videojs) {
      var player = window.player = videojs('videojs-hls-quality-selector-player');
      player.hlsQualitySelector({
          displayCurrentQuality: true,
      });
    }(window, window.videojs));
  </script>

</div>
<img src="{{ URL::to('/image/16x9.jpg') }}" class="image"  alt="Image">
@endsection

@section('banner')
  <div class="row">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li> <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li> <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{ URL::to('/image/facebook.png') }}" alt="Image">
          <div class="carousel-caption"><p>This text</p></div>      
        </div>
        <div class="item">
          <img src="{{ URL::to('/image/instagram.png') }}" alt="Image">
          <div class="carousel-caption"><p>This text 2</p></div>      
        </div>
        <div class="item">
          <img src="{{ URL::to('/image/twitter.png') }}" alt="Image">
          <div class="carousel-caption"><p>THis place 3</p></div>      
        </div>
        <div class="item">
          <img src="{{ URL::to('/image/linkedin.png') }}" alt="Image">
          <div class="carousel-caption"><p>this palce 4</p></div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div><br><br>
@endsection


@section('konten')
<main>
      <section class="cards">
        <article>
          <img class="article-img" src="http://placekitten.com/305/205" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">190 menonton</div>
          <img src="{{ URL::to('/image/Live.png') }}" class="top-left">
        </article>
        <article>
          <img class="article-img" src="http://placekitten.com/320/220" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">610 menonton</div>
        </article>
        <article>
          <img class="article-img" src="http://placekitten.com/330/240" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">190 menonton</div>
          <img src="{{ URL::to('/image/Live.png') }}" class="top-left">
        </article>
        <article>
          <img class="article-img" src="http://placekitten.com/280/250" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">940 menonton</div>
          <img src="{{ URL::to('/image/Live.png') }}" class="top-left">
        </article>
        <article>
          <img class="article-img" src="http://placekitten.com/310/210" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">10 menonton</div>
        </article>
        <article>
          <img class="article-img" src="http://placekitten.com/430/240" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">2071 menonton</div>
          <img src="{{ URL::to('/image/Live.png') }}" class="top-left">
        </article>
      </section>
    </main>
@endsection