<?php

namespace Melk\MJRBoxSelectBundle\Contributions;

use Sli\ExpanderBundle\Ext\ContributorInterface;

/**
 * @author    Michael Potienko <potienko.m@gmail.com>
 * @copyright 2016 Modera Foundation
 */
class CssResourcesProvider implements ContributorInterface
{

    /**
     * @return mixed[]
     */
    public function getItems ()
    {
        return array(
            '/bundles/melkmjrboxselect/css/BoxSelect.css',
        );
    }
}