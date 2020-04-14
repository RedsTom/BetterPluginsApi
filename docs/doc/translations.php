<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BetterPluginsApi - Translations</title>
</head>
<body>

<? include "includes/topInclude.php" ?>

<main style="background: lightgrey">

    <? include "includes/leftNav.php" ?>

    <div class="right doc-content" style="padding: 25px; background: white; position:relative; min-height: available">

        <h1 style="padding-left: 25px; margin-bottom: 25px;">Translations</h1>

        <div id="get">

            <h2 id="get" class="category-title">Get a translation</h2>

            <div id="api-content">
                <p>To get a translation with <b>BetterPluginsApi</b>, it's simple : you just need three lines of code. First, you must initialize the language file you want to get</p>

                <mcode class="full">

                    <class>TranslationKey</class> <attr>key</attr> = <class>TranslationKey</class>.<method>load</method>(<comment>/* Language code (all in lower case) | Ex : en_us ; fr_fr... | To get the language of a player, <class>Player</class>#<method>getLocale</method>() */</comment>);<br/>
                    <class>String</class> <attr>message</attr> = <attr>key</attr>.<method>get</method>(<comment>/* Message key you put in the lang file */</comment>);<br/>
                    ...<br/>
                    <attr>key</attr>.<method>close</method>();

                </mcode>

<!--                Set translations in file lang/language_code.lang-->
            </div>

        </div>

    </div>

</main>

<? include "includes/bottomInclude.php"; ?>

</body>
</html>
