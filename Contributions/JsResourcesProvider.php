<?php

namespace Melk\MJRBoxSelectBundle\Contributions;

use Sli\ExpanderBundle\Ext\ContributorInterface;

/**
 * @author    Michael Potienko <potienko.m@gmail.com>
 * @copyright 2016 Modera Foundation
 */
class JsResourcesProvider implements ContributorInterface
{
    /**
     * @inheritDoc
     */
    public function getItems()
    {
        return array(
            '/bundles/melkmjrboxselect/js/BoxSelect.js',
        );
    }
}