<!-- =============== START OF MAIN =============== -->
<main id="episode">
    <div class="container">


        <!-- Start of Movie List -->
        <div class="row">

            <!-- Watch Later Item -->
            <?php

            $episodes = $season->getEpisodes();
            foreach($episodes as $episode){

              $cutText ="";
              $resume = $episode->getOverview();
              $nbrChar = strlen($episode->getOverview());
              if($nbrChar > 400){

                $resume = substr_replace($resume, '...', 400, strlen($resume));
              }


            echo "<div class='col-md-12 col-sm-12'>
                <div class='watch-later-item'>
                    <div class='listing-container'>

                    <div class='item'>
                      <div class='movie-box-1'>
                            <!-- Start of Poster -->
                            <div class='poster'>
                                <img src='".$tmdb->getImageURL('w300').$episode->getStill()."'>
                            </div>
                            <!-- End of Poster -->
                            <!-- Start of Buttons -->
                            <div class='buttons' style='zoom:-1;'>
                                <a href='https://www.youtube.com/watch?v=Q0CbN8sfihY' class='play-video'>
                                    <i class='fa fa-play'></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->
                          </div>
                    </div>
                        <!-- Movie List Content -->
                        <div class='listing-content'>
                            <div class='inner'>
                                <h4 class='title'>".$episode->getEpisodeNumber() .' - '. $episode->getName() ."</h4>

                                <p>".$resume ."</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>";

          }



             ?>

        </div>
        <!-- End of Movie List -->

    </div>
</main>
<!-- =============== END OF MAIN =============== -->
