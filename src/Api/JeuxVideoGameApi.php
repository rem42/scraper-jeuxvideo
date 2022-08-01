<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Api;

use Scraper\ScraperJeuxVideo\Model\Game;

final class JeuxVideoGameApi extends AbstractJeuxVideoApi
{
    protected function getType(): string
    {
        return Game::class;
    }
}
