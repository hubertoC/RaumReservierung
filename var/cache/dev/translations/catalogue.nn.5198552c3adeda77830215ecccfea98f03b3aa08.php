<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien skulle ha vore tom/nei.',
    'This value should be true.' => 'Verdien skulla ha vore satt/ja.',
    'This value should be of type {{ type }}.' => 'Verdien må vere av typen {{ type }}.',
    'This value should be blank.' => 'Verdien skal vere blank.',
    'The value you selected is not a valid choice.' => 'Verdien du valgte er ikkje gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maksimalt gjere {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'Ein eller fleire av dei opplyste verdiane er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikkje ein gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikkje ein gyldig dato og tid.',
    'This value is not a valid email address.' => 'Verdien er ikkje ei gyldig e-postadresse.',
    'The file could not be found.' => 'Fila kunne ikkje finnes.',
    'The file is not readable.' => 'Fila kan ikkje lesast.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fila er for stor ({{ size }} {{ suffix }}). Tillatt maksimal størrelse er {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime-typen av fila er ugyldig ({{ type }}). Tillatte mime-typar er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må vere {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må vere {{ limit }} bokstavar eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må vere {{ limit }} eller meir.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} teikn eller fleire.',
    'This value should not be blank.' => 'Verdien må ikkje vere blank.',
    'This value should not be null.' => 'Verdien må ikkje vere tom (null).',
    'This value should be null.' => 'Verdien må vere tom (null).',
    'This value is not valid.' => 'Verdien er ikkje gyldig.',
    'This value is not a valid time.' => 'Verdien er ikkje gyldig tidseining.',
    'This value is not a valid URL.' => 'Verdien er ikkje ein gyldig URL.',
    'The two values should be equal.' => 'Dei to verdiane må vere like.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fila er for stor. Den maksimale storleik er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fila er for stor.',
    'The file could not be uploaded.' => 'Fila kunne ikkje bli lasta opp.',
    'This value should be a valid number.' => 'Verdien må vere eit gyldig tal.',
    'This file is not a valid image.' => 'Fila er ikkje eit gyldig bilete.',
    'This is not a valid IP address.' => 'Dette er ikkje ei gyldig IP-adresse.',
    'This value is not a valid language.' => 'Verdien er ikkje eit gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikkje ein gyldig lokalitet (språk/region).',
    'This value is not a valid country.' => 'Verdien er ikkje eit gyldig land.',
    'This value is already used.' => 'Verdien er allereie i bruk.',
    'The size of the image could not be detected.' => 'Storleiken på biletet kunne ikkje oppdagast.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Biletbreidda er for stor, ({{ width }} pikslar). Tillatt maksimumsbreidde er {{ max_width }} pikslar.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Biletbreidda er for liten, ({{ width }} pikslar). Forventa minimumsbreidde er {{ min_width }} pikslar.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bilethøgda er for stor, ({{ height }} pikslar). Tillatt maksimumshøgde er {{ max_height }} pikslar.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Billethøgda er for låg, ({{ height }} pikslar). Forventa minimumshøgde er {{ min_height }} pikslar.',
    'This value should be the user\'s current password.' => 'Verdien må vere brukaren sitt noverande passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien må vere nøyaktig {{ limit }} teikn.',
    'The file was only partially uploaded.' => 'Fila vart kun delvis opplasta.',
    'No file was uploaded.' => 'Inga fil vart lasta opp.',
    'No temporary folder was configured in php.ini.' => 'Førebels mappe (tmp) er ikkje konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikkje skrive førebels fil til disk.',
    'A PHP extension caused the upload to fail.' => 'Ei PHP-udviding forårsaka feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlinga må innehalde {{ limit }} element eller meir.|Denne samlinga må innehalde {{ limit }} element eller meir.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlinga må innehalde {{ limit }} element eller færre.|Denne samlinga må innehalde {{ limit }} element eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlinga må innehalde nøyaktig {{ limit }} element.|Denne samlinga må innehalde nøyaktig {{ limit }} element.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikkje støtta eller ugyldig kortnummer.',
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
