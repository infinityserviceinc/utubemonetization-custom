<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thank you</title>
    <meta property="og:title" content="Alpha Book Writers | Hire Professional Writers & Publishers at an affordable price">
    <meta property="og:description" content="Alpha Book Writers can assist you in telling your tale to the rest of the globe. Alpha Book Writers can help you with book writing, publication, and marketing">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $requesMet.'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
    <meta property="og:site_name" content="AlphaBookWriters">
    <meta property="article:publisher" content="https://www.facebook.com/officialalphabookwriters">
    <meta property="og:image" content="https://www.alphabookwriters.com/img/alphabookwriter.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@alphabookwriters">
    <meta name="twitter:site" content="@alphabookwriters">
    <meta name="twitter:image:src" content="https://www.alphabookwriters.com/img/alphabookwriter.png">

<?php include_once("includes/head.php")?>
</head>
<!-- Event snippet for Contact conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11000314845/ZRbjCPX5y4cZEN33rf0o'});
</script>

<style>
    .first-color{
        color: #fff;
    }

    section.section1.d-flex.h-100vh {
    background: #000;
    padding: 160px 0 100px 0;
}

h1.first-color.font-80.font-weight-bold {
    text-align: center;
    font-size: 50px !important;
    width: 90%;
    margin: auto;
    line-height: 60px !important;
    margin-bottom: 40px;
}

.btn-block.text-center a {
    background: #fff;
    width: 180px;
    height: 55px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    font-size: 20px;
    font-weight: 500;
    color: #ffff;
    background: #f40000;
}
</style>
<body>
    
    <?php include('includes/header.php');?>
    <section class="section1 d-flex h-100vh">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 70px;">
                    <!-- <h1 class="first-color font-80 font-weight-bold"> -->
                    <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['thanksMsg'])){ echo $_REQUEST['thanksMsg'];} ?></h1>
                    <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
                            
                    <!-- </h1> -->
                    <div class="btn-block text-center">
                <a href="javascript:;"  onclick="history.back();" class="btn btn-grey light various"> Go Back Home</a>
                <!-- <a href="javascript:;" class="btn btn-orange-line chat">Live Chat</a> -->
            </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php');?>

</body>
</html>