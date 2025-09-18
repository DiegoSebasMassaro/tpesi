<?php require "partials/header.php" ?>





    <div class="container text-center mt-5">
        <div class="row">
            <h1 class="text-center  text-success">BIENVENIDOS A LA CLASE ESI: "LOS FRIKIS"</h1>
            <div class="col">
                <form action="palabras-def.php" method="POST">
                    <label for="valor" >Eligir palabra</label>
                    <select name="valor" id="valor">
                        <option value="Igualdad">Igualdad</option>
                        <option value="Derecho">Derecho</option>
                        <option value="Diversidad">Diversidad</option>

                    </select>

                    <input type="submit" value="ver mensaje" class= "btn btn-success">


                </form>
            </div>
        </div>

        <div class="container text-center mt-5">
            <div class="row">
                <div class="col">
                    <!--       <input type="submit" value="Creditos"> -->

                    <a href="creditos.php" class="mt-3 btn btn-success">Creditos</a>

                </div>
                <div class="col">
<!--                     <input type="submit" value="GITHUB">
 --> 
                    <a href="GITHUB.php" class="mt-3 btn btn-success">GITHUB</a>

                </div>
            </div>







            <?php require "partials/footer.php" ?>