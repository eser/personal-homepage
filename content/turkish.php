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
                        <li><a href="#body" class="xscroll-link">İletişim</a></li>
                        <li><a href="#blogposts" class="xscroll-link">Blog Yazıları</a></li>
                        <li><a href="#contact" class="xscroll-link">İletişim</a></li>
                    </ul>

                    <div class="col-xs-3 navbar-right">
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="./" class="xscroll-link">English</a></li>
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
                        &nbsp;
                    </div>
                    <a href="https://larukedi.github.io/" class="custom-box custom-box-darkest xscroll-link">
                        GEÇMİŞ
                    </a>
                    <a href="http://eserozvataf.wordpress.com/" class="custom-box custom-box-darker">
                        BLOG
                    </a>
                    <a href="http://github.com/larukedi/" class="custom-box custom-box-dark">
                        GITHUB
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
                                        <h2><a href="#blogposts-recent" class="xscroll-link">Son Gönderilenler</a></h2>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <a href="http://eserozvataf.wordpress.com/">Ziyaret Et</a>
                                        ·
                                        <a href="http://eserozvataf.wordpress.com/feed/">RSS</a>
                                    </div>
                                </div>
                            </div>

                            <div id="socialmedia-blogposts-feed" class="xanchor">
                                <div class="row custom-section-inner">
                                    <div class="col-xs-2">
                                        <h3 class="xtitle"><a href="#socialmedia-blogposts-feed" class="xscroll-link">Akış</a></h3>
                                    </div>
                                    <div class="col-xs-10 xtext">
                                    <?php foreach ($blogposts as $post) { ?>
                                        <!-- Blog Post -->
                                        <h5><a href="<?php echo $post['link']; ?>"><?php echo $post['title']; ?></a><span class="timestamp"> – <?php echo date('Y-m-d', $post['ts']); ?></span></h5>
                                        <?php echo $post['summary']; ?>
                                        <a href="<?php echo $post['link']; ?>" class="nowrap">devamını oku</a>
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
                                <h2><a href="#contact" class="xscroll-link">İletişim</a></h2>
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
                        Copyright &copy; 2013 Eser 'Laroux' Özvataf. &nbsp; Tüm Hakları Saklıdır.<br />
                        <em>Sayfa halen geliştirme aşamasında olduğundan bazı bölümler çalışmıyor olabilir.</em>
                    </div>
                    <div class="col-xs-4 text-right">
                        <i class="glyphicon glyphicon-link"></i>
                        <a href="https://github.com/larukedi/personal-homepage">Sayfa Kaynağı Github Üzerinde</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
