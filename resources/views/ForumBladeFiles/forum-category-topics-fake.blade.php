@extends('LayoutBladeFiles.app-layout')
@section('title','Jukwaani')
@section('mini-user-forum-active','unread')
@section('menu-status-chat','active')
@section('discription-title','Mada Jukwaani')
@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

@foreach($forum_selected as $forum)
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Karibu katika Jukwaa la</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">{{$forum->Category}}</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v7">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- SECTION FILTERS BAR INFO -->
      <div class="section-filters-bar-info">
        <!-- SECTION FILTERS BAR TITLE -->
        <p class="section-filters-bar-title"><a href="">Jukwaa</a><span class="separator"></span><a href="forums-category.html">{{$forum->Category}}</a></p>
        <!-- /SECTION FILTERS BAR TITLE -->

        <!-- SECTION FILTERS BAR TEXT -->
        <div class="section-filters-bar-text small-space">
          Last post by
          <!-- USER AVATAR -->
          <a class="user-avatar micro no-stats" href="profile-timeline.html">
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
          </a>
          <!-- /USER AVATAR -->
          <a class="bold" href="profile-timeline.html">Nick Grissom</a>
          2 minutes ago
        </div>
        <!-- /SECTION FILTERS BAR TEXT -->
      </div>
      <!-- /SECTION FILTERS BAR INFO -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM ITEM -->
        <div class="form-item split">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="forum-search">Search Forums</label>
            <input type="text" id="forum-search" name="forum_search">
          </div>
          <!-- /FORM INPUT -->

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
        <!-- /FORM ITEM -->
      </form>
      <!-- /FORM -->

      <!-- BUTTON -->
      <p class="button secondary popup-create-discussion-trigger">+ Create Discussion</p>
      <!-- /BUTTON -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- TABLE -->
  <div class="table table-forum-category">
    <!-- TABLE HEADER -->
    <div class="table-header">
      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Category</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Topics</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Posts</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column padded-big-left">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Recent Topics</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->
    </div>
    <!-- /TABLE HEADER -->

    <!-- TABLE BODY -->
    <div class="table-body">
      <!-- TABLE ROW -->
      <div class="table-row big">
        <!-- TABLE COLUMN -->
        <div class="table-column">
          <!-- FORUM CATEGORY -->
          <div class="forum-category">
            <!-- FORUM CATEGORY IMAGE -->
            <a href="forums-category.html">
              <img class="forum-category-image" src="/Uploads/ForumCategoryImage/{{$forum->Category_Image}}" alt="category-07">
            </a>
            <!-- /FORUM CATEGORY IMAGE -->

            <!-- FORUM CATEGORY INFO -->
            <div class="forum-category-info">
              <!-- FORUM CATEGORY TITLE -->
              <p class="forum-category-title"><a href="forums-category.html">{{$forum->Category}}</a></p>
              <!-- /FORUM CATEGORY TITLE -->

              <!-- FORUM CATEGORY TEXT -->
              <p class="forum-category-text">{{$forum->Category_Description}}</p>
              <!-- /FORUM CATEGORY TEXT -->
            </div>
            <!-- /FORUM CATEGORY INFO -->
          </div>
          <!-- /FORUM CATEGORY -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">{{$forum->Topics}}</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">{{$forum->Posts}}</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column padded-big-left">
          @foreach($forum->discussions as $recent_discussions)
          <!-- TABLE LINK -->
          <a class="table-link" href="/kilimofy/Forum/Forum-Discussion/{{$recent_discussions->id}}">{{$recent_discussions->Topic}}</a>
          <!-- /TABLE LINK -->
          @endforeach
        </div>
        <!-- /TABLE COLUMN -->
      </div>
      <!-- /TABLE ROW -->
    </div>
    <!-- /TABLE BODY -->
  </div>
  <!-- /TABLE -->

  <!-- TABLE -->
  <div class="table table-forum-discussion">
    <!-- TABLE HEADER -->
    <div class="table-header">
      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Discussion</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Voices</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Replies</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column padded-big-left">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Activity</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->
    </div>
    <!-- /TABLE HEADER -->

    <!-- TABLE BODY -->
    <div class="table-body">
     @foreach($discussions as $discussions)
      <!-- TABLE ROW -->
      <div class="table-row medium">
        <!-- TABLE COLUMN -->
        <div class="table-column">
          <!-- DISCUSSION PREVIEW -->
          <div class="discussion-preview">
            <!-- DISCUSSION PREVIEW TITLE -->
            <a class="discussion-preview-title" href="/kilimofy/Forum/Forum-Discussion/{{$discussions->id}}">{{$discussions->Topic}}</a>
            <!-- /DISCUSSION PREVIEW TITLE -->

            <!-- DISCUSSION PREVIEW META -->
            <div class="discussion-preview-meta">
              <!-- DISCUSSION PREVIEW META TEXT -->
              <p class="discussion-preview-meta-text">Started by</p>
              <!-- /DISCUSSION PREVIEW META TEXT -->

              <!-- USER AVATAR -->
              <a class="user-avatar micro no-border" href="profile-timeline.html">
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{$discussions->Author_Image_Name}}"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </a>
              <!-- /USER AVATAR -->

              <!-- DISCUSSION PREVIEW META TEXT -->
              <p class="discussion-preview-meta-text"><a href="profile-timeline.html">{{$discussions->Author_Name}}</a> {{$discussions->created_at->diffForHumans()}}</p>
              <!-- /DISCUSSION PREVIEW META TEXT -->
            </div>
            <!-- /DISCUSSION PREVIEW META -->
          </div>
          <!-- /DISCUSSION PREVIEW -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">19</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">24</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column padded-big-left">
          <!-- USER STATUS -->
          <div class="user-status">
            <!-- USER STATUS AVATAR -->
            <a class="user-status-avatar" href="profile-timeline.html">
              <!-- USER AVATAR -->
              <div class="user-avatar small no-outline">
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$discussions->Author_Image_Name}}"></div>
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
                  <p class="user-avatar-badge-text">16</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </div>
              <!-- /USER AVATAR -->
            </a>
            <!-- /USER STATUS AVATAR -->

            <!-- USER STATUS TITLE -->
            <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$discussions->Author_Name}}</a></p>
            <!-- /USER STATUS TITLE -->

            <!-- USER STATUS TEXT -->
            <p class="user-status-text small">{{$discussions->created_at->diffForHumans()}}</p>
            <!-- /USER STATUS TEXT -->
          </div>
          <!-- /USER STATUS -->
        </div>
        <!-- /TABLE COLUMN -->
      </div>
      <!-- /TABLE ROW -->
     @endforeach

    </div>
    <!-- /TABLE BODY -->

  </div>
  <!-- /TABLE -->

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
</div>
<!-- /CONTENT GRID -->


