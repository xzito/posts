#!/bin/bash

root="$(git rev-parse --show-toplevel)"

# shellcheck disable=SC1090,SC1091
source "$root/.env"

rsync -a "$XZ_POSTS_JSON_DIR" "$XZ_POSTS_TRACKED_DIR"
rsync -a --delete "$XZ_POSTS_TRACKED_DIR" "$XZ_POSTS_MU_PLUGIN_DIR"
