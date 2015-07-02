<!DOCTYPE HTML>
<!--
    Horizons by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>Short Story</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <base href="<?php echo base_url();?>">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel.css" />
            <link rel="stylesheet" href="css/style.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
    <body class="homepage">

        <!-- Header -->
            <div id="header">
                <div class="container">
                        
                    <!-- Logo -->
                        <h1><a href="#" id="logo">Short Story</a></h1>
                    
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="<?php echo site_url();?>">主页</a></li>
                                <li><a href="<?php echo site_url('home/create');?>">发布</a></li>
                                <li><a href="<?php echo site_url('home/about');?>">关于</a></li>
                            </ul>
                        </nav>


                    <!-- Banner -->
                        <div id="banner">
                            <div class="container">
                                <section>
                                    <header class="major">
                                        <h2>Welcome to Short Story!</h2>
                                        <span class="byline">High and fine literature is wine, and mine is only water; but everybody likes water.</span>
                                        <span>——Mark Twain</span>
                                    </header>
                                </section>          
                            </div>
                        </div>

                </div>
            </div>
            <div id="main" class="wrapper style1">
                <section class="container">
                    <header class="major">
                        <h2><a href="./view/<?php echo $posts['0']->post_id; ?>"><?php echo $posts[0]->post_title?></a></h2>
                        <span class="byline"><?=$posts[0]->post_artist ?></span>
                    </header>
                    <?php echo $posts[0]->post_content?>
                    <div class="row">
                    
                        <!-- Content -->

                            <div class="6u">
                                <section>
                                    <h4>最新文章</h3>
                                    <ul class="style">
                                    <?php foreach ($posts as $row):?>
                                    <li><a href="index.php/home/article/<?php echo $row->post_id ?>"><?=$row->post_title?></a></li>
                                <?php endforeach ?>
                                    </ul>
                                </section>
                            </div>
                            <div class="6u">
                                <h3></h3>
                            </div>

                    </div>
                </section>
            </div>