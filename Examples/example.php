<?php

use Silviooosilva\Phession\Phession;

require_once __DIR__ . '/../vendor/autoload.php';

//Start - Initializes the session with its duration.

Phession::start(7200); // Tempo de duração da sessão. |INT|STRING

//Set - Stores any information in the session.

$ProfileKey = "DeveloperProfileKey";

$DeveloperProfile = [
  'name' => 'Sílvio Silva',
  'email' => 'gasparsilvio7@gmail.com',
  'role' => 'Developer'
];

Phession::set($ProfileKey, $DeveloperProfile);

//Get - Retrieves any information saved in the session.

$getDeveloperProfile = Phession::get($ProfileKey);
print_r($getDeveloperProfile);

//Has - Checks if the session key exists or not.

if(Phession::has($ProfileKey)){
  print_r("Session Founded: ") . PHP_EOL;
  var_dump($getDeveloperProfile);
} else {
  print_r("Session Not Founded.");
} 

//Unset - Deletes a specific session key along with its data.

var_dump(Phession::unset($ProfileKey));

//Destroy - Delete all existing sessions at once.

var_dump(Phession::destroy());

//All - Recover all existing sessions.

var_dump(Phession::all());

