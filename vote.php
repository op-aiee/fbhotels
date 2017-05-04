<?php 
include 'head.php';
 ?>
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-push-2" style="padding-top: 2em;">
          <img src="images/hotellogo.png" class="text-center img-responsive">        
    </div>
    </div>
    <div class="row">
    <div class="col-sm-8 col-sm-push-2 welcome-text">
    <p class="text-justify">
    <strong>Szavazzon</strong> a <a href="facebook.com/azevhotele" target="_blank">facebook.com/azevhotele</a> oldalon és
    <strong>nyerjen</strong> egy wellness hétvégét az alábbi két hotel
    egyikében, vagy további nyereményeink egyikét!</p>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 card">
        <div class="thumbnail">
            <img src="images/hotel_a.jpg" class="img-responsive" alt="#">
          <div class="caption">
            <h3 class="text-center hotelname">
              MAXIMUM HOTEL<br/>
              <small>
                Pécs
              </small>
            </h3>
          </div>
        <div class="btn-group btn-group-justified">
        <form method="POST" action="submit.php">
          <a href="#" class="btn btn-primary">Információk</a>
           <input type="submit" name="vote" value="Erre a hotelre szavazok!" class="btn btn-primary">
           </form>
        </div>              
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 card">
        <div class="thumbnail">
            <img src="images/hotel_b.jpg" class="img-responsive" alt="#">
          <div class="caption">
            <h3 class="text-center hotelname">
               Lorem ipsum dolor WELNESS SZÁLLÓ<br/>
              <small>
                Pécs
              </small>
            </h3>
          </div>
        <div class="btn-group btn-group-justified">
        <form method="POST" action="submit.php">
          <a href="#" class="btn btn-primary">Információk</a>
           <input type="submit" name="vote" value="Erre a hotelre szavazok!" class="btn btn-primary">
           </form>
        </div>          
        </div>
      </div>
  </div>
</div>

<?php 
 include 'footer.php';
 ?>