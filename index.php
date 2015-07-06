<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Basic Page Needs
     ================================================== -->
    <meta charset="utf-8">
    <title>Sky Plugins - Sky jQuery Touch Carousel</title>

    <!-- Mobile Specific
     ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Java Script
     ================================================== -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="/css/default_skin_variation.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" src="/js/jquery.sky.carousel-1.0.2.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#your-carousel-id').carousel({
                itemWidth: 170,
                itemHeight: 240,
                distance: 15,
                selectedItemDistance: 50,
                selectedItemZoomFactor: 1,
                unselectedItemZoomFactor: 0.67,
                unselectedItemAlpha: 0.6,
                motionStartDistance: 170,
                topMargin: 119,
                gradientStartPoint: 0.35,
                gradientOverlayColor: "#f5f5f5",
                gradientOverlaySize: 190,
                reflectionDistance: 1,
                reflectionAlpha: 0.35,
                reflectionVisible: true,
                reflectionSize: 70,
                selectByClick: true
            });
        });
    </script>


<body style="cursor: auto;">

<!-- 960 Container -->
<div class="container">

    <!-- Project Title -->
    <div class="sixteen columns">
        <h4 class="headline">Default Skin Variation1</h4>

        <div id="your-carousel-id" class="sky-carousel">
            <div class="sky-carousel-wrapper">
                <ul class="sky-carousel-container">
                    <li>
                        <img src="/images/1.jpg" alt="" />
                        <div class="sc-content">
                            <h2>Maria Vann</h2>
                        </div>
                    </li>
                    <li>
                        <img src="/images/2.jpg" alt="" />
                        <div class="sc-content">
                            <h2>Leslie Lawson</h2>
                        </div>
                    </li>
                    <li>
                        <img src="/images/3.jpg" alt="" />
                        <div class="sc-content">
                            <h2>Dora Thomas</h2>
                        </div>
                    </li>
                    <li>
                        <img src="/images/4.jpg" alt="" />
                        <div class="sc-content">
                            <h2>Karen Olsen</h2>
                        </div>
                    </li>
                    <li>
                        <img src="/images/5.jpg" alt="" />
                        <div class="sc-content">
                            <h2>Mittie Phillips</h2>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>


</div>

</body>
</html>