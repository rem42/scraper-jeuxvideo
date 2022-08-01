<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Api;

use Scraper\ScraperJeuxVideo\Model\GameDetails;

final class JeuxVideoGameDetailsApi extends AbstractJeuxVideoApi
{
    protected function getType(): string
    {
        return GameDetails::class;
    }
}
