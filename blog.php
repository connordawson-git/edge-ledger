<?php include('layout/head.php');?>  
    <title>Read Our Blog</title>
</head>
<body id="home">
    <header class="hero blog">
        <?php include('layout/header.php');?>
        <div class="content">
            <h1>Blog</h1>
        </div>
    </header>

    <main>
        <article class="flex-columns">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="images/blog/blog1.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-light">
                        <h2>Blog Post 1</h2>
                        <p class="meta"><i class="fas fa-user"></i>Posted By <strong>John Doe</strong> | <?php echo Date('d/m/Y'); ?> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit delectus vero enim nobis, minima eligendi nisi sed perspiciatis saepe pariatur!</p>
                        <a href="post.php" class="btn btn-dark"> <i class="fas fa-chevron-right"></i> Read More</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="flex-columns flex-reverse">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="images/blog/blog2.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-dark">
                        <h2>Blog Post 2</h2>
                        <p class="meta"><i class="fas fa-user"></i>Posted By <strong>Jane Doe</strong> | <?php echo Date('d/m/Y'); ?> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit delectus vero enim nobis, minima eligendi nisi sed perspiciatis saepe pariatur!</p>
                        <a href="post.php" class="btn btn-light"> <i class="fas fa-chevron-right"></i> Read More</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="flex-columns">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="images/blog/blog3.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-light">
                        <h2>Blog Post 1</h2>
                        <p class="meta"><i class="fas fa-user"></i>Posted By <strong>Elliot Alderson</strong> | <?php echo Date('d/m/Y'); ?> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit delectus vero enim nobis, minima eligendi nisi sed perspiciatis saepe pariatur!</p>
                        <a href="post.php" class="btn btn-dark"> <i class="fas fa-chevron-right"></i> Read More</a>
                    </div>
                </div>
            </div>
        </article>
    </main>
<?php include('layout/footer.php'); ?>