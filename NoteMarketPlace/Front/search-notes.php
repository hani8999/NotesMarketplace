<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

    <!-- Header -->
    <div class="white-nav style-nav">
        <header class="site-header">
            <div class="header-wrapper">

                <!-- Mobile Menu Open Button -->
                <span id="mobile-nav-open-btn">&#9776;</span>

                <div class="logo-wrapper">
                    <a href="homepage.php">
                        <img src="images/Logo/dark-logo.png" alt="Logo">
                    </a>
                </div>
                <div class="navigation-wrapper">
                    <nav class="main-navigation">
                        <ul class="menu-navigation">
                            <li class="active">
                                <a href="search-notes.php">Search Notes</a>
                            </li>
                            <li>
                                <a href="Dashboard-1.php">Sell Your Notes</a>
                            </li>
                            <li>
                                <a href="faq.php">FAQ</a>
                            </li>
                            <li>
                                <a href="Contact-us.php">Contact Us</a>
                            </li>
                            <li>
                                <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-nav">
                    <img class="logo-in-mobile-menu" src="images/Logo/dark-logo.png" alt="Logo">
                    <!-- Mobile Menu Close Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="nav">
                            <li class="active">
                                <a href="search-notes.php">Search Notes</a>
                            </li>
                            <li>
                                <a href="Dashboard-1.php">Sell Your Notes</a>
                            </li>
                            <li>
                                <a href="faq.php">FAQ</a>
                            </li>
                            <li>
                                <a href="Contact-us.php">Contact Us</a>
                            </li>
                            <li>
                                <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Header ends -->


    <!---- Search Page ---->
    <div id="search-notes">

        <!-- background text -->
        <div class="top-heading">
            <p class="text-center">Search Notes</p>
        </div>
        <!-- back text ends-->

        <!---- Search Options ---->

        <div id="search-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <h4>Search and Filter notes</h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12 col-sm-12 col-12">
                        <div id="search-img">
                            <i class="fa fa-search"></i>
                            <input id="search-details" type="text" class="form-control input-light-color" placeholder="Search your notes here...">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <div id="search-filters">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12 search-type">
                                    <select class="text-hidden form-control arrow-down">
                                        <option selected disabled>Select type</option>
                                        <option>Free</option>
                                        <option>Paid</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12 search-type">
                                    <select class="text-hidden form-control arrow-down">
                                        <option selected disabled>Select category</option>
                                        <option>Hard-Copy</option>
                                        <option>Hand-written</option>
                                        <option>PDF</option>
                                        <option>Scanned</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12 search-type">
                                    <select class="text-hidden form-control arrow-down">
                                        <option selected disabled>Select university</option>
                                        <option>Amity University</option>
                                        <option>Gujarat University</option>
                                        <option>Nirma University</option>
                                        <option>Manipur University</option>
                                        <option>Delhi Technological University</option>
                                        <option>MS University</option>
                                        <option>VIT University</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12 search-type">
                                    <select class="text-hidden form-control arrow-down">
                                        <option selected disabled>Select course</option>
                                        <option>Automobile Engineering</option>
                                        <option>Aeronautical Engineering</option>
                                        <option>Biotechnology Engineering</option>
                                        <option>Civil Engineering</option>
                                        <option>Computer Science and Engineering</option>
                                        <option>Electrical Engineering</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Petroleum Engineering</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12 search-type">
                                    <select class="text-hidden form-control arrow-down">
                                        <option selected disabled>Select country</option>
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
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12 search-type">
                                    <select class="text-hidden form-control arrow-down">
                                        <option selected disabled>Select rating</option>
                                        <option>5</option>
                                        <option>4</option>
                                        <option>3</option>
                                        <option>2</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- Search Options Ends ---->

        <!------ Notes Details ------>

        <div id="search-results">
            <div class="container">
                <div class="row">
                    <div id="search-result-heading">
                        <div class="col-md-12 col-md-12 col-sm-12 col-12">
                            <h2>Total 18 notes</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/1.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">Computer Operating System - Final Exam Book With Paper Solution</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>

                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/2.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">Computer Science</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/3.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">Basic Computer Engineering Tech India Publication Series</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/4.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">Computer Science Illuminted - Seventh Edition</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/5.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">The Principles of Computer Hardware - Oxford</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/6.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">The Computer Book</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/1.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">Computer Operating System - Final Exam Book With Paper Solution</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Search/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/2.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">Computer Science</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="note-table">
                            <img src="images/Searchpage/3.jpg" alt="book">
                            <div class="note-details">
                                <p class="note-title">Basic Computer Engineering Tech India Publication Series</p>
                                <p class="note-icon"><span><img src="images/Searchpage/university.png" alt=""></span>University of California, US</p>
                                <p class="note-icon"><span><img src="images/Searchpage/pages.png" alt=""></span>204 Pages</p>
                                <p class="note-icon"><span><img src="images/Searchpage/date.png" alt=""></span>Thu, Nov 26 2020</p>
                                <p class="note-icon user-text"><span><img src="images/Searchpage/flag.png" alt=""></span>5 Users marked this note as inappropriate</p>
                                <div class="notes-rating">
                                    <div class="col-md-7 col-sm-8 col-8">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-4">
                                        <p class="reviews">100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!------ Notes Details Ends ------>

        <!-- Pagination -->

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Previous">
                        <img src="images/Pagination/left-arrow.png" alt="left-arrow">
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Next">
                        <img style="color: white;" src="images/Pagination/right-arrow.png" alt="right-arrow">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Pagination Ends -->
    </div>

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