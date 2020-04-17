#!/usr/bin/env bash
echo start publishing docs
node /usr/local/lib/node/stoplight publish --token "$1" --url https://stoplight.io/api
echo docs published
