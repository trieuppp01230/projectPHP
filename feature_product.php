<?php
    require "config.php";
    require "models/db.php";
    require "models/product.php";

    $all_product = new Product;
    $getListProductsFeature = $all_product->getListProductsFeature();
?>

<div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
            <ul class="ps-masonry__filter">
                <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
                <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
                <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
                <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
                <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
                <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li>
            </ul>
        </div>
        <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                data-radio="100%">
                <div class="ps-masonry">
                    <div class="grid-sizer"></div>

                    <?php 
                    foreach($getListProductsFeature as $value) { ?>

                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-shoe mb-30">
                                <div class="ps-shoe__thumbnail">
                                    <div class="ps-badge"><span>New</span></div>
                                    <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a
                                        class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img style="height: 450px; object-fit:cover" class="pro-image"
                                        src="template/images/<?php echo $value['pro_image'] ?>" alt=""><a class="ps-shoe__overlay"
                                        href="product-detail.php?id=<?php echo $value['id']; ?>"></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__variants">
                                        <div class="ps-shoe__variant normal"><img src="template/images/<?php echo $value['pro_image'] ?>" alt="">
                                        </div>
                                        <select class="ps-rating ps-shoe__rating">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $value['name'] ?></a>
                                        <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#">
                                                Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                                            <del>£220</del> £ 120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>