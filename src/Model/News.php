<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class News
{
    public ?Paging $paging = null;
    /** @var array<int, NewsItem> */
    public array $items = [];

    public function addItem(NewsItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
