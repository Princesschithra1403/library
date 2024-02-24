<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Directorate of Public Libraries </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php
   include "plugin/css.php";
   ?>
</head>

<body>
   <!-- Scroll-top -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="icon-chevrons-up"></i>
   </button>
   <!-- Scroll-top-end-->
   <header>
      <!-- header-area-start -->
      <!-- Start Top Header -->
      @include("header.top_header")
        <!-- End Top Header -->
        <!-- User Desktop navigation System -->
    
            @include("header.middile_navigation")
            @include("header.navigation")
        <!-- End User Desktop navigation System -->

        <!-- mobile-menu-area -->
   
               @include("header.mobile_navigation")
      <!-- mobile-menu-area-end -->
   </header>
   <!-- header-area-end -->

   <main>
      <!-- Your Content Use Here -->
      <div class="breadcrumb__area pt-5 pb-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-breadcrumb__content">
                     <div class="tp-breadcrumb__list">
                        <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>Cart</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->
      <div class="container">
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         
            <strong>!Sorry</strong> Can't Purches Because Your Limit End
         </div>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         
            <strong>!Sucess</strong> Your Cart Item List here
         </div>
      </div>
      
      <!-- Total Leval For Buy item -->
      <section class="cart-item-leval text-center">
         <div class="container">
            <h3 class="text-secondary text-start p-2">Purches Category Leval</h3>
            <div class="d-flex align-items-center">
               <div class="item">
                  <p>Children</p>
                  <div class="pie animate no-round" style="--p:20"> 20%</div>
               </div>
               <div class="item">
                  <p>Children</p>
                  <div class="pie" style="--p:40;--c:darkblue;--b:10px"> 40%</div>
               </div>
               <div class="item">
                  <p>Children</p>
                  <div class="pie no-round" style="--p:60;--c:purple;--b:15px"> 60%</div>
               </div>
               <div class="item">
                  <p>Children</p>
                  <div class="pie animate no-round" style="--p:80;--c:orange;"> 80%</div>
               </div>
               <div class="item">
                  <p>Children</p>
                  <div class="pie animate no-round" style="--p:60;--c:red;"> 60%</div>
               </div>
               <div class="item">
                  <p>Children</p>
                  <div class="pie animate" style="--p:90;--c:lightgreen"> 90%</div>
               </div>
            </div>
         </div>
      </section>
      <!--End Total Leval For Buy item -->
      <!-- cart area -->
      <section class="cart-area pb-80">
         <div class="container">
            <h3>Cart Section</h3>
            <div class="row">
               <div class="col-12">
                  <form action="#">
                     <div class="table-content table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="product-thumbnail">Images</th>
                                 <th class="cart-product-name">Book Name</th>
                                 <th class="cart-product-name">Category</th>
                                 <th class="product-price">Unit Price</th>
                                 <th class="product-quantity">Quantity</th>
                                 <th class="product-subtotal">Total</th>
                                 <th class="product-remove">Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="product-thumbnail">
                                    <a href="shope.php">
                                       <img src="https://marketplace.canva.com/EAFKA0RgDtw/1/0/1003w/canva-brown-and-orange-elegant-simple-young-adult-fantasy-book-cover-Qb8uSVdJDzw.jpg" style="width:75px;height:75px" alt="">
                                    </a>
                                 </td>
                                 <td class="product-name" style="width:250px">
                                    <a href="shope.php">Three Thousand Stitches: Ordinary People, Extraordinary Lives [Paperback] Murty, Sudha</a>
                                 </td>
                                 <td class="Category-name">
                                    <span class="Category">Children</span>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount">$130.00</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount">$130.00</span>
                                 </td>
                                 <td class="product-remove">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="product-thumbnail">
                                    <a href="shope.php">
                                       <img src="https://marketplace.canva.com/EAFKA0RgDtw/1/0/1003w/canva-brown-and-orange-elegant-simple-young-adult-fantasy-book-cover-Qb8uSVdJDzw.jpg" style="width:75px;height:75px" alt="">
                                    </a>
                                 </td>
                                 <td class="product-name" style="width:75px">
                                    <a href="shope.php">Three Thousand Stitches: Ordinary People, Extraordinary Lives [Paperback] Murty, Sudha</a>
                                 </td>
                                 <td class="Category-name">
                                    <span class="Category">Children</span>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount">$120.50</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount">$120.50</span>
                                 </td>
                                 <td class="product-remove">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="coupon-all">
                              <div class="coupon">
                                 <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                 <button class="tp-btn tp-color-btn banner-animation" name="apply_coupon" type="submit">Apply
                                    Coupon</button>
                              </div>
                              <div class="coupon2">
                                 <button class="tp-btn tp-color-btn banner-animation" name="update_cart" type="submit">Update cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-end">
                        <div class="col-md-5 ">
                           <div class="cart-page-total">
                              <h2>Cart totals</h2>
                              <ul class="mb-20">
                                 <li>Subtotal <span>$250.00</span></li>
                                 <li>Total <span>$250.00</span></li>
                              </ul>
                              <a href="/checkout" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- cart area end-->

      <!-- Your Content End Here -->
   </main>

   <!-- footer-area-start -->
   @include("footer.footer")
   <!-- footer-area-end -->
   <?php
   include "plugin/js.php";
   ?>
</body>
<style>
   @property --p {
      syntax: '<number>';
      inherits: true;
      initial-value: 0;
   }

   .pie {
      --p: 20;
      --b: 22px;
      --c: darkred;
      --w: 150px;

      width: var(--w);
      aspect-ratio: 1;
      position: relative;
      display: inline-grid;
      margin: 5px;
      place-content: center;
      font-size: 25px;
      font-weight: bold;
      font-family: sans-serif;
   }

   .pie:before,
   .pie:after {
      content: "";
      position: absolute;
      border-radius: 50%;
   }

   .pie:before {
      inset: 0;
      background:
         radial-gradient(farthest-side, var(--c) 98%, #0000) top/var(--b) var(--b) no-repeat,
         conic-gradient(var(--c) calc(var(--p)*1%), #0000 0);
      -webkit-mask: radial-gradient(farthest-side, #0000 calc(99% - var(--b)), #000 calc(100% - var(--b)));
      mask: radial-gradient(farthest-side, #0000 calc(99% - var(--b)), #000 calc(100% - var(--b)));
   }

   .pie:after {
      inset: calc(50% - var(--b)/2);
      background: var(--c);
      transform: rotate(calc(var(--p)*3.6deg)) translateY(calc(50% - var(--w)/2));
   }

   .animate {
      animation: p 1s .5s both;
   }

   .no-round:before {
      background-size: 0 0, auto;
   }

   .no-round:after {
      content: none;
   }

   @keyframes p {
      from {
         --p: 0
      }
   }

   body {
      background: #f2f2f2;
   }
</style>

</html>