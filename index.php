<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/25a3d60238.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@300;400&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>PROFF</title>
</head>

<body>
    <button class="burger-btn">
        <i class="fas fa-bars burger-btn__tools"></i>
    </button>
    <header class="header">
        <div class="header__container">
            <div class="header__logo logo-left">
                <div class="header__img"></div>
                <span class="header__title">PROFF</span>
            </div>
            <nav class="header__navigation">
                <ul class="header__main-menu">
                    <li class="header__list"><a href="#top" class="header__item header__item--border">O nas</a></li>
                    <li class="header__list"><a href="#middle" class="header__item header__item--border">Oferta</a></li>
                    <li class="header__list"><a href="#bottom" class="header__item header__item--border">Galeria</a>
                    </li>
                    <li class="header__list header__list--border"><a href="#contact" class="header__item">Kontakt</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- 
1.LAZY LOADING NA GALERIE
2.ZMIANA WAGI VIDEO ? 
3. DODANIE 2 ZDJĘĆ Z GMAIL 
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

    <main class="main">
        <div class="main__container">
            <div class="main__bgfilter"></div>
            <video class="main__video" playsinline="" autoplay="" loop="" muted="">
                <source src="./img/photo/inne/pexels-tima-miroshnichenko-6474265.mp4" type="video/mp4">
                <source src="./img/photo/inne/pexels-tima-miroshnichenko-6474265.mp4" type="video/webm">
                <source src="./img/photo/inne/pexels-tima-miroshnichenko-6474265.mp4" type="video/ogv">
            </video>
            <div class=" main__text-container">
                <h1 class="main__text">jd proff</h1>
                <p class="main__sub-text"> to młody i dynamiczny zespół
                    oferujący usługi z zakresu prac
                    remontowych i
                    budowlanych.</p>
            </div>
        </div>
        <section id="" class="Summer wrapper-style">
            <h2 class="Summer__title title-heading ">Malowanie dachów - Oferta Letnia</h2>
            <div class="Summer__offert">
                <div class="Summer__box-img "><img src="./img/JD_A6_2_2_DRUK.jpeg" alt="" class="Summer__img">
                </div>
                <div class="Summer__offert-text tekst-box fade-in">
                    <h3 class="Summer__offert-subtitle sub-title"> Malowanie dachów...</h3>
                    <p class="Summer__text-first tekst-box">Wymiana dachu to bardzo duży wydatek, którego każdy chce
                        uniknąć,choć
                        nie zawsze jest to możliwe.
                        Można jednak zaoszczędzić sporo pieniędzy regularnie dbając o pokrycie i pielęgnując je.
                        Konserwacja dachu potrafi kosztować nawet kilkadziesiąt razy mniej niż jego wymiana.
                        Czyszczenie,impregnacja i malowanie dachu
                        co kilka(a w sprzyjających warunkach nawet co kilkanaście) lat, pozwoli Ci wydłużyć jego
                        żywotność o okres kilkunastu
                        lub nawet kilkudziesięciu kolejnych sezonów.
                    </p>
                    <p class="Summer__text-second tekst-box">Dlatego też chcielibyśmy Państwu zaoferować nasze usługi z
                        zakresu malowania dachów.
                        Oferta jest dostępna w okresie letnim i zapraszamy do skorzystania z naszych usług.
                        Wszelkie informacje odnośnie : kosztów usługi, czasu realizacji, wykonania, prosimy kierować pod
                        numer telefon, lub adres e-mail.</p>
                </div>
            </div>
        </section>


        <section id="top" class="top  wrapper-style">
            <h2 class="top__title title-heading ">O nas</h2>
            <div class="top__about">
                <div class="top__box-img fade-in"><img src="./img/photo/inne/IMG_20190608_205825 MINI.jpg" alt="" class="top__img"></div>
                <div class="top__text tekst-box fade-in">
                    <p class="top__text-first"> Zajmujemy się wykonywaniem projektów na terenie Oslo i okolic,
                        a także
                        podejmujemy się długoterminowych projektów wyjazdowych</p>
                    <p class="top__text-second">Korzystając z naszej wiedzy i nabytych umiejętności, doradzamy
                        klientom aby uzyskać jak
                        najlepszy i profesjonalny efekt końcowy. Dzięki dobrej komunikacji z naszymi współpracownikami
                        jesteśmy w stanie na bieżąco koordynować zakres prac wykonywanych przy projekcie. Nasza solidna
                        wiedza oraz zaangażowanie w usługi jakie wykonujemy, to podstawa udanego projektu.</p>
                </div>
            </div>
        </section>
        <div class="first-img"></div>


        <section class="whyUs wrapper-style">
            <h2 class="whyUs__title title-heading">Dlaczego warto nam zaufać?</h2>
            <div class="whyUs__container">
                <h3 class="whyUs__subtitle sub-title">Jakość</h3>
                <div class="whyUs__item-box whyUs__item-box--right">
                    <img src="./img/pexels-anete-lusina-4792483.jpg" alt="laying a renovation plan" class="whyUs__item-img">
                    <p class="whyUs__item-text tekst-box">Świadczymy najwyższej jakości usługi remontowe, zachowując
                        przy tym
                        atrakcyjne ceny.Naszym atutem też jest zgrany zespół który gotowy jest podjąć się każdego
                        wyzwania.</p>
                </div>
            </div>
            <div class="whyUs__container">
                <h3 class="whyUs__subtitle sub-title">Doświadczenie</h3>
                <div class="whyUs__item-box">
                    <img src="./img/pexels-skitterphoto-1388944.jpg" alt="floor finish
