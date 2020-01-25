@extends('master')

@section('heading')
<div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
    <video id="videojs-hls-quality-selector-player" class="video-js vjs-default-skin embed-responsive-item " poster="http://vjs.zencdn.net/v/oceans.png" 
    style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit:fill;
    border:0" controls autoplay loop playsinline >

@foreach($stream as $p)
<source type="application/x-mpegURL" src="{{$p->link}}">
@endforeach
  </div>


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
@endsection

@section('banner')
<div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @for ($i = 0 ; $i <= $total ; $i++)
        <li data-target="#myCarousel" data-slide-to="0"></li>
        @endfor
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{ URL::to('/image/16x9.jpg') }}" alt="Image">
          <!-- <div class="carousel-caption"><p>This text</p></div>       -->
        </div>
        @for ($i = 0 ; $i <= $total-1; $i++)
        <div class="item">
          <img src="{{ URL::to('/image/instagram.png') }}" alt="Image">
          <!-- <div class="carousel-caption"><p>This text 2</p></div>       -->
        </div>
        @endfor
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
        @foreach($live as $l)
        <article>
          <a href="/live/streaming/{{$l->id}}">
            <img class="article-img" src="{{ $l->poster }}" alt=" " />
            <h4 class="article-title">
              {{ $l->title}}
            </h4>
            <div class="watching">{{ $l->views}} menonton</div>
            <font class="live">{{ $l->status}}</font>
          </a>
        </article>
        @endforeach
      </section>
    </main>
@endsection