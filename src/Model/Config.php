<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Config
{
    public ?Customization $customizations = null;
    public ?Asset $assets = null;
    /** @var array<int, Category> */
    public array $categories = [];
    public ?Tag $tags = null;
    /** @var array<int, Badge> */
    public array $badges = [];
    /** @var array<int, Smiley> */
    public array $smileys = [];
    /** @var array<int, Store> */
    public array $stores = [];

    public function addCategory(Category $category): self
    {
        $this->categories[] = $category;
        return $this;
    }

    public function addBadge(Badge $badge): self
    {
        $this->badges[] = $badge;
        return $this;
    }

    public function addSmiley(Smiley $smiley): self
    {
        $this->smileys[] = $smiley;
        return $this;
    }

    public function addStore(Store $store): self
    {
        $this->stores[] = $store;
        return $this;
    }
}
