<div class="container-fluid">
<div class="row">
   <div class="col-lg-12">
      <?php  
         
         echo('<h3> '.$parkInfo["fullName"].' </h3>');
         ?>
   </div>
</div>
<h5> Position: <?php echo($parkInfo['latLong']); ?> </h5>
<hr>
<div class="container-fluid">
<div class="row">
   <div class="col">
      <h5> Contact: </h5>
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <?php 
                  $contacts = (array) $parkInfo['contacts'];
                  $phonenumbers = (array) $contacts['phoneNumbers'];
                  echo('<h6>Phone Numbers</h6>');
                  for ($x = 0; $x <= count($phonenumbers) - 1; $x++) {
                    $phoneinfo = (array) $phonenumbers[$x];
                    $formatNum = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", 
                                "$1-$2-$3", $phoneinfo['phoneNumber']);
                    echo('<p>'. $phoneinfo['type']  .': '. $formatNum .'</p>');
                  }  
                  ?> 
            </div>
            <div class="col-lg-8">
               <?php 
                  $contacts = (array) $parkInfo['contacts'];
                  $emailaddress = (array) $contacts['emailAddresses'][0];
                  echo('<h6>Email Address: </h6>');
                  if($emailaddress['emailAddress'] === '0@0'){
                    echo("None");
                  } else echo($emailaddress['emailAddress']);
                  ?>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <h5> Activities Avalible: </h5>
      <div class="parkactiviteslist">
         <?php 
            $activities = (array) $parkInfo['activities'];
            for ($x = 0; $x <= count($activities) - 1; $x++) {
              $activity = (array)$activities[$x];
              echo('<p class="m-1">'.($x + 1).': '.$activity['name'].'</p>');
            }      
            ?> 
      </div>
   </div>
</div>

<h4> Description </h4>
<p> <?php echo($parkInfo['description']); ?> </p>

<h4> Weather </h4>
<p> <?php echo($parkInfo["weatherInfo"]); ?> </p>

<h4> Images </h4>
<h6 style="padding-bottom: 2em">
   <sub>Press blue left/right arrows, Swipe, or use left/right arrow keys.</sub>
</h6>

<div class="row" style="padding-bottom: 4em">
   <?php 
      $imagecount = count($parkInfo['images']);
      $currentImage = array();
      // [credit] [altText] [caption] [url] 

      echo('
         <div class="swiper-container">
            <div class="swiper-wrapper">
      ');
         for($x = 0; $x <= $imagecount - 1; $x++){
            $currentImage = (array) $parkInfo['images'][$x];
            $image = $currentImage['url'];
            $altText = $currentImage['altText'];
            $caption = $currentImage['caption']; 
         echo('<div class="swiper-slide parkimg">
                        <img src="'. $image .'" 
                             alt="'. $altText .'" height="600" 
                             style=" display: block;
                                     margin-left: auto;
                                     margin-right: auto;
                        ">
               </div>');
         }
      echo('</div>
               <div class="swiper-button-prev"></div>
               <div class="swiper-button-next"></div>
            </div>
      ');
   ?>
</div>

<script>
   const swiper = new Swiper('.swiper-container', {
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
   },
   keyboard: {
    enabled: true,
    onlyInViewport: false,
   }
   });
</script>

<?php 
    // $activities = (array) $parkInfo;
    // print_r($activities);
?>