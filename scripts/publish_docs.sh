#!/usr/bin/env bash
npm install --silent
./node_modules/@stoplight/cli/bin/stoplight.js publish --token "$1" --url https://stoplight.io/api
