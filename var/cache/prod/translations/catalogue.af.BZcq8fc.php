<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('af', array (
  'validators' => 
  array (
    'This value should be false.' => 'Hierdie waarde moet vals wees.',
    'This value should be true.' => 'Hierdie waarde moet waar wees.',
    'This value should be of type {{ type }}.' => 'Hierdie waarde moet van die soort {{type}} wees.',
    'This value should be blank.' => 'Hierdie waarde moet leeg wees.',
    'The value you selected is not a valid choice.' => 'Die waarde wat jy gekies het is nie \'n geldige keuse nie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jy moet ten minste {{ limit }} kies.|Jy moet ten minste {{ limit }} keuses kies.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jy moet by die meeste {{ limit }} keuse kies.|Jy moet by die meeste {{ limit }} keuses kies.',
    'One or more of the given values is invalid.' => 'Een of meer van die gegewe waardes is ongeldig.',
    'This field was not expected.' => 'Die veld is nie verwag nie.',
    'This field is missing.' => 'Hierdie veld ontbreek.',
    'This value is not a valid date.' => 'Hierdie waarde is nie \'n geldige datum nie.',
    'This value is not a valid datetime.' => 'Hierdie waarde is nie \'n geldige datum en tyd nie.',
    'This value is not a valid email address.' => 'Hierdie waarde is nie \'n geldige e-pos adres nie.',
    'The file could not be found.' => 'Die lêer kon nie gevind word nie.',
    'The file is not readable.' => 'Die lêer kan nie gelees word nie.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot ({{ size }} {{ suffix }}). Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Die MIME-tipe van die lêer is ongeldig ({{ type }}). Toegelaat MIME-tipes is {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Hierdie waarde moet {{ limit }} of minder wees.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Hierdie waarde is te lank. Dit moet {{ limit }} karakter of minder wees.|Hierdie waarde is te lank. Dit moet {{ limit }} karakters of minder wees.',
    'This value should be {{ limit }} or more.' => 'Hierdie waarde moet {{ limit }} of meer wees.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Hierdie waarde is te kort. Dit moet {{ limit }} karakter of meer wees.|Hierdie waarde is te kort. Dit moet {{ limit }} karakters of meer wees.',
    'This value should not be blank.' => 'Hierdie waarde moet nie leeg wees nie.',
    'This value should not be null.' => 'Hierdie waarde moet nie nul wees nie.',
    'This value should be null.' => 'Hierdie waarde moet nul wees.',
    'This value is not valid.' => 'Hierdie waarde is nie geldig nie.',
    'This value is not a valid time.' => 'Hierdie waarde is nie \'n geldige tyd nie.',
    'This value is not a valid URL.' => 'Hierdie waarde is nie \'n geldige URL nie.',
    'The two values should be equal.' => 'Die twee waardes moet gelyk wees.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot. Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die lêer is te groot.',
    'The file could not be uploaded.' => 'Die lêer kan nie opgelaai word nie.',
    'This value should be a valid number.' => 'Hierdie waarde moet \'n geldige nommer wees.',
    'This file is not a valid image.' => 'Hierdie lêer is nie \'n geldige beeld nie.',
    'This is not a valid IP address.' => 'Hierdie is nie \'n geldige IP-adres nie.',
    'This value is not a valid language.' => 'Hierdie waarde is nie \'n geldige taal nie.',
    'This value is not a valid locale.' => 'Hierdie waarde is nie \'n geldige land instelling nie.',
    'This value is not a valid country.' => 'Hierdie waarde is nie \'n geldige land nie.',
    'This value is already used.' => 'Hierdie waarde word reeds gebruik.',
    'The size of the image could not be detected.' => 'Die grootte van die beeld kon nie opgespoor word nie.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die beeld breedte is te groot ({{ width }}px). Toegelaat maksimum breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die beeld breedte is te klein ({{ width }}px). Minimum breedte verwag is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die beeld hoogte is te groot ({{ height }}px). Toegelaat maksimum hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die beeld hoogte is te klein ({{ height }}px). Minimum hoogte verwag is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Hierdie waarde moet die huidige wagwoord van die gebruiker wees.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Hierdie waarde moet presies {{ limit }} karakter wees.|Hierdie waarde moet presies {{ limit }} karakters wees.',
    'The file was only partially uploaded.' => 'Die lêer is slegs gedeeltelik opgelaai.',
    'No file was uploaded.' => 'Geen lêer is opgelaai nie.',
    'No temporary folder was configured in php.ini.' => 'Geen tydelike lêer is ingestel in php.ini nie.',
    'Cannot write temporary file to disk.' => 'Kan nie tydelike lêer skryf op skyf nie.',
    'A PHP extension caused the upload to fail.' => '\'n PHP-uitbreiding veroorsaak die oplaai van die lêer om te misluk.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Hierdie versameling moet {{ limit }} element of meer bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Hierdie versameling moet {{ limit }} element of minder bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Hierdie versameling moet presies {{ limit }} element bevat.|Hierdie versameling moet presies {{ limit }} elemente bevat.',
    'Invalid card number.' => 'Ongeldige kredietkaart nommer.',
    'Unsupported card type or invalid card number.' => 'Nie-ondersteunde tipe kaart of ongeldige kredietkaart nommer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Hierdie is nie \'n geldige Internationale Bank Rekening Nommer (IBAN) nie.',
    'This value is not a valid ISBN-10.' => 'Hierdie waarde is nie \'n geldige ISBN-10 nie.',
    'This value is not a valid ISBN-13.' => 'Hierdie waarde is nie \'n geldige ISBN-13 nie.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Hierdie waarde is nie \'n geldige ISBN-10 of ISBN-13 nie.',
    'This value is not a valid ISSN.' => 'Hierdie waarde is nie \'n geldige ISSN nie.',
    'This value is not a valid currency.' => 'Hierdie waarde is nie \'n geldige geldeenheid nie.',
    'This value should be equal to {{ compared_value }}.' => 'Hierdie waarde moet gelyk aan {{ compared_value }} wees.',
    'This value should be greater than {{ compared_value }}.' => 'Hierdie waarde moet meer as {{ compared_value }} wees.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Hierdie waarde moet meer of gelyk aan {{ compared_value }} wees.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Hierdie waarde moet identies aan {{ compared_value_type }} {{ compared_value }} wees.',
    'This value should be less than {{ compared_value }}.' => 'Hierdie waarde moet minder as {{ compared_value }} wees.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Hierdie waarde moet minder of gelyk aan {{ compared_value }} wees.',
    'This value should not be equal to {{ compared_value }}.' => 'Hierdie waarde moet nie dieselfde as {{ compared_value }} wees nie.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Hierdie waarde moet nie identies as {{ compared_value_type }} {{ compared_value }} wees nie.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Die beeld aspek is te groot ({{ ratio }}). Die maksimum toegelate aspek is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Die beeld aspek is te klein ({{ ratio }}). Die minimum toegelate aspek is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Die beeld is vierkantig ({{ width }}x{{ height }}px). Vierkantige beelde word nie toegelaat nie.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Die beeld is landskap georiënteerd ({{ width }}x{{ height }}px). Landskap georiënteerde beelde word nie toegelaat nie.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Die beeld dis portret georiënteerd ({{ width }}x{{ height }}px). Portret georiënteerde beelde word nie toegelaat nie.',
    'An empty file is not allowed.' => '\'n Leë lêer word nie toegelaat nie.',
    'The host could not be resolved.' => 'Die gasheer kon nie opgelos word nie.',
    'This value does not match the expected {{ charset }} charset.' => 'Die waarde stem nie ooreen met die verwagte {{ charset }} karakterstel nie.',
    'This is not a valid Business Identifier Code (BIC).' => 'Hierdie is nie \'n geldige Besigheids Identifikasie Kode (BIC) nie.',
    'Error' => 'Fout',
    'This is not a valid UUID.' => 'Hierdie is nie \'n geldige UUID nie.',
    'This value should be a multiple of {{ compared_value }}.' => 'Hierdie waarde moet \'n veelvoud van {{ compared_value }} wees.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Hierdie Besigheids Identifikasie Kode (BIK) is nie geassosieer met IBAN {{ iban }} nie.',
    'This value should be valid JSON.' => 'Hierdie waarde moet geldige JSON wees.',
  ),
));

$cataloguePt_BR = new MessageCatalogue('pt-BR', array (
));
$catalogue->addFallbackCatalogue($cataloguePt_BR);

return $catalogue;
