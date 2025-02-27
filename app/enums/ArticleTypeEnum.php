<?php

namespace Modules\Article\enums;

enum ArticleTypeEnum: int
{
    case News = 1;
    case Article = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::News => 'Новости',
            self::Article => 'Статья',
        };
    }

    public const ALL = [
        self::News,
        self::Article,
    ];
}
