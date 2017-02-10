<?php
if(!(isset($_COOKIE['portcdn_clearance'])) || $_COOKIE['portcdn_clearance'] != "afc458a1300ed9eb1a853d757eadd306")
{
    if(isset($_POST['portcdn_submit']) && $_POST['portcdn_submit'] == "js_check")
    {
        //Check if Customer ID is valid and belongs to this domain name & some browser validation checks
        if($_POST['portcdn_id'] == "afc458a1300ed9eb1a853d757eadd306" && $_SERVER['HTTP_HOST'] == "CHANGE_ME")
        {
            if($_POST['portcdn_answer'] == "1169")
            {
                //Set Clearance Cookie
                setcookie("portcdn_clearance", "afc458a1300ed9eb1a853d757eadd306", time()+172800, "/"); //Allow user for 48-hours
                
                //Redirect User
                header("Location: ".$_SERVER['PHP_SELF']."");
                die();
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DDoS Protection by Company</title>
        <link rel="stylesheet" media="screen" href="/js-challenge/inc/js-challenge.css" type="text/css">
        <link rel="stylesheet" media="screen" href="/js-challenge/inc/progress_bar.css" type="text/css">
    </head>
    <body>
        <div id="outer">
            <div id="container">
                <div id="inner">
                    <noscript>You must enable JavaScript before accessing this site.</noscript>
                    <div id="portcdn_notify">
                        <div id="portcdn_title">DDoS Protection by Company</div>
                        <div id="portcdn_sub">Validating your browser before accessing <b><?php echo $_SERVER['HTTP_HOST']; ?></b>.</div>
                        <div id="portcdn_sub">This should take no longer than 5 seconds.</div>
                        <div id="circle_loader">
                            <div class="pie_progress" role="progressbar" data-goal="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="pie_progress__number">0%</div>
                              <div class="pie_progress__label">Progress</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start | DDoS Check -->
        <form id="PortCDN_ChallengeForm" action="" method="POST">
            <input type="hidden" name="portcdn_submit" value="js_check" />
            <input type="hidden" name="portcdn_id" value="afc458a1300ed9eb1a853d757eadd306" />
            <input type="hidden" id="portcdn_answer" name="portcdn_answer" />
        </form>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="/js-challenge/inc/progress_bar.js"></script>
        <script type="text/javascript" src="/js-challenge/inc/js-challenge.js"></script>
        <!-- End | DDoS Check -->
    </body>
</html>
<?php
    die();
}
?>
