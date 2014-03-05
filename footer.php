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
        <ul id="op-services">
            <li><a href="http://www.openpolis.it" target="_parent" title="Associazione Openpolis"><img src="<?= get_bloginfo('stylesheet_directory') ?>/images/logo-footer.png" alt="Sito dell'associazione OpenPolis"></a></li>
            <li><a href="http://parlamento.openpolis.it" target="_parent" title="OpenParlamento">Open<b>Parlamento</b></a></li>
            <li><a href="http://politici.openpolis.it" target="_parent" title="OpenPolitici">Open<b>Politici</b></a></li>
            <li><a href="http://voisietequi.openpolis.it" target="_parent" title="VoiSieteQui"><b>Voi</b>Siete<b>Qui</b></a></li>
            <li><a href="http://indice.openpolis.it/" target="_parent" title="Indice di Produttività Parlamentare"><b>Indice</b> di <b> Produttività Parlamentare</b></a></li>
            <li><a href="http://www.openmunicipio.it/" target="_parent" title="OpenMunicipio">Open<b>Municipio</b></a></li>
        </ul>
    </div>

</footer><!-- #colophon -->


<?php wp_footer(); ?>

<?php /*
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:50px;top:50px;">
    <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
    <a class="addthis_button_tweet" tw:count="vertical"></a>
    <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
    <a class="addthis_counter"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-530489714d916add"></script>
<!-- AddThis Button END -->
*/ ?>

</body>
</html>