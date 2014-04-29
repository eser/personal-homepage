<?php
    $title = 'Eser \'Laroux\' Özvataf - eser.ozvataf.com - Kişisel Web Sayfası';
    $description = 'Eser \'Laroux\' Özvataf Kişisel Web Sayfası';
    $keywords = 'eser laroux ozvataf larukedi yazılım mimar geliştirici programcı yazılımcı kod takım lideri uzman php js javascript classic c# asp asp.net microsoft .net grunt npm node continuous integration devops';
?>
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
                        <li><a href="#body" class="xscroll-link">Ana Sayfa</a></li>
                        <li><a href="#blogposts" class="xscroll-link">Blog Yazıları</a></li>
                        <li><a href="#links" class="xscroll-link">Linkler</a></li>
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
                        <img src="https://secure.gravatar.com/avatar/f29fecb1c77c3c07c5b7fe1d6d2ec3e1/?s=85&amp;d=404" alt="Gravatar Profile Image" />
                    </div>
                    <a href="https://larukedi.github.io/index.tr.html" class="custom-box custom-box-darkest xscroll-link">
                        <i class="fa fa-info"></i> <span>HAKKIMDA</span>
                    </a>
                    <a href="https://eserozvataf.wordpress.com/" class="custom-box custom-box-darker">
                        <i class="fa fa-pencil"></i> <span>BLOG</span>
                    </a>
                    <a href="https://github.com/larukedi/" class="custom-box custom-box-dark">
                        <i class="fa fa-github"></i> <span>GITHUB</span>
                    </a>
                    <a href="https://www.linkedin.com/in/larukedi" class="custom-box custom-box-light">
                        <i class="fa fa-linkedin"></i> <span>LINKEDIN</span>
                    </a>

                    <div class="clearfix"></div>
                </div>
            </div>
        </header>

        <section id="blogposts" class="xanchor">
            <div class="custom-section custom-section-gray">
                <div class="container">
                    <div id="blogposts-recent" class="row xanchor">
                        <div class="col-xs-12">
                            <div class="xheader">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <h1><a href="#blogposts-recent" class="xscroll-link">Blog Yazıları</a></h1>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <a href="http://eserozvataf.wordpress.com/">Ziyaret Et</a>
                                        ·
                                        <a href="http://eserozvataf.wordpress.com/feed/">RSS</a>
                                    </div>
                                </div>
                            </div>

                            <div id="blogposts-recent-feed" class="xanchor">
                                <div class="row custom-section-inner">
                                    <div class="col-xs-12 col-md-2">
                                        <h3 class="xtitle"><a href="#blogposts-recent-feed" class="xscroll-link">Akış</a></h3>
                                    </div>
                                    <div class="col-xs-12 col-md-10 xtext">
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

        <section id="links" class="xanchor">
            <div class="custom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="xheader">
                                <h1><a href="#links" class="xscroll-link">Linkler</a></h1>
                            </div>

                            <!-- Links/Profiles -->
                            <div id="links-profiles" class="xanchor">
                                <div class="row custom-section-inner">
                                    <div class="col-xs-12 col-md-2">
                                        <h3 class="xtitle"><a href="#links-profiles" class="xscroll-link">Profiller</a></h3>
                                    </div>
                                    <div class="col-xs-12 col-md-10">
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Web Site:</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://eser.ozvataf.com/">http://eser.ozvataf.com/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Blog:</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="https://eserozvataf.wordpress.com/">https://eserozvataf.wordpress.com/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">LinkedIn:</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="https://www.linkedin.com/in/larukedi">https://www.linkedin.com/in/larukedi</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Github:</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="https://github.com/larukedi">https://github.com/larukedi</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Links/Neighbors -->
                            <div id="links-neighbors" class="xanchor">
                                <div class="row custom-section-inner">
                                    <div class="col-xs-12 col-md-2">
                                        <h3 class="xtitle"><a href="#links-neighbors" class="xscroll-link">Komşular</a></h3>
                                    </div>
                                    <div class="col-xs-12 col-md-10">
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Alper Konuralp</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://alper.konuralp.gen.tr/">http://alper.konuralp.gen.tr/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Çağhan Emirzade</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://www.caghanemirzade.com/">http://www.caghanemirzade.com/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Mert Kuyumcu</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://mertkuyumcu.blogspot.com/">http://mertkuyumcu.blogspot.com/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Opera Türkiye</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://operaturkiye.net/">http://operaturkiye.net/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Osman Yüksel</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://yuxel.net/">http://yuxel.net/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Volkan Özdamar</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://volkanozdamar.com/blog/">http://volkanozdamar.com/blog/</a></div>
                                        </div>
                                        <div class="row xrow">
                                            <div class="col-xs-12 col-sm-4 xlabel">Şeyma Kaçar</div>
                                            <div class="col-xs-12 col-sm-8 xvalue"><a href="http://seymakacar.com/">http://seymakacar.com/</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="xanchor">
            <div class="custom-section">
                <div class="container">
                    <div class="row xanchor">
                        <div class="col-xs-12">
                            <div class="xheader">
                                <h1><a href="#contact" class="xscroll-link">İletişim</a></h1>
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
