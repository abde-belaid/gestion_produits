<?php

namespace Database\Factories;

use App\Models\Type;
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
    public function definition(): array
    {
        $types = Type::pluck("type")->toArray();
        $produits = ["souris", "clavier", "pantalon", "tapis", "stylo", "carnet", "tasse", "lampe", "casque", "chargeur", 
             "écouteurs", "câble USB", "porte-documents", "agrafeuse", "agrafes", "calculatrice", "ordinateur portable", 
             "sac à dos", "imprimante", "agenda", "post-it", "scotch", "étui pour téléphone", "chargeur sans fil", 
             "bloc-notes", "crayons de couleur", "marqueurs", "règle", "ciseaux", "pochette de classement", 
             "thermos", "gourde", "clé USB", "téléphone portable", "disque dur externe", "écouteurs Bluetooth", 
             "manette de jeu", "carte mémoire", "cadenas", "télévision", "souris sans fil", "hub USB", 
             "ventilateur de bureau", "papier d'impression", "agrafes", "dévidoir de ruban adhésif", "puzzle", 
             "porte-carte de visite"];

        return [
            "refpdt" => $this->faker->unique()->text(5),
            "libpdt" => $this->faker->unique()->randomElement($produits),
            'type' => $this->faker->randomElement($types),
            "prix" => $this->faker->randomFloat(2, 100, 600),
            "image" => $this->faker->imageUrl(400, 400),
            "Qnt" => $this->faker->numberBetween(20, 1000),
            "description" => $this->faker->sentence(),
        ];
    }
}
