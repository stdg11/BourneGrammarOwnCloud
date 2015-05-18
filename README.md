# Bourne Grammar OwnCloud Theme
## Introduction

These set of instructions have been created due an accurate set not being available.
see https://doc.owncloud.org/server/8.0/developer_manual/core/theming.html

## Installing Theme

To install this OwnCloud theme copy the repo to `/var/www/owncloud/themes/` then see [Troubleshooting](#Troubleshooting) below to set the file permissions.

Finally set the theme in `/var/www/owncloud/config/config.php/`

    'theme' => 'BourneGrammarOwnCloud',

## Troubleshooting

If your changes are not being displayed check the file permissions of the theme folder  
```Shell
chmod -R 640 /var/www/owncloud/themes/ThemeName
```
You also need to ensure apache can read the files  
```Shell
chown -R user:www-data /var/www/owncloud/themes/ThemeName
```