<?php

class Sitemap
{
    private $pages = [];

    public function addPage($url, $lastModified, $changeFrequency = 'monthly', $priority = '0.8') {
        $this->pages[] = [
            'url' => $url,
            'lastModified' => $lastModified,
            'changeFrequency' => $changeFrequency,
            'priority' => $priority
        ];
    }

    public function generateXML() {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset></urlset>');
        $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($this->pages as $page) {
            $url = $xml->addChild('url');
            $url->addChild('loc', htmlspecialchars($page['url']));
            $url->addChild('lastmod', $page['lastModified']);
            $url->addChild('changefreq', $page['changeFrequency']);
            $url->addChild('priority', $page['priority']);
        }

        $xml->asXML('sitemap.xml');
    }
}