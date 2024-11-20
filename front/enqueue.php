<?php

// Load CSS and JS on the frontend
function custom_breadcrumbs_scripts()
{

  // css
  wp_register_style(
    'custom-breadcrumbs-style',
    PLUGIN_URL . 'public/css/breadcrumbs.css',
    [],
    time()
  );

  // js
  // wp_register_script(
  //   'auto-login-frontend-script',
  //   GPQUERRY_CUSTOMIZER_PLUGIN_URL . 'public/js/auto-login-public-script.js',
  //   ['jquery'],
  //   time()
  // );

  wp_enqueue_style('custom-breadcrumbs-style');
  // wp_enqueue_script('auto-login-frontend-script');
}
