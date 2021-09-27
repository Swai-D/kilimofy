@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji Wa Mizigo')
@section('menu-status-shipping','active')
@section('discription-title','Usafirishaji')
@section('discription-details','Chagua Usafiri')
<!-- CONTENT GRID -->
<div class="content-grid">
  @include('LayoutBladeFiles.title-layout')
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Chosen by the Community</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Featured Streamers</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->

    <!-- SECTION HEADER ACTIONS -->
    <div class="section-header-actions">
      <!-- SLIDER CONTROLS -->
      <div id="stream-slider-controls" class="slider-controls">
        <!-- SLIDER CONTROL -->
        <div class="slider-control left">
            <!-- SLIDER CONTROL ICON -->
            <svg class="slider-control-icon icon-big-arrow">
              <use xlink:href="#svg-big-arrow"></use>
            </svg>
            <!-- /SLIDER CONTROL ICON -->
          </div>
          <!-- /SLIDER CONTROL -->

          <!-- SLIDER CONTROL -->
          <div class="slider-control right">
            <!-- SLIDER CONTROL ICON -->
            <svg class="slider-control-icon icon-big-arrow">
              <use xlink:href="#svg-big-arrow"></use>
            </svg>
            <!-- /SLIDER CONTROL ICON -->
          </div>
          <!-- /SLIDER CONTROL -->
      </div>
      <!-- /SLIDER CONTROLS -->
    </div>
    <!-- /SECTION HEADER ACTIONS -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION SLIDER -->
  <div id="stream-slider" class="section-slider">
    <!-- SECTION SLIDER ITEM -->
    <div class="sections-slider-item">
      <!-- STREAMER BOX -->
      <div class="streamer-box small">
        <!-- STREAMER BOX COVER -->
        <figure class="streamer-box-cover liquid">
          <img src="/assets/img/cover/01.jpg" alt="cover-01">
        </figure>
        <!-- /STREAMER BOX COVER -->

        <!-- STREAMER BOX INFO -->
        <div class="streamer-box-info">
          <!-- STREAMER BOX IMAGE -->
          <div class="streamer-box-image">
            <!-- PICTURE -->
            <figure class="picture medium circle liquid">
              <img src="/assets/img/avatar/01-social.png" alt="avatar-01-social">
            </figure>
            <!-- /PICTURE -->
          </div>
          <!-- /STREAMER BOX IMAGE -->

          <!-- STREAMER BOX TITLE -->
          <p class="streamer-box-title">GameHuntress</p>
          <!-- /STREAMER BOX TITLE -->

          <!-- STREAMER BOX TEXT -->
          <p class="streamer-box-text">Marina Valentine</p>
          <!-- /STREAMER BOX TEXT -->

          <!-- STREAMER BOX STATUS -->
          <p class="streamer-box-status">Offline</p>
          <!-- /STREAMER BOX STATUS -->

          <!-- BUTTON -->
          <a class="button small white" href="profile-timeline.html">View Profile</a>
          <!-- /BUTTON -->

          <!-- BUTTON -->
          <a class="button small twitch" href="https://www.twitch.tv/" target="_blank">Visit Channel</a>
          <!-- /BUTTON -->
        </div>
        <!-- /STREAMER BOX INFO -->
      </div>
      <!-- /STREAMER BOX -->
    </div>
    <!-- /SECTION SLIDER ITEM -->

    <!-- SECTION SLIDER ITEM -->
    <div class="sections-slider-item">
      <!-- STREAMER BOX -->
      <div class="streamer-box small">
        <!-- STREAMER BOX COVER -->
        <figure class="streamer-box-cover liquid">
          <img src="/assets/img/cover/04.jpg" alt="cover-04">
        </figure>
        <!-- /STREAMER BOX COVER -->

        <!-- STREAMER BOX INFO -->
        <div class="streamer-box-info">
          <!-- STREAMER BOX IMAGE -->
          <div class="streamer-box-image">
            <!-- PICTURE -->
            <figure class="picture medium circle liquid">
              <img src="/assets/img/avatar/31.jpg" alt="avatar-31">
            </figure>
            <!-- /PICTURE -->
          </div>
          <!-- /STREAMER BOX IMAGE -->

          <!-- STREAMER BOX TITLE -->
          <p class="streamer-box-title">NekoStreamz</p>
          <!-- /STREAMER BOX TITLE -->

          <!-- STREAMER BOX TEXT -->
          <p class="streamer-box-text">Neko Bebop</p>
          <!-- /STREAMER BOX TEXT -->

          <!-- STREAMER BOX STATUS -->
          <p class="streamer-box-status active">Live</p>
          <!-- /STREAMER BOX STATUS -->

          <!-- BUTTON -->
          <a class="button small white" href="profile-timeline.html">View Profile</a>
          <!-- /BUTTON -->

          <!-- BUTTON -->
          <a class="button small twitch" href="https://www.twitch.tv/" target="_blank">Visit Channel</a>
          <!-- /BUTTON -->
        </div>
        <!-- /STREAMER BOX INFO -->
      </div>
      <!-- /STREAMER BOX -->
    </div>
    <!-- /SECTION SLIDER ITEM -->

    <!-- SECTION SLIDER ITEM -->
    <div class="sections-slider-item">
      <!-- STREAMER BOX -->
      <div class="streamer-box small">
        <!-- STREAMER BOX COVER -->
        <figure class="streamer-box-cover liquid">
          <img src="/assets/img/cover/06.jpg" alt="cover-06">
        </figure>
        <!-- /STREAMER BOX COVER -->

        <!-- STREAMER BOX INFO -->
        <div class="streamer-box-info">
          <!-- STREAMER BOX IMAGE -->
          <div class="streamer-box-image">
            <!-- PICTURE -->
            <figure class="picture medium circle liquid">
              <img src="/assets/img/avatar/04.jpg" alt="avatar-04">
            </figure>
            <!-- /PICTURE -->
          </div>
          <!-- /STREAMER BOX IMAGE -->

          <!-- STREAMER BOX TITLE -->
          <p class="streamer-box-title">BeardedWonder66</p>
          <!-- /STREAMER BOX TITLE -->

          <!-- STREAMER BOX TEXT -->
          <p class="streamer-box-text">Bearded Wonder</p>
          <!-- /STREAMER BOX TEXT -->

          <!-- STREAMER BOX STATUS -->
          <p class="streamer-box-status active">Live</p>
          <!-- /STREAMER BOX STATUS -->

          <!-- BUTTON -->
          <a class="button small white" href="profile-timeline.html">View Profile</a>
          <!-- /BUTTON -->

          <!-- BUTTON -->
          <a class="button small twitch" href="https://www.twitch.tv/" target="_blank">Visit Channel</a>
          <!-- /BUTTON -->
        </div>
        <!-- /STREAMER BOX INFO -->
      </div>
      <!-- /STREAMER BOX -->
    </div>
    <!-- /SECTION SLIDER ITEM -->

    <!-- SECTION SLIDER ITEM -->
    <div class="sections-slider-item">
      <!-- STREAMER BOX -->
      <div class="streamer-box small">
        <!-- STREAMER BOX COVER -->
        <figure class="streamer-box-cover liquid">
          <img src="/assets/img/cover/05.jpg" alt="cover-05">
        </figure>
        <!-- /STREAMER BOX COVER -->

        <!-- STREAMER BOX INFO -->
        <div class="streamer-box-info">
          <!-- STREAMER BOX IMAGE -->
          <div class="streamer-box-image">
            <!-- PICTURE -->
            <figure class="picture medium circle liquid">
              <img src="/assets/img/avatar/32.jpg" alt="avatar-32">
            </figure>
            <!-- /PICTURE -->
          </div>
          <!-- /STREAMER BOX IMAGE -->

          <!-- STREAMER BOX TITLE -->
          <p class="streamer-box-title">Diamondette</p>
          <!-- /STREAMER BOX TITLE -->

          <!-- STREAMER BOX TEXT -->
          <p class="streamer-box-text">Sarah Diamond</p>
          <!-- /STREAMER BOX TEXT -->

          <!-- STREAMER BOX STATUS -->
          <p class="streamer-box-status active">Live</p>
          <!-- /STREAMER BOX STATUS -->

          <!-- BUTTON -->
          <a class="button small white" href="profile-timeline.html">View Profile</a>
          <!-- /BUTTON -->

          <!-- BUTTON -->
          <a class="button small twitch" href="https://www.twitch.tv/" target="_blank">Visit Channel</a>
          <!-- /BUTTON -->
        </div>
        <!-- /STREAMER BOX INFO -->
      </div>
      <!-- /STREAMER BOX -->
    </div>
    <!-- /SECTION SLIDER ITEM -->

    <!-- SECTION SLIDER ITEM -->
    <div class="sections-slider-item">
      <!-- STREAMER BOX -->
      <div class="streamer-box small">
        <!-- STREAMER BOX COVER -->
        <figure class="streamer-box-cover liquid">
          <img src="/assets/img/cover/23.jpg" alt="cover-23">
        </figure>
        <!-- /STREAMER BOX COVER -->

        <!-- STREAMER BOX INFO -->
        <div class="streamer-box-info">
          <!-- STREAMER BOX IMAGE -->
          <div class="streamer-box-image">
            <!-- PICTURE -->
            <figure class="picture medium circle liquid">
              <img src="/assets/img/avatar/03.jpg" alt="avatar-03">
            </figure>
            <!-- /PICTURE -->
          </div>
          <!-- /STREAMER BOX IMAGE -->

          <!-- STREAMER BOX TITLE -->
          <p class="streamer-box-title">Nick'sArcade</p>
          <!-- /STREAMER BOX TITLE -->

          <!-- STREAMER BOX TEXT -->
          <p class="streamer-box-text">Nick Grissom</p>
          <!-- /STREAMER BOX TEXT -->

          <!-- STREAMER BOX STATUS -->
          <p class="streamer-box-status">Offline</p>
          <!-- /STREAMER BOX STATUS -->

          <!-- BUTTON -->
          <a class="button small white" href="profile-timeline.html">View Profile</a>
          <!-- /BUTTON -->

          <!-- BUTTON -->
          <a class="button small twitch" href="https://www.twitch.tv/" target="_blank">Visit Channel</a>
          <!-- /BUTTON -->
        </div>
        <!-- /STREAMER BOX INFO -->
      </div>
      <!-- /STREAMER BOX -->
    </div>
    <!-- /SECTION SLIDER ITEM -->

    </div>
  <!-- /SECTION SLIDER -->

  <!-- SECTION RESULTS TEXT -->
  <p class="section-results-text">Showing 12 out of 98 streams</p>
  <!-- /SECTION RESULTS TEXT -->
</div>
<!-- /CONTENT GRID -->
