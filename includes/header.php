<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Scotch">
	<title>Task Dashboard | To upload File to sql</title>
    <!-- load bootstrap from a cdn -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- header section start-->
<div class="primary-header">
        <div class="row m-0 align-items-center">
            <div class="primary-menu">
                <div class="row m-0">
                    <div class="ham-menu">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <div class="menu-header">
                        <div class="pull-right close text-white">
                            &times;
                        </div>
                        <div class="row m-0">
                            <div class="avatar">
                                <i class="fa fa-user-circle-o"></i>
                            </div>
                            <div class="profile-section">
                                <label class="profile-name" style="text-transform:uppercase"><?php echo $_SESSION['email']; ?></label>
                            </div>
                        </div>
                        <div class="row m-0 branch-section">
                            <select class="form-control branch-select change-branch">
                                <option value="">Select your Branch</option>
                                <option value="branch1">Branch1</option>
                                <option value="branch2">Branch2</option> 
                                <option value="branch3">Branch3</option> 
                                <option value="branch4">Branch4</option> 
                            </select>
                        </div>
                    </div>
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <p class="version">Task Webapp</p>
                </div>
            </div>
            <div class="logo">
                <h2 class="text-white"><i>Task WebApp</i></h2>
            </div>
        </div>
        <div class="row secondary-nav">
            <div class="col-md-2 p-0 col-3">
                <select class="form-control valuation" name="" id="">
                    <option value="">Select Document</option>
                    <option value="doc">Doc1</option>
                    <option value="doc1">Doc2</option>
                </select>
            </div>
            <div class="col-md-10 p-0 col-6">
                <input type="search" name="" class="search form-control" id="" placeholder="Search"><span class="search-icon"><i class="fa fa-search"></i></span>
            </div>
        </div>
    </div>
    <!-- header section ends -->
    <?php 
        include('footer.php');
    ?>