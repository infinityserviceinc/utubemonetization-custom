<?php

function detectCampaing()
{
   $ret = false;
   if(isset($_GET["gclid"])){ $ret = true;}
   if(isset($_GET["utm_source"])){ $ret = true;}
   if(isset($_GET["utm_medium"])){ $ret = true;}
   if(isset($_GET["utm_campaign"])){ $ret = true;}
    return $ret;
}


if(!isset($_SESSION['lead_type'])){
  if(detectCampaing() == true){
    $_SESSION['lead_type'] = "PPC";
  }
  elseif(detectFbCampaign()){
    $_SESSION['lead_type'] = "Facebook";
  }
  else{
    $_SESSION['lead_type'] = "OTHER";
    if(isset($_SERVER["HTTP_REFERER"])){
      if(strpos($_SERVER["HTTP_REFERER"], 'google')){
        $_SESSION['lead_type'] = "SEO"; 
      } 
    }
  }
}


function detectFbCampaign(){
     return isset($_GET["fbclid"]) ? true : false;
}