<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="games/{id}/{machineId}/light")
 */
final class JeuxVideoGameLightRequest extends JeuxVideoRequest
{
    protected int $id;
    protected int $machineId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getMachineId(): int
    {
        return $this->machineId;
    }

    public function setMachineId(int $machineId): self
    {
        $this->machineId = $machineId;
        return $this;
    }

    protected function getPath(): string
    {
        return 'games/' . $this->id . '/' . $this->machineId . '/light';
    }
}
