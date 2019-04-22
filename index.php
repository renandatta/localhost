<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Localhost</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/favicon.png" type="image/png"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/et-line.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
		.panel{
			height:120px;
		}
        .form-control-lg{
            font-size:14pt;
            height: 50px;
            box-shadow: 0 1px 1px rgba(0,0,0,0.05);
            border:0;
            padding-left: 20px;
        }

        .overlay::before {
            background: #333 repeat scroll 0 0;
            bottom: 0;
            content: "";
            left: 0;
            opacity: 0.1;
            position: absolute;
            right: 0;
            top: 0;
            z-index: -1;
        }
        .demo-item:hover .image::after {
            opacity: 0.7;
        }
        .buy-btn.top-btn {
            background: #fff ;
            border: medium none;
            color: #333;
            line-height: 28px;
            margin: 16px 0;
        }
        .buy-btn.top-btn:hover {
            background: #333;
            border-color: #1BA7B9;
            color: #fff;
        }
        .stick  .buy-btn.top-btn {
            background: #1BA7B9 ;
            color: #fff;
        }
        .buy-btn:hover {
            background: #1BA7B9;
            border-color: #1BA7B9  ;
        }
        .demo-item .image::after {
            background-color: #1BA7B9;
        }
        .demo-item .image i:hover {
            color: #1BA7B9  ;
        }
        .stick .buy-btn.top-btn {
            border: medium none;
            color: #ffffff;
            margin: 0;
        }
        .stick .logo {
            float: inherit;
            margin: -8px 0 0;
        }
        .stick .buy-btn {
            border: 2px solid #1BA7B9  ;
            color: #1BA7B9  ;
        }
        .single-feature .icon {
            color: #1BA7B9  ;
        }
        .footer-section {
            background-color: #444;
        }
        .stick .buy-btn:hover {
            color: #fff;
        }
        .demo-item .title a:hover {
            color: #1BA7B9  ;
        }
        .footer-section .buy-btn:hover {
            color: #1BA7B9;
        }
        .footer-section .buy-btn.bottom-btn {
            background-color: #1BA7B9;
            border: 2px solid #1BA7B9;
            color: #ffffff;
        }
        .hero-content h1 strong{
            text-transform: capitalize;
        }
        .stick .non-sticky {
            display: none;
        }
        .demo-item {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        }
        .demo-item .title {
            padding: 20px 0;
            margin: 0;
        }
        .demo-item .title {
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            font-weight: 500;
        }
        /*Feature css here*/
        .feature-item {
            background-color: #ffffff;
            border-radius: 5px;
            -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 45px 15px;
            text-align: center;
        }
        .feature-item img {
            border-radius: 5px;
            margin-bottom: 15px;
            width: 70px;
        }
        .feature-item h4 {
            font-size: 14px;
            font-weight: 600;
            margin: 0;
            text-transform: capitalize;
        }
        .section-title h2 {
            color: #373737;
            font-size: 30px;
            font-weight: 700;
            margin: 0;
            text-transform: capitalize;
        }
        .section-title p {
            color: #444444;
            font-family: "Open Sans",sans-serif;
            font-size: 14px;
            font-weight: 400;
            margin: 15px auto 0;
            max-width: 450px;
        }
        .stick .logo a {
            width: 140px;
            margin-top: 2px
        }
        .btn{
            border-radius: 5px;
        }
        .btn-default{
            background-color: #ccc;
            color: white;
        }
        .btn-default:hover{
            background-color: #fafafa;
            color: black;
        }
        .btn-xs{
            padding: 5px 10px;
            height: 35px;
            text-transform: none;
        }

        /* small mobile :320px */
        @media (max-width: 767px) {
            .section-title h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body class="bg-gray ">

<?php
    $dirs = array_filter(glob('*'), 'is_dir');
    $hostname = $_SERVER['SERVER_ADDR'];
    if($hostname == "::1"){
        $hostname = "localhost";
    }
?>
<div class="section pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center mb-50">
                    <h2>Localhost</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control form-control-lg" id="search" placeholder="Search ..." autofocus>
            </div>
        </div>
        <div class="row" id="data" style="margin-top:20px;">
        <?php
            foreach($dirs as $value){
                if($value != "assets"){
                    if (is_dir($value.'/public') ) {
                        $url = $value.'/public';
                    }else{
                        $url = $value;
                    }
                    if(file_exists($value.'/favicon.png')){
                        $icon = $value.'/favicon.png';
                    }elseif(file_exists($value.'/public/favicon.png')){
                        $icon = $value.'/public/favicon.png';
                    }else{
                        $icon = "assets/default-icon.png";
                    }
        ?>
            <div class="col-md-2 col-item" id="<?php echo $value; ?>">
                <div class="panel">
                    <div class="panel-body">
                    <a href="<?php echo $url; ?>">
                        <div class="text-center">
                            <img src="<?php echo $icon ?>" style="height:50px;width:auto;" />
                        </div>
                        <h5 class="text-center" style="margin-bottom:0;margin-top:10px;"><?php echo ucwords(str_replace(['_','-']," ",$value)); ?></h5>
                    </a>
                    </div>
                </div>
            </div>
        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

<script src="assets/js/vendor/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/ajax-mail.js"></script>
<script src="assets/js/main.js"></script>
<script>
    let listItem = [];
    <?php
        foreach($dirs as $value){
            if($value != "assets"){
    ?>
        listItem.push("<?php echo $value; ?>");
    <?php
            }
        }
    ?>

    $('#search').keyup(function(){
        if($('#search').val() != ""){
            let search = $('#search').val();
            $('.col-item').hide();
            
            $.each(listItem,function(i, value){
                if (value.indexOf(search) >= 0){
                    $('#'+value).show();
                }
            });
        }else{
            $('.col-item').show();
        }
    });

</script>
</body>
</html>
