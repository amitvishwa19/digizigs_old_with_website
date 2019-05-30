<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('public/images/brand_assets/d-fevi-orange.png')}}" type="image/ico" />

    <title> {{setting('app_name')}} | @yield('title') </title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!--meta name="user-id" content="{{Auth::check() ? Auth::user()->id : ''}}"-->

   
    <!-- Font Awesome -->
    <link href="{{asset('public/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="'https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'" rel="stylesheet" type="text/css">
    
    <!-- Custom Theme Style -->
    <link href="{{asset('public/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/style.css')}}" rel="stylesheet">

@section('HeaderSection')

@show
  </head>

<body class="">
  <div class="navbar navbar-light navbar-expand-lg">
    <button class="sidebar-toggler" type="button">
    <span class="ua-icon-sidebar-open sidebar-toggler__open"></span>
    <span class="ua-icon-alert-close sidebar-toggler__close"></span>
    </button>
    <span class="navbar-brand">
      <a href="/"><img src="{{asset('public/logo.png')}}" alt="" class="navbar-brand__logo"></a>
      <span class="ua-icon-menu slide-nav-toggle"></span>
    </span>
    <span class="navbar-brand-sm">
      <a href="/"><img src="img/logo-sm.png" alt="" class="navbar-brand__logo"></a>
      <span class="ua-icon-menu slide-nav-toggle"></span>
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
    <span class="ua-icon-navbar-open navbar-toggler__open"></span>
    <span class="ua-icon-alert-close navbar-toggler__close"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <div class="navbar__menu">
        <ul class="navbar-nav">
          <li class="nav-item dropdown navbar__menu-item">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
              Project
            </a>
            <div class="dropdown-menu navbar__menu-dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><span class="iconfont-users dropdown-item__icon"></span>Lead</a>
              <a class="dropdown-item" href="#"><span class="iconfont-user-circle dropdown-item__icon"></span>Contact: Person</a>
              <a class="dropdown-item" href="#"><span class="iconfont-building-b dropdown-item__icon"></span>Contact: Company</a>
              <a class="dropdown-item" href="#"><span class="iconfont-deal dropdown-item__icon"></span>Deal</a>
              <a class="dropdown-item" href="#"><span class="iconfont-arrow-right dropdown-item__icon"></span>Import</a>
            </div>
          </li>
          <li class="nav-item dropdown dropdown__columns navbar__menu-item">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
              Features
            </a>
            <div class="dropdown-menu dropdown__columns-menu navbar__menu-dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown__columns-container">
                <div class="dropdown__columns-column">
                  <a class="dropdown-item dropdown__columns-item" href="#">Range Slider</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Confirm Alerts</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Tag Editor</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Date Picker</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Date Range Picker</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">File Upload</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Growl Notifications</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Wysiwyg Editor</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Page Tour</a>
                </div>
                <div class="dropdown__columns-column">
                  <a class="dropdown-item dropdown__columns-item" href="#">Sweet Alert</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">DataTables</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Spreadsheet</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Email Templates</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Messenger</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Mail</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">File Storage</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Kanban Board</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Social Profile</a>
                </div>
                <div class="dropdown__columns-column">
                  <a class="dropdown-item dropdown__columns-item" href="#">Sign In</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Sign Up</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Invoices</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Pricing Table</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Help Center</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Settings</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Scheduler</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Social Feed</a>
                  <a class="dropdown-item dropdown__columns-item" href="#">Widgets</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item navbar__menu-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item navbar__menu-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
        <div class="navbar__menu-side">
          <div class="navbar__actions">
            <a href="https://themeforest.net/item/universeadmin-powerful-responsive-bootstrap-4-admin-template/20926048?ref=themesanytime" class="btn btn-info icon-left subnav__header-side-item">
              Buy Now <span class="btn-icon mdi mdi-cart"></span>
            </a>
          </div>
          <div class="navbar-search navbar__menu-search">
            <div class="input-group input-group-icon iconfont icon-right">
              <input class="form-control navbar-search__input navbar__menu-search-input" type="text" placeholder="Search"/><span class="input-icon ua-icon-search"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown">
        <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="navbar-notify navbar-notify--notifications">
            <span>
              <span class="navbar-notify__icon mdi mdi-bell"></span>
              <span class="navbar-notify__text">Notifications</span>
            </span>
            <!--<span class="navbar-notify__amount">3</span>-->
            <!--<span class="navbar-notify__indicator"></span>-->
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications">
          <div class="navbar-dropdown-notifications__header">
            <span>NOTIFICATIONS</span>
            <a href="#" class="navbar-dropdown-notifications__mark-read">
              Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
            </a>
          </div>
          <div class="navbar-dropdown-notifications__body js-scrollable">
            <!--<div class="navbar-dropdown-notifications__body-empty"><img class="navbar-dropdown-notifications__body-empty-image" src="img/empty-notifications.png" alt=""/>
              <div class="navbar-dropdown-notifications__body-empty-text">You`re up to date!</div>
            </div>-->
            <div class="navbar-dropdown-notification is-new">
              <div class="navbar-dropdown-notification__user">
                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-4.png" alt="" width="40" height="40">
                <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
              </div>
              <div class="navbar-dropdown-notification__content">
                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
              </div>
              <span class="navbar-dropdown-notification__date">9:49 AM</span>
            </div>
            <div class="navbar-dropdown-notification">
              <div class="navbar-dropdown-notification__user">
                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-5.png" alt="" width="40" height="40">
                <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
              </div>
              <div class="navbar-dropdown-notification__content">
                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
              </div>
              <span class="navbar-dropdown-notification__date">9:49 AM</span>
            </div>
            <div class="navbar-dropdown-notification">
              <div class="navbar-dropdown-notification__user">
                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-6.png" alt="" width="40" height="40">
                <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
              </div>
              <div class="navbar-dropdown-notification__content">
                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
              </div>
              <span class="navbar-dropdown-notification__date">9:49 AM</span>
            </div>
            <div class="navbar-dropdown-notification">
              <div class="navbar-dropdown-notification__user">
                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-7.png" alt="" width="40" height="40">
                <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
              </div>
              <div class="navbar-dropdown-notification__content">
                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
              </div>
              <span class="navbar-dropdown-notification__date">9:49 AM</span>
            </div>
            <div class="navbar-dropdown-notification__date-separator">Yesterday</div>
            <div class="navbar-dropdown-notification">
              <div class="navbar-dropdown-notification__user">
                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-8.png" alt="" width="40" height="40">
                <div class="ua-icon-letter-alt navbar-dropdown-notification__icon color-danger navbar-dropdown-notification__icon--letter"></div>
              </div>
              <div class="navbar-dropdown-notification__content">
                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
              </div>
              <span class="navbar-dropdown-notification__date">9:49 AM</span>
            </div>
            <div class="navbar-dropdown-notification">
              <div class="navbar-dropdown-notification__user">
                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-9.png" alt="" width="40" height="40">
                <div class="ua-icon-warning navbar-dropdown-notification__icon color-warning navbar-dropdown-notification__icon--warning"></div>
              </div>
              <div class="navbar-dropdown-notification__content">
                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
              </div>
              <span class="navbar-dropdown-notification__date">9:49 AM</span>
            </div>
            <div class="navbar-dropdown-notification">
              <div class="navbar-dropdown-notification__user">
                <img class="navbar-dropdown-notification__avatar rounded-circle" src="img/users/user-10.png" alt="" width="40" height="40">
                <div class="ua-icon-circle-check navbar-dropdown-notification__icon color-success"></div>
              </div>
              <div class="navbar-dropdown-notification__content">
                <a href="#" class="navbar-dropdown-notification__action-name">Antonius in Project X </a>
                <div class="navbar-dropdown-notification__action-desc">Added a <strong>Task</strong> to you in <strong>Designer Candidates</strong></div>
              </div>
              <span class="navbar-dropdown-notification__date">9:49 AM</span>
            </div>
          </div>
          <a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
        </div>
      </div>
      <div class="dropdown navbar-dropdown no-arrow navbar-notify-dropdown navbar-notify-dropdown--messages">
        <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="navbar-notify">
            <span>
              <span class="navbar-notify__icon mdi mdi-email"></span>
              <span class="navbar-notify__text">Messages</span>
            </span>
            <span class="navbar-notify__indicator"></span>
            <!--<span class="navbar-notify__amount">5</span>-->
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-notifications navbar-dropdown-messages">
          <div class="navbar-dropdown-notifications__header"><span>MESSAGES</span>
          <a href="#" class="navbar-dropdown-notifications__mark-read">
            Mark all as read <span class="navbar-dropdown-notifications__mark-read-icon ua-icon-arrow-circle-down"></span>
          </a>
        </div>
        <div class="navbar-dropdown-notifications__body navbar-dropdown-notifications__body-messages js-scrollable">
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-4.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-reply-to"></span>
                <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-5.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-comments"></span>
                <strong>Gabriel Saunders</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-6.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-star"></span>
                <strong>Shawna Cohen</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          <div class="navbar-dropdown-notifications__item is-unread">
            <img class="navbar-dropdown-notifications__item-avatar rounded-circle" src="img/users/user-7.png" alt="" width="40" height="40"/>
            <div class="navbar-dropdown-notifications__item-notify">
              <div>
                <span class="icon ua-icon-download"></span>
                <strong>Jason Kendall</strong> replied to <strong>your comment</strong> to <strong>The secret weapon of lebound marketing...</strong>
              </div>
              <div class="navbar-dropdown-notifications__item-datetime">5 minute ago</div>
            </div>
            <div class="navbar-dropdown-notifications__item-actions">
              <span class="icon ua-icon-circle-check navbar-dropdown-notifications__item-mark-as-read" data-toggle="tooltip" data-placement="top" title="Mark as read"></span>
              <span class="icon ua-icon-circle-close navbar-dropdown-notifications__item-remove" data-toggle="tooltip" data-placement="top" title="Delete notification"></span>
            </div>
          </div>
          </div><a class="navbar-dropdown-notifications__view-all" href="#"><span class="icon ua-icon-view-all"></span><span>View all</span></a>
        </div>
      </div>
      <div class="dropdown navbar-dropdown no-arrow navbar-help-dropdown navbar-notify-dropdown--help">
        <a class="dropdown-toggle navbar-dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="navbar-notify">
            <span>
              <span class="navbar-notify__icon mdi mdi-help-circle"></span>
              <span class="navbar-notify__text">Info</span>
            </span>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-center navbar-dropdown-menu">
          <h6 class="navbar-help-dropdown__heading">Need Help?</h6>
          <p class="navbar-help-dropdown__desc">
            Give us a call 888-898-8302 <br>
            send a email: <a href="#">info@example.com</a> <br>
            or
          </p>
          <div>
            <a href="help-center-submit-ticket.html" class="btn btn-info navbar-help-dropdown__submit">Submit a Ticket</a>
          </div>
        </div>
      </div>
      <div class="dropdown navbar-dropdown">
        <a class="dropdown-toggle navbar-dropdown-toggle navbar-dropdown-toggle__user" data-toggle="dropdown" href="#">
          <img src="img/users/user-3.png" alt="" class="navbar-dropdown-toggle__user-avatar">
          <span class="navbar-dropdown__user-name">John Smith</span>
        </a>
        <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu__user">
          <div class="navbar-dropdown-user-content">
            <div class="dropdown-user__avatar"><img src="img/users/user-3.png" alt=""/></div>
            <div class="dropdown-info">
              <div class="dropdown-info__name">John Smith</div>
              <div class="dropdown-info__job">Manager</div>
              <div class="dropdown-info-buttons"><a class="dropdown-info__viewprofile" href="#">View Profile</a><a class="dropdown-info__addaccount" href="#">Add account</a></div>
            </div>
            </div><a class="dropdown-item navbar-dropdown__item" href="#">Upgrade to <span>PRO</span></a><a class="dropdown-item navbar-dropdown__item" href="#">Invite team member</a><a class="dropdown-item navbar-dropdown__item" href="#">Fedback</a><a class="dropdown-item navbar-dropdown__item" href="#">Help</a><a class="dropdown-item navbar-dropdown__item" href="#">Sign Out</a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-wrap">
      
      <div class="sidebar-section">
        <div class="sidebar-section__scroll">
          <!--<div class="sidebar-section__user has-background">
            <img src="img/users/user-19.png" alt="" class="sidebar-section__user-avatar rounded-circle">
            <div class="dropdown sidebar-section__user-dropdown">
              <a class="dropdown-toggle sidebar-section__user-dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Joyce Walsh
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Help</a>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
            </div>
          </div>-->
          <div class="sidebar-user-a">
            <img src="img/users/user-19.png" alt="" class="sidebar-user-a__avatar rounded-circle">
            <div class="sidebar-user-a__name">Martha Howard</div>
            <div class="sidebar-user-a__desc">Product Manager</div>
            <a href="#" class="btn icon-left sidebar-user-a__link">
              Personal Account <span class="btn-icon ua-icon-user-solid"></span>
            </a>
          </div>
          <div>
            <div class="sidebar-section__separator">Main</div>
            <ul class="sidebar-section-nav">
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
                  <span class="sidebar-section-nav__item-text">Dashboard</span>
                  <span class="badge sidebar-section-nav__badge">2</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="index.html">Default Dashboard</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="booking-dashboard.html">Booking Dashboard</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="medical-dashboard.html">Medical Dashboard</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sales-dashboard.html">Sales Dashboard</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="payment-dashboard.html">Payment Dashboard</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="draggable-panels.html">
                  <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                  <span class="sidebar-section-nav__item-text">Draggable Panels</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                  <span class="sidebar-section-nav__item-text">Custom Layouts</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../custom-layouts/simple/index.html" target="_blank">Simple</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                  <span class="sidebar-section-nav__item-text">Page Layouts</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-md.html">Medium Sidebar</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="container-md.html">Medium Container</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="boxed-layout.html">Boxed Layout</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="full-height-content.html">Full Height Content</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="menu-and-content.html">Menu and Content</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-a.html">Sidebar (a)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-b.html">Sidebar (b)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="ecommerce-navbar.html">E-commerce Navbar</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="simple-navbar.html">Simple Navbar</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-ui"></span>
                  <span class="sidebar-section-nav__item-text">UI Features</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="alerts.html">Alerts</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="breadcrumbs.html">Breadcrumbs</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="badges.html">Badges</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="collapse.html">Collapse</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="colors.html">Colors</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pagination.html">Pagination</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="progress.html">Progress</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="modal.html">Modal</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tables.html">Tables</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tabs.html">Tabs</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tooltips-and-popovers.html">Tooltips &amp; Popovers</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="typography.html">Typography</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-grid"></span>
                  <span class="sidebar-section-nav__item-text">Widgets</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-cards.html">Card Widgets</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-social.html">Social Widgets</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-ecommerce.html">E-commerce Widgets</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-statistic.html">Statistic Widgets</a></li>
                </ul>
              </li>
            </ul>
            <div class="sidebar-section__separator">Apps</div>
            <ul class="sidebar-section-nav">
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="../apps/prototype/index.html" target="_blank">
                  <span class="sidebar-section-nav__item-icon ua-icon-navbar-open"></span>
                  <span class="sidebar-section-nav__item-text">Prototype</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon iconfont-cloud-storage"></span>
                  <span class="sidebar-section-nav__item-text">File Storage</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/list.html" target="_blank">Files List</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/index.html" target="_blank">Empty Files List</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/list-selected.html" target="_blank">Selected File</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/trash-empty.html" target="_blank">Empty Trash</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/albums.html" target="_blank">Albums</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/album-empty.html" target="_blank">Empty Album</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/photos.html" target="_blank">Photos</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/photos-selected.html" target="_blank">Selected Photos</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/photos-empty.html" target="_blank">Empty Photos</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/file-upload.html" target="_blank">File Upload</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/file-storage/share-file-modal.html" target="_blank">Share File Modal</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="mdi mdi-account-multiple sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">CRM</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/crm/index.html" target="_blank">Empty State</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/crm/dataset.html" target="_blank">Dataset</a></li>
                </ul>
              </li>
            </ul>
            <div class="sidebar-section__separator">Form</div>
            <ul class="sidebar-section-nav">
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="mdi mdi-radiobox-marked sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Basic Elements</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="inputs.html">Inputs</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="input-group.html">Input Group</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="buttons.html">Buttons</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="checkbox-radio.html">Checkbox &amp; Radio</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="select.html">Select</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-mask-input.html">Mask Input</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-float-labels.html">Float Labels</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="form-validation.html">
                  <span class="mdi mdi-format-pilcrow sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Form Validation</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="mdi mdi-step-forward sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Form Wizard</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard.html">Form Wizard</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-a.html">Form Wizard (a)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-b.html">Form Wizard (b)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-c.html">Form Wizard (c)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-d.html">Form Wizard (d)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-e.html">Form Wizard (e)</a></li>
                </ul>
              </li>
            </ul>
            <div class="sidebar-section__separator">Tables</div>
            <ul class="sidebar-section-nav">
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="mdi mdi-grid-large sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Dataset</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-table.html">Table</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-grid.html">Grid</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="tables.html">
                  <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Static Tables</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="datatables.html">
                  <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">DataTables</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="spreadsheet.html">
                  <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Spreadsheet</span>
                </a>
              </li>
            </ul>
            <div class="sidebar-section__separator">Features</div>
            <ul class="sidebar-section-nav">
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-component"></span>
                  <span class="sidebar-section-nav__item-text">Components</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="colorpicker.html">Color Picker</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="growl-notifications.html">Growl Notifications</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="range-slider.html">Range Slider</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="confirm-alerts.html">Confirm Alerts</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tag-editor.html">Tag Editor</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="datepicker.html">Date Picker</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="date-range-picker.html">Date Range Picker</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="file-upload.html">File Upload</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="wysiwyg-jodit-editor.html">Wysiwyg Editor</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="page-tour.html">Page Tour</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sweet-alert.html">Sweet Alert</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-charts"></span>
                  <span class="sidebar-section-nav__item-text">Charts</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="frappe-charts.html">Frappe Charts</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tui-charts.html">Tui Charts</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-pages"></span>
                  <span class="sidebar-section-nav__item-text">Pages</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signin.html">Sign In</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signin-a.html">Sign In (a)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signup.html">Sign Up</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signup-a.html">Sign Up (a)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="thanks.html">Thanks</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoices.html">Invoices</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pricing.html">Pricing</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="subscribe-plans.html">Subscribe Plans</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pricing-and-plans.html">Pricing and Plans</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="documents.html">Documents</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="trial-period-expired.html">Trial Expired</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-pages"></span>
                  <span class="sidebar-section-nav__item-text">Extra Pages</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="contact.html">Contact</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="users-grid.html">Users Grid</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="users-contacts.html">Users Contacts</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="activity.html">Activity</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoices-datagrid.html">Invoices (DataTable)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoice-overview.html">Invoice Overview</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tree-view.html">Tree View</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="timeline.html">Timeline</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="listings-travel.html">Travel Listing</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-pages"></span>
                  <span class="sidebar-section-nav__item-text">Error Pages</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="403.html">Page 403</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404.html">Page 404</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-a.html">Page 404 (a)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-b.html">Page 404 (b)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-c.html">Page 404 (c)</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="500.html">Page 500</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="wrong.html">Wrong Page</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-help-circle"></span>
                  <span class="sidebar-section-nav__item-text">Help Center</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="help-center.html">Browse Help Desk</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="help-center-submit-ticket.html">Submit Ticket</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="sidebar-section-nav__item-icon ua-icon-settings"></span>
                  <span class="sidebar-section-nav__item-text">Settings</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="app-settings.html">App Settings</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="global-settings.html">Global Settings</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="account-settings.html">Account Settings</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="email-templates.html">
                  <span class="mdi mdi-email sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Email Templates</span>
                </a>
              </li>
            </ul>
            <div class="sidebar-section__separator">Modules</div>
            <ul class="sidebar-section-nav">
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="mdi mdi-currency-usd sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">E-commerce</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="ecommerce-products.html">Products</a></li>
                </ul>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="mail.html">
                  <span class="mdi mdi-at sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Mail</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="messenger.html">
                  <span class="mdi mdi-message-processing sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Messenger</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="file-manager.html">
                  <span class="mdi mdi-file sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">File Manager</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="scheduler.html">
                  <span class="mdi mdi-calendar-clock sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Scheduler</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="kanban-board.html">
                  <span class="mdi mdi-clipboard-text sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Kanban Board</span>
                </a>
              </li>
              <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                  <span class="mdi mdi-clipboard-check sidebar-section-nav__item-icon"></span>
                  <span class="sidebar-section-nav__item-text">Tasks</span>
                </a>
                <ul class="sidebar-section-subnav">
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tasks.html">Tasks List</a></li>
                  <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="task-overview.html">Task Overview</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="sidebar-section__separator">Social Toolkit</div>
          <ul class="sidebar-section-nav">
            <li class="sidebar-section-nav__item">
              <a class="sidebar-section-nav__link" href="social-feed.html">
                <span class="sidebar-section-nav__item-icon iconfont-activity"></span>
                <span class="sidebar-section-nav__item-text">Social Feed</span>
              </a>
            </li>
            <li class="sidebar-section-nav__item">
              <a class="sidebar-section-nav__link" href="social-profile.html">
                <span class="sidebar-section-nav__item-icon iconfont-user-circle"></span>
                <span class="sidebar-section-nav__item-text">Social Profile</span>
              </a>
            </li>
          </ul>
        </div>
        <!--<div class="sidebar-section-nav__footer">
          <ul class="sidebar-section-nav">
            <li class="sidebar-section-nav__item sidebar-section-nav__item-btn mb-4">
              <a href="#" class="btn btn-info btn-block">Create project</a>
            </li>
          </ul>
          <div class="sidebar__collapse">
            <span class="icon ua-icon-collapse-left-arrows"></span>
          </div>
        </div>
      </div>
      -->
    </div>
    
    <div class="page-content">
      
      <div class="container-fluid">
        <div class="page-content__header">
          <div>
            <h2 class="page-content__header-heading">Dashboard</h2>
            <div class="page-content__header-description">Welcome to Agile CRM Sales Dashboard</div>
          </div>
          <div class="page-content__header-meta">
            <a href="#" class="btn btn-info icon-left">
              Add Widget <span class="btn-icon mdi mdi-plus-circle"></span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="widget widget-alpha widget-alpha--color-amaranth">
              <div>
                <div class="widget-alpha__amount">278</div>
                <div class="widget-alpha__description">New Projects</div>
              </div>
              <span class="widget-alpha__icon ua-icon-suitcase"></span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="widget widget-alpha widget-alpha--color-green-jungle">
              <div>
                <div class="widget-alpha__amount">156</div>
                <div class="widget-alpha__description">New Clients</div>
              </div>
              <span class="widget-alpha__icon ua-icon-user-outline"></span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="widget widget-alpha widget-alpha--color-orange widget-alpha--donut">
              <div>
                <div class="widget-alpha__amount">64,87%</div>
                <div class="widget-alpha__description">Conversion Rate</div>
              </div>
              <span class="widget-alpha__icon ua-icon-conversion-rate"></span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="widget widget-alpha widget-alpha--color-java widget-alpha--help">
              <div>
                <div class="widget-alpha__amount">425</div>
                <div class="widget-alpha__description">Support Tickets</div>
              </div>
              <span class="widget-alpha__icon ua-icon-ticket"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-f">
              <div id="radial-progress-ex1" class="statistic-widget-f__chart">
                <span class="statistic-widget-f__chart-text"></span>
              </div>
              <div class="statistic-widget-f__info">
                <div class="statistic-widget-f__value color-picton-blue">1445</div>
                <div class="statistic-widget-f__desc">Pending Tasks</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-f">
              <div id="radial-progress-ex2" class="statistic-widget-f__chart">
                <span class="statistic-widget-f__chart-text"></span>
              </div>
              <div class="statistic-widget-f__info">
                <div class="statistic-widget-f__value color-waterlemon">685</div>
                <div class="statistic-widget-f__desc">New Users</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-f">
              <div id="radial-progress-ex3" class="statistic-widget-f__chart">
                <span class="statistic-widget-f__chart-text"></span>
              </div>
              <div class="statistic-widget-f__info">
                <div class="statistic-widget-f__value color-heliotrope">1248</div>
                <div class="statistic-widget-f__desc">Completed Tasks</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-f">
              <div id="radial-progress-ex4" class="statistic-widget-f__chart">
                <span class="statistic-widget-f__chart-text"></span>
              </div>
              <div class="statistic-widget-f__info">
                <div class="statistic-widget-f__value color-success">886</div>
                <div class="statistic-widget-f__desc">Registered Users</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-12">
            <div class="widget widget-tabs widget-index-chart">
              <div class="widget-tabs__header">
                <div>
                  Weight vs weather
                </div>
                <ul class="nav nav-tabs widget-tabs__tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#widget-ww-all-accounts">All Accounts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#widget-ww-all-account2">Account 2</a>
                  </li>
                </ul>
              </div>
              <div class="widget-tabs__content">
                <div class="tab-content">
                  <div class="tab-pane show active" id="widget-ww-all-accounts">
                    <div class="dropdown widget-index-chart__select-date">
                      <button class="btn btn-select btn-rounded dropdown-toggle" type="button" data-toggle="dropdown">Jan-Feb 2017</button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Jan-Feb 2017</a>
                        <a class="dropdown-item" href="#">Feb-Apr 2017</a>
                        <a class="dropdown-item" href="#">Apr-Dec 2017</a>
                      </div>
                    </div>
                    <div id="widget-index-chart-container" class="widget-index-chart__container"></div>
                    <div class="widget-index-chart__items">
                      <div class="widget-index-chart__item widget-index-chart__item--yellow">
                        <span>Your index</span>
                        <span>17%</span>
                      </div>
                      <div class="widget-index-chart__item widget-index-chart__item--green">
                        <span>Another index</span>
                        <span>25%</span>
                      </div>
                      <div class="widget-index-chart__item widget-index-chart__item--grey">
                        <span>Foreign</span>
                        <span>10%</span>
                      </div>
                      <div class="widget-index-chart__item widget-index-chart__item--orange">
                        <span>US Bond</span>
                        <span>7%</span>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="widget-ww-all-account2">Widget tab content</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12">
            <div class="widget widget-controls widget-table widget-summary">
              <div class="widget-controls__header">
                <div>
                  Portfolio Summary
                </div>
                <div class="widget-controls__header-controls">
                  <span class="widget-controls__header-control ua-icon-settings"></span>
                </div>
              </div>
              <div class="progress progress-lg">
                <div class="progress-bar bg-emerland" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                <div class="progress-bar bg-kournikova" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">35%</div>
                <div class="progress-bar bg-coral-light" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
              </div>
              <div class="widget-controls__content js-scrollable">
                <table class="table table-no-border table-striped">
                  <thead>
                    <tr>
                      <th>Assets class</th>
                      <th>Goals</th>
                      <th>Amount</th>
                      <th>Balance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="table__tag table__tag--green">Cash</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--orange">International Bonds</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--orange">US Bonds</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--yellow">International Stocks</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--blue">International Stocks</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--green">Cash</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--orange">International Bonds</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--orange">US Bonds</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--yellow">International Stocks</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                    <tr>
                      <td><span class="table__tag table__tag--blue">International Stocks</span></td>
                      <td>17%</td>
                      <td>23%</td>
                      <td>$12,423</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-12">
            <div class="widget widget-user-card">
              <div class="widget-user-card__bg"></div>
              <div class="widget-user-card__content">
                <img src="img/users/user-9.png" alt="" width="120" height="120" class="widget-user-card__avatar">
                <div class="widget-user-card__info">
                  <div class="widget-user-card__name">Rebecca Harris</div>
                  <div class="widget-user-card__occupation">Frontend Developer</div>
                </div>
                <div>
                  <a href="#" class="btn btn-info btn-rounded btn-lg widget-user-card__follow">Follow</a>
                </div>
              </div>
              <div class="widget-user-card__statistics">
                <div class="widget-user-card__statistics-item">
                  <span class="widget-user-card__statistics-amount">1420</span>
                  <span class="widget-user-card__statistics-type">Posts</span>
                </div>
                <div class="widget-user-card__statistics-item">
                  <span class="widget-user-card__statistics-amount">1.1m</span>
                  <span class="widget-user-card__statistics-type">Followers</span>
                </div>
                <div class="widget-user-card__statistics-item">
                  <span class="widget-user-card__statistics-amount">320</span>
                  <span class="widget-user-card__statistics-type">Following</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="widget widget-controls widget-contacts widget-controls--dark">
              <div class="widget-controls__header">
                <div>
                  <span class="widget-controls__header-icon ua-icon-user-solid"></span> Contacts
                </div>
                <div class="widget-controls__header-controls">
                  <span class="widget-controls__header-control ua-icon-search"></span>
                  <span class="widget-controls__header-control ua-icon-sort"></span>
                </div>
              </div>
              <div class="widget-controls__content js-scrollable">
                <div class="widget-controls__content-wrap">
                  <div class="widget-contacts__item">
                    <img src="img/users/user-4.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Gabriel Saunders</a>
                      <div class="widget-contacts__item-email">gabriel@example.com</div>
                    </div>
                  </div>
                  <div class="widget-contacts__item">
                    <img src="img/users/user-5.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Shawna Cohen</a>
                      <div class="widget-contacts__item-email">shawna@example.com</div>
                    </div>
                  </div>
                  <div class="widget-contacts__item">
                    <img src="img/users/user-6.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Jason Kendall</a>
                      <div class="widget-contacts__item-email">jason@example.com</div>
                    </div>
                  </div>
                  <div class="widget-contacts__item">
                    <img src="img/users/user-7.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Thomas Banks</a>
                      <div class="widget-contacts__item-email">thomas@example.com</div>
                    </div>
                  </div>
                  <div class="widget-contacts__item">
                    <img src="img/users/user-8.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Rebecca Harris</a>
                      <div class="widget-contacts__item-email">rebecca@example.com</div>
                    </div>
                  </div>
                  <div class="widget-contacts__item">
                    <img src="img/users/user-6.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Jason Kendall</a>
                      <div class="widget-contacts__item-email">jason@example.com</div>
                    </div>
                  </div>
                  <div class="widget-contacts__item">
                    <img src="img/users/user-7.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Thomas Banks</a>
                      <div class="widget-contacts__item-email">thomas@example.com</div>
                    </div>
                  </div>
                  <div class="widget-contacts__item">
                    <img src="img/users/user-8.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                    <div>
                      <a href="#" class="widget-contacts__item-name">Rebecca Harris</a>
                      <div class="widget-contacts__item-email">rebecca@example.com</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-controls__footer">
                <a href="#" class="widget-controls__footer-add-control">
                  <span class="icon ua-icon-user-add"></span>
                </a>
                <a href="#" class="widget-controls__footer-view-all">
                  <span class="widget-controls__footer-view-all-icon iconfont-arrow-circle-right"></span><span>View more</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-12">
            <div class="widget widget-table widget-controls widget-payouts widget-controls--dark">
              <div class="widget-controls__header">
                <div>
                  <span class="widget-controls__header-icon ua-icon-wallet"></span> Previous Payouts
                </div>
              </div>
              <div class="widget-controls__content js-scrollable">
                <table class="table table-no-border table-striped">
                  <tbody>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                    <tr>
                      <td class="table__datetime">May 29, 2017</td>
                      <td><span class="font-semibold color-info">Paypal</span></td>
                      <td><span class="font-semibold">+$1450.00 USD</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="widget widget-welcome">
              <div class="widget-welcome__message">
                <h4 class="widget-welcome__message-l1">Welcome back!</h4>
                <h6 class="widget-welcome__message-l2">Your portfolio has a 5% growth for the last mounth</h6>
              </div>
              <div class="widget-welcome__stats">
                <div class="widget-welcome__stats-item early-growth">
                  <span class="widget-welcome__stats-item-value">-$1,530</span>
                  <span class="widget-welcome__stats-item-desc">Yearly Growth</span>
                </div>
                <div class="widget-welcome__stats-item monthly-growth">
                  <span class="widget-welcome__stats-item-value">+$550</span>
                  <span class="widget-welcome__stats-item-desc">Monthly Growth</span>
                </div>
                <div class="widget-welcome__stats-item daily-growth">
                  <span class="widget-welcome__stats-item-value">96%</span>
                  <span class="widget-welcome__stats-item-desc">Daily Growth</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-12">
            <div class="widget widget-controls widget-step-goal">
              <div class="widget-controls__header">
                <div>
                  Step Goal
                </div>
                <div>
                  <div class="dropdown widget-controls__dropdown">
                    <button class="btn btn-select btn-rounded dropdown-toggle" type="button" data-toggle="dropdown">By Price</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">By Price</a>
                      <a class="dropdown-item" href="#">By Name</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-controls__content">
                <div class="widget-step-goal__donut">
                  <div class="widget-step-goal__donut-wrap">
                    <div class="widget-step-goal__donut-progress">
                      <div class="widget-step-goal__donut-progress-amount">+75%</div>
                      <div class="widget-step-goal__donut-progress-desc">Your profit</div>
                    </div>
                    <div id="widget-step-goal-donut-chart" class="widget-step-goal__donut-chart"></div>
                  </div>
                  <div class="widget-step-goal__donut-labels">
                    <div class="widget-step-goal__donut-label">
                      <span class="widget-step-goal__donut-label-name">
                        <span class="widget-step-goal__donut-label-status widget-step-goal__donut-label-status--yellow"></span>APPL
                      </span>
                      <span class="widget-step-goal__donut-label-progress is-up">$136.22</span>
                    </div>
                    <div class="widget-step-goal__donut-label">
                      <span class="widget-step-goal__donut-label-name">
                        <span class="widget-step-goal__donut-label-status widget-step-goal__donut-label-status--green"></span>MSFT
                      </span>
                      <span class="widget-step-goal__donut-label-progress is-up">$64.70</span>
                    </div>
                    <div class="widget-step-goal__donut-label">
                      <span class="widget-step-goal__donut-label-name">
                        <span class="widget-step-goal__donut-label-status widget-step-goal__donut-label-status--orange"></span>FB
                      </span>
                      <span class="widget-step-goal__donut-label-progress is-down">$133.08</span>
                    </div>
                  </div>
                </div>
                <div id="widget-step-goal-bar" class="widget-step-goal__bar"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="widget widget-controls widget-table widget-account-activity">
              <div class="widget-controls__header">
                <div>
                  Account Activity
                </div>
              </div>
              <div class="widget-controls__content js-scrollable">
                <table class="table table-no-border table-striped">
                  <thead>
                    <tr>
                      <th>Type</th>
                      <th>Amount</th>
                      <th>Balance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Deposit</td>
                      <td><span class="table__cell-up">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                    <tr>
                      <td>Deposit</td>
                      <td><span class="table__cell-up">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                    <tr>
                      <td>Account Withdrawal</td>
                      <td><span class="table__cell-down">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                    <tr>
                      <td>Deposit</td>
                      <td><span class="table__cell-down">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                    <tr>
                      <td>Deposit</td>
                      <td><span class="table__cell-up">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                    <tr>
                      <td>Deposit</td>
                      <td><span class="table__cell-up">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                    <tr>
                      <td>Deposit</td>
                      <td><span class="table__cell-up">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                    <tr>
                      <td>Deposit</td>
                      <td><span class="table__cell-up">$15</span></td>
                      <td>$31,313</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="widget-controls__footer widget-controls__footer-btn">
                <a href="#" class="btn btn-info btn-rounded">Make a transaction</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="widget widget-controls widget-table widget-brands">
              <div class="widget-brands__header">
                <ul class="nav nav-tabs widget-brands__tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#widget-brands-microsoft">Microsoft</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#widget-brands-facebook">Facebook</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#widget-brands-google">Apple Inc.</a>
                  </li>
                </ul>
              </div>
              <div class="widget-brands__content">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="widget-brands-microsoft">
                    <h5 class="widget-brands__brand-name">Microsoft</h5>
                    <div class="widget-brands__separator"></div>
                    <div class="widget-brands__desc">+25% <span class="widget-brands__time">In the past year</span></div>
                    <div class="widget-brands__btn">
                      <a href="#" class="btn btn-info btn-rounded">Make a transaction</a>
                    </div>
                    <div id="widget-brands-chart" class="widget-brands__chart"></div>
                  </div>
                  <div class="tab-pane fade" id="widget-brands-facebook">2</div>
                  <div class="tab-pane fade" id="widget-brands-google">3</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="widget widget-controls widget-table widget-billing">
              <div class="widget-controls__header">
                <div>
                  Billing Notice
                </div>
                <div class="widget-controls__header-controls">
                  <a href="#" class="widget-controls__header-control">Learn More</a>
                </div>
              </div>
              <div class="widget-billing__header">
                <span class="widget-billing__card-number">
                  <img src="img/flags/de.png" alt="" width="24" height="24" class="widget-billing__card-country rounded-circle">
                  <span>Ending **** 5896</span>
                </span>
                <span class="widget-billing__card-expired">05/19</span>
                <span class="widget-billing__card-type">Visa</span>
              </div>
              <div class="widget-controls__content js-scrollable">
                <table class="table table-no-border">
                  <tbody>
                    <tr>
                      <td>PRO Package</td>
                      <td class="table__cell-text-light">Standart Payment</td>
                      <td class="table__cell-text-light text-right">19 Jan 2017</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Job Posted</td>
                      <td class="table__cell-text-light">30-Days Recuring</td>
                      <td class="table__cell-text-light text-right">24 Nov 2016</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>PRO Package</td>
                      <td class="table__cell-text-light">Gift</td>
                      <td class="table__cell-text-light text-right">7 Mar 2016</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>PRO Package</td>
                      <td class="table__cell-text-light">Standart Payment</td>
                      <td class="table__cell-text-light text-right">19 Jan 2017</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Job Posted</td>
                      <td class="table__cell-text-light">30-Days Recuring</td>
                      <td class="table__cell-text-light text-right">24 Nov 2016</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>PRO Package</td>
                      <td class="table__cell-text-light">Gift</td>
                      <td class="table__cell-text-light text-right">7 Mar 2016</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>PRO Package</td>
                      <td class="table__cell-text-light">Standart Payment</td>
                      <td class="table__cell-text-light text-right">19 Jan 2017</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Job Posted</td>
                      <td class="table__cell-text-light">30-Days Recuring</td>
                      <td class="table__cell-text-light text-right">24 Nov 2016</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                    <tr>
                      <td>PRO Package</td>
                      <td class="table__cell-text-light">Gift</td>
                      <td class="table__cell-text-light text-right">7 Mar 2016</td>
                      <td class="table__cell-compact">
                        <a href="#" class="ua-icon-download-outline table__cell-actions-icon"></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget widget-controls widget-content-tabs widget-activity">
              <div class="widget-controls__header">
                <div>
                  Activity
                </div>
                <div class="widget-controls__header-controls">
                  <a href="#" class="widget-controls__header-control">Learn More</a>
                </div>
              </div>
              <div class="widget-controls__content widget-content-tabs__tabs">
                <nav class="nav nav-tabs">
                  <a class="nav-item nav-link active" data-toggle="tab" href="#widget-activity-tab">Activity</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#widget-blocked-users-tab">Blocked Users</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#widget-nda-tab">NDAs</a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#widget-customer-invoices-tab">Customers Invoices</a>
                </nav>
                <div class="tab-content">
                  <div class="tab-pane show active" id="widget-activity-tab">
                    <div class="tab-pane__content js-scrollable">
                      <div class="widget-activity__items">
                        <span class="widget-activity__date">Today</span>
                        <div class="widget-activity__item widget-activity__item--green">
                          <div class="widget-activity__item-text">
                            Prepared all declared documents for invoice confirmation
                          </div>
                          <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                        </div>
                        <div class="widget-activity__item widget-activity__item--orange">
                          <div class="widget-activity__item-text">
                            Fulfill the necessary action plan for current deadlines
                          </div>
                          <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                        </div>
                        <div class="widget-activity__item widget-activity__item--blue">
                          <div class="widget-activity__item-text">
                            Prepared all declared documents for invoice confirmation
                          </div>
                          <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                        </div>
                        <div class="widget-activity__item widget-activity__item--green">
                          <div class="widget-activity__item-text">
                            Prepared all declared documents for invoice confirmation
                          </div>
                          <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                        </div>
                        <span class="widget-activity__date">Yesterday</span>
                        <div class="widget-activity__item widget-activity__item--green">
                          <div class="widget-activity__item-text">
                            Prepared all declared documents for invoice confirmation
                          </div>
                          <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                        </div>
                        <div class="widget-activity__item widget-activity__item--green">
                          <div class="widget-activity__item-text">
                            Prepared all declared documents for invoice confirmation
                          </div>
                          <span class="widget-activity__item-date">Johny Marquez - 9:24 PM</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="widget-blocked-users-tab">
                    <div class="widget-activity__blocked-users">Blocked Users</div>
                  </div>
                  <div class="tab-pane" id="widget-nda-tab">
                    <div class="widget-activity__nda">NDA</div>
                  </div>
                  <div class="tab-pane" id="widget-customer-invoices-tab">
                    <div class="widget-activity__customer-invoices">Customer Invoices</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget widget-controls widget-contacts widget-todo widget-controls--dark">
              <div class="widget-controls__header">
                <div>
                  <span class="widget-controls__header-icon ua-icon-todo"></span> Todo Lists
                </div>
              </div>
              <div class="widget-controls__content js-scrollable">
                <div class="widget-controls__content-wrap">
                  <span class="widget-todo__date">Today</span>
                  <div class="widget-todo__item is-completed">
                    <span class="widget-todo__item-icon">
                      <span class="ua-icon-check"></span>
                    </span>
                    <div class="widget-todo__item-info">
                      <span class="widget-todo__item-name">Consectetur Sem Sollicitudin</span>
                      <span class="widget-todo__item-date">08:22 AM</span>
                    </div>
                  </div>
                  <div class="widget-todo__item is-completed">
                    <span class="widget-todo__item-icon">
                      <span class="ua-icon-check"></span>
                    </span>
                    <div class="widget-todo__item-info">
                      <span class="widget-todo__item-name">Consectetur Sem Sollicitudin</span>
                      <span class="widget-todo__item-date">08:22 AM</span>
                    </div>
                  </div>
                  <span class="widget-todo__date">Tomorrow</span>
                  <div class="widget-todo__item">
                    <span class="textavatar widget-todo__item-avatar widget-todo__item-avatar--orange" data-width="40" data-height="40" data-name="Richard Hendrick" data-toggle="textavatar"></span>
                    <div class="widget-todo__item-info">
                      <span class="widget-todo__item-name">Porta Vevenatis Quam</span>
                      <span class="widget-todo__item-date">10:30 PM</span>
                    </div>
                  </div>
                  <div class="widget-todo__item">
                    <span class="textavatar widget-todo__item-avatar widget-todo__item-avatar--green" data-width="40" data-height="40" data-name="Deborah Allen" data-toggle="textavatar"></span>
                    <div class="widget-todo__item-info">
                      <span class="widget-todo__item-name">Nullam quis risus eget urna mollis ornare leo</span>
                      <span class="widget-todo__item-date">rebecca@masterskin.ru</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-controls__footer">
                <a href="#" class="widget-controls__footer-add-control">
                  <span class="icon ua-icon-plus-circle"></span>
                </a>
                <a href="#" class="widget-controls__footer-view-all">
                  <span class="widget-controls__footer-view-all-icon iconfont-arrow-circle-right"></span><span>View more</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-g">
              <div class="statistic-widget-g__info">
                <div class="statistic-widget-g__title">Followers</div>
                <div class="statistic-widget-g__desc">
                  Get Around Easily A New <br>
                  York Limousine Service
                </div>
                <a href="#" class="statistic-widget-g__link">Details</a>
              </div>
              <div id="radial-progress-ex5" class="statistic-widget-g__chart">
                <span class="statistic-widget-g__chart-text"></span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-g">
              <div class="statistic-widget-g__info">
                <div class="statistic-widget-g__title">Orders</div>
                <div class="statistic-widget-g__desc">
                  Get Around Easily A New <br>
                  York Limousine Service
                </div>
                <a href="#" class="statistic-widget-g__link">Details</a>
              </div>
              <div id="radial-progress-ex6" class="statistic-widget-g__chart">
                <span class="statistic-widget-g__chart-text"></span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-g">
              <div class="statistic-widget-g__info">
                <div class="statistic-widget-g__title">Tasks</div>
                <div class="statistic-widget-g__desc">
                  Get Around Easily A New <br>
                  York Limousine Service
                </div>
                <a href="#" class="statistic-widget-g__link">Details</a>
              </div>
              <div id="radial-progress-ex7" class="statistic-widget-g__chart">
                <span class="statistic-widget-g__chart-text"></span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="statistic-widget statistic-widget-g">
              <div class="statistic-widget-g__info">
                <div class="statistic-widget-g__title">Clients</div>
                <div class="statistic-widget-g__desc">
                  Get Around Easily A New <br>
                  York Limousine Service
                </div>
                <a href="#" class="statistic-widget-g__link">Details</a>
              </div>
              <div id="radial-progress-ex8" class="statistic-widget-g__chart">
                <span class="statistic-widget-g__chart-text"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/js/select2.full.min.js"></script>
  <script src="vendor/simplebar/simplebar.js"></script>
  <script src="vendor/text-avatar/jquery.textavatar.js"></script>
  <script src="vendor/tippyjs/tippy.all.min.js"></script>
  <script src="vendor/flatpickr/flatpickr.min.js"></script>
  <script src="vendor/wnumb/wNumb.js"></script>
  <script src="js/main.js"></script>
  <script src="vendor/jquery-circle-progress/circle-progress.min.js"></script>
  <script src="js/preview/default-dashboard.min.js"></script>
  <div class="sidebar-mobile-overlay"></div>
  <div class="settings-panel">
    <div class="settings-panel__header">
      <span class="settings-panel__close ua-icon-modal-close"></span>
      <h5 class="settings-panel__heading">Theme Customizer</h5>
      <div class="settings-panel__desc">Customize & Preview In Real Time</div>
    </div>
    <div class="settings-panel__body">
      <div class="settings-panel__layout-options">
        <h6 class="settings-panel__block-heading">Layout Options</h6>
        <div class="settings-panel__layout-option">
          <label class="switch-inline">
            <span class="switch">
              <input type="checkbox" id="collapse-sidebar">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Collapse Sidebar</span>
          </label>
        </div>
        <div class="settings-panel__layout-option">
          <label class="switch-inline">
            <span class="switch">
              <input type="checkbox" id="hide-sidebar">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Hide Sidebar</span>
          </label>
        </div>
        <div class="settings-panel__layout-option">
          <label class="switch-inline">
            <span class="switch">
              <input type="checkbox" id="full-height-sidebar">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Full Height Sidebar</span>
          </label>
        </div>
        <div class="settings-panel__layout-option">
          <label class="switch-inline">
            <span class="switch">
              <input type="checkbox" id="rounded-form-controls">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Rounded Form Controls</span>
          </label>
        </div>
      </div>
      <div class="settings-panel__theme-colors">
        <h6 class="settings-panel__block-heading">Theme Colors</h6>
        <ul class="list-unstyled">
          <!--<li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-a">
              <span class="color-radio__color"></span>
              <span class="color-radio__text">#1</span>
            </label>
          </li>-->
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-b">
              <span class="color-radio__color color-radio__color--deep-cerulean"></span>
              <span class="color-radio__text">#2</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color is-checked">
              <input type="radio" name="settings_color" data-style="style" checked>
              <span class="color-radio__color color-radio__color--river-bad"></span>
              <span class="color-radio__text">#3</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-d">
              <span class="color-radio__color color-radio__color--sun-juan"></span>
              <span class="color-radio__text">#4</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-e">
              <span class="color-radio__color color-radio__color--bermuda-gray"></span>
              <span class="color-radio__text">#5</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-f">
              <span class="color-radio__color color-radio__color--deep-sea"></span>
              <span class="color-radio__text">#6</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-i">
              <span class="color-radio__color color-radio__color--wine-berry"></span>
              <span class="color-radio__text">#7</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-g">
              <span class="color-radio__color  color-radio__color--big-stone"></span>
              <span class="color-radio__text">#8</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-j">
              <span class="color-radio__color color-radio__color--killarney"></span>
              <span class="color-radio__text">#9</span>
            </label>
          </li>
          <li>
            <label class="color-radio js-settings-color">
              <input type="radio" name="settings_color" data-style="style-h">
              <span class="color-radio__color color-radio__color--kabul"></span>
              <span class="color-radio__text">#10</span>
            </label>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <script src="{{asset('public/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/simplebar.js')}}"></script>
  <script src="{{asset('public/main.js')}}"></script>
</body>
</html>
