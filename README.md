# Posts

A WordPress CPT for posts.

## Environment Setup

This project uses a single `.env` file to make the development process a little
easier. Normally, this plugin is installed via `composer`. However, to make life
easier while iterating and prototyping in development, this repo contains a
script (`bin/dev_sync.sh`) that copies the plugin code to where ever it would
normally be installed with `composer`.

### Configuration

1. Duplicate `.sample.env` in the root project directory, and name it `.env`.
2. Open `.env` and update the paths as needed.
3. Make changes to source code.
4. In the terminal from the root of the project, run `./bin/dev_sync.sh`.
   Personally, I'd recommend hooking this up so that it runs every time you save
   a file in the repo.

## Environment Variables

| Variable                 | Description                                      |
|:-------------------------|:-------------------------------------------------|
| `XZ_POSTS_TRACKED_DIR`   | Your local copy of the project repository.       |
| `XZ_POSTS_TEST_DIR`      | Copy destination - probably inside `mu-plugins`. |
| `XZ_POSTS_MU_PLUGIN_DIR` | The `mu-plugins` directory.                      |
| `XZ_POSTS_JSON_DIR`      | The `acf-json` directory.                        |
