<?php

namespace Creode\BulkUploadField\Concerns;

trait HasDropLabel
{
    /**
     * Label used when dropping files.
     *
     * @var string
     */
    public $dropLabel = 'Drop files here...';

    /**
     * Label to display when adding files.
     *
     * @param string $label
     * @return void
     */
    public function dropLabel($label)
    {
        $this->dropLabel = $label;
        return $this;
    }
}
