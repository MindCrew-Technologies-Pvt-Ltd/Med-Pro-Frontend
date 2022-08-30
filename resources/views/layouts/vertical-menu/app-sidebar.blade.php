<?php $locale = Session::get('locale'); ?>

<script>
		 
		  let user_data9 = localStorage.getItem('user_det');
		  var obj9 = JSON.parse(user_data9);
		  if (!obj9) {
		    var base_path = "http://3.220.132.29/medpro/"+<?php echo $locale; ?>;
		    window.location.href = base_path + 'login'<?="/".$locale; ?>;
           }
</script>



<!--APP-SIDEBAR-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

                <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
                <aside class="app-sidebar">
                    <div class="side-header" style="padding:15px 10px;">
                        <a class="header-brand1" href="{{ url('/dashboard')}}<?="/".$locale; ?>">
                            <!-- <img src="{{URL::asset('./assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{URL::asset('assets/images/brand/logo-1.png')}}"  class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{URL::asset('assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo"> -->
                            <div  id="logotxt" style="text-align:center;position:relative;left: 1rem;top:0.3rem;">
                            <!-- <img src="{{URL::asset('assets/images/pngs/oldlogo1.png')}}" class="header-brand-img light-logo1"  style="width: 30%;height:auto;float:right;" id="header_logo" alt="logo"> -->
                            <h2 style="color:white;">Med Pro</h2>
                            </div>
                        </a><!-- LOGO -->
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                    </div>
                    <div class="app-sidebar__user" style="border-bottom:none;">
                        <div class="dropdown user-pro-body text-center">
                            <div class="user-pic">
                                <img id="profile_id" src="{{URL::asset('assets/images/pngs/doc_image.png')}}" class="avatar-xl rounded-circle">
                            </div>
                            <div class="user-info">
                                <h6 class=" mb-0 text-dark"></h6>
                                <span class="text-muted app-sidebar__user-name text-sm" id="usr_name"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="sidebar-navs">
                        <ul class="nav  nav-pills-circle">
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-settings"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-mail"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-user"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <ul class="side-menu">
                      <!--   <li><h3>Main</h3></li> -->
                        <li class="slide">
                            <a class="side-menu__item"  data-toggle="slide" href="{{ url('dashboard')}}<?="/".$locale; ?>"><i class="side-menu__icon ti-home"></i><span class="side-menu__label" style=" height: 50px !important;line-height: 50px!important;position: relative;">{{__('sidebar.dashboard')}}</span></i></a>
                           <!--  <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ url('/' . $page='index') }}"><span>Sales Dashboard</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='index2') }}"><span>Marketing Dashboard</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='index3') }}"><span>Service Dashboard</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='index4') }}"><span>Finance Dashboard</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='index5') }}"><span>IT Dashboard</span></a></li>
                            </ul> -->
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="{{ url('/patient_management') }}<?="/".$locale; ?>"> <!-- <img  style="width:10%;"src="{{URL::asset('assets/images/svgs/patient-new.png')}}"> --><i class="side-menu__icon fa fa-user-md"></i> <span class="side-menu__label"style=" height: 50px !important;line-height: 50px!important;position: relative;">{{__('sidebar.pat_mgmt')}}</span></a>
                       </li>
                        <li class="slide">
                            <a class="side-menu__item typcn" data-toggle="slide" href="{{ url('/Pharmacy_management') }}<?="/".$locale; ?>"><!-- <img  style="width:10%;"src="{{URL::asset('assets/images/svgs/pharmacy_manage.png')}}"> --><i class="side-menu__icon fa  fa-clinic-medical"></i><span class="side-menu__label" style=" height: 50px !important;line-height: 50px !important;position: relative;">{{__('sidebar.pharm_mgmt')}}</span></a>
                        </li> 
                         <li class="slide">
                            <a class="side-menu__item typcn" data-toggle="slide" href="{{ url('/prescription_management') }}<?="/".$locale; ?>"> <!-- <img  style="width:10%;padding:2px;" src="{{URL::asset('assets/images/svgs/medical-prescription.png')}}"> --> <!-- <i class="side-menu__icon far fa-edit"></i> -->
                                <svg  id="pre_icon" style="position:relative;margin-left:7px;" fill="aliceblue" width="33pt" height="33pt" version="1.1" viewBox="0 0 752 752" xmlns="http://www.w3.org/2000/svg">
 <g>
  <path d="m474.66 607.86h-310.79c-10.852 0-19.734-8.8789-19.734-19.734l0.003906-388.73c0-10.852 8.8789-19.734 19.734-19.734h77.945c10.852 0 19.734 8.8789 19.734 19.734 0 10.852-8.8789 19.734-19.734 19.734h-59.199v350.25l272.3-0.003906v-51.305c0-10.852 8.8789-19.734 19.734-19.734 10.852 0 19.734 8.8789 19.734 19.734v70.051c0 10.855-8.8828 19.734-19.734 19.734z"/>
  <path d="m474.66 378.96c-10.852 0-19.734-8.8789-19.734-19.734v-140.1h-61.172c-10.852 0-19.734-8.8789-19.734-19.734 0-10.852 8.8789-19.734 19.734-19.734l80.906 0.003906c10.852 0 19.734 8.8789 19.734 19.734v160.82c0 10.848-8.8828 18.742-19.734 18.742z"/>
  <path d="m385.87 254.64h-133.2c-10.852 0-19.734-8.8789-19.734-19.734l0.003906-71.035c0-10.852 8.8789-19.734 19.734-19.734l133.19 0.003906c10.852 0 19.734 8.8789 19.734 19.734v72.023c-0.98828 9.8633-9.8672 18.742-19.734 18.742zm-113.46-38.477h93.73v-33.547h-93.73z"/>
  <path d="m530.9 573.33c-14.801 0-28.613-5.918-38.477-15.785l-122.34-122.34c-2.9609-2.9609-4.9336-5.918-4.9336-9.8672l-16.773-90.77c-0.98828-5.918 0.98828-12.824 4.9336-16.773 4.9336-4.9336 10.852-6.9062 16.773-4.9336l90.77 16.773c3.9453 0.98828 6.9062 2.9609 9.8672 4.9336l122.34 122.34c23.68 23.68 19.734 65.117-7.8945 92.742-15.785 14.801-35.516 23.684-54.262 23.684zm-129.25-160.82 117.41 117.41c2.9609 2.9609 7.8945 3.9453 11.84 3.9453 8.8789 0 18.746-4.9336 26.641-11.84 13.812-13.812 14.801-30.586 7.8945-37.492l-118.4-118.39-56.238-10.852z"/>
  <path d="m258.59 378.96c-10.852 0-19.734-8.8789-19.734-19.734v-61.172c0-10.852 8.8789-19.734 19.734-19.734 10.852 0 19.734 8.8789 19.734 19.734v61.172c-0.98828 11.84-9.8672 19.734-19.734 19.734z"/>
  <path d="m289.18 348.38h-62.16c-10.852 0-19.734-8.8789-19.734-19.734 0-10.852 8.8789-19.734 19.734-19.734h61.172c10.852 0 19.734 8.8789 19.734 19.734s-7.8945 19.734-18.746 19.734z"/>
 </g>
