<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Topics
{
    public ?Paging $paging        = null;
    public ?TopicsDetail $details = null;
    /** @var array<int, Topic> */
    public array $items = [];

    public function addItem(Topic $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
