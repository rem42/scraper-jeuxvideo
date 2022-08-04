<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Request;

use Scraper\Scraper\Attribute\Scraper;

#[Scraper(path: 'general/config')]
final class JeuxVideoConfigRequest extends JeuxVideoRequest
{
    protected function getPath(): string
    {
        return 'general/config';
    }
}
