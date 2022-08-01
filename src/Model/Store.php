<?php

namespace Scraper\ScraperJeuxVideo\Model;

class Store
{
    public ?int $id          = null;
    public ?string $name     = null;
    public ?string $imageUrl = null;

    public ?int $machine = null;
    /** @var array<int, Support> */
    public array $supports = [];

    public function addSupport(Support $support): self
    {
        $this->supports[] = $support;
        return $this;
    }
}
