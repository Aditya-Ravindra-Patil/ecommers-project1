<?php
require('header.inc.php');
?>

<!-- mobile-menu-area start -->

<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Shop Full Width</h1>
                    <ul>
                        <li><a href="index.php">home</a> <span class="divider">|</span></li>
                        <li><a href="#">Category</a> <span class="divider">|</span></li>
                        <li><a href="#">Shop full width</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- shop-area start -->
<div class="shop-area shop-full">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-content">
                    <!-- Nav tabs -->
                    <ul class="shop-tab" role="tablist">
                        <li><span class="sorting-name"> View as: </span></li>
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="short-by">
                        <span class="sorting-show"> Sort by:</span>
                        <select>
                            <option value="volvo">popularity</option>
                            <option value="saab">Default</option>
                            <option value="mercedes">average rating</option>
                            <option value="audi">newness</option>
                            <option value="audi">low to high</option>
                            <option value="audi">high to low</option>
                        </select>
                    </div>
                    <div class="shop-show">
                        <span class="sorting-show"> Show:</span>
                        <select>
                            <option value="volvo">9</option>
                            <option value="saab">10</option>
                            <option value="mercedes">11</option>
                            <option value="audi">12</option>
                            <option value="audi">15</option>
                            <option value="audi">16</option>
                        </select>
                    </div>
                    <div class="shop-breadcrumb">
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>

                    <div class="clear"></div>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <!-- single-product start -->
                                <h1>MUGS</h1>
                                <hr>
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/1.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/2.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/3.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/11.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/4.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/11.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/5.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/6.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 										<a class="btn btn-primary" href="D:\khakipacket\mugs.php">Show More</a>
 -->
                                <!-- single-product end -->
                                <!-- single-product start -->

                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/7.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/8.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/9.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/10.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/11.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/12.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/23.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/22.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/21.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/20.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/19.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/18.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/13.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/14.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product end -->
                                <!-- single-product start -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="product-details.php">
                                                <img src="img/product/14.jpg" alt="" />
                                                <img class="secondary-img" src="img/product/15.jpg" alt="" />
                                            </a>
                                            <span class="tag-line">new</span>
                                            <div class="product-action">
                                                <div class="button-top">
                                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="button-cart">
                                                    <button><i class="fa fa-shopping-cart"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.php">Lorem ipsum dolor</a></h3>
                                            <div class="price">
                                                <span>$80.00</span>
                                                <span class="old">$90.11</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- single-product end -->
                                <!-- single-product start -->



                                <!-- single-product end -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop-area end -->

<?php
require('footer.inc.php');
?>