<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Support
{
    public ?string $type  = null;
    public ?string $label = null;
    public ?string $title = null;
    /** @var array<int, StoreWebsite> */
    public array $stores = [];

    public function addStore(StoreWebsite $store): self
    {
        $this->stores[] = $store;
        return $this;
    }
}
