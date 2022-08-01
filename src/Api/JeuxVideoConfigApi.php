<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Api;

use Scraper\ScraperJeuxVideo\Model\Config;

final class JeuxVideoConfigApi extends AbstractJeuxVideoApi
{
    protected function getType(): string
    {
        return Config::class;
    }
}
