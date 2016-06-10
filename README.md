# yii2-dashboard

This is just a basic implementation of the Bootstrap Dashboard theme located at http://getbootstrap.com/examples/dashboard/

# Installation

1. Create a `themes` folder in your public `web` folder.
2. Copy the `dash` folder into `themes`
3. Copy `dashboard.css` into your public css folder.  (Usually `@app/web/css`)
  * If needed edit the ```<link type="text/css" rel="stylesheet" href="/css/dashboard.css"  media="screen,projection"/>``` to point to the correct the location.
4. Add the following to your config file 
```php
'components' => [
      'view' => [
       'theme' => [
           'pathMap' => [
              '@app/views' => '@app/web/themes/dash/views'
                 ],
             ],
      ],
      ...
```
