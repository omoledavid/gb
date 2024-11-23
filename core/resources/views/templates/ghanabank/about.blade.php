@extends($activeTemplate.'layouts.frontend')

@section('content')
    @include($activeTemplate.'partials.banner')
    <div id="t3-mainbody" class="container t3-mainbody">
        <div class="row">

            <!-- MAIN CONTENT -->
            <div id="t3-content" class="t3-content col-xs-12 col-sm-8  col-md-9">
                <div class="item-page" itemscope="" itemtype="https://schema.org/Article">
                    <!-- Article -->
                    <article class="content_box_shadow" itemscope="" itemtype="http://schema.org/Article">
                        <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage"
                              itemid="https://google.com/article">
                        <meta itemprop="inLanguage" content="en-GB">

                        <section class="article-content clearfix" itemprop="articleBody">
                            <div class="bt-social-share bt-social-share-above">
                                <div class="bt-social-share-button bt-facebook-share-button">
                                    <fb:share-button href="{{ route('about-us') }}" type="button"
                                                     class=" fb_iframe_widget" fb-xfbml-state="rendered"
                                                     fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href={{ route('about-us') }}&amp;locale=en_GB&amp;sdk=joey&amp;type=button">
                                        <span style="vertical-align: bottom; width: 67px; height: 20px;"><iframe
                                                name="f2d622cfdf77c5d33" width="1000px" height="1000px"
                                                data-testid="fb:share_button Facebook Social Plugin"
                                                title="fb:share_button Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df6f48e9b8501ba65d%26domain%3D{{ route('home') }}%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252F{{ route('home') }}%252Ff3d17629f67f58944%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;locale=en_GB&amp;sdk=joey&amp;type=button"
                                                style="border: none; visibility: visible; width: 67px; height: 20px;"
                                                class=""></iframe></span></fb:share-button>
                                </div>
                                <div class="bt-social-share-button bt-twitter-button" style="width:62px">
                                    <iframe id="twitter-widget-0" scrolling="no" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true"
                                            class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                                            title="X Post Button"
                                            src="https://platform.twitter.com/widgets/tweet_button.2f70fb173b9000da126c79afe2098f02.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2F{{ route('about-us') }}&amp;size=m&amp;text=About%20GCB%20-%20GCB%20Bank%20PLC&amp;time=1732360482013&amp;type=share&amp;url=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;via=gcbbank4life"
                                            style="position: static; visibility: visible; width: 65px; height: 20px;"
                                            data-url="{{ route('about-us') }}"></iframe>
                                </div>
                                <div class="bt-social-share-button bt-linkedin-button"><span class="IN-widget"
                                                                                             data-lnkd-debug="<script type=&quot;IN/share+init&quot; data-url=&quot;{{ route('about-us') }}&quot; data-showzero=&quot;false&quot; data-counter=&quot;none&quot;></script>"
                                                                                             style="display: inline-block; line-height: 1; vertical-align: bottom; padding: 0px; margin: 0px; text-indent: 0px; text-align: center;"><span
                                            style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: bottom !important; font-size: 1px !important;"><button
                                                class="IN-bf195e49-eb86-4856-9b9f-1c8710d456be-1G9ISYhSF8XoOmdcl0yKDu"><xdoor-icon
                                                    aria-hidden="true"><svg viewBox="0 0 24 24" width="24px"
                                                                            height="24px" x="0" y="0"
                                                                            preserveAspectRatio="xMinYMin meet">
      <g style="fill: currentColor">
        <rect x="-0.003" style="fill:none;" width="24" height="24"></rect>
        <path style=""
              d="M20,2h-16c-1.1,0-2,0.9-2,2v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2zM8,19h-3v-9h3V19zM6.5,8.8C5.5,8.8,4.7,8,4.7,7s0.8-1.8,1.8-1.8S8.3,6,8.3,7S7.5,8.8,6.5,8.8zM19,19h-3v-4c0-1.4-0.6-2-1.5-2c-1.1,0-1.5,0.8-1.5,2.2V19h-3v-9h2.9v1.1c0.5-0.7,1.4-1.3,2.6-1.3c2.3,0,3.5,1.1,3.5,3.7V19z"></path>
      </g>
    </svg></xdoor-icon>Share</button></span></span></div>
                                <div class="bt-social-share-button bt-googleplus-button">
                                    <div id="___plus_0" style="position: absolute; width: 450px; left: -10000px;">
                                        <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0"
                                                marginwidth="0" scrolling="no"
                                                style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none"
                                                tabindex="0" vspace="0" width="100%" id="I0_1732360477605"
                                                name="I0_1732360477605"
                                                src="https://apis.google.com/u/0/se/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;action=share&amp;annotation=none&amp;height=20&amp;origin=https%3A%2F%2F{{ route('home') }}&amp;url=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.en.6zM9SN8ON8Q.O%2Fam%3DAAAg%2Fd%3D1%2Frs%3DAHpOoo9LiInNUyZ6A99oK9HdmPXGee7Zyg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1732360477605&amp;_gfid=I0_1732360477605&amp;parent=https%3A%2F%2F{{ route('home') }}&amp;pfname=&amp;rpctoken=29553045"
                                                data-gapiattached="true"></iframe>
                                    </div>
                                    <g:plus action="share" href="{{ route('about-us') }}" annotation="none"
                                            height="20" data-gapiscan="true" data-onload="true"
                                            data-gapistub="true"></g:plus>
                                </div>
                            </div>
                            <p><strong>Your Bank For Life, 70 Years Of Being Truly Ghanaian</strong></p>
                            <p><br><img src="{{ asset($activeTemplateTrue. 'home/images/images-logo.png') }}"
                                        alt="GCB Brandmark logo" width="254"
                                        height="212" class="pull-left" style="margin-right: 20px; margin-bottom: 10px;"
                                        title="GCB Brandmark">GCB Bank PLC is Ghana’s first and largest indigenous bank
                                with the vision to be the leading Bank in all our markets and the mission to provide
                                first class banking solutions for customers and value for all stakeholders. This year,
                                the Bank celebrates Seventy (70) years of providing unrivalled financial solutions
                                towards socio-economic development of Ghana.</p>
                            <p>Established in 1953 and listed on the Ghana Stock Exchange since 1996, GCB Bank acquired
                                selected assets and liabilities of two indigenous banks in 2017 and expanded its branch
                                network and ATMs to over 185 and 340 respectively in its quest to continue being the
                                most dominant player in Ghana’s banking industry.</p>
                            <p>In 2020, the Bank developed a four-year strategy to position itself as the most dominant
                                market player and the best by every industry standard, anchoring its plan around three
                                main strategic pillars namely revenue growth and profitability, operational excellence,
                                people and talents.</p>
                            <p>&nbsp;</p>
                            <p><strong>Ratings</strong></p>
                            <p>GCB Bank is rated Ghana’s safest Bank by Moody’s, Fitch, Standard &amp; Poor’s and the
                                most compliant Bank in Africa by the Association for Certified Compliance Professionals
                                in Africa (ACCPA).</p>
                            <p>GCB Bank is currently ranked 1st in the banking sector category and 10th in the list of
                                100 most prestigious companies in Ghana.</p>
                            <p>Service Proposition</p>
                            <p>GCB prides itself as Ghana’s most welcoming bank, offering timely and accessible
                                financial support through quality service and expert solutions that encourage business
                                and enrich people’s lives.</p>
                            <p>The bank’s services are structured to serve every facet of the customer’s lifecycle and
                                all types of businesses operating in diverse sectors of the economy irrespective of
                                size. The Bank, given its unrivalled understanding of the Ghanaian economic context, has
                                also developed unique solutions to serve the needs of Ghanaian residents abroad.</p>
                            <p>&nbsp;</p>
                            <p><strong>Financial Innovation and Leadership</strong></p>
                            <p>In 2020, GCB Bank became the first Bank to launch a digital mobile money wallet when it
                                launched the G-Money product. The digital wallet which is telco-agnostic and fully
                                interoperable allows customers to send and receive funds from any mobile money wallet or
                                bank account by registered users and also performs unique functions including borrowing
                                funds, and individual and group savings. G-Money has evolved into GCB Bank’s digital
                                financial services subsidiary.</p>
                            <p>&nbsp;</p>
                            <p><strong>Investment Banking</strong></p>
                            <p>GCB Capital Ltd. (GCL) is the investment banking subsidiary of GCB Bank Ltd, the largest
                                universal bank in Ghana.</p>
                            <p>GCL is your go-to capital raising, financial advisory and alternative/long-term assets
                                provider for public and private corporates, financial institutions as well as Government
                                and its agencies.</p>
                            <p>The firm complements GCB Bank’s Treasury, Corporate Banking and Consumer Banking
                                businesses to provide cutting-edge bespoke solutions for clients across diverse
                                industries and sectors.</p>
                            <p>GCL demonstrates formidable synergies with the Bank’s unmatched capabilities, in-depth
                                understanding of the market and an unrelenting pursuit for excellence.</p>
                            <p>&nbsp;</p>
                            <p><strong><span
                                        style="color: inherit; font-size: 18px; background-color: inherit; caret-color: auto;">Vision</span></strong>
                            </p>
                            <p>To be the leading bank in all our markets.</p>
                            <h4>Mission</h4>
                            <p>Provide first class banking solutions for our customers and value for all
                                stakeholders.</p>
                            <p><code>Welcome to GCB Bank – Your bank for life.</code></p>
                            <div class="bt-social-share bt-social-share-below">
                                <div class="bt-social-share-button bt-facebook-share-button">
                                    <fb:share-button href="{{ route('about-us') }}" type="button"
                                                     class=" fb_iframe_widget" fb-xfbml-state="rendered"
                                                     fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;locale=en_GB&amp;sdk=joey&amp;type=button">
                                        <span style="vertical-align: bottom; width: 67px; height: 20px;"><iframe
                                                name="fb775ffbf061dcf1a" width="1000px" height="1000px"
                                                data-testid="fb:share_button Facebook Social Plugin"
                                                title="fb:share_button Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df37f52e041598bc07%26domain%3D{{ route('home') }}%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252F{{ route('home') }}%252Ff3d17629f67f58944%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;locale=en_GB&amp;sdk=joey&amp;type=button"
                                                style="border: none; visibility: visible; width: 67px; height: 20px;"
                                                class=""></iframe></span></fb:share-button>
                                </div>
                                <div class="bt-social-share-button bt-twitter-button" style="width:62px">
                                    <iframe id="twitter-widget-1" scrolling="no" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true"
                                            class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                                            title="X Post Button"
                                            src="https://platform.twitter.com/widgets/tweet_button.2f70fb173b9000da126c79afe2098f02.en.html#dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;original_referer=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;size=m&amp;text=About%20GCB%20-%20GCB%20Bank%20PLC&amp;time=1732360482014&amp;type=share&amp;url=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;via=gcbbank4life"
                                            style="position: static; visibility: visible; width: 65px; height: 20px;"
                                            data-url="https://{{ route('home') }}/about-us"></iframe>
                                </div>
                                <div class="bt-social-share-button bt-linkedin-button"><span class="IN-widget"
                                                                                             data-lnkd-debug="<script type=&quot;IN/share+init&quot; data-url=&quot;https://{{ route('home') }}/about-us&quot; data-showzero=&quot;false&quot; data-counter=&quot;none&quot;></script>"
                                                                                             style="display: inline-block; line-height: 1; vertical-align: bottom; padding: 0px; margin: 0px; text-indent: 0px; text-align: center;"><span
                                            style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: bottom !important; font-size: 1px !important;"><button
                                                class="IN-bf195e49-eb86-4856-9b9f-1c8710d456be-1G9ISYhSF8XoOmdcl0yKDu"><xdoor-icon
                                                    aria-hidden="true"><svg viewBox="0 0 24 24" width="24px"
                                                                            height="24px" x="0" y="0"
                                                                            preserveAspectRatio="xMinYMin meet">
      <g style="fill: currentColor">
        <rect x="-0.003" style="fill:none;" width="24" height="24"></rect>
        <path style=""
              d="M20,2h-16c-1.1,0-2,0.9-2,2v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2zM8,19h-3v-9h3V19zM6.5,8.8C5.5,8.8,4.7,8,4.7,7s0.8-1.8,1.8-1.8S8.3,6,8.3,7S7.5,8.8,6.5,8.8zM19,19h-3v-4c0-1.4-0.6-2-1.5-2c-1.1,0-1.5,0.8-1.5,2.2V19h-3v-9h2.9v1.1c0.5-0.7,1.4-1.3,2.6-1.3c2.3,0,3.5,1.1,3.5,3.7V19z"></path>
      </g>
    </svg></xdoor-icon>Share</button></span></span></div>
                                <div class="bt-social-share-button bt-googleplus-button">
                                    <div id="___plus_1" style="position: absolute; width: 450px; left: -10000px;">
                                        <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0"
                                                marginwidth="0" scrolling="no"
                                                style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none"
                                                tabindex="0" vspace="0" width="100%" id="I1_1732360477608"
                                                name="I1_1732360477608"
                                                src="https://apis.google.com/u/0/se/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;action=share&amp;annotation=none&amp;height=20&amp;origin=https%3A%2F%2F{{ route('home') }}&amp;url=https%3A%2F%2F{{ route('home') }}%2Fabout-us&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.en.6zM9SN8ON8Q.O%2Fam%3DAAAg%2Fd%3D1%2Frs%3DAHpOoo9LiInNUyZ6A99oK9HdmPXGee7Zyg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I1_1732360477608&amp;_gfid=I1_1732360477608&amp;parent=https%3A%2F%2F{{ route('home') }}&amp;pfname=&amp;rpctoken=42350717"
                                                data-gapiattached="true"></iframe>
                                    </div>
                                    <g:plus action="share" href="https://{{ route('home') }}/about-us" annotation="none"
                                            height="20" data-gapiscan="true" data-onload="true"
                                            data-gapistub="true"></g:plus>
                                </div>
                            </div>
                            <div id="fb-root" class=" fb_reset">
                                <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                    <div></div>
                                </div>
                            </div>
                            <script>(function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) {
                                        return;
                                    }
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
                            <script type="text/javascript" src="//platform.linkedin.com/in.js"></script>
                            <script type="text/javascript" src="https://apis.google.com/js/plusone.js"
                                    gapi_processed="true">{
                                    lang: 'en-GB'
                                }</script>
                        </section>

                        <!-- Footer -->
                        <!-- // Footer -->


                    </article>
                    <!-- //Article -->


                </div>


                <script type="text/javascript">
                    (function ($) {
                        //document ready
                        $(document).ready(function () {
                            $("img.pull-center").wrap("<div class='span-image'></div>");
                        });
                    })(jQuery);
                </script>
            </div>
            <!-- //MAIN CONTENT -->

            <!-- SIDEBAR RIGHT -->
            <div class="t3-sidebar t3-sidebar-right col-xs-12 col-sm-4  col-md-3 ">
                <div class="content__sidebar">
                    <div class="t3-module module_graybox " id="Mod245">
                        <div class="module-inner"><h3 class="module-title "><span>open a current account...</span></h3>
                            <div class="module-ct">

                                <div class="custom_graybox">
                                    <p><a href="{{ route('user.register') }}">Apply now</a></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //SIDEBAR RIGHT -->

        </div>
    </div>

@endsection
