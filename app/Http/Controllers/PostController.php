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
            ->latest('created_at')
            ->get();
    
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
            ->get();

        foreach ($posts as $post) {
            // Strip HTML tags and limit the content to 150 characters
            $contentWithoutTags = strip_tags($post->content);
            $truncatedContent = substr($contentWithoutTags, 0, 350);

            // Add "..." if the original content has more than 150 characters
            if (strlen($contentWithoutTags) > 150) {
                $truncatedContent .= '...';
            }

            // Replace the original content with the truncated and formatted version
            $post->content = $truncatedContent;
        }

        $categories = Category::distinct()->get();

        return view('blog.blog-category', compact('posts', 'categories', 'categoryModel'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::with('category', 'tags')
            ->where('title', 'like', '%' . $query . '%')
            ->where('is_published', true)
            ->get();

        $postCount = $posts->count();

        $categories = Category::distinct()->get();

        return view('blog.blog-search', compact('posts', 'categories', 'query', 'postCount'));
    }

}
