<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // post 1
        Comment::create([
            'user_id' => 2,
            'post_id' => 1,
            'content' => 'Ziet er goed uit.',
        ]);
        Comment::create([
            'user_id' => 4,
            'post_id' => 1,
            'content' => 'Wat een leuk plaatje dit.',
        ]);
        Comment::create([
            'user_id' => 3,
            'post_id' => 1,
            'content' => 'Ik zal er is een keer langs gaan.',
        ]);

        // post 2 - no comments

        // post 3
        Comment::create([
            'user_id' => 2,
            'post_id' => 3,
            'content' => 'Wat een mooi cadeau!',
        ]);

        // post 4
        Comment::create([
            'user_id' => 5,
            'post_id' => 4,
            'content' => 'Vivamus eget enim sem. Integer ut turpis libero. Morbi finibus tellus quis quam dictum laoreet. Sed vel dui tristique, iaculis elit at, consequat ipsum.',
        ]);
        Comment::create([
            'user_id' => 2,
            'post_id' => 4,
            'content' => 'Aliquam in scelerisque risus.',
        ]);
        Comment::create([
            'user_id' => 7,
            'post_id' => 4,
            'content' => 'Quisque id semper diam. Sed interdum, nisl quis condimentum imperdiet, enim nisi pharetra odio, vitae pretium magna magna et elit. Fusce eu neque vulputate sem tempus tempor. ',
        ]);
        Comment::create([
            'user_id' => 3,
            'post_id' => 4,
            'content' => 'Fusce eu neque vulputate sem tempus tempor. ',
        ]);

        // post 5
        Comment::create([
            'user_id' => 2,
            'post_id' => 5,
            'content' => 'Curabitur porta tincidunt odio. Aenean rhoncus dui nunc, in dignissim ligula blandit nec. Mauris sit amet vestibulum eros. Nam accumsan commodo ante, id efficitur mi dictum eu.',
        ]);

        // post 6
        Comment::create([
            'user_id' => 2,
            'post_id' => 6,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies consequat turpis quis blandit. Nullam non justo ligula. Aenean sed nibh a metus ultrices maximus vel eu lectus. Curabitur porta tincidunt odio. Aenean rhoncus dui nunc, in dignissim ligula blandit nec. Mauris sit amet vestibulum eros. Nam accumsan commodo ante, id efficitur mi dictum eu.',
        ]);

        // post 7
        Comment::create([
            'user_id' => 2,
            'post_id' => 7,
            'content' => 'Donec ullamcorper enim lacinia, pharetra ligula id, dictum nunc.',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 7,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper enim vel commodo tincidunt. Quisque consequat dapibus augue, venenatis rhoncus erat fringilla placerat. Nam et bibendum dui. Proin porttitor elit in libero dignissim, nec dapibus urna scelerisque.',
        ]);
        Comment::create([
            'user_id' => 4,
            'post_id' => 7,
            'content' => 'Curabitur porta tincidunt odio. Aenean rhoncus dui nunc, in dignissim ligula blandit nec. Mauris sit amet vestibulum eros.',
        ]);
        Comment::create([
            'user_id' => 6,
            'post_id' => 7,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies consequat turpis quis blandit. Nullam non justo ligula. Aenean sed nibh a metus ultrices maximus vel eu lectus. Curabitur porta tincidunt odio. Aenean rhoncus dui nunc, in dignissim ligula blandit nec. Mauris sit amet vestibulum eros. Nam accumsan commodo ante, id efficitur mi dictum eu.',
        ]);
        Comment::create([
            'user_id' => 7,
            'post_id' => 7,
            'content' => 'Quisque commodo elementum erat vel bibendum. Proin et justo tellus. Duis molestie tristique nisl. Fusce in maximus orci. Morbi id velit nec eros tempus porttitor vitae nec magna. Pellentesque tempor ac dolor vel accumsan. Donec luctus venenatis dolor eu eleifend. Quisque in justo ac risus dignissim vulputate. Duis ornare ornare justo, id consequat justo convallis nec. Donec quis ex auctor, maximus nulla ac, lacinia sapien. Praesent quis tincidunt eros.',
        ]);

        // post 8 - no comments

        // post 9
        Comment::create([
            'user_id' => 2,
            'post_id' => 9,
            'content' => 'Quisque commodo elementum erat vel bibendum. Proin et justo tellus. Duis molestie tristique nisl. Fusce in maximus orci. Morbi id velit nec eros tempus porttitor vitae nec magna. Pellentesque tempor ac dolor vel accumsan. Donec luctus venenatis dolor eu eleifend. Quisque in justo ac risus dignissim vulputate.',
        ]);
        Comment::create([
            'user_id' => 5,
            'post_id' => 9,
            'content' => 'Pellentesque tempor ac dolor vel accumsan. Donec luctus venenatis dolor eu eleifend. Quisque in justo ac risus dignissim vulputate.',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 9,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies consequat turpis quis blandit. Nullam non justo ligula. Aenean sed nibh a metus ultrices maximus vel eu lectus. Curabitur porta tincidunt odio. Aenean rhoncus dui nunc, in dignissim ligula blandit nec. Mauris sit amet vestibulum eros. Nam accumsan commodo ante, id efficitur mi dictum eu.',
        ]);

        // post 10 - no comments

    }
}
