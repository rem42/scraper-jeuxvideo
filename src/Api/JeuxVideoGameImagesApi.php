<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Api;

use Scraper\ScraperJeuxVideo\Model\Images;

final class JeuxVideoGameImagesApi extends AbstractJeuxVideoApi
{
    protected function getType(): string
    {
        return Images::class;
    }
}
