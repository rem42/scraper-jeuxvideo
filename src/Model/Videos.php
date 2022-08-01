<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Videos
{
    public ?Paging $paging = null;
    /** @var array<int, Video> */
    public array $items = [];

    public function addItem(Video $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
