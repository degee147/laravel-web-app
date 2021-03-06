@extends('layouts.main')
@section('title')
Profile Account Page
@stop
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
@section('page-level-plugins')
<link href="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/pages/css/profile.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/pages/css/tasks.css') }}" rel="stylesheet" type="text/css"/>
@stop
<!-- END PAGE LEVEL PLUGIN STYLES -->

<!-- BEGIN CUSTOM NAV TO SHOW ACTIVE LINK -->
@section('nav')
<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <li>
        <a href="start">
            <i class="icon-home"></i>
            <span class="title">Home</span>
        </a>
    </li>
    <li>
        <a href="index">
            <i class="icon-list"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="index-boxed.html">
            <i class="icon-layers"></i>
            <span class="title">Boxed Page Layout</span>
        </a>
    </li>
    <li class="active">
        <a href="profile">
            <i class="icon-user"></i>
            <span class="title">User Profile</span>
        </a>
    </li>
    <li>
        <a href="project">
            <i class="icon-check"></i>
            <span class="title">Todo</span>
        </a>
    </li>
    <li>
        <a href="timeline">
            <i class="icon-paper-plane"></i>
            <span class="title">Timeline</span>
        </a>
    </li>
    <li>
        <a href="compatibility.html">
            <i class="icon-puzzle"></i>
            <span class="title">Compatibility</span>
        </a>
    </li>
    <li>
        <a href="javascript:;">
            <i class="icon-folder"></i>
            <span class="title">Multi Level Menu</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    <i class="icon-settings"></i> Item 1 <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="icon-user"></i>
                            Sample Link 1 <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><i class="icon-power"></i> Sample Link 1</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-paper-plane"></i> Sample Link 1</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-star"></i> Sample Link 1</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-camera"></i> Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-link"></i> Sample Link 2</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-pointer"></i> Sample Link 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-globe"></i> Item 2 <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#"><i class="icon-tag"></i> Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-pencil"></i> Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-graph"></i> Sample Link 1</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="icon-bar-chart"></i>
                    Item 3 </a>
            </li>
        </ul>
    </li>
</ul>

@stop
<!-- END CUSTOM NAV TO SHOW ACTIVE LINK -->
@section('page-content')

<div class="page-fixed-main-content">
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar" style="width:250px;">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{ asset('assets/admin/pages/media/profile/profile_user.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            Marcus Doe
                        </div>
                        <div class="profile-usertitle-job">
                            Developer
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-circle green-haze btn-sm">Follow</button>
                        <button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li>
                                <a href="profile">
                                    <i class="icon-home"></i>
                                    Overview </a>
                            </li>
                            <li class="active">
                                <a href="profile_account">
                                    <i class="icon-settings"></i>
                                    Account Settings </a>
                            </li>
                            <li>
                                <a href="project" target="">
                                    <i class="icon-check"></i>
                                    Tasks </a>
                            </li>
                            <li>
                                <a href="profile_help">
                                    <i class="icon-info"></i>
                                    Help </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->
                <!-- PORTLET MAIN -->
                <div class="portlet light">
                    <!-- STAT -->
                    <div class="row list-separated profile-stat">
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title">
                                37
                            </div>
                            <div class="uppercase profile-stat-text">
                                Projects
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title">
                                51
                            </div>
                            <div class="uppercase profile-stat-text">
                                Tasks
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="uppercase profile-stat-title">
                                61
                            </div>
                            <div class="uppercase profile-stat-text">
                                Uploads
                            </div>
                        </div>
                    </div>
                    <!-- END STAT -->
                    <div>
                        <h4 class="profile-desc-title">About Marcus Doe</h4>
                        <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-globe"></i>
                            <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-twitter"></i>
                            <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                        </div>
                        <div class="margin-top-20 profile-desc-link">
                            <i class="fa fa-facebook"></i>
                            <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form role="form" action="#">
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <input type="text" placeholder="John" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" placeholder="Doe" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Mobile Number</label>
                                                <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Interests</label>
                                                <input type="text" placeholder="Design, Web etc." class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Occupation</label>
                                                <input type="text" placeholder="Web Developer" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">About</label>
                                                <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Website Url</label>
                                                <input type="text" placeholder="http://www.mywebsite.com" class="form-control"/>
                                            </div>
                                            <div class="margiv-top-10">
                                                <a href="javascript:;" class="btn green-haze">
                                                    Save Changes </a>
                                                <a href="javascript:;" class="btn default">
                                                    Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                    <!-- CHANGE AVATAR TAB -->
                                    <div class="tab-pane" id="tab_1_2">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </p>
                                        <form action="#" role="form">
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                    </div>
                                                    <div>
                                                        <span class="btn default btn-file">
                                                            <span class="fileinput-new">
                                                                Select image </span>
                                                            <span class="fileinput-exists">
                                                                Change </span>
                                                            <input type="file" name="...">
                                                        </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
                                                            Remove </a>
                                                    </div>
                                                </div>
                                                <div class="clearfix margin-top-10">
                                                    <span class="label label-danger">NOTE! </span>
                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                </div>
                                            </div>
                                            <div class="margin-top-10">
                                                <a href="javascript:;" class="btn green-haze">
                                                    Submit </a>
                                                <a href="javascript:;" class="btn default">
                                                    Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE AVATAR TAB -->
                                    <!-- CHANGE PASSWORD TAB -->
                                    <div class="tab-pane" id="tab_1_3">
                                        <form action="#">
                                            <div class="form-group">
                                                <label class="control-label">Current Password</label>
                                                <input type="password" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input type="password" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Re-type New Password</label>
                                                <input type="password" class="form-control"/>
                                            </div>
                                            <div class="margin-top-10">
                                                <a href="javascript:;" class="btn green-haze">
                                                    Change Password </a>
                                                <a href="javascript:;" class="btn default">
                                                    Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE PASSWORD TAB -->
                                    <!-- PRIVACY SETTINGS TAB -->
                                    <div class="tab-pane" id="tab_1_4">
                                        <form action="#">
                                            <table class="table table-light table-hover">
                                                <tr>
                                                    <td>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
                                                    </td>
                                                    <td>
                                                        <label class="uniform-inline">
                                                            <input type="radio" name="optionsRadios1" value="option1"/>
                                                            Yes </label>
                                                        <label class="uniform-inline">
                                                            <input type="radio" name="optionsRadios1" value="option2" checked/>
                                                            No </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                    </td>
                                                    <td>
                                                        <label class="uniform-inline">
                                                            <input type="checkbox" value=""/> Yes </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                    </td>
                                                    <td>
                                                        <label class="uniform-inline">
                                                            <input type="checkbox" value=""/> Yes </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                    </td>
                                                    <td>
                                                        <label class="uniform-inline">
                                                            <input type="checkbox" value=""/> Yes </label>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--end profile-settings-->
                                            <div class="margin-top-10">
                                                <a href="javascript:;" class="btn green-haze">
                                                    Save Changes </a>
                                                <a href="javascript:;" class="btn default">
                                                    Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END PRIVACY SETTINGS TAB -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
    <!-- END PROFILE CONTENT -->
</div>

@stop
<!-- END PAGE CONTENT FIXED -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('page-level-js-plugins')
<script src="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
@stop
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@section('page-level-scripts')

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout6/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout6/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/tasks.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/profile.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        QuickSidebar.init(); // init quick sidebar
        Tasks.initDashboardWidget(); // init tash dashboard widget
        Profile.init(); // init page demo
    });
</script>

@stop
<!-- END PAGE LEVEL SCRIPTS -->
