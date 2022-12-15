<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'subject' => 'Leuk restaurant',
            'content' => 'Fusce nec magna lobortis, ultricies lacus eu, condimentum sapien. Cras faucibus massa ac purus venenatis ultrices. Cras hendrerit bibendum erat, ullamcorper consequat eros. Quisque at velit ac tortor efficitur cursus non et risus. Nunc sed hendrerit est. In rutrum mauris id enim ullamcorper, a vehicula lectus vestibulum. Sed pellentesque et augue vel vulputate. Nulla facilisi.',
        ]);

        Post::create([
            'user_id' => 3,
            'subject' => 'Geweldige vakantie',
            'content' => 'Curabitur vestibulum viverra pellentesque. Curabitur ac euismod lectus. Nullam gravida sem eleifend neque lobortis congue. Morbi pretium dignissim elit, in egestas quam elementum sed. In hac habitasse platea dictumst. Aliquam vitae erat posuere, mollis nisl id, malesuada magna. In maximus lacus at magna semper auctor.',
        ]);

        Post::create([
            'user_id' => 4,
            'subject' => 'Nieuwe auto gekregen',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla eros nec orci tincidunt congue. Nunc lacinia, nisi eu consequat ullamcorper, elit quam convallis lorem, eu congue justo metus tristique odio. Mauris ac elit neque. Maecenas ornare nisi justo, quis cursus turpis tempus ac. Proin consectetur leo erat, a aliquam nunc vestibulum sit amet.',
        ]);

        Post::create([
            'user_id' => 6,
            'subject' => 'Vanavond uit eten',
            'content' => 'Sed nec tortor vitae ante finibus condimentum. In ut elit et arcu iaculis rutrum. Fusce et dolor a ligula rutrum porttitor. Praesent neque metus, mattis ac sapien et, tincidunt molestie felis. Praesent porta mi libero, a ullamcorper erat dictum sed. Fusce volutpat lorem id est venenatis, eget convallis ligula interdum. Quisque quis scelerisque leo. Etiam tristique imperdiet velit, quis aliquet mi aliquet sit amet. Morbi id luctus sapien.',
        ]);

        Post::create([
            'user_id' => 5,
            'subject' => 'Te laat naar bed gegaan',
            'content' => 'Nam sit amet nisl velit. Etiam sapien diam, volutpat nec tempus ac, feugiat eu ante. Morbi nulla velit, semper at dui vitae, feugiat convallis nulla. Vestibulum eget neque vitae mauris convallis bibendum. Donec eros nunc, tincidunt ut sapien eu, dignissim commodo enim.',
        ]);

        Post::create([
            'user_id' => 7,
            'subject' => 'Last van hoofdpijn',
            'content' => 'Nunc eget sagittis enim. Nunc at malesuada velit. Quisque sagittis mollis facilisis. Nulla eleifend placerat sagittis. In quis varius erat. Phasellus malesuada eu nisl iaculis venenatis. Nulla quam lorem, fermentum ut turpis a, ultricies scelerisque purus. Quisque ullamcorper lorem ipsum. Curabitur convallis vel leo sit amet semper. Sed congue ipsum justo, in commodo est mattis sed.',
        ]);

        Post::create([
            'user_id' => 2,
            'subject' => 'Wat een mooie dag',
            'content' => 'Donec eros nunc, tincidunt ut sapien eu, dignissim commodo enim. Sed egestas fermentum purus. Nullam ut ligula at velit lacinia aliquet quis ac diam. Praesent ultrices enim lorem, non venenatis tellus lacinia ut. Mauris quis urna eros. Suspendisse pharetra tellus in turpis fringilla auctor.',
        ]);

        Post::create([
            'user_id' => 1,
            'subject' => 'De wedstrijd gisteren was geweldig',
            'content' => 'Curabitur ultricies sapien at leo cursus imperdiet. Nulla turpis sem, vehicula facilisis enim in, ultricies fermentum mi. Sed non est lorem. Vivamus scelerisque neque sit amet nunc aliquam, semper aliquet magna aliquam. Suspendisse viverra facilisis turpis eu sollicitudin.',
        ]);

        Post::create([
            'user_id' => 6,
            'subject' => 'Binnekort met het vliegtuig op vakantie',
            'content' => 'Proin consectetur leo erat, a aliquam nunc vestibulum sit amet. Pellentesque nec commodo nulla, vel luctus nisi. Donec rhoncus leo eros, sit amet lobortis ligula iaculis sed. Mauris ut mauris posuere, euismod felis ut, mollis leo. Nunc ligula lorem, elementum nec velit quis, egestas elementum neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc luctus elit efficitur, faucibus diam in, tempor tortor.',
        ]);

        Post::create([
            'user_id' => 3,
            'subject' => 'Nieuwe telefoon gekocht',
            'content' => 'Fusce volutpat lorem id est venenatis, eget convallis ligula interdum. Quisque quis scelerisque leo. Etiam tristique imperdiet velit, quis aliquet mi aliquet sit amet. Morbi id luctus sapien.',
        ]);
    }
}
