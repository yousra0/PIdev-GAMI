<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Latn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost bi trebala da bude netačna.',
    'This value should be true.' => 'Vrednost bi trebala da bude tačna.',
    'This value should be of type {{ type }}.' => 'Vrednost bi trebala da bude tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost bi trebala da bude prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost koju ste izabrali nije validan izbor.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Morate izabrati najmanje {{ limit }} mogućnosti.|Morate izabrati najmanje {{ limit }} mogućnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Morate izabrati najviše {{ limit }} mogućnosti.|Morate izabrati najviše {{ limit }} mogućnosti.',
    'One or more of the given values is invalid.' => 'Jedna ili više od odabranih vrednosti nisu validne.',
    'This field was not expected.' => 'Ovo polje nije bilo očekivano.',
    'This field is missing.' => 'Ovo polje nedostaje.',
    'This value is not a valid date.' => 'Vrednost nije validna kao datum.',
    'This value is not a valid datetime.' => 'Vrednost nije validna kao datum i vreme.',
    'This value is not a valid email address.' => 'Vrednost nije validna adresa elektronske pošte.',
    'The file could not be found.' => 'Fajl ne može biti pronađen.',
    'The file is not readable.' => 'Fajl nije čitljiv.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fajl je preveliki ({{ size }} {{ suffix }}). Najveća dozvoljena veličina fajla je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME tip fajla nije validan ({{ type }}). Dozvoljeni MIME tipovi su {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Vrednost bi trebala da bude {{ limit }} ili manje.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Vrednost je predugačka. Trebalo bi da ima {{ limit }} karaktera ili manje.|Vrednost je predugačka. Trebalo bi da ima {{ limit }} karaktera ili manje.',
    'This value should be {{ limit }} or more.' => 'Vrednost bi trebala da bude {{ limit }} ili više.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Vrednost je prekratka. Trebalo bi da ima {{ limit }} karaktera ili više.|Vrednost je prekratka. Trebalo bi da ima {{ limit }} karaktera ili više.',
    'This value should not be blank.' => 'Vrednost ne bi trebala da bude prazna.',
    'This value should not be null.' => 'Vrednost ne bi trebala da bude null.',
    'This value should be null.' => 'Vrednost bi trebala da bude null.',
    'This value is not valid.' => 'Vrednost nije validna.',
    'This value is not a valid time.' => 'Vrednost nije validno vreme.',
    'This value is not a valid URL.' => 'Vrednost nije validan URL.',
    'The two values should be equal.' => 'Obe vrednosti bi trebale da budu jednake.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fajl je preveliki. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fajl je preveliki.',
    'The file could not be uploaded.' => 'Fajl ne može biti otpremljen.',
    'This value should be a valid number.' => 'Vrednost bi trebala da bude validan broj.',
    'This file is not a valid image.' => 'Ovaj fajl nije validan kao slika.',
    'This is not a valid IP address.' => 'Ova vrednost nije validna IP adresa.',
    'This value is not a valid language.' => 'Vrednost nije validan jezik.',
    'This value is not a valid locale.' => 'Vrednost nije validna međunarodna oznaka jezika.',
    'This value is not a valid country.' => 'Vrednost nije validna država.',
    'This value is already used.' => 'Vrednost je već iskorišćena.',
    'The size of the image could not be detected.' => 'Veličina slike ne može biti određena.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je prevelika ({{ width }} piksela). Najveća dozvoljena širina je {{ max_width }} piksela.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premala ({{ width }} piksela). Najmanja dozvoljena širina je {{ min_width }} piksela.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Visina slike je prevelika ({{ height }} piksela). Najveća dozvoljena visina je {{ max_height }} piksela.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Visina slike je preniska ({{ height }} piksela). Najmanja dozvoljena visina je {{ min_height }} piksela.',
    'This value should be the user\'s current password.' => 'Vrednost bi trebala da bude trenutna korisnička lozinka.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Vrednost bi trebala da ima tačno {{ limit }} karaktera.|Vrednost bi trebala da ima tačno {{ limit }} karaktera.',
    'The file was only partially uploaded.' => 'Fajl je samo parcijalno otpremljena.',
    'No file was uploaded.' => 'Fajl nije otpremljen.',
    'No temporary folder was configured in php.ini.' => 'Privremeni direktorijum nije konfigurisan u php.ini, ili konfigurisani direktorijum ne postoji.',
    'Cannot write temporary file to disk.' => 'Nije moguće upisati privremeni fajl na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP ekstenzija je prouzrokovala neuspeh otpremanja datoteke.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ova kolekcija bi trebala da sadrži {{ limit }} ili više elemenata.|Ova kolekcija bi trebala da sadrži {{ limit }} ili više elemenata.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ova kolekcija bi trebala da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija bi trebala da sadrži {{ limit }} ili manje elemenata.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ova kolekcija bi trebala da sadrži tačno {{ limit }} element.|Ova kolekcija bi trebala da sadrži tačno {{ limit }} elementa.',
    'Invalid card number.' => 'Nevalidan broj kartice.',
    'Unsupported card type or invalid card number.' => 'Nevalidan broj kartice ili nepodržan tip kartice.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ova vrednost nije validan Međunarodni broj bankovnog računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Nevalidna vrednost ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Nevalidna vrednost ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Vrednost nije ni validan ISBN-10 ni validan ISBN-13.',
    'This value is not a valid ISSN.' => 'Nevalidna vrednost ISSN.',
    'This value is not a valid currency.' => 'Vrednost nije validna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ova vrednost bi trebala da bude jednaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ova vrednost bi trebala da bude veća od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ova vrednost bi trebala da je veća ili jednaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrednost bi trebala da bude identična sa {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ova vrednost bi trebala da bude manja od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ova vrednost bi trebala da bude manja ili jednaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ova vrednost ne bi trebala da bude jednaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrednost ne bi trebala da bude identična sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmera ove slike je prevelika ({{ ratio }}). Maksimalna dozvoljena razmera je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmera ove slike je premala ({{ ratio }}). Minimalna očekivana razmera je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadratna ({{ width }}x{{ height }} piksela). Kvadratne slike nisu dozvoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je pejzažno orijentisana ({{ width }}x{{ height }} piksela). Pejzažno orijentisane slike nisu dozvoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je portretno orijentisana ({{ width }}x{{ height }} piksela). Portretno orijentisane slike nisu dozvoljene.',
    'An empty file is not allowed.' => 'Prazan fajl nije dozvoljen.',
    'The host could not be resolved.' => 'Ime hosta ne može biti razrešeno.',
    'This value does not match the expected {{ charset }} charset.' => 'Vrednost se ne poklapa sa očekivanim {{ charset }} setom karaktera.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ova vrednost nije validan Kod za identifikaciju biznisa (BIC).',
    'Error' => 'Greška',
    'This is not a valid UUID.' => 'Ova vrednost nije validan UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ova vrednost bi trebala da bude višestruka u odnosu na {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'BIC kod nije povezan sa IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Ova vrednost bi trebala da bude validan JSON.',
    'This collection should contain only unique elements.' => 'Ova kolekcija bi trebala da sadrži samo jedinstvene elemente.',
    'This value should be positive.' => 'Ova vrednost bi trebala biti pozitivna.',
    'This value should be either positive or zero.' => 'Ova vrednost bi trebala biti ili pozitivna ili nula.',
    'This value should be negative.' => 'Ova vrednost bi trebala biti negativna.',
    'This value should be either negative or zero.' => 'Ova vrednost bi trebala biti ili negativna ili nula.',
    'This value is not a valid timezone.' => 'Ova vrednost nije validna vremenska zona.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Lozinka je kompromitovana prilikom curenja podataka usled napada, nemojte je koristiti. Koristite drugu lozinku.',
    'This value should be between {{ min }} and {{ max }}.' => 'Ova vrednost treba da bude između {{ min }} i {{ max }}.',
    'This value is not a valid hostname.' => 'Ova vrednost nije ispravno ime poslužitelja (hostname).',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Broj elemenata u ovoj kolekciji bi trebala da bude višestruka u odnosu na {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Ova vrednost bi trebala da zadovoljava namjanje jedno od narednih ograničenja:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Svaki element ove kolekcije bi trebalo da zadovolji sopstveni skup ograničenja.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Ova vrednost nije ispravan međunarodni sigurnosni i identifikacioni broj (ISIN).',
    'This value should be a valid expression.' => 'Ova vrednost treba da bude validan izraz.',
    'This value is not a valid CSS color.' => 'Ova vrednost nije validna CSS boja.',
    'This value is not a valid CIDR notation.' => 'Ova vrednost nije validna CIDR notacija.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Vrednost mrežne maske treba biti između {{ min }} i {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Naziv fajla je suviše dugačak. Treba da ima {{ filename_max_length }} karaktera ili manje.|Naziv fajla je suviše dugačak. Treba da ima {{ filename_max_length }} karaktera ili manje.',
    'The password strength is too low. Please use a stronger password.' => 'Lozinka nije dovoljno jaka. Molimo koristite jaču lozinku.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Ova vrednost sadrži karaktere koji nisu dozvoljeni od strane važećeg nivoa restrikcije.',
    'Using invisible characters is not allowed.' => 'Korišćenje nevidljivih karaktera nije dozvoljeno.',
    'Mixing numbers from different scripts is not allowed.' => 'Mešanje brojeva iz različitih skripti nije dozvoljeno.',
    'Using hidden overlay characters is not allowed.' => 'Korišćenje skrivenih pokrivenih karaktera nije dozvoljeno.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Ekstenzija fajla je nevalidna ({{ extension }}). Dozvoljene ekstenzije su {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Detektovani enkoding karaktera nije validan ({{ detected }}). Dozvoljne vrednosti za enkoding su: {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Ova vrednost nije validna MAC adresa.',
    'This form should not contain extra fields.' => 'Ovaj formular ne treba da sadrži dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Otpremljena datoteka je bila prevelika. Molim pokušajte otpremanje manje datoteke.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost nije ispravna. Pokušajte ponovo.',
    'This value is not a valid HTML5 color.' => 'Ova vrednost nije ispravna HTML5 boja.',
    'Please enter a valid birthdate.' => 'Molim upišite ispravan datum rođenja.',
    'The selected choice is invalid.' => 'Odabrani izbor nije ispravan.',
    'The collection is invalid.' => 'Ova kolekcija nije ispravna.',
    'Please select a valid color.' => 'Molim izaberite ispravnu boju.',
    'Please select a valid country.' => 'Molim izaberite ispravnu državu.',
    'Please select a valid currency.' => 'Molim izaberite ispravnu valutu.',
    'Please choose a valid date interval.' => 'Molim izaberite ispravan datumski interval.',
    'Please enter a valid date and time.' => 'Molim upišite ispravan datum i vreme.',
    'Please enter a valid date.' => 'Molim upišite ispravan datum.',
    'Please select a valid file.' => 'Molim izaberite ispravnu datoteku.',
    'The hidden field is invalid.' => 'Skriveno polje nije ispravno.',
    'Please enter an integer.' => 'Molim upišite ceo broj (integer).',
    'Please select a valid language.' => 'Molim izaberite ispravan jezik.',
    'Please select a valid locale.' => 'Molim izaberite ispravnu lokalizaciju.',
    'Please enter a valid money amount.' => 'Molim upišite ispravnu količinu novca.',
    'Please enter a number.' => 'Molim upišite broj.',
    'The password is invalid.' => 'Ova lozinka nije ispravna.',
    'Please enter a percentage value.' => 'Molim upišite procentualnu vrednost.',
    'The values do not match.' => 'Date vrednosti se ne poklapaju.',
    'Please enter a valid time.' => 'Molim upišite ispravno vreme.',
    'Please select a valid timezone.' => 'Molim izaberite ispravnu vremensku zonu.',
    'Please enter a valid URL.' => 'Molim upišite ispravan URL.',
    'Please enter a valid search term.' => 'Molim upišite ispravan termin za pretragu.',
    'Please provide a valid phone number.' => 'Molim navedite ispravan broj telefona.',
    'The checkbox has an invalid value.' => 'Polje za potvrdu sadrži neispravnu vrednost.',
    'Please enter a valid email address.' => 'Molim upišite ispravnu email adresu.',
    'Please select a valid option.' => 'Molim izaberite ispravnu opciju.',
    'Please select a valid range.' => 'Molim izaberite ispravan opseg.',
    'Please enter a valid week.' => 'Molim upišite ispravnu sedmicu.',
    'This value is not a valid captcha.' => 'Ova vrijednost nije ispravna captcha.',
    'The captcha was not resolved on the right domain.' => 'Captcha nije rešena na ispravnom domenu.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Izuzetak pri autentifikaciji.',
    'Authentication credentials could not be found.' => 'Autentifikacioni podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Zahtev za autentifikaciju ne može biti obrađen zbog sistemskih problema.',
    'Invalid credentials.' => 'Nevalidni podaci za autentifikaciju.',
    'Cookie has already been used by someone else.' => 'Kolačić je već iskorišćen od strane nekog drugog.',
    'Not privileged to request the resource.' => 'Nemate prava pristupa ovom resursu.',
    'Invalid CSRF token.' => 'Nevalidan CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Autentifikacioni provajder za podršku tokena nije pronađen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, istekla je ili su kolačići isključeni.',
    'No token could be found.' => 'Token ne može biti pronađen.',
    'Username could not be found.' => 'Korisničko ime ne može biti pronađeno.',
    'Account has expired.' => 'Nalog je istekao.',
    'Credentials have expired.' => 'Podaci za autentifikaciju su istekli.',
    'Account is disabled.' => 'Nalog je onemogućen.',
    'Account is locked.' => 'Nalog je zaključan.',
    'Too many failed login attempts, please try again later.' => 'Previše neuspešnih pokušaja prijavljivanja, molim pokušajte ponovo kasnije.',
    'Invalid or expired login link.' => 'Link za prijavljivanje je istekao ili je neispravan.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Previše neuspešnih pokušaja prijavljivanja, molim pokušajte ponovo za %minutes% minut.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
    'This value is not a valid captcha.' => 'This value is not a valid captcha.',
    'The captcha was not resolved on the right domain.' => 'The captcha was not resolved on the right domain.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
