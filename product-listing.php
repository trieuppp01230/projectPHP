<?php 
    include 'header.php';
    require "config.php";
    require "models/db.php";
    require "models/product.php";

    $object = new Product();
    $getAllProducts = $object->getAllProducts();
    $getTypes = $object->getAllTypes();
    $getManu = $object->getAllManufactures();
?>

<main class="ps-main">
    <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">

            <?php
                include 'pagination.php';
            ?>
            <div class="ps-product__columns">
                <?php foreach($getAllProducts as $allPro) { ?>



                <div class="ps-product__column">
                    <div class="ps-shoe mb-30">
                        <div class="ps-shoe__thumbnail">
                            <div class="ps-badge"><span>New</span></div>
                            <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a
                                class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                style="height: 450px; object-fit:cover"
                                src="template/images/<?php echo $allPro["pro_image"] ?>" alt=""><a
                                class="ps-shoe__overlay" href="product-detail.php"></a>
                        </div>
                        <div class="ps-shoe__content">
                            <div class="ps-shoe__variants">
                                <div class="ps-shoe__variant normal"><img src="/images/shoe/2.jpg" alt=""><img
                                        src="/images/shoe/3.jpg" alt=""><img src="/images/shoe/4.jpg" alt=""><img
                                        src="/images/shoe/5.jpg" alt=""></div>
                                <select class="ps-rating ps-shoe__rating">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select>
                            </div>
                            <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                    href="#"><?php echo $allPro["name"] ?></a>
                                <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                        href="#"> Jordan</a></p><span class="ps-shoe__price">
                                    <del>£220</del> £ 120</span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>


        <div class="ps-sidebar" data-mh="product-listing">
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Category</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">

                    <?php foreach($getTypes as $type) { ?>
                        <li><a href="product-listing.php"><?php echo $type["type_name"] ?></a></li>
                    <?php } ?>

                    </ul>
                </div>
            </aside>
            <aside class="ps-widget--sidebar ps-widget--filter">
                <div class="ps-widget__header">
                    <h3>Category</h3>
                </div>
                <div class="ps-widget__content">
                    <div class="ac-slider" data-default-min="300" data-default-max="2000" data-max="3450" data-step="50"
                        data-unit="$"></div>
                    <p class="ac-slider__meta">Price:<span class="ac-slider__value ac-slider__min"></span>-<span
                            class="ac-slider__value ac-slider__max"></span></p><a class="ac-slider__filter ps-btn"
                        href="#">Filter</a>
                </div>
            </aside>
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Sky Brand</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">

                    <?php foreach($getManu as $manu) { ?>
                        <li><a href="product-listing.php"><?php echo $manu["manu_name"] ?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            </aside>
            <aside class="ps-widget--sidebar ps-widget--category">
                <div class="ps-widget__header">
                    <h3>Width</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--checked">
                        <li class="current"><a href="product-listing.php">Narrow</a></li>
                        <li><a href="product-listing.php">Regular</a></li>
                        <li><a href="product-listing.php">Wide</a></li>
                        <li><a href="product-listing.php">Extra Wide</a></li>
                    </ul>
                </div>
            </aside>
            <div class="ps-sticky desktop">
                <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                        <h3>Size</h3>
                    </div>
                    <div class="ps-widget__content">
                        <table class="table ps-table--size">
                            <tbody>
                                <tr>
                                    <td class="active">3</td>
                                    <td>5.5</td>
                                    <td>8</td>
                                    <td>10.5</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>3.5</td>
                                    <td>6</td>
                                    <td>8.5</td>
                                    <td>11</td>
                                    <td>13.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>6.5</td>
                                    <td>9</td>
                                    <td>11.5</td>
                                    <td>14</td>
                                </tr>
                                <tr>
                                    <td>4.5</td>
                                    <td>7</td>
                                    <td>9.5</td>
                                    <td>12</td>
                                    <td>14.5</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>7.5</td>
                                    <td>10</td>
                                    <td>12.5</td>
                                    <td>15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </aside>
                <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                        <h3>Color</h3>
                    </div>
                    <div class="ps-widget__content">
                        <ul class="ps-list--color">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <!--aside.ps-widget--sidebar-->
            <!--    .ps-widget__header: h3 Ads Banner-->
            <!--    .ps-widget__content-->
            <!--        a(href='product-listing'): img(src="images/offer/sidebar.jpg" alt="")-->
            <!---->
            <!--aside.ps-widget--sidebar-->
            <!--    .ps-widget__header: h3 Best Seller-->
            <!--    .ps-widget__content-->
            <!--        - for (var i = 0; i < 3; i ++)-->
            <!--            .ps-shoe--sidebar-->
            <!--                .ps-shoe__thumbnail-->
            <!--                    a(href='#')-->
            <!--                    img(src="images/shoe/sidebar/"+(i+1)+".jpg" alt="")-->
            <!--                .ps-shoe__content-->
            <!--                    if i == 1-->
            <!--                        a(href='#').ps-shoe__title Nike Flight Bonafide-->
            <!--                    else if i == 2-->
            <!--                        a(href='#').ps-shoe__title Nike Sock Dart QS-->
            <!--                    else-->
            <!--                        a(href='#').ps-shoe__title Men's Sky-->
            <!--                    p <del> £253.00</del> £152.00-->
            <!--                    a(href='#').ps-btn PURCHASE-->
        </div>
    </div>


    <?php
        include 'footer.php';
    ?>