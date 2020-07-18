<div class="header">
    <div class="header-bar">
        <div class="brand">
            <a href="/dash" class="logo"><span class="text-carolina">Movith</span>dash</a> <a href="/dash"
                class="logo-sm text-carolina" style="display: none;">Movith</a>
        </div>
        <div class="btn-toggle">
            <a href="#" class="slide-sidebar-btn" style="display: none;"><i class="ti-menu"></i></a>
        </div>
        <div class="navigation d-flex">
            <form class="navbar-search" role="search" method="post" action="#">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="ti-search"></i></div>
                    </div>
                    <input placeholder="Search for keywords" class="form-control" name="top-search" id="top-search" />
                </div>
            </form>
            <div class="navbar-menu d-flex">
                <div class="menu-item">
                    <a href="/demands" target="_blank" class="btn"><i class="ti-video-camera"></i> </a>
                </div>
                <div class="menu-item">
                    <a href="#" class="btn" data-toggle="dropdown"><i class="ti-bell"></i> <span
                            class="badge badge-pill badge-danger">3</span></a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-alert">
                        <li class="dropdown-header text-center">
                            <a href="#"><i class="ti-comment-alt"></i> View All Alerts <i
                                    class="ti-angle-right"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> New user registered <span>Just now</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar-plus-o"></i> New event created <span>5 min
                                    ago</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i> Report ready to download <span>1 day
                                    ago</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bank"></i> Bill payment reminder <span>1 day
                                    ago</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-clock-o"></i> Staff meeting <span>3 days ago</span></a>
                        </li>
                    </ul>
                </div>
                <div class="menu-item">
                    <a href="#" class="btn" data-toggle="dropdown"><i class="ti-email"></i> <span
                            class="badge badge-pill badge-success">7</span></a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-message">
                        <li class="dropdown-header text-center">
                            <a href="#"><i class="ti-comments"></i> View All Messages <i class="ti-angle-right"></i></a>
                        </li>
                        <li>
                            <img src="dashboard/assets/img/profile/profile-04.jpg" />
                            <div class="message-row">
                                <small>24h ago</small>
                                <a href="#">
                                    <span class="message-user">Pear Appleton</span><br />
                                    Staff meeting on Tuesday at 4PM, remember to set date
                                </a>
                            </div>
                        </li>
                        <li>
                            <img src="dashboard/assets/img/profile/profile-07.jpg" />
                            <div class="message-row">
                                <small>2h ago</small>
                                <a href="#">
                                    <span class="message-user">siQuang Humbleman</span><br />
                                    RE: Remember to generate PNL for October
                                </a>
                            </div>
                        </li>
                        <li>
                            <img src="dashboard/assets/img/profile/profile-06.jpg" />
                            <div class="message-row">
                                <small>3d ago</small>
                                <a href="#">
                                    <span class="message-user">Lemony Tang</span><br />
                                    Appointment with lawyer, better call Saul!
                                </a>
                            </div>
                        </li>
                        <li>
                            <img src="dashboard/assets/img/profile/profile-07.jpg" />
                            <div class="message-row">
                                <small>4d ago</small>
                                <a href="#">
                                    <span class="message-user">siQuang Humbleman</span><br />
                                    Theme designed by siQuang for siQthemes
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="menu-item">
                    <a href="#" class="btn" data-toggle="dropdown"><i class="ti-user"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-message">
                        <li class="dropdown-header">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <i class="ti-user"></i> {{session()->get('name')}}
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#"><span style="color:#17ba91;"><i class="fas fa-circle"></i></span>
                                        Online</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><span><i class="ti-settings"></i> User settings</span></a>
                        </li>
                        <li>
                            <?php $tokens =  bin2hex(openssl_random_pseudo_bytes(64));?>
                            <a href="/logout/{{session()->get('id')}}/{{$tokens}}"><span><i class="ti-power-off"></i>
                                    Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