</svg><span class="side-menu__label"style=" height: 50px !important;
    line-height: 50px !important;left: 7px;position: relative;">{{__('sidebar.pres_mgmt')}}</span></a>
                        </li>
                         <li class="slide">
                            <!-- <a class="side-menu__item" data-toggle="slide" href="{{ url('physician_management') }}"><i class="side-menu__icon fa fa-user-md"></i><span class="side-menu__label">Physician Management</span></a> -->
                        </li>
                         
                        
                        <!-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-layout-accordion-separated"></i><span class="side-menu__label">Layouts</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='verticalmenu') }}" class="slide-item">Vertical-Menu</a></li>
                                <li><a href="{{ url('/' . $page='horizontalmenu') }}" class="slide-item">Horizontal-Menu</a></li>
                            </ul>
                        </li>
                        <li><h3>Widgets & Maps</h3></li>
                        <li>
                            <a class="side-menu__item" href="{{ url('/' . $page='widgets') }}"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Widgets</span></a>
                        </li>
                        <li>
                            <a class="side-menu__item" href="{{ url('/' . $page='maps') }}"><i class="side-menu__icon ti-map-alt"></i><span class="side-menu__label">Maps</span></a>
                        </li>
                        <li><h3>Elements</h3></li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-panel"></i><span class="side-menu__label">Components</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='cards') }}" class="slide-item"> Cards design</a></li>
                                <li><a href="{{ url('/' . $page='calendar') }}" class="slide-item"> Default calendar</a></li>
                                <li><a href="{{ url('/' . $page='calendar2') }}" class="slide-item"> Full calendar</a></li>
                                <li><a href="{{ url('/' . $page='chat') }}" class="slide-item"> Default Chat</a></li>
                                <li><a href="{{ url('/' . $page='notify') }}" class="slide-item"> Notifications</a></li>
                                <li><a href="{{ url('/' . $page='sweetalert') }}" class="slide-item"> Sweet alerts</a></li>
                                <li><a href="{{ url('/' . $page='rangeslider') }}" class="slide-item"> Range slider</a></li>
                                <li><a href="{{ url('/' . $page='scroll') }}" class="slide-item"> Content Scroll bar</a></li>
                                <li><a href="{{ url('/' . $page='loaders') }}" class="slide-item"> Loaders</a></li>
                                <li><a href="{{ url('/' . $page='counters') }}" class="slide-item"> Counters</a></li>
                                <li><a href="{{ url('/' . $page='rating') }}" class="slide-item"> Rating</a></li>
                                <li><a href="{{ url('/' . $page='timeline') }}" class="slide-item"> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-layers"></i><span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='alerts') }}" class="slide-item"> Alerts</a></li>
                                <li><a href="{{ url('/' . $page='buttons') }}" class="slide-item"> Buttons</a></li>
                                <li><a href="{{ url('/' . $page='colors') }}" class="slide-item"> Colors</a></li>
                                <li><a href="{{ url('/' . $page='avatarsquare') }}" class="slide-item"> Avatar-Square</a></li>
                                <li><a href="{{ url('/' . $page='avatarround') }}" class="slide-item"> Avatar-Rounded</a></li>
                                <li><a href="{{ url('/' . $page='avatarradius') }}" class="slide-item"> Avatar-Radius</a></li>
                                <li><a href="{{ url('/' . $page='dropdown') }}" class="slide-item"> Drop downs</a></li>
                                <li><a href="{{ url('/' . $page='list') }}" class="slide-item"> List</a></li>
                                <li><a href="{{ url('/' . $page='tags') }}" class="slide-item"> Tags</a></li>
                                <li><a href="{{ url('/' . $page='pagination') }}" class="slide-item"> Pagination</a></li>
                                <li><a href="{{ url('/' . $page='navigation') }}" class="slide-item"> Navigation</a></li>
                                <li><a href="{{ url('/' . $page='typography') }}" class="slide-item"> Typography</a></li>
                                <li><a href="{{ url('/' . $page='breadcrumbs') }}" class="slide-item"> Breadcrumbs</a></li>
                                <li><a href="{{ url('/' . $page='badge') }}" class="slide-item"> Badges</a></li>
                                <li><a href="{{ url('/' . $page='jumbotron') }}" class="slide-item"> Jumbotron</a></li>
                                <li><a href="{{ url('/' . $page='panels') }}" class="slide-item"> Panels</a></li>
                                <li><a href="{{ url('/' . $page='thumbnails') }}" class="slide-item"> Thumbnails</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-rocket"></i><span class="side-menu__label">Advanced Elements</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='mediaobject') }}" class="slide-item"> Media Object</a></li>
                                <li><a href="{{ url('/' . $page='accordion') }}" class="slide-item"> Accordions</a></li>
                                <li><a href="{{ url('/' . $page='tabs') }}" class="slide-item"> Tabs</a></li>
                                <li><a href="{{ url('/' . $page='chart') }}" class="slide-item"> Charts</a></li>
                                <li><a href="{{ url('/' . $page='modal') }}" class="slide-item"> Modal</a></li>
                                <li><a href="{{ url('/' . $page='tooltipandpopover') }}" class="slide-item"> Tooltip and popover</a></li>
                                <li><a href="{{ url('/' . $page='progress') }}" class="slide-item"> Progress</a></li>
                                <li><a href="{{ url('/' . $page='carousel') }}" class="slide-item"> Carousels</a></li>
                                <li><a href="{{ url('/' . $page='headers') }}" class="slide-item"> Headers</a></li>
                                <li><a href="{{ url('/' . $page='footers') }}" class="slide-item"> Footers</a></li>
                                <li><a href="{{ url('/' . $page='userslist') }}" class="slide-item"> User List</a></li>
                                <li><a href="{{ url('/' . $page='search') }}" class="slide-item">Search</a></li>
                                <li><a href="{{ url('/' . $page='cryptocurrencies') }}" class="slide-item"> Crypto-currencies</a></li>
                            </ul>
                        </li>
                        <li><h3>Charts & Tables</h3></li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='chartchartist') }}" class="slide-item">Chart Js</a></li>
                                <li><a href="{{ url('/' . $page='chartflot') }}" class="slide-item"> Flot Charts</a></li>
                                <li><a href="{{ url('/' . $page='chartechart') }}" class="slide-item"> ECharts</a></li>
                                <li><a href="{{ url('/' . $page='chartmorris') }}" class="slide-item"> Morris Charts</a></li>
                                <li><a href="{{ url('/' . $page='chartnvd3') }}" class="slide-item"> Nvd3 Charts</a></li>
                                <li><a href="{{ url('/' . $page='charts') }}" class="slide-item"> C3 Bar Charts</a></li>
                                <li><a href="{{ url('/' . $page='chartline') }}" class="slide-item"> C3 Line Charts</a></li>
                                <li><a href="{{ url('/' . $page='chartdonut') }}" class="slide-item"> C3 Donut Charts</a></li>
                                <li><a href="{{ url('/' . $page='chartpie') }}" class="slide-item"> C3 Pie charts</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-clipboard"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='tables') }}" class="slide-item">Default table</a></li>
                                <li><a href="{{ url('/' . $page='datatable') }}" class="slide-item"> Data Tables</a></li>
                            </ul>
                        </li>
                        <li><h3>Forms & Icons</h3></li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-receipt"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='formelements') }}" class="slide-item"> Form Elements</a></li>
                                <li><a href="{{ url('/' . $page='form') }}" class="slide-item"> Form Editor</a></li>
                                <li><a href="{{ url('/' . $page='formwizard') }}" class="slide-item"> Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-shield"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='icons01') }}" class="slide-item"> Font Awesome</a></li>
                                <li><a href="{{ url('/' . $page='icons02') }}" class="slide-item"> Material Design Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons03') }}" class="slide-item"> Simple Line Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons04') }}" class="slide-item"> Feather Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons05') }}" class="slide-item"> Ionic Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons06') }}" class="slide-item"> Flag Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons07') }}" class="slide-item"> pe7 Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons08') }}" class="slide-item"> Themify Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons09') }}" class="slide-item">Typicons Icons</a></li>
                                <li><a href="{{ url('/' . $page='icons10') }}" class="slide-item">Weather Icons</a></li>
                            </ul>
                        </li>
                         -->
                         <!-- <li><h3>Pages</h3></li> -->
                       <!--  <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-files"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a> -->
                            <!-- <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='profile') }}" class="slide-item"> Profile</a></li>
                                <li><a href="{{ url('/' . $page='editprofile') }}" class="slide-item"> Edit Profile</a></li>
                                <li><a href="{{ url('/' . $page='email') }}" class="slide-item"> Mail-Inbox</a></li>
                                <li><a href="{{ url('/' . $page='emailservices') }}" class="slide-item"> Mail-Compose</a></li>
                                <li><a href="{{ url('/' . $page='emailview') }}" class="slide-item"> Mail-View</a></li>
                                <li><a href="{{ url('/' . $page='gallery') }}" class="slide-item"> Gallery</a></li>
                                <li><a href="{{ url('/' . $page='about') }}" class="slide-item"> About Company</a></li>
                                <li><a href="{{ url('/' . $page='services') }}" class="slide-item"> Services</a></li>
                                <li><a href="{{ url('/' . $page='faq') }}" class="slide-item"> FAQS</a></li>
                                <li><a href="{{ url('/' . $page='terms') }}" class="slide-item"> Terms</a></li>
                                <li><a href="{{ url('/' . $page='invoice') }}" class="slide-item"> Invoice</a></li>
                                <li><a href="{{ url('/' . $page='pricing') }}" class="slide-item"> Pricing Tables</a></li>
                                <li><a href="{{ url('/' . $page='blog') }}" class="slide-item"> Blog</a></li>
                                <li><a href="{{ url('/' . $page='empty') }}" class="slide-item"> Empty Page</a></li>
                                <li><a href="{{ url('/' . $page='construction') }}" class="slide-item"> Under Construction</a></li>
                            </ul> -->
                       <!--  </li> -->
                        <!-- <li><h3>E-Commerce</h3></li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='shop') }}" class="slide-item"> Shop</a></li>
                                <li><a href="{{ url('/' . $page='shopdescription') }}" class="slide-item">Product Details</a></li>
                                <li><a href="{{ url('/' . $page='cart') }}" class="slide-item"> Shopping Cart</a></li>
                            </ul>
                        </li>
                         --><!-- <li><h3>Custom & Error Pages</h3></li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-settings"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='login') }}" class="slide-item"> Login</a></li>
                                <li><a href="{{ url('/' . $page='register') }}" class="slide-item"> Register</a></li>
                                <li><a href="{{ url('/' . $page='forgotpassword') }}" class="slide-item"> Forgot Password</a></li>
                                <li><a href="{{ url('/' . $page='lockscreen') }}" class="slide-item"> Lock screen</a></li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-info-alt"></i><span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="{{ url('/' . $page='error400') }}" class="slide-item"> 400</a></li>
                                <li><a href="{{ url('/' . $page='error401') }}" class="slide-item"> 401</a></li>
                                <li><a href="{{ url('/' . $page='error403') }}" class="slide-item"> 403</a></li>
                                <li><a href="{{ url('/' . $page='error404') }}" class="slide-item"> 404</a></li>
                                <li><a href="{{ url('/' . $page='error500') }}" class="slide-item"> 500</a></li>
                                <li><a href="{{ url('/' . $page='error503') }}" class="slide-item"> 503</a></li>
                            </ul>
                        </li>
                        <li class="slide ">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-layout-grid2"></i><span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li class="sub-slide">
                                    <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level 1</span><i class="sub-angle fa fa-angle-right"></i></a>
                                    <ul class="sub-slide-menu">
                                        <li><a class="sub-slide-item" href="#">Level 1.0</a></li>
                                        <li><a class="sub-slide-item" href="#">Level 1.1</a></li>
                                        <li class="sub-slide2">
                                            <a class="sub-side-menu__item" href="#" data-toggle="sub-slide2"><span class="sub-side-menu__label2">Level 1.2</span><i class="sub-angle2 fa fa-angle-right"></i></a>
                                            <ul class="sub-slide-menu2">
                                                <li><a href="#" class="sub-slide-item2">Level 1.2.1</a></li>
                                                <li><a href="#" class="sub-slide-item2">Level 1.2.2</a></li>
                                                <li><a href="#" class="sub-slide-item2">Level 1.2.3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="slide-item" href="#">Level 2</a></li>
                                <li><a class="slide-item" href="#">Level 3</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </aside>
