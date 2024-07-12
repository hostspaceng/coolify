<?php

return [
    'docs' => 'https://hostspace-cloud.gitbook.io/hcs/~/changes/1x9jWFdRIT8zYXZUIw4x/hcs-user-guide/deploying-apps-on-hcs',
    'contact' => 'https://hostspacecloud.com', // to replace with helpy or whichever support platform we use
    'feedback_discord_webhook' => env('FEEDBACK_DISCORD_WEBHOOK'),
    'self_hosted' => env('SELF_HOSTED', true),
    'waitlist' => env('WAITLIST', false),
    'license_url' => 'https://licenses.coollabs.io',
    'mux_enabled' => env('MUX_ENABLED', true),
    'dev_webhook' => env('SERVEO_URL'),
    'is_windows_docker_desktop' => env('IS_WINDOWS_DOCKER_DESKTOP', false),
    'base_config_path' => env('BASE_CONFIG_PATH', '/data/coolify'),
    'helper_image' => env('HELPER_IMAGE', 'ghcr.io/coollabsio/coolify-helper:latest'),
    'is_horizon_enabled' => env('HORIZON_ENABLED', true),
    'is_scheduler_enabled' => env('SCHEDULER_ENABLED', true),
    'is_sentinel_enabled' => env('SENTINEL_ENABLED', false),
];
