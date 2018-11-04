<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\GeneralUtility;

return call_user_func(function() {

    $middlewares = [];

    if (GeneralUtility::getApplicationContext()->isDevelopment()) {
        $middlewares['frontend']['schnitzler/typo3-middleware-whoops/process'] = [
            'target' => \Middlewares\Whoops::class,
            'before' => [
                'typo3/cms-core/normalized-params-attribute',
            ]
        ];

        $middlewares['backend']['schnitzler/typo3-middleware-whoops/process'] = [
            'target' => \Middlewares\Whoops::class,
            'before' => [
                'typo3/cms-core/normalized-params-attribute',
            ]
        ];
    }

    return $middlewares;
});
