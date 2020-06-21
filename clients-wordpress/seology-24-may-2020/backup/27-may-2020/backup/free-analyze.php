<?php 

/*

    Template name: free-analyze

*/

 get_header();

?>
<style>
    .breadcrumbs {
        padding: 1.55rem 0 2.2rem 0;
    }
    @media (min-width: 50.625em)
        .o-wrapper {
            padding-right: 3%;
            padding-left: 3%;
    }
    .o-wrapper {
        margin-right: auto;
        margin-left: auto;
        max-width: 72.5rem;
       /* padding-right: 4.5%;
        padding-left: 4.5%;*/
    }
    .breadcrumbs__item {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 14px;
        font-size: 0.777778rem;
        font-weight: 600;
    }
    .ttu {
        text-transform: uppercase;
    }
    .breadcrumbs__item:before {
        content: '';
        display: inline-block;
        height: 22px;
        height: 1.222222rem;
        width: 22px;
        width: 1.222222rem;
        border-radius: 100%;
        background-color: #88C32D;
        margin-right: 13px;
        margin-right: 0.722222rem;
    }
    .o-wrapper:after {
        content: "" !important;
        display: block !important;
        clear: both !important;
    }
    .text--center {
        text-align: center;
    }
    @media (min-width: 61.25em)
    h1 {
        font-size: 64px;
        font-size: 3.555556rem;
        font-size: 3.55556rem;
        line-height: 1.12;
    }
    .u-margin-top-larger {
        /*margin-top: 72px !important;*/
        margin-top: 4rem !important;
    }
    .flex {
        display: flex;
    }
    .search360__main .flex-item {
        -webkit-box-flex: 1;
        /*-ms-flex: 1 1 auto;*/
        flex: 1 1 auto;
    }
    .search360__main .search360__image--left img {
        /*-o-object-position: 50% 20%;*/
        object-position: 50% 20%;
        max-width: 7.777778rem;
    }
    .img--contain img {
        /*-o-object-fit: contain;*/
        object-fit: contain;
        height: 100%;
        width: 100%;
    }
    .search360__main .search360__form .search360-form-container {
        max-width: 638px;
        max-width: 35.444444rem;
        width: 100%;
        margin: auto;
    }
    .search360-form-container {
        position: relative;
        border: 2px solid black;
        background-color: #fff;
        padding: 1rem 2rem;
    }
    .search360-form-container:before {
        content: '';
        display: block;
        position: absolute;
        z-index: -1;
        height: 100%;
        background-color: #000;
        left: 2%;
        top: 10px;
        top: 0.555556rem;
        width: 100%;
    }
    .search360__main .search360__form h3 {
        max-width: 370px;
        max-width: 20.555556rem;
        margin: auto;
        margin-bottom: 1rem;
    }
    .search360-form-container h3 {
        font-size: 1rem;
    }
    .mktoForm {
        text-align: left;
    }
    .search360__main .search360__image--right img {
        /*-o-object-position: 50% 75%;*/
        object-position: 50% 75%;
        /*max-width: 157px;*/
        max-width: 8.722222rem;
    }
    img {
        /*max-width: 100%;*/
        border-style: none;
        font-style: italic;
        vertical-align: middle;
       /* -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;*/
        user-select: none;
    }
    /* new section style*/
</style>



    <!-- Page Title Begin -->

    <section class="page-title-bg pt-250 pb-100" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/section-pattern/page-title.png">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="page-title text-center">

                        <h2><?php echo the_title(); ?></h2>

                        <ul class="list-inline">

                            <li><a href="<?php echo site_url(); ?>">Home</a></li>

                            <li><?php echo the_title(); ?></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Page Title End -->

    <div class="container">
<main class="content remodal-bg">
    <section class="breadcrumbs">
  <div class="o-wrapper">
    <div class="breadcrumbs__item ttu">
      SEO Analysis
    </div>
  </div>
</section>

