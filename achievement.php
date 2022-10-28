<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes.php' ?>
    <script>
        $(document).ready(function(){
            //administration
            window.document.getElementById('2020_tab').click();
        });
    </script>
</head>
<body>
<!--    navigation bar-->
<?php include_once 'navigation.html'?>

<!--achievement-->
<div class="container">
    <h3 class="topic">Achievement</h3>
    <div class="tab">
        <button id="2020_tab" class="tablinks" onclick="openTab(event, 'one')">2019-20</button>
        <button id="2019_tab" class="tablinks" onclick="openTab(event, 'two')">2018-19</button>
    </div>
    <!--first tab-->
    <div id="one" class="tab_content">
        <div class="vertical_grid">
            <div>
                <figure class="figure">
                    <img src="media/Achievement/2020_1.jpeg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2019-20<br></h5>
                        <h5>Inter Hostel Cricket</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/2020_2.jpeg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2019-20</h5>
                        <h5>Inter Hostel Volleyball Competition</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/2020_3.jpeg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2019-20</h5>
                        <h5>Indian Chorus Singing Competition</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/2020_4.jpeg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2019-20</h5>
                        <h5>Western Chorus Singing Competition</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/2020_5.jpeg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Ist Runner UP 2019-20</h5>
                        <h5>March Past Competition</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/2020_6.jpeg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Ist runner up 2019-20</h5>
                        <h5>Inter Hostel Bihu Competition</h5>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
<!--    secont tab-->
    <div id="two" class="tab_content">
        <div class="vertical_grid">
            <div>
                <figure class="figure">
                    <img src="media/Achievement/1.jpg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2018-19<br></h5>
                        <h5>Inter Hostel Bihu 2019</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/4.jpg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2018-19</h5>
                        <h5>Inter Hostel Football Competition</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/5.jpg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2018-19</h5>
                        <h5>Inter Hostel Volleyball Competition</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/6.jpg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>Champion 2018-19</h5>
                        <h5>Inter Hostel Group Song</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/3.jpg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>runner's up 2018-19</h5>
                        <h5>Inter Hostel Wall Magazine Competition</h5>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="figure">
                    <img src="media/Achievement/2.jpg" class="img-fluid img-thumbnail">
                    <figcaption class="figure-caption">
                        <h5>II runner's up 2018-19</h5>
                        <h5>Inter Hostel Cultural Rally Competition</h5>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<?php include_once 'footer.php' ?>

</body>
</html>