<aside class="floaty-bar">
  <!-- BAR ACTIONS -->
  <div class="bar-actions">
    <!-- PROGRESS STAT -->
    <div class="progress-stat">
      <!-- BAR PROGRESS WRAP -->
      <div class="bar-progress-wrap">
        <!-- BAR PROGRESS INFO -->
        <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
        <!-- /BAR PROGRESS INFO -->
      </div>
      <!-- /BAR PROGRESS WRAP -->

      <!-- PROGRESS STAT BAR -->
      <div id="logged-user-level-cp" class="progress-stat-bar"></div>
      <!-- /PROGRESS STAT BAR -->
    </div>
    <!-- /PROGRESS STAT -->
  </div>
  <!-- /BAR ACTIONS -->

  <!-- BAR ACTIONS -->
  <div class="bar-actions">
    <!-- ACTION LIST -->
    <div class="action-list dark">
      <!-- ACTION LIST ITEM -->
      <a class="action-list-item" href="marketplace-cart.html">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-shopping-bag">
          <use xlink:href="#svg-shopping-bag"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

      <!-- ACTION LIST ITEM -->
      <a class="action-list-item" href="">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-friend">
          <use xlink:href="#svg-friend"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

      <!-- ACTION LIST ITEM -->
      <a class="action-list-item" href="hub-profile-messages.html">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-messages" style="fill:white;">
          <use xlink:href="#svg-messages"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

      <!-- ACTION LIST ITEM -->
      <a class="action-list-item " href="">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-notification">
          <use xlink:href="#svg-notification"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->
    </div>
    <!-- /ACTION LIST -->

    <!-- ACTION ITEM WRAP -->
    <a class="action-item-wrap popup-review-trigger" >
      <!-- ACTION ITEM -->
      <div class="action-item ">
        <!-- ACTION ITEM ICON -->
        <svg class="action-list-item-icon icon-settings">
          <use xlink:href="#svg-settings"></use>
        </svg>
        <!-- /ACTION ITEM ICON -->
      </div>
      <!-- /ACTION ITEM -->
    </a>
    <!-- /ACTION ITEM WRAP -->
  </div>
  <!-- /BAR ACTIONS -->
</aside>

<!-- POPUP BOX -->
<div class="popup-box small popup-review">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-review-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- /POPUP CLOSE BUTTON -->

  <!-- POPUP BOX TITLE -->
  <p class="popup-box-title">Badilisha Akaunti ?</p>
  <!-- /POPUP BOX TITLE -->

  <!-- FORM -->
  <form class="form" action="/kilimofy/Change-Account/{{Auth::user()->id}}" method="post">
    @csrf
    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM RATING WRAP -->
        <div class="form-rating-wrap">
          <label>Kwa sasa Tunakutambua kama: <span style="color:Green;">{{Auth::user()->user_ocupation}}</span> </label>
        </div>
        <!-- /FORM RATING WRAP -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="rating-reason">Akauti Mpya</label>
          <select class="for" name="user_ocupation">
            <option  selected disabled>--chagua Kazi--</option>
            <option value="Mkulima">Mkulima</option>
            <option value="Muuzaji_Wa_pembejeo_Na_Viwatilifu">Muuzaji wa pembejeo Na Viwatilifu</option>
            <option value="Bwana_Shamba">Bwana Shamba (Extension Officer)</option>
            <option value="Muuzaji_wa_Mashine_Za_Kilimo">Muuzaji Wa Mashine Za Kilimo</option>
            <option value="Msafirishaji">Usafirishaji Wa Bidhaa za Kilimo</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->


    <!-- POPUP BOX ACTIONS -->
    <div class="popup-box-actions full void">
      <!-- POPUP BOX ACTION -->
      <button type="submit" class="popup-box-action full button secondary popup-review-trigger">Save</button>
      <!-- /POPUP BOX ACTION -->

      <!-- POPUP BOX ACTION TEXT -->
      <p class="popup-box-action-text">Taarifa zako zote za Akauti ya awali zitahifadhiwa, unaweza kuzipata wakati wowote utakapo rudia akauti yako ya awali!</p>
      <!-- /POPUP BOX ACTION TEXT -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
<!-- /POPUP BOX -->
