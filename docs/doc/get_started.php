<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BetterPluginsApi - Getting Started</title>
</head>
<body>

    <? include "includes/topInclude.php" ?>
    <main style="background: lightgrey">

        <? include "includes/leftNav.php" ?>

        <div class="right doc-content" style="padding: 25px; background: white; position:relative; min-height: available">

            <h1 style="padding-left: 25px; margin-bottom: 25px;">Getting Started</h1>

            <div id="intro">
                <h2 id="intro" class="category-title">Introduction</h2>

                <div id="api-content">

                    <p>To start with BetterPluginsApi, you need to add it as a dependency. To do it, check <a href="../download.php" target="_blank">Download Page</a>. You will also need an IDE like <a href="https://jetbrains.com/idea" target="_blank">IntelliJ Idea Community Edition</a> or <a target="_blank" href="https://www.eclipse.org/downloads/">Eclipse</a>. BetterPluginsApi is not the only dependency you need. You also have to have Spigot <a href="https://launcher.mojang.com/mc/game/1.12.2/server/886945bfb2b978778c3a0288fd7fab09d315b25f/server.jar">1.12.2-R0.1</a> as dependency. </p>
                    <p>BetterPluginsApi is a project that is simplifying the creation of Minecraft plugins. With this API, you'll be able to create translations, cooldowned commands,
                    event executors...</p>

                </div>

            </div>

            <div id="create-plugin">
                <h2 id="create-plugin" class="category-title">Create your plugin</h2>

                <div id="api-content">
                    <p class="disclaimer">In this example, I'll use Idea and Eclipse</p>
                    <p>To create your plugin, you don't have many solutions : you have to create a <file>plugin.yml</file>. The <file>plugin.yml</file> will stock all the informations of your plugin like the name, the version, the authors, the commands...</p>
                    <p><br/>So, in your IDE, create a file named <file>plugin.yml</file>.</p>
                    <img src="../assets/img/ide/eclipse/create-plugin-yml.PNG" alt="" height="143">
                    <img src="../assets/img/ide/idea/create-plugin-yml.PNG" alt=""><br><br>

                    <p>In this file, you must write 3 things, the others are optionals :
                    <ol class="must">
                        <li>Main : <b>The path to your main class (from the <u>src/</u> folder)</b></li>
                        <li>Name : <b>The name of your plugin</b></li>
                        <li>Version : <b>The version of your plugin</b></li>
                    </ol>
                    <p class="disclaimer">In this example, I'll use the website</p>
                    
                    <br>
<!--                    <img src="../assets/img/ide/idea/fill-plugin-yml.PNG" alt=""><br><br>-->
                    <mcode class="full">
                        <ymlg>
                            <yml>name</yml>: <ymlt>{name}</ymlt><br/>
                            <yml>version</yml>: <ymlt>{version}</ymlt><br/>
                            <yml>main</yml>: <ymlt>{main class path}</ymlt><br/>
                        </ymlg>
                    </mcode><br/>

                    <p>Here, replace <mcode><yml>{name}</yml></mcode> by the name of your plugin, <mcode><yml>{version}</yml></mcode> by the version of your plugin and <mcode><yml>{main class path}</yml></mcode> by the path to your <mcode><class>Main</class></mcode> class</p>

                </div>
            </div>

            <div id="main-class">
                <h2 id="main-class" class="post_category_widget-title">Create the Main class</h2>

                <div id="api-content">

                    <p class="disclaimer">In this example, I'll use the website</p>

                    <p class="step">Step 1 : Make the Main class <mcode>extends <c>BetterPlugin</c></mcode></p>
                    <div class="step-content">
                        <mcode class="full">

                            <error>public class <class>Main</class> extends <class>BetterExecutor</class></error> <punc>{}</punc> <comment>//Error : Implements methods</comment>

                        </mcode>
                    </div>

                    <p class="step">Step 2 : Implement methods</p>
                    <div class="step-content">

                        <p>Your code is going to look like this : </p>

                        <mcode class="full">

                            public class <class>Main</class> extends <class>BetterPlugin</class> <punc>{</punc><br/><br/>

                            <tab/><override>@Override</override><br>
                            <tab/>public void <method>onPluginLoading</method>()<punc>{}</punc><br/><br/>

                            <tab/><override>@Override</override><br>
                            <tab/>public void <method>onPluginEnabling</method>()<punc>{}</punc><br/><br/>

                            <tab/><override>@Override</override><br>
                            <tab/>public void <method>onPluginDisabling</method>()<punc>{}</punc><br/><br/>

                            <tab/><override>@Override</override><br>
                            <tab/>public void <method>registerCommands</method>()<punc>{}</punc><br/><br/>

                            <tab/><override>@Override</override><br>
                            <tab/>public void <method>registerEvents</method>()<punc>{}</punc><br/><br/>

                            <tab/><override>@Override</override><br>
                            <tab/>public void <method>registerData</method>()<punc>{}</punc><br/><br/><br/>

                            <punc>}</punc>
                        </mcode>

                    </div>

                    <p class="step">Step 3 : Enjoy ! </p>
                    <div class="step-content">

                        <p>Now, you are ready to start coding with <b>BetterPluginsApi</b>. But before continuing, please not that : </p>
                        <ol style="margin-left: 25px;">

                            <li class="ol-li">The method <mcode><method>onPluginLoading</method>()</mcode> is called when the plugin is loading (before the worlds)</li>
                            <li class="ol-li">The method <mcode><method>onPluginEnabling</method>()</mcode> is called when the plugin is enabling (after the worlds)</li>
                            <li class="ol-li">The method <mcode><method>onPluginDisabling</method>()</mcode> is called when the plugin is disabling (at the stopping / reloading of the server)</li>

                            <li class="ol-li">The method <mcode><method>registerCommands</method>()</mcode> is called when the plugin is enabling. It has to be used only to register the commands with <mcode><method>registerCommand</method>(<class>String</class>, <class>BetterExecutor</class>)</mcode> </li>
                            <li class="ol-li">The method <mcode><method>registerEvents</method>()</mcode> is called when the plugin is enabling. It has to be used only to register the events with <mcode><method>registerEvent</method>(<class>Class</class><punc><</punc><generic>T</generic> extends <class>Event</class><punc>></punc>, <class>BetterEventExecutor<punc><</punc><generic>T</generic><punc>></punc></class>)</mcode> or <mcode><method>registerEvent</method>(<class>Listener</class>)</mcode></li>
                            <li class="ol-li">The method <mcode><method>registerData</method>()</mcode> is called when the plugin is enabling. It has to be used only to register the data (<mcode><class>StringData</class></mcode>, <mcode><class>FileData</class></mcode>...) </li>

                            <style type="text/css">
                                .ol-li{
                                    margin-bottom: 25px;
                                }
                            </style>
                        </ol>

                    </div>

                </div>
            </div>

        </div>

    </main>

    <? include "includes/bottomInclude.php"; ?>

</body>
</html>