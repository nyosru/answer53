<?php

use Illuminate\Support\Facades\Route;

use App\Models\test_table2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // геттер готов получаем poleTest1 из pole_test1

    $res = test_table2::first();
    // foreach( $res as $rr ){
    $res2 = $res->poleTest1;
    // }

    // мне нравится в скоупах собирать большие запросы чтобы данные
    //  подготовились с нужными названиями и с нужными связками 
    //   .. быстро удобно и минимизация времени и количества запросов
    // у меня один большой скоуп вывешан в резюме на hh.ru
    //     https://tyumen.hh.ru/applicant/resumes/view?resume=28f8d872ff023d352d0039ed1f3268774f3879


    // сохраняем в новое поле какие то данные
    // будет видно при втором обновлении страницы
    $res->poleTest1 = 'eee' . rand(8888, 9999);
    $res->save();

    // мутатор готов, работает
    // задание закончил по php

    return view('welcome', ['test_data' => [[' pole_test1 as poleTest1' => $res2], $res->toArray() ?? []]]);
});
