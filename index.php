<!DOCTYPE html>
    <?php include 'header.php' ?>
    
    <!-- slider -->
    <div id="carouselExampleIndicators" style="position: relative;" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="image/slider01.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/slider02.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/slider03.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container-fuild flex-container">
            <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(#c739a1,#ed4347);">
              <p class="service-title" style="text-align: center;">Unlimited Food</p>
            </div>
            <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(#677ae4,#7453ad);">
              <p class="service-title">Rain Dance</p>
            </div>
            <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(#0bb4e3,#06aaef);">
              <p class="service-title">Jumbo Pool</p>
            </div>
    </div>
    <div class="container-fuild flex-container">
            <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(to right,#ecce42,#22a281);">
              <p class="service-title" style="text-align: center;">Relexing Area</p>
            </div>
            <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(to right,#f84102,#f9cc21);">
              <p class="service-title">Fun Center & Arcade</p>
            </div>
            <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(to right,#6f14cd,#bb1e99); ">
              <p class="service-title">Kid Pool</p>
            </div>
    </div>
    <!-- <div class="container-fuild" style="margin-right:30px;">
      <div class="">
        <div class="row">
          <div class="col-md-4">
            <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(#c739a1,#ed4347);">
            <p class="service-title">Unlimited Food</p>
            </div>
          </div>
        <div class="col-md-4">
          <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(#677ae4,#7453ad);">
          <p class="service-title">Rain Dance</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box" style="border-style:solid;border-color:white;border-width:1px;height:300px;background-image: linear-gradient(#0bb4e3,#06aaef);">
          <p class="service-title">Jumbo Food</p>
          </div>
        </div>  
        </div>
        <div class="row" style="height:300px;">
          <div class="col-xl-8">
            <div class="box" style="border-style:solid;border-color:white;height:300px;border-width:1px;background-image: linear-gradient(to right,#ecce42,#22a281);padding-right:0px;padding-left:0px;">
              <p class="service-title">Relexing Area</p>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="box" style="border-style:solid;border-color:white;height:300px;border-width:1px;background-image: linear-gradient(to right,#f84102,#f9cc21);">
              <p class="service-title">Fun Center & Arcade</p>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="box" style="border-style:solid;border-color:white;height:300px;border-width:1px;background-image: linear-gradient(to right,#6f14cd,#bb1e99);">
              <p class="service-title">Kids Pool</p>
            </div>
          </div>  
        </div>
    </div>  
  </div> -->

    <div  id="rides" class="section" style="padding-bottom:45px;;background: url(image/bck.jpg);background-attachment: fixed;">
      <div class="title">
        <h2 style="color:white;background-image: linear-gradient(#1da8dc, #98d9f0);position: relative;margin-right: 25%;margin-left:25%;border-style:solid;border-color: white;  border-radius: 15px 50px;">Amazing Rides</h2>
      </div><br/><br/>
      <!-- Top content -->
      <div class="top-content" id="rides">
        <div class="container-fluid">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;" class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                  <a href="wormholl.php"><img src="image/ride01.png" class="img-fluid mx-auto d-block" alt="img1"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="watercoster.php"><img style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;"src="image/ride02.png" class="img-fluid mx-auto d-block" alt="img2"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;" src="image/ride03.png" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;" src="image/ride04.png" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;" src="image/ride05.png" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;" src="image/ride06.png" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;" src="image/ride07.png" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  <img style="border-style: solid; border-color: rgba(255,255,255,0.2); border-width: 20px;" src="image/ride08.png" class="img-fluid mx-auto d-block" alt="img8">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    
  
       
        <!-- tickets & offer -->
        <div class="tickets" style="background: url(image/ride.jpeg);background-attachment: fixed;background-size: cover;padding-bottom:90px;opacity: 0.7;">
          <div class="title" >
            <h2 style="color:white;background-image: linear-gradient(#1da8dc, #98d9f0);position: relative;margin-right: 25%;margin-left:25%;border-style:solid;border-color: white;  border-radius: 15px 50px;"><strong>Tickets & offers</strong></h2>
          </div><br/><br/>
          <div style="text-align:center">
          
            <a href="booknow.html" >
              <span class="dot" style="color:white;background-color:#FECA57;">
                <p  class="booktext"><strong>Child(Above 2 years but Height below 4 feet)</strong>
                  <pre class="underline">_______________</pre>
                </p>
                <strong style="color:black;">Wednesday & Thrusday
                  <p style="color:#014a8f">₹ 580*(Includin Food + GST)</p>
                    Other Days
                  <p style="color:#014a8f">₹ 580*(Includin Food + GST)</p>
                </strong>
              </span>
            </a>
            <a href="booknow.html" class="cir">
              <span class="dot" style="color:white;background-color:lightblue">
                <p  class="booktext"><strong>Child(Above 2 years but Height below 4 feet)</strong>
                  <pre class="underline">_______________</pre>
                </p>
                <strong style="color:black;">Wednesday & Thrusday
                  <p style="color:#014a8f">₹ 580*(Includin Food + GST)</p>
                    Other Days
                  <p style="color:#014a8f">₹ 580*(Includin Food + GST)</p>
                </strong>
              </span>
            </a>
            <a href="booknow.html" class="cir" >
              <span class="dot" style="color:white;background-color:lightpink;">
                <p  class="booktext"><strong>Child(Above 2 years but Height below 4 feet)</strong>
                  <pre class="underline">_______________</pre>
                </p>
                <strong style="color:black;">Wednesday & Thrusday
                  <p style="color:#014a8f">₹ 580*(Includin Food + GST)</p>
                    Other Days
                  <p style="color:#014a8f">₹ 580*(Includin Food + GST)</p>
                </strong>
              </span>
            </a>
            </div>
        </div>
    <!-- gallery -->
    <div  id="gallery" class="section" style="background: url(image/bck.jpg);background-attachment: fixed;">
      <div class="title">
        <h2 style="color:white;background-image: linear-gradient(#1da8dc, #98d9f0);position: relative;margin-right: 25%;margin-left:25%;border-style:solid;border-color: white;  border-radius: 15px 50px;">Collect your memories from here..</h2>
      </div><br/><br/>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
              <img class="img-responsive" src="image/g1.jpg" alt=""/>   
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
              <img class="img-responsive" src="image/g1.jpg" alt="">  
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hovereffect">
              <img class="img-responsive" src="image/g1.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                <img class="img-responsive" src="image/g1.jpg" alt="">
          </div>
          </div><br/><br/>
        </div><br><br/> 
      </div>
    </div>
    <div class="reply">
    <div class="title">
      <h2
        style="color:white;background-image: linear-gradient(#1da8dc, #98d9f0);position: relative;margin-right: 20%;margin-left:20%;border-style:solid;border-color: white; padding-left:50px;padding-right:50px; border-radius: 15px 50px;padding-top:5px;padding-bottom: 5px;">
        <strong>WE RESPECT YOUR VALUABLE RESPONSE</strong></h2>
    </div><br /><br />
    <div class="container">
      <h3 class="text-white">Leave a Reply</h3>
      <p class="text-white mt-1" style="font-size:20px;">Your email address will not be published. Required fields are
        marked *</p>

      <form method="post" class="contact-form">
        <div class="input-container">
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Name *">
        </div>
        <div class="input-container">
          <i class="fa fa-envelope" style="font-size:25px;padding-top:15px;"></i>
          <input type="text" placeholder="Email *">
        </div>
        <div class="input-container">
          <i class="fa fa-edit"></i>
          <input type="text" name="feedback" placeholder="Feedback" class="feedback-input"></text-area>
        </div>

        <button type="submit" value="POST FEEDBACK" class="submit-btn">POST FEEDBACK</button><br><br>
      </form>
    </div>
  </div>
    <?php include 'footer.php' ?>

  </body>



    <!--/.Carousel Wrapper-->


  </html>
