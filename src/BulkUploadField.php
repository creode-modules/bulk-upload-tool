<?php

namespace Creode\BulkUploadField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\AcceptsTypes;
use Creode\BulkUploadField\Concerns\HasDropLabel;

class BulkUploadField extends Field
{
    use AcceptsTypes;
    use HasDropLabel;
    
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'bulk-upload-field';

    // TODO: Allow multiple.

    // TODO: Max Files.

    // public function uploadLabel

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return array_merge(parent::jsonSerialize(), [
            // 'thumbnailUrl' => $this->resolveThumbnailUrl(),
            // 'previewUrl' => $this->resolvePreviewUrl(),
            // 'downloadable' => $this->downloadsAreEnabled && isset($this->downloadResponseCallback) && ! empty($this->value),
            // 'deletable' => isset($this->deleteCallback) && $this->deletable,
            'acceptedTypes' => $this->acceptedTypes,
            'dropLabel' => $this->dropLabel,
        ]);
    }
}
