<!DOCTYPE html>
<html lang="en" data-imgurl="<?php echo IMAGES; ?>/coming-soon-bg.jpg">
<head>
	<meta charset="UTF-8">
<?php wp_head(); ?>
<style>
/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: transparent;
  background-size: cover;
}
body:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: 0;
    opacity: 0.55;
    background-color: #000;
}
body {
  display: -ms-flexbox;
  display: flex;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
  z-index: 1;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.inner .site-logo img{
  width:100px;
}
.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover-heading{
	    font-weight: 700;
        font-size: 60px;
    text-transform: uppercase;
    word-spacing: 10px;
   line-height: normal;
}
.lead{margin-bottom: 20px;}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
/*==========Countdown Block==========*/
.countdown-sec{
    float: left;
    width: 100%;
    position: relative;
    z-index: 2;
    color: #fff;
    text-align: center;
}
.countdown-sec #timer{
    float: left;
    width: 100%
}
.countdown-sec #timer span{
    font-size: 55px;
    position: relative;
    line-height: normal;
    padding: 10px 20px 0;
    display: inline-block;
    font-weight: 700;
}
.countdown-sec #timer span i{
    font-style: normal;
    font-size: 20px;
    font-weight: normal;
    position: absolute;
    width:50%;
    text-align: center;
    left: 50%;
    margin-left: -25%;
    top: -10px;
    color: #fff;
    opacity: 0.7;
}

</style>
</head>
<body class="text-center">
	    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <div class="site-logo">
        <?php get_template_part( 'template-parts/header/content', 'branding' ); ?>
    
    </div>
    
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading"> <?php echo ((get_option( 'CommingSoonHeading' ))?get_option( 'CommingSoonHeading' ):"Coming Soon"); ?></h1>
    <p class="lead"><?php echo ((get_option( 'CommingSoonText' ))?get_option( 'CommingSoonText' ):"Our website is under construction."); ?></p>
    	<div class="countdown-sec mb-4">
						<div id="timer" data-year="<?php echo ((get_option( 'CommingSoonYear' ))?get_option( 'CommingSoonYear' ):"2019"); ?>" data-month="<?php echo ((get_option( 'CommingSoonMonth' ))?get_option( 'CommingSoonMonth' ):"March"); ?>" data-day="<?php echo ((get_option( 'CommingSoonDay' ))?get_option( 'CommingSoonDay' ):"31"); ?>"></div>
					</div>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
     <p>&copy; <?php echo date('Y'); ?>
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				<?php _e('All right reserved',"begro"); ?>
			</p>
    </div>
  </footer>
</div>
</body>
<?php wp_footer(); ?>

</html>