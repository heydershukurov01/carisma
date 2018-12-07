<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Secret-Santa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;

                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



            .button {
                -webkit-box-sizing:border-box;
                -moz-box-sizing:border-box;
                box-sizing:border-box;
                min-width:100px;
                font-family: 'Lobster', cursive;
                font-size: 26px;
                line-height: 26px;
                text-decoration: none;
                color: #FFF!important;
                text-shadow: 0 1px 2px rgba(0,0,0,0.75);
                background: #5e0d0c;
                outline: none;
                border-radius: 15px;
                border: 1px solid #4c0300;
                box-shadow:
                    inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                    inset 0 0 6px #a23227, /* inner glow */
                    inset 0 80px 80px -40px #ac3223, /* gradient */
                    1px 1px 3px rgba(0,0,0,0.75); /* shadow */

                position: relative;
                overflow: visible; /* IE9 & 10 */
                -webkit-transition: 500ms linear;
                -moz-transition: 500ms linear;
                -o-transition: 500ms linear;
                transition: 500ms linear;
                width: 173px!important;
                height: 26px!important;
                padding: 22px 85px!important;
            }

            .button::before {
                content: '';
                display: block;
                position: absolute;
                top: -7px;
                left: -3px;
                right: 0;
                height: 23px;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAXCAYAAACS5bYWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABFpJREFUeNrUV0tIo1cUvpkYjQ4xxSA6DxuNqG0dtaUKOgs3s6i0dFd3pSsXdjeIixakiGA34sZuXCkoONLFwJTK4GMYLYXg29gatTpiXurkbd7vv9/5ub+IxuhA7eiFQ5Kbc8/57ne/e87/ywRBYLdl3GG3aNwqsLJ0k0tLS+fmcnNzWUVFBVMoFGx2djarvLxcm5OTw+bm5iytra2xc4ExNjY27iqVyvvwK6CpeDzuCYVC1urq6qDA9UcfPp+PHR4esmAwKK6tr68/l5/8rgQ2Ozub1dbWyiYmJooaGxt/VqvV38jlchX9l0qlwoFA4DWS/RKLxRxFRUVf5+XlPcaaT2AP0sVPJBL2SCRiAPBpu93+vKamZo/Ae71eZjabWV1dXVqw7CKwp43ksrCw8Bhg7MJ/PLDZ5PHx8cz29vYT5JGD/bSYLgTrcDgYdk6siSc6NjZWDaAe4ZoHQL+cmZnRpZPnhWDpD8kw7uKo9ML/NMCsd2tr61vkzboMrEyv138M7TyLRqMWMBsX3sMgaZhMpp+AR5EJrCocDpuEGzKg4x8khs+CVWxubvZfR9JkMik4nU7BarUKLpeLmLsKuwIqTLynp4fqmIzASrqQT09Pf1VVVfX0KsWZ6uHBwQHTaDSsoKAgo6/H4xHLEcrVyRwuEisrKzs5XrrIVAVwiUVDKRRrL+YI32ewdVhMApuHWvcj6vids6J2u90MF4yBHUZNgKoEBaRBQalJqFSqtJfUYrGIlQX+ydXVVTN+u0tKSjQNDQ1axJVl2iTypebn55d7e3v/kqoDgZU1NTU9LCws/Py0M+2ekuGincxJ3yF+18jIyHJLS0slQJUWFxczrBeBE0vE5tHRkbixlZWVfSR8gTX/0P5gH7S1tX3Z3t7+BW8qAvwSfr8/jA0EIRM/qoFtampqbW9vTw+XA+ojUruVd3Z2tvb19T2TQFEim81GgVJoCvvj4+NLOJZgaWmpemdn5y3a6BbcnJDAw8HBwac6ne6eqCW5XDwB3qVSqM9/DAwMUNy/eVLabT7sI25qwgujThCBhWE+mAt2yNc4SQKSZrOQQE1HS22VJkmPAGTr7+//fX19fRk+Zgq0trbGeFAKEAQT98BSqKOj47vm5uaa/Px8JeIk4GcaHh6eWlxcfAU/A8xG67BxAX3fwdcbYUpSDJ06Z49Ak8ZC3OL8f3YiA4PBYKdLQ2AJ9OTk5GpXV9cQiCVh79M94QtlPLDUE/1gPNrd3f0W33W4cBoco48zQuy/IZYAMnGqlSc4c66L9JruQUaSARXeT8HGKzxAqFBekni6+h46+pMzGiJGMgTOJh1yU/KNEGDvZWvfBawkA9ppwGg0mrRa7SOI2g+gxOgbJIpdFpj72PnxSnPX8vqRxTURgBQWKisrH+GThOm+CtAzoK/9/Uiqq/6hoaHfdnd3jaOjo7/yY7yxbwqkWy3sQzpS2C6YirwvUJk0y7hurfyGRrnduPGvAAMASmo8wzeVwfsAAAAASUVORK5CYII=) no-repeat 0 0,
                url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAXCAYAAABOHMIhAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABiZJREFUeNrsWMtPlFcUvzPMwIDysLyRR4uATDHWCiVgSmRlios2DeiiXUFs0nRBd6arxqQhJDapkYXhP4BqDKTQhZaFNQSCaBEVJjwdHsNr5DUMDDPDzPT3u7nTDEgRKrKgc5KT+z3uufec33de99P4fD4RpL2RNgjB3kn35MkTeRERESFiYmLkGBoaKnQ6nWSNRvPPZFxr+vv7k6KioiIdDsfa8vLyQkFBgcP3Bnel3MDAQArWI0eFhISE87nb7bZ7PJ4VvLYuLi5O5+fnu9+kMNfq6+tLjIyMzMY6KeBEbK/XarXReI3lPDZMWcc4v7GxYV1dXR3Jy8ub2E5HPvJ6vRSSDH0ku1wuAfsEZOV1IEFHoeNFdHS0yMrK2knR0Lm5uR+hxLdQMjbwHTZbB41h8RGwCdc9MzMzneHh4bGJiYlf4SN8ijkfwqiIncCAAR7Iz2GPSShudjqdfeCeqampvwBQfFxc3JdYqwTv8gB8/F48A8BgKecE14V+L7ju2tpae05OzkuCCZvkPOj8mizmC6vVKtmPu+bx48cC3qI1mUyFUOyywWD4SHlELBaLJmCHNcwAghuAOujtuF4FqHO4nsX4EsAS3I4TJ04ME1h8PDE9PS09TYZoY2Pj1729vd6lpSVfkDYTPG0UkfNDRUWFgQ5Gb2Mh0N29e9eG/GQfHh4W8/PzwUy/ObQ/gMfVVlZW1iAiZdQxp3nv3LljRoL/5erVq1UIxzSiiVD9X4EDYATynCwAzGO858hCQRoaGmJFZNJz8YIcBc4BF966dau6sLAwBxVSJCUlCSThQwuU3W6XkYUok1Vzm5znQx5bbm9v77p+/frPeNSNRzZ/ISBwrG4ZR48eLamtrf2+uLjYSEG9Xi/wTISFhQlWGXohyzO/CJlVl23KQRLbABoaHx+/Z1lUZ/Hq1SsJFj3JT3hmHx8fnydPTEzMj46OziHPW2w22wxeD4Kfgadh/4YEzU8Az4DhffAn5eXlX1y6dKkEoCTspAQ9Mjs7+0BBo8Fms1lkZGTsOo0QLLRNkvnR+fEJzIMHD0xtbW39CL8JTFtSbAOvBIyLHIGVm9VzE2gKuDAMSSpcT6KXyT137lx2cnLyMXhcGDb3wq3XuWF3d/fCzZs3P0c4v5eSknJQbYLo7Ox0gC2lpaVZ3Be67Th/dnZWoAJKsJC3XA8fPhxoamp6hMb+BaaMgWcUMGtszZjiFDNmvcDI91pzG0iY4ARwkwrxkcHBwUdgNrRMbnrqoRbkVzDcvn3bl5qaWsmcgFH4G8XdEGUWFhak51AuISFBnkoCTyFbyWKxCJwIxlC0fq2rq7tcVFRkRKskjh8/Lr0+kBjCCDV/knfdv3//WX19/R8IRRNemxlu4AXwKqM+EJwdj1HbPYSwh3sCPAJDABm2LLchCjS+5/kirKGhwWk0GrMuXrxYQuX9hm/XXTMXMY+srKwI5ApZrbYmZh7deEJhAUKjLe/pLTzSsCuHrK+1tbUJVe3P6upq87Vr174rKysrYHVj/uW+OH3IfEuw4F3ee/fuPQfAvwOs5yyE4CnlFOu7BWrTCWlreO6FACpBZGwUw4BvkANLobReHb3kGZYGsGzTq/zlO8AT1ru6uoZbWlqeA6gINJAfnz59OlVLoX8Jtebm5raampqfcMvQYgTknz9//sKVK1c+y83NTdIEuCnaKMuNGzd+6+np6cCtSTkAw9D9X8Dyh+dbgaaAC1XAnUlPTy+qqqq6cPbs2UzkmWjNljiDJzpwHFnCkW2yo6NjCKW8H54wjlezKvRT09LSTsJrz5w6dSoN+Yp51ADAPUj8VoDbDq9pxrwuJcNIYQllJTIi/xopBw/VA7DJp0+f9hA78CgL5F5C8J2CpoCj8sfA6WCe/FPRhsRlZmbGIs8Y4FFO5CJgtrSsvrRVGW1V93b1myoGnKAKEcHgnwsWpg1lNI0fphwrmdqbckeU18WrnlOjqp5/j7W3BWvfQVPKa5SBkcrYCNVB65TRTlWZ1lXiXVU5xbtlDb2SPaLWYwrgHIcqPg6Vc7fbX69Yoyqfa7/AeiegbWOEVhmsVcWDwPn224iDJgla8Hd38Hd3ELQgaIeI/hZgAIPEp0vmQJdoAAAAAElFTkSuQmCC) no-repeat 50% 0,
                url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAXCAYAAACFxybfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAodJREFUeNrsVb1rWlEUv2pN/GqspKRSKFYXWzEloIWif0Fn6dJChQ7OQil0qd3EzcEpg0OgdHDr4CQODk7VRlLMEIVqApX4We0zflR9/Z1Ui4T34ksaaAYP/Hzc673n/M6550PG8zz73yKjn0wm83fDYDAwo9HINBrNnwOQg4MDs0ql2lQqlfdAWont7ng8Pjw+Ps44nc4G1pI9EXWaSOzt7TGO42aH5Pv7+08ajUZ0MBiUeXEZd7vdL5VK5fX29rZ+5tQiEmdxKrlcjsEYczgcynK5/BKKv/IXFNz/XiqVXkHdjUuRIA9SqdRD8or/R8Ez9fr9fqHVakUR4c2z0REjIQuHw2ZcrPBXLCA0RHTezEdHjIQqkUhEr9I4HOILhQLf6/VoOUFEvDMiQiToDx1Cdz+bzZ6bUFarlel0OkkVUK/XWbvdPoVer5fh3ntsfwJ+CJ2XA4p0Op1bpBgJyxDehQQ6nQ5DZXHBYDBZq9V+EhFUndnr9drEqoc2bwJbwGPgtohuVSwWe2Gz2TZMJpNgRKi6qtUqg2EWj8dTgUDgo0KhWPN4PC70EvXOzs67fD6/S6kiRIKeZA1YJ2MiJNbdbvfTUCjkV6vVK2hcDF8GI2w0GrGTkxM2HA5PDxaLxSOfz/cWEfk81X0XIMMFgJJ/srBjCgk8IdcfuVyuZ36//7nFYtkQyAMumUzuRiKRD0jMFLa+AZOpYwqgB/ziBVqmVBKUO7eAB/R0WG/Z7XaTVqtdbTabHJL6EK2djBaBPHA0NSqpbUsiMUeEBgpF4Q5AbZrmSJ/yEWgBTaBNHl9kdkgmMUeG7qwAq9PqovceTA3zlxlgsuswyuXsGsiSxJLEkoSY/BZgAEjRodi+uBruAAAAAElFTkSuQmCC) no-repeat 100% 0;

            }
            .button:hover {
                background: #a61715;
                text-shadow: 0 1px 2px rgba(0,0,0,0.75), 0 0 40px #FFF;
                box-shadow:
                    inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                    inset 0 0 6px #da3b2c, /* inner glow */
                    inset 0 80px 80px -40px #dd4330, /* gradient */
                    1px 1px 3px rgba(0,0,0,0.75); /* shadow */

            }
            .button:focus {
                outline: none; /*FF*/
            }
            .button:active {
                box-shadow:
                    inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                    inset 0 0 6px #da3b2c, /* inner glow */
                    inset 0 80px 80px -40px #dd4330, /* gradient */
                    0px 1px 0px rgba(255,255,255,0.25); /* shadow */

                -webkit-transition: 50ms linear;
                -moz-transition: 50ms linear;
                -o-transition: 50ms linear;
                transition: 50ms linear;
            }


            /* other styles */
            .bg {
                width: 100%;
                height: 100%;
                display: table;
                background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNkMzU0NDgiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjNGExMTBjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
                background: -moz-radial-gradient(center, ellipse cover, #d35448 0%, #4a110c 100%); /* FF3.6+ */
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#d35448), color-stop(100%,#4a110c)); /* Chrome,Safari4+ */
                background: -webkit-radial-gradient(center, ellipse cover, #d35448 0%,#4a110c 100%); /* Chrome10+,Safari5.1+ */
                background: -o-radial-gradient(center, ellipse cover, #d35448 0%,#4a110c 100%); /* Opera 12+ */
                background: -ms-radial-gradient(center, ellipse cover, #d35448 0%,#4a110c 100%); /* IE10+ */
                background: radial-gradient(ellipse at center, #d35448 0%,#4a110c 100%); /* W3C */
            }
            /*
                border-image не поддерживается в IE10 и плохо работает в Opera :(

                border-image-source: url(data:image/png;base64,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);
                border-image-slice: 23 34 23 44;
                border-image-width: auto auto 0 auto;
                border-image-outset: 5px 0px 0px 2px;
                border-image-repeat: stretch;

            */
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{asset('media/Secret_Santa1.gif')}}" alt="">
                </div>

                <div class="links">
                    <a href="{{ route('login') }}" class="button">Login</a>
                </div>
            </div>
        </div>
    </body>
</html>
