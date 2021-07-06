@extends('LayoutBladeFiles.app-layout')
@section('title','Mashine Za Kilimo')
@section('menu-status-mashine','active')
@section('discription-title','Magari ya Usafirishaji Na Mashine za Kilimo')
@section('discription-details','Pata Mashine Aina zote za kilimo popote ulipo')
<div class="content-grid">
@include('LayoutBladeFiles.title-layout')
<section class="section">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <!-- <p class="section-pretitle">User Location</p> -->
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Mashine za kilimo</h2>
      <!-- /SECTION TITLE -->
      <p class="section-pretitle" style="color:#f33155">{{$user_location->regionName}}, {{$user_location->countryName}}</p>
    </div>
    <!-- /SECTION HEADER INFO -->

    <!-- SECTION HEADER ACTIONS -->
    <div class="section-header-actions">
      <!-- SECTION HEADER ACTION -->
      <!-- <p class="section-header-action popup-album-creation-trigger">Create Album +</p> -->
      <!-- /SECTION HEADER ACTION -->

      <!-- SECTION HEADER ACTION -->
      <!-- <a class="section-header-action" href="profile-photos-inside.html">See All</a> -->
      <!-- /SECTION HEADER ACTION -->
    </div>
    <!-- /SECTION HEADER ACTIONS -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">
    <!-- ALBUM PREVIEW -->
    <a class="album-preview" href="profile-photos-inside.html">
      <!-- ALBUM PREVIEW IMAGE -->
      <figure class="album-preview-image liquid">
        <img src="/assets/img/cover/01.jpg" alt="album-image-01">
      </figure>
      <!-- /ALBUM PREVIEW IMAGE -->

      <!-- TEXT STICKER -->
      <p class="text-sticker small negative">7</p>
      <!-- /TEXT STICKER -->

      <!-- ALBUM PREVIEW INFO -->
      <div class="album-preview-info">
        <!-- ALBUM PREVIEW TITLE -->
        <p class="album-preview-title">Profile Photos</p>
        <!-- /ALBUM PREVIEW TITLE -->

        <!-- ALBUM PREVIEW TEXT -->
        <p class="album-preview-text">Updated 12 days ago</p>
        <!-- /ALBUM PREVIEW TEXT -->
      </div>
      <!-- /ALBUM PREVIEW INFO -->
    </a>
    <!-- /ALBUM PREVIEW -->

    <!-- ALBUM PREVIEW -->
    <a class="album-preview" href="profile-photos-inside.html">
      <!-- ALBUM PREVIEW IMAGE -->
      <figure class="album-preview-image liquid">
        <img src="/assets/img/cover/10.jpg" alt="album-image-10">
      </figure>
      <!-- /ALBUM PREVIEW IMAGE -->

      <!-- TEXT STICKER -->
      <p class="text-sticker small negative">28</p>
      <!-- /TEXT STICKER -->

      <!-- ALBUM PREVIEW INFO -->
      <div class="album-preview-info">
        <!-- ALBUM PREVIEW TITLE -->
        <p class="album-preview-title">Timeline Photos</p>
        <!-- /ALBUM PREVIEW TITLE -->

        <!-- ALBUM PREVIEW TEXT -->
        <p class="album-preview-text">Updated 3 days ago</p>
        <!-- /ALBUM PREVIEW TEXT -->
      </div>
      <!-- /ALBUM PREVIEW INFO -->
    </a>
    <!-- /ALBUM PREVIEW -->

    <!-- ALBUM PREVIEW -->
    <a class="album-preview" href="profile-photos-inside.html">
      <!-- ALBUM PREVIEW IMAGE -->
      <figure class="album-preview-image liquid">
        <img src="/assets/img/cover/41.jpg" alt="album-image-41">
      </figure>
      <!-- /ALBUM PREVIEW IMAGE -->

      <!-- TEXT STICKER -->
      <p class="text-sticker small negative">36</p>
      <!-- /TEXT STICKER -->

      <!-- ALBUM PREVIEW INFO -->
      <div class="album-preview-info">
        <!-- ALBUM PREVIEW TITLE -->
        <p class="album-preview-title">StreamCon 2019</p>
        <!-- /ALBUM PREVIEW TITLE -->

        <!-- ALBUM PREVIEW TEXT -->
        <p class="album-preview-text">Updated 1 month ago</p>
        <!-- /ALBUM PREVIEW TEXT -->
      </div>
      <!-- /ALBUM PREVIEW INFO -->
    </a>
    <!-- /ALBUM PREVIEW -->

    <!-- ALBUM PREVIEW -->
    <a class="album-preview" href="profile-photos-inside.html">
      <!-- ALBUM PREVIEW IMAGE -->
      <figure class="album-preview-image liquid">
        <img src="/assets/img/cover/10.jpg" alt="album-image-10">
      </figure>
      <!-- /ALBUM PREVIEW IMAGE -->

      <!-- TEXT STICKER -->
      <p class="text-sticker small negative">28</p>
      <!-- /TEXT STICKER -->

      <!-- ALBUM PREVIEW INFO -->
      <div class="album-preview-info">
        <!-- ALBUM PREVIEW TITLE -->
        <p class="album-preview-title">Timeline Photos</p>
        <!-- /ALBUM PREVIEW TITLE -->

        <!-- ALBUM PREVIEW TEXT -->
        <p class="album-preview-text">Updated 3 days ago</p>
        <!-- /ALBUM PREVIEW TEXT -->
      </div>
      <!-- /ALBUM PREVIEW INFO -->
    </a>
    <!-- /ALBUM PREVIEW -->

    <!-- ALBUM PREVIEW -->
    <a class="album-preview" href="profile-photos-inside.html">
      <!-- ALBUM PREVIEW IMAGE -->
      <figure class="album-preview-image liquid">
        <img src="/assets/img/cover/06.jpg" alt="album-image-06">
      </figure>
      <!-- /ALBUM PREVIEW IMAGE -->

      <!-- TEXT STICKER -->
      <p class="text-sticker small negative">14</p>
      <!-- /TEXT STICKER -->

      <!-- ALBUM PREVIEW INFO -->
      <div class="album-preview-info">
        <!-- ALBUM PREVIEW TITLE -->
        <p class="album-preview-title">Gaming Cover Arts</p>
        <!-- /ALBUM PREVIEW TITLE -->

        <!-- ALBUM PREVIEW TEXT -->
        <p class="album-preview-text">Updated 1 day ago</p>
        <!-- /ALBUM PREVIEW TEXT -->
      </div>
      <!-- /ALBUM PREVIEW INFO -->
    </a>
    <!-- /ALBUM PREVIEW -->

    <!-- ALBUM PREVIEW -->
    <a class="album-preview" href="profile-photos-inside.html">
      <!-- ALBUM PREVIEW IMAGE -->
      <figure class="album-preview-image liquid">
        <img src="/assets/img/cover/01.jpg" alt="album-image-01">
      </figure>
      <!-- /ALBUM PREVIEW IMAGE -->

      <!-- TEXT STICKER -->
      <p class="text-sticker small negative">7</p>
      <!-- /TEXT STICKER -->

      <!-- ALBUM PREVIEW INFO -->
      <div class="album-preview-info">
        <!-- ALBUM PREVIEW TITLE -->
        <p class="album-preview-title">Profile Photos</p>
        <!-- /ALBUM PREVIEW TITLE -->

        <!-- ALBUM PREVIEW TEXT -->
        <p class="album-preview-text">Updated 12 days ago</p>
        <!-- /ALBUM PREVIEW TEXT -->
      </div>
      <!-- /ALBUM PREVIEW INFO -->
    </a>
    <!-- /ALBUM PREVIEW -->

  </div>
  <!-- /GRID -->

  <!-- SECTION PAGER BAR -->
  <div class="section-pager-bar">
    <!-- SECTION PAGER -->
    <div class="section-pager">
      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item active">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">01</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">02</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">03</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">04</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">05</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">06</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->
    </div>
    <!-- /SECTION PAGER -->

    <!-- SECTION PAGER CONTROLS -->
    <div class="section-pager-controls">
      <!-- SLIDER CONTROL -->
      <div class="slider-control left disabled">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->

      <!-- SLIDER CONTROL -->
      <div class="slider-control right">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->
    </div>
    <!-- /SECTION PAGER CONTROLS -->
  </div>
  <!-- /SECTION PAGER BAR -->
</section>

</div>
