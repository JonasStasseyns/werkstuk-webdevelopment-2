<!doctype html>
<html lang="en" style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
<head style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
    <meta charset="UTF-8" style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"
          style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
    <title style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">Document</title>
    <link rel="stylesheet" href="http://laravel.test/css/app.css"
          style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
    <style style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
        .nav {
            width: 100%;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            margin-bottom: 5vh;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1vw;
            box-sizing: border-box;
        }

        .links {
            display: flex;
        }

        .link {
            text-decoration: none;
            color: #212121;
            font-variant: all-small-caps;
        }

        .link-container,
        .logo {
            display: flex;
            align-items: center;
            padding: 0.5vw 0.5vw 0.2vw 0.5vw;
            margin-right: 1vw;
        }

        .logo a img {
            height: 8vh;
            padding-top: 0.1vw;
        }

        .footer {
            display: flex;
            justify-content: space-around;
            box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.3);
            padding: 1vw;
            margin-top: 5vh;
        }

        .sub-footer {
            display: flex;
            flex-direction: column;
        }

        .sub-footer-item {
            text-decoration: none;
            color: #212121;
        }

        .sub-footer-item.bold {
            font-weight: bold;
            font-variant: all-small-caps;
        }

        .registration-form {
            padding: 1vw;
        }

        .registration-form button,
        .login-forgot {
            color: #FAFAFA;
            text-decoration: none;
            background-color: #99B447;
            padding: 0.5vw;
            width: 100%;
            margin-top: 2vh;
            text-align: center;
            font-variant: all-small-caps;
        }

        .login-remember {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .login-remember input {
            width: auto !important;
            margin: 0 !important;
            margin-right: 1vw !important;
        }

        .login-forgot {
            font-size: 0.8em !important;
            font-family: "Roboto", sans-serif !important;
            margin-top: 1vh !important;
            width: 100%;
            border-radius: 2px;
            display: block;
            box-sizing: border-box;
        }

        .donation-form form {
            display: flex;
            flex-direction: column;
            padding-left: 2vw;
        }

        .donation-form form input,
        .donation-form form textarea {
            margin: 1vh 0;
            border-radius: 0;
        }

        .donate-form-form {
            width: 50%;
        }

        .donate-form-form input,
        .donate-form-form textarea {
            display: block;
            width: 100%;
            margin-bottom: 3vh;
            padding: 2vh;
            box-sizing: border-box;
            outline: none;
        }

        .donate-form-form label input:focus,
        .donate-form-form label textarea:focus {
            box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.3);
        }

        .donate-form-form input[type=submit] {
            color: #FAFAFA;
            text-decoration: none;
            background-color: #99B447;
            padding: 0.5vw;
            width: 100%;
            margin-top: 2vh;
            text-align: center;
            font-variant: all-small-caps;
        }

        .toast-error {
            background-color: #ff5252 !important;
            margin-bottom: 5vh;
        }

        .edit-form-list {
            display: flex;
            flex-direction: column;
        }

        .edit-item {
            margin: 1vh 0;
            display: flex;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            justify-content: space-between;
            width: 50%;
            padding: 1vw;
        }

        .edit-item form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .edit-item form label {
            display: flex;
            flex-direction: column;
            font-variant: all-small-caps;
            margin-bottom: 3vh;
        }

        .edit-item form label input {
            margin-top: 2vh;
        }

        .edit-item form input[type=submit] {
            width: 20%;
            font-weight: bold;
            font-variant: all-small-caps;
            color: #FAFAFA;
            padding: 0.5vw;
            background-color: #ffca36;
        }

        .toast {
            background-color: #81c784;
            width: 50%;
            padding: 1vw;
            margin: 1vh 0;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .admin-overview {
            display: flex;
            justify-content: space-between;
        }

        .admin-page-list {
            display: flex;
            flex-direction: column;
            margin-bottom: 5vh;
            width: 45%;
        }

        .admin-page {
            margin: 1vh 0;
            display: flex;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            justify-content: space-between;
        }

        .admin-page-name {
            padding: 1vw;
            font-variant: all-small-caps;
            font-size: 1.2em;
        }

        .admin-page-button {
            display: flex;
            align-items: center;
            padding: 1vw;
            text-decoration: none;
            font-variant: all-small-caps;
            font-weight: bolder;
            font-size: 1.2em;
            color: #FAFAFA;
            background-color: #99B447;
        }

        .more-posts {
            width: 20%;
            font-weight: bold;
            font-variant: all-small-caps;
            color: #FAFAFA;
            padding: 0.5vw;
            background-color: #99B447;
        }

        .blog-index-container {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .post-preview-item {
            width: 100%;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            padding: 1vw;
            box-sizing: border-box;
            margin-bottom: 3vh;
            display: flex;
            justify-content: space-between;
        }

        .post-preview-item-tc {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-right: 5vw;
        }

        .post-preview-item-tc h3 {
            margin-bottom: 2vh;
        }

        .post-preview-item-tc p {
            text-align: justify;
        }

        .post-preview-button {
            color: #FAFAFA;
            text-decoration: none;
            background-color: #ffca36;
            padding: 0.5vw;
            width: 20%;
            margin-top: 2vh;
            text-align: center;
            font-variant: all-small-caps;
        }

        .post-preview-fb {
            display: flex;
        }

        .post-preview-item img {
            height: 100%;
            max-height: 30vh;
        }

        .post-preview-item.admin-or {
            flex-direction: column;
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pagination-container nav ul {
            display: flex;
            justify-content: space-between;
            width: 20vw;
        }

        .pagination-container nav ul li {
            list-style: none;
        }

        .post-detail-container {
            padding-right: 2vw;
            box-sizing: border-box;
            width: 60%;
        }

        .post-detail-image-container {
            width: 40%;
        }

        .post-detail-image-container img {
            width: 100%;
        }

        .about-section {
            margin-top: 3vh;
            text-align: justify;
            width: 60%;
        }

        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
            line-height: 150%;
        }

        .wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-variant: all-small-caps;
            color: #212121;
        }

        input,
        textarea {
            border: none;
            border-bottom: 1px solid #BABABA;
        }

        input:focus,
        textarea:focus {
            box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.3);
        }

        input[type=submit],
        button {
            border: none;
            border-radius: 2px;
        }

        /*HOME*/

        .banner {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 45vh;
            margin-top: -5vh;
        }

        .home-banner {
            background-image: url("/images/home-banner.jpg");
            height: 91vh;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .about-banner {
            background-image: url("/images/about.jpg");
            background-position: 50% 65%;
            margin-bottom: 5vh;
        }

        .arrow {
            background-image: url("/images/download.svg");
            width: 4vw;
            height: 4vw;
            margin-bottom: 3vh;
            background-size: contain;
        }

        .sub-home-banner {
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .text-sub-home-banner {
            font-variant: all-small-caps;
            text-align: center;
            color: #F0F1F5;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .text-sub-home-banner h1,
        .text-sub-home-banner h3 {
            color: #F0F1F5;
        }

        .text-sub-home-banner h1 {
            font-size: 3em;
        }

        .section {
            display: flex;
            justify-content: flex-end;
            padding: 5vh 0;
        }

        .section + .section {
            justify-content: flex-start;
        }

        .sub-section {
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: white;
            margin: 1vw;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        .sub-section-text-container {
            width: 40%;
            padding: 2vw;
        }

        .sub-section-text-container ul li {
            margin: 1vh;
            margin-left: 0;
            list-style: none;
        }

        .sub-section-title {
            margin-bottom: 2vh;
        }

        .sub-section-text {
            text-align: justify;
        }

        .home-img {
            height: 100%;
            width: 50%;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .home-img.intro {
            background-position: right;
        }

        .sub-section-text-container.features {
            width: 70%;
        }

        .privacy-wrapper p {
            margin: 1vh 0;
            text-align: justify;
        }

        .privacy-wrapper h3 {
            margin-top: 5vh;
        }


    </style>
</head>
<body style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">
<nav class="nav"
     style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;width: 100%;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);margin-bottom: 5vh;">
    <div class="nav-wrapper"
         style="margin: 0 auto;padding: 0 1vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;justify-content: space-between;width: 100%;max-width: 1200px;box-sizing: border-box;">
        <div class="links"
             style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;">
            <div class="logo"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="http://laravel.test"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;"><img
                        src="http://laravel.test/images/logo.png" alt="logo.png"
                        style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;height: 8vh;padding-top: 0.1vw;"></a>
            </div>
            <div class="link-container"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="http://laravel.test" class="link"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-variant: all-small-caps;">home</a>
            </div>
            <div class="link-container"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="http://laravel.test/blog" class="link"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-variant: all-small-caps;">news</a>
            </div>
            <div class="link-container"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="http://laravel.test/about" class="link"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-variant: all-small-caps;">about</a>
            </div>
            <div class="link-container"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="http://laravel.test/contact" class="link"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-variant: all-small-caps;">contact</a>
            </div>
            <div class="link-container"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="http://laravel.test/donate" class="link"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-variant: all-small-caps;">donate</a>
            </div>
        </div>
        <div class="links auth-links"
             style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;">
            <div class="link-container"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="" class="link"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-variant: all-small-caps;">stasseynsjonas@gmail.com</a>
            </div>
            <div class="link-container"
                 style="margin: 0;padding: 0.5vw 0.5vw 0.2vw 0.5vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;align-items: center;margin-right: 1vw;">
                <a href="http://laravel.test/logout" class="link"
                   style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-variant: all-small-caps;">Logout</a>
            </div>
        </div>
    </div>
</nav>
<div class="wrapper"
     style="margin: 0 auto;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;width: 100%;max-width: 1200px;">
    <h1 style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;font-variant: all-small-caps;color: #212121;">
        Quas non dolore et ea enim maxime quia amet.</h1>
    <div class="blog-index-container"
         style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;width: 100%;flex-wrap: wrap;justify-content: space-between;">
        <div class="post-detail-container"
             style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;padding-right: 2vw;box-sizing: border-box;width: 60%;">
            <p style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">Architecto
                nihil sed ad nobis sapiente. Fugiat esse iste voluptas possimus dolor aut vero. Illo labore voluptatem
                est possimus deleniti eveniet. Eaque modi eos earum ullam recusandae.</p>
            <p style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;">Consectetur
                voluptas sed veritatis assumenda. Et eius adipisci enim sit. Et labore quae molestias a unde beatae.
                Perspiciatis ut ut voluptatibus omnis ex. Perspiciatis sed sapiente sint beatae modi itaque laboriosam
                porro. Unde placeat nemo cum eaque aut veniam autem. Non sed eius fugiat deleniti. Officiis unde rerum
                temporibus. Excepturi et laboriosam consequatur deleniti ut quia.</p>
        </div>
        <div class="post-detail-image-container"
             style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;width: 40%;">
            <img src="https://lorempixel.com/800/600/?83191" alt="https://lorempixel.com/800/600/?83191"
                 style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;width: 100%;">
        </div>
    </div>
</div>
<div class="footer"
     style="margin: 0;padding: 1vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;justify-content: space-around;box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.3);margin-top: 5vh;">
    <div class="nav-wrapper"
         style="margin: 0 auto;padding: 0 1vw;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;justify-content: space-between;width: 100%;max-width: 1200px;box-sizing: border-box;">
        <div class="sub-footer"
             style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;flex-direction: column;">
            <p class="sub-footer-item bold"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-weight: bold;font-variant: all-small-caps;">
                Sitemap</p>
            <a href="http://laravel.test/contact" class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">contact</a>
            <a href="http://laravel.test/about" class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">about</a>
            <a href="http://laravel.test/blog" class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">blog</a>
            <a href="http://laravel.test/donate" class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">donate</a>
        </div>
        <div class="sub-footer"
             style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;flex-direction: column;">
            <p class="sub-footer-item bold"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-weight: bold;font-variant: all-small-caps;">
                legal</p>
            <a href="http://laravel.test/privacy" class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">privacy
                policy</a>
            <p class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">
                terms and agreement</p>
            <p class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">
                license</p>
            <p class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">
                complaints</p>
        </div>
        <div class="sub-footer"
             style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;display: flex;flex-direction: column;">
            <p class="sub-footer-item bold"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;font-weight: bold;font-variant: all-small-caps;">
                Corporate</p>
            <p class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">
                team</p>
            <a href="http://laravel.test/contact" class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">contact</a>
            <p class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">
                our vision</p>
            <a href="http://laravel.test/admin" class="sub-footer-item"
               style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;text-decoration: none;color: #212121;">admin</a>
        </div>
    </div>
</div>
<script src="http://laravel.test/js/app.js" defer
        style="margin: 0;padding: 0;font-family: &quot;Roboto&quot;, sans-serif;line-height: 150%;"></script>
</body>
</html>
