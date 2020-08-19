<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section class="closet-categories pt-5 pb-5">
  <div class="container">
    <h2 class="margin-auto text-center bold">Categories</h2>
    <h4 class="margin-auto text-center">Lorem Ipsum Sit Amet Dolor</h4>
    <div class="col-12 pl-0 pr-0 mt-4 mb-0">
      <div class="column-7 left">
        <button class="filter-button">All Filters</button>
      </div>
      <div class="column-7 left">
        <form class="form-style select-multi">
            <select id="style" name="style" multiple>
                <option value="">Style 1</option>
                <option value="">Style 2</option>
                <option value="">Style 3</option>
            </select>
        </form>
      </div>
      <div class="column-7 left">
        <form class="form-style select-multi">
            <select id="type" name="type" multiple>
                <option value="">Type 1</option>
                <option value="">Type 2</option>
                <option value="">Type 3</option>
            </select>
        </form>
      </div>

      <div class="column-7 left">
        <form class="form-style select-multi">
            <select id="gender" name="gender" multiple>
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>
            </select>
        </form>
      </div>

      <div class="column-7 left">
        <form class="form-style select-multi">
            <select id="cabinet" name="cabinet" multiple>
                <option value="">Cabinet 1</option>
                <option value="">Cabinet 2</option>
            </select>
        </form>
      </div>

      <div class="column-7 left">
        <form class="form-style select-multi">
            <select id="cabinet-finish" name="cabinet-finish" multiple>
                <option value="">Cabinet Finish 1</option>
                <option value="">Cabinet Finish 2</option>
            </select>
        </form>
      </div>

      <div class="column-7 left">
        <form class="form-style select-multi">
            <select id="accessory" name="accessory" multiple>
                <option value="">Accessory 1</option>
                <option value="">Accessory 2</option>
            </select>
        </form>
      </div>

      <div class="col-12 clearfix pt-4 pl-0 pr-0">
        <div class="cl-6 left pl-0">
          <label class="rf-label">Refine By:</label>
          <select name="refine" class="transparent-dropdown">
              <option value="">Budget</option>
              <option value="">Refine 2</option>
          </select>
        </div>
        <div class="cl-6 right pl-0 sr-right">
          <label class="rf-label">Sort By:</label>
          <select name="refine" class="transparent-dropdown">
              <option value="">Popular</option>
              <option value="">Refine 2</option>
          </select>
          <label class="rf-label mlc-4">1 - 18 of 134,512 photos</label>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="closet-result pt-5 pb-5">
  <div class="container pb-3">
    <div class="cl-4 left mt-4">
      <div class="cl-12 pl-1 pr-1">
        <img class="img-result" src="<?php bloginfo('template_directory'); ?>/images/home/closet-home-product-1.jpg">
        <h4 class="bold-600-gray mt-3">Lifetime Ventilated</h4>
        <p class="bold-400-gray">Budget-friendly and the strongest wire shelving available on the market. If you think getting custom organizers for your home has to cost an arm and a leg.</p>
        <a href="#" class="blue-link uppercase bold">Read More</a>
      </div>
    </div>
    <div class="cl-4 left mt-4">
      <div class="cl-12 pl-1 pr-1">
        <img class="img-result" src="<?php bloginfo('template_directory'); ?>/images/home/closet-home-product-2.jpg">
        <h4 class="bold-600-gray mt-3">freedomRail</h4>
        <p class="bold-400-gray">Budget-friendly and the strongest wire shelving available on the market. If you think getting custom organizers for your home has to cost an arm and a leg.</p>
        <a href="#" class="blue-link uppercase bold">Read More</a>
      </div>
    </div>
    <div class="cl-4 left mt-4">
      <div class="cl-12 pl-1 pr-1">
        <img class="img-result" src="<?php bloginfo('template_directory'); ?>/images/home/closet-home-product-3.jpg">
        <h4 class="bold-600-gray mt-3">Classica</h4>
        <p class="bold-400-gray">Budget-friendly and the strongest wire shelving available on the market. If you think getting custom organizers for your home has to cost an arm and a leg.</p>
        <a href="#" class="blue-link uppercase bold">Read More</a>
      </div>
    </div>
    <div class="cl-4 left mt-4">
      <div class="cl-12 pl-1 pr-1">
        <img class="img-result" src="<?php bloginfo('template_directory'); ?>/images/home/closet-home-product-1.jpg">
        <h4 class="bold-600-gray mt-3">Lifetime Ventilated</h4>
        <p class="bold-400-gray">Budget-friendly and the strongest wire shelving available on the market. If you think getting custom organizers for your home has to cost an arm and a leg.</p>
        <a href="#" class="blue-link uppercase bold">Read More</a>
      </div>
    </div>
    <div class="cl-4 left mt-4">
      <div class="cl-12 pl-1 pr-1">
        <img class="img-result" src="<?php bloginfo('template_directory'); ?>/images/home/closet-home-product-2.jpg">
        <h4 class="bold-600-gray mt-3">freedomRail</h4>
        <p class="bold-400-gray">Budget-friendly and the strongest wire shelving available on the market. If you think getting custom organizers for your home has to cost an arm and a leg.</p>
        <a href="#" class="blue-link uppercase bold">Read More</a>
      </div>
    </div>
    <div class="cl-4 left mt-4">
      <div class="cl-12 pl-1 pr-1">
        <img class="img-result" src="<?php bloginfo('template_directory'); ?>/images/home/closet-home-product-3.jpg">
        <h4 class="bold-600-gray mt-3">Classica</h4>
        <p class="bold-400-gray">Budget-friendly and the strongest wire shelving available on the market. If you think getting custom organizers for your home has to cost an arm and a leg.</p>
        <a href="#" class="blue-link uppercase bold">Read More</a>
      </div>
    </div>
  </div>
  <div class="break"></div>
  <div class="container mt-5 mb-3">
    <div class="d-block margin-auto">
      <a href="#" class="page-number left">1</a><a href="#" class="page-number left">2</a><a href="#" class="page-number left">3</a><a href="#" class="page-number left">4</a><a href="#" class="page-number left">5</a>
      <a href="#" class="page-number left">6</a><a href="#" class="page-number next left">NEXT</a>
    </div>
  </div>
