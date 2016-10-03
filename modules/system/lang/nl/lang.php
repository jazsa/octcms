<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Terug naar de basis'
    ],
    'locale' => [
        'cs' => 'Czech',
        'da' => 'Danish',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'de' => 'German',
        'el' => 'Greek',
        'es' => 'Spanish',
        'es-ar' => 'Spanish (Argentina)',
        'fa' => 'Persian',
        'fr' => 'French',
        'fr-ca' => 'French (Canada)',
        'hu' => 'Hungarian',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => 'Japanese',
        'lv' => 'Latvian',
        'nb-no' => 'Norwegian (Bokmål)',
        'nl' => 'Dutch',
        'pl' => 'Polish',
        'pt-br' => 'Portuguese (Brazil)',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'sv' => 'Swedish',
        'sk' => 'Slovak (Slovakia)',
        'tr' => 'Turkish',
        'zh-cn' => 'Chinese (China)',
        'zh-tw' => 'Chinese (Taiwan)',
    ],
    'directory' => [
        'create_fail' => 'Map aanmaken mislukt: :name',
    ],
    'file' => [
        'create_fail' => 'Bestand aanmaken mislukt: :name',
    ],
    'combiner' => [
        'not_found' => "Het samenvoegbestand ':name' is niet gevonden.",
    ],
    'system' => [
        'name' => 'Systeem',
        'menu_label' => 'Systeem',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Diversen',
            'logs' => 'Logboeken',
            'mail' => 'E-mail',
            'shop' => 'Winkel',
            'team' => 'Team',
            'users' => 'Gebruikers',
            'system' => 'Systeem',
            'social' => 'Sociaal',
            'events' => 'Events',
            'customers' => 'Klanten',
            'my_settings' => 'Mijn instellingen',
        ],
    ],
    'theme' => [
        'label' => 'Thema',
        'unnamed' => 'Naamloos thema',
        'name' => [
            'label' => 'Thema naam',
            'help' => 'Gebruik bij het invoeren van de naam de unieke code van het thema. Bijvoorbeeld: RainLab.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Installeer themas',
        'search' => "Zoek thema's om te installeren...",
        'installed' => "Geïnstalleerde thema's",
        'no_themes' => "Er zijn geen thema's geinstallerd uit de marketplace.",
        'recommended' => 'Aanbevolen',
        'remove_confirm' => 'Weet je zeker dat je dit thema wilt verwijderen?',
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Naamloze plugin',
        'name' => [
            'label' => 'Plugin naam',
            'help' => 'Gebruik bij het invoeren van de naam de unieke code van de plugin. Bijvoorbeeld: RainLab.Blog',
        ],
    ],
    'plugins' => [
        'manage' => 'Beheer plugins',
        'enable_or_disable' => 'In- of uitschakelen',
        'enable_or_disable_title' => 'In- of uitschakelen van plugins',
        'install' => 'Installeer plugins',
        'install_products' => 'Installeer plugins',
        'search' => 'Zoek plugins om te installeren',
        'installed' => 'Geïnstalleerde plugins',
        'no_plugins' => 'Er zijn geen plugins geïnstalleerd uit de marketplace.',
        'recommended' => 'Aanbevolen',
        'remove' => 'Verwijder',
        'refresh' => 'Ververs',
        'disabled_label' => 'Uitschakelen',
        'disabled_help' => 'Uitgeschakelde plugins worden genegeerd door de applicatie.',
        'frozen_label' => 'Uitsluiten van updates',
        'frozen_help' => 'Uitgesloten plugins worden niet meer bijgewerkt naar een nieuwe versie.',
        'selected_amount' => 'Geselecteerde plugins: :amount',
        'remove_confirm' => 'Weet je het zeker dat je deze plugin wilt verwijderen?',
        'remove_success' => 'Gekozen plugins succesvol verwijderd uit het systeem.',
        'refresh_confirm' => 'Weet je het zeker?',
        'refresh_success' => 'Gekozen plugins succesvol ververst in het systeem.',
        'disable_confirm' => 'Weet je het zeker dat je deze plugin wilt uitschakelen?',
        'disable_success' => 'Gekozen plugins zijn succesvol uitgeschakeld.',
        'enable_success' => 'Gekozen plugins zijn succesvol ingeschakeld.',
        'unknown_plugin' => 'De plugin is verwijderd van het bestandssysteem.',
    ],
    'project' => [
        'name' => 'Project',
        'owner_label' => 'Eigenaar',
        'attach' => 'Project koppelen',
        'detach' => 'Project ontkoppelen',
        'none' => 'Geen',
        'id' => [
            'label' => 'Project ID',
            'help' => 'Hoe achterhaal je jouw Project ID?',
            'missing' => 'Voer een Project ID in.',
        ],
        'detach_confirm' => 'Weet je zeker dat je dit project wilt ontkoppelen?',
        'unbind_success' => 'Project is succesvol ontkoppeld.',
    ],
    'settings' => [
        'menu_label' => 'Instellingen',
        'not_found' => 'Kan specifieke instelling niet vinden.',
        'missing_model' => 'De instellingenpagina mist de definitie van een Model.',
        'update_success' => 'Instellingen voor :name zijn succesvol bijgewerkt.',
        'return' => 'Terug naar systeeminstellingen',
        'search' => 'Zoeken',
    ],
    'mail' => [
        'log_file' => 'Logboek bestand',
        'menu_label' => 'E-mailinstellingen',
        'menu_description' => 'Beheer e-mailinstellingen.',
        'general' => 'Algemeen',
        'method' => 'E-mail methode',
        'sender_name' => 'Naam afzender',
        'sender_email' => 'E-mailadres afzender',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP adres',
        'smtp_authorization' => 'SMTP authenticatie vereist',
        'smtp_authorization_comment' => 'Vink deze optie aan indien de SMTP server authenticatie vereist.',
        'smtp_username' => 'Gebruikersnaam',
        'smtp_password' => 'Wachtwoord',
        'smtp_port' => 'SMTP poort',
        'smtp_ssl' => 'SSL verbinding vereist',
        'smtp_encryption' => 'SMTP encryptie protocol',
        'smtp_encryption_none' => 'Geen encryptie',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Pad naar Sendmail',
        'sendmail_path_comment' => 'Geef hier het volledige pad op naar de Sendmail-applicatie.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun domein',
        'mailgun_domain_comment' => 'Geef hier het Mailgun domeinnaam op.',
        'mailgun_secret' => 'Mailgun secret',
        'mailgun_secret_comment' => 'Geef hier de Mailgun API key op.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill secret',
        'mandrill_secret_comment' => 'Geef hier de Mandrill API key op.',
        'ses' => 'SES',
        'ses_key' => 'SES key',
        'ses_key_comment' => 'Voer SES API key in',
        'ses_secret' => 'SES secret',
        'ses_secret_comment' => 'Voer SES API secret key in',
        'ses_region' => 'SES regio',
        'ses_region_comment' => 'Voer SES regio (bijv. us-east-1) in',
        'drivers_hint_header' => 'Stuurprogramma\'s niet geïnstalleerd',
        'drivers_hint_content' => 'Om deze e-mail methode te gebruiken moet de plugin ":plugin" zijn geïnstalleerd.',
    ],
    'mail_templates' => [
        'menu_label' => 'E-mail sjablonen',
        'menu_description' => 'Wijzig de e-mail sjablonen die verstuurd worden naar gebruikers en beheerders. En beheer e-mail lay-outs.',
        'new_template' => 'Nieuw sjabloon',
        'new_layout' => 'Nieuwe lay-out',
        'template' => 'Sjabloon',
        'templates' => 'Sjablonen',
        'menu_layouts_label' => 'E-mail lay-outs',
        'layout' => 'Lay-out',
        'layouts' => 'Lay-outs',
        'no_layout' => '-- Geen lay-out --',
        'name' => 'Naam',
        'name_comment' => 'Een unieke naam die refereert naar dit sjabloon',
        'code' => 'Code',
        'code_comment' => 'Een unieke code die refereert naar deze lay-out',
        'subject' => 'Onderwerp',
        'subject_comment' => 'E-mail onderwerp',
        'description' => 'Omschrijving',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Platte tekst',
        'test_send' => 'Stuur testbericht',
        'test_success' => 'Het testbericht is succesvol verzonden.',
        'test_confirm' => 'Er zal een testbericht verstuurd worden naar :email. Zal ik doorgaan?',
        'creating' => 'Aanmaken sjabloon...',
        'creating_layout' => 'Aanmaken lay-out...',
        'saving' => 'Opslaan sjabloon...',
        'saving_layout' => 'Opslaan lay-out...',
        'delete_confirm' => 'Weet je zeker dat je dit sjabloon wilt verwijderen?',
        'delete_layout_confirm' => 'Weet je zeker dat je deze lay-out wilt verwijderen?',
        'deleting' => 'Verwijderen sjabloon...',
        'deleting_layout' => 'Verwijderen lay-out...',
        'sending' => 'Versturen testbericht...',
        'return' => 'Terug naar templatelijst',
    ],
    'install' => [
        'project_label' => 'Koppel aan project',
        'plugin_label' => 'Installeer plugin',
        'theme_label' => 'Installeer thema',
        'missing_plugin_name' => 'Voer de naam van een plugin in om te installeren.',
        'missing_theme_name' => 'Voor de naam van een thema in om te installeren.',
        'install_completing' => 'Bezig met het afronden van het installatieproces',
        'install_success' => 'De plugin is succesvol geïnstalleerd.',
    ],
    'updates' => [
        'title' => 'Beheer updates',
        'name' => 'Applicatie-update',
        'menu_label' => 'Updates',
        'menu_description' => "Update het systeem, beheer en installeer plugins en thema's.",
        'return_link' => 'Terug naar updates',
        'check_label' => 'Controleer op updates',
        'retry_label' => 'Probeer nogmaals',
        'plugin_name' => 'Naam',
        'plugin_code' => 'Code',
        'plugin_description' => 'Omschrijving',
        'plugin_version' => 'Versie',
        'plugin_author' => 'Auteur',
        'core_current_build' => 'Huidige build',
        'core_build' => 'Build :build',
        'core_build_help' => 'De meest recente versie is beschikbaar.',
        'core_downloading' => 'Bestanden aan het downloaden',
        'core_extracting' => 'Bestanden aan het uitpakken',
        'plugins' => 'Plugins',
        'themes' => "Thema's",
        'disabled' => 'Uitgeschakeld',
        'plugin_downloading' => 'Plugin downloaden: :name',
        'plugin_extracting' => 'Plugin uitpakken: :name',
        'plugin_version_none' => 'Nieuwe plugin',
        'plugin_current_version' => 'Huidige versie',
        'theme_new_install' => 'Nieuwe thema-installatie.',
        'theme_downloading' => 'Thema downloaden: :name',
        'theme_extracting' => 'Thema uitpakken: :name',
        'update_label' => 'Applicatie bijwerken',
        'update_completing' => 'Afronden updateproces',
        'update_loading' => 'Beschikbare updates laden...',
        'update_success' => 'Het updateproces is succesvol afgerond.',
        'update_failed_label' => 'Update mislukt',
        'force_label' => 'Forceer update',
        'found' => [
            'label' => 'Nieuwe updates beschikbaar!',
            'help' => 'Klik op \'Applicatie bijwerken\' om het updateproces te starten.',
        ],
        'none' => [
            'label' => 'Geen updates',
            'help' => 'Er zijn geen nieuwe updates gevonden.',
        ],
        'important_action' => [
            'empty' => 'Selecteer actie',
            'confirm' => 'Bevestig update',
            'skip' => 'Sla deze plugin over (eenmalig)',
            'ignore' => 'Negeer deze plugin (altijd)',
        ],
        'important_action_required' => 'Actie vereist!',
        'important_view_guide' => 'Toon uprgade handleiding',
        'important_alert_text' => 'Een aantal updates vereisen aandacht.',
        'details_title' => 'Plugin details',
        'details_view_homepage' => 'Toon homepagina',
        'details_readme' => 'Documentatie',
        'details_readme_missing' => 'Er is geen documentatie beschikbaar.',
        'details_upgrades' => 'Upgrade instructie',
        'details_upgrades_missing' => 'Er is geen upgrade instructie beschikbaar.',
        'details_current_version' => 'Huidige versie',
        'details_author' => 'Auteur',
    ],
    'server' => [
        'connect_error' => 'Fout tijdens het verbinden met de server.',
        'response_not_found' => 'De updateserver kan niet worden gevonden.',
        'response_invalid' => 'Ongeldige reactie van de server.',
        'response_empty' => 'Lege reactie van de server.',
        'file_error' => 'Fout tijdens aanleveren bestand door server.',
        'file_corrupt' => 'Door server aangeboden bestand is corrupt.',
    ],
    'behavior' => [
        'missing_property' => 'Klasse :class moet variabele $:property bevatten welke gebruikt wordt door het gedrag (behavior) :behavior.',
    ],
    'config' => [
        'not_found' => 'Kan het configuratiebestand :file gedefinieerd voor :location niet vinden.',
        'required' => 'Configuratie gebruikt in :location moet de waarde :property toewijzen.',
    ],
    'zip' => [
        'extract_failed' => "Kan het corebestand ':file' niet uitpakken.",
    ],
    'event_log' => [
        'hint' => 'Dit logboek toont een lijst met potentiële fouten zoals exceptions of debuginformatie, welke voorkomen in de applicatie.',
        'menu_label' => 'Gebeurtenissenlogboek',
        'menu_description' => 'Bekijk systeemberichten met de geregistreerde tijd en detail.',
        'empty_link' => 'Gebeurtenissenlogboek legen',
        'empty_loading' => 'Bezig met het gebeurtenissenlogboek legen...',
        'empty_success' => 'Het gebeurtenissenlogboek legen is gelukt.',
        'return_link' => 'Terug naar gebeurtenissenlogboek',
        'id' => 'ID',
        'id_label' => 'Gebeurtenis ID',
        'created_at' => 'Datum & tijd',
        'message' => 'Bericht',
        'level' => 'Level',
        'preview_title' => 'Gebeurtenis',
    ],
    'request_log' => [
        'hint' => 'Dit logboek toont een lijst met pagina aanvragen welke mogelijk aandacht vereisen. Bijvoorbeeld: Een bezoeker opent een CMS pagina welke niet gevonden kan worden, een aantekening wordt gemaakt met statuscode 404.',
        'menu_label' => 'Aanvragenlogboek',
        'menu_description' => 'Bekijk foutieve of doorverwezen aanvragen zoals \'Pagina niet gevonden (404)\'.',
        'empty_link' => 'Aanvragenlogboek legen',
        'empty_loading' => 'Bezig met het aanvragenlogboek legen...',
        'empty_success' => 'Het aanvragenlogboek legen is gelukt.',
        'return_link' => 'Terug naar het aanvragenlogboek',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'count' => 'Aantal',
        'referer' => 'Verwijzingen',
        'url' => 'URL',
        'status_code' => 'Status',
        'preview_title' => 'Verzoek',
    ],
    'permissions' => [
        'name' => 'Systeem',
        'manage_system_settings' => 'Beheer systeeminstellingen',
        'manage_software_updates' => 'Beheer applicatie updates',
        'access_logs' => 'Bekijk systeem logbestanden',
        'manage_mail_templates' => 'Beheer e-mailsjablonen',
        'manage_mail_settings' => 'Beheer e-mailinstellingen',
        'manage_other_administrators' => 'Beheer mede-beheerders',
        'manage_preferences' => 'Beheer back-end instellingen',
        'manage_editor' => 'Beheer code editor instellingen',
        'view_the_dashboard' => 'Toon dashboard',
        'manage_branding' => 'Back-end aanpassen',
    ],
];
