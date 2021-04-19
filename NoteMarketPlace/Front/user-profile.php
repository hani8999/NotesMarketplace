<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>


<body>

    <div id="user-profile">
        <!-- Header -->
        <div class="white-nav style-nav">
            <header class="site-header">
                <div class="header-wrapper">

                    <!-- Mobile Menu Open Button-->
                    <span id="mobile-nav-open-btn">&#9776;</span>

                    <div class="logo-wrapper">
                        <a href="homepage.php">
                            <img src="images/Logo/dark-logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="navigation-wrapper">
                        <nav class="main-navigation">
                            <ul class="menu-navigation">
                                <li>
                                    <a href="search-notes.php">Search Notes</a>
                                </li>
                                <li>
                                    <a href="Dashboard-1.php">Sell Your Notes</a>
                                </li>
                                <li>
                                    <a href="buyer-requests.php">Buyer Requests</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <li>
                                    <a href="Contact-us.php">Contact Us</a>
                                </li>
                                <li class="logged-in-user-photo-li">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="logged-in-user-photo">
                                                <img src="images/User-Profile/user-img.png" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item active" href="user-profile.php">My Profile</a>
                                            <a class="dropdown-item" href="download-notes.php">My Downloads</a>
                                            <a class="dropdown-item" href="sold-notes.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="rejected-notes.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="change-password.php">Change Password</a>
                                            <a class="dropdown-item logout-btn-dropdown" href="login.php">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Logout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Mobile Menu-->
                    <div id="mobile-nav">
                        <img class="logo-in-mobile-menu" src="images/Logo/dark-logo.png" alt="Notes Logo">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>

                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li>
                                    <a href="search-notes.php">Search Notes</a>
                                </li>
                                <li>
                                    <a href="Dashboard-1.php">Sell Your Notes</a>
                                </li>
                                <li>
                                    <a href="buyer-requests.php">Buyer Requests</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <li>
                                    <a href="Contact-us.php">Contact Us</a>
                                </li>
                                <li class="logged-in-user-photo-li">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="logged-in-user-photo">
                                                <img src="images/User-Profile/user-img.png" alt="User Photo" class="rounded-circle">
                                            </div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item active" href="user-profile.php">My Profile</a>
                                            <a class="dropdown-item" href="download-notes.php">My Downloads</a>
                                            <a class="dropdown-item" href="sold-notes.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="rejected-notes.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="change-password.php">Change Password</a>
                                            <a class="dropdown-item logout-btn-dropdown" href="login.php">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </header>
        </div>
        <!-- Header ends -->

        <!-- background-->
        <!-- back img-->
        <div class="top-heading">
            <p class="text-center">User Profile</p>
        </div>
        <!-- back img-->

        <!-- Heading-1-->
        <div id="form-heading-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Basic Profile Details
                    </div>
                </div>
            </div>
        </div>
        <!--Form-1-->
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name *</label>
                                <input type="text" class="form-control input-light-color" placeholder="Enter your first name">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="right-content">Last Name *</label>
                                <input type="text" class="form-control input-light-color right-content" placeholder="Enter your last name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Email *</label>
                                <input type="email" class="form-control input-light-color" placeholder="Enter your email address">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="right-content">Date Of Birth</label>
                                <input type="date" class="form-control input-light-color right-content">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control arrow-down input-light-color">
                                        <option selected disabled>Select your gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="right-content">Phone Number</label>
                                <div class="form-row number-box">
                                    <div class="col-4">
                                        <select class="form-control input-light-color arrow-down right-content">
                                            <option>+91</option>
                                            <option>+975</option>
                                            <option>+86</option>
                                            <option>+1</option>
                                            <option>+98</option>
                                            <option>+61</option>
                                            <option>+81</option>
                                            <option>+92</option>
                                            <option>+65</option>
                                            <option>+66</option>
                                            <option>+886</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="tel" class="form-control right-content" placeholder="Enter your phone number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Profile Picture</label>
                                <div class="user-profile-photo-uploader">
                                    <label for="image-uploader"><img src="images/User-Profile/upload.png" title="Click here to upload your photo" alt="Upload your photo here"></label>
                                    <input id="image-uploader" class="form-control" type="file">
                                    <p>Upload a picture</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--Address part-->
        <div id="form-heading-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Address details
                    </div>
                </div>
            </div>
        </div>
        <!--Form-2-->
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Address Line 1 *</label>
                                <input type="text" class="form-control input-light-color" placeholder="Enter your address">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="right-content">Address Line 2</label>
                                <input type="text" class="form-control input-light-color right-content" placeholder="Enter your address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>City *</label>
                                <input type="text" class="form-control input-light-color" placeholder="Enter your city">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="right-content">State *</label>
                                <input type="text" class="form-control input-light-color right-content" placeholder="Enter your state">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>ZipCode *</label>
                                <input type="number" class="form-control input-light-color" placeholder="Enter your zipcode">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="right-content">Country *</label>
                                <select class="form-control input-light-color arrow-down right-content">
                                    <option selected disabled>Select your country</option>
                                    <option>Australia</option>
                                    <option>Bhutan</option>
                                    <option>China</option>
                                    <option>Canada</option>
                                    <option>Iran</option>
                                    <option>India</option>
                                    <option>Japan</option>
                                    <option>Pakistan</option>
                                    <option>Singapore</option>
                                    <option>Thailand</option>
                                    <option>Taiwan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--University infomation-->
        <div id="form-heading-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        University and College Information
                    </div>
                </div>
            </div>
        </div>
        <!--Form-3-->
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>University</label>
                                <input type="text" class="form-control input-light-color" placeholder="Enter your university">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="right-content">College</label>
                                <input type="text" class="form-control input-light-color right-content" placeholder="Enter your college">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" id="user-profile-submit-btn" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <!-- background-->

    <!-- Footer-->
    <?php include 'footer.php'; ?>
    <!-- Footer End-->


    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Popper Js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>

</body>

</html>