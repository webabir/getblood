<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="<?php echo base_url(); ?>" class="navbar-brand d-flex d-lg-none me-3">
        <h2 class="text-primary mb-0"><i class="fas fa-fire"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <!-- <a href="<?php echo base_url(); ?>request" class="notification">
        <i class="fas fa-bell"></i>
    </a> -->
    
    <div class="navbar-nav align-items-center ms-auto">
        <?php
        if (isset($_SESSION['admin'])) {
            echo ' <span style="color: #2db9b2;">Admin</span>';
        }
        ?>
        <?php if (isset($_SESSION['username'])) { ?>
            <div class="nav-item dropdown">

                <a href="#" class="nav-link dropdown-toggle md-ripples" data-bs-toggle="dropdown">
                    <span class="d-lg-inline-flex">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                            // redirect('dashboard');
                        } else {
                            // redirect(base_url());
                        }

                        ?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="<?php echo base_url(); ?>user-profile/<?php echo $_SESSION['id']; ?>" class="dropdown-item py-3">My Profile</a>
                    <hr class="m-0">
                    <a href="<?php echo base_url(); ?>logout" class="dropdown-item py-3">Log Out</a>
                </div>
            </div>
        <?php } else { ?>
            <div class="nav-link py-2 my-1">
                <a class="btn btn-primary border-0  md-ripples py-1 me-1 fs-12" href="<?php echo base_url('login-page') ?>">Login</a>
                <a class="btn btn-success border-0  md-ripples py-1 fs-12" href="<?php echo base_url('signup') ?>">Signup</a>
            </div>
        <?php } ?>
    </div>
</nav>
<!-- Navbar End -->