<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="{{ asset('/web/js') }}/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('/web/js') }}/jquery.SuperSlide.2.1.1.js"></script>
    <style>

        /* css 重置 */
        * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        body {
            background: #fff;
            font: normal 12px/22px 宋体;
        }

        img {
            border: 0;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #1974A1;
        }

        .js {
            width: 90%;
            margin: 10px auto 0 auto;
        }

        .js p {
            padding: 5px 0;
            font-weight: bold;
            overflow: hidden;
        }

        .js p span {
            float: right;
        }

        .js p span a {
            color: #f00;
            text-decoration: underline;
        }

        .js textarea {
            height: 100px;
            width: 98%;
            padding: 5px;
            border: 1px solid #ccc;
            border-top: 2px solid #aaa;
            border-left: 2px solid #aaa;
        }

        /* 本例子css */
        .picFocus {
            margin: 0 auto;
            padding: 5px;
            position: relative;
            overflow: hidden;
            zoom: 1;
        }

        .picFocus .hd {
            width: 100%;
            padding-top: 5px;
            overflow: hidden;
        }

        .picFocus .hd ul {
            margin-right: -5px;
            overflow: hidden;
            zoom: 1;
            text-align: center;
        }

        .picFocus .hd ul li {
            padding-top: 5px;
            text-align: center;
            display: inline-block;
        }

        .picFocus .hd ul li img {
            width: 200px;
            border: 2px solid #ddd;
            cursor: pointer;
            margin-right: 5px;
        }

        .picFocus .hd ul li.on {
            background: url("{{ asset('/web/images') }}/icoUp.gif") no-repeat center 0;
        }

        .picFocus .hd ul li.on img {
            border-color: #f60;
        }

        .picFocus .bd li {
            vertical-align: middle;
        }

        .picFocus .bd img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
        }
        .picFocus .prev{
            position: absolute;
            left: 50px;
            top: 50%;
            margin-top: -110px;
        }
        .picFocus .next{
            position: absolute;
            right: 50px;
            top: 50%;
            margin-top: -110px;
        }

    </style>
</head>
<body>

<div class="picFocus">
    <div class="bd">
        <div class="tempWrap">
            <ul>
                <li>
                    <a href="javascript:;">
                        <img src="{{ asset('/web/images') }}/banner1.jpg">
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="{{ asset('/web/images') }}/banner2.jpg">
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="{{ asset('/web/images') }}/banner3.jpg">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="hd">
        <ul>
            <li><img src="{{ asset('/web/images') }}/banner1.jpg"></li>
            <li><img src="{{ asset('/web/images') }}/banner2.jpg"></li>
            <li><img src="{{ asset('/web/images') }}/banner3.jpg"></li>
        </ul>
    </div>

    <div class="prev"><img src="{{ asset('/web/images') }}/arrow-prev.png" alt=""></div>
    <div class="next"><img src="{{ asset('/web/images') }}/arrow-next.png" alt=""></div>

</div>


<script>
    (function ($) {
        $(function () {
            jQuery(".picFocus").slide(
                    {
                        mainCell: ".bd ul",
                        effect: "left",
                        autoPlay: true,
                        prevCell:'.prev'
                    }
            );
        })
    })(jQuery);
</script>

</body>
</html>