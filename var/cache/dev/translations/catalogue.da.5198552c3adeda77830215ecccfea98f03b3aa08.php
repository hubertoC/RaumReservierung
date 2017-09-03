<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'validators' => 
  array (
    'This value should be false.' => 'Værdien skal være falsk.',
    'This value should be true.' => 'Værdien skal være sand.',
    'This value should be of type {{ type }}.' => 'Værdien skal være af typen {{ type }}.',
    'This value should be blank.' => 'Værdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Værdien skal være en af de givne muligheder.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du skal vælge mindst {{ limit }} muligheder.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan højest vælge {{ limit }} muligheder.',
    'One or more of the given values is invalid.' => 'En eller flere af de oplyste værdier er ugyldige.',
    'This field was not expected.' => 'Feltet blev ikke forventet.',
    'This field is missing.' => 'Dette felt er mangler.',
    'This value is not a valid date.' => 'Værdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Værdien er ikke en gyldig dato og tid.',
    'This value is not a valid email address.' => 'Værdien er ikke en gyldig e-mail adresse.',
    'The file could not be found.' => 'Filen kunne ikke findes.',
    'The file is not readable.' => 'Filen kan ikke læses.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilladte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen af filen er ugyldig ({{ type }}). Tilladte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Værdien skal være {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Værdien er for lang. Den skal have {{ limit }} bogstaver eller mindre.',
    'This value should be {{ limit }} or more.' => 'Værdien skal være {{ limit }} eller mere.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Værdien er for kort. Den skal have {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Værdien må ikke være blank.',
    'This value should not be null.' => 'Værdien må ikke være tom (null).',
    'This value should be null.' => 'Værdien skal være tom (null).',
    'This value is not valid.' => 'Værdien er ikke gyldig.',
    'This value is not a valid time.' => 'Værdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Værdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'De to værdier skal være ens.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelse er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke blive uploadet.',
    'This value should be a valid number.' => 'Værdien skal være et gyldigt tal.',
    'This file is not a valid image.' => 'Filen er ikke gyldigt billede.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Værdien er ikke et gyldigt sprog.',
    'This value is not a valid locale.' => 'Værdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Værdien er ikke et gyldigt land.',
    'This value is already used.' => 'Værdien er allerede i brug.',
    'The size of the image could not be detected.' => 'Størrelsen på billedet kunne ikke detekteres.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Billedbredden er for stor ({{ width }}px). Tilladt maksimumsbredde er {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Billedebredden er for lille ({{ width }}px). Forventet minimumshøjde er {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Billedhøjden er for stor ({{ height }}px). Tilladt maksimumshøjde er {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billedhøjden er for lille ({{ height }}px). Forventet minimumshøjde er {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Værdien skal være brugerens nuværende password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Værdien skal have præcis {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen var kun delvis uploadet.',
    'No file was uploaded.' => 'Ingen fil blev uploadet.',
    'No temporary folder was configured in php.ini.' => 'Ingen midlertidig mappe er konfigureret i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP udvidelse forårsagede fejl i upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samling skal indeholde {{ limit }} element eller flere.|Denne samling skal indeholde {{ limit }} elementer eller flere.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samling skal indeholde {{ limit }} element eller mindre.|Denne samling skal indeholde {{ limit }} elementer eller mindre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samling skal indeholde præcis {{ limit }} element.|Denne samling skal indeholde præcis {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Ikke-understøttet korttype eller ugyldigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det er ikke en gyldig International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Værdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Værdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Værdien er hverken en gyldig ISBN-10 eller en gyldig ISBN-13.',
    'This value is not a valid ISSN.' => 'Værdien er ikke en gyldig ISSN.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke indeholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den oploadede fil var for stor. Opload venligst en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF nøglen er ugyldig.',
    'fos_user.username.already_used' => 'Brugernavnet er allerede i brug.',
    'fos_user.username.blank' => 'Indtast venligst et brugernavn.',
    'fos_user.username.short' => 'Brugernavnet er for kort.',
    'fos_user.username.long' => 'Brugernavnet er for langt.',
    'fos_user.email.already_used' => 'E-mailadressen er allerede i brug.',
    'fos_user.email.blank' => 'Indtast venligst en e-mailadresse.',
    'fos_user.email.short' => 'E-mailadressen er for kort.',
    'fos_user.email.long' => 'E-mailadressen er for lang.',
    'fos_user.email.invalid' => 'E-mailadressen er ikke gyldig.',
    'fos_user.password.blank' => 'Indtast venligst en adgangskode.',
    'fos_user.password.short' => 'Adgangskoden er for kort.',
    'fos_user.new_password.blank' => 'Indtast venligst en ny adgangskode.',
    'fos_user.new_password.short' => 'Den nye adgangskode er for kort.',
    'fos_user.current_password.invalid' => 'Den indtastede adgangskode er forkert.',
    'fos_user.group.blank' => 'Indtast venligst et navn.',
    'fos_user.group.short' => 'Navnet er for kort.',
    'fos_user.group.long' => 'Navnet er for langt.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kan findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodning kan ikke behandles på grund af et systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen tilladselese at anvende kilden.',
    'Invalid CSRF token.' => 'Ugyldigt CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce er udløbet.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder er fundet til understøttelsen af godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session tilgængelig, sessionen er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kan findes.',
    'Username could not be found.' => 'Brugernavn kan ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Opdater gruppe',
    'group.show.name' => 'Gruppenavn',
    'group.new.submit' => 'Opret gruppe',
    'group.flash.updated' => 'Gruppen er blevet opdateret.',
    'group.flash.created' => 'Gruppen er blevet oprettet.',
    'group.flash.deleted' => 'Gruppen er blevet slettet.',
    'security.login.username' => 'Brugernavn',
    'security.login.password' => 'Adgangskode',
    'security.login.remember_me' => 'Husk mig',
    'security.login.submit' => 'Log ind',
    'profile.show.username' => 'Brugernavn',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Opdater',
    'profile.flash.updated' => 'Profilen er blevet opdateret.',
    'change_password.submit' => 'Skift adgangskode',
    'change_password.flash.success' => 'Adgangskoden er blevet opdateret.',
    'registration.check_email' => 'En e-mail er blevet sendt til %email%. Den indeholder et aktiveringslink, du skal følge for at aktivere din konto.
',
    'registration.confirmed' => 'Tillykke %username%, din konto er nu aktiveret',
    'registration.back' => 'Tilbage til foregående side.',
    'registration.submit' => 'Registrer',
    'registration.flash.user_created' => 'Bruger er blevet oprettet.',
    'registration.email.subject' => 'Velkommen %username%!',
    'registration.email.message' => 'Hej %username%!

For at færdiggøre aktiveringen af din konto, besøg venligst %confirmationUrl%

Dette link kan kun bruges én gang til at validere din konto.

Venlig hilsen,
Holdet bag siden.
',
    'resetting.check_email' => 'En e-mail er blevet sendt til %email%. Den indeholder et link, du skal følge for at nulstille din adgangskode.
Note: Du kan først bede om en ny adgangskode om %tokenLifetime% timer.

Hvis ikke du modtager en enmail skal du tjekke dit spamfilter eller prøve igen.
',
    'resetting.request.username' => 'Brugernavn eller e-mailadresse',
    'resetting.request.submit' => 'Nulstil adgangskode',
    'resetting.reset.submit' => 'Skift adgangskode',
    'resetting.flash.success' => 'Adgangskoden er blevet nulstillet.',
    'resetting.email.subject' => 'Velkommen %username%!',
    'resetting.email.message' => 'Hej %username%!

For at nulstille din adgangskode, besøg venligst %confirmationUrl%

Venlig hilsen,
Holdet bag siden.
',
    'layout.logout' => 'Log ud',
    'layout.login' => 'Log ind',
    'layout.register' => 'Registrer',
    'layout.logged_in_as' => 'Logget ind som %username%',
    'form.group_name' => 'Gruppenavn',
    'form.username' => 'Brugernavn',
    'form.email' => 'E-mail',
    'form.current_password' => 'Nuværende adgangskode',
    'form.password' => 'Adgangskode',
    'form.password_confirmation' => 'Gentag adgangskode',
    'form.new_password' => 'Ny adgangskode',
    'form.new_password_confirmation' => 'Gentag adgangskode',
  ),
));

