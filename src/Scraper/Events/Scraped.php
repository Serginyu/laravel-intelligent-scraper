<?php

namespace Softonic\LaravelIntelligentScraper\Scraper\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Scraped
{
    use Dispatchable, SerializesModels;

    /**
     * @var ScrapeRequest
     */
    public $scrapeRequest;

    /**
     * @var array
     */
    public $data;

    /**
     * Create a new event instance.
     *
     * @param ScrapeRequest $scrapeRequest
     * @param array         $data
     */
    public function __construct(ScrapeRequest $scrapeRequest, array $data)
    {
        $this->scrapeRequest = $scrapeRequest;
        $this->data          = $data;
    }
}
