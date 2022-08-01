<?php

namespace Scraper\ScraperJeuxVideo\Model;

class Category
{
    public ?int $id      = null;
    public ?string $name = null;
    /** @var array<int, Type> */
    public array $types = [];

    public function addType(Type $type): self
    {
        $this->types[] = $type;
        return $this;
    }
}
