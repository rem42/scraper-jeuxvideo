<?php

declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Tests\Request;

use Scraper\ScraperJeuxVideo\Model\Game;
use Scraper\ScraperJeuxVideo\Request\JeuxVideoGameRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Fiche dont `targeting` contient des tableaux au lieu de chaînes (ex. 67668-220).
 *
 * @internal
 */
final class JeuxVideoGameArrayTargetingRequestTest extends AbstractRequestTestCase
{
    public function testJeuxVideoGameWithArrayTargeting(): void
    {
        $client = $this->getClient('game_array_targeting.json');

        $request = new JeuxVideoGameRequest('partner', 'hash');
        $request
            ->setId(67668)
            ->setMachineId(220)
        ;

        /** @var Game $result */
        $result = $client->send($request);

        $this->assertInstanceOf(Game::class, $result);
        $this->assertSame([10773], $result->targeting->contenuId);
        $this->assertSame(['ngc'], $result->targeting->machine);
        $this->assertSame('jeux', $result->targeting->fiche);
    }

    public function requestCallback(string $method, string $url, array $options): ResponseInterface
    {
        $this->assertEquals('GET', $method);
        $this->assertEquals('https://api.jeuxvideo.com/v4/games/67668/220', $url);
        $this->assertIsArray($options);

        return parent::requestCallback($method, $url, $options);
    }
}
