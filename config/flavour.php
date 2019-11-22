<?php
return [
    /**
     * Read the environment variable defined in `app.flavour` and set a config
     * value based its content. Fallback to white if the variable has not been
     * set.
     *
     * This is an example of how flavour configurations can be reused in
     * application code.
     */
    'backgroundColor' => env('WELCOME_PAGE_BACKGROUND_COLOR', '#fff')
];
