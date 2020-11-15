<?php 
    // require "config.php";
    // require "models/db.php";
    // require "models/product.php";

    // $object = new Product();
    // $getListProductsNew = $object->getListProductsNew();
?>

<div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="BEST SALE">- top newest products</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i
                                class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i
                                class="ps-icon-arrow-left"></i></a></div>
                </div>
            </div>
        </div>
        <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000"
                data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1"
                data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000"
                data-owl-mousedrag="on">

                <?php 
                    foreach($getListProductsNew as $value) { ?>

                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                                        class="ps-icon-heart"></i></a><img style="height: 450px; object-fit:cover" class="pro-image"
                                            src="template/images/<?php echo $value["pro_image"] ?>" alt=""><a
                                    class="ps-shoe__overlay" href="product-detail.php"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img src="template/images/shoe/2.jpg" alt=""><img
                                            src="template/images/shoe/3.jpg" alt=""><img src="template/images/shoe/4.jpg" alt=""><img
                                            src="template/images/shoe/5.jpg" alt=""></div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php">Air
                                        Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                            href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</div>