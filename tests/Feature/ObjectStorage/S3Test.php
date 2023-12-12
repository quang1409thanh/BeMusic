<?php

namespace Tests\Feature\ObjectStorage;

use App\Events\LibraryChanged;
use App\Models\Song;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\Feature\TestCase;

class S3Test extends TestCase
{
    use WithoutMiddleware;

    public function setUp(): void
    {
        parent::setUp();

        $this->disableMiddlewareForAllTests();
    }

    public function testStoringASong(): void
    {
        $this->post('api/os/s3/song', [
            'bucket' => 'Sound',
            'key' => 'sample.mp3',
            'tags' => [
                'title' => 'A Sound Song',
                'album' => 'Sound Testing Vol. 1',
                'artist' => 'Sound',
                'lyrics' => "When you wake up, turn your radio on, and you'll hear this simple song",
                'duration' => 10,
                'track' => 5,
            ],
        ]);

        /** @var Song $song */
        $song = Song::query()->where('path', 's3://Sound/sample.mp3')->firstOrFail();

        self::assertSame('A Sound Song', $song->title);
        self::assertSame('Sound Testing Vol. 1', $song->album->name);
        self::assertSame('Sound', $song->artist->name);
        self::assertSame('When you wake up, turn your radio on, and you\'ll hear this simple song', $song->lyrics);
        self::assertSame(10, (int) $song->length);
        self::assertSame(5, $song->track);
    }

    public function testRemovingASong(): void
    {
        $this->expectsEvents(LibraryChanged::class);

        Song::factory()->create([
            'path' => 's3://Sound/sample.mp3',
        ]);

        $this->delete('api/os/s3/song', [
            'bucket' => 'Sound',
            'key' => 'sample.mp3',
        ]);

        self::assertDatabaseMissing(Song::class, ['path' => 's3://Sound/sample.mp3']);
    }
}
