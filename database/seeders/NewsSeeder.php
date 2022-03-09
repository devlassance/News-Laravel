<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        News::create([
            'title' => 'Mauris vulputate',
            'description' => 'Maecenas et ultrices mi. Donec in feugiat nisi, quis imperdiet odio.',
            'text' => 'Integer aliquam, est eu semper rhoncus, lectus neque consectetur libero, a efficitur lorem neque id mi. Etiam mollis consectetur mi, ac ultrices elit tristique at. Vivamus sagittis quis nisl eget faucibus. Vivamus ultrices metus purus, id aliquet ante semper a. Nullam feugiat risus sit amet ante euismod, vel ultricies mauris interdum. Donec pellentesque urna et rhoncus porttitor. Vivamus vel libero ut arcu pulvinar hendrerit. Quisque interdum ipsum consequat odio mollis pharetra. Vestibulum eget sem tempus, tincidunt velit vel, elementum eros.',
            'image' => '1.png',
        ]);

        News::create([
            'title' => 'Donec vitae',
            'description' => 'Suspendisse felis orci, vulputate nec tortor non, hendrerit porta augue.',
            'text' => 'Integer aliquam, est eu semper rhoncus, lectus neque consectetur libero, a efficitur lorem neque id mi. Etiam mollis consectetur mi, ac ultrices elit tristique at. Vivamus sagittis quis nisl eget faucibus. Vivamus ultrices metus purus, id aliquet ante semper a. Nullam feugiat risus sit amet ante euismod, vel ultricies mauris interdum. Donec pellentesque urna et rhoncus porttitor. Vivamus vel libero ut arcu pulvinar hendrerit. Quisque interdum ipsum consequat odio mollis pharetra. Vestibulum eget sem tempus, tincidunt velit vel, elementum eros.',
            'image' => '2.png',
        ]);

        News::create([
            'title' => 'Magna dictum',
            'description' => 'Aliquam est purus, faucibus sit amet. semper eu ultrices vel, placerat a odio',
            'text' => 'Integer aliquam, est eu semper rhoncus, lectus neque consectetur libero, a efficitur lorem neque id mi. Etiam mollis consectetur mi, ac ultrices elit tristique at. Vivamus sagittis quis nisl eget faucibus. Vivamus ultrices metus purus, id aliquet ante semper a. Nullam feugiat risus sit amet ante euismod, vel ultricies mauris interdum. Donec pellentesque urna et rhoncus porttitor. Vivamus vel libero ut arcu pulvinar hendrerit. Quisque interdum ipsum consequat odio mollis pharetra. Vestibulum eget sem tempus, tincidunt velit vel, elementum eros.',
            'image' => '3.png',
        ]);

        News::create([
            'title' => 'Mauris vulputate',
            'description' => 'Maecenas et ultrices mi. Donec in feugiat nisi, quis imperdiet odio.',
            'text' => 'Integer aliquam, est eu semper rhoncus, lectus neque consectetur libero, a efficitur lorem neque id mi. Etiam mollis consectetur mi, ac ultrices elit tristique at. Vivamus sagittis quis nisl eget faucibus. Vivamus ultrices metus purus, id aliquet ante semper a. Nullam feugiat risus sit amet ante euismod, vel ultricies mauris interdum. Donec pellentesque urna et rhoncus porttitor. Vivamus vel libero ut arcu pulvinar hendrerit. Quisque interdum ipsum consequat odio mollis pharetra. Vestibulum eget sem tempus, tincidunt velit vel, elementum eros.',
            'image' => '1.png',
        ]);
    }
}
