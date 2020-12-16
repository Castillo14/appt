<style>
    .gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}
</style>
 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">Services</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

    <section class="page-section">
        <div class="container">
            <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all"><u>All</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1"><u>General Check up</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2"><u>Gynae Clinic</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="3"><u>Laboratory</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="4"><u>I.M Clinic</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="5"><u>Pediatric Clinic</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="6"><u>Dental</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="7"><u>Derma</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="8"><u>Laser</button></u>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="9"><u>Sterilization Room</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 7">
    <img class="img-fluid" src="assets\img\specialities\derma.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 8">
    <img class="img-fluid" src="assets\img\specialities\72f.png" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 8">
    <img class="img-fluid" src="assets\img\specialities\81a1a-0b822-52980-laser-hair-removal-sandra-on-primelase-patient-1_mini-1-1-.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 6">
    <img class="img-fluid" src="assets\img\specialities\checkup.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="assets\img\specialities\650x350_babys_6_month_checkup_what_to_expect_ref_guide.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 7">
    <img class="img-fluid" src="assets\img\specialities\Cosmetic-Dermatology-For-Men.jpg" alt="Card image cap">
  </div>

  <!-- Grid column -->
   <div class="mb-3 pics animation all 5">
    <img class="img-fluid" src="assets\img\specialities\pediatric.jpg" alt="Card image cap">
  </div>

  <!-- Grid column -->
   <div class="mb-3 pics animation all 4">
    <img class="img-fluid" src="assets\img\specialities\Imaging-SM.jpg" alt="Card image cap">
  </div>

   <!-- Grid column -->
   <div class="mb-3 pics animation all 6">
    <img class="img-fluid" src="assets\img\specialities\unnamed.jpg" alt="Card image cap">
  </div>

   <!-- Grid column -->
   <div class="mb-3 pics animation all 6">
    <img class="img-fluid" src="assets\img\specialities\general-dental-care-hero-image.jpg" alt="Card image cap">
  </div>

   <!-- Grid column -->
   <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="assets\img\specialities\download.jpg" alt="Card image cap">
  </div>

   <!-- Grid column -->
   <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="assets\img\specialities\choosing-agynae-clinic.jpg" alt="Card image cap">
  </div>

   <!-- Grid column -->
   <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="assets\img\specialities\ddeb9cc677471732c4bbffa435020406.jpg" alt="Card image cap">
  </div>


  
  

</div>
<!-- Grid row -->
    <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>        
            
        </div>
        </section>
<script>
    $(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>