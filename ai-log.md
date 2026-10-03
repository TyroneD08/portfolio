# AI-log: WordPress-thema Tryone

## Theme-aanpassingen

- Het bestaande custom theme `tryone` is behouden; er is geen nieuw theme gemaakt.
- Styles en scripts worden vanuit `functions.php` geladen met `wp_enqueue_style()` en `wp_enqueue_script()`. De bestandsdatum wordt als versie gebruikt, zodat browsers wijzigingen opnieuw laden.
- `add_theme_support('post-thumbnails')` schakelt uitgelichte afbeeldingen voor berichten en pagina's in. Editors kunnen dan een afbeelding instellen; templates kunnen deze onder meer met `the_post_thumbnail()` tonen.
- `front-page.php` bevat de homepage met de introductie en werkwijze.
- `page-projecten.php` toont de projecten als een afzonderlijke pagina; `page-contact.php` toont de contactgegevens.
- `header.php` linkt in volgorde naar Over mij (de homepage), Projecten en Contact.
- `page.php` toont overige gewone pagina's.

## WordPress-templatehiërarchie

Volgens de [WordPress-templatehiërarchie](https://developer.wordpress.org/themes/basics/template-hierarchy/) kiest WordPress voor de voorpagina eerst `front-page.php`. Voor een gewone pagina zoekt WordPress, tenzij een aangepaste paginatemplate is gekozen, achtereenvolgens een slug-/ID-specifieke template en daarna `page.php`; zonder die template wordt verder teruggevallen op `singular.php` en `index.php`.

Daarom gebruikt de ingestelde homepagina `front-page.php`. Een pagina met slug `projecten` gebruikt `page-projecten.php`, een pagina met slug `contact` gebruikt `page-contact.php`, en overige gewone pagina's gebruiken `page.php`. Tijdelijke testlabels zijn verwijderd van de openbare site.

## Pagina's aanmaken en controleren

1. Maak en publiceer pagina's met de titels “Over mij”, “Projecten” en “Contact”. Controleer dat de pagina-slugs respectievelijk `over-mij`, `projecten` en `contact` zijn.
2. Ga naar **Instellingen → Lezen**, kies bij de homepage-instelling voor **Een statische pagina** en stel “Over mij” in als homepage.
3. Open de homepage, `/projecten/` en `/contact/`; de homepage bevat Over mij en de werkwijze, de Projecten-pagina bevat Korio plus de drie placeholders, en Contact heeft een eigen URL.
