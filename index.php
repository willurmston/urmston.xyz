
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.00//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!--

Welcome!

$$\   $$\ $$$$$$\ $$$$$$$\  $$$$$$$$\       $$\      $$\ $$$$$$$$\       $$$$$$$\  $$\       $$$$$$$$\
$$ |  $$ |\_$$  _|$$  __$$\ $$  _____|      $$$\    $$$ |$$  _____|      $$  __$$\ $$ |      \____$$  |
$$ |  $$ |  $$ |  $$ |  $$ |$$ |            $$$$\  $$$$ |$$ |            $$ |  $$ |$$ |          $$  /
$$$$$$$$ |  $$ |  $$$$$$$  |$$$$$\          $$\$$\$$ $$ |$$$$$\          $$$$$$$  |$$ |         $$  /
$$  __$$ |  $$ |  $$  __$$< $$  __|         $$ \$$$  $$ |$$  __|         $$  ____/ $$ |        $$  /
$$ |  $$ |  $$ |  $$ |  $$ |$$ |            $$ |\$  /$$ |$$ |            $$ |      $$ |       $$  /
$$ |  $$ |$$$$$$\ $$ |  $$ |$$$$$$$$\       $$ | \_/ $$ |$$$$$$$$\       $$ |      $$$$$$$$\ $$$$$$$$\
\__|  \__|\______|\__|  \__|\________|      \__|     \__|\________|      \__|      \________|\________|

-->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=0, width=device-width, height=device-height"/>
    <meta name="description" content="Will Urmston is a designer, musician, and internet enthusiast. See his work here."/>
<head>
    <title>Will Urmston</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="home/style.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//wurfl.io/wurfl.js"></script>

    <script type="text/javascript" src="https://use.typekit.net/tmm4wvq.js"></script>
    <script type="text/javascript">
    try {
        Typekit.load({
            async: true,
            active: function() {
              $('.typekit').css('opacity', 1)
              TweenMax.from( '.typekit', 0.5, {y: '+=300', ease: Power4.easeOut});
            }
        });
    } catch (e) {}
    </script>

    <!-- GSAP -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/utils/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tone/0.9.0/Tone.min.js"></script>

    <script src="http://urmston.xyz/scripts/urmston.js"></script>
    <script src="home/js/float.js"></script>
    <script src="home/js/script.js"></script>
    <script src="//use.typekit.net/tmm4wvq.js"></script>


    <!-- GOOGLE ANALYTICS -->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-53239964-1', 'auto');
    ga('send', 'pageview');
    </script>

</head>

<body>
    <?php echo file_get_contents("home/img/spacegrid.svg"); ?>
    <div id="wrapper">

        <!-- FLOATERS========================================= -->

        <!-- <div class="floater" data-projectId="motor">
            <img class="floaterImg" src="home/projects/motor/sequences.png" width="250">
            <p class='floaterCaption'>javascript step sequencer library</p>
        </div> -->

        <div class="floater" data-projectId="softObject">
            <img class="floaterImg" src="home/projects/softobject/softObjectLogo.svg" width="270">
            <p class='floaterCaption'>music label for web-native sounds</p>
        </div>

        <div class="floater" data-projectId="desktopEnsemble">
            <img class="floaterImg" src="home/projects/desktopEnsemble/screenshot.png" width="200">
            <p class='floaterCaption'>make drone music with windows</p>
        </div>

        <!-- <div class="floater" data-projectId="discoText">
            <img class="floaterImg" src="home/projects/discoText/floater2.png" width="350">
            <p class='floaterCaption'>programmable chat rooms</p>
        </div> -->

        <div class="floater" data-projectId="formalResearch">
            <img class="floaterImg" src="home/projects/experiments/caution.svg" width="100">
            <p class='floaterCaption'>Formal Research</p>
        </div>

        <div class="floater" data-projectId="milo">
            <img class="floaterImg" src="home/projects/milo/milo.svg" width="170">
            <p class='floaterCaption'>typeface</p>
        </div>

        <div class="floater" data-projectId="hi">
            <img class="floaterImg" src="home/projects/hi/1.png" width="150">
            <p class='floaterCaption'>swap ur data with friends</p>
        </div>
