<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Better Home</title>
    <?php include ( './common/common-head.php' ) ; ?>
</head>

<body>
    
    <?php include ( './components/navbar.php' ) ; ?>
    <?php perch_content('Header'); ?>
    
    <span id="page" class="anchor"></span>
    <div class="page">
        
        <div class="section">
             <div class="content top-content">
                <?php perch_content('What We Do'); ?>
            </div>
        </div>
        
        <div class="section subtle-purple-section">
             <div class="content">
                <?php perch_content('Our Services'); ?>
            </div>
        </div>
        
        <div class="section purple-section">
             <div class="content events-content">
                 <div class="events-word-background">
                    <div class="header-background-word">Well Being</div>
                    <div class="header-background-word">Powerful Thinking</div>
                    <div class="header-background-word">Self Management </div>
                    <div class="header-background-word">Resilience</div>
                </div>
                <div class="section-title-container">
                    <div class="section-title section-title-white">Upcoming Events</div>
                    <div class="section-title-underline">
                        <img src="assets/img/title-underline-white.svg">
                    </div>
                </div>
                 
                 <div class="events-container owl-carousel owl-theme">
                     <?php perch_content_custom('Events', array(
                                    'page'=>'/think-better-workshops.php',
                                    'template' => 'event_card.html',
                        )); 
                     ?>
                 </div>
                
            </div>
        </div>
            
        
        <div class="section subtle-purple-section">
             <div class="content">
                <div class="section-title-container">
                    <div class="section-title">Blog</div>
                    <div class="section-title-underline">
                        <img src="assets/img/title-underline.svg">
                    </div>
                 </div>
                 
                <div class="blog-cards-container">
                   <?php perch_blog_custom([
                        'template'   => 'post_in_list_home.html',
                        'count'      => 2,
                        'sort'       => 'postDateTime',
                        'sort-order' => 'DESC',
		           ]);?>
                 </div> 
                 
                 <div class="blog-cards-view-all-container">
                    <a href="/blog.php" class="button button-purple">
                        <div class="button-text button-text-white">View All</div>
                    </a>
                 </div>
              

            </div>
        </div>
 
        
    </div>
    
    <?php include ( './components/footer.php' ) ; ?>

</body>
    
<?php include ( './common/common-body.php' ) ; ?>    
</html>
