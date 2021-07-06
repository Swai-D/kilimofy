@extends('LayoutBladeFiles.app-layout')
@section('title','Mabwana Shamaba')
@section('menu-status-gardener','active')
@section('discription-title','Pata Bwana Shamba Karibu Yako')
@section('discription-details','kilimofy')
<div class="content-grid">
@include('LayoutBladeFiles.title-layout')
<!-- SECTION -->
<section class="section">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle" style="color:#f33155">{{$user_location->regionName}}, {{$user_location->countryName}}</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Mabwana Shamba <span class="highlighted">(3)</span></h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v1">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM INPUT -->
        <div class="form-input small with-button">
          <label for="friends-search">Tafuta Bwanashamba</label>
          <input type="text" id="friends-search" name="tafuta_bwanashamba">
          <!-- BUTTON -->
          <button class="button primary">
            <!-- ICON MAGNIFYING GLASS -->
            <svg class="icon-magnifying-glass">
              <use xlink:href="#svg-magnifying-glass"></use>
            </svg>
            <!-- /ICON MAGNIFYING GLASS -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM INPUT -->

        <!-- FORM SELECT -->
        <!-- <div class="form-select"> -->
          <!-- <label for="friends-filter-category">Filter By</label> -->
          <!-- <select id="friends-filter-category" name="friends_filter_category">
            <option value="0">Recently Active</option>
            <option value="1">Newest Friends</option>
            <option value="2">Alphabetical</option>
          </select> -->
          <!-- FORM SELECT ICON -->
          <!-- <svg class="form-select-icon icon-small-arrow"> -->
            <!-- <use xlink:href="#svg-small-arrow"></use> -->
          <!-- </svg> -->
          <!-- /FORM SELECT ICON -->
        <!-- </div> -->
        <!-- /FORM SELECT -->
      </form>
      <!-- /FORM -->

      <!-- FILTER TABS -->
      <div class="filter-tabs">
        <!-- FILTER TAB -->
        <div class="filter-tab active">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Recently Active</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Newest Friends</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Alphabetical</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->
      </div>
      <!-- /FILTER TABS -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->

    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">
    <!-- USER PREVIEW -->
    <div class="user-preview small">
      <!-- USER PREVIEW COVER -->
      <figure class="user-preview-cover liquid">
        <img src="/assets/img/cover/04.jpg" alt="cover-04">
      </figure>
      <!-- /USER PREVIEW COVER -->

      <!-- USER PREVIEW INFO -->
      <div class="user-preview-info">
        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description small">
          <!-- USER SHORT DESCRIPTION AVATAR -->
          <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-100-110"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-68-74" data-src="/assets/img/avatar/05.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->

            <!-- USER AVATAR PROGRESS -->
            <div class="user-avatar-progress">
              <!-- HEXAGON -->
              <div class="hexagon-progress-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS -->

            <!-- USER AVATAR PROGRESS BORDER -->
            <div class="user-avatar-progress-border">
              <!-- HEXAGON -->
              <div class="hexagon-border-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS BORDER -->

            <!-- USER AVATAR BADGE -->
            <div class="user-avatar-badge">
              <!-- USER AVATAR BADGE BORDER -->
              <div class="user-avatar-badge-border">
                <!-- HEXAGON -->
                <div class="hexagon-28-32"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE BORDER -->

              <!-- USER AVATAR BADGE CONTENT -->
              <div class="user-avatar-badge-content">
                <!-- HEXAGON -->
                <div class="hexagon-dark-22-24"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE CONTENT -->

              <!-- USER AVATAR BADGE TEXT -->
              <p class="user-avatar-badge-text">12</p>
              <!-- /USER AVATAR BADGE TEXT -->
            </div>
            <!-- /USER AVATAR BADGE -->
          </a>
          <!-- /USER SHORT DESCRIPTION AVATAR -->

          <!-- USER SHORT DESCRIPTION TITLE -->
          <p class="user-short-description-title"><a href="profile-timeline.html">NekoBebop</a></p>
          <!-- /USER SHORT DESCRIPTION TITLE -->

          <!-- USER SHORT DESCRIPTION TEXT -->
          <p class="user-short-description-text"><a href="#">www.store.com/nekoprints</a></p>
          <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->

        <!-- BADGE LIST -->
        <div class="badge-list small">
          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="/assets/img/badge/silver-s.png" alt="badge-silver-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="/assets/img/badge/fcultivator-s.png" alt="badge-fcultivator-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="/assets/img/badge/scientist-s.png" alt="badge-scientist-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <a class="badge-item" href="profile-badges.html">
            <img src="/assets/img/badge/blank-s.png" alt="badge-blank-s">
            <!-- BADGE ITEM TEXT -->
            <p class="badge-item-text">+29</p>
            <!-- /BADGE ITEM TEXT -->
          </a>
          <!-- /BADGE ITEM -->
        </div>
        <!-- /BADGE LIST -->

        <!-- USER STATS -->
        <div class="user-stats">
          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">874</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">posts</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">60</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">friends</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">3.9k</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">visits</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->
        </div>
        <!-- /USER STATS -->

        <!-- SOCIAL LINKS -->
        <div class="social-links small">
          <!-- SOCIAL LINK -->
          <a class="social-link small twitter" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-twitter">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small instagram" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-instagram">
              <use xlink:href="#svg-instagram"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small twitch" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-twitch">
              <use xlink:href="#svg-twitch"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small discord" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-discord">
              <use xlink:href="#svg-discord"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->
        </div>
        <!-- /SOCIAL LINKS -->
      </div>
      <!-- /USER PREVIEW INFO -->

      <!-- USER PREVIEW FOOTER -->
      <div class="user-preview-footer">
        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <p class="button void void-secondary">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-add-friend">
              <use xlink:href="#svg-add-friend"></use>
            </svg>
            <!-- /BUTTON ICON -->
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->

        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <p class="button void void-primary">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-comment">
              <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /BUTTON ICON -->
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->
      </div>
      <!-- /USER PREVIEW FOOTER -->
    </div>
    <!-- /USER PREVIEW -->

    <!-- USER PREVIEW -->
    <div class="user-preview small">
      <!-- USER PREVIEW COVER -->
      <figure class="user-preview-cover liquid">
        <img src="/assets/img/cover/15.jpg" alt="cover-15">
      </figure>
      <!-- /USER PREVIEW COVER -->

      <!-- USER PREVIEW INFO -->
      <div class="user-preview-info">
        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description small">
          <!-- USER SHORT DESCRIPTION AVATAR -->
          <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-100-110"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-68-74" data-src="/assets/img/avatar/02.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->

            <!-- USER AVATAR PROGRESS -->
            <div class="user-avatar-progress">
              <!-- HEXAGON -->
              <div class="hexagon-progress-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS -->

            <!-- USER AVATAR PROGRESS BORDER -->
            <div class="user-avatar-progress-border">
              <!-- HEXAGON -->
              <div class="hexagon-border-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS BORDER -->

            <!-- USER AVATAR BADGE -->
            <div class="user-avatar-badge">
              <!-- USER AVATAR BADGE BORDER -->
              <div class="user-avatar-badge-border">
                <!-- HEXAGON -->
                <div class="hexagon-28-32"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE BORDER -->

              <!-- USER AVATAR BADGE CONTENT -->
              <div class="user-avatar-badge-content">
                <!-- HEXAGON -->
                <div class="hexagon-dark-22-24"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE CONTENT -->

              <!-- USER AVATAR BADGE TEXT -->
              <p class="user-avatar-badge-text">13</p>
              <!-- /USER AVATAR BADGE TEXT -->
            </div>
            <!-- /USER AVATAR BADGE -->
          </a>
          <!-- /USER SHORT DESCRIPTION AVATAR -->

          <!-- USER SHORT DESCRIPTION TITLE -->
          <p class="user-short-description-title"><a href="profile-timeline.html">Destroy Dex</a></p>
          <!-- /USER SHORT DESCRIPTION TITLE -->

          <!-- USER SHORT DESCRIPTION TEXT -->
          <p class="user-short-description-text"><a href="#">www.twitch.tv/d-destroyer</a></p>
          <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->

        <!-- BADGE LIST -->
        <div class="badge-list small">
          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="/assets/img/badge/gold-s.png" alt="badge-gold-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="/assets/img/badge/age-s.png" alt="badge-age-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="/assets//assets/img/badge/verifieds-s.png" alt="badge-verifieds-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <a class="badge-item" href="profile-badges.html">
            <img src="/assets/img/badge/blank-s.png" alt="badge-blank-s">
            <!-- BADGE ITEM TEXT -->
            <p class="badge-item-text">+12</p>
            <!-- /BADGE ITEM TEXT -->
          </a>
          <!-- /BADGE ITEM -->
        </div>
        <!-- /BADGE LIST -->

        <!-- USER STATS -->
        <div class="user-stats">
          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">890</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">posts</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">79</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">friends</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">4.6k</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">visits</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->
        </div>
        <!-- /USER STATS -->

        <!-- USER PREVIEW SOCIAL LINKS WRAP -->
        <div class="user-preview-social-links-wrap">
          <!-- USER PREVIEW SOCIAL LINKS -->
          <div id="user-preview-social-links-slider-01" class="user-preview-social-links">
            <!-- USER PREVIEW SOCIAL LINK -->
            <div class="user-preview-social-link">
              <!-- SOCIAL LINK -->
              <a class="social-link small facebook" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /USER PREVIEW SOCIAL LINK -->

            <!-- USER PREVIEW SOCIAL LINK -->
            <div class="user-preview-social-link">
              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /USER PREVIEW SOCIAL LINK -->

            <!-- USER PREVIEW SOCIAL LINK -->
            <div class="user-preview-social-link">
              <!-- SOCIAL LINK -->
              <a class="social-link small instagram" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-instagram">
                  <use xlink:href="#svg-instagram"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /USER PREVIEW SOCIAL LINK -->

            <!-- USER PREVIEW SOCIAL LINK -->
            <div class="user-preview-social-link">
              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /USER PREVIEW SOCIAL LINK -->

            <!-- USER PREVIEW SOCIAL LINK -->
            <div class="user-preview-social-link">
              <!-- SOCIAL LINK -->
              <a class="social-link small artstation" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-artstation">
                  <use xlink:href="#svg-artstation"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /USER PREVIEW SOCIAL LINK -->
          </div>
          <!-- /USER PREVIEW SOCIAL LINKS -->

          <!-- SLIDER CONTROLS -->
          <div id="user-preview-social-links-slider-controls-01" class="slider-controls">
            <!-- SLIDER CONTROL -->
            <div class="slider-control left">
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
          <!-- /SLIDER CONTROLS -->
        </div>
        <!-- /USER PREVIEW SOCIAL LINKS WRAP -->
      </div>
      <!-- /USER PREVIEW INFO -->

      <!-- USER PREVIEW FOOTER -->
      <div class="user-preview-footer">
        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <p class="button void void-secondary">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-add-friend">
              <use xlink:href="#svg-add-friend"></use>
            </svg>
            <!-- /BUTTON ICON -->
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->

        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <p class="button void void-primary">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-comment">
              <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /BUTTON ICON -->
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->
      </div>
      <!-- /USER PREVIEW FOOTER -->
    </div>
    <!-- /USER PREVIEW -->

    <!-- USER PREVIEW -->
    <div class="user-preview small">
      <!-- USER PREVIEW COVER -->
      <figure class="user-preview-cover liquid">
        <img src="/assets/img/cover/23.jpg" alt="cover-23">
      </figure>
      <!-- /USER PREVIEW COVER -->

      <!-- USER PREVIEW INFO -->
      <div class="user-preview-info">
        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description small">
          <!-- USER SHORT DESCRIPTION AVATAR -->
          <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-100-110"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-68-74" data-src="/assets/img/avatar/03.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->

            <!-- USER AVATAR PROGRESS -->
            <div class="user-avatar-progress">
              <!-- HEXAGON -->
              <div class="hexagon-progress-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS -->

            <!-- USER AVATAR PROGRESS BORDER -->
            <div class="user-avatar-progress-border">
              <!-- HEXAGON -->
              <div class="hexagon-border-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS BORDER -->

            <!-- USER AVATAR BADGE -->
            <div class="user-avatar-badge">
              <!-- USER AVATAR BADGE BORDER -->
              <div class="user-avatar-badge-border">
                <!-- HEXAGON -->
                <div class="hexagon-28-32"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE BORDER -->

              <!-- USER AVATAR BADGE CONTENT -->
              <div class="user-avatar-badge-content">
                <!-- HEXAGON -->
                <div class="hexagon-dark-22-24"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE CONTENT -->

              <!-- USER AVATAR BADGE TEXT -->
              <p class="user-avatar-badge-text">16</p>
              <!-- /USER AVATAR BADGE TEXT -->
            </div>
            <!-- /USER AVATAR BADGE -->
          </a>
          <!-- /USER SHORT DESCRIPTION AVATAR -->

          <!-- USER SHORT DESCRIPTION TITLE -->
          <p class="user-short-description-title"><a href="profile-timeline.html">Nick Grissom</a></p>
          <!-- /USER SHORT DESCRIPTION TITLE -->

          <!-- USER SHORT DESCRIPTION TEXT -->
          <p class="user-short-description-text">aka Phantom Streamer</p>
          <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->

        <!-- BADGE LIST -->
        <div class="badge-list small">
          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="img/badge/gold-s.png" alt="badge-gold-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="img/badge/age-s.png" alt="badge-age-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <div class="badge-item">
            <img src="img/badge/liked-s.png" alt="badge-liked-s">
          </div>
          <!-- /BADGE ITEM -->

          <!-- BADGE ITEM -->
          <a class="badge-item" href="profile-badges.html">
            <img src="img/badge/blank-s.png" alt="badge-blank-s">
            <!-- BADGE ITEM TEXT -->
            <p class="badge-item-text">+9</p>
            <!-- /BADGE ITEM TEXT -->
          </a>
          <!-- /BADGE ITEM -->
        </div>
        <!-- /BADGE LIST -->

        <!-- USER STATS -->
        <div class="user-stats">
          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">562</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">posts</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">77</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">friends</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">2.3k</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">visits</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->
        </div>
        <!-- /USER STATS -->

        <!-- SOCIAL LINKS -->
        <div class="social-links small">
          <!-- SOCIAL LINK -->
          <a class="social-link small twitter" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-twitter">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small twitch" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-twitch">
              <use xlink:href="#svg-twitch"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small youtube" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-youtube">
              <use xlink:href="#svg-youtube"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->
        </div>
        <!-- /SOCIAL LINKS -->
      </div>
      <!-- /USER PREVIEW INFO -->

      <!-- USER PREVIEW FOOTER -->
      <div class="user-preview-footer">
        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <p class="button void void-secondary">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-add-friend">
              <use xlink:href="#svg-add-friend"></use>
            </svg>
            <!-- /BUTTON ICON -->
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->

        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <p class="button void void-primary">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-comment">
              <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /BUTTON ICON -->
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->
      </div>
      <!-- /USER PREVIEW FOOTER -->
    </div>
    <!-- /USER PREVIEW -->


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
<!-- /SECTION -->

</div>
