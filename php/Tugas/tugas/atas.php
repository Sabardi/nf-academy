<?php
include_once "webMenu.php";
?>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="index.php"><img src="sabardi.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <?php
                            // menggunakan  associative array untuk mengakses array yang ada di file webMenu
                            foreach ($menuAtas as $key => $value) {
                                echo "<li><a href='index.php?hal=$key'>$value</a></li>";
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
