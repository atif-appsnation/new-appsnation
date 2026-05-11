<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class TechbehemothsService
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
            $testimonialSection = $crawler->filter('.reviews-list .review-item');


            $testimonials = $testimonialSection->each(function (Crawler $node) {
                try {
                    $name = $node->filter('span[itemprop="name"]')->text();
                    $position = $node->filter('p.author span.company')->text();
                    $date = $node->filter('.date')->text();
                    $title = $node->filter('p[itemprop="name"]')->text();
                    $comments = $node->filter('.descr')->text();
                    // $image = $node->filter('.s-img_itm')->attr('src');;

                    
                    return [
                        'title' => trim($title),
                        'name' => trim($name),
                        'date' => trim($date),
                        'position' => trim($position),
                        'comments' => trim($comments),
                        // 'image' => trim($image),

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
