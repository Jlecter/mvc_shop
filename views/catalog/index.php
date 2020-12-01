
    <section>
        <div class="container">
            <div class="row">


                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Items</h2>

                        <?php foreach ($products as $code => $price): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            Product - <?=$code ?>. Price - <?=$price ?>
                                            <p>
                                                <a href="/product/<?= $code?>">
                                                    Read more
                                                </a>
                                            </p>
                                            <p>
                                                <a href="#" data-id="<?= $code?> "
                                                   class="btn btn-default add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>В корзину
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </div><!--features_items-->


                </div>
            </div>
        </div>
    </section>

