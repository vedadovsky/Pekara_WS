
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }

        if (isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['item_id']);
        }
    }
?>

<section id="cart" class="py-3 white">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Košara</h5>

        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function ($item){
                ?>

                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['slika'] ?? "./assets/products/pizze/Bošnjacka.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['name'] ?? "Bošnjačka"; ?></h5>

                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                             <?php echo $item['ocjena']?>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">2,388+ naruđbi</a>
                        </div>
 
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border color-primary-bg" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border color-primary-bg"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Ukloni</button>
                            </form>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="wishlist-submit" class="btn font-baloo white">Dodaj u Wishlist</button>
                            </form>


                        </div>
         

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 font-baloo white">
                            <span class="product_price white" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>&nbsp;KM
                        </div>
                    </div>
                </div>
        
                <?php
                            return $item['item_price'];
                        }, $cart); 
                    endforeach;
                ?>
            </div>
        
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Uključena je besplatna Coca Cola 0.33l</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Ukupno ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> stavka):&nbsp; <span class="white"><span class="white" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span>&nbsp;KM </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Nastavi sa kupnjom</button>
                    </div>
                </div>
            </div>
     
        </div>
 
    </div>
</section>
