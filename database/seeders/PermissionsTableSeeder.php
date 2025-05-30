<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arPermissions = [
            "1" => ["HomeController@index", "Trang chủ"],

            "2" => ["SettingController", "Cấu hình công ty"],

            "3" => ["RolesController@index", "Quản lý Vai trò"],
            "4" => ["RolesController@show", "Quản lý Vai trò"],
            "5" => ["RolesController@store", "Quản lý Vai trò"],
            "6" => ["RolesController@update", "Quản lý Vai trò"],
            "7" => ["RolesController@destroy", "Quản lý Vai trò"],
            "8" => ["RolesController@active", "Quản lý Vai trò"],

            "9" => ["UsersController@index", "Quản lý tài khoản"],
            "10" => ["UsersController@show", "Quản lý tài khoản"],
            "11" => ["UsersController@store", "Quản lý tài khoản"],
            "12" => ["UsersController@update", "Quản lý tài khoản"],
            "13" => ["UsersController@destroy", "Quản lý tài khoản"],
            "14" => ["UsersController@active", "Quản lý tài khoản"],

            //Trường hợp cho phép người dùng sửa, thì cho phép sửa profile của người dùng đó
            "15" => ["UsersController@postProfile", "Quản lý tài khoản"],

            "16" => ["CategoryController@index", "Quản lý danh mục"],
            "17" => ["CategoryController@show", "Quản lý danh mục"],
            "18" => ["CategoryController@store", "Quản lý danh mục"],
            "19" => ["CategoryController@update", "Quản lý danh mục"],
            "20" => ["CategoryController@destroy", "Quản lý danh mục"],
            "21" => ["CategoryController@active", "Quản lý danh mục"],

            "22" => ["SlideController@index", "Quản lý slide"],
            "23" => ["SlideController@show", "Quản lý slide"],
            "24" => ["SlideController@store", "Quản lý slide"],
            "25" => ["SlideController@update", "Quản lý slide"],
            "26" => ["SlideController@destroy", "Quản lý slide"],
            "27" => ["SlideController@active", "Quản lý slide"],
            "28" => ["SlideController@updateArrange", "Quản lý slide"],

            "29" => ["MenuController@index", "Quản lý Menu"],
            "30" => ["MenuController@show", "Quản lý Menu"],
            "31" => ["MenuController@store", "Quản lý Menu"],
            "32" => ["MenuController@update", "Quản lý Menu"],
            "33" => ["MenuController@destroy", "Quản lý Menu"],
            "34" => ["MenuController@updateArrange", "Quản lý Menu"],

            "35" => ["PostController@index", "Quản lý bài viết"],
            "36" => ["PostController@show", "Quản lý bài viết"],
            "37" => ["PostController@store", "Quản lý bài viết"],
            "38" => ["PostController@update", "Quản lý bài viết"],
            "39" => ["PostController@destroy", "Quản lý bài viết"],
            "40" => ["PostController@updateArrange", "Quản lý bài viết"],

            "41" => ["VideoController@index", "Quản lý video"],
            "42" => ["VideoController@show", "Quản lý video"],
            "43" => ["VideoController@store", "Quản lý video"],
            "44" => ["VideoController@update", "Quản lý video"],
            "45" => ["VideoController@destroy", "Quản lý video"],
            "46" => ["VideoController@updateArrange", "Quản lý video"],


            "47" => ["AdsController@index", "Quản lý ads"],
            "48" => ["AdsController@show", "Quản lý ads"],
            "49" => ["AdsController@store", "Quản lý ads"],
            "50" => ["AdsController@update", "Quản lý ads"],
            "51" => ["AdsController@destroy", "Quản lý ads"],
            "52" => ["AdsController@updateArrange", "Quản lý ads"],
            "53" => ["MenuController@getPositionsByParent", "Quản lý Menu"],

            "54" => ["FaqController@index", "Quản lý hỏi đáp"],
            "55" => ["FaqController@show", "Quản lý hỏi đáp"],
            "56" => ["FaqController@store", "Quản lý hỏi đáp"],
            "57" => ["FaqController@update", "Quản lý hỏi đáp"],
            "58" => ["FaqController@destroy", "Quản lý hỏi đáp"],
            "59" => ["FaqController@updateArrange", "Quản lý hỏi đáp"],



            // "22" => ["NewsController@index", "Quản lý tin tức"],
            // "23" => ["NewsController@show", "Quản lý tin tức"],
            // "24" => ["NewsController@store", "Quản lý tin tức"],
            // "25" => ["NewsController@update", "Quản lý tin tức"],
            // "26" => ["NewsController@destroy", "Quản lý tin tức"],
            // "27" => ["NewsController@active", "Quản lý tin tức"],


            // "28" => ["ProvinceController@index", "Quản lý tỉnh thành phố"],
            // "29" => ["ProvinceController@show", "Quản lý tỉnh thành phố"],
            // "30" => ["ProvinceController@store", "Quản lý tỉnh thành phố"],
            // "31" => ["ProvinceController@update", "Quản lý tỉnh thành phố"],
            // "32" => ["ProvinceController@destroy", "Quản lý tỉnh thành phố"],

            // "33" => ["DistrictController@index", "Quản lý quận huyện"],
            // "34" => ["DistrictController@show", "Quản lý quận huyện"],
            // "35" => ["DistrictController@store", "Quản lý quận huyện"],
            // "36" => ["DistrictController@update", "Quản lý quận huyện"],
            // "37" => ["DistrictController@destroy", "Quản lý quận huyện"],

            // "38" => ["WardController@index", "Quản lý phường xã"],
            // "39" => ["WardController@show", "Quản lý phường xã"],
            // "40" => ["WardController@store", "Quản lý phường xã"],
            // "41" => ["WardController@update", "Quản lý phường xã"],
            // "42" => ["WardController@destroy", "Quản lý phường xã"],


        ];

        //ADD PERMISSIONS - Thêm các quyền
        DB::table('permissions')->delete(); //empty permission
        $addPermissions = [];
        foreach ($arPermissions as $name => $label) {
            $addPermissions[] = [
                'id' => $name,
                'name' => $label[0],
                'label' => $label[1],
            ];
        }
        \DB::table('permissions')->insert($addPermissions);

        //ADD ROLE - Them vai tro
        DB::table( 'roles' )->delete();//empty permission
        $datenow = date('Y-m-d H:i:s');
        $role = [
            ['id' => 1, 'name' => 'admin', 'label' => 'Admin', 'created_at' => $datenow, 'updated_at' => $datenow],
            ['id' => 2, 'name' => 'user', 'label' => 'User', 'created_at' => $datenow, 'updated_at' => $datenow],
            ['id' => 3, 'name' => 'company', 'label' => 'Company', 'created_at' => $datenow, 'updated_at' => $datenow],
        ];
       $addRoles = [];
       foreach ($role as $key => $label) {
           $addRoles[] = [
               'id' => $label['id'],
               'name' => $label['name'],
               'label' => $label['label'],
               'created_at' => $datenow,
               'updated_at' => $datenow,
           ];
       }
       //KIỂM TRA VÀ THÊM CÁC VAI TRÒ TRUYỀN VÀO NẾU CÓ
        DB::table('roles')->insert($addRoles);

        //BỔ SUNG ID QUYỀN NẾU CÓ
        //Full quyền Admin công ty
        $persAdmin = \App\Models\Permission::pluck('id');

        //Quyền cộng tác viên (vendor)
        $persVendor = [
            1, 2, 3
        ];

        //Quyền khách hàng
        $persCustomer = [
            1, 2, 3
        ];

        //Gán quyền vào Vai trò Admin
        $rolePerAdminCompany = \App\Models\Role::findOrFail(1);
        $rolePerAdminCompany->permissions()->sync($persAdmin);

        //Gán quyền vào Vai trò User
        $rolePerAgentEmployee = \App\Models\Role::findOrFail(2);
        $rolePerAgentEmployee->permissions()->sync($persVendor);

        //Gán quyền vào Vai trò Company
        $rolePerCustomer = \App\Models\Role::findOrFail(3);
        $rolePerCustomer->permissions()->sync($persCustomer);

        //Set tài khoản ID=1 và ID=2 là Admin
        $roleAdmin = User::findOrFail(2);
        $roleAdmin->roles()->sync([1]);

       
    }
}
