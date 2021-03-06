
<html>
<head>
	<title></title>
      <link rel="stylesheet" type="text/css" href="http://fast.fonts.net/cssapi/ec2b8f4c-7f71-40d6-8119-156084da340f.css" />
      <link rel="stylesheet" type="text/css" href= "<?php echo asset_url(); ?>css/master.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/home.css" />
</head>
<body>
	<div id="maincontainer">
		<div id="inner-container">
			<div class="top-header clearfix">
                       <div class="logowrapper">
                         <img src="<?php echo asset_url(); ?>images/logo.png" alt="">
                       </div>
                       <div class="menucontainer">
                              <div class="menuoptions">
                                  <div class="menuiconwrapper">
                                       <div class="menu-line"></div>
                                       <div class="menu-line"></div>
                                       <div class="menu-line"></div>  
                                         <ul class="menu-dropdown">
                                           <li class="dropdown-options sm-menu"><a href="#">Login</a></li>
                                           <li class="dropdown-options sm-menu"><a href='#' >Sign Up</a></li>
                                           <li class="dropdown-options sm-menu"><a href='#' >Contact Us</a></li>
                                           <li class="dropdown-options"><a href='#' >About Us</a></li>
                                           <li class="dropdown-options"><a href='#' >Help</a></li>
                                           <li class="dropdown-options"><a href='#' >Terms &amp; Privacy</a></li>
                                           <li class="dropdown-options"><a href='#' >Press</a></li>
                                           <div class="arrow-up"></div>
                                         </ul>
                                  </div>
                             </div>
                             
                             <div class="menuoptions lg-menu"><a href=#"">Contact Us</a></div>
                             <div class="menuoptions lg-menu"><a href="#">Sign Up</a></div>
                             <div class="menuoptions lg-menu"><a href="#">Login</a></div>
                       </div>                
                  </div>
            <div class="footer">
               <div class="footer-left">
                    Copyright &copy; 2014 Experenzia. All rights reserved. 
               </div> 
               <div class="footer-right">
                    <div class="footer-links">
                      <div class="footer-link"><a href="">About</a></div>    
                      <div class="footer-link"><a href="">Help</a></div>    
                      <div class="footer-link"><a href="">Terms &amp; Privacy</a></div>    
                      <div class="footer-link"><a href="">Join Us On</a></div>    
                    </div>

                  <!-- footer for screens with smaller resolutions (start)-->
                     <div class="footer-links-collapse">
                        <div class="footer-line"></div>
                        <div class="footer-line"></div>
                        <div class="footer-line"></div>  
                          <ul class="footer-dropdown">
                            <li><a href='#' >About Us</a></li>
                            <li><a href='#' >Help</a></li>
                            <li><a href='#' >Terms &amp; Privacy</a></li>
                            <li><a href='#' >Press</a></li>
                            <div class="arrow-down"></div>
                          </ul>
                      </div> 
                    <!-- footer for screens with smaller resolutions (end)-->

                        <div class="footer-social-icons">
                          <div class="social-icons"><img src="<?php echo asset_url(); ?>images/fb_White.png" alt=""></div>
                          <div class="social-icons"><img src="<?php echo asset_url(); ?>images/twitter_White.png" alt=""></div>
                          <div class="social-icons"><img src="<?php echo asset_url(); ?>images/google+_White.png" alt=""></div>
                        </div> 
               </div>  
            </div>
		</div>
    <div class="searchwrapper">
                <div class="tagline">Experience your travel<sup>TM</sup></div>
                <div class="search-options-wrapper">
                   <div class="searchoption hotel-option">
                         <span class="optionicon"><img src="<?php echo asset_url(); ?>images/hotel-icon_White.png" alt=""></span>
                         <span class="optiontext">Hotels</span>
                   </div> 
                   <div class="search-option-form-sm searchoption">
                     <div class="inputrow">
                       <input type="text" class="mainsearch" placeholder="Where do you want to go?">
                     </div>
                     <div class="inputrow">
                       <input type="text" class="inputdate" placeholder='Check-in'>
                       <input type="text" class="inputdate"  placeholder='Check-out'>
                     </div>
                     <div class="inputrow"> <input type="button" class="search-btn" value="Search Hotels"/> </div>
                   </div>
                   <div class="searchoption vacation-option">
                         <span class="optionicon"><img src="<?php echo asset_url(); ?>images/vacation-homes-icon_White.png" alt=""></span>
                         <span class="optiontext">Vacation Homes</span>
                   </div>   
                   <div class="searchoption holiday-option">
                         <span class="optionicon"><img src="<?php echo asset_url(); ?>images/holidays-icon_White.png" alt=""></span>
                         <span class="optiontext">Holiday Packages</span>
                   </div>     
                </div>
                <div class="search-inputs-wrapper">
                     <input type="text" class="main-input" placeholder="Where do you want to go?"/> 
                     <input type="text" class="date-input" placeholder="Check-in"/> 
                     <input type="text" class="date-input" placeholder="Check-out"/> 
                     <input type="button" class="search-btn" value="Search Hotels"/> 
              </div>
          </div>
          <div class="searchwrapper-overlay"></div>
          <div class="footer-overlay"></div>
	</div>
  <script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
  <script>
  var isOverlapping,isMobileVersion;

  // change opacity if tagline overlaps with the top menu
  checkTaglineOverlap();

  //detect mobile version
  checkMobileVersion();

   //slide down the menu on the menu icon click
   $('.menuiconwrapper').on('click',function(){
    $('ul.menu-dropdown').slideDown(200);
    if(isOverlapping)
    {
       $('.tagline').css({'opacity':'0.25'}); // reduce the opacity in case of overlap
    }
    
   });


    $('.footer-links-collapse').on('click',function(){
    $('ul.footer-dropdown').slideDown(200);
   });

  $('.searchoption').on('click',function(e){
    var $this = $(this);
    if($this.hasClass('hotel-option'))
    {
      if(isMobileVersion)
      {
        $this.next('.search-option-form-sm').slideToggle();
      }
    }
    else if($this.hasClass('vacation-option'))
    {

    }
    else if($this.hasClass('holiday-option'))
    {

    }

  });


  $(window).on('resize',function(){
      checkTaglineOverlap();
      checkMobileVersion();
  });


   $('*').on('click',function(e){
    if(!$(e.target).closest('.menuiconwrapper').length)
    {
      $('ul.menu-dropdown').slideUp(300);
       $('.tagline').css({'opacity':'1'}); // reset the opacity
    }

   if(!$(e.target).closest('.footer-links-collapse').length)
   {
     $('ul.footer-dropdown').slideUp(300);
   }
   });

   //custom functions
  function checkTaglineOverlap()
  {
     var window_width = $(window).width();
     if(window_width <= 1280)
     {
      isOverlapping = true;
     }
     else
     {
      isOverlapping = false;
     }
  }

  function checkMobileVersion()
  {
     var window_width = $(window).width();
     console.log(window_width);
     if(window_width <= 682)
     {
       isMobileVersion = true;
       $('.hotel-option img').attr('src','<?php echo asset_url(); ?>images/mobile/Hotel-icon_White.png');
       $('.vacation-option img').attr('src','<?php echo asset_url(); ?>images/mobile/VacationHomes-icon_White.png');
       $('.holiday-option img').attr('src','<?php echo asset_url(); ?>images/mobile/Holiday-icon_White.png');
     }
     else
     {
        isMobileVersion = false;
        $('.hotel-option img').attr('src','<?php echo asset_url(); ?>images/hotel-icon_White.png');
        $('.vacation-option img').attr('src','<?php echo asset_url(); ?>images/vacation-homes-icon_White.png');
        $('.holiday-option img').attr('src','<?php echo asset_url(); ?>images/holidays-icon_White.png');
     }
  }
  </script>
</body>
</html>

