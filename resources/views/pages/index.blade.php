@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-12">
                <h1 class="page-title">High-Quality Cookware Sets for Your Kitchen. <br>Create Your Blog Today.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                <div class="card card-category card-light" style="background-image: url('{{asset('resources/assets/images/shop-category-001-min.jpg')}}');">
                    <div class="spacer" style="height: 60px;"></div>
                    <div class="card-heading">
                    <p class="subheading">Drinkware kitchen collection</p>
                    <h2 class="heading">Get your inspiration <br>in the kitchen.</h2>
                    </div>
                    <div class="card-text">
                    <p class="text">It’s easy to get lost in the world of lovely valley <br>and the meridian the upper surface.</p>
                    </div>
                    <div class="card-actions">
                    <a href="#" class="button button-primary button-link"><i class="material-icons">keyboard_arrow_right</i>Shop the Category</a>
                    </div>
                    <div class="spacer" style="height: 60px;"></div>
                </div>
                </div>
                <div class="col-12 col-md-6">
                <div class="card card-category card-dark" style="background-image: url('{{asset('resources/assets/images/shop-category-002-min.jpg')}}');">
                    <div class="spacer" style="height: 60px;"></div>
                    <div class="card-heading">
                    <p class="subheading">Kitchen essentials</p>
                    <h2 class="heading">Easy to use, clean <br>and store details.</h2>
                    </div>
                    <div class="card-text">
                    <p class="text">Flavored coffee beans get lost in the world of <br>valley and the meridian the upper surface.
                    </p>
                    </div>
                    <div class="card-actions">
                    <a href="#" class="button button-primary button-link"><i class="material-icons">keyboard_arrow_right</i>Shop the Category</a>
                    </div>
                    <div class="spacer" style="height: 60px;"></div>
                </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-6">
                <div class="card card-category card-light" style="background-color: #e7d8d6;">
                    <div class="spacer" style="height: 100px;"></div>
                    <div class="card-heading">
                    <p class="subheading">Free shipping on all orders over $59</p>
                    <h2 class="heading">Shop & shipment across <br>the whole North America.</h2>
                    </div>
                    <div class="card-text">
                    <p class="text">It’s easy to get lost in the world of lovely valley vapour around <br>and the meridian sun strikes the upper surface.</p>
                    </div>
                    <div class="card-actions">
                    <a href="#" class="button button-primary button-link"><i class="material-icons">keyboard_arrow_right</i>Shop the Category</a>
                    </div>
                    <div class="spacer" style="height: 100px;"></div>
                </div>
                </div>
                <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-6 col-md-6">
                    <div class="card card-banner" style="background-color: #f9f9f9;">
                        <div class="card-image">
                        <img src="resources/assets/images/shop-product-001-min.jpg">
                        <div class="overlay">
                            <a href="#" class="button button-secondary button-link"><i class="material-icons">keyboard_arrow_right</i>Read more</a>
                        </div>
                        </div>
                        <div class="card-heading">
                        <h2 class="heading">Coffee Beans</h2>
                        </div>
                        <div class="card-text">
                        <p class="text">Sonderful density has taken posses <br><span>from $29.00</span></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-6 col-md-6">
                    <div class="card card-banner" style="background-color: #f9f9f9;">
                        <div class="card-image">
                        <img src="resources/assets/images/shop-product-002-min.jpg">
                        <div class="overlay">
                            <a href="#" class="button button-secondary button-link"><i class="material-icons">keyboard_arrow_right</i>Read more</a>
                        </div>
                        </div>
                        <div class="card-heading">
                        <h2 class="heading">Roasters Blends</h2>
                        </div>
                        <div class="card-text">
                        <p class="text">Healthy density has taken posses <br><span>from $96.00</span></p>
                        </div>
                    </div>
                    </div>
                </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-6 col-md-6">
                    <h2>Trending cooking utensils</h2>
                    </div>
                    <div style="text-align: right; padding: 10px;" class="col-6 col-md-6">
                    <a href="#" class="button button-secondary button-link"><i class="material-icons">keyboard_arrow_right</i>See all</a>
                    </div>
                </div>

                <ul class="tabs-links">
                    <li class="active">
                    <a href="">Baking Favorites</a>
                    </li>
                    <li>
                    <a href="">Cutting Boards</a>
                    </li>
                    <li>
                    <a href="">Must-Haves</a>
                    </li>
                </ul>
                <div class="tabs-content">
                    <div class="tabs-panel active" data-index="0">
                    <div class="row">
                        <div class="col-6 col-md-3">
                        <div class="card card-product" style="background-color: #ffffff;">
                            <div class="card-label">
                            <span style="background-color: #32353c;">New</span>
                            </div>
                            <div class="card-image">
                            <img src="{{asset('resources/assets/images/shop-product-003-min.jpg')}}">
                            <div class="overlay">
                                <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                                <button class="button button-primary">Buy</button>
                            </div>
                            </div>
                            <div class="card-heading">
                            <a href="#"><h2 class="heading">Coffee geiser</h2></a>
                            </div>
                            <div class="card-text">
                            <a href="#"><p class="text">Coffee Utensils</p></a>
                            <span class="price-old">$96.00</span>
                            <span class="price">$96.00</span>
                            </div>
                        </div>
                        </div>
                        <div class="col-6 col-md-3">
                        <div class="card card-product" style="background-color: #ffffff;">
                            <div class="card-label">
                            <span style="background-color: #978059;">Sale</span>
                            </div>
                            <div class="card-image">
                            <img src="{{asset('resources/assets/images/shop-product-004-min.jpg')}}">
                            <div class="overlay">
                                <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                                <button class="button button-primary">Buy</button>
                            </div>
                            </div>
                            <div class="card-heading">
                            <a href="#"><h2 class="heading">Bamboo case plate</h2></a>
                            </div>
                            <div class="card-text">
                            <a href="#"><p class="text">Cookware</p></a>
                            <span class="price-old">$89.00</span>
                            <span class="price">$56.00</span>
                            </div>
                        </div>
                        </div>
                        <div class="col-6 col-md-3">
                        <div class="card card-product" style="background-color: #ffffff;">
                            <div class="card-label">
                            <span style="background-color: #978059;">Sale</span>
                            </div>
                            <div class="card-image">
                            <img src="{{asset('resources/assets/images/shop-product-005-min.jpg')}}">
                            <div class="overlay">
                                <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                                <button class="button button-primary">Buy</button>
                            </div>
                            </div>
                            <div class="card-heading">
                            <a href="#"><h2 class="heading">White porcelain teapot</h2></a>
                            </div>
                            <div class="card-text">
                            <a href="#"><p class="text">Cookware</p></a>
                            <span class="price-old">$89.00</span>
                            <span class="price">$56.00</span>
                            </div>
                        </div>
                        </div>
                        <div class="col-6 col-md-3">
                        <div class="card card-product" style="background-color: #ffffff;">
                            <div class="card-image">
                            <img src="{{asset('resources/assets/images/shop-product-006-min.jpg')}}">
                            <div class="overlay">
                                <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                                <button class="button button-primary">Buy</button>
                            </div>
                            </div>
                            <div class="card-heading">
                            <a href="#"><h2 class="heading">Black handle grid</h2></a>
                            </div>
                            <div class="card-text">
                            <a href="#"><p class="text">Prep Utensils</p></a>
                            <span class="price-old">$89.00</span>
                            <span class="price">$56.00</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="tabs-panel" data-index="1">
                    <p>Nam auctor orci nec consectetur lacinia. Fusce finibus efficitur hendrerit. Maecenas sit amet turpis eget velit feugiat luctus. Quisque eu tristique urna, at rhoncus lectus. Nullam non leo quis urna euismod convallis at a nibh. Etiam et bibendum
                        sapien. Suspendisse potenti. Nulla et mauris lacinia tortor facilisis dapibus a id dolor. Fusce luctus sapien ac varius mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris posuere ipsum nibh, at scelerisque diam feugiat
                        eget.
                    </p>
                    </div>
                    <div class="tabs-panel" data-index="2">
                    <p>Mauris id justo accumsan, semper metus non, aliquam purus. Mauris nunc libero, dignissim sit amet est in, egestas molestie nunc. Mauris gravida vel tellus sit amet consequat. Maecenas malesuada varius nibh, vel feugiat enim convallis vitae. Suspendisse
                        et pharetra velit. Vestibulum in ex est. Vestibulum tempor interdum metus et malesuada. Nullam ornare mi elit, id scelerisque ante dictum in. Nullam id mauris erat. Nunc non imperdiet dui. Ut pellentesque ultrices tincidunt. Nulla ac diam id dolor
                        semper malesuada nec eu massa. Nam tortor magna, luctus a blandit vitae, aliquam et arcu. Aenean non vestibulum leo, in pellentesque odio.</p>
                    </div>
                </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="spacer" style="height: 50px;"></div>

