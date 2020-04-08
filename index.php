<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Портфолио web-разработчика</title>
    <style> 
          @import url("/css/style.css");
    </style>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway&display=swap" rel="stylesheet">
    <link rel="icon" href="img/websitelogo.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
</head>
    <script>
     var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
        console.log(slides);
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        showSlides(1);
    </script>
<body>
<!--Home-->
    <section class="home" id="home">
        <div class="home-overlay">
        </div>
        
        <div class="heading wow zoomIn">
            <p class="heading-beginnig">Здравствуйте! Меня зовут Глеб и я</p>
            <h1>WED-DEVELOPER</h1>
            <p class="heading-end">Представляю Вам моё web-портфолио</p>
        </div>
        
        <div class="arrow-bottom">
            <a href="#header" class="anchor">
                <i class="fa fa-angle-down"></i>
            </a>
        </div>
    </section>
<!--Menu-->
    <header id="header">
        <div class="header-container col-12 col-sm-12 col-md-11 col-lg-10">
            <div class="header-logo">
                <a href="#home" class="anchor">
                    <img alt="logo" class="lazyloaded" src="img/193px-GV_logo.svg.png">
                </a>
            </div>
            
            <nav class="header-menu horizontal-menu" id="menu">
                <ul>
                    <li class="link-services">
                        <a class="anchor" href="#services">
                            <i class="fa fa-wallet"></i>
                            Услуги
                        </a>
                    </li>
                    <li class="link-about">
                        <a class="anchor" href="#about">
                            <i class="fa fa-street-view"></i>
                            Резюме
                        </a>
                    </li>
                    
                    <li class="link-portfolio">
                        <a class="anchor" href="#portfolio">
                            <i class="fa fa-suitcase"></i>
                            Портфолио
                        </a>
                    </li>
                    
                    <li class="link-experience">
                        <a class="anchor" href="#experience">
                            <i class="fa fa-book"></i>
                            Образование
                        </a>
                    </li>
                    
                    <li class="link-contact">
                        <a class="anchor" href="#contact">
                            <i class="fa fa-comment-alt"></i>
                            Контакты
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<!--Content-->
    <mein>
<!--        Services-->
 <section id="services">
    <h2>
        ЧЕМ Я ЗАНИМАЮСЬ
    </h2>
    <div class="underline"></div>
    <div class="services-container">
        <div class="services-frontend services-item wow slideInLeft">
                <div class="images">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3 class="services-title">
                    Frontend
                </h3>
                <p class="services-description">
                    Вёрстка красивых и современных веб-страниц с полной адаптивностью
                    под любые устройства и полноценной интерактивностью
                    как из PSD-макета, так и без него.
                </p>
        </div>
        <div class="services-backend services-item wow slideInRight">
                <div class="images">
                    <i class="fa fa-cog"></i>
                </div>
                <h3 class="services-title">
                    Backend
                </h3>
                <p class="services-description">
                    Разработка сложной backend логики для уже готового frontend'а,
                    либо по подробному техническому заданию с обеспечением максимальной
                    эффективности и производительности.
                </p>
        </div>
    </div>
        </section>
<!--        AboutMe-->
        <section id="about" class="about">
            <h2>
                РЕЗЮМЕ
            </h2>
            <div class="underline"></div>
            <div class="me-photo wow slideInDown">
                <img alt="face" src="img/face.PNG">
            </div>
            <div class="about-text wow bounceInLeft">
                <h3>Глеб Виноградов</h3>
                <p>
                    Я web-разработчик.<br> Моё хобби перешло в рабочий стиль, все навыки которые я приобрел во время самостоятельного обучения и<br> обучения в коллеже помогают мне создавать, как одностраничные сайты, так и корпоративные сайты.
                </p>
            </div>
            <ul class="social-links">
                <li>
                    <a href="https://vk.com/loydenor">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-discord"></i>
                    </a>
                </li>
            </ul>
        </section>
