<?php

session_start();

require_once ('../includes/auto-checker.php');
require_once ('../classes/basic.database.php');

$girlsQuery = $db->query("SELECT id, firstname, lastname, age, skin_type, breast_size, waist_line,  height, rate, image FROM girls");

while($row = $girlsQuery->fetchObject()){
    $girls[] = $row;
}



    require_once ('../includes/header.php');
    require_once ('../includes/topnav.php');

?>

  <main>
    <article>


      <section class="section hero" id="home">
        <div class="container">

          <div class="hero-content">
            <h2 class="h1 hero-title">Looking for your ideal girlfriend?</h2>

            <p class="hero-text">
              You'll see here different kinds of Girlfriends you prefer.
            </p>
          </div>

          <div class="hero-banner"></div>

          <form action="connect.php" method="post" class="hero-form">

            <div class="input-wrapper">
              <label for="input-1" class="input-label">Age, Color</label>

              <input type="text" id="input-1" class="input-field"
                placeholder="What are you looking for?">
            </div>

            <div class="input-wrapper">
              <label for="input-2" class="input-label">hourly rate</label>

              <input type="text" name="monthly-pay" id="input-2" class="input-field" placeholder="Add an amount in ₱">
            </div>

            <div class="input-wrapper">
              <label for="input-3" class="input-label">Body type</label>

              <input type="text" name="year" id="input-3" class="input-field" placeholder="Add body type">
            </div>
          </form>

        </div>
      </section>

      <section class="section featured-gf" id="featured-gf">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Girlfriends for Hire</h2>

            <a href="#" class="featured-gf-link">
              <span>View more</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>

          <ul class="featured-gf-list">

          <?php foreach($girls as $girl): ?>
            <li>
              <div class="featured-gf-card">

                <figure class="card-banner">
                  <img src="<?php echo $girl->image; ?>" alt="" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#"><?php echo $girl->firstname; ?> <?php echo $girl->lastname; ?></a>
                    </h3>

                    <data class="year" value="2021"><?php echo $girl->age; ?></data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People Liked</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="Diamond-outline"></ion-icon>

                      <span class="card-item-text">Model</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <span class="card-item-text">Ratings</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>₱<?php echo $girl->rate; ?></strong> / Hours
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn"><a href="renting.php?girl=<?php echo $girl->id; ?>">Rent now</a></button>
                  </div>

                </div>

              </div>
            </li>
        <?php endforeach; ?>

          </ul>

        </div>
      </section>






      <!--
        - #GET START
      -->

      <section class="section get-start">
        <div class="container">

          <h2 class="h2 section-title">Get started with 4 simple steps</h2>

          <ul class="get-start-list">

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-1">
                  <ion-icon name="person-add-outline"></ion-icon>
                </div>

                <h3 class="card-title"><a href="../rental/login/login.php">Log-in or Sign in</a></h3>
                


              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-2">
                  <ion-icon name="person-add-outline"></ion-icon>
                </div>

                <h3 class="card-title"><a href="../rental/profile/profile.php">Create Profile</a></h3>

                

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-3">
                  <ion-icon name="person-outline"></ion-icon>
                </div>

                <h3 class="card-title">Match with seller</h3>


              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-4">
                  <ion-icon name="card-outline"></ion-icon>
                </div>

                <h3 class="card-title">Make a deal</h3>


              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title">Our Blog</h2>

          <ul class="blog-list has-scrollbar">

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/model/group of wamen.jpg" alt="Opening of new offices of the company" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Company</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Pick your poison 😉 ....................</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./readme-images/17uurcel21461.jpg" alt="What cars are most vulnerable" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Refund</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">What? Your Gf ran away? XD not our problem</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/model/BelleDelphine.jpg" alt="Statistics showed which average age" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Girls</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Statistics showed which average age</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/model/unnamed.jpg" alt="What´s required when renting a car?" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Women</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">What´s required when renting a Gal?</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/model/screen-0.jpg" alt="New rules for handling our gals" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Company</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">New rules for handling our Gals</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>

<?php

    require_once ('../includes/footer.php');

?>


  <script src="../js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>