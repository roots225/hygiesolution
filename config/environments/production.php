<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', true);
Config::define('DB_HOST', 'localhost');
Config::define('DB_NAME', 'u545595443_hygie');
Config::define('DB_USER', 'u545595443_hygie');
Config::define('DB_PASSWORD', 'I>9e!BQe');

Config::define('AUTH_KEY', 'Fm%}$,>:fH,d.B;as9W535GPW)3:&IZ}*?y[Yjb<`|]R#p)wK[4B1400Mhq@Q!{z');
Config::define('SECURE_AUTH_KEY', '}@qQ1rB)6DaTRrquuYDKZ]gw9N%(Z|%`&@?!>&WFHO<{Ypbwu-GW<bggWMk5_PU!');
Config::define('LOGGED_IN_KEY', 'msc0XzG1|)K8PZ0c^=Bx)AeT=e`Q>#E!YW{ff14Y>-N3*fc2fSsU{FRbJ&5Q.3:8');
Config::define('NONCE_KEY', '0,%EwH7sz]gVIB$bYX2EM!HNTHD2v=s;RL{LcB5{6_h|(#^Y@W8Cxw4vEV_fCw0q');
Config::define('AUTH_SALT', 'nK:U-6e(p6z:,I!?yXSulD=}hE(ARUaE`;^&5Y;[5>EktmcN)*CC;`3I:|pJ*wUH');
Config::define('SECURE_AUTH_SALT', '@:zNrAc|X@^B;vj={;vl4t*KV_)CeQ|J1vlC[y[#d9i;ty|ZBWq.<Yt:9aL&*}<F');
Config::define('LOGGED_IN_SALT', '&S|pBYtWm)CZr2=wdyUWKzF;cgzzEt.%E@rLiqSKWL[y{K8`Cg`YLzxR[jmjTW.+');
Config::define('NONCE_SALT', ']J^!LS^?IvM=hx9_Y/!br*`MA]E[Sm18`oAz%Ir?HnRU[T{<,;Q:_kE}&`V{cqg[');