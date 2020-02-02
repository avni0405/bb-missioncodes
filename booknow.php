<!DOCTYPE html>
    <?php include 'header.php' ?>
        <!-- top bar -->
        <section class="l-section wpb_row height_medium color_secondary home_bg with_img with_overlay ult-vc-hide-row upb_video_class uvc-row" id="home" style="position: relative;" data-rtl="false" data-row-effect-mobile-disable="true" data-upb_br_animation="">
            <div class="ult-vc-seperator bottom_seperator ult-xlarge-triangle uvc-seperator-4962811336876" data-full-width="true" data-border="undefined" data-border-width="undefined">
                <div class="ult-main-seperator-inner">
                    <svg class="uvc-x-large-triangle" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#ffffff" width="100%" height="140" viewBox="0 0 4.66666 0.333331" preserveAspectRatio="none" style="height: 140px;">
                        <path class="fil0" d="M-0 0.333331l4.66666 0 0 -3.93701e-006 -2.33333 0 -2.33333 0 0 3.93701e-006zm0 -0.333331l4.66666 0 0 0.166661 -4.66666 0 0 -0.166661zm4.66666 0.332618l0 -0.165953 -4.66666 0 0 0.165953 1.16162 -0.0826181 1.17171 -0.0833228 1.17171 0.0833228 1.16162 0.0826181z"></path>
                    </svg>
                </div>
                <div class="separator-icon"></div>
            </div>
            <div class="upb_video-wrapper">
                <div class="upb_video-bg" data-bg-override="0" data-rtl="false" data-row="wpb_row" data-theme-support="" style="width: 343px; min-width: 343px; left: 0px;">
                    <video class="upb_video-src enable-on-viewport hosted-video" preload="auto">
                        <source type="video/mp4" src="http://192.168.0.100/wordpress2/wp-content/uploads/2019/02/WhatsApp-Video-2019-02-27-at-9.37.24-PM.mp4">
                    </video>
                </div>
            </div>
            <div class="l-section-img loaded" style="background-image: url(image/top.jpeg);" data-img-width="5184" data-img-height="4000"></div>
            <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.56)"></div>
            <div class="l-section-h i-cf">
                <div class="g-cols vc_row type_default valign_top">
                    <div class="vc_col-sm-12 wpb_column vc_column_container align_center">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="ult-spacer spacer-5e2725bd21cac" data-id="5e2725bd21cac" data-height="100" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="50" data-height-mobile-landscape="50" style="clear:both;display:block;">
                                </div>
                                <h1 style="font-size: 2.5rem;color: #ffffff;line-height: 1.1;text-align: center;margin-bottom: 50px;;" class="vc_custom_heading">BOOK NOW</h1>
                                <div class="w-separator size_custom" style="height:500;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php  try{
            include("admin/db_connect.php");
            $q= $pdo->query("SELECT `value1` FROM `config` WHERE `key1`='booking_st'");
            $status = $q->fetchColumn();
            
        ?>
        <!-- booking -->    
        <div class="bckimg" style="margin-bottom:0px;">
            <?php if($status==0){
            ?>
                <div class="container">
                    <p style="color:red; text-align: center;padding-top:45px;padding-bottom: 40px;font-weight: bold;">Book is currently not availble kindly contact 9081712674 for more details</p>
                </div>
            <?php
            }else if(isset($_GET['msg']) && $_GET['msg']=="notavailable"){
            ?>

                <div class="container">
                    <p style="color:red; text-align: center;padding-top:45px;padding-bottom: 40px;font-weight: bold;">Booking is not available for date <?php echo date("D, d M  Y", strtotime($_GET['date'])); ?>. kindly contact 9081712674 for more details.<br>
                    <a href="booknow.php" class="mt-3 btn btn-primary">Book For Another Day</a>
                    </p>
                </div>
            
            <?php
            }else if(isset($_GET['msg']) && $_GET['msg']=="success"){
            ?>

                <div class="container">
                    <p style="color:green; text-align: center;padding-top:45px;padding-bottom: 40px;font-weight: bold;">Booking Recieved. You will get a call from our side soon! <br>
                    <a href="booknow.php" class="mt-3 btn btn-primary">Book Another Ticket</a></p>
                </div>
            
            <?php
            }
            else {
            ?>
                <div class="container">
                <p style="color:green; text-align: center;padding-top:45px;padding-bottom: 40px;font-weight: bold;">Select the Date for your adventurous journey<br>

                <form action="booknow2.php" method="POST" class="row mb-2 pb-4 justify-content-center">
                    <input type='date' class="form-control col-md-7 mx-2" name="date" required/><br>
                    <input type="submit" class="btn btn-primary  col-md-2 mx-2" >
                </form>
                </div>
                
            <?php
            }
}
catch(exception $e){echo $e->getMessage();}
            ?>
        </div>
        <?php include 'footer.php' ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>

    </body>
</html>
