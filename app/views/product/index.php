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
                        <?php foreach ($item as $code => $price): ?>
                            <div class="col-sm-3">
                                <div>
                                    <div  class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage(); ?>"><br><br>
                                            Product - <?=$code ?>. <br>Price - <?=$price ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                        <div>
                            <h4>
                                You can see this and other products in our <a href="/catalog">catalog</a>
                            </h4>
                        </div>
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>