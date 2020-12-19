<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(InsertLoaiSanPham::class);
        $this->call(InsertSanPham::class);
    }
}
/**
 * summary
 */
class InsertLoaiSanPham extends Seeder
{
    /**
     * summary
     */
    public function run()
    {
        DB::table('loaisanpham')->insert([['tenLoaiSanPham'=>'Iphone'],['tenLoaiSanPham'=>'Samsung'],['tenLoaiSanPham'=>'Iphone'],['tenLoaiSanPham'=>'Xiaomi']]);
    }
}
class InsertSanPham extends Seeder
{
    /**
     * summary
     */
    public function run()
    {
        DB::table('sanpham')->insert([
        	['tenSanPham'=>'Iphone XS Max','soLuong'=>'10','id_loaisanpham'=>'1'],
        	['tenSanPham'=>'Iphone X','soLuong'=>'20','id_loaisanpham'=>'1'],
        	['tenSanPham'=>'Samsung Galaxy S9 Plus','soLuong'=>'30','id_loaisanpham'=>'2'],
        	['tenSanPham'=>'Xiaomi Mimix 3','soLuong'=>'10','id_loaisanpham'=>'3']
        ]);
    }
}
