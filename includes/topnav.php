<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#home" class="logo">
        <img src="./assets/images/Green_Waste_Busters_Recycling_Symbol_-_Reduce_and_Recycle_Logo_Design_2.png" alt="LFU logo">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="../user/homepage.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#featured-gf" class="navbar-link" data-nav-link>Explore Girlfriend</a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>About us</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

        </ul>
      </nav>

      <div class="header-actions">


        <span class="user-name" id="aria-label-txt"><?php echo $_SESSION['fullname']; ?></span>


        <a href="#featured-gf" class="btn" aria-labelledby="aria-label-txt">

        <span id="aria-label-txt">Explore Girlfriend</span>
        </a>


        <a href="../login/logout.php" class="btn" aria-labelledby="aria-label-txt">
        <span id="aria-label-txt">Logout</span>
        </a>

        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </div>

    </div>
  </header>