<!--
        <div class="floater" data-projectId="openSource">
            <img class="floaterImg" src="home/projects/openSource/icon.svg" width="170">
            <p class='floaterCaption'>Open Source<br>@ IFTTT</p>
        </div> -->

        <div class="floater" data-projectId="shamir">
          <img class="floaterImg" src="home/projects/shamir/floater-shamir.png" width="170">
          <?php echo file_get_contents("home/img/new-sticker.svg"); ?>

          <p class='floaterCaption'>Shamir Sound Space</p>
        </div>

        <div class="floater" data-projectId="cultura">
          <img class="floaterImg" src="home/projects/cultura/floater-cultura.png" width="200">
          <?php echo file_get_contents("home/img/new-sticker.svg"); ?>
          <p class='floaterCaption'>Cultura Karaoke</p>
        </div>

        <div class="floater artfreedom noshadow" data-projectId="artfreedom">
            <img class="floaterImg" src="home/projects/artfreedom/floater.png" width="130">
            <?php echo file_get_contents("home/img/new-sticker.svg"); ?>
            <p class='floaterCaption'>3ina: Art Freedom</p>
        </div>

        <div class="floater about" data-projectId="about">
            <img class="floaterImg" src="home/projects/about/croppedMe.png" width="150">
            <p class='floaterCaption'>About</p>
        </div>


        <!-- VIEWERS========================================= -->
        <!-- <div class="viewer" data-projectId="motor">
            <div class="projectContents">
            <div class="projectHead">
                <p class='projectTitle'>Motor.js</p>
                <p class="projectInfo">Javascript step sequencer library for creating rhythm-based websites. </p>
            </div>

            <div class="projectImg">
              <img src="home/projects/motor/sequences.png">
            </div>


            <p class="projectImgCaption">
                Motor.js is inspired by classic step sequencers and modern music software. Play back arrays of numbers, strings, or objects at a given tempo, and use them to control any element in a webpage.
            </p>


            <p class="projectImgCaption">
                Examples: <a href="http://urmston.xyz/realtimebling/" target="_blank"><br>Manipulate the DOM, play instruments, control text-to-speech</a>
            </p>

            <a href="https://github.com/willurmston/motor.js" target="_blank" class="externalLinkButton">
                <p class="externalLinkButtonCaption">view on GitHub<span class="externalLink"></span></p>
            </a>

            </div>
        </div> -->

        <div class="viewer" data-projectId="softObject">
            <div class="projectContents">
            <div class="projectHead">
                <p class='projectTitle'>Soft Object</p>
                <p class="projectInfo">Soft Object is a music label for artists making real-time, web-native work. <span class='projectTags'>design</span><span class='projectTags'>web development</span><span class="projectYear">2016</span></p>
            </div>

            <div class="pseudoBrowserBar"></div>

            <div class="projectImg">
              <img src="home/projects/softobject/homepage.png">
            </div>

            <p class="projectImgCaption">
                Soft Object serves as a breeding ground for new visual and sonic form on the web. The label's output explores interactivity, dynamic musical structures, chance operations, sampling, collage, and more.
            </p>

            <p class="projectImgCaption">
                The label's artists challenge the centuries-old format of linearly reproducible music and embrace the possibilities of the internet. Despite recent progress in music-related web technologies, web-based music remains stagnant. Will Urmston founded Soft Object in 2015 in order to push the medium forward.
            </p>

            <a href="http://softobject.info" target="_blank" class="externalLinkButton full-width">
                <p class="externalLinkButtonCaption">visit site<span class="url">softobject.info</span></p>
            </a>

            </div>
        </div>

        <div class="viewer" data-projectId="desktopEnsemble">
          <div class="projectContents">
            <div class="projectHead">
              <p class='projectTitle'>Desktop Ensemble</p>
              <p class="projectInfo">Use desktop interactions to make drone music in a peaceful, browser-based environment. <span class='projectTags'>design</span><span class='projectTags'>web development</span><span class="projectYear">2016</span></p>
            </div>

            <div class="pseudoBrowserBar"></div>
            <div class="projectImg">
              <img src="home/projects/desktopEnsemble/screenshot.png" />
            </div>

            <p class="projectImgCaption press">
              <b>Press</b>
              <br><a href="http://hoverstat.es/features/drone-desktop-ensemble">Hoverstates</a>
            </p>

            <p class="projectImgCaption">
              Desktop Ensemble uses familiar window management interactions like dragging, resizing, and closing, and explores their functions in a sonic context.
              <br>
              <br>
              Manipulate the miniature windows to affect the loop duration, pitch, pan, and volume of each voice. Click anywhere on the background to add a new voice.
            </p>




            <a href="http://urmston.xyz/desktopensemble" target="_blank" class="externalLinkButton desktopOnly full-width">
                <p class="externalLinkButtonCaption">visit site<span class="externalLink"></span></p>
            </a>
          </div>
        </div>

        <!-- <div class="viewer" data-projectId="discoText">
            <div class="projectContents">
                <div class="projectHead">
                    <p class='projectTitle'>discotext.net</p>
                    <p class="projectInfo">Make a chatroom with your friends, and shape its appearance over time through your language. A collaboration with Sara Khan, Lukas Eigler, and Katibelle Sharkey.<span class="projectYear">2016</span></p>
                </div>

                <div class="projectImg">
                  <img style="background-color:#ccebfd;" src="home/projects/discoText/floaterShadow.png" />
                </div>

                <p class="projectImgCaption">The visual landscape of each chatroom will evolve independently based on meaning that users assign to words. The word <span class="inlineQuote">saturday</span> could make the conversation turn sideways. <span class="inlineQuote">Flower</span> could add a dramatic shadow to the text. The meaning is up to you. Definitions overlap and create new visual styles.</p>

                <div class="projectImg">
                  <img src="home/projects/discoText/2.png" />
                </div>

                <div class="projectImg">
                  <img src="home/projects/discoText/5.png" />
                </div>

                <p class="projectImgCaption">The site features playful interfaces that allow users to program visual meaning into each word. Words can affect the text size, text color, text alignment, text shadow, text rotation angle, font, font size, background color, or background image.</p>

                <p class="projectImgCaption">User identity is flexible and does not persist from chatroom to chatroom. This allows for each room to take on a unique identity.</p>

                <a href="http://discotext.net" target="_blank" class="externalLinkButton">
                    <p class="externalLinkButtonCaption">visit discotext.net<span class="externalLink"></span></p>
                </a>
            </div>
        </div> -->

        <div class="viewer experiments" data-projectId="formalResearch">
            <div class="projectContents">
                <div class="projectHead">
                    <p class='projectTitle'>Formal Research</p>
                    <p class="projectInfo">Technological and formal techniques that could come in handy in the future.</p>
                </div>
                <div class="projectImg">
                  <img  src="home/projects/experiments/rastershadow.png" />
                </div>

                <p class="projectImgCaption"><span class="inlineQuote">Raster Shadow:</span> A function that creates a shadow of an image at a lower resolution behind it. In this example, the shadow's resolution is animated over time.</p>

                <a href="http://urmston.xyz/rastervector" target="_blank" class="externalLinkButton full-width">
                    <p class="externalLinkButtonCaption">visit experiment<span class="externalLink"></span></p>
                </a>

                <div class="projectImg">
                  <img src="home/projects/experiments/animatedmask.png" />
                </div>

                <p class="projectImgCaption"><span class="inlineQuote">Animated Mask:</span> Use shapes and text in an SVG mask and animate the individual layers to reveal elements underneath. This technique could be suited for one or more layers of video or text.</p>

                <a href="http://urmston.xyz/animatedmask" target="_blank" class="externalLinkButton full-width">
                    <p class="externalLinkButtonCaption">visit experiment<span class="externalLink"></span></p>
                </a>

            </div>
        </div>

        <div class="viewer" data-projectId="milo">
          <div class="projectContents">
            <div class="projectHead">
              <p class='projectTitle'>Milo</p>
              <p class="projectInfo">A clean, slab-serif text face. <span class='projectTags'>type design</span><span class="projectYear">2016</span></p>
            </div>

            <div class="projectImg">
              <img src="home/projects/milo/dark.svg" />
            </div>

            <p class="projectImgCaption">A high level of readbility and slightly narrow forms make Milo comfortable and economical for longer reads. With its subtle character, derived from its clean slab serifs, Milo is a good fit for contemporary writing.</p>
            <div class="projectImg">
              <img src="home/projects/milo/para.svg" />
            </div>

            <div class="projectImg">
              <img src="home/projects/milo/glyphs.svg" />
            </div>

          </div>
        </div>

        <div class="viewer" data-projectId="cultura">
            <div class="projectContents">
                <div class="projectHead">
                  <p class='projectTitle'>Cultura Karaoke</p>
                  <p class="projectInfo">An interactive karaoke video for Cultura's track <i>No Tengo Mas</i>. <span class='projectTags'>web development</span><span class="projectYear">2017</span></p>
                </div>

                <div class="pseudoBrowserBar"></div>
                <div class="projectImg">
                  <img src="home/projects/cultura/screenshot.png" />
                </div>

                <p class="projectImgCaption press">
                  <b>Press</b>
                  <br><a href="http://hallointer.net/okgrrrrrrl">Hallo Internet</a>
                </p>


                <p class="projectImgCaption">Under the direction of DVTK, I developed a music/fashion feature for the web magazine OKgrl. The site features an exclusive track by Cultura, paired with a rich parallax landscape and karaoke-inspired, synchronized text.</p>


                <a href="http://okgrl.com/cultura" target="_blank" class="externalLinkButton full-width">
                    <p class="externalLinkButtonCaption ">visit site<span class="url">okgrl.com/cultura</span></p>
                </a>
            </div>
        </div>

        <div class="viewer hi" data-projectId="hi">
            <div class="projectContents">
                <div class="projectHead">
                    <p class='projectTitle'>Hi by IFTTT</p>
                    <p class="projectInfo">A new way to chat with your friends using data from your life. A personal project created with Andrew Udell at an IFTTT company hackathon. <span class='projectTags'>design</span><span class="projectYear">2015</span></p>
                </div>
                <div class="projectImg">
                  <img src="home/projects/hi/splash.svg" />
                </div>

                <p class="projectImgCaption"><a href="http://ifttt.com" target="_blank">IFTTT</a> is a product that connects all your online services and lets you build simple apps by combining them.<br><br>Services like Facebook and Google Maps keep mountains of your personal data, yet give you very little access to it. <span class="inlineQuote">Hi</span> takes advantage of IFTTT's connections to these services and lets you swap your data with friends. It's like trading baseball cards, but with quantified personal data.</p>

                <p class="projectImgCaption">Share your camera roll with a friend for 3 days at a music festival. Flirt with your crush by asking for their heart rate. Share data from the near past or give a friend access for the next few days.<br><br>Asking for data or denying a friend's request can become an expressive statement or a funny joke. <span class="inlineQuote">Hi</span> gives you complete control.</p>


                <div class="projectImg fitHeight mockup no-border">
                  <img src="home/projects/hi/1.png" />
                </div>
                <div class="projectImg fitHeight no-border">
                  <img src="home/projects/hi/requestCrop.png" />
                </div>
                <div class="projectImg fitHeight mockup no-border">
                  <img  src="home/projects/hi/2.png" />
                </div>
                <div class="projectImg fitHeight mockup no-border">
                  <img src="home/projects/hi/3.png" />
                </div>

                <p class="projectImgCaption">Because IFTTT can cross-reference many services, <span class="inlineQuote">Hi</span> can perform analysis, teaching you things about yourself and your friends that you never knew. Combine Apple Health and Spotify, and you can ask your buddy Karen what music has raised her heart rate the most.</p>
                <p class="projectImgCaption"> Learn about yourself, learn about your friends, and take control of your data.</p>

                <script type="text/javascript">
                    $(document).ready( function() {
                        var $imgs = $('.hi').find('.mockup')
                        TweenMax.set($imgs[0],{rotationZ: -13, x:'+=20pt', y:'+=10pt'})
                        TweenMax.set($imgs[1],{rotationZ: -5, x:'-=10pt' ,y:'-=20pt'})
                        TweenMax.set($imgs[2],{rotationZ: 8, x:'+=10pt', y:'-=40pt'})
                    })
                </script>
            </div>
        </div>

        <!-- <div class="viewer" data-projectId="openSource">
            <div class="projectContents">
                <div class="projectHead">
                    <p class='projectTitle'>Open Source @ IFTTT</p>
                    <p class="projectInfo">A new home and branding for IFTTT's open source projects<span class="projectYear">2015</span></p>
                </div>

                <div class="projectImg">
                  <img src="home/projects/openSource/banner.png" />
                </div>

                <p class="projectImgCaption">IFTTT is a big proponent of open source software. It needed a front page for its GitHub projects, primarily as a way to attract engineering talent. <br><br>Project-specific branding is below.</p>

                <a href="http://ifttt.github.io" target="_blank" class="externalLinkButton">
                    <p class="externalLinkButtonCaption">visit ifttt.github.io<span class="externalLink"></span></p>
                </a>

                <div class="projectImg">
                  <img src="home/projects/openSource/opensourcebanners.png" />

                </div>

                 <p class="projectImgCaption">Demo animation to show the capabilities of SparkleMotion, an IFTTT project for animated scrolling app intros.</p>

                <div class="projectImg center">
                  <img src="home/projects/openSource/sparkleMotion.gif" />

                </div>
            </div>
        </div> -->


        <div class="viewer" data-projectId="shamir">
            <div class="projectContents">
                <div class="projectHead">
                    <p class='projectTitle'>Shamir Sound Space</p>
                    <p class="projectInfo">Mix and match loops to make your own Shamir track. <span class="projectTags">design</span><span class="projectTags">development</span><span class="projectYear">2017</span></p>
                </div>

                <div class="pseudoBrowserBar"></div>

                <div class="projectImg">
                  <img src="home/projects/shamir/screenshot.png" />
                </div>

                <p class="projectImgCaption press">
                  <b>Press</b>
                  <br><a href="http://hallointer.net/okgrrrrrrl">Hallo Internet</a>
                </p>

                <p class="projectImgCaption">I designed and developed a music/fashion feature for the web magazine OKgrl, using loops from the Shamir song <i>Fantasie #9</i>. The site was a collaboration with Shamir, Nick Silvester (music production), Hannah Diamond (photography), DVTK (digital direction), Louby McLoughlin (styling), and others.</p>



                <a href="http://okgrl.com/shamir" target="_blank" class="externalLinkButton full-width">
                    <p class="externalLinkButtonCaption">visit site<span class="url">okgrl.com/shamir</span></p>
                </a>
            </div>
        </div>

        <div class="viewer" data-projectId="artfreedom">
            <div class="projectContents">
                <div class="projectHead">
                    <p class='projectTitle'>3ina: Art Freedom</p>
                    <p class="projectInfo">Promo site for 3ina's new Art Freedom makeup collection. <span class="projectTags">web development</span><span class="projectYear">2017</span></p>
                </div>

                <div class="pseudoBrowserBar"></div>

                <div class="projectImg">
                  <img src="home/projects/artfreedom/screenshot1.jpg" />
                </div>

                <p class="projectImgCaption">Promo site for 3ina's new Art Freedom makeup collection. Web design and digital direction by <a href="https://dvtk.us">DVTK</a>. The site features product brushes that let the user draw with the products as they interact with the page.</p>

                <a href="http://staging.urmston.xyz/3ina" target="_blank" class="externalLinkButton full-width">
                    <p class="externalLinkButtonCaption">visit site<span class="url"></span></p>
                </a>
            </div>
        </div>


        <div class="viewer about" data-projectId="about">
            <div class="projectContents">
              <div class="projectImg round no-border" id="croppedMeFront">
                <img class=""  src="home/projects/about/croppedMeFront.png" />

              </div>
              <div class="projectHead">
                <p class="projectTitle">Will Urmston</p>
                <p class="projectInfo">Design, sound, &amp; code for the web.</p>

              </div>
                <p class="projectImgCaption">Will graduated from <a href="http://en.wikipedia.org/wiki/RISD" target="_blank">Rhode Island School of Design</a> with a BFA in Graphic Design in 2016. He has previously worked at London digital studio <a href="https://dvtk.us" target="_blank">DVTK</a>, <a href="https://en.wikipedia.org/wiki/Facebook" target="_blank">Facebook</a>, and <a href="https://en.wikipedia.org/wiki/IFTTT" target="_blank">IFTTT</a>.</p>
                <p class="projectImgCaption">Contact him at <a href="mailto:wurmston@alumni.risd.edu">wurmston@alumni.risd.edu</a>, or on Twitter at <a href="https://twitter.com/willurmston" target="_blank">@willurmston</a>.</p>
            </div>
        </div>


        <p id="about" class="typekit"><b>Will Urmston</b> <span class="tagline">&bull; Design, sound, &amp; code for a better internet &bull; </span><span class="contact"><a href="mailto:wurmston@alumni.risd.edu">EMAIL</a> &bull; <a href="http://twitter.com/willurmston" target="_blank">TWITTER</a></span></p>

        <?php echo file_get_contents("home/img/name.svg"); ?>

        <h1 id="titlebox"></h1>
<!--
        <div style="color: white; position: absolute; top: 0px; font-size: 200px">
          <h3>HEY HEY HEU HEU H</h3>
        </div> -->

        <div class="floater dummy" data-projectid="bob" style="">
            <img class="floaterImg" src="home/projects/hi/1.png?random=958" width="150" style="-webkit-backface-visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0);">
            <p class="floaterCaption">swap ur data with friends</p>
        </div>
    </div> <!-- end wrapper -->
</body>
<script>
</script>

</html>