$catalogueDe = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
    'fos_user.username.already_used' => 'Dieser Benutzername wird bereits verwendet.',
    'fos_user.username.blank' => 'Bitte geben Sie einen Benutzernamen an.',
    'fos_user.username.short' => 'Dieser Benutzername ist zu kurz.',
    'fos_user.username.long' => 'Dieser Benutzername ist zu lang.',
    'fos_user.email.already_used' => 'Diese E-Mail-Adresse wird bereits verwendet.',
    'fos_user.email.blank' => 'Bitte geben Sie eine E-Mail-Adresse an.',
    'fos_user.email.short' => 'Diese E-Mail-Adresse ist zu kurz.',
    'fos_user.email.long' => 'Diese E-Mail-Adresse ist zu lang.',
    'fos_user.email.invalid' => 'Diese E-Mail-Adresse ist ungültig.',
    'fos_user.password.blank' => 'Bitte geben Sie ein Passwort an.',
    'fos_user.password.short' => 'Das Passwort ist zu kurz.',
    'fos_user.password.mismatch' => 'Die Passwörter stimmen nicht überein.',
    'fos_user.new_password.blank' => 'Bitte geben Sie ein neues Passwort an.',
    'fos_user.new_password.short' => 'Das neue Passwort ist zu kurz.',
    'fos_user.current_password.invalid' => 'Das angegebene Passwort ist ungültig.',
    'fos_user.group.blank' => 'Bitte geben Sie einen Namen an.',
    'fos_user.group.short' => 'Dieser Name ist zu kurz.',
    'fos_user.group.long' => 'Dieser Name ist zu lang.',
    'fos_group.name.already_used' => 'Dieser Name wird bereits verwendet.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'Digest nonce has expired.' => 'Digest nonce ist abgelaufen.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Gruppe aktualisieren',
    'group.show.name' => 'Gruppenname',
    'group.new.submit' => 'Gruppe erstellen',
    'group.flash.updated' => 'Die Gruppe wurde aktualisiert.',
    'group.flash.created' => 'Die Gruppe wurde erstellt.',
    'group.flash.deleted' => 'Die Gruppe wurde gelöscht.',
    'security.login.username' => 'Benutzername',
    'security.login.password' => 'Passwort',
    'security.login.remember_me' => 'An mich erinnern',
    'security.login.submit' => 'Anmelden',
    'profile.show.username' => 'Benutzername',
    'profile.show.email' => 'E-Mail',
    'profile.edit.submit' => 'Benutzer aktualisieren',
    'profile.flash.updated' => 'Das Benutzerprofil wurde aktualisiert.',
    'change_password.submit' => 'Passwort ändern',
    'change_password.flash.success' => 'Das Passwort wurde geändert.',
    'registration.check_email' => 'Eine E-Mail wurde an %email% gesendet. Sie enthält einen Link, den Sie anklicken müssen, um Ihr Benutzerkonto zu bestätigen.',
    'registration.confirmed' => 'Glückwunsch %username%, Ihr Benutzerkonto ist jetzt bestätigt.',
    'registration.back' => 'Zurück zur ursprünglichen Seite.',
    'registration.submit' => 'Registrieren',
    'registration.flash.user_created' => 'Der Benutzer wurde erfolgreich erstellt.',
    'registration.email.subject' => 'Willkommen %username%!',
    'registration.email.message' => 'Hallo %username%!

