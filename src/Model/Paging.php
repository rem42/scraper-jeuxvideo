<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Paging
{
    public ?int $page           = null;
    public ?int $perPage        = null;
    public ?int $itemCount      = null;
    public ?int $totalPageCount = null;
    public ?int $totalItemCount = null;
}
