<?php

namespace App;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

class LanguageFilter implements FilterInterface
{
    protected $languageGenerator;
    public function __construct(Translator $languageGenerator)
    {
        $this->languageGenerator= $languageGenerator;
    }

    public function transform($item, Builder $builder)
    {
        if (isset($item['header'])) {
        $item['header'] = $this->languageGenerator->trans($item['header']);
        }
        if (isset($item['text'])) {
        $item['text'] = $this->languageGenerator->trans($item['text']);
        }
        return $item;
    }
}