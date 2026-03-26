<?php
/**
 * Edwin Nord Portfolio Theme - functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ============================================================
   THEME SETUP
============================================================ */
function en_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo' );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'edwin-nord' ),
    ] );
}
add_action( 'after_setup_theme', 'en_theme_setup' );

/* ============================================================
   ENQUEUE STYLES & SCRIPTS
============================================================ */
function en_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'en-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap',
        [],
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        [],
        '6.4.0'
    );

    // Theme stylesheet
    wp_enqueue_style( 'en-style', get_stylesheet_uri(), [], '2.0' );

    // EmailJS
    wp_enqueue_script(
        'emailjs',
        'https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js',
        [],
        null,
        true
    );

    // Theme JS
    wp_enqueue_script(
        'en-main',
        get_template_directory_uri() . '/js/main.js',
        [ 'emailjs' ],
        '2.0',
        true
    );

    // Pass theme URI to JS
    wp_localize_script( 'en-main', 'EN', [
        'themeUri' => get_template_directory_uri(),
        'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'en_enqueue_assets' );

/* ============================================================
   CUSTOM POST TYPE: PROJECTS
============================================================ */
function en_register_projects_cpt() {
    $labels = [
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'add_new'            => 'Add New Project',
        'add_new_item'       => 'Add New Project',
        'edit_item'          => 'Edit Project',
        'all_items'          => 'All Projects',
        'menu_name'          => 'Projects',
    ];

    register_post_type( 'en_project', [
        'labels'      => $labels,
        'public'      => true,
        'has_archive' => false,
        'supports'    => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'menu_icon'   => 'dashicons-portfolio',
        'rewrite'     => [ 'slug' => 'projects' ],
        'show_in_rest'=> true,
    ] );
}
add_action( 'init', 'en_register_projects_cpt' );

/* ============================================================
   PROJECTS META BOXES
============================================================ */
function en_add_project_meta_boxes() {
    add_meta_box(
        'en_project_details',
        'Project Details',
        'en_render_project_meta_box',
        'en_project',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'en_add_project_meta_boxes' );

function en_render_project_meta_box( $post ) {
    wp_nonce_field( 'en_project_meta', 'en_project_nonce' );
    $url      = get_post_meta( $post->ID, '_en_project_url', true );
    $tag      = get_post_meta( $post->ID, '_en_project_tag', true );
    $featured = get_post_meta( $post->ID, '_en_project_featured', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="en_project_url">Live URL</label></th>
            <td><input type="url" id="en_project_url" name="en_project_url"
                value="<?php echo esc_attr( $url ); ?>" class="regular-text" placeholder="https://example.com" /></td>
        </tr>
        <tr>
            <th><label for="en_project_tag">Category Tag</label></th>
            <td><input type="text" id="en_project_tag" name="en_project_tag"
                value="<?php echo esc_attr( $tag ); ?>" class="regular-text" placeholder="e.g. Web Development" /></td>
        </tr>
        <tr>
            <th><label for="en_project_featured">Featured</label></th>
            <td><input type="checkbox" id="en_project_featured" name="en_project_featured"
                value="1" <?php checked( $featured, '1' ); ?> />
                <label for="en_project_featured">Show on homepage</label></td>
        </tr>
    </table>
    <?php
}

function en_save_project_meta( $post_id ) {
    if ( ! isset( $_POST['en_project_nonce'] ) ) return;
    if ( ! wp_verify_nonce( $_POST['en_project_nonce'], 'en_project_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $fields = [
        '_en_project_url'      => 'url',
        '_en_project_tag'      => 'text',
        '_en_project_featured' => 'checkbox',
    ];

    foreach ( $fields as $meta_key => $type ) {
        $input_name = ltrim( $meta_key, '_' );
        if ( $type === 'checkbox' ) {
            update_post_meta( $post_id, $meta_key, isset( $_POST[ $input_name ] ) ? '1' : '' );
        } elseif ( $type === 'url' ) {
            update_post_meta( $post_id, $meta_key, esc_url_raw( $_POST[ $input_name ] ?? '' ) );
        } else {
            update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $input_name ] ?? '' ) );
        }
    }
}
add_action( 'save_post_en_project', 'en_save_project_meta' );

/* ============================================================
   CONTACT FORM AJAX HANDLER (fallback — EmailJS handles primary)
============================================================ */
function en_handle_contact() {
    check_ajax_referer( 'en_contact_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $subject = sanitize_text_field( $_POST['subject'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( ! $name || ! $email || ! $message ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
    }

    $to      = get_option( 'admin_email' );
    $subject = $subject ?: 'New portfolio contact from ' . $name;
    $body    = "Name: $name\nEmail: $email\n\n$message";
    $headers = [ 'Content-Type: text/plain; charset=UTF-8', "Reply-To: $name <$email>" ];

    if ( wp_mail( $to, $subject, $body, $headers ) ) {
        wp_send_json_success( [ 'message' => 'Message sent successfully!' ] );
    } else {
        wp_send_json_error( [ 'message' => 'Failed to send. Please try again.' ] );
    }
}
add_action( 'wp_ajax_nopriv_en_contact', 'en_handle_contact' );
add_action( 'wp_ajax_en_contact', 'en_handle_contact' );

/* ============================================================
   CLEANUP
============================================================ */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
