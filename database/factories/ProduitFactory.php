<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nom = $this->faker->sentence(2);

        return [
             'slug' => Str::slug($nom.''.time().uniqid()),
             'nom' => $nom,
             'resume' => $this->faker->sentence(2),
             'description' => $this->faker->sentence(25),
             'image' => 'image.jpg',
             'quantite' => rand(10, 100),
             'prix' => rand(40000, 1500000),
             'categorie_id' => rand(1,4)
        ];
    }
}
