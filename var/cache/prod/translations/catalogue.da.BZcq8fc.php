<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'validators' => 
  array (
    'This value should be false.' => 'Værdien skal være falsk.',
    'This value should be true.' => 'Værdien skal være sand.',
    'This value should be of type {{ type }}.' => 'Værdien skal være af typen {{ type }}.',
    'This value should be blank.' => 'Værdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte værdi er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du skal vælge mindst én mulighed.|Du skal vælge mindst {{ limit }} muligheder.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan højst vælge én mulighed.|Du kan højst vælge {{ limit }} muligheder.',
    'One or more of the given values is invalid.' => 'En eller flere af de angivne værdier er ugyldige.',
    'This field was not expected.' => 'Feltet blev ikke forventet.',
    'This field is missing.' => 'Dette felt mangler.',
    'This value is not a valid date.' => 'Værdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Værdien er ikke et gyldigt tidspunkt.',
    'This value is not a valid email address.' => 'Værdien er ikke en gyldig e-mailadresse.',
    'The file could not be found.' => 'Filen kunne ikke findes.',
    'The file is not readable.' => 'Filen kan ikke læses.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Maksimale tilladte størrelse er {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Filens MIME-type er ugyldig ({{ type }}). Tilladte MIME-typer er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Værdien skal være {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Værdien er for lang. Den må højst indeholde {{ limit }} tegn.',
    'This value should be {{ limit }} or more.' => 'Værdien skal være {{ limit }} eller mere.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Værdien er for kort. Den skal indeholde mindst {{ limit }} tegn.',
    'This value should not be blank.' => 'Værdien må ikke være blank.',
    'This value should not be null.' => 'Værdien må ikke være tom (null).',
    'This value should be null.' => 'Værdien skal være tom (null).',
    'This value is not valid.' => 'Værdien er ikke gyldig.',
    'This value is not a valid time.' => 'Værdien er ikke et gyldigt klokkeslæt.',
    'This value is not a valid URL.' => 'Værdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'De to værdier skal være ens.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelse er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke blive uploadet.',
    'This value should be a valid number.' => 'Værdien skal være et gyldigt tal.',
    'This file is not a valid image.' => 'Filen er ikke gyldigt billede.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP-adresse.',
    'This value is not a valid language.' => 'Værdien er ikke et gyldigt sprog.',
    'This value is not a valid locale.' => 'Værdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Værdien er ikke et gyldigt land.',
    'This value is already used.' => 'Værdien er allerede i brug.',
    'The size of the image could not be detected.' => 'Størrelsen på billedet kunne ikke detekteres.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Billedet er for bredt ({{ width }}px). Største tilladte bredde er {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Billedet er for smalt ({{ width }}px). Mindste forventede bredde er {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Billedet er for højt ({{ height }}px). Største tilladte højde er {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billedet er for lavt ({{ height }}px). Mindste forventede højde er {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Værdien skal være brugerens nuværende adgangskode.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Værdien skal være på præcis {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen blev kun delvist uploadet.',
    'No file was uploaded.' => 'Ingen fil blev uploadet.',
    'No temporary folder was configured in php.ini.' => 'Ingen midlertidig mappe er konfigureret i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-udvidelse forårsagede fejl i upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samling skal indeholde mindst ét element.|Denne samling skal indeholde mindst {{ limit }} elementer.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samling skal indeholde højst ét element.|Denne samling skal indeholde højst {{ limit }} elementer.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samling skal indeholde præcis ét element.|Denne samling skal indeholde præcis {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Ikke-understøttet korttype eller ugyldigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det er ikke et gyldigt International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Værdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Værdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Værdien er hverken en gyldig ISBN-10 eller en gyldig ISBN-13.',
    'This value is not a valid ISSN.' => 'Værdien er ikke en gyldig ISSN.',
    'Error' => 'Fejl',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke indeholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uploadede fil var for stor. Upload venligst en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-token er ugyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kan findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodning kan ikke behandles på grund af et systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen adgang til at forespørge ressourcen.',
    'Invalid CSRF token.' => 'Ugyldig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder er fundet til understøttelsen af godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session tilgængelig, sessionen er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kan findes.',
    'Username could not be found.' => 'Brugernavn kan ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
  ),
));

$cataloguePt_BR = new MessageCatalogue('pt-BR', array (
));
$catalogue->addFallbackCatalogue($cataloguePt_BR);

return $catalogue;
