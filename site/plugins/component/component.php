<?php namespace Flextype;

use Flextype\Component\{Http\Http, Event\Event};

Event::addListener('onPageContentAfter', function () {
    if (Http::getUriSegment(1) != '') {
        Pages::$page['title'] = ucfirst(Http::getUriSegment(1)).' Component';

        $component = Http::getUriSegment(1);
        $page_content = Markdown::parse(file_get_contents('https://raw.githubusercontent.com/flextype-components/'.$component.'/master/README.md'));
        $page_content .= '<br>';
        $page_content .= '<h3>Download</h3>';
        $page_content .= '<a href="https://github.com/flextype-components/'.$component.'/releases">Download on the Github</a>';
        $page_content .= '<br><br><br>';

        Pages::$page['content'] = $page_content;
        Pages::$page['template'] = 'documentation';
        Http::setResponseStatus(200);
    }
});
