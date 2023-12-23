@extends('main.app')
@section('content')
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Products </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Products </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-ecommerce-main-->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>

    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <!-- about -->
                <div class="ecom-contenthny-w3lcheckout privacy">
                    <h3>Chec<span>kout</span></h3>
                    <div class="checkout-right">
                        <p class="mb-5">Your shopping cart contains: <span>3 Products</span></p>
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Product</th>
                                    <th>Quality</th>
                                    <th>Product Name</th>

                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            @php
                                $counter = 1;
                            @endphp
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr class="rem1">
                                        <td class="invert">{{ $counter++ }}</td>
                                        <td class="invert-image"><a href="product-single.html">
                                                <img src="assets/images/shop-1.jpg" class="img-fluid radius-image"
                                                    alt=""></a></td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    <div class="entry value-minus">&nbsp;</div>
                                                    <div class="entry value"><span>{{ $item['quantity'] }}</span></div>
                                                    <div class="entry value-plus active">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert">{{ $item['name'] }}</td>
                                        <td class="invert">{{ $item['price'] }}</td>
                                        <td class="invert">
                                            <div class="rem">
                                                <div class="close1"><i class="far fa-window-close"></i></div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="row checkout-left mt-5">
                        <div class="col-md-4 checkout-left-basket">
                            <h4>Continue to basket</h4>
                            <ul>
                                <li>Product1 <i>-</i> <span>$599.00 </span></li>
                                <li>Product2 <i>-</i> <span>$899.00 </span></li>
                                <li>Product3 <i>-</i> <span>$799.00 </span></li>
                                <li>Total Service Charges <i>-</i> <span>$10.00</span></li>
                                <li>Total <i>-</i> <span>$2297.00</span></li>
                            </ul>
                        </div>
                        <div class="col-md-8 address_form_agile ps-lg-5">
                            <h4>Add a new Details</h4>
                            <form action="payment.html" method="post" class="creditly-card-form agileinfo_form mt-4">
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="information-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">

                                                <input class="billing-address-name form-control" type="text"
                                                    name="name" placeholder="Full name">
                                            </div>
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">

                                                        <input class="form-control" type="text"
                                                            placeholder="Mobile number">
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">

                                                        <input class="form-control" type="text" placeholder="Landmark">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">

                                                <input class="form-control" type="text" placeholder="Town/City">
                                            </div>
                                            <div class="controls">

                                                <select class="form-control option-w3ls">
                                                    <option>Office</option>
                                                    <option>Home</option>
                                                    <option>Commercial</option>

                                                </select>
                                            </div>
                                        </div>
                                        <button class="submit check_out btn btn-style btn-primary">Delivery to this
                                            Address</button>
                                    </div>
                                </section>
                            </form>
                            <div class="checkout-right-basket">
                                <a class="btn btn-style btn-primary" href="payment.html">Make a Payment <i
                                        class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //about -->
            </div>
        </div>
    </section>
@endsection
