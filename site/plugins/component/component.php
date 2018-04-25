<?php namespace Flextype;

use Url;
use Response;

Events::addListener('onPageContentAfter', function () {
    if (Url::getUriSegment(1) != '') {
        Pages::$page['title'] = ucfirst(Url::getUriSegment(1)).' Component';

        $component = Url::getUriSegment(1);
        $page_content = Markdown::parse(file_get_contents('https://raw.githubusercontent.com/flextype-components/'.$component.'/master/README.md'));
        $page_content .= '<br>';
        $page_content .= '<h3>Download</h3>';
        $page_content .= '<a href="https://github.com/flextype-components/'.$component.'/releases">Download on the Github</a>';
        $page_content .= '<br><br><br>';

        Pages::$page['content'] = $page_content;
        Pages::$page['template'] = 'documentation';
        Response::status(200);
    }
});
