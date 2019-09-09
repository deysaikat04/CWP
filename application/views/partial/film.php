<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <section class="about_section">
                    <div class="section-title welcome_text">
                        <h1>Wedding Films Gallery</h1>
                    </div>
                    <div class="devider"></div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center welcome_text">
                <p>
                    As we prefer to make the captured moments more lively,
                    we prefer to make professional cinematic videos,
                    And as its better not to bore you with much more dialogues,
                    we present you the collection of our professional cinematic videos.
                    Have a look at them before you take the best decision for yourself.
                </p>
            </div>
        </div>
        <div class="row">
            <?php if ($film_data) { ?>
          	<?php foreach ($film_data as $film) { ?>            
       
            <div class=" col-md-4">
                <div class="team_card card_hover film-header">
                    <div class="videoWrapper">
                    <iframe width="720" height="405" src="<?php echo $film['link']; ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                   </div>
                    <h2><?php echo $film['title']; ?></h2>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.quis nostrud exercitation </p>-->
                </div>
            </div>
       		 <?php } ?> 
          <?php } ?>
        </div>


    </div>


    <!--==================END=====================-->