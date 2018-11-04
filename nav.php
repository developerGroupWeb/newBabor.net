<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        body{
            font-family: Verdana;
            font-size: 18px;
            margin: 0 auto;
        }

        #babor{
            border: 1px solid black;
            width: 25%;
            position: relative;
            left: -264px;
        }
        #babor ul{
            list-style: none;
        }

        #babor ul > li a{
            display: block;
            text-decoration: none;
            text-align: center;
            height: 35px;
            line-height: 35px;
            width: 220px;
            background-color: green;
            color: black;
            border: 1px solid navy;
        }
    </style>
</head>
<body>

<div id="babor">
    <ul class="menuNavHover">
        <li><a href="">Menu Item 1</a></li>
        <li><a href="">Menu Item 2</a></li>
        <li><a href="">Menu Item 3</a></li>
        <li><a href="">Menu Item 4</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
        <li><a href="">Menu Item 5</a></li>
    </ul>
</div>

<script>
    $(function () {

        $('#babor ul > li').hide();
        $('#babor').height('100%');

        $('#babor').hover(
            function () {
                $(this).stop().animate({
                        position: 'relative',
                        left: '0px',
                    }, 600, 'linear',
                    function () {
                        $(this).css('backgroundColor', 'orange');
                        $('#babor ul > li').slideDown(600).fadeIn(600);
                    }
                ).css('background', 'black');

            },
            function () {
                $('#babor ul > li').slideUp(600).fadeOut(600);
                
                $(this).stop().animate({
                        position: 'relative',
                        left: '-264px',
                    }, 500,'linear',
                    function () {
                        $(this).css('backgroundColor', 'white');
                    }
                ).css('background', 'blue');

            }
        );
    })
</script>
</body>