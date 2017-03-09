# ccwrc_small_ads

Mini serwis lokalnych ogłoszeń drobnych. Projekt napisany przy użyciu Symfony 2.8.17, PHP w wersji 5.6.

Zarządzanie użytkownikami: pakiet security + FOSUserBundle.    
Baza danych: MySQL z pośrednictwem Doctrine ORM.    
Komunikacja mailowa z uzytkownikiem: Swiftmailer.    
Stylizacja: Bootstrap.    

# Wprowadzone funkcjonalności: 
        - rejestracja/edycja użytkowników i administratorów,
        - zarządzanie kategoriami tematycznymi, 
        - dodawanie/usuwanie/edycja ogłoszeń ze zdjęciem,
        - elastyczny wybór daty wygaśnięcia ogłoszenia (od +3 do +7 dni),
        - dodawanie(wszyscy)/usuwanie(zalogowani)/edycja(zalogowani) komentarzy,
        - powiadamianie drogą mailową o nowych komentarzach do ogłoszeń,
        - dynamiczne menu w zależności od typu zalogowanego użytkownika,  
        - oddzielny panel administracyjny,
        - ogłoszenia nieaktywne dostępne tylko dla uprawnionych użytkowników i administratorów.

#
Działanie wersji początkowej - panel administratora:
![Alt text](https://images86.fotosik.pl/19/59fca987d6fcc30a.png "admin_screen")
#
Działanie wersji początkowej - ogłoszenie użytkownika zalogowanego:
![Alt text](https://images85.fotosik.pl/19/56dfd881b5129778.png "user_screen")
#
Działanie wersji początkowej - widok użytkownika anonimowego:
![Alt text](https://images85.fotosik.pl/19/62268bb666c37660.png "anonymous_screen")






        

