# Nazli — Personal Website

Persoonlijke website met een overzicht van mijn projecten, opleiding, vaardigheden en contactgegevens.

## Functionaliteiten

- Engelse en Nederlandse versie met opgeslagen taalkeuze.
- Projectenoverzicht met uitklapbare beschrijvingen en externe links.
- CV met opleiding en vaardigheden.
- GSAP-animaties en een responsive indeling.

## Technologieën

PHP · HTML · CSS · JavaScript · GSAP · Docker Compose

## Vereisten

- Git
- Docker
- Docker Compose

## Installatie

Clone deze repository en open de projectmap in je terminal.

Bouw de images en start de containers:

```
docker compose up -d --build
```

Open de website op:

http://localhost:8080

## Ontwikkeling

Controleer de status van de containers:

```
docker compose ps
```

Bekijk de logs:

```
docker compose logs -f
```

Bouw en start opnieuw na wijzigingen aan de Docker-configuratie:

```
docker compose up -d --build
```

Stop en verwijder de containers:

```
docker compose down
```

## Projectstructuur

```
├── index.php       # Hoofdpagina
├── project.php     # Projectenoverzicht
├── cv.php          # CV
├── header.php      # Gedeelde documentkop en navigatie
├── footer.php      # Scripts en afsluiting
├── language.php    # Vertalingen en taalkeuze
├── css/
│   └── style.css
├── js/
│   └── script.js
└── images/
```

## Vertalingen

De vertalingen staan in `language.php`. Elke tekst heeft een sleutel met een Engelse en Nederlandse versie. Pagina’s gebruiken de functie `t()` om de gekozen vertaling te tonen.

Engels is de standaardtaal. De taalkeuze wordt bewaard in een PHP-sessie.

## Auteur

**Nazli Eroglu**

- [GitHub](<https://github.com/mojoArch>)
- [LinkedIn](<https://linkedin.com/in/nazli-eroglu-191baa370>)

## Status

In ontwikkeling.

De Docker-instructies gaan uit van een Compose-bestand in de projectmap met poort `8080` voor de website.
