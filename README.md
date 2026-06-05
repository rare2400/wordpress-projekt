# WordPress-tema: Calming Nature för Skogsgläntans Vandrarhem
Ett utvecklat Wordpress-tema för det fiktiva vandrarhemmet Skogsgläntan i Glasriket, Småland.
Temat är byggt från grunden med HTML, CSS och PHP, där användare kan lägga till innehåll i webbplatsens
med WordPress admingränssnitt.

---

<img width="1200" height="900" alt="screenshot" src="https://github.com/user-attachments/assets/1b9ca7e8-67b2-4cdc-9b0b-29239e9979ca" />

## Tekniker
- PHP
- CSS (mobile first)
- JavaScript
- WordPress
- Custom Type Posts (CTP)
- Advanced Custom Fields (ACF)
- Yoast SEO
- Contact Form 7

## Funktioner
Tema utvecklat från grunden med [Custom Post Types](https://learn.wordpress.org/lesson/custom-post-types/) 
för rum, aktiviteter och personal och [ACF](https://wordpress.org/plugins/advanced-custom-fields/)
för att ha strukturerade data direkt i användargränssnittet. Webbplatsen är av responsiv design med 
mobile first CSS och media queries, på mobila enheter är till exempel navigeringsmenyn placerad
under en hamburger-ikon. HTML-strukturen följer WCAG:s riktlinjer för tillgänglighet testad med 
valideringsverktyg. Webbplatsen är sökmotoroptimerad med pluginet [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) 
och använder pluginet [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) för formulär. 

## Sitemap
<img width="1240" height="547" alt="sitemap" src="https://github.com/user-attachments/assets/9f6f619b-37f2-468e-a716-9dca6f67091b" />


## Installation
Temat kräver en WordPress installation med tillhörande databas.

1. Klona repo

```
git clone https://github.com/rare2400/wordpress-projekt.git
```

2. Lägg till temamappen i WordPress `themes`
```
wp-content/themes/calming-nature/
```

3. Aktivera tema under **Appearance -> Themes** i wp-admin
4. Installera nödvändig plugins under **Plugins**:
- Advanced Custom Field
- Yoast SEO
- Contact Form 7
5. Skapa en meny under **Appearance -> Menus**
6. Gå till **Settings -> Reading** och sätt startsidan till en statisk sida



## Konfiguration av Custom Post Types
| CPT       | Slug         | Beskrivning                                     | 
| --------- | -------------|------------------------------------------------ |
| Rum       | /boende      | Boendealternativ med pris och kapacitet         |
| Aktivitet | /aktiviteter | Naturaktiviteter med längd och svårighetegrad   |
| Personal  | /personal    | Personalen med beskrivning och kontaktuppgifter |


## Användare och roller
| Roll          |  Behörighet                                           | 
| ------------- | ----------------------------------------------------- |
| Administratör | Full tillgång till allt                               |
| Editor        | Kan skapa och redigera allt innehåll, ej tema/plugins |
| Author        | Kan skapa egna inlägg, ej publicera utan godkännande  |

## Skapad av
Skapad som en del av en skoluppgift   
Mittuniversitetet, Webbutvecklingsprogrammet    
Ramona Reinholdz   
[rare2400@student.miun.se](rare2400@student.miun.se)      
2026-06-05