" class="whyUs__item-img">
                    <p class="whyUs__item-text tekst-box">Posiadamy wieloletnie doświadczenie w dziedzinie kompleksowych
                        remontów
                        i wykończeń wnętrz
                        mieszkań i cały czas
                        poszerzamy wiedzę i umiejętności</p>
                </div>
            </div>
            <div class="whyUs__container">
                <h3 class="whyUs__subtitle sub-title">Otwartość</h3>
                <div class="whyUs__item-box whyUs__item-box--right">
                    <img src="./img/light-bulb-1246043_1920.jpg" alt=" light bulb" class="whyUs__item-img">
                    <p class="whyUs__item-text tekst-box">Nie boimy się niestandardowych pomysłów.Dzięki im możemy też
                        poszerzać
                        swoją wiedzę z zakresu
                        usług remontowych jak i budownictwa</p>
                </div>
            </div>
            <div class="whyUs__container">
                <h3 class="whyUs__subtitle sub-title">Kultura osobista</h3>
                <div class="whyUs__item-box">
                    <img src="./img/pexels-savvas-stavrinos-814544.jpg" alt="handshake" class="whyUs__item-img">
                    <p class="whyUs__item-text tekst-box">Zapewniamy kulturalnę i profesjonalną obsługę oraz gwarantujmy
                        Klientom
                        satysfakcję z
                        powierzonych nam prac.</p>
                </div>
            </div>

        </section>
        <section id="middle" class="middle wrapper-style">
            <h2 class="middle__title  title-heading">Oferta</h2>
            <div class="middle__about">
                <p class="middle__text tekst-box ">Kluczowymi sektorami w działalności naszej firmy są:
                </p>
            </div>
            <div class="middle__container fade-in">
                <div class="middle__box">
                    <i class="fas fa-hammer middle__hammer"></i>
                    <h3 class="middle__subtitle sub-title"> Stolarka wewnętrzna i zewnętrzna
                    </h3>
                    <li class="middle__list tekst-box">Stawianie ścian</li>
                    <li class="middle__list tekst-box">Małe domki szkieletowe</li>
                    <li class="middle__list tekst-box">Garaży</li>
                    <li class="middle__list tekst-box">Sufitów</li>
                    <li class="middle__list tekst-box">Montaż drzwi i okien</li>
                    <li class="middle__list tekst-box">Układanie parkietów</li>
                </div>
                <div class="middle__box ">
                    <i class="fas fa-toolbox  middle__toolbox"></i>
                    <h3 class="middle__subtitle sub-title">Montaż mebli
                    </h3>
                    <li class="middle__list tekst-box">Meble kuchenne</li>
                    <li class="middle__list tekst-box">Meble łazienkowe</li>
                    <li class="middle__list tekst-box">Meble pokojowe</li>
                </div>
                <div class="middle__box">
                    <i class="fas fa-paint-roller  middle__roller"></i>
                    <h3 class="middle__subtitle sub-title">Prace remontowe</h3>
                    <li class="middle__list tekst-box">Malowanie wewnętrzne</li>
                    <li class="middle__list tekst-box">Malowanie zewnętrzne</li>
                    <li class="middle__list tekst-box">Inne prace remontowe</li>
                </div>
            </div>
        </section>

        <section class="steps  wrapper-style">
            <div class="bgc-overlay">
                <div class="steps__title">
                    <h2 class="steps__text  sub-title">Etapy współpracy</h2>
                </div>
                <div class="steps__timeline">
                    <div class="steps__container-heading">
                        <div class="steps__heading">
                            <a href="#0" data-tab-target="#one" class="steps__timeline-icon steps__timeline-icon--active"><i class="fas fa-phone-alt"></i></a>
                            <h3 class="steps__subtitle ">Etap pierwszy</h3>
                        </div>
                        <div class="steps__heading">
                            <a href="#0" data-tab-target="#two" class="steps__timeline-icon"><i class="fas fa-drafting-compass"></i></a>
                            <h3 class="steps__subtitle">Etap drugi</h3>
                        </div>
                        <div class="steps__heading">
                            <a href="#0" data-tab-target="#three" class="steps__timeline-icon"><i class=" fas fa-hand-holding-usd"></i></a>
                            <h3 class="steps__subtitle">Etap trzeci</h3>
                        </div>
                        <div class="steps__heading">
                            <a href="#0" data-tab-target="#four" class="steps__timeline-icon"><i class="fas fa-tools"></i></a>
                            <h3 class="steps__subtitle">Etap czwarty</h3>
                        </div>
                        <div class="steps__heading">
                            <a href="#0" data-tab-target="#five" class="steps__timeline-icon"><i class="far fa-smile-wink"></i></a>
                            <h3 class="steps__subtitle">Etap piąty</h3>
                        </div>
                    </div>


                    <div class="steps__timeline-item">
                        <div class="steps__container-word">
                            <div class="steps__word steps__word--active" id="one" data-tab-content>
                                <span class="steps__subtitle-Mobile">Krok pierwszy</span>
                                <h2 class="steps__title sub-title">Kontakt z nami</h2>
                                <p class=" steps__text-paragraf ">Skontaktuj się z nami za pośrednictwem formularza
                                    zgłoszeniowego, który znajduje na dole strony
                                    lub zadzwoń pod numer 966 82 586.
                                </p>
                            </div>
                            <div class="steps__word" id="two" data-tab-content>
                                <span class="steps__subtitle-Mobile ">Krok drugi</span>
                                <h2 class="steps__title sub-title">Ustalenie szczegółów prac</h2>
                                <p class="steps__text-paragraf">Każdy realizowany przez nas projekt jest inny, dlatego
                                    chcemy jak najszybciej obejrzeć miejsce pracy i
                                    zaplanować projekt zgodnie z oczekiwaniami klienta.</p>
                            </div>
                            <div class="steps__word" id="three" data-tab-content>
                                <span class="steps__subtitle-Mobile">Krok trzeci</span>
                                <h2 class="steps__title sub-title">Ustalenie ceny</h2>
                                <p class="steps__text-paragraf">Cena ustalana jest indywidualnie z klientem w oparciu o
                                    oczekiwania
                                    oraz dobór materiału po konsultacji z
                                    klientem.</p>
                            </div>
                            <div class="steps__word" id="four" data-tab-content>
                                <span class="steps__subtitle-Mobile">krok czwarty</span>
                                <h2 class="steps__title sub-title">Wykonanie pracy</h2>
                                <p class="steps__text-paragraf">Stawiamy na profesjonalizm, dokładność i rzetelność w
                                    realizacji naszych zleceń. Po zaplanowaniu
                                    projektu staramy się jak najszybciej podjąć pracę aby wykonać go w jak najkrótszym
                                    czasie.</p>
                            </div>
                            <div class="steps__word" id="five" data-tab-content>
                                <span class="steps__subtitle-Mobile">krok piąty</span>
                                <h2 class="steps__title sub-title">Usmiech zadowolonego klienta</h2>
                                <p class="steps__text-paragraf">Mamy nadzieję, że każdy klient będzie zadowolony ze
                                    współpracy z naszą firmą, oraz doceni nasze
                                    zaangażowanie i profesjonalizm.</p>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </section>
        <section id="bottom" class="bottom wrapper-style">
            <h2 class="bottom__title title-heading">Nasze projekty</h2>
            <div class="bottom__about">
                <p class="bottom__text-first tekst-box">Dzięki naszemu wieloletniemu doświadczeniu wiemy, jak zapewnić
                    każdemu z naszych klientów fachową obsługę.
                    Niezależnie
                    od tego, czy chodzi o ocieplenie elewacji, montaż umywalki, czy też o malowanie.
                </p>
                <p class="bottom__text-second tekst-box">
                    W naszej firmie zrozumienie potrzeb klienta, jest bardzo ważnym elementem, dlatego też
                    cały proces projektowy rozpoczyna się od obejrzenia miejsca pracy, a także od szczegółowej i
                    wnikliwej rozmowy z klientem.
                </p>
            </div>

            <div class="gallery">
                <nav class="gallery__nav">
                    <ul class="gallery__nav-box">
                        <li data-name="all" class="gallery__nav-item gallery__nav-item-0 gallery__nav-item--active">
                            Wszystkie
                            zdjęcia</li>
                        <li data-name="projekt 1" class="gallery__nav-item gallery__nav-item-1">Projekt 1</li>
                        <li data-name="projekt 2" class="gallery__nav-item gallery__nav-item-2">Projekt 2</li>
                        <li data-name="projekt 3" class="gallery__nav-item gallery__nav-item-3">Projekt 3</li>
                        <li data-name="projekt 4" class="gallery__nav-item gallery__nav-item-4">Projekt 4</li>
                        <li data-name="projekt 5" class="gallery__nav-item gallery__nav-item-5">Projekt 5</li>
                        <li data-name="projekt 6" class="gallery__nav-item gallery__nav-item-6">Projekt 6</li>
                    </ul>
                </nav>
                <div class="gallery__cointainer">
                    <div class="gallery__box">
                        <div data-original="ogródek przed.jpg" data-name="projekt 1" class="gallery__items">
                            <img src="img/photo/ogródek/ogródek przed.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">Przed</h3>
                        </div>
                        <div data-original="ogródek po.jpg" data-name="projekt 1" class="gallery__items">
                            <img src="img/photo/ogródek/ogródek po.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">po</h3>
                        </div>
                        <div data-original="patio przed.jpg" data-name="projekt 2" class="gallery__items">
                            <img src="img/photo/patio/patio przed.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">Przed</h3>
                        </div>
                        <div data-original="patio po.jpg" data-name="projekt 2" class="gallery__items">
                            <img src="img/photo/patio/patio po.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">po</h3>
                        </div>
                        <div data-original="pomieszczenie przed.jpg" data-name="projekt 3" class="gallery__items">
                            <img src="img/photo/pomieszczenie/pomieszczenie przed.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">przed</h3>
                        </div>
                        <div data-original="pomieszczenie w trakcie.jpg" data-name="projekt 3" class="gallery__items">
                            <img src="img/photo/pomieszczenie/pomieszczenie w trakcie.jpg" alt="" class="gallery__img gallery__img--third">
                        </div>
                        <div data-original="pomieszczenie po.jpg" data-name="projekt 3" class="gallery__items">
                            <img src="img/photo/pomieszczenie/pomieszczenie po.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">po</h3>
                        </div>
                        <div data-original="tarasik przed.jpeg" data-name="projekt 4" class="gallery__items">
                            <img src="img/photo/tarasik/tarasik przed.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">przed</h3>
                        </div>
                        <div data-original="tarasik po.jpeg" data-name="projekt 4" class="gallery__items">
                            <img src="img/photo/tarasik/tarasik po.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">po</h3>
                        </div>
                        <div data-original="patio przed.jpg" data-name="projekt 5" class="gallery__items">
                            <img src="img/photo/patio2/patio przed.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">przed</h3>
                        </div>
                        <div data-original="patio po przód.jpeg" data-name="projekt 5" class="gallery__items">
                            <img src="img/photo/patio2/patio po przód.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">po </h3>
                        </div>
                        <div data-original="patio po bok.jpeg" data-name="projekt 5" class="gallery__items">
                            <img src="img/photo/patio2/patio po bok.jpg" alt="" class="gallery__img gallery__img--third">
                            <h3 class="gallery__text sub-title">po</h3>
                        </div>
                        <div data-original="malowanie domu przed.jpg" data-name="projekt 6" class="gallery__items">
                            <img src="img/photo/dom - malowanie/malowanie domu przed-small.jpg" alt="" class="gallery__img">
                            <h3 class="gallery__text sub-title">przed </h3>
                        </div>
                        <div data-original="malowanie domu po.jpg" data-name="projekt 6" class="gallery__items">
                            <img src="img/photo/dom - malowanie/malowanie domu po-small.jpg" alt="" class="gallery__img gallery__img--second">
                            <h3 class="gallery__text sub-title">po</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="previewBox">
                <div class="previewBox__details">
                    <h3 class="previewBox__title sub-title">Kategoria: <span> Nie znaleziono</span></h3>
                    <span class="icon fas fa-times previewBox__icon"></span>
                </div>
                <div class="previewBox__images">
                    <img src="" alt="" class="previewBox__img">
                </div>
            </div>

        </section>




        <section id="contact" class="contact wrapper-style">
            <h2 class="contact__heading title-heading">Skontaktuj się z nami</h2>

            <div class="contact__wrapper">
                <div class="contact__box fade-in">
                    <h3 class="contact__lefttitle sub-title">Porozmawiajmy o Twoim projekcie</h3>
                    <div class="contact__information">
                        <p class="contact__paragraf tekst-box">W przypadku zainteresowania naszą ofertą z
                            przyjemnością spotkamy się aby szczegółowo
                            odpowiedzieć na wszystkie Twoje
                            pytania.</p>
                        <ul class="contact__subinformation tekst-box">
                            <li class="contact__item">96-68-25-86</li>
                            <li class="contact__item">www.jdproff.no</li>
                            <li class="contact__item">kontor@jdproff.no</li>
                        </ul>
                    </div>
                </div>

                <form class="contact__form" method="POST" action="index.php">
                    <div class="contact__form-top">
                        <label for="name" class="contact__form-label">Nazwisko:</label>
                        <input type="text" id="name" name="name" class="contact__form-input">
                        <label for="email" class="contact__form-label">Adres e-mail:</label>
                        <input type="email" id="name" name="email" class="contact__form-input">
                    </div>
                    <label for="msg" class="contact__form-label">Wiadomość:</label>
                    <textarea id="msg" name="content" class="contact__form-textarea" cols="30" rows="10"></textarea>

                    <button type="submit" name="send" class="contact__form-btn">Wyślij</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer wrapper-style">

        <div class="footer__container ">
            <div class="footer__log logo-left">
                <div class="footer__img header__img"></div>
                <span class="footer__title header__title">PROFF</span>
            </div>

            <nav class="footer__nav">
                <ul class="footer__box">
                    <li class=""><a href="#top" class="footer__item">O nas</a></li>
                    <li class=""><a href="#middle" class="footer__item">Oferta</a></li>
                    <li class="t"><a href="#bottom" class="footer__item">Galeria</a></li>
                    <li class=""><a href="#contact" class="footer__item">Kontakt</a></li>
                </ul>
                <ul class="Communication">
                    <h3 class="Communication__title"></h3>
                    <li class="Communication__number "><a href="#" class="Communication__item footer__item">96-68-25-86</a></li>
                    <li class="Communication__adress "><a href="#" class="Communication__item footer__item">www.jdproff.no</a></li>
                    <li class="Communication__email "><a href="#" class="Communication__item footer__item">kontor@jdproff.no</a></li>
                </ul>
            </nav>
        </div>
        <div class="box-author">
            <p class="box-author__createdby">&copy;<span class="box-author__copy"></span> created by RKapelczak</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</body>

</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'inc/PHPMailer/src/Exception.php';
require 'inc/PHPMailer/src/PHPMailer.php';
require 'inc/PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $message_content = $_POST['content'];
    $message_name = $_POST['name'];
    $message_email = $_POST['email'];

    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->isHTML(true);
    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;

    $mail->Username = 'jdproffnorway@gmail.com';
    $mail->Password = 'XSW@1qaz';

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->setFrom($message_email, $message_name);
    $mail->addReplyTo($message_email, $message_name);
    $mail->addAddress('kontor@jdproff.no', $message_name);

    $mail->Subject = '[WWW] Zapytanie ofertowe <' . $message_email . '>';
    $content = $message_content;
    $mail->msgHTML($content);


    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //echo 'Message sent!';
    }
}


/*
https://accounts.google.com/b/0/DisplayUnlockCaptcha
https://www.google.com/settings/u/1/security/lesssecureapps
https://security.google.com/settings/security/activity?hl=en&pli=1
Less secure access - ON

*/
?>