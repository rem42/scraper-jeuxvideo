<?php

namespace Scraper\ScraperJeuxVideo\Model;

class Stores
{
    public ?Paging $paging         = null;
    public ?StoresDetails $details = null;
    /** @var array<int, Store> */
    public array $items = [];

    public function addItem(Store $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
