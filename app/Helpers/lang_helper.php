<?php

function current_lang(): string
{
    return service('uri')->getSegment(1) ?: 'id';
}

function lang_url(string $lang): string
{
    $uri = service('uri');
    $segments = $uri->getSegments();

    if (! empty($segments)) {
        $segments[0] = $lang;
    } else {
        $segments = [$lang];
    }

    return base_url(implode('/', $segments));
}
