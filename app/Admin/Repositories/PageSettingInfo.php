<?php

namespace App\Admin\Repositories;

use App\Models\PageSettingInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PageSettingInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public static function getHomeBanner() {
        $pageInfos = Model::where('page_url', '=', '/index')->first();
        $pageInfoIndex = new \stdClass();
        $pageInfoIndex->title = $pageInfos->page_title;
        $pageInfoIndex->description = $pageInfos->page_meta_description;
        return $pageInfoIndex;
    }

    public static function getBanners($uri)
    {
        $pageInfos = Model::where('page_url', '=', $uri)->first();
        $pageInfo = new \stdClass();

        $pageInfo->title = $pageInfos->page_title;

        $pageInfo->description = $pageInfos->page_meta_description;

        $count = count($pageInfos->page_banner_img);

        if ($count > 0) {
            $random_img_num = rand(0, ($count - 1));
            $random_img = $pageInfos->page_banner_img[$random_img_num];
        } else {
            $random_img = '';
        }

        $count_mob = count($pageInfos->page_banner_img_mob);

        if ($count_mob > 0) {
            $random_img_mob_num = rand(0, ($count_mob - 1));
            $random_img_mob = $pageInfos->page_banner_img_mob[$random_img_mob_num];
        } else {
            $random_img_mob = '';
        }
        $pageInfo->banner_img = $random_img;
        $pageInfo->banner_img_mob = $random_img_mob;

        return $pageInfo;
    }
}
