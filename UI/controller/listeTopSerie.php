
<!-- =============== START OF LATEST MOVIES SECTION =============== -->
<section class="latest-movies ptb100">
    <div class="container">

        <!-- Start of row -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="title">Top Series</h2>
            </div>


            <div class="col-md-4 align-self-center text-right">
                <a href="#" class="btn btn-icon btn-main btn-effect">
                    view all
                    <i class="ti-angle-double-right"></i>
                </a>
            </div>
        </div>
        <!-- End of row -->


        <!-- Start of Latest Movies Slider -->
        <div class="owl-carousel latest-movies-slider mt20">

            <?php
              $tvShows = $tmdb->getOnTheAirTVShows();
              $i = 1;


              foreach($tvShows as $tvShow){
                  $i++;
                  echo "<!-- === Start of Sliding Item 1 === -->
                                  <div class='item'>
                                      <!-- Start of Movie Box -->
                                      <div class='movie-box-1'>

                                          <!-- Start of Poster -->
                                          <div class='poster'>
                                              <img src='". $tmdb->getImageURL('w370_and_h556_bestv2') . $tvShow->getPoster() ."' alt=''>
                                          </div>
                                          <!-- End of Poster -->

                                          <!-- Start of Buttons -->
                                          <div class='buttons'>
                                              <a href='https://www.youtube.com/watch?v=Q0CbN8sfihY' class='play-video'>
                                                  <i class='fa fa-play'></i>
                                              </a>
                                          </div>
                                          <!-- End of Buttons -->

                                          <!-- Start of Movie Details -->
                                          <div class='movie-details'>
                                              <h4 class='movie-title'>
                                                <a href='movie-detail2.php?serie=".$tvShow->getID()."'>".$tvShow->getName()."</a>
                                              </h4>
                                              <span class='released'></span>
                                          </div>
                                          <!-- End of Movie Details -->

                                          <!-- Start of Rating -->
                                          <div class='stars'>
                                              <div class='rating'>
                                                  <i class='fa fa-star'></i>
                                                  <i class='fa fa-star'></i>
                                                  <i class='fa fa-star'></i>
                                                  <i class='fa fa-star'></i>
                                                  <i class='fa fa-star-o'></i>
                                              </div>
                                              <span>".$tvShow->getVoteAverage()." / 10</span>
                                          </div>
                                          <!-- End of Rating -->

                                      </div>
                                      <!-- End of Movie Box -->
                                  </div>
                                  <!-- === End of Sliding Item 1 === -->";
                                  if($i == 17){
                                    break;
                                  }
                          }


            ?>

        </div>
        <!-- End of Latest Movies Slider -->


    </div>
</section>
<!-- =============== END OF LATEST MOVIES SECTION =============== -->
