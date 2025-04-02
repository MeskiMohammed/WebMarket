<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "codebarre"=>fake()->ean13(),
            "designation"=>fake()->name(),
            "prix_ht"=>fake()->randomNumber(2),
            "tva"=>fake()->randomNumber(2),
            "description"=>fake()->text(),
            "image"=>'storage/products/'.fake()->randomElement(['image1','image2','image3','image4','image5','image6','image7']).".jpg",
            "sous_famille_id"=>1,
            "marque_id"=>1,
            "unite_id"=>1,
            "stock"=>fake()->randomNumber(2),
        ];
    }
}
