<!-- Check Auth -->
@if(Auth::user()->user_ocupation == 'Mkulima')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">

  <!-- MENU -->
  <ul class="menu small">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/home-page" data-title="Habari">
        <img src="/assets/img/user_icon/news.png" alt="Habari" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <hr>

   <!-- MENU ITEM -->
   <li class="menu-item @yield('menu-status-growth')">
     <!-- MENU ITEM LINK -->
     <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu" data-title="Pembejeo & Viwatilifu" style="width:44; height:44;">
       <img src="/assets/img/user_icon/growth.png" alt="pembejeo" style="width:34; height:34;">
     </a>
     <!-- /MENU ITEM LINK -->
   </li>
   <!-- /MENU ITEM -->

    <hr>

    <li class="menu-item @yield('menu-status-gardener')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Bwana-Shamba" data-title="Bwana Shamba">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/gardener.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <hr>


    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-shipping')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Usafirisaji/Usafiri" data-title="Usafirisaji">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/shipment.png" alt="" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-mashine')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Mashine-za-kilimo" data-title="Mashine za kilimo">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/tractor.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <br><br> <hr>
    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:34; height:34;">
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>


<!-- Check If Auth -->
@elseif(Auth::user()->user_ocupation == 'Muuzaji_Wa_pembejeo_Na_Viwatilifu')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- MENU -->
  <ul class="menu small">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/home-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/news.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-store')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/{{Auth::user()->id}}" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/store.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <hr>
  <br><br>
    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:34; height:34;">
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>


<!-- Check if Auth -->
@elseif(Auth::user()->user_ocupation == 'Bwana_Shamba')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- MENU -->
  <ul class="menu small">
      <li class="menu-item @yield('menu-status-gardener')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link popup-manage-group-trigger"  data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/gardener.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <br><hr>
    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:34; height:34;">
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>


<!-- Check Auth -->
@elseif(Auth::user()->user_ocupation == 'Watoaji_Huduma_Za_Usafiri')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
      <!-- /HEXAGON -->
    </div>
    <!-- /USER AVATAR CONTENT -->

    <!-- USER AVATAR PROGRESS -->
    <div class="user-avatar-progress">
      <!-- HEXAGON -->
      <div class="hexagon-progress-40-44"></div>
      <!-- /HEXAGON -->
    </div>
    <!-- /USER AVATAR PROGRESS -->

    <!-- USER AVATAR PROGRESS BORDER -->
    <div class="user-avatar-progress-border">
      <!-- HEXAGON -->
      <div class="hexagon-border-40-44"></div>
      <!-- /HEXAGON -->
    </div>
    <!-- /USER AVATAR PROGRESS BORDER -->
  </a>
  <!-- /USER AVATAR -->

  <!-- MENU -->
  <ul class="menu small">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/home/index-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-newsfeed">
          <use xlink:href="#svg-newsfeed"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-overview')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Items/items-index" data-title="Overview">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-overview">
          <use xlink:href="#svg-overview"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->


    <li class="menu-item @yield('menu-status-marketplace')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/MarketPlace/market-place-index" data-title="Marketplace">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-marketplace">
          <use xlink:href="#svg-marketplace"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

  </ul>
  <!-- /MENU -->
</nav>
<!-- Check Auth -->
@elseif(Auth::user()->user_ocupation == 'Muuzaji_wa_Mashine_Za_Kilimo')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
      <!-- /HEXAGON -->
    </div>
    <!-- /USER AVATAR CONTENT -->

    <!-- USER AVATAR PROGRESS -->
    <div class="user-avatar-progress">
      <!-- HEXAGON -->
      <div class="hexagon-progress-40-44"></div>
      <!-- /HEXAGON -->
    </div>
    <!-- /USER AVATAR PROGRESS -->

    <!-- USER AVATAR PROGRESS BORDER -->
    <div class="user-avatar-progress-border">
      <!-- HEXAGON -->
      <div class="hexagon-border-40-44"></div>
      <!-- /HEXAGON -->
    </div>
    <!-- /USER AVATAR PROGRESS BORDER -->
  </a>
  <!-- /USER AVATAR -->

  <!-- MENU -->
  <ul class="menu small">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/home/index-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-newsfeed">
          <use xlink:href="#svg-newsfeed"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-overview')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Items/items-index" data-title="Overview">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-overview">
          <use xlink:href="#svg-overview"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="overview.html" data-title="Overview"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-overview"> -->
          <!-- <use xlink:href="#svg-overview"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="groups.html" data-title="Groups"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-group"> -->
          <!-- <use xlink:href="#svg-group"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="Members"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-members"> -->
          <!-- <use xlink:href="#svg-members"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="badges.html" data-title="Badges"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-badges"> -->
          <!-- <use xlink:href="#svg-badges"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="quests.html" data-title="Quests"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-quests"> -->
          <!-- <use xlink:href="#svg-quests"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="streams.html" data-title="Streams"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-streams"> -->
          <!-- <use xlink:href="#svg-streams"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="events.html" data-title="Events"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-events"> -->
          <!-- <use xlink:href="#svg-events"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="forums.html" data-title="Forums"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-forums"> -->
          <!-- <use xlink:href="#svg-forums"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-marketplace')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/MarketPlace/market-place-index" data-title="Marketplace">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-marketplace">
          <use xlink:href="#svg-marketplace"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <button class="button secondary" data-title="logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="/assets/img/landing/power.png" alt="logout" ></a>
      </button>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>