<!--        Porfolio-->
        <section id="portfolio">
            <h2>
                МОИ РАБОТЫ
            </h2>
            <div class="underline"></div>
            <div class="container-portfolio">
                 <div class="dws wow zoomIn">
                    <div class="blocImg"><img src="img/portfolio.PNG" alt="CSS эффект">
                        <div class="blocText">
                            <div class="text">
                                <h2>Сайт портфолио</h2>
                                <p>Сайт для<br>предоставления<br>своих навыков</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dws wow zoomIn">
                    <div class="blocImg"><img src="img/stepik.PNG" alt="CSS эффект">
                        <div class="blocText">
                            <div class="text">
                                <h2>Сертификат stepik</h2>
                                <p>Анализ<br> безопасности<br>веб-проектов</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dws wow zoomIn">
                    <div class="blocImg"><img src="img/planet.jpg" alt="CSS эффект">
                        <div class="blocText">
                            <div class="text">
                                <h2>Иллюстрация</h2>
                                <p>Работа выполнена в <br> Adobe Illustrator<br>"Планета"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--        Experience-->
        <section id="experience" class="experience">
            <h2>
                ОБРАЗОВАНИЕ
            </h2>
            <div class="underline"></div>
            <!-- Slideshow container -->
                        <div class="slideshow-container">

                          <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                              <h1>ПМ.01 Разработка программных модулей
                            программного обеспечения для компьютерных систем.</h1>
                            <div class="text-slide">
                              <h3>Профессиональные компетенции</h3>
                                <ul>
                                    <li>
                                        <span class="title">ПК 1.1.</span>
                                        Выполнять тестирование программных модулей.
                                    </li>
                                    <li>
                                        <span class="title">ПК 1.2.</span>
                                        Осуществлять оптимизацию программного кода модуля.
                                    </li>
                                    <li>
                                        <span class="title">ПК 1.3.</span>
                                        Выполнять разработку спецификаций отдельных компонент.
                                    </li>
                                    <li>
                                            <span class="title">ПК 1.4.</span>
                                            Выполнять отладку программных модулей с использованием специализированных
                                            программных средств.
                                    </li>
                                    <li>
                                            <span class="title">ПК 1.5.</span>
                                            Осуществлять разработку кода программного продукта на основе готовых
                                            спецификаций на уровне модуля.
                                    </li>
                                    <li>
                                            <span class="title">ПК 1.6.</span>
                                            Разрабатывать компоненты проектной и технической документации с
                                            использованием графических языков спецификаций.
                                    </li>
                                </ul>
                            </div>
                            
                            
                          </div>
                            <div class="mySlides fade">
                              <h1> ПМ.02 Разработка и администрирование баз данных.</h1>
                            <div class="text-slide">
                              <h3>Профессиональные компетенции</h3>
                                <ul>
                            <li>
                                <span class="title">ПК 2.1.</span>
                                Разрабатывать объекты базы данных.
                            </li>
                            <li>
                                <span class="title">ПК 2.2.</span>
                                Решать вопросы администрирования базы данных.
                            </li>
                            <li>
                                <span class="title">ПК 2.3.</span>
                                Реализовывать методы и технологии защиты информации в базах данных.
                            </li>
                                <li>
                                    <span class="title">ПК 2.4.</span>
                                    Реализовывать базу данных в конкретной системе управления базами данных.
                                </li>
                        </ul>
                            </div>
                            
                          </div>
                            <div class="mySlides fade">
                              <h1>ПМ.03 Участие в интеграции программных модулей.</h1>
                            <div class="text-slide">
                              <h3>Профессиональные компетенции</h3>
                                <ul>
                            <li>
                                <span class="title">ПК 3.1.</span>
                                Разрабатывать технологическую документацию.
                            </li>
                            <li>
                                <span class="title">ПК 3.2.</span>
                                Выполнять интеграцию модулей в программную систему.
                            </li>
                            <li>
                                <span class="title">ПК 3.3.</span>
                                Осуществлять разработку тестовых наборов и тестовых сценариев.
                            </li>
                                <li>
                                    <span class="title">ПК 3.4.</span>
                                    Выполнять отладку программного продукта с использованием специализированных
                                    программных средств.
                                </li>
                                <li>
                                    <span class="title">ПК 3.5.</span>
                                    Производить инспектирование компонент программного продукта на предмет
                                    соответствия стандартам кодирования.
                                </li>
                                <li>
                                    <span class="title">ПК 3.6.</span>
                                    Анализировать проектную и техническую документацию на уровне взаимодействия
                                    компонент программного обеспечения.
                                </li>
                        </ul>
                            </div>
                            
                          </div>
                            <div class="mySlides fade">
                              <h1>ПМ.04 Выполнение работ по одной или нескольким профессиям рабочих, должностям служащих.</h1>
                            <div class="text-slide">
                              <h3>Профессиональные компетенции</h3>
                                <ul>
                            <li>
                                <span class="title">ПК 4.1.</span>
                                Устанавливать и обслуживать программное обеспечение.
                            </li>
                            <li>
                                <span class="title">ПК 4.2.</span>
                                Обслуживать аппаратное обеспечение персонального компьютера.
                            </li>
                            <li>
                                <span class="title">ПК 4.3.</span>
                                Осуществлять навигацию по ресурсам, поиск, ввод и передачу данных с помощью технологий и сервисов Интернета.
                            </li>
                                <li>
                                    <span class="title">ПК 4.4.</span>
                                    Создавать и управлять на персональном компьютере текстовыми документами, таблицами, презентациями и публикациями.
                                </li>
                        </ul>
                            </div>
                            
                          </div>
                            <div class="mySlides fade">
                              <h1>ПМ.05 Разработка графических и пользовательских интерфейсов.</h1>
                            <div class="text-slide">
                              <h3>Профессиональные компетенции</h3>
                                <ul>
                            <li>
                                <span class="title">ПК 5.1.</span>
                                Производить тестирование и оптимизацию разработанного веб-приложения.
                            </li>
                            <li>
                                <span class="title">ПК 5.2.</span>
                                Размещать веб приложения в сети в соответствии с техническим заданием.
                            </li>
                            <li>
                                <span class="title">ПК 5.3.</span>
                                Разрабатывать техническое задание на веб-приложение в соответствии с требованиями заказчика.
                            </li>
                                <li>
                                    <span class="title">ПК 5.4.</span>
                                    Разрабатывать интерфейс пользователя и веб-приложение в соответствии с техническим заданием.
                                </li>
                                <li>
                                    <span class="title">ПК 5.5.</span>
                                    Разрабатывать дизайн-концепции веб-приложений в соответствии с корпоративным стилем заказчика.
                                </li>
                                <li>
                                    <span class="title">ПК 5.6.</span>
                                    Осуществлять разработку дизайна веб-приложения с учетом современных тенденций в области веб-разработки.
                                </li>
                                <li>
                                    <span class="title">ПК 5.7.</span>
                                    Формировать требования к дизайну веб-приложений на основе анализа предметной области и целевой аудитории.
                                </li>
                        </ul>
                            </div>
                            <div class="numbertext">5 / 5</div>

                  <!-- Next and previous buttons -->
                      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
                            <!-- Next and previous buttons -->
                              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
             <!-- The dots/circles -->
                    <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span>
                          <span class="dot" onclick="currentSlide(2)"></span>
                          <span class="dot" onclick="currentSlide(3)"></span>
                          <span class="dot" onclick="currentSlide(4)"></span>
                          <span class="dot" onclick="currentSlide(5)"></span>
                    </div>
                    <div class="plan">
                    <?php
                    $dbconn = parse_url(getenv('DATABASE_URL'));
                    $path = ltrim($dbconn['path'],'/');
                    $dsn = "pgsql:host={$dbconn['host']};port={$dbconn['port']};dbname={$path};";
                    $pdo = new PDO($dsn, $dbconn['user'], $dbconn['pass']);
                
                            $modal = "<h1>Учебный план</h1><table><thead><tr><td>Индекс</td><td>Наименование</td><td>Учебная нагрузка</td><td>Курс</td><td>Семестр</td><td>Оценка</td></tr></thead><tbody>";
                
                            $res = $pdo->query("SELECT * FROM up ORDER BY up.id ASC");
                
                            foreach ($res as $row){
                                $modal .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['utime'].'</td><td>'.$row['cours'].'</td><td>'.$row['semester'].'</td><td>'.$row['grade'].'</td></tr>';
                            }

                            $modal .= "</tbody></table><h1>Практики</h1><table style='margin: auto;'><thead><tr><td>Место прохождения</td><td>Вид практики</td><td>Сроки прохождения</td><td>Оценка</td></tr></thead><tbody>";

                            $res = $pdo->query("SELECT * FROM practiki");
                
                            foreach ($res as $row){
                                $modal .= '<tr><td>'.$row['mesto'].'</td><td>'.$row['vid'].'</td><td>'.$row['sroki'].'</td><td>'.$row['grade'].'</td></tr>';
                            }

                            $modal .= "</tbody></table>";

                            echo $modal;

                        ?>
                </div>
        </section>