<div class="container-fluid" style="background-color: #f7f7f7; padding: 50px 0;">

            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_01-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_02-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_01-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_02-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_01-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_02-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_01-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_02-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_01-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_02-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_01-min.png" alt="">
                    </div>
                    <div class="col-6 col-md-2 section-brand-item">
                        <img src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie_landing/demo6/2019/02/st__logo_02-min.png" alt="">
                    </div>

                </div>
            </div>

</div>

<div class="spacer" style="height: 50px;"></div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">

            <div class="row">
                <div class="col-12 col-md-12">
                <div class="card card-category card-light" style="background-color: #e4eedb; text-align: center;">
                    <div class="spacer" style="height: 60px;"></div>
                    <div class="card-heading">
                    <p class="subheading">Drinkware kitchen collection</p>
                    <h2 class="heading">Get your inspiration <br>in the kitchen.</h2>
                    </div>
                    <div class="card-text">
                    <p class="text">It’s easy to get lost in the world of lovely valley <br>and the meridian the upper surface.</p>
                    </div>
                    <div class="card-actions">
                    <a href="#" class="button button-primary button-link"><i class="material-icons">keyboard_arrow_right</i>Read more</a>
                    </div>
                    <div class="spacer" style="height: 60px;"></div>
                </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-6 col-md-6">
                    <h2>Trending cooking utensils</h2>
                    </div>
                    <div style="text-align: right; padding: 10px;" class="col-6 col-md-6">
                    <a href="#" class="button button-secondary button-link"><i class="material-icons">keyboard_arrow_right</i>See all</a>
                    </div>
                </div>

                <div class="spacer" style="height: 15px;"></div>

                <div class="slider-products-1 row">
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-label">
                        <span style="background-color: #32353c;">New</span>
                        </div>
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-003-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">Coffee geiser</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Coffee Utensils</p></a>
                        <span class="price-old">$96.00</span>
                        <span class="price">$96.00</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-label">
                        <span style="background-color: #978059;">Sale</span>
                        </div>
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-004-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">Bamboo case plate</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Cookware</p></a>
                        <span class="price-old">$89.00</span>
                        <span class="price">$56.00</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-label">
                        <span style="background-color: #978059;">Sale</span>
                        </div>
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-005-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">White porcelain teapot</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Cookware</p></a>
                        <span class="price-old">$89.00</span>
                        <span class="price">$56.00</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-006-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">Black handle grid</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Prep Utensils</p></a>
                        <span class="price-old">$89.00</span>
                        <span class="price">$56.00</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-label">
                        <span style="background-color: #32353c;">New</span>
                        </div>
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-003-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">Coffee geiser</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Coffee Utensils</p></a>
                        <span class="price-old">$96.00</span>
                        <span class="price">$96.00</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-label">
                        <span style="background-color: #978059;">Sale</span>
                        </div>
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-004-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">Bamboo case plate</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Cookware</p></a>
                        <span class="price-old">$89.00</span>
                        <span class="price">$56.00</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-label">
                        <span style="background-color: #978059;">Sale</span>
                        </div>
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-005-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">White porcelain teapot</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Cookware</p></a>
                        <span class="price-old">$89.00</span>
                        <span class="price">$56.00</span>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="card card-product" style="background-color: #ffffff;">
                        <div class="card-image">
                        <img src="{{asset('resources/assets/images/shop-product-006-min.jpg')}}">
                        <div class="overlay">
                            <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Quick view</button>
                            <button class="button button-primary">Buy</button>
                        </div>
                        </div>
                        <div class="card-heading">
                        <a href="#"><h2 class="heading">Black handle grid</h2></a>
                        </div>
                        <div class="card-text">
                        <a href="#"><p class="text">Prep Utensils</p></a>
                        <span class="price-old">$89.00</span>
                        <span class="price">$56.00</span>
                        </div>
                    </div>
                    </div>

                </div>
                </div>
            </div>

            <div class="spacer" style="height: 25px;"></div>

            <div class="row">
                <div class="col-10 col-md-6">
                <div class="card card-category card-light" style="background-color: #f9f9f9;">
                    <div class="spacer" style="height: 138px;"></div>
                    <div class="card-heading">
                    <p class="subheading">Drinkware kitchen collection</p>
                    <h2 class="heading">Get your inspiration <br>in the kitchen.</h2>
                    </div>
                    <div class="card-text">
                    <p class="text">It’s easy to get lost in the world of lovely valley vapour around <br>and the meridian sun strikes the upper surface.</p>
                    </div>
                    <div class="spacer" style="height: 135px;"></div>
                </div>
                </div>
                <div class="col-2 col-md-6">
                <div class="card card-image-placeholder" style="background-color: #f9f9f9;">
                    <img src="{{asset('resources/assets/images/shop-category-003-min.jpg')}}">
                    <a style="position: absolute; top: calc(50% - 20px); left: calc(50% - 100px);"href="#" class="button button-secondary button-link animated"><i class="material-icons">library_add</i>Link new tab</a>
                </div>
                </div>
            </div>
@endsection
