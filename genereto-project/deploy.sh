#!/bin/bash
(cd templates/main && git pull)
git clone git@github.com:FedericoPonzi/genereto.git /tmp/genereto
PROJECT_DIR="$(pwd)"
set -e
(cd  /tmp/genereto && cargo run -- --project-path $PROJECT_DIR --drafts-options dev)
rsync -avz output/* fponzi@webserver:/var/www/fponzi.me/public_html/
echo "Deployment completed. https://fponzi.me"

