<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <base href="../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../atomic-core/img/favicon.png" />
    
    <title>Solid Style Guide by inrupt</title>

    <?php include("atomic-head.php"); ?>

    <style>
        html, body {
            height: 100%;
            width: 100%;
            background-image: url("../atomic-core/img/concentric-hex-pattern_2x.png");
            background-repeat: repeat;
        }

        .indexBlock {
            position: relative; 
            text-align: left;
            margin: auto;
            max-width: 90%;
            padding: 3em;
        }

        img {
            max-width: 100%;

        }
        .shadow{
            box-shadow: 0px 0px 32px 4px rgba(0, 0, 0, 0.25);
        }

        p {
            font-family: sans-serif;
            line-height: 1.5;   
        }

        a {
            color: #4BC6EF;
            font-weight:bold;
        }
        .logo{
            display: block;
            max-width: 300px;
            width: 100%;
            padding: 2em 0;
            margin: 0 auto;
            
        }


        .card {
            padding: 1rem 2.5rem;
            text-align: left;   
            align-items: flex-start;
            width: auto;
            margin-bottom: 3em;
            background: #fff;
        }

        .card h3, .card h2, .card h4 {
            text-align: left;   
            line-height: 1;
            margin-bottom: 0;
        }

        span.sub-title {
            font-size: 1rem;
            font-weight: 300;
            line-height: 1;
        }


        .bold {
            font-weight: bolder;
            font-wieght: 700;
        }


        .card .hero-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-top: 1.5rem;
        }

        .card .hero-wrap a {
            max-width: 50%;
            margin-bottom: 0;
        }


        .card .hero-wrap h2 {
            margin-top:0;
        }

        .divider {
            display: block;
            width: 100%;
            height: 1px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            margin: 2em 0;
        }

        .banner-wrap--footer {
            background: #7C4DFF;
            background: -webkit-linear-gradient(left, #7C4DFF 0%, #18A9E6 50%, #01C9EA 100%);
            background: linear-gradient(to right, #7C4DFF 0%, #18A9E6 50%, #01C9EA 100%);
        }

    </style>

</head>

<body>


<header role="header" class="header fixed header__desktop">
        <section class="header-wrap">
                    <div class="logo-block"><a href=""><img src="/atomic-core/img/inrupt.svg" /></a></div>
        </section>
    </header>

    <div class="header-spacer"></div>


<div class="indexBlock">

  <section class="card">
    
        <div class="hero-wrap"><h2 class="bold">Solid Style Guide by inrupt</h2> </div>

        <div class="divider"></div>


        <h3>About</h3>
        <p>This style guide is created by inrupt as part of our effort to provide freely available tooling and resources to developers building applications on Solid. We do this to encourage adoption of Solid by making it as easy as possible for others to create Solid applications.</p>

        <p>Inspired by Brad Frost's Atomic design principles, we use Nick Berens' Atomic Docs framework as a base style guide and design system generation tool for Solid applications. This is a live repository of User Interface (UI) styles and User Experience (UX) patterns utilized in our Solid Software Development Kits (SDK). The design system will continue to evolve as we commit and release new patterns and features.</p>

        <h3>Fair Usage</h3>
        <p>The Solid and inrupt logos included in this style guide are for the purposes of example and attribution. We expect application developers will fork the design system and customize to include your own brand in your Solid application projects, or override the example theme in your application code.</p>

        <p>If your application is Solid compatible, you may use the Solid logo to indicate that. If your application is not Solid compatible, please don’t misrepresent yourself by using the Solid logo.</p>

        <p>Please don't use the inrupt name as a part of your company name, website name, domain name, service name, or app name. Don't use our logo as your own or modify it to fit into your own logo.</p>

        <p>If you’d like, you may use the inrupt logo to indicate that your application is powered by inrupt’s SDK, but please make sure the context is clear to the user. Your own logo should always be larger than inrupt’s logo, for example.</p>

        <p>In general, please apply common sense and honesty to your use of Solid or inrupt logos. Don’t use either to imply a partnership or official endorsement where none exists. </p>

        <h3>Contact Us</h3>
        <p>If you have additional questions about the use of this style guide or inrupt’s brand, please contact <a href="mailto:support@inrupt.com">support@inrupt.com</a></p>
        <br/>

    </section>

</div>


<section class="banner-wrap--footer banner ">
    <div class="banner-wrap__content">
    <a href="../atomic-core/?cat=Core" target="_blank"><i class="icon fa fa-github"></i>Continue to the Live Style Guide</a></div>
</section>

</body>

<?php include("atomic-foot.php"); ?>

</html>



