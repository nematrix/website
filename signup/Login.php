<?php
  include ('../Model/register.php');
?>
<!doctype html>
  <html>
    <head>
      <title>signup</title>
    </head>
      <link rel="stylesheet" type="text/css" href="style.css" />

      <link rel="stylesheet" type="text/css" href="css/css/all.css"/>

    <body>
      <!-- pic_sell signup -->
      <main>
        <section>
          <aside class="Login">
            <a href="sigup.php" class="Login_Link">Signup</a>
          </aside>
          <form class="signup_form" action="Login.php" method="post">
            <article class="profile_picture">
                <img src="profile.jpg" alt="thumbnail" />
            </article>

                <!--User_profile-->
            <article class="User_profile"/>
                <!-- Firstname -->
                <label class="Firstname" for="Firstname">ShopName: </label>
                <input class="Firstname" type="text" name="Shopname" placeholder="Shop name" />
                <span id="Firstname_note"></span>
                <span id="Firstname_fill"></span>
                <!-- Lastname -->
                <label class="Lastname" for="Lastname">ShopKeys: </label>
                <input class="Lastname" type="password`" name="shop_Keys" placeholder="Shop  Keys">
                <span id="Lastname_note"></span>
                <button type="submit" name="Login">Log in </button>
              </article>

          </form>
            <!-- user_care -->
          <section class="profile_care">
          <ul>
            <li><i class="fa fa-clipboard-list"></i></li>
            <li><i class="fa fa-question-circle"></i></li>
          </ul>
        </section>

        </section>
      </main>
    </body>
      <script src="Javascript/jquery.js"></script>
      <script src="Javascript/main.js"></script>
  </html>
