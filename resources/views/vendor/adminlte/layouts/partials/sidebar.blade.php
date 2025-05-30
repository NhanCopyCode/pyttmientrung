<aside class="main-sidebar">
    <section class="sidebar">


        @php

            $arLink = [
                [
                    'icon' => 'fas fa-tv',
                    'title' => __('message.home'),
                    'href' => 'admin',
                ],

                [
                    'icon' => 'fa fa-th',
                    'title' => __('message.system'),
                    'child' => [
                        [
                            'icon' => 'dot fa fa-circle',
                            'title' => __('message.configuration'),
                            'href' => 'admin/settings',
                            'permission' => 'SettingController',
                        ],
                        [
                            'icon' => 'dot fa fa-circle',
                            'title' => __('message.roles'),
                            'href' => 'admin/roles',
                            'permission' => 'RolesController@index',
                        ],
                    ],
                ],
                [
                    'icon' => 'fa fa-th',
                    'title' => __('message.interface_management'),
                    'child' => [
                        [
                            'icon' => 'dot fa fa-circle',
                            'title' => __('message.slide_management'),
                            'href' => 'admin/slides',
                            'permission' => 'SlideController@index',
                        ],
                        [
                            'icon' => 'dot fa fa-circle',
                            'title' => __('message.menu_management'),
                            'href' => 'admin/menus',
                            'permission' => 'MenuController@index',
                        ],
                        [
                            'icon' => 'dot fa fa-circle',
                            'title' => __('message.ads_management'),
                            'href' => 'admin/ads',
                            'permission' => 'AdsController@index',
                        ],
                    ],
                ],
                [
                    'icon' => 'fa fa-th',
                    'title' => __('message.post_management'),
                    'href' => 'admin/posts',
                    'permission' => "PostController@index"
                ],
                 [
                    'icon' => 'fa fa-video',
                    'title' => __('message.video_management'),
                    'href' => 'admin/videos',
                    'permission' => "VideoController@index"
                ],
                [
                    'icon' => 'fa fa-question',
                    'title' => __('message.faq_management'),
                    'href' => 'admin/faqs',
                    'permission' => "FaqController@index"
                ],
                //   [

                //     'icon' => 'fad fa-newspaper' ,
                //     'title' => __('message.news'),
                //     'child' => [
                //         [
                //             'icon' => 'dot fa fa-circle',
                //             'title' => __('Danh mục'),
                //             'href' => 'admin/categories',
                //             'permission' => 'CategoryController@index',
                //         ],
                //         [
                //             'icon' => 'dot fa fa-circle',
                //             'title' => __('Tin tức'),
                //             'href' => 'admin/news',
                //             'permission' => 'NewsController@index',
                //         ]
                //     ],
                // ],
                //  [
                //         'icon' => 'fad fa-suitcase',
                //         'title' => __('message.utilities'),
                //         'child' => [
                //              [
                //                 'icon' => 'dot fa fa-circle',
                //                 'title' => __('Tỉnh'),
                //                 'href' => 'admin/provinces',
                //                 'permission' => 'ProvinceController@index',
                //             ],
                //              [
                //                 'icon' => 'dot fa fa-circle',
                //                 'title' => __('Huyện'),
                //                 'href' => 'admin/districts',
                //                 'permission' => 'DistrictController@index',
                //             ],
                //              [
                //                 'icon' => 'dot fa fa-circle',
                //                 'title' => __('Xã'),
                //                 'href' => 'admin/wards',
                //                 'permission' => 'WardController@index',
                //             ]

                //         ],
                //     ],
            ];
        @endphp
        {{ Menu::sidebar(Auth::user(), $arLink) }}
    </section>
</aside>
