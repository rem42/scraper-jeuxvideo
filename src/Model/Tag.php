<?php

namespace Scraper\ScraperJeuxVideo\Model;

class Tag
{
    /** @var array<int, Machine> */
    public array $machines = [];
    /** @var array<int, Event> */
    public array $events = [];
    /** @var array<int, Genre> */
    public array $genres = [];
    /** @var array<int, Theme> */
    public array $themes = [];
    /** @var array<int, Mode> */
    public array $modes = [];
    /** @var array<int, Chronicle> */
    public array $chronicles = [];

    public function addMachine(Machine $machine): self
    {
        $this->machines[] = $machine;
        return $this;
    }

    public function addEvent(Event $event): self
    {
        $this->events[] = $event;
        return $this;
    }

    public function addGenre(Genre $genre): self
    {
        $this->genres[] = $genre;
        return $this;
    }

    public function addTheme(Theme $theme): self
    {
        $this->themes[] = $theme;
        return $this;
    }

    public function addMode(Mode $mode): self
    {
        $this->modes[] = $mode;
        return $this;
    }

    public function addChronicle(Chronicle $chronicle): self
    {
        $this->chronicles[] = $chronicle;
        return $this;
    }
}
