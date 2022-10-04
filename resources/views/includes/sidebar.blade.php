<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="{{ route('dashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
                </li>
                <li class="menu-title">
                    <span>Employees</span>
                </li>
                <li class="submenu">
                    <a href="{{ route('employee-profile') }}"><i class="la la-user"></i> <span> Profile </span> </a>
                </li>
                <li>
                    <a href="{{ route('leave') }}"><i class="la la-file-text"></i> <span>Leave</span></a>
                </li>
                <li class="submenu">
                    <a href="{{ route('allowance') }}"><i class="la la-rocket"></i> <span> Allowance</span></a>
                </li>
                <li>
                    <a href="{{ route('deduction') }}"><i class="la la-times-circle"></i> <span>Deduction</span></a>
                </li>
                <li class="submenu">
                    <a href="{{ route('advance') }}"><i class="la la-money"></i> <span> Advance </span></a>
                </li>
                <li class="submenu">
                    <a href="{{ route('loan') }}"><i class="la la-money"></i> <span> Loans </span></a>
                </li>
                <li>
                    <a href="{{ route('attendance') }}"><i class="la la-users"></i> <span>Attendance</span></a>
                </li>
<!--                <li class="submenu">
                    <a href="#"><i class="la la-pie-chart"></i> <span> login History </span> </a>
                </li>-->
                <li>
                    <a href="{{ route('settings') }}"><i class="la la-cog"></i> <span>Settings</span></a>
                </li>
<!--                <li class="submenu">
                    <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="error-404.html">Login </a></li>
                        <li><a href="error-404.html">Register </a></li>
                        <li><a href="error-404.html">404 Error </a></li>
                        <li><a href="error-500.html">500 Error </a></li>
                    </ul>
                </li>-->
                <li><a href="{{ route('month-salary') }}"><i class="la la-bullhorn"></i> <span>Salary</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="la la-briefcase"></i> <span> Reports </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
