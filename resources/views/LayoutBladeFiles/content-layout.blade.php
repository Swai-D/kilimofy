<div class="content-grid">
  <!-- SECTION BANNER -->
@include('LayoutBladeFiles.title-layout')
<!-- GRID -->
    <div class="grid grid-3-6-3 mobile-prefer-content">
      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- PROGRESS ARC SUMMARY -->
          <div class="progress-arc-summary">
            <!-- PROGRESS ARC WRAP -->
            <div class="progress-arc-wrap">
              <!-- PROGRESS ARC -->
              <div class="progress-arc">
                <canvas id="profile-completion-chart"></canvas>
              </div>
              <!-- PROGRESS ARC -->

              <!-- PROGRESS ARC INFO -->
              <div class="progress-arc-info">
                <!-- PROGRESS ARC TITLE -->
                <p class="progress-arc-title"><span style="color:#f33155">{{$celsius}} <sup>.</sup>c</span> </p>
                <!-- /PROGRESS ARC TITLE -->
              </div>
              <!-- /PROGRESS ARC INFO -->
            </div>
            <!-- /PROGRESS ARC WRAP -->

            <!-- PROGRESS ARC SUMMARY INFO -->
            <div class="progress-arc-summary-info">
              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-title">Kwa Ushauri wa Kilimo</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->

              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-subtitle" style="color:#f33155">{{$user_location}}</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->
              <br>

             <a href="/kilimofy/Mkulima/Bwana-Shamba">
               <img src="/assets/img/user_icon/call.png" alt="Bwana_Shamba" style="width:44; height:44;">
               <br>
               <p>Bwana Shamba</p>
             </a>
            </div>
            <!-- /PROGRESS ARC SUMMARY INFO -->
          </div>
          <!-- /PROGRESS ARC SUMMARY -->

          <!-- ACHIEVEMENT STATUS LIST -->
          <div class="achievement-status-list">
            <!-- ACHIEVEMENT STATUS -->
            <div class="achievement-status">
              <!-- ACHIEVEMENT STATUS PROGRESS -->
              <p class="achievement-status-progress"><span style="color:#f33155">{{$celsius_min}}<sup>.</sup>/{{$celsius_max}}<sup>.</sup>c</span></p>
              <!-- /ACHIEVEMENT STATUS PROGRESS -->

              <!-- ACHIEVEMENT STATUS INFO -->
              <div class="achievement-status-info">
                <!-- ACHIEVEMENT STATUS TITLE -->
                <p class="achievement-status-title">Leo</p>
                <!-- /ACHIEVEMENT STATUS TITLE -->

                <!-- ACHIEVEMENT STATUS TEXT -->
                <p class="achievement-status-text">{{date('d m, Y')}}</p>
                <!-- /ACHIEVEMENT STATUS TEXT -->
              </div>
              <!-- /ACHIEVEMENT STATUS INFO -->

              <!-- ACHIEVEMENT STATUS IMAGE -->
              <img class="achievement-status-image" src="{{$icon_path}}" alt="bdage-completedq-s">
              <!-- /ACHIEVEMENT STATUS IMAGE -->
            </div>
            <!-- /ACHIEVEMENT STATUS -->

            <!-- ACHIEVEMENT STATUS -->
            <div class="achievement-status">
              <!-- ACHIEVEMENT STATUS PROGRESS -->
              <p class="achievement-status-progress"><span style="color:#f33155">{{$tomorrow_celsius_min}}<sup>.</sup>/{{$tomorrow_celsius_max}}<sup>.</sup>c</span></p>
              <!-- /ACHIEVEMENT STATUS PROGRESS -->

              <!-- ACHIEVEMENT STATUS INFO -->
              <div class="achievement-status-info">
                <!-- ACHIEVEMENT STATUS TITLE -->
                <p class="achievement-status-title">Kesho</p>
                <!-- /ACHIEVEMENT STATUS TITLE -->

                <!-- ACHIEVEMENT STATUS TEXT -->
                <p class="achievement-status-text">{{date("d m, Y", strtotime('tomorrow'))}}</p>
                <!-- /ACHIEVEMENT STATUS TEXT -->
              </div>
              <!-- /ACHIEVEMENT STATUS INFO -->

              <!-- ACHIEVEMENT STATUS IMAGE -->
              <img class="achievement-status-image" src="{{$tomorrow_icon_path}}" alt="bdage-unlocked-badge">
              <!-- /ACHIEVEMENT STATUS IMAGE -->
            </div>
            <!-- /ACHIEVEMENT STATUS -->
          </div>
          <!-- /ACHIEVEMENT STATUS LIST -->
        </div>
        <!-- /WIDGET BOX -->



        <!-- BANNER PROMO -->
        <a class="banner-promo" href="/" target="_blank">
          <img src="/assets/img/banner/promo.jpg" alt="banner-promo" style="width:280px; height:260px">
        </a>
        <!-- /BANNER PROMO -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Jukwaa la Maswali</p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- QUEST PREVIEW LIST -->
            <div class="quest-preview-list">
              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <a href="/kilimofy/Forum/Forum-Category-List">
                  <!-- QUEST PREVIEW INFO -->
                  <div class="quest-preview-info">
                    <!-- QUEST PREVIEW IMAGE -->
                    <img class="quest-preview-image" src="/assets/img/user_icon/agriculture.png" alt="openq-s" style="width:32px; height:32px;">
                    <!-- /QUEST PREVIEW IMAGE -->

                    <!-- QUEST PREVIEW TITLE -->
                    <p class="quest-preview-title">Kilimo</p>
                    <!-- /QUEST PREVIEW TITLE -->

                    <!-- QUEST PREVIEW TEXT -->
                    <p class="quest-preview-text">Mada ({{$kilimo_topics_count}})</p>
                    <!-- /QUEST PREVIEW TEXT -->
                  </div>
                  <!-- /QUEST PREVIEW INFO -->
                </a>

                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-nth" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->

              <!-- QUEST PREVIEW -->
              <div class="quest-preview">

                <a href="/kilimofy/Forum/Forum-Category-List">
                  <!-- QUEST PREVIEW INFO -->
                  <div class="quest-preview-info">
                    <!-- QUEST PREVIEW IMAGE -->
                    <img class="quest-preview-image" src="/assets/img/user_icon/cow.png" alt="openq-s" style="width:32px; height:32px;">
                    <!-- /QUEST PREVIEW IMAGE -->

                    <!-- QUEST PREVIEW TITLE -->
                    <p class="quest-preview-title">Ufugaji</p>
                    <!-- /QUEST PREVIEW TITLE -->

                    <!-- QUEST PREVIEW TEXT -->
                    <p class="quest-preview-text">Mada ()</p>
                    <!-- /QUEST PREVIEW TEXT -->
                  </div>
                  <!-- /QUEST PREVIEW INFO -->
                </a>

                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-sk" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->

              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <a href="/kilimofy/Forum/Forum-Category-List">
                  <!-- QUEST PREVIEW INFO -->
                  <div class="quest-preview-info">
                    <!-- QUEST PREVIEW IMAGE -->
                    <img class="quest-preview-image" src="/assets/img/user_icon/fishing.png" alt="openq-s">
                    <!-- /QUEST PREVIEW IMAGE -->

                    <!-- QUEST PREVIEW TITLE -->
                    <p class="quest-preview-title">Uvuvi</p>
                    <!-- /QUEST PREVIEW TITLE -->

                    <!-- QUEST PREVIEW TEXT -->
                    <p class="quest-preview-text">Mada ()</p>
                    <!-- /QUEST PREVIEW TEXT -->
                  </div>
                  <!-- /QUEST PREVIEW INFO -->
                </a>

                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-bp" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->

              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <a href="/kilimofy/Forum/Forum-Category-List">
                  <!-- QUEST PREVIEW INFO -->
                  <div class="quest-preview-info">
                    <!-- QUEST PREVIEW IMAGE -->
                    <img class="quest-preview-image" src="/assets/img/user_icon/shipment.png" alt="openq-s"style="width:32px; height:32px;">
                    <!-- /QUEST PREVIEW IMAGE -->

                    <!-- QUEST PREVIEW TITLE -->
                    <p class="quest-preview-title">Usafirisaji</p>
                    <!-- /QUEST PREVIEW TITLE -->

                    <!-- QUEST PREVIEW TEXT -->
                    <p class="quest-preview-text">Mada ()</p>
                    <!-- /QUEST PREVIEW TEXT -->
                  </div>
                  <!-- /QUEST PREVIEW INFO -->
                </a>

                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-bp" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->

            </div>
            <!-- /QUEST PREVIEW LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->

          <!-- WIDGET BOX BUTTON -->
          <a class="widget-box-button button small white" href="/kilimofy/Forum/Forum-Category-List">Check More Discussions!</a>
          <!-- /WIDGET BOX BUTTON -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Friends <span class="highlighted">{{$users_count}}</span></p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- USER STATUS LIST -->
            <div class="user-status-list">
              @foreach($users as $user)
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$user->avatar}}"></div>
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


                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="/kilimofy/UserAccount/about_user_page/{{$user->id}}-about-{{$user->user_name}}">{{$user->user_name}}</a></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">2 friends in common</p>
                <!-- /USER STATUS TEXT -->

                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-add-friend">
                      <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->
              @endforeach
            </div>
            <!-- /USER STATUS LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->

          <!-- WIDGET BOX BUTTON -->
          <a class="widget-box-button button small secondary" href="/kilimofy/UserAccount/user_friends_page">See all Friends</a>
          <!-- /WIDGET BOX BUTTON -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="grid-column">

        <!-- QUICK POST -->
        <div class="quick-post">
          <!-- QUICK POST HEADER -->
          <div class="quick-post-header">
            <!-- OPTION ITEMS -->
            <div class="tab-box-options option-items">
              <!-- OPTION ITEM -->
              <div class="option-item active">
                <!-- OPTION ITEM ICON -->
                <svg class="option-item-icon icon-status">
                  <use xlink:href="#svg-status"></use>
                </svg>
                <!-- /OPTION ITEM ICON -->

                <div class="tab-box-option">
                  <!-- OPTION ITEM TITLE -->
                  <p class="option-item-title">Status</p>
                  <!-- /OPTION ITEM TITLE -->
                </div>
              </div>
              <!-- /OPTION ITEM -->

              <!-- OPTION ITEM -->
              <div class="option-item">
                <!-- OPTION ITEM ICON -->
                <svg class="option-item-icon icon-blog-posts">
                  <use xlink:href="#svg-blog-posts"></use>
                </svg>
                <!-- /OPTION ITEM ICON -->

              <div class="option-item-title">
                <!-- OPTION ITEM TITLE -->
                <p class="option-item-title">Blog Post</p>
                <!-- /OPTION ITEM TITLE -->
              </div>
              </div>
              <!-- /OPTION ITEM -->

              <!-- OPTION ITEM -->
              <div class="option-item">
                <!-- OPTION ITEM ICON -->
                <svg class="option-item-icon icon-poll">
                  <use xlink:href="#svg-poll"></use>
                </svg>
                <!-- /OPTION ITEM ICON -->

                <div class="option-item-title">
                  <!-- OPTION ITEM TITLE -->
                  <p class="option-item-title">Poll</p>
                  <!-- /OPTION ITEM TITLE -->
                </div>
              </div>
              <!-- /OPTION ITEM -->
            </div>
            <!-- /OPTION ITEMS -->
          </div>
          <!-- /QUICK POST HEADER -->

          <!-- QUICK POST BODY -->
        <form class="form" action="/kilimofy/User/status-post" method="post" enctype="multipart/form-data">
          @csrf
          <div class="quick-post-body">
            <!-- FORM -->

              <!-- FORM ROW -->
              <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM TEXTAREA -->
                  <div class="form-textarea">
                    <textarea id="quick-post-text" name="Caption" placeholder="Hi! Share your post here..."></textarea>
                    <input type="hidden" name="User_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="User_Name" value="{{Auth::user()->user_name}}">
                    <input type="hidden" name="User_Image_Profile" value="{{Auth::user()->avatar}}">
                    <!-- FORM TEXTAREA LIMIT TEXT -->
                    <p class="form-textarea-limit-text">998/1000</p>
                    <!-- /FORM TEXTAREA LIMIT TEXT -->
                  </div>
                  <!-- /FORM TEXTAREA -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->

            <!-- /FORM -->
          </div>
          <!-- /QUICK POST BODY -->

          <!-- QUICK POST FOOTER -->
          <div class="quick-post-footer">
            <!-- QUICK POST FOOTER ACTIONS -->
            <div class="quick-post-footer-actions">
              <!-- QUICK POST FOOTER ACTION -->
              <div class="quick-post-footer-action text-tooltip-tft-medium image-upload" data-title="Insert Photo">
                <!-- QUICK POST FOOTER ACTION ICON -->
              <label for="file-input">
                <svg class="quick-post-footer-action-icon icon-camera" style="fill:black;">
                  <use xlink:href="#svg-camera"></use>
                </svg>
              </label>
                <!-- /QUICK POST FOOTER ACTION ICON -->
              <input name="File" id="file-input" type="file" />
              </div>
              <!-- /QUICK POST FOOTER ACTION -->

              </div>
            <!-- /QUICK POST FOOTER ACTIONS -->

              <!-- QUICK POST FOOTER ACTIONS -->
              <div class="quick-post-footer-actions">
                <!-- BUTTON -->
                <button type="reset" class="button small void">Discard</button>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <button type="submit" class="button small secondary">Post</button>
                <!-- /BUTTON -->
              </div>
              <!-- /QUICK POST FOOTER ACTIONS -->
          </div>
          <!-- /QUICK POST FOOTER -->
        </form>
        </div>
        <!-- /QUICK POST -->





        <!-- SIMPLE TAB ITEMS -->
        <div class="simple-tab-items">
          <!-- FORM -->
          <form class="form">
            <!-- FORM SELECT -->
            <div class="form-select">
              <select id="newsfeed-filter-category" name="newsfeed_filter_category">
                <option value="0">All Updates</option>
                <option value="1">Mentions</option>
                <option value="2">Friends</option>
                <option value="3">Groups</option>
                <option value="4">Blog Posts</option>
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

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item active">All Updates</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Mentions</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Friends</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Groups</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Blog Posts</p>
          <!-- /SIMPLE TAB ITEM -->
        </div>
        <!-- /SIMPLE TAB ITEMS -->

        @foreach($posts as $post)

          <!-- WIDGET BOX -->
          <div class="widget-box no-padding">
            <!-- WIDGET BOX SETTINGS -->
            <div class="widget-box-settings">
              <!-- POST SETTINGS WRAP -->
              <div class="post-settings-wrap">
                <!-- POST SETTINGS -->
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                  <!-- POST SETTINGS ICON -->
                  <svg class="post-settings-icon icon-more-dots">
                    <use xlink:href="#svg-more-dots"></use>
                  </svg>
                  <!-- /POST SETTINGS ICON -->
                </div>
                <!-- /POST SETTINGS -->

                <!-- SIMPLE DROPDOWN -->
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                  <!-- SIMPLE DROPDOWN LINK -->
                  <p class="simple-dropdown-link">Edit Post</p>
                  <!-- /SIMPLE DROPDOWN LINK -->

                  <!-- SIMPLE DROPDOWN LINK -->
                  <p class="simple-dropdown-link">Delete Post</p>
                  <!-- /SIMPLE DROPDOWN LINK -->

                  <!-- SIMPLE DROPDOWN LINK -->
                  <p class="simple-dropdown-link">Make it Featured</p>
                  <!-- /SIMPLE DROPDOWN LINK -->

                  <!-- SIMPLE DROPDOWN LINK -->
                  <p class="simple-dropdown-link">Report Post</p>
                  <!-- /SIMPLE DROPDOWN LINK -->

                  <!-- SIMPLE DROPDOWN LINK -->
                  <p class="simple-dropdown-link">Report Author</p>
                  <!-- /SIMPLE DROPDOWN LINK -->
                </div>
                <!-- /SIMPLE DROPDOWN -->
              </div>
              <!-- /POST SETTINGS WRAP -->
            </div>
            <!-- /WIDGET BOX SETTINGS -->

            <!-- WIDGET BOX STATUS -->
            <div class="widget-box-status">
              <!-- WIDGET BOX STATUS CONTENT -->
              <div class="widget-box-status-content">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="/kilimofy/UserAccount/about_user_page/{{$post->User_id}}-about-{{$post->User_Name}}-in-Kilimofy-Platform">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-border">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-40-44" data-src="/Uploads/avatars/{{$post->User_Image_Profile}}"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title medium"><a class="bold" href="/kilimofy/UserAccount/about_user_page/{{$post->User_id}}-about-{{$post->User_Name}}-in-Kilimofy-Platform">{{$post->User_Name}}</a> shared a <span class="bold">post</span></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text small">{{$post->created_at->diffForHumans()}}</p>
                  <!-- /USER STATUS TEXT -->
                </div>
                <!-- /USER STATUS -->

                @if($post->Photo == NULL && $post->Video == NULL)
                <!-- QUOTE BOX -->
                <blockquote class="quote-box">
                  <!-- QUOTE BOX ICON -->
                  <svg class="quote-box-icon icon-quote">
                    <use xlink:href="#svg-quote"></use>
                  </svg>
                  <!-- /QUOTE BOX ICON -->

                  <!-- QUOTE BOX TEXT -->
                  <p class="quote-box-text">{{$post->Caption}}</p>
                  <!-- /QUOTE BOX TEXT -->
                </blockquote>
                <!-- /QUOTE BOX -->


                 @elseif($post->Photo != NULL && $post->Video == NULL)
                 <!-- VIDEO STATUS -->
                 <a class="video-status" href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->Caption}}" >
                   <!-- VIDEO STATUS IMAGE -->
                   <img class="video-status-image" src="/Uploads/PostPhotos/{{$post->Photo}}" alt="cover-51">
                   <!-- /VIDEO STATUS IMAGE -->
                 </a>
                 <!-- /VIDEO STATUS -->
                 <br>
                 <!-- WIDGET BOX STATUS TEXT -->
                 <p class="widget-box-status-text">{{$post->Caption}}</p>
                 <!-- /WIDGET BOX STATUS TEXT -->
                 @elseif($post->Video != Null && $post->Photo == Null)
                 <!-- VIDEO BOX -->
                 <br>
                 <div class="video-box ">
                   <!-- VIDEO BOX COVER -->
                   <div class="video-box">
                     <!-- VIDEO BOX COVER IMAGE -->
                    <a href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->Caption}}">
                      <video  style="width:100%;"  autoplay muted loop controls>
                            <source src="/Uploads/PostVideos/{{$post->Video}}" type="video/mp4" >
                     </video>
                    </a>
                     <!-- /VIDEO BOX COVER IMAGE -->


                     <!-- VIDEO BOX INFO -->
                     <div class="video-box-info">
                       <!-- WIDGET BOX STATUS TEXT -->
                       <p class="widget-box-status-text">{{$post->Caption}}</p>
                       <!-- /WIDGET BOX STATUS TEXT -->

                       <!-- VIDEO BOX TEXT -->
                       <p class="video-box-text">{{$post->created_at->diffForHumans()}}</p>
                       <!-- /VIDEO BOX TEXT -->
                      </div>
                     <!-- /VIDEO BOX INFO -->

                   </div>
                   <!-- /VIDEO BOX COVER -->

                 </div>
                 <!-- /VIDEO BOX -->

                 <br>


                 @endif
                <!-- CONTENT ACTIONS -->
                <div class="content-actions">
                  <!-- CONTENT ACTION -->
                  <div class="content-action">
                    <!-- META LINE -->
                    <div class="meta-line">
                      <!-- META LINE LIST -->
                      <div class="meta-line-list reaction-item-list">
                        <!-- REACTION ITEM -->
                        <div class="reaction-item">
                          <!-- REACTION IMAGE -->
                          <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/love.png" alt="reaction-love">
                          <!-- /REACTION IMAGE -->

                          <!-- SIMPLE DROPDOWN -->
                          <div class="simple-dropdown padded reaction-item-dropdown">
                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Matt Parker</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Destroy Dex</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">The Green Goo</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->
                          </div>
                          <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /REACTION ITEM -->

                        <!-- REACTION ITEM -->
                        <div class="reaction-item">
                          <!-- REACTION IMAGE -->
                          <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                          <!-- /REACTION IMAGE -->

                          <!-- SIMPLE DROPDOWN -->
                          <div class="simple-dropdown padded reaction-item-dropdown">
                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Sandra Strange</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->
                          </div>
                          <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /REACTION ITEM -->

                        <!-- REACTION ITEM -->
                        <div class="reaction-item">
                          <!-- REACTION IMAGE -->
                          <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/like.png" alt="reaction-like">
                          <!-- /REACTION IMAGE -->

                          <!-- SIMPLE DROPDOWN -->
                          <div class="simple-dropdown padded reaction-item-dropdown">
                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Neko Bebop</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Nick Grissom</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Sarah Diamond</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Jett Spiegel</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Marcus Jhonson</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Jane Rodgers</p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text"><span class="bold">and 6 more...</span></p>
                            <!-- /SIMPLE DROPDOWN TEXT -->
                          </div>
                          <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /REACTION ITEM -->
                      </div>
                      <!-- /META LINE LIST -->

                      <!-- META LINE TEXT -->
                      <p class="meta-line-text">{{$post->Likes}}</p>
                      <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                      <!-- META LINE LIST -->
                      <div class="meta-line-list user-avatar-list">
                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                          <!-- USER AVATAR BORDER -->
                          <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR BORDER -->

                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="/assets/img/avatar/07.jpg"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                          <!-- USER AVATAR BORDER -->
                          <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR BORDER -->

                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="/assets/img/avatar/13.jpg"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                          <!-- USER AVATAR BORDER -->
                          <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR BORDER -->

                          <!-- USER AVATAR CONTENT -->
                        @foreach($post->comments as $post_comment)
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{$post_comment->user_avatar}}"></div>
                          <!-- /HEXAGON -->
                        </div>
                        @endforeach
                          <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                          <!-- USER AVATAR BORDER -->
                          <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR BORDER -->

                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="/assets/img/avatar/10.jpg"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- USER AVATAR -->
                        <div class="user-avatar micro no-stats">
                          <!-- USER AVATAR BORDER -->
                          <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR BORDER -->

                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="/assets/img/avatar/08.jpg"></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->
                      </div>
                      <!-- /META LINE LIST -->

                      <!-- META LINE TEXT -->

                      <p class="meta-line-text">{{$post->comments->count()  }} Participants</p>
                      <!-- /META LINE TEXT -->

                    </div>
                    <!-- /META LINE -->
                  </div>
                  <!-- /CONTENT ACTION -->

                  <!-- CONTENT ACTION -->
                <a href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->Caption}}">

                  <div class="content-action">
                    <!-- META LINE -->
                    <div class="meta-line">
                      <!-- META LINE LINK -->
                      <p class="meta-line-link">{{$post->comments->count()}} Comments</p>
                      <!-- /META LINE LINK -->
                    </div>
                    <!-- /META LINE -->

                    </div>

                </a>
                  <!-- /CONTENT ACTION -->
                </div>
                <!-- /CONTENT ACTIONS -->
              </div>
              <!-- /WIDGET BOX STATUS CONTENT -->
            </div>
            <!-- /WIDGET BOX STATUS -->

            <!-- POST OPTIONS -->
            <div class="post-options">
              <!-- POST OPTION WRAP -->
              <div class="post-option-wrap">
                <!-- POST OPTION -->
                <div class="post-option reaction-options-dropdown-trigger">
                  <!-- POST OPTION ICON -->
                  <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /POST OPTION ICON -->

                  <!-- POST OPTION TEXT -->
                  <p class="post-option-text">React!</p>
                  <!-- /POST OPTION TEXT -->
                </div>
                <!-- /POST OPTION -->

                <!-- REACTION OPTIONS -->
                <div class="reaction-options reaction-options-dropdown">
                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Like">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Love">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Happy">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Funny">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Wow">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Angry">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Sad">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->
                </div>
                <!-- /REACTION OPTIONS -->
              </div>
              <!-- /POST OPTION WRAP -->

              <!-- POST OPTION -->

            <a href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->Caption}}">
              <div class="post-option">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">Comment</p>
                <!-- /POST OPTION TEXT -->
              </div>
            </a>
              <!-- /POST OPTION -->

              <!-- POST OPTION -->
              <div class="post-option">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-share">
                  <use xlink:href="#svg-share"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">Share</p>
                <!-- /POST OPTION TEXT -->
              </div>
              <!-- /POST OPTION -->
            </div>
            <!-- /POST OPTIONS -->
          </div>
          <!-- /WIDGET BOX -->
        @endforeach




        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Edit Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Delete Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Make it Featured</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Report Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Report Author</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX STATUS -->
          <div class="widget-box-status">
            <!-- WIDGET BOX STATUS CONTENT -->
            <div class="widget-box-status-content">
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="/assets/img/avatar/07.jpg"></div>
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

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                      <!-- USER AVATAR BADGE BORDER -->
                      <div class="user-avatar-badge-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-22-24"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BADGE BORDER -->

                      <!-- USER AVATAR BADGE CONTENT -->
                      <div class="user-avatar-badge-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-dark-16-18"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BADGE CONTENT -->

                      <!-- USER AVATAR BADGE TEXT -->
                      <p class="user-avatar-badge-text">26</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sarah Diamond</a> created a <span class="bold">poll</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">9 minutes ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->

              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">I've created a poll to ask all of you what you would like to see more in my upcoming videos! It will only take a couple of seconds...thanks to all in advance!!</p>
              <!-- /WIDGET BOX STATUS TEXT -->

              <!-- POLL BOX -->
              <div class="poll-box">
                <!-- POLL TITLE -->
                <p class="poll-title">What do you wanna see in my upcoming videos?</p>
                <!-- /POLL TITLE -->

                <!-- POLL TEXT -->
                <p class="poll-text">Poll ends in 5 days</p>
                <!-- /POLL TEXT -->

                <!-- FORM -->
                <form class="form" action="/kilimofy/Blog/poll_option" method="post">
                  @csrf
                  <!-- FORM ROW -->
                  <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- CHECKBOX WRAP -->
                      <div class="checkbox-wrap">
                        <input type="radio" id="poll-option-1" name="poll_option" value="option-1">
                        <!-- CHECKBOX BOX -->
                        <div class="checkbox-box round"></div>
                        <!-- /CHECKBOX BOX -->
                        <label for="poll-option-1">Retro Games</label>
                      </div>
                      <!-- /CHECKBOX WRAP -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->

                  <!-- FORM ROW -->
                  <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- CHECKBOX WRAP -->
                      <div class="checkbox-wrap">
                        <input type="radio" id="poll-option-2" name="poll_option" value="option-2" checked>
                        <!-- CHECKBOX BOX -->
                        <div class="checkbox-box round"></div>
                        <!-- /CHECKBOX BOX -->
                        <label for="poll-option-2">Walkthroughs</label>
                      </div>
                      <!-- /CHECKBOX WRAP -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->

                  <!-- FORM ROW -->
                  <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- CHECKBOX WRAP -->
                      <div class="checkbox-wrap">
                        <input type="radio" id="poll-option-3" name="poll_option" value="option-3">
                        <!-- CHECKBOX BOX -->
                        <div class="checkbox-box round"></div>
                        <!-- /CHECKBOX BOX -->
                        <label for="poll-option-3">Unboxings</label>
                      </div>
                      <!-- /CHECKBOX WRAP -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->

                  <!-- POLL BOX ACTIONS -->
                  <div class="poll-box-actions">
                    <!-- BUTTON -->
                    <button type="submit" class="button small secondary">Tuma</button>
                    <!-- /BUTTON -->

                    <!-- BUTTON -->
                    <button class="button small white">Angalia Maoni</button>
                    <!-- /BUTTON -->
                  </div>
                  <!-- /POLL BOX ACTIONS -->
                </form>
                <!-- /FORM -->
              </div>
              <!-- /POLL BOX -->

              <!-- CONTENT ACTIONS -->
              <div class="content-actions">
                <!-- CONTENT ACTION -->
                <div class="content-action">
                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE LIST -->
                    <div class="meta-line-list reaction-item-list">
                      <!-- REACTION ITEM -->
                      <div class="reaction-item">
                        <!-- REACTION IMAGE -->
                        <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                        <!-- /REACTION IMAGE -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/funny.png" alt="reaction-funny"> <span class="bold">Funny</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Matt Parker</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Destroy Dex</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">The Green Goo</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->

                      <!-- REACTION ITEM -->
                      <div class="reaction-item">
                        <!-- REACTION IMAGE -->
                        <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/like.png" alt="reaction-like">
                        <!-- /REACTION IMAGE -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Sandra Strange</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jane Rodgers</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->

                      <!-- REACTION ITEM -->
                      <div class="reaction-item">
                        <!-- REACTION IMAGE -->
                        <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/love.png" alt="reaction-love">
                        <!-- /REACTION IMAGE -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Neko Bebop</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Nick Grissom</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Sarah Diamond</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jett Spiegel</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
                    </div>
                    <!-- /META LINE LIST -->

                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">9</p>
                    <!-- /META LINE TEXT -->
                  </div>
                  <!-- /META LINE -->

                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE LIST -->
                    <div class="meta-line-list user-avatar-list">
                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/09.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->

                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/08.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->

                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/12.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->

                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/16.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->

                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/06.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
                    </div>
                    <!-- /META LINE LIST -->

                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">11 Participants</p>
                    <!-- /META LINE TEXT -->
                  </div>
                  <!-- /META LINE -->
                </div>
                <!-- /CONTENT ACTION -->

                <!-- CONTENT ACTION -->
                <div class="content-action">
                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE LINK -->
                    <p class="meta-line-link">1 Comments</p>
                    <!-- /META LINE LINK -->
                  </div>
                  <!-- /META LINE -->

                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">0 Shares</p>
                    <!-- /META LINE TEXT -->
                  </div>
                  <!-- /META LINE -->
                </div>
                <!-- /CONTENT ACTION -->
              </div>
              <!-- /CONTENT ACTIONS -->
            </div>
            <!-- /WIDGET BOX STATUS CONTENT -->
          </div>
          <!-- /WIDGET BOX STATUS -->

          <!-- POST OPTIONS -->
          <div class="post-options">
            <!-- POST OPTION WRAP -->
            <div class="post-option-wrap">
              <!-- POST OPTION -->
              <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                  <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">Likes!</p>
                <!-- /POST OPTION TEXT -->
              </div>
              <!-- /POST OPTION -->

              <!-- REACTION OPTIONS -->
              <div class="reaction-options reaction-options-dropdown">
                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Like">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Love">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->
              </div>
              <!-- /REACTION OPTIONS -->
            </div>
            <!-- /POST OPTION WRAP -->

            <!-- POST OPTION -->
            <div class="post-option">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
              </svg>
              <!-- /POST OPTION ICON -->

              <!-- POST OPTION TEXT -->
              <p class="post-option-text">Comment</p>
              <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- POST OPTION -->
            <div class="post-option">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
              </svg>
              <!-- /POST OPTION ICON -->

              <!-- POST OPTION TEXT -->
              <p class="post-option-text">Share</p>
              <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->
          </div>
          <!-- /POST OPTIONS -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Edit Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Delete Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Make it Featured</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Report Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Report Author</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX STATUS -->
          <div class="widget-box-status">
            <!-- WIDGET BOX STATUS CONTENT -->
            <div class="widget-box-status-content">
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="/assets/img/avatar/02.jpg"></div>
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

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                      <!-- USER AVATAR BADGE BORDER -->
                      <div class="user-avatar-badge-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-22-24"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BADGE BORDER -->

                      <!-- USER AVATAR BADGE CONTENT -->
                      <div class="user-avatar-badge-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-dark-16-18"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BADGE CONTENT -->

                      <!-- USER AVATAR BADGE TEXT -->
                      <p class="user-avatar-badge-text">19</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Destroy Dex</a> uploaded <span class="bold">26 new photos</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">17 minutes ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->

              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">Here are some of the photos from my last visit to StreamCon 2019!!</p>
              <!-- /WIDGET BOX STATUS TEXT -->

              <!-- PICTURE COLLAGE -->
              <div class="picture-collage">
                <!-- PICTURE COLLAGE ROW -->
                <div class="picture-collage-row medium">
                  <!-- PICTURE COLLAGE ITEM -->
                  <div class="picture-collage-item popup-picture-trigger">
                    <!-- PHOTO PREVIEW -->
                    <div class="photo-preview">
                      <!-- PHOTO PREVIEW IMAGE -->
                      <figure class="photo-preview-image liquid">
                        <img src="/Uploads/PostPhotos/1633094945,jpg" alt="photo-preview-10">
                      </figure>
                      <!-- /PHOTO PREVIEW IMAGE -->

                      <!-- PHOTO PREVIEW INFO -->
                      <div class="photo-preview-info">
                        <!-- REACTION COUNT LIST -->
                        <div class="reaction-count-list">
                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-thumbs-up">
                              <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">2</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->

                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-comment">
                              <use xlink:href="#svg-comment"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">5</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->
                        </div>
                        <!-- /REACTION COUNT LIST -->
                      </div>
                      <!-- /PHOTO PREVIEW INFO -->
                    </div>
                    <!-- /PHOTO PREVIEW -->
                  </div>
                  <!-- /PICTURE COLLAGE ITEM -->

                  <!-- PICTURE COLLAGE ITEM -->
                  <div class="picture-collage-item popup-picture-trigger">
                    <!-- PHOTO PREVIEW -->
                    <div class="photo-preview">
                      <!-- PHOTO PREVIEW IMAGE -->
                      <figure class="photo-preview-image liquid">
                        <img src="/Uploads/PostPhotos/1633094945,jpg" alt="photo-preview-12">
                      </figure>
                      <!-- /PHOTO PREVIEW IMAGE -->

                      <!-- PHOTO PREVIEW INFO -->
                      <div class="photo-preview-info">
                        <!-- REACTION COUNT LIST -->
                        <div class="reaction-count-list">
                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-thumbs-up">
                              <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">2</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->

                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-comment">
                              <use xlink:href="#svg-comment"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">5</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->
                        </div>
                        <!-- /REACTION COUNT LIST -->
                      </div>
                      <!-- /PHOTO PREVIEW INFO -->
                    </div>
                    <!-- /PHOTO PREVIEW -->
                  </div>
                  <!-- /PICTURE COLLAGE ITEM -->
                </div>
                <!-- /PICTURE COLLAGE ROW -->

                <!-- PICTURE COLLAGE ROW -->
                <div class="picture-collage-row">
                  <!-- PICTURE COLLAGE ITEM -->
                  <div class="picture-collage-item popup-picture-trigger">
                    <!-- PHOTO PREVIEW -->
                    <div class="photo-preview">
                      <!-- PHOTO PREVIEW IMAGE -->
                      <figure class="photo-preview-image liquid">
                        <img src="/Uploads/PostPhotos/1633094945,jpg" alt="photo-preview-16">
                      </figure>
                      <!-- /PHOTO PREVIEW IMAGE -->

                      <!-- PHOTO PREVIEW INFO -->
                      <div class="photo-preview-info">
                        <!-- REACTION COUNT LIST -->
                        <div class="reaction-count-list">
                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-thumbs-up">
                              <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">2</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->

                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-comment">
                              <use xlink:href="#svg-comment"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">5</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->
                        </div>
                        <!-- /REACTION COUNT LIST -->
                      </div>
                      <!-- /PHOTO PREVIEW INFO -->
                    </div>
                    <!-- /PHOTO PREVIEW -->
                  </div>
                  <!-- /PICTURE COLLAGE ITEM -->

                  <!-- PICTURE COLLAGE ITEM -->
                  <div class="picture-collage-item popup-picture-trigger">
                    <!-- PHOTO PREVIEW -->
                    <div class="photo-preview">
                      <!-- PHOTO PREVIEW IMAGE -->
                      <figure class="photo-preview-image liquid">
                        <img src="/Uploads/PostPhotos/1633094945,jpg" alt="photo-preview-08">
                      </figure>
                      <!-- /PHOTO PREVIEW IMAGE -->

                      <!-- PHOTO PREVIEW INFO -->
                      <div class="photo-preview-info">
                        <!-- REACTION COUNT LIST -->
                        <div class="reaction-count-list">
                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-thumbs-up">
                              <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">2</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->

                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-comment">
                              <use xlink:href="#svg-comment"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">5</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->
                        </div>
                        <!-- /REACTION COUNT LIST -->
                      </div>
                      <!-- /PHOTO PREVIEW INFO -->
                    </div>
                    <!-- /PHOTO PREVIEW -->
                  </div>
                  <!-- /PICTURE COLLAGE ITEM -->

                  <!-- PICTURE COLLAGE ITEM -->
                  <div class="picture-collage-item">
                    <!-- PICTURE COLLAGE ITEM OVERLAY -->
                    <a class="picture-collage-item-overlay" href="profile-photos.html">
                      <!-- PICTURE COLLAGE ITEM OVERLAY TEXT -->
                      <p class="picture-collage-item-overlay-text">+22</p>
                      <!-- /PICTURE COLLAGE ITEM OVERLAY TEXT -->
                    </a>
                    <!-- /PICTURE COLLAGE ITEM OVERLAY -->

                    <!-- PHOTO PREVIEW -->
                    <div class="photo-preview">
                      <!-- PHOTO PREVIEW IMAGE -->
                      <figure class="photo-preview-image liquid">
                        <img src="/Uploads/PostPhotos/1633094945,jpg" alt="photo-preview-14">
                      </figure>
                      <!-- /PHOTO PREVIEW IMAGE -->

                      <!-- PHOTO PREVIEW INFO -->
                      <div class="photo-preview-info">
                        <!-- REACTION COUNT LIST -->
                        <div class="reaction-count-list">
                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-thumbs-up">
                              <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">2</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->

                          <!-- REACTION COUNT -->
                          <div class="reaction-count negative">
                            <!-- REACTION COUNT ICON -->
                            <svg class="reaction-count-icon icon-comment">
                              <use xlink:href="#svg-comment"></use>
                            </svg>
                            <!-- /REACTION COUNT ICON -->

                            <!-- REACTION COUNT TEXT -->
                            <p class="reaction-count-text">5</p>
                            <!-- /REACTION COUNT TEXT -->
                          </div>
                          <!-- /REACTION COUNT -->
                        </div>
                        <!-- /REACTION COUNT LIST -->
                      </div>
                      <!-- /PHOTO PREVIEW INFO -->
                    </div>
                    <!-- /PHOTO PREVIEW -->
                  </div>
                  <!-- /PICTURE COLLAGE ITEM -->
                </div>
                <!-- /PICTURE COLLAGE ROW -->
              </div>
              <!-- /PICTURE COLLAGE -->

              <!-- TAG LIST -->
              <div class="tag-list">
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">Photos</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">StreamCon</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">StarGirl</a>
                <!-- /TAG ITEM -->
              </div>
              <!-- /TAG LIST -->

              <!-- CONTENT ACTIONS -->
              <div class="content-actions">
                <!-- CONTENT ACTION -->
                <div class="content-action">
                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE LIST -->
                    <div class="meta-line-list reaction-item-list">
                      <!-- REACTION ITEM -->
                      <div class="reaction-item">
                        <!-- REACTION IMAGE -->
                        <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                        <!-- /REACTION IMAGE -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/wow.png" alt="reaction-wow"> <span class="bold">Wow</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Matt Parker</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->

                      <!-- REACTION ITEM -->
                      <div class="reaction-item">
                        <!-- REACTION IMAGE -->
                        <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/like.png" alt="reaction-like">
                        <!-- /REACTION IMAGE -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Sandra Strange</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jane Rodgers</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
                    </div>
                    <!-- /META LINE LIST -->

                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">3</p>
                    <!-- /META LINE TEXT -->
                  </div>
                  <!-- /META LINE -->

                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE LIST -->
                    <div class="meta-line-list user-avatar-list">
                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/03.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->

                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/15.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->

                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/14.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->

                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="/assets/img/avatar/07.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
                    </div>
                    <!-- /META LINE LIST -->

                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">4 Participants</p>
                    <!-- /META LINE TEXT -->
                  </div>
                  <!-- /META LINE -->
                </div>
                <!-- /CONTENT ACTION -->

                <!-- CONTENT ACTION -->
                <div class="content-action">
                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE LINK -->
                    <p class="meta-line-link">3 Comments</p>
                    <!-- /META LINE LINK -->
                  </div>
                  <!-- /META LINE -->

                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">0 Shares</p>
                    <!-- /META LINE TEXT -->
                  </div>
                  <!-- /META LINE -->
                </div>
                <!-- /CONTENT ACTION -->
              </div>
              <!-- /CONTENT ACTIONS -->
            </div>
            <!-- /WIDGET BOX STATUS CONTENT -->
          </div>
          <!-- /WIDGET BOX STATUS -->

          <!-- POST OPTIONS -->
          <div class="post-options">
            <!-- POST OPTION WRAP -->
            <div class="post-option-wrap">
              <!-- POST OPTION -->
              <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                  <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
              </div>
              <!-- /POST OPTION -->

              <!-- REACTION OPTIONS -->
              <div class="reaction-options reaction-options-dropdown">
                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Like">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Love">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->

                <!-- REACTION OPTION -->
                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                  <!-- REACTION OPTION IMAGE -->
                  <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                  <!-- /REACTION OPTION IMAGE -->
                </div>
                <!-- /REACTION OPTION -->
              </div>
              <!-- /REACTION OPTIONS -->
            </div>
            <!-- /POST OPTION WRAP -->

            <!-- POST OPTION -->
            <div class="post-option">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
              </svg>
              <!-- /POST OPTION ICON -->

              <!-- POST OPTION TEXT -->
              <p class="post-option-text">Comment</p>
              <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- POST OPTION -->
            <div class="post-option">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
              </svg>
              <!-- /POST OPTION ICON -->

              <!-- POST OPTION TEXT -->
              <p class="post-option-text">Share</p>
              <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->
          </div>
          <!-- /POST OPTIONS -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->

        <div class="widget-box no-padding">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Edit Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Delete Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Make it Featured</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Report Post</p>
                <!-- /SIMPLE DROPDOWN LINK -->

                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Report Author</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

        </div>
        <!-- /WIDGET BOX -->


        <!-- LOADER BARS -->
        <div class="loader-bars">
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
        </div>
        <!-- /LOADER BARS -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="grid-column">


        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX CONTROLS -->
          <div class="widget-box-controls">
            <!-- SLIDER CONTROLS -->
            <div id="reaction-stat-slider-controls" class="slider-controls">
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
          <!-- /WIDGET BOX CONTROLS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Bei za Mazao Kwa Gunia</p>

          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- WIDGET BOX CONTENT SLIDER -->
            <div id="reaction-stat-slider-items" class="widget-box-content-slider">
              <!-- WIDGET BOX CONTENT SLIDER ITEM -->
              <div class="widget-box-content-slider-item">
                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image circle-img" src="/assets/img/crops/ngano.png" alt="reaction-like" >
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">Ngano</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Tsh 20,000/=</Sokonip>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="/assets/img/crops/maize.png" alt="reaction-happy">
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">Mahindi</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Tsh 70,000 /=</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->

                </div>
                <!-- REACTION STATS -->

                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="/assets/img/crops/beans.jpeg" alt="reaction-dislike">
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">Maharage</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Tsh 30,000/=</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->


                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="/assets/img/crops/soya.png" alt="reaction-love">
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">Soya</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Tsh 18,000 /=</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                </div>
                <!-- REACTION STATS -->
              </div>
              <!-- /WIDGET BOX CONTENT SLIDER ITEM -->

              <!-- WIDGET BOX CONTENT SLIDER ITEM -->
              <div class="widget-box-content-slider-item">
                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="/assets/img/crops/alizeti.png" alt="reaction-funny">
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">Alizeti</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Tsh 40,000 /=</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->

                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">5.944</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Wow!</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                </div>
                <!-- REACTION STATS -->

                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">1.706</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Angry</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->

                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                    <!-- /REACTION STAT IMAGE -->

                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">801</p>
                    <!-- /REACTION STAT TITLE -->

                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Sad</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                </div>
                <!-- REACTION STATS -->
              </div>
              <!-- /WIDGET BOX CONTENT SLIDER ITEM -->
            </div>
            <!-- /WIDGET BOX CONTENT SLIDER -->
          </div>
          <!-- /WIDGET BOX CONTENT -->

          <div class="user-short-description small">
            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text" >Leo {{date('d m, Y')}}</p>
            <!-- /USER SHORT DESCRIPTION TEXT -->
          </div>

        </div>
        <!-- /WIDGET BOX -->




        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Groups</p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- FILTERS -->
            <div class="filters">
              <!-- FILTER -->
              <p class="filter">Newest</p>
              <!-- /FILTER -->

              <!-- FILTER -->
              <p class="filter active">Popular</p>
              <!-- /FILTER -->

              <!-- FILTER -->
              <p class="filter">Active</p>
              <!-- /FILTER -->
            </div>
            <!-- /FILTERS -->

            <!-- USER STATUS LIST -->
            <div class="user-status-list">

              @foreach($group_lists as $group)
                <!-- USER STATUS -->
                <div class="user-status request-small">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="group-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-border">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-40-44" data-src="/Uploads/GroupProfile/{{$group->Group_Image}}"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="group-timeline.html">{{$group->Group_Name}}</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text small">{{$group->Members}} members</p>
                  <!-- /USER STATUS TEXT -->

                  <!-- ACTION REQUEST LIST -->
                  <div class="action-request-list">
                    <!-- ACTION REQUEST -->
                    <div class="action-request accept">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-join-group">
                        <use xlink:href="#svg-join-group"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
                  </div>
                  <!-- ACTION REQUEST LIST -->
                </div>
                <!-- /USER STATUS -->
              @endforeach
            </div>
            <!-- /USER STATUS LIST -->
            <!-- WIDGET BOX BUTTON -->
            <a class="widget-box-button button small " href="/kilimofy/Group/Group-Lists">Magrupu Zaidi!</a>
            <!-- /WIDGET BOX BUTTON -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Headlines <span class="highlighted">4</span></p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- VIDEO BOX LIST -->
            <div class="video-box-list">
              <!-- VIDEO BOX -->
              <div class="video-box small">
                <!-- VIDEO BOX COVER -->
                <div class="video-box-cover popup-first-headline-trigger">
                  <!-- VIDEO BOX COVER IMAGE -->
                  <figure class="video-box-cover-image liquid">
                    <img src="/assets/img/cover/30.jpg" alt="cover-30">
                  </figure>
                  <!-- /VIDEO BOX COVER IMAGE -->

                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon icon-play">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->

                  <!-- VIDEO BOX INFO -->
                  <div class="video-box-info">
                    <!-- VIDEO BOX TITLE -->
                    <p class="video-box-title">My Latest Cosplay</p>
                    <!-- /VIDEO BOX TITLE -->

                    <!-- VIDEO BOX TEXT -->
                    <p class="video-box-text">1 hour ago</p>
                    <!-- /VIDEO BOX TEXT -->
                  </div>
                  <!-- /VIDEO BOX INFO -->
                </div>
                <!-- /VIDEO BOX COVER -->
              </div>
              <!-- /VIDEO BOX -->

              <!-- VIDEO BOX -->
              <div class="video-box small">
                <!-- VIDEO BOX COVER -->
                <div class="video-box-cover popup-video_two-trigger">
                  <!-- VIDEO BOX COVER IMAGE -->
                  <figure class="video-box-cover-image liquid">
                    <img src="/assets/img/cover/44.jpg" alt="cover-44">
                  </figure>
                  <!-- /VIDEO BOX COVER IMAGE -->

                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon icon-play">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->

                  <!-- VIDEO BOX INFO -->
                  <div class="video-box-info">
                    <!-- VIDEO BOX TITLE -->
                    <p class="video-box-title">Jenny primary Photoshoot</p>
                    <!-- /VIDEO BOX TITLE -->

                    <!-- VIDEO BOX TEXT -->
                    <p class="video-box-text">12 days ago</p>
                    <!-- /VIDEO BOX TEXT -->
                  </div>
                  <!-- /VIDEO BOX INFO -->
                </div>
                <!-- /VIDEO BOX COVER -->
              </div>
              <!-- /VIDEO BOX -->

              <!-- VIDEO BOX -->
              <div class="video-box small">
                <!-- VIDEO BOX COVER -->
                <div class="video-box-cover popup-video_three-trigger">
                  <!-- VIDEO BOX COVER IMAGE -->
                  <figure class="video-box-cover-image liquid">
                    <img src="/assets/img/cover/42.jpg" alt="cover-42">
                  </figure>
                  <!-- /VIDEO BOX COVER IMAGE -->

                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon icon-play">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->

                  <!-- VIDEO BOX INFO -->
                  <div class="video-box-info">
                    <!-- VIDEO BOX TITLE -->
                    <p class="video-box-title">Tabatha Arcade Gaming Tips</p>
                    <!-- /VIDEO BOX TITLE -->

                    <!-- VIDEO BOX TEXT -->
                    <p class="video-box-text">5 days ago</p>
                    <!-- /VIDEO BOX TEXT -->
                  </div>
                  <!-- /VIDEO BOX INFO -->
                </div>
                <!-- /VIDEO BOX COVER -->
              </div>
              <!-- /VIDEO BOX -->

              <!-- VIDEO BOX -->
              <div class="video-box small">
                <!-- VIDEO BOX COVER -->
                <div class="video-box-cover popup-video_four-trigger">
                  <!-- VIDEO BOX COVER IMAGE -->
                  <figure class="video-box-cover-image liquid">
                    <img src="/assets/img/cover/50.jpg" alt="cover-50">
                  </figure>
                  <!-- /VIDEO BOX COVER IMAGE -->

                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon icon-play">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->

                  <!-- VIDEO BOX INFO -->
                  <div class="video-box-info">
                    <!-- VIDEO BOX TITLE -->
                    <p class="video-box-title">My Latest Cosplay</p>
                    <!-- /VIDEO BOX TITLE -->

                    <!-- VIDEO BOX TEXT -->
                    <p class="video-box-text">1 hour ago</p>
                    <!-- /VIDEO BOX TEXT -->
                  </div>
                  <!-- /VIDEO BOX INFO -->
                </div>
                <!-- /VIDEO BOX COVER -->
              </div>
              <!-- /VIDEO BOX -->
            </div>
            <!-- /VIDEO BOX LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
</div>
