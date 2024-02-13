<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="#">EventCart</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">EventCart</span>
                <i class='bx bx-x'></i>
            </div>
            <ul class="links" id="linkscall">
                <li><a href="../HomePage.php">Home</a></li>
                <li>
                    <a href="#">About</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="../section/about.php">About Us</a></li>
                        <li><a href="../section/partners.php">Preferred Partners</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="../package/wedding.php">Wedding</a></li>
                        <li><a href="../package/corporate.php">Corporate Events</a></li>
                        <li><a href="../package/birthday.php">Birthday</a></li>
                        <li><a href="#">Social Activities</a></li>
                    </ul>
                </li>
                <li><a href="../section/gallery.php">Gallery</a></li>
                <li><a href="review.php">Review</a></li>
                <li>
                    <a href="#">Profile</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="../admin-panel/index.php">Admin</a></li>
                        <li><a href="#">Logout</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="../section/about.php">About Us</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="user-box">
            <i class="fa-solid fa-circle-user" onclick="toggleMenu()"></i>

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="../image/review_1.png" alt="user">
                        <h3>James Aldrino</h3>
                    </div>
                    <hr>

                    <a href="#" class="sub-menu-link">
                        <img src="../image/profile.png" alt="profile">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="../image/setting.png" alt="setting">
                        <p>Setting & Privacy</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="../image/help.png" alt="help">
                        <p>Help & Support</p>
                        <span>></span>
                    </a>
                    <a href="logout.php" class="sub-menu-link">
                        <img src="../image/logout.png" alt="logout">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>

            </div>
        </div>
        <!-- <div class="search-box">
            <i class='bx bx-search'></i>

            <div class="input-box">
                <input type="text" placeholder="Search...">
            </div>
        </div> -->
    </div>
</nav>