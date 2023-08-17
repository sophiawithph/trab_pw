<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

 class FilmesSeeder extends Seeder
 {
    public function run(): void
    {
        DB::table('filmes')->insert([
            [
                'nome' => 'Barbie',
                'ano' => 2023,
                'categoria' => 'Comédia',
                'sinopse' => 'Depois de ser expulsa da Barbieland por ser uma boneca de aparência menos do que perfeita, Barbie parte para o mundo humano em busca da verdadeira felicidade.',
                'capa' => images/barbie.jpeg,
                'linkTrailler' => 'https://youtu.be/Ujs1Ud7k49M',
            ],
            [
                'nome' => 'Homem-Aranha no Aranhaverso',
                'ano' => 2018,
                'categoria' => 'Infantil',
                'sinopse' => 'Após ser atingido por uma teia radioativa, Miles Morales, um jovem negro do Brooklyn, se torna o Homem-Aranha, inspirado no legado do já falecido Peter Parker. Entretanto, ao visitar o túmulo de seu ídolo em uma noite chuvosa, ele é surpreendido com a presença do próprio Peter, vestindo o traje do herói por baixo de um sobretudo. A surpresa fica ainda maior quando Miles descobre que ele veio de uma dimensão paralela, assim como outras versões do Homem-Aranha.',
                'capa' => images/homemAranha.jpeg,
                'linkTrailler' => 'https://youtu.be/SS6ABPkfmBE',
            ],
            [
                'nome' => 'Velozes & Furiosos 7',
                'ano' => 2015,
                'categoria' => 'Ação',
                'sinopse' => 'Um agente do governo oferece ajuda para cuidar de Shaw em troca de Dom e o grupo resgatar um hacker sequestrado. Dessa vez, não se trata apenas de velocidade: a corrida é pela sobrevivência.',
                'capa' => images/velozesFuriosos.jpeg,
                'linkTrailler' => 'https://youtu.be/hujU0dw6Erk',
            ],
            [
                'nome' => 'Annabelle',
                'ano' => 2014,
                'categoria' => 'Terror',
                'sinopse' => 'John Form acha que encontrou o presente ideal para sua esposa grávida, uma boneca vintage. No entanto, a alegria do casal não dura muito. Uma noite terrível, membros de uma seita satânica invadem a casa do casal em um ataque violento. Ao tentarem invocar um demônio, eles mancham a boneca de sangue, tornando-a receptora de uma entidade do mal.',
                'capa' => image/anabelle.jpeg,
                'linkTrailler' => 'https://youtu.be/kHl6aU30pIo',
            ],
            [
                'nome' => 'Dirty Dancing - Ritmo Quente',
                'ano' => 1987,
                'categoria' => 'Romance',
                'sinopse' => 'Na esperança de curtir sua juventude, Frances fica decepcionada ao descobrir que vai passar o verão de 1963 com os pais em um resort na sonolenta região de Catskills. A sua sorte muda quando ela conhece o instrutor de dança do resort, Johnny. Quando ele a coloca como sua nova parceira de dança, os dois acabam se apaixonando.',
                'capa' => images/dirtyDancing.jpeg,
                'linkTrailler' => 'https://youtu.be/eIcmQNy9FsM',
            ],
            [
                'nome' => 'Harry Potter e a Pedra Filosofal',
                'ano' => 2001,
                'categoria' => 'Fantasia',
                'sinopse' => 'Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry é impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caça de Hogwarts, que chega para levá-lo até a escola. Harry adentra um mundo mágico que jamais imaginara, vivendo diversas aventuras com seus novos amigos, Rony Weasley e Hermione Granger.',
                'capa' => images/harryPotter.jpeg,
                'linkTrailler' => 'https://youtu.be/SFzft_2dcV0',
            ],

        ]);
    }
 }