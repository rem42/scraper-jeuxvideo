<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class GameDetails
{
    public ?string $content       = null;
    public ?string $releaseDateFr = null;
    public ?string $website       = null;
    /** @var array<int, int> */
    public array $genres = [];
    /** @var array<int, int> */
    public array $themes = [];
    /** @var array<int, string> */
    public array $publishers = [];

    public function addGenre(int $genre): self
    {
        $this->genres[] = $genre;
        return $this;
    }

    public function addTheme(int $theme): self
    {
        $this->themes[] = $theme;
        return $this;
    }

    public function addPublisher(string $publisher): self
    {
        $this->publishers[] = $publisher;
        return $this;
    }
}
