<?php

/*
 * Copyright (c) 2020 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\EntityImportBundle\Source;

interface SourceInterface
{
    public function getFile(): string;

    public function getMapping(): array;

    public function getData(): array;

    public function applyMapping($data): void;
}