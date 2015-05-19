# Bourne Grammar OwnCloud Theme
## Introduction

These set of instructions have been created due to Documentation being out of date.
see https://doc.owncloud.org/server/8.0/developer_manual/core/theming.html
https://doc.owncloud.org/server/8.0/admin_manual/operations/theming.html

## Installing Theme

1. Clone this repository in `/var/www/owncloud/themes/`
  * `cd /var/www/owncloud/themes/`
  * `git clone https://github.com/stdg11/BourneGrammarOwnCloud`
2. Set the file permissions
  * `chmod -R 640 /var/www/owncloud/themes/BourneGrammarOwnCloud`
  * `chown -R www-data:www-data /var/www/owncloud/themes/`
3. Finally set the theme in `/var/www/owncloud/config/config.php/`

    `'theme' => 'BourneGrammarOwnCloud',`

## Creating your own theme

1. Create the Directory to store your custom theme, replace ThemeName with your desired name `mkdir /var/www/owncloud/themes/ThemeName`
2. Populate the theme folder `cp -r /var/www/owncloud/core/ /var/www/owncloud/themes/ThemeName`
3. Enable the theme in `/var/www/owncloud/config/config.php/`
  * `'theme' => 'BourneGrammarOwnCloud',`

### Customising the logo
Customized logos must meet the following specifications, and they go in the `/core/img` directory.

#### Logo.svg
This is the splash screen logo that appears above the ownCloud login page. The size of this image is approximately 252x122 pixels. Any larger and the logo will not fit properly on the page.

#### Logo-wide.svg
This is the little logo that appears in the top left of the ownCloud navigation frame. The size of this image is 140x32 pixels. The width may be larger but the height is fixed.
 

## Troubleshooting

If your changes are not being displayed check the file permissions of the theme folder  
```Shell
chmod -R 640 /var/www/owncloud/themes/ThemeName
```
You also need to ensure apache can read the files  
```Shell
chown -R user:www-data /var/www/owncloud/themes/ThemeName
```