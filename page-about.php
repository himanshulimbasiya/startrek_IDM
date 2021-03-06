<!-- This is the template for page About-->

<?php get_header(); ?>
<div class="jumbotron">
      <div class="container">
        <div class="img-fluid mx-auto d-block text-center" id="logo">
          <img class="logoimg animated fadeInUp" src="<?php echo get_template_directory_uri();?>/assets/STE_logo_201216.png" alt="logo" aria-hidden="true">
        </div>
      </div>
    </div>

<!-- First row -->
 <section class="first">
   <div class="container">
     <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
        <div class="img-fluid"><img id="ste_about" src="<?php echo get_template_directory_uri();?>/assets/startrekeire_about.jpg" alt="star trek group"></div>


      </div>
      <div class="about text-white col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h2>About Star Trek Éire</h2>
        <p>Star Trek Eire is a not for profit group of Star Trek fans based
          in Ireland. Our aim is to bring the universe of Star Trek to new
          and old fans through events and screenings in Dublin. We hope to
          meet other enthusiasts and revel in the greatness of the TV franchise
          from the original 1966 series all the way up to the current films.
          If you’re a diehard fan or someone who’s just seen the latest films
          and wants to know more, we’re the group for you. We’ll be posting
          and sharing news about all things Star Trek.

          <p>Come with us on a journey of fun, discovery and friendship.
          <br>Cheers!
          <p>Ciarán, Darryn, Gary, Ronan, & Shane.</p>
      </div>
    </div>
  </div>
 </section>
<!-- second row -->
  <section class="second">

      <div class="about_club">
          <div class="container-fluid">
        <div class="container">
      <div class="row">
      <div class="about about_club text-black col-lg-7 col-md-7 col-sm-9 col-xs-12">
        <h2>The Clubhouse</h2>
        <p class="about text-left text-black">The Clubhouse is a non-profit organization part of a global network
          of 105 Clubhouses that provides a safe and creative learning environment in
          technology for young people between the ages of 10 and 18.</p>
		  <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
       		 <div class="img-fluid"><img id="clubhouse_about" src="<?php echo get_template_directory_uri();?>/assets/clubhouse.jpg" alt="kid's equipments image"></div>
      	  </div><br>
          <a class="btn btn-primary" href="http://theclubhouse.ie/" target="_blank" role="button">Know More</a>
      </div>
      
        </div>
    </div>
  </div>
</div>
  </section>

<?php get_footer();?>
