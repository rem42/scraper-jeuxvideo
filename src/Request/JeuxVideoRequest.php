<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::GET, scheme: Scheme::HTTPS, host: 'api.jeuxvideo.com', path: 'v4/')]
abstract class JeuxVideoRequest extends ScraperRequest implements RequestHeaders
{
    protected string $path = '';
    protected string $method = 'GET';
    protected string $host = 'api.jeuxvideo.com';

    public function __construct(
        protected string $partnerKey,
        protected string $secretKey
    ) {}

    public function getHeaders(): array
    {
        return [
            'Jvc-Authorization' => $this->getAuthorization(),
        ];
    }

    abstract protected function getPath(): string;

    private function getAuthorization(): string
    {
        $dateTime = new \DateTime();
        $timestamp = $dateTime->format('Y-m-d\TH:i:s\Z');
        $string = $this->partnerKey . "\n" . $timestamp . "\n" . $this->method . "\n" . $this->host . "\n/v4/" . $this->getPath() . "\n";

        if ($this instanceof RequestQuery) {
            $query = $this->getQuery();
            sort($query);
            $string .= http_build_query($query);
        }

        $signature = hash_hmac('sha256', $string, $this->secretKey);
        return 'PartnerKey=' . $this->partnerKey . ', Signature=' . $signature . ', Timestamp=' . $dateTime->format('Y-m-d\TH:i:s\Z');
    }
}
