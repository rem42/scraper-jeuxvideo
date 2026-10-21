<?php

declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Targeting
{
    // L'API renvoie tantôt une chaîne ("ps5|ps4"), tantôt un tableau (["ps5"]) selon la fiche.

    /** @var string|array<mixed>|null */
    public string|array|null $contenuId = null;

    /** @var string|array<mixed>|null */
    public string|array|null $genre = null;

    /** @var string|array<mixed>|null */
    public string|array|null $machine = null;

    /** @var string|array<mixed>|null */
    public string|array|null $editeur = null;

    /** @var string|array<mixed>|null */
    public string|array|null $jeu = null;

    /** @var string|array<mixed>|null */
    public string|array|null $contentType = null;

    /** @var string|array<mixed>|null */
    public string|array|null $rubrique = null;

    /** @var string|array<mixed>|null */
    public string|array|null $fiche = null;

    /** @var string|array<mixed>|null */
    public string|array|null $section = null;
}
