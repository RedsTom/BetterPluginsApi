<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BetterPluginsApi - Downloads</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

</head>

<body>

<?php $_GET['active'] = "dl";
include 'includes/topInclude.php' ?>

<main id="dl">

    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center text-white"
                 style="background-image: url('assets/img/banner/banner.png'); background-size: cover">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <h1 style='
                                        color: #00b4f9;
                                    ' data-animation="fadeInUp" data-delay="1.6s">Downloads</h1>
                            </div>
                        </div>
                    </div>
                    <div class="" style="">
                        <a data-animation="fadeInLeft" data-delay="2.0s" href="files/BetterPluginsApi-1.0-all.jar"
                           class="btn radius-btn"
                           style="margin-right: 25px; margin-bottom: 25px; padding: 25px; width: 50%">
                            <img src="assets/img/dllogos/jar.svg" width="32" height="32" style="margin-right: 25px"/>Download</a><br/>
                        <a data-animation="fadeInLeft" data-delay="2.0s" href="#maven" class="btn radius-btn"
                           style="margin-right: 25px; margin-bottom: 25px; padding: 25px; width: 50%">
                            <img src="assets/img/dllogos/maven.svg" width="32" height="32" style="margin-right: 25px"/>Maven</a><br/>
                        <a data-animation="fadeInLeft" data-delay="2.0s" href="#gradle" class="btn radius-btn"
                           style="margin-right: 25px; margin-bottom: 25px; padding: 25px; width: 50%">
                            <img class="left-icon" src="assets/img/dllogos/gradle.svg" width="32" height="32"
                                 style="margin-right: 25px"/>Gradle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="doc/includes/codeStyle.css">

    <div class="right doc-content" style="margin-top: 25px;">

        <div id="maven" class="dl">
            <h2 id="maven" class="dl-category-title">Maven</h2>

            <div id="api-content">

                <p>Repository : </p>

                pom.xml
                <mcode class="full">
                    <<yml>repositories</yml>><br/>
                        <tab/><<yml>repository</yml>><br/>
                                <tab/><tab/><<yml>id</yml>><ymlt>jitpack.io</ymlt>&lt;/<yml>id</yml>><br/>
                                <tab/><tab/><<yml>url</yml>><ymlt>https://jitpack.io</ymlt>&lt;/<yml>url</yml>><br/>
                        <tab/>&lt;/<yml>repository</yml>><br/>
                    &lt;/<yml>repositories</yml>><br/>
                </mcode><br/><br/>

                <p>Dependency : </p>

                pom.xml
                <mcode class="full">
                    <<yml>dependencies</yml>><br/>
                    <tab/><<yml>dependency</yml>><br/>
                    <tab/><tab/><<yml>groupId</yml>><ymlt>com.github.RedsTom</ymlt>&lt;/<yml>groupId</yml>><br/>
                    <tab/><tab/><<yml>artifactId</yml>><ymlt>BetterPluginsApi</ymlt>&lt;/<yml>artifactId</yml>><br/>
                    <tab/><tab/><<yml>version</yml>><ymlt><?echo $_GET['prver']?></ymlt>&lt;/<yml>version</yml>><br/>
                    <tab/>&lt;/<yml>dependency</yml>><br/>
                    &lt;/<yml>dependencies</yml>><br/>
                </mcode>

            </div>
        </div>

        <div id="gradle" class="dl">
            <h2 id="gradle" class="dl-category-title">Gradle</h2>

            <div id="api-content">

                <p>Repository : </p>

                build.gradle
                <mcode class="full">

                    <method>repositories</method> <punc>{</punc><br/>
                    <tab/>...<br/>
                    <tab/><method>maven</method> <punc>{</punc> <method>url</method> <str>"https://jitpack.io"</str> <punc>}</punc><br/>
                    <punc>}</punc>

                </mcode><br/><br/>

                <p>Dependency : </p>

                build.gradle
                <mcode class="full">

                    <method>dependencies</method> <punc>{</punc><br/>
                    <tab/>...<br/>
                    <tab/><method>implementation</method> <str>"com.github.RedsTom:BetterPluginsApi:<?echo $_GET['prver']?>"</str><br/>
                    <punc>}</punc>

                </mcode><br/><br/>

            </div>
        </div>

    </div>

</main>

<? include "includes/bottomInclude.php"; ?>

</body>
</html>