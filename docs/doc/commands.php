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

        <h1 style="padding-left: 25px; margin-bottom: 25px;">First Command</h1>

        <div id="intro">
            <h2 id="intro" class="category-title">Pre-Requisites</h2>

            <div id="api-content">

                <p>To create a command with Spigot or BetterPluginsApi, your need need : the <i>plugin.yml</i> and the <i>Main</i> class</p>

            </div>

        </div>

        <div id="register-command-yml">
            <h2 id="register-command" class="category-title">Register a Command (YML side)</h2>

            <div id="api-content">

                <p class="disclaimer">In this example, I'll use the website</p>

                <p>Go into your <file>plugin.yml</file>. It may look like </p>

                plugin.yml
                <mcode class="full">
                    <ymlg>
                        <yml>name</yml>: <ymlt>Test</ymlt><br/>
                        <yml>version</yml>: <ymlt>1.0</ymlt><br/>
                        <yml>main</yml>: <ymlt>com.betterplugins.test.Main</ymlt><br/>
                    </ymlg>
                </mcode><br>

                <p class="step">Step 1 : Add the command tag</p>
                <div class="step-content">
                    <p>To add a command, you must add a <mcode><yml>commands</yml></mcode> tag</p>

                    <p>Your <file>plugin.yml</file> will look like this : </p>

                    plugin.yml
                    <mcode class="full">
                        <ymlg>
                            <yml>name</yml>: <ymlt>Test</ymlt><br/>
                            <yml>version</yml>: <ymlt>1.0</ymlt><br/>
                            <yml>main</yml>: <ymlt>com.betterplugins.test.Main</ymlt><br/>
                            <yml>commands</yml>:<br/>
                        </ymlg>
                    </mcode><br>

                </div>

                <p class="step">Step 2 : Add your command</p>

                <div class="step-content">

                    <p>To add a command, you have to write the name (without the /) of your command and the attributes <p class="disclaimer">Don't copy this, the tabulations won't be correct. If you use Eclipse, don't press tab but write 2 spaces</p>

                    plugin.yml
                    <mcode class="full">
                        <ymlg>
                            <yml>name</yml>: <ymlt>Test</ymlt><br/>
                            <yml>version</yml>: <ymlt>1.0</ymlt><br/>
                            <yml>main</yml>: <ymlt>com.betterplugins.test.Main</ymlt><br/>
                            <yml>commands</yml>:<br/>
                            <tab/><yml>mycommand</yml>:<br/>
                            <tab/><tab/><yml>attribute</yml>: <ymlt>value</ymlt>
                        </ymlg>
                    </mcode><br/>

                    <p>The attributes can be :
                    <ol class="must">
                        <li><s>permission</s> : <b>The permission of your command (not necessary, it will be defined in your command class)</b></li>
                        <li><s>permission-message</s> : <b>Message shown when the sender who executes the command doesn't the permission (Not necessary, overridden by BetterPluginsApi</b></li>
                        <li>aliases : <b>Aliases of your command. For example : <cmd>/gamemode</cmd> can have as alias : <cmd>/gm</cmd>. Stored like : <mcode><ymlg><yml>aliases</yml>: [<ymlt>'alias1'</ymlt>, <ymlt>'alias2'</ymlt>, ...]</ymlg></mcode></b></li>
                        <li>description : <b>Description of your command shown in the <cmd>/?</cmd> | <cmd>/help</cmd></b></li>
                        <li><s>usage</s> : The usage of the command (never used in the code 😑 )</li>
                    </ol>

                </div>
            </div>
        </div>

        <div id="register-command-java">

            <h2 class="category-title">Register a Command (Java side)</h2>

            <div id="api-content">

                <p class="disclaimer">In this tutorial, we'll use the <mcode><class>Main</class></mcode> class and your command class</p>

                <p>To start, go into the <mcode><method>registerCommands</method>()</mcode> method in your <mcode><class>Main</class></mcode> class. Then add <mcode><method>registerCommand</method>(<attr>commandName</attr>, <class>BetterCommandExecutor<punc>#</punc><method>new</method></class>(<attr>prefix</attr>, <attr>commandName</attr>, <attr>permission</attr>))</mcode></p>

                <p>Example : </p>

                Main.java
                <mcode class="full">
                    public class <class>Main</class> extends <class>BetterPlugin</class> <punc>{</punc><br/><br/>

                    <tab/>...<br/><br/>

                    <tab/><override>@Override</override><br>
                    <tab/>public void <method>registerCommands</method>()<punc>{<br/>
                            <br/>
                                <tab></tab><tab/><method>registerCommand</method>(<str>"mycommand"</str>, <error>new <class>CommandMyCommand</class>(<str>"My Command"</str>, <str>"mycommand"</str>, <str>"mycommand.use"</str>));</error><comment> // <- Here, <class>CommandMyCommand</class> extends <class>BetterCommandExecutor</class> | Error : Class doesn't exists | Error 2 : The constructor doesn't exists</comment>
                            <br/>

                    <tab/>}</punc><br/><br/>

                    <tab/>...<br/><br/>

                    <punc>}</punc>

                </mcode><br/>

                <p>Next, create the Class of your choice <t class="disclaimer">Here CommandMyCommand</t>. Create the constructor. Your class will look like : </p>

                CommandMyCommand.java
                <mcode class="full">
                    public class <class>CommandMyCommand</class> extends <class>BetterCommandExecutor</class> <punc>{</punc><br/><br/>

                    <tab/>public <class>CommandMyCommand</class>(<class>String</class> <attr>prefix</attr>, <class>String</class> <attr>commandName</attr>, <class>String</class> <attr>permission</attr>) <punc>{</punc><br>
                        <tab/><tab/>super(<attr>prefix</attr>, <attr>commandName</attr>, <attr>permission</attr>)<punc>;</punc><br/>
                    <tab/><punc>}</punc><br>
                    <br/>
                    <tab/><override>@Override</override><br>
                    <tab/>public boolean <method>run</method>(<class>CommandSender</class> <attr>sender</attr>, <class>String[]</class></punc> <attr>args</attr>,) throws <class>CommandException</class> <punc>{</punc>
                        <br/>
                        <tab></tab><tab/><comment> // Content of your command</comment>
                        <br/>
                    <tab/><punc>}</punc><br/><br/>
                    <br/>
                    <tab/><override>@Override</override><br>
                    <tab/>public void <method>sendBadCommandUsage</method>(<class>CommandSender</class> <attr>sender</attr>) <punc>{</punc>
                        <br/>
                        <tab></tab><tab/><comment> // In the case of you return true</comment>
                        <br/>
                        <tab/><punc>}</punc><br/><br/>

                    <punc>}</punc>

                </mcode><br/>

                <p>Note : here, to send a message to the player, use the <mcode><method>sendMessage</method>(<class>CommandSender</class>, <class>String</class>)<punc>;</punc></mcode>. You also can use the <mcode>throw new <class>CommandException</class>(<class>String</class>)</mcode> to send an error message to the sender (you don't need to color the message)</p>

            </div>

        </div>

        <div id="register-command-cooldown">

            <h2 class="category-title">Add a cooldown to your command</h2>

            <div id="api-content">

                <p>To add a cooldown to your command, you just have to make your class <mcode>extends <class>BetterCooldownedCommandExecutor</class></mcode> and not <mcode><class>BetterCommandExecutor</class></mcode></mcode>. Next, you'll have to add a parameter in the <mcode>super()</mcode> : at the end, add the <mcode><attr>cooldownInSeconds</attr></mcode> attribute. Your code will look like this : </p>

                CommandMyCommand.java
                <mcode class="full">
                    public class <class>CommandMyCommand</class> extends <class>BetterCooldownCommandExecutor</class> <punc>{</punc><br/><br/>

                    <tab/>public <class>CommandMyCommand</class>(<class>String</class> <attr>prefix</attr>, <class>String</class> <attr>commandName</attr>, <class>String</class> <attr>permission</attr>) <punc>{</punc><br>
                    <tab/><tab/>super(<attr>prefix</attr>, <attr>commandName</attr>, <attr>permission</attr>, <attr>10</attr>)<punc>;</punc><br/>
                    <tab/><punc>}</punc><br>
                    <br/>
                    <tab/><override>@Override</override><br>
                    <tab/>public boolean <method>run</method>(<class>CommandSender</class> <attr>sender</attr>, <class>String[]</class></punc> <attr>args</attr>,) throws <class>CommandException</class> <punc>{</punc>
                    <br/>
                    <tab></tab><tab/><comment> // Content of your command</comment>
                    <br/>
                    <tab/><punc>}</punc><br/><br/>
                    <br/>
                    <tab/><override>@Override</override><br>
                    <tab/>public void <method>sendBadCommandUsage</method>(<class>CommandSender</class> <attr>sender</attr>) <punc>{</punc>
                    <br/>
                    <tab></tab><tab/><comment> // In the case of you return true</comment>
                    <br/>
                    <tab/><punc>}</punc><br/><br/>

                    <punc>}</punc>

                </mcode><br/>

            </div>

        </div>

    </div>

</main>

<? include "includes/bottomInclude.php"; ?>

</body>
</html>