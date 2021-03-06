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
Vi började med att dela upp arbetet, Oscar sätter upp ett repo på Github skriver koden för login/logout och admin och Annelie skriver koden för posts. Vi skapa varsina databaser med samma tabeller i, en för user, en för blogposts och en för likes. Vi delar på att skriva CSS. Under hela arbetes gång har vi disskuterat vad som ska göras och hur det går för oss med de delar vi arbeteat på enskilt. Eftersom vi till största delen har arbetet i olika filer har det inte varit några direkta problem med konflikter i Git. 

Oscar: Haft ansvar för PhP'n skriven för att logga in, logga ut och skapa nya Users, skapade variablar för session och använde dessa. Skapade Admin panelen där jag använde mig av ajax för att loopa fram användare, använder sig av funktioner som att ta bort användare, kolla på användars inlägg och att kunna ta bort inlägg från andra användare. Även arbetat generelt med mindre problem på main sidan och inom den egna sidan.
  
Annelie: Jag började med att skapa två användare direkt i databasen och några blogposts med deras id för att ha något att arbeta med. Jag gjorde ett pdo-prepare med SELECT INNER join mellan de båda tabellerna och loppade ut det innehåll som var nödvändigt för att se posts med title och content för de olika användarna. Därefter gjorde jag en HTMLform och funktioner för att skapa ny blogpost, med ett pdo-prepare med INSERT i tabellen blogposts. Knappar med funktioner för delete och edit, där det är DELETE och UPDATE i databasen. Jag har skapat ett AJAX-call med jQuery när man trycker på like-knappen. Det som kodmässigt skulle kunna förbättras är bl.a. att göra funktioner som kallas på när data ska skrivas ut, istället för att ha all HTML i samma fil som den andra koden. När jag ändrade like funktionerna till ett ajax call så räknar funktionen två steg istället för ett. Datan i tabellerna är korrekt och när sidan uppdateras så viss de korrekta siffrorna. Sidan skulle även kunna vara ännu snyggare stylad.

#### ToDo:
Saker vi skulle kunna implementera i appen
* Att användaren kan lägga till bilder i sina posts
* Kommentarer från användare
