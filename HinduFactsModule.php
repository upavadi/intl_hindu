<?php

/**
 * Hindu Facts Module
 * Copyright (C) 2024 webtrees development team
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Module;

use Fisharebest\Webtrees\Elements\CustomElement;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Registry;

class HinduFactsModule extends AbstractModule implements ModuleCustomInterface
{
    use ModuleCustomTrait;

    /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return I18N::translate('Hindu Facts');
    }

    /**
     * A sentence describing what this module does.
     *
     * @return string
     */
    public function description(): string
    {
        return I18N::translate('Adds support for Hindu genealogical facts like Gotra.');
    }

    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string
    {
        return 'webtrees development team';
    }
/**
     * Called for all *enabled* modules.
     */
    public function boot(): void
    {
        $elementFactory = Registry::elementFactory();
        $elementFactory->registerTags($this->customTags());
        $elementFactory->registerSubTags($this->customSubTags());
    }
    /**
     * The version of this module.
     *
     * @return string
     */
    public function customModuleVersion(): string
    {
        return '1.0.0';
    }

    /**
     * Additional/updated tags
     *
     * @return array<string,ElementInterface>
     */
    public function customTags(): array
    {
        return [
            'INDI:GOTRA' => new CustomElement(I18N::translate('Gotra (Hindu person lineage)')),
        ];
    }

    /**
     * Add/update/remove sub-tags from existing GEDCOM structures.
     *
     * @return array<string,array<int,array<int,string>>>
     */
    public function customSubTags(): array
    {
        return [
            'INDI' => [
                ['GOTRA', '0:1'],
				['CAST', '1:0']
            ],
        ];
    }
}