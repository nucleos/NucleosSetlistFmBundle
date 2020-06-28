# 1.0.0

## Changed

* Renamed namespace `Core23\LastFMBundle` to `Nucleos\LastFMBundle` after move to [@nucleos]

  Run

  ```
  $ composer remove core23/lastfm-bundle
  ```

  and

  ```
  $ composer require nucleos/lastfm-bundle
  ```

  to update.

  Run

  ```
  $ find . -type f -exec sed -i '.bak' 's/Core23\\LastFMBundle/Nucleos\\LastFMBundle/g' {} \;
  ```

  to replace occurrences of `Core23\LastFMBundle` with `Nucleos\LastFMBundle`.

  Run

  ```
  $ find -type f -name '*.bak' -delete
  ```

  to delete backup files created in the previous step.
