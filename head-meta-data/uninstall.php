<?php // uninstall remove options

if(!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) exit();

// delete options
delete_option('hmd_options');
delete_option('head-meta-data-dismiss-notice');