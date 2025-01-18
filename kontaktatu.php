<!DOCTYPE html>
<html>
<?php
require_once("head.php")
    ?>
<div class="irudiak" style="align-self: center;
    align-items: center;
    margin-left: 15%;">
    <?php

    require_once("db.php");

    $conn = konexioaSortu();

    $kontsulta = "SELECT izenAbizenak, irudia  FROM enplegatuak";
    $result = $conn->query($kontsulta);
    $ruta = "./Enplegatuak/";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<img src= $ruta" . $row['irudia'] . ' alt="" width="200px" style="margin-right: 20px; margin-left: 20px; margin-top: 20px;">';
            echo $row["izenAbizenak"];

        }
    } else {
        echo "Ez dago informaziorik";
    }
    $conn->close();
    ?>
</div>
<div class="osoa">
    <div>
        <div class="kontaktuinfo">
            <span class="fa fa-phone" style="font-size: 40px;"></span> <span class="kontaktuak">613587943</span>
            <br><br><br>
            <i class="material-icons" style="font-size:36px">email</i> <span
                class="kontaktuak">info@secondlife.com</span>
        </div>

        <div class="formularioa">
            <form action="" method="get">
                <h1>Kontaktatu</h1> <br>

                <label for="izena">Izena*</label>
                <input type="text" name="izena" id="izena" required> <br> <br>
                <label for="abizena">Abizena</label>
                <input type="text" name="abizena" id="abizena"> <br> <br>
                <label for="telefonoa">Telefonoa*</label>
                <input type="tel" name="telefonoa" id="telefonoa" placeholder="+34 6xxxxxxx" required> <br> <br>
                <label for="emaila">Emaila*</label>
                <input type="email" name="emaila" id="emaila" pattern=".+@.+\..+" required> <br> <br>

                <label for="informazioajaso"><strong> Nola jaso nahi duzu informazioa?*</strong></label> <br> <br>

                <input type="radio" name="informazioajaso" id="telefonozjaso" checked value="telefonoz">
                <label for="informazioajaso">Telefono bidez</label> <br>



                <input type="radio" name="informazioajaso" id="emailezjaso" value="emailez">
                <label for="informazioajaso">Email bidez</label> <br> <br>

                <label for="errorea">Akats mota*</label>
                <select id="arazoa">
                    <option disabled selected>Arazoa</option>
                    <option value="bueltatu">Gailua bueltatu nahi dut</option>
                    <option value="konponketa">Arazo bat konpondu nahi du</option>
                    <option value="bestelakoa">Beste arazo bat</option>
                </select> <br> <br>

                <label for="explikazioa">Esplikatu zure arazoa</label> <br>
                <textarea type="textarea" name="explikazioa" id="explikazioa" class="explikaziokaxa"></textarea>
                <br>
                <br>
                <div class="kontaktatubotoiak">
                    <input type="submit" name="bidali" value="Bidali" class="bidalibotoia">
                    <input type="reset" value="Garbitu" class="ezabatubotoia">
                </div>
            </form>
        </div>
    </div>

    <?php
    require_once("footer.php")
        ?>

</div>

</body>

</html>