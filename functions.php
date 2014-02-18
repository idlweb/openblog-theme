<?php
/**
 * Created by PhpStorm.
 * User: joke2k
 * Date: 17/02/14
 * Time: 23.19
 */

$openpolis_links = array(
    'twitter' => 'https://twitter.com/openpolis',
    'facebook' => 'https://www.facebook.com/openpolis',
    'google-plus' => 'https://plus.google.com/+openpolis/'
);


function _icon($name) {
    return '<i class="fa fa-' . $name . '"></i>';
}


function openpolis_entry_date_and_categories() {
    /**
     * Prints HTML with date and categories for current post.
     *
     * @since Openpolis Theme 1.0
     */
    // Translators: used between list items, there is a space after the comma.
    $categories_list = get_the_category_list( __( ', ', 'openpolis' ) );

    $date = sprintf( '<span title="%2$s"><time class="entry-date" datetime="%3$s">%4$s</time></span>',
        esc_url( get_permalink() ),
        esc_attr( get_the_time() ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() )
    );

    printf(
        '<div class="entry-date">%1$s %2$s</div><div class="entry-categories">%3$s %4$s</div>',
        _icon('clock-o'),
        $date,
        _icon('folder-open-o'),
        $categories_list
    );
}


function openpolis_entry_tags() {
    /**
     * Prints HTML with tags for current post.
     *
     * @since Openpolis Theme 1.0
     */
    // Translators: used between list items, there is a space after the comma.
    $tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

    printf(
        '<div class="entry-tags">%1$s %2$s</div>',
        _icon('tags'),
        $tag_list
    );
}


function openpolis_social_links($inverse=false) {
    /**
     * Prints HTML with icons to openpolis social accounts.
     *
     * @since Openpolis Theme 1.0
     */
    global $openpolis_links;
    foreach ($openpolis_links as $key => $value) {
        printf(
            '<a class="fa-stack fa-lg" href="%2$s">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-%1$s fa-stack-1x fa-inverse"></i>
            </a>',
            $key,
            esc_url($value)
        );
    }

}

//
//// Override twentytwelve_entry_meta function in functions.php
//if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :
//    /**
//     * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
//     *
//     * Create your own twentytwelve_entry_meta() to override in a child theme.
//     *
//     * @since Twenty Twelve 1.0
//     */
//    function twentytwelve_entry_meta() {
//        openpolis_entry_tags();
//    }
//endif;