
<nav class="navbar navbar-expand-lg sticky-top">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>

               <a class="navbar-brand d-none d-lg-inline-block" href="#">
               <img src="views/images/new-logo.png" alt="" width="50px" height="50px"/>
               <a id="blog-name"> LONDON FROLICS </a>
               </a>
               

                <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                    <img src="views/images/new-logo.png" alt="" width="50px" height="50px"/>
                   
                </a>
               
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
     
            <?php
        
             
            if (isset($_SESSION['userID'])) {
//            
                ?>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                      
                        <li class="nav-item">
                            <a href="?controller=pages&action=home" class="nav-link m-2 menu-item nav-active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link m-2 menu-item nav-active">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=post&action=myposts" class="nav-link m-2 menu-item nav-active">My Posts</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=user&action=logout" class="nav-link m-2 menu-item">Logout</a>
                        </li>

                    </ul>
                </div>
                <?php
            } else {
//            
                ?>           
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        
                        <li class="nav-item">
                            <a href="?controller=pages&action=home" class="nav-link m-2 menu-item nav-active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=user&action=login" class="nav-link m-2 menu-item nav-active">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=user&action=registration" class="nav-link m-2 menu-item nav-active">Register</a>
                        </li>

                    </ul>
                </div>
                <?php
            }
            
            ?>

        </nav>
