<?php

namespace Tests\Traits;

use Illuminate\Support\Facades\File;

trait SandboxesTests
{
    private static function createSandbox(): void
    {
        config(['Sound.album_cover_dir' => 'sandbox/img/covers/']);
        config(['Sound.artist_image_dir' => 'sandbox/img/artists/']);

        @mkdir(public_path(config('Sound.album_cover_dir')), 0755, true);
        @mkdir(public_path(config('Sound.artist_image_dir')), 0755, true);
    }

    private static function destroySandbox(): void
    {
        File::deleteDirectory(public_path('sandbox'));
    }
}
