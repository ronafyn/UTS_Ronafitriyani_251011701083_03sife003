<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $games = [
            ['Hollow Knight','Team Cherry','Metroidvania','PC, Switch, PS4',95000,'hollow-knight.jpg','Petualangan aksi 2D di kerajaan serangga bawah tanah yang luas.'],
            ['Celeste','Maddy Makes Games','Platformer','PC, Switch, PS4',75000,'celeste.jpg','Mendaki gunung Celeste dengan tantangan platforming yang presisi.'],
            ['Stardew Valley','ConcernedApe','Simulasi','PC, Switch, Mobile',80000,'stardew-valley.jpg','Warisi pertanian kakekmu dan bangun kehidupan baru di desa.'],
            ['Hades','Supergiant Games','Roguelike','PC, Switch, PS5',130000,'hades.jpg','Kabur dari dunia bawah sebagai putra Hades dalam aksi roguelike.'],
            ['Undertale','Toby Fox','RPG','PC, Switch, PS4',60000,'undertale.jpg','RPG unik di mana kamu bisa menyelesaikan pertarungan tanpa membunuh.'],
            ['Cuphead','Studio MDHR','Run and Gun','PC, Xbox, Switch',110000,'cuphead.jpg','Aksi run and gun bergaya kartun klasik tahun 1930-an.'],
            ['Dead Cells','Motion Twin','Roguelike','PC, Switch, PS4, Mobile',150000,'dead-cells.jpg','Aksi roguelike metroidvania dengan pertarungan cepat di kastil yang berubah tiap percobaan.'],
            ['Slay the Spire','Mega Crit','Card Battler','PC, Switch, PS4, Mobile',100000,'slay-the-spire.jpg','Susun deck kartu dan panjat menara dengan strategi roguelike.'],
            ['Terraria','Re-Logic','Sandbox','PC, Switch, PS4, Mobile',85000,'terraria.jpg','Menggali, membangun, dan bertarung di dunia 2D yang dibuat acak.'],
            ['Coffee Talk','Toge Productions','Visual Novel','PC, Switch, PS4, Mobile',65000,'coffee-talk.jpg','Jadi barista kafe larut malam dan dengarkan cerita pelanggan unik sambil meracik minuman.'],
            ['A Space for the Unbound','Mojiken','Petualangan','PC, Switch, PS4',90000,'space-for-the-unbound.jpg','Kisah dua remaja di desa Indonesia tahun 90-an dengan kekuatan membuka dunia batin orang lain.'],
            ['DreadOut','Digital Happiness','Horror','PC, PS4',70000,'dreadout.jpg','Game horor survival dengan kamera ponsel sebagai senjata untuk melawan hantu lokal.'],

            // 10 game baru
            ['Ori and the Blind Forest','Moon Studios','Metroidvania','PC, Xbox, Switch',80000,'ori-blind-forest.jpg','Petualangan indah seorang makhluk hutan untuk menyelamatkan rumahnya, penuh platforming yang mengalir.'],
            ['Super Meat Boy','Team Meat','Platformer','PC, Switch, PS4',60000,'super-meat-boy.jpg','Platformer super cepat dan menantang, mengejar kekasih sambil menghindari ratusan jebakan.'],
            ['Spiritfarer','Thunder Lotus Games','Simulasi','PC, Switch, PS4, Xbox',130000,'spiritfarer.jpg','Jadi pengemudi kapal bagi arwah, merawat mereka sebelum mengantar ke akhirat.'],
            ['Omori','OMOCAT','RPG','PC, Switch, PS4',95000,'omori.jpg','RPG psikologis dengan dunia mimpi penuh warna dan cerita yang menyentuh.'],
            ['Pamali: Indonesian Folklore Horror','StoryTale Studios','Horror','PC',50000,'pamali.jpg','Horor yang diangkat dari mitos dan pantangan masyarakat Indonesia, penuh suasana mencekam.'],
            ['Broforce','Free Lives','Run and Gun','PC, PS4',70000,'broforce.jpg','Aksi tembak-tembakan penuh ledakan ala film aksi 80-an dengan pasukan pahlawan yang bisa diganti.'],
            ['Balatro','LocalThunk','Card Battler','PC, Switch, PS5, Mobile',100000,'balatro.jpg','Gabungan poker dan roguelike, kumpulkan kartu joker untuk skor yang tidak masuk akal.'],
            ['Core Keeper','Pugstorm','Sandbox','PC, Switch, PS5, Xbox',105000,'core-keeper.jpg','Menjelajah dan membangun di gua bawah tanah raksasa, bisa dimainkan bersama teman.'],
            ['VA-11 Hall-A','Sukeban Games','Visual Novel','PC, Switch, PS4',75000,'va-11-hall-a.jpg','Jadi bartender di kota cyberpunk, racik minuman dan dengarkan cerita para pelanggan.'],
            ['Gris','Nomada Studio','Petualangan','PC, Switch, Mobile',90000,'gris.jpg','Petualangan artistik tanpa teks tentang seorang gadis menemukan kembali warna dunianya.'],
            ['Shovel Knight','Yacht Club Games','Platformer','PC, Switch, PS4, Xbox',120000,'shovel-knight.jpg','Platformer klasik bergaya 8-bit, bertarung dengan sekop sebagai senjata untuk menyelamatkan sahabatmu.'],
            ['Inscryption','Daniel Mullins Games','Card Battler','PC, Switch, PS5',95000,'inscryption.jpg','Gabungan game kartu, roguelike, dan teka-teki misteri di sebuah kabin yang penuh rahasia.'],
        ];

        foreach ($games as [$title, $dev, $genre, $platform, $price, $image, $desc]) {
            Game::create([
                'title' => $title,
                'developer' => $dev,
                'genre' => $genre,
                'platform' => $platform,
                'price' => $price,
                'image' => $image,
                'description' => $desc,
            ]);
        }
    }
}