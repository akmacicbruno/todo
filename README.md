## Todo app
Web aplikacija izražena u PHP Symfony programskom okviru uz pomoć Twig i CSS na frontendu. 

## Funkcionalnosti
1. __Registracija:__ Korisnik se na početku mora registrirati kako bi se mogao prijaviti i pristupiti _dashboardu._

![Screenshot zaslona registracije.](/assets/screens/registracija.png)

3. __Prijava__: Za prijavu korisnik mora unijeti email i lozinku. Ako nešto od toga unese pogrješno, aplikaciju mu prikazuje _error_.

![Screenshot zaslona prijave.](/assets/screens/prijava.png)

6. __Pregled zadataka:__ Nakon uspješne prijave korisnik pristupa _dashboardu_ gdje ima uvid u zadatke koje nije izvršio (kartice) te u one koje je izvršio (tablica).

![Screenshot pregled nerješenih zadataka.](/assets/screens/dashboard_1.png)

![Screenshot pregled rješenih zadataka.](/assets/screens/dashboard_2.png)

7. __Dodavanje novih zadataka:__ Pritiskom na gumb _Add new_ korisnik ima mogućnost dodati nove zadatke. Za uspješno dodavanje mora uvijeti naslov zadatak od max. 50 riječi, a opcionalno može dodati i opis zadatak u opsegu najviše 500 riječi.

![Screenshot zaslona za dodavanje novih zadataka.](/assets/screens/dodavanje.png)

8. __Označavanje zadatak ispunjenim:__ Ova funkcionalnost je dostupna samo na zadacima koji prethodno nisu označeni izvršenima pritiskom na gumb _Done._
9. __Brisanje zadataka:__ Korisnik može obrisati bilo koji zadatak koji mu je prikazan na _dashboardu_, neovisno o njegovom statusu rješenosti.
