<?php

namespace Modera\BackendOnSteroidsBundle\Contributions;

use Sli\ExpanderBundle\Ext\ContributorInterface;

/**
 * @author    Sergei Vizel <sergei.vizel@modera.org>
 * @copyright 2014 Modera Foundation
 */
class ClassLoaderMappingsProvider implements ContributorInterface
{
    private $items;

    public function __construct()
    {
        $this->items = array(
            'Modera.backend.backendonsteroids' => '/bundles/moderabackendonsteroids/js'
        );
    }

    /**
     * @inheritDoc
     */
    public function getItems()
    {
        return $this->items;
    }
}
