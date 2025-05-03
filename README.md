# ex-php8-oop-movie
# Descrizione
Alleniamoci con la OOP di PHP immaginando delle classi pertinenti a Film e generi cinematografici
Creare un file index.php in cui

- è definita la classe Movie
   => all'interno della classe sono dichiarate delle variabili d'istanza√
   => all'interno della classe è definito un costruttore√
   => all'interno della classe è definito almeno un metodo√
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà√

- è definita una classe Genre
  -> all'interno della classe sono dichiarate delle variabili d'istanza
  -> all'interno della classe è definito un costruttore
- ogni film ha un genere

# Obiettivo
Creare un file index.php con le classi Movie e Genre, istanziare almeno due film e stampare le loro proprietà, inclusi i generi.

# Milestone 1 -> Preparazione ambiente√
	•	Crea una cartella di progetto (es. php-movie-exercise)√
	•	Crea il file index.php nella cartella√

# Milestone 2 -> Classe Movie
	•	Crea la classe Movie√
	•	Aggiungi almeno tre variabili d’istanza (es. $title, $year, $genre)√
	•	Crea il costruttore per inizializzare le proprietà√
	•	Crea almeno un metodo (es. getInfo() che restituisce una stringa descrittiva del film)√

# Milestone 3 -> Classe Genre
	•	Crea la classe Genre
	•	Aggiungi almeno due variabili d’istanza (es. $name, $description)
	•	Crea il costruttore per inizializzare le proprietà

# Milestone 4: Collegamento tra Movie e Genre
	•	Modifica la classe Movie per accettare un oggetto Genre come proprietà
	•	Stampa alcune proprietà dell’oggetto Genre all’interno del metodo di Movie

# Milestone 5: Istanze e stampa
	•	Crea almeno due oggetti Genre
	•	Crea almeno due oggetti Movie, assegnando un genere a ciascuno
	•	Stampa a schermo le informazioni dei film (usando il metodo creato)
# Milestone 6: Rifinitura (facoltativo)
	•	Aggiungi commenti al codice
	•	Testa con altri generi o film
	•	Aggiungi controlli o metodi extra (es. changeGenre())
# Bonus 1
    •   Modificare la classe Movie in modo che accetti piú di un genere.
# Bonus 2
    •   Aggiungere un Trait alla classe Movie con almeno una proprietà e un metodo.
# Bonus 3
    •   Creare un layout completo per stampare a schermo una lista di movies.
    •   Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e       cartelle.

# Note
Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.




