<?php

class ConcelhosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('concelhos')->truncate();
        
		\DB::table('concelhos')->insert(array (
			0 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 1,
				'name' => 'Castelo de Paiva',
			),
			1 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 1,
				'name' => 'Espinho',
			),
			2 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 1,
				'name' => 'Estarreja',
			),
			3 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 1,
				'name' => 'Santa Maria da Feira',
			),
			4 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 1,
				'name' => 'Ílhavo',
			),
			5 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 1,
				'name' => 'Mealhada',
			),
			6 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 1,
				'name' => 'Murtosa',
			),
			7 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 1,
				'name' => 'Oliveira de Azeméis',
			),
			8 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 1,
				'name' => 'Oliveira do Bairro',
			),
			9 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 1,
				'name' => 'Ovar',
			),
			10 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 1,
				'name' => 'São João da Madeira',
			),
			11 => 
			array (
				'concelho_id' => 17,
				'distrito_id' => 1,
				'name' => 'Sever do Vouga',
			),
			12 => 
			array (
				'concelho_id' => 18,
				'distrito_id' => 1,
				'name' => 'Vagos',
			),
			13 => 
			array (
				'concelho_id' => 19,
				'distrito_id' => 1,
				'name' => 'Vale de Cambra',
			),
			14 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 1,
				'name' => 'Águeda',
			),
			15 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 1,
				'name' => 'Albergaria-a-Velha',
			),
			16 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 1,
				'name' => 'Anadia',
			),
			17 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 1,
				'name' => 'Arouca',
			),
			18 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 1,
				'name' => 'Aveiro',
			),
			19 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 2,
				'name' => 'Castro Verde',
			),
			20 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 2,
				'name' => 'Cuba',
			),
			21 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 2,
				'name' => 'Ferreira do Alentejo',
			),
			22 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 2,
				'name' => 'Mértola',
			),
			23 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 2,
				'name' => 'Moura',
			),
			24 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 2,
				'name' => 'Odemira',
			),
			25 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 2,
				'name' => 'Ourique',
			),
			26 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 2,
				'name' => 'Serpa',
			),
			27 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 2,
				'name' => 'Vidigueira',
			),
			28 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 2,
				'name' => 'Aljustrel',
			),
			29 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 2,
				'name' => 'Almodôvar',
			),
			30 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 2,
				'name' => 'Alvito',
			),
			31 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 2,
				'name' => 'Barrancos',
			),
			32 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 2,
				'name' => 'Beja',
			),
			33 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 3,
				'name' => 'Esposende',
			),
			34 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 3,
				'name' => 'Fafe',
			),
			35 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 3,
				'name' => 'Guimarães',
			),
			36 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 3,
				'name' => 'Póvoa de Lanhoso',
			),
			37 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 3,
				'name' => 'Terras de Bouro',
			),
			38 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 3,
				'name' => 'Vieira do Minho',
			),
			39 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 3,
				'name' => 'Vila Nova de Famalicão',
			),
			40 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 3,
				'name' => 'Vila Verde',
			),
			41 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 3,
				'name' => 'Vizela',
			),
			42 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 3,
				'name' => 'Amares',
			),
			43 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 3,
				'name' => 'Barcelos',
			),
			44 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 3,
				'name' => 'Braga',
			),
			45 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 3,
				'name' => 'Cabeceiras de Basto',
			),
			46 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 3,
				'name' => 'Celorico de Basto',
			),
			47 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 4,
				'name' => 'Miranda do Douro',
			),
			48 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 4,
				'name' => 'Mirandela',
			),
			49 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 4,
				'name' => 'Mogadouro',
			),
			50 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 4,
				'name' => 'Torre de Moncorvo',
			),
			51 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 4,
				'name' => 'Vila Flor',
			),
			52 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 4,
				'name' => 'Vimioso',
			),
			53 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 4,
				'name' => 'Vinhais',
			),
			54 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 4,
				'name' => 'Alfândega da Fé',
			),
			55 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 4,
				'name' => 'Bragança',
			),
			56 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 4,
				'name' => 'Carrazeda de Ansiães',
			),
			57 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 4,
				'name' => 'Freixo de Espada à Cinta',
			),
			58 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 4,
				'name' => 'Macedo de Cavaleiros',
			),
			59 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 5,
				'name' => 'Oleiros',
			),
			60 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 5,
				'name' => 'Penamacor',
			),
			61 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 5,
				'name' => 'Proença-a-Nova',
			),
			62 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 5,
				'name' => 'Sertã',
			),
			63 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 5,
				'name' => 'Vila de Rei',
			),
			64 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 5,
				'name' => 'Vila Velha de Ródão',
			),
			65 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 5,
				'name' => 'Belmonte',
			),
			66 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 5,
				'name' => 'Castelo Branco',
			),
			67 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 5,
				'name' => 'Covilhã',
			),
			68 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 5,
				'name' => 'Fundão',
			),
			69 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 5,
				'name' => 'Idanha-a-Nova',
			),
			70 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 6,
				'name' => 'Góis',
			),
			71 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 6,
				'name' => 'Lousã',
			),
			72 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 6,
				'name' => 'Mira',
			),
			73 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 6,
				'name' => 'Miranda do Corvo',
			),
			74 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 6,
				'name' => 'Montemor-o-Velho',
			),
			75 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 6,
				'name' => 'Oliveira do Hospital',
			),
			76 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 6,
				'name' => 'Pampilhosa da Serra',
			),
			77 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 6,
				'name' => 'Penacova',
			),
			78 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 6,
				'name' => 'Penela',
			),
			79 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 6,
				'name' => 'Soure',
			),
			80 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 6,
				'name' => 'Tábua',
			),
			81 => 
			array (
				'concelho_id' => 17,
				'distrito_id' => 6,
				'name' => 'Vila Nova de Poiares',
			),
			82 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 6,
				'name' => 'Arganil',
			),
			83 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 6,
				'name' => 'Cantanhede',
			),
			84 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 6,
				'name' => 'Coimbra',
			),
			85 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 6,
				'name' => 'Condeixa-a-Nova',
			),
			86 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 6,
				'name' => 'Figueira da Foz',
			),
			87 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 7,
				'name' => 'Montemor-o-Novo',
			),
			88 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 7,
				'name' => 'Mora',
			),
			89 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 7,
				'name' => 'Mourão',
			),
			90 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 7,
				'name' => 'Portel',
			),
			91 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 7,
				'name' => 'Redondo',
			),
			92 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 7,
				'name' => 'Reguengos de Monsaraz',
			),
			93 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 7,
				'name' => 'Vendas Novas',
			),
			94 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 7,
				'name' => 'Viana do Alentejo',
			),
			95 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 7,
				'name' => 'Vila Viçosa',
			),
			96 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 7,
				'name' => 'Alandroal',
			),
			97 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 7,
				'name' => 'Arraiolos',
			),
			98 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 7,
				'name' => 'Borba',
			),
			99 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 7,
				'name' => 'Estremoz',
			),
			100 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 7,
				'name' => 'Évora',
			),
			101 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 8,
			'name' => 'Lagoa (Algarve)',
			),
			102 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 8,
				'name' => 'Lagos',
			),
			103 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 8,
				'name' => 'Loulé',
			),
			104 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 8,
				'name' => 'Monchique',
			),
			105 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 8,
				'name' => 'Olhão',
			),
			106 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 8,
				'name' => 'Portimão',
			),
			107 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 8,
				'name' => 'São Brás de Alportel',
			),
			108 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 8,
				'name' => 'Silves',
			),
			109 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 8,
				'name' => 'Tavira',
			),
			110 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 8,
				'name' => 'Vila do Bispo',
			),
			111 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 8,
				'name' => 'Vila Real de Santo António',
			),
			112 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 8,
				'name' => 'Albufeira',
			),
			113 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 8,
				'name' => 'Alcoutim',
			),
			114 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 8,
				'name' => 'Aljezur',
			),
			115 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 8,
				'name' => 'Castro Marim',
			),
			116 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 8,
				'name' => 'Faro',
			),
			117 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 9,
				'name' => 'Gouveia',
			),
			118 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 9,
				'name' => 'Guarda',
			),
			119 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 9,
				'name' => 'Manteigas',
			),
			120 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 9,
				'name' => 'Meda',
			),
			121 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 9,
				'name' => 'Pinhel',
			),
			122 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 9,
				'name' => 'Sabugal',
			),
			123 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 9,
				'name' => 'Seia',
			),
			124 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 9,
				'name' => 'Trancoso',
			),
			125 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 9,
				'name' => 'Vila Nova de Foz Côa',
			),
			126 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 9,
				'name' => 'Aguiar da Beira',
			),
			127 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 9,
				'name' => 'Almeida',
			),
			128 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 9,
				'name' => 'Celorico da Beira',
			),
			129 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 9,
				'name' => 'Figueira de Castelo Rodrigo',
			),
			130 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 9,
				'name' => 'Fornos de Algodres',
			),
			131 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 10,
				'name' => 'Caldas da Rainha',
			),
			132 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 10,
				'name' => 'Castanheira de Pêra',
			),
			133 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 10,
				'name' => 'Figueiró dos Vinhos',
			),
			134 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 10,
				'name' => 'Leiria',
			),
			135 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 10,
				'name' => 'Marinha Grande',
			),
			136 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 10,
				'name' => 'Nazaré',
			),
			137 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 10,
				'name' => 'Óbidos',
			),
			138 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 10,
				'name' => 'Pedrógão Grande',
			),
			139 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 10,
				'name' => 'Peniche',
			),
			140 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 10,
				'name' => 'Pombal',
			),
			141 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 10,
				'name' => 'Porto de Mós',
			),
			142 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 10,
				'name' => 'Alcobaça',
			),
			143 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 10,
				'name' => 'Alvaiázere',
			),
			144 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 10,
				'name' => 'Ansião',
			),
			145 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 10,
				'name' => 'Batalha',
			),
			146 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 10,
				'name' => 'Bombarral',
			),
			147 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 11,
				'name' => 'Lisboa',
			),
			148 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 11,
				'name' => 'Loures',
			),
			149 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 11,
				'name' => 'Lourinhã',
			),
			150 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 11,
				'name' => 'Mafra',
			),
			151 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 11,
				'name' => 'Oeiras',
			),
			152 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 11,
				'name' => 'Sintra',
			),
			153 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 11,
				'name' => 'Sobral de Monte Agraço',
			),
			154 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 11,
				'name' => 'Torres Vedras',
			),
			155 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 11,
				'name' => 'Vila Franca de Xira',
			),
			156 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 11,
				'name' => 'Amadora',
			),
			157 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 11,
				'name' => 'Odivelas',
			),
			158 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 11,
				'name' => 'Alenquer',
			),
			159 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 11,
				'name' => 'Arruda dos Vinhos',
			),
			160 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 11,
				'name' => 'Azambuja',
			),
			161 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 11,
				'name' => 'Cadaval',
			),
			162 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 11,
				'name' => 'Cascais',
			),
			163 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 12,
				'name' => 'Crato',
			),
			164 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 12,
				'name' => 'Elvas',
			),
			165 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 12,
				'name' => 'Fronteira',
			),
			166 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 12,
				'name' => 'Gavião',
			),
			167 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 12,
				'name' => 'Marvão',
			),
			168 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 12,
				'name' => 'Monforte',
			),
			169 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 12,
				'name' => 'Nisa',
			),
			170 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 12,
				'name' => 'Ponte de Sor',
			),
			171 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 12,
				'name' => 'Portalegre',
			),
			172 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 12,
				'name' => 'Sousel',
			),
			173 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 12,
				'name' => 'Alter do Chão',
			),
			174 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 12,
				'name' => 'Arronches',
			),
			175 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 12,
				'name' => 'Avis',
			),
			176 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 12,
				'name' => 'Campo Maior',
			),
			177 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 12,
				'name' => 'Castelo de Vide',
			),
			178 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 13,
				'name' => 'Maia',
			),
			179 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 13,
				'name' => 'Marco de Canaveses',
			),
			180 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 13,
				'name' => 'Matosinhos',
			),
			181 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 13,
				'name' => 'Paços de Ferreira',
			),
			182 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 13,
				'name' => 'Paredes',
			),
			183 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 13,
				'name' => 'Penafiel',
			),
			184 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 13,
				'name' => 'Porto',
			),
			185 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 13,
				'name' => 'Póvoa de Varzim',
			),
			186 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 13,
				'name' => 'Santo Tirso',
			),
			187 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 13,
				'name' => 'Valongo',
			),
			188 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 13,
				'name' => 'Vila do Conde',
			),
			189 => 
			array (
				'concelho_id' => 17,
				'distrito_id' => 13,
				'name' => 'Vila Nova de Gaia',
			),
			190 => 
			array (
				'concelho_id' => 18,
				'distrito_id' => 13,
				'name' => 'Trofa',
			),
			191 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 13,
				'name' => 'Amarante',
			),
			192 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 13,
				'name' => 'Baião',
			),
			193 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 13,
				'name' => 'Felgueiras',
			),
			194 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 13,
				'name' => 'Gondomar',
			),
			195 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 13,
				'name' => 'Lousada',
			),
			196 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 14,
				'name' => 'Cartaxo',
			),
			197 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 14,
				'name' => 'Chamusca',
			),
			198 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 14,
				'name' => 'Constância',
			),
			199 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 14,
				'name' => 'Coruche',
			),
			200 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 14,
				'name' => 'Entroncamento',
			),
			201 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 14,
				'name' => 'Ferreira do Zêzere',
			),
			202 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 14,
				'name' => 'Golegã',
			),
			203 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 14,
				'name' => 'Mação',
			),
			204 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 14,
				'name' => 'Rio Maior',
			),
			205 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 14,
				'name' => 'Salvaterra de Magos',
			),
			206 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 14,
				'name' => 'Santarém',
			),
			207 => 
			array (
				'concelho_id' => 17,
				'distrito_id' => 14,
				'name' => 'Sardoal',
			),
			208 => 
			array (
				'concelho_id' => 18,
				'distrito_id' => 14,
				'name' => 'Tomar',
			),
			209 => 
			array (
				'concelho_id' => 19,
				'distrito_id' => 14,
				'name' => 'Torres Novas',
			),
			210 => 
			array (
				'concelho_id' => 20,
				'distrito_id' => 14,
				'name' => 'Vila Nova da Barquinha',
			),
			211 => 
			array (
				'concelho_id' => 21,
				'distrito_id' => 14,
				'name' => 'Ourém',
			),
			212 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 14,
				'name' => 'Abrantes',
			),
			213 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 14,
				'name' => 'Alcanena',
			),
			214 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 14,
				'name' => 'Almeirim',
			),
			215 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 14,
				'name' => 'Alpiarça',
			),
			216 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 14,
				'name' => 'Benavente',
			),
			217 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 15,
				'name' => 'Moita',
			),
			218 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 15,
				'name' => 'Montijo',
			),
			219 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 15,
				'name' => 'Palmela',
			),
			220 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 15,
				'name' => 'Santiago do Cacém',
			),
			221 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 15,
				'name' => 'Seixal',
			),
			222 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 15,
				'name' => 'Sesimbra',
			),
			223 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 15,
				'name' => 'Setúbal',
			),
			224 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 15,
				'name' => 'Sines',
			),
			225 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 15,
				'name' => 'Alcácer do Sal',
			),
			226 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 15,
				'name' => 'Alcochete',
			),
			227 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 15,
				'name' => 'Almada',
			),
			228 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 15,
				'name' => 'Barreiro',
			),
			229 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 15,
				'name' => 'Grândola',
			),
			230 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 16,
				'name' => 'Ponte da Barca',
			),
			231 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 16,
				'name' => 'Ponte de Lima',
			),
			232 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 16,
				'name' => 'Valença',
			),
			233 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 16,
				'name' => 'Viana do Castelo',
			),
			234 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 16,
				'name' => 'Vila Nova de Cerveira',
			),
			235 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 16,
				'name' => 'Arcos de Valdevez',
			),
			236 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 16,
				'name' => 'Caminha',
			),
			237 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 16,
				'name' => 'Melgaço',
			),
			238 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 16,
				'name' => 'Monção',
			),
			239 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 16,
				'name' => 'Paredes de Coura',
			),
			240 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 17,
				'name' => 'Mondim de Basto',
			),
			241 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 17,
				'name' => 'Montalegre',
			),
			242 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 17,
				'name' => 'Murça',
			),
			243 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 17,
				'name' => 'Peso da Régua',
			),
			244 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 17,
				'name' => 'Ribeira de Pena',
			),
			245 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 17,
				'name' => 'Sabrosa',
			),
			246 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 17,
				'name' => 'Santa Marta de Penaguião',
			),
			247 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 17,
				'name' => 'Valpaços',
			),
			248 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 17,
				'name' => 'Vila Pouca de Aguiar',
			),
			249 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 17,
				'name' => 'Vila Real',
			),
			250 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 17,
				'name' => 'Alijó',
			),
			251 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 17,
				'name' => 'Boticas',
			),
			252 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 17,
				'name' => 'Chaves',
			),
			253 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 17,
				'name' => 'Mesão Frio',
			),
			254 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 18,
				'name' => 'Lamego',
			),
			255 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 18,
				'name' => 'Mangualde',
			),
			256 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 18,
				'name' => 'Moimenta da Beira',
			),
			257 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 18,
				'name' => 'Mortágua',
			),
			258 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 18,
				'name' => 'Nelas',
			),
			259 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 18,
				'name' => 'Oliveira de Frades',
			),
			260 => 
			array (
				'concelho_id' => 11,
				'distrito_id' => 18,
				'name' => 'Penalva do Castelo',
			),
			261 => 
			array (
				'concelho_id' => 12,
				'distrito_id' => 18,
				'name' => 'Penedono',
			),
			262 => 
			array (
				'concelho_id' => 13,
				'distrito_id' => 18,
				'name' => 'Resende',
			),
			263 => 
			array (
				'concelho_id' => 14,
				'distrito_id' => 18,
				'name' => 'Santa Comba Dão',
			),
			264 => 
			array (
				'concelho_id' => 15,
				'distrito_id' => 18,
				'name' => 'São João da Pesqueira',
			),
			265 => 
			array (
				'concelho_id' => 16,
				'distrito_id' => 18,
				'name' => 'São Pedro do Sul',
			),
			266 => 
			array (
				'concelho_id' => 17,
				'distrito_id' => 18,
				'name' => 'Sátão',
			),
			267 => 
			array (
				'concelho_id' => 18,
				'distrito_id' => 18,
				'name' => 'Sernancelhe',
			),
			268 => 
			array (
				'concelho_id' => 19,
				'distrito_id' => 18,
				'name' => 'Tabuaço',
			),
			269 => 
			array (
				'concelho_id' => 20,
				'distrito_id' => 18,
				'name' => 'Tarouca',
			),
			270 => 
			array (
				'concelho_id' => 21,
				'distrito_id' => 18,
				'name' => 'Tondela',
			),
			271 => 
			array (
				'concelho_id' => 22,
				'distrito_id' => 18,
				'name' => 'Vila Nova de Paiva',
			),
			272 => 
			array (
				'concelho_id' => 23,
				'distrito_id' => 18,
				'name' => 'Viseu',
			),
			273 => 
			array (
				'concelho_id' => 24,
				'distrito_id' => 18,
				'name' => 'Vouzela',
			),
			274 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 18,
				'name' => 'Armamar',
			),
			275 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 18,
				'name' => 'Carregal do Sal',
			),
			276 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 18,
				'name' => 'Castro Daire',
			),
			277 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 18,
				'name' => 'Cinfães',
			),
			278 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 19,
				'name' => 'Ponta do Sol',
			),
			279 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 19,
				'name' => 'Porto Moniz',
			),
			280 => 
			array (
				'concelho_id' => 7,
				'distrito_id' => 19,
				'name' => 'Ribeira Brava',
			),
			281 => 
			array (
				'concelho_id' => 8,
				'distrito_id' => 19,
				'name' => 'Santa Cruz',
			),
			282 => 
			array (
				'concelho_id' => 9,
				'distrito_id' => 19,
				'name' => 'Santana',
			),
			283 => 
			array (
				'concelho_id' => 10,
				'distrito_id' => 19,
				'name' => 'São Vicente',
			),
			284 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 19,
			'name' => 'Calheta (Madeira)',
			),
			285 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 19,
				'name' => 'Câmara de Lobos',
			),
			286 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 19,
				'name' => 'Funchal',
			),
			287 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 19,
				'name' => 'Machico',
			),
			288 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 20,
				'name' => 'Porto Santo',
			),
			289 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 21,
				'name' => 'Vila do Porto',
			),
			290 => 
			array (
				'concelho_id' => 5,
				'distrito_id' => 22,
				'name' => 'Ribeira Grande',
			),
			291 => 
			array (
				'concelho_id' => 6,
				'distrito_id' => 22,
				'name' => 'Vila Franca do Campo',
			),
			292 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 22,
			'name' => 'Lagoa (São Miguel)',
			),
			293 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 22,
				'name' => 'Nordeste',
			),
			294 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 22,
				'name' => 'Ponta Delgada',
			),
			295 => 
			array (
				'concelho_id' => 4,
				'distrito_id' => 22,
				'name' => 'Povoação',
			),
			296 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 23,
				'name' => 'Angra do Heroísmo',
			),
			297 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 23,
				'name' => 'Praia da Vitória',
			),
			298 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 24,
				'name' => 'Santa Cruz da Graciosa',
			),
			299 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 25,
			'name' => 'Calheta (São Jorge)',
			),
			300 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 25,
				'name' => 'Velas',
			),
			301 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 26,
				'name' => 'Lajes do Pico',
			),
			302 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 26,
				'name' => 'Madalena',
			),
			303 => 
			array (
				'concelho_id' => 3,
				'distrito_id' => 26,
				'name' => 'São Roque do Pico',
			),
			304 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 27,
				'name' => 'Horta',
			),
			305 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 28,
				'name' => 'Lajes das Flores',
			),
			306 => 
			array (
				'concelho_id' => 2,
				'distrito_id' => 28,
				'name' => 'Santa Cruz das Flores',
			),
			307 => 
			array (
				'concelho_id' => 1,
				'distrito_id' => 29,
				'name' => 'Corvo',
			),
		));
	}

}
