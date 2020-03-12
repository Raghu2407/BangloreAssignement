<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/materialize.min.css" />
    <link rel="stylesheet" href="css/raghu.css" />
    <title>Assignment</title>
</head>

<body class="grey lighten-4">
    <header>
        <nav>
            <nav class="white">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Assignment</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="table.php">Table</a></li>
                    </ul>
                </div>

            </nav>
        </nav>
    </header>
    <main>
        <div id="user_table"></div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkEq_D3fMPXae93yBN8oCXg31qoZccorI&libraries=places&callback=initMap"
        type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        load_data();

        function load_data() {
            var action = "Load";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function(data) {
                    $('#user_table').html(data);
                }
            });
        }
    });
    </script>