<?php
// Disable theme edit or plugin edit
define( 'DISALLOW_FILE_EDIT', true );

//Disable add new theme or plugin anything.
define('DISALLOW_FILE_MODS', true);

//Force the SSL
define('FORCE_SSL_ADMIN', true);

//Disabling Front-End Error Logging
define('WP_DEBUG_DISPLAY', false);

//Enabling Automatic Updates only WordPress
//define('WP_AUTO_UPDATE_CORE', true); 

//Enabling Automatic Updates only Plugin
//add_filter( 'auto_update_plugin', '__return_true' );

//Enabling Automatic Updates only Theme
//add_filter( 'auto_update_theme', '__return_true' );




define( 'AUTH_KEY',         'slg0t3br3hcwkbqcsftbsjemz4esohzfswq2avtgg8fhjiuwsaasb20giagxumoh' );
define( 'SECURE_AUTH_KEY',  '86c9o7onhizid0jluxgklzmgdeaju6lcifitgbqjuluij6swz6fbicllfkt34u3v' );
define( 'LOGGED_IN_KEY',    'dsbyjckwxkicys3hmf87qofpmmrqxczaztaotubgi0va0bmmqoaefir3hlez1eyu' );
define( 'NONCE_KEY',        'oux4j7bmlxuuu67a4mrfz4d1bcd7cxqpbkh0b0sdsqhjb2oc4rrczeiyah5wqpot' );
define( 'AUTH_SALT',        'o9xg88rgotxrziey60v7ib9kauh2netdvdnprxpr3hfimry6okywa05g4shmnmhw' );
define( 'SECURE_AUTH_SALT', 'y8wjr7wrwmmj4t3udkziy7yxnusr5wslnzabvmhydy8fks25m7viu3dmqo7mvamz' );
define( 'LOGGED_IN_SALT',   'hkqnu2wbggdxkhm3qduyntdnvyc1e3vsvtu10wzbvtvo0veaveeefolps3e3andn' );
define( 'NONCE_SALT',       '39r5hvdearnpluewdx9ov8tdrsnc3bitj0rlducdlih5hgw6kr8cbxyud40rhd4n' );
