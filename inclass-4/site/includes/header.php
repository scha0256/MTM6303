<?php 
// Assigning the value of session variable to the $title variable
if(isset($_SESSION["page_title"])) {
    $title = $_SESSION["page_title"]; 
} else {
    $title = "Algonquin College";
}
if(isset($_SESSION["current_page"])) {
    $current_page = $_SESSION["current_page"]; 
} else {
    $current_page = "index";
}

?>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' id='main-css'  href='https://s7494.pcdn.co/wp-content/themes/ac-2017/css/main.css?ver=4.9.19' type='text/css' media='all' />
  </head>
  <!-- Start body tag -->
  <body>

<header>
        <a id="skip-to-content" href="#content-wrapper">Skip to content (Press ENTER)</a>

        <!-- Google tracking -->

        <div class="inner-header">
            <div class="logo-container">
                <a href="https://www.algonquincollege.com/" title="Algonquin College" rel="home">
                    <span class="visuallyhidden">Home page</span>
                    <i class="icon-algonquin" tabindex="0"></i>
                </a>
            </div>
            <div class="mobile-nav-toggle" id="mobile-nav-toggle"><i class="icon-menu"></i></div>

            <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile version menu">
                
    
<div class='cse-search-box global-search search-form'><gcse:searchbox-only enableAutoComplete='true'  resultsUrl='/search/?cx=002179760531728369470%3Aecn4eupdfpm&cof=FORID%3A11&ie=UTF-8&q=' ></gcse:searchbox-only></div>                <ul class="mobile-sub-nav">
                <li><a href="/a-z/">Site Index</a></li>
                <li><a href="/maps/">Maps</a></li>
                <!-- <li><a href="/phonebook/">Phonebook</a></li> -->
                </ul>
                                                <!--<form action="/search/" id="cse-search-box" class="mobile-search" role="search" >
                    <input type="hidden" name="cx" value="002179760531728369470:ecn4eupdfpm" />
                    <input type="hidden" name="cof" value="FORID:11" />
                    <input type="hidden" name="ie" value="UTF-8" />
                    <input class="search-field" type="search" name="q" id="q" value="" size="25" title="Search for:"/>
                    </form> -->
                <ul class="mobile-global-nav">
                    <li class="heading active"><a href="/">Ottawa</a></li>
                    <li><div class="menu-main-menu-container"><ul id="menu-main-menu" class="main-nav-list"><li id="menu-item-286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-286"><a href="/future-students/">Future Students</a></li>
<li id="menu-item-2689" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2689"><a href="https://www.algonquincollege.com/current-students/">Current Students</a></li>
<li id="menu-item-530" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-530"><a href="/employees/">Employees</a></li>
<li id="menu-item-224" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-224"><a href="/international/">International Students</a></li>
<li id="menu-item-299" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-299"><a href="/future-students/programs/">Programs</a></li>
<li id="menu-item-1215" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1215"><a href="/financial-aid/">Financial Aid</a></li>
<li id="menu-item-438" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-438"><a href="https://www.algonquincollege.com/giving-alumni/">Alumni | Giving</a></li>
<li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="https://www.algonquincollege.com/about/">About</a></li>
<li><a class="toggleSearch" title="Open the site search input box." href="#"><i class="icon-search"><span class="hiddenToggleText">Search</span></i></a></li></ul></div>                    </li>
                    <li class="heading"><a href="/pembroke/">Pembroke</a></li>
                    <li class="heading"><a href="/perth/">Perth</a></li>
                    <li class="heading"><a href="/online/">Online</a></li>
                    <li class="heading"><a href="/intl-campuses/">International Campuses</a></li>
                </ul>
            </nav>

            <!-- begin hidden search form -->
            <div id="searchForm">
                <nav aria-label="Site search menu">
                    <ul>
                        <li><a href="/a-z/">Site Index</a></li>
                        <li><a href="/maps/">Maps</a></li>
                                                <!-- <li><a href="/phonebook/">Phonebook</a></li> -->
                    </ul>
                </nav>

                <?php 
                // if($current_page == 'about') {
                //     echo 'current-menu-item';
                // }
                ?>         
    
<div class='cse-search-box global-search search-form'><gcse:searchbox-only enableAutoComplete='true'  resultsUrl='/search/?cx=002179760531728369470%3Aecn4eupdfpm&cof=FORID%3A11&ie=UTF-8&q=' ></gcse:searchbox-only></div>                <label for="close" class="visuallyhidden">Close search box</label>
                <button id="close" title="Close search box"><i class="icon-fnt_arrow_up_small"></i></button> 
            </div>
            <!-- /hidden search form-->

            <div class="actions-container">
                                <nav class="campus-nav" aria-label="Campus menu">
                      <ul id="menu-locations" class="menu"><li id="menu-item-305" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page-item-5 menu-item-305 <?php if($current_page == 'index') {echo 'current-menu-item';}?>"><a title="Algonquin College Home &#8211; Ottawa Campus" href="/">Index</a></li>
<li id="menu-item-278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278 <?php echo $current_page == 'about' ? 'current-menu-item' : ''; ?>"><a href="/about.php">About</a></li>
<li id="menu-item-277" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-277 <?php if($current_page == 'products') {echo 'current-menu-item';}?>"><a href="/products.php">Products</a></li>
</ul>                </nav>
            </div>
        </div><!-- /.inner-header -->
        <div class="global-nav">
            <nav aria-label="Main menu">
                <div class="menu-main-menu-container"><ul id="menu-main-menu-1" class="main-nav-list"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-286"><a href="/future-students/">Future Students</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2689"><a href="https://www.algonquincollege.com/current-students/">Current Students</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-530"><a href="/employees/">Employees</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-224"><a href="/international/">International Students</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-299"><a href="/future-students/programs/">Programs</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1215"><a href="/financial-aid/">Financial Aid</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-438"><a href="https://www.algonquincollege.com/giving-alumni/">Alumni | Giving</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="https://www.algonquincollege.com/about/">About</a></li>
<li><a class="toggleSearch" title="Open the site search input box." href="#"><i class="icon-search"><span class="hiddenToggleText">Search</span></i></a></li></ul></div>            </nav>
        </div>
    </header>