<?php

namespace Modules\ACP\Logical;

use Illuminate\Support\Facades\Storage;

class ImageControl
{
    protected bool|string $imageName    =   '';
    protected bool|string $imagePath    =   '';

    public static function uploadImagesFromHTML(string $body, string $setImageName = 'default', $setImagePath = 'default') {


        $dom = new \DOMDocument();
        $dom->encoding = 'utf-8';
        //$dom->loadHTML( utf8_decode( $sString ) ); // important!
        // Disables the standard libxml errors and enables user error handling.
        libxml_use_internal_errors(true);
        // Load data
        $dom->loadHTML(utf8_decode($body), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        // Get all images in DOM document
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $data = $img->getattribute('src');
            // If the img src is base64 encoded.
            if (strpos($data, 'data:image') === 0) {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                list($type, $extension) = explode('/', $type);
                $data = base64_decode($data);

                $imageName = ($setImageName == 'default') ? time() . $key . '.' . $extension : $setImageName . $extension ;
                //$imageName = time() . $key . '.' . $extension;
                $imagePath = ($setImagePath == 'default') ? 'uploads/images/' : $setImagePath ;
                Storage::disk('public')->put($imagePath.$imageName, $data);
                $img->removeattribute('src');
                $img->setattribute('src', asset('/storage/' . $imagePath . $imageName));
            }
        }
        return $dom->savehtml();
    }

    public function Test () {
        echo 'Test123';
    }
}
