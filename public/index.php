<?php
    // Require the Session start function
    require_once "includes/session_include.php";
    // Added Page title to be stored in the $_SESSION variable
    $_SESSION["page_title"] = "Index Page";
    $_SESSION["current_page"] = "index";
    
    // Including the header
    include "includes/header.php"; 
?>
      
<?php

    /******************************** 
     All PHP variables and 
     Functions are 
     defined in this section
    *******************************/
    $title_num = 1;
    $imgUrlStart = "https://www.algonquincollege.com/future-students/files";
    $link_start = "https://algonquincollege.zoom.us/webinar/register";
    
    $cards = [
        "card_1" => [
            "img" => $imgUrlStart . "/2021/08/Scriptwriting.jpg",
            "title" => "Title",
            "para" => "Card Array do you have prior work, life, or academic experience? Learn more about how you can turn this experience into course credit.",
            "link" => $link_start . "/WN_Apmao0mxReGikDv-d6vJpg"
        ],
        "card_2" => [
            "img" => $imgUrlStart . "/2021/09/how-to-apply-768x513.jpg",
            "title" => "Title",
            "para" => "join us to learn how to go through the steps to apply to college. Thursdays at 3:30pm",
            "link" => $link_start . "/WN_qmrPjdPYSmWG8ctN-S-6IQ"
        ],
        "card_3" => [
            "img" => $imgUrlStart . "/2021/09/ongoing-afternoons-768x513.jpg",
            "title" => "Title",
            "para" => "join a recruiter for a daily drop-in session about all of our campuses, programs and services. Plus get your questions answered in our live Q&A. Tuesdays at 3:30pm",
            "link" => $link_start . "/WN_DisQR6KmSPKmVeTqle2tWA"
        ],
        "card_4" => [
            "img" => $imgUrlStart . "/2021/09/ongoing-afternoons-768x513.jpg",
            "title" => "Title",
            "para" => "Lorem ipsum",
            "link" => $link_start . "/WN_DisQR6KmSPKmVeTqle2tWA"
        ],
    ];

    // Button Class 
    $btn_class = "success";
    
    // Paragrpah End 
    $end_value = 102;
    # This is a comment
    // echo $title1;

    
?>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($cards as $card_key => $card_value) { 
    $btn_text = "";
    switch($title_num) {
        case 1:
            $btn_text =  "First Button";
        break;
        case 2:
            $btn_text =  "Second Button";
        break;
        case 3:
            $btn_text =  "Third Button";
        break;
        default:
        $btn_text =  "New Button";
    }    
?>
<div class="col">
    <div class="card" id="<?php echo $card_key ?>">
      <img src="<?php echo $card_value['img'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo "Hello, " . $card_value['title'] . " " . $title_num; ?></h5>
        <?php 
            echo '<p class="card-text">'. substr(ucfirst($card_value['para']), 0, $end_value) .'...</p>';
        ?>
      <a href="<?php echo $card_value['link']?>" class="btn btn-<?php echo $btn_class ?>"><?php echo $btn_text ?></a>
      </div>
    </div>
  </div>
  <?php $title_num++;} ?>
  
</div>

<?php
    // Including the footer
    include "includes/footer.php"; 
?>
