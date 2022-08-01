<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class GameSearch
{
    public ?int $id       = null;
    public ?int $category = null;
    public ?int $type     = null;
    public ?string $title = null;
    /** @var array<int, int> */
    public array $machines = [];
    /** @var array<int, int> */
    public array $genres        = [];
    public ?string $releaseDate = null;
    public ?string $coverUrl    = null;

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
