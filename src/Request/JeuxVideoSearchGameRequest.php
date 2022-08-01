<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;

/**
 * @Scraper(path="search/games")
 */
final class JeuxVideoSearchGameRequest extends JeuxVideoRequest implements RequestQuery
{
    protected int $page     = 1;
    protected int $perPage  = 20;
    protected string $query = '';

    public function getQuery(): array
    {
        return [
            'page'    => $this->page,
            'perPage' => $this->perPage,
            'q'       => $this->query,
        ];
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;
        return $this;
    }

    public function setPage(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function setPerPage(int $perPage): self
    {
        $this->perPage = $perPage;
        return $this;
    }

    protected function getPath(): string
    {
        return 'search/games';
    }
}
