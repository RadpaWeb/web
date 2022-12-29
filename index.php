<?php
    include __DIR__.'../'.'autoload.php';
    $database = new \classess\database('pro-web', 'root', '');
    session_start();



    $sql_count_user="select * from `tbl_register`";
    $result_count_user=$database->select($sql_count_user,array(),$type="fetchall");
    $count_user=count($result_count_user);

    // 
    $sql_count_coures="select * from `tbl_add_coures`";
    $result_count_coures=$database->select($sql_count_coures,array(),$type="fetchall");
    $count_coures=count($result_count_coures);

    // 

    $sql_count_article="select * from `tbl_add_new_article`";
    $result_count_article=$database->select($sql_count_article,array(),$type="fetchall");
    $count_atricle=count($result_count_article);



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/css/style.css">
        <link rel="stylesheet" href="asset/fonticon/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">
    </head>

    <body>

        <div class="line-top"></div>
        <header>
            <div class="header">


                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="#" style="font-size: 22px;">دیدستان
                        <i class="fab fa-angular fa-lg"></i>
                        </a>
                        <?php
                            if(isset($_SESSION['name_lastname_user']))
                            {
                                echo '
                                    <div class="dropdown mx-3">
                                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['name_lastname_user'].'</button>
                                    <div class="dropdown-menu" aria-labelledby="my-dropdown">
                                        <a class="dropdown-item active" href="exit-user.php" style="background: #fff!important;color: #29d;">خروج</a>
                                    </div>
                                </div>
                                    ';
                            }else{
                                echo '

                                <div class="show-mobile">
                                <a href="register.php" class="mr-md-3  mr-0 btn btn-white" style="color: #29d!important;">ثبت نام </a>
                                <a href="login.php" class="mr-md-1 ml-3 btn btn-white" style="color: #29d!important;"> ورود </a>
                                </div>

                                    ';
                            }
                        ?>



                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="index.php">صفحه اصلی </a>
                                    </li>
                                    <li class="nav-item" id="web-li">
                                        <a class="nav-link" href="#">آموزش تند خوانی</a>
                                    </li>
                                    <li class="nav-item" id="andriod-li">
                                        <a class="nav-link" href="#">اندروید</a>
                                    </li>
                                    <li class="nav-item" id="windows-li">
                                        <a class="nav-link" href="#">تحت ویندوز</a>
                                    </li>
                                    <li class="nav-item" id="garphic-li">
                                        <a class="nav-link" href="#">گرافیک</a>
                                    </li>
                                    <li class="nav-item" id="article-li">
                                        <a class="nav-link" href="#">مقالات آموزشی </a>
                                    </li>

                                </ul>
                            </div>
                    </div>
                </nav>


                <div class="container content-one pt-5 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="box shadow-lg text-center">
                                <h5 class="text-white">تعداد دانشجویان سایت</h5>
                                <div class="text-center mt-4">
                                    <span class="count shadow timer text-white d-block mx-auto" data-from="0" data-to="<?=$count_user;?>" data-speed="2000" data-refresh-interval="50">
                                     
                                </span>
                                    <hr>
                                    <i class="fa fa-graduation-cap fa-2x"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="box shadow-lg text-center">
                                <h5 class="text-white">تعداد دوره های آموزشی </h5>
                                <div class="text-center mt-4">
                                    <span class="count shadow timer text-white d-block mx-auto" data-from="0" data-to="<?=$count_coures;?>" data-speed="2000" data-refresh-interval="50">
                                     
                                </span>
                                    <hr>
                                    <i class="fa fa-video fa-2x"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="box shadow-lg text-center">
                                <h5 class="text-white">تعداد مقاله های سایت</h5>
                                <div class="text-center mt-4">
                                    <span class="count shadow timer text-white d-block mx-auto" data-from="0" data-to="<?=$count_atricle;?>" data-speed="2000" data-refresh-interval="50">
                                
                                </span>
                                    <hr>
                                    <i class="fa fa-user fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center p-0 m-0">
                            <div class="col-lg-12 mt-5 ">

                                <div class="text-center">
                                    <i class="fab fa-angular ani-icon text-white fa-5x"></i>
                                </div>

                                <p class="text-center typer text-white p-me-site p3 mb-5 pt-3 h3" data-text="وب آموز معتبرترین سایت تولید دوره های آموزشی در سطح وب میباشد"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <div class="wave">
            <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #e8f0ed;"></path></svg></div>
        </div>

        <main class="mb-5">
            <div class="container shadow-sm rounded mt-3 bg-one py-3" id="web">
                <h3 class="h5 d-inline-block float-left coures-title rounded p-1 mb-0"> آموزش تند خوانی</h3>
                <h3 class="h5 d-inline-block float-right coures-count  mb-0">3</h3>
                <div class="clearfix"></div>
                <hr>
                
                <div class="row dir-rtl">
                    <?php
                        $sqlweb="select * from `tbl_add_coures` where `category`=?";
                        $resultweb=$database->select($sqlweb,array('1'),$type="fetchall");
                        if(!empty($resultweb))
                        {
                            foreach($resultweb as $item)
                            {
                                echo '
                                <div class="col-lg-3">
                                        <div class="box-coures shadow-sm">
                                        <div class="img-box">
                                            <img src="admin/upload-images-coures/'.$item->img_coures.'" class="img-fluid w-100 " alt="">
                                        </div>
                                        <div class="name-coures pb-1 my-3">
                                            <h5 class="text-left">'.$item->name_coures.'</h5>
                                        </div>
                                        <div class="des-coures pb-3">
                                            <span class="d-inline-block mx-1 float-left" style="direction: rtl;">
                                            مدرس دوره :  
                                        </span>
                                            <span class="d-inline-block mx-1 float-right">';

                                            $sqlget_name_modars="select * from `tbl_add_new_ostad` where `id`=?";
                                            $result_get_modars=$database->select($sqlget_name_modars,array($item->modares_coures),$type="fetch");
                                            echo '
                                                 '.$result_get_modars->name_ostad.'
                                             
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="show pt-4">
                                            <span class="d-inline-block mx-1 float-left">
                                            <a href="more-coures.php?coures='.$item->id.'" class="bt px-3 py-2 btn-sm rounded btn-primary">مشاهده</a> 
                                        </span>
                                            <span class="d-inline-block rounded text-secondary shadow px-2 mx-1 float-right">
                                        22 <i class="fa fa-eye"></i>
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        </div>
                                </div>
                                 ';
                            }
                        }
                        else{

                        }
                    ?>
                </div>
            </div>
            <hr>
            <div class="container shadow-sm  rounded mt-3 bg-one py-3" id="andriod">
                <h3 class="h5 d-inline-block float-left coures-title rounded p-1 mb-0"> اندروید</h3>
                <h3 class="h5 d-inline-block float-right coures-count  mb-0">3</h3>
                <div class="clearfix"></div>
                <hr>
                <div class="row dir-rtl">
                        
                <?php
                        $sqlweb="select * from `tbl_add_coures` where `category`=?";
                        $resultweb=$database->select($sqlweb,array('2'),$type="fetchall");
                        if(!empty($resultweb))
                        {
                            foreach($resultweb as $item)
                            {
                                echo '
                                <div class="col-lg-3">
                                        <div class="box-coures shadow-sm">
                                        <div class="img-box">
                                            <img src="admin/upload-images-coures/'.$item->img_coures.'" class="img-fluid w-100 " alt="">
                                        </div>
                                        <div class="name-coures pb-1 my-3">
                                            <h5 class="text-left">'.$item->name_coures.'</h5>
                                        </div>
                                        <div class="des-coures pb-3">
                                            <span class="d-inline-block mx-1 float-left" style="direction: rtl;">
                                            مدرس دوره :  
                                        </span>
                                            <span class="d-inline-block mx-1 float-right">';

                                            $sqlget_name_modars="select * from `tbl_add_new_ostad` where `id`=?";
                                            $result_get_modars=$database->select($sqlget_name_modars,array($item->modares_coures),$type="fetch");
                                            echo '
                                                 '.$result_get_modars->name_ostad.'
                                             
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="show pt-4">
                                            <span class="d-inline-block mx-1 float-left">
                                            <a href="more-coures.php?coures='.$item->id.'" class="bt px-3 py-2 btn-sm rounded btn-primary">مشاهده</a> 
                                        </span>
                                            <span class="d-inline-block rounded text-secondary shadow px-2 mx-1 float-right">
                                        22 <i class="fa fa-eye"></i>
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        </div>
                                </div>
                                 ';
                            }
                        }
                        else{

                        }
                    ?>

                </div>
            </div>
            <hr>
            <div class="container shadow-sm  rounded mt-3 bg-one py-3" id="windows">
                <h3 class="h5 d-inline-block float-left coures-title rounded p-1 mb-0">تحت ویندوز</h3>
                <h3 class="h5 d-inline-block float-right coures-count  mb-0">3</h3>
                <div class="clearfix"></div>
                <hr>
                <div class="row dir-rtl">

                <?php
                        $sqlweb="select * from `tbl_add_coures` where `category`=?";
                        $resultweb=$database->select($sqlweb,array('3'),$type="fetchall");
                        if(!empty($resultweb))
                        {
                            foreach($resultweb as $item)
                            {
                                echo '
                                <div class="col-lg-3">
                                        <div class="box-coures shadow-sm">
                                        <div class="img-box">
                                            <img src="admin/upload-images-coures/'.$item->img_coures.'" class="img-fluid w-100 " alt="">
                                        </div>
                                        <div class="name-coures pb-1 my-3">
                                            <h5 class="text-left">'.$item->name_coures.'</h5>
                                        </div>
                                        <div class="des-coures pb-3">
                                            <span class="d-inline-block mx-1 float-left" style="direction: rtl;">
                                            مدرس دوره :  
                                        </span>
                                            <span class="d-inline-block mx-1 float-right">';

                                            $sqlget_name_modars="select * from `tbl_add_new_ostad` where `id`=?";
                                            $result_get_modars=$database->select($sqlget_name_modars,array($item->modares_coures),$type="fetch");
                                            echo '
                                                 '.$result_get_modars->name_ostad.'
                                             
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="show pt-4">
                                            <span class="d-inline-block mx-1 float-left">
                                            <a href="more-coures.php?coures='.$item->id.'" class="bt px-3 py-2 btn-sm rounded btn-primary">مشاهده</a> 
                                        </span>
                                            <span class="d-inline-block rounded text-secondary shadow px-2 mx-1 float-right">
                                        22 <i class="fa fa-eye"></i>
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        </div>
                                </div>
                                 ';
                            }
                        }
                        else{

                        }
                    ?>

                
                
                </div>
            </div>
            <hr>
            <div class="container shadow-sm  rounded mt-3 bg-one py-3" id="garphic">
                <h3 class="h5 d-inline-block float-left coures-title rounded p-1 mb-0">گرافیک</h3>
                <h3 class="h5 d-inline-block float-right coures-count  mb-0">3</h3>
                <div class="clearfix"></div>
                <hr>
                <div class="row dir-rtl">
                        
                <?php
                        $sqlweb="select * from `tbl_add_coures` where `category`=?";
                        $resultweb=$database->select($sqlweb,array('4'),$type="fetchall");
                        if(!empty($resultweb))
                        {
                            foreach($resultweb as $item)
                            {
                                echo '
                                <div class="col-lg-3">
                                        <div class="box-coures shadow-sm">
                                        <div class="img-box">
                                            <img src="admin/upload-images-coures/'.$item->img_coures.'" class="img-fluid w-100 " alt="">
                                        </div>
                                        <div class="name-coures pb-1 my-3">
                                            <h5 class="text-left">'.$item->name_coures.'</h5>
                                        </div>
                                        <div class="des-coures pb-3">
                                            <span class="d-inline-block mx-1 float-left" style="direction: rtl;">
                                            مدرس دوره :  
                                        </span>
                                            <span class="d-inline-block mx-1 float-right">';

                                            $sqlget_name_modars="select * from `tbl_add_new_ostad` where `id`=?";
                                            $result_get_modars=$database->select($sqlget_name_modars,array($item->modares_coures),$type="fetch");
                                            echo '
                                                 '.$result_get_modars->name_ostad.'
                                             
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="show pt-4">
                                            <span class="d-inline-block mx-1 float-left">
                                            <a href="more-coures.php?coures='.$item->id.'" class="bt px-3 py-2 btn-sm rounded btn-primary">مشاهده</a> 
                                        </span>
                                            <span class="d-inline-block rounded text-secondary shadow px-2 mx-1 float-right">
                                        22 <i class="fa fa-eye"></i>
                                        </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        </div>
                                </div>
                                 ';
                            }
                        }
                        else{

                        }
                    ?>

                </div>
            </div>

            <hr>
            <section class="article con text-center container" style="direction: rtl!important;" id="article">



                <h4 class="text-center mb-4 text-white pb-2 px-4 pt-1">مقالات آموزشی </h4>
                <div class="row m-0">
                    <?php
                $sql="select * from `tbl_add_new_article`";
                $result=$database->select($sql,array(),$type="fetchall");
                if($result)
                {
                    foreach($result as $item)
                    {
                        echo '
                        <article class="col-lg-3 mb-3">

                        <div class="card">
                            <img class="card-img-top" src="admin/upload-images-article/'.$item->img_article.'" alt="">
                            <div class="card-body mb-2 px-2">
                                <h4 class="card-title h5 text-white">'.$item->title_article.'</h4>
                                <p class="card-text text-white">'.$item->nevisande_article.'</p>
                            </div>
                            <div class="card-footer px-2 pb-1">
                                <a href="more-article.php?article='.$item->id.'" class="btn px-2 float-left text-white btn-primary">مشاهده</a>
                                <span class="h6 pt-3 text-white float-right">'.$item->date.'</span>
                            </div>
                        </div>
                        </article>
                    
                        ';
                    }
                    
                }
                else{

                }
                ?>
                </div>

            </section>
                <hr>

            <section class="coures-after text-center container">
                <h4 class="text-center mb-5 pb-2 px-4 pt-1 text-white">دوره های آینده وب آموز</h4>
                <div class="row justify-content-center p-0 m-0">
                    <div class="col-lg-5 col-11">
                        <div class="box-load pb-5 shadow-lg px-3 py-2">
                            <div id="my-carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                                    <li data-target="#my-carousel" data-slide-to="1"></li>

                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item pb-2 text-center active">
                                        <p class="text-center text-white">
                                            آموزش مقدماتی تا پیشرفته لاراول به همراه ساخت سایت دیجی کالا
                                        </p>
                                        <span class="d-inline-block mb-3">
                                        <img src="asset/images/971.jpg" class="rounded img-fluid"  alt="">
                                    </span>
                                        <br>
                                        <span class="text-white pt-3">مدرس : محمد جنامی</span>
                                    </div>
                                    <div class="carousel-item pb-2 text-center">
                                        <p class="text-center text-white">
                                            آموزش مقدماتی تا پیشرفته لاراول به همراه ساخت سایت دیجی کالا
                                        </p>
                                        <span class="d-inline-block mb-3">
                                       <img src="asset/images/766.jpg" class="rounded img-fluid" alt="">
                                    </span>
                                        <br>
                                        <span class="text-white">مدرس : محمد جنامی</span>
                                    </div>



                                </div>
                                <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <span class="caption-coures px-5 mb-4">گرافیک</span>
                    </div>
                    <div class="col-lg-5 col-11">
                        <div class="box-load pb-5 shadow-lg px-3 py-2">
                            <div id="my-carousel2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#my-carousel2" data-slide-to="0" aria-current="location"></li>
                                    <li data-target="#my-carousel2" data-slide-to="1"></li>

                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item pb-2 text-center active">
                                        <p class="text-center text-white">
                                            آموزش مقدماتی تا پیشرفته لاراول به همراه ساخت سایت دیجی کالا
                                        </p>
                                        <span class="d-inline-block mb-3">
                                        <img src="asset/images/971.jpg" class="rounded img-fluid"  alt="">
                                    </span>
                                        <br>
                                        <span class="text-white pt-3">مدرس : محمد جنامی</span>
                                    </div>
                                    <div class="carousel-item pb-2 text-center">
                                        <p class="text-center text-white">
                                            آموزش مقدماتی تا پیشرفته لاراول به همراه ساخت سایت دیجی کالا
                                        </p>
                                        <span class="d-inline-block mb-3">
                                       <img src="asset/images/766.jpg" class="rounded img-fluid" alt="">
                                    </span>
                                        <br>
                                        <span class="text-white">مدرس : محمد جنامی</span>
                                    </div>



                                </div>
                                <a class="carousel-control-prev" href="#my-carousel2" data-slide="prev" role="button">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#my-carousel2" data-slide="next" role="button">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                        <span class="caption-coures px-5 mb-4">طراحی سایت</span>
                    </div>
                </div>
            </section>


        </main>

        <div class="wave-22">
            <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #e8f0ed;"></path></svg></div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 px-2">
                        <div>
                            <h4 class="text-center">تماس با ما </h4>
                            <ul class="list-unstyled mt-4 text-white">
                                <li class="text-center mb-2">
                                    Tell : 0916 797 0927 <i class="fa fa-phone"></i>
                                </li>
                                <li class="text-center mb-2">
                                    Gmail : jnamymhdy69@gmail.com<i class="fa fa-envelope px-2"></i>
                                </li>
                                <li class="text-center mb-2">
                                    Telgram : @janmi <i class="fab fa-telegram px-2"></i>
                                </li>
                                <li class="text-center mb-2">
                                    Tell : @janmi<i class="fab fa-instagram px-2"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 px-2">
                        <div>
                            <h4 class="text-center">درباره وب آموز </h4>

                        </div>

                        <p class="px-5 text-center text-white" style="line-height: 32px;">
                            وب آموز مرجع کامل آموزش برنامه نویسی در سطح وب میباشد وب آموز در سال 90 ایجاد شد وهدف آن ایجاد دوره های پر محتوا و با بهترین کیفیت ممکن در سطح نت میباشد
                        </p>
                    </div>
                </div>
                
            </div>
            <div class="copyright">
                Copyright &copy; 2019 | Mohammad janami

            </div>
        </footer>

        <script src="asset/js/jquery.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
        <script src="asset/js/popel.js"></script>
        <script src="asset/js/jquery.countTo.js"></script>
        <script src="asset/js/jquery.nicescroll.min.js"></script>
        <script src="asset/js/main.js"></script>

    </body>

    </html>