<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <?php include('./views/frontend/layouts/_link.php') ?>
</head>
<body>
    <?php include('./views/frontend/layouts/_header.php') ?>
<section>
    <div class="super_container">
        <header class="header" style="display: none;">
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">Tất cả sản phẩm</span> <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">Tất cả sản phẩm</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="single_product">
            <div class="container-fluid" style=" background-color: #fff; padding: 30px;min-height: 1000px;">
                <div class="row">
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://24hstore.vn/images/products/2020/12/21/original/surface-laptop-3-13-inch-vang_1608521932.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://vatvostudio.vn/wp-content/uploads/2021/08/LG-Gram-16-2021-5thumb123-400x300.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://hanoitechpro.com/wp-content/uploads/2020/08/Laptop-Dell-Inspiron-3493-Hanoi-Tech-Pro-2-thumb.jpg" alt="Third slide">
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-3" style="border-left: 1px solid rgb(172, 172, 172)">
                        <div class="product_description">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                                    <li class="breadcrumb-item active">Chi tiết</li>
                                </ol>
                            </nav>
                            <div class="product_name">Acer Aspire 3 Celeron Dual Core - (2 GB/500 GB HDD/Windows 10 Home) A315-33 Laptop (15.6 inch, Black, 2.1 kg)</div>
                            <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 sao & 45 đánh giá</span></div>
                            <div> <span class="product_price">18,900,000đ</span> <strike class="product_discount"> <span style='color:black'>20,000,000đ<span> </strike> </div>
                           
                            <hr class="singleline">
                            <div> <span class="product_info">CPU Core i7 – 4800MQ<span><br> <span class="product_info">Màn hình 15.6 Full HD 1920 x 1080<span><br> <span class="product_info">VGA Intel HD Graphic 4600 & AMD Radeon 8790M<span><br> <span class="product_info">FREESHIP NỘI THÀNH HÀ NỘI<span><br> </div>
                            <div>
                                
                                <div class="row" style="margin-top: 15px;">
                                    <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">Tùy chọn Ram</span><br> <button class="btn btn-primary btn-sm">4 GB</button> <button class="btn btn-primary btn-sm">8 GB</button> <button class="btn btn-primary btn-sm">16 GB</button> </div>
                                    <div class="col-xs-6" style="margin-left: 55px;"> <span class="product_options">Tùy chọn ổ cứng</span><br> <button class="btn btn-primary btn-sm">500 GB</button> <button class="btn btn-primary btn-sm">1 TB</button> </div>
                                </div>
                            </div>
                            <hr class="singleline">
                            <div class="order_info d-flex flex-row">
                                <form action="#">
                            </div>
                            <div class="row">
                                <div class="col-xs-6" style="margin-left: 13px; display:flex;align-items:center;border-radius:20px;padding:10px">
                                    <div class="product_quantity"> <span>Số lượng: </span> <input id="quantity_input" type="number">
                                    </div>
                                    <div class="col-xs-6" style="margin-left: 20px"> <button type="button" class="btn btn-primary shop-button">Thêm vào giỏ hàng</button> <button type="button" class="btn btn-success shop-button">Mua ngay</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row row-underline">
                    <div class="col-md-6"> <span class=" deal-text">Combo Offers</span> </div>
                    <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
                </div> --}}
                {{-- <div class="row">
                    <div class="col-md-5">
                        <div class="row padding-2">
                            <div class="col-md-5 padding-0">
                                <div class="bbb_combo">
                                    <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                    <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                    <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-center"> <span class="step">+</span> </div>
                            <div class="col-md-5 padding-0">
                                <div class="bbb_combo">
                                    <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                    <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                    <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="margin-left: 36px;">
                                <div class="boxo-pricing-items">
                                    <div class="combo-pricing-item"> <span class="items_text">1 Item</span> <span class="combo_item_price">₹13,200</span> </div>
                                    <div class="combo-plus"> <span class="plus-sign">+</span> </div>
                                    <div class="combo-pricing-item"> <span class="items_text">1 Add-on</span> <span class="combo_item_price">₹500</span> </div>
                                    <div class="combo-plus"> <span class="plus-sign">=</span> </div>
                                    <div class="combo-pricing-item"> <span class="items_text">Total</span> <span class="combo_item_price">₹13,700</span> </div>
                                    <div class="add-both-cart-button"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center"> <span class="vertical-line"></span> </div>
                    <div class="col-md-5" style=" margin-left: -27px;">
                        <div class="row padding-2">
                            <div class="col-md-5 padding-0">
                                <div class="bbb_combo">
                                    <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                    <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                    <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-center"> <span class="step">+</span> </div>
                            <div class="col-md-5 padding-0">
                                <div class="bbb_combo">
                                    <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                    <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                    <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="margin-left: 36px;">
                                <div class="boxo-pricing-items">
                                    <div class="combo-pricing-item"> <span class="items_text">1 Item</span> <span class="combo_item_price">₹13,200</span> </div>
                                    <div class="combo-plus"> <span class="plus-sign">+</span> </div>
                                    <div class="combo-pricing-item"> <span class="items_text">1 Add-on</span> <span class="combo_item_price">₹500</span> </div>
                                    <div class="combo-plus"> <span class="plus-sign">=</span> </div>
                                    <div class="combo-pricing-item"> <span class="items_text">Total</span> <span class="combo_item_price">₹13,700</span> </div>
                                    <div class="add-both-cart-button"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-underline">
                    <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
                    <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="col-md-12">
                            <tbody>
                                <tr class="row mt-10">
                                    <td class="col-md-4"><span class="p_specification">Sales Package :</span> </td>
                                    <td class="col-md-8">
                                        <ul>
                                            <li>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide, Warranty Documents</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="row mt-10">
                                    <td class="col-md-4"><span class="p_specification">Model Number :</span> </td>
                                    <td class="col-md-8">
                                        <ul>
                                            <li> 14-dh0107TU </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="row mt-10">
                                    <td class="col-md-4"><span class="p_specification">Part Number :</span> </td>
                                    <td class="col-md-8">
                                        <ul>
                                            <li>7AL87PA</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="row mt-10">
                                    <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                                    <td class="col-md-8">
                                        <ul>
                                            <li>Black</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="row mt-10">
                                    <td class="col-md-4"><span class="p_specification">Suitable for :</span> </td>
                                    <td class="col-md-8">
                                        <ul>
                                            <li>Processing & Multitasking</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="row mt-10">
                                    <td class="col-md-4"><span class="p_specification">Processor Brand :</span> </td>
                                    <td class="col-md-8">
                                        <ul>
                                            <li>Intel</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<?php include('./views/frontend/layouts/_footer.php') ?>
<?php include('./views/frontend/layouts/_script.php') ?>
</body>
</html>
