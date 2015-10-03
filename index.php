<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">

<?php
    // Miscellaneous Variables
    $version = "2.4.8";
    $dlZip   = "http://files.ubergallery.net/releases/UberGallery-v2.4.8.zip";
    $dlTarGz = "http://files.ubergallery.net/releases/UberGallery-v2.4.8.tar.gz";

    // Fetch Github downloads via the Github API
    // $apiResults = file_get_contents('https://api.github.com/repos/UberGallery/UberGallery/downloads');
    // $jsonObject = json_decode($apiResults);
?>

<head>
    <title>UberGallery - The simple PHP photo gallery</title>
    <link rel="shortcut icon" href="images/icons/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="css/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/UberGallery.css" />
    <link rel="stylesheet" type="text/css" href="demo/resources/colorbox/5/colorbox.css" />

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="demo/resources/colorbox/jquery.colorbox.js"></script>
    <script type="text/javascript" src="js/ubergallery.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
    });
    </script>

    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-19466324-2', '.ubergallery.net');
        ga('send', 'pageview');

    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta itemprop="name" content="UberGallery - The simple PHP photo gallery">
    <meta itemprop="description" content="UberGallery is an easy to use, simple to manage, web photo gallery written in PHP and distributed under the MIT License. UberGallery does not require a database and supports JPEG, GIF and PNG file types. Simply upload your images and UberGallery will automatically generate thumbnails and output standards compliant XHTML markup on the fly.">
    <meta itemprop="image" content="http://www.ubergallery.net/images/photo.png">
</head>

