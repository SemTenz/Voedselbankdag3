<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Persoon;
use App\Models\VoedselAllergie;

class PersoonSeeder extends Seeder
{
    public function run()
    {
        // Eerst personen aanmaken
        $personen = [
            [
                'gezin_id' => 0,
                'voornaam' => 'Hans',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Leeuwen',
                'geboortedatum' => '1958-02-12',
                'usertype' => 'manager',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 0,
                'voornaam' => 'Jan',
                'tussenvoegsel' => 'van der',
                'achternaam' => 'Sluijs',
                'geboortedatum' => '1993-04-30',
                'usertype' => 'medewerker',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 0,
                'voornaam' => 'Herman',
                'tussenvoegsel' => 'den',
                'achternaam' => 'Duiker',
                'geboortedatum' => '1989-08-30',
                'usertype' => 'vrijwilliger',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Johan',
                'tussenvoegsel' => 'van',
                'achternaam' => 'ZevenHuizen',
                'geboortedatum' => '1990-05-20',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '1',
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Sarah',
                'tussenvoegsel' => 'den',
                'achternaam' => 'Dolder',
                'geboortedatum' => '1985-03-23',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Theo',
                'tussenvoegsel' => 'van',
                'achternaam' => 'ZevenHuizen',
                'geboortedatum' => '2015-03-08',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Jantien',
                'tussenvoegsel' => 'van',
                'achternaam' => 'ZevenHuizen',
                'geboortedatum' => '2016-09-20',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Arjan',
                'tussenvoegsel' => null,
                'achternaam' => 'Bergkamp',
                'geboortedatum' => '1968-07-12',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '1',
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Janneke',
                'tussenvoegsel' => null,
                'achternaam' => 'Sanders',
                'geboortedatum' => '1969-05-11',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Stein',
                'tussenvoegsel' => null,
                'achternaam' => 'Bergkamp',
                'geboortedatum' => '2009-02-02',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Judith',
                'tussenvoegsel' => null,
                'achternaam' => 'Bergkamp',
                'geboortedatum' => '2022-02-05',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 3,
                'voornaam' => 'Mazin',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Vliet',
                'geboortedatum' => '1968-08-18',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 3,
                'voornaam' => 'Selma',
                'tussenvoegsel' => 'van de',
                'achternaam' => 'Heuvel',
                'geboortedatum' => '1965-09-04',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '1',
            ],
            [
                'gezin_id' => 4,
                'voornaam' => 'Eva',
                'tussenvoegsel' => null,
                'achternaam' => 'Scherder',
                'geboortedatum' => '2000-04-17',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '1',
            ],
            [
                'gezin_id' => 4,
                'voornaam' => 'Felicia',
                'tussenvoegsel' => null,
                'achternaam' => 'Scherder',
                'geboortedatum' => '2021-11-29',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 4,
                'voornaam' => 'Felicia',
                'tussenvoegsel' => null,
                'achternaam' => 'Scherder',
                'geboortedatum' => '2024-03-01',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 5,
                'voornaam' => 'Frieda',
                'tussenvoegsel' => 'de',
                'achternaam' => 'Jong',
                'geboortedatum' => '1980-09-04',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '1',
            ],
            [
                'gezin_id' => 5,
                'voornaam' => 'Simeon',
                'tussenvoegsel' => 'de',
                'achternaam' => 'Jong',
                'geboortedatum' => '2018-05-23',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '0',
            ],
            [
                'gezin_id' => 6,
                'voornaam' => 'Hanna',
                'tussenvoegsel' => 'van der',
                'achternaam' => 'Berg',
                'geboortedatum' => '1999-09-09',
                'usertype' => 'klant',
                'isvertegenwoordiger' => '1',
            ],
        ];

        // Insert personen en koppel allergieën via allergieperpersoon
        foreach ($personen as $persoonData) {
            $persoon = Persoon::create($persoonData);

            // Kies willekeurig een aantal allergieën per persoon
            $aantalAllergieën = rand(1, 3); // Aanpassen op basis van je behoeften

            $allergieën = VoedselAllergie::inRandomOrder()->limit($aantalAllergieën)->get();
        }

        // Extra logging toevoegen om te controleren of de seeder correct werkt
        $this->command->info('PersoonSeeder uitgevoerd.');
    }
}
