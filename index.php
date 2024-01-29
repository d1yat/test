<?php

namespace App;

require_once 'models/autoload.php';

use App\Models\Person as Person;

class Main
{
	public static function index()
	{
		$users = [
			new Person(101, 'Ahmad Fasehan'),
			new Person(102, 'Andris Firmansyah'),
			new Person(103, 'Akhirudin Sudiyat'),
			new Person(104, 'Bani Arham'),
			new Person(105, 'Rido Raudho')
		];
		
		$size = count($users);
		for ($i = 0; $i < $size; $i++) {
			$user = $users[$i];
			echo "({$user->id}) => {$user->name}\n";
		}

		// foreach ($users as $user) {
			// echo "({$user->id}) => {$user->name}\n";
		// }
	}
}

Main::index();