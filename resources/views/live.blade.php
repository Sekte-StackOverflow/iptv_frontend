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

<source type="application/x-mpegURL" src="https://bitdash-a.akamaihd.net/content/MI201109210084_1/m3u8s/f08e80da-bf1d-4e3d-8899-f0f6155f6efa.m3u8">
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
      <!-- Indicators -->
      <ol class="carousel-indicators">
        @for ($i = 0 ; $i <= 4; $i++)
        <li data-target="#myCarousel" data-slide-to="0"></li>
        @endfor
        <!-- <li data-target="#myCarousel" data-slide-to="1"></li> <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li> <li data-target="#myCarousel" data-slide-to="4"></li> -->
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{ URL::to('/image/16x9.jpg') }}" alt="Image">
          <div class="carousel-caption"><p>This text</p></div>      
        </div>
        @for ($i = 0 ; $i <= 4-1; $i++)
        <div class="item">
          <img src="{{ URL::to('/image/instagram.png') }}" alt="Image">
          <div class="carousel-caption"><p>This text 2</p></div>      
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
        @for ($i = 0 ; $i <= 8; $i++)
        <article>
          <img class="article-img" src="http://placekitten.com/305/205" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">190 menonton</div>
          <font class="live">LIVE</font>
        </article>
        @endfor

        <article>
          <img class="article-img" src="{{ URL::to('/image/16x9.jpg') }}" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">610 menonton</div>
          <font class="live">LIVE</font>
        </article>
        <article>
          <img class="article-img" src="http://placekitten.com/330/240" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">190 menonton</div>
          <font class="live">LIVE</font>
        </article>
        <article>
          <img class="article-img" src="http://placekitten.com/280/250" alt=" " />
          <h4 class="article-title">
            Title of article
          </h4>
          <div class="watching">940 menonton</div>
          <font class="live">LIVE</font>
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
          <font class="live">LIVE</font>
        </article>
      </section>
    </main>
@endsection