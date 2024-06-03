<?php

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ConttactController;
use App\Http\Controllers\frontend\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as SanPhamContrroller;
use App\Http\Controllers\frontend\ContactController as LienheContrroller;
use App\Models\Category;





use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;
use App\Models\Product;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('product', [SanPhamContrroller::class, 'index']);
Route::get('product-detail', [SanPhamContrroller::class, 'product_detail']);
// Route::get('detail',[ProductController::class,'product_detail']);
Route::get('contact', [LienheContrroller::class, 'index']);

// Route::get('admin',[DashboardController::class,'index'])->name("admin.dashboard.index");
// Route::get('admin/product',[ProductController::class,'index'])->name("admin.product.index");

Route::prefix("admin")->group(function () {
    Route::get("/", [DashboardController::class, "index"])->name("admin.dashboard.index");
    Route::prefix("product")->group(function () {
        Route::get("/", [ProductController::class, "index"])->name("admin.product.index");
        Route::get("trash", [ProductController::class, "trash"])->name("admin.product.trash");

        Route::get("create", [ProductController::class, "create"])->name("admin.product.create");
        Route::get("show", [ProductController::class, "show"])->name("admin.product.show");
        Route::post("store", [ProductController::class, "store"])->name("admin.product.store");

        Route::get("edit/{id}", [ProductController::class, "edit"])->name("admin.product.edit");
        Route::put("update/{id}", [ProductController::class, "update"])->name("admin.product.update");
        Route::get("status/{id}", [ProductController::class, "status"])->name("admin.product.status");
        Route::get("delete/{id}", [ProductController::class, "delete"])->name("admin.product.delete");
        Route::get("restore/{id}", [ProductController::class, "restore"])->name("admin.product.restore");
        Route::delete("destroy/{id}", [ProductController::class, "destroy"])->name("admin.product.destroy");
    });
    Route::prefix("category")->group(function () {
        Route::get("/", [CategoryController::class, "index"])->name("admin.category.index");
        Route::get("trash", [CategoryController::class, "trash"])->name("admin.category.trash");
        Route::get("create", [CategoryController::class, "create"])->name("admin.category.create");
        Route::get("show", [CategoryController::class, "show"])->name("admin.category.show");
        Route::post("store", [CategoryController::class, "store"])->name("admin.category.store");
        Route::get("edit/{id}", [CategoryController::class, "edit"])->name("admin.category.edit");
        Route::put("update/{id}", [CategoryController::class, "update"])->name("admin.category.update");
        Route::get("status/{id}", [CategoryController::class, "status"])->name("admin.category.status");
        Route::get("delete/{id}", [CategoryController::class, "delete"])->name("admin.category.delete");
        Route::get("restore/{id}", [CategoryController::class, "restore"])->name("admin.category.restore");
        Route::delete("destroy/{id}", [CategoryController::class, "update"])->name("admin.category.destroy");
    });

    Route::prefix("brand")->group(function () {
        Route::get("/", [BrandController::class, "index"])->name("admin.brand.index");
        Route::get("trash", [BrandController::class, "trash"])->name("admin.brand.trash");
        Route::get("create", [BrandController::class, "create"])->name("admin.brand.create");
        Route::get("show", [BrandController::class, "show"])->name("admin.brand.show");
        Route::post("store", [BrandController::class, "store"])->name("admin.brand.store");
        Route::get("edit/{id}", [BrandController::class, "edit"])->name("admin.brand.edit");
        Route::put("update/{id}", [BrandController::class, "update"])->name("admin.brand.update");
        Route::get("status/{id}", [BrandController::class, "status"])->name("admin.brand.status");
        Route::get("delete/{id}", [BrandController::class, "delete"])->name("admin.brand.delete");
        Route::get("restore/{id}", [BrandController::class, "restore"])->name("admin.brand.restore");
        Route::delete("destroy/{id}", [BrandController::class, "update"])->name("admin.brand.destroy");
    });
    Route::prefix("post")->group(function(){
        Route::get("/",[PostController::class,"index"])->name("admin.post.index");
        Route::get("trash",[PostController::class,"trash"])->name("admin.post.trash");
        Route::get("create",[PostController::class,"create"])->name("admin.post.create");
        Route::get("show",[PostController::class,"show"])->name("admin.post.show");
        Route::post("store",[PostController::class,"store"])->name("admin.post.store");
        Route::get("edit/{id}",[PostController::class,"edit"])->name("admin.post.edit");
        Route::put("update/{id}",[PostController::class,"update"])->name("admin.post.update");
        Route::get("status/{id}",[PostController::class,"status"])->name("admin.post.status");
        Route::get("delete/{id}",[PostController::class,"delete"])->name("admin.post.delete");
        Route::get("restore/{id}",[PostController::class,"restore"])->name("admin.post.restore");
        Route::delete("destroy/{id}",[PostController::class,"update"])->name("admin.post.destroy");
    });
    Route::prefix("user")->group(function(){
        Route::get("/",[UserController::class,"index"])->name("admin.user.index");
        Route::get("trash",[UserController::class,"trash"])->name("admin.user.trash");
        Route::get("create",[UserController::class,"create"])->name("admin.user.create");
        Route::get("show",[UserController::class,"show"])->name("admin.user.show");
        Route::post("store",[UserController::class,"store"])->name("admin.user.store");
        Route::get("edit/{id}",[UserController::class,"edit"])->name("admin.user.edit");
        Route::put("update/{id}",[UserController::class,"update"])->name("admin.user.update");
        Route::get("status/{id}",[UserController::class,"status"])->name("admin.user.status");
        Route::get("delete/{id}",[UserController::class,"delete"])->name("admin.user.delete");
        Route::get("restore/{id}",[UserController::class,"restore"])->name("admin.user.restore");
        Route::delete("destroy/{id}",[UserController::class,"update"])->name("admin.user.destroy");
    });
    Route::prefix("contact")->group(function(){
        Route::get("/",[ConttactController::class,"index"])->name("admin.contact.index");
        Route::get("trash",[ConttactController::class,"trash"])->name("admin.contact.trash");
        Route::get("create",[ConttactController::class,"create"])->name("admin.contact.create");
        Route::get("show",[ConttactController::class,"show"])->name("admin.contact.show");
        Route::post("store",[ConttactController::class,"store"])->name("admin.contact.store");
        Route::get("edit/{id}",[ConttactController::class,"edit"])->name("admin.contact.edit");
        Route::put("update/{id}",[ConttactController::class,"update"])->name("admin.contact.update");
        Route::get("status/{id}",[ConttactController::class,"status"])->name("admin.contact.status");
        Route::get("delete/{id}",[ConttactController::class,"delete"])->name("admin.contact.delete");
        Route::get("restore/{id}",[ConttactController::class,"restore"])->name("admin.contact.restore");
        Route::delete("destroy/{id}",[ConttactController::class,"update"])->name("admin.contact.destroy");
    });
    Route::prefix("menu")->group(function(){
        Route::get("/",[MenuController::class,"index"])->name("admin.menu.index");
        Route::get("trash",[MenuController::class,"trash"])->name("admin.menu.trash");
        Route::get("create",[MenuController::class,"create"])->name("admin.menu.create");
        Route::get("show",[MenuController::class,"show"])->name("admin.menu.show");
        Route::post("store",[MenuController::class,"store"])->name("admin.menu.store");
        Route::get("edit/{id}",[MenuController::class,"edit"])->name("admin.menu.edit");
        Route::put("update/{id}",[MenuController::class,"update"])->name("admin.menu.update");
        Route::get("status/{id}",[MenuController::class,"status"])->name("admin.menu.status");
        Route::get("delete/{id}",[MenuController::class,"delete"])->name("admin.menu.delete");
        Route::get("restore/{id}",[MenuController::class,"restore"])->name("admin.menu.restore");
        Route::delete("destroy/{id}",[MenuController::class,"update"])->name("admin.menu.destroy");
    });
    Route::prefix("topic")->group(function(){
        Route::get("/",[TopicController::class,"index"])->name("admin.topic.index");
        Route::get("trash",[TopicController::class,"trash"])->name("admin.topic.trash");
        Route::get("create",[TopicController::class,"create"])->name("admin.topic.create");
        Route::get("show",[TopicController::class,"show"])->name("admin.topic.show");
        Route::post("store",[TopicController::class,"store"])->name("admin.topic.store");
        Route::get("edit/{id}",[TopicController::class,"edit"])->name("admin.topic.edit");
        Route::put("update/{id}",[TopicController::class,"update"])->name("admin.topic.update");
        Route::get("status/{id}",[TopicController::class,"status"])->name("admin.topic.status");
        Route::get("delete/{id}",[TopicController::class,"delete"])->name("admin.topic.delete");
        Route::get("restore/{id}",[TopicController::class,"restore"])->name("admin.topic.restore");
        Route::delete("destroy/{id}",[TopicController::class,"update"])->name("admin.topic.destroy");
    });
    Route::prefix("post")->group(function(){
        Route::get("/",[PostController::class,"index"])->name("admin.post.index");
        Route::get("trash",[PostController::class,"trash"])->name("admin.post.trash");
        Route::get("create",[PostController::class,"create"])->name("admin.post.create");
        Route::get("show",[PostController::class,"show"])->name("admin.post.show");
        Route::post("store",[PostController::class,"store"])->name("admin.post.store");
        Route::get("edit/{id}",[PostController::class,"edit"])->name("admin.post.edit");
        Route::put("update/{id}",[PostController::class,"update"])->name("admin.post.update");
        Route::get("status/{id}",[PostController::class,"status"])->name("admin.post.status");
        Route::get("delete/{id}",[PostController::class,"delete"])->name("admin.post.delete");
        Route::get("restore/{id}",[PostController::class,"restore"])->name("admin.post.restore");
        Route::delete("destroy/{id}",[PostController::class,"update"])->name("admin.post.destroy");
    });
    Route::prefix("order")->group(function(){
        Route::get("/",[OrderController::class,"index"])->name("admin.order.index");
        Route::get("trash",[OrderController::class,"trash"])->name("admin.order.trash");
        Route::get("create",[OrderController::class,"create"])->name("admin.order.create");
        Route::get("show",[OrderController::class,"show"])->name("admin.order.show");
        Route::post("store",[OrderController::class,"store"])->name("admin.order.store");
        Route::get("edit/{id}",[OrderController::class,"edit"])->name("admin.order.edit");
        Route::put("update/{id}",[OrderController::class,"update"])->name("admin.order.update");
        Route::get("status/{id}",[OrderController::class,"status"])->name("admin.order.status");
        Route::get("delete/{id}",[OrderController::class,"delete"])->name("admin.order.delete");
        Route::get("restore/{id}",[OrderController::class,"restore"])->name("admin.order.restore");
        Route::delete("destroy/{id}",[OrderController::class,"update"])->name("admin.order.destroy");
    });
    Route::prefix('banner')->group(function () {
        Route::get("/", [BannerController::class, "index"])->name("admin.banner.index");
        Route::get("trash", [BannerController::class, "trash"])->name("admin.banner.trash");
        Route::get("create", [BannerController::class, "create"])->name("admin.banner.create");
        Route::post("store", [BannerController::class, "store"])->name("admin.banner.store"); // Sử dụng POST cho lưu trữ
        Route::get("show/{id}", [BannerController::class, "show"])->name("admin.banner.show");
        Route::get("edit/{id}", [BannerController::class, "edit"])->name("admin.banner.edit");
        Route::put("update/{id}", [BannerController::class, "update"])->name("admin.banner.update"); // Sử dụng PUT cho cập nhật
        Route::patch("status/{id}", [BannerController::class, "status"])->name("admin.banner.status"); // Sử dụng PATCH cho cập nhật một phần
        Route::delete("delete/{id}", [BannerController::class, "delete"])->name("admin.banner.delete"); // Sử dụng DELETE cho xóa tạm
        Route::patch("restore/{id}", [BannerController::class, "restore"])->name("admin.banner.restore"); // Sử dụng PATCH cho khôi phục
        Route::delete("destroy/{id}", [BannerController::class, "destroy"])->name("admin.banner.destroy"); // Sử dụng DELETE cho xóa vĩnh viễn
    });
});
