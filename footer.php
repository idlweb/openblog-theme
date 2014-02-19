<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->

<footer id="colophon" class="site" role="contentinfo">
    <div>
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
        }
        ?>
    </div>

    <div>
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
        }
        ?>
    </div>

    <div>
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
            dynamic_sidebar('footer-sidebar-3');
        }
        ?>
<!--        <h3>Seguici su</h3>-->
        <?php //openpolis_social_links(true); ?>
    </div>

    <div id="sub-footer">
        <ul>
            <li><a href="http://www.openpolis.it"><img src="http://www.openpolis.it/static/img/footers/openpolis.png" alt="Sito dell'associazione OpenPolis" title="Associazione Openpolis"></a></li>
            <li><a href="http://parlamento.openpolis.it"><img src="http://www.openpolis.it/static/img/footers/openparlamento.png" alt="Open Parlamento" title="Open Parlamento"></a></li>
            <li><a href="http://politici.openpolis.it"><img src="http://www.openpolis.it/static/img/footers/openpolitici.png" alt="Open politici" title="Open politici"></a></li>
            <li><a href="http://voisietequi.openpolis.it"><img src="http://www.openpolis.it/static/img/footers/voisietequi.png" alt="Voi Siete Qui" title="Voi Siete Qui"></a></li>
            <li><a href="http://indice.openpolis.it/"><img src="http://www.openpolis.it/static/img/footers/indiceproduttivita.png" alt="L'Indice di Produttività Parlamentare" title="L'Indice di Produttività Parlamentare"></a></li>
            <li><a href="http://www.openmunicipio.it/"><img src="http://www.openpolis.it/static/img/footers/openmunicipio.png" alt="Open municipio" title="Open municipio"></a></li>
        </ul>
    </div>

</footer><!-- #colophon -->


<?php wp_footer(); ?>


<div class="addthis_bar addthis_bar_vertical addthis_bar_large" style="top:50px;left:50px;">
    <div class="addthis_toolbox addthis_default_style">
        <span><a class="addthis_button_facebook_like" fb:like:layout="box_count"></a></span>
        <span><a class="addthis_button_tweet" tw:count="vertical"></a></span>
        <span><a class="addthis_button_google_plusone" g:plusone:size="tall"></a></span>
        <span><a class="addthis_counter"></a></span>
    </div>
</div>
<script type="text/javascript">
    var addthis_config = {"data_track_clickback":true};
</script> <script type="text/javascript"
                  src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-530489714d916add"></script>


</body>
</html>