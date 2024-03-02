<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('category', 'tags')
            ->get();

        $categories = Category::distinct()->get();

        return view('blog.blog', compact('posts', 'categories'));
    }


    public function show($slug)
    {
        $post = Post::with('category', 'tags')->where('slug', $slug)->first();
        $categories = Category::distinct()->get();

        if (!$post) {
            abort(404);
        }

        $tags = $post->tags;

        return view('blog.blog-detail', compact('post', 'categories', 'tags'));
    }

    public function showLatest()
    {
        $posts = Post::with('category', 'tags')
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        foreach ($posts as $post) {
            $contentWithoutTags = strip_tags($post->content);
    
            if (strlen($contentWithoutTags) > 225) {
                $truncatedContent = substr($contentWithoutTags, 0, 225);
                $lastSpace = strrpos($truncatedContent, ' ');
                if ($lastSpace !== false) {
                    $post->content = substr($truncatedContent, 0, $lastSpace) . '...';
                } else {
                    $post->content = $truncatedContent . '...';
                }
            } else {
                $post->content = $contentWithoutTags;
            }
        }

        $categories = Category::distinct()->get();
        $categoryModel = new Category(['name' => 'Latest Posts']);

        return view('blog.blog-category', compact('posts', 'categories', 'categoryModel'));
    }

    public function showCategory($category)
    {
        $categoryModel = Category::where('name', $category)->firstOrFail();
        $posts = $categoryModel->posts()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->paginate(3);
    
        foreach ($posts as $post) {
            $contentWithoutTags = strip_tags($post->content);
    
            if (strlen($contentWithoutTags) > 225) {
                $truncatedContent = substr($contentWithoutTags, 0, 225);
                $lastSpace = strrpos($truncatedContent, ' ');
                if ($lastSpace !== false) {
                    $post->content = substr($truncatedContent, 0, $lastSpace) . '...';
                } else {
                    $post->content = $truncatedContent . '...';
                }
            } else {
                $post->content = $contentWithoutTags;
            }
        }
    
        $categories = Category::distinct()->get();
    
        return view('blog.blog-category', compact('posts', 'categories', 'categoryModel'));
    }
    
    
    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::with('category', 'tags')
            ->where('title', 'like', '%' . $query . '%')
            ->orWhereHas('tags', function ($tagQuery) use ($query) {
                $tagQuery->where('name', 'like', '%' . $query . '%');
            })
            ->where('is_published', true)
            ->paginate(3);

        foreach ($posts as $post) {
            $contentWithoutTags = strip_tags($post->content);
    
            if (strlen($contentWithoutTags) > 225) {
                $truncatedContent = substr($contentWithoutTags, 0, 225);
                $lastSpace = strrpos($truncatedContent, ' ');
                if ($lastSpace !== false) {
                    $post->content = substr($truncatedContent, 0, $lastSpace) . '...';
                } else {
                    $post->content = $truncatedContent . '...';
                }
            } else {
                $post->content = $contentWithoutTags;
            }
        }

        $postCount = Post::where('title', 'like', '%' . $query . '%')
            ->where('is_published', true)
            ->count();

        $categories = Category::distinct()->get();

        return view('blog.blog-search', compact('posts', 'categories', 'query', 'postCount'));
    }
}
