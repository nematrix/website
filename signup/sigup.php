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
            <a href="Login.php" class="Login_Link">Login</a>
          </aside>
          <form class="signup_form" action="sigup.php" method="post">

            <article class="profile_picture">
                <img src="profile.jpg" alt="thumbnail" />
            </article>

                <!--User_profile-->
            <article class="User_profile"/>
                <!-- Firstname -->
                <label class="Firstname" for="Firstname">Firstname: </label>
                <input class="Firstname" type="text" name="fname" placeholder="Firstname" />
                <span id="Firstname_note"></span>
                <span id="Firstname_fill"></span>
                <!-- Lastname -->
                <label class="Lastname" for="Lastname">Lastname: </label>
                <input class="Lastname" type="text" name="Lname" placeholder="Lastname">
                <span id="Lastname_note"></span>
                <span class="To_shopDetatils" type="button"><i class="fa fa-chevron-right"></i></span>
              </article>


            <!-- Shop_details-->
          <article class="Shop_details">

                <label class="Shopname" for="Shopname">Shopname</label>
                <input class="Shopname" type="text" name="Shopname" placeholder="Shopname" />
                <span id="Shopname_note"></span>
                <!--Location-->
                <label class="Location" for="Location">Location</label>
                <input class="Location" type="text" name="Location" placeholder="Location" />
                <span id="Locationame_note"></span>
                <span class="To_communication" type="button"><i class="fa fa-chevron-right"></i></span>

            </article>

            <!--commnucation-->
            <article class="commnucation">
                <label class="Phonenumber" for="Phonenumber">PhoneNumber</label>
                <input class="Phonenumber" type="tel" name="Phonenumber" placeholder="Phonenumber">
                <span id="PhoneNumbername_note"></span>
                <!--Email-->
                <label class="emai" for="Email">Email</label>
                <input class="emai" type="email" name="Email" placeholder="Email">
                <span id="email_note"></span>
                <span class="To_security" type="button"><i class="fa fa-chevron-right"></i></span>

            </article>

            <!--password-->
            <article class="security">

                <label class="password" for="password">ShopKeys</label>
                <input class="password" type="password" name="Shopkeys_1" placeholder="Keys">
                <!--Re-password-->
                <label class="Re_password" for="password">ShopKeys</label>
                <input class="Re_password" type="password" name="shopkeys" placeholder="Re-key">
                <button type="submit" name="submit" class="submit">signup</button>

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
