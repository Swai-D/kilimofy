@extends('LayoutBladeFiles.user-account-layout')
@section('title')
@section('friends-menu-active', 'active')
{{Auth::user()->user_name}}'s Friends
@endsection
@section('user-data')
<section class="section">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">Browse Marina's</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Friends <span class="highlighted">82</span></h2>
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
              <label for="friends-search">Search Friends</label>
              <input type="text" id="friends-search" name="friends_search">
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
            <div class="form-select">
              <label for="friends-filter-category">Filter By</label>
              <select id="friends-filter-category" name="friends_filter_category">
                <option value="0">Recently Active</option>
                <option value="1">Newest Friends</option>
                <option value="2">Alphabetical</option>
              </select>
              <!-- FORM SELECT ICON -->
              <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /FORM SELECT ICON -->
            </div>
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
        <div class="section-filters-bar-actions">
          <!-- VIEW ACTIONS -->
          <div class="view-actions">
            <!-- VIEW ACTION -->
            <a class="view-action text-tooltip-tft-medium active" href="profile-friends.html" data-title="Big Grid">
              <!-- VIEW ACTION ICON -->
              <svg class="view-action-icon icon-big-grid-view">
                <use xlink:href="#svg-big-grid-view"></use>
              </svg>
              <!-- /VIEW ACTION ICON -->
            </a>
            <!-- /VIEW ACTION -->

            <!-- VIEW ACTION -->
            <a class="view-action text-tooltip-tft-medium" href="profile-friends-small-grid.html" data-title="Small Grid">
              <!-- VIEW ACTION ICON -->
              <svg class="view-action-icon icon-small-grid-view">
                <use xlink:href="#svg-small-grid-view"></use>
              </svg>
              <!-- /VIEW ACTION ICON -->
            </a>
            <!-- /VIEW ACTION -->

            <!-- VIEW ACTION -->
            <a class="view-action text-tooltip-tft-medium" href="profile-friends-list.html" data-title="List">
              <!-- VIEW ACTION ICON -->
              <svg class="view-action-icon icon-list-grid-view">
                <use xlink:href="#svg-list-grid-view"></use>
              </svg>
              <!-- /VIEW ACTION ICON -->
            </a>
            <!-- /VIEW ACTION -->
          </div>
          <!-- /VIEW ACTIONS -->
        </div>
        <!-- /SECTION FILTERS BAR ACTIONS -->
      </div>
      <!-- /SECTION FILTERS BAR -->

      <!-- GRID -->
      <div class="grid grid-4-4-4 centered">
        <!-- USER PREVIEW -->
        <div class="user-preview">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="/assets/img/cover/04.jpg" alt="cover-04">
          </figure>
          <!-- /USER PREVIEW COVER -->

          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-120-132"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-82-90" data-src="/assets/img/avatar/05.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->

                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->

                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->

                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-32-36"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->

                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-26-28"></div>
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
              <div class="badge-item">
                <img src="/assets/img/badge/rmachine-s.png" alt="badge-rmachine-s">
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

            <!-- USER PREVIEW STATS SLIDES -->
            <div id="user-preview-stats-slides-01" class="user-preview-stats-slides">
              <!-- USER PREVIEW STATS SLIDE -->
              <div class="user-preview-stats-slide">
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
              </div>
              <!-- /USER PREVIEW STATS SLIDE -->

              <!-- USER PREVIEW STATS SLIDE -->
              <div class="user-preview-stats-slide">
                <!-- USER PREVIEW TEXT -->
                <p class="user-preview-text">Hello! I'm James Hart, but I go by the name of Destroy Dex on my stream channel. Come to check out the latest gaming news!</p>
                <!-- /USER PREVIEW TEXT -->
              </div>
              <!-- /USER PREVIEW STATS SLIDE -->
            </div>
            <!-- /USER PREVIEW STATS SLIDES -->

            <!-- USER PREVIEW STATS ROSTER -->
            <div id="user-preview-stats-roster-01" class="user-preview-stats-roster slider-roster">
              <!-- SLIDER ROSTER ITEM -->
              <div class="slider-roster-item"></div>
              <!-- /SLIDER ROSTER ITEM -->

              <!-- SLIDER ROSTER ITEM -->
              <div class="slider-roster-item"></div>
              <!-- /SLIDER ROSTER ITEM -->
            </div>
            <!-- /USER PREVIEW STATS ROSTER -->

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

            <!-- USER PREVIEW ACTIONS -->
            <div class="user-preview-actions">
              <!-- BUTTON -->
              <p class="button secondary">Add Friend +</p>
              <!-- /BUTTON -->

              <!-- BUTTON -->
              <p class="button primary">Send Message</p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW ACTIONS -->
          </div>
          <!-- /USER PREVIEW INFO -->
        </div>
        <!-- /USER PREVIEW -->
      </div>
      <!-- /GRID -->

    @include('LayoutBladeFiles.page-bar')
    </section>
    <!-- /SECTION -->
@endsection