<div class="popup-box  popup-create-discussion">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-create-discussion-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- /POPUP CLOSE BUTTON -->

  <!-- POPUP BOX TITLE -->
  <p class="popup-box-title">Andaa Mjadala ?</p>
  <!-- /POPUP BOX TITLE -->

  <!-- FORM -->
  <form class="form" action="/kilimofy/Forum/Create-Discussion" method="post" enctype="multipart/form-data">
    @csrf
  <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="rating-reason">Jukwaa la ?</label>
          <select class="for" name="Forum_Category_Name">
            <option value="{{$forum->Category}}" selected >{{$forum->Category}}</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
          <input type="hidden" name="forum_id" value="{{$forum->id}}">
          <input type="hidden" name="Author_Name" value="{{Auth::user()->user_name}}">
          <input type="hidden" name="Author_ID" value="{{Auth::user()->id}}">
          <input type="hidden" name="Author_Image_Name" value="{{Auth::user()->avatar}}">
        </div>
        <!-- /FORM SELECT -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM INPUT -->
        <div class="form-input small mid-textarea active">
          <label for="profile-favourite-shows">Madaa ya Mjadala</label>
          <textarea id="profile-favourite-shows" name="Topic"></textarea>
        </div>
        <!-- /FORM INPUT -->
      </div>
      <!-- /FORM ITEM -->
    </div>


    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM INPUT -->
        <div class="form-input small mid-textarea active">
          <label for="profile-favourite-shows">Madaa ya Mjadala</label>
          <textarea id="profile-favourite-shows" name="Topic"></textarea>
        </div>
        <!-- /FORM INPUT -->
      </div>
      <!-- /FORM ITEM -->

    </div>

    <!-- QUICK POST FOOTER -->
    <div class="quick-post-footer">
      <!-- QUICK POST FOOTER ACTIONS -->
      <div class="quick-post-footer-actions">
        <!-- QUICK POST FOOTER ACTION -->
        <div class="quick-post-footer-action text-tooltip-tft-medium image-upload" data-title="Insert Photo">
          <!-- QUICK POST FOOTER ACTION ICON -->
          <label for="photo-input">
            <svg class="quick-post-footer-action-icon icon-camera" style="fill:black;">
              <use xlink:href="#svg-camera"></use>
            </svg>
          </label>
          <!-- /QUICK POST FOOTER ACTION ICON -->
          <input name="File" id="photo-input" type="file" />
          <input name="discussion_id"  type="hidden" value="" />
        </div>

        <!-- /QUICK POST FOOTER ACTION -->
      </div>
      <!-- /QUICK POST FOOTER ACTIONS -->


    </div>
    <!-- /QUICK POST FOOTER -->
    <!-- POPUP BOX ACTIONS -->
    <div class="popup-box-actions full void">
      <!-- POPUP BOX ACTION -->
      <button type="submit" class="popup-box-action full button secondary">Create</button>
      <!-- /POPUP BOX ACTION -->

      <!-- POPUP BOX ACTION TEXT -->
      <p class="popup-box-action-text"> <span style="color:red; font-size:24px;">*</span>Tunashauri madaa ya mjadala iwe inaendana sawa sawa na jukwaa husika, ilikuepusha mkanganyiko kwa washiriki wanaopenda kuchangia, Asante!<span style="color:red; font-size:24px;">*</span></p>
      <!-- /POPUP BOX ACTION TEXT -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
@endforeach
