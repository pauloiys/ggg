
<?php
     include('src/header.php');
     ?>
     
    <!-- /header -->

    <div>
        <img class="responsive-img" src="College Assests/Gallery Section Banner Landscape.jpg">
</div>

        <section>
            <style>

.post-full-meta {
    background: var(--whitegrey);
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary);
    padding: 2rem;
    margin: -9rem -4rem 5rem;
    border-radius: 2rem 2rem 0 0;
    border-top: 0.5rem solid var(--primary);
}
.post-full-content {
    position: relative;
    margin: 4px auto;
    padding: 4rem 4rem;
    min-height: 230px;
    font-size: 1.8rem;
    letter-spacing: 0;
    line-height: 1.6em;
    background: var(--white);
    border-radius: 2rem;
}

style attribute {
    touch-action: pan-y;
    -webkit-user-drag: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
    color: #262626;
    font-family: Noto Sans Sinhala,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Open Sans,Helvetica Neue,sans-serif;
    font-size: 1.5rem;
    line-height: 1.6em;
    font-weight: 400;
    font-style: normal;
    letter-spacing: -.003em;
    text-rendering: optimizeLegibility;
    background: #fff;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -moz-font-feature-settings: "liga" on;
}
body {
    line-height: 1;
}
:root {
    --ghost-accent-color: #800926;
}
:root {
    --primary: #ff0000;
    --primaryDark: #800926;
    --primaryLight: #fff5f5;
    --secondary: #fcc;
    --accent: #db3236;
    --blue: #3eb0ef;
    --green: #a4d037;
    --purple: #ad26b4;
    --yellow: #fecd35;
    --red: #f05230;
    --darkgrey: #333;
    --midgrey: #666;
    --midlightgrey: #ccc;
    --lightgrey: #f1f1f1;
    --whitegrey: #fafafa;
    --white: #fff;
    --pink: #fa3a57;
    --brown: #a3821a;
    --darkPrimary: #804553;
    --darkLight: #ddd;
    --darkFontColor: #aaa;
    --darkBackgroundBright: #555;
    --darkBackgroundLighter: #444;
    --darkBackgroundLight: #333;
    --darkBackground: #121212;
    --darkBackgroundDark: #222;
}
{
@media (max-width: 1170px)
.post-full-content {
    padding: 5vw 9vw;
}
{
@media (max-width: 1170px)

.post-full-meta {
    margin: -5vw -9vw 2vw;
}

 </style>
 <style>
    
    /*-- Images Hover Effects CSS --*/
    .img-box {
        position: relative;
        transition: .5s;
        max-height: 230px;
        overflow: hidden;
        margin-bottom: 30px;
        border-radius: 0px 100px;
    }
    .img-box img {
        max-width: 100%;
        border: 3px solid #0d0669;
        position: relative;
        width: 100%;
    }
    .img-box::before {
        content: '';
        border-left: 3px solid #ffffff;
        border-top: 3px solid #ffffff;
        position: absolute;
        left: 20px;
        top: 20px;
        width: 50px;
        height: 50px;
        z-index: 1;
        transition: .5s;
    }
    .img-box::after {
        content: '';
        border-right: 3px solid #ffffff;
        border-bottom: 3px solid #ffffff;
        position: absolute;
        right: 20px;
        bottom: 20px;
        width: 50px;
        height: 50px;
        z-index: 2;
        transition: .5s;
    }
    
    .img-box:hover {
          transform: scale(1.04);
    }
    
    .img-box:hover::before {
          left: 10px;
          top: 10px;
    }
    .img-box:hover::after {
          right: 10px;
          bottom: 10px;
    }

    .photoGallery {
    padding: 30px 0px;
}
.photoGallery h2 {
    font-size: 40px;
    color: #2196F3;
}
.photoGallery p {
    font-size: 18px;
    color: #9e9e9e;
}
.gallery-columns {
    padding: 15px 0px;
    margin-top: 30px;
}
.gallery-columns .thumbnail {
    max-height: 235px;
    overflow: hidden;
    display: block;
    border-radius: 50px 0px 50px 0px;
    box-shadow: 0px 0px 6px 0px #777777;
    /*border: 1px solid #fff;*/
}
.gallery-columns a img {
    transition: 1s;
    cursor: zoom-in;
}
.gallery-columns .thumbnail:hover img {
    transform: scale(1.07);
}
#baguetteBox-overlay .full-image img {
    border: 3px solid #fff;
    border-radius: 10px;
}
    </style>
            </section>
                     <!-- Content wrapper -->
                <div class="contents-wrapper">
                    <!-- Contents starts here -->
                    <section class="post-full-content">
                        <div class="post-full-meta noprint">
                        <div class="pull-right">
                        </div>
                        <h1 class="post-full-title" style="text-align: center;">COLLEGE GALLERY</h1>
                        </div>
                        <div class="post-content">
                            <div class="gallery-columns">
                    <div class="row">

                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/15.jpeg" class="thumbnail">
                                    <img src="img/gallery/15.jpeg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/1.jpg" class="thumbnail">
                                    <img src="img/gallery/1.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
            
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/2.jpg" class="thumbnail">
                                    <img src="img/gallery/2.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
            
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/4.jpg" class="thumbnail">
                            <img src="img/gallery/4.jpg" class="img-fluid" alt="Gallery Image">
                        </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/19.png" class="thumbnail">
                                    <img src="img/gallery/19.png" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/15.png" class="thumbnail">
                                    <img src="img/gallery/15.png" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
            
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/7.jpg" class="thumbnail">
                                    <img src="img/gallery/7.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
            
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/12.jpg" class="thumbnail">
                                    <img src="img/gallery/12.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
            
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/11.jpg" class="thumbnail">
                                    <img src="img/gallery/11.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/3.jpg" class="thumbnail">
                                    <img src="img/gallery/3.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/5.jpg" class="thumbnail">
                                    <img src="img/gallery/5.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/6.jpg" class="thumbnail">
                                    <img src="img/gallery/6.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/7.jpg" class="thumbnail">
                                    <img src="img/gallery/7.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/9.jpg" class="thumbnail">
                                    <img src="img/gallery/9.jpg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/10.jpg" class="thumbnail">
                            <img src="img/gallery/10.jpg" class="img-fluid" alt="Gallery Image">
                        </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/13.png" class="thumbnail">
                                    <img src="img/gallery/13.png" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/14.JPG" class="thumbnail">
                                    <img src="img/gallery/14.JPG" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/16.png" class="thumbnail">
                                    <img src="img/gallery/16.png" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/17.jpeg" class="thumbnail">
                                    <img src="img/gallery/17.jpeg" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="img-box">
                                <a href="img/gallery/18.png" class="thumbnail">
                                    <img src="img/gallery/18.png" class="img-fluid" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </section>

                    <script src="js/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function () {
        var $grid = $('.grid').imagesLoaded(function () {
            $grid.masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer'
            });
        });

        $('.grid').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out'
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                verticalFit: true
            }
            // other options
        });
    })
</script>

                                <!-- Footer -->
                                <?php
     include('src/footer.php');
     ?>
     
    <!-- /Footer -->