<!--/APP-SIDEBAR-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">

  
        let user_data=localStorage.getItem('user_det');
        var obj = JSON.parse(user_data);
        var username=obj.phy_first_name +' '+ obj.phy_last_name;
        console.log(username)
        document.getElementById("usr_name").style.fontSize = "large";
        document.querySelector(".user-info").style.color="#ffffff";
        document.getElementById("usr_name").innerText=username;
         // let user=document.querySelector('#usr_name');
         


           
  
</script>

<script>

  var base_path = "http://3.220.132.29/medpro/";
  var api_url = "http://3.220.132.29:3000/api/";
  var image1='http://3.220.132.29/medpro/assets/images/pngs/doc_image.png';

  let user_data4 = localStorage.getItem('user_det');
  var obj = JSON.parse(user_data4);
  //  console.log("obj",obj)
  var phy_id = obj._id;
  
  $.ajax({
    url: api_url + "phyViewProfile",
    type: "post",
    dataType: 'json',
    data: {
      physician_id: phy_id,
    },

  }).done(function(res) {
    console.log('response',res)
            if(res.status==true){
              $('#profile_id').attr('src',res.data.phy_img);  
            }
            else{
              $('#profile_id').attr('src',image1);    
            }
    // alt="profilepic
     // }else{
     //    let img='https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png';
     //     $('#profile_id').attr('src',img);
     // }
   
   
  });
</script>