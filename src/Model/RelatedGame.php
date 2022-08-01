<?php

namespace Scraper\ScraperJeuxVideo\Model;

class RelatedGame
{
    public ?int $id       = null;
    public ?string $title = null;
    /** @var array<int, int> */
    public array $genres = [];
    /** @var array<int, int> */
    public array $publishers = [];

    public function addGenre(int $genre): self
    {
        $this->genres[] = $genre;
        return $this;
    }

    public function addPublisher(int $publisher): self
    {
        $this->publishers[] = $publisher;
        return $this;
    }
}
