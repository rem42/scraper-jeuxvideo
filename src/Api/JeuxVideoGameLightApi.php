<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Api;

use Scraper\ScraperJeuxVideo\Model\GameLight;

final class JeuxVideoGameLightApi extends AbstractJeuxVideoApi
{
    protected function getType(): string
    {
        return GameLight::class;
    }
}
