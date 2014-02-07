iTunesReceiptService
====================

iTunesReceiptService this will take a receipt in, store it in a db structure, then return back, an intermediary as such.

Note to use this you need to have the webserver setup correctly for Silex

http://silex.sensiolabs.org/doc/web_servers.html

Also clone this repo to the server, then run composer install on it, then you can post to validate with a receipt input item and it will save the returned information in a database, and return the object back to the caller also, so existing processing can continue.

Tempting idea is to accept the payload in the same way as apple does (json structure) and then this would be a complete passthrough.

Need to add your password to the settings.yml file also for newsstand receipts.
