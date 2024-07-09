<?php

class Social {
    private static $socialLinks = [
        [
            'wow-delay' => '.2s',
            'url' => 'https://www.facebook.com/people/MATEC-2024/61561885798386/',
            'icon' => 'fa-facebook',
            'target' => '_blank'
        ],
        [
            'wow-delay' => '.35s',
            'url' => 'https://www.instagram.com/matecofficial',
            'icon' => 'fa-instagram',
            'target' => '_blank'
        ],/*
        [
            'wow-delay' => '.5s',
            'url' => 'https://www.tiktok.com/@matec.official',
            'icon' => 'fa-linkedin',
            'target' => '_blank'
        ],
        [
            'wow-delay' => '.65s',
            'url' => 'https://instagram.com',
            'icon' => 'fa-youtube-play',
            'target' => '_blank'
        ]*/
    ];

    public static function getAll() {
        return self::$socialLinks;
    }
}
