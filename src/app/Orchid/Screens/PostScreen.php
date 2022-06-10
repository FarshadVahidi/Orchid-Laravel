<?php

namespace App\Orchid\Screens;

use App\Models\Post;
use Orchid\Screen\Actions\Link;

use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class PostScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $post = Post::get();
        return [
          'posts' => $post
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Post Screen';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
            ->icon('plus')
            ->route('platform.post.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
//            Layout::table('posts', [
//                TD::set('title')
//                ->filter(TD::FILTER_TEXT)
//                ->sort()
//                ->render(function (Post $post) {
//                    return Link::make($post->title)
//                        ->route('platform.post.edit', $post);
//                }),
//
//                TD::set('description')
//                ->render(function ($post) {
//                    return substr($post->description, 0, 10);
//                }),
//
//                TD::set('body')
//                ->filter(TD::FILTER_TEXT)
//                ->sort(),
//
//                TD::set('Actions')
//                ->render(function (Post $post) {
//                    return Link::make()->icon('pencil')->route('platform.post.edit', $post);
//                })
//            ])
        ];
    }
}
