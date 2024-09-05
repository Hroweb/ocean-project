<?php

namespace App\Helpers;

class Helper {
    public static function sortPageData($data)
    {
        return $data->map(function ($items, $subtype) {
            $wordsToCheck = ['team_members', 'gallery_images', 'gallery_thumbs'];
            if (array_reduce($wordsToCheck, function ($carry, $word) use ($subtype) {
                return $carry || str_contains($subtype, $word);
            }, false)) {
                return $items;
            }else{
                return $items->keyBy('meta_key')->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'meta_key' => $item->meta_key,
                        'meta_value' => $item->meta_value,
                        'subtype' => $item->subtype,
                        'created' => $item->created_at
                    ];
                });
            }
        });
    }

    public static function deleteDirectory($dirPath): void
    {
        if (!is_dir($dirPath)) {
            return;
            //throw new \Exception("$dirPath must be a directory");
        }
        if (!str_ends_with($dirPath, '/')) {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDirectory($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }
}
