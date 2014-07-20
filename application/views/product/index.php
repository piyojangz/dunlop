<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- jQuery library (served from Google) -->
        <script src="<?= base_url('public') ?>/js/1.8.2/jquery.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="<?= base_url('public') ?>/js/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?= base_url('public') ?>/css/jquery.bxslider.css" rel="stylesheet" />
        <link href="<?= base_url('public') ?>/css/custom_style.css" rel="stylesheet"
              type="text/css" />
        <link href="<?= base_url('public') ?>/css/animate.css" rel="stylesheet"
              type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/style.css" />
        <script type="text/javascript" src="<?= base_url('public') ?>/js/modernizr.custom.79639.js"></script>
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?= base_url('public') ?>/css/styleNoJS.css" />
        </noscript>
        <title>Welcome to Dunlop Tire (Thailand) Company Limited</title>
        <script>
            $(document).ready(function() {
                $('.bxslider').bxSlider({
                    auto: true
                });
            });
        </script>
    </head>
    <body background="<?= base_url() ?>public/images/home/bg_2.jpg" style="margin:auto">

        <!-- start table 3x3-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr height="78" >
                <td background="<?= base_url() ?>public/images/home/logo_1.jpg">&nbsp;</td>
                <td width="942"  style="position: relative;"><table border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td><a href="<?= base_url() ?>"><img src="<?= base_url() ?>public/images/home/logo_2.jpg" /></a></td>
                            <td background="<?= base_url() ?>public/images/home/logo_3.jpg"  width="100%">

                            </td>

                        </tr>
                    </table>
                    <div class="menu">
                        <table id="Table_01" width="696" height="42" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>home"><img src="<?= base_url() ?>public/images/menu/product/menu_01.png" width="95" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>product"> <img src="<?= base_url() ?>public/images/menu/product/menu_02.png" width="101" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>knowledge"><img src="<?= base_url() ?>public/images/menu/product/menu_03.png" width="134" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>about">  <img src="<?= base_url() ?>public/images/menu/product/menu_04.png" width="119" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>address"><img src="<?= base_url() ?>public/images/menu/product/menu_05.png" width="132" height="42" alt=""/></a></td>
                                <td>
                                    <a href="<?= base_url() ?>contact"><img src="<?= base_url() ?>public/images/menu/product/menu_06.png" width="112" height="42" alt=""/></a></td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td background="<?= base_url() ?>public/images/home/logo_3.jpg">&nbsp;</td>
            </tr>
            <tr height="730">
                <td >&nbsp;</td>
                <td ><table   border="0" cellspacing="0" cellpadding="0" >
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td><table  border="0" cellspacing="0" cellpadding="0" >
                                    <tr>
                                        <td>
                                            <div class="container demo-1">


                                                <div id="slider" class="sl-slider-wrapper">

                                                    <div class="sl-slider">

                                                        <?php
                                                        $i = 1;
                                                        foreach ($slide_list as $each):
                                                            ?>
                                                            <?php if ($each->SLIDE_Animation_Type == 1): ?>
                                                                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                                                    <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                                                                        <div class="deco roll"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img ?>" /></div>
                                                                        <h2 class="moveDown"><?= $each->SLIDE_Headline ?></h2>
                                                                        <blockquote><?= $each->SLIDE_Desc ?></blockquote>
                                                                    </div>
                                                                </div>
                                                            <?php elseif ($each->SLIDE_Animation_Type == 2): ?>
                                                                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                                                    <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                                                                        <div class="deco fromleft"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img ?>" /></div>
                                                                        <h2 class="moveDown"><?= $each->SLIDE_Headline ?></h2>
                                                                        <blockquote class="bqmoveUp"><?= $each->SLIDE_Desc ?></blockquote>
                                                                    </div>
                                                                </div>
                                                            <?php elseif ($each->SLIDE_Animation_Type == 3): ?>
                                                                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                                                    <div class="sl-slide-inner" style="background: url('<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_bg ?>');">
                                                                        <div class="deco spin"><img src="<?= base_url() ?>administrator/public/uploads/slide/<?= $each->SLIDE_Object_img ?>" /></div>
                                                                        <h2 class="spin"><?= $each->SLIDE_Headline ?></h2>
                                                                        <blockquote class="spin"><?= $each->SLIDE_Desc ?></blockquote>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php $i++; ?>
                                                        <?php endforeach; ?>

                                                    </div><!-- /sl-slider -->

                                                    <nav id="nav-arrows" class="nav-arrows">
                                                        <span class="nav-arrow-prev">Previous</span>
                                                        <span class="nav-arrow-next">Next</span>
                                                    </nav>

                                                    <nav id="nav-dots" class="nav-dots">

                                                        <?php
                                                        $x = 1;
                                                        foreach ($slide_list as $each):
                                                            ?>
                                                            <?php if ($x == 1): ?>
                                                                <span class="nav-dot-current"></span>
                                                            <?php else: ?>
                                                                <span></span>
                                                            <?php endif; ?>
                                                            <?php
                                                            $x++;
                                                        endforeach;
                                                        ?>
                                                    </nav>

                                                </div><!-- /slider-wrapper -->

                                            </div>
                                        </td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td> 

                                <div class="wrapper">
                                    <div class="sidebar-l" ><div class="product_title"></div>

                                        <ul class="sidemenu">
                                            <li><a href="<?= base_url() ?>product/index"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_1_OV.png" /></a></li>
                                            <li><a href="<?= base_url() ?>product/maxxtt"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_1.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_1_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_1.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/ve302"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_2.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_2_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_2.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/ec503"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_3.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_3_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_3.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/lm704"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_4.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_4_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_4.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/dz102"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_5.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_5_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_5.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/dzII_star"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_6.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_6_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_6.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/sp_touring_t1"><img style="" src="<?= base_url() ?>public/images/product/Product_sub_7.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_sub_7_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_sub_7.png'"/></a></li>

                                             <li><a href="<?= base_url() ?>product/product_4x4"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_3.png"  onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_3_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_3.png'"/></a></li> 
                                            <li><a href="<?= base_url() ?>product/product_pickup"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_2.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_2_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_2.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/product_oem"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_4.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_4_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_4.png'"/></a></li>
                                            <li><a href="<?= base_url() ?>product/warranty"><img style="" src="<?= base_url() ?>public/images/product/Product_menu_5.png" onmouseover="this.src = '<?= base_url() ?>public/images/product/Product_menu_5_OV.png'" onmouseout="this.src = '<?= base_url() ?>public/images/product/Product_menu_5.png'"/></a></li>
                                     </ul>
                                    </div>
                                    <div class="contact-r " >
                                        <div class="title_trans-r"><h1 style="top: -20px;"><img src="<?= base_url() ?>public/images/product/pass_head.png"/></h1></div>

                                        <div class="passenger_car_graph">
                                            <div class="point1"><a href="#" ></a></div>
                                            <div class="point2"><a href="#" ></a></div>
                                            <div class="point3"><a href="#" ></a></div>
                                            <div class="point4"><a href="#" ></a></div>
                                            <div class="point5"><a href="#" ></a></div>
                                            <div class="point6"><a href="#" ></a></div>
                                        </div>
                                        <div class="passenger_car_use"></div>
                                        <div style="clear:both"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table></td>
            </tr>

            <tr height="30">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr height="40">
                <td bgcolor="#373737">&nbsp;</td>
                <td width="942" bgcolor="#373737" align="right" class="footer"> 2014 Dunlop Tire (Thailand) Company Limited. All Right Reserved </td>

                <td bgcolor="#373737">&nbsp;</td>
            </tr>
        </table>

        <!-- end table 3x3-->
        <script type="text/javascript" src="<?= base_url() ?>public/js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>public/js/jquery.slitslider.js"></script>

        <script type="text/javascript">
                                                $(document).ready(function() {

                                                    var Page = (function() {

                                                        var $navArrows = $('#nav-arrows'),
                                                                $nav = $('#nav-dots > span'),
                                                                slitslider = $('#slider').slitslider({
                                                            onBeforeChange: function(slide, pos) {

                                                                $nav.removeClass('nav-dot-current');
                                                                $nav.eq(pos).addClass('nav-dot-current');

                                                            }
                                                        }),
                                                                init = function() {

                                                                    initEvents();

                                                                },
                                                                initEvents = function() {

                                                                    // add navigation events
                                                                    $navArrows.children(':last').on('click', function() {

                                                                        slitslider.next();
                                                                        return false;

                                                                    });

                                                                    $navArrows.children(':first').on('click', function() {

                                                                        slitslider.previous();
                                                                        return false;

                                                                    });

                                                                    $nav.each(function(i) {

                                                                        $(this).on('click', function(event) {

                                                                            var $dot = $(this);

                                                                            if (!slitslider.isActive()) {

                                                                                // $nav.removeClass('nav-dot-current');
                                                                                // $dot.addClass('nav-dot-current');

                                                                            }

                                                                            slitslider.jump(i + 1);
                                                                            return false;

                                                                        });

                                                                    });

                                                                };

                                                        return {init: init};

                                                    })();

                                                    Page.init();


                                                });



        </script>
    </body>
</html>