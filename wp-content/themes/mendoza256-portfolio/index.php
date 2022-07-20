<!-- Load Header -->
<?php
    get_header(); 
?>
<div class="app">
    <div class="projectsWrapper">
    <?php
        $homepageProjects = new WP_Query(array(
            'posts_per_page' => 8,
            'post_type' => 'project'
        ));



        while ($homepageProjects->have_posts()) {
            $homepageProjects->the_post(); ?>
            <div class="project">

            <div class="imageWrapper">
                        <img
                        class="projectPreview"
                        src="<?php the_field('project_image') ?>"
                        alt=""
                        />
                    </div>
                
                <div class="contentWrapper">
                    <a class="headlineLink" target="_blank" href="<?php the_field('live_site_link') ?>">
                        <h2 class="projectName"><?php the_title(); ?></h2>
                    </a>
                    <article class="projectDescription"><?php the_content(); ?></article>
                    <a class="liveSiteLink" target="_blank" href="<?php the_field('live_site_link') ?>">
                        <p>LIVE SITE 🚀</p>
                    </a>
                    <span class="projectTechstack"><?php the_field('project_techstack') ?></span>
                
                    <a class="githubLink" target="_blank" href="<?php the_field('project_github_link') ?>">
                        <img src="http://mendoza256portfolio.local/wp-content/uploads/2022/07/GitHub-Mark-32px.png" alt="">
                    </a>
                </div>
            </div>
            
        <?php }

        
    ?>
        
    </div>
</div>
<!-- Load Footer -->
<?php
    get_footer(); 
?>