Besuchen Sie bitte folgende Seite, um Ihr Benutzerkonto zu bestätigen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'resetting.check_email' => 'Eine E-Mail wurde verschickt. Sie beinhaltet einen Link zum Zurücksetzen des Passwortes.
Hinweis: Ein neues Passwort kann nur alle %tokenLifetime% Stunden beantragt werden.

Eventuell wurde diese E-Mail als Spam markiert, wenn sie nicht angekommen ist.
',
    'resetting.request.username' => 'Benutzername oder E-Mail-Adresse',
    'resetting.request.submit' => 'Passwort zurücksetzen',
    'resetting.reset.submit' => 'Passwort ändern',
    'resetting.flash.success' => 'Das Passwort wurde erfolgreich zurückgesetzt.',
    'resetting.email.subject' => 'Passwort zurücksetzen',
    'resetting.email.message' => 'Hallo %username%!

Besuchen Sie bitte folgende Seite, um Ihr Passwort zurückzusetzen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'layout.logout' => 'Abmelden',
    'layout.login' => 'Anmelden',
    'layout.register' => 'Registrieren',
    'layout.logged_in_as' => 'Angemeldet als %username%',
    'form.group_name' => 'Gruppenname',
    'form.username' => 'Benutzername',
    'form.email' => 'E-Mail-Adresse',
    'form.current_password' => 'Derzeitiges Passwort',
    'form.password' => 'Passwort',
    'form.password_confirmation' => 'Passwort bestätigen',
    'form.new_password' => 'Neues Passwort',
    'form.new_password_confirmation' => 'Neues Passwort bestätigen',
  ),
));
$catalogue->addFallbackCatalogue($catalogueDe);

return $catalogue;
