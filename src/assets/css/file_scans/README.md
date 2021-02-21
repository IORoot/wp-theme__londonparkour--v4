# Tailwind / PurgeCSS

## Problem - DB Classes

Wordpress has some of the content in raw form (within the page-builder) and cannot be accessed by the purgeCSS
Scripts.

## Solution

WGET or copy/paste the source of an instance of all types of pages into this folder so that the purgeCSS can 
scan it for class names.

## WGET

`wget --input-file=page_scan_list --directory-prefix=files/ --adjust-extension -q --show-progress --no-check-certificate`

`--input-file=page_scan_list` will take this list of URLs and download them.

`--directory-prefix=files/` will put output into files folder

`--adjust-extension` will ad html extension

`-q --show-progress` show download bar only.

`--no-check-certificate` For the DEV.LABS. development site, skip the cert checking, otherwise it will fail.