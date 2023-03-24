<?php

namespace App\Events;

use App\Models\News;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewsHidden
{
    public News $news;

    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(News $news)
    {
        $this->news = $news;
    }
}
