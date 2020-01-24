@extends('master')

@section('heading')
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hAiI3lRP0HM"></iframe>
  </div>

@endsection

@section('konten')
<main>
    <section class="barang-cards">
        <article>
          <img class="barang-img" src="http://placekitten.com/305/205" alt=" " />
          <font class="harga-asli"><s> Rp 1.500.000 </s><font class="diskon">40 %</font></font>
          <font class="harga">RP 1.280.000</font>
        </article>
        <article style="background-color: white">
          	<div class="barang-keterangan">
          		<b>Judul</b>
          		<hr class="barang-hr">
          		@for ($i = 0 ; $i <= 20 ; $i++)
	          		<div class="row">

					  <div class="column">
					    Capacity
					  </div>
					  <div class="column2">
					    : 600ml
					  </div>
					</div>
					<hr class="barang-hr">
				@endfor
        	</div> 
        </article>
        <article>
          <img class="barang-img" src="http://placekitten.com/305/205" alt=" " />
        </article>
        <br><br>
    </section>
</main><br>
@endsection
