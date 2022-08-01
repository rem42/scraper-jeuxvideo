<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Video
{
    public ?int $id             = null;
    public ?int $category       = null;
    public ?int $type           = null;
    public ?string $title       = null;
    public ?string $publishDate = null;
    public ?string $imageUrl    = null;
    public ?string $webUrl      = null;
    /** @var array<int, int> */
    public array $machines           = [];
    public ?RelatedGame $relatedGame = null;
    public ?Targeting $targeting     = null;
    /** @var array<int, VideoUrl> */
    public array $videoUrls       = [];
    public ?string $dailymotionId = null;
    public ?int $duration         = null;
    public ?bool $isContent       = null;
    public ?string $commentState  = null;
    public ?int $chronicle        = null;

    public function addMachine(int $machine): self
    {
        $this->machines[] = $machine;
        return $this;
    }

    public function addVideoUrl(VideoUrl $videoUrl): self
    {
        $this->videoUrls[] = $videoUrl;
        return $this;
    }
}
