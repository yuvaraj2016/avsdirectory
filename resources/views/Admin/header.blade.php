<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AVS Portal</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
				{{-- <div class="pro-banner" id="pro-banner">
						<div class="card pro-banner-bg border-0 rounded-0">
							<div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
								<p class="mb-0 text-white font-weight-medium mb-2 mb-lg-0 mb-xl-0">Like what you see? Checkout our premium version for more.</p>
								<div class="d-flex">
									<a href="https://github.com/Bootstrapdash/Kapella-Free-Bootstrap-Admin-Template" target="_blank" class="btn btn-outline-light mr-2">Download free version</a>
									<a href="http://www.bootstrapdash.com/demo/kapella/template/" target="_blank" class="btn btn-outline-light mr-2 bg-white text-dark">Upgrade to Pro</a>
									<button id="bannerClose" class="btn border-0 p-0">
										<i class="mdi mdi-close text-white"></i>
									</button>
								</div>
						</div>
					</div>
				</div> --}}
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            {{-- <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-information mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          Just now
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                          <i class="mdi mdi-settings mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          Private message
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                          <i class="mdi mdi-account-box mx-0"></i>
                        </div>
                    </div>
                    <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                        <p class="font-weight-light small-text mb-0 text-muted">
                          2 days ago
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email mx-0"></i>
                  <span class="count bg-primary">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          The meeting is cancelled
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          New product launch
                        </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                        <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                        </h6>
                        <p class="font-weight-light small-text text-muted mb-0">
                          Upcoming board meeting
                        </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>
              <li class="nav-item nav-search d-none d-lg-block ml-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>
            </ul> --}}
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo " href="{{ route('dashboard') }}" style="margin-left:500px!important; margin-top:8px;"><h3><b>AVS DIRECTORY</b></h3></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><h3><b>AVS DIRECTORY</b></h3></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                {{-- <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-toggle="dropdown">
                  Reports
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-pdf text-primary"></i>
                        Pdf
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-excel text-primary"></i>
                        Exel
                      </a>
                  </div>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                </li> --}}
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Admin</span>
                    {{-- <span class="online-status ml-2"></span> --}}
                    <img src="images/faces/face28.png" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container-fluid">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard')}}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Business Listing</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Listing</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Business Requirements  & Ads</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">Requirement Listing</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Ads Listing</a></li>
                    </ul>
                </div>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Announcements</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">Config</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Listing</a></li>
                    </ul>
                </div>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Events</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">Config</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Listing</a></li>
                    </ul>
                </div>
              </li>

              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Gallery</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">Album</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Album Images</a></li>
                    </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-codepen menu-icon"></i>
                  <span class="menu-title">Communications</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul>
                      <li class="nav-item"><a class="nav-link" href="#">Send SMS</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Send Email</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Send Telegram Message</a></li>
                  </ul>
              </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-emoticon menu-icon"></i>
                  <span class="menu-title">Accounts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Donations  & Earnings Tracker</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Spendings Tracker</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
                    </ul>
                </div>
            </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Martrimony</span></a>

                    <div class="submenu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="#">Profile Listing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Profile Albums</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Complaints & Support</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
                        </ul>
                    </div>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Users</span></a>


            </li>
            </ul>
        </div>
      </nav>
    </div>
    <!-- partial -->
