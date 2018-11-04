# TYPO3 Middleware "Whoops"

This package is a TYPO3 extension which registers the package `middlewares/whoops` as a middleware in TYPO3 >= 9.5.0 to
enable `filp/whoops` as php error handler.

While the improved DebugExceptionHandler of TYPO3 has already been heavily improved in version 9, you might still prefer
`filp/whoops` as your error handler.

## What is the difference compared to `portrino/typo3-whoops`?

Well, the main difference is the use of the middleware `middlewares/whoops`, which simply integrates into TYPO3 without
having to write any code at all.

Besides that, `middlewares/whoops` accepts the `Accept` http header which enables you to get errors in different formats
like `json`, `xml`, `plaintext`.
