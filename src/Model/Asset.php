<?php declare(strict_types=1);

namespace Scraper\ScraperJeuxVideo\Model;

class Asset
{
    /** @var array<int, Css> */
    public array $css = [];
    /** @var array<int, Js> */
    public array $js = [];

    public function addCss(Css $css): self
    {
        $this->css[] = $css;
        return $this;
    }

    public function addJs(Js $j): self
    {
        $this->js[] = $j;
        return $this;
    }
}