@endif

<!-- POPUP BOX -->
<div class="popup-box mid popup-manage-group">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-manage-group-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- /POPUP CLOSE BUTTON -->

  <!-- POPUP BOX BODY -->
  <div class="popup-box-body">
    <!-- POPUP BOX SIDEBAR -->
    <div class="popup-box-sidebar">
      <!-- USER PREVIEW -->
      <div class="user-preview small">
        <!-- USER PREVIEW COVER -->
        <figure class="user-preview-cover liquid">
          <img src="/assets/img/cover/29.jpg" alt="cover-29">
        </figure>
        <!-- /USER PREVIEW COVER -->

        <!-- USER PREVIEW INFO -->
        <div class="user-preview-info">
          <!-- USER SHORT DESCRIPTION -->
          <div class="user-short-description small">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-avatar no-stats" href="group-timeline.html">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-100-108"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-84-92" data-src="/assets/img/avatar/24.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title small"><a href="group-timeline.html">Cosplayers of the World</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text regular">Group Organizer</p>
            <!-- /USER SHORT DESCRIPTION TEXT -->
          </div>
          <!-- /USER SHORT DESCRIPTION -->
        </div>
        <!-- /USER PREVIEW INFO -->
      </div>
      <!-- /USER PREVIEW -->

      <!-- SIDEBAR MENU ITEM -->
      <div class="sidebar-menu-item">
        <!-- SIDEBAR MENU BODY -->
        <div class="sidebar-menu-body secondary">
          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link active">Group Info</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Avatar and Cover</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Social Networks</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Settings</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Members</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Delete Group</p>
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->

      <!-- POPUP BOX SIDEBAR FOOTER -->
      <div class="popup-box-sidebar-footer">
        <!-- BUTTON -->
        <p class="button secondary full popup-manage-group-trigger">Save Changes!</p>
        <!-- /BUTTON -->

        <!-- BUTTON -->
        <p class="button white full popup-manage-group-trigger">Discard All</p>
        <!-- /BUTTON -->
      </div>
      <!-- /POPUP BOX SIDEBAR FOOTER -->
    </div>
    <!-- /POPUP BOX SIDEBAR -->

    <!-- POPUP BOX CONTENT -->
    <div class="popup-box-content">
      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Group Info</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- FORM -->
          <form class="form">
            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-name">Group Name</label>
                  <input type="text" id="group-name" name="group_name" value="Cosplayers of the World">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-tagline">Tagline</label>
                  <input type="text" id="group-tagline" name="group_tagline" value="All Cosplayers Welcome!">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small mid-textarea">
                  <textarea id="group-description" name="group_description" placeholder="Write a little description about the group..."></textarea>
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-public-email">Public Email</label>
                  <input type="text" id="group-public-email" name="group_public_email" value="info@cosworld.com">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small">
                  <label for="group-public-website">Public Website</label>
                  <input type="text" id="group-public-website" name="group_public_website">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
          </form>
          <!-- /FORM -->
        </div>
        <!-- WIDGET BOX CONTENT -->
      </div>
      <!-- /WIDGET BOX -->
    </div>
    <!-- /POPUP BOX CONTENT -->
  </div>
  <!-- /POPUP BOX BODY -->
</div>
<!-- /POPUP BOX -->
