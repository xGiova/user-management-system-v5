# Integrare UserSession

- se non sono autenticato non posso vedere nessuna pagina
- se sono autenticato posso vedere tutte le pagine
- inserire un link di logout nel [header.php](src/view/header.php)



Integrare la UserSession al al vostro script

- [ ] Inserire la password criptata
- [ ] [UserSession](src/service/UserSession.php)

# Crud degli interessi

User n --- m Interesse

- Creare la tabella Interesse(InteresseId,nome)
- Creare la tabella User_Interesse(UserId,InteresseId)
- Chiave unica per User_Interesse unique(UserId,InteresseId) (facoltativo)

- Creare il CRUD (InteresseModel)
- Creare UI (user interface) per elencare, modificare, creare, cancellare gli interessi come abbiamo fatto per gli utenti.

# Modificare il CRUD degli utenti 

- [ ] Form Permettere di selezionare un interesse
- [ ] UserModel modificare le query/metodi inserendo l'interesse
      
      - [ ] CREATE USER - Come ottenere id di un utente appena creato ?
      - [ ] Inserire nella tabella User_Interesse UserId appena creato e InteresseId selezionato

  
      - [ ] EDIT USER - Devo trovare l'interesse compilato dall'utente in fase di iscrizione già selezionato [selecthtml](https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_select)

      - [ ] DELETE USER - cancellare il suo riferimento anche nella tabella
      User_Interesse

      - [ ] DELETE Interesse - cancellare il suo riferimento anche nella tabella
      User_Interesse

      - EDIT USER - Cambio id di riferimento nella tabella User_Interesse

      
       



Interesse
  - InteresseId
  - nome

- 

user_interesse



#