<section class="text--center search360__main">
    <div class="o-wrapper">
        <h1>Start Your Free SEO Analysis Now</h1>
        <p>Get Conductor experts to analyze your website to help improve your rankings &amp; online visibility</p>


        <div class="u-margin-top-larger flex search360__main__flex">
            <div class="search360__image flex-item search360__image--left img--contain">
                <img src="https://www.conductor.com/wp-content/themes/theme/dist/images/seo-left.svg" alt="Conductor - Bar chart" data-src="https://www.conductor.com/wp-content/themes/theme/dist/images/seo-left.svg" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/themes/theme/dist/images/seo-left.svg" alt="Conductor - Bar chart"></noscript>
            </div>
            <div class="flex-item search360__form">
                <div class="search360-form-container">
                    <div>
                        <h3>Get started with a FREE SEO analysis of your organization</h3>
                        <script src="//app-sjf.marketo.com/js/forms2/js/forms2.min.js"></script>
                        <form id="mktoForm_1684" novalidate="novalidate" class="mktoForm mktoHasWidth mktoLayoutLeft" style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: rgb(51, 51, 51); width: 1350px;" __bizdiag="1344318103" __biza="W___"><style type="text/css">.mktoForm .mktoButtonWrap.mktoSimple .mktoButton {
color:#fff;
border:1px solid #75ae4c;
padding:0.4em 1em;
font-size:1em;
background-color:#99c47c;
background-image: -webkit-gradient(linear, left top, left bottom, from(#99c47c), to(#75ae4c));
background-image: -webkit-linear-gradient(top, #99c47c, #75ae4c);
background-image: -moz-linear-gradient(top, #99c47c, #75ae4c);
background-image: linear-gradient(to bottom, #99c47c, #75ae4c);
}
.mktoForm .mktoButtonWrap.mktoSimple .mktoButton:hover {
border:1px solid #447f19;
}
.mktoForm .mktoButtonWrap.mktoSimple .mktoButton:focus {
outline:none;
border:1px solid #447f19;
}
.mktoForm .mktoButtonWrap.mktoSimple .mktoButton:active{
background-color:#75ae4c;
background-image: -webkit-gradient(linear, left top, left bottom, from(#75ae4c), to(#99c47c));
background-image: -webkit-linear-gradient(top, #75ae4c, #99c47c);
background-image: -moz-linear-gradient(top, #75ae4c, #99c47c);
background-image: linear-gradient(to bottom, #75ae4c, #99c47c);
}
</style><div class="mktoFormRow"><div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 10px;"><div class="mktoOffset" style="width: 10px;"></div><div class="mktoFieldWrap mktoRequiredField"><label for="Email" class="mktoLabel mktoHasWidth" style="width: 125px;"><div class="mktoAsterix">*</div>Business Email:</label><div class="mktoGutter mktoHasWidth" style="width: 10px;"></div><input id="Email" name="Email" maxlength="255" type="email" class="mktoField mktoEmailField mktoHasWidth mktoRequired" style="width: 150px;"><div class="mktoClear"></div></div><div class="mktoClear"></div></div><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoPlaceholder mktoPlaceholderFirstName"></div><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoPlaceholder mktoPlaceholderLastName"></div><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoPlaceholder mktoPlaceholderCompany"></div><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoPlaceholder mktoPlaceholderEmployee_Size_Range_CB__c"></div><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoPlaceholder mktoPlaceholderWebsite"></div><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoPlaceholder mktoPlaceholderTitle"></div><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoPlaceholder mktoPlaceholderPhone"></div><div class="mktoClear"></div></div><div class="mktoFormRow"><input type="hidden" name="clearbitFormStatus" class="mktoField mktoFieldDescriptor mktoFormCol" value="" style="margin-bottom: 10px;"><div class="mktoClear"></div></div><div class="mktoFormRow"><div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 10px;"><div class="mktoOffset" style="width: 10px;"></div><div class="mktoFieldWrap"><label for="PC_Opt_In__c" class="mktoLabel mktoHasWidth" style="width: 10px;"><div class="mktoAsterix">*</div></label><div class="mktoGutter mktoHasWidth" style="width: 10px;"></div><div class="mktoLogicalField mktoCheckboxList mktoHasWidth" style="width: 283px;"><input name="PC_Opt_In__c" id="mktoCheckbox_8518_0" type="checkbox" value="yes" class="mktoField"><label for="mktoCheckbox_8518_0">I want the very best marketing content from Conductor coming straight to my inbox. Sign me up!</label></div><div class="mktoClear"></div></div><div class="mktoClear"></div></div><div class="mktoClear"></div></div><div class="mktoButtonRow"><span class="mktoButtonWrap mktoSimple" style="margin-left: 120px;"><button type="submit" class="mktoButton">Submit</button></span></div><input type="hidden" name="formid" class="mktoField mktoFieldDescriptor" value="1684"><input type="hidden" name="munchkinId" class="mktoField mktoFieldDescriptor" value="149-ZMU-763"></form>
                        <script>
                            function getCookie(cname) {
                                var name = cname + "=";
                                var ca = document.cookie.split(';');
                                for (var i = 0; i < ca.length; i++) {
                                    var c = ca[i].trim();
                                    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                                }
                                return null;
                            }

                            function isEmailGood(email) {
                                for (var i = 0; i < invalidDomains.length; i++) {
                                    var domain = invalidDomains[i];
                                    if (email.indexOf(domain) != -1) {
                                        return false;
                                    }
                                }
                                return true;
                            }
                            var invalidDomains = ["yandex.ru", "@gmail.", "@yahoo.", "@hotmail.", "@live.", "@aol.", "@outlook.", "@icloud."];
                            MktoForms2.loadForm("//app-sjf.marketo.com", "149-ZMU-763", 1684);
                            MktoForms2.whenReady(function (form) {
                                form.onValidate(function () {
                                    var email = form.vals().Email;
                                    if (email) {
                                        if (!isEmailGood(email)) {
                                            form.submitable(false);
                                            var emailElem = form.getFormElem().find("#Email");
                                            form.showErrorMessage("Must be Business email.", emailElem);
                                        } else {
                                            form.submitable(true);
                                        }
                                    }
                                });
                                form.onSuccess(function () {
                                    ga('send', 'event', {
                                        eventCategory: 'form',
                                        eventAction: 'submit',
                                        eventLabel: 'Form Submit'
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="search360__image flex-item search360__image--right img--contain">
                <img src="https://www.conductor.com/wp-content/themes/theme/dist/images/seo-right.svg" alt="Conductor - Pie chart" data-src="https://www.conductor.com/wp-content/themes/theme/dist/images/seo-right.svg" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/themes/theme/dist/images/seo-right.svg" alt="Conductor - Pie chart"></noscript>
            </div>
        </div>

    </div>
</section>
<section class="pad-tb">
    <section class="icon-grid icon-grid--shadow pad-tb pad-tb--large">
  <div class="o-wrapper">
    
    <div class="o-layout o-layout--large o-layout--stretch">
              
        <div class="o-layout__item u-1/3@desktop u-1/2@phablet u-1/1 u-margin-bottom-none@tablet u-margin-bottom-mid aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
          <div class="grid-item grid-item--shadow grid-item--shadow--accent flex w100">
            <div class="grid-item__container">
              <div class="grid-item__image">
                <img src="https://www.conductor.com/wp-content/uploads/2020/01/chart.svg" class="attachment-full size-full ls-is-cached lazyloaded" alt="Chart" draggable="false" height="54" width="55" data-src="https://www.conductor.com/wp-content/uploads/2020/01/chart.svg" loading="lazy"><noscript><img src="https://www.conductor.com/wp-content/uploads/2020/01/chart.svg" class="attachment-full size-full" alt="Chart" draggable="false" height="54" width="55" /></noscript>              </div>
              <h4>Learn how to improve your website rankings</h4>
              <p>Drive more traffic to your website by improving your online visibility with your free site analysis.</p>
                          </div>
          </div>

        </div>
                      
        <div class="o-layout__item u-1/3@desktop u-1/2@phablet u-1/1 u-margin-bottom-none@tablet u-margin-bottom-mid aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
          <div class="grid-item grid-item--shadow grid-item--shadow--turquoise flex w100">
            <div class="grid-item__container">
              <div class="grid-item__image">
                <img src="https://www.conductor.com/wp-content/uploads/2020/01/Group-10.svg" class="attachment-full size-full ls-is-cached lazyloaded" alt="Group 10" draggable="false" height="54" width="55" data-src="https://www.conductor.com/wp-content/uploads/2020/01/Group-10.svg" loading="lazy"><noscript><img src="https://www.conductor.com/wp-content/uploads/2020/01/Group-10.svg" class="attachment-full size-full" alt="Group 10" draggable="false" height="54" width="55" /></noscript>              </div>
              <h4>Uncover technical site issues</h4>
              <p>A&nbsp;technical website&nbsp;analysis reveals hidden site&nbsp;health&nbsp;issues&nbsp;that may impede your site’s success.
    </p>
                          </div>
          </div>

        </div>
                      
        <div class="o-layout__item u-1/3@desktop u-1/2@phablet u-1/1 u-margin-bottom-none@tablet u-margin-bottom-mid aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="grid-item grid-item--shadow grid-item--shadow--purple flex w100">
            <div class="grid-item__container">
              <div class="grid-item__image">
                <img src="https://www.conductor.com/wp-content/uploads/2020/01/search.svg" class="attachment-full size-full ls-is-cached lazyloaded" alt="Search" draggable="false" height="54" width="55" data-src="https://www.conductor.com/wp-content/uploads/2020/01/search.svg" loading="lazy"><noscript><img src="https://www.conductor.com/wp-content/uploads/2020/01/search.svg" class="attachment-full size-full" alt="Search" draggable="false" height="54" width="55" /></noscript>              </div>
              <h4>Discover opportunities to optimize and create new content</h4>
              <p>Uncover the topics that are most relevant to your audience and create winning content.</p>
                          </div>
          </div>

        </div>
                      
        <div class="o-layout__item u-1/3@desktop u-1/2@phablet u-1/1 u-margin-bottom-none@tablet u-margin-bottom-mid aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
          <div class="grid-item grid-item--shadow grid-item--shadow--turquoise flex w100">
            <div class="grid-item__container">
              <div class="grid-item__image">
                <img src="https://www.conductor.com/wp-content/uploads/2020/01/tool.svg" class="attachment-full size-full ls-is-cached lazyloaded" alt="Tool" draggable="false" height="54" width="55" data-src="https://www.conductor.com/wp-content/uploads/2020/01/tool.svg" loading="lazy"><noscript><img src="https://www.conductor.com/wp-content/uploads/2020/01/tool.svg" class="attachment-full size-full" alt="Tool" draggable="false" height="54" width="55" /></noscript>              </div>
              <h4>See how visible your organization is online</h4>
              <p>Don’t miss opportunities to improve your visibility and beat out the competition.</p>
                          </div>
          </div>

        </div>
                      
        <div class="o-layout__item u-1/3@desktop u-1/2@phablet u-1/1 u-margin-bottom-none@tablet u-margin-bottom-mid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="grid-item grid-item--shadow grid-item--shadow--purple flex w100">
            <div class="grid-item__container">
              <div class="grid-item__image">
                <img src="https://www.conductor.com/wp-content/uploads/2020/01/bar.svg" class="attachment-full size-full ls-is-cached lazyloaded" alt="Bar" draggable="false" height="54" width="55" data-src="https://www.conductor.com/wp-content/uploads/2020/01/bar.svg" loading="lazy"><noscript><img src="https://www.conductor.com/wp-content/uploads/2020/01/bar.svg" class="attachment-full size-full" alt="Bar" draggable="false" height="54" width="55" /></noscript>              </div>
              <h4>Get recommendations to improve your performance</h4>
              <p>Get actionable steps in your SEO analysis to optimize&nbsp;your website&nbsp;for the best possible&nbsp;performance.</p>
                          </div>
          </div>

        </div>
                  </div></div></section></section>

<section class="search360 assess pad-tb">
    <div class="o-wrapper">

        <h2 class="text--center u-margin-bottom-huge">What happens after you request an SEO analysis?</h2>

        <div class="o-layout o-layout--large">
            <div class="o-layout__item u-1/2@desktop u-1/1">

                <ol class="assesment-process">
                                        <li class="flex">
                        <div class="assess-text">
                            <h3>Research and Discovery</h3>
                            <p></p><p>Conductor experts start by diving into your domain and industry</p>
<p></p>
                        </div>
                        <div class="num">
                            01
                        </div>
                    </li>
                                        <li class="flex">
                        <div class="assess-text">
                            <h3>Assessment Call</h3>
                            <p></p><p><strong>Our team will reach out to setup a call where we’ll:</strong><br>
Address current gaps and opportunities to help your site reach its potential</p>
<p>Make actionable recommendations and provide next steps</p>
<p></p>
                        </div>
                        <div class="num">
                            02
                        </div>
                    </li>
                                    </ol>

                <a href="#mktoForm_1684" class="c-btn c-btn--accent u-margin-top-mid u-margin-bottom-huge u-margin-bottom-none@desktop">Request Now</a>
            </div>
            <div class="o-layout__item u-1/2@desktop u-1/1">
                <div class="assess__image">
                    <div class="assess__image__container img--contain">
                      <img src="https://www.conductor.com/wp-content/themes/theme/dist/images/office-life.jpg" data-src="https://www.conductor.com/wp-content/themes/theme/dist/images/office-life.jpg" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/themes/theme/dist/images/office-life.jpg" /></noscript>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="search360 brands">
    <div class="o-wrapper">
        <div class="bg--grey">
            <div class="o-wrapper">
                <div class="brands-trust">
                    <h2>Over 500 brands are growing their business with Conductor</h2>

                    <div class="o-layout o-layout--large o-layout--stretch o-layout--center">
                                                    <div class="o-layout__item u-1/5@desktop u-1/3@tablet u-1/2 flex-align-items-center flex flex-justify-center">
                                <div class="icon-contain u-margin-bottom u-margin-bottom-none@desktop">
                                    <img src="https://www.conductor.com/wp-content/uploads/2019/11/sap.png" alt="Sap" data-src="https://www.conductor.com/wp-content/uploads/2019/11/sap.png" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/uploads/2019/11/sap.png" alt="Sap" /></noscript>
                                </div>
                            </div>
                                                    <div class="o-layout__item u-1/5@desktop u-1/3@tablet u-1/2 flex-align-items-center flex flex-justify-center">
                                <div class="icon-contain u-margin-bottom u-margin-bottom-none@desktop">
                                    <img src="https://www.conductor.com/wp-content/uploads/2019/11/visa.png" alt="Visa" data-src="https://www.conductor.com/wp-content/uploads/2019/11/visa.png" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/uploads/2019/11/visa.png" alt="Visa" /></noscript>
                                </div>
                            </div>
                                                    <div class="o-layout__item u-1/5@desktop u-1/3@tablet u-1/2 flex-align-items-center flex flex-justify-center">
                                <div class="icon-contain u-margin-bottom u-margin-bottom-none@desktop">
                                    <img src="https://www.conductor.com/wp-content/uploads/2019/11/solstice-sunglasses-1.png" alt="Solstice Sunglasses 1" data-src="https://www.conductor.com/wp-content/uploads/2019/11/solstice-sunglasses-1.png" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/uploads/2019/11/solstice-sunglasses-1.png" alt="Solstice Sunglasses 1" /></noscript>
                                </div>
                            </div>
                                                    <div class="o-layout__item u-1/5@desktop u-1/3@tablet u-1/2 flex-align-items-center flex flex-justify-center">
                                <div class="icon-contain u-margin-bottom u-margin-bottom-none@desktop">
                                    <img src="https://www.conductor.com/wp-content/uploads/2019/11/athenahealth.png" alt="Athenahealth" data-src="https://www.conductor.com/wp-content/uploads/2019/11/athenahealth.png" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/uploads/2019/11/athenahealth.png" alt="Athenahealth" /></noscript>
                                </div>
                            </div>
                                                    <div class="o-layout__item u-1/5@desktop u-1/3@tablet u-1/2 flex-align-items-center flex flex-justify-center">
                                <div class="icon-contain u-margin-bottom u-margin-bottom-none@desktop">
                                    <img src="https://www.conductor.com/wp-content/uploads/2019/11/nordstrom-rack.png" alt="Nordstrom Rack" data-src="https://www.conductor.com/wp-content/uploads/2019/11/nordstrom-rack.png" loading="lazy" class=" lazyloaded"><noscript><img src="https://www.conductor.com/wp-content/uploads/2019/11/nordstrom-rack.png" alt="Nordstrom Rack" /></noscript>
                                </div>
                            </div>
                                            </div>

                </div>
            </div>
        </div>
    </div>
</section>
  </main>
</div>

<?php get_footer(); ?>