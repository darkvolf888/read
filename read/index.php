<?php
    include ("db/db.php");
    include ("include/head.php");
    include ("include/preloader.php");
?>
        <div class="wrapper">
        <?php
            include ("include/header.php");
        ?>
        <main class="main">
            <div class="conteiner">
                <div class="main__body">
                    <?php
                        $info = get_info_all();
                        foreach ($info as $info):
                    ?>
                    <div class="main__body_content">
                        <a href="<?php echo $info["a"]; ?>" class="body_content">
                            <div class="d"><img src="content__icon/<?php echo $info["img"]; ?>" alt="<?php echo $info["alt"]; ?>" class="body_content_img"></div>
                            <div class="body__content_title">
                                <?php echo $info["title"]; ?>
                            </div>
                        </a>
                        <div class="body__content_download">
                            <a download href="<?php echo $info["dowl"]; ?>" class="downloader">
                                СКАЧАТЬ
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    <?php
        include ("include/footer.php");
    ?>
    </div>
