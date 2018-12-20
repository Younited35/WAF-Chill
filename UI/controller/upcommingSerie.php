
<?php
$tvShows = $tmdb->getTopRatedTVShows();
$i = 1;
$background1="";
$nom1="";
$background2="";
$nom2="";
$background3="";
$nom3="";
foreach($tvShows as $tvShow){
     $tmdb->getImageURL('original').$tvShow->getBackdrop();
     if($i==1){
       $background1= $tmdb->getImageURL('w1280').$tvShow->getBackdrop();
       $nom1= $tvShow->getName();
     }
     if($i==2){
       $background2= $tmdb->getImageURL('w1280').$tvShow->getBackdrop();
       $nom2= $tvShow->getName();
     }
     if($i==3){
       $background3= $tmdb->getImageURL('w1280').$tvShow->getBackdrop();
       $nom3= $tvShow->getName();
       break;
     }
     $i++;
}

?>

        <!-- =============== START OF UPCOMING MOVIES SECTION =============== -->
        <section class="upcoming-movies parallax ptb100" data-background="assets/images/other/landscape.jpg" data-color="#3e4555" data-color-opacity="0.95">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title text-white">TOP RATED TV Shows</h2>
                    </div>
                </div>
                <!-- End of row -->



                <!-- Start of row -->
                <div class="row mt50">

                    <!-- === Start of Upcoming Featured Movies & TV Shows === -->
                    <div class="col-md-8">

                        <!-- Start of Upcoming Featured Item -->
                        <div class="movie-box-1 upcoming-featured-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo $background1; ?>" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html"><?php echo $nom1; ?></a>
                                </h4>
                                <span class="released">Release Date: 15 Mar 2018</span>
                            </div>
                            <!-- End of Movie Details -->
                        </div>
                        <!-- End of Upcoming Featured Item -->

                    </div>
                    <!-- === End of Upcoming Featured Movies & TV Shows === -->


                    <!-- === Start of Upcoming Movies & TV Shows === -->
                    <div class="col-md-4">

                        <!-- Start of Upcoming Item 1 -->
                        <div class="movie-box-1 upcoming-item">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo $background2; ?>" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html"><?php echo $nom2; ?></a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 1 -->

                        <!-- Start of Upcoming Item 2 -->
                        <div class="movie-box-1 upcoming-item mt20">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="<?php echo $background3; ?>" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html"><?php echo $nom3; ?></a>
                                </h4>
                            </div>
                            <!-- End of Movie Details -->

                        </div>
                        <!-- End of Upcoming Item 2 -->

                    </div>
                    <!-- === End of Upcoming Movies & TV Shows === -->

                </div>
                <!-- End of row -->

            </div>
        </section>
        <!-- =============== END OF UPCOMING MOVIES SECTION =============== -->
