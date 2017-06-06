<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-user-md"></i> <span>PER</span></a>
        </div>
        
        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href= "/injury_card/">
                            <i class="fa fa-map"></i>
                            Gewondekaart
                            <span class="label label-success pull-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url ('/protocollen') }}">
                            <i class="fa fa-hospital-o"></i>
                            Protocollen
                            <span class="label label-success pull-right"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>