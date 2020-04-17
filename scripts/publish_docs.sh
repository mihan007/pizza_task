#!/usr/bin/env bash
echo start publishing docs
node stoplight publish --token "$1" --url https://stoplight.io/api
echo docs published
