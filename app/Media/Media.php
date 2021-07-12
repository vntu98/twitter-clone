<?php

namespace App\Media;

use Spatie\MediaLibrary\MediaCollections\Models\Media as ModelsMedia;

class Media extends ModelsMedia
{
    public function type()
    {
        return MimeTypes::type($this->mime_type);
    }
}