<body id="top">

    <div id="pageHeader">
        <div class="widthConstraint">
            <div id="siteTitle">
                <h1>UberGallery</h1>
                <p>The simple PHP photo gallery</p>
            </div>

            <a href="#download" id="downloadLink" class="floatRight">
                <div id="downloadLinkInner">
                    <span class="title">Download UberGallery</span>
                    <span class="version">Current Version: <?php echo $version; ?></span>
                </div>
            </a>

            <div id="titleImage"></div>
        </div>
    </div>

    <div id="pageContent">
        <div class="widthConstraint">

            <ul id="pageNavigation" class="clearfix">
                <li class="first"><a href="#intro">Introduction</a></li>
                <li><a href="#demo">Demo</a></li>
                <li>
                    <a href="#simpleInstall"><span class="dropDownLink">Installation</span></a>
                    <ul>
                        <li><a href="#simpleInstall">Simple Installation</a></li>
                        <li><a href="#customInstall">Custom Installation</a></li>
                        <li><a href="#gitInstall">Install with Git</a></li>
                    </ul>
                </li>
                <li><a href="#troubleshooting">Troubleshooting</a></li>
                <li><a href="#faq">F.A.Q.</a></li>
                <li><a href="#more-info">More Info</a></li>
                <li><a href="https://github.com/UberGallery/UberGallery/releases"><span class="externalLink">Releases</span></a></li>

                <li class="followLinks">
                    <div class="followLinksInner">
                        Follow:
                        <a title="Google Plus" href="https://plus.google.com/115640585160898226187/">
                            <img src="images/icons/google_plus_16.png" width="16" height="16" />
                        </a>
                        <a title="Twitter" href="https://twitter.com/#!/UberGallery">
                            <img src="images/icons/twitter_16.png" width="16" height="16" />
                        </a>
                        <a title="Github" href="https://github.com/UberGallery">
                            <img src="images/icons/github_16.png" width="16" height="16" />
                        </a>
                    </div>
                </li>
            </ul>

            <div class="contentBox">
                <!-- UberGallery Header -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-1239753369879086"
                     data-ad-slot="4453443207"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

                <div id="donateMessage">
                    Help keep UberGallery free for all, <a href="https://cash.me/$ChrisKankiewicz">donate today</a>.
                </div>

            </div>

            <div class="contentBox" id="intro">
                <h2>Introduction</h2>
                <div class="line"></div>

                <p>UberGallery is an easy to use, simple to manage, web photo gallery written in PHP
                and distributed under the <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a>.
                UberGallery <strong>does not</strong> require a database and supports JPEG, GIF and
                PNG file types. Simply upload your images and UberGallery will automatically
                generate thumbnails and output standards compliant XHTML markup on the fly.</p>

                <h3>Features</h3>

                <ul id="featuresList" class="clearfix">
                    <li>Simple first time installation</li>
                    <li>Database-less configuration</li>
                    <li>Include galleries within pre-existing sites</li>
                    <li>Create multiple galleries with a single installation</li>
                    <li>Easily customize your gallery styles via CSS</li>
                    <li>Install and update the gallery easily wth Git (optional)</li>
                </ul>

            </div>


            <div class="contentBox" id="demo">
                <h2>Demo</h2>
                <div class="line"></div>

                <?php
                    // Include the UberGallery class
                    include('demo/resources/UberGallery.php');

                    // Initialize the UberGallery object
                    $gallery = new UberGallery();

                    // Initialize the gallery array
                    $galleryArray = $gallery->readImageDirectory('demo/gallery-images');
                ?>

                <!-- Start UberGallery v<?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?> Chris Kankiewicz (http://www.ChrisKankiewicz.com) -->
                <div id="galleryWrapper">
                    <?php if($gallery->getSystemMessages()): ?>
                        <ul id="systemMessages">
                            <?php foreach($gallery->getSystemMessages() as $message): ?>
                                <li class="<?php echo $message['type']; ?>">
                                    <?php echo $message['text']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div id="galleryListWrapper">
                        <ul id="galleryList" class="clearfix">
                            <?php foreach ($galleryArray['images'] as $image): ?>
                                <li><a href="<?php echo $image['file_path']; ?>" title="<?php echo $image['file_title']; ?>" rel="colorbox"><img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>"/></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- End UberGallery - Distributed under the MIT license -->

                <div class="line"></div>

                <div id="demoLinks" >
                    <p class="alignCenter"><a href="/demo">View the Stand-alone Demo</a> | <a href="/multi-gallery/">View the Multi-directory Demo</a></p>
                </div>

            </div>


            <div class="contentBox" id="download">
                <h2>
                    Download
                    <small id="currentVersion">Current Version: <?php echo $version; ?></small>
                </h2>
                <div class="line"></div>

                <div id="downloadButtons">
                    <a href="<?php echo $dlZip; ?>" target="_blank" onclick="_gaq.push(['_trackEvent', 'File', 'Download', this.href]);">Download as zip</a>
                    <a href="<?php echo $dlTarGz; ?>" target="_blank" onclick="_gaq.push(['_trackEvent', 'File', 'Download', this.href]);">Download as tar.gz</a>
                </div>

                <div class="line"></div>

                <p class="requirements">UberGallery requires PHP 5.2+ and the PHP-GD image library
                to work properly.<br/>For more information on PHP and the PHP-GD image library,
                please visit <a href="http://php.net">http://php.net</a>.</p>

            <?php /*
                <div id="downloadsHeader" class="clearfix">
                    <span class="description">Description</span>
                    <span class="createDate">Created</span>
                    <span class="fileSize">Size</span>
                    <span class="downloadCount">Downloads</span>
                </div>

                <div id="downloadsWrapper">
                    <div id="downloadsScroller">
                        <div id="downloadScrollerInner">
                            <?php $i = 1; foreach($jsonObject as $dl): ?>
                                <?php
                                    $time = new DateTime($dl->created_at);
                                    $timestamp = $time->getTimestamp();
                                ?>
                                <a href="<?php echo $dl->html_url; ?>" class="clearfix <?php echo ($i % 2 == 0) ? 'even' : 'odd'; ?>">
                                    <span class="description"><?php echo $dl->description; ?></span>
                                    <span class="createDate"><?php echo date('M j, Y - g:i A', $timestamp); ?></span>
                                    <span class="fileSize"><?php echo ($dl->size / 1024) . ' Kb'; ?></span>
                                    <span class="downloadCount"><?php echo $dl->download_count; ?></span>
                                </a>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>
                </div>
            */ ?>

            </div>


            <div class="contentBox">
                <!-- UberGallery Download -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-1239753369879086"
                     data-ad-slot="3895040008"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>


            <div class="contentBox" id="simpleInstall">
                <h2>Simple Installation</h2>
                <div class="line"></div>

                <p>Copy <code>resources/sample.galleryConfig.ini</code> to <code>resources/galleryConfig.ini</code> and modify the settings
                to your liking.</p>

                <p>Upload <code>index.php</code>, <code>resources/</code> and <code>gallery-images/</code> to your web server.</p>

                <p>Upload images to the <code>gallery-images/</code> directory.</p>

                <p>Make the <code>resources/cache/</code> directory writable by the web server:</p>

                <pre>chmod 777 /path/to/resources/cache</pre>

                <p>Open your web browser and load the page where you installed UberGallery.</p>
            </div>


            <div class="contentBox" id="customInstall">
                <h2>Custom Installation</h2>
                <div class="line"></div>

                <p>Copy <code>resources/sample.galleryConfig.ini</code> to <code>resources/galleryConfig.ini</code> and modify the settings to
                your liking.</p>

                <p>Upload the <code>resources/</code> folder to your web server.</p>

                <p>Insert the following code into the PHP page where you would like the gallery to be displayed
                (be sure to change the include and image folder path to match your configuration):</p>

                <pre>&lt;?php include_once('path/to/resources/UberGallery.php'); $gallery = UberGallery::init()-&gt;createGallery('path/to/images-folder'); ?&gt;</pre>

                <p>Include the UberGallery and desired Colorbox style sheet in your page header:</p>
                <pre>&lt;link rel="stylesheet" type="text/css" href="path/to/resources/UberGallery.css" /&gt;<br/>&lt;link rel="stylesheet" type="text/css" href="path/to/resources/colorbox/1/colorbox.css" /&gt;</pre>

                <p>Include the jQuery and Colorbox javascript files in your page header:</p>
                <pre>&lt;script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;&lt;/script&gt;<br/>&lt;script type="text/javascript" src="path/to/resources/colorbox/jquery.colorbox.js"&gt;&lt;/script&gt;</pre>

                <p>Include the Colorbox jQuery call in your header (below the jQuery and Colorbox javascript includes):</p>
                <pre>&lt;script type="text/javascript"&gt;<br/>$(document).ready(function(){<br/>    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});<br/>});<br/>&lt;/script&gt;</pre>

                <p>Upload images to your images directory.</p>

                <p>Make the <code>resources/cache/</code> directory writable by the web server.</p>

                <pre>chmod 777 /path/to/resources/cache</pre>

                <p>Open your web browser and load the page where you installed UberGallery.</p>
            </div>


            <div class="contentBox" id="gitInstall">
                <h2>Install with Git</h2>
                <div class="line"></div>

                <p>ssh into the your server and clone the UberGallery repository:</p>

                <pre>git clone --recursive git://github.com/UberGallery/UberGallery.git /path/to/ubergallery</pre>

                <p>Copy <code>resources/sample.galleryConfig.ini</code> to <code>resources/galleryConfig.ini</code> and modify the settings</p>

                <pre>cp resources/sample.galleryConfig.ini resources/galleryConfig.ini<br/>nano resources/galleryConfig.ini</pre>

                <p>Upload images to the <code>gallery-images/</code> folder within your gallery directory.</p>

                <p>Make the <code>resources/cache/</code> directory writable by the web server.</p>

                <pre>chmod 777 /path/to/resources/cache</pre>

                <p>Open your web browser and load the page where you installed UberGallery.</p>

                <p>When using this method to install UberGallery, you can update your installation
                by running the following commands:</p>

                <pre>cd /path/to/ubergallery<br/>git pull origin master</pre>

                <div class="line"></div>

                <p><strong>NOTE:</strong> If you are installing UberGallery via git into an existing
                git repository, you will need to add it as a submodule.

                <pre>git submodule add git://github.com/UberGallery/UberGallery.git path/to/ubergallery<br/>git submodule update --init --recursive path/to/ubergallery</pre>
            </div>


            <div class="contentBox" id="troubleshooting">
                <h2>Troubleshooting</h2>
                <div class="line"></div>

                <h4 class="sectionTitle">Pages / Images Loading Slow or Not at All</h4>

                <p>If pages are loading slow or not loading at all, ensure your images are not too
                large.  We recommend 1024px - 1280px for the longest side.  Large images can slow
                down page and/or image load times or considerably.</p>

                <p>If you have too many large images to resize one at a time here are a few batch image resizing tools:</p>

                <ul>
                    <li>Windows: <a href="http://imageresizer.codeplex.com/">Image Resizer Power Toy</a></li>
                    <li>OSX: <a href="http://www.ironstarmedia.co.uk/resources/osx-image-resizer/">OSX Image Resizer</a></li>
                    <li>Linux: <a href="http://www.imagemagick.org">ImageMagick</a></li>
                </ul>

                <div class="line"></div>

                <h4 class="sectionTitle">Other Issues</h4>

                <p>Here are a few additional troubleshooting tips:</p>

                <ul>
                    <li>
                        <p>Verify that you have PHP 5.2 or later installed.  You can verify your PHP version by running:</p>
                        <pre>php --version</pre>
                    </li>

                    <li><p>Make sure you have the latest version of UberGallery installed.</p></li>

                    <li>
                        <p>Replace your <code>galleryConfig.ini</code> with <code>sample.galleryConfig.ini</code> to ensure proper configuration:</p>
                        <pre>rm resources/galleryConfig.ini<br/>cp resource/sample.galleryConfig.ini resources/galleryConfig.ini</pre>
                    </li>

                    <li>
                        <p>Clear your cache and make sure the directory is writable by the web server:</p>
                        <pre>rm -f resources/cache/*<br/>chmod 777 resources/cache</pre>
                    </li>

                    <li>
                        <p>Enable debugging by setting the <code>enable_debugging</code> option in <code>resources/galleryConfig.ini</code> to <code>true</code>,
                        try loading your gallery in a web browser then inspect the debug.log file in your cache directory for any errors.</p>
                    </li>
                </ul>

                <div class="line"></div>

                <p>If you continue to have issues, <a href="mailto:UberGallery@GoogleGroups.com">send us an email</a> explaining your issue.</p>
            </div>


            <div class="contentBox" id="faq">
                <h2>Frequently Asked Questions (F.A.Q.)</h2>
                <div class="line"></div>

                <dl id="faqList">
                    <dt>Does UberGallery support multi-directory listing?</dt>
                        <dd>Not directly. I'd love to add support for this eventually, but at the moment is not possible. However, generating multiple galleries from a single UberGallery installation is rather painless. You can <a href="http://demo.ubergallery.net/multi-gallery/">check out a working example</a> or <a href="https://github.com/UberGallery/multi-gallery-example">see the code behind the examle</a> on Github.</dd>

                    <dt>Can I use UberGallery on a site I'm developing for a client / company?</dt>
                        <dd>Yes, UberGallery is open source and released under the <a href="COPYING-MIT.txt">MIT</a> license. The rights granted by these licenses should be sufficient to suit any situation. Also, while not required, it's encouraged that you leave the "Powered by, UberGallery" link below the gallery list.</dd>

                    <dt>How can I get news and updates pertaining to UberGallery?</dt>
                        <dd>You can follow us on Twitter: <a href="https://twitter.com/#!/UberGallery">@UberGallery</a></dd>
                        <dd>We also have a blog at <a href="http://news.ubergallery.net">http://news.ubergallery.net</a></dd>
                        <dd>You can subscribe to the blog feed at <a href="http://news.ubergallery.net/feed">http://news.ubergallery.net/feed</a></dd>

                    <dt>Can you add X as a feature?</dt>
                        <dd>At the moment I'm the sole developer of UberGallery and my time is severly limited thus limiting my ability to add new features.  However, UberGallery is open source and hosted on <a href="https://github.com/UberGallery/UberGallery">Github</a>.  This means you are allowed to fork the code and make changes to suit your needs. You're also encourage to submit a pull request of the changes you make so I may review your changes and, upon approval, merge them into the UberGallery code base.</dd>
                </dl>
            </div>

            <div class="contentBox" id="more-info">
                <h2>More Info</h2>
                <div class="line"></div>

                <dl>
                    <dt>Have a question? Need help getting your gallery working?</dt>
                        <dd>Post your questions to our <a href="https://groups.google.com/forum/?fromgroups=#!forum/ubergallery">Google Group</a>
                        online or email our public mailing list at <a href="mailto:UberGallery@GoogleGroups.com">UberGallery@GoogleGroups.com</a>.</dd>
                        <dd>We do our best to answer all questions promptly, but sometimes life gets in the way. Please be patient.</dd>

                    <dt>Want the latest info on UberGallery?</dt>
                        <dd>UberGallery updates and news can be found on our <a href="http://news.ubergallery.net/">blog</a>
                        or by following <a href="https://twitter.com/ubergallery">@UberGallery</a> on Twitter.</dd>

                    <dt>Find a widespread bug?</dt>
                        <dd>Report it by opening an issue on our <a href="http://github.com/UberGallery/ubergallery/issues">GitHub issue tracker</a>.</dd>
                </dl>

            </div>

            <div class="contentBox">
                <!-- UberGallery Footer -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-1239753369879086"
                     data-ad-slot="8464840409"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

            <?php include('partials/social-buttons.html'); ?>

            <div id="footerText">
                <div id="footerTextInner">
                    <p>UberGallery is distributed under the terms of the <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a>.</p>
                    <p>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.chriskankiewicz.com">Chris Kankiewicz</a></p>
                </div>
            </div>

            <a href="#" title="Top of Page" id="topButton" style="display: none;"></a>

        </div>
    </div>

    <a href="https://github.com/UberGallery/UberGallery" id="forkMeBanner"><img src="images/fork_me_banner.png" alt="Fork me on GitHub" /></a>

</body>
</html>
