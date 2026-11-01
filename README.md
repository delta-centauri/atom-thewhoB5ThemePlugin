# thewhoB5ThemePlugin

Bootstrap 5 Theme für das Swiss The Who Archive (www.thewho.ch), Erweiterung von `arDominionB5Plugin`. Ab AtoM 2.7 (getestet mit 2.10).

Nachfolger von [atom-thewhoThemePlugin](https://github.com/delta-centauri/atom-thewhoThemePlugin) (Bootstrap 2, bis AtoM 2.6).

## Was das Theme anpasst

- Farben (Rot für Links, Blau für Titel), Schriftgrösse 14px – in `scss/main.scss`
- Hintergrundbild mit halbtransparentem Inhaltsbereich
- Schwarzer Header mit zufälligem Who-Logo ("Swiss … Archive") – `templates/_header.php`
- Schwarzer Footer mit Lizenz und Kontakt – `templates/_footer.php`
- Startseite: dunkler, halbbreiter Bereich mit "Browse by"-Leiste – `modules/staticpage/templates/homeSuccess.php`, `templates/layout_thewhohome.php`

## Installation (Docker)

Der Repo-Inhalt muss im AtoM-Verzeichnis unter `plugins/thewhoB5ThemePlugin` liegen (der Ordnername muss so heissen).

```bash
# im AtoM Verzeichnis (atom-repository-thewho)
mkdir -p plugins/thewhoB5ThemePlugin
cp -r ../atom-thewhoB5ThemePlugin/{config,images,js,modules,scss,templates,webpack.entry.js} plugins/thewhoB5ThemePlugin/

docker exec docker-atom-1 npm run build
docker exec docker-atom-1 php symfony cc
```

Danach in AtoM unter **Admin > Themes** das Theme `thewhoB5ThemePlugin` aktivieren.

Nach jeder Änderung an SCSS/JS: Dateien neu kopieren, `npm run build`, `php symfony cc`, im Browser Ctrl+Shift+R.
