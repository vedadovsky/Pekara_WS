<!-- Special Price -->
<?php
    $brand = array_map(function ($pro){ return $pro['vrsta']; }, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['special_price_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}

$in_cart = $Cart->getCartId($product->getData('cart'));

?>
        <!-- Izabrano za vas -->
        <section id="special-price" class="white">
    <div class="container">
        <h4 class="izv font-rubik font-size-20 white">U ponudi</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">Sve</button>
            <?php
                array_map(function ($brand){
                    printf('<button class="btn white" data-filter=".%s">%s</button>', $brand, $brand);
                }, $unique);
            ?>
        </div>

        <div class="grid">
            <?php array_map(function ($item) use($in_cart){ ?>
            <div class="grid-item border <?php echo $item['vrsta'] ?? "Brand" ; ?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['slika'] ?? "./assets/slide3.jpg.png"; ?>" alt="product1" style="<?php echo $item['stil1'] ?>" class="img-fluid"></a>
                        <div class="text-center"  style="<?php echo $item['stil2'] ?>" >
                            <h6><?php echo $item['name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                            <?php echo $item['ocjena']?>
                            </div>
                            <div class="price py-2">
                                <span><?php echo $item['item_price'] ?? 0 ?>&nbsp;KM</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">U Košari</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Dodaj u Košaru</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>
<!-- !Special Price -->
