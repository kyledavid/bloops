<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Fantasy roleplay forum - Valucre</title>
<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="http://www.valucre.com/uploads/css_built_7/5e61784858ad3c11f00b5706d12afe52_ie8.css.acb5573d49576d1e2474cdb1608581ee.css">
		    <script src="//www.valucre.com/applications/core/interface/html5shiv/html5shiv.js"></script>
		<![endif]-->
		


	<meta name="viewport" content="width=device-width, initial-scale=1">



	
		
			<meta property="og:title" content="Fantasy roleplay forum - Valucre">
		
	

	
		
			<meta property="og:type" content="website">
		
	

	
		
			<meta property="og:url" content="http://www.valucre.com/index.php">
		
	

	
		
			<meta property="og:site_name" content="Fantasy roleplay forum - Valucre">
		
	

	
		
			<meta property="og:locale" content="en_US">
		
	

	
		
			<meta name="description" content="Valucre is a fantasy roleplay forum that emphasis writing, character development and plot in the community. Valucre is freeform, with a unique global setting capable of supporting nearly any type of roleplay imaginable. ">
		
	

	
		
			<meta name="keywords" content="fantasy roleplay, roleplay, forum rp, rp site">
		
	

<meta name="theme-color" content="#55728b">
<link rel="canonical" href="http://www.valucre.com/index.php">


		


		
		<style id="stylePrimary" type="text/css">.tee, .tee #header, .tee .ipsBreadcrumb, .tee #footer, .tee.ipsApp .ipsButton_important, .tee .ipsButtonBar, .tee .cPollVoteBar > span, .tee .focus_footer{ background-color: #55728b }.tee .ipsBreadcrumb a, .tee .breadcrumb_side li a, .tee .breadcrumb_side li a:hover{ color: #55728b } </style>
<style id="styleSecondary" type="text/css">.tee .ipsType_sectionTitle, .tee .ipsWidget.ipsWidget_vertical .ipsWidget_title, .tee .ipsWidget.ipsWidget_horizontal .ipsWidget_title, .tee #elVNC_sidebar .ipsFieldRow_label, .tee #elSearch_sidebar .ipsFieldRow_label, .tee .ipsTable.ipsMatrix .ipsMatrix_subHeader, .tee .ipsSideMenu_title, .tee .ipsSideMenu_subTitle , .tee .ipsItemStatus.ipsItemStatus_large, .tee .ipsItemStatus.ipsItemStatus_large.ipsItemStatus_read{ background-color: #8b4343 }a, .tee .ipsWidget.ipsWidget_vertical .ipsWidget_title, .tee .ipsWidget.ipsWidget_horizontal .ipsWidget_title, .tee #elVNC_sidebar .ipsFieldRow_label, .tee #elSearch_sidebar .ipsFieldRow_label, .tee .ipsTable.ipsMatrix .ipsMatrix_subHeader, .tee .ipsSideMenu_title, .tee .ipsSideMenu_subTitle{ color: #8b4343 } @media screen and (min-width:768px){  .tee .cPost:before{ background-color: #8b4343 } .tee .cAuthorPane_author, .tee .cAuthorPane_author a, .tee .cPost .ipsComment_meta{ color: #8b4343 }  }</style>
		

	<script async="" src="./Fantasy roleplay forum  cutout_files/analytics.js"></script><script async="" src="./Fantasy roleplay forum  cutout_files/analytics(1).js"></script><script type="text/javascript">
		var ipsDebug = false;		
	
		var CKEDITOR_BASEPATH = '//www.valucre.com/applications/core/interface/ckeditor/ckeditor/';
	
		var ipsSettings = {
			
			
			
			
			cookie_prefix: "ips4_",
			
			
			cookie_ssl: false,
			
			imgURL: "",
			baseURL: "//www.valucre.com/",
			jsURL: "//www.valucre.com/applications/core/interface/js/js.php",
			csrfKey: "bb580d4bccbc2287d0da64fc00dc4e77",
			antiCache: "475c79c2b2",
            disableNotificationSounds: false,
			useCompiledFiles: true,
            links_external: 1,
			memberID: 0
		};
	</script>



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/ips.js" data-ips=""></script>




	<script type="text/javascript">
		
			ips.setSetting( 'date_format', jQuery.parseJSON('"mm\/dd\/yy"') );
		
			ips.setSetting( 'date_first_day', jQuery.parseJSON('0') );
		
			ips.setSetting( 'remote_image_proxy', jQuery.parseJSON('0') );
		
		
	</script>




