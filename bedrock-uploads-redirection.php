<?php
/**
 * Plugin Name:  Bedrock Uploads Redirection
 * Plugin URI:   https://github.com/mwdelaney/bedrock-uploads-redirection
 * Description:  Detect whether this is a Bedrock installation and redirect wp-content/uploads/* to app/uploads/*
 * Version:      0.1.0
 * Author:       MWDelaney
 * Author URI:   https://mwdelaney.me
 * License:      MIT License
 */

namespace MWDelaney\Bedrock;

if (defined('WP_ENV')) {
    # Add a redirection for everything in wp-content/uploads to app/uploads
    add_action('init', function () {
        add_rewrite_rule('^wp-content/uploads/(.*)', 'app/uploads/$1', 'top');
    });
}
