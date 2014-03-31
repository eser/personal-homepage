    <div class="navbar navbar-inverse navbar-fixed-top custom-navbar print-hidden" role="banner">
        <div class="container">
            <nav>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand custom-navbar-brand xscroll-link" href="#body">eser.ozvataf.com</a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#body" class="xscroll-link">Home</a></li>
                        <li><a href="#blogposts" class="xscroll-link">Blog Posts</a></li>
                        <li><a href="#contact" class="xscroll-link">Contact</a></li>
                    </ul>

                    <div class="col-xs-3 navbar-right">
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="./?turkish" class="xscroll-link">Türkçe</a></li>
                        </ul>

                    <!--
                        <form id="search-form" action="#" method="GET" class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" />
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default custom-input-search-button"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    -->
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div id="page">

        <header id="splash">
            <div class="container">

                <div class="custom-boxrow">
                    <div class="custom-box custom-box-trans">
                        <img src="https://secure.gravatar.com/avatar/f29fecb1c77c3c07c5b7fe1d6d2ec3e1/?s=85&amp;d=404" alt="Gravatar Profile Image" />
                    </div>
                    <a href="https://larukedi.github.io/" class="custom-box custom-box-darkest xscroll-link">
                        <i class="fa fa-info"></i> &nbsp; BACKGROUND
                    </a>
                    <a href="https://eserozvataf.wordpress.com/" class="custom-box custom-box-darker">
                        <i class="fa fa-pencil"></i> &nbsp; BLOG
                    </a>
                    <a href="https://github.com/larukedi/" class="custom-box custom-box-dark">
                        <i class="fa fa-github"></i> &nbsp; GITHUB
                    </a>
                    <a href="https://www.linkedin.com/in/larukedi" class="custom-box custom-box-light">
                        <i class="fa fa-linkedin"></i> &nbsp; LINKEDIN
                    </a>

                    <div class="clearfix"></div>
                </div>
            </div>
        </header>

        <section id="blogposts" class="xanchor print-hidden">
            <div class="custom-section">
                <div class="container">
                    <div id="blogposts-recent" class="row xanchor">
                        <div class="col-xs-12">
                            <div class="xheader">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <h2><a href="#blogposts-recent" class="xscroll-link">Recent</a></h2>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <a href="http://eserozvataf.wordpress.com/">Visit</a>
                                        ·
                                        <a href="http://eserozvataf.wordpress.com/feed/">RSS</a>
                                    </div>
                                </div>
                            </div>

                            <div id="blogposts-recent-feed" class="xanchor">
                                <div class="row custom-section-inner">
                                    <div class="col-xs-12 col-md-2">
                                        <h3 class="xtitle"><a href="#blogposts-recent-feed" class="xscroll-link">Feed</a></h3>
                                    </div>
                                    <div class="col-xs-12 col-md-10 xtext">
                                    <?php foreach ($blogposts as $post) { ?>
                                        <!-- Blog Post -->
                                        <h5><a href="<?php echo $post['link']; ?>"><?php echo $post['title']; ?></a><span class="timestamp"> – <?php echo date('Y-m-d', $post['ts']); ?></span></h5>
                                        <?php echo $post['summary']; ?>
                                        <a href="<?php echo $post['link']; ?>" class="nowrap">read more</a>
                                        <div class="line"></div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="xanchor">
            <div class="custom-section custom-section-gray">
                <div class="container">
                    <div class="row xanchor">
                        <div class="col-xs-12">
                            <div class="xheader">
                                <h2><a href="#contact" class="xscroll-link">Contact</a></h2>
                            </div>

                            <div class="text-center">
                                <h4>e<span class="hide">x</span>ser@o<span class="hide">x</span>zvataf<span class="hide">x</span>.<span class="hide">x</span>com</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="custom-footer print-hidden">
            <div class="container">
                <div class="row custom-footer-inner">
                    <div class="col-xs-8 text-muted">
                        Copyright &copy; 2013 Eser 'Laroux' Özvataf. &nbsp; All Rights Reserved.<br />
                        <em>Some parts of the page may not function since it's still under development.</em>
                    </div>
                    <div class="col-xs-4 text-right">
                        <i class="glyphicon glyphicon-link"></i>
                        <a href="https://github.com/larukedi/personal-homepage">Page Source on Github</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>