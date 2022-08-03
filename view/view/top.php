<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script defer src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <li class="menu-list"><a href="#slide">top</a></li>
                <li class="menu-list"><a href="#about">about</a></li>
                <li class="menu-list"><a href="#blog">blog</a></li>
                <li class="menu-list"><a href="#works">studentworks</a></li>
                <li class="menu-list"><a href="#artist">artist</a></li>
                <li class="menu-list"><a href="#footer">contact</a></li>
            </ul>
        </nav>
        <button type="button" class="btn js-btn">
        <span class="btn-line"></span>
    </header>
    <main>
        <div class="title"></div>
        <a href="works-view.php">view sample</a>
        <style>main a {display:block; width:500px; height:200px; font-size:36px; text-align:center; border:solid; line-height:200px;}</style>
        
        <?php
            
        ?>
        
    </main>
    <footer>
    <div id="footer" class="footer-main commonWidth ">
            <div class="footer-inner">
                <div class="contact">
                    <div class="title">contact</div>
                    <div class="footer-contact">
                        <h5 class="text-light">Email</h5>
                        <p class="text-white">manga-department@kua.kyoto-art.ac.jp</p>
                    </div>
                    <div class="footer-contact">
                        <h5 class="text-light">Phone</h5>
                        <p class="text-white">075 791 9710</p>
                    </div>
                    <div class="footer-contact">
                        <h5 class="text-light">Address</h5>
                        <p class="text-white">
                            〒606-8271<br>
                            京都市左京区北白川瓜生山2-116 天心館1F
                        </p>
                    </div>
                </div>
                <div class="footer-link">
                    <a href="" class="footer-logo"><img src="images/manga_logo_white.png" alt=""></a>
                    <div class="footer-btn">
                        <a href="">公式Twitter</a>
                        <a href="">京都芸術大学マンガ学科</a>
                        <a href="">YouTube</a>
                        <a href="">マンガ学科pixiv</a>
                    </div>
                    <div class="copyright">
                    <p>Copyright ©<script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                    </script><br><a href="https://www.kyoto-art.ac.jp/art/department/manga/manga/">KYOTO UNIVERSITY of ARTS department of MANGA</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>