<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">

<head>
    <title>UberGallery - The simple PHP photo gallery</title>
    <link rel="shortcut icon" href="images/icons/favicon.png" type="image/x-icon" />
    
    <link rel="stylesheet" type="text/css" href="css/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/UberGallery.css" />
    <link rel="stylesheet" type="text/css" href="demo/resources/colorbox/5/colorbox.css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="demo/resources/colorbox/jquery.colorbox.js"></script>
    <script type="text/javascript" src="js/ubergallery.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
    });
    </script>
    
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-19466324-2']);
      _gaq.push(['_setDomainName', 'ubergallery.net']);
      _gaq.push(['_setAllowHash', false]);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta itemprop="name" content="UberGallery - The simple PHP photo gallery">
    <meta itemprop="description" content="UberGallery is an easy to use, simple to manage, web photo gallery written in PHP and dual licensed under the MIT License and GNU General Public License (GPL) Version 3. UberGallery does not require a database and supports JPEG, GIF and PNG file types. Simply upload your images and UberGallery will automatically generate thumbnails and output standards compliant XHTML markup on the fly.">
    <meta itemprop="image" content="http://www.ubergallery.net/images/photo.png">
</head>

<body id="top">
    
    <div id="pageHeader">
        <div class="widthConstraint">
            <div id="siteTitle">
                <h1>UberGallery</h1>
                <p>The simple PHP photo gallery</p>
            </div>
            
            <a href="https://github.com/UberGallery/UberGallery/downloads" id="downloadLink" class="floatRight">
                <div id="downloadLinkInner">
                    <span class="title">Download UberGallery</span>
                    <span class="version">Current Version: 2.2.5</span>
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
                <li><a href="#faq">F.A.Q.</a></li>
                <li><a href="#support">Support</a></li>
                <li><a href="http://news.ubergallery.net"><span class="externalLink">News</span></a></li>
                
                <li class="followLinks">
                    <div class="followLinksInner">
                        Follow UberGallery:
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
            
                
            <div class="contentBox" id="intro">
                <h2>Introduction</h2>
                <div class="line"></div>
                
                <p>UberGallery is an easy to use, simple to manage, web photo gallery written in PHP and dual licensed
                under the <a href="COPYING-MIT.txt">MIT License</a> and
                <a href="COPYING-GPL.txt">GNU General Public License (GPL) Version 3</a>. UberGallery
                <strong>does not</strong> require a database and supports JPEG, GIF and PNG file types. Simply upload your images
                and UberGallery will automatically generate thumbnails and output standards compliant XHTML markup
                on the fly.</p>
                
                <h3>Features</h3>
                
                <ul id="featuresList" class="clearfix">
                    <li>Simple first time installation</li>
                    <li>Database-less configuration</li>
                    <li>Include galleries within pre-existing sites</li>
                    <li>Create multiple galleries with a single installation</li>
                    <li>Easily customize your gallery styles via CSS</li>
                    <li>Install and update the gallery easily wth Git (optional)</li>
                </ul>
                
                <h3>Requirements</h3>
                
                <p>UberGallery requires PHP 5.2+ and the PHP-GD image library to work properly. For more information on PHP and the PHP-GD image library, please visit <a href="http://php.net">http://php.net</a>.</p>
                
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
                <!-- End UberGallery - Dual licensed under the MIT & GPL license -->
                
                <div class="line"></div>
                
                <div id="demoLinks" >
                    <p class="alignCenter"><a href="/demo">View the Stand-alone Demo</a> | <a href="/multi-gallery/">View the Multi-directory Demo</a></p>
                </div>
                
            </div>
            
            
            <div class="contentBox" id="simpleInstall">
                <h2>Simple Installation</h2>
                <div class="line"></div>
                
                <p>Copy <code>resources/sample.galleryConfig.ini</code> to <code>resources/galleryConfig.ini</code> and modify the settings
                to your liking.</p>
                
                <p>Upload <code>index.php</code>, <code>resources/</code> and <code>gallery-images/</code> to your web server.</p>
                
                <p>Upload images to the <code>gallery-images/</code> directory.</p>
                
                <p>Make the <code>resources/cache/</code> directory writable by the web server:</p>
                
                <pre>chmod 777 -R /path/to/resources/cache</pre>
                
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
                <pre>&lt;link rel="stylesheet" type="text/css" href="path/to/resources/UberGallery.css" /&gt;<br/>&lt;link rel="stylesheet" type="text/css" href="path/to/resources/colorbox/{1-5}/colorbox.css" /&gt;</pre>
                
                <p>Include the jQuery and Colorbox javascript files in your page header:</p>
                <pre>&lt;script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"&gt;&lt;/script&gt;<br/>&lt;script type="text/javascript" src="path/to/resources/colorbox/jquery.colorbox.js"&gt;&lt;/script&gt;</pre>
                
                <p>Include the Colorbox jQuery call in your header (below the jQuery and Colorbox javascript includes):</p>
                <pre>&lt;script type="text/javascript"&gt;<br/>$(document).ready(function(){<br/>    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});<br/>});<br/>&lt;/script&gt;</pre>
                
                <p>Upload images to your images directory.</p>
                
                <p>Make the <code>resources/cache/</code> directory writable by the web server.</p>
                
                <pre>chmod 777 -R /path/to/resources/cache</pre>
                
                <p>Open your web browser and load the page where you installed UberGallery.</p>
            </div>
                        
            
            <div class="contentBox" id="gitInstall">
                <h2>Install with Git</h2>
                <div class="line"></div>
                
                <p>ssh into the your server and clone the UberGallery repository:</p>
                
                <pre>git clone git://github.com/UberGallery/UberGallery.git /path/to/gallery-directory</pre>
                
                <p>Copy <code>resources/sample.galleryConfig.ini</code> to <code>resources/galleryConfig.ini</code> and modify the settings</p>
                
                <pre>cp /path/to/gallery-directory/resource/sample.galleryConfig.ini /path/to/gallery-directory/resources/galleryConfig.ini<br/>nano /path/to/gallery-directory/resources/galleryConfig.ini</pre>
                
                <p>Upload images to the <code>gallery-images/</code> folder within your gallery directory.</p>
                
                <p>Make the <code>resources/cache/</code> directory writable by the web server.</p>
                
                <pre>chmod 777 -R /path/to/resources/cache</pre>
                
                <p>Open your web browser and load the page where you installed UberGallery.</p>
                
                <p><strong>NOTE:</strong> When using this method to install UberGallery, you may update your installation by running the
                following commands:</p>
                
                <pre>cd /path/to/gallery-directory<br/>git pull origin master</pre>
            </div>
            
            
            <div class="contentBox" id="faq">
                <h2>Frequently Asked Questions (F.A.Q.)</h2>
                <div class="line"></div>
                
                <dl id="faqList">
                    <dt>Does UberGallery support multi-directory listing?</dt>
                        <dd>Not directly. I'd love to add support for this eventually, but at the moment is not possible. However, generating multiple galleries from a single UberGallery installation is rather painless. You can <a href="http://demo.ubergallery.net/multi-gallery/">check out a working example</a> or <a href="https://github.com/UberGallery/multi-gallery-example">see the code behind the examle</a> on Github.</dd>
                        
                    <dt>Can I use UberGallery on a site I'm developing for a client / company?</dt>
                        <dd>Yes, UberGallery is open source and released under the <a href="COPYING-MIT.txt">MIT</a> and <a href="COPYING-GPL.txt">GPLv3</a> licenses. The rights granted by these licenses should be sufficient to suit any situation. Also, while not required, it's encouraged that you leave the "Powered by, UberGallery" link below the gallery list.</dd>
                        
                    <dt>How can I get news and updates pertaining to UberGallery?</dt>
                        <dd>You can follow us on Twitter: <a href="https://twitter.com/#!/UberGallery">@UberGallery</a></dd>
                        <dd>We also have a blog at <a href="http://news.ubergallery.net">http://news.ubergallery.net</a></dd>
                        <dd>You can subscribe to the blog feed at <a href="http://news.ubergallery.net/feed">http://news.ubergallery.net/feed</a></dd>
                        
                    <dt>Can you add X as a feature?</dt>
                        <dd>At the moment I'm the sole developer of UberGallery and my time is severly limited thus limiting my ability to add new features.  However, UberGallery is open source and hosted on <a href="https://github.com/UberGallery/UberGallery">Github</a>.  This means you are allowed to fork the code and make changes to suit your needs. You're also encourage to submit a pull request of the changes you make so I may review your changes and, upon approval, merge them into the UberGallery code base.</dd>
                </dl>
            </div>
            
            
            <div class="contentBox" id="support">
                <h2>Support</h2>
                <div class="line"></div>
                
                <p>If you have any questions or comments, send an email to: <a href="mailto:Chris@ChrisKankiewicz.com">Chris@ChrisKankiewicz.com</a></p>
                <p>UberGallery updates and news can be found on our <a href="http://news.ubergallery.net/">blog</a> or by <a href="https://twitter.com/#!/UberGallery">following us on Twitter</a>.</p>
                <p>To report a bug, visit the issue tracker on Github at: <a href="http://github.com/UberGallery/ubergallery/issues">http://github.com/UberGallery/ubergallery/issues</a></p>
            </div>
            
            <div id="footerText">
                <div id="footerTextInner">
                    <p>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.chriskankiewicz.com">Chris Kankiewicz</a></p>
                    
                    <p>UberGallery is dual licensed under the terms of the <a href="COPYING-MIT.txt">MIT</a> and <a href="COPYING-GPL.txt">GPL v3</a> licenses.</p>
                </div>            
            </div>            

            <table id="footerTable" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <!-- Place this tag where you want the +1 button to render -->
                        <g:plusone></g:plusone>
                        
                        <!--  Place this tag after the last plusone tag -->
                        <script type="text/javascript">
                          (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                          })();
                        </script>
                    </td>
                    <td>
                        <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.ubergallery.net%2F&amp;send=false&amp;layout=button_count&amp;width=106&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:106px; height:21px;" allowTransparency="true"></iframe>
                    </td>
                    <td>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="CWZX8QW97BKAA">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </td>
                </tr>
            </table>
        
        </div>
    </div>
    
    <a href="#" title="Top of Page" id="topButton" style="display: none;"></a>
    <a href="https://github.com/UberGallery/UberGallery" id="forkMeBanner"><img src="images/fork_me_banner.png" alt="Fork me on GitHub" /></a>
    
</body>
</html>
