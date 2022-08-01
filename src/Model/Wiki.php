<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Wiki
{
    public ?int $id             = null;
    public ?int $category       = null;
    public ?int $type           = null;
    public ?string $title       = null;
    public ?bool $isEditor      = null;
    public ?string $publishDate = null;
    public ?string $imageUrl    = null;
    /** @var array<int, int> */
    public array $machines = [];

    public function addMachine(int $machine): self
    {
        $this->machines[] = $machine;
        return $this;
    }
}
