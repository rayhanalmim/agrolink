<?php require('require/top.php'); ?>

<?php
if (isset($_GET['utm_source']) || isset($_SESSION['utm_source'])) {
    $s = '';
    if (isset($_SESSION['utm_source']) && !isset($_GET['utm_source'])) {
        $s = $_SESSION['utm_source'];
    } else {
        $s = $_GET['utm_source'];
    }
    verify_source($con, $s);
    $featured = get_featured_products($con);
?>

    <div class="main-banner-slider">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme main-slider">
                    <div class="item">
                        <img src="assets/images/sample/offer-1.jpeg" alt="banner" />
                        <div class="detail">
                            <h5>Exclusive Deal</h5>
                            <h5>Get the Best Products Now!</h5>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/sample/offer-2.jpeg" alt="banner" />
                        <div class="detail">
                            <h5>Sign Up Today</h5>
                            <h5>Enjoy Special Benefits</h5>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/sample/offer-3.jpeg" alt="banner" />
                        <div class="detail">
                            <h5>Limited Time Offer</h5>
                            <h5>Shop Now and Save Big</h5>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/sample/offer-4.jpeg" alt="banner" />
                        <div class="detail">
                            <h5>Don't Miss Out!</h5>
                            <h5>Exclusive Deals on Agro Products</h5>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/sample/offer-5.jpg" alt="banner" />
                        <div class="detail">
                            <h5>Shop Now & Save</h5>
                            <h5>Discover Amazing Offers</h5>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/sample/offer-6.jpeg" alt="banner" />
                        <div class="detail">
                            <h5>Hurry, Limited Stock</h5>
                            <h5>Exclusive Discounts Await You</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section class="defaultPadding mt4">
            <div class="container mrlAuto">
                <div class="heading">
                    <span>Shop By</span>
                    <h2>Categories</h2>
                </div>
                <div class="row mt3 ct-row">
                    <div class="owl-carousel owl-theme cate-slider">
                        <?php
                        $res = mysqli_query($con, "select * from subcategories");
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <div class="item">
                                <a class="category-Item" href="view.php?n=<?php echo $row['id'] ?>&k=">
                                    <div class="cate-img">
                                        <img src="assets/images/svg/1.png" alt="" />
                                    </div>
                                    <h4><?php echo $row['subcat']; ?></h4>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="defaultPadding mt4">
            <div class="container mrlAuto">
                <div class="heading">
                    <h2>Discover Fresh and Authentic Farm Products Directly from Bangladesh's Farmers</h2>
                </div>
                <div class="row mt-3 ct-row banner-row">
                    <div class="row1" style="display: flex; gap: 10px;">
                        <div class="ban" style="flex: 1;">
                            <a href="#">
                                <img src="assets/images/banner/1.jpg" alt="banner1" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="ban" style="flex: 1;">
                            <a href="#">
                                <img src="assets/images/banner/2.jpg" alt="banner2" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="ban" style="flex: 1;">
                            <a href="#">
                                <img src="assets/images/banner/3.jpg" alt="banner3" style="width: 100%;" />
                            </a>
                        </div>
                    </div>
                    <div class="row1">
                        <a href="#" class="long-banner">
                            <img src="assets/images/banner/4.jpg" alt="banner4" />
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="defaultPadding mt4" hidden="true">
            <div class="container mrlAuto">
                <div class="heading">
                    <span>For You</span>
                    <h2> Fresh Products</h2>
                </div>
                <div class="row mt3 ct-row">
                    <div class="owl-carousel owl-theme product-slider">
                        <?php
                        if (count($featured) > 0) {
                            foreach ($featured as $product) {
                        ?>
                                <div class="item">
                                    <div class="productBox">
                                        <a href="javascript:void(0)" class="product-image">
                                            <img src="media/product/<?php echo $product['img1']; ?>" alt="product" />
                                            <div class="topOption">
                                                <span class="offer"><?php
                                                                    $offn = ($product['fa'] * 100) / $product['price'];
                                                                    $off = round(100 - $offn);
                                                                    echo $off . '%';
                                                                    ?></span>
                                                <?php
                                                if (!isset($_SESSION['USER_LOGIN'])) {
                                                ?>
                                                    <span class="wishlist" onclick="addwish(<?php echo $product['id']; ?>)">
                                                        <i class="uil uil-heart"></i>
                                                    </span>
                                                    <?php
                                                } else {
                                                    $pid = $product['id'];
                                                    $uid = $_SESSION['USER_ID'];
                                                    $n = mysqli_num_rows(mysqli_query($con, "select * from wishlist where u_id='$uid' and p_id='$pid'"));
                                                    if ($n > 0) {
                                                    ?>
                                                        <span class="wishlist" onclick="gowish()">
                                                            <i class="uil uil-heart"></i>
                                                        </span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="wishlist" onclick="addwish(<?php echo $product['id']; ?>)">
                                                            <i class="uil uil-heart"></i>
                                                        </span>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </a>
                                        <div class="product-detail">
                                            <p><?php
                                                if ($product['qty'] > 0) {
                                                    echo "Available(In Stock)";
                                                } else {
                                                    echo "Unavailable(Out of Stock)";
                                                } ?></p>
                                            <h4 style="cursor:pointer" onclick="control.redirect('product_detail.php?pid=<?php echo $product['id'] ?>')"><?php echo $product['product_name']; ?></h4>
                                            <div class="price">BDT<?php echo $product['fa']; ?>
                                                <span>BDT<?php echo $product['price']; ?></span>
                                            </div>
                                            <div class="cartqt">
                                                <?php

                                                if (!isset($_SESSION['USER_LOGIN'])) {
                                                    if (isset($_SESSION['USER_CART'])) {
                                                        if (in_array($product['id'], $_SESSION['USER_CART'])) {
                                                            $index = array_search($product['id'], $_SESSION['USER_CART']);
                                                ?>
                                                            <div class="quantity buttons_added">
                                                                <input type="button" value="-" class="minus minus-btn" onclick="decrement(this)" />
                                                                <input type="number" name="quantity" disabled="disabled"
                                                                    value="<?php echo $_SESSION['CART_QTY'][$index]; ?>" class="qty-text" />
                                                                <input type="button" value="+" class="plus plus-btn" onclick="increment(this)" />
                                                            </div>
                                                            <div class="ct-icon" onclick="go_to_cart()">
                                                                <i class="uil uil-shopping-cart-alt"></i>
                                                            </div>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <div class="quantity buttons_added">
                                                                <input type="button" value="-" class="minus minus-btn" onclick="decrement(this)" />
                                                                <input type="number" name="quantity" disabled="disabled" value="1" class="qty-text" />
                                                                <input type="button" value="+" class="plus plus-btn" onclick="increment(this)" />
                                                            </div>
                                                            <div class="ct-icon" onclick="add_cart(<?php echo $product['id']; ?>,this)">
                                                                <i class="uil uil-shopping-cart-alt"></i>
                                                            </div>
                                                        <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-" class="minus minus-btn" onclick="decrement(this)" />
                                                            <input type="number" name="quantity" disabled="disabled" value="1" class="qty-text" />
                                                            <input type="button" value="+" class="plus plus-btn" onclick="increment(this)" />
                                                        </div>
                                                        <div class="ct-icon" onclick="add_cart(<?php echo $product['id']; ?>,this)">
                                                            <i class="uil uil-shopping-cart-alt"></i>
                                                        </div>
                                                    <?php
                                                    }
                                                } else {
                                                    $p_idd = $product['id'];
                                                    $u_id = $_SESSION['USER_ID'];
                                                    $query = "select cart.u_id,cart_detail.qty from cart,cart_detail where cart.u_id='$u_id' and cart_detail.p_id='$p_idd' and cart_detail.cart_id=cart.id";
                                                    $rs = mysqli_query($con, $query);
                                                    $i = mysqli_num_rows($rs);
                                                    if ($i > 0) {
                                                        $g = mysqli_fetch_assoc($rs);
                                                    ?>

                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-" class="minus minus-btn" onclick="decrement(this)" />
                                                            <input type="number" name="quantity" disabled="disabled" value="<?php echo $g['qty'] ?>"
                                                                class="qty-text" />
                                                            <input type="button" value="+" class="plus plus-btn" onclick="increment(this)" />
                                                        </div>
                                                        <div class="ct-icon" onclick="go_to_cart()">
                                                            <i class="uil uil-shopping-cart-alt"></i>
                                                        </div>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-" class="minus minus-btn" onclick="decrement(this)" />
                                                            <input type="number" name="quantity" disabled="disabled" value="1" class="qty-text" />
                                                            <input type="button" value="+" class="plus plus-btn" onclick="increment(this)" />
                                                        </div>
                                                        <div class="ct-icon" onclick="add_cart(<?php echo $product['id']; ?>,this)">
                                                            <i class="uil uil-shopping-cart-alt"></i>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </section>

    <?php
} else {

    ?>
        <div class="main-banner-slider" style="padding-top: 70px;">
            <section class="defaultPadding mt4">
                <div class="container mrlAuto">
                    <div class="heading">
                        <h2>Please select a location to browse products</h2>
                    </div>
                </div>
            </section>
        </div>
    <?php

}
    ?>


    <?php require('require/foot.php'); ?>
    <?php require('require/csOwl.php'); ?>
    <?php require('require/last.php'); ?>