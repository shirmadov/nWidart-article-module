<?php

namespace Modules\Article\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Article\Database\Factories\TextServiceArticleFactory;

class TextServiceArticle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */

    // protected static function newFactory(): TextServiceArticleFactory
    // {
    //     // return TextServiceArticleFactory::new();
    // }

    protected $fillable = [
        "ai_article_id",
        "title",
        "slug",
        "page_title",
        "type",
        "status",
        "prompt_image",
        "image",
        "image_title",
        "prompt_text",
        "content",
        "short_description",
        "source_title",
        "source_url",
        'published',
    ];

//    protected $casts = [
//        'type' => AiArticleTypeEnum::class,
//    ];

//    public function getTypeLabelAttribute(): string
//    {
//        return $this->type->getLabel();
//    }
}
