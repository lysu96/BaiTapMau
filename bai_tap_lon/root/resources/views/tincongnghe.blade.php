
@extends('layouts.master')

@section('title',$tcn['tenTin'].' - Shop bán điện thoại Phone Store')

@section('content')

<!DOCTYPE html>
<html lang="en">
<style>
    .menu {
    display: block;
    overflow: visible;
    height: 70px;
    clear: both;
    margin: auto;
    width: 100%;
    max-width: 1200px;
}
.menu li {
    display: inline-block;
    margin: 0 10px;
    font-family: Roboto Condensed,sans-serif;
    height: 30px;
    margin: 20px 0;
    position: relative;
}
.menu li a {
    display: block;
    padding: 8px 10px 4px;
    font-size: 16px;
    color: #333;
    text-transform: uppercase;
    font-weight: 300;
    background: #fff;
    border-radius: 2px;
}
.menu li a.actmenu {
    background: #fed701;
}
</style>
<body>
    <ul class="menu">
            <li><a href="" class="actmenu">Tin Công Nghệ</a></li>
        </ul>
    <div class="container" style="background-color: white;">

        <h2><?= $tcn['tenTin'] ?></h2>
        <?= DB::table('users')->where('id',$tcn['id_nv'])->value('hoTen') ?> - <?= $tcn['created_at'] ?><br>
        <div class="content">
            <?= $tcn['noiDung'] ?>
        </div>
    </div>
</body>
</html>
@endsection