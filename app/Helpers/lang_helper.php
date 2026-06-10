<?php

function current_lang(): string
{
    $segment = service('uri')->getSegment(1) ?: 'id';

    return in_array($segment, ['id', 'en'], true) ? $segment : 'id';
}

function lang_url(string $lang): string
{
    $uri = service('uri');
    $segments = $uri->getSegments();

    if (! empty($segments) && in_array($segments[0], ['id', 'en'], true)) {
        $segments[0] = $lang;
    } else {
        array_unshift($segments, $lang);
    }

    return base_url(implode('/', $segments));
}

function localized_url(string $path = '', ?string $lang = null): string
{
    $lang = $lang ?: current_lang();
    $path = trim($path, '/');

    return base_url($path === '' ? $lang : $lang . '/' . $path);
}

function tx(string $id, string $en, ?string $lang = null): string
{
    $lang = $lang ?: current_lang();

    return $lang === 'en' ? $en : $id;
}