<script type="text/javascript">
	
$(document).ready(function(){


function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};
	
		

// Firefox calculates width differently due to scrollbar on Windows
if( navigator.userAgent.toLowerCase().indexOf('firefox') > -1 ){
    var browserResponsiveWidth = 963;
}else{
    var browserResponsiveWidth = 980;
}



// Relocate search bar
var relocateSearch = function(){
		
	var currentBrowserWidth = $(window).width();
    
    if(currentBrowserWidth > browserResponsiveWidth){
		$("#elSearch").prependTo("#searchWrap");
	} else {
		$("#elSearch").prependTo("#respSearch");
	}
	
}

relocateSearch();
		

		
var resizeWindow = function(){

    var currentBrowserWidth = $(window).width();

    if(currentBrowserWidth > browserResponsiveWidth){

    // Desktops

        $("#elSearch").prependTo("#searchWrap");
        $("body").addClass("ipsfocus_desktop");


    } else {

    // Tablets and mobiles

        $("#elSearch").prependTo("#respSearch");
        $("body").removeClass("ipsfocus_desktop");

    }

}

resizeWindow();




// Bug fix: The resize event is triggered when tablets and mobiles are scrolled, breaking the search bar in Android and Chrome
var cachedWidth = $(window).width();

// Run width functions after 100ms pause
$(window).resize(debounce(function(){
	
	var newWidth = $(window).width();
    if(newWidth !== cachedWidth){
        
        resizeWindow();
        relocateSearch();
        
        cachedWidth = newWidth;
    }
	
}, 100));
		


// Hide post controls as a guest to prevent empty bar
$(".cPost .ipsComment_controls li.ipsHide:only-child").parent().hide();

// Hide gallery descriptions if they don't exist
if ($('.galleryDescription .ipsType_richText').is(':empty')){
    $(".galleryDescription").hide();
}

// Hide empty divs in ipsPageHeader to prevent unnecessary margins
$('.ipsPageHeader .ipsSpacer_top').each(function(){
    if(!/[\S]/.test($(this).html())) { 
        $(this).hide();
    }
}); 


/* Navigation */            
function ipsfocusNavigation() {
	
	var navwidth = 0;
	var morewidth = $('.ipsNavBar_primary .focusNav_more').outerWidth(true);
	$('.ipsNavBar_primary > ul > li:not(.focusNav_more)').each(function() {
		navwidth += $(this).outerWidth( true );
	});
	var availablespace = $('.ipsNavBar_primary').outerWidth(true) - morewidth;
	if (navwidth > availablespace) {
		var lastItem = $('.ipsNavBar_primary > ul > li:not(.focusNav_more)').last();
		lastItem.attr('data-width', lastItem.outerWidth(true));
		lastItem.prependTo($('.ipsNavBar_primary .focusNav_more > ul'));
		ipsfocusNavigation();
	} else {
		var firstMoreElement = $('.ipsNavBar_primary li.focusNav_more li').first();
		if (navwidth + firstMoreElement.data('width') < availablespace) {
			firstMoreElement.insertBefore($('.ipsNavBar_primary .focusNav_more'));
		}
	}
	
	if ($('.focusNav_more li').length > 0) {
		$('.focusNav_more').css('display','inline-block');
	} else {
		$('.focusNav_more').css('display','none');
	}
	
}

$(window).on('load',function(){
	$(".navAlign").removeClass("hiddenLinks");
  	ipsfocusNavigation();
});
 
$(window).on('resize',function(){
	ipsfocusNavigation();
});



// Make hover navigation work with touch devices
/* Navigation */            
function ipsfocusNavigation() {
	
	var navwidth = 0;
	var morewidth = $('.ipsNavBar_primary .focusNav_more').outerWidth(true);
	$('.ipsNavBar_primary > ul > li:not(.focusNav_more)').each(function() {
		navwidth += $(this).outerWidth( true );
	});
	var availablespace = $('.ipsNavBar_primary').outerWidth(true) - morewidth;
	if (navwidth > availablespace) {
		var lastItem = $('.ipsNavBar_primary > ul > li:not(.focusNav_more)').last();
		lastItem.attr('data-width', lastItem.outerWidth(true));
		lastItem.prependTo($('.ipsNavBar_primary .focusNav_more > ul'));
		ipsfocusNavigation();
	} else {
		var firstMoreElement = $('.ipsNavBar_primary li.focusNav_more li').first();
		if (navwidth + firstMoreElement.data('width') < availablespace) {
			firstMoreElement.insertBefore($('.ipsNavBar_primary .focusNav_more'));
		}
	}
	
	if ($('.focusNav_more li').length > 0) {
		$('.focusNav_more').css('display','inline-block');
	} else {
		$('.focusNav_more').css('display','none');
	}
	
}

$(window).on('load',function(){
	$(".navAlign").removeClass("hiddenLinks");
  	ipsfocusNavigation();
});
 
$(window).on('resize',function(){
	ipsfocusNavigation();
});



// Make hover navigation work with touch devices

// http://osvaldas.info/drop-down-navigation-responsive-and-touch-friendly
;(function(e,t,n,r){e.fn.doubleTapToGo=function(r){if(!("ontouchstart"in t)&&!navigator.msMaxTouchPoints&&!navigator.userAgent.toLowerCase().match(/windows phone os 7/i))return false;this.each(function(){var t=false;e(this).on("click",function(n){var r=e(this);if(r[0]!=t[0]){n.preventDefault();t=r}});e(n).on("click touchstart MSPointerDown",function(n){var r=true,i=e(n.target).parents();for(var s=0;s<i.length;s++)if(i[s]==t[0])r=false;if(r)t=false})});return this}})(jQuery,window,document);

$('.ipsNavBar_primary > ul > li:has(ul)').doubleTapToGo();
  



 


if ( $('body').hasClass('tee') ){
  
	$("#toggle_themeEditor a").click(function(){
		$("#themeEditor").slideToggle();
		$(this).toggleClass("active");
		return false;
	})
	
	var customMainElements = ".tee, .tee #header, .tee .ipsBreadcrumb, .tee #footer, .tee.ipsApp .ipsButton_important, .tee .ipsButtonBar, .tee .cPollVoteBar > span, .tee .focus_footer"
	var customMainText = ".tee .ipsBreadcrumb a, .tee .breadcrumb_side li a, .tee .breadcrumb_side li a:hover"
	var customElements = ".tee .ipsType_sectionTitle, .tee .ipsWidget.ipsWidget_vertical .ipsWidget_title, .tee .ipsWidget.ipsWidget_horizontal .ipsWidget_title, .tee #elVNC_sidebar .ipsFieldRow_label, .tee #elSearch_sidebar .ipsFieldRow_label, .tee .ipsTable.ipsMatrix .ipsMatrix_subHeader, .tee .ipsSideMenu_title, .tee .ipsSideMenu_subTitle , .tee .ipsItemStatus.ipsItemStatus_large, .tee .ipsItemStatus.ipsItemStatus_large.ipsItemStatus_read";
	var customText = "a, .tee .ipsWidget.ipsWidget_vertical .ipsWidget_title, .tee .ipsWidget.ipsWidget_horizontal .ipsWidget_title, .tee #elVNC_sidebar .ipsFieldRow_label, .tee #elSearch_sidebar .ipsFieldRow_label, .tee .ipsTable.ipsMatrix .ipsMatrix_subHeader, .tee .ipsSideMenu_title, .tee .ipsSideMenu_subTitle";
	
	$("#themeEditor #editorPrimary span").click(function(){
		
		var primaryColour = $(this).attr("data-main");
		
		$("#stylePrimary").replaceWith('<style id="stylePrimary" type="text/css">' + customMainElements + '{ background-color: #' + primaryColour + '}' + customMainText + '{ color: #' + primaryColour + '} </style>');
		
		ips.utils.cookie.set( 'ipsfocus_primary', '' + primaryColour + '', true );
	
	});
	
	$("#themeEditor #editorSecondary span").click(function(){
		
		var secondaryColour = $(this).attr("data-secondary");
		
		$("#styleSecondary").replaceWith('<style id="styleSecondary" type="text/css">' + customElements + '{ background-color: #' + secondaryColour + '}' + customText + '{ color: #' + secondaryColour + '} @media screen and (min-width:768px){  .tee .cPost:before{ background-color: #' + secondaryColour + ' } .tee .cAuthorPane_author, .tee .cAuthorPane_author a, .tee .cPost .ipsComment_meta{ color: #' + secondaryColour + ' }  }</style>');
		
		ips.utils.cookie.set( 'ipsfocus_secondary', '' + secondaryColour + '', true );
	
	});
	
	var primaryCookie = ips.utils.cookie.get( 'ipsfocus_primary' );
	var secondaryCookie = ips.utils.cookie.get( 'ipsfocus_secondary' );
	
	
	if ( primaryCookie != null) {
		$("#stylePrimary").replaceWith('<style id="stylePrimary" type="text/css">' + customMainElements + '{ background-color: #' + primaryCookie + '}' + customMainText + '{ color: #' + primaryCookie + '} </style>');
	}
	else{
		$("#stylePrimary").replaceWith('<style id="stylePrimary" type="text/css">' + customMainElements + '{ background-color: #55728b }' + customMainText + '{ color: #55728b } </style>');
	}
	
	if ( secondaryCookie != null) {
		$("#styleSecondary").replaceWith('<style id="styleSecondary" type="text/css">' + customElements + '{ background-color: #' + secondaryCookie + '}' + customText + '{ color: #' + secondaryCookie + '} @media screen and (min-width:768px){  .tee .cPost:before{ background-color: #' + secondaryCookie + ' } .tee .cAuthorPane_author, .tee .cAuthorPane_author a, .tee .cPost .ipsComment_meta{ color: #' + secondaryCookie + '}  }</style>');
	}
	else{
		$("#styleSecondary").replaceWith('<style id="styleSecondary" type="text/css">' + customElements + '{ background-color: #8b4343 }' + customText + '{ color: #8b4343 } @media screen and (min-width:768px){  .tee .cPost:before{ background-color: #8b4343 } .tee .cAuthorPane_author, .tee .cAuthorPane_author a, .tee .cPost .ipsComment_meta{ color: #8b4343 }  }</style>');
	}
	
	$("#themeTabs #themeBoxesPrimary").addClass("active");
	$("#editorSecondary").hide();
	
	$("#themeBoxesPrimary").click(function(){
		$("#themeBoxesSecondary").removeClass();
		$("#editorSecondary").hide();
		$("#editorPrimary").show();
		$(this).addClass("active");
	});
	
	$("#themeBoxesSecondary").click(function(){
		$("#themeBoxesPrimary").removeClass();
		$("#editorPrimary").hide();
		$("#editorSecondary").show();
		$(this).addClass("active");
	});
	
}
  
});
</script>
		

	