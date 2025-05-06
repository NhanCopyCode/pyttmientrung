<?php

namespace Modules\Theme\Http\Controllers;



use App\Models\Category;
use App\Models\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FlashSlide;
use App\Models\News;
use App\Models\Video;
use Modules\Theme\Entities\Menu;


class FrontendController extends Controller
{
    public function __construct()
    {
        // $mainMenus = $this->menu(1);
        $settings = Setting::allConfigsKeyValue();
        $slides = FlashSlide::where('approved', 1)
            ->orderBy('arrange')
            ->get();
        \View::share([
            // 'mainMenus' => $mainMenus,
            'settings' => $settings,
            'slides' => $slides,
        ]);
    }


    public function index()
    {
        $videos = Video::orderBy('postdate', 'desc')->get();
        // dd($videos);
        return view('theme::front-end.pages.home', compact('videos'));
    }

    public function menu($position = 1)
    {
        $menus = Category::with('parent')->whereNull('parent_id')->orderBy('arrange', 'ASC')->select(['id', 'name', 'slug', 'parent_id'])->get();
        return $menus;
    }


    public function getListParents(Request $request, $slugParent)
    {
        $category = Cate::with('parent')->where('slug', $slugParent)->select(['id', 'name', 'image', 'slug', 'parent_id', 'description'])->first();
        $slugCategoryParent = !empty($category) ? $category->slug : '';
        switch ($slugParent) {
            case 'tin-tuc':
                $news = \DB::table('news')->where('active', 1)->select(['id', 'title', 'slug', 'image', 'description', 'created_at'])->paginate(3);
                return view('theme::front-end.news.list-parent', compact('news'));
            default:
                return view("theme::front-end.404", compact('slugParent'));
        }
    }


    public function getDetail($slugParent, $slugDetail, Request $request)
    {
        switch ($slugParent) {
            case "tin-tuc":
                $news = News::with(['category'])->where(['active' => config('settings.active'), ['slug', $slugDetail]])->first();
                $otherNews = News::with('category')->where([['active', '=', config('settings.active')], ['id', '<>', $news->id]])->orderByDesc('created_at')->take(3)->get();
                return view("theme::front-end.news.detail", compact('news', 'otherNews'));
            default:
                return view("theme::front-end.404", compact('slugParent', 'slugDetail'));
        }
    }

    public function getPage($slug, Request $request)
    {
        switch ($slug) {
            case "dang-ky":
                return view('theme::front-end.pages.register');
            default:
                return view('theme::front-end.pages.page', compact('page', 'menu'));
        }
    }
}
