<?php

namespace Modules\Theme\Http\Controllers;



use App\Models\Category;
use App\Models\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Faq;
use App\Models\FlashSlide;
use App\Models\News;
use App\Models\Post;
use App\Models\SysMenu;
use App\Models\Video;
use Modules\Theme\Entities\Menu;


class FrontendController extends Controller
{
    public function __construct()
    {
        $menu_top_id = 4;
        $menu_main_id = 1;
        $menu_left_id = 2;
        $menu_right_id = 3;
        $ads_left_id = 1;
        $ads_right_id_1 = 4;
        $ads_right_id_2 = 5;
        $settings = Setting::allConfigsKeyValue();
        $slides = FlashSlide::where('approved', 1)
            ->orderBy('arrange')
            ->get();
        $videos = Video::orderBy('postdate', 'desc')->get();

        $menus_left = SysMenu::whereHas('positions', function ($query) use ($menu_left_id) {
            $query->where('position_id', $menu_left_id);
        })->where('approved', 1)->orderBy('arrange')->get();
        $menus_right = SysMenu::whereHas('positions', function ($query) use ($menu_right_id) {
            $query->where('position_id', $menu_right_id);
        })->where('approved', 1)->orderBy('arrange')->get();
        $menus_top = SysMenu::whereHas('positions', function ($query) use ($menu_top_id) {
            $query->where('position_id', $menu_top_id);
        })->where('approved', 1)->orderBy('arrange')->get();
        $menus_main = SysMenu::whereHas('positions', function ($query) use ($menu_main_id) {
            $query->where('position_id', $menu_main_id);
        })->where('approved', 1)->orderBy('arrange')->get();

        $ads_left = Ads::where('approved', 1)
            ->where('vitri', $ads_left_id)
            ->orderBy('arrange')
            ->get();

        $ads_right_1 = Ads::where('approved', 1)
            ->where('vitri', $ads_right_id_1)
            ->orderBy('arrange')
            ->get();

        $ads_right_2 = Ads::where('approved', 1)
            ->where('vitri', $ads_right_id_2)
            ->orderBy('arrange')
            ->get();

        $faqs_homepage = Faq::where('approved', 1)
            ->orderBy('postdate', 'desc')
            ->limit(6)
            ->get();

        \View::share([
            'settings' => $settings,
            'slides' => $slides,
            'videos' => $videos,
            'menus_left' => $menus_left,
            'menus_right' => $menus_right,
            'menus_top' => $menus_top,
            'menus_main' => $menus_main,
            'ads_left' => $ads_left,
            'ads_right_1' => $ads_right_1,
            'ads_right_2' => $ads_right_2,
            'faqs_homepage' => $faqs_homepage,
        ]);
    }


    public function index()
    {
        $videos = Video::orderBy('postdate', 'desc')->get();
        return view('theme::front-end.pages.home', compact('videos'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('s');
        $perPage = 20;

        $search_result = Post::query()
            ->when($keyword, function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('title', 'like', "%$keyword%")
                        ->orWhere('summary', 'like', "%$keyword%");
                });
            })
            ->paginate($perPage)
            ->appends(['s' => $keyword]);
        return view('theme::front-end.pages.search_page', compact('search_result'));
    }

    public function faq(Request $request)
    {
        if ($request->has('faq_id')) {
            $faq_id = $request->get('faq_id');

            $faq = Faq::where('id', $faq_id)
                ->where('approved', 1)
                ->first();

            return view('theme::front-end.pages.faq-detail', compact('faq'));
        }

        $faqs = Faq::where('approved', 1)
            ->orderByDesc('postdate')
            ->paginate(10);


        return view('theme::front-end.pages.faq', compact('faqs'));
    }
   
    public function showPost($postId)
    {
        $post = Post::where('url', $postId)->first();
        $relatedPosts = Post::where('id', '<>', $post->id)->orderBy('postdate', 'desc')->take(5)->get();
        return view('theme::front-end.pages.show_post', compact('post', 'relatedPosts'));
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
