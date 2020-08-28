<?php
  include('Model/index.php');
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8"/>
<head>
   <title>PicSell</title>
        <!-- No zoom out but fit the screen -->
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
          <!--Main style-->
   	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <!--font_Awwesome-->
        <link rel="stylesheet" type="text/css" href="css/css/all.css"/>
        <!--Responsive sty\ -->
    <link rel="stylesheet" type="text/css" href="css/control.css" media="all">
        <!-- respond screen view -->
</head>
<body>
  <!-- Page header -->
  <header class="nav_header">
    <h1 class="logo">
      <img src = "image/company.jpg" placeholder="thumbail" />
      <input type="search" placeholder="search" />
      <button  type="submit" class="search_btn">
        <i class="fa fa-search"></i>
      </button>
    </h1>
    <nav class="Menu">
      <ul class="nav_icons">
        <li class="sym_icons">
        <a href="index.php" class="link_icon">
          <i class="fa fa-store"></i>
        </a>
      </li>
        <li class="sym_icons">
          <a href="subpages/Shops.html" class="link_icon">
            <i class="fa fa-building"></i>
          </a>
      </li>
        <li class="sym_icons">
          <a href="subpages/Progress.html" class="link_icon">
            <i class="fa fa-briefcase" class="link_icon"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="subpages/Markets.php" class="link_icon">
            <i class="fa fa-users"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="subpages/notification.php" class="link_icon">
            <i class="fa fa-bell"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="subpages/activeUsers.php" class="link_icon">
            <i class="fa fa-user"></i>
          </a>
        </li>
        <li class="sym_icons">
          <a href="subpages/userConfig.php" class="link_icon">
            <i class="fa fa-cogs"></i>
          </a>
        </li>
      </ul>
    </nav>
    </nav>
  </header>
  <!-- page container -->
  <main>
    <?php
        echo $shop_name,  ' Good Morning ';
    ?>
    <section class="file_upload">
      <i class="fa fa-camera-retro"></i>
    </section>
    <!-- file upload -->
    <section class="ads_details">
        <header class="ads_close">
          <span class="close">+</span>
        </header>
        <nav class="upload_setup">
          <ul class="upload_fill">
          <h1 class="ads_Title"></h>1
          <li>
            <label for="text">Name</label>
            <input type="text" class="Name" placeholder="product name">
          </li>
          <li>
            <label for="text">price</label>
            <input type="text" class="price" placeholder="price">
          </li>
          <li class="upload">
            <input type="file" id="file" placeholder="upload media">
            <label for="file" class="files_label">choose an file<i class="fa fa-upload"></i></label>
          </li>
          <li>
            <label for="text">Brief Description</label>
            <input type="text" class="text_area" placeholder="ads Description">
          </li>
          <ul>
        </nav>
        <article class="ads_preview">
          <i class="fa fa-cog"></i>
        </article>
        <button type="submit" class="button_upload"><i class="fa fa-plus-circle"></i></button>
          <section class="ads_settings">
            <ul class="ads_set">
              <p class="ads_set_close">+</p>
              <li class="font_size">font size</li>
              <li class="font_color">text color</li>
              <li class="ads_frame">ads frame</li>
            </ul>
          </section>
    </section>
  <section class="container">
    <!--picture view -->
    <article class="products">
      <!-- container slides -->
      <article class="imageProducts" name="shop_id">
        <article class="shop_details">
          <img src="image/kitchen.jpg" alt="P"/>
          <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
          <p class="shop_id"><?php echo $shop_name ?>|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
        </article>
              <ul class="product_image">
                <li class="product_show">
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                      <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                      <!-- product details -->
                      <section class="product_details">
                        <ul class="info_pro">
                          <li><i class="fa fa-info-circle"></i></li>
                        </ul>
                      </section>
                      <!-- product list -->
                      <article class="product_info">
                        <table class="product_info_list">
                          <tr>
                          <th>product info</th>
                          </tr>
                          <tr>
                            <td>Visit</td>
                          </tr>
                          <tr>
                            <td>Composite</td>
                          </tr>
                          <tr>
                            <td>product info</td>
                          </tr>
                        </table>
                        <em class="close">+</em>
                      </article>
                      <img src="image/milk.jpg" alt="thumbnail" class="productPhotos"/>
                  </section>
                </li>
                <li class="productGloceries">
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                  <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                      <section class="product_details">
                        <ul class="info_pro">
                          <li><i class="fa fa-info-circle"></i></li>
                        </ul>
                      </section>
                  <img src="image/out.jpg" alt="thumbnail" class="productPhotos"/>
                  </section>
                </li>
                <li class="productGloceries">
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                      <section class="product_details">
                        <ul class="info_pro">
                          <li><i class="fa fa-info-circle"></i></li>
                        </ul>
                      </section>
                    <img src="image/butter.jpg" alt="thumbnail" class="productPhotos"/>
                  </section>
                </li>
                <li class="productGloceries">
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                      <section class="product_details">
                        <ul class="info_pro">
                          <li><i class="fa fa-info-circle"></i></li>
                        </ul>
                      </section>
                      <img src="image/bread.jpg" alt="thumbnail" class="productPhotos"/>
                  </section>
                </li>
                <li class="productGloceries">
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>

                    <section class="product_details">
                      <ul class="info_pro">
                        <li><i class="fa fa-info-circle"></i></li>
                      </ul>
                    </section>
                      <img src="image/cola.jpg" alt="thumbnail" class="productPhotos"/>
                  </section>
                </li>
              </ul>
               <!-- End of body(container)-->
               <button class="Next">Next</button>
               <button class="prev">Prev</button>
               <!-- Body Expression on product -->
                      <p class="status">
                        <i class="fa fa-store-alt"></i>
                        <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                        <i class="fa fa-envelope" onclick="ColorChange()"></i>
                        <i class="fa fa-credit-card"></i>
                        <i class="fa fa-eye-slash"></i>
                      </P>
                <!--End of body Expression on product -->
    </article>
      <!-- End of preview -->
    <article class="imageProducts">
      <article class="shop_details">
        <img src="image/out.jpg" alt="P"/>
        <h3>Cain superite <i class="fa fa-unlock-alt" aria-hidden="true"></i></h3>
        <p>General Dealers| Email: Cain@gmail.com| call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm open</p>
      </article>
          <ul class="sky_way">
            <li class="">
              <section class="product_price">
                <article class="item_price">
                  <p class="price_tag">
                    peanut <br>
                    <span class="currency">K</span>
                    4000 <br>
                    only
                  </p>
                  <i class="fa fa-tags"></i>
                </article>
                <p class="remaining_products">56</p>
                    <i class="fa fa-shopping-cart"></i>
                <img src="image/man.jpg" alt="thumbnail"/>
              </section>
            </li>
            <li class="">
              <section class="product_price">
                <article class="item_price">
                  <p class="price_tag">
                    peanut <br>
                    <span class="currency">K</span>
                    4000 <br>
                    only
                  </p>
                  <i class="fa fa-tags"></i>
                </article>
                <p class="remaining_products">56</p>
                    <i class="fa fa-shopping-cart"></i>
                <img src="image/lotion.jpg" alt="thumbnail" />
              </section>
            </li>
            <li class="">
              <section class="product_price">
                <article class="item_price">
                  <p class="price_tag">
                    peanut <br>
                    <span class="currency">K</span>
                    4000 <br>
                    only
                  </p>
                  <i class="fa fa-tags"></i>
                </article>
                <p class="remaining_products">56</p>
                    <i class="fa fa-shopping-cart"></i>
                <img src="image/ave.jpg" alt="thumbnail" />
              </section>
            </li>
            <li class="">
              <section class="product_price">
                <article class="item_price">
                  <p class="price_tag">
                    peanut <br>
                    <span class="currency">K</span>
                    4000 <br>
                    only
                  </p>
                  <i class="fa fa-tags"></i>
                </article>
                <p class="remaining_products">56</p>
                    <i class="fa fa-shopping-cart"></i>
                <img src="image/look.jpg" alt="thumbnail" />
              </section>
            </li>
            <li class="">
              <section class="product_price">
                <article class="item_price">
                  <p class="price_tag">
                    peanut <br>
                    <span class="currency">K</span>
                    4000 <br>
                    only
                  </p>
                  <i class="fa fa-tags"></i>
                </article>
                <p class="remaining_products">56</p>
                    <i class="fa fa-shopping-cart"></i>
                <img src="image/Bin.jpg" alt="thumbnail" />
              </section>
            </li>
          </ul>
      <!--page status -->
          <p class="status">
            <i class="fa fa-store-alt"></i>
            <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
            <i class="fa fa-envelope" onclick="ColorChange()"></i>
            <i class="fa fa-credit-card"></i>
            <i class="fa fa-eye-slash"></i>
          </P>
        </article>
          <!-- other picture -->
        <article class="imageProducts">
          <article class="shop_details">
            <img src="image/out.jpg" alt="p"/>
            <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
            <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
          </article>
              <ul class="one">
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/bag_1.jpg" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/bag_2.jpg" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/bag_3.jpg" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/bag_4.png" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/bath.jpg" alt="thumbnail" />
                  </section>
                </li>
              </ul>
              <p class="status">
                <i class="fa fa-store-alt"></i>
                <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                <i class="fa fa-envelope" onclick="ColorChange()"></i>
                <i class="fa fa-credit-card"></i>
                <i class="fa fa-eye-slash"></i>
                </P>
        </article>
          <!-- Hardware -->
      <article class="imageProducts">
        <article class="shop_details">
          <img src="image/out.jpg" alt="p"/>
          <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
          <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
        </article>
            <ul class="two">
              <li>
                <section class="product_price">
                  <article class="item_price">
                    <p class="price_tag">
                      peanut <br>
                      <span class="currency">K</span>
                      4000 <br>
                      only
                    </p>
                    <i class="fa fa-tags"></i>
                  </article>
                  <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                  <img src="image/axe.jpg" alt="thumbnail" />
                </section>
              </li>
              <li>
                <section class="product_price">
                  <article class="item_price">
                    <p class="price_tag">
                      peanut <br>
                      <span class="currency">K</span>
                      4000 <br>
                      only
                    </p>
                    <i class="fa fa-tags"></i>
                  </article>
                  <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                  <img src="image/wheel_barrow.jpg" alt="thumbnail" />
                </section>
              </li>
              <li>
                <section class="product_price">
                  <article class="item_price">
                    <p class="price_tag">
                      peanut <br>
                      <span class="currency">K</span>
                      4000 <br>
                      only
                    </p>
                    <i class="fa fa-tags"></i>
                  </article>
                  <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                  <img src="image/Tilles.jpg" alt="thumbnail" />
                </section>
              </li>
              <li>
                <section class="product_price">
                  <article class="item_price">
                    <p class="price_tag">
                      peanut <br>
                      <span class="currency">K</span>
                      4000 <br>
                      only
                    </p>
                    <i class="fa fa-tags"></i>
                  </article>
                  <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                  <img src="image/hardware_1.jpg" alt="thumbnail" />
                </section>
              </li>
              <li>
                <section class="product_price">
                  <article class="item_price">
                    <p class="price_tag">
                      peanut <br>
                      <span class="currency">K</span>
                      4000 <br>
                      only
                    </p>
                    <i class="fa fa-tags"></i>
                  </article>
                  <p class="remaining_products">56</p>
                      <i class="fa fa-shopping-cart"></i>
                  <img src="image/buildings.jpg" alt="thumbnail" />
                </section>
              </li>
            </ul>
            <p class="status">
              <i class="fa fa-store-alt"></i>
              <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
              <i class="fa fa-envelope" onclick="ColorChange()"></i>
              <i class="fa fa-credit-card"></i>
              <i class="fa fa-eye-slash"></i>
            </P>
      </article>
        <!--Electrical device-->
        <article class="imageProducts">
          <article class="shop_details">
            <img src="image/out.jpg" alt="p"/>
            <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
            <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
          </article>
              <ul class="Three">
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/phone_1.jpg" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/phone_4.jpg" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/phone_2.jpg" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/phone_3.jpg" alt="thumbnail" />
                  </section>
                </li>
                <li>
                  <section class="product_price">
                    <article class="item_price">
                      <p class="price_tag">
                        peanut <br>
                        <span class="currency">K</span>
                        4000 <br>
                        only
                      </p>
                      <i class="fa fa-tags"></i>
                    </article>
                    <p class="remaining_products">56</p>
                        <i class="fa fa-shopping-cart"></i>
                    <img src="image/phone.jpg" alt="thumbnail" />
                  </section>
                </li>
              </ul>
                <p class="status">
                  <i class="fa fa-store-alt"></i>
                  <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                  <i class="fa fa-envelope" onclick="ColorChange()"></i>
                  <i class="fa fa-credit-card"></i>
                  <i class="fa fa-eye-slash"></i>
                </P>
          </article>
          <!-- Three -->
          <article class="imageProducts">
            <article class="shop_details">
              <img src="image/out.jpg" alt="p"/>
              <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
              <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
            </article>
                <ul class="four">
                  <li>
                    <section class="product_price">
                      <article class="item_price">
                        <p class="price_tag">
                          peanut <br>
                          <span class="currency">K</span>
                          4000 <br>
                          only
                        </p>
                        <i class="fa fa-tags"></i>
                      </article>
                      <p class="remaining_products">56</p>
                          <i class="fa fa-shopping-cart"></i>
                      <img src="image/Manu.jpg" alt="thumbnail" />
                    </section>
                  </li>
                  <li>
                    <section class="product_price">
                      <article class="item_price">
                        <p class="price_tag">
                          peanut <br>
                          <span class="currency">K</span>
                          4000 <br>
                          only
                        </p>
                        <i class="fa fa-tags"></i>
                      </article>
                      <p class="remaining_products">56</p>
                          <i class="fa fa-shopping-cart"></i>
                      <img src="image/short.jpg" alt="thumbnail" />
                    </section>
                  </li>
                  <li>
                    <section class="product_price">
                      <article class="item_price">
                        <p class="price_tag">
                          peanut <br>
                          <span class="currency">K</span>
                          4000 <br>
                          only
                        </p>
                        <i class="fa fa-tags"></i>
                      </article>
                      <p class="remaining_products">56</p>
                          <i class="fa fa-shopping-cart"></i>
                      <img src="image/blues.jpg" alt="thumbnail" />
                    </section>
                  </li>
                  <li>
                    <section class="product_price">
                      <article class="item_price">
                        <p class="price_tag">
                          peanut <br>
                          <span class="currency">K</span>
                          4000 <br>
                          only
                        </p>
                        <i class="fa fa-tags"></i>
                      </article>
                      <p class="remaining_products">56</p>
                          <i class="fa fa-shopping-cart"></i>
                      <img src="image/Liste.jpg" alt="thumbnail" />
                    </section>
                  </li>
                  <li>
                    <section class="product_price">
                      <article class="item_price">
                        <p class="price_tag">
                          peanut <br>
                          <span class="currency">K</span>
                          4000 <br>
                          only
                        </p>
                        <i class="fa fa-tags"></i>
                      </article>
                      <p class="remaining_products">56</p>
                          <i class="fa fa-shopping-cart"></i>
                      <img src="image/dress.jpg" alt="thumbnail" />
                    </section>
                  </li>
                </ul>
                    <p class="status">
                      <i class="fa fa-store-alt"></i>
                      <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                      <i class="fa fa-envelope" onclick="ColorChange()"></i>
                      <i class="fa fa-credit-card"></i>
                      <i class="fa fa-eye-slash"></i>
                    </P>
              </article>
              <!-- four -->
              <article class="imageProducts">
                <article class="shop_details">
                  <img src="image/out.jpg" alt="p"/>
                  <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
                  <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
                </article>
                    <ul class="five">
                      <li>
                        <section class="product_price">
                          <article class="item_price">
                            <p class="price_tag">
                              peanut <br>
                              <span class="currency">K</span>
                              4000 <br>
                              only
                            </p>
                            <i class="fa fa-tags"></i>
                          </article>
                          <p class="remaining_products">56</p>
                              <i class="fa fa-shopping-cart"></i>
                          <img src="image/cups.jpg" alt="thumbnail" />
                        </section>
                      </li>
                      <li>
                        <section class="product_price">
                          <article class="item_price">
                            <p class="price_tag">
                              peanut <br>
                              <span class="currency">K</span>
                              4000 <br>
                              only
                            </p>
                            <i class="fa fa-tags"></i>
                          </article>
                          <p class="remaining_products">56</p>
                              <i class="fa fa-shopping-cart"></i>
                          <img src="image/kitchen.jpg" alt="thumbnail" />
                        </section>
                      </li>
                      <li>
                        <section class="product_price">
                          <article class="item_price">
                            <p class="price_tag">
                              peanut <br>
                              <span class="currency">K</span>
                              4000 <br>
                              only
                            </p>
                            <i class="fa fa-tags"></i>
                          </article>
                          <p class="remaining_products">56</p>
                              <i class="fa fa-shopping-cart"></i>
                          <img src="image/pot.jpg" alt="thumbnail" />
                        </section>
                      </li>
                      <li>
                        <section class="product_price">
                          <article class="item_price">
                            <p class="price_tag">
                              peanut <br>
                              <span class="currency">K</span>
                              4000 <br>
                              only
                            </p>
                            <i class="fa fa-tags"></i>
                          </article>
                          <p class="remaining_products">56</p>
                              <i class="fa fa-shopping-cart"></i>
                          <img src="image/kettle.jpg" alt="thumbnail" />
                        </section>
                      </li>
                      <li>
                        <section class="product_price">
                          <article class="item_price">
                            <p class="price_tag">
                              peanut <br>
                              <span class="currency">K</span>
                              4000 <br>
                              only
                            </p>
                            <i class="fa fa-tags"></i>
                          </article>
                          <p class="remaining_products">56</p>
                              <i class="fa fa-shopping-cart"></i>
                          <img src="image/items.jpg" alt="thumbnail" />
                        </section>
                      </li>
                    </ul>
                        <p class="status">
                          <i class="fa fa-store-alt"></i>
                          <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                          <i class="fa fa-envelope" onclick="ColorChange()"></i>
                          <i class="fa fa-credit-card"></i>
                          <i class="fa fa-eye-slash"></i>
                        </P>
                </article>
                    <!-- five -->
                <article class="imageProducts">
                  <article class="shop_details">
                    <img src="image/out.jpg" alt="p"/>
                    <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
                    <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
                  </article>
                        <ul class="six">
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                                  <i class="fa fa-play-circle"></i>
                              <img src="image/flat.jpg" alt="thumbnail" />
                            </section>
                          </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                                  <i class="fa fa-play-circle"></i>
                              <img src="image/discent.jpg" alt="thumbnail" />
                            </section>
                          </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                                  <i class="fa fa-play-circle"></i>
                              <img src="image/timberland.jpg" alt="thumbnail" />
                            </section>
                          </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                                  <i class="fa fa-play-circle"></i>
                                  <!--Music player -->
                                  <article class="Music_player">
                                    <span class="Music_close">
                                      <i class="fa fa-times"></i>
                                    </span>
                                    <div class="Music_title">
                                      <h1>aka ft nastyc | 2017</h1>
                                      <p>single</p>
                                    </div>
                                    <div class="Music_list">
                                      <i class="fa fa-bars"></i>
                                    </div>
                                    <div class="Music_seekbar">
                                      <input type="range" onchange="setpos(this.value)" id="seek" value="0" max=" "/>
                                        <div id="fill"></div>
                                        <div id="handle"></div>
                                    </div>
                                    <div class="Current_time">
                                      00:00/00:00
                                    </div>
                                    <!-- Music  controls -->
                                    <div class="Music_controls">
                                      <button onclick="backward()">
                                        <i class="fa fa-fast-backward"></i>
                                      </button>
                                      <button onclick="pause()">
                                        <i class="fa fa-pause"></i>
                                      </button>
                                      <button onclick="play()">
                                        <i class="fa fa-play"></i>
                                      </button>
                                      <button onclick="forward()">
                                        <i class="fa fa-fast-forward"></i>
                                      </button>
                                    </div>

                                  </article>

                                  <!-- The end of music player -->
                              <img src="image/curve.jpg" alt="thumbnail" />
                            </section>
                          </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                                  <i class="fa fa-play-circle"></i>
                              <img src="image/shoes.jpg" alt="thumbnail" />
                            </section>
                          </li>
                        </ul>
                    <p class="status">
                        <i class="fa fa-store-alt"></i>
                        <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                        <i class="fa fa-envelope" onclick="ColorChange()"></i>
                        <i class="fa fa-credit-card"></i>
                        <i class="fa fa-eye-slash"></i>
                    </P>
                    </article>
                          <!--hardware Taps-->
                <article class="imageProducts">
                  <article class="shop_details">
                    <img src="image/out.jpg" alt="p"/>
                    <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
                    <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
                  </article>
                      <ul class="seven">
                        <li>
                          <section class="product_price">
                            <article class="item_price">
                              <p class="price_tag">
                                peanut <br>
                                <span class="currency">K</span>
                                4000 <br>
                                only
                              </p>
                              <i class="fa fa-tags"></i>
                            </article>
                            <p class="remaining_products">56</p>
                                <i class="fa fa-shopping-cart"></i>
                            <img src="image/tap_1.jpg" alt="thumbnail" />
                          </section>
                        </li>
                        <li>
                          <section class="product_price">
                            <article class="item_price">
                              <p class="price_tag">
                                peanut <br>
                                <span class="currency">K</span>
                                4000 <br>
                                only
                              </p>
                              <i class="fa fa-tags"></i>
                            </article>
                            <p class="remaining_products">56</p>
                                <i class="fa fa-shopping-cart"></i>
                            <img src="image/tap_2.jpg" alt="thumbnail" />
                          </section>
                        </li>
                        <li>
                          <section class="product_price">
                            <article class="item_price">
                              <p class="price_tag">
                                peanut <br>
                                <span class="currency">K</span>
                                4000 <br>
                                only
                              </p>
                              <i class="fa fa-tags"></i>
                            </article>
                            <p class="remaining_products">56</p>
                                <i class="fa fa-shopping-cart"></i>
                            <img src="image/tap_3.jpg" alt="thumbnail" />
                          </section>
                        </li>
                        <li>
                          <section class="product_price">
                            <article class="item_price">
                              <p class="price_tag">
                                peanut <br>
                                <span class="currency">K</span>
                                4000 <br>
                                only
                              </p>
                              <i class="fa fa-tags"></i>
                            </article>
                              <p class="remaining_products">56</p>
                                <i class="fa fa-shopping-cart"></i>
                            <img src="image/tap_4.jpg" alt="thumbnail" />
                          </section>
                        </li>
                        <li>
                          <section class="product_price">
                            <article class="item_price">
                              <p class="price_tag">
                                peanut <br>
                                <span class="currency">K</span>
                                4000 <br>
                                only
                              </p>
                              <i class="fa fa-tags"></i>
                            </article>
                            <p class="remaining_products">56</p>
                                <i class="fa fa-shopping-cart"></i>
                            <img src="image/Tap.jpg" alt="thumbnail" />
                          </section>
                        </li>
                      </ul>
                    <p class="status">
                        <i class="fa fa-store-alt"></i>
                        <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                        <i class="fa fa-envelope" onclick="ColorChange()"></i>
                        <i class="fa fa-credit-card"></i>
                        <i class="fa fa-eye-slash"></i>
                    </P>
                </article>
                <!-- other pic -->
                <article class="imageProducts">
                  <article class="shop_details">
                    <img src="image/out.jpg" alt="p"/>
                    <h3>Cain superite <i class="fa fa-user-plus"  aria-hidden="true"></i></h3>
                    <p class="shop_id">General Dealers|Email: Cain@gmail.com|call: +265990009990 |<i class="fa fa-clock"  aria-hidden="true"></i>6:00pm closed<i class="fa fa-lock"  aria-hidden="true"></i></p>
                  </article>
                        <ul class="eight">
                          <li>
                          <section class="product_price">
                            <article class="item_price">
                              <p class="price_tag">
                                peanut <br>
                                <span class="currency">K</span>
                                4000 <br>
                                only
                              </p>
                              <i class="fa fa-tags"></i>
                            </article>
                            <p class="remaining_products">56</p>
                                <i class="fa fa-shopping-cart"></i>
                            <img src="image/wheels.jpg" alt="thumbnail" />
                          </section>
                        </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                              <img src="image/wheel.jpg" alt="thumbnail" />
                            </section>
                          </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                              <img src="image/scrools.jpg" alt="thumbnail" />
                            </section>
                          </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                              <img src="image/spares.jpg" alt="thumbnail" />
                            </section>
                          </li>
                          <li>
                            <section class="product_price">
                              <article class="item_price">
                                <p class="price_tag">
                                  peanut <br>
                                  <span class="currency">K</span>
                                  4000 <br>
                                  only
                                </p>
                                <i class="fa fa-tags"></i>
                              </article>
                              <p class="remaining_products">56</p>
                                  <i class="fa fa-shopping-cart"></i>
                              <img src="image/pluta.jpg" alt="thumbnail" />
                            </section>
                          </li>
                        </ul>
                            <p class="status">
                                <i class="fa fa-store-alt"></i>
                                <i class="fa fa-map-marker-alt" onclick="ColorChange()"></i>
                                <i class="fa fa-envelope" onclick="ColorChange()"></i>
                                <i class="fa fa-credit-card"></i>
                                <i class="fa fa-eye-slash"></i>
                            </P>
                    </article>

    </article>
  </section>
  <section class="Next_Stores">
    <i class="fa fa-angle-double-right"></i>
  </section>
  <!--Footer -->
  <footer  class="footer">
    <div class="footer">
      <ul class="footer_menu">
        <li>Policy</li>
       <li>currency</li>
       <li>Settings</li>
       <li><a href="subpages/Marketing.php">Marketing</p></li>
      </ul>
    </div>
  </footer>
</main>
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
