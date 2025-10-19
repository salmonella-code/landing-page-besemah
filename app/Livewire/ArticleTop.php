<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTop extends Component
{
    public function render()
    {
        $listArticle = Article::latest('published_at')->limit(3)->get();
        return view('livewire.article-top', [
            'listArticle' => $listArticle
        ]);
    }
}
