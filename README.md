# Telespor Theme

## Wordpress Setup

### Plugin dependencies
* Advanced Custom Fields
* Font Awesome 4 Menus
* Arconix FAQ
* Ninja Forms
* Mailgun for WordPress

### Required pages
| Page name     | Template          |
| ------------- | ----------------- |
| Hjem          | Default           |
| Brukerstøtte  | Default           |
| Kontakt oss   | Contact Template  |
| Nyheter       | Default           |
| Priser        | Price Template    |
| Produkt       | Product Template  |

### Appearance Menus
```Enable CSS classes in Screen Options```    

#### Header Menu  
*Display location: Header Menu*

| Menu item     | Type              | Class                     | URL                                       |
| ------------- | ----------------- | ------------------------- | ----------------------------------------- |
| Produkt       | Page              | fa-cube                   | *NA*                                      |
| Priser        | Page              | fa-credit-card            | *NA*                                      |
| Kontakt oss   | Page              | fa-envelope-o             | *NA*                                      |
| Nyheter       | Page              | fa-newspaper-o            | *NA*                                      |
| Brukerstøtte  | Page              | fa-info-circle            | *NA*                                      |
| Nettbutikk    | Custom Link       | fa-shopping-cart          | http://nettbutikktelespor.mamutweb.com/   |
| Brukerportal  | Custom Link       | sign-in-button fa-user-o  | http://www.telespor.org                   |

** Footer Menu **    
*Display location: Footer Menu*

| Menu item                         | URL                                                                               |
| --------------------------------- | --------------------------------------------------------------------------------- |
| Brukermanual                      | http://docs.telespor.org/manual/Telespor_Brukermanual.html                        |
| Returnskjema                      | http://telespor.no/wp-content/uploads/2013/01/Kundeskjema-for-returbehandling.xls |
| Mobildekning                      | https://www.telenor.no/privat/dekning/dekning_data.jsp                            |
| Elektronisk søknadssenter hos DN  | https://soknadssenter.miljodirektoratet.no/                                       |




### Wordpress settings

**Setting -> Reading**
```
Front page display:    
[x] A static page (select below)
```

# Custom Field Setup

## Custom Fields

### Field Groups
*All field groups should hide: Content Editor*

#### Forside

*Rules: Page is equal to Hjem*

| Field Order   | Field Label               | Field Name                | Field Type        |
| ------------- | ------------------------- | ------------------------- | ----------------- |
| 1             | Velkomst tittel - fet     | welcomeTextFat            | Text              |
| 2             | Velkomst tittel - tynn    | welcomeTextSkinny         | Text              |
| 3             | Egeneskaper - tittel      | feature_title             | Text              |
| 4             | Egenskap 1                | feature_one               | Wysiwyg Editor    |
| 5             | Egenskap 2                | feature_two               | Wysiwyg Editor    |
| 6             | Egenskap 3                | feature_three             | Wysiwyg Editor    |
| 7             | Egenskap 4                | feature_four              | Wysiwyg Editor    |
| 8             | Egenskap 5                | feature_five              | Wysiwyg Editor    |
| 9             | Egenskap 6                | feature_six               | Wysiwyg Editor    |
