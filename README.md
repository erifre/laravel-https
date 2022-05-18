# Laravel Force HTTPS

I've had problems where links get generated as http and not https when running behind a nginx reverse proxy. This adds the ability to force your Laravel project to use https on all generated links.

Use APP_HTTPS to true to force https generations of links. Defaults to false.