#!/bin/bash
compass compile

rm -rf portfolio
mkdir portfolio
mkdir portfolio/js
mkdir portfolio/css

java -jar ~/Documents/yuicompressor-2.4.8.jar js/script.js -o js/script.min.js
java -jar ~/Documents/yuicompressor-2.4.8.jar css/style.css -o css/style.min.css

cp -R img portfolio
cp js/*.min.js portfolio/js
cp css/*.min.css portfolio/css

php index.php > portfolio/index.html
html-minifier --input-dir ./portfolio --output-dir ./portfolio --collapse-whitespace --file-ext html
