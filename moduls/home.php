<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="mebel shop by Kurnikova Viktoria">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
            $('.button').hover(function () {
                $('.button').addClass('animate__animated animate__jello');  // Добавляем класс bounce
            }, function () {
                $('.button').removeClass('animate__animated animate__jello');  // Убираем класс bounce
            }
            )
        });
        $(document).ready(function () {
            $('.button2').hover(function () {
                $('.button2').addClass('animate__animated animate__jello');  // Добавляем класс bounce
            }, function () {
                $('.button2').removeClass('animate__animated animate__jello');  // Убираем класс bounce
            }
            )
        });</script>
</head>

<body>
    <header class="head-container" id="app">
        <div class="head-container_item">mébel</div>
        <div class="head-container_item menu-container">
            <a href="/?site=home" class="menu-container_item selected">Home</a>
            <a href="/?site=aboutus" class="menu-container_item">About Us</a>
            <a href="/?site=howworks" class="menu-container_item">How it works</a>
            <a href="/?site=categories" class="menu-container_item">Categories</a>
        </div>
        <a href="/?site=home" class="button">
            <div class="head-container_item">SIGN UP</div>
        </a>
    </header>
    <main>
        <div class="fon-figure_1"></div>
        <section>
            <div class="main_screen">
                <h2 class="main_screen_h2">Are you looking for <b> woodden furniture</b> for your sweet home?</h2>
                <h1 class="main_screen_h1">This is the Right Place</h1>
                <img src="img/table1.png" alt="coffe table" class="main_screen_pic">
                <a href="/?site=categories">
                    <div class="main_screen_but button2">Explore Furniture</div>
                </a>
            </div>
        </section>

        <section class="aboutus">
            <div class="second-screen">
                <h2 class="second-screen_h2">Who we are</h2>
                <hr class="second-screen_line">
                <h1><a href="/?site=aboutus" class="second-screen_h1">ABOUT US</a></h1>
            </div>
            <div class="fon-figure_2"></div>
            <img src="img/tumba1.png" alt="tubma kalmar" class="aboutus_pic">
            <div class="aboutus_info">
                <h2 class="aboutus_info_h2"><b>mébel</b> is the <b>home of modern wooden furniture</b></h2>
                <h3 class="aboutus_info_h3">The answer to your need for furniture with shapes, sizes and colors.
                </h3>
            </div>
            <div class="aboutus_info-second">
                <h2 class="aboutus_info_h2">Customized furniture <b> made just for you</b></h2>
                <h3 class="aboutus_info_h3">Get it easy to adjust furniture to the shape and size of your dwelling or
                    business.
                </h3>
            </div>
            <img src="img/table2.png" alt="table small" class="aboutus_pic-second">
        </section>

        <section>
            <div class="second-screen">
                <h2 class="second-screen_h2">How to custom</h2>
                <hr class="second-screen_line-two">
                <h1><a href="/?site=howworks" class="second-screen_h1">HOW IT WORKS</a></h1>
            </div>
            <div class="plan-container">
                <div class="plan-container_item">
                    <img src="img/plan1.png" alt="Choose design">
                    Choose design
                </div>
                <div class="plan-container_item">
                    <img src="img/plan2.png" alt="Area measuring">
                    Area measuring
                </div>
                <div class="plan-container_item">
                    <img src="img/plan3.png" alt="Budgeting">
                    Budgeting
                </div>
                <div class="plan-container_item">
                    <img src="img/plan4.png" alt="Production">
                    Production
                </div>
            </div>
        </section>

        <section>
            <div class="second-screen">
                <h2 class="second-screen_h2">What we have</h2>
                <hr class="second-screen_line-three">
                <h1><a href="/?site=categories" class="second-screen_h1">CATEGORIES</a></h1>
            </div>
            <div class="categories">
                <div class="categories_item cat_table">
                    <p class="categories_item_name">Table</p>
                    <img src="img/desk.png" alt="brown desk" class="categories_item_table">
                    <a href="/?site=categories&category=Стол#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_chair">
                    <p class="categories_item_name">Chair</p>
                    <img src="img/chair.png" alt="brown desk" class="categories_item_chair">
                    <a href="/?site=categories&category=Стул#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_bedtable">
                    <p class="categories_item_name">Bedside table</p>
                    <img src="img/bedside_table.png" alt="brown desk" class="categories_item_bedtable">
                    <a href="/?site=categories&category=Тумбочка#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_closet">
                    <p class="categories_item_name">Closet</p>
                    <img src="img/closet.png" alt="brown desk" class="categories_item_closet">
                    <a href="/?site=categories&category=Шкаф#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_bed">
                    <p class="categories_item_name">Bed</p>
                    <img src="img/bed.png" alt="brown desk" class="categories_item_bed">
                    <a href="/?site=categories&category=Кровать#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer_container">
            <div class="footer_container_item">
                <p class="column-head">mébel</p>
                <p class="column-item">(012) 8967453</p>
                <p class="column-item">mébel@gmail.com</p>
                <p class="column-item">Moscow, Russia</p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Product</p>
                <p class="column-item"><a href="/?site=categories">Furnitures</a> </p>
                <p class="column-item"><a href="/?site=categories#delivery_form">Delivery</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Resources</p>
                <p class="column-item"><a href="/?site=home">Blog</a></p>
                <p class="column-item"><a href="/?site=home">News</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Company</p>
                <p class="column-item"><a href="/?site=aboutus">About Us</a></p>
                <p class="column-item"><a href="/?site=aboutus">Our Team</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Follow Us</p>
                <p class="column-item"><a href="https://www.instagram.com/">Instagram</a></p>
                <p class="column-item"><a href="https://twitter.com/explore">Twitter</a></p>
            </div>
        </div>
    </footer>
</body>

</html>