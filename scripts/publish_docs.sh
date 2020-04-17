#!/usr/bin/env bash
npm install --silent
echo npm packages installed
./node_modules/@stoplight/cli/bin/stoplight.js publish --token "$1" --url https://stoplight.io/api
echo published docs
