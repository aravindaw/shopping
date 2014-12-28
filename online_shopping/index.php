<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
    <meta name="description" content="Blueprint: On-Scroll Animated Header"/>
    <meta name="keywords" content="fixed header, animatied header, javascript, wed design, template, on scroll"/>
    <meta name="author" content="Codrops"/>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <script src="js/modernizr.custom.js"></script>
</head>
<body>
<div class="container">

    <div class="cbp-af-header">
        <div class="cbp-af-inner">
            <h1>My Shop</h1>
            <nav>
                <a href="page_under_construction.php">Online Shopping</a>
                <a href="page_under_construction.php">About Us</a>
                <a href="page_under_construction.php">Contacts</a>
            </nav>
        </div>
    </div>

    <header class="clearfix">
				<span>Online Shopping<span class="bp-icon bp-icon-about" data-content="Online shopping is a form of
				electronic commerce which allows consumers to fast, easy and directly buy goods or services from a seller
				over the Internet using a web browser."></span></span>

        <h1>Fast and easy way to buy goods</h1>
<!--        <nav>-->
<!--            <a href="http://tympanus.net/Blueprints/ResponsiveMultiColumnForm" class="bp-icon bp-icon-prev"-->
<!--               data-info="previous Blueprint"><span>Previous Blueprint</span></a>-->
<!--            <!--a href="" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a-->
<!--            <a href="http://tympanus.net/codrops/?p=15321" class="bp-icon bp-icon-drop"-->
<!--               data-info="back to the Codrops article"><span>back to the Codrops article</span></a>-->
<!--            <a href="http://tympanus.net/codrops/category/blueprints/" class="bp-icon bp-icon-archive"-->
<!--               data-info="Blueprints archive"><span>Go to the archive</span></a>-->
<!--        </nav>-->
        <figure>
            <img src="images/apple_products.jpg" alt="img01">
        </figure>
    </header>
<!--</div>-->
<!---->
<!---->
<!--<div class="container">-->
    <div id="cbp-so-scroller" class="cbp-so-scroller">
        <section class="cbp-so-section">
            <article class="cbp-so-side cbp-so-side-left">
                <h2>Apple iphone 6</h2>

                <p>iPhone 6 features an A8 chip built on second-generation 64-bit desktop-class architecture.
                    Its incredible power is enhanced by an M8 motion coprocessor that efficiently measures your
                    activity from advanced sensors, including a new barometer. So you can do more, for longer periods
                    of time, with better performance and battery life.</p>

                <p>
                    The all-new A8 chip is the fastest yet.
                </p>
                <p>
                    <a href="shopping_menu.php">Click here to buy one</a>
                </p>
            </article>
            <figure class="cbp-so-side cbp-so-side-right">
                <a href="shopping_menu.php">
                    <img src="images/1.png" alt="img01">
                </a>
            </figure>
        </section>
        <section class="cbp-so-section">
            <figure class="cbp-so-side cbp-so-side-left">
                <img src="images/2.png" alt="img01">
            </figure>
            <article class="cbp-so-side cbp-so-side-right">
                <h2>iPad Air 2</h2>

                <p>To create the astonishingly thin silhouette of iPad Air 2, we started by redesigning the Retina
                    display, fusing what had been three layers into one. Not only did this make the display thinner,
                    it made it better, with more vivid colors and greater contrast. Then we added an antireflective
                    coating,
                    giving iPad Air 2 the least reflective display of any tablet in the world.</p>

                <p>
                    Not only is iPad Air 2 thinner, it’s also a lot more powerful.<a href="page_under_construction.php">Click here to buy one</a>
                </p>
            </article>
        </section>
        <section class="cbp-so-section">
            <article class="cbp-so-side cbp-so-side-left">
                <h2>MacBook Air</h2>

                <p>The 11-inch MacBook Air lasts up to 9 hours between charges and the 13-inch model lasts up to an
                    incredible 12 hours.<a href="page_under_construction.php">Click here to buy one</a></p>
            </article>
            <figure class="cbp-so-side cbp-so-side-right">
                <img src="images/3.png" alt="img01">
            </figure>
        </section>
        <section class="cbp-so-section">
            <figure class="cbp-so-side cbp-so-side-left">
                <img src="images/4.png" alt="img01">
            </figure>
            <article class="cbp-so-side cbp-so-side-right">
                <h2>MacBook Pro</h2>

                <p>A groundbreaking Retina display. All-flash architecture. Fourth-generation Intel processors.
                Remarkably thin and light 13‑inch and 15‑inch designs.
                    <a href="page_under_construction.php">Click here to buy one</a>
                </p>
            </article>
        </section>
        <section class="cbp-so-section">
            <article class="cbp-so-side cbp-so-side-left">
                <h2>Pudding lollipop</h2>

                <p>The Apple Watch collection features highly polished stainless steel and space black stainless steel cases.
                    The display is protected by sapphire crystal.</p><p><a href="page_under_construction.php">Click here to buy one</a>
                </p>
            </article>
            <figure class="cbp-so-side cbp-so-side-right">
                <img src="images/5.png" alt="img01">
            </figure>
        </section>
        <section class="cbp-so-section">
            <figure class="cbp-so-side cbp-so-side-left">
                <img src="images/7.png" alt="img01">
            </figure>
            <figure class="cbp-so-side cbp-so-side-left">
                <img src="images/8.png" alt="img01">
            </figure>

        </section>
    </div>
</div>

<!-- classie.js by @desandro: https://github.com/desandro/classie -->
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.min.js"></script>
<script src="js/cbpScroller.js"></script>
<script>
    new cbpScroller(document.getElementById('cbp-so-scroller'));
</script>
</body>
</html>
