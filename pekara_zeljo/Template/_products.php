
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>


<section id="product" class="py-3 white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['slika'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid" style=" <?php echo $item['stil1']?>">
                <div class="form-row pt-4 font-size-16 font-baloo" style=" <?php echo $item['stil1']?>">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control" style="background-color: white; border-color: white;">Dodaj u Wishlist</button>
                    </div>
                    <div class="col">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">U Košari</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Dodaj u Košaru</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20 white"  style="font-size: large;"><?php echo $item['name'] ?? "Unknown"; ?></h5>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                   <?php echo $item['ocjena']?>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">1,233+ naruđbi | 4 ostavljene recenzije</a>
                </div>
                <hr class="m-0">

                <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Cijena:</td>

                                <td class="font-size-20 color-yellow cart-price">&nbsp;<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>&nbsp;KM<small class="white font-size-12">&nbsp;&nbsp;&nbsp;PDV uključen u cijenu</small></td>
                            </tr>
                        </table>

                <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill white"></span>
                                    </div>
                                    <a href="#" class="white font-rale font-size-12">15 min <br> Povrat novca od <br>trenutka naruđbe</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck  border p-3 rounded-pill white"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12 white">Dostava u roku do <br>40 min</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-money-bill-wave border p-3 rounded-pill white"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12 white">Nacin plaćanja <br>Karticom ili <br>prilikom pouzeća</a>
                                </div>
                            </div>
                        </div>

                <hr>

                <div class="col">
                            <div class="row-4">

                                <div class="row">
                                    <div class="row-6" style="width: 50%;">
                                        <div class="color my-3">
                                            <div class="col-6">
                                                <h6 class="font-baloo">Dodatci: </h6>
                                            </div>
                                            <div class="col-6">
                                                <ul class="ul-dodatci">
                                                    <div class="row-6" style="display:flex; margin-left: -50px;">
                                                        <li class="li-dodatci"><input class="input-dodatci" type="checkbox" id="cb1" />
                                                            <label class="label-dodatci" for="cb1"><img src="./assets/dodatci/kecap.png" /></label>
                                                        </li>
                                                        <div class="row-6">
                                                            <li class="li-dodatci"><input class="input-dodatci" type="checkbox" id="cb2" />
                                                                <label class="label-dodatci" for="cb2"><img src="./assets/dodatci/mayo.png" /></label>
                                                            </li>
                                                        </div>
                                                </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row-6" style="width: 50%;">
                                            <br>

                                            <div class="qty d-flex">
                                                <ul class="kolicina">
                                                    <li>
                                                        <h6 class="font-baloo" style="width: 100%;">Količina:</h6>
                                                    </li>
                                                    <li style="margin-left:-23px;">
                                                        <div class="px-4 d-flex font-rale">
                                                        <button class="qty-up border color-primary-bg" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border color-primary-bg"><i class="fas fa-angle-down"></i></button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="size my-3" style="padding-top: 10px;">
                                    <h6 class="font-baloo">Veličina:</h6>
                                    <div class="d-flex justify-content-between w-75 velicina">

                                        <div class="font-rubik border p-2" style="width: 85px; height: 40px;text-align: center;">
                                            <button class="btn btn-color p-0 font-size-16 white mini">Mini</button>
                                        </div>


                                        <div class="font-rubik border p-2" style="width: 85px; height: 40px; text-align: center;">
                                            <button class="btn btn-color p-0 font-size-16 white srednja">Srednja</button>
                                        </div>


                                        <div class="font-rubik border p-2" style="width: 85px; height: 40px;text-align: center;">
                                            <button class="btn btn-color p-0 font-size-16 white jumbo">Jumbo</button>
                                        </div>

                                    </div>
                                </div>


                            </div>
            </div>

                            <div class="col-12">
                            <h6 class="font-rubik">Opis</h6>
                            <hr>
                            <p class="font-rale font-size-14" style="text-align:justify;"> Pica je ukusno jelo italijanskog porekla, sastoji se od obično okrugle, spljoštene osnove od ukiseljenog pšeničnog testa sa paradajzom, sirom i često raznim drugim sastojcima (inćuni, masline, meso itd.) pečene na visokoj
                                temperaturi, tradicionalno u peći na drva. Mala pica se ponekad naziva i pizzetta. U Italiji se pica koja se servira u formalnim uslovima, kao što je restoran, postavlja bez režnja i jede se nožem i viljuškom. U ponekim
                                postavkama se reže na klinove da bi se jeli dok ih držite u ruci. Izraz pica prvi put je zabeležen u 10. veku u latinskom rukopisu iz južno italijanskog grada Gaeta u Laciju, na granici sa Kampanijom. Moderna pica izmišljena
                                je u Napulju, a jelo i njegove varijante od tada postaju popularne u mnogim zemljama. </p>
                            <p class="font-rale font-size-14">Sastojci: paradajz, mocarela, pečurke, suđuka, paprika, šunka, crne masline, maslinovo ulje, limunov sok</p>
                        </div>
                    </div>
    </div>
</section>

<?php
        endif;
        endforeach;
?>