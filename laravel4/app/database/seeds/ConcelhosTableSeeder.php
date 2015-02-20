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
				'id' => 1,
				'concelho_id' => 6,
				'distrito_id' => 1,
				'name' => 'Castelo de Paiva',
				'created_at' => '2015-01-17 02:00:30',
				'updated_at' => '2015-01-17 02:00:30',
			),
			1 =>
			array (
				'id' => 2,
				'concelho_id' => 7,
				'distrito_id' => 1,
				'name' => 'Espinho',
				'created_at' => '2015-01-17 02:00:30',
				'updated_at' => '2015-01-17 02:00:30',
			),
			2 =>
			array (
				'id' => 3,
				'concelho_id' => 8,
				'distrito_id' => 1,
				'name' => 'Estarreja',
				'created_at' => '2015-01-17 02:00:30',
				'updated_at' => '2015-01-17 02:00:30',
			),
			3 =>
			array (
				'id' => 4,
				'concelho_id' => 9,
				'distrito_id' => 1,
				'name' => 'Santa Maria da Feira',
				'created_at' => '2015-01-17 02:00:30',
				'updated_at' => '2015-01-17 02:00:30',
			),
			4 =>
			array (
				'id' => 5,
				'concelho_id' => 10,
				'distrito_id' => 1,
				'name' => 'Ílhavo',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			5 =>
			array (
				'id' => 6,
				'concelho_id' => 11,
				'distrito_id' => 1,
				'name' => 'Mealhada',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			6 =>
			array (
				'id' => 7,
				'concelho_id' => 12,
				'distrito_id' => 1,
				'name' => 'Murtosa',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			7 =>
			array (
				'id' => 8,
				'concelho_id' => 13,
				'distrito_id' => 1,
				'name' => 'Oliveira de Azeméis',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			8 =>
			array (
				'id' => 9,
				'concelho_id' => 14,
				'distrito_id' => 1,
				'name' => 'Oliveira do Bairro',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			9 =>
			array (
				'id' => 10,
				'concelho_id' => 15,
				'distrito_id' => 1,
				'name' => 'Ovar',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			10 =>
			array (
				'id' => 11,
				'concelho_id' => 16,
				'distrito_id' => 1,
				'name' => 'São João da Madeira',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			11 =>
			array (
				'id' => 12,
				'concelho_id' => 17,
				'distrito_id' => 1,
				'name' => 'Sever do Vouga',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			12 =>
			array (
				'id' => 13,
				'concelho_id' => 18,
				'distrito_id' => 1,
				'name' => 'Vagos',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			13 =>
			array (
				'id' => 14,
				'concelho_id' => 19,
				'distrito_id' => 1,
				'name' => 'Vale de Cambra',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			14 =>
			array (
				'id' => 15,
				'concelho_id' => 1,
				'distrito_id' => 1,
				'name' => 'Águeda',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			15 =>
			array (
				'id' => 16,
				'concelho_id' => 2,
				'distrito_id' => 1,
				'name' => 'Albergaria-a-Velha',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			16 =>
			array (
				'id' => 17,
				'concelho_id' => 3,
				'distrito_id' => 1,
				'name' => 'Anadia',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			17 =>
			array (
				'id' => 18,
				'concelho_id' => 4,
				'distrito_id' => 1,
				'name' => 'Arouca',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			18 =>
			array (
				'id' => 19,
				'concelho_id' => 5,
				'distrito_id' => 1,
				'name' => 'Aveiro',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			19 =>
			array (
				'id' => 20,
				'concelho_id' => 6,
				'distrito_id' => 2,
				'name' => 'Castro Verde',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			20 =>
			array (
				'id' => 21,
				'concelho_id' => 7,
				'distrito_id' => 2,
				'name' => 'Cuba',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			21 =>
			array (
				'id' => 22,
				'concelho_id' => 8,
				'distrito_id' => 2,
				'name' => 'Ferreira do Alentejo',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			22 =>
			array (
				'id' => 23,
				'concelho_id' => 9,
				'distrito_id' => 2,
				'name' => 'Mértola',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			23 =>
			array (
				'id' => 24,
				'concelho_id' => 10,
				'distrito_id' => 2,
				'name' => 'Moura',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			24 =>
			array (
				'id' => 25,
				'concelho_id' => 11,
				'distrito_id' => 2,
				'name' => 'Odemira',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			25 =>
			array (
				'id' => 26,
				'concelho_id' => 12,
				'distrito_id' => 2,
				'name' => 'Ourique',
				'created_at' => '2015-01-17 02:00:31',
				'updated_at' => '2015-01-17 02:00:31',
			),
			26 =>
			array (
				'id' => 27,
				'concelho_id' => 13,
				'distrito_id' => 2,
				'name' => 'Serpa',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			27 =>
			array (
				'id' => 28,
				'concelho_id' => 14,
				'distrito_id' => 2,
				'name' => 'Vidigueira',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			28 =>
			array (
				'id' => 29,
				'concelho_id' => 1,
				'distrito_id' => 2,
				'name' => 'Aljustrel',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			29 =>
			array (
				'id' => 30,
				'concelho_id' => 2,
				'distrito_id' => 2,
				'name' => 'Almodôvar',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			30 =>
			array (
				'id' => 31,
				'concelho_id' => 3,
				'distrito_id' => 2,
				'name' => 'Alvito',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			31 =>
			array (
				'id' => 32,
				'concelho_id' => 4,
				'distrito_id' => 2,
				'name' => 'Barrancos',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			32 =>
			array (
				'id' => 33,
				'concelho_id' => 5,
				'distrito_id' => 2,
				'name' => 'Beja',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			33 =>
			array (
				'id' => 34,
				'concelho_id' => 6,
				'distrito_id' => 3,
				'name' => 'Esposende',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			34 =>
			array (
				'id' => 35,
				'concelho_id' => 7,
				'distrito_id' => 3,
				'name' => 'Fafe',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			35 =>
			array (
				'id' => 36,
				'concelho_id' => 8,
				'distrito_id' => 3,
				'name' => 'Guimarães',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			36 =>
			array (
				'id' => 37,
				'concelho_id' => 9,
				'distrito_id' => 3,
				'name' => 'Póvoa de Lanhoso',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			37 =>
			array (
				'id' => 38,
				'concelho_id' => 10,
				'distrito_id' => 3,
				'name' => 'Terras de Bouro',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			38 =>
			array (
				'id' => 39,
				'concelho_id' => 11,
				'distrito_id' => 3,
				'name' => 'Vieira do Minho',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			39 =>
			array (
				'id' => 40,
				'concelho_id' => 12,
				'distrito_id' => 3,
				'name' => 'Vila Nova de Famalicão',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			40 =>
			array (
				'id' => 41,
				'concelho_id' => 13,
				'distrito_id' => 3,
				'name' => 'Vila Verde',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			41 =>
			array (
				'id' => 42,
				'concelho_id' => 14,
				'distrito_id' => 3,
				'name' => 'Vizela',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			42 =>
			array (
				'id' => 43,
				'concelho_id' => 1,
				'distrito_id' => 3,
				'name' => 'Amares',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			43 =>
			array (
				'id' => 44,
				'concelho_id' => 2,
				'distrito_id' => 3,
				'name' => 'Barcelos',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			44 =>
			array (
				'id' => 45,
				'concelho_id' => 3,
				'distrito_id' => 3,
				'name' => 'Braga',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			45 =>
			array (
				'id' => 46,
				'concelho_id' => 4,
				'distrito_id' => 3,
				'name' => 'Cabeceiras de Basto',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			46 =>
			array (
				'id' => 47,
				'concelho_id' => 5,
				'distrito_id' => 3,
				'name' => 'Celorico de Basto',
				'created_at' => '2015-01-17 02:00:32',
				'updated_at' => '2015-01-17 02:00:32',
			),
			47 =>
			array (
				'id' => 48,
				'concelho_id' => 6,
				'distrito_id' => 4,
				'name' => 'Miranda do Douro',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			48 =>
			array (
				'id' => 49,
				'concelho_id' => 7,
				'distrito_id' => 4,
				'name' => 'Mirandela',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			49 =>
			array (
				'id' => 50,
				'concelho_id' => 8,
				'distrito_id' => 4,
				'name' => 'Mogadouro',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			50 =>
			array (
				'id' => 51,
				'concelho_id' => 9,
				'distrito_id' => 4,
				'name' => 'Torre de Moncorvo',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			51 =>
			array (
				'id' => 52,
				'concelho_id' => 10,
				'distrito_id' => 4,
				'name' => 'Vila Flor',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			52 =>
			array (
				'id' => 53,
				'concelho_id' => 11,
				'distrito_id' => 4,
				'name' => 'Vimioso',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			53 =>
			array (
				'id' => 54,
				'concelho_id' => 12,
				'distrito_id' => 4,
				'name' => 'Vinhais',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			54 =>
			array (
				'id' => 55,
				'concelho_id' => 1,
				'distrito_id' => 4,
				'name' => 'Alfândega da Fé',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			55 =>
			array (
				'id' => 56,
				'concelho_id' => 2,
				'distrito_id' => 4,
				'name' => 'Bragança',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			56 =>
			array (
				'id' => 57,
				'concelho_id' => 3,
				'distrito_id' => 4,
				'name' => 'Carrazeda de Ansiães',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			57 =>
			array (
				'id' => 58,
				'concelho_id' => 4,
				'distrito_id' => 4,
				'name' => 'Freixo de Espada à Cinta',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			58 =>
			array (
				'id' => 59,
				'concelho_id' => 5,
				'distrito_id' => 4,
				'name' => 'Macedo de Cavaleiros',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			59 =>
			array (
				'id' => 60,
				'concelho_id' => 6,
				'distrito_id' => 5,
				'name' => 'Oleiros',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			60 =>
			array (
				'id' => 61,
				'concelho_id' => 7,
				'distrito_id' => 5,
				'name' => 'Penamacor',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			61 =>
			array (
				'id' => 62,
				'concelho_id' => 8,
				'distrito_id' => 5,
				'name' => 'Proença-a-Nova',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			62 =>
			array (
				'id' => 63,
				'concelho_id' => 9,
				'distrito_id' => 5,
				'name' => 'Sertã',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			63 =>
			array (
				'id' => 64,
				'concelho_id' => 10,
				'distrito_id' => 5,
				'name' => 'Vila de Rei',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			64 =>
			array (
				'id' => 65,
				'concelho_id' => 11,
				'distrito_id' => 5,
				'name' => 'Vila Velha de Ródão',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			65 =>
			array (
				'id' => 66,
				'concelho_id' => 1,
				'distrito_id' => 5,
				'name' => 'Belmonte',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			66 =>
			array (
				'id' => 67,
				'concelho_id' => 2,
				'distrito_id' => 5,
				'name' => 'Castelo Branco',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			67 =>
			array (
				'id' => 68,
				'concelho_id' => 3,
				'distrito_id' => 5,
				'name' => 'Covilhã',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			68 =>
			array (
				'id' => 69,
				'concelho_id' => 4,
				'distrito_id' => 5,
				'name' => 'Fundão',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			69 =>
			array (
				'id' => 70,
				'concelho_id' => 5,
				'distrito_id' => 5,
				'name' => 'Idanha-a-Nova',
				'created_at' => '2015-01-17 02:00:33',
				'updated_at' => '2015-01-17 02:00:33',
			),
			70 =>
			array (
				'id' => 71,
				'concelho_id' => 6,
				'distrito_id' => 6,
				'name' => 'Góis',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			71 =>
			array (
				'id' => 72,
				'concelho_id' => 7,
				'distrito_id' => 6,
				'name' => 'Lousã',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			72 =>
			array (
				'id' => 73,
				'concelho_id' => 8,
				'distrito_id' => 6,
				'name' => 'Mira',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			73 =>
			array (
				'id' => 74,
				'concelho_id' => 9,
				'distrito_id' => 6,
				'name' => 'Miranda do Corvo',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			74 =>
			array (
				'id' => 75,
				'concelho_id' => 10,
				'distrito_id' => 6,
				'name' => 'Montemor-o-Velho',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			75 =>
			array (
				'id' => 76,
				'concelho_id' => 11,
				'distrito_id' => 6,
				'name' => 'Oliveira do Hospital',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			76 =>
			array (
				'id' => 77,
				'concelho_id' => 12,
				'distrito_id' => 6,
				'name' => 'Pampilhosa da Serra',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			77 =>
			array (
				'id' => 78,
				'concelho_id' => 13,
				'distrito_id' => 6,
				'name' => 'Penacova',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			78 =>
			array (
				'id' => 79,
				'concelho_id' => 14,
				'distrito_id' => 6,
				'name' => 'Penela',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			79 =>
			array (
				'id' => 80,
				'concelho_id' => 15,
				'distrito_id' => 6,
				'name' => 'Soure',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			80 =>
			array (
				'id' => 81,
				'concelho_id' => 16,
				'distrito_id' => 6,
				'name' => 'Tábua',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			81 =>
			array (
				'id' => 82,
				'concelho_id' => 17,
				'distrito_id' => 6,
				'name' => 'Vila Nova de Poiares',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			82 =>
			array (
				'id' => 83,
				'concelho_id' => 1,
				'distrito_id' => 6,
				'name' => 'Arganil',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			83 =>
			array (
				'id' => 84,
				'concelho_id' => 2,
				'distrito_id' => 6,
				'name' => 'Cantanhede',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			84 =>
			array (
				'id' => 85,
				'concelho_id' => 3,
				'distrito_id' => 6,
				'name' => 'Coimbra',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			85 =>
			array (
				'id' => 86,
				'concelho_id' => 4,
				'distrito_id' => 6,
				'name' => 'Condeixa-a-Nova',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			86 =>
			array (
				'id' => 87,
				'concelho_id' => 5,
				'distrito_id' => 6,
				'name' => 'Figueira da Foz',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			87 =>
			array (
				'id' => 88,
				'concelho_id' => 6,
				'distrito_id' => 7,
				'name' => 'Montemor-o-Novo',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			88 =>
			array (
				'id' => 89,
				'concelho_id' => 7,
				'distrito_id' => 7,
				'name' => 'Mora',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			89 =>
			array (
				'id' => 90,
				'concelho_id' => 8,
				'distrito_id' => 7,
				'name' => 'Mourão',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			90 =>
			array (
				'id' => 91,
				'concelho_id' => 9,
				'distrito_id' => 7,
				'name' => 'Portel',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			91 =>
			array (
				'id' => 92,
				'concelho_id' => 10,
				'distrito_id' => 7,
				'name' => 'Redondo',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			92 =>
			array (
				'id' => 93,
				'concelho_id' => 11,
				'distrito_id' => 7,
				'name' => 'Reguengos de Monsaraz',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			93 =>
			array (
				'id' => 94,
				'concelho_id' => 12,
				'distrito_id' => 7,
				'name' => 'Vendas Novas',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			94 =>
			array (
				'id' => 95,
				'concelho_id' => 13,
				'distrito_id' => 7,
				'name' => 'Viana do Alentejo',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			95 =>
			array (
				'id' => 96,
				'concelho_id' => 14,
				'distrito_id' => 7,
				'name' => 'Vila Viçosa',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			96 =>
			array (
				'id' => 97,
				'concelho_id' => 1,
				'distrito_id' => 7,
				'name' => 'Alandroal',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			97 =>
			array (
				'id' => 98,
				'concelho_id' => 2,
				'distrito_id' => 7,
				'name' => 'Arraiolos',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			98 =>
			array (
				'id' => 99,
				'concelho_id' => 3,
				'distrito_id' => 7,
				'name' => 'Borba',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			99 =>
			array (
				'id' => 100,
				'concelho_id' => 4,
				'distrito_id' => 7,
				'name' => 'Estremoz',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			100 =>
			array (
				'id' => 101,
				'concelho_id' => 5,
				'distrito_id' => 7,
				'name' => 'Évora',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			101 =>
			array (
				'id' => 102,
				'concelho_id' => 6,
				'distrito_id' => 8,
			'name' => 'Lagoa (Algarve)',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			102 =>
			array (
				'id' => 103,
				'concelho_id' => 7,
				'distrito_id' => 8,
				'name' => 'Lagos',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			103 =>
			array (
				'id' => 104,
				'concelho_id' => 8,
				'distrito_id' => 8,
				'name' => 'Loulé',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			104 =>
			array (
				'id' => 105,
				'concelho_id' => 9,
				'distrito_id' => 8,
				'name' => 'Monchique',
				'created_at' => '2015-01-17 02:00:34',
				'updated_at' => '2015-01-17 02:00:34',
			),
			105 =>
			array (
				'id' => 106,
				'concelho_id' => 10,
				'distrito_id' => 8,
				'name' => 'Olhão',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			106 =>
			array (
				'id' => 107,
				'concelho_id' => 11,
				'distrito_id' => 8,
				'name' => 'Portimão',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			107 =>
			array (
				'id' => 108,
				'concelho_id' => 12,
				'distrito_id' => 8,
				'name' => 'São Brás de Alportel',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			108 =>
			array (
				'id' => 109,
				'concelho_id' => 13,
				'distrito_id' => 8,
				'name' => 'Silves',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			109 =>
			array (
				'id' => 110,
				'concelho_id' => 14,
				'distrito_id' => 8,
				'name' => 'Tavira',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			110 =>
			array (
				'id' => 111,
				'concelho_id' => 15,
				'distrito_id' => 8,
				'name' => 'Vila do Bispo',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			111 =>
			array (
				'id' => 112,
				'concelho_id' => 16,
				'distrito_id' => 8,
				'name' => 'Vila Real de Santo António',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			112 =>
			array (
				'id' => 113,
				'concelho_id' => 1,
				'distrito_id' => 8,
				'name' => 'Albufeira',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			113 =>
			array (
				'id' => 114,
				'concelho_id' => 2,
				'distrito_id' => 8,
				'name' => 'Alcoutim',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			114 =>
			array (
				'id' => 115,
				'concelho_id' => 3,
				'distrito_id' => 8,
				'name' => 'Aljezur',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			115 =>
			array (
				'id' => 116,
				'concelho_id' => 4,
				'distrito_id' => 8,
				'name' => 'Castro Marim',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			116 =>
			array (
				'id' => 117,
				'concelho_id' => 5,
				'distrito_id' => 8,
				'name' => 'Faro',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			117 =>
			array (
				'id' => 118,
				'concelho_id' => 6,
				'distrito_id' => 9,
				'name' => 'Gouveia',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			118 =>
			array (
				'id' => 119,
				'concelho_id' => 7,
				'distrito_id' => 9,
				'name' => 'Guarda',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			119 =>
			array (
				'id' => 120,
				'concelho_id' => 8,
				'distrito_id' => 9,
				'name' => 'Manteigas',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			120 =>
			array (
				'id' => 121,
				'concelho_id' => 9,
				'distrito_id' => 9,
				'name' => 'Meda',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			121 =>
			array (
				'id' => 122,
				'concelho_id' => 10,
				'distrito_id' => 9,
				'name' => 'Pinhel',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			122 =>
			array (
				'id' => 123,
				'concelho_id' => 11,
				'distrito_id' => 9,
				'name' => 'Sabugal',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			123 =>
			array (
				'id' => 124,
				'concelho_id' => 12,
				'distrito_id' => 9,
				'name' => 'Seia',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			124 =>
			array (
				'id' => 125,
				'concelho_id' => 13,
				'distrito_id' => 9,
				'name' => 'Trancoso',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			125 =>
			array (
				'id' => 126,
				'concelho_id' => 14,
				'distrito_id' => 9,
				'name' => 'Vila Nova de Foz Côa',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			126 =>
			array (
				'id' => 127,
				'concelho_id' => 1,
				'distrito_id' => 9,
				'name' => 'Aguiar da Beira',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			127 =>
			array (
				'id' => 128,
				'concelho_id' => 2,
				'distrito_id' => 9,
				'name' => 'Almeida',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			128 =>
			array (
				'id' => 129,
				'concelho_id' => 3,
				'distrito_id' => 9,
				'name' => 'Celorico da Beira',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			129 =>
			array (
				'id' => 130,
				'concelho_id' => 4,
				'distrito_id' => 9,
				'name' => 'Figueira de Castelo Rodrigo',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			130 =>
			array (
				'id' => 131,
				'concelho_id' => 5,
				'distrito_id' => 9,
				'name' => 'Fornos de Algodres',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			131 =>
			array (
				'id' => 132,
				'concelho_id' => 6,
				'distrito_id' => 10,
				'name' => 'Caldas da Rainha',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			132 =>
			array (
				'id' => 133,
				'concelho_id' => 7,
				'distrito_id' => 10,
				'name' => 'Castanheira de Pêra',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			133 =>
			array (
				'id' => 134,
				'concelho_id' => 8,
				'distrito_id' => 10,
				'name' => 'Figueiró dos Vinhos',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			134 =>
			array (
				'id' => 135,
				'concelho_id' => 9,
				'distrito_id' => 10,
				'name' => 'Leiria',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			135 =>
			array (
				'id' => 136,
				'concelho_id' => 10,
				'distrito_id' => 10,
				'name' => 'Marinha Grande',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			136 =>
			array (
				'id' => 137,
				'concelho_id' => 11,
				'distrito_id' => 10,
				'name' => 'Nazaré',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			137 =>
			array (
				'id' => 138,
				'concelho_id' => 12,
				'distrito_id' => 10,
				'name' => 'Óbidos',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			138 =>
			array (
				'id' => 139,
				'concelho_id' => 13,
				'distrito_id' => 10,
				'name' => 'Pedrógão Grande',
				'created_at' => '2015-01-17 02:00:35',
				'updated_at' => '2015-01-17 02:00:35',
			),
			139 =>
			array (
				'id' => 140,
				'concelho_id' => 14,
				'distrito_id' => 10,
				'name' => 'Peniche',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			140 =>
			array (
				'id' => 141,
				'concelho_id' => 15,
				'distrito_id' => 10,
				'name' => 'Pombal',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			141 =>
			array (
				'id' => 142,
				'concelho_id' => 16,
				'distrito_id' => 10,
				'name' => 'Porto de Mós',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			142 =>
			array (
				'id' => 143,
				'concelho_id' => 1,
				'distrito_id' => 10,
				'name' => 'Alcobaça',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			143 =>
			array (
				'id' => 144,
				'concelho_id' => 2,
				'distrito_id' => 10,
				'name' => 'Alvaiázere',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			144 =>
			array (
				'id' => 145,
				'concelho_id' => 3,
				'distrito_id' => 10,
				'name' => 'Ansião',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			145 =>
			array (
				'id' => 146,
				'concelho_id' => 4,
				'distrito_id' => 10,
				'name' => 'Batalha',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			146 =>
			array (
				'id' => 147,
				'concelho_id' => 5,
				'distrito_id' => 10,
				'name' => 'Bombarral',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			147 =>
			array (
				'id' => 148,
				'concelho_id' => 6,
				'distrito_id' => 11,
				'name' => 'Lisboa',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			148 =>
			array (
				'id' => 149,
				'concelho_id' => 7,
				'distrito_id' => 11,
				'name' => 'Loures',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			149 =>
			array (
				'id' => 150,
				'concelho_id' => 8,
				'distrito_id' => 11,
				'name' => 'Lourinhã',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			150 =>
			array (
				'id' => 151,
				'concelho_id' => 9,
				'distrito_id' => 11,
				'name' => 'Mafra',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			151 =>
			array (
				'id' => 152,
				'concelho_id' => 10,
				'distrito_id' => 11,
				'name' => 'Oeiras',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			152 =>
			array (
				'id' => 153,
				'concelho_id' => 11,
				'distrito_id' => 11,
				'name' => 'Sintra',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			153 =>
			array (
				'id' => 154,
				'concelho_id' => 12,
				'distrito_id' => 11,
				'name' => 'Sobral de Monte Agraço',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			154 =>
			array (
				'id' => 155,
				'concelho_id' => 13,
				'distrito_id' => 11,
				'name' => 'Torres Vedras',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			155 =>
			array (
				'id' => 156,
				'concelho_id' => 14,
				'distrito_id' => 11,
				'name' => 'Vila Franca de Xira',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			156 =>
			array (
				'id' => 157,
				'concelho_id' => 15,
				'distrito_id' => 11,
				'name' => 'Amadora',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			157 =>
			array (
				'id' => 158,
				'concelho_id' => 16,
				'distrito_id' => 11,
				'name' => 'Odivelas',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			158 =>
			array (
				'id' => 159,
				'concelho_id' => 1,
				'distrito_id' => 11,
				'name' => 'Alenquer',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			159 =>
			array (
				'id' => 160,
				'concelho_id' => 2,
				'distrito_id' => 11,
				'name' => 'Arruda dos Vinhos',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			160 =>
			array (
				'id' => 161,
				'concelho_id' => 3,
				'distrito_id' => 11,
				'name' => 'Azambuja',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			161 =>
			array (
				'id' => 162,
				'concelho_id' => 4,
				'distrito_id' => 11,
				'name' => 'Cadaval',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			162 =>
			array (
				'id' => 163,
				'concelho_id' => 5,
				'distrito_id' => 11,
				'name' => 'Cascais',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			163 =>
			array (
				'id' => 164,
				'concelho_id' => 6,
				'distrito_id' => 12,
				'name' => 'Crato',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			164 =>
			array (
				'id' => 165,
				'concelho_id' => 7,
				'distrito_id' => 12,
				'name' => 'Elvas',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			165 =>
			array (
				'id' => 166,
				'concelho_id' => 8,
				'distrito_id' => 12,
				'name' => 'Fronteira',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			166 =>
			array (
				'id' => 167,
				'concelho_id' => 9,
				'distrito_id' => 12,
				'name' => 'Gavião',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			167 =>
			array (
				'id' => 168,
				'concelho_id' => 10,
				'distrito_id' => 12,
				'name' => 'Marvão',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			168 =>
			array (
				'id' => 169,
				'concelho_id' => 11,
				'distrito_id' => 12,
				'name' => 'Monforte',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			169 =>
			array (
				'id' => 170,
				'concelho_id' => 12,
				'distrito_id' => 12,
				'name' => 'Nisa',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			170 =>
			array (
				'id' => 171,
				'concelho_id' => 13,
				'distrito_id' => 12,
				'name' => 'Ponte de Sor',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			171 =>
			array (
				'id' => 172,
				'concelho_id' => 14,
				'distrito_id' => 12,
				'name' => 'Portalegre',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			172 =>
			array (
				'id' => 173,
				'concelho_id' => 15,
				'distrito_id' => 12,
				'name' => 'Sousel',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			173 =>
			array (
				'id' => 174,
				'concelho_id' => 1,
				'distrito_id' => 12,
				'name' => 'Alter do Chão',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			174 =>
			array (
				'id' => 175,
				'concelho_id' => 2,
				'distrito_id' => 12,
				'name' => 'Arronches',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			175 =>
			array (
				'id' => 176,
				'concelho_id' => 3,
				'distrito_id' => 12,
				'name' => 'Avis',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			176 =>
			array (
				'id' => 177,
				'concelho_id' => 4,
				'distrito_id' => 12,
				'name' => 'Campo Maior',
				'created_at' => '2015-01-17 02:00:36',
				'updated_at' => '2015-01-17 02:00:36',
			),
			177 =>
			array (
				'id' => 178,
				'concelho_id' => 5,
				'distrito_id' => 12,
				'name' => 'Castelo de Vide',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			178 =>
			array (
				'id' => 179,
				'concelho_id' => 6,
				'distrito_id' => 13,
				'name' => 'Maia',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			179 =>
			array (
				'id' => 180,
				'concelho_id' => 7,
				'distrito_id' => 13,
				'name' => 'Marco de Canaveses',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			180 =>
			array (
				'id' => 181,
				'concelho_id' => 8,
				'distrito_id' => 13,
				'name' => 'Matosinhos',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			181 =>
			array (
				'id' => 182,
				'concelho_id' => 9,
				'distrito_id' => 13,
				'name' => 'Paços de Ferreira',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			182 =>
			array (
				'id' => 183,
				'concelho_id' => 10,
				'distrito_id' => 13,
				'name' => 'Paredes',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			183 =>
			array (
				'id' => 184,
				'concelho_id' => 11,
				'distrito_id' => 13,
				'name' => 'Penafiel',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			184 =>
			array (
				'id' => 185,
				'concelho_id' => 12,
				'distrito_id' => 13,
				'name' => 'Porto',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			185 =>
			array (
				'id' => 186,
				'concelho_id' => 13,
				'distrito_id' => 13,
				'name' => 'Póvoa de Varzim',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			186 =>
			array (
				'id' => 187,
				'concelho_id' => 14,
				'distrito_id' => 13,
				'name' => 'Santo Tirso',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			187 =>
			array (
				'id' => 188,
				'concelho_id' => 15,
				'distrito_id' => 13,
				'name' => 'Valongo',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			188 =>
			array (
				'id' => 189,
				'concelho_id' => 16,
				'distrito_id' => 13,
				'name' => 'Vila do Conde',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			189 =>
			array (
				'id' => 190,
				'concelho_id' => 17,
				'distrito_id' => 13,
				'name' => 'Vila Nova de Gaia',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			190 =>
			array (
				'id' => 191,
				'concelho_id' => 18,
				'distrito_id' => 13,
				'name' => 'Trofa',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			191 =>
			array (
				'id' => 192,
				'concelho_id' => 1,
				'distrito_id' => 13,
				'name' => 'Amarante',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			192 =>
			array (
				'id' => 193,
				'concelho_id' => 2,
				'distrito_id' => 13,
				'name' => 'Baião',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			193 =>
			array (
				'id' => 194,
				'concelho_id' => 3,
				'distrito_id' => 13,
				'name' => 'Felgueiras',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			194 =>
			array (
				'id' => 195,
				'concelho_id' => 4,
				'distrito_id' => 13,
				'name' => 'Gondomar',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			195 =>
			array (
				'id' => 196,
				'concelho_id' => 5,
				'distrito_id' => 13,
				'name' => 'Lousada',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			196 =>
			array (
				'id' => 197,
				'concelho_id' => 6,
				'distrito_id' => 14,
				'name' => 'Cartaxo',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			197 =>
			array (
				'id' => 198,
				'concelho_id' => 7,
				'distrito_id' => 14,
				'name' => 'Chamusca',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			198 =>
			array (
				'id' => 199,
				'concelho_id' => 8,
				'distrito_id' => 14,
				'name' => 'Constância',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			199 =>
			array (
				'id' => 200,
				'concelho_id' => 9,
				'distrito_id' => 14,
				'name' => 'Coruche',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			200 =>
			array (
				'id' => 201,
				'concelho_id' => 10,
				'distrito_id' => 14,
				'name' => 'Entroncamento',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			201 =>
			array (
				'id' => 202,
				'concelho_id' => 11,
				'distrito_id' => 14,
				'name' => 'Ferreira do Zêzere',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			202 =>
			array (
				'id' => 203,
				'concelho_id' => 12,
				'distrito_id' => 14,
				'name' => 'Golegã',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			203 =>
			array (
				'id' => 204,
				'concelho_id' => 13,
				'distrito_id' => 14,
				'name' => 'Mação',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			204 =>
			array (
				'id' => 205,
				'concelho_id' => 14,
				'distrito_id' => 14,
				'name' => 'Rio Maior',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			205 =>
			array (
				'id' => 206,
				'concelho_id' => 15,
				'distrito_id' => 14,
				'name' => 'Salvaterra de Magos',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			206 =>
			array (
				'id' => 207,
				'concelho_id' => 16,
				'distrito_id' => 14,
				'name' => 'Santarém',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			207 =>
			array (
				'id' => 208,
				'concelho_id' => 17,
				'distrito_id' => 14,
				'name' => 'Sardoal',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			208 =>
			array (
				'id' => 209,
				'concelho_id' => 18,
				'distrito_id' => 14,
				'name' => 'Tomar',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			209 =>
			array (
				'id' => 210,
				'concelho_id' => 19,
				'distrito_id' => 14,
				'name' => 'Torres Novas',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			210 =>
			array (
				'id' => 211,
				'concelho_id' => 20,
				'distrito_id' => 14,
				'name' => 'Vila Nova da Barquinha',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			211 =>
			array (
				'id' => 212,
				'concelho_id' => 21,
				'distrito_id' => 14,
				'name' => 'Ourém',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			212 =>
			array (
				'id' => 213,
				'concelho_id' => 1,
				'distrito_id' => 14,
				'name' => 'Abrantes',
				'created_at' => '2015-01-17 02:00:37',
				'updated_at' => '2015-01-17 02:00:37',
			),
			213 =>
			array (
				'id' => 214,
				'concelho_id' => 2,
				'distrito_id' => 14,
				'name' => 'Alcanena',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			214 =>
			array (
				'id' => 215,
				'concelho_id' => 3,
				'distrito_id' => 14,
				'name' => 'Almeirim',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			215 =>
			array (
				'id' => 216,
				'concelho_id' => 4,
				'distrito_id' => 14,
				'name' => 'Alpiarça',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			216 =>
			array (
				'id' => 217,
				'concelho_id' => 5,
				'distrito_id' => 14,
				'name' => 'Benavente',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			217 =>
			array (
				'id' => 218,
				'concelho_id' => 6,
				'distrito_id' => 15,
				'name' => 'Moita',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			218 =>
			array (
				'id' => 219,
				'concelho_id' => 7,
				'distrito_id' => 15,
				'name' => 'Montijo',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			219 =>
			array (
				'id' => 220,
				'concelho_id' => 8,
				'distrito_id' => 15,
				'name' => 'Palmela',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			220 =>
			array (
				'id' => 221,
				'concelho_id' => 9,
				'distrito_id' => 15,
				'name' => 'Santiago do Cacém',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			221 =>
			array (
				'id' => 222,
				'concelho_id' => 10,
				'distrito_id' => 15,
				'name' => 'Seixal',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			222 =>
			array (
				'id' => 223,
				'concelho_id' => 11,
				'distrito_id' => 15,
				'name' => 'Sesimbra',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			223 =>
			array (
				'id' => 224,
				'concelho_id' => 12,
				'distrito_id' => 15,
				'name' => 'Setúbal',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			224 =>
			array (
				'id' => 225,
				'concelho_id' => 13,
				'distrito_id' => 15,
				'name' => 'Sines',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			225 =>
			array (
				'id' => 226,
				'concelho_id' => 1,
				'distrito_id' => 15,
				'name' => 'Alcácer do Sal',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			226 =>
			array (
				'id' => 227,
				'concelho_id' => 2,
				'distrito_id' => 15,
				'name' => 'Alcochete',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			227 =>
			array (
				'id' => 228,
				'concelho_id' => 3,
				'distrito_id' => 15,
				'name' => 'Almada',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			228 =>
			array (
				'id' => 229,
				'concelho_id' => 4,
				'distrito_id' => 15,
				'name' => 'Barreiro',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			229 =>
			array (
				'id' => 230,
				'concelho_id' => 5,
				'distrito_id' => 15,
				'name' => 'Grândola',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			230 =>
			array (
				'id' => 231,
				'concelho_id' => 6,
				'distrito_id' => 16,
				'name' => 'Ponte da Barca',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			231 =>
			array (
				'id' => 232,
				'concelho_id' => 7,
				'distrito_id' => 16,
				'name' => 'Ponte de Lima',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			232 =>
			array (
				'id' => 233,
				'concelho_id' => 8,
				'distrito_id' => 16,
				'name' => 'Valença',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			233 =>
			array (
				'id' => 234,
				'concelho_id' => 9,
				'distrito_id' => 16,
				'name' => 'Viana do Castelo',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			234 =>
			array (
				'id' => 235,
				'concelho_id' => 10,
				'distrito_id' => 16,
				'name' => 'Vila Nova de Cerveira',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			235 =>
			array (
				'id' => 236,
				'concelho_id' => 1,
				'distrito_id' => 16,
				'name' => 'Arcos de Valdevez',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			236 =>
			array (
				'id' => 237,
				'concelho_id' => 2,
				'distrito_id' => 16,
				'name' => 'Caminha',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			237 =>
			array (
				'id' => 238,
				'concelho_id' => 3,
				'distrito_id' => 16,
				'name' => 'Melgaço',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			238 =>
			array (
				'id' => 239,
				'concelho_id' => 4,
				'distrito_id' => 16,
				'name' => 'Monção',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			239 =>
			array (
				'id' => 240,
				'concelho_id' => 5,
				'distrito_id' => 16,
				'name' => 'Paredes de Coura',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			240 =>
			array (
				'id' => 241,
				'concelho_id' => 5,
				'distrito_id' => 17,
				'name' => 'Mondim de Basto',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			241 =>
			array (
				'id' => 242,
				'concelho_id' => 6,
				'distrito_id' => 17,
				'name' => 'Montalegre',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			242 =>
			array (
				'id' => 243,
				'concelho_id' => 7,
				'distrito_id' => 17,
				'name' => 'Murça',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			243 =>
			array (
				'id' => 244,
				'concelho_id' => 8,
				'distrito_id' => 17,
				'name' => 'Peso da Régua',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			244 =>
			array (
				'id' => 245,
				'concelho_id' => 9,
				'distrito_id' => 17,
				'name' => 'Ribeira de Pena',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			245 =>
			array (
				'id' => 246,
				'concelho_id' => 10,
				'distrito_id' => 17,
				'name' => 'Sabrosa',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			246 =>
			array (
				'id' => 247,
				'concelho_id' => 11,
				'distrito_id' => 17,
				'name' => 'Santa Marta de Penaguião',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			247 =>
			array (
				'id' => 248,
				'concelho_id' => 12,
				'distrito_id' => 17,
				'name' => 'Valpaços',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			248 =>
			array (
				'id' => 249,
				'concelho_id' => 13,
				'distrito_id' => 17,
				'name' => 'Vila Pouca de Aguiar',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			249 =>
			array (
				'id' => 250,
				'concelho_id' => 14,
				'distrito_id' => 17,
				'name' => 'Vila Real',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			250 =>
			array (
				'id' => 251,
				'concelho_id' => 1,
				'distrito_id' => 17,
				'name' => 'Alijó',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			251 =>
			array (
				'id' => 252,
				'concelho_id' => 2,
				'distrito_id' => 17,
				'name' => 'Boticas',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			252 =>
			array (
				'id' => 253,
				'concelho_id' => 3,
				'distrito_id' => 17,
				'name' => 'Chaves',
				'created_at' => '2015-01-17 02:00:38',
				'updated_at' => '2015-01-17 02:00:38',
			),
			253 =>
			array (
				'id' => 254,
				'concelho_id' => 4,
				'distrito_id' => 17,
				'name' => 'Mesão Frio',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			254 =>
			array (
				'id' => 255,
				'concelho_id' => 5,
				'distrito_id' => 18,
				'name' => 'Lamego',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			255 =>
			array (
				'id' => 256,
				'concelho_id' => 6,
				'distrito_id' => 18,
				'name' => 'Mangualde',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			256 =>
			array (
				'id' => 257,
				'concelho_id' => 7,
				'distrito_id' => 18,
				'name' => 'Moimenta da Beira',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			257 =>
			array (
				'id' => 258,
				'concelho_id' => 8,
				'distrito_id' => 18,
				'name' => 'Mortágua',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			258 =>
			array (
				'id' => 259,
				'concelho_id' => 9,
				'distrito_id' => 18,
				'name' => 'Nelas',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			259 =>
			array (
				'id' => 260,
				'concelho_id' => 10,
				'distrito_id' => 18,
				'name' => 'Oliveira de Frades',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			260 =>
			array (
				'id' => 261,
				'concelho_id' => 11,
				'distrito_id' => 18,
				'name' => 'Penalva do Castelo',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			261 =>
			array (
				'id' => 262,
				'concelho_id' => 12,
				'distrito_id' => 18,
				'name' => 'Penedono',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			262 =>
			array (
				'id' => 263,
				'concelho_id' => 13,
				'distrito_id' => 18,
				'name' => 'Resende',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			263 =>
			array (
				'id' => 264,
				'concelho_id' => 14,
				'distrito_id' => 18,
				'name' => 'Santa Comba Dão',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			264 =>
			array (
				'id' => 265,
				'concelho_id' => 15,
				'distrito_id' => 18,
				'name' => 'São João da Pesqueira',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			265 =>
			array (
				'id' => 266,
				'concelho_id' => 16,
				'distrito_id' => 18,
				'name' => 'São Pedro do Sul',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			266 =>
			array (
				'id' => 267,
				'concelho_id' => 17,
				'distrito_id' => 18,
				'name' => 'Sátão',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			267 =>
			array (
				'id' => 268,
				'concelho_id' => 18,
				'distrito_id' => 18,
				'name' => 'Sernancelhe',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			268 =>
			array (
				'id' => 269,
				'concelho_id' => 19,
				'distrito_id' => 18,
				'name' => 'Tabuaço',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			269 =>
			array (
				'id' => 270,
				'concelho_id' => 20,
				'distrito_id' => 18,
				'name' => 'Tarouca',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			270 =>
			array (
				'id' => 271,
				'concelho_id' => 21,
				'distrito_id' => 18,
				'name' => 'Tondela',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			271 =>
			array (
				'id' => 272,
				'concelho_id' => 22,
				'distrito_id' => 18,
				'name' => 'Vila Nova de Paiva',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			272 =>
			array (
				'id' => 273,
				'concelho_id' => 23,
				'distrito_id' => 18,
				'name' => 'Viseu',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			273 =>
			array (
				'id' => 274,
				'concelho_id' => 24,
				'distrito_id' => 18,
				'name' => 'Vouzela',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			274 =>
			array (
				'id' => 275,
				'concelho_id' => 1,
				'distrito_id' => 18,
				'name' => 'Armamar',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			275 =>
			array (
				'id' => 276,
				'concelho_id' => 2,
				'distrito_id' => 18,
				'name' => 'Carregal do Sal',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			276 =>
			array (
				'id' => 277,
				'concelho_id' => 3,
				'distrito_id' => 18,
				'name' => 'Castro Daire',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			277 =>
			array (
				'id' => 278,
				'concelho_id' => 4,
				'distrito_id' => 18,
				'name' => 'Cinfães',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			278 =>
			array (
				'id' => 279,
				'concelho_id' => 5,
				'distrito_id' => 19,
				'name' => 'Ponta do Sol',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			279 =>
			array (
				'id' => 280,
				'concelho_id' => 6,
				'distrito_id' => 19,
				'name' => 'Porto Moniz',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			280 =>
			array (
				'id' => 281,
				'concelho_id' => 7,
				'distrito_id' => 19,
				'name' => 'Ribeira Brava',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			281 =>
			array (
				'id' => 282,
				'concelho_id' => 8,
				'distrito_id' => 19,
				'name' => 'Santa Cruz',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			282 =>
			array (
				'id' => 283,
				'concelho_id' => 9,
				'distrito_id' => 19,
				'name' => 'Santana',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			283 =>
			array (
				'id' => 284,
				'concelho_id' => 10,
				'distrito_id' => 19,
				'name' => 'São Vicente',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			284 =>
			array (
				'id' => 285,
				'concelho_id' => 1,
				'distrito_id' => 19,
			'name' => 'Calheta (Madeira)',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			285 =>
			array (
				'id' => 286,
				'concelho_id' => 2,
				'distrito_id' => 19,
				'name' => 'Câmara de Lobos',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			286 =>
			array (
				'id' => 287,
				'concelho_id' => 3,
				'distrito_id' => 19,
				'name' => 'Funchal',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			287 =>
			array (
				'id' => 288,
				'concelho_id' => 4,
				'distrito_id' => 19,
				'name' => 'Machico',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			288 =>
			array (
				'id' => 289,
				'concelho_id' => 1,
				'distrito_id' => 20,
				'name' => 'Porto Santo',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			289 =>
			array (
				'id' => 290,
				'concelho_id' => 1,
				'distrito_id' => 21,
				'name' => 'Vila do Porto',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			290 =>
			array (
				'id' => 291,
				'concelho_id' => 5,
				'distrito_id' => 22,
				'name' => 'Ribeira Grande',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			291 =>
			array (
				'id' => 292,
				'concelho_id' => 6,
				'distrito_id' => 22,
				'name' => 'Vila Franca do Campo',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			292 =>
			array (
				'id' => 293,
				'concelho_id' => 1,
				'distrito_id' => 22,
			'name' => 'Lagoa (São Miguel)',
				'created_at' => '2015-01-17 02:00:39',
				'updated_at' => '2015-01-17 02:00:39',
			),
			293 =>
			array (
				'id' => 294,
				'concelho_id' => 2,
				'distrito_id' => 22,
				'name' => 'Nordeste',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			294 =>
			array (
				'id' => 295,
				'concelho_id' => 3,
				'distrito_id' => 22,
				'name' => 'Ponta Delgada',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			295 =>
			array (
				'id' => 296,
				'concelho_id' => 4,
				'distrito_id' => 22,
				'name' => 'Povoação',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			296 =>
			array (
				'id' => 297,
				'concelho_id' => 1,
				'distrito_id' => 23,
				'name' => 'Angra do Heroísmo',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			297 =>
			array (
				'id' => 298,
				'concelho_id' => 2,
				'distrito_id' => 23,
				'name' => 'Praia da Vitória',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			298 =>
			array (
				'id' => 299,
				'concelho_id' => 1,
				'distrito_id' => 24,
				'name' => 'Santa Cruz da Graciosa',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			299 =>
			array (
				'id' => 300,
				'concelho_id' => 1,
				'distrito_id' => 25,
			'name' => 'Calheta (São Jorge)',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			300 =>
			array (
				'id' => 301,
				'concelho_id' => 2,
				'distrito_id' => 25,
				'name' => 'Velas',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			301 =>
			array (
				'id' => 302,
				'concelho_id' => 1,
				'distrito_id' => 26,
				'name' => 'Lajes do Pico',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			302 =>
			array (
				'id' => 303,
				'concelho_id' => 2,
				'distrito_id' => 26,
				'name' => 'Madalena',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			303 =>
			array (
				'id' => 304,
				'concelho_id' => 3,
				'distrito_id' => 26,
				'name' => 'São Roque do Pico',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			304 =>
			array (
				'id' => 305,
				'concelho_id' => 1,
				'distrito_id' => 27,
				'name' => 'Horta',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			305 =>
			array (
				'id' => 306,
				'concelho_id' => 1,
				'distrito_id' => 28,
				'name' => 'Lajes das Flores',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			306 =>
			array (
				'id' => 307,
				'concelho_id' => 2,
				'distrito_id' => 28,
				'name' => 'Santa Cruz das Flores',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
			307 =>
			array (
				'id' => 308,
				'concelho_id' => 1,
				'distrito_id' => 29,
				'name' => 'Corvo',
				'created_at' => '2015-01-17 02:00:40',
				'updated_at' => '2015-01-17 02:00:40',
			),
		));
	}

}
