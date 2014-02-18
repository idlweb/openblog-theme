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
        <h3>Openpolis</h3>
        <ul>
            <li><a href="http://www.openpolis.it/chi-siamo/">Chi siamo e cosa facciamo</a></li>
            <li><a href="http://www.openpolis.it/statuto/">Statuti e bilanci</a></li>
        </ul>
    </div>

    <div>
        <h3>Sostienici</h3>
        <ul>
            <li><a href="http://www.openpolis.it/sostienici/">Diventa socio</a></li>
            <li><a href="http://www.openpolis.it/sostienici/dona/">Fai una donazione</a></li>
            <li><a href="http://www.openpolis.it/sostienici/collabora/">Collabora con noi</a></li>
        </ul>
    </div>

    <div>
        <h3>Contattaci</h3>
        <address>
            via degli Equi 42 - 00185 Roma <br/>
            T. 06.83608392 <br/>
            associazione [at] openpolis.it <br/>
            C.I. 97532050586
        </address>
    </div>

    <div>
        <h3>Seguici su</h3>
        <?php openpolis_social_links(true); ?>

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
</body>
</html>