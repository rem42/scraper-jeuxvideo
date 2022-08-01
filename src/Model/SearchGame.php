<?php

namespace Scraper\ScraperJeuxVideo\Model;

class SearchGame extends AbstractSearch
{
    /** @var array<int, GameSearch> */
    public array $items = [];

    public function addItem(GameSearch $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
