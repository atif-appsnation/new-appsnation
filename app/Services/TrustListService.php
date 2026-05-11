<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class TrustListService
{
    public function scrapeTestimonials($url)
    {
        $headers = [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
        ];

        // Fetch the page content
        $response = Http::withHeaders($headers)->get($url);

        if ($response->status() === 200) {
            $html = $response->body();

            // Parse the HTML using Symfony's Crawler
            $crawler = new Crawler($html);

            // Locate the testimonial section
            $testimonialSection = $crawler->filter('#reviews .card');

            $testimonials = $testimonialSection->each(function (Crawler $node) {
                try {
                    $name = $node->filter('.jury-name')->text();
                    $date = $node->filter('.review-date')->text();
                    $title = $node->filter('.review-heading h2')->text();
                    $comment = $node->filter('.review-text')->text();


                    return [
                        'title' => trim($title),
                        'name' => trim($name),
                        'date' => trim($date),
                        'comment' => trim($comment),
                    ];
                } catch (\Exception $e) {
                    return null;
                }
            });

            // Filter out null values
            return (array_filter($testimonials));
        }

        throw new \Exception('Failed to fetch the page with status: ' . $response->status());
    }
}
