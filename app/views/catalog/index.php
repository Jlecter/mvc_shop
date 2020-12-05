<?php

use app\models\Product;

require_once ROOT . '/app/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div>
                <div>
                    <div class="features_items"><!--features_items-->
                        <br>
                        <h2 class="title text-center" >Catalog</h2>
                        <br>
                        <?php foreach ($products as $code => $price): ?>
                            <div class="col-sm-3">
                                <div>
                                    <div  class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage(); ?>"><br><br>
                                            <div class="card-buttons">
                                                <p class="shop-item-title"><?=$code ?></p>
                                                <p class="card-price shop-item-price"><?=$price ?></p>
                                                <p>
                                                    <a href="/product/<?= $code?>">
                                                        Read more
                                                    </a>
                                                </p>
                                                <button class="shop-item-button btn btn-default button-add-cart">
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
    <br>
    <h4 class="title text-center">DISCOUNTS</h4>
    <p class="text-center"> FOR <strong>25%</strong> OFF - FIRST 4 PACKAGES <strong>ZA</strong></p>
    <p class="text-center"> FOR <strong>11%</strong> OFF - FIRST 6 PACKAGES <strong>FC</strong></p>
    <section class="containers content-section"> <br><br>
        <h2 class="title text-center"> SHOPPING CART</h2><br>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">£0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
    </section>

<?php require_once ROOT . '/app/views/layouts/footer.php'; ?>