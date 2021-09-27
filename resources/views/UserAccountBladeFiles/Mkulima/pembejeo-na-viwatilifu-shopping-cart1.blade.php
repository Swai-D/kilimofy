@extends('LayoutBladeFiles.app-layout')
@section('title','Pembejeo Na Viwatilifu')
@section('menu-status-growth','active')
@section('discription-title','Pata Pembejeo Hapo Hapo Ulipo')
@section('discription-details','kilimofy')
<div class="content-grid">
@include('LayoutBladeFiles.title-layout')
<!-- SECTION HEADER -->
<div class="section-header">
  <!-- SECTION HEADER INFO -->
  <div class="section-header-info">
    <!-- SECTION PRETITLE -->
    <p class="section-pretitle">Browse Your</p>
    <!-- /SECTION PRETITLE -->

    <!-- SECTION TITLE -->
    <h2 class="section-title">Shopping Cart <span class="highlighted">3</span></h2>
    <!-- /SECTION TITLE -->
  </div>
  <!-- /SECTION HEADER INFO -->
</div>
<!-- /SECTION HEADER -->

<!-- GRID -->
<div class="grid grid-9-3 small-space">
  <!-- GRID COLUMN -->
  <div class="grid-column">
    <!-- TABLE WRAP -->
    <div class="table-wrap" data-simplebar>
      <!-- TABLE -->
      <div class="table table-cart split-rows">
        <!-- TABLE HEADER -->
        <div class="table-header">
          <!-- TABLE HEADER COLUMN -->
          <div class="table-header-column">
            <!-- TABLE HEADER TITLE -->
            <p class="table-header-title">Bidhaa</p>
            <!-- /TABLE HEADER TITLE -->
          </div>
          <!-- /TABLE HEADER COLUMN -->


          <!-- TABLE HEADER COLUMN -->
          <div class="table-header-column padded-left">
            <!-- TABLE HEADER TITLE -->
            <p class="table-header-title">Idadi</p>
            <!-- /TABLE HEADER TITLE -->
          </div>
          <!-- /TABLE HEADER COLUMN -->

          <!-- TABLE HEADER COLUMN -->
          <div class="table-header-column centered padded-left">
            <!-- TABLE HEADER TITLE -->
            <p class="table-header-title">Garama</p>
            <!-- /TABLE HEADER TITLE -->
          </div>
          <!-- /TABLE HEADER COLUMN -->

          <!-- TABLE HEADER COLUMN -->
          <div class="table-header-column padded-big-left"></div>
          <!-- /TABLE HEADER COLUMN -->
        </div>
        <!-- /TABLE HEADER -->

        <!-- TABLE BODY -->
        <div class="table-body same-color-rows">
          <!-- TABLE ROW -->
          <div class="table-row medium">
            <!-- TABLE COLUMN -->
            <div class="table-column">
              <!-- PRODUCT PREVIEW -->
              <div class="product-preview tiny">
                <!-- PRODUCT PREVIEW IMAGE -->
                <a href="marketplace-product.html">
                  <figure class="product-preview-image liquid">
                    <img src="/assets/img/marketplace/items/01.jpg" alt="item-01">
                  </figure>
                </a>
                <!-- /PRODUCT PREVIEW IMAGE -->

                <!-- PRODUCT PREVIEW INFO -->
                <div class="product-preview-info">
                  <!-- PRODUCT PREVIEW TITLE -->
                  <p class="product-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
                  <!-- /PRODUCT PREVIEW TITLE -->

                  <!-- PRODUCT PREVIEW CATEGORY -->
                  <p class="product-preview-category digital"><a href="marketplace-category.html">Stream Packs</a></p>
                  <!-- /PRODUCT PREVIEW CATEGORY -->

                  <!-- PRODUCT PREVIEW CREATOR -->
                  <p class="product-preview-creator"><a href="profile-timeline.html">Marina Valentine</a></p>
                  <!-- /PRODUCT PREVIEW CREATOR -->
                </div>
                <!-- /PRODUCT PREVIEW INFO -->
              </div>
              <!-- /PRODUCT PREVIEW -->
            </div>
            <!-- /TABLE COLUMN -->

          <!-- TABLE COLUMN -->
            <div class="table-column padded-left">
              <!-- FORM COUNTER -->
              <div class="form-counter">
                <!-- FORM COUNTER VALUE -->
                <p class="form-counter-value">1</p>
                <!-- /FORM COUNTER VALUE -->

                <!-- FORM COUNTER CONTROLS -->
                <div class="form-counter-controls">
                  <!-- FORM COUNTER CONTROL -->
                  <div class="form-counter-control form-counter-control-increase">
                    <!-- FORM COUNTER ICON -->
                    <svg class="form-counter-icon icon-small-arrow">
                      <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /FORM COUNTER ICON -->
                  </div>
                  <!-- /FORM COUNTER CONTROL -->

                  <!-- FORM COUNTER CONTROL -->
                  <div class="form-counter-control form-counter-control-decrease">
                    <!-- FORM COUNTER ICON -->
                    <svg class="form-counter-icon icon-small-arrow">
                      <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /FORM COUNTER ICON -->
                  </div>
                  <!-- /FORM COUNTER CONTROL -->
                </div>
                <!-- /FORM COUNTER CONTROLS -->
              </div>
              <!-- /FORM COUNTER -->
            </div>
            <!-- /TABLE COLUMN -->

            <!-- TABLE COLUMN -->
            <div class="table-column centered padded-left">
              <!-- PRICE TITLE -->
              <p class="price-title"><span class="currency">$</span> 12.00</p>
              <!-- /PRICE TITLE -->
            </div>
            <!-- /TABLE COLUMN -->

            <!-- TABLE COLUMN -->
            <div class="table-column padded-big-left">
              <!-- TABLE ACTION -->
              <div class="table-action">
                <!-- ICON DELETE -->
                <svg class="icon-delete">
                  <use xlink:href="#svg-delete"></use>
                </svg>
                <!-- /ICON DELETE -->
              </div>
              <!-- /TABLE ACTION -->
            </div>
            <!-- /TABLE COLUMN -->
          </div>
          <!-- /TABLE ROW -->
        </div>
        <!-- /TABLE BODY -->
      </div>
      <!-- /TABLE -->
    </div>
    <!-- /TABLE WRAP -->

  </div>
  <!-- /GRID COLUMN -->

  <!-- GRID COLUMN -->
  <div class="grid-column">
    <!-- SIDEBAR BOX -->
    <div class="sidebar-box margin-top">
      <!-- SIDEBAR BOX TITLE -->
      <p class="sidebar-box-title">Order Totals</p>
      <!-- /SIDEBAR BOX TITLE -->

      <!-- SIDEBAR BOX ITEMS -->
      <div class="sidebar-box-items">
        <!-- PRICE TITLE -->
        <p class="price-title big"><span class="currency">$</span> 39.00</p>
        <!-- /PRICE TITLE -->

        <!-- TOTALS LINE LIST -->
        <div class="totals-line-list">
          <!-- TOTALS LINE -->
          <div class="totals-line">
            <!-- TOTALS LINE TITLE -->
            <p class="totals-line-title">Cart (3)</p>
            <!-- /TOTALS LINE TITLE -->

            <!-- PRICE TITLE -->
            <p class="price-title"><span class="currency">$</span> 44.00</p>
            <!-- /PRICE TITLE -->
          </div>
          <!-- /TOTALS LINE -->

          <!-- TOTALS LINE -->
          <div class="totals-line">
            <!-- TOTALS LINE TITLE -->
            <p class="totals-line-title">Code</p>
            <!-- /TOTALS LINE TITLE -->

            <!-- PRICE TITLE -->
            <p class="price-title">-<span class="currency">$</span> 5.00</p>
            <!-- /PRICE TITLE -->
          </div>
          <!-- /TOTALS LINE -->

          <!-- TOTALS LINE -->
          <div class="totals-line">
            <!-- TOTALS LINE TITLE -->
            <p class="totals-line-title">Total</p>
            <!-- /TOTALS LINE TITLE -->

            <!-- PRICE TITLE -->
            <p class="price-title"><span class="currency">$</span> 39.00</p>
            <!-- /PRICE TITLE -->
          </div>
          <!-- /TOTALS LINE -->
        </div>
        <!-- /TOTALS LINE LIST -->

        <!-- BUTTON -->
        <a class="button primary" href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Buy-item">Lipia</a>
        <!-- /BUTTON -->

        <!-- BUTTON -->
        <a href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu" class="button white small-space">Ongeza Bidhaa</a>
        <!-- /BUTTON -->
      </div>
      <!-- /SIDEBAR BOX ITEMS -->
    </div>
    <!-- /SIDEBAR BOX -->
  </div>
  <!-- /GRID COLUMN -->
</div>
<!-- /GRID -->

</div>
