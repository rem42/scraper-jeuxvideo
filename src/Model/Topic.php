<?php

namespace Scraper\ScraperJeuxVideo\Model;

class Topic
{
    public ?int $id                 = null;
    public ?string $title           = null;
    public ?Author $author          = null;
    public ?string $lastMessageDate = null;
    public ?string $flag            = null;
    public ?int $nbAnswers          = null;
}
