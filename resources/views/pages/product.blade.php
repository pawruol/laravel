@extends('layouts.main')
@section('container')

<div class="spacer" style="height: 40px;"></div>

<div class="row">
    <div class="col-12 col-md-6">
      <div class="product-single-image">
        <section id="detail">
            <div class="row">
              <div class="col-12 col-md-8 mx-auto">
                <!-- Product Images & Alternates -->
                <div class="product-images demo-gallery">
                  <!-- Begin Product Images Slider -->
                  <div class="main-img-slider">
                    <a data-fancybox="gallery" href="{{asset('resources/assets/images/shop-product-001-min.jpg')}}"><img src="{{asset('resources/assets/images/shop-product-001-min.jpg')}}" class="img-fluid"></a>
                    <a data-fancybox="gallery" href="{{asset('resources/assets/images/shop-product-002-min.jpg')}}"><img src="{{asset('resources/assets/images/shop-product-002-min.jpg')}}" class="img-fluid"></a>
                    <a data-fancybox="gallery" href="{{asset('resources/assets/images/shop-product-003-min.jpg')}}"><img src="{{asset('resources/assets/images/shop-product-003-min.jpg')}}" class="img-fluid"></a>
                    <a data-fancybox="gallery" href="{{asset('resources/assets/images/shop-product-004-min.jpg')}}"><img src="{{asset('resources/assets/images/shop-product-004-min.jpg')}}" class="img-fluid"></a>
                    <a data-fancybox="gallery" href="{{asset('resources/assets/images/shop-product-005-min.jpg')}}"><img src="{{asset('resources/assets/images/shop-product-005-min.jpg')}}" class="img-fluid"></a>
                    <a data-fancybox="gallery" href="{{asset('resources/assets/images/shop-product-006-min.jpg')}}"><img src="{{asset('resources/assets/images/shop-product-006-min.jpg')}}" class="img-fluid"></a>
                  </div>
                  <!-- End Product Images Slider -->

                  <!-- Begin product thumb nav -->
                  <ul class="thumb-nav">
                    <li><img src="{{asset('resources/assets/images/shop-product-001-min.jpg')}}"></li>
                    <li><img src="{{asset('resources/assets/images/shop-product-002-min.jpg')}}"></li>
                    <li><img src="{{asset('resources/assets/images/shop-product-003-min.jpg')}}"></li>
                    <li><img src="{{asset('resources/assets/images/shop-product-004-min.jpg')}}"></li>
                    <li><img src="{{asset('resources/assets/images/shop-product-005-min.jpg')}}"></li>
                    <li><img src="{{asset('resources/assets/images/shop-product-006-min.jpg')}}"></li>
                  </ul>
                  <!-- End product thumb nav -->
                </div>
                <!-- End Product Images & Alternates -->

              </div>
            </div>
        </section>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="breadcrumbs">
        <ol class="breadcrumbs-slug" itemscope="" itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a class="brand-color-hover" itemprop="item" href="https://stockie.clbthemes.com/shop/"><span itemprop="name">Shop Layout</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <i class="material-icons">keyboard_arrow_right</i>
            <a class="brand-color-hover hover-underline underline-brand" itemprop="item" href="https://stockie.clbthemes.com/product-category/kitchen-tableware/storage/"><span itemprop="name">Storage</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <i class="material-icons">keyboard_arrow_right</i>
            <span itemprop="name" class="active">Plastic bottle grinders</span>
            <meta itemprop="position" content="3">
        </li>
        </ol>
      </div>
      <div class="product-single-label">
        <span style="background-color: #32353c;">In Stock</span>
      </div>
      <h1 class="product-single-title">Plastic bottle grinders</h1>
      <p class="product-single-price"><span class="old-price">2560 грн.</span><span class="price">2410 грн.</span></p>
      <p class="product-single-text">This product may have a <strong>manufacturer’s warranty</strong>. Please visit the manufacturer’s website or contact us at&nbsp;<a href="mailto:test@mail.com">test@mail.com</a>&nbsp;for full manufacturer warranty details.</p>
      <p class="product-single-text">Custom product details with WPBakery Page Builder plugin go here, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls.</p>
      <p class="product-single-meta"><span class="parameter-title">SKU:<span class="parameter-value">9015-DF-13</span></span><span class="parameter-title">Category:<span class="parameter-value"><a href="#">Test category</a></span></span><span class="parameter-title">Tags:<span class="parameter-value"><a href="#">Shop</a>, <a href="#">Theme</a>, <a href="#">Buy</a></span></span></p>
      <button style="margin: 15px 0;" class="button button-icon button-primary animated" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Add to cart</button>
      <button class="button button-secondary animated" type="button">Buy now</button>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-12">
      <ul class="product-single-tabs-links">
        <li class="active">
          <a href="#">Description</a>
        </li>
        <li>
          <a href="">Reviews (0)</a>
        </li>
      </ul>
      <div class="product-single-tabs-content">
        <div class="product-single-tabs-panel active" data-index="0">
          <div class="row">
            <div class="col-12 col-md-6">
              <p class="product-single-text">This product may have a <strong>manufacturer’s warranty</strong>. Please visit the manufacturer’s website or contact us at&nbsp;<a href="mailto:test@mail.com">test@mail.com</a>&nbsp;for full manufacturer warranty details.</p>
              <p class="product-single-text">Custom product details with WPBakery Page Builder plugin go here, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls.</p>
            </div>
            <div class="col-12 col-md-6">

            </div>
          </div>
        </div>
        <div class="product-single-tabs-panel" data-index="1">
          <p>Nam auctor orci nec consectetur lacinia. Fusce finibus efficitur hendrerit. Maecenas sit amet turpis eget velit feugiat luctus. Quisque eu tristique urna, at rhoncus lectus. Nullam non leo quis urna euismod convallis at a nibh. Etiam et bibendum
            sapien. Suspendisse potenti. Nulla et mauris lacinia tortor facilisis dapibus a id dolor. Fusce luctus sapien ac varius mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris posuere ipsum nibh, at scelerisque diam feugiat
            eget.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
