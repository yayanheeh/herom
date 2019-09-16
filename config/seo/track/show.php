<?php

return [
    [
        'property' => 'og:url',
        'content' =>  '{{URL.TRACK}}',
    ],
    [
        'property' => 'og:title',
        'content' => '{{TRACK.NAME}}',
    ],
    [
        'property' => 'og:description',
        'content' => '{{TRACK.NAME}}, a song by {{TRACK.ALBUM.ARTIST.NAME}} on {{SITE_NAME}}',
    ],
    [
        'property' => 'og:type',
        'content' => 'music.song',
    ],
    [
        'property' => 'music.duration',
        'content' => '{{TRACK.DURATION}}',
    ],
    [
        'property' => 'music:album:track',
        'content' => '{{TRACK.NUMBER}}',
    ],
    [
        'property' => 'music:release_date',
        'content' => '{{TRACK.ALBUM.RELEASE_DATE}}',
    ],
    [
        'property' => 'og:image',
        'content' => '{{TRACK.ALBUM.IMAGE}}',
    ],
    [
        'property' => 'og:image:width',
        'content' => '300',
    ],
    [
        'property' => 'og:image:height',
        'content' => '300',
    ],
    [
        'nodeName' => 'script',
        'type' => 'application/ld+json',
        '_text' => [
            "@context" => "http://schema.org",
            "@type" => "MusicRecording",
            "@id" => "{{URL.TRACK}}",
            "url" => "{{URL.TRACK}}",
            "name" => "{{TRACK.NAME}}",
            "description" => "{{TRACK.NAME}}, a song by {{TRACK.ALBUM.ARTIST.NAME}} on {{SITE_NAME}}",
            "datePublished" => "{{TRACK.ALBUM.RELEASE_DATE}}"
        ]
    ]
];