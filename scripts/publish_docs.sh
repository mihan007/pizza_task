#!/usr/bin/env bash
echo start publishing docs
stoplight publish --token "$1" --url https://stoplight.io/api
echo docs published
