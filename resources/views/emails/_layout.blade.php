<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Adminor</title>
    <base href="{{config('angular.server')}}/" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <table width="100%" align="center" cellspacing="0" cellpadding="0" border="0" >
      <tbody>
        <tr>
          <td>
            <img src="{{config('angular.server')}}/assets/img/brand/logo.png" />
          </td>
        </tr>
        <tr>
          <td style="font-family: Verdana, sans-serif, 'Open Sans'">
            @yield('content')
          </td>
        </tr>
        <tr>
          <td style="font-family: Verdana, sans-serif, 'Open Sans';font-size: small;color:grey">
            Faucibus euismod leo viverra lectus torquent tortor porttitor porta mauris ultricies, tincidunt arcu nostra neque libero cum nisi nam feugiat pretium dictumst, habitasse vivamus maecenas aliquet massa facilisi sagittis pulvinar nunc. Curabitur viverra facilisi leo mauris feugiat magna eleifend dui eros, cubilia blandit mi tellus diam convallis aptent lectus molestie varius, lacinia venenatis consequat id lobortis tristique dictum malesuada. Nec est tellus eleifend habitasse placerat faucibus, erat parturient cubilia tortor tempus facilisi, convallis bibendum venenatis eu dictum.
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>