# Bourne Grammar OwnCloud Theme
## Introduction

These set of instructions have been created due an accurate set not being available.
see https://doc.owncloud.org/server/8.0/developer_manual/core/theming.html

## Installing Theme

To install this OwnCloud theme copy the repo to `/var/www/owncloud/themes/` then see [Troubleshooting](#troubleshooting) below to set the file permissions.

Finally set the theme in `/var/www/owncloud/config/config.php/`

    'theme' => 'BourneGrammarOwnCloud',

## Creating your own theme

1. Create the Directory to store your custom theme, replace ThemeName with your desired name `mkdir /var/www/owncloud/themes/ThemeName`
2. Populate the theme folder `cp /var/www/owncloud/core/ /var/www/owncloud/themes/ThemeName`
3 To be continued (shortly)

## Troubleshooting

If your changes are not being displayed check the file permissions of the theme folder  
```Shell
chmod -R 640 /var/www/owncloud/themes/ThemeName
```
You also need to ensure apache can read the files  
```Shell
chown -R user:www-data /var/www/owncloud/themes/ThemeName
```