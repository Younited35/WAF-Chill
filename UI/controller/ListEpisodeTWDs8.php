<!-- =============== START OF MAIN =============== -->
<main id="episode">
    <div class="container">


        <!-- Start of Movie List -->
        <div class="row">


            <!-- Watch Later Item -->
            <?php

$array = array(
            1 => "wulu9ux629q6",
            2 => "si8p5694wfgw",
            3 => "koe3xdnnota3",
            4 => "s0vjup06nacu",
            5 => "4073jutc453k",
            6 => "e1zb05k61l0y",
            7 => "mv3hu1n1rg6k",
            8 => "9y8dxviy32hd",
            9 => "2pmepbi1zkgd",
            10 => "eejgtgn2o8vo",
            11 => "10w6wiujqadq",
            12 => "zycsh2gjfhi9",
            13 => "b4cv73ha0il9",
            14 => "q4rbdakj7qk7",
            15 => "ehjjt9kexz5o",
            16 => "n0wxzcdzzdzy",
            );

            $episodes = $season->getEpisodes();
            foreach($episodes as $episode){

              $cutText ="";
              $resume = $episode->getOverview();
              $nbrChar = strlen($episode->getOverview());
              if($nbrChar > 400){

                $resume = substr_replace($resume, '...', 400, strlen($resume));
              }

            echo "<div class='col-md-12 col-sm-12'>
                <div class='watch-later-item' id='watch-later-item'>
                    <div class='listing-container'>

                    <div class='item' id='item'>
                      <div class='movie-box-1'>
                            <!-- Start of Poster -->
                            <div class='poster'>
                                <img src='".$tmdb->getImageURL('w300').$episode->getStill()."'>
                            </div>
                            <!-- End of Poster -->
                            <!-- Start of Buttons -->
                            <div class='buttons' style='zoom:-1;'>
                                <a href='https://uptostream.com/iframe/".$array[$episode->getEpisodeNumber()]."' target='_top' class='play-video'>
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

                                <button type='button' class='btn btn-dark' data-toggle='modal' data-target='#exampleModal'>
                                  add link
                                </button>


                                <!-- Modal -->
                                <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                  <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                      <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Add Stream Link</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                          <span aria-hidden='true'>&times;</span>
                                        </button>
                                      </div>
                                      <div class='modal-body'>
                                        <form>
                                          <div class='form-group'>
                                            <label for='recipient-name' class='col-form-label'>Add the uptostream code :</label>
                                            <input type='text' class='form-control' id='recipient-name'>
                                          </div>
                                        </form>
                                      </div>
                                      <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                        <button type='button' class='btn btn-primary'>Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


















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
