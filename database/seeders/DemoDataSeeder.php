<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GlobalUnit;
use App\Models\Ingredient;
use App\Models\Formula;
use App\Models\Product;
use App\Models\Income;
use Carbon\Carbon;

class DemoDataSeeder extends Seeder
{
    public function run()
    {
        // Единицы измерения
        GlobalUnit::truncate();
        GlobalUnit::insert([
            ["unit_name" => "Килограмм", "unit_extension" => "кг"],
            ["unit_name" => "Литр", "unit_extension" => "л"],
            ["unit_name" => "Штука", "unit_extension" => "шт"],
            ["unit_name" => "Грамм", "unit_extension" => "г"],
            ["unit_name" => "Миллилитр", "unit_extension" => "мл"],
        ]);

        // Ингредиенты
        $ingredients = [
            ["name" => "Мука пшеничная", "price_per_unit" => 8000, "available_amount" => 500, "unit" => "кг"],
            ["name" => "Сахар", "price_per_unit" => 12000, "available_amount" => 200, "unit" => "кг"],
            ["name" => "Масло растительное", "price_per_unit" => 25000, "available_amount" => 100, "unit" => "л"],
            ["name" => "Яйца", "price_per_unit" => 2500, "available_amount" => 300, "unit" => "шт"],
            ["name" => "Молоко", "price_per_unit" => 15000, "available_amount" => 150, "unit" => "л"],
            ["name" => "Дрожжи", "price_per_unit" => 35000, "available_amount" => 50, "unit" => "кг"],
            ["name" => "Соль", "price_per_unit" => 3000, "available_amount" => 100, "unit" => "кг"],
            ["name" => "Ванилин", "price_per_unit" => 120000, "available_amount" => 10, "unit" => "кг"],
        ];

        foreach ($ingredients as $ing) {
            Ingredient::create($ing);
        }

        // Формула: Хлеб белый (1 кг)
        $breadTime = Carbon::parse("2024-01-15 10:00:00");
        Formula::insert([
            ["standard_amount" => 1, "ingredient_id" => 1, "product_unit" => "кг", "product_name" => "Хлеб белый", "ingredient_amount" => 0.7, "price_for_formula" => 5600, "created_at" => $breadTime, "updated_at" => $breadTime],
            ["standard_amount" => 1, "ingredient_id" => 6, "product_unit" => "кг", "product_name" => "Хлеб белый", "ingredient_amount" => 0.02, "price_for_formula" => 700, "created_at" => $breadTime, "updated_at" => $breadTime],
            ["standard_amount" => 1, "ingredient_id" => 7, "product_unit" => "кг", "product_name" => "Хлеб белый", "ingredient_amount" => 0.01, "price_for_formula" => 30, "created_at" => $breadTime, "updated_at" => $breadTime],
            ["standard_amount" => 1, "ingredient_id" => 5, "product_unit" => "кг", "product_name" => "Хлеб белый", "ingredient_amount" => 0.3, "price_for_formula" => 4500, "created_at" => $breadTime, "updated_at" => $breadTime],
        ]);

        // Формула: Печенье (1 кг)
        $cookieTime = Carbon::parse("2024-01-16 10:00:00");
        Formula::insert([
            ["standard_amount" => 1, "ingredient_id" => 1, "product_unit" => "кг", "product_name" => "Печенье сахарное", "ingredient_amount" => 0.5, "price_for_formula" => 4000, "created_at" => $cookieTime, "updated_at" => $cookieTime],
            ["standard_amount" => 1, "ingredient_id" => 2, "product_unit" => "кг", "product_name" => "Печенье сахарное", "ingredient_amount" => 0.2, "price_for_formula" => 2400, "created_at" => $cookieTime, "updated_at" => $cookieTime],
            ["standard_amount" => 1, "ingredient_id" => 3, "product_unit" => "кг", "product_name" => "Печенье сахарное", "ingredient_amount" => 0.15, "price_for_formula" => 3750, "created_at" => $cookieTime, "updated_at" => $cookieTime],
            ["standard_amount" => 1, "ingredient_id" => 4, "product_unit" => "кг", "product_name" => "Печенье сахарное", "ingredient_amount" => 3, "price_for_formula" => 7500, "created_at" => $cookieTime, "updated_at" => $cookieTime],
            ["standard_amount" => 1, "ingredient_id" => 8, "product_unit" => "кг", "product_name" => "Печенье сахарное", "ingredient_amount" => 0.005, "price_for_formula" => 600, "created_at" => $cookieTime, "updated_at" => $cookieTime],
        ]);

        // Формула: Торт (1 шт)
        $cakeTime = Carbon::parse("2024-01-17 10:00:00");
        Formula::insert([
            ["standard_amount" => 1, "ingredient_id" => 1, "product_unit" => "шт", "product_name" => "Торт Наполеон", "ingredient_amount" => 0.8, "price_for_formula" => 6400, "created_at" => $cakeTime, "updated_at" => $cakeTime],
            ["standard_amount" => 1, "ingredient_id" => 2, "product_unit" => "шт", "product_name" => "Торт Наполеон", "ingredient_amount" => 0.3, "price_for_formula" => 3600, "created_at" => $cakeTime, "updated_at" => $cakeTime],
            ["standard_amount" => 1, "ingredient_id" => 3, "product_unit" => "шт", "product_name" => "Торт Наполеон", "ingredient_amount" => 0.2, "price_for_formula" => 5000, "created_at" => $cakeTime, "updated_at" => $cakeTime],
            ["standard_amount" => 1, "ingredient_id" => 4, "product_unit" => "шт", "product_name" => "Торт Наполеон", "ingredient_amount" => 6, "price_for_formula" => 15000, "created_at" => $cakeTime, "updated_at" => $cakeTime],
            ["standard_amount" => 1, "ingredient_id" => 5, "product_unit" => "шт", "product_name" => "Торт Наполеон", "ingredient_amount" => 0.5, "price_for_formula" => 7500, "created_at" => $cakeTime, "updated_at" => $cakeTime],
            ["standard_amount" => 1, "ingredient_id" => 8, "product_unit" => "шт", "product_name" => "Торт Наполеон", "ingredient_amount" => 0.01, "price_for_formula" => 1200, "created_at" => $cakeTime, "updated_at" => $cakeTime],
        ]);

        // Пополнения
        Income::insert([
            ["ingredient_id" => 1, "added_amount" => 100, "added_price" => 800000, "added_by" => 1, "created_at" => "2024-01-10 09:00:00", "updated_at" => "2024-01-10 09:00:00"],
            ["ingredient_id" => 2, "added_amount" => 50, "added_price" => 600000, "added_by" => 1, "created_at" => "2024-01-10 09:30:00", "updated_at" => "2024-01-10 09:30:00"],
            ["ingredient_id" => 3, "added_amount" => 20, "added_price" => 500000, "added_by" => 1, "created_at" => "2024-01-11 10:00:00", "updated_at" => "2024-01-11 10:00:00"],
            ["ingredient_id" => 4, "added_amount" => 100, "added_price" => 250000, "added_by" => 1, "created_at" => "2024-01-12 08:00:00", "updated_at" => "2024-01-12 08:00:00"],
            ["ingredient_id" => 5, "added_amount" => 50, "added_price" => 750000, "added_by" => 1, "created_at" => "2024-01-13 09:00:00", "updated_at" => "2024-01-13 09:00:00"],
            ["ingredient_id" => 6, "added_amount" => 10, "added_price" => 350000, "added_by" => 1, "created_at" => "2024-01-14 10:00:00", "updated_at" => "2024-01-14 10:00:00"],
            ["ingredient_id" => 1, "added_amount" => 200, "added_price" => 1600000, "added_by" => 1, "created_at" => "2024-01-20 09:00:00", "updated_at" => "2024-01-20 09:00:00"],
            ["ingredient_id" => 2, "added_amount" => 100, "added_price" => 1200000, "added_by" => 1, "created_at" => "2024-01-25 09:00:00", "updated_at" => "2024-01-25 09:00:00"],
        ]);
    }
}
