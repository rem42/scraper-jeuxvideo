<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Game extends GameLight
{
    public ?string $bgImage = null;
    public ?Review $reviews = null;
    /** @var array<int, int> */
    public array $publishers     = [];
    public ?News $news           = null;
    public ?Videos $videos       = null;
    public ?Images $images       = null;
    public ?Wikis $wikis         = null;
    public ?Topics $topics       = null;
    public ?Store $stores        = null;
    public ?string $webUrl       = null;
    public ?string $content      = null;
    public ?Targeting $targeting = null;

    public function addPublisher(int $publisher): self
    {
        $this->publishers[] = $publisher;
        return $this;
    }
}
