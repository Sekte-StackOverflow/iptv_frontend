<!-- Menghubungkan dengan view template master -->
@extends('master')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


@section('heading')
  <img src="https://mmc.tirto.id/image/otf/500x0/2018/12/10/shopee-blackpink-_ratio-16x9.jpg" style="width:100%"  alt="Image" class="img-rounded">
@endsection
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->

@section('konten')
    <main>
      <section class="cards text-center">
        @for ($i = 0 ; $i <= 20; $i++)
        <article>
          <img class="shop-img" src="http://placekitten.com/305/205" alt=" " />
          <a href="shopping/barang"><button type="button" class="shop-button">BELI</button></a>
        </article>
        @endfor
      </section>
    </main>
@endsection

