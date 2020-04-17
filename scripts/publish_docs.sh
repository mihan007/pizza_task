#!/usr/bin/env bash
echo which stoplight
which stoplight
echo which node
which node
echo start publishing docs
node /home/travis/.nvm/versions/node/v13.13.0/bin/stoplight publish --token "$1" --url https://stoplight.io/api
echo docs published
