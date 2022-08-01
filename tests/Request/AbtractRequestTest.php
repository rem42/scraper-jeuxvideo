<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Tests\Request;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Client;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
abstract class AbtractRequestTest extends TestCase
{
    private MockObject|ResponseInterface $responseInterface;

    protected function getClient(string $fixture): Client
    {
        $this->responseInterface = $this->createMock(ResponseInterface::class);
        $this->responseInterface
            ->method('getStatusCode')->willReturn(200);
        $this->responseInterface
            ->method('getContent')->willReturn(file_get_contents(__DIR__ . '/../fixtures/' . $fixture))
        ;
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient
            ->method('request')->willReturnCallback([$this, 'requestCallback'])
        ;

        return new Client($httpClient);
    }

    public function requestCallback(string $method, string $url, array $options): ResponseInterface
    {
        $this->assertArrayHasKey('headers', $options);
        $this->assertArrayHasKey('Jvc-Authorization', $options['headers']);
        $this->assertStringContainsString('PartnerKey=partner', $options['headers']['Jvc-Authorization']);
        $this->assertStringContainsString('Signature=', $options['headers']['Jvc-Authorization']);
        $this->assertStringContainsString('Timestamp=', $options['headers']['Jvc-Authorization']);

        return $this->responseInterface;
    }
}
