<?php

/*
 * Copyright (c) 2020 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\EntityImportBundle\Event;

use Contao\Model;
use HeimrichHannot\EntityImportBundle\Source\SourceInterface;
use Symfony\Component\EventDispatcher\Event;

class AfterImportEvent extends Event
{
    public const NAME = 'huh.entity_import.after_import_event';

    /**
     * @var array
     */
    private $items;
    /**
     * @var Model
     */
    private $configModel;
    /**
     * @var SourceInterface
     */
    private $source;

    /**
     * AfterImportEvent constructor.
     */
    public function __construct(array $items, Model $configModel, SourceInterface $source)
    {
        $this->items = $items;
        $this->configModel = $configModel;
        $this->source = $source;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items)
    {
        $this->items = $items;
    }
}
