<?php

use app\models\Product;

require_once ROOT . '/app/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div >
                <div  > <!-- class="col-sm-9"-->
                    <div class="features_items"><!--features_items-->
                        <br>
                        <h2 class="title text-center" >Catalog</h2>
                        <br>
                        <?php foreach ($products as $code => $price): ?>
                            <div class="col-sm-3">
                                <div  class="product-image-wrapper">
                                    <div  class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage(); ?>"><br><br>
                                            <div class="card-buttons">
                                                <p>Product - <?=$code ?></p>
                                                <p class="card-price">Price - <?=$price ?></p>
                                                <p>
                                                    <a href="/product/<?= $code?>">
                                                        Read more
                                                    </a>
                                                </p>
                                                <button class="btn btn-default button-add-cart" data-id="<?=$code ?>">
                                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                                </button>
                                            </div>
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

<?php include ROOT . '/app/views/layouts/footer.php'; ?>