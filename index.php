<?php include_once("template/heading.php"); ?>

<style>
    body {
        background-image: url('img/r.jpg');
        /* Replace with the path to your roses image */
        background-size: cover;
        background-attachment: fixed;
        animation: backgroundScroll 10s linear infinite;
    }

    @keyframes backgroundScroll {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 0 100%;
        }
    }

    .container {
        background-color: rgba(255, 255, 255, 0.17);
        backdrop-filter: blur(2);
        /* Add a semi-transparent background for readability */
        padding: 20px;
        border-radius: 10px;
        color: white;
        font-weight: 700;
    }
</style>

<body>
    <?php include_once("template/nav.php"); ?>
    <div class="container mt-5">
        <h2 class="text-center mt-2">The Rose in Bloom: A Symbol of Love, Sacrifice, and Divine Inspiration</h2>
        <div class="row">
            <div class="col-md-4">
                <p>The Rose in full bloom represents love, the source of all good desires and actions, even if at times this means loving
                    sacrifice, as represented by the thorns. The rose has a supernatural meaning too. Love, with capital letters, is the love
                    of God. <br>The rose also has a historical meaning associated with the life of Saint Josemaría Escrivá, founder of Opus Dei,
                    who inspired and encouraged the people who started Strathmore: he once received a divine sign in the form of a carved gilded rose in a very trying moment of his life.</p>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <p>The Rose in full bloom represents love, the source of all good desires and actions, even if at times this means loving
                    sacrifice, as represented by the thorns. The rose has a supernatural meaning too. Love, with capital letters, is the love
                    of God. <br>The rose also has a historical meaning associated with the life of Saint Josemaría Escrivá, founder of Opus Dei,
                    who inspired and encouraged the people who started Strathmore: he once received a divine sign in the form of a carved gilded rose in a very trying moment of his life.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>The Rose in full bloom represents love, the source of all good desires and actions, even if at times this means loving
                    sacrifice, as represented by the thorns. The rose has a supernatural meaning too. Love, with capital letters, is the love
                    of God. <br>The rose also has a historical meaning associated with the life of Saint Josemaría Escrivá, founder of Opus Dei,
                    who inspired and encouraged the people who started Strathmore: he once received a divine sign in the form of a carved gilded rose in a very trying moment of his life.</p>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <p>The Rose in full bloom represents love, the source of all good desires and actions, even if at times this means loving
                    sacrifice, as represented by the thorns. The rose has a supernatural meaning too. Love, with capital letters, is the love
                    of God. <br>The rose also has a historical meaning associated with the life of Saint Josemaría Escrivá, founder of Opus Dei,
                    who inspired and encouraged the people who started Strathmore: he once received a divine sign in the form of a carved gilded rose in a very trying moment of his life.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-center">Of Code and Petals: Where Urban Grit Meets Eternal Bloom</h2>
                <img class="img-responsive rounded-5" src="img/Street.jpg" alt="Street Image" width="40%">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-7">
                <h2>My Favourite Programming Languages</h2>
                <ul class="list-group opacity-75 mt-3">
                    <li class="list-group-item active" aria-current="true">Java</li>
                    <li class="list-group-item">SQL</li>
                    <li class="list-group-item">PHP</li>
                    <li class="list-group-item">Javascript</li>
                    <li class="list-group-item">C++</li>
                    <li class="list-group-item">Python</li>
                </ul>
            </div>
            <div class="col-md-5">
                <h2 class="text-center">My Favourite Colors</h2>
                <ol class="list-group mt-3 opacity-75 list-group-numbered">
                    <li class="list-group-item active">Black</li>
                    <li class="list-group-item">Blue</li>
                    <li class="list-group-item">White</li>
                    <li class="list-group-item">Green</li>
                    <li class="list-group-item">Grey</li>
                    <li class="list-group-item">Red</li>

                </ol>
            </div>
        </div>


        <hr>
        <div class="row">
            <h2 class="text-center">Back to school requirements</h2>
            <table class="table opacity-75">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Quantity</td>
                        <td>Unit Price</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Pen</td>
                        <td>200</td>
                        <td>5 Ksh</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Book</td>
                        <td>264</td>
                        <td>250 Ksh</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Ruler</td>
                        <td>58</td>
                        <td>10 Ksh</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Pen</td>
                        <td>200</td>
                        <td>5 Ksh</td>
                    </tr>

                    <tr>
                        <td>5.</td>
                        <td>Book</td>
                        <td>264</td>
                        <td>250 Ksh</td>
                    </tr>

                    <tr>
                        <td>6.</td>
                        <td>Ruler</td>
                        <td>58</td>
                        <td>10 Ksh</td>
                    </tr>
                    <tr>
                        <th class="table-active" colspan="3">Total</th>
                        <th>530 Ksh</th>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

    <div class="sidebar">
        <h4>Side Bar</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    </div>
    </div>


    <?php include_once("template/footer.php"); ?>

</body>

</html>