</section>

<section class="closet-testimonial pt-3 pb-3">
  <div class="container pt-5 pb-5">
    <div class="col-6 left">
      <h4 class="text-white text-center">Book Your Virtual Appointment Today!</h4>
      <br/>
      <div class="col-12">
        <input type="text" class="transparent-input" placeholder="NAME"/>
      </div>
      <div class="col-6 pt-2 pr-1 left">
        <input type="text" class="transparent-input" placeholder="PHONE"/>
      </div>
      <div class="col-6 pt-2 pl-1 left">
        <input type="text" class="transparent-input" placeholder="EMAIL"/>
      </div>
      <div class="col-12 pt-2 clearfix">
        <select name="appointment" class="transparent-select">
          <option value="" selected disabled>APPOINTMENT TYPE</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      <div class="col-6 pt-2 pr-1 left">
        <input type="text" class="transparent-input" placeholder="PREFERRED DATE"/>
      </div>
      <div class="col-6 pt-2 pl-1 left">
        <input type="text" class="transparent-input" placeholder="PREFERRED TIME"/>
      </div>
      <div class="col-12 clearfix pt-3">
        <p class="text-white uppercase">I am interested in...</p>
      </div>
      <div class="col-12 clearfix pl-1 pr-1 pt-0">
        <div class="col-4 left pl-2 pr-2">
          <label class="check-input check-label">
            CLOSETS
            <input type="checkbox" name="closet">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="col-4 left pl-2 pr-2">
          <label class="check-input check-label">
            WINDOW COVERINGS
            <input type="checkbox" name="closet">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="col-4 left pl-2 pr-2">
          <label class="check-input check-label">
            PANTRY
            <input type="checkbox" name="closet">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div class="col-12 pl-2">
        <input type="submit" class="submit-button"/>
      </div>
    </div>
    <div class="col-6 left">
      <h4 class="text-white pl-3">Testimonials</h4>
      <div class="col-12 clearfix pl-0 pr-0 pt-3 pb-3">
        <div class="col-3 left">
          <img class="testimonial" src="<?php bloginfo('template_directory'); ?>/images/home/profile-2.jpeg">
        </div>
        <div class="col-9 left">
          <p class="text-white">Joe is so great! He is so positive and helpful. Closets Las Vegas has built my dream Closet.</p>
          <h5 class="bold text-white">Scott S.</h5>
        </div>
      </div>
      <div class="col-12 clearfix pl-0 pr-0 pt-3 pb-3">
        <div class="col-3 left">
          <img class="testimonial" src="<?php bloginfo('template_directory'); ?>/images/home/profile-1.jpeg">
        </div>
        <div class="col-9 left">
          <p class="text-white">Good fast service. Tech was friendly fair and courteous. Very reasonable price was less than expected.</p>
          <h5 class="bold text-white">Tina K.</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="closet-banner-b pt-3 pb-3">
  <div class="container pt-5 pb-5">
    <div class="container-banner">
      <h1 class="text-white uppercase banner-title">come see us</h1>
      <h5 class="text-white">Come see, design and touch the most efficient and diverse home storage for any budget, period.</h5>
      <a href="#" class="banner-button">Book it</a>
    </div>
  </div>
</section>


<section class="home-atf mobile-only">
  <div class="container">
    <div class="col-12 mt-1">
      <h2 class="txt-yellow mb-3 text-center bold opensans-bold lh-xl">JUST PURCHASED YOUR FIRST GUN AND NOT SURE WHAT ACCESSORIES TO GET?</h2>
      <div class="col-12 img-atf pl-0 pr-0">
        <img class="img-default" src="<?php bloginfo('template_directory'); ?>/images/home/sp-rifle.jpg">
      </div>
      <span class="text-default text-center text-medium mb-3 txt-white d-block opensans-light bold lh-medium">Looking for an accessory that will not only improve your shooting, but also be an exclusive add to your gun collection?</span>
      <div class="mt-4">
        <div class="parallelogram-banner-default left">
          <div class="normalize-shape-default">
            <a class="text-center d-block opensans-bold fp-btn pl-2">JOIN SELECT GUN OWNERS WHO MADE THEIR SUPPRESSORS</a>
          </div>
        </div>
      </div>
      <br class="clearfix"/>
    </div>
  </div>
</section>
<?php get_footer(); ?>
