<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Wikis
{
    public ?Paging $paging = null;
    /** @var array<int, Wiki> */
    public array $items = [];

    public function addItem(Wiki $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
