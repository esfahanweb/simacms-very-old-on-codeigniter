<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Dulcet - Admin Theme </title>
		
		<!-- ==================================================================================== 
			STYLES BEGIN 
		===================================================================================== -->
		
		<!-- Global styles -->
		<link rel="stylesheet" type="text/css" href="<?=$TMPL?>/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?=$TMPL?>/css/grid.css" />
		<link rel="stylesheet" type="text/css" href="<?=$TMPL?>/css/config.css" />

		<!-- Plugin configuration (styles) -->
		<link rel="stylesheet" href="<?=$TMPL?>/css/plugin_config.css" />
		
		<!--[if IE 8]><link rel="stylesheet" href="<?=$TMPL?>/css/ie8.css" /><![endif]-->
		
		
		<!-- ======================================================================================
			SCRIPTS BEGIN
		======================================================================================= -->
        
	<!-- = Global Scripts [required for template] 
		***************************************************************************************-->
		<script type="text/javascript" src="<?=$TMPL?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/js/global_plugins_scripts.js"></script>
		
		
		
	<!-- = From Plugins Dir 
		***************************************************************************************-->
		
		<script type="text/javascript" src="<?=$TMPL?>/plugins/lightbox/<?=$TMPL?>/js/lightbox/jquery.lightbox.min.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/jqueryui/all/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/validator/<?=$TMPL?>/js/languages/jquery.validationEngine-en.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/validator/<?=$TMPL?>/js/jquery.validationEngine.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/dialogs/jquery-fallr-1.2.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/tinymce/jscripts/tiny_mce/jquery.tinymce.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/spin/jquery-spin.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/qtip/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/plupload/<?=$TMPL?>/js/browserplus-min.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/plupload/<?=$TMPL?>/js/plupload.full.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/plupload/<?=$TMPL?>/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/multiselect/<?=$TMPL?>/js/ui.multiselect.js"></script>			
		<script type="text/javascript" src="<?=$TMPL?>/plugins/datatables/media/<?=$TMPL?>/js/jquery.dataTables.js"></script>	
		<script type="text/javascript" src="<?=$TMPL?>/plugins/alerts/javascript/jquery.toastmessage.js"></script>	
		<script type="text/javascript" src="<?=$TMPL?>/plugins/prettify/prettify.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/fullcalendar/fullcalendar.min.js"></script>
				
		<script type="text/javascript" src="<?=$TMPL?>/plugins/fileexplorer/<?=$TMPL?>/js/elfinder.min.js"></script>	
		<!--<script src="<?=$TMPL?>/plugins/fileexplorer/<?=$TMPL?>/js/i18n/elfinder.ru.js" type="text/javascript" charset="utf-8"></script>-->	
		
		<!-- Flotr2 Charts -->
		<script type="text/javascript" src="<?=$TMPL?>/plugins/flotr2/flotr2.min.js"></script>
		<!--[if IE 8]><script type="text/javascript" src="<?=$TMPL?>/plugins/flotr2/flotr2.ie.min.js"></script><![endif]-->
		
		<!-- color picker -->
		<script type="text/javascript" src="<?=$TMPL?>/plugins/colorpicker/<?=$TMPL?>/js/colorpicker.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/colorpicker/<?=$TMPL?>/js/eye.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/colorpicker/<?=$TMPL?>/js/utils.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/plugins/colorpicker/<?=$TMPL?>/js/layout.js"></script>
		
		
		
	<!-- = From JS Dir
		****************************************************************************************-->
		
		<script type="text/javascript" src="<?=$TMPL?>/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/js/jquery.autogrowtextarea.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/js/jquery.autotab-1.1b.js"></script>
		
		<!-- From JS Dir [plugin initialization] -->
		<script type="text/javascript" src="<?=$TMPL?>/js/dialog_fallr_init.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/js/tiny_mce_init.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/js/datatables_init.js"></script>
		<script type="text/javascript" src="<?=$TMPL?>/js/head_scripts.js"></script>
				
		
    </head>
    <body>
				
		<section id="layout">
		
			<div class="logo_profile container_12">
				<div class="grid_6 logo_img">
					<img src="<?=$TMPL?>/images/logo.png" alt="Logo" />
				</div>
				<div class="grid_6 profile_meta">
					<div class="user_meta">
						<div>
							<img src="<?=$TMPL?>/images/smartik.jpg" alt="" />
						</div>
						<div class="name">
							Welcome Smartik <br />
							<a href="#" class="submeta">Profile</a>
							<a href="#" class="submeta">Logout</a>
						</div>
					</div>
				</div>
			
				<div class="clear"></div>
			</div>
	
			<section id="top">
					
				<section id="top_bar">						
					<section id="main_menu">
						<ul class="sf-menu">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#">Elements</a>
								<ul>
									<li><a href="form_elements.html">Form elements</a></li>
									<li><a href="user_interface.html">User Interface</a></li>
									<li><a href="generic_icons.html">Generic icons</a></li>
									<li><a href="tabs_accordion.html">Tabs Accordion</a></li>
									<li><a href="grid.html">Template grid</a></li>
									<li><a href="#">Another menu level</a>
										<ul>
											<li><a href="#">Lorem ipsum</a></li>
											<li><a href="#">Dolor sit amet</a></li>
											<li><a href="#">Aenean molestie</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#">Plugins</a>
								<ul>
									<li><a href="charts.html">Charts</a></li>
									<li><a href="datatables.html">Data tables</a></li>
									<li><a href="syntax_highlight.html">Syntax Highlighter</a></li>
									<li><a href="form_plugins.html">Form specific plugins</a></li>
									<li><a href="file_explorer.html">File explorer</a></li>
									<li><a href="full_calendar.html">Full calendar</a></li>
								</ul>
							</li>
							<li><a href="#">Gallery example</a>
								<ul>
									<li><a href="gallery.html">Gallery 1</a></li>
									<li><a href="gallery2.html">Gallery 2</a></li>
								</ul>
							</li>
							<li><a href="#">Documentation</a>
								<ul>
									<li><a href="zHtmlstructure.html">HTML Structure</a></li>
									<li><a href="zForms.html">Forms Structure</a></li>
									<li><a href="zColorpicker.html">Color Picker</a></li>									
									<li><a href="zDatepicker.html">Date Picker</a></li>									
									<li><a href="zSlider.html">Slider</a></li>									
									<li><a href="zProgressbar.html">Progress Bar</a></li>						
									<li><a href="zTabs.html">Tabs</a></li>		
									<li><a href="zAccordion.html">Accordion</a></li>		
									<li><a href="zCharts.html">Charts( Flotr2 )</a></li>	
									<li><a href="zDataTables.html">Data Tables</a></li>
									<li><a href="zFileExplorer.html">File Explorer( elFinder )</a></li>
									<li><a href="zDialogsAlerts.html">Dialogs &amp; Alerts</a></li>
									<li><a href="zRequirements.html">Requirements</a></li>
								</ul>
							</li>
						</ul>							
					<div class="clear"></div>
					</section><!-- End of #main_menu -->
				</section><!-- End of #top_bar -->
				<div class="clear"></div>
				
				<section class="top_in">	
					<section id="second_top_bar">
						<div id="quick_task" class="jThumbnailScroller">
							<div class="jTscrollerContainer">
							<div class="clear"></div>
								<ul class="jTscroller">
									<li><a href="#"><span class="icon1"></span>Dashboard</a></li>
									<li><a href="#"><span class="icon2"></span>Forms</a></li>
									<li><a href="#"><span class="icon3"></span>Charts</a></li>
									<li><a href="#"><span class="icon4"></span>Organizer</a></li>
									<li><a href="#"><span class="icon5"></span>Settings</a></li>
									<li><a href="#"><span class="icon7"></span>Tables</a></li>
									<li><a href="#"><span class="icon6"></span>Contacts</a></li>
									<li><a href="#"><span class="icon8"></span>File explorer</a></li>
									<li><a href="#"><span class="icon9"></span>Users</a></li>
									<li><a href="#"><span class="icon10"></span>Upload</a></li>
									<li><a href="#"><span class="icon13"></span>Download</a></li>
									<li><a href="#"><span class="icon11"></span>Plus</a></li>
									<li><a href="#"><span class="icon12"></span>Add product</a></li>
									<li><a href="#"><span class="icon14"></span>Photos</a></li>
									<li><a href="#"><span class="icon15"></span>Comments</a></li>
									<li><a href="#"><span class="icon17"></span>New mail</a></li>
									<li><a href="#"><span class="icon16"></span>Database</a></li>
									<li><a href="#"><span class="icon18"></span>Favorites</a></li>
									<li><a href="#"><span class="icon19"></span>Security settings</a></li>
									<li><a href="#"><span class="icon20"></span>New page</a></li>
								</ul>
								<div class="clear"></div>
							</div>										
							<div class="clear"></div>
						</div>
						<div class="clear"></div>						
					</section><!-- End of #second_top_bar -->
				</section><!-- End of .top_in -->
				
			</section><!-- End of #top -->
			

			
	
			<section id="container" class="container_12">