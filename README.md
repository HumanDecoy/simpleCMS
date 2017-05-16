# Enklare CMS
### Skapat av: Oscar & Annelie  
### Kurs: CMS, PHP & MySQL  
### Utbildning: Frontend-utvecklare (2016-2018), Nackademin.
#### [Git Repo](https://github.com/HumanDecoy/simpleCMS)  


---

#### Beskrivning av appen:
Vi har skapat en enklare bloggportal där man kan skapa egna blogposts och läsa andras bloggar.
Användaren kan skapa konton, men endast ett per användarnamn. Vissa konton har admin-behörighet.
Om man besöker sidan utan att logga in visas samtliga blogposts och hur många likes de har. Loggar man in eller skapar en ny användare kan man skapa nya blogposts, redigera de man har gjort, gilla/ogilla dem, ta bort sina egna posts och se alla posts från andra användare och gilla/ogilla dem, men endast en gång per post. Är man inloggad som admin kan man göra allt som användaren kan och även ta bort en eller flera användares posts, gilla/ogilla dem. Admin har en egen sida där den kan se alla användare eller söka på en specifik användare, se deras posts och ta bort användare.


#### Teknologier: 
* PHP
* MySQL
* JavaScript
* jQuery
* HTML
* CSS
* Bootstrap

#### Arbetsprocess:
Vi började med att dela upp arbetet, Oscar sätter upp ett repo på Github skriver koden för login/logout och admin och Annelie skriver koden för posts. Vi skapa varsina databaser med samma tabeller i, en för user, en för blogposts och en för likes. Vi delar på att skriva CSS.

Oscar:
  
Annelie: Jag började med att skapa två användare direkt i databasen och några blogposts med deras id för att ha något att arbeta med. Jag gjorde ett pdo-prepare med SELECT INNER join mellan de båda tabellerna och loppade ut det innehåll som var nödvändigt för att se posts med title och content för de olika användarna. Därefter gjorde jag en HTMLform och funktioner för att skapa ny blogpost, med ett pdo-prepare med INSERT i tabellen blogposts. Knappar med funktioner för delete och edit, där det är DELETE och UPDATE i databasen. Jag har skapat ett AJAX-call med jQuery när man trycker på like-knappen. Det som kodmässigt skulle kunna förbättras är bl.a. att göra funktioner som kallas på när data ska skrivas ut, istället för att ha all HTML i samma fil som den andra koden. Sidan skulle även kunna vara ännu snyggare stylad.

#### ToDo:
Saker vi skulle kunna implementera i appen
* Att användaren kan lägga till bilder i sina posts
* Kommentarer från användare
