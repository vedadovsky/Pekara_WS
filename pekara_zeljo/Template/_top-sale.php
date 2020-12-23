
<?php

    shuffle($product_shuffle);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>
<section id="top-sale">
    <div class="container py-5 white">
        <h4 class="font-rubik font-size-20">Najpopularnije</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['slika'] ?? "./assets/products/1.png"; ?>" alt="product1" style="<?php echo $item['stil1']?>" class="img-fluid"></a>
                    <div class="text-center" style="<?php echo $item['stil2']?>">
                        <h6><?php echo  $item['name'] ?? "Unknown";  ?></h6>
                        <div class="rating text-warning font-size-12">
                        <?php echo $item['ocjena']?>
                        </div>
                        <div class="price py-2">
                            <span><?php echo $item['item_price'] ?? '0' ; ?>&nbsp;KM</span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">U Košari</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Dodaj u Košaru</button>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>