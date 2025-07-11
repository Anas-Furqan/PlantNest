<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/catalog/logo.png">
    <!-- <link href="image/catalog/cart.png" rel="icon" /> -->
    <title>Plant Nest | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="{{URL::TO('/')}}" class="logo">
					<img src="../assets/image/catalog/logo.png" width="35" height="35" alt=""> <span>Plant Nest</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
              
       
           
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
				
                        <li class="submenu">
                            <a href="#"><i class="fa fa-list-alt"></i> <span> Category</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{URL::TO('/categoryinsert')}}">Add Product Category</a></li>
                                <li><a href="{{URL::TO('/addaccessoriescat')}}">Add Accessories Category</a></li>
                                <li><a href="{{URL::TO('/fetcgcategory')}}">Delete Product Category</a></li>
                                <li><a href="{{URL::TO('/accdelcate')}}">Delete Accessories Category</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-product-hunt"></i> <span> Products</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{URL::TO('/allproducts')}}">Products</a></li>
                                <li><a href="{{URL::TO('/addproduct')}}">Insert Product</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-briefcase"></i> <span> Accessories</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{URL::TO('/allaccessories')}}">Accessories</a></li>
                                <li><a href="{{URL::TO('/addaccess')}}">Insert Accessories</a></li>
                            </ul>
                        </li>
					
                        <li>
                            <a href="{{URL::TO('/usersregistered')}}"><i class="fa fa-user"></i> <span>Users</span></a>
                        </li>
						
						
                      
                    
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">

@yield('admin')                </div>
		
		
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="admin/assets/js/jquery-3.2.1.min.js"></script>
	<script src="admin/assets/js/popper.min.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/jquery.slimscroll.js"></script>
    <script src="admin/assets/js/Chart.bundle.js"></script>
    <script src="admin/assets/js/chart.js"></script>
    <script src="admin/assets/js/app.js"></script>

</body>



</html>