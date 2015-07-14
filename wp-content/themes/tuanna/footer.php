<footer id="liens">
    <div class="container">
        <div class="row netlinking">
            <div class="col-lg-3 col-sm-6"><h3>L'agence web Antadis</h3>

                <div class="custom">
                    <ul class="list-unstyled">
                        <li><a href="http://www.antadis.com/agence/presentation-agence.html">Notre agence</a></li>
                        <li><a href="http://www.antadis.com/agence/lequipe.html">Notre équipe</a></li>
                        <li><a href="http://www.antadis.com/outils/" style="line-height: 1.3em;">Nos outils</a></li>
                        <li><a href="http://www.antadis.com/metiers/">Nous métiers</a></li>
                        <li><a href="http://www.antadis.com/agence/partenaire-certifie-prestashop.html">Nos compétences e-commerce</a></li>
                    </ul></div>
            </div><div class="col-lg-3 col-sm-6"><h3>Nos solutions</h3>

                <div class="custom">
                    <ul class="list-unstyled">
                        <li><a href="http://www.antadis.com/solutions/creation-site-e-commerce.html">Nos solutions e-commerce</a></li>
                        <li><a href="http://www.antadis.com/solutions/solution-vente-privee.html">Solution de ventes privées</a></li>
                        <li><a href="http://www.antadis.com/solutions/solution-e-commerce-b2b.html">E-commerce B2B</a></li>
                        <li><a href="http://www.antadis.com/solutions/configurateur-de-produits-scene7.html">Configurateur de produits en ligne</a></li>
                        <li><a href="http://www.antadis.com/solutions/site-de-box-abonnements.html">Sites de box et abonnements</a></li>
                        <li><a href="http://www.antadis.com/solutions/site-vitrine-corporate.html">Sites vitrines &amp; corporate</a></li>
                    </ul></div>
            </div><div class="col-lg-3 col-sm-6"><h3>Derniers projets</h3>

                <div class="custom">
                    <ul class="list-unstyled">
                        <li><a href="http://www.antadis.com/references/34-e-commerce/462-site-b2b-cocolico.html">Cocolico</a></li>
                        <li><a href="http://www.antadis.com/references/34-e-commerce/453-la-compagnie-du-lit.html">La Compagnie du Lit</a></li>
                        <li><a href="http://www.antadis.com/references/76-vente-privee/451-privilege-de-marque.html">Privée Privilège de Marque</a></li>
                        <li><a href="http://www.antadis.com/references/108-configurateurs-de-produits/436-tailor-corner.html">Tailor Corner</a></li>
                        <li><a href="http://www.antadis.com/references/33-mobile/365-private-sport-shop-version-mobile.html">PrivateSportShop Mobile</a></li>
                    </ul></div>
            </div><div class="col-lg-3 col-sm-6"><h3>Contact</h3>

                <div class="custom">
                    <p>Agence web et mobile Antadis</p>
                    <p><strong>Rambouillet</strong><br>1, rue de Clairefontaine<br>78120 Rambouillet -&nbsp;France<br>Tel : +33 (0)1 30 41 18 18</p>
                    <p><strong>Paris</strong> - 140b Rue de Rennes<br>75006 Paris France<br>Tel : +33 (0)1 85 08 89 08</p>
                    <p><strong>Rennes</strong> -107 avenue Henri Fréville <br>35207 Rennes<br>Tel : +33 (0)2 30 96 65 85</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 menu">


                <div class="custom">
                    <ul class="list-unstyled">
                        <li><a href="http://www.antadis.com/mentions-legales" rel="nofollow" title="Mentions Légales">Mentions Légales</a></li>
                        <li><a href="http://www.antadis.com/blog" title="Le Blog Antadis">Le Blog de l'agence Antadis</a></li>
                        <li><a href="http://www.behance.net/gallery/Antadis-Corporate-identity/1735795" target="_blank" rel="nofollow" title="Antadis sur Behance">Behance</a></li>
                        <li><a href="https://twitter.com/ANTADIS" target="_blank" rel="nofollow" title="Antadis sur Twitter">Twitter</a></li>
                        <li><a href="https://fr-fr.facebook.com/AgenceAntadis" target="_blank" rel="nofollow" title="Antadis sur Facebook">Facebook</a></li>
                        <li><a href="http://plus.google.com/114134694523702829333/posts" target="_blank" rel="nofollow" title="Antadis sur Google+">Google+</a></li>
                    </ul></div>

            </div>
        </div>
    </div>
