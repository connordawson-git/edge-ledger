<?php include('layout/head.php');?>
    <title>Welcome to Edge Ledger</title>
</head>
<body id="home">
    <header class="hero">
        <?php include('layout/header.php');?>
        <div class="content">
            <h1>The Sky is the limit</h1>
            <p>We provide world class financial assistance</p>
            <a href="#about" class="btn btn-primary"><i class="fas fa-chevron-right"></i>Read More</a>
        </div>
    </header>
    <main>

    <!-- About Icons -->
        <section id="about" class="icons bg-light">
            <div class="flex-items">
                <div>
                    <i class="fas fa-university fa-2x"></i>
                    <div>
                        <h3>Investment Banking</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, voluptas.</p>
                    </div>
                </div>
                <div>
                    <i class="fas fa-book-reader fa-2x"></i>
                    <div>
                        <h3>Portfolio Manager</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, voluptas.</p>
                    </div>
                </div>
                <div>
                    <i class="fas fa-pencil-alt fa-2x"></i>
                    <div>
                        <h3>Tax & Custodial</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, voluptas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Solutions -->
        <section id="solutions" class="solutions flex-columns">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="images/home/people.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-primary">
                        <h4>What you are looking for</h4>
                        <h2>We provide bespoke solutions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit delectus vero enim nobis, minima eligendi nisi sed perspiciatis saepe pariatur!</p>
                        <a href="" class="btn btn-outline"> <i class="fas fa-chevron"></i> Read More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cases -->
        <section id="cases" class="cases flex-grid section-padding">
            <header class="section-header">
                <h4>This is what we do</h4>
                <h2>Business Cases</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eius.</p>
            </header>
            <div class="row">
                <div class="column">
                    <img src="images/cases/cases1.jpg" alt="">
                    <img src="images/cases/cases2.jpg" alt="">
                </div>
                <div class="column">
                    <img src="images/cases/cases3.jpg" alt="">
                    <img src="images/cases/cases4.jpg" alt="">
                </div>
                <div class="column">
                    <img src="images/cases/cases5.jpg" alt="">
                    <img src="images/cases/cases6.jpg" alt="">
                </div>
                <div class="column">
                    <img src="images/cases/cases7.jpg" alt="">
                    <img src="images/cases/cases8.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="blog flex-columns flex-reverse">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="images/home/blog.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-secondary">
                        <h4><?php echo Date("d/m/Y")?></h4>
                        <h2>Blog Post One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit delectus vero enim nobis, minima eligendi nisi sed perspiciatis saepe pariatur!</p>
                        <a href="blog.php" class="btn btn-outline"> <i class="fas fa-chevron-right"></i> Read Our Blog</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section id="team" class="team section-padding">
            <header class="section-header">
                <h4>Who we are</h4>
                <h2>Our Professional Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eius.</p>
            </header>
            <div class="flex-items">
                <div>
                    <img src="images/team/person1.jpg" alt="">
                    <h4>John Doe</h4>
                    <p>President</p>
                </div>
                <div>
                    <img src="images/team/person2.jpg" alt="">
                    <h4>Jane Doe</h4>
                    <p>Vice president</p>
                </div>
                <div>
                    <img src="images/team/person3.jpg" alt="">
                    <h4>Elliot alderson</h4>
                    <p>Chief Technical Officer</p>
                </div>
            </div>
        </section>
        <!-- Contact -->
        <section id="contact" class="contact flex-columns">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="images/home/contact.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-light">
                        <h2>Request a Callback</h2>
                        <form action="" class="callback-form">
                            <div class="form-control">
                                <label for="name"></label>
                                <input type="text" name="name" id="name" placeholder="Enter Name">
                            </div>
                            <div class="form-control">
                                <label for="email"></label>
                                <input type="email" name="email" id="email" placeholder="Enter Email">
                            </div>
                            <div class="form-control">
                                <label for="phone"></label>
                                <input type="text" name="phone" id="phone" placeholder="Enter Phone">
                            </div>
                            <input type="submit" value="send" id="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include('layout/footer.php');?>
