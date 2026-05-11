<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class TrustPilotService
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
            $testimonialSection = $crawler->filter('.x7ep2pv .xh8yej3');

            $testimonials = $testimonialSection->each(function (Crawler $node) {
                try {
                    $name = $node->filter('.typography_heading-xxs__QKBS8')->text();
                    $title = $node->filter('.styles_reviewContent__0Q2Tg h2')->text();
                    $comments = $node->filter('.typography_body-l__KUYFJ')->text();
                    $location = $node->filter('div.typography_body-m__xgxZ_ span')->text();
                    $dateOfExperience = $node->filter('p.typography_body-m__xgxZ_')->text();

                    
                    return [
                        'title' => trim($title),
                        'name' => trim($name),
                        'comments' => trim($comments),
                        'location' => trim($location),
                        'dateOfExperience'=>trim($dateOfExperience)
                    ];
                } catch (\Exception $e) {
                    // Skip any testimonials that cannot be parsed
                    return null;
                }
            });

            // Filter out null values
            return (array_filter($testimonials));
        }

        throw new \Exception('Failed to fetch the page with status: ' . $response->status());
    }
}