</footer>
<? wp_footer() ?>
<script type="text/javascript">
            jQuery(window).on('load', function() {
                new JCaption('img.caption');
            });
            jQuery(function($) {
                $('.hasTip').each(function() {
                    var title = $(this).attr('title');
                    if (title) {
                        var parts = title.split('::', 2);
                        $(this).data('tip:title', parts[0]);
                        $(this).data('tip:text', parts[1]);
                    }
                });
                var JTooltips = new Tips($('.hasTip').get(), {"maxTitleChars": 50, "fixed": false});
            });
            var fcvote_rfolder = "";
            jQuery(document).ready(function() {


                jQuery('select.use_select2_lib').select2({
                    hideSelectionFromResult: function(selectedObject) {
                        selectedObject.removeClass('select2-result-selectable').addClass('select2-result-unselectable').addClass('select2-disabled');
                        return false;/*return undefined;*/
                    }
                });

                jQuery('div.use_select2_lib').each(function() {
                    var el_container = jQuery(this);
                    var el_select = el_container.next('select');


                    var fc_label_text = el_select.attr('fc_label_text');
                    if (fc_label_text) {
                        var _label = (fc_label_text.length >= 30) ? fc_label_text.substring(0, 28) + '...' : fc_label_text;

                        jQuery('<span/>', {
                            'class': 'fc_has_inner_label fc_has_inner_label_select2',
                            'text': _label
                        }).prependTo(el_container.find('.select2-search-field'));
                    }


                    var fc_prompt_text = el_select.attr('fc_prompt_text');
                    if (fc_prompt_text) {
                        var _prompt = (fc_prompt_text.length >= 30) ? fc_prompt_text.substring(0, 28) + '...' : fc_prompt_text;

                        jQuery('<span/>', {
                            'class': 'fc_has_inner_prompt fc_has_inner_prompt_select2',
                            'text': _prompt
                        }).prependTo(el_container.find('.select2-search-field')).hide();
                    }


                    if (!el_select.attr('multiple')) {
                        var el = el_container.find('.select2-choice');
                        var val = el_select.val();
                        if (val === null) {
                            el.addClass('fc_highlight_disabled');
                        } else if (val.length) {
                            el.addClass('fc_highlight');
                        } else {
                            el.removeClass('fc_highlight');
                        }
                    }
                });


                jQuery('select.use_select2_lib').on('open', function() {

                    var el_container = jQuery(this).parent();
                    var el = jQuery(this).parent().find('.select2-input');
                    var el_label = el.prevAll('.fc_has_inner_label');
                    if (el_label)
                        el_label.hide();
                    var el_prompt = el.prevAll('.fc_has_inner_prompt');
                    if (el_prompt)
                        el_prompt.show();


                    if (jQuery(this).hasClass('select2_list_selected')) {
                        var els = jQuery('#select2-drop').find('.select2-selected');
                        els.addClass('select2-selected-highlight').addClass('select2-disabled').removeClass('select2-selected').removeClass('select2-result-selectable');
                    }
                }).on('close', function() {

                    var el_container = jQuery(this).parent();
                    var el = jQuery(this).parent().find('.select2-input');
                    var el_label = el.prevAll('.fc_has_inner_label');
                    if (el_label)
                        el_label.show();
                    var el_prompt = el.prevAll('.fc_has_inner_prompt');
                    if (el_prompt)
                        el_prompt.hide();


                    if (jQuery(this).hasClass('select2_list_selected')) {
                        var els = jQuery('#select2-drop').find('.select2-selected-highlight');
                        els.removeClass('select2-selected-highlight').removeClass('select2-disabled').addClass('select2-result-selectable');
                    }
                }).on


                        ('change', function() {
                            var el_select = jQuery(this);
                            if (!el_select.attr('multiple')) {
                                var el = jQuery(this).prev('div').find('.select2-choice');
                                var val = el_select.val();
                                if (val.length) {
                                    el.addClass('fc_highlight');
                                } else {
                                    el.removeClass('fc_highlight');
                                }
                            }
                        });


                jQuery('div.use_select2_lib.select2-container-multi input').on('keydown', function() {
                    var el = jQuery(this);
                    setTimeout(function() {
                        if (el.val().length) {
                            var el_prompt = el.prevAll('.fc_has_inner_prompt');
                            if (el_prompt)
                                el_prompt.hide();
                        } else {
                            var el_prompt = el.prevAll('.fc_has_inner_prompt');
                            if (el_prompt)
                                el_prompt.show();
                        }
                    }, 0);
                });


                jQuery('select.use_select2_lib').on('loaded open', function() {
                    var ul = jQuery('#select2-drop ul.select2-results');
                    var needsScroll = ul.prop('scrollHeight') > ul.prop('clientHeight');
                    if (needsScroll)
                        ul.css('overflow-y', 'scroll');
                    else
                        ul.css('overflow-y', 'auto');
                });

            });

            (function($) {
                window.addEvent('domready', function() {
                    this.Slider133 = new DJImageSliderModule({id: '133', slider_type: 0, slide_size: 240, visible_slides: 1, show_buttons: 0, show_arrows: 2, preload: 800}, {auto: 1, transition: Fx.Transitions.Expo.easeInOut, duration: 1000, delay: 4000})
                });
            })(document.id);
        </script>
        <script type="text/javascript">
            (function() {
                var strings = {"FLEXI_APPLYING_FILTERING": "Applying Filtering", "FLEXI_TYPE_TO_LIST": "... type to list", "FLEXI_TYPE_TO_FILTER": " ... type to filter"};
                if (typeof Joomla == 'undefined') {
                    Joomla = {};
                    Joomla.JText = strings;
                }
                else {
                    Joomla.JText.load(strings);
                }
            })();
        </script>



        <script type="text/javascript" src="http://localhost/webpro4u.com/wp-content/themes/tuanna/js/plusone.js" gapi_processed="true">{
                lang: 'fr'
            }</script>
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

            ga('create', 'UA-2179918-3', 'auto');
            ga('send', 'pageview');
        </script>
        <link rel="stylesheet" href="http://localhost/webpro4u.com/wp-content/themes/tuanna/css/flexslider.css" type="text/css">
        <script type="text/javascript" src="http://localhost/webpro4u.com/wp-content/themes/tuanna/js/flexslider-min.js"></script>
        <script>
            jQuery(window).load(function() {
                jQuery('.flexslider').flexslider({
                    animation: "fade",
                    prevText: "",
                    nextText: ""
                });
            });
        </script>
        <!-- Piwik -->
        <script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u = "//piwik.antadis.com/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', 1]);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <noscript>&lt;p&gt;&lt;img src="//piwik.antadis.com/piwik.php?idsite=1" style="border:0;" alt="" /&gt;&lt;/p&gt;</noscript>
        <!-- End Piwik Code -->

        <script>
            init();
        </script>