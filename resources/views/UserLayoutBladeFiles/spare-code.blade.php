<nav class="section-navigation">
  <!-- SECTION MENU -->
  <div id="section-navigation-slider" class="section-menu">
    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('active-about-user')" href="/kilimofy/UserAccount/about_user_page">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-profile">
        <use xlink:href="#svg-profile"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Kuhusu mimi</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('active-user-timeline')" href="/kilimofy/UserAccount/user_timeline_page">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-timeline">
        <use xlink:href="#svg-timeline"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Posti zangu</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('active-user-friends')" href="/kilimofy/UserAccount/user_friends_page">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-friend">
        <use xlink:href="#svg-friend"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Marafiki</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('active-user-groups')" href="/kilimofy/UserAccount/user_groups_page">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-group">
        <use xlink:href="#svg-group"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Makundi</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('active-user-photos')" href="/kilimofy/UserAccount/user_photos_page">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-photos">
        <use xlink:href="#svg-photos"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Picha</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('active-user-videos')" href="/kilimofy/UserAccount/user_videos_page">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-videos">
        <use xlink:href="#svg-videos"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Video</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item" href="/kilimofy/MarketPlace/market-place-index">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-store">
        <use xlink:href="#svg-store"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Duka</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->
  </div>
  <!-- /SECTION MENU -->

  <!-- SLIDER CONTROLS -->
  <div id="section-navigation-slider-controls" class="slider-controls">
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




      <!-- QUICK POST BODY -->
      <div class="quick-post-body">
        <!-- FORM -->
        <form class="form">
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM TEXTAREA -->
              <div class="form-textarea">
                <textarea id="quick-post-text" name="quick-post-text" placeholder="Hi Marina! Share your post here..."></textarea>
                <!-- FORM TEXTAREA LIMIT TEXT -->
                <p class="form-textarea-limit-text">998/1000</p>
                <!-- /FORM TEXTAREA LIMIT TEXT -->
              </div>
              <!-- /FORM TEXTAREA -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- /QUICK POST BODY -->
