<div class="main">
    <?php
        include("siderbar/siderbar.php")
    ?>
        <div class="content">
            <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam = '';
                }if($tam == 'danhmucsanpham'){
                    include("main/danhmuc.php");
                }else if($tam == 'giohang'){
                    include("main/giohang.php");
                }else if($tam == 'tintuc'){
                    include("main/tintuc.php");
                }else if($tam == 'lienhe'){
                    include("main/lienhe.php");
                }else if($tam == 'cuongluc'){
                    include("siderbar/cuongluc.php");
                }else if($tam == 'tainghe'){
                    include("siderbar/tainghe.php");
                }else if($tam == 'iphone'){
                    include("siderbar/iphone.php");
                }else if($tam == 'sac'){
                    include("siderbar/sac.php");
                }else if($tam == 'manhinh'){
                    include("siderbar/manhinh.php");
                }else if($tam == 'more'){
                    include("siderbar/more.php");
                }else{
                    include("main/index.php");
                }
            ?>
        </div>
</div>