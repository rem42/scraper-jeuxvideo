<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Images
{
    public ?Paging $paging = null;
    /** @var array<int, Image> */
    public array $items = [];

    public function addItem(Image $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