<!--        ContactForm-->
        <section class="contact bg" id="contact">
            <div class="footer-overlay">
            </div>
            <h2>
                КОНТАКТЫ
            </h2>
            <div class="underline"></div>
            <form class="contact-form wow bounceInUp" action="mail.php" method="post">
                <p class="contact-discription">
                    Пожалуйста, оставьте свои контактные данные<br> и сообщение, чтобы я мог с Вами как можно скорее связаться.
                </p>
                <div class="name">
                    <input type="text" placeholder="Ваше имя..." name="name" required>
                </div>
                <div class="email">
                    <input type="email" placeholder="Ваш email..." name="email" required>
                </div>
                <div class="message">
                    <textarea rows="10" placeholder="Ваше сообщение..." name="message" required></textarea>
                </div>
                <div id="button">
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </section>
    </mein>
<!--        Footer-->
        <footer>
            <ul class="social-links">
                <li>
                    <a href="https://vk.com/loydenor">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-discord"></i>
                    </a>
                </li>
            </ul>
            <div class="copyright">Made by Gleb Vinogradov</div>
        </footer>
</body>
<!--    Scroll-->
    <script>
    $('a[href*=#]').bind("click", function(e) {
    var anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top
    }, 700);
    e.preventDefault();
    });
    </script>
</html>
