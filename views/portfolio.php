<main>		
        <!-- Preloader -->
        <div class="preloader-wrap" data-centerLine="Loading">
        
            <div class="percentage-wrapper">
            	<div class="percentage" id="precent">
                	
                    <span class="number number_2">
                        <span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>0</span>
                    </span>
                    <span class="number number_3">
                        <span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>0</span>
                    </span>
            	</div>
                <div class="percentage-first"><span>wait, wait..</span></div>
                <div class="percentage-last"><span>100</span></div>
            </div>
            
        </div>
        <!--/Preloader -->     
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="clapat-page-content" class="light-content" data-bgcolor="#0c0c0c">
            
            <!-- Header -->
            <?php include "header.php" ?>
            <!-- /Header -->
            
            
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">
                
                    <!-- Hero Section -->
                    <div id="hero">
                        <div id="hero-styles">
                            <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center hero-full-caption">
                                <div class="inner">
                                
                                    <h1 class="hero-title caption-timeline generate-spans" data-infoTextBefore="Designs" data-infoTextAfter="Portfolio">
                                    	<div><span>projects</span></div>
                                    </h1>
                                    
                                    <div class="hero-subtitle caption-timeline onload-shuffle">
                                        <div><span>Designing digital experiences that</span></div>
                                        <div class="secondary-font"><span>leave a lasting impression</span></div>
                                    </div>                                   
                                </div>
                            </div>
                            <div id="hero-footer" class="has-border">
                            	<div class="hero-footer-left">
                                	<div class="button-wrap left scroll-down">
                                        <div class="icon-wrap parallax-wrap">
                                            <div class="button-icon parallax-element">
                                                <i class="fa-solid fa-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="button-text sticky left"><span data-hover="Scroll to Explore">Scroll to Explore</span></div> 
                                    </div>
                                </div>
                                <div class="hero-footer-right">
                    				<div class="button-wrap right show-filters">
                                        <div class="icon-wrap parallax-wrap">
                                            <div class="button-icon parallax-element">
                                                <i class="fa-solid fa-sort"></i>
                                            </div>
                                        </div>
                                        <div class="button-text sticky right"><span data-close="All Projects" data-hover="All Projects">All Projects</span></div> 
                                    </div>
                                </div>
                            </div>                                  
                        </div>
                    </div>                      
                    <!--/Hero Section -->
                    
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <!-- Main Page Content -->
                        <div id="main-page-content">
                            <!-- Fit Thumb Screen Effects -->                                                          
                            <div id="itemsWrapperLinks">                               
                                <div id="itemsWrapper" class="webgl-fitthumbs fx-one">
                                    
                                    <div id="filters-gradient">
                                    	<ul id="filters" class="filters-options-wrapper">
                                            <li class="filters-timeline link"><a id="all" class="filter-option is_active" href="#" data-filter=""><span>all projects</span></a></li>
                                            <li class="filters-timeline link"><a class="filter-option" href="#" data-filter="design-filter"><span>design</span></a></li>
                                            <li class="filters-timeline link"><a class="filter-option" href="#" data-filter="video-filter"><span>video</span></a></li>
                                            <li class="filters-timeline link"><a class="filter-option" href="#" data-filter="photo-filter"><span>photo</span></a></li>
                                        </ul>
                                    </div>
                                    

                                    <!-- ClaPat Portfolio -->
                                    <div class="showcase-portfolio expand-grid" id="projects-grid">
                                      


                                    <?php

$jsonPath = __DIR__ . '/projects/projects.json';
$projects = [];

if (file_exists($jsonPath)) {
    $json = file_get_contents($jsonPath);
    $projects = json_decode($json, true);
}


                                        foreach ($projects as $project): ?>
                                        <div class="clapat-item photo-filter">
                                            <div class="slide-inner trigger-item" data-centerLine="OPEN">
                                            <div class="img-mask pixels-cover">
                                                <a class="slide-link" data-type="page-transition" href="<?= $project['link'] ?>"></a>
                                                <div class="section-image trigger-item-link">
                                                <img src="<?= $project['image'] ?>" class="item-image grid__item-img" alt="<?= $project['title'] ?>">
                                                </div>
                                                <img src="<?= $project['image'] ?>" class="grid__item-img grid__item-img--large" alt="<?= $project['title'] ?>">
                                                <div class="section-thumb">
                                                <img src="<?= $project['thumb'] ?>" alt="<?= $project['title'] ?>">
                                                </div>
                                            </div>
                                            <div class="slide-caption trigger-item-link-secondary">
                                                <div class="slide-title"><span><?= $project['title'] ?></span></div>
                                                <div class="slide-date"><span><?= $project['year'] ?></span></div>
                                                <div class="slide-cat"><span><?= $project['category'] ?></span></div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>


                                                                                
                                    </div>
                                    <!-- ClaPat Portfolio -->
                                                                
                        		</div>                                                           
                            </div>    
                            <!-- Fit Thumb Screen Effects -->
                        </div>
                        <!--/Main Page Content -->
                        
                        
                        
                        
                                
                    	<!-- Page Navigation --> 
                        <div id="page-nav" class="move-nav-onload">
                            <div class="page-nav-wrap">
                                <div class="page-nav-caption nav-full-caption content-full-width text-align-center">                                 
                                    <div class="inner">
                                        <a class="next-ajax-link-page" data-type="page-transition" data-centerline="GO TO" href="index-playground.html">
                                            <div class="next-hero-title caption-timeline" data-infoTextBefore="Go Ahead" data-infoTextAfter="Next Page"><span>archive</span></div>
                                        </a>                                   
                                    </div>               
                                </div>
                            </div>
                        </div>      
                        <!--/Page Navigation -->
                        
                                
                    </div>
                    <!--/Main Content --> 
                
                </div>
                <!--/Main -->
                
                
                
                
                <!-- Footer -->
                <footer class="clapat-footer hidden">        	
                    <div id="footer-container">
                        
                        <div id="backtotop" class="button-wrap left">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="fa-solid fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="button-text sticky left"><span data-hover="Back Top">Back Top</span></div> 
                        </div>
                        
                        <div class="footer-middle">
                            <div class="copyright">2025 © <a class="link" target="_blank" href="https://www.clapat.com/">ClaPat</a>. All rights reserved.</div>
                        </div>
                        
                        <div class="socials-wrap">            	
                            <div class="socials-icon"><i class="fa-solid fa-share-nodes"></i></div>
                            <div class="socials-text">Follow Us</div>
                            <ul class="socials">
                                <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.dribbble.com/clapat" target="_blank">Db</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.twitter.com/clapatdesign" target="_blank">Tx</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.behance.com/clapat" target="_blank">Be</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.facebook.com/clapat.ro" target="_blank">Fb</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="https://www.instagram.com/clapat.themes/">In</a></span></li>
                            </ul>                
                        </div>
                        
                    </div>
                </footer>
                <!--/Footer -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            
            <div id="app"></div>
            
            
		</div>    
        <!--/Page Content -->
    
		</div>
	</main>