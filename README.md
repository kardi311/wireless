Installation instruction
========================

1. Upload project into your folder that is accessible through web browser
2. Install symfony CLI (https://symfony.com/download) 
3. Run `symfony server:start`
4. Go to `http://127.0.0.1:8000`

How does it work
========================
1. Goute client is used to crawl the videx website.
2. Crawled data is processed to extract the information we want.


Technical approach description
========================
1. Added usage of Goute client library.
2. Client is modified a bit to use Symfony's http caching.
3. Added unit tests to some services.
