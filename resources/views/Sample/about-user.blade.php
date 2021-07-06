@extends('UserLayoutBladeFiles.user-account-layout')
@section('active-about-user', 'active')
@section('user-data')
<div class="grid grid-3-6-3">
  <!-- GRID COLUMN -->
  <div class="grid-column">
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
      <p class="widget-box-title">Kuhusu Mimi</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- PARAGRAPH -->
        <p class="paragraph">@yield('user-bio')</p>
        <!-- /PARAGRAPH -->

        <!-- INFORMATION LINE LIST -->
        <div class="information-line-list">
          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Kujiunga</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{Auth::user()->created_at}}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Wilaya</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Mkoa</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Kazi</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->

          <!-- /INFORMATION LINE -->
        </div>
        <!-- /INFORMATION LINE LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
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
      <p class="widget-box-title">Taarifa Binafsi</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- INFORMATION LINE LIST -->
        <div class="information-line-list">
          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Simu</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->

            <p class="information-line-text"><a href="">[private]</a></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Kuzaliwa</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Kazi</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{Auth::user()->user_ocupation}}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Status</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
        </div>
        <!-- /INFORMATION LINE LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->

  <!-- GRID COLUMN -->
  <div class="grid-column">
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
      <p class="widget-box-title">Interests</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- INFORMATION BLOCK LIST -->
        <div class="information-block-list">
          <!-- INFORMATION BLOCK -->
          <div class="information-block">
            <!-- INFORMATION BLOCK TITLE -->
            <p class="information-block-title">Favourite TV Shows</p>
            <!-- /INFORMATION BLOCK TITLE -->

            <!-- INFORMATION BLOCK TEXT -->
            <p class="information-block-text"></p>
            <!-- /INFORMATION BLOCK TEXT -->
          </div>
          <!-- /INFORMATION BLOCK -->

          <!-- INFORMATION BLOCK -->
          <div class="information-block">
            <!-- INFORMATION BLOCK TITLE -->
            <p class="information-block-title">Favourite Music Bands / Artists</p>
            <!-- /INFORMATION BLOCK TITLE -->

            <!-- INFORMATION BLOCK TEXT -->
            <p class="information-block-text"></p>
            <!-- /INFORMATION BLOCK TEXT -->
          </div>
          <!-- /INFORMATION BLOCK -->

          <!-- INFORMATION BLOCK -->
          <div class="information-block">
            <!-- INFORMATION BLOCK TITLE -->
            <p class="information-block-title">Favourite Movies</p>
            <!-- /INFORMATION BLOCK TITLE -->

            <!-- INFORMATION BLOCK TEXT -->
            <p class="information-block-text"></p>
            <!-- /INFORMATION BLOCK TEXT -->
          </div>
          <!-- /INFORMATION BLOCK -->

          <!-- INFORMATION BLOCK -->
          <div class="information-block">
            <!-- INFORMATION BLOCK TITLE -->
            <p class="information-block-title">Favourite Books</p>
            <!-- /INFORMATION BLOCK TITLE -->

            <!-- INFORMATION BLOCK TEXT -->
            <p class="information-block-text"></p>
            <!-- /INFORMATION BLOCK TEXT -->
          </div>
          <!-- /INFORMATION BLOCK -->

          <!-- INFORMATION BLOCK -->
          <div class="information-block">
            <!-- INFORMATION BLOCK TITLE -->
            <p class="information-block-title">Favourite Games</p>
            <!-- /INFORMATION BLOCK TITLE -->

            <!-- INFORMATION BLOCK TEXT -->
            <p class="information-block-text"></p>
            <!-- /INFORMATION BLOCK TEXT -->
          </div>
          <!-- /INFORMATION BLOCK -->
        </div>
        <!-- /INFORMATION BLOCK LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
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
      <p class="widget-box-title">Jobs &amp; Education</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- TIMELINE INFORMATION LIST -->
        <div class="timeline-information-list">
          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">Lead Costume Designer</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2015 - NOW</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->

          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">Costume Designer</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2013 - 2015</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->

          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">Designer Intern</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2012 - 2013</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->

          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">The Antique College of Design</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2007 - 2012</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->
        </div>
        <!-- /TIMELINE INFORMATION LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->

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
            <p class="progress-arc-title">59%</p>
            <!-- /PROGRESS ARC TITLE -->
          </div>
          <!-- /PROGRESS ARC INFO -->
        </div>
        <!-- /PROGRESS ARC WRAP -->

        <!-- PROGRESS ARC SUMMARY INFO -->
        <div class="progress-arc-summary-info">
          <!-- PROGRESS ARC SUMMARY TITLE -->
          <p class="progress-arc-summary-title">Profile Completion</p>
          <!-- /PROGRESS ARC SUMMARY TITLE -->

          <!-- PROGRESS ARC SUMMARY TITLE -->
          <p class="progress-arc-summary-subtitle">Marina Valentine</p>
          <!-- /PROGRESS ARC SUMMARY TITLE -->

          <!-- PROGRESS ARC SUMMARY TITLE -->
          <p class="progress-arc-summary-text">Complete your profile by filling profile info fields, completing quests &amp; unlocking badges</p>
          <!-- /PROGRESS ARC SUMMARY TITLE -->
        </div>
        <!-- /PROGRESS ARC SUMMARY INFO -->
      </div>
      <!-- /PROGRESS ARC SUMMARY -->

      <!-- ACHIEVEMENT STATUS LIST -->
      <div class="achievement-status-list">
        <!-- ACHIEVEMENT STATUS -->
        <div class="achievement-status">
          <!-- ACHIEVEMENT STATUS PROGRESS -->
          <p class="achievement-status-progress">11/30</p>
          <!-- /ACHIEVEMENT STATUS PROGRESS -->

          <!-- ACHIEVEMENT STATUS INFO -->
          <div class="achievement-status-info">
            <!-- ACHIEVEMENT STATUS TITLE -->
            <p class="achievement-status-title">Quests</p>
            <!-- /ACHIEVEMENT STATUS TITLE -->

            <!-- ACHIEVEMENT STATUS TEXT -->
            <p class="achievement-status-text">Completed</p>
            <!-- /ACHIEVEMENT STATUS TEXT -->
          </div>
          <!-- /ACHIEVEMENT STATUS INFO -->

          <!-- ACHIEVEMENT STATUS IMAGE -->
          <img class="achievement-status-image" src="/assets/img/badge/completedq-s.png" alt="bdage-completedq-s">
          <!-- /ACHIEVEMENT STATUS IMAGE -->
        </div>
        <!-- /ACHIEVEMENT STATUS -->

        <!-- ACHIEVEMENT STATUS -->
        <div class="achievement-status">
          <!-- ACHIEVEMENT STATUS PROGRESS -->
          <p class="achievement-status-progress">22/46</p>
          <!-- /ACHIEVEMENT STATUS PROGRESS -->

          <!-- ACHIEVEMENT STATUS INFO -->
          <div class="achievement-status-info">
            <!-- ACHIEVEMENT STATUS TITLE -->
            <p class="achievement-status-title">Badges</p>
            <!-- /ACHIEVEMENT STATUS TITLE -->

            <!-- ACHIEVEMENT STATUS TEXT -->
            <p class="achievement-status-text">Unlocked</p>
            <!-- /ACHIEVEMENT STATUS TEXT -->
          </div>
          <!-- /ACHIEVEMENT STATUS INFO -->

          <!-- ACHIEVEMENT STATUS IMAGE -->
          <img class="achievement-status-image" src="/assets/img/badge/unlocked-badge.png" alt="bdage-unlocked-badge">
          <!-- /ACHIEVEMENT STATUS IMAGE -->
        </div>
        <!-- /ACHIEVEMENT STATUS -->
      </div>
      <!-- /ACHIEVEMENT STATUS LIST -->
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
      <p class="widget-box-title">More Stats</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- STAT BLOCK LIST -->
        <div class="stat-block-list">
          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-friend">
                <use xlink:href="#svg-friend"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Last friend added</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">5 Days Ago</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->

          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-status">
                <use xlink:href="#svg-status"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Last post update</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">1 Day Ago</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->

          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Most commented post</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">56 Comments</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->

          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-thumbs-up">
                <use xlink:href="#svg-thumbs-up"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Most liked post</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">904 Likes</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->
        </div>
        <!-- /STAT BLOCK LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->
</div>

@endsection
