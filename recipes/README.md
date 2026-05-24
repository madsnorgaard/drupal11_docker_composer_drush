# Recipes

[Drupal recipes](https://www.drupal.org/docs/extending-drupal/drupal-recipes)
are the modern way to apply a reusable bundle of modules and config to a site.

Apply the bundled `base` recipe against an installed site from the project root:

   ```sh
   $ docker compose exec -T drupal drush recipe recipes/base
   $ docker compose exec -T drupal drush cr
   ```

`recipes/base/recipe.yml` only enables the contrib modules that ship with this
starter. Extend it with `config` actions (for example to set Gin as the admin
theme) or split it into more recipes as the project grows.
