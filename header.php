<html><head>
<style>
.dropdown .dropdown-menu {
  transition: all 0.5s;
  overflow: hidden;
  transform-origin: top center;
  transform: scale(1, 0);
  display: block;
  border: 0px solid transparent;
  background-color: #fff;
}

/* line 114, ../../01 cl html template/New folder/May 2019/174 Ariclaw Lawyer/Ariclaw Lawyer Html/sass/_menu.scss */
.dropdown .dropdown-menu .dropdown-item {
  font-size: 14px;
  padding: 8px 20px !important;
  color: #fff !important;
  background-color: #000;
  text-transform: capitalize;
}

/* line 125, ../../01 cl html template/New folder/May 2019/174 Ariclaw Lawyer/Ariclaw Lawyer Html/sass/_menu.scss */
.dropdown:hover .dropdown-menu {
  transform: scale(1);
}

.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: white;
}
</style>

</head><body>
<nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- <a class="" href="index.php">
             <img src="assets/img/logo.png" height="50px" width="50px"/>
            </a> -->
            <a href="index.php">
  <img src="assets/img/logo.png" alt="SMARTZDWELL" style="width:82px;height:82px;">
</a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>


                        <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="tutorial.php" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Property
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="signin.php" target: _blank> Find Property</a>
                                        <a class="dropdown-item" href="signin.php">Add Property</a>
                                       
                                    </div>
                                </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="properties.php">Property</a>
                              
                        </li> -->


                        <li class="nav-item">
                            <a class="nav-link" href="tutorials.php">Tutorial</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                        <li class="nav-item">
                          
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <!-- <div>
                    <button type="submit" class="registerbtn"><a href="registration.php">Register/login</a></button></div>
                </div> -->
            </div>

        </div>
    </nav>
    

     <!-- Modal -->
     <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

