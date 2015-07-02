<!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <section>
                <header class="major">
                    <h2><?=$posts[0]->post_title?></h2>
                    <span class="byline"><?=$posts[0]->post_artist ?></span>
                </header>
                <?=$posts[0]->post_content ?>
            </section>
        </div>
    </div>