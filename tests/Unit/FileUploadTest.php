<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Str;

class FileUploadTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_original_filename_upload()
    {
        $fileName = 'logo.jpg';

        $response = $this->post('portfolios', [
            'name' => 'Some Name',
            'description' => 'some description',
            'date' => '2020-10-10',
            'images' => [
                0 => UploadedFile::fake()->image($fileName, 1000, 1000)
            ]
            ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('images',[
            'src' => $fileName
        ]);

    }

    /**
     * Testing File Upload Resize
     *
     * @return void
     */
    public function test_upload_resize()
    {
        $fileName = Str::random(8) . '.jpg';

        $response = $this->post('portfolios', [
            'name' => 'Some Name',
            'description' => 'some description',
            'date' => '2020-10-10',
            'images' => [
                0 => UploadedFile::fake()->image($fileName, 1000, 1000)
            ]
        ]);

        $response->assertStatus(200);

    }
}
