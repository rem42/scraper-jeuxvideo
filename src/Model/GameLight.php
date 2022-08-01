<?php

namespace Scraper\ScraperJeuxVideo\Model;

class GameLight
{
    public ?int $id       = null;
    public ?int $category = null;
    public ?int $type     = null;
    public ?string $title = null;
    /** @var array<int, int> */
    public array $machines = [];
    /** @var array<int, int> */
    public array $genres        = [];
    public ?string $coverUrl    = null;
    public ?string $releaseDate = null;

    public function addMachine(int $machine): self
    {
        $this->machines[] = $machine;
        return $this;
    }

    public function addGenre(int $genre): self
    {
        $this->genres[] = $genre;
        return $this;
    }
}
