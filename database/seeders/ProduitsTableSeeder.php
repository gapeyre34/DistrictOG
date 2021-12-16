<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit = new Produit();
        $produit->nom = "Pull noir en laine";
        $produit->prix_ht = 25;
        $produit->description = "Un pull confortable en laine";
        $produit->photo_principale = "pull_noir_laine.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Pull blanc en laine";
        $produit->prix_ht = 25;
        $produit->description = "Un pull confortable en laine";
        $produit->photo_principale = "pull_blanc_laine.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Pull bleu en laine";
        $produit->prix_ht = 25;
        $produit->description = "Un pull confortable en laine";
        $produit->photo_principale = "pull_bleu_laine.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-shirt SkateMafia";
        $produit->prix_ht = 18;
        $produit->description = "Un T-shirt bien stylé pour l'été";
        $produit->photo_principale = "skate_mafia.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Doudoune The North Face";
        $produit->prix_ht = 175;
        $produit->description = "Parfaite pour les plus frileux d'entre vous";
        $produit->photo_principale = "tnf.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Sneakers Air max 97";
        $produit->prix_ht = 90;
        $produit->description = "Habilles bien tes chaussures pour un max de confort";
        $produit->photo_principale = "air_max_97.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Veste Jacker";
        $produit->prix_ht = 68;
        $produit->description = "Une veste pour les skateurs de la street";
        $produit->photo_principale = "veste_jacker.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-shirt Tégrité";
        $produit->prix_ht = 11;
        $produit->description = "Pour les grands fans de South Park";
        $produit->photo_principale = "tegrite.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chaussettes Mickael Jackson";
        $produit->prix_ht = 2;
        $produit->description = "Décidément il y en a pour tous les gouts...";
        $produit->photo_principale = "jackson_sockets.jpg";
        $produit->save();
    }
}
