<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Tests\Request;

use Scraper\ScraperJeuxVideo\Model\SearchGame;
use Scraper\ScraperJeuxVideo\Request\JeuxVideoSearchGameRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
final class JeuxVideoSearchGameRequestTest extends AbtractRequestTest
{
    public function testJeuxVideoSearchGameRequest(): void
    {
        $client = $this->getClient('search_game.json');

        $request = new JeuxVideoSearchGameRequest('partner', 'hash');
        $request
            ->setQuery('horizon%20zero')
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(SearchGame::class, $result);
    }

    public function requestCallback(string $method, string $url, array $options): ResponseInterface
    {
        $this->assertEquals('GET', $method);
        $this->assertEquals('https://api.jeuxvideo.com/v4/search/games', $url);
        $this->assertIsArray($options);
        $this->assertArrayHasKey('query', $options);
        $this->assertArrayHasKey('page', $options['query']);
        $this->assertArrayHasKey('perPage', $options['query']);
        $this->assertArrayHasKey('q', $options['query']);
        $this->assertEquals('horizon%20zero', $options['query']['q']);

        return parent::requestCallback($method, $url, $options); // TODO: Change the autogenerated stub
    }
}
