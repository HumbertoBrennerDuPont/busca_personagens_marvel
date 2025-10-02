<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    public function run()
    {
        $allCharacters = [
            [
                'name' => 'Homem-Aranha',
                'image_url' => 'Homem-Aranha.jpg',
                'first_appearance' => 'Amazing Fantasy N° 15',
                'occupation' => 'Fotógrafo / Super-Herói',
                'real_name' => 'Peter Parker',
                'description' => 'Antes de se tornar o Homem-Aranha, Peter Parker levava a vida de um adolescente comum. Criado pelos tios após ficar órfão quando ainda era um bebê, Peter passou a se interessar por tecnologia e ciência desde cedo. Por conta de sua timidez e inteligência, não demorou para ser alvo de bullying na escola. A vida do jovem mudou ao ser picado por uma aranha radioativa durante uma demonstração sobre manejo nuclear na escola.'
            ],
            [
                'name' => 'Homem de Ferro',
                'image_url' => 'Homem-de-Ferro.webp',
                'first_appearance' => 'Tales of Suspense N° 39',
                'occupation' => 'Industrial / Inventor / Super-Herói',
                'real_name' => 'Tony Stark',
                'description' => 'Tony Stark é um gênio bilionário, playboy e filantropo. Depois de sofrer um ataque que quase o matou, ele construiu uma armadura de alta tecnologia para salvar sua vida e combater o crime. Como Homem de Ferro, luta contra vilões e protege o mundo com sua tecnologia avançada.'
            ],
            [
                'name' => 'Wolverine',
                'image_url' => 'Wolverine.jpg',
                'first_appearance' => 'The Incredible Hulk N°  180',
                'occupation' => 'Mutante / Caçador / Membro dos X-Men',
                'real_name' => 'James "Logan" Howlett',
                'description' => 'Wolverine possui fator de cura acelerado, garras retráteis de adamantium e sentidos aguçados. É um dos membros mais ferozes e resilientes dos X-Men, conhecido por sua personalidade difícil, mas leal aos amigos.'
            ],
            [
                'name' => 'Pantera Negra',
                'image_url' => 'Pantera_Negra.jpg',
                'first_appearance' => 'Fantastic Four N° 52',
                'occupation' => 'Rei de Wakanda / Super-Herói',
                'real_name' => 'T’Challa',
                'description' => 'T’Challa é o rei de Wakanda, um país africano avançado tecnologicamente. Como Pantera Negra, protege seu povo e o mundo com sua força, agilidade e conhecimento em tecnologia avançada.'
            ],
            [
                'name' => 'Hulk',
                'image_url' => 'Hulk.jpg',
                'first_appearance' => 'The Incredible Hulk N° 1',
                'occupation' => 'Cientista / Super-Herói',
                'real_name' => 'Bruce Banner',
                'description' => 'Após um acidente com radiação gama, Bruce Banner se transforma no Hulk quando fica com raiva. Possui força sobre-humana e resistência praticamente ilimitada. Luta para controlar sua raiva e proteger os inocentes.'
            ],
            [
                'name' => 'Venom',
                'image_url' => 'Venom.jpg',
                'first_appearance' => 'The Amazing Spider-Man N°  300',
                'occupation' => 'Anti-Herói / Simbionte',
                'real_name' => 'Eddie Brock',
                'description' => 'Venom é um simbionte alienígena que se funde com Eddie Brock, dando-lhe poderes sobre-humanos e a capacidade de formar armas vivas. Inicialmente vilão do Homem-Aranha, tornou-se um anti-herói complexo.'
            ],
            [
                'name' => 'Thanos',
                'image_url' => 'Thanos.jpg',
                'first_appearance' => 'The Invincible Iron Man N° 55',
                'occupation' => 'Tirano / Conquistador',
                'real_name' => 'Thanos',
                'description' => 'Thanos é um dos vilões mais poderosos do universo Marvel. Obcecado pelo equilíbrio, busca as Joias do Infinito para impor sua visão de ordem no cosmos, enfrentando heróis como os Vingadores e os Guardiões da Galáxia.'
            ],
            [
                'name' => 'Dr Destino',
                'image_url' => 'Dr_Destino.jpg',
                'first_appearance' => 'Fantastic Four N° 5',
                'occupation' => 'Tirano / Cientista / Mago',
                'real_name' => 'Victor Von Doom',
                'description' => 'Victor Von Doom é o governante da Latvéria e um gênio tanto em ciência quanto em magia. Seu intelecto e habilidades místicas o tornam um dos maiores inimigos do Quarteto Fantástico e do mundo Marvel.'
            ],
            [
                'name' => 'Magneto',
                'image_url' => 'Magneto.jpg',
                'first_appearance' => 'X-Men N° 1',
                'occupation' => 'Mutante / Líder',
                'real_name' => 'Max Eisenhardt / Erik Lehnsherr',
                'description' => 'Magneto possui a habilidade de controlar campos magnéticos e metais. Inicialmente antagonista dos X-Men, busca proteger a supremacia mutante, mesmo que para isso precise enfrentar os humanos.'
            ],
            [
                'name' => 'Loki',
                'image_url' => 'Loki.jpg',
                'first_appearance' => 'Journey into Mystery N° 85',
                'occupation' => 'Deus / Trapaceiro / Vilão',
                'real_name' => 'Loki Laufeyson',
                'description' => 'Loki é o deus da trapaça e irmão adotivo de Thor. Possui habilidades mágicas impressionantes e é mestre em manipulação, frequentemente alternando entre vilão e anti-herói no universo Marvel.'
            ],
            [
                'name' => 'Capitão América',
                'image_url' => 'capitaoamerica.jpg',
                'first_appearance' => 'Captain America Comics N° 1',
                'occupation' => 'Soldado / Super-Herói',
                'real_name' => 'Steve Rogers',
                'description' => 'Durante a Segunda Guerra Mundial, Steve Rogers foi transformado no primeiro super-soldado dos EUA. Congelado por décadas, foi revivido nos dias atuais para se tornar o líder dos Vingadores. Representa os ideais de liberdade e justiça.'
            ],
            [
                'name' => 'Homem-Aranha (2099)',
                'image_url' => 'aranha2099.jpg',
                'first_appearance' => 'Spider-Man 2099 N° 1',
                'occupation' => 'Cientista / Super-Herói',
                'real_name' => 'Miguel O\'Hara',
                'description' => 'No ano de 2099, o geneticista Miguel O\'Hara ganhou poderes de aranha após um acidente com DNA. Diferente do Homem-Aranha original, possui garras retráteis e visão aprimorada.'
            ],
            [
                'name' => 'Homem-Aranha (Miles Morales)',
                'image_url' => 'miles.jpg',
                'first_appearance' => 'Ultimate Fallout N° 4',
                'occupation' => 'Estudante / Super-Herói',
                'real_name' => 'Miles Morales',
                'description' => 'Após a morte de Peter Parker em seu universo, Miles Morales foi picado por uma aranha geneticamente modificada e ganhou poderes similares. Possui camuflagem e veneno de choque, tornando-se um Homem-Aranha único.'
            ],
            [
                'name' => 'Motoqueiro Fantasma',
                'image_url' => 'ghostrider.jpg',
                'first_appearance' => 'Marvel Spotlight N° 5',
                'occupation' => 'Spirit of Vengeance',
                'real_name' => 'Johnny Blaze',
                'description' => 'Dublê de motocicleta que fez um pacto com o demônio Mefisto para salvar seu pai adotivo. Transforma-se no Motoqueiro Fantasma, um ser sobrenatural que pune os culpados.'
            ],
            [
                'name' => 'Viúva Negra',
                'image_url' => 'viuvanegra.jpg',
                'first_appearance' => 'Tales of Suspense N° 52',
                'occupation' => 'Espiã / Agente',
                'real_name' => 'Natasha Romanova',
                'description' => 'Ex-espiã russa treinada desde criança na Sala Vermelha, Natasha Romanova se redimiu de seu passado sombrio e se tornou uma agente fundamental nos Vingadores. Mestre em artes marciais e espionagem.'
            ],

            [
                'name' => 'Homem-Formiga',
                'image_url' => 'homemformiga.jpg',
                'first_appearance' => 'Tales to Astonish N° 27',
                'occupation' => 'Cientista / Super-Herói',
                'real_name' => 'Scott Lang',
                'description' => 'Ex-presidiário que roubou o traje do Homem-Formiga original para salvar sua filha. Pode reduzir de tamanho até níveis subatômicos enquanto mantém sua força, e pode controlar formigas.'
            ],
            [
                'name' => 'Vespa',
                'image_url' => 'vespa.jpg',
                'first_appearance' => 'Tales to Astonish N° 44',
                'occupation' => 'Socialite / Super-Heroína',
                'real_name' => 'Hope van Dyne',
                'description' => 'Filha dos fundadores dos Vingadores, Hope van Dyne herdou a tecnologia Pym e se tornou a Vespa. Pode alterar seu tamanho, voar com asas e disparar rajadas de energia.'
            ],
            [
                'name' => 'Máquina de Combate',
                'image_url' => 'warmachine.jpg',
                'first_appearance' => 'Iron Man N° 118',
                'occupation' => 'Militar / Super-Herói',
                'real_name' => 'James "Rhodey" Rhodes',
                'description' => 'Melhor amigo de Tony Stark e piloto experiente da Força Aérea. Utiliza uma armadura de combate pesada desenvolvida por Stark, focada em poder de fogo militar.'
            ],
            [
                'name' => 'Agente Venom',
                'image_url' => 'agentevenom.jpg',
                'first_appearance' => 'Amazing Spider-Man N° 654',
                'occupation' => 'Soldado / Simbionte',
                'real_name' => 'Flash Thompson',
                'description' => 'Flash Thompson, ex-valentão de Peter Parker, se torna o hospedeiro do simbionte Venom como parte de um programa militar. Diferente de Eddie Brock, usa o simbionte para o bem.'
            ],
            [
                'name' => 'Mulher-Hulk',
                'image_url' => 'mulherhulk.jpg',
                'first_appearance' => 'Savage She-Hulk N° 1',
                'occupation' => 'Advogada / Super-Heroína',
                'real_name' => 'Jennifer Walters',
                'description' => 'Prima de Bruce Banner que ganhou poderes similares ao Hulk após uma transfusão de sangue. Diferente do Hulk, mantém sua personalidade e inteligência quando transformada.'
            ],
            [
                'name' => 'Demolidor',
                'image_url' => 'demolidor.jpg',
                'first_appearance' => 'Daredevil N° 1',
                'occupation' => 'Advogado / Super-Herói',
                'real_name' => 'Matt Murdock',
                'description' => 'Cego desde a infância por resíduos radioativos, Matt Murdock ganhou sentidos sobre-humanos que funcionam como um radar. Durante o dia é advogado, à noite protege o Hell\'s Kitchen como Demolidor.'
            ],
            [
                'name' => 'Justiceiro',
                'image_url' => 'justiceiro.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 129',
                'occupation' => 'Vigilante / Ex-Marine',
                'real_name' => 'Frank Castle',
                'description' => 'Ex-fuzileiro naval cuja família foi assassinada pela máfia. Usando treinamento militar avançado, caça criminosos com métodos letais. Acredita em "um olho por um olho" ao extremo.'
            ],
            [
                'name' => 'Senhor das Estrelas',
                'image_url' => 'starlord.jpg',
                'first_appearance' => 'Marvel Preview N° 4',
                'occupation' => 'Aventureiro Espacial',
                'real_name' => 'Peter Quill',
                'description' => 'Filho meio-humano, meio-alienígena que se tornou o líder dos Guardiões da Galáxia. Especialista em combate e piloto excepcional. Conhecido por seu humor sarcástico.'
            ],
            [
                'name' => 'Gamora',
                'image_url' => 'gamora.jpg',
                'first_appearance' => 'Strange Tales N° 180',
                'occupation' => 'Assassina / Guardiã',
                'real_name' => 'Gamora Zen Whoberi Ben Titan',
                'description' => 'Última de sua espécie, foi criada por Thanos para ser a assassina mais perigosa da galáxia. Redimiu-se e se juntou aos Guardiões. Conhecida como "a mulher mais perigosa do universo".'
            ],
            [
                'name' => 'Rocket Raccoon',
                'image_url' => 'rocket.jpg',
                'first_appearance' => 'Marvel Preview N° 7',
                'occupation' => 'Mercenário / Guardião',
                'real_name' => '89P13',
                'description' => 'Guaxinim geneticamente modificado com inteligência genial e especialista em armas. Cínico e com complexo de Napoleão, mas leal aos amigos. Melhor amigo de Groot.'
            ],
            [
                'name' => 'Groot',
                'image_url' => 'groot.jpg',
                'first_appearance' => 'Tales to Astonish N° 13',
                'occupation' => 'Monarca Flora / Guardião',
                'real_name' => 'Groot',
                'description' => 'Ser alienígena de origem arbórea do planeta X. Pode controlar plantas e se regenerar. Conhecido por sua frase "Eu sou Groot" que carrega significados complexos.'
            ],
            [
                'name' => 'Drax, o Destruidor',
                'image_url' => 'drax.jpg',
                'first_appearance' => 'Iron Man N° 55',
                'occupation' => 'Guardião / Guerreiro',
                'real_name' => 'Arthur Sampson Douglas',
                'description' => 'Humano transformado em guerreiro alienígena para destruir Thanos, que matou sua família. Extremamente forte, mas literal demais em seu pensamento.'
            ],
            [
                'name' => 'Mantis',
                'image_url' => 'mantis.jpg',
                'first_appearance' => 'Avengers N° 112',
                'occupation' => 'Empata / Guardiã',
                'real_name' => 'Mantis',
                'description' => 'Humana criada por padres Kree que desenvolveu habilidades empáticas e de premonição. Pode sentir e manipular emoções, e possui artes marciais excepcionais.'
            ],
            [
                'name' => 'Nebulosa',
                'image_url' => 'nebulosa.jpg',
                'first_appearance' => 'Avengers N° 257',
                'occupation' => 'Pirata Espacial / Guardiã',
                'real_name' => 'Nebulosa',
                'description' => 'Alienígena ciborgue que afirma ser neta de Thanos. Inimiga dos Guardiões que se redimiu após sofrer nas mãos de seu avô. Especialista em combate e tecnologia.'
            ],
            [
                'name' => 'Yondu Udonta',
                'image_url' => 'yondu.jpg',
                'first_appearance' => 'Marvel Super-Heroes N° 18',
                'occupation' => 'Caçador de Recompensas',
                'real_name' => 'Yondu Udonta',
                'description' => 'Membro dos Guardiões Originais e líder dos Ravagers. Controla uma flecha letal com assobio. Figura paterna para Peter Quill em algumas realidades.'
            ],
            [
                'name' => 'Duende Verde',
                'image_url' => 'duende_verde.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 14',
                'occupation' => 'Industrial / Vilão',
                'real_name' => 'Norman Osborn',
                'description' => 'CEO da Oscorp que se transforma no Duende Verde após usar um soro que concede força sobre-humana, mas causa loucura. Arqui-inimigo do Homem-Aranha.'
            ],
            [
                'name' => 'Tocha Humana',
                'image_url' => 'tocha_humana.jpg',
                'first_appearance' => 'Fantastic Four N° 1',
                'occupation' => 'Super-Herói',
                'real_name' => 'Johnny Storm',
                'description' => 'Membro mais jovem do Quarteto Fantástico, Johnny Storm ganhou a capacidade de se envolver em chamas, voar e projetar fogo após uma exposição a raios cósmicos. Conhecido por seu comportamento impulsivo.'
            ],
            [
                'name' => 'Mulher Invisível',
                'image_url' => 'mulher_invisivel.jpg',
                'first_appearance' => 'Fantastic Four N° 1',
                'occupation' => 'Super-Heroína',
                'real_name' => 'Susan Storm',
                'description' => 'Membro fundador do Quarteto Fantástico e esposa do Sr. Fantástico. Pode se tornar invisível e criar campos de força. Considerada a membro mais poderosa do grupo.'
            ],
            [
                'name' => 'Coisa',
                'image_url' => 'coisa.jpg',
                'first_appearance' => 'Fantastic Four N° 1',
                'occupation' => 'Super-Herói / Piloto',
                'real_name' => 'Ben Grimm',
                'description' => 'Amigo de infância do Sr. Fantástico, Ben Grimm foi transformado em uma criatura de pedra laranja com força sobre-humana. Apesar de sua aparência assustadora, tem um coração de ouro.'
            ],
            [
                'name' => 'Sr. Fantástico',
                'image_url' => 'senhor_fantastico.jpg',
                'first_appearance' => 'Fantastic Four N° 1',
                'occupation' => 'Cientista / Líder',
                'real_name' => 'Reed Richards',
                'description' => 'Líder do Quarteto Fantástico e um dos homens mais inteligentes do mundo. Pode esticar seu corpo em qualquer forma imaginável. Marido da Mulher Invisível e pai de Franklin Richards.'
            ],
            [
                'name' => 'Thor',
                'image_url' => 'thor.jpg',
                'first_appearance' => 'Journey into Mystery N° 83',
                'occupation' => 'Deus do Trovão / Super-Herói',
                'real_name' => 'Thor Odinson',
                'description' => 'Príncipe de Asgard e Deus do Trovão, Thor possui força sobre-humana e pode controlar tempestades com seu martelo Mjolnir. Inicialmente arrogante, aprendeu humildade e se tornou um dos heróis mais poderosos da Terra.'
            ],
            [
                'name' => 'Doutor Estranho',
                'image_url' => 'doutor_estranho.jpg',
                'first_appearance' => 'Strange Tales N° 110 (1963)',
                'occupation' => 'Mago Supremo',
                'real_name' => 'Stephen Strange',
                'description' => 'Stephen Strange, antigo cirurgião, torna-se o Mago Supremo e defensor da Terra contra ameaças místicas.'
            ],
            [
                'name' => 'Carnificina',
                'image_url' => 'carnificina.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 361 (1992)',
                'occupation' => 'Serial Killer / Vilão',
                'real_name' => 'Cletus Kasady',
                'description' => 'Carnificina é o resultado da junção de Cletus Kasady com um simbionte vermelho, ainda mais violento que Venom.'
            ],

            [
                'name' => 'Blade',
                'image_url' => 'blade.jpg',
                'first_appearance' => 'The Tomb of Dracula N° 10 (1973)',
                'occupation' => 'Caçador de Vampiros',
                'real_name' => 'Eric Brooks',
                'description' => 'Blade é um caçador de vampiros meio-humano e meio-vampiro, imune a mordidas e dotado de habilidades sobre-humanas.'
            ],

            [
                'name' => 'Doutor Octopus',
                'image_url' => 'doutor_octopus.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 3',
                'occupation' => 'Cientista / Super-Vilão',
                'real_name' => 'Dr. Otto Octavius',
                'description' => 'Brilhante cientista nuclear que desenvolveu quatro braços mecânicos presos a um arnês em sua cintura. Após um acidente de laboratório, os braços ficaram permanentemente fundidos ao seu corpo e ele pode controlá-los telepaticamente. Um dos inimigos mais inteligentes e perigosos do Homem-Aranha, e o único que já conseguiu assumir a identidade do herói.'
            ],
            [
                'name' => 'Deadpool',
                'image_url' => 'deadpool.jpg',
                'first_appearance' => 'The New Mutants N° 98',
                'occupation' => 'Mercenário / Anti-Herói',
                'real_name' => 'Wade Wilson',
            'description' => 'Mercenário com fator de cura acelerado que o torna praticamente imortal. Conhecido por seu humor sarcástico e quebra da quarta parede. Apesar de seus métodos violentos, frequentemente acaba ajudando heróis.'
            ],

            [
                'name' => 'Surfista Prateado',
                'image_url' => 'surfista_prateado.jpg',
                'first_appearance' => 'Fantastic Four N° 48',
                'occupation' => 'Arauto de Galactus',
                'real_name' => 'Norrin Radd',
                'description' => 'Ex-astrônomo que se sacrificou para salvar seu planeta, tornando-se o Arauto de Galactus. Pode viajar à velocidade da luz e manipular energia cósmica.'
            ],
            [
                'name' => 'Galactus',
                'image_url' => 'galactus.jpg',
                'first_appearance' => 'Fantastic Four N° 48',
                'occupation' => 'Devorador de Mundos',
                'real_name' => 'Galan',
                'description' => 'Entidade cósmica que precisa consumir planetas para sobreviver. Não é malévolo, mas uma força da natureza. Um dos seres mais poderosos do universo Marvel.'
            ],
            [
                'name' => 'Spider-Gwen',
                'image_url' => 'spidergwen.jpg',
                'first_appearance' => 'Edge of Spider-Verse N° 2 (2014)',
                'occupation' => 'Heroína',
                'real_name' => 'Gwen Stacy',
                'description' => 'Em outra realidade, Gwen Stacy foi a picada pela aranha radioativa e se tornou a Spider-Woman.'
            ],
            [
                'name' => 'Ciclope',
                'image_url' => 'ciclope.jpg',
                'first_appearance' => 'X-Men N° 1 (1963)',
                'occupation' => 'Mutante / Líder',
                'real_name' => 'Scott Summers',
                'description' => 'Líder dos X-Men, possui a habilidade de disparar raios ópticos de alta intensidade pelos olhos.'
            ],
            [
                'name' => 'Tempestade',
                'image_url' => 'tempestade.jpg',
                'first_appearance' => 'Giant-Size X-Men N° 1 (1975)',
                'occupation' => 'Mutante / Membro',
                'real_name' => 'Ororo Munroe',
                'description' => 'Mutante com a habilidade de controlar o clima. Uma das líderes dos X-Men.'
            ],
            [
                'name' => 'Vampira',
                'image_url' => 'vampira.jpg',
                'first_appearance' => 'Ms. Marvel N° 16',
                'occupation' => 'Mutante',
                'real_name' => 'Anna Marie',
                'description' => 'Mutante que pode absorver memórias, habilidades e poderes através do toque físico. O contato prolongado pode ser fatal para a vítima, tornando-a incapaz de ter contato físico com outras pessoas.'
            ],
            [
                'name' => 'Elektra',
                'image_url' => 'elektra.jpg',
                'first_appearance' => 'Daredevil N° 168 (1981)',
                'occupation' => 'Assassina / Anti-Heroína',
                'real_name' => 'Elektra Natchios',
                'description' => 'Elektra é uma assassina treinada e grande amor de Matt Murdock, oscilando entre vilã e anti-heroína.'
            ],
            [
                'name' => 'Ultron',
                'image_url' => 'ultron.jpg',
                'first_appearance' => 'Avengers N° 54',
                'occupation' => 'Inteligência Artificial / Conquistador',
                'real_name' => 'Ultron',
                'description' => 'Inteligência artificial criada pelo Dr. Hank Pym que se rebelou contra seu criador e a humanidade. Possui capacidade de auto-aprimoramento constante, pode transferir sua consciência para diferentes corpos robóticos e criar exércitos de drones. Obsessivo em seu desejo de exterminar a humanidade e criar um mundo perfeito de máquinas. Arqui-inimigo dos Vingadores e uma das ameaças mais persistentes que já enfrentaram.'
            ],
            [
                'name' => 'Jean Grey (Fênix)',
                'image_url' => 'jean_grey.jpg',
                'first_appearance' => 'X-Men N° 1 (1963)',
                'occupation' => 'Mutante / Telepata',
                'real_name' => 'Jean Grey',
                'description' => 'Jean é uma das mutantes mais poderosas, hospedeira da Força Fênix, capaz de manipular energia cósmica e mentes.'
            ],
            [
                'name' => 'Venom (Anti-Venom)',
                'image_url' => 'venom_anti.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 569',
                'occupation' => 'Anti-Herói / Simbionte',
                'real_name' => 'Eddie Brock',
                'description' => 'Eddie Brock como Anti-Venom, um simbionte branco com poderes de cura e purificação, oposto ao Venom tradicional.'
            ],
            [
                'name' => 'Cavaleiro da Lua',
                'image_url' => 'moonknight.jpg',
                'first_appearance' => 'Werewolf by Night N° 32 (1975)',
                'occupation' => 'Vigilante / Ex-Marine',
                'real_name' => 'Marc Spector',
                'description' => 'Ex-mercenário ressuscitado pelo deus egípcio Khonshu, Marc Spector se torna o Cavaleiro da Lua, um vigilante que combate o crime com habilidades físicas aprimoradas e equipamentos especializados. Conhecido por sua personalidade complexa e múltiplas identidades.'
            ],
            [
                'name' => 'Shang-Chi',
                'image_url' => 'shang_chi.jpg',
                'first_appearance' => 'Special Marvel Edition N° 15 (1973)',
                'occupation' => 'Mestre em Artes Marciais / Herói',
                'real_name' => 'Shang-Chi',
                'description' => 'Conhecido como o "Mestre do Kung Fu", Shang-Chi é um especialista em artes marciais treinado desde a infância para ser um assassino. Ele rejeita o legado de seu pai, Fu Manchu, e luta contra o crime usando suas habilidades excepcionais.'
            ],
            [
                'name' => 'Sentry',
                'image_url' => 'sentry.jpg',
                'first_appearance' => 'Sentry N° 1',
                'occupation' => 'Super-Herói',
                'real_name' => 'Robert Reynolds',
                'description' => 'Herói com o poder de um milhão de sóis explodindo, mas que luta contra sua contraparte maligna, o Vácuo. Um dos seres mais poderosos do universo Marvel, mas com instabilidade mental.'
            ],

            [
                'name' => 'Lagarto',
                'image_url' => 'lagarto.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 6',
                'occupation' => 'Cientista / Criatura',
                'real_name' => 'Dr. Curt Connors',
                'description' => 'Brilhante cientista que perdeu um braço e desenvolveu um soro com DNA de lagarto para regeneração. O experimento deu errado, transformando-o em uma criatura reptiliana que quer converter toda a humanidade em lagartos.'
            ],
            [
                'name' => 'Mysterio',
                'image_url' => 'mysterio.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 13',
                'occupation' => 'Ilusionista / Ator',
                'real_name' => 'Quentin Beck',
                'description' => 'Ex-especialista em efeitos especiais de Hollywood que usa tecnologia avançada para criar ilusões realistas. Mestre em enganar os sentidos e criar armadilhas psicológicas para o Homem-Aranha.'
            ],
            [
                'name' => 'Abutre',
                'image_url' => 'abutre.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 2',
                'occupation' => 'Engenheiro / Ladrão',
                'real_name' => 'Adrian Toomes',
                'description' => 'Ex-engenheiro que desenvolveu um traje de voo com asas mecânicas após ser traído por seu sócio. Usa sua tecnologia para cometer roubos aéreos e é um dos primeiros inimigos do Homem-Aranha.'
            ],

            [
                'name' => 'Homem-Areia',
                'image_url' => 'homem_areia.jpg',
                'first_appearance' => 'The Amazing Spider-Man N° 4',
                'occupation' => 'Ladrão / Vigia',
                'real_name' => 'William Baker (Flint Marko)',
                'description' => 'Ex-criminoso que ganhou a capacidade de transformar seu corpo em areia após cair em uma praia onde testes nucleares estavam ocorrendo. Pode controlar e moldar areia, tornando-se praticamente indestrutível.'
            ],
            [
                'name' => 'Hulk Vermelho',
                'image_url' => 'hulk_vermelho.jpg',
                'first_appearance' => 'Hulk Vol. 2 #1 (2008)',
                'occupation' => 'Militar / Anti-Herói',
                'real_name' => 'General Thaddeus "Thunderbolt" Ross',
                'description' => 'Após uma experiência militar, o General Ross se transforma no Hulk Vermelho, ganhando força colossal e energia radioativa.'
            ],
            [
                'name' => 'Duende Macabro',
                'image_url' => 'duende_macabro.jpg',
                'first_appearance' => 'The Amazing Spider-Man #238 (1983)',
                'occupation' => 'Vilão',
                'real_name' => 'Roderick Kingsley (principal versão)',
                'description' => 'Um empresário corrupto que tomou a identidade do Duende Verde, usando equipamentos avançados e personalidade sádica.'
            ],
            [
                'name' => 'Mary Jane Watson',
                'image_url' => 'mary_jane.jpg',
                'first_appearance' => 'The Amazing Spider-Man #25 (1965)',
                'occupation' => 'Atriz / Modelo',
                'real_name' => 'Mary Jane Watson',
                'description' => 'O grande amor da vida de Peter Parker, Mary Jane é uma das personagens mais importantes da mitologia do Homem-Aranha.'
            ],
            [
                'name' => 'Gwendolyne Stacy',
                'image_url' => 'gwen_stacy.jpg',
                'first_appearance' => 'The Amazing Spider-Man #31 (1965)',
                'occupation' => 'Estudante / Cientista em potencial',
                'real_name' => 'Gwendolyne Stacy',
                'description' => 'Primeiro grande amor de Peter Parker, cuja morte trágica marcou profundamente a vida do Homem-Aranha.'
            ],
            [
                'name' => 'Psylocke',
                'image_url' => 'psylocke.jpg',
                'first_appearance' => 'Captain Britain #8 (1976)',
                'occupation' => 'Telepata / Ninja',
                'real_name' => 'Elizabeth "Betsy" Braddock',
                'description' => 'Poderosa mutante telepata e guerreira ninja, capaz de criar lâminas psíquicas e lutar corpo a corpo com maestria.'
            ],
            [
                'name' => 'Colossus',
                'image_url' => 'colossus.jpg',
                'first_appearance' => 'Giant-Size X-Men #1 (1975)',
                'occupation' => 'Herói',
                'real_name' => 'Piotr "Peter" Rasputin',
                'description' => 'Mutante russo capaz de transformar seu corpo em aço orgânico, membro fiel dos X-Men.'
            ],
            [
                'name' => 'Noturno',
                'image_url' => 'noturno.jpg',
                'first_appearance' => 'Giant-Size X-Men #1 (1975)',
                'occupation' => 'Herói',
                'real_name' => 'Kurt Wagner',
                'description' => 'Mutante com aparência demoníaca, mas coração bondoso. Possui a habilidade de se teletransportar e grande agilidade.'
            ],
            [
                'name' => 'Apocalipse',
                'image_url' => 'apocalipse.jpg',
                'first_appearance' => 'X-Factor #5 (1986)',
                'occupation' => 'Conquistador / Vilão',
                'real_name' => 'En Sabah Nur',
                'description' => 'Considerado o primeiro mutante, Apocalipse possui poderes quase ilimitados e deseja a sobrevivência do mais forte.'
            ],
            [
                'name' => 'Sentinela',
                'image_url' => 'sentinela.jpg',
                'first_appearance' => 'X-Men #14 (1965)',
                'occupation' => 'Robôs Caçadores de Mutantes',
                'real_name' => 'Sentinela',
                'description' => 'Robôs criados para caçar mutantes, representam uma ameaça constante aos X-Men ao longo das décadas.'
            ],
            [
                'name' => 'Toxina',
                'image_url' => 'toxina.jpg',
                'first_appearance' => 'Venom vs. Carnage #2 (2004)',
                'occupation' => 'Anti-Herói',
                'real_name' => 'Patrick Mulligan',
                'description' => 'Filho do simbionte Carnificina, Toxina é mais poderoso que Venom e Carnificina, com moral mais voltada ao heroísmo.'
            ],
            [
                'name' => 'Mística',
                'image_url' => 'mistica.jpg',
                'first_appearance' => 'Ms. Marvel #16 (1978)',
                'occupation' => 'Espiã / Vilã',
                'real_name' => 'Raven Darkholme',
                'description' => 'Metamorfa letal, espiã e terrorista mutante. Mãe biológica de Vampira e Noturno.'
            ],
            [
                'name' => 'Dormammu',
                'image_url' => 'dormammu.jpg',
                'first_appearance' => 'Strange Tales #126 (1964)',
                'occupation' => 'Lorde da Dimensão Sombria',
                'real_name' => 'Dormammu',
                'description' => 'Um dos maiores inimigos do Doutor Estranho, Dormammu é uma entidade mística de poder praticamente ilimitado.'
            ],
            [
                'name' => 'X-23',
                'image_url' => 'x_23.jpg',
                'first_appearance' => 'NYX #3 (2004)',
                'occupation' => 'Mutante / Heroína',
                'real_name' => 'Laura Kinney',
                'description' => 'Clone feminino de Wolverine, com garras de adamantium e fator de cura. Posteriormente assumiu o manto de Wolverine.'
            ],
            [
                'name' => 'Hela',
                'image_url' => 'hela.jpg',
                'first_appearance' => 'Journey into Mystery #102 (1964)',
                'occupation' => 'Deusa da Morte',
                'real_name' => 'Hela',
                'description' => 'Filha de Loki em algumas versões, é a governante de Hel e Niflheim e uma das maiores inimigas de Asgard.'
            ],
            [
                'name' => 'Odin',
                'image_url' => 'odin.jpg',
                'first_appearance' => 'Journey into Mystery #85 (1962)',
                'occupation' => 'Rei de Asgard',
                'real_name' => 'Odin Borson',
                'description' => 'Pai de Thor, governante de Asgard e detentor da Odinforce, sendo uma das entidades mais poderosas do universo Marvel.'
            ],
            [
                'name' => 'Fanático',
                'image_url' => 'fanatico.jpg',
                'first_appearance' => 'X-Men #12 (1965)',
                'occupation' => 'Vilão / Anti-Herói',
                'real_name' => 'Cain Marko',
                'description' => 'Irmão de criação do Professor Xavier, ganhou poderes místicos que o tornaram praticamente imparável.'
            ],
            [
                'name' => 'Professor Xavier',
                'image_url' => 'prof_xavier.jpg',
                'first_appearance' => 'X-Men #1 (1963)',
                'occupation' => 'Professor / Líder dos X-Men',
                'real_name' => 'Charles Xavier',
                'description' => 'Fundador dos X-Men, telepata mais poderoso do mundo e defensor da coexistência entre humanos e mutantes.'
            ],
            [
                'name' => 'Electro',
                'image_url' => 'electro.jpg',
                'first_appearance' => 'The Amazing Spider-Man #9 (1964)',
                'occupation' => 'Vilão',
                'real_name' => 'Max Dillon',
                'description' => 'Após um acidente elétrico, ganhou poderes de manipular energia elétrica e se tornou inimigo clássico do Homem-Aranha.'
            ],
            [
                'name' => 'Fera',
                'image_url' => 'fera.jpg',
                'first_appearance' => 'X-Men #1 (1963)',
                'occupation' => 'Cientista / Herói',
                'real_name' => 'Henry "Hank" McCoy',
                'description' => 'Membro original dos X-Men, possui força sobre-humana, agilidade e intelecto genial.'
            ],
            [
                'name' => 'Punho de Ferro',
                'image_url' => 'punho_de_ferro.jpg',
                'first_appearance' => 'Marvel Premiere #15 (1974)',
                'occupation' => 'Herói',
                'real_name' => 'Danny Rand',
                'description' => 'Herói místico que canaliza sua energia vital para o Punho de Ferro, capaz de feitos sobre-humanos.'
            ],
            [
                'name' => 'Jessica Jones',
                'image_url' => 'jessica_jones.jpg',
                'first_appearance' => 'Alias #1 (2001)',
                'occupation' => 'Detetive Particular',
                'real_name' => 'Jessica Campbell Jones',
                'description' => 'Ex-heroína que se tornou investigadora particular, conhecida por sua força sobre-humana e resiliência.'
            ],
            [
                'name' => 'Soldado Invernal',
                'image_url' => 'soldado_invernal.jpg',
                'first_appearance' => 'Captain America Vol. 5 #1 (2005)',
                'occupation' => 'Assassino / Herói',
                'real_name' => 'James "Bucky" Barnes',
                'description' => 'Ex-parceiro do Capitão América, transformado em assassino pela União Soviética, depois se redimiu como herói.'
            ],
            [
                'name' => 'Ômega Vermelho',
                'image_url' => 'omega_red.jpg',
                'first_appearance' => 'X-Men Vol. 2 #4 (1992)',
                'occupation' => 'Vilão',
                'real_name' => 'Arkady Rossovich',
                'description' => 'Mutante soviético com tentáculos de carbono radioativos, inimigo mortal dos X-Men.'
            ],
            [
                'name' => 'Gambit',
                'image_url' => 'gambit.jpg',
                'first_appearance' => 'Uncanny X-Men Annual #14 (1990)',
                'occupation' => 'Ladrão / Herói',
                'real_name' => 'Remy LeBeau',
                'description' => 'Mutante cajun com habilidade de carregar objetos com energia cinética explosiva, famoso por suas cartas de baralho.'
            ],
            [
                'name' => 'Capitã Marvel',
                'image_url' => 'capitamarvel.jpg',
                'first_appearance' => 'Marvel Super-Heroes #13 (1968)',
                'occupation' => 'Piloto / Heroína',
                'real_name' => 'Carol Danvers',
                'description' => 'Ex-piloto da Força Aérea que ganhou poderes cósmicos, se tornando uma das heroínas mais poderosas da Marvel.'
            ],
            [
                'name' => 'Dentes de Sabre',
                'image_url' => 'dentes_de_sabre.jpg',
                'first_appearance' => 'Iron Fist #14 (1977)',
                'occupation' => 'Vilão / Mercenário',
                'real_name' => 'Victor Creed',
                'description' => 'Mutante com sentidos aguçados, fator de cura e brutalidade sem limites, arqui-inimigo de Wolverine.'
            ],
            [
                'name' => 'Tio Ben',
                'image_url' => 'tio_ben.jpg',
                'first_appearance' => 'Amazing Fantasy #15',
                'occupation' => 'Homem comum / Tio do Peter Parker',
                'real_name' => 'Benjamin Parker',
                'description' => 'Tio Ben foi uma das figuras mais importantes na vida de Peter Parker. Sua morte serviu como motivação para o Homem-Aranha, inspirando a famosa frase: "Com grandes poderes, vêm grandes responsabilidades".'
            ],
            [
                'name' => 'Tia May',
                'image_url' => 'tia_may.jpg',
                'first_appearance' => 'Amazing Fantasy #15',
                'occupation' => 'Dona de casa / Guardiã de Peter Parker',
                'real_name' => 'May Reilly Parker',
                'description' => 'Tia May é a figura materna de Peter Parker, cuidando dele após a morte dos pais. Conhecida por sua bondade e força, é uma das pessoas mais importantes da vida do Homem-Aranha.'
            ],
            [
                'name' => 'Peggy Carter',
                'image_url' => 'peggy_carter.jpg',
                'first_appearance' => 'Tales of Suspense #77',
                'occupation' => 'Agente da SSR / Fundadora da S.H.I.E.L.D.',
                'real_name' => 'Margaret Carter',
                'description' => 'Peggy Carter foi uma agente britânica que lutou durante a Segunda Guerra Mundial e grande amor de Steve Rogers. Posteriormente, se tornou uma das fundadoras da S.H.I.E.L.D.'
            ],
            [
                'name' => 'Caveira Vermelha',
                'image_url' => 'caveira_vermelha.jpg',
                'first_appearance' => 'Captain America Comics #7',
                'occupation' => 'Líder terrorista / Vilão',
                'real_name' => 'Johann Schmidt',
                'description' => 'Caveira Vermelha é um dos maiores inimigos do Capitão América. Nazi fanático e mestre estrategista, busca constantemente dominar o mundo através da HYDRA.'
            ],
            [
                'name' => 'Feiticeira Escarlate',
                'image_url' => 'feiticeira_escarlate.jpg',
                'first_appearance' => 'X-Men #4',
                'occupation' => 'Heroína / Mutante',
                'real_name' => 'Wanda Maximoff',
                'description' => 'Wanda Maximoff, a Feiticeira Escarlate, é uma das personagens mais poderosas da Marvel, com habilidades de manipular a realidade e a magia do caos.'
            ],
            [
                'name' => 'Visão',
                'image_url' => 'visao.jpg',
                'first_appearance' => 'The Avengers #57',
                'occupation' => 'Herói / Androide',
                'real_name' => 'Visão',
                'description' => 'Visão é um androide criado por Ultron, mas que se uniu aos Vingadores. Dotado da Joia da Mente (em algumas versões), ele luta pela humanidade e pelo amor de Wanda Maximoff.'
            ],
        ];
        DB::table('characters')->insert($allCharacters);
    }
}