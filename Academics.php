 
 <?php
     include('src/header.php');
     ?>
     
    <!-- /header -->
    <style>
        .why-us h2 {
            position: relative;
            margin-bottom: 35px;
        }
        .why-us h2::after {
            content: "";
            width: 120px;
            height: 3px;
            display: inline-block;
            background: #FFC107;
            position: absolute;
            left: 0px;
            right: 0px;
            bottom: -20px;
            margin: 0 auto;
        }
        
        .why-us .box {
            padding: 50px 30px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.10);
            transition: 0.5s;
            position: relative;
            background-color: #333;
            max-height: 230px;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 10px;
        }
        .why-us .box:hover {
            padding: 30px 30px 70px 30px;
            box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.20);
            background-color: rgba(0, 0, 0, 0.3);
        }
        .why-us .box img {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0;
            transition:all ease 1s; 
        }
        .why-us .box:hover img {
            opacity: 1;
        }
        .why-us .box span {
            display: block;
            font-size: 56px;
            font-weight: 700;
            color: #6b6060;
            position: absolute;
            right: 10px;
            top: 0px;
            line-height: normal;
        }
        .why-us .box h4 a {
            font-size: 24px;
            font-weight: 600;
            padding: 0;
            margin: 20px 0;
            color: #dadada;
            text-decoration: none;
        }
        .why-us .box p {
            color: #aaaaaa;
            font-size: 15px;
            margin: 0;
            padding: 0;
        }
        .why-us .box:hover span,
        .why-us .box:hover h4 a,
        .why-us .box:hover p {
              color: #fff;
        }
        </style>
    <!-- Content wrapper -->
    <div class="contents-wrapper">
        <!-- Contents starts here -->
        <div class="content">
            <div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>01</span>
						<h4><a href="#">Why Lorem Ipsum</a></h4>
						<p>There are many variations of passages of available, but the majority have suffered alteration in some form</p>
						<img src="/img/px-action-athlete-athletes-848618-image.jpg" alt="">
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>02</span>
						<h4><a href="#">Why do we use it</a></h4>
						<p>There are many variations of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						<img src="/img/event1.JPG" alt="">
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>03</span>
						<h4><a href="#">Can I get some</a></h4>
						<p>There are many variations of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						<img src="/images/image-three.jpg" alt="">
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>04</span>
						<h4><a href="#">Why Lorem Ipsum</a></h4>
						<p>There are many variations of passages of Lorem Ipsum available, the majority have suffered alteration in some form</p>
						<img src="/images/image-four.jpg" alt="">
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>05</span>
						<h4><a href="#">Why do we use it</a></h4>
						<p>There are many of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						<img src="/images/image-five.jpg" alt="">
					</div>
				</div>

				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>06</span>
						<h4><a href="#">Can I get some</a></h4>
						<p>There are variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
						<img src="/images/image-six.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
    </div>
    </div>

                <!-- Footer -->
                <?php
     include('src/footer.php');
     ?>
     
    <!-- /Footer -->