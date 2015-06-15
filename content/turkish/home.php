<?php
    use PersonalHomepage\BlogFeed;
    use PersonalHomepage\FileCache;

    $title = 'Eser \'Laroux\' Özvataf - eser.ozvataf.com - Kişisel Web Sayfası';
    $description = 'Eser \'Laroux\' Özvataf Kişisel Web Sayfası';
    $keywords = 'eser laroux ozvataf larukedi yazılım mimar geliştirici programcı yazılımcı kod takım lideri tam donanımlı uzman php js javascript classic c# asp asp.net microsoft .net grunt npm node continuous integration seo arama motoru iyileştirmesi optimizasyonu sosyal medya devops';

    $file = FileCache::get('http://eser.ozvataf.com/blog/feed/');
    $blogposts = BlogFeed::get($file);

    require '_header.php';
?>

        <header id="splash" class="splash">
            <div class="container intro">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 pull-right text-center">
                        <img src="assets/images/eser-ozvataf.png" class="img-thumbnail" alt="" />
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 pull-left">

                        <div id="sharp" class="sharp hidden-xs">#</div>
                        <div class="rest">
                            <h1>
                                <div class="name">Merhaba. Ben <span>Eser Özvataf</span>.</div>
                                <div class="title">Yazılım Mimarı ve Danışmanı</div>
                            </h1>

                            <p class="lead">
                                Modern yazılım mühendisliği ve IT projelerine odaklı çalışıyorum. Şu anda kurumsal bir
                                firmada e-ticaret çözümleri sağlamamın yanı sıra internet üzerindeki açık kaynaklı
                                yazılımlara katkıda bulunmak için uğraşıyorum.
                                <br /><br />
                                İlgili olduğum profesyonel alanlar, çalışmalarım ve sürmekte olan projelerim hakkında
                                detaylı bilgi almak için sayfayı biraz aşağı kaydırabilirsiniz.
                            </p>

                            <div class="buttons">
                                <a href="#connections" class="btn btn-lg btn-splash xscroll-link">Detaylar</a>
                                <a href="/blog/" class="btn btn-lg btn-splash">Blog</a>
                                <a href="/downloads/laru-cv-tr.pdf" class="btn btn-lg btn-splash">Özgeçmişi İndir</a>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </header>

        <section id="connections" class="section-gray">
            <div class="container">
                <div class="xheader">
                    <h2><a href="#connections" class="xscroll-link">Bağlantılar</a></h2>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="sub-heading"><a href="/blog/"><i class="fa fa-rss margin-right-10px"></i>Blog</a></h3>
                        <p class="text-justify">Bilişimdeki son gelişmeler ve bana heyecan veren bilişim konuları hakkında bir günlük.</p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="sub-heading"><a href="./?turkish/resume"><i class="fa fa-clipboard margin-right-10px"></i>Özgeçmişim</a></h3>
                        <p class="text-justify">Yeteneklerim, geçmiş eğitim ve iş deneyimlerim, sertifika ve projelerim hakkında bilgiler.</p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="sub-heading"><a href="http://devopsturkiye.com/"><i class="fa fa-cloud-download margin-right-10px"></i>Devops Türkiye</a></h3>
                        <p class="text-justify">Naçizane bilişim teknolojileri danışmanlığı ve proje yönetim girişimim.</p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="sub-heading"><a href="https://github.com/larukedi"><i class="fa fa-github margin-right-10px"></i>Github Profili</a></h3>
                        <p class="text-justify">Başlattığım ve girişimde bulunduğum Open Source projelerimi barındıran Github profilim.</p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="sub-heading"><a href="https://www.linkedin.com/in/eserozvataf"><i class="fa fa-linkedin margin-right-10px"></i>LinkedIn Profili</a></h3>
                        <p class="text-justify">LinkedIn'deki profesyonel iş ağım ve geçmiş iş deneyimlerim.</p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="sub-heading"><a href="https://twitter.com/eserozvataf"><i class="fa fa-twitter margin-right-10px"></i>Twitter Profili</a></h3>
                        <p class="text-justify">Çoğunlukla teknoloji ve yazılım geliştirme üzerine olan tweetlerim.</p>
                    </div>

                </div>
            </div>
        </section>

        <section id="aboutme">
            <div class="container">
                <div class="xheader">
                    <h2><a href="#aboutme" class="xscroll-link">Hakkımda</a></h2>
                </div>

                <p>
                    2004'de Celal Bayar Üniversitesi Bilgisayar Programcılığı bölümünden mezun olduktan sonra İzmir'de sırasıyla Egebilgi, Ispro ve devBiz firmalarında Uzman Yazılım Geliştirici olarak çalıştım.
                    Askerlik görevimi tamamladıktan 2008'de Turkcell Çözüm Ortakları arasında bulunan CMFNET/Mobilpark firmasında deneyimli Full Stack (Tam Donanımlı) Yazılım Geliştirici ve Takım Liderliği görevini üstlendim.
                    2011 yılı itibariyle tekrar akademi'ye dönerek Doğu Akdeniz Üniversitesi çatısı altında önce Information Technology lisansı, ardından Information and Communications in Education
                    yüksek lisansı programlarını tamamladım.
                </p>
                <p>
                    Bu aralar zamanımı Zaimoğlu Holding için e-ticaret sistemlerinin bakım ve tasarımını yaparak harcıyorum. Yazılım geliştirmenin devops, takım yönetimi&amp;yol göstericilik, kalite yönetimi, kullanıcı deneyimi,
                    mimari tasarım ve ar-ge gibi daha özel alanlarında uzmanlaşmak için kod yazmayı kenara bırakmış bulunuyorum.
                </p>
                <p>
                    <a href="https://larukedi.github.io">12 yıl profesyonel iş ve proje deneyimi</a>min yanı sıra açık kaynaklı projelerin oluşturulmasına ve geliştirilmesine destek olmaktayım.
                </p>

                <div class="xheader">
                    <h2>İlgi duyduklarım:</h3>
                </h2>

                <div class="row interest">
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-code width-25px margin-right-10px"></i>Yazılım Geliştirme</h3>
                    </div>
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-tasks width-25px margin-right-10px"></i>BT Proje Yönetimi</h3>
                    </div>
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-question-circle width-25px margin-right-10px"></i>BT Danışmanlığı</h3>
                    </div>
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-cogs width-25px margin-right-10px"></i>DevOps</h3>
                    </div>
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-code-fork width-25px margin-right-10px"></i>Açık Kaynak</h3>
                    </div>
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-user width-25px margin-right-10px"></i>Kullanıcı Deneyimi</h3>
                    </div>
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-globe width-25px margin-right-10px"></i>Sosyal Medya</h3>
                    </div>
                    <div class="col-md-3">
                        <h3 class="sub-heading"><i class="fa fa-link width-25px margin-right-10px"></i>SEO</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container">
                <div class="xheader">
                    <h2><a href="#projects" class="xscroll-link">Açık Kaynak Projeler</a></h2>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <ul class="media-list">
                            <li class="media clearfix">
                                <a class="pull-left" href="http://scabbiafw.com/"><img class="media-object thumbnail" src="assets/images/projects/proj-scabbia-framework.png" alt="Scabbia Framework" /></a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="http://scabbiafw.com/">Scabbia Framework</a></h3>
                                    <p class="text-justify">
                                        Scabbia başlarda php'de bazı görevleri tamamlamak için tasarlanmış kütüphaneler bütünüydü. Bu kütüphaneleri ufak bir açılış/bootstrap koduyla birlikte kullanmaya başladığımda bir framework projesi haline geldi.
                                        Yıllar süren deneyim ve projelerin omurgası olma görevini üstlendikten sonra, yeni sürüm şu anda planlama safhasında. Detaylar için <a href="https://github.com/scabbiafw/scabbia2-fw">Github repo</a>sunu inceleyebilirsiniz.
                                    </p>
                                </div>
                            </li>

                            <li class="media clearfix">
                                <a class="pull-left" href="https://larukedi.github.io/laroux.js"><img class="media-object thumbnail" src="assets/images/projects/proj-laroux-js.png" alt="laroux.js" /></a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="https://larukedi.github.io/laroux.js">laroux.js</a></h3>
                                    <p class="text-justify">
                                        Modern web ve mobil tarayıcıları hedeflediğimden, jQuery 2.0'dan önce jQuery özelliklerinin eskimiş kodlar olmaksızın hafif bir sürümünü arıyordum.
                                        jquery-in-parts gibi alternatifler ancak jquery fonksiyonlarını taklit ederek tüm dom elemanlarını kendi objelerine dönüştürüyordu. Yeni bir "javascript kütüphanesi"
                                        projesi başlatarak insanların kendilerini sihirli işler olmaksızın javascript kodladığını hissetmesini hedefledim.
                                    </p>
                                </div>
                            </li>

                            <li class="media clearfix">
                                <a class="pull-left" href="https://github.com/larukedi/tasslehoff"><img class="media-object thumbnail" src="assets/images/projects/proj-tasslehoff.png" alt="Tasslehoff" /></a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="https://github.com/larukedi/tasslehoff">Tasslehoff</a></h3>
                                    <p class="text-justify">
                                        Tasslehoff C#'da yazılan bir iş ve zamanlama yöneticisidir. Ayrıca size sisteminizin parçalarını başlatıp durdurabileceğiniz bir servis ağacı oluşturmakta yardımcı
                                        olur.
                                    </p>
                                </div>
                            </li>

                            <li class="media clearfix">
                                <a class="pull-left" href="https://github.com/larukedi/pm"><img class="media-object thumbnail" src="assets/images/projects/proj-pmtool.png" alt="PM Tool" /></a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="https://github.com/larukedi/pm">PM Tool</a></h3>
                                    <p class="text-justify">
                                        Redmine, ChiliProject, JIRA, Trello, Asana ve diğerleri. Tümü proje yönetimi için oldukça güçlü araçlar. Yine de açık kaynak ve PHP'de kodlanmış
                                        herhangi bir alternatif bulamadım. Proje şimdilik kullanıcı, gruplar, işler, özel sayfalar içermekte. Yakında MVC frontend uygulamak için zaman kolluyorum.
                                    </p>
                                </div>
                            </li>

                            <li class="media clearfix">
                                <a class="pull-left" href="https://github.com/larukedi/survey"><img class="media-object thumbnail" src="assets/images/projects/proj-survey.png" alt="Survey Tool" /></a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="https://github.com/larukedi/survey">Survey Tool</a></h3>
                                    <p class="text-justify">
                                        Bu proje lisans eğitimim için bitirme projemdi. Surveymonkey-gibi sitelerin fonksiyonel bir klonu olarak tasarlandı. Bu da bu projeyle kolayca anketler
                                        oluşturabileceğiniz ve bunları online dağıtacağınız anlamına geliyor.
                                    </p>
                                </div>
                            </li>

                            <li class="media clearfix">
                                <a class="pull-left" href="https://github.com/larukedi/ioq3"><img class="media-object thumbnail" src="assets/images/projects/proj-q3now.png" alt="q3now" /></a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="https://github.com/larukedi/ioq3">q3now</a></h3>
                                    <p class="text-justify">
                                        q3now pro mode fizikleri, yeni can ve zırh sistemi, yeni silah dengeleri, duvardan zıplamalar ve oyun modlarıyla açık kaynak Quake 3 Modifikasyon projesidir.
                                    </p>
                                </div>
                            </li>

                            <li class="media clearfix">
                                <a class="pull-left" href="https://github.com/larukedi/html5-boilerplate"><img class="media-object thumbnail" src="assets/images/projects/proj-boilerplate.png" alt="HTML5 Boilerplate" /></a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="https://github.com/larukedi/html5-boilerplate">HTML5 Boilerplate</a></h3>
                                    <p class="text-justify">
                                        HTML5 boilerplate hızlı, kuvvetli ve adapte olabilen web uygulamaları ve siteleri geliştirmek için profesyonel bir önyüz şablonudur. Orijinal projeyi özel Bootstrap oluşturma, Font-Awesome,
                                        laroux.js ve bazı kod kalitesi araçlarını destekleyecek şekilde çatalladım (fork) ve değiştirdim.
                                    </p>
                                </div>
                            </li>
                        </ul>

                        Yukarıdaki projeler başlatmış olduğum açık kaynak projeler arasından seçilmiştir. Katkıda bulunduğum ve diğer başlattığım projelerim <a href="https://github.com/larukedi">Github profilim</a>de bulunabilir.
                    </div>
                </div>
            </div>
        </section>

        <section id="blogposts" class="section-gray">
            <div class="container">
                <div id="blogposts-recent" class="row">
                    <div class="xheader">
                        <h2><a href="#blogposts-recent" class="xscroll-link">Blog Yazıları</a></h2>
                    </div>

                    <div id="blogposts-recent-feed">
                        <div class="row blogpost-spacing">
                            <div class="col-xs-12 col-md-12">
                            <?php foreach ($blogposts as $post) { ?>
                                <!-- Blog Post -->
                                <h3 class="sub-heading"><i class="fa fa-file-text-o"></i> <a href="<?php echo $post['link']; ?>"><?php echo $post['title']; ?></a><span class="timestamp"> – <?php echo date('Y-m-d', $post['ts']); ?></span></h3>
                                <p class="lead">
                                    <?php echo $post['summary']; ?>
                                    <a href="<?php echo $post['link']; ?>" class="nowrap">devamını oku</a>
                                </p>
                                <div class="line"></div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    require '_footer.php';
?>
